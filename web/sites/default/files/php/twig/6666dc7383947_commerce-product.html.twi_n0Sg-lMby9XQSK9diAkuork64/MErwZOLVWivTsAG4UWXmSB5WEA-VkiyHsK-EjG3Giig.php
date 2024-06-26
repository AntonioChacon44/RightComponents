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

/* themes/contrib/bootstrap/templates/commerce/commerce-product.html.twig */
class __TwigTemplate_428d9311eb8d2833d14181be6986def4 extends \Twig\Template
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
        // line 26
        echo "
<style type=\"text/css\">
\t.page-header {
\tdisplay: none;
\t}
</style>

<article";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source), "html", null, true);
        echo ">
  ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 34, $this->source), "html", null, true);
        echo "
  ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 35, $this->source), "html", null, true);
        echo "
  ";
        // line 37
        echo "</article>

<div class=\"col-md-6\">

  ";
        // line 41
        $context["preciodeventa"] = twig_replace_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_field_precio_de_venta", [], "any", false, false, true, 41), 0, [], "any", false, false, true, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null), 41, $this->source), [" €" => ""]);
        // line 42
        echo "  ";
        $context["preciooriginal"] = twig_replace_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 42), 0, [], "any", false, false, true, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#markup"] ?? null) : null), 42, $this->source), [" €" => ""]);
        // line 43
        echo "
  ";
        // line 44
        $context["is_MSI"] = false;
        // line 45
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_marca_portatil", [], "any", false, false, true, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 46
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["term"], "entity", [], "any", false, false, true, 46), "name", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46) == "MSI")) {
                // line 47
                echo "      ";
                $context["is_MSI"] = true;
                // line 48
                echo "    ";
            }
            // line 49
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
  ";
        // line 51
        if (($context["is_MSI"] ?? null)) {
            // line 52
            echo "    <span class=\"badge-offer\"><b> - 20%</b></span>
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_field_imagen_categoria", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
</div>

<div class=\"col-md-6\">
  <h3>";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</h3>
  <br>
  ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_categoria", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
  ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_marca_portatil", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
  <br>
  ";
        // line 64
        $context["is_MSI"] = false;
        // line 65
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_marca_portatil", [], "any", false, false, true, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 66
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["term"], "entity", [], "any", false, false, true, 66), "name", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66) == "MSI")) {
                // line 67
                echo "      ";
                $context["is_MSI"] = true;
                // line 68
                echo "    ";
            }
            // line 69
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  ";
        if (($context["is_MSI"] ?? null)) {
            // line 71
            echo "    <div class=\"price-wrap h5 divpreciodetalle\">
      <span class=\"price-new\">";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_field_precio_de_venta", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "</span>
      <del class=\"price-old\">";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</del>
    </div>

    <style type=\"text/css\">
      .divpreciodetalle {
        margin: auto;
        display: inline-block;
      }

      .divpreciodetalle .price-new {
        float: left;
      }

      .divpreciodetalle .price-old {
        float: left;
      }

    </style>
  ";
        } else {
            // line 92
            echo "    <div class=\"price-wrap h5\" style=\"color: red;\">
      <span class=\"price-new\">";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        // line 96
        echo "
  <br>

   <span>  <i class=\"fas fa-eye\"></i> ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visitas"] ?? null), 99, $this->source), "html", null, true);
        echo " Visita(s) </span>
    <br>
    <span><i class=\"fas fa-shopping-cart\"></i> ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ventas"] ?? null), 101, $this->source), 0, "", ""), "html", null, true);
        echo " Venta(s)</span>

  <br>
  <br>
  ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_descripcion_corta", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
  <br>
  ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variations", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "
</div>


<div class= \"row col-md-12\">

\t <ul class=\"nav nav-tabs\">
     ";
        // line 114
        if ( !twig_test_empty(twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 114))))) {
            // line 115
            echo "\t  <li class=\"active\"><a data-toggle=\"tab\" href=\"#Descripcion\">Descripción</a></li>
     ";
        }
        // line 117
        echo "     ";
        if ( !twig_test_empty(twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_especificaciones", [], "any", false, false, true, 117))))) {
            // line 118
            echo "\t  <li><a data-toggle=\"tab\" href=\"#especificaciones\">Especificaciones</a></li>
     ";
        }
        // line 120
        echo "\t</ul>

\t<div class=\"tab-content\">
\t  <div id=\"Descripcion\" class=\"tab-pane fade in active\">
\t    <h3>Descripción</h3>
\t    <p>";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
        echo "</p>
\t  </div>
\t  <div id=\"especificaciones\" class=\"tab-pane fade\">
\t    <h3>Especificaciones</h3>
\t    <p>";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_especificaciones", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "</p>
\t  </div>
\t</div>

</div>

<div class=\"itemlist row col-md-12\">
  ";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["productosrecomendadosportatiles"] ?? null), 136, $this->source), "html", null, true);
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/commerce/commerce-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 136,  251 => 129,  244 => 125,  237 => 120,  233 => 118,  230 => 117,  226 => 115,  224 => 114,  214 => 107,  209 => 105,  202 => 101,  197 => 99,  192 => 96,  186 => 93,  183 => 92,  161 => 73,  157 => 72,  154 => 71,  151 => 70,  145 => 69,  142 => 68,  139 => 67,  136 => 66,  131 => 65,  129 => 64,  124 => 62,  120 => 61,  115 => 59,  108 => 55,  105 => 54,  101 => 52,  99 => 51,  96 => 50,  90 => 49,  87 => 48,  84 => 47,  81 => 46,  76 => 45,  74 => 44,  71 => 43,  68 => 42,  66 => 41,  60 => 37,  56 => 35,  52 => 34,  48 => 33,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/commerce/commerce-product.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/commerce/commerce-product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "for" => 45, "if" => 46);
        static $filters = array("escape" => 33, "replace" => 41, "number_format" => 101, "trim" => 114, "render" => 114);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'replace', 'number_format', 'trim', 'render'],
                []
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
