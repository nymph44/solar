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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "      <svg class=\"testimonial-star-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
        <path fill=\"";
            // line 7
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
        // line 10
        echo "  </div>
  <p>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_user", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</p>
  <span class=\"testimonial-location\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_username", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo " uit ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_testimonial_location", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</span>
</div>
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
        return array (  71 => 12,  67 => 11,  64 => 10,  51 => 7,  48 => 6,  43 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/molecules/testimonial-user.twig #}
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
", "@solar/molecules/testimonial-user.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\testimonial-user.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "if" => 7);
        static $filters = array("escape" => 11);
        static $functions = array("range" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
