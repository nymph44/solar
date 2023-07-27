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

/* @solar/molecules/second-content-block-left.html.twig */
class __TwigTemplate_e9d83c2e38b025a0511bedc0fc774b7d extends Template
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
        // line 2
        echo "<div class=\"second-content-block-left\">
  <div class=\"second-content-block-left-image-container\">
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_image", [], "any", false, false, true, 4)) {
            // line 5
            echo "       ";
            $this->loadTemplate("@solar/atoms/content-block-image-left.twig", "@solar/molecules/second-content-block-left.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/second-content-block-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  48 => 6,  45 => 5,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# paragraph--second-main-content-paragraph--default--second-content-block-left.html.twig #}
<div class=\"second-content-block-left\">
  <div class=\"second-content-block-left-image-container\">
    {% if paragraph.field_second_main_content_image %}
       {% include '@solar/atoms/content-block-image-left.twig' %}
    {% endif %}
  </div>
</div>
", "@solar/molecules/second-content-block-left.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\second-content-block-left.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 5);
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
