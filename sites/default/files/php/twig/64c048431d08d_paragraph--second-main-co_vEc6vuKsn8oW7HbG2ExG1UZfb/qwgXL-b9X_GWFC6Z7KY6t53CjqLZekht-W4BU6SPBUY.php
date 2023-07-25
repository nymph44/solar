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

/* themes/solar/templates/paragraph--second-main-content-paragraph--default.html.twig */
class __TwigTemplate_8787667e3f85ae07eba7a5add42a9c9e extends Template
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
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "label", [], "any", false, false, true, 3)) {
            // line 4
            echo "  ";
        }
        // line 6
        echo "
<div class=\"second-content-block\">
  ";
        // line 8
        $this->loadTemplate("@solar/molecules/second-content-block-left.html.twig", "themes/solar/templates/paragraph--second-main-content-paragraph--default.html.twig", 8)->display($context);
        // line 9
        echo "  ";
        $this->loadTemplate("@solar/molecules/second-content-block-right.html.twig", "themes/solar/templates/paragraph--second-main-content-paragraph--default.html.twig", 9)->display($context);
        // line 10
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/paragraph--second-main-content-paragraph--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  50 => 9,  48 => 8,  44 => 6,  41 => 4,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# paragraph--second-main-content-paragraph--default--second-content-block.html.twig #}
{# Hide the paragraph title by not rendering it #}
{% if paragraph.label %}
  {# Do not render the title #}
{% endif %}

<div class=\"second-content-block\">
  {% include '@solar/molecules/second-content-block-left.html.twig' %}
  {% include '@solar/molecules/second-content-block-right.html.twig' %}

</div>
", "themes/solar/templates/paragraph--second-main-content-paragraph--default.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\paragraph--second-main-content-paragraph--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 8);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
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
