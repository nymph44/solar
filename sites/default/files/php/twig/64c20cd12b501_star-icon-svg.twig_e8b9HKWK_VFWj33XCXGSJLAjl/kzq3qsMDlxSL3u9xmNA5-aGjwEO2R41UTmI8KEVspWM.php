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

/* @solar/atoms/star-icon-svg.twig */
class __TwigTemplate_4ccaab7e251f3f05b166f435db3c5b1c extends Template
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
        echo "<svg class=\"testimonial-star-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
    <path fill=\"";
        // line 2
        if ((($context["i"] ?? null) <= ($context["cappedStars"] ?? null))) {
            echo "var(--accent)";
        } else {
            echo "var(--inactive)";
        }
        echo "\" d=\"m12.062 20.07-7.416 3.928 1.416-8.32-6-5.894L8.354 8.57 12.062 1l3.708 7.57 8.292 1.214-6 5.893 1.416 8.32-7.416-3.928Z\"/>
</svg>";
    }

    public function getTemplateName()
    {
        return "@solar/atoms/star-icon-svg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg class=\"testimonial-star-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
    <path fill=\"{% if i <= cappedStars %}var(--accent){% else %}var(--inactive){% endif %}\" d=\"m12.062 20.07-7.416 3.928 1.416-8.32-6-5.894L8.354 8.57 12.062 1l3.708 7.57 8.292 1.214-6 5.893 1.416 8.32-7.416-3.928Z\"/>
</svg>", "@solar/atoms/star-icon-svg.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\atoms\\star-icon-svg.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
