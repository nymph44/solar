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

/* themes/solar/templates/block--block-content--53d8fbd2-9652-4c4f-945d-d949c7fb5851.html.twig */
class __TwigTemplate_172b4bcab489d973b46eb55167b1b309 extends Template
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
        echo "<!-- templates/organisms/block-content-first.html.twig -->
<div class=\"block-content-first\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_content_first", [], "any", false, false, true, 3)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null));
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
            // line 4
            echo "    ";
            $context["paragraph_entity"] = twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 4);
            // line 5
            echo "    ";
            $this->loadTemplate("@solar/molecules/block-content-first-left.html.twig", "themes/solar/templates/block--block-content--53d8fbd2-9652-4c4f-945d-d949c7fb5851.html.twig", 5)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 6
($context["paragraph_entity"] ?? null), "field_title_first_main", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), "subtitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 7
($context["paragraph_entity"] ?? null), "field_subtitle_first_main", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), "buttonLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
($context["paragraph_entity"] ?? null), "field_button_first_main_text", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8)]));
            // line 10
            echo "
    ";
            // line 11
            $this->loadTemplate("@solar/molecules/block-content-first-right.html.twig", "themes/solar/templates/block--block-content--53d8fbd2-9652-4c4f-945d-d949c7fb5851.html.twig", 11)->display(twig_array_merge($context, ["image" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
($context["paragraph_entity"] ?? null), "field_image_first_main", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12)]));
            // line 14
            echo "  ";
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
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/block--block-content--53d8fbd2-9652-4c4f-945d-d949c7fb5851.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  75 => 14,  73 => 12,  72 => 11,  69 => 10,  67 => 8,  66 => 7,  65 => 6,  63 => 5,  60 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/organisms/block-content-first.html.twig -->
<div class=\"block-content-first\">
  {% for item in content.field_content_first['#items'] %}
    {% set paragraph_entity = item.entity %}
    {% include '@solar/molecules/block-content-first-left.html.twig' with {
      'title': paragraph_entity.field_title_first_main.value,
      'subtitle': paragraph_entity.field_subtitle_first_main.value,
      'buttonLabel': paragraph_entity.field_button_first_main_text.value
    } %}

    {% include '@solar/molecules/block-content-first-right.html.twig' with {
      'image': paragraph_entity.field_image_first_main.entity
    } %}
  {% endfor %}
</div>", "themes/solar/templates/block--block-content--53d8fbd2-9652-4c4f-945d-d949c7fb5851.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\block--block-content--53d8fbd2-9652-4c4f-945d-d949c7fb5851.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4, "include" => 5);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'include'],
                [],
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
