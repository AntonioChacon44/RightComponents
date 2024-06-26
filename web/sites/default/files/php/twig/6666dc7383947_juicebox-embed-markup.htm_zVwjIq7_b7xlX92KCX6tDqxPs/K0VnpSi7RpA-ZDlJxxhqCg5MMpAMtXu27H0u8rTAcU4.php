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

/* modules/juicebox/templates/juicebox-embed-markup.html.twig */
class __TwigTemplate_82396918b72abf7853dd17482ea929e8 extends \Twig\Template
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
        // line 18
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "html", null, true);
        echo ">
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 19, $this->source), "html", null, true);
        echo "
  <div id=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gallery_id"] ?? null), 20, $this->source), "html", null, true);
        echo "\" class=\"juicebox-container\">
    <noscript>
      <!-- Image gallery content for non-javascript devices -->
      ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["gallery_options"] ?? null), "gallerytitle", [], "any", true, true, true, 23)) {
            // line 24
            echo "      <h1 class=\"jb-name\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery_options"] ?? null), "gallerytitle", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</h1>
      ";
        }
        // line 26
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["gallery_options"] ?? null), "gallerydescription", [], "any", true, true, true, 26)) {
            // line 27
            echo "      <p class=\"jb-description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery_options"] ?? null), "gallerydescription", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 29
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 30
            echo "      <p class=\"jb-image\">
        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "image_plain", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "<br/>
        <span class=\"jb-title\">";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</span><br/>
        <span class=\"jb-caption\">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</span>
      </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </noscript>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/juicebox/templates/juicebox-embed-markup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  87 => 33,  83 => 32,  79 => 31,  76 => 30,  71 => 29,  65 => 27,  62 => 26,  56 => 24,  54 => 23,  48 => 20,  44 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/juicebox/templates/juicebox-embed-markup.html.twig", "/var/www/html/web/modules/juicebox/templates/juicebox-embed-markup.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "for" => 29);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
