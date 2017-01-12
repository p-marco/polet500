<?php

/* blog.html.twig */
class __TwigTemplate_746efce7e85c9f92c6695e5960e112e9b549140173f6083ca534608b7c9ae593 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1315311544")->display($context);
        // line 39
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 39,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(120,21,2) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\" background-color: #b71c1c \">
\t\t{% else %}
\t\t<div class=\"blog-header\" style=\"background-color:#227799; color:#e6e6e6;\">
\t\t{% endif %}
\t\t\t{{ page.content }}
\t\t</div>
\t\t

\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t    {% endfor %}

                {% if config.plugins.pagination.enabled and collection.params.pagination %}
                    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                {% endif %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page} %}
\t\t\t</div>
\t\t</div>
\t\t
\t{% endblock %}

{% endembed %}


";
    }
}


/* blog.html.twig */
class __TwigTemplate_746efce7e85c9f92c6695e5960e112e9b549140173f6083ca534608b7c9ae593_1315311544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 => 120, 1 => 21, 2 => 2), "method");
        // line 7
        echo "
\t\t";
        // line 8
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 9
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\" background-color: #b71c1c \">
\t\t";
        } else {
            // line 11
            echo "\t\t<div class=\"blog-header\" style=\"background-color:#227799; color:#e6e6e6;\">
\t\t";
        }
        // line 13
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>
\t\t

\t\t\t";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 18
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", null, 18)->display($context);
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "
\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", null, 24)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 25
            echo "\t\t\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                ";
        // line 27
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 28
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", null, 28)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 29
            echo "                ";
        }
        // line 30
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 32
        $this->loadTemplate("partials/sidebar.html.twig", null, 32)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null))));
        // line 33
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 33,  205 => 32,  201 => 30,  198 => 29,  195 => 28,  193 => 27,  190 => 26,  176 => 25,  173 => 24,  156 => 23,  151 => 20,  148 => 19,  145 => 18,  143 => 17,  135 => 13,  131 => 11,  127 => 9,  125 => 8,  122 => 7,  119 => 6,  116 => 5,  112 => 1,  110 => 3,  96 => 1,  21 => 39,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(120,21,2) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\" background-color: #b71c1c \">
\t\t{% else %}
\t\t<div class=\"blog-header\" style=\"background-color:#227799; color:#e6e6e6;\">
\t\t{% endif %}
\t\t\t{{ page.content }}
\t\t</div>
\t\t

\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t    {% endfor %}

                {% if config.plugins.pagination.enabled and collection.params.pagination %}
                    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                {% endif %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page} %}
\t\t\t</div>
\t\t</div>
\t\t
\t{% endblock %}

{% endembed %}


";
    }
}
