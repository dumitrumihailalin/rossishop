<?php

/* journal3/template/journal3/module/button.twig */
class __TwigTemplate_8b6ad23e2fd887e5f389641a91d4ea2f3b22f279fce09132fe1197585f2c35c2 extends Twig_Template
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
  ";
        // line 2
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "href", array())) {
            // line 3
            echo "    <a class=\"btn\" href=\"";
            echo $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "href", array());
            echo "\" ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => (isset($context["link"]) ? $context["link"] : null)), "method");
            echo ">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</a>
  ";
        } else {
            // line 5
            echo "    <a class=\"btn\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</a>
  ";
        }
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  36 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}">*/
/*   {% if link.href %}*/
/*     <a class="btn" href="{{ link.href }}" {{ j3.linkAttrs(link) }}>{{ title }}</a>*/
/*   {% else %}*/
/*     <a class="btn">{{ title }}</a>*/
/*   {% endif %}*/
/* </div>*/
/* */
