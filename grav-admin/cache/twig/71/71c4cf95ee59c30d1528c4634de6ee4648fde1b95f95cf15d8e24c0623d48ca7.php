<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_bb22e55bf31e406c36f91011a567a6d53f204a1e494cd81083aa649697a9bc00 extends Twig_Template
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
        echo "<article class=\"box post post-excerpt\"  itemprop=\"liveBlogUpdate\" itemscope itemtype=\"http://schema.org/BlogPosting\">
         ";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
            // line 3
            echo "         ";
            $context["author"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
            // line 4
            echo "         ";
        } else {
            // line 5
            echo "         ";
            $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array()), 0, array(), "array");
            // line 6
            echo "         ";
        }
        // line 7
        echo "         ";
        if ((isset($context["author"]) ? $context["author"] : null)) {
            // line 8
            echo "         ";
            $context["avatar"] = twig_lower_filter($this->env, twig_replace_filter((isset($context["author"]) ? $context["author"] : null), " ", "-"));
            // line 9
            echo "         ";
        }
        // line 10
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "share", array()), "facebook", array()) || $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "share", array()), "twitter", array()))) {
            // line 11
            echo "    <script type=\"text/javascript\">
    ";
            // line 12
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "share", array()), "twitter", array())) {
                // line 13
                echo "    jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url=";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
                echo "/&callback=?', function (data) {
        jQuery('#so-url-shares";
                // line 14
                echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
                echo "').text(data.count);
    });
    ";
            }
            // line 17
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "share", array()), "facebook", array())) {
                // line 18
                echo "    jQuery.getJSON('http://graph.facebook.com/?id=";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
                echo "', function (data) {
        jQuery('#so-fburl-shares";
                // line 19
                echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
                echo "').text(data.shares);
    });
    ";
            }
            // line 22
            echo "    </script>
    ";
        }
        // line 24
        echo "    <header>
    <div class=\"title\">
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 27
            echo "            <h2 itemprop=\"headline\">
                ";
            // line 28
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 29
                echo "                    <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"></a>
                ";
            }
            // line 31
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h2>
            ";
        } else {
            // line 34
            echo "            <h2 itemprop=\"headline\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 36
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array())) {
            // line 37
            echo "        <p itemprop=\"alternativeHeadline\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
            echo "</p>
        ";
        }
        // line 39
        echo "    </div>
             <div class=\"meta\">
                                        <time class=\"published\" itemprop=\"datePublished\" datetime=\"";
        // line 41
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y-m-d");
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M j, Y");
        echo "</time>
                                        ";
        // line 42
        if ((isset($context["author"]) ? $context["author"] : null)) {
            // line 43
            echo "                                        <a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"author\"><span class=\"name\" rel=\"author\">";
            echo (isset($context["author"]) ? $context["author"] : null);
            echo "</span><img src=\"";
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/";
            echo (isset($context["avatar"]) ? $context["avatar"] : null);
            echo ".jpg\" alt=\"";
            echo (isset($context["author"]) ? $context["author"] : null);
            echo "\" /></a>
                                        ";
        }
        // line 45
        echo "            </div>
    </header>

        ";
        // line 48
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 49
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        } else {
            // line 51
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        }
        // line 53
        echo "
         
    <div itemprop=\"articleBody\">
 
    ";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 58
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 59
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 60
                echo "        ";
                $context["show_prev_next"] = true;
                // line 61
                echo "        ";
            }
            // line 62
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 63
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
    ";
        } elseif (        // line 64
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 65
            echo "        ";
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
            echo "
    ";
        } else {
            // line 67
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 68
            $context["show_prev_next"] = true;
            // line 69
            echo "    ";
        }
        // line 70
        echo "
   </div>

    <footer>
    <ul class=\"actions\">
    ";
        // line 75
        if (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 76
            echo "        <li><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"button\">Continue Reading</a></li>
    ";
        } elseif (        // line 77
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 78
            echo "        <li><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"button\">Continue Reading</a></li>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 82
            echo "           ";
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 83
                echo "                <li><a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a></li>         
            ";
            }
            // line 85
            echo "            ";
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 86
                echo "                <li><a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a></li> 
            ";
            }
            // line 88
            echo "    ";
        }
        // line 89
        echo "
                                    </ul>
                                    <ul class=\"stats\">
                                            ";
        // line 92
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 93
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 94
                echo "                                        <li><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" itemprop=\"keywords\">";
                echo $context["tag"];
                echo "</a></li>
                                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                                            ";
        }
        // line 97
        echo "                                        <li><a href=\"https://twitter.com/share\" data-url=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\" data-text=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "\" class=\"icon fa-heart\">
                                            <span id=\"so-url-shares";
        // line 98
        echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
        echo "\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                                        <li><a href=\"http://www.facebook.com/sharer.php?u=";
        // line 99
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\" class=\"icon fa-comment\"><span id=\"so-fburl-shares";
        echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
        echo "\">0</span></a></li>
                                    </ul>
                                </footer>


</article>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 99,  301 => 98,  294 => 97,  291 => 96,  277 => 94,  272 => 93,  270 => 92,  265 => 89,  262 => 88,  256 => 86,  253 => 85,  247 => 83,  244 => 82,  242 => 81,  239 => 80,  233 => 78,  231 => 77,  226 => 76,  224 => 75,  217 => 70,  214 => 69,  212 => 68,  207 => 67,  201 => 65,  199 => 64,  194 => 63,  191 => 62,  188 => 61,  185 => 60,  183 => 59,  178 => 58,  176 => 57,  170 => 53,  164 => 51,  158 => 49,  156 => 48,  151 => 45,  137 => 43,  135 => 42,  129 => 41,  125 => 39,  119 => 37,  116 => 36,  108 => 34,  99 => 31,  93 => 29,  91 => 28,  88 => 27,  86 => 26,  82 => 24,  78 => 22,  72 => 19,  67 => 18,  64 => 17,  58 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <article class="box post post-excerpt"  itemprop="liveBlogUpdate" itemscope itemtype="http://schema.org/BlogPosting">*/
/*          {% if page.header.author %}*/
/*          {% set author =  page.header.author %}*/
/*          {% else %}*/
/*          {% set author =  page.header.taxonomy.author[0] %}*/
/*          {% endif %}*/
/*          {% if author %}*/
/*          {% set avatar = author|replace(' ', '-')|lower %}*/
/*          {% endif %}*/
/*     {% if site.share.facebook or site.share.twitter %}*/
/*     <script type="text/javascript">*/
/*     {% if site.share.twitter %}*/
/*     jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url={{ page.url(true) }}/&callback=?', function (data) {*/
/*         jQuery('#so-url-shares{{ loop.index }}').text(data.count);*/
/*     });*/
/*     {% endif %}*/
/*     {% if site.share.facebook %}*/
/*     jQuery.getJSON('http://graph.facebook.com/?id={{ page.url(true) }}', function (data) {*/
/*         jQuery('#so-fburl-shares{{ loop.index }}').text(data.shares);*/
/*     });*/
/*     {% endif %}*/
/*     </script>*/
/*     {% endif %}*/
/*     <header>*/
/*     <div class="title">*/
/*         {% if page.header.link %}*/
/*             <h2 itemprop="headline">*/
/*                 {% if page.header.continue_link is not sameas(false) %}*/
/*                     <a href="{{ page.url }}"></a>*/
/*                 {% endif %}*/
/*                 <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*             </h2>*/
/*             {% else %}*/
/*             <h2 itemprop="headline"><a href="{{ page.url }}">{{ page.title }}</a></h2>*/
/*         {% endif %}*/
/*         {% if page.header.description %}*/
/*         <p itemprop="alternativeHeadline">{{ page.header.description }}</p>*/
/*         {% endif %}*/
/*     </div>*/
/*              <div class="meta">*/
/*                                         <time class="published" itemprop="datePublished" datetime="{{page.date|date("Y-m-d")}}">{{ page.date|date("M j, Y")}}</time>*/
/*                                         {% if author %}*/
/*                                         <a href="{{ page.url }}" class="author"><span class="name" rel="author">{{ author }}</span><img src="{{ theme_url }}/images/{{avatar}}.jpg" alt="{{ author }}" /></a>*/
/*                                         {% endif %}*/
/*             </div>*/
/*     </header>*/
/* */
/*         {% if big_header %}*/
/*             {{ page.media.images|first.cropResize(1038,437).html(page.title, page.title, 'image featured') }}*/
/*         {% else %}*/
/*             {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'image featured') }}*/
/*         {% endif %}*/
/* */
/*          */
/*     <div itemprop="articleBody">*/
/*  */
/*     {% if page.header.continue_link is sameas(false) %}*/
/*         {{ page.content }}*/
/*         {% if not truncate %}*/
/*         {% set show_prev_next = true %}*/
/*         {% endif %}*/
/*     {% elseif truncate and page.summary != page.content %}*/
/*         {{ page.summary }}*/
/*     {% elseif truncate %}*/
/*         {{ page.content|truncate(550) }}*/
/*     {% else %}*/
/*         {{ page.content }}*/
/*         {% set show_prev_next = true %}*/
/*     {% endif %}*/
/* */
/*    </div>*/
/* */
/*     <footer>*/
/*     <ul class="actions">*/
/*     {% if truncate and page.summary != page.content %}*/
/*         <li><a href="{{ page.url }}" class="button">Continue Reading</a></li>*/
/*     {% elseif truncate %}*/
/*         <li><a href="{{ page.url }}" class="button">Continue Reading</a></li>*/
/*     {% endif %}*/
/* */
/*     {% if show_prev_next %}*/
/*            {% if not page.isFirst %}*/
/*                 <li><a class="button" href="{{ page.nextSibling.url }}"><i class="fa fa-chevron-left"></i> Next Post</a></li>         */
/*             {% endif %}*/
/*             {% if not page.isLast %}*/
/*                 <li><a class="button" href="{{ page.prevSibling.url }}">Previous Post <i class="fa fa-chevron-right"></i></a></li> */
/*             {% endif %}*/
/*     {% endif %}*/
/* */
/*                                     </ul>*/
/*                                     <ul class="stats">*/
/*                                             {% if page.taxonomy.tag %}*/
/*                                                 {% for tag in page.taxonomy.tag %}*/
/*                                         <li><a href="{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}" itemprop="keywords">{{ tag }}</a></li>*/
/*                                                  {% endfor %}*/
/*                                             {% endif %}*/
/*                                         <li><a href="https://twitter.com/share" data-url="{{ page.url(true) }}" data-text="{{ page.title }}" class="icon fa-heart">*/
/*                                             <span id="so-url-shares{{ loop.index }}"><i class="fa fa-circle-o-notch fa-spin"></i></span></a></li>*/
/*                                         <li><a href="http://www.facebook.com/sharer.php?u={{ page.url(true) }}" class="icon fa-comment"><span id="so-fburl-shares{{ loop.index }}">0</span></a></li>*/
/*                                     </ul>*/
/*                                 </footer>*/
/* */
/* */
/* </article>*/
/* */
