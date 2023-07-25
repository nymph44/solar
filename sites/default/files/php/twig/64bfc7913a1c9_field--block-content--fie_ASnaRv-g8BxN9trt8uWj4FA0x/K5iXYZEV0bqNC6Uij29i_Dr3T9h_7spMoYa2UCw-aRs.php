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

/* themes/solar/templates/field--block-content--field-testimonial-reference--testimonial-block.html.twig */
class __TwigTemplate_3fe2ac4b8d1891a4e9f651fbeef4b8c3 extends Template
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
        echo "  ";
        if ((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null)) {
            // line 7
            echo "    <div class=\"block-description\">
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
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "    ";
            if ( !twig_test_empty((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 14)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null))) {
                // line 15
                echo "      ";
                $context["paragraph"] = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 15)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null);
                // line 16
                echo "      <div class=\"testimonial\">
        ";
                // line 18
                echo "        ";
                $context["numStars"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_review_stars", [], "any", false, true, true, 18), "value", [], "any", true, true, true, 18)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_review_stars", [], "any", false, true, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source), 0)) : (0));
                // line 19
                echo "        ";
                // line 20
                echo "        ";
                $context["cappedStars"] = (((($context["numStars"] ?? null) > 5)) ? (5) : (($context["numStars"] ?? null)));
                // line 21
                echo "
        ";
                // line 23
                echo "        <div class=\"testimonial-user\">
          <div class=\"testimonial-stars\">
            ";
                // line 26
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 27
                    echo "              <svg class=\"testimonial-star-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
                <path fill=\"";
                    // line 28
                    if (($context["i"] <= ($context["cappedStars"] ?? null))) {
                        echo "var(--accent)";
                    } else {
                        echo "var(--inactive)";
                    }
                    echo "\" d=\"m12.062 20.07-7.416 3.928 1.416-8.32-6-5.894L8.354 8.57 12.062 1l3.708 7.57 8.292 1.214-6 5.893 1.416 8.32-7.416-3.928Z\"/>
              </svg>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "          </div>
          <p>";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_user", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</p>
          <span class=\"testimonial-location\">";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_username", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo " uit ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_location", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "</span>
        </div>
      </div>
    ";
            }
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/field--block-content--field-testimonial-reference--testimonial-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  125 => 37,  116 => 33,  112 => 32,  109 => 31,  96 => 28,  93 => 27,  88 => 26,  84 => 23,  81 => 21,  78 => 20,  76 => 19,  73 => 18,  70 => 16,  67 => 15,  64 => 14,  59 => 13,  56 => 11,  50 => 8,  47 => 7,  44 => 6,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# field--block-content--field-testimonial-reference--testimonial-block.html.twig #}
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

        {# Display the testimonial user and username #}
        <div class=\"testimonial-user\">
          <div class=\"testimonial-stars\">
            {# Loop through a fixed number of stars (e.g., 5) and display the stars with appropriate colors #}
            {% for i in range(1, 5) %}
              <svg class=\"testimonial-star-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
                <path fill=\"{% if i <= cappedStars %}var(--accent){% else %}var(--inactive){% endif %}\" d=\"m12.062 20.07-7.416 3.928 1.416-8.32-6-5.894L8.354 8.57 12.062 1l3.708 7.57 8.292 1.214-6 5.893 1.416 8.32-7.416-3.928Z\"/>
              </svg>
            {% endfor %}
          </div>
          <p>{{ paragraph.field_testimonial_user.value }}</p>
          <span class=\"testimonial-location\">{{ paragraph.field_testimonial_username.value }} uit {{ paragraph.field_testimonial_location.value }}</span>
        </div>
      </div>
    {% endif %}
  {% endfor %}
</div>
</div>
", "themes/solar/templates/field--block-content--field-testimonial-reference--testimonial-block.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\field--block-content--field-testimonial-reference--testimonial-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 13, "set" => 15);
        static $filters = array("escape" => 8, "default" => 18);
        static $functions = array("range" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'default'],
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
