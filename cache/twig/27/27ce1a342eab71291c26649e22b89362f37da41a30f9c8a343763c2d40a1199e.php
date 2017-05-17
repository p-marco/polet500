<?php

/* blog_utils.html.twig */
class __TwigTemplate_2b270fec0290a5915a478c3948a21ede1f3a94a867fe5d4dfccd2386e1833245 extends Twig_Template
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
        echo "<div class=\"content-wrapper table-container\">
\t\t";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 3
            echo "<div class=\"table-col\" style=\"text-align:center\">
<div class=\"avatar-184\"style=\"background-image: url('";
            // line 4
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/assets/img/archive.jpg'); border-radius:50%; background-size:cover\"></div>
    <h4>";
            // line 5
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Archivio");
            echo "</h4>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #4caf50; height:2px\"></div>
    ";
            // line 7
            $this->loadTemplate("partials/archives.html.twig", "blog_utils.html.twig", 7)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null))));
            // line 8
            echo "</div>
";
        }
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 11
            echo "<div class=\"table-col\" style=\"text-align:center\">
<div class=\"avatar-184\" style=\"background-image: url('";
            // line 12
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/assets/img/archive.jpg'); border-radius:50%; background-size:cover\"></div>
    <h4>";
            // line 13
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Cerca");
            echo "</h4>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
    ";
            // line 15
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "blog_utils.html.twig", 15)->display($context);
            // line 16
            echo "</div>
";
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "blog_utils.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  58 => 16,  56 => 15,  51 => 13,  47 => 12,  44 => 11,  42 => 10,  38 => 8,  36 => 7,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"content-wrapper table-container\">
\t\t{% if config.plugins.archives.enabled %}
<div class=\"table-col\" style=\"text-align:center\">
<div class=\"avatar-184\"style=\"background-image: url('{{ base_url }}/assets/img/archive.jpg'); border-radius:50%; background-size:cover\"></div>
    <h4>{{ 'Archivio'|t }}</h4>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #4caf50; height:2px\"></div>
    {% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}
{% if config.plugins.simplesearch.enabled %}
<div class=\"table-col\" style=\"text-align:center\">
<div class=\"avatar-184\" style=\"background-image: url('{{ base_url }}/assets/img/archive.jpg'); border-radius:50%; background-size:cover\"></div>
    <h4>{{ 'Cerca'|t }}</h4>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
</div>";
    }
}
