<?php

/* journal3/template/journal3/module/product_tabs.twig */
class __TwigTemplate_1bd0df4b6799d44c366489f19f8ea17cae9d71c65dfe81a7e7e894720beb8532 extends Twig_Template
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
        if (((isset($context["display"]) ? $context["display"] : null) == "tabs")) {
            // line 2
            echo "  <div class=\"tabs-container ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    <ul class=\"nav nav-tabs\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "        <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
          ";
                // line 6
                if (($this->getAttribute($context["item"], "tabType", array()) == "link")) {
                    // line 7
                    echo "            <a href=\"";
                    echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                    echo "\" ";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                    echo ">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
          ";
                } else {
                    // line 9
                    echo "            <a href=\"#";
                    echo $this->getAttribute($context["item"], "id", array());
                    echo "\" data-toggle=\"tab\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
          ";
                }
                // line 11
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </ul>
    <div class=\"tab-content\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\" id=\"";
                echo $this->getAttribute($context["item"], "id", array());
                echo "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"block-content ";
                // line 19
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">
                ";
                // line 20
                echo $this->getAttribute($context["item"], "content", array());
                echo "
                ";
                // line 21
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 22
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 24
                echo "              </div>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </div>
  </div>
";
        } elseif ((        // line 31
(isset($context["display"]) ? $context["display"] : null) == "accordion")) {
            // line 32
            echo "  <div class=\"panel-group ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
        <div class=\"panel-heading\">
          <h4 class=\"panel-title\">
            <a href=\"#";
                // line 37
                echo $this->getAttribute($context["item"], "id", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\">
              ";
                // line 38
                echo $this->getAttribute($context["item"], "title", array());
                echo "
              <i class=\"fa fa-caret-down\"></i>
            </a>
          </h4>
        </div>
        <div class=\"";
                // line 43
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo $this->getAttribute($context["item"], "id", array());
                echo "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"panel-body block-content ";
                // line 46
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">
                ";
                // line 47
                echo $this->getAttribute($context["item"], "content", array());
                echo "
                ";
                // line 48
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 49
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 51
                echo "              </div>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "  </div>
";
        } else {
            // line 59
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
        ";
                // line 62
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 63
                    echo "        <h3 class=\"title module-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>
        ";
                }
                // line 65
                echo "        <div class=\"block-body expand-block\">
          <div class=\"block-wrapper\">
            <div class=\"block-content ";
                // line 67
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">
              ";
                // line 68
                echo $this->getAttribute($context["item"], "content", array());
                echo "
              ";
                // line 69
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 70
                    echo "                <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
              ";
                }
                // line 72
                echo "            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/product_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 77,  221 => 72,  217 => 70,  215 => 69,  211 => 68,  205 => 67,  201 => 65,  195 => 63,  193 => 62,  188 => 61,  184 => 60,  179 => 59,  175 => 57,  164 => 51,  160 => 49,  158 => 48,  154 => 47,  148 => 46,  140 => 43,  132 => 38,  128 => 37,  121 => 34,  117 => 33,  112 => 32,  110 => 31,  106 => 29,  96 => 24,  92 => 22,  90 => 21,  86 => 20,  80 => 19,  71 => 16,  67 => 15,  63 => 13,  56 => 11,  48 => 9,  38 => 7,  36 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if display == 'tabs' %}*/
/*   <div class="tabs-container {{ j3.classes(classes) }}">*/
/*     <ul class="nav nav-tabs">*/
/*       {% for item in items %}*/
/*         <li class="{{ j3.classes(item.tab_classes) }}">*/
/*           {% if item.tabType == 'link' %}*/
/*             <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>{{ item.title }}</a>*/
/*           {% else %}*/
/*             <a href="#{{ item.id }}" data-toggle="tab">{{ item.title }}</a>*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}" id="{{ item.id }}">*/
/*           <div class="block-body expand-block">*/
/*             <div class="block-wrapper">*/
/*               <div class="block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*                 {{ item.content }}*/
/*                 {% if item.expandButton %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% elseif display == 'accordion' %}*/
/*   <div class="panel-group {{ j3.classes(classes) }}">*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         <div class="panel-heading">*/
/*           <h4 class="panel-title">*/
/*             <a href="#{{ item.id }}" class="accordion-toggle collapsed" data-toggle="collapse" aria-expanded="false">*/
/*               {{ item.title }}*/
/*               <i class="fa fa-caret-down"></i>*/
/*             </a>*/
/*           </h4>*/
/*         </div>*/
/*         <div class="{{ j3.classes(item.panel_classes) }}" id="{{ item.id }}">*/
/*           <div class="block-body expand-block">*/
/*             <div class="block-wrapper">*/
/*               <div class="panel-body block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*                 {{ item.content }}*/
/*                 {% if item.expandButton %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% else %}*/
/*   <div class="{{ j3.classes(classes) }}">*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         {% if item.title %}*/
/*         <h3 class="title module-title">{{ item.title }}</h3>*/
/*         {% endif %}*/
/*         <div class="block-body expand-block">*/
/*           <div class="block-wrapper">*/
/*             <div class="block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*               {{ item.content }}*/
/*               {% if item.expandButton %}*/
/*                 <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
