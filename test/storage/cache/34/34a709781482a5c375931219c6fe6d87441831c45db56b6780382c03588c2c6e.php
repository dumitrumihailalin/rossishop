<?php

/* journal3/template/journal3/checkout/confirm.twig */
class __TwigTemplate_04849e663341e9da0e0946168aab2a2735596490919f883929923604c7335a95 extends Twig_Template
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
        echo "<div class=\"checkout-section confirm-section\">
  <div class=\"title section-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitleConfirm"), "method");
        echo "</div>

  <div class=\"section-body\">
    <div class=\"section-comments\" v-bind:class=\"{ 'has-error': error && error.comments }\">
      <textarea class=\"form-control\" v-model=\"order_data.comment\" placeholder=\"";
        // line 6
        echo (isset($context["text_comments"]) ? $context["text_comments"] : null);
        echo "\"></textarea>
    </div>

    ";
        // line 9
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 10
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"newsletter\" type=\"checkbox\"/>";
            // line 11
            echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
            echo "</label>
      </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ((isset($context["privacy"]) ? $context["privacy"] : null)) {
            // line 16
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"privacy\" type=\"checkbox\"/>";
            // line 17
            echo (isset($context["privacy"]) ? $context["privacy"] : null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.privacy\" v-html=\"error.privacy\"></span>
      </div>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ((isset($context["agree"]) ? $context["agree"] : null)) {
            // line 23
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"agree\" type=\"checkbox\"/>";
            // line 24
            echo (isset($context["agree"]) ? $context["agree"] : null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.agree\" v-html=\"error.agree\"></span>
      </div>
    ";
        }
        // line 28
        echo "
    <div class=\"buttons confirm-buttons\">
      <div class=\"pull-right\">
        <button type=\"button\" v-on:click=\"save(true)\" data-loading-text=\"<span>";
        // line 31
        echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "confirmOrderLoadingText"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "confirmOrderLoadingText"), "method")) : ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "confirmOrderLanguage"), "method")));
        echo "</span>\" class=\"btn btn-primary\" id=\"quick-checkout-button-confirm\"><span>";
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "confirmOrderLanguage"), "method");
        echo "</span></button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  76 => 28,  69 => 24,  66 => 23,  64 => 22,  61 => 21,  54 => 17,  51 => 16,  49 => 15,  46 => 14,  40 => 11,  37 => 10,  35 => 9,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-section confirm-section">*/
/*   <div class="title section-title">{{ j3.settings.get('sectionTitleConfirm') }}</div>*/
/* */
/*   <div class="section-body">*/
/*     <div class="section-comments" v-bind:class="{ 'has-error': error && error.comments }">*/
/*       <textarea class="form-control" v-model="order_data.comment" placeholder="{{ text_comments }}"></textarea>*/
/*     </div>*/
/* */
/*     {% if newsletter %}*/
/*       <div class="checkbox">*/
/*         <label><input v-model="newsletter" type="checkbox"/>{{ newsletter }}</label>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if privacy %}*/
/*       <div class="checkbox">*/
/*         <label><input v-model="privacy" type="checkbox"/>{{ privacy }}</label>*/
/*         <span class="text-danger" v-if="error && error.privacy" v-html="error.privacy"></span>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if agree %}*/
/*       <div class="checkbox">*/
/*         <label><input v-model="agree" type="checkbox"/>{{ agree }}</label>*/
/*         <span class="text-danger" v-if="error && error.agree" v-html="error.agree"></span>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div class="buttons confirm-buttons">*/
/*       <div class="pull-right">*/
/*         <button type="button" v-on:click="save(true)" data-loading-text="<span>{{ j3.settings.get('confirmOrderLoadingText') ? j3.settings.get('confirmOrderLoadingText') : j3.settings.get('confirmOrderLanguage') }}</span>" class="btn btn-primary" id="quick-checkout-button-confirm"><span>{{ j3.settings.get('confirmOrderLanguage') }}</span></button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
