<?php

/* journal3/template/journal3/checkout/shipping_method.twig */
class __TwigTemplate_78b67431f1f9c6181aa217b5d8d934f5fe278aaac7fbb85c3913001aeee61932 extends Twig_Template
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
        echo "<div class=\"section-shipping\" v-if=\"shipping_required\">
  <div class=\"title section-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitleShippingMethod"), "method");
        echo "</div>
  <div class=\"section-body\">
    <div v-if=\"Object.keys(shipping_methods).length === 0\" class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 4
        echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
        echo "</div>
    <div v-for=\"shipping_method in shipping_methods\">
      <div class=\"shippings\">
        <div class=\"ship-wrapper\">
          <p v-html=\"shipping_method.title\"></p>
          <div class=\"radio\" v-for=\"quote in shipping_method.quote\">
            <label>
              <input v-bind:value=\"quote.code\" type=\"radio\" name=\"shipping_method\" v-model=\"order_data.shipping_code\"/>
              <span class=\"shipping-quote-title\" v-html=\"quote.title + ' - ' + quote.text\"></span>
              <span class=\"shipping-quote-desc\" v-if=\"quote.desc\" v-html=\"quote.desc\"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="section-shipping" v-if="shipping_required">*/
/*   <div class="title section-title">{{ j3.settings.get('sectionTitleShippingMethod') }}</div>*/
/*   <div class="section-body">*/
/*     <div v-if="Object.keys(shipping_methods).length === 0" class="alert alert-warning"><i class="fa fa-exclamation-circle"></i>{{ error_warning }}</div>*/
/*     <div v-for="shipping_method in shipping_methods">*/
/*       <div class="shippings">*/
/*         <div class="ship-wrapper">*/
/*           <p v-html="shipping_method.title"></p>*/
/*           <div class="radio" v-for="quote in shipping_method.quote">*/
/*             <label>*/
/*               <input v-bind:value="quote.code" type="radio" name="shipping_method" v-model="order_data.shipping_code"/>*/
/*               <span class="shipping-quote-title" v-html="quote.title + ' - ' + quote.text"></span>*/
/*               <span class="shipping-quote-desc" v-if="quote.desc" v-html="quote.desc"></span>*/
/*             </label>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
