<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_f75818a760e0e43c5112455335cf93c69fb7016526d387ceca1f9e8e622266dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"sidebar\">

                        <!-- Intro -->
                            <section id=\"intro\" role=\"banner\">
                                <a href=\"";
        // line 5
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\" class=\"logo\"><img src=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo.jpg\" alt=\"";
        echo twig_upper_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()));
        echo "\" /></a>
                                <header>
                                    <h2>";
        // line 7
        echo twig_upper_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()));
        echo "</h2>
                                    <p>Server admin by day, Server admin by night.</p>
                                </header>
                            </section>

                            <section role=\"complementary\">
                                <div class=\"mini-posts\">

                                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "hits", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 2), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "                                ";
            $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
            // line 17
            echo "                                    ";
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "author", array())) {
                // line 18
                echo "                                    ";
                $context["pauthor"] = $this->getAttribute($this->getAttribute($context["p"], "header", array()), "author", array());
                // line 19
                echo "                                    ";
            } else {
                // line 20
                echo "                                    ";
                $context["pauthor"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "taxonomy", array()), "author", array()), 0, array(), "array");
                // line 21
                echo "                                    ";
            }
            // line 22
            echo "                                    ";
            if ((isset($context["pauthor"]) ? $context["pauthor"] : null)) {
                // line 23
                echo "                                    ";
                $context["pavatar"] = twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["p"], "author", array()), " ", "-"));
                // line 24
                echo "                                    ";
            }
            // line 25
            echo "
                                    <!-- Mini Post -->
                                        <article class=\"mini-post\">
                                            <header>
                                                <h3><a href=\"";
            // line 29
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></h3>
                                                <time class=\"published\" datetime=\"";
            // line 30
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d");
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "</time>
                                                ";
            // line 31
            if ((isset($context["pauthor"]) ? $context["pauthor"] : null)) {
                // line 32
                echo "                                                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\" class=\"author\"><img src=\"";
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/";
                echo (isset($context["pavatar"]) ? $context["pavatar"] : null);
                echo ".jpg\" alt=\"";
                echo (isset($context["pauthor"]) ? $context["pauthor"] : null);
                echo "\" /></a>
                                                ";
            }
            // line 34
            echo "                                            </header>
                                            <a href=\"";
            // line 35
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"image\">";
            echo $this->getAttribute($this->getAttribute((isset($context["bannerimage"]) ? $context["bannerimage"] : null), "cropZoom", array(0 => 350, 1 => 175), "method"), "quality", array(0 => 60), "method");
            echo "</a>                                       
                                    </article>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
</div>
</section>
";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 43
            echo "        ";
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 43)->display($context);
        }
        // line 45
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
            // line 46
            echo "    ";
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 46)->display($context);
        }
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 49
            echo "<section role=\"complementary\">
    <ul class=\"posts\">
    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "random"), "method"), "slice", array(0 => 0, 1 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 52
                echo "    ";
                $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
                // line 53
                echo "    <li>
        <article>
           <header>
         <h3><a href=\"";
                // line 56
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a></h3>
        <time class=\"published\" datetime=\"";
                // line 57
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d");
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
                echo "</time>
        </header>
        <a href=\"";
                // line 59
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" class=\"image\">";
                echo $this->getAttribute($this->getAttribute((isset($context["bannerimage"]) ? $context["bannerimage"] : null), "cropZoom", array(0 => 64, 1 => 64), "method"), "quality", array(0 => 60), "method");
                echo "</a>
       </article>
    </li>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "   </ul>
</section>
";
        }
        // line 66
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "                            <section class=\"blurb\" role=\"complementary\">
                                <h2>About</h2>
                                <p>Systems administrator, novice programmer, and philosophy enthusiast.</p>
\t\t\t\t<p>I specialize in Linux systems, but I'm procient in Windows 2003-2012 as well as a little bit of OSX. My day to day is baby sitting servers, making sure websites serve correctly, and emails are sending/receiving. At night you'll find me working on my homelab, various technology that I find interesting, or riding my bicycle around downtown Phoenix.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">Contact</a></li>
                                </ul>
                            </section>

                        <!-- Footer -->
                            <section id=\"footer\" role=\"contentinfo\">
                                <ul class=\"icons\">
                                    <!--<li><a href=\"#\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>-->
                                    ";
        // line 80
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 81
            echo "                                    <li><a href=\"";
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".rss\" class=\"fa-rss\"><span class=\"label\">RSS</span></a></li>
                                    ";
        }
        // line 83
        echo "                                </ul>
                                <p class=\"copyright\">&copy; ";
        // line 84
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo ". Design: <a href=\"http://html5up.net\">HTML5 UP</a>. Images: <a href=\"http://unsplash.com\">Unsplash</a>.</p>
                            </section>

                    </section>
\t\t";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 84,  219 => 83,  213 => 81,  211 => 80,  196 => 67,  189 => 66,  184 => 63,  172 => 59,  165 => 57,  159 => 56,  154 => 53,  151 => 52,  147 => 51,  143 => 49,  141 => 48,  137 => 46,  135 => 45,  131 => 43,  129 => 42,  124 => 39,  112 => 35,  109 => 34,  97 => 32,  95 => 31,  89 => 30,  83 => 29,  77 => 25,  74 => 24,  71 => 23,  68 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  50 => 16,  46 => 15,  35 => 7,  26 => 5,  20 => 1,);
    }
}
/* <section id="sidebar">*/
/* */
/*                         <!-- Intro -->*/
/*                             <section id="intro" role="banner">*/
/*                                 <a href="{{ base_url_absolute }}" class="logo"><img src="{{ theme_url }}/images/logo.jpg" alt="{{ site.title|upper }}" /></a>*/
/*                                 <header>*/
/*                                     <h2>{{ site.title|upper }}</h2>*/
/*                                     <p>Server admin by day, Server admin by night.</p>*/
/*                                 </header>*/
/*                             </section>*/
/* */
/*                             <section role="complementary">*/
/*                                 <div class="mini-posts">*/
/* */
/*                                 {% for p in page.find('/blog').children.order('hits', 'desc').slice(0, 2) %}*/
/*                                 {% set bannerimage = p.media.images|first %}*/
/*                                     {% if p.header.author %}*/
/*                                     {% set pauthor =  p.header.author %}*/
/*                                     {% else %}*/
/*                                     {% set pauthor =  p.header.taxonomy.author[0] %}*/
/*                                     {% endif %}*/
/*                                     {% if pauthor %}*/
/*                                     {% set pavatar = p.author|replace(' ', '-')|lower %}*/
/*                                     {% endif %}*/
/* */
/*                                     <!-- Mini Post -->*/
/*                                         <article class="mini-post">*/
/*                                             <header>*/
/*                                                 <h3><a href="{{p.url}}">{{ p.title }}</a></h3>*/
/*                                                 <time class="published" datetime="{{p.date|date("Y-m-d")}}">{{ p.date|date("M j, Y")}}</time>*/
/*                                                 {% if pauthor %}*/
/*                                                 <a href="{{ page.url }}" class="author"><img src="{{ theme_url }}/images/{{pavatar}}.jpg" alt="{{ pauthor }}" /></a>*/
/*                                                 {% endif %}*/
/*                                             </header>*/
/*                                             <a href="{{p.url}}" class="image">{{ bannerimage.cropZoom(350,175).quality(60) }}</a>                                       */
/*                                     </article>*/
/* */
/*    {% endfor %}*/
/* */
/* </div>*/
/* </section>*/
/* {% if config.plugins.archives.enabled %}*/
/*         {% include 'partials/archives.html.twig' %}*/
/* {% endif %}*/
/* {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}*/
/*     {% include 'partials/relatedpages.html.twig' %}*/
/* {% endif %}*/
/* {% if config.plugins.random.enabled %}*/
/* <section role="complementary">*/
/*     <ul class="posts">*/
/*     {% for p in page.find('/blog').children.order('random').slice(0, 1) %}*/
/*     {% set bannerimage = p.media.images|first %}*/
/*     <li>*/
/*         <article>*/
/*            <header>*/
/*          <h3><a href="{{p.url}}">{{ p.title }}</a></h3>*/
/*         <time class="published" datetime="{{p.date|date("Y-m-d")}}">{{ p.date|date("M j, Y")}}</time>*/
/*         </header>*/
/*         <a href="{{p.url}}" class="image">{{ bannerimage.cropZoom(64,64).quality(60) }}</a>*/
/*        </article>*/
/*     </li>*/
/*    {% endfor %}*/
/*    </ul>*/
/* </section>*/
/* {% endif %}*/
/*         {% block footer %}*/
/*                             <section class="blurb" role="complementary">*/
/*                                 <h2>About</h2>*/
/*                                 <p>Systems administrator, novice programmer, and philosophy enthusiast.</p>*/
/* 				<p>I specialize in Linux systems, but I'm procient in Windows 2003-2012 as well as a little bit of OSX. My day to day is baby sitting servers, making sure websites serve correctly, and emails are sending/receiving. At night you'll find me working on my homelab, various technology that I find interesting, or riding my bicycle around downtown Phoenix.</p>*/
/*                                 <ul class="actions">*/
/*                                     <li><a href="#" class="button">Contact</a></li>*/
/*                                 </ul>*/
/*                             </section>*/
/* */
/*                         <!-- Footer -->*/
/*                             <section id="footer" role="contentinfo">*/
/*                                 <ul class="icons">*/
/*                                     <!--<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>-->*/
/*                                     {% if config.plugins.feed.enabled %}*/
/*                                     <li><a href="{{ feed_url }}.rss" class="fa-rss"><span class="label">RSS</span></a></li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                                 <p class="copyright">&copy; {{ "now"|date("Y") }} {{ site.author.name }}. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>*/
/*                             </section>*/
/* */
/*                     </section>*/
/* 		{% endblock %}*/
/* */
