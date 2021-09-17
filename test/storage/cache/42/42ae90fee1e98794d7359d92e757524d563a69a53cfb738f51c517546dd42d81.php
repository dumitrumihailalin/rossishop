<?php

/* extension/module/bnit_language.twig */
class __TwigTemplate_9186649a6f8f64826535fb9c73d4a78ec7213e0686314352026913ecf724dcec extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        echo (isset($context["lnkcancel"]) ? $context["lnkcancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 16
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "permission", array())) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_permission"]) ? $context["error_permission"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "\t";
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "langinstallation", array())) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_langinstallation"]) ? $context["error_langinstallation"] : null);
            echo " - ";
            echo (isset($context["langinstallationerrcode"]) ? $context["langinstallationerrcode"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "\t
    ";
        // line 27
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 28
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 32
        echo "\t
<form action=\"";
        // line 33
        echo $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "save", array());
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

\t<input type=\"hidden\" name=\"lnginstall\" id=\"lnginstall\" value=\"\" />

    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-language\"></i> ";
        // line 39
        echo (isset($context["text_header2"]) ? $context["text_header2"] : null);
        echo "</h3>
      </div>
\t  <div class=\"panel-body\">
           <div class=\"form-group\">
            <div class=\"col-sm-12\">
\t\t\t<strong>";
        // line 44
        echo (isset($context["text_language_status_str"]) ? $context["text_language_status_str"] : null);
        echo "</strong> ";
        echo $this->getAttribute((isset($context["text_language_status"]) ? $context["text_language_status"] : null), (isset($context["lang_installation_status"]) ? $context["lang_installation_status"] : null), array(), "array");
        echo " ( inst code ";
        echo (isset($context["lang_installation_status"]) ? $context["lang_installation_status"] : null);
        echo " )<br>
\t\t\t<strong>";
        // line 45
        echo (isset($context["text_extension_version"]) ? $context["text_extension_version"] : null);
        echo "</strong> ";
        echo (isset($context["lang_extension_version"]) ? $context["lang_extension_version"] : null);
        echo "<br>
\t\t\t</div>
          </div>
\t  </div>
\t  
\t  ";
        // line 51
        echo "\t  ";
        if (((isset($context["lang_installation_status"]) ? $context["lang_installation_status"] : null) == 0)) {
            // line 52
            echo "      <div class=\"panel-body\">
           <div class=\"form-group\">
            <div class=\"col-sm-10\">
\t\t\t<label class=\"control-label\" for=\"input-install-eng\">";
            // line 55
            echo (isset($context["text_title_install_eng"]) ? $context["text_title_install_eng"] : null);
            echo "</label>
\t\t\t<p>";
            // line 56
            echo (isset($context["text_install_eng"]) ? $context["text_install_eng"] : null);
            echo "</p>
\t\t\t</div>
            <div class=\"col-sm-2 text-right\">
              <button type=\"button\" form=\"form-module\" data-toggle=\"tooltip\" data-original-title=\"";
            // line 59
            echo (isset($context["button_install"]) ? $context["button_install"] : null);
            echo "\" title=\"";
            echo (isset($context["button_install"]) ? $context["button_install"] : null);
            echo "\" class=\"btn btn-success\" onclick=\"\$('#lnginstall').val('1');\$('#form-module').submit();\"><i class=\"fa fa-plus-circle fa-2x\"></i></button>
            </div>
          </div>
\t  </div>  
\t  ";
        }
        // line 64
        echo "
\t  ";
        // line 66
        echo "\t  ";
        if (((isset($context["lang_installation_status"]) ? $context["lang_installation_status"] : null) == 0)) {
            // line 67
            echo "      <div class=\"panel-body\">
           <div class=\"form-group\">
            <div class=\"col-sm-10\">
\t\t\t<label class=\"control-label\" for=\"input-install-full\">";
            // line 70
            echo (isset($context["text_title_install_full"]) ? $context["text_title_install_full"] : null);
            echo "</label>
\t\t\t<p>";
            // line 71
            echo (isset($context["text_install_full"]) ? $context["text_install_full"] : null);
            echo "</p>
\t\t\t</div>
            <div class=\"col-sm-2 text-right\">
              <button type=\"button\" form=\"form-module\" data-toggle=\"tooltip\" data-original-title=\"";
            // line 74
            echo (isset($context["button_install"]) ? $context["button_install"] : null);
            echo "\" title=\"";
            echo (isset($context["button_install"]) ? $context["button_install"] : null);
            echo "\" class=\"btn btn-success\" onclick=\"\$('#lnginstall').val('0');\$('#form-module').submit();\"><i class=\"fa fa-plus-circle fa-2x\"></i></button>
            </div>
          </div>
\t  </div>
\t  ";
        }
        // line 79
        echo "
\t  ";
        // line 81
        echo "\t  ";
        if (((isset($context["lang_installation_status"]) ? $context["lang_installation_status"] : null) == 1)) {
            // line 82
            echo "      <div class=\"panel-body\">
           <div class=\"form-group\">
            <div class=\"col-sm-10\">
\t\t\t<label class=\"control-label\" for=\"input-install-eng\">";
            // line 85
            echo (isset($context["text_title_install_extra"]) ? $context["text_title_install_extra"] : null);
            echo "</label>
\t\t\t<p>";
            // line 86
            echo (isset($context["text_install_extra"]) ? $context["text_install_extra"] : null);
            echo "</p>
\t\t\t</div>
            <div class=\"col-sm-2 text-right\">
\t\t\t  <button type=\"button\" form=\"form-module\" data-toggle=\"tooltip\" data-original-title=\"";
            // line 89
            echo (isset($context["button_install"]) ? $context["button_install"] : null);
            echo "\" title=\"";
            echo (isset($context["button_install"]) ? $context["button_install"] : null);
            echo "\" class=\"btn btn-success\" onclick=\"\$('#lnginstall').val('2');\$('#form-module').submit();\"><i class=\"fa fa-plus-circle fa-2x\"></i></button>
            </div>
          </div>
\t  </div>  
\t  ";
        }
        // line 94
        echo "\t
\t  ";
        // line 96
        echo "\t  ";
        if (((isset($context["lang_installation_status"]) ? $context["lang_installation_status"] : null) != 0)) {
            // line 97
            echo "      <div class=\"panel-body\">
           <div class=\"form-group\">
            <div class=\"col-sm-10\">
\t\t\t<label class=\"control-label\" for=\"input-languninstall\">";
            // line 100
            echo (isset($context["text_title_languninstall"]) ? $context["text_title_languninstall"] : null);
            echo "</label>
\t\t\t<p>";
            // line 101
            echo (isset($context["text_languninstall"]) ? $context["text_languninstall"] : null);
            echo "</p>
\t\t\t</div>
            <div class=\"col-sm-2 text-right\">
\t\t\t  <button type=\"button\" form=\"form-module\" data-toggle=\"tooltip\" data-original-title=\"";
            // line 104
            echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
            echo "\" title=\"";
            echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
            echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
            echo "') ? ( \$('#lnginstall').val('3'), \$('#form-module').submit() ) : false;\"><i class=\"fa fa-trash-o fa-2x\"></i></button>
            </div>
          </div>
\t  </div>  
\t  ";
        }
        // line 109
        echo "
\t  ";
        // line 111
        echo "\t  ";
        if (((isset($context["lang_installation_status"]) ? $context["lang_installation_status"] : null) == 3)) {
            // line 112
            echo "      <div class=\"panel-body\">
           <div class=\"form-group\">
            <div class=\"col-sm-10\">
\t\t\t<label class=\"control-label\" for=\"input-langinstrepair\">";
            // line 115
            echo (isset($context["text_title_langinstrepair"]) ? $context["text_title_langinstrepair"] : null);
            echo "</label>
\t\t\t<p>";
            // line 116
            echo (isset($context["text_langinstrepair"]) ? $context["text_langinstrepair"] : null);
            echo "</p>
\t\t\t</div>
            <div class=\"col-sm-2 text-right\">
\t\t\t  <button type=\"button\" form=\"form-module\" data-toggle=\"tooltip\" data-original-title=\"";
            // line 119
            echo (isset($context["button_reconfig"]) ? $context["button_reconfig"] : null);
            echo "\" title=\"";
            echo (isset($context["button_reconfig"]) ? $context["button_reconfig"] : null);
            echo "\" class=\"btn btn-success\" onclick=\"\$('#lnginstall').val('4');\$('#form-module').submit();\"><i class=\"fa fa-wrench fa-2x\"></i></button>
            </div>
          </div>
\t  </div>  
\t  ";
        }
        // line 124
        echo "\t  
</form>
\t\t<!-- no need to enable/disable the module -->
        <!--
\t\t<div class=\"panel-body\">
\t\t
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 131
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_bnit_language_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 134
        if ((isset($context["module_bnit_language_status"]) ? $context["module_bnit_language_status"] : null)) {
            // line 135
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 136
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 138
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 139
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 141
        echo "              </select>
            </div>
          </div>
        </form>
\t\t</div>
\t\t-->

    </div>
  </div>
</div>
";
        // line 151
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/bnit_language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 151,  325 => 141,  320 => 139,  315 => 138,  310 => 136,  305 => 135,  303 => 134,  297 => 131,  288 => 124,  278 => 119,  272 => 116,  268 => 115,  263 => 112,  260 => 111,  257 => 109,  245 => 104,  239 => 101,  235 => 100,  230 => 97,  227 => 96,  224 => 94,  214 => 89,  208 => 86,  204 => 85,  199 => 82,  196 => 81,  193 => 79,  183 => 74,  177 => 71,  173 => 70,  168 => 67,  165 => 66,  162 => 64,  152 => 59,  146 => 56,  142 => 55,  137 => 52,  134 => 51,  124 => 45,  116 => 44,  108 => 39,  99 => 33,  96 => 32,  88 => 28,  86 => 27,  83 => 26,  73 => 22,  70 => 21,  62 => 17,  60 => 16,  54 => 12,  43 => 10,  39 => 9,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <a href="{{ lnkcancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error.permission %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_permission }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* 	{% if error.langinstallation %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_langinstallation }} - {{ langinstallationerrcode}}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* 	*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* 	*/
/* <form action="{{ action.save }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/* */
/* 	<input type="hidden" name="lnginstall" id="lnginstall" value="" />*/
/* */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-language"></i> {{ text_header2 }}</h3>*/
/*       </div>*/
/* 	  <div class="panel-body">*/
/*            <div class="form-group">*/
/*             <div class="col-sm-12">*/
/* 			<strong>{{ text_language_status_str }}</strong> {{ text_language_status[lang_installation_status] }} ( inst code {{ lang_installation_status }} )<br>*/
/* 			<strong>{{ text_extension_version }}</strong> {{ lang_extension_version }}<br>*/
/* 			</div>*/
/*           </div>*/
/* 	  </div>*/
/* 	  */
/* 	  {#base installation - installation 1#}*/
/* 	  {% if lang_installation_status == 0 %}*/
/*       <div class="panel-body">*/
/*            <div class="form-group">*/
/*             <div class="col-sm-10">*/
/* 			<label class="control-label" for="input-install-eng">{{ text_title_install_eng }}</label>*/
/* 			<p>{{ text_install_eng }}</p>*/
/* 			</div>*/
/*             <div class="col-sm-2 text-right">*/
/*               <button type="button" form="form-module" data-toggle="tooltip" data-original-title="{{ button_install }}" title="{{ button_install }}" class="btn btn-success" onclick="$('#lnginstall').val('1');$('#form-module').submit();"><i class="fa fa-plus-circle fa-2x"></i></button>*/
/*             </div>*/
/*           </div>*/
/* 	  </div>  */
/* 	  {% endif %}*/
/* */
/* 	  {#full installation - installation 0#}*/
/* 	  {% if lang_installation_status == 0 %}*/
/*       <div class="panel-body">*/
/*            <div class="form-group">*/
/*             <div class="col-sm-10">*/
/* 			<label class="control-label" for="input-install-full">{{ text_title_install_full }}</label>*/
/* 			<p>{{ text_install_full }}</p>*/
/* 			</div>*/
/*             <div class="col-sm-2 text-right">*/
/*               <button type="button" form="form-module" data-toggle="tooltip" data-original-title="{{ button_install }}" title="{{ button_install }}" class="btn btn-success" onclick="$('#lnginstall').val('0');$('#form-module').submit();"><i class="fa fa-plus-circle fa-2x"></i></button>*/
/*             </div>*/
/*           </div>*/
/* 	  </div>*/
/* 	  {% endif %}*/
/* */
/* 	  {#install extra only since the base installation is already installed - 2#}*/
/* 	  {% if lang_installation_status == 1 %}*/
/*       <div class="panel-body">*/
/*            <div class="form-group">*/
/*             <div class="col-sm-10">*/
/* 			<label class="control-label" for="input-install-eng">{{ text_title_install_extra }}</label>*/
/* 			<p>{{ text_install_extra }}</p>*/
/* 			</div>*/
/*             <div class="col-sm-2 text-right">*/
/* 			  <button type="button" form="form-module" data-toggle="tooltip" data-original-title="{{ button_install }}" title="{{ button_install }}" class="btn btn-success" onclick="$('#lnginstall').val('2');$('#form-module').submit();"><i class="fa fa-plus-circle fa-2x"></i></button>*/
/*             </div>*/
/*           </div>*/
/* 	  </div>  */
/* 	  {% endif %}*/
/* 	*/
/* 	  {#uninstall - 3#}*/
/* 	  {% if lang_installation_status != 0 %}*/
/*       <div class="panel-body">*/
/*            <div class="form-group">*/
/*             <div class="col-sm-10">*/
/* 			<label class="control-label" for="input-languninstall">{{ text_title_languninstall }}</label>*/
/* 			<p>{{ text_languninstall }}</p>*/
/* 			</div>*/
/*             <div class="col-sm-2 text-right">*/
/* 			  <button type="button" form="form-module" data-toggle="tooltip" data-original-title="{{ button_uninstall }}" title="{{ button_uninstall }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? ( $('#lnginstall').val('3'), $('#form-module').submit() ) : false;"><i class="fa fa-trash-o fa-2x"></i></button>*/
/*             </div>*/
/*           </div>*/
/* 	  </div>  */
/* 	  {% endif %}*/
/* */
/* 	  {#sync a possibly misconfigured language module - 4#}*/
/* 	  {% if lang_installation_status == 3 %}*/
/*       <div class="panel-body">*/
/*            <div class="form-group">*/
/*             <div class="col-sm-10">*/
/* 			<label class="control-label" for="input-langinstrepair">{{ text_title_langinstrepair }}</label>*/
/* 			<p>{{ text_langinstrepair }}</p>*/
/* 			</div>*/
/*             <div class="col-sm-2 text-right">*/
/* 			  <button type="button" form="form-module" data-toggle="tooltip" data-original-title="{{ button_reconfig }}" title="{{ button_reconfig }}" class="btn btn-success" onclick="$('#lnginstall').val('4');$('#form-module').submit();"><i class="fa fa-wrench fa-2x"></i></button>*/
/*             </div>*/
/*           </div>*/
/* 	  </div>  */
/* 	  {% endif %}*/
/* 	  */
/* </form>*/
/* 		<!-- no need to enable/disable the module -->*/
/*         <!--*/
/* 		<div class="panel-body">*/
/* 		*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_bnit_language_status" id="input-status" class="form-control">*/
/*                 {% if module_bnit_language_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/* 		</div>*/
/* 		-->*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
