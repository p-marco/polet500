<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_dd3937d9f91308869b27a5a93f4936b71faea65171abbc706f02d5c237c05114 extends Twig_Template
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
        echo "<div class=\"search-wrapper\">
    <input class=\"search-input\" type=\"text\" placeholder=\"";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Cerca");
        echo "\" value=\"";
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" data-search-input=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 4
            echo "        <button class=\"search-submit\"><img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://simplesearch/assets/search.svg");
            echo "\" /></button>
    ";
        }
        // line 6
        echo "    <script>
    jQuery(document).ready(function(\$){
        \$('.search-input').on('keypress', function(event) {
            var input = \$(event.currentTarget);
            if (event.which == 13 && input.val().length >= ";
        // line 10
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "plugins.simplesearch.min_query_length", 1 => 3), "method");
        echo ") {
                event.preventDefault();
                window.location.href = input.data('search-input') + '";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "' + input.val();
            }
        });
        \$('.search-submit').on('click', function(event) {
            var input = \$(event.currentTarget).prev('.search-input');
            event.preventDefault();
            window.location.href = input.data('search-input') + '";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "' + input.val();
        });
    });
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  50 => 12,  45 => 10,  39 => 6,  33 => 4,  31 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"search-wrapper\">
    <input class=\"search-input\" type=\"text\" placeholder=\"{{\"Cerca\"|t}}\" value=\"{{ query }}\" data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\" />
    {% if config.plugins.simplesearch.display_button %}
        <button class=\"search-submit\"><img src=\"{{ url('plugin://simplesearch/assets/search.svg') }}\" /></button>
    {% endif %}
    <script>
    jQuery(document).ready(function(\$){
        \$('.search-input').on('keypress', function(event) {
            var input = \$(event.currentTarget);
            if (event.which == 13 && input.val().length >= {{ config.get('plugins.simplesearch.min_query_length', 3) }}) {
                event.preventDefault();
                window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
            }
        });
        \$('.search-submit').on('click', function(event) {
            var input = \$(event.currentTarget).prev('.search-input');
            event.preventDefault();
            window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
        });
    });
    </script>
</div>
";
    }
}
