<?php

/* partials/navigation_menu.html.twig */
class __TwigTemplate_b98363ea8d94c143d273cc7c6b8a49aa09ae4a003ec9ce48378b1cc4f71ae361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_navigation' => array($this, 'block_header_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
.navigation-bar{position:fixed; width:100%; height:auto; background:#e6e6e6;
z-index:9999;
    }
.content-wrapper.text-serif{font-family: \"Raleway\", sans-serif;
    font-size:0.75em;
    
   }
.table-row-heading.no-bg{
    background:none
}

</style>


    <a href=\"#header-nav\" id=\"nav-trigger\" class=\"toggle-nav callTo-primary\">
        <span id=\"label-toggle--scheda-nav\">
            <i class=\"fa fa-bars\"></i><br>
            <small style=\"font-size:12px\">MENU</small>
        </span>
    </a>

<header class=\"navigation-bar\" id=\"header-nav\">
<div class=\"content-wrapper text-serif\">
<br>
    <div class=\"table-container\">
        <div class=\"table-row-heading no-bg\" style=\"text-align:center\">
            
            ";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 30
            echo "                <div class=\"table-col\">";
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navigation_menu.html.twig", 30)->display($context);
            echo "</div>
            ";
        }
        // line 32
        echo "        </div>
    </div>

    <div class=\"table-container\">
        <div class=\"table-row-heading no-bg\">
            ";
        // line 37
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 40
        echo "           <div class=\"table-col\"><a href=\"#nav-trigger-1\" id=\"label-toggle--header-nav\"><i class=\"label fa fa-close\"></i> Close</a></div>
        </div>
    </div>

</div>
</header>";
    }

    // line 37
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 38
        echo "                ";
        $this->loadTemplate("partials/navigation_items.html.twig", "partials/navigation_menu.html.twig", 38)->display($context);
        // line 39
        echo "            ";
    }

    public function getTemplateName()
    {
        return "partials/navigation_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 39,  79 => 38,  76 => 37,  67 => 40,  65 => 37,  58 => 32,  52 => 30,  50 => 29,  20 => 1,);
    }

    public function getSource()
    {
        return "<style>
.navigation-bar{position:fixed; width:100%; height:auto; background:#e6e6e6;
z-index:9999;
    }
.content-wrapper.text-serif{font-family: \"Raleway\", sans-serif;
    font-size:0.75em;
    
   }
.table-row-heading.no-bg{
    background:none
}

</style>


    <a href=\"#header-nav\" id=\"nav-trigger\" class=\"toggle-nav callTo-primary\">
        <span id=\"label-toggle--scheda-nav\">
            <i class=\"fa fa-bars\"></i><br>
            <small style=\"font-size:12px\">MENU</small>
        </span>
    </a>

<header class=\"navigation-bar\" id=\"header-nav\">
<div class=\"content-wrapper text-serif\">
<br>
    <div class=\"table-container\">
        <div class=\"table-row-heading no-bg\" style=\"text-align:center\">
            
            {% if config.plugins.simplesearch.enabled %}
                <div class=\"table-col\">{% include 'partials/simplesearch_searchbox.html.twig' %}</div>
            {% endif %}
        </div>
    </div>

    <div class=\"table-container\">
        <div class=\"table-row-heading no-bg\">
            {% block header_navigation %}
                {% include 'partials/navigation_items.html.twig' %}
            {% endblock %}
           <div class=\"table-col\"><a href=\"#nav-trigger-1\" id=\"label-toggle--header-nav\"><i class=\"label fa fa-close\"></i> Close</a></div>
        </div>
    </div>

</div>
</header>";
    }
}
