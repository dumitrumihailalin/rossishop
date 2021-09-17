<?php

/* journal3/template/account/return_form.twig */
class __TwigTemplate_26e4dcf319c22ac82b6346155550687201a6b2c32794925f97ff4bda3c2b6493 extends Twig_Template
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
<div id=\"account-return\" class=\"container\">
  ";
        // line 12
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 13
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 15
        echo "  <div class=\"row\"> ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 16
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 18
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 25
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 27
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <p>";
        // line 28
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</p>
      <form action=\"";
        // line 29
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 31
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 33
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 35
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 36
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 37
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
              ";
        }
        // line 38
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 41
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 43
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 44
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 45
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
              ";
        }
        // line 46
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 49
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 51
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 52
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 53
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 54
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 57
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 59
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 60
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 61
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
              ";
        }
        // line 62
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 65
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 67
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 68
        if ((isset($context["error_order_id"]) ? $context["error_order_id"] : null)) {
            // line 69
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_order_id"]) ? $context["error_order_id"] : null);
            echo "</div>
              ";
        }
        // line 70
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 73
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 76
        echo (isset($context["date_ordered"]) ? $context["date_ordered"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 84
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 86
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 88
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              ";
        // line 89
        if ((isset($context["error_product"]) ? $context["error_product"] : null)) {
            // line 90
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_product"]) ? $context["error_product"] : null);
            echo "</div>
              ";
        }
        // line 91
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 94
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 96
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 97
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 98
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
              ";
        }
        // line 99
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 102
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 104
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 108
        echo (isset($context["entry_reason"]) ? $context["entry_reason"] : null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_reasons"]) ? $context["return_reasons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 110
            echo "              ";
            if (($this->getAttribute($context["return_reason"], "return_reason_id", array()) == (isset($context["return_reason_id"]) ? $context["return_reason_id"] : null))) {
                // line 111
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 113
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" checked=\"checked\" />
                  ";
                // line 114
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</label>
              </div>
              ";
            } else {
                // line 117
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 119
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" />
                  ";
                // line 120
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</label>
              </div>
              ";
            }
            // line 123
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "              ";
        if ((isset($context["error_reason"]) ? $context["error_reason"] : null)) {
            // line 125
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_reason"]) ? $context["error_reason"] : null);
            echo "</div>
              ";
        }
        // line 126
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 129
        echo (isset($context["entry_opened"]) ? $context["entry_opened"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 131
        if ((isset($context["opened"]) ? $context["opened"] : null)) {
            // line 132
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 134
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 136
        echo "                ";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</label>
              <label class=\"radio-inline\"> ";
        // line 137
        if ( !(isset($context["opened"]) ? $context["opened"] : null)) {
            // line 138
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 140
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 142
        echo "                ";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 146
        echo (isset($context["entry_fault_detail"]) ? $context["entry_fault_detail"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 148
        echo (isset($context["entry_fault_detail"]) ? $context["entry_fault_detail"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 151
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>
        ";
        // line 153
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 154
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 155
            echo (isset($context["back"]) ? $context["back"] : null);
            echo "\" class=\"btn btn-danger\">";
            echo (isset($context["button_back"]) ? $context["button_back"] : null);
            echo "</a></div>
          <div class=\"pull-right\">";
            // line 156
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
            ";
            // line 157
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 158
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 160
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 162
            echo "            <button type=\"submit\" class=\"btn btn-primary\" ><span>";
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "</span></button>
          </div>
        </div>
        ";
        } else {
            // line 166
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 167
            echo (isset($context["back"]) ? $context["back"] : null);
            echo "\" class=\"btn btn-default\">";
            echo (isset($context["button_back"]) ? $context["button_back"] : null);
            echo "</a></div>
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\"><span>";
            // line 169
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</span></button>
          </div>
        </div>
        ";
        }
        // line 173
        echo "      </form>
      ";
        // line 174
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 175
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 179
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script> 
";
        // line 183
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 183,  505 => 179,  498 => 175,  494 => 174,  491 => 173,  484 => 169,  477 => 167,  474 => 166,  466 => 162,  462 => 160,  458 => 158,  456 => 157,  452 => 156,  446 => 155,  443 => 154,  441 => 153,  436 => 151,  428 => 148,  423 => 146,  415 => 142,  411 => 140,  407 => 138,  405 => 137,  400 => 136,  396 => 134,  392 => 132,  390 => 131,  385 => 129,  380 => 126,  374 => 125,  371 => 124,  365 => 123,  359 => 120,  355 => 119,  351 => 117,  345 => 114,  341 => 113,  337 => 111,  334 => 110,  330 => 109,  326 => 108,  317 => 104,  312 => 102,  307 => 99,  301 => 98,  299 => 97,  293 => 96,  288 => 94,  283 => 91,  277 => 90,  275 => 89,  269 => 88,  264 => 86,  259 => 84,  246 => 76,  240 => 73,  235 => 70,  229 => 69,  227 => 68,  221 => 67,  216 => 65,  211 => 62,  205 => 61,  203 => 60,  197 => 59,  192 => 57,  187 => 54,  181 => 53,  179 => 52,  173 => 51,  168 => 49,  163 => 46,  157 => 45,  155 => 44,  149 => 43,  144 => 41,  139 => 38,  133 => 37,  131 => 36,  125 => 35,  120 => 33,  115 => 31,  110 => 29,  106 => 28,  101 => 27,  95 => 25,  93 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  68 => 16,  63 => 15,  57 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
/* <div id="account-return" class="container">*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row"> {{ column_left }}*/
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
/*       <p>{{ text_description }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_order }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*               {% if error_firstname %}*/
/*               <div class="text-danger">{{ error_firstname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*               {% if error_lastname %}*/
/*               <div class="text-danger">{{ error_lastname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*               {% if error_telephone %}*/
/*               <div class="text-danger">{{ error_telephone }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-order-id">{{ entry_order_id }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="order_id" value="{{ order_id }}" placeholder="{{ entry_order_id }}" id="input-order-id" class="form-control" />*/
/*               {% if error_order_id %}*/
/*               <div class="text-danger">{{ error_order_id }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-date-ordered">{{ entry_date_ordered }}</label>*/
/*             <div class="col-sm-3">*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="date_ordered" value="{{ date_ordered }}" placeholder="{{ entry_date_ordered }}" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <fieldset>*/
/*           <legend>{{ text_product }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-product">{{ entry_product }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="product" value="{{ product }}" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*               {% if error_product %}*/
/*               <div class="text-danger">{{ error_product }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*               {% if error_model %}*/
/*               <div class="text-danger">{{ error_model }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label">{{ entry_reason }}</label>*/
/*             <div class="col-sm-10"> {% for return_reason in return_reasons %}*/
/*               {% if return_reason.return_reason_id == return_reason_id %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="return_reason_id" value="{{ return_reason.return_reason_id }}" checked="checked" />*/
/*                   {{ return_reason.name }}</label>*/
/*               </div>*/
/*               {% else %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="return_reason_id" value="{{ return_reason.return_reason_id }}" />*/
/*                   {{ return_reason.name }}</label>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               {% if error_reason %}*/
/*               <div class="text-danger">{{ error_reason }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label">{{ entry_opened }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline"> {% if opened %}*/
/*                 <input type="radio" name="opened" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="radio" name="opened" value="1" />*/
/*                 {% endif %}*/
/*                 {{ text_yes }}</label>*/
/*               <label class="radio-inline"> {% if not opened %}*/
/*                 <input type="radio" name="opened" value="0" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="radio" name="opened" value="0" />*/
/*                 {% endif %}*/
/*                 {{ text_no }}</label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-comment">{{ entry_fault_detail }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="comment" rows="10" placeholder="{{ entry_fault_detail }}" id="input-comment" class="form-control">{{ comment }}</textarea>*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         {% if text_agree %}*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-danger">{{ button_back }}</a></div>*/
/*           <div class="pull-right">{{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             <button type="submit" class="btn btn-primary" ><span>{{ button_submit }}</span></button>*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <button type="submit" class="btn btn-primary"><span>{{ button_continue }}</span></button>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script> */
/* {{ footer }} */
/* */
