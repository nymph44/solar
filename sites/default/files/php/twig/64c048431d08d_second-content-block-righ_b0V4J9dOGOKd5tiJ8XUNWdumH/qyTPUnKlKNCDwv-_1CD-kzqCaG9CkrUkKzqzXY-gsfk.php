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

/* @solar/molecules/second-content-block-right.html.twig */
class __TwigTemplate_4cc7edc3665f47612927365e77266086 extends Template
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
        echo "<div class=\"second-content-block-right\">
  <div class=\"second-content-block-right-shortened\">
    ";
        // line 5
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_title", [], "any", false, false, true, 5)) {
            // line 6
            echo "      <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_title", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 8
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_test", [], "any", false, false, true, 8)) {
            // line 9
            echo "      <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_test", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_button", [], "any", false, false, true, 12)) {
            // line 13
            echo "      <button class=\"base-button-solar\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_button", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</button>
    ";
        }
        // line 15
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/second-content-block-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  66 => 13,  64 => 12,  61 => 11,  55 => 9,  52 => 8,  46 => 6,  43 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# paragraph--second-main-content-paragraph--default--second-content-block-right.html.twig #}
<div class=\"second-content-block-right\">
  <div class=\"second-content-block-right-shortened\">
    {# The title is hidden, so it won't be rendered #}
    {% if paragraph.field_second_main_content_title %}
      <h2>{{ paragraph.field_second_main_content_title.value }}</h2>
    {% endif %}
    {% if paragraph.field_test %}
      <p>{{ paragraph.field_test.value }}</p>
    {% endif %}

    {% if paragraph.field_second_main_content_button %}
      <button class=\"base-button-solar\">{{ paragraph.field_second_main_content_button.value }}</button>
    {% endif %}
  </div>
</div>
", "@solar/molecules/second-content-block-right.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\second-content-block-right.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
