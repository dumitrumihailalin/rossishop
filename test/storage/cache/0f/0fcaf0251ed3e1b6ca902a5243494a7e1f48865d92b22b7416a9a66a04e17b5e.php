<?php

/* journal3/template/product/compare.twig */
class __TwigTemplate_50ba0c8830d7b5f443c4674148c33c7791241dc68207c5cb45759228e31be169 extends Twig_Template
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
<div id=\"product-compare\" class=\"container\">
  ";
        // line 12
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 18
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 27
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 29
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 30
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 31
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
            <tr>
              <td colspan=\"";
            // line 35
            echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
            echo "\"><strong>";
            echo (isset($context["text_product"]) ? $context["text_product"] : null);
            echo "</strong></td>
            </tr>
            </thead>
            <tbody>
            <tr class=\"compare-name\">
              <td>";
            // line 40
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</td>
              ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "                <td><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</strong></a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo " </tr>
            <tr class=\"compare-image\">
              <td>";
            // line 45
            echo (isset($context["text_image"]) ? $context["text_image"] : null);
            echo "</td>
              ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 47
                echo "                <td class=\"text-left\">";
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo " </tr>
            <tr class=\"compare-price\">
              <td>";
            // line 50
            echo (isset($context["text_price"]) ? $context["text_price"] : null);
            echo "</td>
              ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 52
                echo "                ";
                $context["classes"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => array("has-zero-price" =>  !$this->getAttribute(                // line 53
$context["product"], "price_value", array()))), "method");
                // line 55
                echo "                <td class=\"";
                echo (isset($context["classes"]) ? $context["classes"] : null);
                echo "\">";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 56
                    echo "                    ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 57
                        echo "                      ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                    ";
                    } else {
                        // line 58
                        echo " <strike>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</strike> ";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "
                    ";
                    }
                    // line 60
                    echo "                  ";
                }
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo " </tr>
            <tr class=\"compare-model\">
              <td>";
            // line 63
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</td>
              ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 65
                echo "                <td>";
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo " </tr>
            <tr class=\"compare-manufacturer\">
              <td>";
            // line 68
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</td>
              ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 70
                echo "                <td>";
                echo $this->getAttribute($context["product"], "manufacturer", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo " </tr>
            <tr class=\"compare-availability\">
              <td>";
            // line 73
            echo (isset($context["text_availability"]) ? $context["text_availability"] : null);
            echo "</td>
              ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 75
                echo "                <td>";
                echo $this->getAttribute($context["product"], "availability", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo " </tr>
            ";
            // line 77
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 78
                echo "              <tr class=\"compare-rating\">
                <td>";
                // line 79
                echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
                echo "</td>
                ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 81
                    echo "                  <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 82
                        echo "                      ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 83
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br />
                    ";
                    // line 84
                    echo $this->getAttribute($context["product"], "reviews", array());
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo " </tr>
            ";
            }
            // line 87
            echo "            <tr class=\"compare-summary\">
              <td>";
            // line 88
            echo (isset($context["text_summary"]) ? $context["text_summary"] : null);
            echo "</td>
              ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 90
                echo "                <td class=\"description\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo " </tr>
            <tr class=\"compare-weight\">
              <td>";
            // line 93
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo "</td>
              ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 95
                echo "                <td>";
                echo $this->getAttribute($context["product"], "weight", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo " </tr>
            <tr class=\"compare-dimensions\">
              <td>";
            // line 98
            echo (isset($context["text_dimension"]) ? $context["text_dimension"] : null);
            echo "</td>
              ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 100
                echo "                <td>";
                echo $this->getAttribute($context["product"], "length", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "width", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "height", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo " </tr>
            </tbody>

            ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 105
                echo "              <thead>
              <tr>
                <td colspan=\"";
                // line 107
                echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
                echo "\"><strong>";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
              </tr>
              </thead>
              ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 111
                    echo "                <tbody>
                <tr>
                  <td>";
                    // line 113
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  ";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 115
                        echo "                    ";
                        if ($this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array")) {
                            // line 116
                            echo "                      <td> ";
                            echo $this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array");
                            echo "</td>
                    ";
                        } else {
                            // line 118
                            echo "                      <td></td>
                    ";
                        }
                        // line 120
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                </tr>
                </tbody>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "            <tfoot>
            <tr>
              <td></td>
              ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 129
                echo "                ";
                $context["classes"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => array("has-zero-price" =>  !$this->getAttribute(                // line 130
$context["product"], "price_value", array()))), "method");
                // line 132
                echo "                <td class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["product"], "classes", array())), "method");
                echo " ";
                echo (isset($context["classes"]) ? $context["classes"] : null);
                echo "\">
                  <div class=\"compare-buttons\">
                    ";
                // line 134
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method")) {
                    // line 135
                    echo "                    <button class=\"btn btn-primary btn-cart\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\" ><span>";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></button>
                    ";
                }
                // line 137
                echo "                    <a href=\"";
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" class=\"btn btn-danger btn-remove\"><span>";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "</span></a>
                  </div>
                </td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo " </tr></tfoot>
          </table>
        </div>
      ";
        } else {
            // line 144
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 146
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-default\"><span>";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</span></a></div>
      </div>
      ";
        }
        // line 149
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 150
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 152
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 152,  539 => 150,  534 => 149,  526 => 146,  520 => 144,  514 => 140,  501 => 137,  491 => 135,  489 => 134,  481 => 132,  479 => 130,  477 => 129,  473 => 128,  468 => 125,  462 => 124,  454 => 121,  448 => 120,  444 => 118,  438 => 116,  435 => 115,  431 => 114,  427 => 113,  423 => 111,  419 => 110,  411 => 107,  407 => 105,  403 => 104,  398 => 101,  385 => 100,  381 => 99,  377 => 98,  373 => 96,  364 => 95,  360 => 94,  356 => 93,  352 => 91,  343 => 90,  339 => 89,  335 => 88,  332 => 87,  328 => 85,  320 => 84,  312 => 83,  305 => 82,  300 => 81,  296 => 80,  292 => 79,  289 => 78,  287 => 77,  284 => 76,  275 => 75,  271 => 74,  267 => 73,  263 => 71,  254 => 70,  250 => 69,  246 => 68,  242 => 66,  233 => 65,  229 => 64,  225 => 63,  221 => 61,  212 => 60,  204 => 58,  198 => 57,  195 => 56,  190 => 55,  188 => 53,  186 => 52,  182 => 51,  178 => 50,  174 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 43,  134 => 42,  130 => 41,  126 => 40,  116 => 35,  110 => 31,  108 => 30,  103 => 29,  97 => 27,  95 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  70 => 18,  65 => 17,  57 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
/* <div id="product-compare" class="container">*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
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
/*       {% if products %}*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*               <td colspan="{{ products|length + 1 }}"><strong>{{ text_product }}</strong></td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr class="compare-name">*/
/*               <td>{{ text_name }}</td>*/
/*               {% for product in products %}*/
/*                 <td><a href="{{ product.href }}"><strong>{{ product.name }}</strong></a></td>*/
/*               {% endfor %} </tr>*/
/*             <tr class="compare-image">*/
/*               <td>{{ text_image }}</td>*/
/*               {% for product in products %}*/
/*                 <td class="text-left">{% if product.thumb %} <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /> {% endif %}</td>*/
/*               {% endfor %} </tr>*/
/*             <tr class="compare-price">*/
/*               <td>{{ text_price }}</td>*/
/*               {% for product in products %}*/
/*                 {% set classes = j3.classes({*/
/*                   'has-zero-price': not product.price_value,*/
/*                 }) %}*/
/*                 <td class="{{ classes }}">{% if product.price %}*/
/*                     {% if not product.special %}*/
/*                       {{ product.price }}*/
/*                     {% else %} <strike>{{ product.price }}</strike> {{ product.special }}*/
/*                     {% endif %}*/
/*                   {% endif %}</td>*/
/*               {% endfor %} </tr>*/
/*             <tr class="compare-model">*/
/*               <td>{{ text_model }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.model }}</td>*/
/*               {% endfor %} </tr>*/
/*             <tr class="compare-manufacturer">*/
/*               <td>{{ text_manufacturer }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.manufacturer }}</td>*/
/*               {% endfor %} </tr>*/
/*             <tr class="compare-availability">*/
/*               <td>{{ text_availability }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.availability }}</td>*/
/*               {% endfor %} </tr>*/
/*             {% if review_status %}*/
/*               <tr class="compare-rating">*/
/*                 <td>{{ text_rating }}</td>*/
/*                 {% for product in products %}*/
/*                   <td class="rating"> {% for i in 1..5 %}*/
/*                       {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*                     {% endfor %} <br />*/
/*                     {{ product.reviews }}</td>*/
/*                 {% endfor %} </tr>*/
/*             {% endif %}*/
/*             <tr class="compare-summary">*/
/*               <td>{{ text_summary }}</td>*/
/*               {% for product in products %}*/
/*                 <td class="description">{{ product.description }}</td>*/
/*               {% endfor %} </tr>*/
/*             <tr class="compare-weight">*/
/*               <td>{{ text_weight }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.weight }}</td>*/
/*               {% endfor %} </tr>*/
/*             <tr class="compare-dimensions">*/
/*               <td>{{ text_dimension }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>*/
/*               {% endfor %} </tr>*/
/*             </tbody>*/
/* */
/*             {% for attribute_group in attribute_groups %}*/
/*               <thead>*/
/*               <tr>*/
/*                 <td colspan="{{ products|length + 1 }}"><strong>{{ attribute_group.name }}</strong></td>*/
/*               </tr>*/
/*               </thead>*/
/*               {% for key, attribute in attribute_group.attribute %}*/
/*                 <tbody>*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   {% for product in products %}*/
/*                     {% if product.attribute[key] %}*/
/*                       <td> {{ product.attribute[key] }}</td>*/
/*                     {% else %}*/
/*                       <td></td>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </tr>*/
/*                 </tbody>*/
/*               {% endfor %}*/
/*             {% endfor %}*/
/*             <tfoot>*/
/*             <tr>*/
/*               <td></td>*/
/*               {% for product in products %}*/
/*                 {% set classes = j3.classes({*/
/*                   'has-zero-price': not product.price_value,*/
/*                 }) %}*/
/*                 <td class="{{ j3.classes(product.classes) }} {{ classes }}">*/
/*                   <div class="compare-buttons">*/
/*                     {% if j3.settings.get('catalogCartStatus') %}*/
/*                     <button class="btn btn-primary btn-cart" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');" ><span>{{ button_cart }}</span></button>*/
/*                     {% endif %}*/
/*                     <a href="{{ product.remove }}" class="btn btn-danger btn-remove"><span>{{ button_remove }}</span></a>*/
/*                   </div>*/
/*                 </td>*/
/*               {% endfor %} </tr></tfoot>*/
/*           </table>*/
/*         </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-default"><span>{{ button_continue }}</span></a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
