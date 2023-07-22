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

/* themes/solar/templates/node--hero.html.twig */
class __TwigTemplate_d01d4e0d39a447e22201ea75b7722ba3 extends Template
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
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "hero-section"], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ">
  ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context, ...[0 => $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_backdrop_image", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2), "uri", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), 2, $this->source)]), "html", null, true);
        echo "
  <div class=\"hero-column-left\"";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_backdrop_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3)) {
            echo " style=\"background-color: var(--primary); background-image: linear-gradient(to bottom, var(--primary) 0%, transparent 50%), url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_backdrop_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3), 3, $this->source)), "html", null, true);
            echo "');\"";
        } else {
            echo " style=\"background-color: var(--primary);\" ";
        }
        echo ">
    <div class=\"hero-column-left-content\">
      <h2 class=\"hero-title\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h2>
      <p class=\"hero-subtitle\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>
      <button class=\"secondary-button-solar\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_button_text", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</button>
    </div>
  </div>
  <div class=\"hero-column-right\">
    ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/node--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  67 => 7,  63 => 6,  59 => 5,  48 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes.addClass('hero-section') }}>
  {{ dump(node.field_backdrop_image.entity.uri.value) }}
  <div class=\"hero-column-left\"{% if node.field_backdrop_image.entity %} style=\"background-color: var(--primary); background-image: linear-gradient(to bottom, var(--primary) 0%, transparent 50%), url('{{ file_url(node.field_backdrop_image.entity.uri.value) }}');\"{% else %} style=\"background-color: var(--primary);\" {% endif %}>
    <div class=\"hero-column-left-content\">
      <h2 class=\"hero-title\">{{ content.field_title }}</h2>
      <p class=\"hero-subtitle\">{{ content.field_subtitle }}</p>
      <button class=\"secondary-button-solar\">{{ content.field_button_text }}</button>
    </div>
  </div>
  <div class=\"hero-column-right\">
    {{ content.field_hero_image }}
  </div>
</div>
", "themes/solar/templates/node--hero.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\node--hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 1);
        static $functions = array("dump" => 2, "file_url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['dump', 'file_url']
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
