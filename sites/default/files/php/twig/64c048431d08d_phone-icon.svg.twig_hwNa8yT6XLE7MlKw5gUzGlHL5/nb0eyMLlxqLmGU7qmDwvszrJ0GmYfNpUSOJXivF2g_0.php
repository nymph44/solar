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

/* @solar/atoms/phone-icon.svg.twig */
class __TwigTemplate_6b6dc336caeed2c8fe01ac4837221239 extends Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
  <!-- Your SVG code for the phone icon goes here -->
  <path fill=\"currentColor\" fill-rule=\"evenodd\" d=\"M18.167 14.383c-.072-.119-.265-.19-.553-.334-.289-.143-1.709-.836-1.974-.932-.264-.095-.457-.143-.65.144-.192.286-.746.932-.914 1.122-.169.192-.337.216-.626.073-.288-.144-1.219-.446-2.323-1.422-.858-.76-1.437-1.697-1.606-1.985-.169-.287-.018-.441.127-.584.13-.129.288-.335.433-.502.144-.167.192-.286.289-.478.096-.191.048-.358-.024-.503-.073-.142-.651-1.552-.891-2.126-.24-.574-.48-.478-.65-.478-.168 0-.361-.024-.553-.024-.193 0-.506.071-.771.358-.264.287-1.01.98-1.01 2.39 0 1.41 1.034 2.773 1.179 2.963.145.192 1.998 3.18 4.933 4.327 2.937 1.147 2.937.765 3.466.716.53-.047 1.709-.693 1.95-1.362.24-.67.24-1.243.168-1.363Zm-5.95-12.52c-5.462 0-9.905 4.408-9.905 9.828 0 2.15.702 4.143 1.887 5.763l-1.237 3.65 3.806-1.21a9.905 9.905 0 0 0 5.45 1.626c5.462 0 9.906-4.41 9.906-9.829 0-5.42-4.444-9.828-9.906-9.828Zm0 21.518a11.8 11.8 0 0 1-5.694-1.454L0 24l2.127-6.272A11.569 11.569 0 0 1 .436 11.69C.436 5.235 5.71 0 12.219 0 18.725 0 24 5.235 24 11.691c0 6.457-5.274 11.69-11.782 11.69Z\" clip-rule=\"evenodd\" />
</svg>
";
    }

    public function getTemplateName()
    {
        return "@solar/atoms/phone-icon.svg.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/atoms/phone-icon.svg.twig #}
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
  <!-- Your SVG code for the phone icon goes here -->
  <path fill=\"currentColor\" fill-rule=\"evenodd\" d=\"M18.167 14.383c-.072-.119-.265-.19-.553-.334-.289-.143-1.709-.836-1.974-.932-.264-.095-.457-.143-.65.144-.192.286-.746.932-.914 1.122-.169.192-.337.216-.626.073-.288-.144-1.219-.446-2.323-1.422-.858-.76-1.437-1.697-1.606-1.985-.169-.287-.018-.441.127-.584.13-.129.288-.335.433-.502.144-.167.192-.286.289-.478.096-.191.048-.358-.024-.503-.073-.142-.651-1.552-.891-2.126-.24-.574-.48-.478-.65-.478-.168 0-.361-.024-.553-.024-.193 0-.506.071-.771.358-.264.287-1.01.98-1.01 2.39 0 1.41 1.034 2.773 1.179 2.963.145.192 1.998 3.18 4.933 4.327 2.937 1.147 2.937.765 3.466.716.53-.047 1.709-.693 1.95-1.362.24-.67.24-1.243.168-1.363Zm-5.95-12.52c-5.462 0-9.905 4.408-9.905 9.828 0 2.15.702 4.143 1.887 5.763l-1.237 3.65 3.806-1.21a9.905 9.905 0 0 0 5.45 1.626c5.462 0 9.906-4.41 9.906-9.829 0-5.42-4.444-9.828-9.906-9.828Zm0 21.518a11.8 11.8 0 0 1-5.694-1.454L0 24l2.127-6.272A11.569 11.569 0 0 1 .436 11.69C.436 5.235 5.71 0 12.219 0 18.725 0 24 5.235 24 11.691c0 6.457-5.274 11.69-11.782 11.69Z\" clip-rule=\"evenodd\" />
</svg>
", "@solar/atoms/phone-icon.svg.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\atoms\\phone-icon.svg.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
