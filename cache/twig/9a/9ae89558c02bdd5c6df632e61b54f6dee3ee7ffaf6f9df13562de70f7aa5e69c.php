<?php

/* item.json.twig */
class __TwigTemplate_1e825b834287e2ee98c6d81f62045a4d04ef334a95a44571b6a98c8d344e2f69 extends Twig_Template
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
        $context["payload"] = array("frontmatter" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()));
        // line 2
        echo twig_jsonencode_filter((isset($context["payload"]) ? $context["payload"] : null));
    }

    public function getTemplateName()
    {
        return "item.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set payload = {frontmatter: page.header, content: page.content}  %}
{{ payload|json_encode|raw }}";
    }
}
