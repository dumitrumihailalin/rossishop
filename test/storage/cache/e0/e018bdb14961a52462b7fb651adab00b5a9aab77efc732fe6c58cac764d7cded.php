<?php

/* journal3/template/journal3/module/form.twig */
class __TwigTemplate_845f227de34bc485fcbdafd9f036f49881862a5bcec7842252f397b4ca479092 extends Twig_Template
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
        $context["id"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "uniqueId", array(0 => "field-"), "method");
        // line 2
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  ";
        // line 3
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
  ";
        }
        // line 6
        echo "  <div class=\"module-body\">
    <form action=\"";
        // line 7
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
      <fieldset>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 10
            echo "          ";
            if (($this->getAttribute($context["item"], "type", array()) == "legend")) {
                // line 11
                echo "            <legend>";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</legend>
          ";
            }
            // line 13
            echo "
          ";
            // line 14
            if (($this->getAttribute($context["item"], "type", array()) == "select")) {
                // line 15
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 16
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"item[";
                // line 18
                echo $context["index"];
                echo "]\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\">
                  <option value=\"\">";
                // line 19
                echo $this->getAttribute($context["item"], "placeholder", array());
                echo "</option>
                  ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 21
                    echo "                    <option value=\"";
                    echo $this->getAttribute($context["subitem"], "label", array());
                    echo "\">";
                    echo $this->getAttribute($context["subitem"], "label", array());
                    echo "</option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                </select>
              </div>
            </div>
          ";
            }
            // line 27
            echo "
          ";
            // line 28
            if (($this->getAttribute($context["item"], "type", array()) == "radio")) {
                // line 29
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\">";
                // line 30
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 33
                    echo "                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"item[";
                    // line 35
                    echo $context["index"];
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["subitem"], "label", array());
                    echo "\"/>
                      ";
                    // line 36
                    echo $this->getAttribute($context["subitem"], "label", array());
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "              </div>
            </div>
          ";
            }
            // line 42
            echo "
          ";
            // line 43
            if (($this->getAttribute($context["item"], "type", array()) == "checkbox")) {
                // line 44
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\">";
                // line 45
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 48
                    echo "                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\" name=\"item[";
                    // line 50
                    echo $context["index"];
                    echo "][]\" value=\"";
                    echo $this->getAttribute($context["subitem"], "label", array());
                    echo "\"/>
                      ";
                    // line 51
                    echo $this->getAttribute($context["subitem"], "label", array());
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "              </div>
            </div>
          ";
            }
            // line 57
            echo "
          ";
            // line 58
            if ((($this->getAttribute($context["item"], "type", array()) == "text") || ($this->getAttribute($context["item"], "type", array()) == "name"))) {
                // line 59
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 60
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"item[";
                // line 62
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo $this->getAttribute($context["item"], "placeholder", array());
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
              </div>
            </div>
          ";
            }
            // line 66
            echo "
          ";
            // line 67
            if (($this->getAttribute($context["item"], "type", array()) == "email")) {
                // line 68
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 69
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"email\" name=\"item[";
                // line 71
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo $this->getAttribute($context["item"], "placeholder", array());
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
              </div>
            </div>
          ";
            }
            // line 75
            echo "
          ";
            // line 76
            if (($this->getAttribute($context["item"], "type", array()) == "tel")) {
                // line 77
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 78
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"item[";
                // line 80
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo $this->getAttribute($context["item"], "placeholder", array());
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
              </div>
            </div>
          ";
            }
            // line 84
            echo "
          ";
            // line 85
            if (($this->getAttribute($context["item"], "type", array()) == "textarea")) {
                // line 86
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 87
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"item[";
                // line 89
                echo $context["index"];
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["item"], "placeholder", array());
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"></textarea>
              </div>
            </div>
          ";
            }
            // line 93
            echo "
          ";
            // line 94
            if (($this->getAttribute($context["item"], "type", array()) == "file")) {
                // line 95
                echo "          <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"form-upload-";
                // line 96
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"form-upload-";
                // line 98
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default upload-btn\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
              <input type=\"hidden\" name=\"item[";
                // line 99
                echo $context["index"];
                echo "]\" value=\"\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
            </div>
          </div>
          ";
            }
            // line 103
            echo "
          ";
            // line 104
            if (($this->getAttribute($context["item"], "type", array()) == "date")) {
                // line 105
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 106
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group date\" data-picker-class=\"module-form-";
                // line 108
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo "\">
                  <input type=\"text\" name=\"item[";
                // line 109
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo $this->getAttribute($context["item"], "label", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
                echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
                  <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 117
            echo "
          ";
            // line 118
            if (($this->getAttribute($context["item"], "type", array()) == "time")) {
                // line 119
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 120
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group time\" data-picker-class=\"module-form-";
                // line 122
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo "\">
                  <input type=\"text\" name=\"item[";
                // line 123
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo $this->getAttribute($context["item"], "label", array());
                echo "\" data-date-format=\"HH:mm\" data-locale=\"";
                echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
                  <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 131
            echo "
          ";
            // line 132
            if (($this->getAttribute($context["item"], "type", array()) == "datetime")) {
                // line 133
                echo "            <div class=\"form-group custom-field ";
                if ($this->getAttribute($context["item"], "required", array())) {
                    echo "required";
                }
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 134
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo $this->getAttribute($context["item"], "label", array());
                echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group datetime\" data-picker-class=\"module-form-";
                // line 136
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo "\">
                  <input type=\"text\" name=\"item[";
                // line 137
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo $this->getAttribute($context["item"], "label", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" data-locale=\"";
                echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
                  <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 145
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "        ";
        if ((isset($context["captcha"]) ? $context["captcha"] : null)) {
            // line 147
            echo "        <div class=\"form-group captcha\">
          ";
            // line 148
            echo (isset($context["captcha"]) ? $context["captcha"] : null);
            echo "
        </div>
        ";
        }
        // line 151
        echo "        ";
        if ((isset($context["agree_data"]) ? $context["agree_data"] : null)) {
            // line 152
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
              ";
            // line 155
            echo $this->getAttribute((isset($context["agree_data"]) ? $context["agree_data"] : null), "text", array());
            echo "
            </label>
          </div>
        ";
        }
        // line 159
        echo "      </fieldset>
      <div class=\"buttons\">
        <div class=\"pull-right\">
          <button type=\"submit\" class=\"btn btn-primary\"  data-loading-text=\"<span>";
        // line 162
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "</span>\"><span>";
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "</span></button>
        </div>
      </div>
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 162,  542 => 159,  535 => 155,  530 => 152,  527 => 151,  521 => 148,  518 => 147,  515 => 146,  509 => 145,  490 => 137,  486 => 136,  477 => 134,  470 => 133,  468 => 132,  465 => 131,  446 => 123,  442 => 122,  433 => 120,  426 => 119,  424 => 118,  421 => 117,  402 => 109,  398 => 108,  389 => 106,  382 => 105,  380 => 104,  377 => 103,  366 => 99,  356 => 98,  347 => 96,  340 => 95,  338 => 94,  335 => 93,  322 => 89,  313 => 87,  306 => 86,  304 => 85,  301 => 84,  288 => 80,  279 => 78,  272 => 77,  270 => 76,  267 => 75,  254 => 71,  245 => 69,  238 => 68,  236 => 67,  233 => 66,  220 => 62,  211 => 60,  204 => 59,  202 => 58,  199 => 57,  194 => 54,  185 => 51,  179 => 50,  175 => 48,  171 => 47,  166 => 45,  159 => 44,  157 => 43,  154 => 42,  149 => 39,  140 => 36,  134 => 35,  130 => 33,  126 => 32,  121 => 30,  114 => 29,  112 => 28,  109 => 27,  103 => 23,  92 => 21,  88 => 20,  84 => 19,  76 => 18,  67 => 16,  60 => 15,  58 => 14,  55 => 13,  49 => 11,  46 => 10,  42 => 9,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set id = j3.uniqueId('field-') %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*       <fieldset>*/
/*         {% for index, item in items %}*/
/*           {% if item.type == 'legend' %}*/
/*             <legend>{{ item.label }}</legend>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'select' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label" for="{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="item[{{ index }}]" id="{{ id }}-{{ index }}" class="form-control">*/
/*                   <option value="">{{ item.placeholder }}</option>*/
/*                   {% for subitem in item.items %}*/
/*                     <option value="{{ subitem.label }}">{{ subitem.label }}</option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'radio' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 {% for subitem in item.items %}*/
/*                   <div class="radio">*/
/*                     <label>*/
/*                       <input type="radio" name="item[{{ index }}]" value="{{ subitem.label }}"/>*/
/*                       {{ subitem.label }}</label>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'checkbox' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 {% for subitem in item.items %}*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       <input type="checkbox" name="item[{{ index }}][]" value="{{ subitem.label }}"/>*/
/*                       {{ subitem.label }}</label>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'text' or item.type == 'name' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label" for="{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="item[{{ index }}]" value="" placeholder="{{ item.placeholder }}" id="{{ id }}-{{ index }}" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'email' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label" for="{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="email" name="item[{{ index }}]" value="" placeholder="{{ item.placeholder }}" id="{{ id }}-{{ index }}" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'tel' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label" for="{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="tel" name="item[{{ index }}]" value="" placeholder="{{ item.placeholder }}" id="{{ id }}-{{ index }}" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'textarea' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label" for="{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <textarea name="item[{{ index }}]" rows="5" placeholder="{{ item.placeholder }}" id="{{ id }}-{{ index }}" class="form-control"></textarea>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'file' %}*/
/*           <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*             <label class="col-sm-2 control-label" for="form-upload-{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="form-upload-{{ id }}-{{ index }}" data-loading-text="{{ text_loading }}" class="btn btn-default upload-btn"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="item[{{ index }}]" value="" id="{{ id }}-{{ index }}" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'date' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label" for="{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="input-group date" data-picker-class="module-form-{{ module_id }}">*/
/*                   <input type="text" name="item[{{ index }}]" value="" placeholder="{{ item.label }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="{{ id }}-{{ index }}" class="form-control"/>*/
/*                   <div class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'time' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label" for="{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="input-group time" data-picker-class="module-form-{{ module_id }}">*/
/*                   <input type="text" name="item[{{ index }}]" value="" placeholder="{{ item.label }}" data-date-format="HH:mm" data-locale="{{ datepicker }}" id="{{ id }}-{{ index }}" class="form-control"/>*/
/*                   <div class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if item.type == 'datetime' %}*/
/*             <div class="form-group custom-field {% if item.required %}required{% endif %}">*/
/*               <label class="col-sm-2 control-label" for="{{ id }}-{{ index }}">{{ item.label }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="input-group datetime" data-picker-class="module-form-{{ module_id }}">*/
/*                   <input type="text" name="item[{{ index }}]" value="" placeholder="{{ item.label }}" data-date-format="YYYY-MM-DD HH:mm" data-locale="{{ datepicker }}" id="{{ id }}-{{ index }}" class="form-control"/>*/
/*                   <div class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*         {% if captcha %}*/
/*         <div class="form-group captcha">*/
/*           {{ captcha }}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if agree_data %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="agree" value="1"/>*/
/*               {{ agree_data.text }}*/
/*             </label>*/
/*           </div>*/
/*         {% endif %}*/
/*       </fieldset>*/
/*       <div class="buttons">*/
/*         <div class="pull-right">*/
/*           <button type="submit" class="btn btn-primary"  data-loading-text="<span>{{ button_submit }}</span>"><span>{{ button_submit }}</span></button>*/
/*         </div>*/
/*       </div>*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
