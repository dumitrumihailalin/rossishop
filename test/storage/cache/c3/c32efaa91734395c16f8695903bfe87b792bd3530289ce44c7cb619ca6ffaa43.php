<?php

/* journal3/template/journal3/headers/mobile/header_mobile_2.twig */
class __TwigTemplate_ccd4fb6c801a536c1558c50a1a2d3957bfdc9e4f1200ebcbe10e65faa56aeac7 extends Twig_Template
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
        echo "<div class=\"mobile-header mobile-default mobile-2\">
  <div class=\"mobile-top-bar\">
    <div class=\"mobile-top-menu-wrapper\">
      ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobile_top_menu"), "method");
        echo "
    </div>
    ";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileLangPosition"), "method") == "top")) {
            // line 7
            echo "    <div class=\"language-currency top-menu\">
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 9
            echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ((isset($context["currency"]) ? $context["currency"] : null)) : (""));
            echo "
      </div>
      <div class=\"mobile-language-wrapper\">
        ";
            // line 12
            echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ((isset($context["language"]) ? $context["language"] : null)) : (""));
            echo "
      </div>
    </div>
    ";
        }
        // line 16
        echo "  </div>
  <div class=\"mobile-bar sticky-bar\">
    <div class=\"menu-trigger\">
      <button><span>Menu</span></button>
    </div>
    ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuStatus1"), "method")) {
            // line 22
            echo "    <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink1.href"), "method");
            echo "\" ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink1.attrs"), "method")), "method");
            echo ">
      ";
            // line 23
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink1.name"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "cache", array()), "update", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink1.total"), "method")), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink1.classes"), "method")), "method");
            echo "
    </a>
    ";
        }
        // line 26
        echo "    <div class=\"mobile-logo-wrapper\">
      ";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) {
            // line 28
            echo "        <div id=\"logo\">
          ";
            // line 29
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method")) {
                // line 30
                echo "            <a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\">
              <img src=\"";
                // line 31
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method");
                echo "\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo2x_src"), "method")) {
                    echo "srcset=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method");
                    echo " 1x, ";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo2x_src"), "method");
                    echo " 2x\"";
                }
                echo " width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_height"), "method");
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\"/>
            </a>
          ";
            } else {
                // line 34
                echo "            <h1><a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\">";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "</a></h1>
          ";
            }
            // line 36
            echo "        </div>
      ";
        }
        // line 38
        echo "    </div>
    ";
        // line 39
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuStatus2"), "method")) {
            // line 40
            echo "    <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink2.href"), "method");
            echo "\" ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink2.attrs"), "method")), "method");
            echo ">
      ";
            // line 41
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink2.name"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "cache", array()), "update", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink2.total"), "method")), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileCustomMenuLink2.classes"), "method")), "method");
            echo "
    </a>
    ";
        }
        // line 44
        echo "    <div class=\"mobile-cart-wrapper mini-cart\">
      ";
        // line 45
        echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ((isset($context["cart"]) ? $context["cart"] : null)) : (""));
        echo "
    </div>
  </div>
  <div class=\"mobile-bar-group mobile-search-group\">
    <div class=\"mobile-search-wrapper full-search\">
      ";
        // line 50
        echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ((isset($context["search"]) ? $context["search"] : null)) : (""));
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/mobile/header_mobile_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 50,  140 => 45,  137 => 44,  131 => 41,  124 => 40,  122 => 39,  119 => 38,  115 => 36,  107 => 34,  85 => 31,  80 => 30,  78 => 29,  75 => 28,  73 => 27,  70 => 26,  64 => 23,  57 => 22,  55 => 21,  48 => 16,  41 => 12,  35 => 9,  31 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="mobile-header mobile-default mobile-2">*/
/*   <div class="mobile-top-bar">*/
/*     <div class="mobile-top-menu-wrapper">*/
/*       {{ j3.settings.get('mobile_top_menu') }}*/
/*     </div>*/
/*     {% if j3.settings.get('mobileLangPosition') == 'top' %}*/
/*     <div class="language-currency top-menu">*/
/*       <div class="mobile-currency-wrapper">*/
/*         {{ j3.document.hasClass('mobile-header-active') ? currency : '' }}*/
/*       </div>*/
/*       <div class="mobile-language-wrapper">*/
/*         {{ j3.document.hasClass('mobile-header-active') ? language : '' }}*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="mobile-bar sticky-bar">*/
/*     <div class="menu-trigger">*/
/*       <button><span>Menu</span></button>*/
/*     </div>*/
/*     {% if j3.settings.get('mobileCustomMenuStatus1') %}*/
/*     <a class="mobile-custom-menu mobile-custom-menu-1" href="{{ j3.settings.get('mobileCustomMenuLink1.href') }}" {{ j3.linkAttrs(j3.settings.get('mobileCustomMenuLink1.attrs')) }}>*/
/*       {{ j3.countBadge(j3.settings.get('mobileCustomMenuLink1.name'), j3.cache.update(j3.settings.get('mobileCustomMenuLink1.total')), j3.settings.get('mobileCustomMenuLink1.classes')) }}*/
/*     </a>*/
/*     {% endif %}*/
/*     <div class="mobile-logo-wrapper">*/
/*       {% if j3.document.hasClass('mobile-header-active') %}*/
/*         <div id="logo">*/
/*           {% if j3.settings.get('logo_src') %}*/
/*             <a href="{{ home }}">*/
/*               <img src="{{ j3.settings.get('logo_src') }}" {% if j3.settings.get('logo2x_src') %}srcset="{{ j3.settings.get('logo_src') }} 1x, {{ j3.settings.get('logo2x_src') }} 2x"{% endif %} width="{{ j3.settings.get('logo_width') }}" height="{{ j3.settings.get('logo_height') }}" alt="{{ name }}" title="{{ name }}"/>*/
/*             </a>*/
/*           {% else %}*/
/*             <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*     {% if j3.settings.get('mobileCustomMenuStatus2') %}*/
/*     <a class="mobile-custom-menu mobile-custom-menu-2" href="{{ j3.settings.get('mobileCustomMenuLink2.href') }}" {{ j3.linkAttrs(j3.settings.get('mobileCustomMenuLink2.attrs')) }}>*/
/*       {{ j3.countBadge(j3.settings.get('mobileCustomMenuLink2.name'), j3.cache.update(j3.settings.get('mobileCustomMenuLink2.total')), j3.settings.get('mobileCustomMenuLink2.classes')) }}*/
/*     </a>*/
/*     {% endif %}*/
/*     <div class="mobile-cart-wrapper mini-cart">*/
/*       {{ j3.document.hasClass('mobile-header-active') ? cart : '' }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="mobile-bar-group mobile-search-group">*/
/*     <div class="mobile-search-wrapper full-search">*/
/*       {{ j3.document.hasClass('mobile-header-active') ? search : '' }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
