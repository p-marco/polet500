<?php

/* partials/socialbuttons.html.twig */
class __TwigTemplate_52efb99b1d4967ecd571bfb5f4ff7be64f7f6a20be8c7391828e72cebaff2cee extends Twig_Template
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
        echo "<ul class=\"rrssb-buttons clearfix\">
    ";
        // line 2
        $context["page_url"] = ((isset($context["socialbuttons_domain"]) ? $context["socialbuttons_domain"] : null) . (isset($context["url"]) ? $context["url"] : null));
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socialbuttons_buttons"]) ? $context["socialbuttons_buttons"] : null));
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
        foreach ($context['_seq'] as $context["name"] => $context["values"]) {
            // line 4
            echo "
    ";
            // line 5
            if ($this->getAttribute($context["values"], "enabled", array())) {
                // line 6
                echo "        ";
                $this->loadTemplate((("partials/_" . $context["name"]) . ".html.twig"), "partials/socialbuttons.html.twig", 6)->display(array_merge($context, array("label" => $this->getAttribute($context["values"], "label", array()))));
                // line 7
                echo "    ";
            }
            // line 8
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/socialbuttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  53 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<ul class=\"rrssb-buttons clearfix\">
    {% set page_url = socialbuttons_domain ~ url %}
    {% for name, values in socialbuttons_buttons %}

    {% if values.enabled %}
        {% include 'partials/_' ~ name ~ '.html.twig' with {'label': values.label} %}
    {% endif %}
    {% endfor %}
</ul>";
    }
}
