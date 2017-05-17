<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_ce70387face00147abd98a3c36078642e1879d44ba178d94fe1f2afe80417323 extends Twig_Template
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
        echo "<div class=\"list-item h-entry \">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">
        
        <p style=\"font-size:14px;\">By <span style=\"font-weight:bold\">";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array());
        echo "</span> on <span style=\"font-weight:bold\">";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "date", array());
        echo " </span></p>
        ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 12
            echo "            <h2 class=\"p-name\">
                ";
            // line 13
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 14
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 16
            echo "            </h2>
        ";
        } else {
            // line 18
            echo "            <h2 class=\"p-name\"><span class=\"tags\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "chronology", array());
            echo "</span><br><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"u-url\"> ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 20
        echo "        <a href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\"><img src=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "metadata", array()), "image", array());
        echo "\"></img></a>
            <p class=\"text-uppercase\">";
        // line 21
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "metadata", array()), "description", array());
        echo "</p>
            <div class=\"table-container\">    
            <div class=\"table-col\">
                <div style=\"display:inline-block; margin-right:16px; height:32px; width:32px; background-image:url('";
        // line 24
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/tags.jpg'); border-radius:50%; background-size:cover\">
                </div>
                <span class=\"\"><a>";
        // line 26
        echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "tag", array()));
        echo " Argomenti</a></span>
            </div><div class=\"table-col\">
                <div style=\"display:inline-block; margin-right:16px; height:32px; width:32px; background-image:url('";
        // line 28
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/char.jpg'); border-radius:50%; background-size:cover\">
                </div>
                <span class=\"\"><a>";
        // line 30
        echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "char", array()));
        echo " Personaggi</a></span>
            </div>
            <div class=\"table-col\">
                <div style=\"display:inline-block; margin-right:16px; height:32px; width:32px; background-image:url('";
        // line 33
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/archive.jpg'); border-radius:50%; background-size:cover\">
                </div>
                <span class=\"\"><a>";
        // line 35
        echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "bibliography", array()));
        echo " Riferimenti</a></span>
            </div>
        </div>
            <div class=\"sharer\" style=\"line-height:2; text-align:center; font-size:1.5em; padding-top:0.2em; padding-bottom:1em\" id=\"";
        // line 38
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()), "date", array());
        echo "-share\">";
        $this->loadTemplate("partials/socialbuttons.html.twig", "partials/blog_item.html.twig", 38)->display(array_merge($context, array("url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()))));
        echo "</div>

    </div>

    <div class=\"list-blog-padding\" >
        
    ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 45
            echo "        <div class=\"e-content\">        
            ";
            // line 46
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
        ";
            // line 48
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 49
                echo "        ";
                $context["show_prev_next"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 52
            echo "        <div class=\"p-summary e-content\">
        
        
            <p><span class=\"tags tags-bg bg-primary\">
                <a href=\"";
            // line 56
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">
                <i class=\"fa fa-arrow-right\"></i>
                ";
            // line 58
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Leggi la scheda completa");
            echo "
                </a>
            </span></p>
    ";
        } elseif (        // line 61
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 62
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 63
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 64
                echo "                    ";
                echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 55);
                echo "
                </div>
            ";
            } else {
                // line 67
                echo "


                    ";
                // line 70
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
                
            ";
            }
            // line 73
            echo "
            <p><a href=\"";
            // line 74
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
    ";
        } else {
            // line 76
            echo "   
        <div class=\"e-content\"  id=\"content\">
            ";
            // line 78
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
    

        ";
            // line 82
            $context["show_prev_next"] = true;
            // line 83
            echo "    ";
        }
        // line 84
        echo "

    </div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 84,  214 => 83,  212 => 82,  205 => 78,  201 => 76,  194 => 74,  191 => 73,  185 => 70,  180 => 67,  173 => 64,  171 => 63,  168 => 62,  166 => 61,  160 => 58,  155 => 56,  149 => 52,  146 => 51,  143 => 50,  140 => 49,  138 => 48,  133 => 46,  130 => 45,  128 => 44,  117 => 38,  111 => 35,  106 => 33,  100 => 30,  95 => 28,  90 => 26,  85 => 24,  79 => 21,  72 => 20,  62 => 18,  58 => 16,  52 => 14,  50 => 13,  47 => 12,  45 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"list-item h-entry \">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
        
        <p style=\"font-size:14px;\">By <span style=\"font-weight:bold\">{{ page.header.taxonomy.author }}</span> on <span style=\"font-weight:bold\">{{ page.header.taxonomy.date }} </span></p>
        {% if page.header.link %}
            <h2 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
            </h2>
        {% else %}
            <h2 class=\"p-name\"><span class=\"tags\">{{ page.header.taxonomy.chronology }}</span><br><a href=\"{{ page.url }}\" class=\"u-url\"> {{ page.title }}</a></h2>
        {% endif %}
        <a href=\"{{ page.url }}\"><img src=\"{{ page.header.metadata.image }}\"></img></a>
            <p class=\"text-uppercase\">{{ page.header.metadata.description }}</p>
            <div class=\"table-container\">    
            <div class=\"table-col\">
                <div style=\"display:inline-block; margin-right:16px; height:32px; width:32px; background-image:url('{{ base_url }}/assets/img/tags.jpg'); border-radius:50%; background-size:cover\">
                </div>
                <span class=\"\"><a>{{ page.header.taxonomy.tag | length}} Argomenti</a></span>
            </div><div class=\"table-col\">
                <div style=\"display:inline-block; margin-right:16px; height:32px; width:32px; background-image:url('{{ base_url }}/assets/img/char.jpg'); border-radius:50%; background-size:cover\">
                </div>
                <span class=\"\"><a>{{ page.header.taxonomy.char | length}} Personaggi</a></span>
            </div>
            <div class=\"table-col\">
                <div style=\"display:inline-block; margin-right:16px; height:32px; width:32px; background-image:url('{{ base_url }}/assets/img/archive.jpg'); border-radius:50%; background-size:cover\">
                </div>
                <span class=\"\"><a>{{ page.header.taxonomy.bibliography | length}} Riferimenti</a></span>
            </div>
        </div>
            <div class=\"sharer\" style=\"line-height:2; text-align:center; font-size:1.5em; padding-top:0.2em; padding-bottom:1em\" id=\"{{ page.metadata.date }}-share\">{% include 'partials/socialbuttons.html.twig' with {'url' : page.url} %}</div>

    </div>

    <div class=\"list-blog-padding\" >
        
    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">        
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
        
        
            <p><span class=\"tags tags-bg bg-primary\">
                <a href=\"{{ page.url }}\">
                <i class=\"fa fa-arrow-right\"></i>
                {{ 'Leggi la scheda completa'|t }}
                </a>
            </span></p>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {% if page.summary != page.content %}
                    {{ page.content|truncate(55) }}
                </div>
            {% else %}



                    {{ page.content }}
                
            {% endif %}

            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
    {% else %}
   
        <div class=\"e-content\"  id=\"content\">
            {{ page.content }}
        </div>
    

        {% set show_prev_next = true %}
    {% endif %}


    </div>
</div>
</div>

";
    }
}
