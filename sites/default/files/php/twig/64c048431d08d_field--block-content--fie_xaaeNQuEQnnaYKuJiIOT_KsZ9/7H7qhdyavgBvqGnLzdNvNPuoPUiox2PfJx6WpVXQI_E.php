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

/* themes/solar/templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig */
class __TwigTemplate_ca2b993347cc2e1d21b105d36ce0e873 extends Template
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
        echo "<div style=\"width:100%; height:935px; background-image: url('/alserda/sites/default/files/default_images/energie.jpg'); background-size: cover; display:flex; flex-direction:column; justify-content:center;\">
  <div class=\"usp-component\">
    ";
        // line 4
        $this->loadTemplate("@solar/molecules/usp-title-block.twig", "themes/solar/templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig", 4)->display(twig_array_merge($context, ["title" => "Haal meer energie uit zonlicht"]));
        // line 5
        echo "    <div class=\"usp-block\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        ";
            if ( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null))) {
                // line 8
                echo "          ";
                $context["paragraph"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 8)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null);
                // line 9
                echo "          ";
                $this->loadTemplate("@solar/molecules/usp-item.twig", "themes/solar/templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig", 9)->display($context);
                // line 10
                echo "        ";
            }
            // line 11
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  65 => 7,  48 => 6,  45 => 5,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig #}
<div style=\"width:100%; height:935px; background-image: url('/alserda/sites/default/files/default_images/energie.jpg'); background-size: cover; display:flex; flex-direction:column; justify-content:center;\">
  <div class=\"usp-component\">
    {% include '@solar/molecules/usp-title-block.twig' with { 'title': \"Haal meer energie uit zonlicht\" } %}
    <div class=\"usp-block\">
      {% for item in items %}
        {% if item.content['#paragraph'] is not empty %}
          {% set paragraph = item.content['#paragraph'] %}
          {% include '@solar/molecules/usp-item.twig' %}
        {% endif %}
      {% endfor %}
    </div>
  </div>
</div>
", "themes/solar/templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\field--block-content--field-usp-paragraph--usp-block-type.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 4, "for" => 6, "if" => 7, "set" => 8);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'for', 'if', 'set'],
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
