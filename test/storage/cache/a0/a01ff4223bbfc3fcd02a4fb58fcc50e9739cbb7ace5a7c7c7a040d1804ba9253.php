<?php

/* journal3/template/journal3/module/title.twig */
class __TwigTemplate_cd658393b2f843fce39e546ff702205da3f83c53a727e83a73cfe93723cc3459 extends Twig_Template
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
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  <div class=\"title-wrapper\">
    <h3>";
        // line 3
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h3>
    <div class=\"title-divider\"></div>
    <div class=\"subtitle\">";
        // line 5
        echo (isset($context["subtitle"]) ? $context["subtitle"] : null);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}">*/
/*   <div class="title-wrapper">*/
/*     <h3>{{ title }}</h3>*/
/*     <div class="title-divider"></div>*/
/*     <div class="subtitle">{{ subtitle }}</div>*/
/*   </div>*/
/* </div>*/
/* */
