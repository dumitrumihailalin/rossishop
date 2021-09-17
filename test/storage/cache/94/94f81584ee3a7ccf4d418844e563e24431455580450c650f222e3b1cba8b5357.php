<?php

/* journal3/template/journal3/checkout/checkout.twig */
class __TwigTemplate_249241b484dbf94a92342ff66359b351882b924b63dd32ad7276064db0ba4169 extends Twig_Template
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
<div class=\"container\">
  ";
        // line 12
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 13
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    <div id=\"content\">
      ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 20
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 22
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"quick-checkout-wrapper\">
        <div class=\"quick-checkout\">
          <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
        </div>
      </div>
      ";
        // line 28
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 29
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/html\" id=\"quick-checkout\">
  <div v-bind:class=\"[(account === '') && !customer_id ? 'login-active' : '']\">
      <div class=\"left\">
        <form>
        ";
        // line 35
        echo (isset($context["login_block"]) ? $context["login_block"] : null);
        echo "

        ";
        // line 37
        echo (isset($context["register_block"]) ? $context["register_block"] : null);
        echo "

        ";
        // line 39
        echo (isset($context["payment_address_block"]) ? $context["payment_address_block"] : null);
        echo "

        ";
        // line 41
        echo (isset($context["shipping_address_block"]) ? $context["shipping_address_block"] : null);
        echo "
        </form>
      </div>

      <div class=\"right\">

        <div class=\"checkout-section shipping-payment\">
          ";
        // line 48
        echo (isset($context["shipping_method_block"]) ? $context["shipping_method_block"] : null);
        echo "

          ";
        // line 50
        echo (isset($context["payment_method_block"]) ? $context["payment_method_block"] : null);
        echo "
        </div>

        ";
        // line 53
        echo (isset($context["coupon_voucher_reward_block"]) ? $context["coupon_voucher_reward_block"] : null);
        echo "

        ";
        // line 55
        echo (isset($context["cart_block"]) ? $context["cart_block"] : null);
        echo "

        <div class=\"checkout-section checkout-payment-details\" v-bind:class=\"[order_data.payment_method ? 'payment-' + order_data.payment_code : '']\">
          <div class=\"title section-title\">";
        // line 58
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitlePaymentDetails"), "method");
        echo "</div>
          <div class=\"quick-checkout-payment\">
            <div class=\"journal-loading-overlay\">
              <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
            </div>
          </div>
        </div>

        ";
        // line 66
        echo (isset($context["confirm_block"]) ? $context["confirm_block"] : null);
        echo "
      </div>

  </div>
</script>
<script>window['_QuickCheckoutData'] = ";
        // line 71
        echo twig_jsonencode_filter((isset($context["checkout_data"]) ? $context["checkout_data"] : null));
        echo ";</script>
";
        // line 72
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 72,  168 => 71,  160 => 66,  149 => 58,  143 => 55,  138 => 53,  132 => 50,  127 => 48,  117 => 41,  112 => 39,  107 => 37,  102 => 35,  93 => 29,  89 => 28,  79 => 22,  73 => 20,  71 => 19,  65 => 17,  57 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
/* <div class="container">*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     <div id="content">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <div class="quick-checkout-wrapper">*/
/*         <div class="quick-checkout">*/
/*           <div class="journal-loading"><i class="fa fa-spinner fa-spin"></i></div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/html" id="quick-checkout">*/
/*   <div v-bind:class="[(account === '') && !customer_id ? 'login-active' : '']">*/
/*       <div class="left">*/
/*         <form>*/
/*         {{ login_block }}*/
/* */
/*         {{ register_block }}*/
/* */
/*         {{ payment_address_block }}*/
/* */
/*         {{ shipping_address_block }}*/
/*         </form>*/
/*       </div>*/
/* */
/*       <div class="right">*/
/* */
/*         <div class="checkout-section shipping-payment">*/
/*           {{ shipping_method_block }}*/
/* */
/*           {{ payment_method_block }}*/
/*         </div>*/
/* */
/*         {{ coupon_voucher_reward_block }}*/
/* */
/*         {{ cart_block }}*/
/* */
/*         <div class="checkout-section checkout-payment-details" v-bind:class="[order_data.payment_method ? 'payment-' + order_data.payment_code : '']">*/
/*           <div class="title section-title">{{ j3.settings.get('sectionTitlePaymentDetails') }}</div>*/
/*           <div class="quick-checkout-payment">*/
/*             <div class="journal-loading-overlay">*/
/*               <div class="journal-loading"><i class="fa fa-spinner fa-spin"></i></div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         {{ confirm_block }}*/
/*       </div>*/
/* */
/*   </div>*/
/* </script>*/
/* <script>window['_QuickCheckoutData'] = {{ checkout_data|json_encode }};</script>*/
/* {{ footer }}*/
/* */
