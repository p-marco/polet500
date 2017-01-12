<?php

/* partials/base.html.twig */
class __TwigTemplate_d9aff3d462000048b66cd6abd39f4051b02d6c5f48675b90524b1cafedd3aa1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("it-IT"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 55
        echo "</head>
<body id=\"top\" class=\"";
        // line 56
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array())) ? ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array())) : ("modular header-image fullwidth"));
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('showcase', $context, $blocks);
        // line 77
        echo "
        ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "<div class=\"totop label--round btn-sm\" style=\"text-align:center; margin-bottom:1em\">
              <span class=\"\">  <a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
        ";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 133
        echo "    </div>

    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 137
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 137)->display($context);
        // line 138
        echo "        </div>
    </div>
    ";
        // line 140
        $this->displayBlock('bottom', $context, $blocks);
        // line 153
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

<!--Open Graph-->
<meta property=\"og:site_name\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "\">
<meta name=\"og:title\" property=\"og:title\" content=\"";
        // line 15
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "title", array()), "html");
        }
        echo "\" />
<meta property=\"og:type\" content=\"article\" />
<meta property=\"og:url\" content=\"";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\" />
<meta property=\"og:image\" content=\"";
        // line 18
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/banner.jpg\" />
";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "date", array())) {
            // line 20
            echo "<meta property=\"article:published_time\" content=\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "date", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                echo $context["date"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
";
        }
        // line 22
        echo "<meta name=\"author\" content=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "author", array())) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "author", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                echo $context["author"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "title", array()), "html");
        }
        echo "\">
<!--Twitter-->
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:image:alt\" content=\"Alt text for image\">    
<!--STYLES-->
";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
<!--JS-->
    ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
<script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js\"></script>
";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/polet500.css"), "method");
        // line 35
        echo "
        ";
        // line 36
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 37
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 38
            echo "        ";
        }
        // line 39
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 40
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 41
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 42
            echo "        ";
        }
        // line 43
        echo "    ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.min.js", 1 => 100), "method");
        // line 48
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 49
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 50
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 51
        echo "    ";
    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"";
        // line 61
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\"> ";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
            </div>
            <div id=\"navbar\">
                ";
        // line 64
        $this->displayBlock('header_extra', $context, $blocks);
        // line 65
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 66
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 66)->display($context);
            // line 67
            echo "                ";
        }
        // line 68
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 71
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 64
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 68
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 69
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "                ";
    }

    // line 76
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        // line 79
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "        </section>
        ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
        echo "        <footer id=\"footer\">
      
        <div class=\"table-container\">
                <div class=\"table-col\">
                <h6>Navigazione</h6>
               
                ";
        // line 93
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 93)->display($context);
        // line 94
        echo "            </div>
            <div class=\"table-col\">
                <h6>Indici</h6>
                <ul>
                    <li><a href=\"";
        // line 98
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/testi/\">Indice delle schede</a></li>
                    <!--<li>Indice degli argomenti</li>-->
                    <!--<li>Indice delle persone</li>-->
                </ul> 
               
            </div>
            <div class=\"table-col\">
                <h6>Social</h6>
                    <div>
                            <ul>
                                <li><a href=\"https://facebook.com/polet500\" target=\"_blank\">Facebook</a></li>
                                <li><a href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\">Google+</a></li>
                            </ul>
                        </div>
                    <h6>Links</h6>
                    <div>
                            <ul>
                                <li>Feeds: <a class=\"\" href=\"";
        // line 115
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
        echo "/schede/.rss\"> RSS</a> | <a class=\"\" href=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
        echo "/schede/.atom\"> ATOM</a></li>
                                <li><a href=\"";
        // line 116
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/sitemap/\">Mappa del sito</a></li>
                            </ul>
                        </div>
                </div>
            </div>

        <HR>

          <p style=\" text-align:left; font-weight:bold; color:#666 \">2016 - 2017 | ";
        // line 124
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "title", array());
        echo " <span class=\"tags\"><a href=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/chi-siamo\"> Scopri di più</a></span>
          </p>
        <!--Messy code to fix: separate data and presentation-->
        <small class=\"text-muted\">Installa l'app per Android <a href=\"https://play.google.com/store/apps/details?id=appinventor.ai_antonello_f_caterino.PoLet500&hl=en\"> cliccando qui.</small>
        <br>
    

        </footer>
        ";
    }

    // line 140
    public function block_bottom($context, array $blocks = array())
    {
        // line 141
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 141,  411 => 140,  396 => 124,  385 => 116,  377 => 115,  357 => 98,  351 => 94,  349 => 93,  341 => 87,  338 => 86,  333 => 80,  328 => 81,  326 => 80,  321 => 79,  318 => 78,  313 => 76,  309 => 70,  306 => 69,  303 => 68,  298 => 64,  291 => 71,  288 => 68,  285 => 67,  282 => 66,  279 => 65,  277 => 64,  269 => 61,  265 => 59,  262 => 58,  258 => 51,  255 => 50,  252 => 49,  249 => 48,  246 => 47,  243 => 46,  239 => 43,  236 => 42,  233 => 41,  230 => 40,  227 => 39,  224 => 38,  221 => 37,  219 => 36,  216 => 35,  213 => 34,  210 => 33,  207 => 32,  204 => 31,  201 => 30,  198 => 29,  195 => 28,  192 => 27,  184 => 52,  182 => 46,  176 => 44,  174 => 27,  154 => 22,  141 => 20,  139 => 19,  135 => 18,  131 => 17,  122 => 15,  118 => 14,  112 => 11,  108 => 10,  105 => 9,  103 => 8,  95 => 7,  92 => 6,  89 => 5,  83 => 153,  81 => 140,  77 => 138,  75 => 137,  69 => 133,  67 => 86,  62 => 83,  60 => 78,  57 => 77,  55 => 76,  52 => 75,  50 => 58,  45 => 56,  42 => 55,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSource()
    {
        return "{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'it-IT' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.metadata.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

<!--Open Graph-->
<meta property=\"og:site_name\" content=\"{{ site.title|e('html') }}\">
<meta name=\"og:title\" property=\"og:title\" content=\"{% if header.title %}{{ header.title|e('html') }}{% else %}{{ site.metadata.title|e('html') }}{% endif %}\" />
<meta property=\"og:type\" content=\"article\" />
<meta property=\"og:url\" content=\"{{ page.url }}\" />
<meta property=\"og:image\" content=\"{{ theme_url }}/images/banner.jpg\" />
{% if page.taxonomy.date %}
<meta property=\"article:published_time\" content=\"{% for date in page.taxonomy.date %}{{ date }}{% endfor %}\">
{% endif %}
<meta name=\"author\" content=\"{% if page.taxonomy.author %}{% for author in page.taxonomy.author %}{{ author }}{% endfor %}{% else %}{{ site.metadata.title|e('html') }}{% endif %}\">
<!--Twitter-->
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:image:alt\" content=\"Alt text for image\">    
<!--STYLES-->
{% block stylesheets %}
        {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}
        {% do assets.addCss('theme://css-compiled/nucleus.css', 102) %}
        {% do assets.addCss('theme://css-compiled/template.css', 101) %}
        {% do assets.addCss('theme://css/custom.css', 100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}
        {% do assets.addCss('theme://css/polet500.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}
<!--JS-->
    {% block javascripts %}
        {% do assets.addJs('theme://js/jquery.min.js', 100) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/antimatter.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
    {% endblock %}
    {{ assets.js() }}
<script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js\"></script>
{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes ?: 'modular header-image fullwidth' }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\"> {{ config.site.title }}</a></h3>
            </div>
            <div id=\"navbar\">
                {% block header_extra %}{% endblock %}
                {% if config.plugins.langswitcher.enabled %}
                {% include 'partials/langswitcher.html.twig' %}
                {% endif %}
                {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
                {% endblock %}
                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}
<div class=\"totop label--round btn-sm\" style=\"text-align:center; margin-bottom:1em\">
              <span class=\"\">  <a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
        {% block footer %}
        <footer id=\"footer\">
      
        <div class=\"table-container\">
                <div class=\"table-col\">
                <h6>Navigazione</h6>
               
                {% include 'partials/navigation.html.twig' %}
            </div>
            <div class=\"table-col\">
                <h6>Indici</h6>
                <ul>
                    <li><a href=\"{{ base_url }}/testi/\">Indice delle schede</a></li>
                    <!--<li>Indice degli argomenti</li>-->
                    <!--<li>Indice delle persone</li>-->
                </ul> 
               
            </div>
            <div class=\"table-col\">
                <h6>Social</h6>
                    <div>
                            <ul>
                                <li><a href=\"https://facebook.com/polet500\" target=\"_blank\">Facebook</a></li>
                                <li><a href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\">Google+</a></li>
                            </ul>
                        </div>
                    <h6>Links</h6>
                    <div>
                            <ul>
                                <li>Feeds: <a class=\"\" href=\"{{ base_url }}{{ feed_url }}/schede/.rss\"> RSS</a> | <a class=\"\" href=\"{{ base_url }}{{ feed_url }}/schede/.atom\"> ATOM</a></li>
                                <li><a href=\"{{ base_url }}/sitemap/\">Mappa del sito</a></li>
                            </ul>
                        </div>
                </div>
            </div>

        <HR>

          <p style=\" text-align:left; font-weight:bold; color:#666 \">2016 - 2017 | {{ site.metadata.title }} <span class=\"tags\"><a href=\"{{ base_url }}/chi-siamo\"> Scopri di più</a></span>
          </p>
        <!--Messy code to fix: separate data and presentation-->
        <small class=\"text-muted\">Installa l'app per Android <a href=\"https://play.google.com/store/apps/details?id=appinventor.ai_antonello_f_caterino.PoLet500&hl=en\"> cliccando qui.</small>
        <br>
    

        </footer>
        {% endblock %}
    </div>

    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    {% endblock %}
</body>
</html>
";
    }
}
