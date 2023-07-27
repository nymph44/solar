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

/* @solar/molecules/usp-title-block.twig */
class __TwigTemplate_42eebcff832ab12e47c73b4a2bf4b798 extends Template
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
        echo "<div class=\"usp-title-block\">
  ";
        // line 3
        $this->loadTemplate("@solar/atoms/usp-item.twig", "@solar/molecules/usp-title-block.twig", 3)->display($context);
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/usp-title-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/molecules/usp-title-block.twig #}
<div class=\"usp-title-block\">
  {% include '@solar/atoms/usp-item.twig' %}
</div>
", "@solar/molecules/usp-title-block.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\usp-title-block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
