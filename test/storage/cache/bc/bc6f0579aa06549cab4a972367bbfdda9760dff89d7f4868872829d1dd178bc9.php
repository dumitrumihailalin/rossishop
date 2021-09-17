<?php

/* journal3/template/journal3/blog/posts.twig */
class __TwigTemplate_70704baadb88c8cb8266d9cecaebef65b658a7a9d385ee8847092b2d5357fc34 extends Twig_Template
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
            echo "  <h1 class=\"title page-title\">
    <span >
      ";
            // line 10
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "
      ";
            // line 11
            if ((isset($context["feed_url"]) ? $context["feed_url"] : null)) {
                // line 12
                echo "        <a class=\"blog-feed\" href=\"";
                echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
                echo "\" target=\"_blank\"><span class=\"feed-text\">";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogFeedText"), "method");
                echo "</span></a>
      ";
            }
            // line 14
            echo "    </span>
  </h1>
";
        }
        // line 17
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
        echo "
<div class=\"container blog-home\">
  <div class=\"row\">";
        // line 19
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    <div id=\"content\">
      ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">
          ";
            // line 23
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "
          ";
            // line 24
            if ((isset($context["feed_url"]) ? $context["feed_url"] : null)) {
                // line 25
                echo "            <a class=\"blog-feed\" href=\"";
                echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
                echo "\" target=\"_blank\"><span class=\"feed-text\">";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogFeedText"), "method");
                echo "</span></a>
          ";
            }
            // line 27
            echo "        </h1>
      ";
        }
        // line 29
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 30
        if ((isset($context["category_description"]) ? $context["category_description"] : null)) {
            // line 31
            echo "      <div class=\"category-description\">";
            echo (isset($context["category_description"]) ? $context["category_description"] : null);
            echo "</div>
      ";
        }
        // line 33
        echo "      ";
        if ((isset($context["posts"]) ? $context["posts"] : null)) {
            // line 34
            echo "        <div class=\"main-posts post-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalPostView"), "method");
            echo "\">
          ";
            // line 35
            $this->loadTemplate("journal3/template/journal3/post_grid.twig", "journal3/template/journal3/blog/posts.twig", 35)->display($context);
            // line 36
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 38
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 39
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        } else {
            // line 42
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 44
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>
      ";
        }
        // line 47
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 48
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 50
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/blog/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 50,  156 => 48,  151 => 47,  143 => 44,  137 => 42,  131 => 39,  127 => 38,  123 => 36,  121 => 35,  116 => 34,  113 => 33,  107 => 31,  105 => 30,  100 => 29,  96 => 27,  88 => 25,  86 => 24,  82 => 23,  79 => 22,  77 => 21,  72 => 19,  67 => 17,  62 => 14,  54 => 12,  52 => 11,  48 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title">*/
/*     <span >*/
/*       {{ heading_title }}*/
/*       {% if feed_url %}*/
/*         <a class="blog-feed" href="{{ feed_url }}" target="_blank"><span class="feed-text">{{ j3.settings.get('blogFeedText') }}</span></a>*/
/*       {% endif %}*/
/*     </span>*/
/*   </h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div class="container blog-home">*/
/*   <div class="row">{{ column_left }}*/
/*     <div id="content">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">*/
/*           {{ heading_title }}*/
/*           {% if feed_url %}*/
/*             <a class="blog-feed" href="{{ feed_url }}" target="_blank"><span class="feed-text">{{ j3.settings.get('blogFeedText') }}</span></a>*/
/*           {% endif %}*/
/*         </h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       {% if category_description %}*/
/*       <div class="category-description">{{ category_description }}</div>*/
/*       {% endif %}*/
/*       {% if posts %}*/
/*         <div class="main-posts post-{{ j3.settings.get('globalPostView') }}">*/
/*           {% include "journal3/template/journal3/post_grid.twig" %}*/
/*         </div>*/
/*         <div class="row pagination-results">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       {% else %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
