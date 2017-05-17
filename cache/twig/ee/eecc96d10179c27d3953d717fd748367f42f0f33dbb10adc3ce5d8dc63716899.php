<?php

/* partials/_linkedin.html.twig */
class __TwigTemplate_f96c296222616dfab701e11c4c5f34882c93eace4e3683f91f4a7354d0dc126c extends Twig_Template
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
  <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\" class=\"popup\">
    <i class=\"fa fa-linkedin\"></i>
  </a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_linkedin.html.twig";
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
  <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url={{ page_url }}\" class=\"popup\">
    <i class=\"fa fa-linkedin\"></i>
  </a>
</span>

";
    }
}
