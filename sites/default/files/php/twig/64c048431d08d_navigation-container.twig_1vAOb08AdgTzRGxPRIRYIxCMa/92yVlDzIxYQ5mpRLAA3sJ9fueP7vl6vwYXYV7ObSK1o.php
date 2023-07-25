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

/* @solar/molecules/navigation-container.twig */
class __TwigTemplate_8d646157ddd0f78d8b6c3cb2c13e31d4 extends Template
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
        echo "<div class=\"navigation-container\">
  <div class=\"navigation-wrapper\">
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
        ";
                // line 9
                echo "        ";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_logo", [], "any", false, false, true, 9))) {
                    // line 10
                    echo "          <div class=\"logo-container\">
            <img src=\"";
                    // line 11
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_logo", [], "any", false, false, true, 11), 11, $this->source)), "entity", [], "any", false, false, true, 11), "uri", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source)), "html", null, true);
                    echo "\" alt=\"logo\" style=\"width: 100px; margin-right: 10px; margin-top: 5px;\" />
          </div>
        ";
                }
                // line 14
                echo "
        ";
                // line 16
                echo "        <div class=\"phone-container\">
          <span class=\"whatsapp-icon\">
            ";
                // line 18
                $this->loadTemplate("@solar/atoms/phone-icon.svg.twig", "@solar/molecules/navigation-container.twig", 18)->display($context);
                // line 19
                echo "          </span>
          <a>Whatsapp</a>
          <span style=\"color: var(--inactive)\">&nbsp;/&nbsp;</span>
          <span style=\"margin-left: 4px; margin-right: 4px; color: var(--primary);\">";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_phone", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</span>
        </div>
      ";
            }
            // line 25
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
        // line 26
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/navigation-container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  101 => 25,  95 => 22,  90 => 19,  88 => 18,  84 => 16,  81 => 14,  75 => 11,  72 => 10,  69 => 9,  66 => 7,  63 => 6,  60 => 5,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/molecules/navigation-container.twig #}
<div class=\"navigation-container\">
  <div class=\"navigation-wrapper\">
    {% for item in items %}
      {% if item.content['#paragraph'] is not empty %}
        {% set paragraph = item.content['#paragraph'] %}

        {# Display the logo if available #}
        {% if paragraph.field_logo|length %}
          <div class=\"logo-container\">
            <img src=\"{{ file_url(paragraph.field_logo|first.entity.uri.value) }}\" alt=\"logo\" style=\"width: 100px; margin-right: 10px; margin-top: 5px;\" />
          </div>
        {% endif %}

        {# Display the phone number with the phone icon #}
        <div class=\"phone-container\">
          <span class=\"whatsapp-icon\">
            {% include '@solar/atoms/phone-icon.svg.twig' %}
          </span>
          <a>Whatsapp</a>
          <span style=\"color: var(--inactive)\">&nbsp;/&nbsp;</span>
          <span style=\"margin-left: 4px; margin-right: 4px; color: var(--primary);\">{{ paragraph.field_phone.value }}</span>
        </div>
      {% endif %}
    {% endfor %}
  </div>
</div>
", "@solar/molecules/navigation-container.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\navigation-container.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "if" => 5, "set" => 6, "include" => 18);
        static $filters = array("length" => 9, "escape" => 11, "first" => 11);
        static $functions = array("file_url" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
                ['length', 'escape', 'first'],
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
