<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_ec584808b8ca6da461f1b3c4f57d499f0a5e7fff7b35b86e18e625584d07a55b extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/") || ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null)))) ? ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "slug", array()))) : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "author", array())) {
            // line 5
            echo "<h3>Scheda</h3>

        <ul class=\"archives\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "author", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 9
                echo "            <li>
                <span class=\"label\"></span>
                <span class=\"\">Autore: </span>
                <a href=\"";
                // line 12
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/author";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["author"];
                echo "\" class=\"p-category\">
                <span class=\"\">";
                // line 13
                echo $context["author"];
                echo "</span>
                </a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "date", array())) {
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "date", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 20
                echo "    <li>
                <span class=\"label\"></span>
                <span class=\"\">Data: </span>
                <a href=\"";
                // line 23
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/date";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["date"];
                echo "\" class=\"p-category\">
                <span class=\"\">";
                // line 24
                echo $context["date"];
                echo "</span>
                </a>
            </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "

    
    <li>
        <span class=\"label\"></span>
        <span>Esporta: <a class=\"\" href=\"";
            // line 33
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo ".json\"> JSON</a></span>
    </li>
   </ul>
<hr>
";
        }
        // line 38
        echo "

        ";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "chronology", array())) {
            // line 41
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "chronology", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["chronology"]) {
                // line 42
                echo "                <h4>";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Cronologia");
                echo "</h4> 
                <ul class=\"archives\">
                    <li>
                        <a href=\"";
                // line 45
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/chronology";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["chronology"];
                echo "\" class=\"p-category\">
                            <span class=\"label\"></span>
                            <span class=\"\">";
                // line 47
                echo $context["chronology"];
                echo "</span>
                        </a>
                    </li>
                        
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chronology'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        }
        // line 54
        echo "
<!--TOFIX: al piu presto rendere dinamica questa parte-->

";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 58
            echo "
<div class=\"sidebar-content\">
    <h4>";
            // line 60
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Argomenti");
            echo "</h4> 
    ";
            // line 61
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
                // line 62
                echo "        <ul  class=\"archives\">
            ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 64
                    echo "            <li>
                <a href=\"";
                    // line 65
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/tag";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $context["tag"];
                    echo "\" class=\"p-category\">
                    <span class=\"label\"></span>
                    <span class=\"\">";
                    // line 67
                    echo $context["tag"];
                    echo "</span>
                </a>
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </ul>
         ";
            } else {
                // line 72
                echo "         
    ";
                // line 73
                $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 73)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag")));
                // line 74
                echo "            ";
            }
            // line 75
            echo "    <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Personaggi");
            echo "</h4> 
 ";
            // line 76
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "char", array())) {
                // line 77
                echo "        <ul  class=\"archives\">
            ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "char", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["char"]) {
                    // line 79
                    echo "            <li>
                <a href=\"";
                    // line 80
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                    echo "/char";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $context["char"];
                    echo "\" class=\"p-category\">
                <span class=\"label\"></span>
                <span class=\"\">";
                    // line 82
                    echo $context["char"];
                    echo "</span>
                </a>
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['char'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "        </ul>
         ";
            } else {
                // line 87
                echo "         
    ";
                // line 88
                $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 88)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "char")));
                // line 89
                echo "            ";
            }
            // line 90
            echo " 
            </div>
<hr>
";
        }
        // line 94
        echo "
<!--/ENDTOFIX-->
";
        // line 96
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 97
            echo "<div class=\"\">
    <h4>";
            // line 98
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Archivio");
            echo "</h4>
    ";
            // line 99
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 99)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null))));
            // line 100
            echo "</div>
";
        }
        // line 102
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 103
            echo "<div class=\"\">
    <h5>";
            // line 104
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Cerca");
            echo "</h5>
    ";
            // line 105
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 105)->display($context);
            // line 106
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 106,  283 => 105,  279 => 104,  276 => 103,  274 => 102,  270 => 100,  268 => 99,  264 => 98,  261 => 97,  259 => 96,  255 => 94,  249 => 90,  246 => 89,  244 => 88,  241 => 87,  237 => 86,  227 => 82,  219 => 80,  216 => 79,  212 => 78,  209 => 77,  207 => 76,  202 => 75,  199 => 74,  197 => 73,  194 => 72,  190 => 71,  180 => 67,  172 => 65,  169 => 64,  165 => 63,  162 => 62,  160 => 61,  156 => 60,  152 => 58,  150 => 57,  145 => 54,  142 => 53,  130 => 47,  122 => 45,  115 => 42,  110 => 41,  108 => 40,  104 => 38,  96 => 33,  89 => 28,  79 => 24,  72 => 23,  67 => 20,  62 => 19,  60 => 18,  49 => 13,  42 => 12,  37 => 9,  33 => 8,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if page.taxonomy.author %}
<h3>Scheda</h3>

        <ul class=\"archives\">
            {% for author in page.taxonomy.author %}
            <li>
                <span class=\"label\"></span>
                <span class=\"\">Autore: </span>
                <a href=\"{{ blog.url|rtrim('/') }}/author{{ config.system.param_sep }}{{ author }}\" class=\"p-category\">
                <span class=\"\">{{ author }}</span>
                </a>
            </li>
            {% endfor %}
{% endif %}
{% if page.taxonomy.date %}
    {% for date in page.taxonomy.date %}
    <li>
                <span class=\"label\"></span>
                <span class=\"\">Data: </span>
                <a href=\"{{ blog.url|rtrim('/') }}/date{{ config.system.param_sep }}{{ date }}\" class=\"p-category\">
                <span class=\"\">{{ date }}</span>
                </a>
            </li>
    {% endfor %}


    
    <li>
        <span class=\"label\"></span>
        <span>Esporta: <a class=\"\" href=\"{{ page.url }}.json\"> JSON</a></span>
    </li>
   </ul>
<hr>
{% endif %}


        {% if page.taxonomy.chronology %}
            {% for chronology in page.taxonomy.chronology %}
                <h4>{{ 'Cronologia'|t }}</h4> 
                <ul class=\"archives\">
                    <li>
                        <a href=\"{{ blog.url|rtrim('/') }}/chronology{{ config.system.param_sep }}{{ chronology }}\" class=\"p-category\">
                            <span class=\"label\"></span>
                            <span class=\"\">{{ chronology }}</span>
                        </a>
                    </li>
                        
                </ul>
            {% endfor %}
        {% endif %}

<!--TOFIX: al piu presto rendere dinamica questa parte-->

{% if config.plugins.taxonomylist.enabled %}

<div class=\"sidebar-content\">
    <h4>{{ 'Argomenti'|t }}</h4> 
    {% if page.taxonomy.tag %}
        <ul  class=\"archives\">
            {% for tag in page.taxonomy.tag  %}
            <li>
                <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
                    <span class=\"label\"></span>
                    <span class=\"\">{{ tag }}</span>
                </a>
            </li>
            {% endfor %}
        </ul>
         {% else %}         
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
            {% endif %}
    <h4>{{ 'Personaggi'|t }}</h4> 
 {% if page.taxonomy.char %}
        <ul  class=\"archives\">
            {% for char in page.taxonomy.char %}
            <li>
                <a href=\"{{ blog.url|rtrim('/') }}/char{{ config.system.param_sep }}{{ char }}\" class=\"p-category\">
                <span class=\"label\"></span>
                <span class=\"\">{{ char }}</span>
                </a>
            </li>
            {% endfor %}
        </ul>
         {% else %}         
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'char'} %}
            {% endif %}
 
            </div>
<hr>
{% endif %}

<!--/ENDTOFIX-->
{% if config.plugins.archives.enabled %}
<div class=\"\">
    <h4>{{ 'Archivio'|t }}</h4>
    {% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}
{% if config.plugins.simplesearch.enabled %}
<div class=\"\">
    <h5>{{ 'Cerca'|t }}</h5>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
";
    }
}
