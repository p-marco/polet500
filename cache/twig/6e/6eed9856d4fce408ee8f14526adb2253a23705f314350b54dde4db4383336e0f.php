<?php

/* partials/_twitter.html.twig */
class __TwigTemplate_2caa6c5fda35f40305d3325ddd09b0d9700fb1270c83991690c86697150c3949 extends Twig_Template
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
  <a href=\"https://twitter.com/intent/tweet?text=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\" class=\"popup\">
    <i class=\"fa fa-twitter\"></i>
  </a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_twitter.html.twig";
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
  <a href=\"https://twitter.com/intent/tweet?text={{ page_url }}\" class=\"popup\">
    <i class=\"fa fa-twitter\"></i>
  </a>
</span>

";
    }
}
