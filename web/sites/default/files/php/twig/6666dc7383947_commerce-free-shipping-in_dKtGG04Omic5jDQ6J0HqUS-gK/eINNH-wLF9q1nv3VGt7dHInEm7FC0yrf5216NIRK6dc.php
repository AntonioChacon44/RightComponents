<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/commerce_free_shipping_indicator/templates/commerce-free-shipping-indicator-block.html.twig */
class __TwigTemplate_198483d02d2c79211ec8fcccdd241bf6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("commerce_free_shipping_indicator/free_shipping_indicator_styles"), "html", null, true);
        echo "
<div class=\"free-shipping-block-container\">
  ";
        // line 19
        if (($context["amount_left"] ?? null)) {
            // line 20
            echo "    <div class=\"free-shipping-label ineligible\">
      ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["ineligible_for_free_shipping"] ?? null), 21, $this->source), ["@free-shipping-amount" => ("€" . $this->sandbox->ensureToStringAllowed(($context["free_shipping_amount"] ?? null), 21, $this->source)), "@amount-left" => ($this->sandbox->ensureToStringAllowed(($context["amount_left"] ?? null), 21, $this->source) . "€")]));
            echo "
      <span>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("aun quedan @amount-left mas para el envío gratuito.", ["@amount-left" => ($this->sandbox->ensureToStringAllowed(($context["amount_left"] ?? null), 22, $this->source) . "€")]));
            echo "</span>
      <div class=\"continue-shopping-button\">
        <a href=\"/\" class=\"button\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Continuar comprando"));
            echo "</a>
      </div>
    </div>
  ";
        } else {
            // line 28
            echo "    <div class=\"free-shipping-label eligible\">
      ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["eligible_for_free_shipping"] ?? null), 29, $this->source), ["@free-shipping-amount" => ("€" . $this->sandbox->ensureToStringAllowed(($context["free_shipping_amount"] ?? null), 29, $this->source))]));
            echo "
    </div>
  ";
        }
        // line 32
        echo "</div>
<div class=\"free-shipping-indicator\" style=\"background: linear-gradient(90deg, #ebe822 0%, #057125 ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percentage"] ?? null), 33, $this->source), "html", null, true);
        echo "%, #d6d6d6 0%)\"></div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce_free_shipping_indicator/templates/commerce-free-shipping-indicator-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 33,  77 => 32,  71 => 29,  68 => 28,  61 => 24,  56 => 22,  52 => 21,  49 => 20,  47 => 19,  42 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce_free_shipping_indicator/templates/commerce-free-shipping-indicator-block.html.twig", "/var/www/html/web/modules/contrib/commerce_free_shipping_indicator/templates/commerce-free-shipping-indicator-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 17, "t" => 21);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
