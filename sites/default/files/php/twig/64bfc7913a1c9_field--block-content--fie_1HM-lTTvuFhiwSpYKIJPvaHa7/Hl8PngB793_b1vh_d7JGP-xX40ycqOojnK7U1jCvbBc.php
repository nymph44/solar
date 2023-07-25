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

/* themes/solar/templates/field--block-content--field-footer-paragraph--footer-block.html.twig */
class __TwigTemplate_38a7498bde48b3ad3aa17c406b58b846 extends Template
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
        echo "<div class=\"footer-block\">
";
        // line 3
        echo "<div class=\"footer-wrapper\">
  ";
        // line 5
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "    ";
            if ( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null))) {
                // line 7
                echo "      ";
                $context["paragraph"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 7)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null);
                // line 8
                echo "
      ";
                // line 10
                echo "      <div class=\"logo-container\">
        ";
                // line 12
                echo "        <img class=\"footer-logo\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_footer_logo", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "uri", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source)), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_footer_logo", [], "any", false, false, true, 12), "alt", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\">
      </div>

         ";
                // line 16
                echo "      <div class=\"footer-contents\">
        <p>";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_footer_contents", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</p>
      </div>
    ";
            }
            // line 20
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/field--block-content--field-footer-paragraph--footer-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  80 => 20,  74 => 17,  71 => 16,  62 => 12,  59 => 10,  56 => 8,  53 => 7,  50 => 6,  45 => 5,  42 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-block\">
{# field--block-content--field-footer-paragraph--footer-block.html.twig #}
<div class=\"footer-wrapper\">
  {# Loop through the \"field_footer_paragraph\" paragraphs #}
  {% for item in items %}
    {% if item.content['#paragraph'] is not empty %}
      {% set paragraph = item.content['#paragraph'] %}

      {# Display the footer logo #}
      <div class=\"logo-container\">
        {# Display the footer logo image using the img tag #}
        <img class=\"footer-logo\" src=\"{{ file_url(paragraph.field_footer_logo.entity.uri.value) }}\" alt=\"{{ paragraph.field_footer_logo.alt }}\">
      </div>

         {# Display the footer contents #}
      <div class=\"footer-contents\">
        <p>{{ paragraph.field_footer_contents.value }}</p>
      </div>
    {% endif %}
  {% endfor %}
</div>
</div>

", "themes/solar/templates/field--block-content--field-footer-paragraph--footer-block.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\field--block-content--field-footer-paragraph--footer-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "if" => 6, "set" => 7);
        static $filters = array("escape" => 12);
        static $functions = array("file_url" => 12);

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
