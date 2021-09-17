<?php

/* journal3/template/journal3/checkout/register.twig */
class __TwigTemplate_9b938104e7dd3c9432cf9ac61a66e333d306dd3c4df4f02381cb1c2b1d442baa extends Twig_Template
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
        echo "<div class=\"checkout-section section-register\" v-if=\"!customer_id\">
  <div class=\"title section-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitlePersonal"), "method");
        echo "</div>
  <div class=\"section-body\">
    <div class=\"form-group account-customer-group\" style=\"display: ";
        // line 4
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
      <label class=\"control-label\">";
        // line 5
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 7
            echo "        <div class=\"radio\">
          <label>
            <input v-model=\"order_data.customer_group_id\" type=\"radio\" name=\"customer_group_id\" value=\"";
            // line 9
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\" checked=\"checked\"/>
            ";
            // line 10
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</label>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>

    ";
        // line 16
        echo "
    <div class=\"form-group required account-firstname\">
      <label class=\"control-label\" for=\"input-firstname\">";
        // line 18
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
      <input v-model=\"order_data.payment_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 19
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.payment_firstname\" v-html=\"error.payment_firstname\"></span>
    </div>

    ";
        // line 24
        echo "
    <div class=\"form-group required account-lastname\">
      <label class=\"control-label\" for=\"input-lastname\">";
        // line 26
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
      <input v-model=\"order_data.payment_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 27
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.payment_lastname\" v-html=\"error.payment_lastname\"></span>
    </div>

    ";
        // line 32
        echo "
    <div class=\"form-group required account-email\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 34
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
      <input v-model=\"order_data.email\" type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 35
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.email\" v-html=\"error.email\"></span>
    </div>

    ";
        // line 40
        echo "
    <div class=\"form-group required account-telephone\">
      <label class=\"control-label\" for=\"input-telephone\">";
        // line 42
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
      <input v-model=\"order_data.telephone\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 43
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.telephone\" v-html=\"error.telephone\"></span>
    </div>

    ";
        // line 48
        echo "
    <div v-if=\"account === 'register'\" class=\"form-group required account-pass\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 50
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
      <input v-model=\"password\" type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 51
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.password\" v-html=\"error.password\"></span>
    </div>

    <div v-if=\"account === 'register'\" class=\"form-group required account-pass2\">
      <label class=\"control-label\" for=\"input-confirm\">";
        // line 56
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
      <input v-model=\"password2\" type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 57
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.password2\" v-html=\"error.password2\"></span>
    </div>

    ";
        // line 62
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <select v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
        <option value=\"\">";
        // line 66
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
        <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
      </select>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 73
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-html=\"custom_field.name\"></label>
      <div v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\">
        <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
          <label>
            <input type=\"radio\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
            <span v-html=\"custom_field_value.name\"></span></label>
        </div>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 87
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-html=\"custom_field.name\"></label>
      <div v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\"> ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "custom_field_value", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 91
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
            // line 93
            echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "location", array());
            echo "][";
            echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "custom_field_id", array());
            echo "][]\" value=\"";
            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
            echo "\"/>
              ";
            // line 94
            echo $this->getAttribute($context["custom_field_value"], "name", array());
            echo "</label>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo " </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 101
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" value=\"";
        // line 104
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 109
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <textarea v-model=\"order_data.custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        // line 112
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "</textarea>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 117
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <br/>
      <button type=\"button\" v-on:click=\"upload('custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        // line 121
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "</button>
      <input type=\"hidden\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 127
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group date\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 131
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 140
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group time\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 144
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 153
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group datetime\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 157
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 157,  289 => 153,  278 => 144,  272 => 140,  261 => 131,  255 => 127,  247 => 121,  241 => 117,  234 => 112,  229 => 109,  222 => 104,  217 => 101,  211 => 96,  202 => 94,  194 => 93,  190 => 91,  186 => 90,  181 => 87,  166 => 73,  157 => 66,  151 => 62,  144 => 57,  140 => 56,  132 => 51,  128 => 50,  124 => 48,  117 => 43,  113 => 42,  109 => 40,  102 => 35,  98 => 34,  94 => 32,  87 => 27,  83 => 26,  79 => 24,  72 => 19,  68 => 18,  64 => 16,  60 => 13,  51 => 10,  47 => 9,  43 => 7,  39 => 6,  35 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-section section-register" v-if="!customer_id">*/
/*   <div class="title section-title">{{ j3.settings.get('sectionTitlePersonal') }}</div>*/
/*   <div class="section-body">*/
/*     <div class="form-group account-customer-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*       <label class="control-label">{{ entry_customer_group }}</label>*/
/*       {% for customer_group in customer_groups %}*/
/*         <div class="radio">*/
/*           <label>*/
/*             <input v-model="order_data.customer_group_id" type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked"/>*/
/*             {{ customer_group.name }}</label>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/* */
/*     {# customer firstname #}*/
/* */
/*     <div class="form-group required account-firstname">*/
/*       <label class="control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*       <input v-model="order_data.payment_firstname" type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control"/>*/
/*       <span class="text-danger" v-if="error && error.payment_firstname" v-html="error.payment_firstname"></span>*/
/*     </div>*/
/* */
/*     {# customer lastname #}*/
/* */
/*     <div class="form-group required account-lastname">*/
/*       <label class="control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*       <input v-model="order_data.payment_lastname" type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control"/>*/
/*       <span class="text-danger" v-if="error && error.payment_lastname" v-html="error.payment_lastname"></span>*/
/*     </div>*/
/* */
/*     {# customer email #}*/
/* */
/*     <div class="form-group required account-email">*/
/*       <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*       <input v-model="order_data.email" type="text" name="email" value="" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*       <span class="text-danger" v-if="error && error.email" v-html="error.email"></span>*/
/*     </div>*/
/* */
/*     {# customer telephone #}*/
/* */
/*     <div class="form-group required account-telephone">*/
/*       <label class="control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*       <input v-model="order_data.telephone" type="text" name="telephone" value="" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control"/>*/
/*       <span class="text-danger" v-if="error && error.telephone" v-html="error.telephone"></span>*/
/*     </div>*/
/* */
/*     {# customer password #}*/
/* */
/*     <div v-if="account === 'register'" class="form-group required account-pass">*/
/*       <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*       <input v-model="password" type="password" name="password" value="" placeholder="{{ entry_password }}" id="input-password" class="form-control"/>*/
/*       <span class="text-danger" v-if="error && error.password" v-html="error.password"></span>*/
/*     </div>*/
/* */
/*     <div v-if="account === 'register'" class="form-group required account-pass2">*/
/*       <label class="control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*       <input v-model="password2" type="password" name="confirm" value="" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control"/>*/
/*       <span class="text-danger" v-if="error && error.password2" v-html="error.password2"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - select #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'select'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-bind:for="'input-account-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*       <select v-model="order_data.custom_field[custom_field.custom_field_id]" v-bind:id="'input-account-custom-field' + custom_field.custom_field_id" class="form-control">*/
/*         <option value="">{{ text_select }}</option>*/
/*         <option v-for="custom_field_value in custom_field.custom_field_value" v-bind:value="custom_field_value.custom_field_value_id" v-html="custom_field_value.name"></option>*/
/*       </select>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - radio #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'radio'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-html="custom_field.name"></label>*/
/*       <div v-bind:id="'input-account-custom-field' + custom_field.custom_field_id">*/
/*         <div class="radio" v-for="custom_field_value in custom_field.custom_field_value">*/
/*           <label>*/
/*             <input type="radio" v-model="order_data.custom_field[custom_field.custom_field_id]" v-bind:value="custom_field_value.custom_field_value_id"/>*/
/*             <span v-html="custom_field_value.name"></span></label>*/
/*         </div>*/
/*       </div>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - checkbox #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'checkbox'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-html="custom_field.name"></label>*/
/*       <div v-bind:id="'input-account-custom-field' + custom_field.custom_field_id"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*         {% endfor %} </div>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - text #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'text'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-bind:for="'input-account-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*       <input type="text" v-model="order_data.custom_field[custom_field.custom_field_id]" value="{{ custom_field.value }}" v-bind:placeholder="custom_field.name" v-bind:id="'input-account-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - textarea #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'textarea'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-bind:for="'input-account-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*       <textarea v-model="order_data.custom_field[custom_field.custom_field_id]" rows="5" v-bind:placeholder="custom_field.name" v-bind:id="'input-account-custom-field' + custom_field.custom_field_id" class="form-control">{{ custom_field.value }}</textarea>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - file #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'file'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-bind:for="'input-account-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*       <br/>*/
/*       <button type="button" v-on:click="upload('custom_field', custom_field.custom_field_id, $event)" v-bind:id="'button-account-custom-field' + custom_field.custom_field_id" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*       <input type="hidden" v-model="order_data.custom_field[custom_field.custom_field_id]" value="" v-bind:id="'input-account-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - date #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'date'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-bind:for="'input-account-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*       <div class="input-group date">*/
/*         <input type="text" v-model="order_data.custom_field[custom_field.custom_field_id]" v-on:change="saveDateTime('custom_field', custom_field.custom_field_id, $event)" value="{{ custom_field.value }}" v-bind:placeholder="custom_field.name" data-date-format="YYYY-MM-DD" v-bind:id="'input-account-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span>*/
/*       </div>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - time #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'time'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-bind:for="'input-account-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*       <div class="input-group time">*/
/*         <input type="text" v-model="order_data.custom_field[custom_field.custom_field_id]" v-on:change="saveDateTime('custom_field', custom_field.custom_field_id, $event)" value="{{ custom_field.value }}" v-bind:placeholder="custom_field.name" data-date-format="HH:mm" v-bind:id="'input-account-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span>*/
/*       </div>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/* */
/*     {# custom fields - datetime #}*/
/* */
/*     <div v-for="custom_field in custom_fields.custom_fields.account" v-if="custom_field.type === 'time'" v-bind:id="'account-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*       <label class="control-label" v-bind:for="'input-account-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*       <div class="input-group datetime">*/
/*         <input type="text" v-model="order_data.custom_field[custom_field.custom_field_id]" v-on:change="saveDateTime('custom_field', custom_field.custom_field_id, $event)" value="{{ custom_field.value }}" v-bind:placeholder="custom_field.name" data-date-format="YYYY-MM-DD HH:mm" v-bind:id="'input-account-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span>*/
/*       </div>*/
/*       <span class="text-danger" v-if="error && error.custom_field && error.custom_field[custom_field.custom_field_id]" v-html="error.custom_field[custom_field.custom_field_id]"></span>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
