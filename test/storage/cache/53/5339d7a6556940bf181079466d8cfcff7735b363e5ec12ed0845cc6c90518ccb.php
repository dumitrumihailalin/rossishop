<?php

/* journal3/template/checkout/cart.twig */
class __TwigTemplate_9fcfcf91383a9b586a2f5ef34994aa25a0718ab959f5b47b7877b36d787898c3 extends Twig_Template
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
            echo "  <h1 class=\"title page-title\">
    <span >
      ";
            // line 10
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "
    ";
            // line 11
            if ((isset($context["weight"]) ? $context["weight"] : null)) {
                // line 12
                echo "      &nbsp;(";
                echo (isset($context["weight"]) ? $context["weight"] : null);
                echo ")
    ";
            }
            // line 14
            echo "    </span>
  </h1>
";
        }
        // line 17
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
        echo "
<div id=\"checkout-cart\" class=\"container\">
  ";
        // line 19
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 20
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 29
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 30
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 34
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 35
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 36
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 37
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 38
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 41
            echo "    ";
        }
        // line 42
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 44
            echo "      <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "
        ";
            // line 45
            if ((isset($context["weight"]) ? $context["weight"] : null)) {
                // line 46
                echo "        &nbsp;(";
                echo (isset($context["weight"]) ? $context["weight"] : null);
                echo ")
        ";
            }
            // line 47
            echo " </h1>
      ";
        }
        // line 49
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"cart-page\">
        <form action=\"";
        // line 51
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"cart-table\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
              <thead>
              <tr>
                <td class=\"text-center td-image\">";
        // line 56
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                <td class=\"text-left td-name\">";
        // line 57
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-center td-model\">";
        // line 58
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                <td class=\"text-center td-qty\">";
        // line 59
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                <td class=\"text-center td-price\">";
        // line 60
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                <td class=\"text-center td-total\">";
        // line 61
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              </tr>
              </thead>
              <tbody>

              ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 67
            echo "                <tr>
                  <td class=\"text-center td-image\">";
            // line 68
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" /></a> ";
            }
            echo "</td>
                  <td class=\"text-left td-name\"><a href=\"";
            // line 69
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 70
            echo "                      ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 71
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                            <small>";
                    // line 72
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                      ";
            }
            // line 74
            echo "                      ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br />
                        <small>";
                // line 75
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 76
            echo "                      ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br />
                        <span class=\"label label-info\">";
                // line 77
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span> <small>";
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            echo "</td>
                  <td class=\"text-center td-model\">";
            // line 78
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
                  <td class=\"text-center td-qty\">
                    <div class=\"input-group btn-block\">
                      <div class=\"stepper\">
                        <input type=\"text\" name=\"quantity[";
            // line 82
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\" />
                        <span>
                      <i class=\"fa fa-angle-up\"></i>
                      <i class=\"fa fa-angle-down\"></i>
                    </span>
                      </div>
                      <span class=\"input-group-btn\">
                    <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 89
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-update\"><i class=\"fa fa-refresh\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 90
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-remove\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span>
                    </div>
                  </td>
                  <td class=\"text-center td-price\">";
            // line 94
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
                  <td class=\"text-center td-total\">";
            // line 95
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 99
            echo "                <tr>
                  <td></td>
                  <td class=\"text-left td-voucher\">";
            // line 101
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
                  <td class=\"text-left td-voucher\"></td>
                  <td class=\"text-left td-voucher\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                      <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 106
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
                  <td class=\"text-right td-voucher\">";
            // line 108
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                  <td class=\"text-right td-voucher\">";
            // line 109
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"cart-bottom\">
          <div class=\"panels-total\">
              ";
        // line 118
        if (((isset($context["modules"]) ? $context["modules"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "cartPanelsStatus"), "method"))) {
            // line 119
            echo "                <div class=\"cart-panels\">
                  <h2 class=\"title\">";
            // line 120
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
                  <p>";
            // line 121
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
                  <div class=\"panel-group\" id=\"accordion\"> ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 123
                echo "                          ";
                echo $context["module"];
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                  </div>
                </div>
              ";
        }
        // line 128
        echo "            <div class=\"cart-total\">
              <table class=\"table table-bordered\">
                  ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 131
            echo "                    <tr>
                      <td class=\"text-right\"><strong>";
            // line 132
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 133
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "              </table>
            </div>
          </div>
          <div class=\"buttons clearfix\">
            <div class=\"pull-left\"><a href=\"";
        // line 140
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-default\"><span>";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</span></a></div>
            <div class=\"pull-right\"><a href=\"";
        // line 141
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</span></a></div>
          </div>
        </div>
      </div>
      ";
        // line 145
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 146
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 148
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 148,  436 => 146,  432 => 145,  423 => 141,  417 => 140,  411 => 136,  402 => 133,  398 => 132,  395 => 131,  391 => 130,  387 => 128,  382 => 125,  373 => 123,  369 => 122,  365 => 121,  361 => 120,  358 => 119,  356 => 118,  348 => 112,  339 => 109,  335 => 108,  328 => 106,  320 => 101,  316 => 99,  311 => 98,  302 => 95,  298 => 94,  289 => 90,  285 => 89,  273 => 82,  266 => 78,  258 => 77,  253 => 76,  249 => 75,  244 => 74,  241 => 73,  232 => 72,  225 => 71,  222 => 70,  214 => 69,  200 => 68,  197 => 67,  193 => 66,  185 => 61,  181 => 60,  177 => 59,  173 => 58,  169 => 57,  165 => 56,  157 => 51,  151 => 49,  147 => 47,  141 => 46,  139 => 45,  134 => 44,  132 => 43,  127 => 42,  124 => 41,  121 => 40,  118 => 39,  115 => 38,  112 => 37,  109 => 36,  107 => 35,  102 => 34,  94 => 30,  91 => 29,  83 => 25,  80 => 24,  72 => 20,  70 => 19,  65 => 17,  60 => 14,  54 => 12,  52 => 11,  48 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title">*/
/*     <span >*/
/*       {{ heading_title }}*/
/*     {% if weight %}*/
/*       &nbsp;({{ weight }})*/
/*     {% endif %}*/
/*     </span>*/
/*   </h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div id="checkout-cart" class="container">*/
/*   {% if attention %}*/
/*   <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
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
/*       <h1 class="title page-title">{{ heading_title }}*/
/*         {% if weight %}*/
/*         &nbsp;({{ weight }})*/
/*         {% endif %} </h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <div class="cart-page">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" class="cart-table">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered">*/
/*               <thead>*/
/*               <tr>*/
/*                 <td class="text-center td-image">{{ column_image }}</td>*/
/*                 <td class="text-left td-name">{{ column_name }}</td>*/
/*                 <td class="text-center td-model">{{ column_model }}</td>*/
/*                 <td class="text-center td-qty">{{ column_quantity }}</td>*/
/*                 <td class="text-center td-price">{{ column_price }}</td>*/
/*                 <td class="text-center td-total">{{ column_total }}</td>*/
/*               </tr>*/
/*               </thead>*/
/*               <tbody>*/
/* */
/*               {% for product in products %}*/
/*                 <tr>*/
/*                   <td class="text-center td-image">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a> {% endif %}</td>*/
/*                   <td class="text-left td-name"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*                       {% if product.option %}*/
/*                           {% for option in product.option %} <br />*/
/*                             <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                       {% endif %}*/
/*                       {% if product.reward %} <br />*/
/*                         <small>{{ product.reward }}</small> {% endif %}*/
/*                       {% if product.recurring %} <br />*/
/*                         <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*                   <td class="text-center td-model">{{ product.model }}</td>*/
/*                   <td class="text-center td-qty">*/
/*                     <div class="input-group btn-block">*/
/*                       <div class="stepper">*/
/*                         <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control" />*/
/*                         <span>*/
/*                       <i class="fa fa-angle-up"></i>*/
/*                       <i class="fa fa-angle-down"></i>*/
/*                     </span>*/
/*                       </div>*/
/*                       <span class="input-group-btn">*/
/*                     <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-update"><i class="fa fa-refresh"></i></button>*/
/*                     <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-remove" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span>*/
/*                     </div>*/
/*                   </td>*/
/*                   <td class="text-center td-price">{{ product.price }}</td>*/
/*                   <td class="text-center td-total">{{ product.total }}</td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*               {% for voucher in vouchers %}*/
/*                 <tr>*/
/*                   <td></td>*/
/*                   <td class="text-left td-voucher">{{ voucher.description }}</td>*/
/*                   <td class="text-left td-voucher"></td>*/
/*                   <td class="text-left td-voucher"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                       <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*                   <td class="text-right td-voucher">{{ voucher.amount }}</td>*/
/*                   <td class="text-right td-voucher">{{ voucher.amount }}</td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="cart-bottom">*/
/*           <div class="panels-total">*/
/*               {% if modules and j3.settings.get('cartPanelsStatus') %}*/
/*                 <div class="cart-panels">*/
/*                   <h2 class="title">{{ text_next }}</h2>*/
/*                   <p>{{ text_next_choice }}</p>*/
/*                   <div class="panel-group" id="accordion"> {% for module in modules %}*/
/*                           {{ module }}*/
/*                       {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             <div class="cart-total">*/
/*               <table class="table table-bordered">*/
/*                   {% for total in totals %}*/
/*                     <tr>*/
/*                       <td class="text-right"><strong>{{ total.title }}:</strong></td>*/
/*                       <td class="text-right">{{ total.text }}</td>*/
/*                     </tr>*/
/*                   {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*           </div>*/
/*           <div class="buttons clearfix">*/
/*             <div class="pull-left"><a href="{{ continue }}" class="btn btn-default"><span>{{ button_shopping }}</span></a></div>*/
/*             <div class="pull-right"><a href="{{ checkout }}" class="btn btn-primary"><span>{{ button_checkout }}</span></a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
