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
        // line 2
        echo "<div class=\"footer-block\">
  <div class=\"footer-wrapper\">
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
        <div class=\"logo-container\">
          ";
                // line 10
                echo "          ";
                $this->loadTemplate("@solar/atoms/footer-logo.twig", "themes/solar/templates/field--block-content--field-footer-paragraph--footer-block.html.twig", 10)->display(twig_array_merge($context, ["uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 11
($context["paragraph"] ?? null), "field_footer_logo", [], "any", false, false, true, 11), "entity", [], "any", false, false, true, 11), "uri", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 12
($context["paragraph"] ?? null), "field_footer_logo", [], "any", false, false, true, 12), "alt", [], "any", false, false, true, 12)]));
                // line 14
                echo "        </div>

        <div class=\"footer-contents\">
          <p>";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_footer_contents", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</p>
        </div>
      ";
            }
            // line 20
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
        // line 21
        echo "  </div>
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
        return array (  100 => 21,  86 => 20,  80 => 17,  75 => 14,  73 => 12,  72 => 11,  70 => 10,  66 => 7,  63 => 6,  60 => 5,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/organisms/footer-block.twig #}
<div class=\"footer-block\">
  <div class=\"footer-wrapper\">
    {% for item in items %}
      {% if item.content['#paragraph'] is not empty %}
        {% set paragraph = item.content['#paragraph'] %}

        <div class=\"logo-container\">
          {# Include the footer-logo.twig component and pass the required variables #}
          {% include '@solar/atoms/footer-logo.twig' with {
            uri: paragraph.field_footer_logo.entity.uri.value,
            alt: paragraph.field_footer_logo.alt
          } %}
        </div>

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
        static $tags = array("for" => 4, "if" => 5, "set" => 6, "include" => 10);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
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
