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

/* @solar/molecules/block-content-first-right.html.twig */
class __TwigTemplate_02d9ebb8d1da1d990ced348f46321546 extends Template
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
        echo "<!-- templates/molecules/block-content-first-right.html.twig -->
<div class=\"block-content-first-right\">
  <div class=\"block-content-first-right-image-container\">
    ";
        // line 4
        if (($context["image"] ?? null)) {
            // line 5
            echo "      <img class=\"block-content-first-right-image\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\" />
    ";
        }
        // line 7
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@solar/molecules/block-content-first-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/molecules/block-content-first-right.html.twig -->
<div class=\"block-content-first-right\">
  <div class=\"block-content-first-right-image-container\">
    {% if image %}
      <img class=\"block-content-first-right-image\" src=\"{{ file_url(image.uri.value) }}\" alt=\"{{ image.alt }}\" />
    {% endif %}
  </div>
</div>
", "@solar/molecules/block-content-first-right.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\molecules\\block-content-first-right.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 5);
        static $functions = array("file_url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
