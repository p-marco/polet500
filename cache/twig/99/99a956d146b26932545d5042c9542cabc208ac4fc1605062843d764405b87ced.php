<?php

/* home.html.twig */
class __TwigTemplate_45afd0977abea3bbabb5d0c67b5e890b9705c9233cb39908783fdcdf3b3c427f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

\t";
        // line 6
        $context["home_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 7
        echo "\t\t";
        if ((isset($context["home_image"]) ? $context["home_image"] : null)) {
            // line 8
            echo "\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-color:#227799;\">
\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-color:#227799;\">
\t\t";
        }
        // line 12
        echo "\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>
\t\t";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 15
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "home.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t";
        }
        // line 17
        echo "\t\t
\t<div class=\"content-wrapper \" style=\" font-size:115%;  padding-bottom:2em\">
\t\t<h2>";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Homepage");
        echo "</h2>
\t\t<h5>";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo ".</h5>
 
\t\t<p>
    \t\t<span class=\"tags\">
        \t\t<a href=\"";
        // line 24
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/chi-siamo\"> Scopri di più</a>
        \t</span>
        </p>
\t</div>



<!--Data counters-->
<div class=\"content-wrapper\" style=\"padding-bottom:2em\">
\t<h2 class=\"text-xs-center\">La banca dati</h2>
\t<div class=\"table-container\">
<!--Decomment below to connect the tax counters-->
<!--
";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 38
            echo "\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a  href=\"";
            // line 39
            echo (isset($context["blog_url"]) ? $context["blog_url"] : null);
            echo "\">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t\t";
            // line 41
            echo twig_length_filter($this->env, (isset($context["item"]) ? $context["item"] : null));
            echo "
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<h5>Opere schedate</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"";
            // line 46
            echo (isset($context["blog_url"]) ? $context["blog_url"] : null);
            echo "\">Indice delle schede ></a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a href=\" ";
            // line 49
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/testi \">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t\t";
            // line 51
            echo twig_length_filter($this->env, (isset($context["blog"]) ? $context["blog"] : null));
            echo "
\t\t\t\t\t    ";
            // line 52
            $this->loadTemplate("partials/taxonomycount.html.twig", "home.html.twig", 52)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag")));
            // line 53
            echo "\t\t\t\t\t</h4>
\t\t\t\t\t<h5>Argomenti trattati</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"";
            // line 56
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/testi\">Indice degli argomenti ></a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a href=\" ";
            // line 59
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/testi \">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t    ";
            // line 61
            $this->loadTemplate("partials/taxonomycount.html.twig", "home.html.twig", 61)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "char")));
            // line 62
            echo "\t\t\t\t\t    \t\t\t\t\t\t";
            echo twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null));
            echo "

\t\t\t\t\t</h4>
\t\t\t\t\t<h5>Personaggi coinvolti</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"";
            // line 67
            echo (isset($context["blog_url"]) ? $context["blog_url"] : null);
            echo "\">Indice delle persone ></a></span></p>
\t\t\t</div>
";
        }
        // line 70
        echo "-->
<!--Comment to hide the fallback-->
\t\t<div class=\"text-xs-center table-col\"></div>
\t\t<div class=\"text-xs-center table-col\">
\t\t\t<a href=\"";
        // line 74
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede\">
\t\t\t\t<p class=\"label label--round btn-lg\"><i class=\"fa fa-file-text-o\"></i></p>
\t\t\t\t<h4> Consulta le schede</h4>
\t\t\t</a>
\t\t\t<p><span class=\"tags\">
\t\t\t\t<a href=\"";
        // line 79
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede\">Indice delle schede</a>
\t\t\t</span></p>
\t\t</div>
\t\t<div class=\"text-xs-center table-col\"></div>

<!--Close divs-->
\t</div>
</div>
<!--/End counters-->

\t\t<div class=\"content-wrapper\" style=\" padding-top:3em; padding-bottom:3em; text-align:center; background:#227799; color:#fff\">
\t\t<h2>Partecipa</h2>
\t\t<p>Scrivi a <a href=\"#\">";
        // line 91
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "email", array());
        echo "</a> per partecipare al progetto.</p>
\t</div>

\t
\t<div class=\"content-wrapper\" style=\" padding-top:1em; padding-bottom:2em\">
\t\t<h2>Chi siamo</h2>
\t\t<p><strong>Responsabile scientifico</strong>: Antonello Fabio Caterino</p>
\t\t<p><small><strong>Collaboratori</strong>: Anna Gabriella Chisena; Marcello Bolpagni; Silvia Lai; Federica Congedo</small></p>
\t\t<p><small><strong>Supporto tecnico ed informatico</strong>: Marco Petolicchio</small></p>
\t</div>



<!--
";
        // line 105
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 106
            echo "    <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Argomenti");
            echo "</h4>
    ";
            // line 107
            $this->loadTemplate("partials/taxonomycount.html.twig", "home.html.twig", 107)->display(array_merge($context, array("taxonomy" => "tag")));
            // line 108
            echo "    <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Personaggi");
            echo "</h4>
    ";
            // line 109
            $this->loadTemplate("partials/taxonomycount.html.twig", "home.html.twig", 109)->display(array_merge($context, array("taxonomy" => "char")));
            // line 110
            echo "</div>
";
        }
        // line 112
        echo "-->
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 112,  223 => 110,  221 => 109,  216 => 108,  214 => 107,  209 => 106,  207 => 105,  190 => 91,  175 => 79,  167 => 74,  161 => 70,  155 => 67,  146 => 62,  144 => 61,  139 => 59,  133 => 56,  128 => 53,  126 => 52,  122 => 51,  117 => 49,  111 => 46,  103 => 41,  98 => 39,  95 => 38,  93 => 37,  77 => 24,  70 => 20,  66 => 19,  62 => 17,  59 => 16,  56 => 15,  54 => 14,  48 => 12,  44 => 10,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}

{% block content %}


\t{% set home_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}
\t\t{% if home_image %}
\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-color:#227799;\">
\t\t\t{% else %}
\t\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-color:#227799;\">
\t\t{% endif %}
\t\t{{ page.content }}
\t\t</div>
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t
\t<div class=\"content-wrapper \" style=\" font-size:115%;  padding-bottom:2em\">
\t\t<h2>{{ 'Homepage'|t }}</h2>
\t\t<h5>{{ site.metadata.description }}.</h5>
 
\t\t<p>
    \t\t<span class=\"tags\">
        \t\t<a href=\"{{ base_url }}/chi-siamo\"> Scopri di più</a>
        \t</span>
        </p>
\t</div>



<!--Data counters-->
<div class=\"content-wrapper\" style=\"padding-bottom:2em\">
\t<h2 class=\"text-xs-center\">La banca dati</h2>
\t<div class=\"table-container\">
<!--Decomment below to connect the tax counters-->
<!--
{% if config.plugins.taxonomylist.enabled %}
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a  href=\"{{ blog_url }}\">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t\t{{ item |length }}
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<h5>Opere schedate</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"{{ blog_url }}\">Indice delle schede ></a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a href=\" {{ base_url }}/testi \">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t\t{{ blog |length }}
\t\t\t\t\t    {% include 'partials/taxonomycount.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
\t\t\t\t\t</h4>
\t\t\t\t\t<h5>Argomenti trattati</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"{{ base_url }}/testi\">Indice degli argomenti ></a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a href=\" {{ base_url }}/testi \">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t    {% include 'partials/taxonomycount.html.twig' with {'base_url':new_base_url, 'taxonomy':'char'} %}
\t\t\t\t\t    \t\t\t\t\t\t{{ items |length }}

\t\t\t\t\t</h4>
\t\t\t\t\t<h5>Personaggi coinvolti</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"{{ blog_url }}\">Indice delle persone ></a></span></p>
\t\t\t</div>
{% endif %}
-->
<!--Comment to hide the fallback-->
\t\t<div class=\"text-xs-center table-col\"></div>
\t\t<div class=\"text-xs-center table-col\">
\t\t\t<a href=\"{{ base_url }}/schede\">
\t\t\t\t<p class=\"label label--round btn-lg\"><i class=\"fa fa-file-text-o\"></i></p>
\t\t\t\t<h4> Consulta le schede</h4>
\t\t\t</a>
\t\t\t<p><span class=\"tags\">
\t\t\t\t<a href=\"{{ base_url }}/schede\">Indice delle schede</a>
\t\t\t</span></p>
\t\t</div>
\t\t<div class=\"text-xs-center table-col\"></div>

<!--Close divs-->
\t</div>
</div>
<!--/End counters-->

\t\t<div class=\"content-wrapper\" style=\" padding-top:3em; padding-bottom:3em; text-align:center; background:#227799; color:#fff\">
\t\t<h2>Partecipa</h2>
\t\t<p>Scrivi a <a href=\"#\">{{ site.author.email }}</a> per partecipare al progetto.</p>
\t</div>

\t
\t<div class=\"content-wrapper\" style=\" padding-top:1em; padding-bottom:2em\">
\t\t<h2>Chi siamo</h2>
\t\t<p><strong>Responsabile scientifico</strong>: Antonello Fabio Caterino</p>
\t\t<p><small><strong>Collaboratori</strong>: Anna Gabriella Chisena; Marcello Bolpagni; Silvia Lai; Federica Congedo</small></p>
\t\t<p><small><strong>Supporto tecnico ed informatico</strong>: Marco Petolicchio</small></p>
\t</div>



<!--
{% if config.plugins.taxonomylist.enabled %}
    <h4>{{ 'Argomenti'|t }}</h4>
    {% include 'partials/taxonomycount.html.twig' with {'taxonomy':'tag'} %}
    <h4>{{ 'Personaggi'|t }}</h4>
    {% include 'partials/taxonomycount.html.twig' with {'taxonomy':'char'} %}
</div>
{% endif %}
-->
{% endblock %}
";
    }
}
