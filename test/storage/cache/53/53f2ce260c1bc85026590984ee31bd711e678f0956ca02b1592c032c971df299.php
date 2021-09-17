<?php

/* journal3/template/journal3/module/popup_page.twig */
class __TwigTemplate_c9ea51da1598641ea77c86dfef92390b824bbe3cdef2e1717e9f827de18b340d extends Twig_Template
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
        echo "<html>
<head>
  <style>";
        // line 3
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "</style>
</head>
<body>
";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/popup_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*   <style>{{ css }}</style>*/
/* </head>*/
/* <body>*/
/* {{ content }}*/
/* </body>*/
/* </html>*/
/* */
