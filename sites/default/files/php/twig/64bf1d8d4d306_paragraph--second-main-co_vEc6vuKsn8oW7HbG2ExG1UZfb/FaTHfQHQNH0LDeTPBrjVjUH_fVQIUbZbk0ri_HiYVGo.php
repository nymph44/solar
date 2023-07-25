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

/* themes/solar/templates/paragraph--second-main-content-paragraph--default.html.twig */
class __TwigTemplate_8787667e3f85ae07eba7a5add42a9c9e extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "label", [], "any", false, false, true, 2)) {
            // line 3
            echo "  ";
        }
        // line 5
        echo "
<div class=\"second-content-block\">
  <div class=\"second-content-block-left\">
    <div class=\"second-content-block-left-image-container\">
      ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_image", [], "any", false, false, true, 9)) {
            // line 10
            echo "        <img class=\"second-content-block-left-image\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_image", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10), "fileuri", [], "any", false, false, true, 10), 10, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image_first_main", [], "any", false, false, true, 10), "alt", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" />
      ";
        }
        // line 12
        echo "    </div>
  </div>

  <div class=\"second-content-block-right\">
    <div class=\"second-content-block-right-shortened\">
      ";
        // line 18
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_title", [], "any", false, false, true, 18)) {
            // line 19
            echo "      <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_title", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</h2>
        ";
        }
        // line 21
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_test", [], "any", false, false, true, 21)) {
            // line 22
            echo "        <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_test", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 24
        echo "
      ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_button", [], "any", false, false, true, 25)) {
            // line 26
            echo "        <button class=\"base-button-solar\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_second_main_content_button", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</button>
      ";
        }
        // line 28
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/paragraph--second-main-content-paragraph--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  90 => 26,  88 => 25,  85 => 24,  79 => 22,  76 => 21,  70 => 19,  67 => 18,  60 => 12,  52 => 10,  50 => 9,  44 => 5,  41 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Hide the paragraph title by not rendering it #}
{% if paragraph.label %}
  {# Do not render the title #}
{% endif %}

<div class=\"second-content-block\">
  <div class=\"second-content-block-left\">
    <div class=\"second-content-block-left-image-container\">
      {% if paragraph.field_second_main_content_image %}
        <img class=\"second-content-block-left-image\" src=\"{{ file_url(paragraph.field_second_main_content_image.entity.fileuri) }}\" alt=\"{{ paragraph.field_image_first_main.alt }}\" />
      {% endif %}
    </div>
  </div>

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
</div>
", "themes/solar/templates/paragraph--second-main-content-paragraph--default.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\paragraph--second-main-content-paragraph--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 10);
        static $functions = array("file_url" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['file_url']
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
