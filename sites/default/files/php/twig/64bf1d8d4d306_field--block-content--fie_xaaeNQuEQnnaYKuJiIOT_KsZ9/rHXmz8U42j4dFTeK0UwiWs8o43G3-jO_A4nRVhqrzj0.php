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
        // line 1
        echo "<div class=\"usp-component\">
  ";
        // line 3
        echo "  <div class=\"usp-title-block\">
  <h2>Haal meer energie uit zonlicht</h2>
  </div>
  <div class=\"usp-block\">
    ";
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "      ";
            if ( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 9)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null))) {
                // line 10
                echo "        ";
                $context["paragraph"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 10)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null);
                // line 11
                echo "        <div class=\"usp-container\">
          ";
                // line 13
                echo "          ";
                // line 14
                echo "          <div class=\"usp-item\">
            <div class=\"usp-icon\">
              ";
                // line 17
                echo "              <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_icon", [], "any", false, false, true, 17), "entity", [], "any", false, false, true, 17), "uri", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source)), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_icon", [], "any", false, false, true, 17), "alt", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\">
            </div>
            <div class=\"usp-text\">
              ";
                // line 21
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_text", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        </div>
      ";
            }
            // line 26
            echo "    ";
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
        return "themes/solar/templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  86 => 26,  77 => 21,  68 => 17,  64 => 14,  62 => 13,  59 => 11,  56 => 10,  53 => 9,  48 => 8,  42 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"usp-component\">
  {# <h2>{{ content['#block'].field_usp_description.0['#markup'] }}</h2> #}
  <div class=\"usp-title-block\">
  <h2>Haal meer energie uit zonlicht</h2>
  </div>
  <div class=\"usp-block\">
    {# Loop through the \"usp_paragraph\" paragraphs #}
    {% for item in items %}
      {% if item.content['#paragraph'] is not empty %}
        {% set paragraph = item.content['#paragraph'] %}
        <div class=\"usp-container\">
          {# Display the usp title #}
          {# {{ paragraph.field_usp_title.value }} #}
          <div class=\"usp-item\">
            <div class=\"usp-icon\">
              {# Display the usp icon image using the img tag #}
              <img src=\"{{ file_url(paragraph.field_usp_icon.entity.uri.value) }}\" alt=\"{{ paragraph.field_usp_icon.alt }}\">
            </div>
            <div class=\"usp-text\">
              {# Display the usp text #}
              {{ paragraph.field_usp_text.value }}
            </div>
          </div>
        </div>
      {% endif %}
    {% endfor %}
  </div>
</div>
", "themes/solar/templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\field--block-content--field-usp-paragraph--usp-block-type.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8, "if" => 9, "set" => 10);
        static $filters = array("escape" => 17);
        static $functions = array("file_url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
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
