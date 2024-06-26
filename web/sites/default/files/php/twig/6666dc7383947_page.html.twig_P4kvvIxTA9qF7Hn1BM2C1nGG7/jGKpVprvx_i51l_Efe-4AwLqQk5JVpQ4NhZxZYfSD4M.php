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

/* themes/contrib/bootstrap/templates/system/page.html.twig */
class __TwigTemplate_d104789aa9714a8a19c87aae68aa521f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iconos' => [$this, 'block_iconos'],
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "

";
        // line 57
        echo "
<header class=\"section-header\">
  <nav class=\"navbar-top navbar-light  d-sm-block bg2\">
    <div class=\"container\">
      <ul class=\"iconosderedessociales nav float-left\">
        <li><a href=\"#\" class=\"nav-link\"> <i class=\"fab fa-facebook\"></i> </a></li>
        <li><a href=\"https://www.instagram.com/antoniocs4_/\" class=\"nav-link\"> <i class=\"fab fa-instagram\"></i> </a></li>
        <li><a href=\"https://x.com/Antonio_Happy44\" class=\"nav-link\"> <i class=\"fab fa-twitter\"></i> </a></li>
        <li>
          <a  href=\"#\" class=\"nav-link\"> <i class=\"fa fa-phone\"></i> Call us: 697 42 83 14 </a>
        </li>
      </ul> <!-- list-inline //  -->

      <ul class=\"nav nav-top float-right\">
        <li><a href=\"";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 71, $this->source), "html", null, true);
        echo "delivery\" class=\"nav-link\" > Delivery </a></li>
        <li><a href=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 72, $this->source), "html", null, true);
        echo "ayuda\" class=\"nav-link\" > Ayuda </a></li>


      </ul> <!-- list-inline //  -->

    </div> <!-- container //  -->
  </nav> <!--  header-top navbar //  -->

  <section class=\"header-main shadow\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-lg-3 col-sm-4\">
          <div class=\"brand-wrap\">

            ";
        // line 87
        echo "
            ";
        // line 88
        if (($context["site_logo"] ?? null)) {
            // line 89
            echo "              <div class=\"tituloylogo\">
                <a class=\"logo navbar-btn pull-left\" href=\"";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
                  <img src=\"";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 91, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
                </a>
              </div>
            ";
        }
        // line 95
        echo "            ";
        if (($context["site_name"] ?? null)) {
            // line 96
            echo "              <div class=\"tituloylogo\">
                <a class=\"name navbar-brand\" href=\"";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 97, $this->source), "html", null, true);
            echo "</a>
              </div>

            ";
        }
        // line 101
        echo "

            ";
        // line 103
        if (($context["site_slogan"] ?? null)) {
            // line 104
            echo "              <div class=\"slogan\">
                <p class=\"navbar-text\">";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 105, $this->source), "html", null, true);
            echo "</p>
                ";
            // line 108
            echo "              </div>
            ";
        }
        // line 110
        echo "


          </div> <!-- brand-wrap.// -->
        </div>
        <div class=\"col-lg-5 col-sm-8\">
          <form action=\"";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "/vistaporcategoria\" method=\"get\"  class=\"search-wrap\">
            <div class=\"input-group w-100\">
              <input type=\"text\" id=\"titulo\" name=\"titulo\" class=\"form-control\" style=\"width:55%;\" placeholder=\"Buscar\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"submit\">
                  <i class=\"fa fa-search\"></i>
                </button>
              </div>
            </div>
          </form> <!-- search-wrap .end// -->
        </div> <!-- col.// -->
        <div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12\">
          <div class=\"widgets-wrap \">

            ";
        // line 131
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "iconos", [], "any", false, false, true, 131)) {
            // line 132
            echo "              ";
            $this->displayBlock('iconos', $context, $blocks);
            // line 137
            echo "            ";
        }
        // line 138
        echo "
          </div> <!-- widgets-wrap.// -->
        </div> <!-- col.// -->
      </div> <!-- row.// -->
    </div> <!-- container.// -->
  </section> <!-- header-main .// -->
</header> <!-- section-header.// -->


<div class=\"row\"> </div>
<br>


";
        // line 152
        echo "





";
        // line 158
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 158), "fluid_container", [], "any", false, false, true, 158)) ? ("container-fluid") : ("container"));
        // line 160
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 160) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 160))) {
            // line 161
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 198
        echo "
";
        // line 200
        $this->displayBlock('main', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 266)) {
            // line 267
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 273
        echo "
";
        // line 275
        echo "
<br>

<footer id=\"footer\" class=\"bg2\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6 col-md-3\">
        <div class=\"widget widget_text\">

          <h3 class=\"widget-title\"><img src=\"";
        // line 284
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 284, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\" />RightComponents</h3>
          <div class=\"textwidget\">
            <p>Estamos ubicados en la colalidad 123 de la avenida 123 del pueblo 123 de la ciudad 112.
              <br>
              <strong>Llamanos al teléfono:</strong> <a href=\"tel:+12345689\">(123) 456.789</a><br>
            </p>
          </div>
        </div>
      </div>
      <div class=\"col-sm-6 col-md-3\">
        <div class=\"widget widget_archive\">

          <ul>
            <h3>Enlaces Importantes</h3>
            <li><a href=\"";
        // line 298
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\"> Acerca de Nosotros </a></li>
            <li><a href=\"";
        // line 299
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "/contact\"> Contactanos </a></li>

          </ul>
        </div>
      </div>
      <div class=\"col-sm-6 col-md-3\">
        <div class=\"widget widget_archive\">

          <ul>
            <h3>Categorias</h3>
            <li><a href=\"";
        // line 309
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 310
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "/vistaporcategoria/1\">Portátiles</a></li>
            <li><a href=\"";
        // line 311
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "/vistaporcategoria/2\">Torres</a></li>
            <li><a href=\"";
        // line 312
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "/vistaporcategoria/3\">Componentes</a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-sm-6 col-md-3\">
        <h3>Siguenos en</h3>
        <ul class=\"iconosderedessociales nav float-lef\">
          <li><a href=\"#\" class=\"nav-link\"> <i class=\"fab fa-facebook\"></i> </a></li>
          <li><a href=\"https://www.instagram.com/antoniocs4_/\" class=\"nav-link\"> <i class=\"fab fa-instagram\"></i> </a></li>
          <li><a href=\"https://x.com/Antonio_Happy44\" class=\"nav-link\"> <i class=\"fab fa-twitter\"></i> </a></li>

        </ul> <!-- list-inline //  -->


      </div>
    </div>


  </div>
  <div class=\"container\">
    <div class=\"row\">
      <p>
      <div class=\"copyright\" align=\"center\">
        <p>          Copyright © 2024
          <a href=\"";
        // line 336
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\">RightComponents</a>
          Todos los derechos reservados.
        </p>
        <span>Funciona con <a href=\"https://www.drupal.org\">Drupal</a></span>
      </div>
      </p>
    </div>
  </div>

</footer>


";
    }

    // line 132
    public function block_iconos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                <aside class=\"pageiconos\" role=\"complementary\">
                  ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "iconos", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "
                </aside>
              ";
    }

    // line 161
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "    ";
        // line 163
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 165
($context["theme"] ?? null), "settings", [], "any", false, false, true, 165), "navbar_inverse", [], "any", false, false, true, 165)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 166
($context["theme"] ?? null), "settings", [], "any", false, false, true, 166), "navbar_position", [], "any", false, false, true, 166)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 166), "navbar_position", [], "any", false, false, true, 166), 166, $this->source)))) : (($context["container"] ?? null)))];
        // line 169
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 169), 169, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 170
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 170)) {
            // line 171
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 171, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 173
        echo "      <div class=\"navbar-header\">
        ";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
        echo "
        ";
        // line 176
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 176)) {
            // line 177
            echo "          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 178
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 184
        echo "      </div>

      ";
        // line 187
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 187)) {
            // line 188
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 192
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 192)) {
            // line 193
            echo "        </div>
      ";
        }
        // line 195
        echo "    </header>
  ";
    }

    // line 200
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 201, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 205
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 205)) {
            // line 206
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 211
            echo "      ";
        }
        // line 212
        echo "
      ";
        // line 214
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 214)) {
            // line 215
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 220
            echo "      ";
        }
        // line 221
        echo "
      ";
        // line 223
        echo "      ";
        // line 224
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 225
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 225) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 225))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 226
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 226) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 226)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 227
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 227) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 227)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 228
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 228)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 228)))) ? ("col-sm-12") : (""))];
        // line 231
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 231), 231, $this->source), "html", null, true);
        echo ">

        ";
        // line 234
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 234)) {
            // line 235
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 238
            echo "        ";
        }
        // line 239
        echo "
        ";
        // line 241
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 241)) {
            // line 242
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 245
            echo "        ";
        }
        // line 246
        echo "
        ";
        // line 248
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 252
        echo "      </section>

      ";
        // line 255
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 255)) {
            // line 256
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 261
            echo "      ";
        }
        // line 262
        echo "    </div>
  </div>
";
    }

    // line 206
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 208
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 215
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 217
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 235
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 236
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 242
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 243
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 243), 243, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 248
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        echo "          <a id=\"main-content\"></a>
          ";
        // line 250
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 256
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 257
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 258
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 267
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 268, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 269
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 269,  595 => 268,  591 => 267,  584 => 258,  581 => 257,  577 => 256,  571 => 250,  568 => 249,  564 => 248,  557 => 243,  553 => 242,  546 => 236,  542 => 235,  535 => 217,  532 => 216,  528 => 215,  521 => 208,  518 => 207,  514 => 206,  508 => 262,  505 => 261,  502 => 256,  499 => 255,  495 => 252,  492 => 248,  489 => 246,  486 => 245,  483 => 242,  480 => 241,  477 => 239,  474 => 238,  471 => 235,  468 => 234,  462 => 231,  460 => 228,  459 => 227,  458 => 226,  457 => 225,  456 => 224,  454 => 223,  451 => 221,  448 => 220,  445 => 215,  442 => 214,  439 => 212,  436 => 211,  433 => 206,  430 => 205,  423 => 201,  419 => 200,  414 => 195,  410 => 193,  407 => 192,  401 => 189,  398 => 188,  395 => 187,  391 => 184,  382 => 178,  379 => 177,  376 => 176,  372 => 174,  369 => 173,  363 => 171,  361 => 170,  356 => 169,  354 => 166,  353 => 165,  352 => 163,  350 => 162,  346 => 161,  339 => 134,  336 => 133,  332 => 132,  315 => 336,  288 => 312,  284 => 311,  280 => 310,  276 => 309,  263 => 299,  259 => 298,  240 => 284,  229 => 275,  226 => 273,  222 => 267,  220 => 266,  217 => 265,  215 => 200,  212 => 198,  208 => 161,  206 => 160,  204 => 158,  196 => 152,  181 => 138,  178 => 137,  175 => 132,  172 => 131,  155 => 116,  147 => 110,  143 => 108,  139 => 105,  136 => 104,  134 => 103,  130 => 101,  119 => 97,  116 => 96,  113 => 95,  104 => 91,  98 => 90,  95 => 89,  93 => 88,  90 => 87,  73 => 72,  69 => 71,  53 => 57,  49 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/system/page.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 88, "block" => 132, "set" => 158);
        static $filters = array("escape" => 71, "t" => 90, "clean_class" => 166);
        static $functions = array("path" => 90);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 't', 'clean_class'],
                ['path']
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
