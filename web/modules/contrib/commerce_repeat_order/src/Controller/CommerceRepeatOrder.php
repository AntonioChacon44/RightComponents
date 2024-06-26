<?php

namespace Drupal\commerce_repeat_order\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\commerce_cart\CartManager;
use Drupal\commerce_cart\CartProvider;
use Drupal\commerce_order\Entity\Order;
use Drupal\commerce_repeat_order\Event\OrderCloneEvent;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Controller to create repeat order.
 */
class CommerceRepeatOrder extends ControllerBase {

  /**
   * The current order.
   *
   * @var \Drupal\commerce_order\Entity\Order
   */
  protected $order;

  /**
   * The cart manager.
   *
   * @var \Drupal\commerce_cart\CartManager
   */
  protected $cartManager;

  /**
   * The cart provider.
   *
   * @var \Drupal\commerce_cart\CartProvider
   */
  protected $cartProvider;

  /**
   * The symfony event dispatcher.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  protected $dispatcher;

  /**
   * The messenger service.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;

  /**
   * CommerceRepeatOrder constructor.
   *
   * @param \Drupal\commerce_cart\CartManager $cartManager
   *   The Commerce cart manager.
   * @param \Drupal\commerce_cart\CartProvider $cartProvider
   *   The Commerce cart provider.
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger service.
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   */
  public function __construct(CartManager $cartManager, CartProvider $cartProvider, MessengerInterface $messenger, EventDispatcherInterface $event_dispatcher) {
    $this->cartManager = $cartManager;
    $this->cartProvider = $cartProvider;
    $this->messenger = $messenger;
    $this->dispatcher = $event_dispatcher;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
        $container->get('commerce_cart.cart_manager'),
        $container->get('commerce_cart.cart_provider'),
        $container->get('messenger'),
        $container->get('event_dispatcher')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function repeatOrder(Order $commerce_order) {
    $this->order = $commerce_order;

    // The current user ID.
    $uid = $this->currentUser()->id();
    $order_uid = $this->order->getCustomerId();

    if (!empty($order_uid) && $uid == $order_uid) {
      // Loading config for module.
      $config = $this->config('commerce_repeat_order.settings');
      $add_or_override = $config->get('add_or_override');

      // Loading existing cart.
      $cart = $this->cartProvider->getCart('default', $this->order->getStore());
      if (empty($cart)) {
        // Creating new cart is there is none.
        $cart = $this->cartProvider->createCart('default', $this->order->getStore());
      }
      elseif ($add_or_override == 'override') {
        $this->cartManager->emptyCart($cart);
      }

      foreach ($this->order->getItems() as $order_item) {
        // Creating new duplicate order item for adding in cart.
        /** @var \Drupal\commerce_product\Entity\ProductVariationInterface $variation */
        $variation = $order_item->getPurchasedEntity();
        $product = $variation ? $variation->getProduct() : NULL;
        if ($product && $product->isPublished()) {
          /** @var \Drupal\commerce_order\Entity\OrderItemInterface $order_item_new */
          $order_item_new = $order_item->createDuplicate();
          $order_item_new->enforceIsNew();
          $order_item_new->id = NULL;
          $order_item_new->order_item_id = NULL;
          $order_item_new->save();

          // Adding order item in cart.
          $this->cartManager->addOrderItem($cart, $order_item_new);
        }
        else {
          $message = t("Some products weren't copied to the cart as they aren't currently available.");
        }

        // Dispatch an event so that modules can act on the order clone event.
        $this->dispatcher->dispatch(OrderCloneEvent::ORDER_CLONED, new OrderCloneEvent($this->order, $cart));
      }
      if (isset($message) && ($config->get('status_message') == 'show')) {
        $this->messenger->addStatus($message);
      }
    }
    else {
      $this->messenger->addError(t('You can only repeat your own order.'));
    }
    return $this->redirect('commerce_cart.page');
  }

}
