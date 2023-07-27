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

/* @solar/molecules/usp-item.twig */
class __TwigTemplate_e99d5b42659d1ba1bb079d3db0699d12 extends Template
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
        echo "<div class=\"usp-container\">
  <div class=\"usp-item\">
    ";
        // line 4
        $this->loadTemplate("@solar/atoms/usp-item-icon.twig", "@solar/molecules/usp-item.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("@solar/atoms/usp-item-text.twig", "@solar/molecules/usp-item.twig", 5)->display($context);
        // line 6
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/usp-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  45 => 5,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/molecules/usp-item.twig #}
<div class=\"usp-container\">
  <div class=\"usp-item\">
    {% include '@solar/atoms/usp-item-icon.twig' %}
    {% include '@solar/atoms/usp-item-text.twig' %}
  </div>
</div>
", "@solar/molecules/usp-item.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\usp-item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 4);
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
