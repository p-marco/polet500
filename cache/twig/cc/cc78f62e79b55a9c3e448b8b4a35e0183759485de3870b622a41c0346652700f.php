<?php

/* partials/_email.html.twig */
class __TwigTemplate_45175afe5235446711c3c079b960f10238855e276351658ae7635fa4cf07be6d extends Twig_Template
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
  <a href=\"mailto:?subject=Check%20out%20this%20awesome%20resource&amp;body=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\">
    <i class=\"fa fa-envelope\"></i>
  </a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_email.html.twig";
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
  <a href=\"mailto:?subject=Check%20out%20this%20awesome%20resource&amp;body={{ page_url }}\">
    <i class=\"fa fa-envelope\"></i>
  </a>
</span>

";
    }
}
