<?php

/* journal3/template/journal3/checkout/coupon_voucher_reward.twig */
class __TwigTemplate_4e811655b13d21b168d77b0be5dc350291120cc6eb6be9e88cea64293d35f674 extends Twig_Template
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
        echo "<div class=\"checkout-section section-cvr\" v-if=\"coupon_status || voucher_status || (reward_status && customer_id)\">
  <div class=\"title section-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitleCouponVoucherReward"), "method");
        echo "</div>

  <div class=\"section-body\">
    <div class=\"form-group form-coupon\" v-if=\"coupon_status\">
      <label class=\"control-label\" for=\"input-coupon\">";
        // line 6
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"coupon\" placeholder=\"";
        // line 8
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"save()\" data-loading-text=\"";
        // line 10
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.coupon\" v-html=\"error.coupon\"></span>
    </div>

    <div class=\"form-group form-voucher\" v-if=\"voucher_status\">
      <label class=\"control-label\" for=\"input-voucher\">";
        // line 17
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"voucher\" placeholder=\"";
        // line 19
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"save()\" data-loading-text=\"";
        // line 21
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.voucher\" v-html=\"error.voucher\"></span>
    </div>

    <div class=\"form-group form-reward\" v-if=\"reward_status && customer_id\">
      <label class=\"control-label\" for=\"input-reward\">";
        // line 28
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"reward\" placeholder=\"";
        // line 30
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "\" id=\"input-reward\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"save()\" data-loading-text=\"";
        // line 32
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.reward\" v-html=\"error.reward\"></span>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/coupon_voucher_reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  78 => 30,  73 => 28,  61 => 21,  56 => 19,  51 => 17,  39 => 10,  34 => 8,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-section section-cvr" v-if="coupon_status || voucher_status || (reward_status && customer_id)">*/
/*   <div class="title section-title">{{ j3.settings.get('sectionTitleCouponVoucherReward') }}</div>*/
/* */
/*   <div class="section-body">*/
/*     <div class="form-group form-coupon" v-if="coupon_status">*/
/*       <label class="control-label" for="input-coupon">{{ entry_coupon }}</label>*/
/*       <div class="input-group">*/
/*         <input type="text" v-model="coupon" placeholder="{{ entry_coupon }}" id="input-coupon" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*               <button type="button" v-on:click="save()" data-loading-text="{{ text_loading }}" class="btn btn-primary"><span>{{ button_submit }}</span></button>*/
/*             </span>*/
/*       </div>*/
/*       <span class="text-danger" v-if="error && error.coupon" v-html="error.coupon"></span>*/
/*     </div>*/
/* */
/*     <div class="form-group form-voucher" v-if="voucher_status">*/
/*       <label class="control-label" for="input-voucher">{{ entry_voucher }}</label>*/
/*       <div class="input-group">*/
/*         <input type="text" v-model="voucher" placeholder="{{ entry_voucher }}" id="input-voucher" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*               <button type="button" v-on:click="save()" data-loading-text="{{ text_loading }}" class="btn btn-primary"><span>{{ button_submit }}</span></button>*/
/*             </span>*/
/*       </div>*/
/*       <span class="text-danger" v-if="error && error.voucher" v-html="error.voucher"></span>*/
/*     </div>*/
/* */
/*     <div class="form-group form-reward" v-if="reward_status && customer_id">*/
/*       <label class="control-label" for="input-reward">{{ entry_reward }}</label>*/
/*       <div class="input-group">*/
/*         <input type="text" v-model="reward" placeholder="{{ entry_reward }}" id="input-reward" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*               <button type="button" v-on:click="save()" data-loading-text="{{ text_loading }}" class="btn btn-primary"><span>{{ button_submit }}</span></button>*/
/*             </span>*/
/*       </div>*/
/*       <span class="text-danger" v-if="error && error.reward" v-html="error.reward"></span>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
