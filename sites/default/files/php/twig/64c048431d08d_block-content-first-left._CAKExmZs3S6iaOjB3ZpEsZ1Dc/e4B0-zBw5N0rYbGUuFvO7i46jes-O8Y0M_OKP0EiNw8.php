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

/* @solar/molecules/block-content-first-left.html.twig */
class __TwigTemplate_9399a9ae0a1bcfd261cfd0db1b336a96 extends Template
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
        echo "<!-- templates/molecules/block-content-first-left.html.twig -->
<div class=\"block-content-first-left paragraph paragraph--";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph_entity"] ?? null), "bundle", [], "any", false, false, true, 2), 2, $this->source)), "html", null, true);
        echo "\">
  <div class=\"block-content-first-content\">
    ";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            echo "      <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 5, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if (($context["subtitle"] ?? null)) {
            // line 9
            echo "      <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subtitle"] ?? null), 9, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (($context["buttonLabel"] ?? null)) {
            // line 13
            echo "      <button class=\"base-button-solar\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttonLabel"] ?? null), 13, $this->source), "html", null, true);
            echo "</button>
    ";
        }
        // line 15
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/block-content-first-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  71 => 13,  69 => 12,  66 => 11,  60 => 9,  58 => 8,  55 => 7,  49 => 5,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/molecules/block-content-first-left.html.twig -->
<div class=\"block-content-first-left paragraph paragraph--{{ paragraph_entity.bundle|clean_class }}\">
  <div class=\"block-content-first-content\">
    {% if title %}
      <h2>{{ title }}</h2>
    {% endif %}

    {% if subtitle %}
      <p>{{ subtitle }}</p>
    {% endif %}

    {% if buttonLabel %}
      <button class=\"base-button-solar\">{{ buttonLabel }}</button>
    {% endif %}
  </div>
</div>
", "@solar/molecules/block-content-first-left.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\block-content-first-left.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 2, "clean_class" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'clean_class'],
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
