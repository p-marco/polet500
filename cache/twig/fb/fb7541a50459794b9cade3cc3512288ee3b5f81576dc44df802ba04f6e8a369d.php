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
        // line 65
        echo "</head>
<body id=\"top\" class=\"";
        // line 66
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array())) ? ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array())) : ("modular header-image fullwidth"));
        echo "\">


";
        // line 69
        $this->loadTemplate("partials/navigation_menu.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "<div style=\"background:#eee; position:relative; z-index:10\">
";
        // line 71
        $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 71)->display($context);
        // line 72
        echo "</div>    
        ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "       
        ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 145
        echo "    </div>

    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 149
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 149)->display($context);
        // line 150
        echo "        </div>
    </div>
    ";
        // line 152
        $this->displayBlock('bottom', $context, $blocks);
        // line 165
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
 <link href=\"https://fonts.googleapis.com/css?family=Quattrocento\" rel=\"stylesheet\"> 

<!--Open Graph-->
<meta property=\"og:site_name\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "\">
<meta name=\"og:title\" property=\"og:title\" content=\"";
        // line 16
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "title", array()), "html");
        }
        echo "\" />
<meta name=\"og:description\" property=\"og:description\" content=\"";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "metadata", array()), "description", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "metadata", array()), "description", array()), "html");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array()), "html");
        }
        echo "\" />
<meta property=\"og:type\" content=\"article\" />
<meta property=\"og:url\" content=\"";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\" />

";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "date", array())) {
            // line 22
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
        // line 24
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
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 52
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
<!--JS-->
<!--
    ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
<script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js\"></script>
-->
";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 35
        echo "       ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/polet500.css"), "method");
        // line 37
        echo "
        ";
        // line 38
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 39
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 40
            echo "        ";
        }
        // line 41
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 42
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 43
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 44
            echo "        ";
        }
        // line 45
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 8))) {
            // line 46
            echo "            <style>
                    .navigation-bar {position:relative !important;}

            </style>
        ";
        }
        // line 51
        echo "    ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.min.js", 1 => 100), "method");
        // line 57
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 58
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 59
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 60
        echo "    ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "        </section>
        ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "        <footer id=\"footer\">
      
        <div class=\"table-container\">
                <div class=\"table-col\">
                <h5>Navigazione</h5>
               ";
        // line 85
        $context["label"] = "true";
        // line 86
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 86)->display($context);
        // line 87
        echo "            </div>
            <div class=\"table-col\">
                <h5>Indici</h5>
                <ul class=\"archives\">
                    <li><span class=\"label\"><i class=\"fa fa-file-text-o\"></i></span><a href=\"";
        // line 91
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede/\">Indice delle schede</a></li>
                    <li><span class=\"label\"></span><a href=\"";
        // line 92
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede/indice_degli_argomenti\">Indice degli argomenti</a></li>
                    <li><span class=\"label\"></span><a href=\"";
        // line 93
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede/indice_dei_personaggi\">Indice dei personaggi</a></li>
                    <!--<li>Indice degli argomenti</li>-->
                    <!--<li>Indice delle persone</li>-->
                </ul> 
               
            </div>
            <div class=\"table-col\">
                <h5>Social</h5>
                    <div>
                            <ul class=\"archives\">
                                <li>
                                    <span class=\"label\"><i class=\"fa fa-facebook\"></i></span>
                                    <a href=\"https://facebook.com/polet500\" target=\"_blank\">Facebook</a>
                                </li>
                                <li>
                                    <span class=\"label\"><i class=\"fa fa-twitter\"></i></span>
                                    <a href=\"https://twitter.com/polet500/PoLet500\" target=\"_blank\">Twitter</a>
                                </li>
                                <li>
                                    <span class=\"label\"><i class=\"fa fa-google\"></i></span>
                                    <a href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\">Google+</a>
                                    </li>
                                <li>
                                    <span class=\"label\"><i class=\"fa fa-github\"></i></span>
                                    <a href=\"https://github.com/p-marco/polet500\" target=\"_blank\">Github</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class=\"table-col\">
                    <h5>Links</h5>
                    <div>
                            <ul class=\"archives\">
                                <li><span class=\"label\"><i class=\"fa fa-android\"></i></span><a href=\"https://play.google.com/store/apps/details?id=appinventor.ai_antonello_f_caterino.PoLet500&hl=en\" target=\"_blank\">App per Android</a></li>
                                <li><span class=\"label\"><i class=\"fa fa-feed\"></i></span>Feeds: <a class=\"\" href=\"";
        // line 128
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
        echo "/schede/.rss\"> RSS</a> | <a class=\"\" href=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
        echo "/schede/.atom\"> ATOM</a></li>
                                <li><span class=\"label\"><i class=\"fa fa-sitemap\"></i></span><a href=\"";
        // line 129
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/sitemap/\">Mappa del sito</a></li>
                            </ul>
                        </div>
                </div>
            </div>

        <HR>

          <p class=\"text-xs-left\">2016 - 2017 | ";
        // line 137
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "title", array());
        echo " <span class=\"tags\"><a href=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/il-progetto\"> Scopri di più</a></span>
          </p>
        <!--Messy code to fix: separate data and presentation-->
        
    

        </footer>
        ";
    }

    // line 152
    public function block_bottom($context, array $blocks = array())
    {
        // line 153
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
        return array (  398 => 153,  395 => 152,  381 => 137,  370 => 129,  362 => 128,  324 => 93,  320 => 92,  316 => 91,  310 => 87,  307 => 86,  305 => 85,  298 => 80,  295 => 79,  290 => 75,  285 => 76,  283 => 75,  278 => 74,  275 => 73,  271 => 60,  268 => 59,  265 => 58,  262 => 57,  259 => 56,  256 => 55,  252 => 51,  245 => 46,  242 => 45,  239 => 44,  236 => 43,  233 => 42,  230 => 41,  227 => 40,  224 => 39,  222 => 38,  219 => 37,  216 => 36,  213 => 35,  210 => 34,  207 => 33,  204 => 32,  201 => 31,  198 => 30,  195 => 29,  186 => 61,  184 => 55,  177 => 52,  175 => 29,  155 => 24,  142 => 22,  140 => 21,  135 => 19,  126 => 17,  118 => 16,  114 => 15,  107 => 11,  103 => 10,  100 => 9,  98 => 8,  90 => 7,  87 => 6,  84 => 5,  78 => 165,  76 => 152,  72 => 150,  70 => 149,  64 => 145,  62 => 79,  59 => 78,  57 => 73,  54 => 72,  52 => 71,  49 => 70,  47 => 69,  41 => 66,  38 => 65,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
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
 <link href=\"https://fonts.googleapis.com/css?family=Quattrocento\" rel=\"stylesheet\"> 

<!--Open Graph-->
<meta property=\"og:site_name\" content=\"{{ site.title|e('html') }}\">
<meta name=\"og:title\" property=\"og:title\" content=\"{% if header.title %}{{ header.title|e('html') }}{% else %}{{ site.metadata.title|e('html') }}{% endif %}\" />
<meta name=\"og:description\" property=\"og:description\" content=\"{% if header.metadata.description %}{{ header.metadata.description|e('html') }}{% else %}{{ site.metadata.description|e('html') }}{% endif %}\" />
<meta property=\"og:type\" content=\"article\" />
<meta property=\"og:url\" content=\"{{ page.url }}\" />

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
        {% if browser.getBrowser == 'msie' and browser.getVersion <= 8  %}
            <style>
                    .navigation-bar {position:relative !important;}

            </style>
        {% endif %}
    {% endblock %}
    {{ assets.css() }}
<!--JS-->
<!--
    {% block javascripts %}
        {% do assets.addJs('theme://js/jquery.min.js', 100) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/antimatter.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
    {% endblock %}
    {{ assets.js() }}
<script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js\"></script>
-->
{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes ?: 'modular header-image fullwidth' }}\">


{% include \"partials/navigation_menu.html.twig\" %}
<div style=\"background:#eee; position:relative; z-index:10\">
{% include \"partials/breadcrumbs.html.twig\" %}
</div>    
        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}
       
        {% block footer %}
        <footer id=\"footer\">
      
        <div class=\"table-container\">
                <div class=\"table-col\">
                <h5>Navigazione</h5>
               {% set label = 'true' %}
                {% include 'partials/navigation.html.twig' %}
            </div>
            <div class=\"table-col\">
                <h5>Indici</h5>
                <ul class=\"archives\">
                    <li><span class=\"label\"><i class=\"fa fa-file-text-o\"></i></span><a href=\"{{ base_url }}/schede/\">Indice delle schede</a></li>
                    <li><span class=\"label\"></span><a href=\"{{ base_url }}/schede/indice_degli_argomenti\">Indice degli argomenti</a></li>
                    <li><span class=\"label\"></span><a href=\"{{ base_url }}/schede/indice_dei_personaggi\">Indice dei personaggi</a></li>
                    <!--<li>Indice degli argomenti</li>-->
                    <!--<li>Indice delle persone</li>-->
                </ul> 
               
            </div>
            <div class=\"table-col\">
                <h5>Social</h5>
                    <div>
                            <ul class=\"archives\">
                                <li>
                                    <span class=\"label\"><i class=\"fa fa-facebook\"></i></span>
                                    <a href=\"https://facebook.com/polet500\" target=\"_blank\">Facebook</a>
                                </li>
                                <li>
                                    <span class=\"label\"><i class=\"fa fa-twitter\"></i></span>
                                    <a href=\"https://twitter.com/polet500/PoLet500\" target=\"_blank\">Twitter</a>
                                </li>
                                <li>
                                    <span class=\"label\"><i class=\"fa fa-google\"></i></span>
                                    <a href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\">Google+</a>
                                    </li>
                                <li>
                                    <span class=\"label\"><i class=\"fa fa-github\"></i></span>
                                    <a href=\"https://github.com/p-marco/polet500\" target=\"_blank\">Github</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class=\"table-col\">
                    <h5>Links</h5>
                    <div>
                            <ul class=\"archives\">
                                <li><span class=\"label\"><i class=\"fa fa-android\"></i></span><a href=\"https://play.google.com/store/apps/details?id=appinventor.ai_antonello_f_caterino.PoLet500&hl=en\" target=\"_blank\">App per Android</a></li>
                                <li><span class=\"label\"><i class=\"fa fa-feed\"></i></span>Feeds: <a class=\"\" href=\"{{ base_url }}{{ feed_url }}/schede/.rss\"> RSS</a> | <a class=\"\" href=\"{{ base_url }}{{ feed_url }}/schede/.atom\"> ATOM</a></li>
                                <li><span class=\"label\"><i class=\"fa fa-sitemap\"></i></span><a href=\"{{ base_url }}/sitemap/\">Mappa del sito</a></li>
                            </ul>
                        </div>
                </div>
            </div>

        <HR>

          <p class=\"text-xs-left\">2016 - 2017 | {{ site.metadata.title }} <span class=\"tags\"><a href=\"{{ base_url }}/il-progetto\"> Scopri di più</a></span>
          </p>
        <!--Messy code to fix: separate data and presentation-->
        
    

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
