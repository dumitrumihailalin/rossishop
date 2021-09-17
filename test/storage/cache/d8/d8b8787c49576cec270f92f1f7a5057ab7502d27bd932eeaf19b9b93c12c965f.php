<?php

/* journal3/template/journal3/checkout/login.twig */
class __TwigTemplate_d01f7a5e7cb7104e294ffa306b81db6dd4eb676ecb803f137d3457a2f91e9dd2 extends Twig_Template
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
        echo "<div class=\"checkout-section section-login\" v-if=\"!customer_id\">
  <div class=\"title section-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitleLogin"), "method");
        echo "</div>
  <div class=\"section-body\">
    <div class=\"form-group login-options\">
      <div class=\"radio\">
        <label><input v-model=\"account\" type=\"radio\" name=\"account\" value=\"\"/>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionLoginText"), "method");
        echo "</label>
      </div>
      <div class=\"radio\">
        <label><input v-model=\"account\" type=\"radio\" name=\"account\" value=\"register\"/>";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionRegisterText"), "method");
        echo "</label>
      </div>
      <div class=\"radio\" v-if=\"guest\">
        <label><input v-model=\"account\" type=\"radio\" name=\"account\" value=\"guest\"/>";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionGuestText"), "method");
        echo "</label>
      </div>
    </div>
    <div class=\"login-form\">
      <div v-if=\"account === ''\" class=\"form-group\">
        <label class=\"control-label\" for=\"input-login-email\">";
        // line 17
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
        <input type=\"text\" v-model=\"login_email\" placeholder=\"";
        // line 18
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-login-email\" class=\"form-control\"/>
      </div>
      <div v-if=\"account === ''\" class=\"form-group\">
        <label class=\"control-label\" for=\"input-login-password\">";
        // line 21
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
        <input type=\"password\" v-model=\"login_password\" placeholder=\"";
        // line 22
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-login-password\" class=\"form-control\"/>
        <div><a href=\"";
        // line 23
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
      </div>
      <div class=\"buttons\" v-if=\"account === ''\">
        <div class=\"pull-right\">
          <button type=\"button\" id=\"button-login\" v-on:click=\"login()\" data-loading-text=\"<span>";
        // line 27
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</span>\" class=\"btn btn-primary\"><span>";
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</span></button>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  67 => 23,  63 => 22,  59 => 21,  53 => 18,  49 => 17,  41 => 12,  35 => 9,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-section section-login" v-if="!customer_id">*/
/*   <div class="title section-title">{{ j3.settings.get('sectionTitleLogin') }}</div>*/
/*   <div class="section-body">*/
/*     <div class="form-group login-options">*/
/*       <div class="radio">*/
/*         <label><input v-model="account" type="radio" name="account" value=""/>{{ j3.settings.get('sectionLoginText') }}</label>*/
/*       </div>*/
/*       <div class="radio">*/
/*         <label><input v-model="account" type="radio" name="account" value="register"/>{{ j3.settings.get('sectionRegisterText') }}</label>*/
/*       </div>*/
/*       <div class="radio" v-if="guest">*/
/*         <label><input v-model="account" type="radio" name="account" value="guest"/>{{ j3.settings.get('sectionGuestText') }}</label>*/
/*       </div>*/
/*     </div>*/
/*     <div class="login-form">*/
/*       <div v-if="account === ''" class="form-group">*/
/*         <label class="control-label" for="input-login-email">{{ entry_email }}</label>*/
/*         <input type="text" v-model="login_email" placeholder="{{ entry_email }}" id="input-login-email" class="form-control"/>*/
/*       </div>*/
/*       <div v-if="account === ''" class="form-group">*/
/*         <label class="control-label" for="input-login-password">{{ entry_password }}</label>*/
/*         <input type="password" v-model="login_password" placeholder="{{ entry_password }}" id="input-login-password" class="form-control"/>*/
/*         <div><a href="{{ forgotten }}">{{ text_forgotten }}</a></div>*/
/*       </div>*/
/*       <div class="buttons" v-if="account === ''">*/
/*         <div class="pull-right">*/
/*           <button type="button" id="button-login" v-on:click="login()" data-loading-text="<span>{{ button_login }}</span>" class="btn btn-primary"><span>{{ button_login }}</span></button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
