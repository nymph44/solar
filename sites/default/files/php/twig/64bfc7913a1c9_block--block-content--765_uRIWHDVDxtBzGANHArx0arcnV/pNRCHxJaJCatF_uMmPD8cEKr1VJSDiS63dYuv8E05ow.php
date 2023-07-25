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

/* themes/solar/templates/block--block-content--7652d229-ec50-4671-90aa-7b187db35a71.html.twig */
class __TwigTemplate_4ad5fd725da630e5a8a3b2fe544aad9d extends Template
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
        echo "<div class=\"navigation-container\">
<div class=\"navigation-wrapper\">
  <div class=\"logo-container\">
  ";
        // line 5
        echo "  ";
        // line 7
        echo "    <img src=\"/alserda/sites/default/files/default_images/logo.svg\" alt=\"logo\" style=\"width: 100px; margin-right: 10px; margin-top: 5px;\"/>
  </div>

  <div class=\"phone-container\">
  <img src=\"/alserda/sites/default/files/default_images/icons/whatsapp.svg\" alt=\"phone\" class=\"whatsapp-svg\" />
    <a>Whatsapp</a>
    <span style=\"margin-left:4px; margin-right:4px;\">/</span>
    <span style=\"color: var(--primary)\">0511 - 82 03 97</span>
  </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/solar/templates/block--block-content--7652d229-ec50-4671-90aa-7b187db35a71.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  44 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navigation-container\">
<div class=\"navigation-wrapper\">
  <div class=\"logo-container\">
  {# Hide the label of the SVG image field #}
  {# {{ content.field_logo.0['#title'] }}
  {{ content.field_logo }} #}
    <img src=\"/alserda/sites/default/files/default_images/logo.svg\" alt=\"logo\" style=\"width: 100px; margin-right: 10px; margin-top: 5px;\"/>
  </div>

  <div class=\"phone-container\">
  <img src=\"/alserda/sites/default/files/default_images/icons/whatsapp.svg\" alt=\"phone\" class=\"whatsapp-svg\" />
    <a>Whatsapp</a>
    <span style=\"margin-left:4px; margin-right:4px;\">/</span>
    <span style=\"color: var(--primary)\">0511 - 82 03 97</span>
  </div>
  </div>

</div>
", "themes/solar/templates/block--block-content--7652d229-ec50-4671-90aa-7b187db35a71.html.twig", "C:\\MAMP\\htdocs\\alserda\\themes\\solar\\templates\\block--block-content--7652d229-ec50-4671-90aa-7b187db35a71.html.twig");
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
