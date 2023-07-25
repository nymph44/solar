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
        echo "<div class=\"block-content-first\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_content_first", [], "any", false, false, true, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    ";
            $context["paragraph_entity"] = twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 3);
            // line 4
            echo "    <div class=\"block-content-first-left paragraph paragraph--";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source)), "html", null, true);
            echo "\">
      <div class=\"block-content-first-content\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "field_title_first_main", [], "any", false, false, true, 6)) {
                // line 7
                echo "          <h2>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "field_title_first_main", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "</h2>
        ";
            }
            // line 9
            echo "
        ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "field_subtitle_first_main", [], "any", false, false, true, 10)) {
                // line 11
                echo "          <p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "field_subtitle_first_main", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "</p>
        ";
            }
            // line 13
            echo "
        ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "field_button_first_main_text", [], "any", false, false, true, 14)) {
                // line 15
                echo "          <button class=\"base-button-solar\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "field_button_first_main_text", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</button>
        ";
            }
            // line 17
            echo "      </div>
    </div>
    <div class=\"block-content-first-right\">
    <div class=\"block-content-first-right-image-container\">
     ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "field_image_first_main", [], "any", false, false, true, 21)) {
                // line 22
                echo "          ";
                $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "field_image_first_main", [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22);
                // line 23
                echo "          <img class=\"block-content-first-right-image\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "uri", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source)), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\" />
        ";
            }
            // line 25
            echo "        </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
";
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
        return array (  112 => 28,  104 => 25,  96 => 23,  93 => 22,  91 => 21,  85 => 17,  79 => 15,  77 => 14,  74 => 13,  68 => 11,  66 => 10,  63 => 9,  57 => 7,  55 => 6,  49 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block-content-first\">
  {% for item in content.field_content_first['#items'] %}
    {% set paragraph_entity = item.entity %}
    <div class=\"block-content-first-left paragraph paragraph--{{ paragraph_entity.bundle|clean_class }}\">
      <div class=\"block-content-first-content\">
        {% if paragraph_entity.field_title_first_main %}
          <h2>{{ paragraph_entity.field_title_first_main.value }}</h2>
        {% endif %}

        {% if paragraph_entity.field_subtitle_first_main %}
          <p>{{ paragraph_entity.field_subtitle_first_main.value }}</p>
        {% endif %}

        {% if paragraph_entity.field_button_first_main_text %}
          <button class=\"base-button-solar\">{{ paragraph_entity.field_button_first_main_text.value }}</button>
        {% endif %}
      </div>
    </div>
    <div class=\"block-content-first-right\">
    <div class=\"block-content-first-right-image-container\">
     {% if paragraph_entity.field_image_first_main %}
          {% set image = paragraph_entity.field_image_first_main.entity %}
          <img class=\"block-content-first-right-image\" src=\"{{ file_url(image.uri.value) }}\" alt=\"{{ image.alt }}\" />
        {% endif %}
        </div>
    </div>
  {% endfor %}
</div>
", "themes/solar/templates/block--block-content--53d8fbd2-9652-4c4f-945d-d949c7fb5851.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\block--block-content--53d8fbd2-9652-4c4f-945d-d949c7fb5851.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "set" => 3, "if" => 6);
        static $filters = array("escape" => 4, "clean_class" => 4);
        static $functions = array("file_url" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'clean_class'],
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
