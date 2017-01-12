<?php

/* item.html.twig */
class __TwigTemplate_cb067c3c62d19d61458782a9e19a2b3bf52b2fd861554f4fa42801e9c6dca570 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1285535123")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-color:#8d6e63\">
<h1>{{ page.title }}</h1>

</div>
\t{% set body_classes = \"modular header-image fullwidth\" %}

\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t\t</div>
\t\t</div>
\t\t
\t{% endblock %}

{% endembed %}
";
    }
}


/* item.html.twig */
class __TwigTemplate_cb067c3c62d19d61458782a9e19a2b3bf52b2fd861554f4fa42801e9c6dca570_1285535123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        echo "\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-color:#8d6e63\">
<h1>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>

</div>
\t";
        // line 8
        $context["body_classes"] = "modular header-image fullwidth";
        // line 9
        echo "
\t\t";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 11
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", null, 11)->display($context);
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    ";
        // line 16
        $this->loadTemplate("partials/blog_item.html.twig", null, 16)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 17
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 19
        $this->loadTemplate("partials/sidebar.html.twig", null, 19)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()))));
        // line 20
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 20,  124 => 19,  120 => 17,  118 => 16,  113 => 13,  110 => 12,  107 => 11,  105 => 10,  102 => 9,  100 => 8,  94 => 5,  91 => 4,  88 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-color:#8d6e63\">
<h1>{{ page.title }}</h1>

</div>
\t{% set body_classes = \"modular header-image fullwidth\" %}

\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t\t</div>
\t\t</div>
\t\t
\t{% endblock %}

{% endembed %}
";
    }
}
