<?php

/* journal3/template/journal3/checkout/address.twig */
class __TwigTemplate_3276f5950c096baefd958e9d1a68b4c5526b8839ff4be96efba6fe9c1bb33c3a extends Twig_Template
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
        echo "<div class=\"checkout-section ";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address\" v-if=\"('";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "' === 'payment') || (('";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "' === 'shipping') && !same_address && shipping_required)\">
  <div class=\"title section-title\">";
        // line 2
        echo ((((isset($context["type"]) ? $context["type"] : null) == "payment")) ? ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitlePaymentAddress"), "method")) : ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitleShippingAddress"), "method")));
        echo "</div>
  <div class=\"section-body\">
    <div class=\"radio\" v-if=\"customer_id && Object.keys(addresses).length\">
      <label>
        <input type=\"radio\" v-model=\"";
        // line 6
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_type\" v-on:change=\"save()\" value=\"existing\"/>
        ";
        // line 7
        echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
        echo "</label>
    </div>

    <div id=\"";
        // line 10
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-existing\" v-if=\"customer_id && (";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_type === 'existing')\">
      <select v-model=\"order_data.";
        // line 11
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_id\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address\" class=\"form-control\">
        <option v-for=\"address in addresses\" v-bind:value=\"address.address_id\" v-html=\"address.firstname + ' ' + address.lastname + ' ' + address.address_1 + ' ' + address.city + ' ' + address.zone + ' ' + address.country\"></option>
      </select>
      <span class=\"text-danger\" v-if=\"error && error.";
        // line 14
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_error\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_error\"></span>
    </div>

    <div class=\"radio\" v-if=\"customer_id && Object.keys(addresses).length\">
      <label>
        <input type=\"radio\" v-model=\"";
        // line 19
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_type\" v-on:change=\"save()\" value=\"new\"/>
        ";
        // line 20
        echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
        echo "</label>
    </div>

    <div v-if=\"!customer_id || (customer_id && (";
        // line 23
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_type === 'new'))\">
      <div class=\"form-group required address-firstname\" v-if=\"customer_id || (!customer_id && '";
        // line 24
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "' === 'shipping')\">
        <label class=\"control-label\" for=\"input-";
        // line 25
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-firstname\">";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 26
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-firstname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 27
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_firstname\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_firstname\"></span>
      </div>

      <div class=\"form-group required address-lastname\" v-if=\"customer_id || (!customer_id && '";
        // line 30
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "' === 'shipping')\">
        <label class=\"control-label\" for=\"input-";
        // line 31
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-lastname\">";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 32
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-lastname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 33
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_lastname\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_lastname\"></span>
      </div>

      <div class=\"form-group address-company\">
        <label class=\"control-label\" for=\"input-";
        // line 37
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-company\">";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 38
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_company\" type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-company\" class=\"form-control\"/>
      </div>

      <div class=\"form-group required address-address-1\">
        <label class=\"control-label\" for=\"input-";
        // line 42
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address-1\">";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 43
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_1\" type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address-1\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 44
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_1\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_1\"></span>
      </div>

      <div class=\"form-group required address-address-2\">
        <label class=\"control-label\" for=\"input-";
        // line 48
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address-2\">";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 49
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_2\" type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address-2\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 50
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_2\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_2\"></span>
      </div>

      <div class=\"form-group required address-city\">
        <label class=\"control-label\" for=\"input-";
        // line 54
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-city\">";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 55
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_city\" type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-city\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 56
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_city\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_city\"></span>
      </div>

      <div class=\"form-group required address-postcode\">
        <label class=\"control-label\" for=\"input-";
        // line 60
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-postcode\">";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 61
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_postcode\" type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-postcode\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 62
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_postcode\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_postcode\"></span>
      </div>

      <div class=\"form-group required address-country\">
        <label class=\"control-label\" for=\"input-";
        // line 66
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-country\">";
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 67
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_country_id\" name=\"country_id\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-country\" class=\"form-control\">
          <option value=\"\">";
        // line 68
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
          <option v-for=\"country in countries\" v-bind:value=\"country.country_id\" v-html=\"country.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 71
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_country\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_country\"></span>
      </div>

      <div class=\"form-group required address-zone\">
        <label class=\"control-label\" for=\"input-";
        // line 75
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-zone\">";
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 76
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zone_id\" name=\"zone_id\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-zone\" class=\"form-control\">
          <option v-if=\"";
        // line 77
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zones.length > 0\" value=\"\">";
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
          <option v-if=\"";
        // line 78
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zones.length == 0\" value=\"\">";
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
          <option v-for=\"zone in ";
        // line 79
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zones\" v-bind:value=\"zone.zone_id\" v-html=\"zone.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 81
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zone\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zone\"></span>
      </div>

      ";
        // line 85
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'";
        // line 86
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 87
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <select v-model=\"order_data.";
        // line 88
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
          <option value=\"\">";
        // line 89
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
          <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 92
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 96
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'";
        // line 97
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 99
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\">
          <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
            <label>
              <input type=\"radio\" v-model=\"order_data.";
        // line 102
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
              <span v-html=\"custom_field_value.name\"></span></label>
          </div>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 106
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 110
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'";
        // line 111
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 113
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\"> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "custom_field_value", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 114
            echo "            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"custom_field[";
            // line 116
            echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "location", array());
            echo "][";
            echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "custom_field_id", array());
            echo "][]\" value=\"";
            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
            echo "\"/>
                ";
            // line 117
            echo $this->getAttribute($context["custom_field_value"], "name", array());
            echo "</label>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo " </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 120
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 124
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'";
        // line 125
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 126
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <input type=\"text\" v-model=\"order_data.";
        // line 127
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"";
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 128
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 132
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'";
        // line 133
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 134
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <textarea v-model=\"order_data.";
        // line 135
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "</textarea>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 136
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 140
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'";
        // line 141
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 142
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <br/>
        <button type=\"button\" v-on:click=\"upload('";
        // line 144
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "</button>
        <input type=\"hidden\" v-model=\"order_data.";
        // line 145
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 146
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 150
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'";
        // line 151
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 152
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group date\">
          <input type=\"text\" v-model=\"order_data.";
        // line 154
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 157
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 161
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'";
        // line 162
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 163
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 165
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 168
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 172
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'datetime'\" v-bind:id=\"'";
        // line 173
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 174
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 176
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "value", array());
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 179
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field && error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>
    </div>
    <div v-if=\"('";
        // line 182
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "' === 'payment') && shipping_required\" class=\"checkbox\">
      <label>
        <input v-model=\"same_address\" v-on:change=\"save()\" type=\"checkbox\"/>
        ";
        // line 185
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 185,  615 => 182,  605 => 179,  593 => 176,  588 => 174,  584 => 173,  581 => 172,  571 => 168,  559 => 165,  554 => 163,  550 => 162,  547 => 161,  537 => 157,  525 => 154,  520 => 152,  516 => 151,  513 => 150,  503 => 146,  497 => 145,  491 => 144,  486 => 142,  482 => 141,  479 => 140,  469 => 136,  461 => 135,  457 => 134,  453 => 133,  450 => 132,  440 => 128,  432 => 127,  428 => 126,  424 => 125,  421 => 124,  411 => 120,  408 => 119,  399 => 117,  391 => 116,  387 => 114,  381 => 113,  376 => 111,  373 => 110,  363 => 106,  356 => 102,  350 => 99,  345 => 97,  342 => 96,  332 => 92,  326 => 89,  320 => 88,  316 => 87,  312 => 86,  309 => 85,  301 => 81,  296 => 79,  290 => 78,  284 => 77,  278 => 76,  272 => 75,  263 => 71,  257 => 68,  251 => 67,  245 => 66,  236 => 62,  228 => 61,  222 => 60,  213 => 56,  205 => 55,  199 => 54,  190 => 50,  182 => 49,  176 => 48,  167 => 44,  159 => 43,  153 => 42,  142 => 38,  136 => 37,  127 => 33,  119 => 32,  113 => 31,  109 => 30,  101 => 27,  93 => 26,  87 => 25,  83 => 24,  79 => 23,  73 => 20,  69 => 19,  59 => 14,  51 => 11,  45 => 10,  39 => 7,  35 => 6,  28 => 2,  19 => 1,);
    }
}
/* <div class="checkout-section {{ type }}-address" v-if="('{{ type }}' === 'payment') || (('{{ type }}' === 'shipping') && !same_address && shipping_required)">*/
/*   <div class="title section-title">{{ type == 'payment' ? j3.settings.get('sectionTitlePaymentAddress') : j3.settings.get('sectionTitleShippingAddress') }}</div>*/
/*   <div class="section-body">*/
/*     <div class="radio" v-if="customer_id && Object.keys(addresses).length">*/
/*       <label>*/
/*         <input type="radio" v-model="{{ type }}_address_type" v-on:change="save()" value="existing"/>*/
/*         {{ text_address_existing }}</label>*/
/*     </div>*/
/* */
/*     <div id="{{ type }}-existing" v-if="customer_id && ({{ type }}_address_type === 'existing')">*/
/*       <select v-model="order_data.{{ type }}_address_id" id="input-{{ type }}-address" class="form-control">*/
/*         <option v-for="address in addresses" v-bind:value="address.address_id" v-html="address.firstname + ' ' + address.lastname + ' ' + address.address_1 + ' ' + address.city + ' ' + address.zone + ' ' + address.country"></option>*/
/*       </select>*/
/*       <span class="text-danger" v-if="error && error.{{ type }}_address_error" v-html="error.{{ type }}_address_error"></span>*/
/*     </div>*/
/* */
/*     <div class="radio" v-if="customer_id && Object.keys(addresses).length">*/
/*       <label>*/
/*         <input type="radio" v-model="{{ type }}_address_type" v-on:change="save()" value="new"/>*/
/*         {{ text_address_new }}</label>*/
/*     </div>*/
/* */
/*     <div v-if="!customer_id || (customer_id && ({{ type }}_address_type === 'new'))">*/
/*       <div class="form-group required address-firstname" v-if="customer_id || (!customer_id && '{{ type }}' === 'shipping')">*/
/*         <label class="control-label" for="input-{{ type }}-firstname">{{ entry_firstname }}</label>*/
/*         <input v-model="order_data.{{ type }}_firstname" type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-{{ type }}-firstname" class="form-control"/>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_firstname" v-html="error.{{ type }}_firstname"></span>*/
/*       </div>*/
/* */
/*       <div class="form-group required address-lastname" v-if="customer_id || (!customer_id && '{{ type }}' === 'shipping')">*/
/*         <label class="control-label" for="input-{{ type }}-lastname">{{ entry_lastname }}</label>*/
/*         <input v-model="order_data.{{ type }}_lastname" type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-{{ type }}-lastname" class="form-control"/>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_lastname" v-html="error.{{ type }}_lastname"></span>*/
/*       </div>*/
/* */
/*       <div class="form-group address-company">*/
/*         <label class="control-label" for="input-{{ type }}-company">{{ entry_company }}</label>*/
/*         <input v-model="order_data.{{ type }}_company" type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-{{ type }}-company" class="form-control"/>*/
/*       </div>*/
/* */
/*       <div class="form-group required address-address-1">*/
/*         <label class="control-label" for="input-{{ type }}-address-1">{{ entry_address_1 }}</label>*/
/*         <input v-model="order_data.{{ type }}_address_1" type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-{{ type }}-address-1" class="form-control"/>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_address_1" v-html="error.{{ type }}_address_1"></span>*/
/*       </div>*/
/* */
/*       <div class="form-group required address-address-2">*/
/*         <label class="control-label" for="input-{{ type }}-address-2">{{ entry_address_2 }}</label>*/
/*         <input v-model="order_data.{{ type }}_address_2" type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-{{ type }}-address-2" class="form-control"/>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_address_2" v-html="error.{{ type }}_address_2"></span>*/
/*       </div>*/
/* */
/*       <div class="form-group required address-city">*/
/*         <label class="control-label" for="input-{{ type }}-city">{{ entry_city }}</label>*/
/*         <input v-model="order_data.{{ type }}_city" type="text" name="city" value="" placeholder="{{ entry_city }}" id="input-{{ type }}-city" class="form-control"/>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_city" v-html="error.{{ type }}_city"></span>*/
/*       </div>*/
/* */
/*       <div class="form-group required address-postcode">*/
/*         <label class="control-label" for="input-{{ type }}-postcode">{{ entry_postcode }}</label>*/
/*         <input v-model="order_data.{{ type }}_postcode" type="text" name="postcode" value="" placeholder="{{ entry_postcode }}" id="input-{{ type }}-postcode" class="form-control"/>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_postcode" v-html="error.{{ type }}_postcode"></span>*/
/*       </div>*/
/* */
/*       <div class="form-group required address-country">*/
/*         <label class="control-label" for="input-{{ type }}-country">{{ entry_country }}</label>*/
/*         <select v-model="order_data.{{ type }}_country_id" name="country_id" id="input-{{ type }}-country" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           <option v-for="country in countries" v-bind:value="country.country_id" v-html="country.name"></option>*/
/*         </select>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_country" v-html="error.{{ type }}_country"></span>*/
/*       </div>*/
/* */
/*       <div class="form-group required address-zone">*/
/*         <label class="control-label" for="input-{{ type }}-zone">{{ entry_zone }}</label>*/
/*         <select v-model="order_data.{{ type }}_zone_id" name="zone_id" id="input-{{ type }}-zone" class="form-control">*/
/*           <option v-if="{{ type }}_zones.length > 0" value="">{{ text_select }}</option>*/
/*           <option v-if="{{ type }}_zones.length == 0" value="">{{ text_none }}</option>*/
/*           <option v-for="zone in {{ type }}_zones" v-bind:value="zone.zone_id" v-html="zone.name"></option>*/
/*         </select>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_zone" v-html="error.{{ type }}_zone"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - select #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'select'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-bind:for="'input-{{ type }}-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*         <select v-model="order_data.{{ type }}_custom_field[custom_field.custom_field_id]" v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           <option v-for="custom_field_value in custom_field.custom_field_value" v-bind:value="custom_field_value.custom_field_value_id" v-html="custom_field_value.name"></option>*/
/*         </select>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - radio #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'radio'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-html="custom_field.name"></label>*/
/*         <div v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id">*/
/*           <div class="radio" v-for="custom_field_value in custom_field.custom_field_value">*/
/*             <label>*/
/*               <input type="radio" v-model="order_data.{{ type }}_custom_field[custom_field.custom_field_id]" v-bind:value="custom_field_value.custom_field_value_id"/>*/
/*               <span v-html="custom_field_value.name"></span></label>*/
/*           </div>*/
/*         </div>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - checkbox #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'checkbox'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-html="custom_field.name"></label>*/
/*         <div v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*             <div class="checkbox">*/
/*               <label>*/
/*                 <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                 {{ custom_field_value.name }}</label>*/
/*             </div>*/
/*           {% endfor %} </div>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - text #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'text'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-bind:for="'input-{{ type }}-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*         <input type="text" v-model="order_data.{{ type }}_custom_field[custom_field.custom_field_id]" value="{{ custom_field.value }}" v-bind:placeholder="custom_field.name" v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - textarea #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'textarea'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-bind:for="'input-{{ type }}-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*         <textarea v-model="order_data.{{ type }}_custom_field[custom_field.custom_field_id]" rows="5" v-bind:placeholder="custom_field.name" v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id" class="form-control">{{ custom_field.value }}</textarea>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - file #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'file'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-bind:for="'input-{{ type }}-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*         <br/>*/
/*         <button type="button" v-on:click="upload('{{ type }}_custom_field', custom_field.custom_field_id, $event)" v-bind:id="'button-account-custom-field' + custom_field.custom_field_id" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" v-model="order_data.{{ type }}_custom_field[custom_field.custom_field_id]" value="" v-bind:placeholder="custom_field.name" v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - date #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'date'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-bind:for="'input-{{ type }}-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*         <div class="input-group date">*/
/*           <input type="text" v-model="order_data.{{ type }}_custom_field[custom_field.custom_field_id]" v-on:change="saveDateTime('{{ type }}_custom_field', custom_field.custom_field_id, $event)" value="{{ custom_field.value }}" v-bind:placeholder="custom_field.name" data-date-format="YYYY-MM-DD" v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*           <span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span>*/
/*         </div>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - time #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'time'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-bind:for="'input-{{ type }}-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*         <div class="input-group time">*/
/*           <input type="text" v-model="order_data.{{ type }}_custom_field[custom_field.custom_field_id]" v-on:change="saveDateTime('{{ type }}_custom_field', custom_field.custom_field_id, $event)" value="{{ custom_field.value }}" v-bind:placeholder="custom_field.name" data-date-format="HH:mm" v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*           <span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span>*/
/*         </div>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/* */
/*       {# custom fields - datetime #}*/
/* */
/*       <div v-for="custom_field in custom_fields.custom_fields.address" v-if="custom_field.type === 'datetime'" v-bind:id="'{{ type }}-custom-field' + custom_field.custom_field_id" v-bind:class="'form-group custom-field' + (custom_field.required ? ' required' : '')">*/
/*         <label class="control-label" v-bind:for="'input-{{ type }}-custom-field' + custom_field.custom_field_id" v-html="custom_field.name"></label>*/
/*         <div class="input-group time">*/
/*           <input type="text" v-model="order_data.{{ type }}_custom_field[custom_field.custom_field_id]" v-on:change="saveDateTime('{{ type }}_custom_field', custom_field.custom_field_id, $event)" value="{{ custom_field.value }}" v-bind:placeholder="custom_field.name" data-date-format="YYYY-MM-DD HH:mm" v-bind:id="'input-{{ type }}-custom-field' + custom_field.custom_field_id" class="form-control"/>*/
/*           <span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span>*/
/*         </div>*/
/*         <span class="text-danger" v-if="error && error.{{ type }}_custom_field && error.{{ type }}_custom_field[custom_field.custom_field_id]" v-html="error.{{ type }}_custom_field[custom_field.custom_field_id]"></span>*/
/*       </div>*/
/*     </div>*/
/*     <div v-if="('{{ type }}' === 'payment') && shipping_required" class="checkbox">*/
/*       <label>*/
/*         <input v-model="same_address" v-on:change="save()" type="checkbox"/>*/
/*         {{ entry_shipping }}</label>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
