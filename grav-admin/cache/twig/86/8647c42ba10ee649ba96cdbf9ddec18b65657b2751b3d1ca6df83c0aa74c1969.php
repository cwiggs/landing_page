<?php

/* default.html.twig */
class __TwigTemplate_31cc93b662777ec5b49995144a2f872fb2174a130ddb8468e27608f320e7162d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<article class=\"box post post-excerpt\">
  <header>
  \t<div class=\"title\">
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>\t
\t</div>
";
        // line 11
        echo "    </header>

        ";
        // line 13
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 14
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        } else {
            // line 16
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        }
        // line 18
        echo "   ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  53 => 16,  47 => 14,  45 => 13,  41 => 11,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/* <article class="box post post-excerpt">*/
/*   <header>*/
/*   	<div class="title">*/
/*     <h2>{{ page.header.title }}</h2>	*/
/* 	</div>*/
/* {#    <div class="meta">*/
/*    <time class="published" datetime="{{page.date|date("Y-m-d")}}">{{ page.date|date("M j, Y")}}</time>                              */
/*     </div> #}*/
/*     </header>*/
/* */
/*         {% if big_header %}*/
/*             {{ page.media.images|first.cropResize(1038,437).html(page.title, page.title, 'image featured') }}*/
/*         {% else %}*/
/*             {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'image featured') }}*/
/*         {% endif %}*/
/*    {{ page.content}}*/
/* </article>*/
/* {% endblock %}*/
/* */
