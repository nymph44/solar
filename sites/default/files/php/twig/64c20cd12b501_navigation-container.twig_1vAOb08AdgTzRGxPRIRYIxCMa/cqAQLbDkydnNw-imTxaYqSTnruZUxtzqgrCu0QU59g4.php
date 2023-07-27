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

/* @solar/molecules/navigation-container.twig */
class __TwigTemplate_8d646157ddd0f78d8b6c3cb2c13e31d4 extends Template
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
        echo "<div class=\"navigation-container\">
  <div class=\"navigation-wrapper\">
    ";
        // line 4
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
            // line 5
            echo "      ";
            if ( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 5)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null))) {
                // line 6
                echo "        ";
                $context["paragraph"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 6)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null);
                // line 7
                echo "
        ";
                // line 9
                echo "        ";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_logo", [], "any", false, false, true, 9))) {
                    // line 10
                    echo "          ";
                    $this->loadTemplate("@solar/atoms/navigation-container-logo.twig", "@solar/molecules/navigation-container.twig", 10)->display($context);
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "
        ";
                // line 14
                echo "        <div class=\"phone-container\">
          <span class=\"whatsapp-icon\">
            ";
                // line 16
                $this->loadTemplate("@solar/atoms/phone-icon.svg.twig", "@solar/molecules/navigation-container.twig", 16)->display($context);
                // line 17
                echo "          </span>
          ";
                // line 18
                $this->loadTemplate("@solar/atoms/navigation-container-whatsapp.twig", "@solar/molecules/navigation-container.twig", 18)->display($context);
                // line 19
                echo "          <span style=\"color: var(--inactive)\">&nbsp;/&nbsp;</span>
            ";
                // line 20
                $this->loadTemplate("@solar/atoms/navigation-container-phone.twig", "@solar/molecules/navigation-container.twig", 20)->display($context);
                // line 21
                echo "        </div>
      ";
            }
            // line 23
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/navigation-container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 24,  101 => 23,  97 => 21,  95 => 20,  92 => 19,  90 => 18,  87 => 17,  85 => 16,  81 => 14,  78 => 12,  75 => 11,  72 => 10,  69 => 9,  66 => 7,  63 => 6,  60 => 5,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/molecules/navigation-container.twig #}
<div class=\"navigation-container\">
  <div class=\"navigation-wrapper\">
    {% for item in items %}
      {% if item.content['#paragraph'] is not empty %}
        {% set paragraph = item.content['#paragraph'] %}

        {# Display the logo if available #}
        {% if paragraph.field_logo|length %}
          {% include '@solar/atoms/navigation-container-logo.twig' %}
        {% endif %}

        {# Display the phone number with the phone icon #}
        <div class=\"phone-container\">
          <span class=\"whatsapp-icon\">
            {% include '@solar/atoms/phone-icon.svg.twig' %}
          </span>
          {% include '@solar/atoms/navigation-container-whatsapp.twig' %}
          <span style=\"color: var(--inactive)\">&nbsp;/&nbsp;</span>
            {% include '@solar/atoms/navigation-container-phone.twig' %}
        </div>
      {% endif %}
    {% endfor %}
  </div>
</div>
", "@solar/molecules/navigation-container.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\navigation-container.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "if" => 5, "set" => 6, "include" => 10);
        static $filters = array("length" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
                ['length'],
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
