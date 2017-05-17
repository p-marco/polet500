<?php

/* partials/_facebook.html.twig */
class __TwigTemplate_e18d656d871a2554eaaafeca308e6592ee328dd3c54c4aa3123bae9b4d01bc5f extends Twig_Template
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
        echo "<span class=\"social-btn\">
\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\" class=\"popup\">
\t\t<i class=\"fa fa-facebook\"></i>
\t</a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_facebook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<span class=\"social-btn\">
\t<a href=\"https://www.facebook.com/sharer/sharer.php?u={{ page_url }}\" class=\"popup\">
\t\t<i class=\"fa fa-facebook\"></i>
\t</a>
</span>

";
    }
}
