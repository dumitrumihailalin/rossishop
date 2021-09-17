<?php

/* journal3/template/information/sitemap.twig */
class __TwigTemplate_b64f12346d20f73fc95d565b88552f323d0e43fa8feeccd23c93e62a69e3b577 extends Twig_Template
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
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 13
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 24
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 29
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["category_1"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category_1"], "name", array());
            echo "</a>
              ";
            // line 30
            if ($this->getAttribute($context["category_1"], "children", array())) {
                // line 31
                echo "              <ul>
                ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 33
                    echo "                <li><a href=\"";
                    echo $this->getAttribute($context["category_2"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</a>
                  ";
                    // line 34
                    if ($this->getAttribute($context["category_2"], "children", array())) {
                        // line 35
                        echo "                  <ul>
                    ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 37
                            echo "                    <li><a href=\"";
                            echo $this->getAttribute($context["category_3"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["category_3"], "name", array());
                            echo "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                  </ul>
                  ";
                    }
                    // line 41
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "              </ul>
              ";
            }
            // line 45
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"";
        // line 51
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
            <li class=\"site-account\"><a href=\"";
        // line 52
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
              <ul>
                <li class=\"site-edit\"><a href=\"";
        // line 54
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
                <li class=\"site-pass\"><a href=\"";
        // line 55
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
                <li class=\"site-address\"><a href=\"";
        // line 56
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
                <li class=\"site-history\"><a href=\"";
        // line 57
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</a></li>
                <li class=\"site-download\"><a href=\"";
        // line 58
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 61
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 62
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 63
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\">";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</a></li>
            <li>";
        // line 64
        echo (isset($context["text_information"]) ? $context["text_information"] : null);
        echo "
              <ul>
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 67
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                <li><a href=\"";
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
              </ul>
            </li>
            ";
        // line 72
        $context["blog_sitemap"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/blog/sitemap"), "method");
        // line 73
        echo "            ";
        if ((isset($context["blog_sitemap"]) ? $context["blog_sitemap"] : null)) {
            // line 74
            echo "              <li><a href=\"";
            echo $this->getAttribute((isset($context["blog_sitemap"]) ? $context["blog_sitemap"] : null), "href", array());
            echo "\">";
            echo $this->getAttribute((isset($context["blog_sitemap"]) ? $context["blog_sitemap"] : null), "name", array());
            echo "</a>
                ";
            // line 75
            if ($this->getAttribute((isset($context["blog_sitemap"]) ? $context["blog_sitemap"] : null), "categories", array())) {
                // line 76
                echo "                  <ul>
                    ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blog_sitemap"]) ? $context["blog_sitemap"] : null), "categories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 78
                    echo "                      <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                  </ul>
                ";
            }
            // line 82
            echo "              </li>
            ";
        }
        // line 84
        echo "          </ul>
        </div>
      </div>
      ";
        // line 87
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 88
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 90
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 90,  316 => 88,  312 => 87,  307 => 84,  303 => 82,  299 => 80,  288 => 78,  284 => 77,  281 => 76,  279 => 75,  272 => 74,  269 => 73,  267 => 72,  258 => 69,  247 => 67,  243 => 66,  238 => 64,  232 => 63,  226 => 62,  220 => 61,  212 => 58,  206 => 57,  200 => 56,  194 => 55,  188 => 54,  181 => 52,  175 => 51,  169 => 47,  162 => 45,  158 => 43,  151 => 41,  147 => 39,  136 => 37,  132 => 36,  129 => 35,  127 => 34,  120 => 33,  116 => 32,  113 => 31,  111 => 30,  104 => 29,  100 => 28,  92 => 24,  86 => 22,  84 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  59 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
/* <div id="information-sitemap" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <ul>*/
/*             {% for category_1 in categories %}*/
/*             <li><a href="{{ category_1.href }}">{{ category_1.name }}</a>*/
/*               {% if category_1.children %}*/
/*               <ul>*/
/*                 {% for category_2 in category_1.children %}*/
/*                 <li><a href="{{ category_2.href }}">{{ category_2.name }}</a>*/
/*                   {% if category_2.children %}*/
/*                   <ul>*/
/*                     {% for category_3 in category_2.children %}*/
/*                     <li><a href="{{ category_3.href }}">{{ category_3.name }}</a></li>*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                   {% endif %}*/
/*                 </li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endif %}*/
/*             </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <ul>*/
/*             <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*             <li class="site-account"><a href="{{ account }}">{{ text_account }}</a>*/
/*               <ul>*/
/*                 <li class="site-edit"><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*                 <li class="site-pass"><a href="{{ password }}">{{ text_password }}</a></li>*/
/*                 <li class="site-address"><a href="{{ address }}">{{ text_address }}</a></li>*/
/*                 <li class="site-history"><a href="{{ history }}">{{ text_history }}</a></li>*/
/*                 <li class="site-download"><a href="{{ download }}">{{ text_download }}</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="{{ history }}">{{ text_cart }}</a></li>*/
/*             <li><a href="{{ checkout }}">{{ text_checkout }}</a></li>*/
/*             <li><a href="{{ search }}">{{ text_search }}</a></li>*/
/*             <li>{{ text_information }}*/
/*               <ul>*/
/*                 {% for information in informations %}*/
/*                 <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*                 {% endfor %}*/
/*                 <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             {% set blog_sitemap = j3.loadController('journal3/blog/sitemap') %}*/
/*             {% if blog_sitemap %}*/
/*               <li><a href="{{ blog_sitemap.href }}">{{ blog_sitemap.name }}</a>*/
/*                 {% if blog_sitemap.categories %}*/
/*                   <ul>*/
/*                     {% for category in blog_sitemap.categories %}*/
/*                       <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                 {% endif %}*/
/*               </li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
