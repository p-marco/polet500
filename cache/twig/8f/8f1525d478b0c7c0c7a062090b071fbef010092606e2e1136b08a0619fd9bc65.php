<?php

/* partials/bibliography_table.html.twig */
class __TwigTemplate_b820bc051adc2da945d934a14ed8db49143c13fb024d8ba3d331d8f07b77bcff extends Twig_Template
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
        echo "<div class=\"e-content content-wrapper\" style=\"  font-size:0.75em; font-family:'Raleway',sans-serif !important; \" >

<h4>Riferimenti</h4>
\t<div class=\"table-container\">
\t\t<div class=\"table-row-heading\">
\t\t\t<div class=\"table-col bib\"><a href=\"#\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i></a> Year </div>
\t\t\t<div class=\"table-col bib\"><a href=\"#\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i></a> Author </div>
\t\t\t<div class=\"table-col bib\"><a href=\"#\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i></a> Category: Type</div>
\t\t\t<div class=\"table-col bib\">Publication</div>
\t\t\t<div class=\"table-col bib\">Link</div>
\t\t</div>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "bibliography", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
            // line 13
            echo "\t\t\t<div class=\"table-row-bib\">
\t\t\t\t<div class=\"table-col bib\">";
            // line 14
            echo $this->getAttribute($context["bibliography"], "Data", array());
            echo "</div>
\t\t\t\t<div class=\"table-col bib\">";
            // line 15
            echo $this->getAttribute($context["bibliography"], "Autore", array());
            echo "</div>
\t\t\t\t<div class=\"table-col bib\">";
            // line 16
            echo $this->getAttribute($context["bibliography"], "Categoria", array());
            echo " : ";
            echo $this->getAttribute($context["bibliography"], "Tipologia", array());
            echo "</div>
\t\t\t\t<div class=\"table-col bib\">
\t\t\t\t\t<span class=\"text-uppercase\">
                        ";
            // line 19
            echo $this->getAttribute($context["bibliography"], "Autore", array());
            echo "
                    </span>
                    ";
            // line 21
            if ($this->getAttribute($context["bibliography"], "Destinatario", array())) {
                // line 22
                echo "\t\t\t\t\t<span class=\"text-uppercase\"> - 
                    
                        ";
                // line 24
                echo $this->getAttribute($context["bibliography"], "Destinatario", array());
                echo "
                \t</span> 
                \t";
            }
            // line 27
            echo "                ( ";
            echo $this->getAttribute($context["bibliography"], "Data", array());
            echo " )
                ,
\t\t\t\t\t<span><em>";
            // line 29
            echo $this->getAttribute($context["bibliography"], "Titolo", array());
            echo "</em>.</span>
\t\t\t\t\t";
            // line 30
            if ($this->getAttribute($context["bibliography"], "Volume", array())) {
                // line 31
                echo "                in 
                <span class=\"text-em\"> ";
                // line 32
                echo $this->getAttribute($context["bibliography"], "Volume", array());
                echo "</span>;
                ";
            }
            // line 34
            echo "                <span class=\"\">";
            echo $this->getAttribute($context["bibliography"], "Editore", array());
            echo "</span>,
                <span class=\"\">";
            // line 35
            echo $this->getAttribute($context["bibliography"], "Luogo", array());
            echo "</span> 
                ";
            // line 36
            if ($this->getAttribute($context["bibliography"], "Pagine", array())) {
                // line 37
                echo "                ,
                    <span class=\"text-lowercase\">pp. ";
                // line 38
                echo $this->getAttribute($context["bibliography"], "Pagine", array());
                echo "</span> 
                ";
            }
            // line 40
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"table-col bib\">";
            // line 41
            if ($this->getAttribute($context["bibliography"], "Link", array())) {
                // line 42
                echo "                <a href=\"";
                echo $this->getAttribute($context["bibliography"], "Link", array());
                echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>
                ";
            } else {
                // line 45
                echo " NONE
                ";
            }
            // line 46
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "partials/bibliography_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  128 => 46,  124 => 45,  116 => 42,  114 => 41,  111 => 40,  106 => 38,  103 => 37,  101 => 36,  97 => 35,  92 => 34,  87 => 32,  84 => 31,  82 => 30,  78 => 29,  72 => 27,  66 => 24,  62 => 22,  60 => 21,  55 => 19,  47 => 16,  43 => 15,  39 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"e-content content-wrapper\" style=\"  font-size:0.75em; font-family:'Raleway',sans-serif !important; \" >

<h4>Riferimenti</h4>
\t<div class=\"table-container\">
\t\t<div class=\"table-row-heading\">
\t\t\t<div class=\"table-col bib\"><a href=\"#\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i></a> Year </div>
\t\t\t<div class=\"table-col bib\"><a href=\"#\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i></a> Author </div>
\t\t\t<div class=\"table-col bib\"><a href=\"#\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i></a> Category: Type</div>
\t\t\t<div class=\"table-col bib\">Publication</div>
\t\t\t<div class=\"table-col bib\">Link</div>
\t\t</div>
\t\t{% for bibliography in page.taxonomy.bibliography |sort %}
\t\t\t<div class=\"table-row-bib\">
\t\t\t\t<div class=\"table-col bib\">{{ bibliography.Data }}</div>
\t\t\t\t<div class=\"table-col bib\">{{ bibliography.Autore }}</div>
\t\t\t\t<div class=\"table-col bib\">{{ bibliography.Categoria }} : {{ bibliography.Tipologia }}</div>
\t\t\t\t<div class=\"table-col bib\">
\t\t\t\t\t<span class=\"text-uppercase\">
                        {{ bibliography.Autore }}
                    </span>
                    {% if bibliography.Destinatario %}
\t\t\t\t\t<span class=\"text-uppercase\"> - 
                    
                        {{ bibliography.Destinatario }}
                \t</span> 
                \t{% endif %}
                ( {{ bibliography.Data }} )
                ,
\t\t\t\t\t<span><em>{{ bibliography.Titolo }}</em>.</span>
\t\t\t\t\t{% if bibliography.Volume %}
                in 
                <span class=\"text-em\"> {{ bibliography.Volume }}</span>;
                {% endif %}
                <span class=\"\">{{ bibliography.Editore }}</span>,
                <span class=\"\">{{ bibliography.Luogo }}</span> 
                {% if bibliography.Pagine %}
                ,
                    <span class=\"text-lowercase\">pp. {{ bibliography.Pagine }}</span> 
                {% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"table-col bib\">{% if bibliography.Link %}
                <a href=\"{{ bibliography.Link }}\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>
                {% else %} NONE
                {% endif %}</div>
\t\t\t</div>
\t\t{% endfor %}
\t\t\t\t
\t</div>

</div>";
    }
}
