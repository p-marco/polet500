<?php

/* partials/_reddit.html.twig */
class __TwigTemplate_4d73682a9296fff5505280b625934907f3bcf93658bfd33f9e21e2ca5da46efb extends Twig_Template
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
  <a href=\"http://www.reddit.com/submit?url=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\">
    <i class=\"fa fa-reddit\"></i>
  </a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_reddit.html.twig";
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
  <a href=\"http://www.reddit.com/submit?url={{ page_url }}\">
    <i class=\"fa fa-reddit\"></i>
  </a>
</span>

";
    }
}
