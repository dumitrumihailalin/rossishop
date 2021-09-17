<?php

/* journal3/template/product/search.twig */
class __TwigTemplate_ddb21e249b1f866b635430f2ef72c50e7b3124d7fed67ae9e5c2b012843ad65f extends Twig_Template
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
            echo "  <li><a href=\"";
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
<div id=\"product-search\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 13
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 24
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2 class=\"title search-criteria-title\">";
        // line 25
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</h2>

      <div class=\"search-form\">
        <div class=\"inputs\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 29
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />

          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 32
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 34
            echo "              ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 35
                echo "                <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
              ";
            } else {
                // line 37
                echo "                <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
              ";
            }
            // line 39
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 40
                echo "                ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 41
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
                ";
                } else {
                    // line 43
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
                ";
                }
                // line 45
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 46
                    echo "                  ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 47
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
                  ";
                    } else {
                        // line 49
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
                  ";
                    }
                    // line 51
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          </select>
        </div>

        <div class=\"checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 59
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 60
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 62
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 64
        echo "            ";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>

        <div class=\"checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 69
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 70
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
            ";
        } else {
            // line 72
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
            ";
        }
        // line 74
        echo "            ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
        </div>

      </div>

      <div class=\"buttons clearfix\">
          <div class=\"pull-right\"><button id=\"button-search\" class=\"btn btn-primary\"><span>";
        // line 80
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "</span></button></div>
      </div>
      <h2 class=\"title search-products-title\">";
        // line 82
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h2>
      <div class=\"main-products-wrapper\">
      ";
        // line 84
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 85
            echo "          ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sortBarStatus"), "method")) {
                // line 86
                echo "              <div class=\"products-filter\">
                  <div class=\"grid-list\">
                    <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 88
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalProductView"), "method") == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "\" data-view=\"grid\"></button>
                    <button id=\"btn-list-view\" class=\"view-btn ";
                // line 89
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalProductView"), "method") == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "\" data-view=\"list\"></button>
                    <a href=\"";
                // line 90
                echo (isset($context["compare"]) ? $context["compare"] : null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">";
                echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
                echo "</a>
                  </div>
                  <div class=\"select-group\">
                      <div class=\"input-group input-group-sm sort-by\">
                          <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 94
                echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
                echo "</label>
                          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                              ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 97
                    echo "                                  ";
                    if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                        // line 98
                        echo "                                      <option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
                                  ";
                    } else {
                        // line 100
                        echo "                                      <option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
                                  ";
                    }
                    // line 102
                    echo "                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                          </select>
                      </div>
                      <div class=\"input-group input-group-sm per-page\">
                          <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 106
                echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
                echo "</label>
                          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                              ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 109
                    echo "                                  ";
                    if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                        // line 110
                        echo "                                      <option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
                                  ";
                    } else {
                        // line 112
                        echo "                                      <option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
                                  ";
                    }
                    // line 114
                    echo "                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "                          </select>
                      </div>
                  </div>
              </div>
          ";
            }
            // line 120
            echo "        <div class=\"main-products product-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalProductView"), "method");
            echo "\">
          ";
            // line 121
            $context["display"] = $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalProductView"), "method");
            // line 122
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/search.twig", 122)->display($context);
            // line 123
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 125
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 126
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        } else {
            // line 129
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 131
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>
      ";
        }
        // line 134
        echo "      </div>
      ";
        // line 135
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 136
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 185
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 185,  420 => 136,  416 => 135,  413 => 134,  405 => 131,  399 => 129,  393 => 126,  389 => 125,  385 => 123,  382 => 122,  380 => 121,  375 => 120,  368 => 115,  362 => 114,  354 => 112,  346 => 110,  343 => 109,  339 => 108,  334 => 106,  329 => 103,  323 => 102,  315 => 100,  307 => 98,  304 => 97,  300 => 96,  295 => 94,  286 => 90,  278 => 89,  270 => 88,  266 => 86,  263 => 85,  261 => 84,  256 => 82,  251 => 80,  241 => 74,  237 => 72,  233 => 70,  231 => 69,  222 => 64,  218 => 62,  214 => 60,  212 => 59,  205 => 54,  199 => 53,  193 => 52,  187 => 51,  179 => 49,  171 => 47,  168 => 46,  163 => 45,  155 => 43,  147 => 41,  144 => 40,  139 => 39,  131 => 37,  123 => 35,  120 => 34,  116 => 33,  112 => 32,  104 => 29,  97 => 25,  92 => 24,  86 => 22,  84 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  59 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title"><span>{{ heading_title }}</span></h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div id="product-search" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <h2 class="title search-criteria-title">{{ entry_search }}</h2>*/
/* */
/*       <div class="search-form">*/
/*         <div class="inputs">*/
/*           <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/* */
/*           <select name="category_id" class="form-control">*/
/*             <option value="0">{{ text_category }}</option>*/
/*             {% for category_1 in categories %}*/
/*               {% if category_1.category_id == category_id %}*/
/*                 <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*               {% else %}*/
/*                 <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*               {% endif %}*/
/*               {% for category_2 in category_1.children %}*/
/*                 {% if category_2.category_id == category_id %}*/
/*                   <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*                 {% endif %}*/
/*                 {% for category_3 in category_2.children %}*/
/*                   {% if category_3.category_id == category_id %}*/
/*                     <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               {% endfor %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/* */
/*         <div class="checkbox">*/
/*           <label class="checkbox-inline">*/
/*             {% if sub_category %}*/
/*             <input type="checkbox" name="sub_category" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="sub_category" value="1" />*/
/*             {% endif %}*/
/*             {{ text_sub_category }}</label>*/
/*         </div>*/
/* */
/*         <div class="checkbox">*/
/*           <label class="checkbox-inline">*/
/*             {% if description %}*/
/*               <input type="checkbox" name="description" value="1" id="description" checked="checked" />*/
/*             {% else %}*/
/*               <input type="checkbox" name="description" value="1" id="description" />*/
/*             {% endif %}*/
/*             {{ entry_description }}</label>*/
/*         </div>*/
/* */
/*       </div>*/
/* */
/*       <div class="buttons clearfix">*/
/*           <div class="pull-right"><button id="button-search" class="btn btn-primary"><span>{{ button_search }}</span></button></div>*/
/*       </div>*/
/*       <h2 class="title search-products-title">{{ text_search }}</h2>*/
/*       <div class="main-products-wrapper">*/
/*       {% if products %}*/
/*           {% if j3.settings.get('sortBarStatus') %}*/
/*               <div class="products-filter">*/
/*                   <div class="grid-list">*/
/*                     <button id="btn-grid-view" class="view-btn {% if j3.settings.get('globalProductView') == 'grid' %}active{% endif %}" data-toggle="tooltip" title="{{ button_grid }}" data-view="grid"></button>*/
/*                     <button id="btn-list-view" class="view-btn {% if j3.settings.get('globalProductView') == 'list' %}active{% endif %}" data-toggle="tooltip" title="{{ button_list }}" data-view="list"></button>*/
/*                     <a href="{{ compare }}" id="compare-total" class="compare-btn">{{ text_compare }}</a>*/
/*                   </div>*/
/*                   <div class="select-group">*/
/*                       <div class="input-group input-group-sm sort-by">*/
/*                           <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*                           <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                               {% for sorts in sorts %}*/
/*                                   {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                                       <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                                   {% else %}*/
/*                                       <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                                   {% endif %}*/
/*                               {% endfor %}*/
/*                           </select>*/
/*                       </div>*/
/*                       <div class="input-group input-group-sm per-page">*/
/*                           <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*                           <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                               {% for limits in limits %}*/
/*                                   {% if limits.value == limit %}*/
/*                                       <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                                   {% else %}*/
/*                                       <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                                   {% endif %}*/
/*                               {% endfor %}*/
/*                           </select>*/
/*                       </div>*/
/*                   </div>*/
/*               </div>*/
/*           {% endif %}*/
/*         <div class="main-products product-{{ j3.settings.get('globalProductView') }}">*/
/*           {% set display = j3.settings.get('globalProductView') %}*/
/*           {% include "journal3/template/journal3/product_card.twig" %}*/
/*         </div>*/
/*         <div class="row pagination-results">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       {% else %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*         </div>*/
/*       {% endif %}*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* */
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* */
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* */
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
/* {{ footer }}*/
/* */
