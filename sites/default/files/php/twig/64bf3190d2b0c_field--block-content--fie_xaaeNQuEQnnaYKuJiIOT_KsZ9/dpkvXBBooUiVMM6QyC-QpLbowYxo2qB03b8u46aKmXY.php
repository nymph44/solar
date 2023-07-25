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
    <div class=\"usp-title-block\">
      <h2 style=\"color: var(--primary)\">Haal meer energie uit zonlicht</h2>
    </div>
    <div class=\"usp-block\">
      ";
        // line 9
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "        ";
            if ( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 10)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null))) {
                // line 11
                echo "          ";
                $context["paragraph"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 11)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null);
                // line 12
                echo "          <div class=\"usp-container\">
            ";
                // line 14
                echo "            ";
                // line 15
                echo "            <div class=\"usp-item\">
              <div class=\"usp-icon-container\">
                ";
                // line 18
                echo "                <img class=\"usp-icon\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_icon", [], "any", false, false, true, 18), "entity", [], "any", false, false, true, 18), "uri", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source)), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_icon", [], "any", false, false, true, 18), "alt", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\">
              </div>
              <div class=\"usp-text\">
                ";
                // line 22
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_text", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 27
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        return array (  91 => 28,  85 => 27,  76 => 22,  67 => 18,  63 => 15,  61 => 14,  58 => 12,  55 => 11,  52 => 10,  47 => 9,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# block--block-content--f9e522ed-19d0-4c02-8ab9-8f4e21ab52a1.html.twig #}
<div style=\"width:100%; height:935px; background-image: url('/alserda/sites/default/files/default_images/energie.jpg'); background-size: cover; display:flex; flex-direction:column; justify-content:center;\">
  <div class=\"usp-component\">
    <div class=\"usp-title-block\">
      <h2 style=\"color: var(--primary)\">Haal meer energie uit zonlicht</h2>
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
              <div class=\"usp-icon-container\">
                {# Display the usp icon image using the img tag #}
                <img class=\"usp-icon\" src=\"{{ file_url(paragraph.field_usp_icon.entity.uri.value) }}\" alt=\"{{ paragraph.field_usp_icon.alt }}\">
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
</div>
", "themes/solar/templates/field--block-content--field-usp-paragraph--usp-block-type.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\field--block-content--field-usp-paragraph--usp-block-type.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "if" => 10, "set" => 11);
        static $filters = array("escape" => 18);
        static $functions = array("file_url" => 18);

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
