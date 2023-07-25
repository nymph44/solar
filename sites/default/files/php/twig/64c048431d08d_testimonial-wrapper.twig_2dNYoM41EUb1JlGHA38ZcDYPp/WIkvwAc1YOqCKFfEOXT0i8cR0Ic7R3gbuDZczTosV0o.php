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

/* @solar/molecules/testimonial-wrapper.twig */
class __TwigTemplate_acef1c30be6e512f92ad530b22ea5a38 extends Template
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
        echo "<div class=\"testimonial-wrapper\">
  <h2 class=\"testimonial-title\">Dit vinden klanten van Solar Cleaning Company</h2>
  <div class=\"testimonial-block\">
    ";
        // line 6
        echo "    ";
        if ((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null)) {
            // line 7
            echo "      <div class=\"block-description\">
        ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#block_content"] ?? null) : null), "field_block_description", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
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
            // line 14
            echo "      ";
            if ( !twig_test_empty((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 14)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null))) {
                // line 15
                echo "        ";
                $context["paragraph"] = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 15)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null);
                // line 16
                echo "        <div class=\"testimonial\">
          ";
                // line 18
                echo "          ";
                $context["numStars"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_review_stars", [], "any", false, true, true, 18), "value", [], "any", true, true, true, 18)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_review_stars", [], "any", false, true, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source), 0)) : (0));
                // line 19
                echo "          ";
                // line 20
                echo "          ";
                $context["cappedStars"] = (((($context["numStars"] ?? null) > 5)) ? (5) : (($context["numStars"] ?? null)));
                // line 21
                echo "
          ";
                // line 23
                echo "          ";
                $this->loadTemplate("@solar/molecules/testimonial-user.twig", "@solar/molecules/testimonial-wrapper.twig", 23)->display($context);
                // line 24
                echo "        </div>
      ";
            }
            // line 26
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
        // line 27
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/testimonial-wrapper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 27,  104 => 26,  100 => 24,  97 => 23,  94 => 21,  91 => 20,  89 => 19,  86 => 18,  83 => 16,  80 => 15,  77 => 14,  59 => 13,  56 => 11,  50 => 8,  47 => 7,  44 => 6,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/molecules/testimonial-wrapper.twig #}
<div class=\"testimonial-wrapper\">
  <h2 class=\"testimonial-title\">Dit vinden klanten van Solar Cleaning Company</h2>
  <div class=\"testimonial-block\">
    {# Display the block description #}
    {% if content['#block_content'] %}
      <div class=\"block-description\">
        {{ content['#block_content'].field_block_description.value }}
      </div>
    {% endif %}

    {# Loop through the \"testimonial_reference\" paragraphs #}
    {% for item in items %}
      {% if item.content['#paragraph'] is not empty %}
        {% set paragraph = item.content['#paragraph'] %}
        <div class=\"testimonial\">
          {# Calculate the number of lit-up stars #}
          {% set numStars = paragraph.field_testimonial_review_stars.value|default(0) %}
          {# Ensure numStars is capped at 5 #}
          {% set cappedStars = numStars > 5 ? 5 : numStars %}

          {# Display the testimonial user and username using the testimonial-user.twig molecule #}
          {% include '@solar/molecules/testimonial-user.twig' %}
        </div>
      {% endif %}
    {% endfor %}
  </div>
</div>
", "@solar/molecules/testimonial-wrapper.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\testimonial-wrapper.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 13, "set" => 15, "include" => 23);
        static $filters = array("escape" => 8, "default" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'include'],
                ['escape', 'default'],
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
