<?php

/* partials/taxonomycount.html.twig */
class __TwigTemplate_a29ebed92dc522edbd683e63aca54ee684d15be848cb2cca8a2b1d79bf34c911 extends Twig_Template
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
        $context["taxlist"] = $this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), (isset($context["taxonomy"]) ? $context["taxonomy"] : null), array(), "array")) {
            // line 4
            echo "
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), (isset($context["taxonomy"]) ? $context["taxonomy"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomycount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set taxlist = taxonomylist.get() %}

{% if taxlist[taxonomy] %}

    {% for tax, value in taxlist[taxonomy] %}

    {% endfor %}
{% endif %}
";
    }
}
