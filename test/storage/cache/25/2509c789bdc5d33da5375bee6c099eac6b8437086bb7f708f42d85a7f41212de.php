<?php

/* journal3/template/journal3/module/filter.twig */
class __TwigTemplate_c015824c377ab9479d0d0bed096498ac2efd4b61ded67c2d30e7798db7498ac0 extends Twig_Template
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
  <h3 class=\"title module-title\">
    <span>";
        // line 3
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</span>
    <button class=\"reset-filter btn\">";
        // line 4
        echo (isset($context["resetText"]) ? $context["resetText"] : null);
        echo "</button>
    <a class=\"x\"></a>
  </h3>
  <div class=\"module-body\">
    <div class=\"panel-group\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "        ";
            $context["item_input"] = (($this->getAttribute($context["item"], "input", array())) ? ($this->getAttribute($context["item"], "input", array())) : ((isset($context["input"]) ? $context["input"] : null)));
            // line 11
            echo "        <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
            echo "\">
          <div class=\"panel-heading\">
            <div class=\"panel-title\">
              <a href=\"#";
            // line 14
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"accordion-toggle ";
            if ($this->getAttribute($context["item"], "collapsed", array())) {
                echo "collapsed";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"";
            if ($this->getAttribute($context["item"], "collapsed", array())) {
                echo "false";
            } else {
                echo "true";
            }
            echo "\" data-filter=\"";
            echo $this->getAttribute($context["item"], "key", array());
            echo "\">
                ";
            // line 15
            echo $this->getAttribute($context["item"], "title", array());
            echo "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </div>
          </div>
          <div class=\"";
            // line 20
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\">
            <div class=\"panel-body\">
              ";
            // line 22
            if (($this->getAttribute($context["item"], "type", array()) == "p")) {
                // line 23
                echo "                <div class=\"filter-price\" id=\"filter-";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
                  <div class=\"range-slider\">
                    <input type=\"text\" class=\"js-range-slider\" value=\"\"/>
                  </div>
                  <div class=\"extra-controls\">
                    ";
                // line 28
                if ((isset($context["currency_left"]) ? $context["currency_left"] : null)) {
                    // line 29
                    echo "                      <span class=\"currency-symbol currency-left\">";
                    echo (isset($context["currency_left"]) ? $context["currency_left"] : null);
                    echo "</span>
                    ";
                }
                // line 31
                echo "
                    <input type=\"text\" class=\"filter-price-min\" name=\"min\" data-min=\"";
                // line 32
                echo $this->getAttribute($this->getAttribute($context["item"], "price_range", array()), "min", array());
                echo "\" value=\"";
                echo $this->getAttribute($this->getAttribute($context["item"], "current_price_range", array()), "min", array());
                echo "\"/>

                    ";
                // line 34
                if ((isset($context["currency_right"]) ? $context["currency_right"] : null)) {
                    // line 35
                    echo "                      <span class=\"currency-symbol currency-right\">";
                    echo (isset($context["currency_right"]) ? $context["currency_right"] : null);
                    echo "</span>
                    ";
                }
                // line 37
                echo "
                    ";
                // line 38
                if ((isset($context["currency_left"]) ? $context["currency_left"] : null)) {
                    // line 39
                    echo "                      <span class=\"currency-symbol currency-left\">";
                    echo (isset($context["currency_left"]) ? $context["currency_left"] : null);
                    echo "</span>
                    ";
                }
                // line 41
                echo "
                    <input type=\"text\" class=\"filter-price-max\" name=\"max\" data-max=\"";
                // line 42
                echo $this->getAttribute($this->getAttribute($context["item"], "price_range", array()), "max", array());
                echo "\" value=\"";
                echo $this->getAttribute($this->getAttribute($context["item"], "current_price_range", array()), "max", array());
                echo "\"/>

                    ";
                // line 44
                if ((isset($context["currency_right"]) ? $context["currency_right"] : null)) {
                    // line 45
                    echo "                      <span class=\"currency-symbol currency-right\">";
                    echo (isset($context["currency_right"]) ? $context["currency_right"] : null);
                    echo "</span>
                    ";
                }
                // line 47
                echo "                  </div>
                </div>
              ";
            } elseif (($this->getAttribute(            // line 49
$context["item"], "type", array()) == "r")) {
                // line 50
                echo "                <div class=\"filter-rating\" id=\"filter-";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
                  ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 52
                    echo "                    <label>
                      <input type=\"";
                    // line 53
                    echo $this->getAttribute($context["item"], "input", array());
                    echo "\" data-filter-trigger name=\"";
                    echo $this->getAttribute($context["item"], "key", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["subitem"], "id", array());
                    echo "\" ";
                    if ($this->getAttribute($context["subitem"], "checked", array())) {
                        echo "checked";
                    }
                    echo ">
                      <span class=\"links-text rating-stars\">
                        ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 56
                        echo "                          ";
                        if (($this->getAttribute($context["subitem"], "id", array()) < $context["i"])) {
                            // line 57
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 59
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 61
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                      </span>
                      <span class=\"count-badge\">";
                    // line 63
                    echo $this->getAttribute($context["subitem"], "total", array());
                    echo "</span>
                    </label>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                </div>
              ";
            } else {
                // line 68
                echo "                ";
                if ((((isset($context["item_input"]) ? $context["item_input"] : null) == "checkbox") || ((isset($context["item_input"]) ? $context["item_input"] : null) == "radio"))) {
                    // line 69
                    echo "                <div class=\"filter-";
                    echo (isset($context["item_input"]) ? $context["item_input"] : null);
                    echo "\">
                  ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 71
                        echo "                      <label>
                        <input type=\"";
                        // line 72
                        echo (isset($context["item_input"]) ? $context["item_input"] : null);
                        echo "\" data-filter-trigger name=\"";
                        echo $this->getAttribute($context["item"], "key", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["subitem"], "id", array());
                        echo "\" ";
                        if ($this->getAttribute($context["subitem"], "checked", array())) {
                            echo "checked";
                        }
                        echo ">
                        ";
                        // line 73
                        if ($this->getAttribute($context["subitem"], "image", array())) {
                            // line 74
                            echo "                          <img src=\"";
                            echo $this->getAttribute($context["subitem"], "image", array());
                            echo "\" ";
                            if ($this->getAttribute($context["subitem"], "image2x", array())) {
                                echo " srcset=\"";
                                echo $this->getAttribute($context["subitem"], "image", array());
                                echo " 1x, ";
                                echo $this->getAttribute($context["subitem"], "image2x", array());
                                echo " 2x\" ";
                            }
                            echo " width=\"";
                            echo (isset($context["image_width"]) ? $context["image_width"] : null);
                            echo "\" height=\"";
                            echo (isset($context["image_height"]) ? $context["image_height"] : null);
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["subitem"], "value", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["subitem"], "value", array());
                            echo "\" class=\"img-responsive\" ";
                            if ($this->getAttribute($context["item"], "image_only", array())) {
                                echo "data-toggle=\"tooltip\" data-tooltip-class=\"filter-tooltip-";
                                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                                echo "\" data-placement=\"top\"";
                            }
                            echo "/>
                        ";
                        }
                        // line 76
                        echo "                        ";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["subitem"], "value", array()), 1 => $this->getAttribute($context["subitem"], "total", array())), "method");
                        echo "
                      </label>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                </div>
                ";
                } elseif ((                // line 80
(isset($context["item_input"]) ? $context["item_input"] : null) == "select")) {
                    // line 81
                    echo "                  <div class=\"";
                    echo (isset($context["item_input"]) ? $context["item_input"] : null);
                    echo "\">
                    <label>
                      <select name=\"";
                    // line 83
                    echo $this->getAttribute($context["item"], "key", array());
                    echo "\" data-filter-trigger>
                        <option value=\"\"></option>
                        ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 86
                        echo "                          <option value=\"";
                        echo $this->getAttribute($context["subitem"], "id", array());
                        echo "\" ";
                        if ($this->getAttribute($context["subitem"], "checked", array())) {
                            echo "selected";
                        }
                        echo ">";
                        echo (($this->getAttribute($context["subitem"], "total", array())) ? (((($this->getAttribute($context["subitem"], "value", array()) . " (") . $this->getAttribute($context["subitem"], "total", array())) . ")")) : ($this->getAttribute($context["subitem"], "value", array())));
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "                      </select>
                    </label>
                  </div>
                ";
                }
                // line 92
                echo "              ";
            }
            // line 93
            echo "            </div>
          </div>
        </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 97,  348 => 93,  345 => 92,  339 => 88,  324 => 86,  320 => 85,  315 => 83,  309 => 81,  307 => 80,  304 => 79,  294 => 76,  266 => 74,  264 => 73,  252 => 72,  249 => 71,  245 => 70,  240 => 69,  237 => 68,  233 => 66,  224 => 63,  221 => 62,  215 => 61,  211 => 59,  207 => 57,  204 => 56,  200 => 55,  187 => 53,  184 => 52,  180 => 51,  173 => 50,  171 => 49,  167 => 47,  161 => 45,  159 => 44,  152 => 42,  149 => 41,  143 => 39,  141 => 38,  138 => 37,  132 => 35,  130 => 34,  123 => 32,  120 => 31,  114 => 29,  112 => 28,  101 => 23,  99 => 22,  90 => 20,  82 => 15,  64 => 14,  57 => 11,  54 => 10,  37 => 9,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}">*/
/*   <h3 class="title module-title">*/
/*     <span>{{ title }}</span>*/
/*     <button class="reset-filter btn">{{ resetText }}</button>*/
/*     <a class="x"></a>*/
/*   </h3>*/
/*   <div class="module-body">*/
/*     <div class="panel-group">*/
/*       {% for item in items %}*/
/*         {% set item_input = item.input ? item.input : input %}*/
/*         <div class="{{ j3.classes(item.classes) }}">*/
/*           <div class="panel-heading">*/
/*             <div class="panel-title">*/
/*               <a href="#{{ id }}-collapse-{{ loop.index }}" class="accordion-toggle {% if item.collapsed %}collapsed{% endif %}" data-toggle="collapse" aria-expanded="{% if item.collapsed %}false{% else %}true{% endif %}" data-filter="{{ item.key }}">*/
/*                 {{ item.title }}*/
/*                 <i class="fa fa-caret-down"></i>*/
/*               </a>*/
/*             </div>*/
/*           </div>*/
/*           <div class="{{ j3.classes(item.panel_classes) }}" id="{{ id }}-collapse-{{ loop.index }}">*/
/*             <div class="panel-body">*/
/*               {% if item.type == 'p' %}*/
/*                 <div class="filter-price" id="filter-{{ id }}-{{ loop.index }}">*/
/*                   <div class="range-slider">*/
/*                     <input type="text" class="js-range-slider" value=""/>*/
/*                   </div>*/
/*                   <div class="extra-controls">*/
/*                     {% if currency_left %}*/
/*                       <span class="currency-symbol currency-left">{{ currency_left }}</span>*/
/*                     {% endif %}*/
/* */
/*                     <input type="text" class="filter-price-min" name="min" data-min="{{ item.price_range.min }}" value="{{ item.current_price_range.min }}"/>*/
/* */
/*                     {% if currency_right %}*/
/*                       <span class="currency-symbol currency-right">{{ currency_right }}</span>*/
/*                     {% endif %}*/
/* */
/*                     {% if currency_left %}*/
/*                       <span class="currency-symbol currency-left">{{ currency_left }}</span>*/
/*                     {% endif %}*/
/* */
/*                     <input type="text" class="filter-price-max" name="max" data-max="{{ item.price_range.max }}" value="{{ item.current_price_range.max }}"/>*/
/* */
/*                     {% if currency_right %}*/
/*                       <span class="currency-symbol currency-right">{{ currency_right }}</span>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% elseif item.type == 'r' %}*/
/*                 <div class="filter-rating" id="filter-{{ id }}-{{ loop.index }}">*/
/*                   {% for subitem in item.items %}*/
/*                     <label>*/
/*                       <input type="{{ item.input }}" data-filter-trigger name="{{ item.key }}" value="{{ subitem.id }}" {% if subitem.checked %}checked{% endif %}>*/
/*                       <span class="links-text rating-stars">*/
/*                         {% for i in 1..5 %}*/
/*                           {% if subitem.id < i %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </span>*/
/*                       <span class="count-badge">{{ subitem.total }}</span>*/
/*                     </label>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% else %}*/
/*                 {% if (item_input == 'checkbox') or (item_input == 'radio') %}*/
/*                 <div class="filter-{{ item_input }}">*/
/*                   {% for subitem in item.items %}*/
/*                       <label>*/
/*                         <input type="{{ item_input }}" data-filter-trigger name="{{ item.key }}" value="{{ subitem.id }}" {% if subitem.checked %}checked{% endif %}>*/
/*                         {% if subitem.image %}*/
/*                           <img src="{{ subitem.image }}" {% if subitem.image2x %} srcset="{{ subitem.image }} 1x, {{ subitem.image2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ subitem.value }}" title="{{ subitem.value }}" class="img-responsive" {% if item.image_only %}data-toggle="tooltip" data-tooltip-class="filter-tooltip-{{ module_id }}" data-placement="top"{% endif %}/>*/
/*                         {% endif %}*/
/*                         {{ j3.countBadge(subitem.value, subitem.total) }}*/
/*                       </label>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% elseif item_input == 'select' %}*/
/*                   <div class="{{ item_input }}">*/
/*                     <label>*/
/*                       <select name="{{ item.key }}" data-filter-trigger>*/
/*                         <option value=""></option>*/
/*                         {% for subitem in item.items %}*/
/*                           <option value="{{ subitem.id }}" {% if subitem.checked %}selected{% endif %}>{{ subitem.total ? subitem.value ~ ' (' ~ subitem.total ~ ')' : subitem.value }}</option>*/
/*                         {% endfor %}*/
/*                       </select>*/
/*                     </label>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
