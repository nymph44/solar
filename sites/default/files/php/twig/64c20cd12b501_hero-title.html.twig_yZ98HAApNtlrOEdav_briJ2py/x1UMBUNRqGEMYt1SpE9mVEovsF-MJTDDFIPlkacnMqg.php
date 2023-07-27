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

/* @solar/molecules/hero-title.html.twig */
class __TwigTemplate_7c57129c0016cf06e4def284ce5ca6c8 extends Template
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
        echo "<!-- templates/molecules/hero-title.html.twig -->
<div class=\"hero-column-left\" style=\"background-color: var(--primary); background-image: linear-gradient(to bottom, var(--primary-50) 0%, var(--primary) 100%), url('/alserda/sites/default/files/default_images/header_1.jpg');\">
  <div class=\"hero-column-left-content\">
    <h2 class=\"hero-title\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        echo "</h2>
    <p class=\"hero-subtitle\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subtitle"] ?? null), 5, $this->source), "html", null, true);
        echo "</p>
    <button class=\"secondary-button-solar\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttonLabel"] ?? null), 6, $this->source), "html", null, true);
        echo "</button>
    <div class=\"hero-scroll-icon-container\">
      <div class=\"svg-icon\">
        <!-- Include the SVG icon Atom component -->
        ";
        // line 10
        $this->loadTemplate("@solar/atoms/scroll-icon.svg.twig", "@solar/molecules/hero-title.html.twig", 10)->display($context);
        // line 11
        echo "      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/hero-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  59 => 10,  52 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/molecules/hero-title.html.twig -->
<div class=\"hero-column-left\" style=\"background-color: var(--primary); background-image: linear-gradient(to bottom, var(--primary-50) 0%, var(--primary) 100%), url('/alserda/sites/default/files/default_images/header_1.jpg');\">
  <div class=\"hero-column-left-content\">
    <h2 class=\"hero-title\">{{ title }}</h2>
    <p class=\"hero-subtitle\">{{ subtitle }}</p>
    <button class=\"secondary-button-solar\">{{ buttonLabel }}</button>
    <div class=\"hero-scroll-icon-container\">
      <div class=\"svg-icon\">
        <!-- Include the SVG icon Atom component -->
        {% include '@solar/atoms/scroll-icon.svg.twig' %}
      </div>
    </div>
  </div>
</div>", "@solar/molecules/hero-title.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\hero-title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 10);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
