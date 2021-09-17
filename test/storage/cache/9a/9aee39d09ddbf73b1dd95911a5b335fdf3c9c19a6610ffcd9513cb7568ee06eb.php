<?php

/* journal3/template/journal3/checkout/payment_method.twig */
class __TwigTemplate_a9b2cde3ed3f61a7e5bcb4bfe39502be9d85c8ef4685a86403590586da4ad213 extends Twig_Template
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
        echo "<div class=\"section-payment\">
  <div class=\"title section-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitlePaymentMethod"), "method");
        echo "</div>
  <div class=\"section-body\">
    <div v-if=\"Object.keys(payment_methods).length === 0\" class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 4
        echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
        echo "</div>
    <div v-for=\"payment_method in payment_methods\">
      <div class=\"radio\">
        <label>
          <input v-bind:value=\"payment_method.code\" type=\"radio\" name=\"payment_method\" v-model=\"order_data.payment_code\"/>
          <span v-html=\"payment_method.title + (payment_method.terms ? '(' + payment_method.terms + ')' : '') \"></span>
        </label>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/payment_method.twig";
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
/* <div class="section-payment">*/
/*   <div class="title section-title">{{ j3.settings.get('sectionTitlePaymentMethod') }}</div>*/
/*   <div class="section-body">*/
/*     <div v-if="Object.keys(payment_methods).length === 0" class="alert alert-warning"><i class="fa fa-exclamation-circle"></i>{{ error_warning }}</div>*/
/*     <div v-for="payment_method in payment_methods">*/
/*       <div class="radio">*/
/*         <label>*/
/*           <input v-bind:value="payment_method.code" type="radio" name="payment_method" v-model="order_data.payment_code"/>*/
/*           <span v-html="payment_method.title + (payment_method.terms ? '(' + payment_method.terms + ')' : '') "></span>*/
/*         </label>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
