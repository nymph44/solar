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
        echo "<div style=\"width:100%; height:935px; background-image: url('/alserda/sites/default/files/default_images/energie.jpg'); background-size: cover; display:flex; flex-direction:column; justify-content:center;\">
  <div class=\"usp-component\">
    <div class=\"usp-title-block\">
      <h2 class=\"usp-title\">Haal meer energie uit zonlicht</h2>
    </div>
    <div class=\"usp-block\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "        ";
            if ( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null))) {
                // line 9
                echo "          ";
                $context["paragraph"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null);
                // line 10
                echo "          <div class=\"usp-container\">
            <div class=\"usp-item\">
              <div class=\"usp-icon-container\">
                ";
                // line 14
                echo "                <img class=\"usp-icon\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_icon", [], "any", false, false, true, 14), "entity", [], "any", false, false, true, 14), "uri", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_icon", [], "any", false, false, true, 14), "alt", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\">
              </div>
              <div class=\"usp-text\">
                ";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_usp_text", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 22
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
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
        return array (  85 => 23,  79 => 22,  71 => 17,  62 => 14,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"width:100%; height:935px; background-image: url('/alserda/sites/default/files/default_images/energie.jpg'); background-size: cover; display:flex; flex-direction:column; justify-content:center;\">
  <div class=\"usp-component\">
    <div class=\"usp-title-block\">
      <h2 class=\"usp-title\">Haal meer energie uit zonlicht</h2>
    </div>
    <div class=\"usp-block\">
      {% for item in items %}
        {% if item.content['#paragraph'] is not empty %}
          {% set paragraph = item.content['#paragraph'] %}
          <div class=\"usp-container\">
            <div class=\"usp-item\">
              <div class=\"usp-icon-container\">
                {# Display the usp icon image using the img tag #}
                <img class=\"usp-icon\" src=\"{{ file_url(paragraph.field_usp_icon.entity.uri.value) }}\" alt=\"{{ paragraph.field_usp_icon.alt }}\">
              </div>
              <div class=\"usp-text\">
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
        static $tags = array("for" => 7, "if" => 8, "set" => 9);
        static $filters = array("escape" => 14);
        static $functions = array("file_url" => 14);

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
