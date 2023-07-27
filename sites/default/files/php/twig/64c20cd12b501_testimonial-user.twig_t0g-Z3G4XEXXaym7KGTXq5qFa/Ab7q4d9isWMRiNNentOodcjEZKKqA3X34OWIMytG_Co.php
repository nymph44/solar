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

/* @solar/molecules/testimonial-user.twig */
class __TwigTemplate_9af1dc64815d1a643f228979b2369ea1 extends Template
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
        echo "<div class=\"testimonial-user\">
  <div class=\"testimonial-stars\">
    ";
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "      ";
            $this->loadTemplate("@solar/atoms/star-icon-svg.twig", "@solar/molecules/testimonial-user.twig", 6)->display($context);
            // line 7
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </div>
    ";
        // line 9
        $this->loadTemplate("@solar/atoms/testimonial-content.twig", "@solar/molecules/testimonial-user.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("@solar/atoms/testimonial-author.twig", "@solar/molecules/testimonial-user.twig", 10)->display($context);
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/testimonial-user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 11,  83 => 10,  81 => 9,  78 => 8,  64 => 7,  61 => 6,  43 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/molecules/testimonial-user.twig #}
<div class=\"testimonial-user\">
  <div class=\"testimonial-stars\">
    {# Loop through a fixed number of stars (e.g., 5) and display the stars with appropriate colors #}
    {% for i in range(1, 5) %}
      {% include '@solar/atoms/star-icon-svg.twig' %}
    {% endfor %}
  </div>
    {% include '@solar/atoms/testimonial-content.twig' %}
    {% include '@solar/atoms/testimonial-author.twig' %}
</div>
", "@solar/molecules/testimonial-user.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\testimonial-user.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "include" => 6);
        static $filters = array();
        static $functions = array("range" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'include'],
                [],
                ['range']
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
