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

/* themes/solar/templates/page.html.twig */
class __TwigTemplate_bccf6376fefb02e0aa07c1dd42103d2c extends Template
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
        // line 1
        echo "
<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
  </header>

  ";
        // line 10
        echo "
";
        // line 12
        echo "
";
        // line 14
        echo "
";
        // line 16
        echo "
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 19
        echo "    <div class=\"layout-content\">
      <div class=\"hero-section\">
        <div class=\"hero-column-left\">
          <div class=\"hero-column-left-content\">
            <h2>Zonnepanelen schoonmaken verhoogt jouw rendement</h2>
            <p>maar doe het wel op de juiste manier</p>
            <button class=\"secondary-button-solar\">
              <img src=\"../images/icons/play.svg\" alt=\"\" />
              <span>Bekijk de video</span>
            </button>
          </div>
        </div>
        <div class=\"hero-column-right\">
          right column
        </div>
      </div>
    </div>

  </main>

  ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 39)) {
            // line 40
            echo "    <footer role=\"contentinfo\">
      ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 44
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 44,  91 => 41,  88 => 40,  86 => 39,  64 => 19,  60 => 16,  57 => 14,  54 => 12,  51 => 10,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"layout-container\">

  <header role=\"banner\">
    {{ page.header }}
  </header>

  {# {{ page.primary_menu }}
  {{ page.secondary_menu }} #}

{#  {{ page.breadcrumb }}#}

{#  {{ page.highlighted }}#}

{#  {{ page.help }}#}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
    <div class=\"layout-content\">
      <div class=\"hero-section\">
        <div class=\"hero-column-left\">
          <div class=\"hero-column-left-content\">
            <h2>Zonnepanelen schoonmaken verhoogt jouw rendement</h2>
            <p>maar doe het wel op de juiste manier</p>
            <button class=\"secondary-button-solar\">
              <img src=\"../images/icons/play.svg\" alt=\"\" />
              <span>Bekijk de video</span>
            </button>
          </div>
        </div>
        <div class=\"hero-column-right\">
          right column
        </div>
      </div>
    </div>

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
", "themes/solar/templates/page.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 39);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
