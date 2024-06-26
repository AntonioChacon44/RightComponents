<?php

namespace Drupal\commerce_repeat_order\Event;

use Drupal\commerce_order\Entity\OrderInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Wraps an order clone event for event listeners.
 */
class OrderCloneEvent extends Event {
  const ORDER_CLONED = 'commerce_repeat_order.order_cloned';

  /**
   * Original order entity.
   *
   * @var \Drupal\commerce_order\Entity\OrderInterface
   */
  protected $original;

  /**
   * New order entity.
   *
   * @var \Drupal\commerce_order\Entity\OrderInterface
   */
  protected $new;

  /**
   * Constructs a node insertion demo event object.
   *
   * @param \Drupal\commerce_order\Entity\OrderInterface $original
   *   The old order.
   * @param \Drupal\commerce_order\Entity\OrderInterface $new
   *   The new order.
   */
  public function __construct(OrderInterface $original, OrderInterface $new) {
    $this->original = $original;
    $this->new = $new;
  }

  /**
   * Get the original order.
   *
   * @return \Drupal\commerce_order\Entity\OrderInterface
   *   The order entity.
   */
  public function getOriginal() {
    return $this->original;
  }

  /**
   * Get the new order.
   *
   * @return \Drupal\commerce_order\Entity\OrderInterface
   *   The order entity.
   */
  public function getNew() {
    return $this->new;
  }

}
