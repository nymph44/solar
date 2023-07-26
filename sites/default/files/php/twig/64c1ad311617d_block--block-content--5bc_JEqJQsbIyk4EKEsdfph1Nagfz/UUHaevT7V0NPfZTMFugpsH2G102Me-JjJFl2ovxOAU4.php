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

/* themes/solar/templates/block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig */
class __TwigTemplate_738169784c179da0e31c6a2db98367ef extends Template
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
        echo "<!-- templates/hero-section.html.twig -->
<div";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "hero-section"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ">
  ";
        // line 3
        $this->loadTemplate("@solar/molecules/hero-title.html.twig", "themes/solar/templates/block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig", 3)->display(twig_array_merge($context, ["title" => "Zonnepanelen schoonmaken verhoogt jouw rendement", "subtitle" => "Maar doe het wel op de juiste manier", "buttonLabel" => "Bekijk de video", "scrollSVGPath" => "/alserda/sites/default/files/default_images/icons/scroll.svg"]));
        // line 9
        echo "
  <div class=\"hero-column-right\">

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/hero-section.html.twig -->
<div{{ attributes.addClass('hero-section') }}>
  {% include '@solar/molecules/hero-title.html.twig' with {
    'title': 'Zonnepanelen schoonmaken verhoogt jouw rendement',
    'subtitle': 'Maar doe het wel op de juiste manier',
    'buttonLabel': 'Bekijk de video',
    'scrollSVGPath': '/alserda/sites/default/files/default_images/icons/scroll.svg'
  } %}

  <div class=\"hero-column-right\">

  </div>
</div>
", "themes/solar/templates/block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3);
        static $filters = array("escape" => 2);
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
