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

/* themes/solar/templates/block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig */
class __TwigTemplate_738169784c179da0e31c6a2db98367ef extends Template
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
  <div class=\"hero-column-left\" style=\"background-color: var(--primary); background-image: linear-gradient(to bottom, var(--primary-50) 0%, var(--primary) 100%), url('/alserda/sites/default/files/default_images/header_1.jpg');\">
    <div class=\"hero-column-left-content\">
      <h2 class=\"hero-title\">Zonnepanelen schoonmaken verhoogt jouw rendement</h2>
      <p class=\"hero-subtitle\">Maar doe het wel op de juiste manier</p>
      <button class=\"secondary-button-solar\">Bekijk de video</button>
      <div class=\"hero-scroll-icon-container\">
        ";
        // line 9
        echo "        <div class=\"svg-icon\">
  <!-- Replace the SVG content with your provided SVG -->
          <svg class=\"hero-scroll-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
            <g clip-path=\"url(#a)\">
              <path fill=\"currentColor\" fill-rule=\"evenodd\" d=\"M17.64 7.52v8.96a5.64 5.64 0 1 1-11.28 0V7.52a5.64 5.64 0 1 1 11.28 0Zm-13.16 0a7.52 7.52 0 1 1 15.04 0v8.96a7.52 7.52 0 1 1-15.04 0V7.52Zm7.648 3.296 2.108-2.109-.415-.416-1.396 1.396v-4.91h-.594v4.91l-1.396-1.396-.416.416 2.109 2.109Z\" clip-rule=\"evenodd\"/>
            </g>
            <defs>
              <clipPath id=\"a\">
                <path fill=\"currentColor\" d=\"M0 0h24v24H0z\"/>
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"hero-column-right\">

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes.addClass('hero-section') }}>
  <div class=\"hero-column-left\" style=\"background-color: var(--primary); background-image: linear-gradient(to bottom, var(--primary-50) 0%, var(--primary) 100%), url('/alserda/sites/default/files/default_images/header_1.jpg');\">
    <div class=\"hero-column-left-content\">
      <h2 class=\"hero-title\">Zonnepanelen schoonmaken verhoogt jouw rendement</h2>
      <p class=\"hero-subtitle\">Maar doe het wel op de juiste manier</p>
      <button class=\"secondary-button-solar\">Bekijk de video</button>
      <div class=\"hero-scroll-icon-container\">
        {# <img class=\"hero-scroll-icon\" src=\"/alserda/sites/default/files/default_images/icons/scroll.svg\" /> #}
        <div class=\"svg-icon\">
  <!-- Replace the SVG content with your provided SVG -->
          <svg class=\"hero-scroll-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
            <g clip-path=\"url(#a)\">
              <path fill=\"currentColor\" fill-rule=\"evenodd\" d=\"M17.64 7.52v8.96a5.64 5.64 0 1 1-11.28 0V7.52a5.64 5.64 0 1 1 11.28 0Zm-13.16 0a7.52 7.52 0 1 1 15.04 0v8.96a7.52 7.52 0 1 1-15.04 0V7.52Zm7.648 3.296 2.108-2.109-.415-.416-1.396 1.396v-4.91h-.594v4.91l-1.396-1.396-.416.416 2.109 2.109Z\" clip-rule=\"evenodd\"/>
            </g>
            <defs>
              <clipPath id=\"a\">
                <path fill=\"currentColor\" d=\"M0 0h24v24H0z\"/>
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"hero-column-right\">

  </div>
</div>
", "themes/solar/templates/block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\block--block-content--5bcb06a6-c00a-4850-bd60-63dcb28b797f.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
