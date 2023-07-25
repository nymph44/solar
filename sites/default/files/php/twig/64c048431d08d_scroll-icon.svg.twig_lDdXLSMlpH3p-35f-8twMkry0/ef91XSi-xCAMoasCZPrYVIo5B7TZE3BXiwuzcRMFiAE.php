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

/* @solar/atoms/scroll-icon.svg.twig */
class __TwigTemplate_b8720da29e936412caf0a9773a3a13cb extends Template
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
        echo "<!-- templates/atoms/scroll-icon.svg.twig -->
<svg class=\"hero-scroll-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
  <g clip-path=\"url(#a)\">
    <path fill=\"currentColor\" fill-rule=\"evenodd\" d=\"M17.64 7.52v8.96a5.64 5.64 0 1 1-11.28 0V7.52a5.64 5.64 0 1 1 11.28 0Zm-13.16 0a7.52 7.52 0 1 1 15.04 0v8.96a7.52 7.52 0 1 1-15.04 0V7.52Zm7.648 3.296 2.108-2.109-.415-.416-1.396 1.396v-4.91h-.594v4.91l-1.396-1.396-.416.416 2.109 2.109Z\" clip-rule=\"evenodd\"/>
  </g>
  <defs>
    <clipPath id=\"a\">
      <path fill=\"currentColor\" d=\"M0 0h24v24H0z\"/>
    </clipPath>
  </defs>
</svg>";
    }

    public function getTemplateName()
    {
        return "@solar/atoms/scroll-icon.svg.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/atoms/scroll-icon.svg.twig -->
<svg class=\"hero-scroll-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\">
  <g clip-path=\"url(#a)\">
    <path fill=\"currentColor\" fill-rule=\"evenodd\" d=\"M17.64 7.52v8.96a5.64 5.64 0 1 1-11.28 0V7.52a5.64 5.64 0 1 1 11.28 0Zm-13.16 0a7.52 7.52 0 1 1 15.04 0v8.96a7.52 7.52 0 1 1-15.04 0V7.52Zm7.648 3.296 2.108-2.109-.415-.416-1.396 1.396v-4.91h-.594v4.91l-1.396-1.396-.416.416 2.109 2.109Z\" clip-rule=\"evenodd\"/>
  </g>
  <defs>
    <clipPath id=\"a\">
      <path fill=\"currentColor\" d=\"M0 0h24v24H0z\"/>
    </clipPath>
  </defs>
</svg>", "@solar/atoms/scroll-icon.svg.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\atoms\\scroll-icon.svg.twig");
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
