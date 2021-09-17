<?php

/* journal3/template/journal3/module/accordion_menu.twig */
class __TwigTemplate_5010222879ceb73ef4f18ef9f20eb668794aa35aade0e0ae5986f5a361d170f1 extends Twig_Template
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
        // line 39
        $context["self"] = $this;
        // line 40
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  ";
        // line 41
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 42
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
  ";
        }
        // line 44
        echo "  <ul class=\"j-menu\">
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "      ";
            echo $context["self"]->getrenderAccordionMenu((isset($context["j3"]) ? $context["j3"] : null), $context["item"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </ul>
</div>
";
    }

    // line 1
    public function getrenderAccordionMenu($__j3__ = null, $__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "j3" => $__j3__,
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["self"] = $this;
            // line 3
            echo "  <li class=\"";
            echo twig_replace_filter($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "classes", array())), "method"), array("dropdown" => ""));
            echo "\">
    ";
            // line 4
            $context["id"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "uniqueId", array(0 => "collapse-"), "method");
            // line 5
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array())) {
                // line 6
                echo "      <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array());
                echo "\" ";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array())), "method");
                echo ">
        ";
                // line 7
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                echo "
        ";
                // line 8
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array())) {
                    // line 9
                    echo "          ";
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "isOpen", array())) {
                        // line 10
                        echo "            <span class=\"open-menu\" data-toggle=\"collapse\" data-target=\"#";
                        echo (isset($context["id"]) ? $context["id"] : null);
                        echo "\" aria-expanded=\"true\" role=\"heading\"><i class=\"fa fa-plus\"></i></span>
          ";
                    } else {
                        // line 12
                        echo "            <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        echo (isset($context["id"]) ? $context["id"] : null);
                        echo "\" role=\"heading\"><i class=\"fa fa-plus\"></i></span>
          ";
                    }
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "      </a>
    ";
            } else {
                // line 17
                echo "      <a>
        ";
                // line 18
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                echo "
        ";
                // line 19
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array())) {
                    // line 20
                    echo "          ";
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "isOpen", array())) {
                        // line 21
                        echo "            <span class=\"open-menu\" data-toggle=\"collapse\" data-target=\"#";
                        echo (isset($context["id"]) ? $context["id"] : null);
                        echo "\" aria-expanded=\"true\" role=\"heading\"><i class=\"fa fa-plus\"></i></span>
          ";
                    } else {
                        // line 23
                        echo "            <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        echo (isset($context["id"]) ? $context["id"] : null);
                        echo "\" role=\"heading\"><i class=\"fa fa-plus\"></i></span>
          ";
                    }
                    // line 25
                    echo "        ";
                }
                // line 26
                echo "      </a>
    ";
            }
            // line 28
            echo "    ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array())) {
                // line 29
                echo "      <div class=\"collapse ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "isOpen", array())) {
                    echo "in";
                }
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\">
        <ul class=\"j-menu\">
          ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 32
                    echo "            ";
                    echo $context["self"]->getrenderAccordionMenu((isset($context["j3"]) ? $context["j3"] : null), $context["subitem"]);
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </ul>
      </div>
    ";
            }
            // line 37
            echo "  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/accordion_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 37,  174 => 34,  165 => 32,  161 => 31,  151 => 29,  148 => 28,  144 => 26,  141 => 25,  135 => 23,  129 => 21,  126 => 20,  124 => 19,  120 => 18,  117 => 17,  113 => 15,  110 => 14,  104 => 12,  98 => 10,  95 => 9,  93 => 8,  89 => 7,  82 => 6,  79 => 5,  77 => 4,  72 => 3,  69 => 2,  56 => 1,  50 => 48,  41 => 46,  37 => 45,  34 => 44,  28 => 42,  26 => 41,  21 => 40,  19 => 39,);
    }
}
/* {% macro renderAccordionMenu(j3, item) %}*/
/*   {% import _self as self %}*/
/*   <li class="{{ j3.classes(item.classes) | replace({'dropdown': ''}) }}">*/
/*     {% set id = j3.uniqueId('collapse-') %}*/
/*     {% if item.link.href %}*/
/*       <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>*/
/*         {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*         {% if item.items %}*/
/*           {% if item.isOpen %}*/
/*             <span class="open-menu" data-toggle="collapse" data-target="#{{ id }}" aria-expanded="true" role="heading"><i class="fa fa-plus"></i></span>*/
/*           {% else %}*/
/*             <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ id }}" role="heading"><i class="fa fa-plus"></i></span>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </a>*/
/*     {% else %}*/
/*       <a>*/
/*         {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*         {% if item.items %}*/
/*           {% if item.isOpen %}*/
/*             <span class="open-menu" data-toggle="collapse" data-target="#{{ id }}" aria-expanded="true" role="heading"><i class="fa fa-plus"></i></span>*/
/*           {% else %}*/
/*             <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ id }}" role="heading"><i class="fa fa-plus"></i></span>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </a>*/
/*     {% endif %}*/
/*     {% if item.items %}*/
/*       <div class="collapse {% if item.isOpen %}in{% endif %}" id="{{ id }}">*/
/*         <ul class="j-menu">*/
/*           {% for subitem in item.items %}*/
/*             {{ self.renderAccordionMenu(j3, subitem) }}*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     {% endif %}*/
/*   </li>*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <ul class="j-menu">*/
/*     {% for item in items %}*/
/*       {{ self.renderAccordionMenu(j3, item) }}*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
