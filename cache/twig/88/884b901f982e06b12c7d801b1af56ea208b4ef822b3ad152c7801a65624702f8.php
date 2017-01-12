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
        echo "<div class=\"list-item h-entry\">

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
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h2>
        ";
        } else {
            // line 19
            echo "            <h2 class=\"p-name\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"u-url\"> ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 21
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 27
            echo "        <div class=\"e-content\">        
            ";
            // line 28
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
        ";
            // line 30
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 31
                echo "        ";
                $context["show_prev_next"] = true;
                // line 32
                echo "        ";
            }
            // line 33
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 34
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 35
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
            <p><a href=\"";
            // line 36
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Leggi la scheda completa");
            echo "</a></p>
        </div>
    ";
        } elseif (        // line 38
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 39
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 40
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 41
                echo "                    ";
                echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 55);
                echo "
                </div>
            ";
            } else {
                // line 44
                echo "
                    ";
                // line 45
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
                
            ";
            }
            // line 48
            echo "
            <p><a href=\"";
            // line 49
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } else {
            // line 52
            echo "   
        <div class=\"e-content\">
            ";
            // line 54
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
  <h4>";
            // line 56
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Riferimenti");
            echo "</h4> 
    <style>
        .text-uppercase {  font-weight:bold}
        .text-em {font-style:italic}
        .text-lowercase {text-transform:lowercase}
        .label-border {background:none; border: 2px solid #227799}
    </style>
        <ul  class=\"archives\">
            <h5><span class=\"label\">B</span>Bibliografia</h5>
            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "bibliography", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
                if (($this->getAttribute($context["bibliography"], "Categoria", array()) == "Bibliografia")) {
                    // line 66
                    echo "            <li>
                <span class=\"label label-border\"></span>
                <span class=\"text-uppercase\">
                    <a href=\"";
                    // line 69
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/bibliography";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $this->getAttribute($context["bibliography"], "Autore", array());
                    echo "\">
                        ";
                    // line 70
                    echo $this->getAttribute($context["bibliography"], "Autore", array());
                    echo "
                    </a>
                </span>,
                <span class=\"\">
                    <a href=\"";
                    // line 74
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/bibliography";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $this->getAttribute($context["bibliography"], "Data", array());
                    echo "\">
                        ";
                    // line 75
                    echo $this->getAttribute($context["bibliography"], "Data", array());
                    echo "
                    </a>
                </span>,,
                <span class=\"text-em\">";
                    // line 78
                    echo $this->getAttribute($context["bibliography"], "Titolo", array());
                    echo "</span>,
                <span class=\"\">";
                    // line 79
                    echo $this->getAttribute($context["bibliography"], "Editore", array());
                    echo "</span>,
                <span class=\"\">";
                    // line 80
                    echo $this->getAttribute($context["bibliography"], "Luogo", array());
                    echo "</span> 
                ";
                    // line 81
                    if ($this->getAttribute($context["bibliography"], "Pagine", array())) {
                        // line 82
                        echo "                ,
                    <span class=\"text-lowercase\">pp. ";
                        // line 83
                        echo $this->getAttribute($context["bibliography"], "Pagine", array());
                        echo "</span> 
                ";
                    }
                    // line 85
                    echo "                .
                <a href=\"";
                    // line 86
                    echo $this->getAttribute($context["bibliography"], "Link", array());
                    echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>

            </li>            
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "        </ul>
        <h5>Fonti</h5>
        <ul  class=\"archives\">
            <h6><span class=\"label\">E</span>Epistolari</h6>
            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "bibliography", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
                if (($this->getAttribute($context["bibliography"], "Tipologia", array()) == "Epistolare")) {
                    // line 97
                    echo "            <li>
                <span class=\"label label-border\"></span>
                <span class=\"text-uppercase\">
                    <a href=\"";
                    // line 100
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/bibliography";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $this->getAttribute($context["bibliography"], "Autore", array());
                    echo "\">
                        ";
                    // line 101
                    echo $this->getAttribute($context["bibliography"], "Autore", array());
                    echo "
                    </a>
                </span> - 
                <span class=\"text-uppercase\">
                    <a href=\"";
                    // line 105
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/bibliography";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $this->getAttribute($context["bibliography"], "Destinatario", array());
                    echo "\">
                        ";
                    // line 106
                    echo $this->getAttribute($context["bibliography"], "Destinatario", array());
                    echo "
                    </a>
                </span>, ,
                <span class=\"text-uppercase\">
                    <a href=\"";
                    // line 110
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/bibliography";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $this->getAttribute($context["bibliography"], "Data", array());
                    echo "\">
                        ";
                    // line 111
                    echo $this->getAttribute($context["bibliography"], "Data", array());
                    echo "
                    </a>
                </span>,
                <span class=\"text-em\">";
                    // line 114
                    echo $this->getAttribute($context["bibliography"], "Titolo", array());
                    echo "</span>
                <a href=\"";
                    // line 115
                    echo $this->getAttribute($context["bibliography"], "Link", array());
                    echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>
            </li>            
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "        </ul>
        <ul  class=\"archives\">
                <h6><span class=\"label\">P</span>Poetiche</h6>

            ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "bibliography", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
                if (($this->getAttribute($context["bibliography"], "Tipologia", array()) == "Poetica")) {
                    // line 125
                    echo "            <li>
                <span class=\"label label-border\"></span>
                <span class=\"text-uppercase\">
                    <a href=\"";
                    // line 128
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/bibliography";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $this->getAttribute($context["bibliography"], "Autore", array());
                    echo "\">
                        ";
                    // line 129
                    echo $this->getAttribute($context["bibliography"], "Autore", array());
                    echo "
                    </a>
                </span>,
                <span class=\"text-uppercase\">
                    <a href=\"";
                    // line 133
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/bibliography";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $this->getAttribute($context["bibliography"], "Data", array());
                    echo "\">
                        ";
                    // line 134
                    echo $this->getAttribute($context["bibliography"], "Data", array());
                    echo "
                    </a>
                </span>,
                <span class=\"text-em\">";
                    // line 137
                    echo $this->getAttribute($context["bibliography"], "Titolo", array());
                    echo "</span>
                <a href=\"";
                    // line 138
                    echo $this->getAttribute($context["bibliography"], "Link", array());
                    echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>
            </li>            
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "        </ul>
        <ul  class=\"archives\">
            <h6><span class=\"label\">S</span>Storiche</h6>
            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->sortByKeyFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "bibliography", array()), "Data"));
            foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
                if (($this->getAttribute($context["bibliography"], "Tipologia", array()) == "Storica")) {
                    // line 147
                    echo "            <li>
                    <span class=\"label label-border\"></span>
                <span class=\"text-uppercase\">
                    <a href=\"";
                    // line 150
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/bibliography";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $this->getAttribute($context["bibliography"], "Autore", array());
                    echo "\">
                        ";
                    // line 151
                    echo $this->getAttribute($context["bibliography"], "Autore", array());
                    echo "
                    </a>
                </span>,
                <span class=\"\">";
                    // line 154
                    echo $this->getAttribute($context["bibliography"], "Data", array());
                    echo "</span>,
                <span class=\"text-em\">";
                    // line 155
                    echo $this->getAttribute($context["bibliography"], "Titolo", array());
                    echo "</span>
                <a href=\"";
                    // line 156
                    echo $this->getAttribute($context["bibliography"], "Link", array());
                    echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>
            </li>            
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "        </ul>
        ";
            // line 162
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 163
                echo "            ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 163)->display($context);
                // line 164
                echo "        ";
            }
            // line 165
            echo "
        ";
            // line 166
            $context["show_prev_next"] = true;
            // line 167
            echo "    ";
        }
        // line 168
        echo "
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
        return array (  441 => 168,  438 => 167,  436 => 166,  433 => 165,  430 => 164,  427 => 163,  425 => 162,  422 => 161,  410 => 156,  406 => 155,  402 => 154,  396 => 151,  389 => 150,  384 => 147,  379 => 146,  374 => 143,  362 => 138,  358 => 137,  352 => 134,  345 => 133,  338 => 129,  331 => 128,  326 => 125,  321 => 124,  315 => 120,  303 => 115,  299 => 114,  293 => 111,  286 => 110,  279 => 106,  272 => 105,  265 => 101,  258 => 100,  253 => 97,  248 => 96,  242 => 92,  229 => 86,  226 => 85,  221 => 83,  218 => 82,  216 => 81,  212 => 80,  208 => 79,  204 => 78,  198 => 75,  191 => 74,  184 => 70,  177 => 69,  172 => 66,  167 => 65,  155 => 56,  150 => 54,  146 => 52,  138 => 49,  135 => 48,  129 => 45,  126 => 44,  119 => 41,  117 => 40,  114 => 39,  112 => 38,  105 => 36,  101 => 35,  98 => 34,  95 => 33,  92 => 32,  89 => 31,  87 => 30,  82 => 28,  79 => 27,  77 => 26,  70 => 21,  62 => 19,  53 => 16,  47 => 14,  45 => 13,  42 => 12,  40 => 11,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
        
        
        {% if page.header.link %}
            <h2 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h2>
        {% else %}
            <h2 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\"> {{ page.title }}</a></h2>
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">        
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
            {{ page.summary }}
            <p><a href=\"{{ page.url }}\">{{ 'Leggi la scheda completa'|t }}</a></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {% if page.summary != page.content %}
                    {{ page.content|truncate(55) }}
                </div>
            {% else %}

                    {{ page.content }}
                
            {% endif %}

            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% else %}
   
        <div class=\"e-content\">
            {{ page.content }}
        </div>
  <h4>{{ 'Riferimenti'|t }}</h4> 
    <style>
        .text-uppercase {  font-weight:bold}
        .text-em {font-style:italic}
        .text-lowercase {text-transform:lowercase}
        .label-border {background:none; border: 2px solid #227799}
    </style>
        <ul  class=\"archives\">
            <h5><span class=\"label\">B</span>Bibliografia</h5>
            {% for bibliography in page.taxonomy.bibliography if bibliography.Categoria=='Bibliografia' %}
            <li>
                <span class=\"label label-border\"></span>
                <span class=\"text-uppercase\">
                    <a href=\"{{ blog.url|rtrim('/') }}/bibliography{{ config.system.param_sep }}{{ bibliography.Autore }}\">
                        {{ bibliography.Autore }}
                    </a>
                </span>,
                <span class=\"\">
                    <a href=\"{{ blog.url|rtrim('/') }}/bibliography{{ config.system.param_sep }}{{ bibliography.Data }}\">
                        {{ bibliography.Data }}
                    </a>
                </span>,,
                <span class=\"text-em\">{{ bibliography.Titolo }}</span>,
                <span class=\"\">{{ bibliography.Editore }}</span>,
                <span class=\"\">{{ bibliography.Luogo }}</span> 
                {% if bibliography.Pagine %}
                ,
                    <span class=\"text-lowercase\">pp. {{ bibliography.Pagine }}</span> 
                {% endif %}
                .
                <a href=\"{{ bibliography.Link }}\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>

            </li>            
            {% endfor %}
        </ul>
        <h5>Fonti</h5>
        <ul  class=\"archives\">
            <h6><span class=\"label\">E</span>Epistolari</h6>
            {% for bibliography in page.taxonomy.bibliography if bibliography.Tipologia=='Epistolare' %}
            <li>
                <span class=\"label label-border\"></span>
                <span class=\"text-uppercase\">
                    <a href=\"{{ blog.url|rtrim('/') }}/bibliography{{ config.system.param_sep }}{{ bibliography.Autore }}\">
                        {{ bibliography.Autore }}
                    </a>
                </span> - 
                <span class=\"text-uppercase\">
                    <a href=\"{{ blog.url|rtrim('/') }}/bibliography{{ config.system.param_sep }}{{ bibliography.Destinatario }}\">
                        {{ bibliography.Destinatario }}
                    </a>
                </span>, ,
                <span class=\"text-uppercase\">
                    <a href=\"{{ blog.url|rtrim('/') }}/bibliography{{ config.system.param_sep }}{{ bibliography.Data }}\">
                        {{ bibliography.Data }}
                    </a>
                </span>,
                <span class=\"text-em\">{{ bibliography.Titolo }}</span>
                <a href=\"{{ bibliography.Link }}\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>
            </li>            
            {% endfor %}
        </ul>
        <ul  class=\"archives\">
                <h6><span class=\"label\">P</span>Poetiche</h6>

            {% for bibliography in page.taxonomy.bibliography if bibliography.Tipologia=='Poetica' %}
            <li>
                <span class=\"label label-border\"></span>
                <span class=\"text-uppercase\">
                    <a href=\"{{ blog.url|rtrim('/') }}/bibliography{{ config.system.param_sep }}{{ bibliography.Autore }}\">
                        {{ bibliography.Autore }}
                    </a>
                </span>,
                <span class=\"text-uppercase\">
                    <a href=\"{{ blog.url|rtrim('/') }}/bibliography{{ config.system.param_sep }}{{ bibliography.Data }}\">
                        {{ bibliography.Data }}
                    </a>
                </span>,
                <span class=\"text-em\">{{ bibliography.Titolo }}</span>
                <a href=\"{{ bibliography.Link }}\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>
            </li>            
            {% endfor %}
        </ul>
        <ul  class=\"archives\">
            <h6><span class=\"label\">S</span>Storiche</h6>
            {% for bibliography in page.taxonomy.bibliography|sort_by_key('Data') if bibliography.Tipologia=='Storica' %}
            <li>
                    <span class=\"label label-border\"></span>
                <span class=\"text-uppercase\">
                    <a href=\"{{ blog.url|rtrim('/') }}/bibliography{{ config.system.param_sep }}{{ bibliography.Autore }}\">
                        {{ bibliography.Autore }}
                    </a>
                </span>,
                <span class=\"\">{{ bibliography.Data }}</span>,
                <span class=\"text-em\">{{ bibliography.Titolo }}</span>
                <a href=\"{{ bibliography.Link }}\" target=\"_blank\">
                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                </a>
            </li>            
            {% endfor %}
        </ul>
        {% if config.plugins.comments.enabled %}
            {% include 'partials/comments.html.twig' %}
        {% endif %}

        {% set show_prev_next = true %}
    {% endif %}

    </div>
</div>
";
    }
}
