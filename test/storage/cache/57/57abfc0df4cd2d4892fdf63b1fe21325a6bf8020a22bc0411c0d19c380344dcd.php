<?php

/* journal3/template/common/maintenance.twig */
class __TwigTemplate_445d56a14608049315dd31a0b74a4a28cd4fa57045255814579b4bfb5214a272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"common-maintenance\" class=\"container\">
    ";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "maintenanceContent"), "method");
        echo "
    ";
        // line 4
        echo (isset($context["grid"]) ? $context["grid"] : null);
        echo "
</div>
";
        // line 6
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-maintenance" class="container">*/
/*     {{ j3.settings.get('maintenanceContent') }}*/
/*     {{ grid }}*/
/* </div>*/
/* {{ footer }}*/
/* */
