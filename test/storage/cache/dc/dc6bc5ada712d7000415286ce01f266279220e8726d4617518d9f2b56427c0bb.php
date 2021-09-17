<?php

/* journal3/template/product/category.twig */
class __TwigTemplate_46743e791c97f6577f61034b304b026136626c8c7e232b55e62d36721baf4fd1 extends Twig_Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</span></h1>
";
        }
        // line 10
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
        echo "
<div class=\"container\">
  <div class=\"row\">";
        // line 12
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    <div id=\"content\">
      ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 15
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 17
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "categoryPageDescStatus"), "method")) {
            // line 18
            echo "      ";
            if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
                // line 19
                echo "        <div class=\"category-description\">
          ";
                // line 20
                if (((isset($context["thumb"]) ? $context["thumb"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "categoryPageCategoryImageStatus"), "method"))) {
                    // line 21
                    echo "          <img src=\"";
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" ";
                    if ((isset($context["thumb2x"]) ? $context["thumb2x"] : null)) {
                        echo "srcset=\"";
                        echo (isset($context["thumb"]) ? $context["thumb"] : null);
                        echo " 1x, ";
                        echo (isset($context["thumb2x"]) ? $context["thumb2x"] : null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"category-image\"/>
          ";
                }
                // line 23
                echo "          ";
                if (((isset($context["description"]) ? $context["description"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "categoryPageCategoryDescriptionStatus"), "method"))) {
                    // line 24
                    echo "            <div class=\"category-text\">";
                    echo (isset($context["description"]) ? $context["description"] : null);
                    echo "</div>
          ";
                }
                // line 26
                echo "        </div>
      ";
            }
            // line 28
            echo "      ";
        }
        // line 29
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "subcategoriesStatus"), "method")) {
            // line 31
            echo "        ";
            if ((isset($context["categories"]) ? $context["categories"] : null)) {
                // line 32
                echo "          <div class=\"refine-categories refine-";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "subcategoriesDisplay"), "method");
                echo "\">
            ";
                // line 33
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "refineTitle"), "method")) {
                    // line 34
                    echo "              <h3 class=\"refine-title title\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "refineTitleText"), "method");
                    echo "</h3>
            ";
                }
                // line 36
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "subcategoriesDisplay"), "method") == "carousel")) {
                    // line 37
                    echo "            <div class=\"swiper\" data-items-per-row='";
                    echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "subcategoriesItemsPerRow"), "method"), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "carousel", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getJs", array(), "method"), 1 => "subcategoriesCarouselStyle"), "method"), twig_constant("JSON_FORCE_OBJECT"));
                    echo "'>
              <div class=\"swiper-container\" ";
                    // line 38
                    if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                <div class=\"swiper-wrapper\">
                  ";
                } else {
                    // line 41
                    echo "                  <div class=\"refine-items\">
                    ";
                }
                // line 43
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 44
                    echo "                      <div class=\"refine-item ";
                    if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "subcategoriesDisplay"), "method") == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 45
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">
                          ";
                    // line 46
                    if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "subcategoriesDisplay"), "method") != "links")) {
                        // line 47
                        echo "                            <img src=\"";
                        echo $this->getAttribute($context["category"], "image", array());
                        echo "\" ";
                        if ($this->getAttribute($context["category"], "image2x", array())) {
                            echo "data-srcset=\"";
                            echo $this->getAttribute($context["category"], "image", array());
                            echo " 1x, ";
                            echo $this->getAttribute($context["category"], "image2x", array());
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo $this->getAttribute($context["category"], "alt", array());
                        echo "\"/>
                          ";
                    }
                    // line 49
                    echo "                          <span class=\"refine-name\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "subcategoriesDisplay"), "method") != "carousel")) {
                    // line 54
                    echo "                  </div>
                  ";
                } else {
                    // line 56
                    echo "                </div>
              </div>
              <div class=\"swiper-buttons\">
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
              </div>
              <div class=\"swiper-pagination\"></div>
            </div>
            ";
                }
                // line 65
                echo "          </div>
        ";
            }
            // line 67
            echo "      ";
        }
        // line 68
        echo "      <div class=\"main-products-wrapper\">
      ";
        // line 69
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 70
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sortBarStatus"), "method")) {
                // line 71
                echo "        <div class=\"products-filter\">
          <div class=\"grid-list\">
            <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 73
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalProductView"), "method") == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "\" data-view=\"grid\"></button>
            <button id=\"btn-list-view\" class=\"view-btn ";
                // line 74
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalProductView"), "method") == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "\" data-view=\"list\"></button>
            <a href=\"";
                // line 75
                echo (isset($context["compare"]) ? $context["compare"] : null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">";
                echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
                echo "</a>
          </div>
          <div class=\"select-group\">
            <div class=\"input-group input-group-sm sort-by\">
              <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 79
                echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
                echo "</label>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 82
                    echo "                  ";
                    if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                        // line 83
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
                  ";
                    } else {
                        // line 85
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
                  ";
                    }
                    // line 87
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "              </select>
            </div>
            <div class=\"input-group input-group-sm per-page\">
              <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 91
                echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
                echo "</label>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 94
                    echo "                  ";
                    if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                        // line 95
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
                  ";
                    } else {
                        // line 97
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
                  ";
                    }
                    // line 99
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "              </select>
            </div>
          </div>
        </div>
        ";
            }
            // line 105
            echo "        <div class=\"main-products product-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalProductView"), "method");
            echo "\">
          ";
            // line 106
            $context["display"] = $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalProductView"), "method");
            // line 107
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/category.twig", 107)->display($context);
            // line 108
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 110
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 111
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        }
        // line 114
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 115
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 117
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>
      ";
        }
        // line 120
        echo "      </div>
      ";
        // line 121
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 122
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 124
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/seo/rich_snippets", 1 => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)), "method");
        echo "
";
        // line 125
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 125,  398 => 124,  393 => 122,  389 => 121,  386 => 120,  378 => 117,  372 => 115,  369 => 114,  363 => 111,  359 => 110,  355 => 108,  352 => 107,  350 => 106,  345 => 105,  338 => 100,  332 => 99,  324 => 97,  316 => 95,  313 => 94,  309 => 93,  304 => 91,  299 => 88,  293 => 87,  285 => 85,  277 => 83,  274 => 82,  270 => 81,  265 => 79,  256 => 75,  248 => 74,  240 => 73,  236 => 71,  233 => 70,  231 => 69,  228 => 68,  225 => 67,  221 => 65,  210 => 56,  206 => 54,  203 => 53,  192 => 49,  176 => 47,  174 => 46,  170 => 45,  163 => 44,  158 => 43,  154 => 41,  146 => 38,  139 => 37,  136 => 36,  130 => 34,  128 => 33,  123 => 32,  120 => 31,  118 => 30,  113 => 29,  110 => 28,  106 => 26,  100 => 24,  97 => 23,  79 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  62 => 15,  60 => 14,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title"><span>{{ heading_title }}</span></h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     <div id="content">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {% if j3.settings.get('categoryPageDescStatus') %}*/
/*       {% if thumb or description %}*/
/*         <div class="category-description">*/
/*           {% if thumb and j3.settings.get('categoryPageCategoryImageStatus') %}*/
/*           <img src="{{ thumb }}" {% if thumb2x %}srcset="{{ thumb }} 1x, {{ thumb2x }} 2x"{% endif %} alt="{{ heading_title }}" title="{{ heading_title }}" class="category-image"/>*/
/*           {% endif %}*/
/*           {% if description and j3.settings.get('categoryPageCategoryDescriptionStatus') %}*/
/*             <div class="category-text">{{ description }}</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       {% if j3.settings.get('subcategoriesStatus') %}*/
/*         {% if categories %}*/
/*           <div class="refine-categories refine-{{ j3.settings.get('subcategoriesDisplay') }}">*/
/*             {% if j3.settings.get('refineTitle') %}*/
/*               <h3 class="refine-title title">{{ j3.settings.get('refineTitleText') }}</h3>*/
/*             {% endif %}*/
/*             {% if j3.settings.get('subcategoriesDisplay') == 'carousel' %}*/
/*             <div class="swiper" data-items-per-row='{{ j3.settings.get('subcategoriesItemsPerRow')|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ j3.carousel(j3.document.getJs(), 'subcategoriesCarouselStyle')|json_encode(constant('JSON_FORCE_OBJECT')) }}'>*/
/*               <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% else %}*/
/*                   <div class="refine-items">*/
/*                     {% endif %}*/
/*                     {% for category in categories %}*/
/*                       <div class="refine-item {% if j3.settings.get('subcategoriesDisplay') == 'carousel' %}swiper-slide{% endif %}">*/
/*                         <a href="{{ category.href }}">*/
/*                           {% if j3.settings.get('subcategoriesDisplay') != 'links' %}*/
/*                             <img src="{{ category.image }}" {% if category.image2x %}data-srcset="{{ category.image }} 1x, {{ category.image2x }} 2x"{% endif %} alt="{{ category.alt }}"/>*/
/*                           {% endif %}*/
/*                           <span class="refine-name">{{ category.name }}</span>*/
/*                         </a>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                     {% if j3.settings.get('subcategoriesDisplay') != 'carousel' %}*/
/*                   </div>*/
/*                   {% else %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="swiper-buttons">*/
/*                 <div class="swiper-button-prev"></div>*/
/*                 <div class="swiper-button-next"></div>*/
/*               </div>*/
/*               <div class="swiper-pagination"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       <div class="main-products-wrapper">*/
/*       {% if products %}*/
/*         {% if j3.settings.get('sortBarStatus') %}*/
/*         <div class="products-filter">*/
/*           <div class="grid-list">*/
/*             <button id="btn-grid-view" class="view-btn {% if j3.settings.get('globalProductView') == 'grid' %}active{% endif %}" data-toggle="tooltip" title="{{ button_grid }}" data-view="grid"></button>*/
/*             <button id="btn-list-view" class="view-btn {% if j3.settings.get('globalProductView') == 'list' %}active{% endif %}" data-toggle="tooltip" title="{{ button_list }}" data-view="list"></button>*/
/*             <a href="{{ compare }}" id="compare-total" class="compare-btn">{{ text_compare }}</a>*/
/*           </div>*/
/*           <div class="select-group">*/
/*             <div class="input-group input-group-sm sort-by">*/
/*               <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*               <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                 {% for sorts in sorts %}*/
/*                   {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                     <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="input-group input-group-sm per-page">*/
/*               <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*               <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                 {% for limits in limits %}*/
/*                   {% if limits.value == limit %}*/
/*                     <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="main-products product-{{ j3.settings.get('globalProductView') }}">*/
/*           {% set display = j3.settings.get('globalProductView') %}*/
/*           {% include "journal3/template/journal3/product_card.twig" %}*/
/*         </div>*/
/*         <div class="row pagination-results">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*         </div>*/
/*       {% endif %}*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ j3.loadController('journal3/seo/rich_snippets', breadcrumbs) }}*/
/* {{ footer }}*/
/* */
