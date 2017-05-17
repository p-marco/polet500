<?php

/* item.html.twig */
class __TwigTemplate_cb067c3c62d19d61458782a9e19a2b3bf52b2fd861554f4fa42801e9c6dca570 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1752344345")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

\t<div class=\"blog-content-item content-wrapper content-focus\">
\t\t\t

\t\t\t\t<!--{% for tag in page.taxonomy.tag %}
            <span class=\"tags\">
                <a href=\"{{ new_base_url|rtrim('/') }}/char{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
                <span class=\"\">{{ tag }}</span>
                </a>
            </span>
            {% endfor %}-->


\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t</div>
<br>
<div class=\"content-wrapper content-focus\" style=\" font-family:'Quattrocento';\" id=\"credits\">
\t<p>
\tLa scheda <em>{{ page.header.title }}</em> è stata redatta da <em>{{ page.header.taxonomy.author }}</em> in data <em>{{ page.header.taxonomy.date }}</em> per il sito <em>{{ config.site.title }} </em>. <br>
\tPer citare la scheda si prega di indicare l'autore, la data ed il sito. <br>
\tDocumento rilasciato con licenza  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\">Creative Commons Attribution 4.0 International License</a>.
\t</p>
\t<p>
\t<span class=\"tags\"><a href=\"{{ page.url }}.json\">Esporta scheda JSON</a></span>
\t<!--<span class=\"tags\"><a href=\"#\">Esporta citazione Bib </a></span>-->
\t<span class=\"tags\"><a href=\"{{ site.url }}/polet500/schede/author:{{ page.taxonomy.author.0 }}\">Vedi le altre schede dell'autore </a></span>
\t</p>
</div>
<br>
<div class=\"content-wrapper table-container\" style=\"max-width:920px; margin:0 auto\">
\t<div class=\"table-col\" style=\"text-align:center\" id=\"tagList\">
\t\t<div class=\"avatar-184\" style=\"background-image: url('{{ base_url }}/assets/img/tags.jpg'); \"></div>
    \t<h4>{{ 'Argomenti'|t }}</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto;\">
    \t{% for tag in page.taxonomy.tag  %}
            <span class=\"tags\">
                <a href=\"{{ site.url }}/polet500/schede/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
               \t\t<span class=\"\">{{ tag }}</span>
                </a>
            </span>
        {% endfor %}
\t</div>
\t</div>
\t<div class=\"table-col\" style=\"text-align:center\" id=\"charList\">
\t\t<div class=\"avatar-184\" style=\" background-image: url('{{ base_url }}/assets/img/char.jpg');\"></div>
    \t<h4>{{ 'Personaggi'|t }}</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto; \">
    \t{% for char in page.taxonomy.char  %}
            <span class=\"tags\">
                <a href=\"{{ site.url }}/polet500/schede/char{{ config.system.param_sep }}{{ char }}\" class=\"p-category\">
               \t\t<span class=\"\">{{ char }}</span>
                </a>
            </span>
        {% endfor %}
\t</div>
\t</div>
</div>
</div>
</div>
<br>
<div id=\"refList\">
    {% include \"partials/bibliography_table.html.twig\" %}
</div>
<br>

 

\t\t{% include \"blog_utils.html.twig\" %}
\t\t{% include \"partials/navigation_secundary.html.twig\" %}


\t{% endblock %}

{% endembed %}
";
    }
}


/* item.html.twig */
class __TwigTemplate_cb067c3c62d19d61458782a9e19a2b3bf52b2fd861554f4fa42801e9c6dca570_1752344345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $context["feed_url"] = (((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/") || ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null)))) ? ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "slug", array()))) : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 5
        $context["new_base_url"] = ((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 6
        echo "
\t<div class=\"blog-content-item content-wrapper content-focus\">
\t\t\t

\t\t\t\t<!--";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 11
            echo "            <span class=\"tags\">
                <a href=\"";
            // line 12
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["new_base_url"]) ? $context["new_base_url"] : null), "/");
            echo "/char";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["tag"];
            echo "\" class=\"p-category\">
                <span class=\"\">";
            // line 13
            echo $context["tag"];
            echo "</span>
                </a>
            </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "-->


\t\t\t    ";
        // line 19
        $this->loadTemplate("partials/blog_item.html.twig", null, 19)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 20
        echo "\t\t\t</div>
\t\t</div>
<br>
<div class=\"content-wrapper content-focus\" style=\" font-family:'Quattrocento';\" id=\"credits\">
\t<p>
\tLa scheda <em>";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</em> è stata redatta da <em>";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array());
        echo "</em> in data <em>";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "date", array());
        echo "</em> per il sito <em>";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo " </em>. <br>
\tPer citare la scheda si prega di indicare l'autore, la data ed il sito. <br>
\tDocumento rilasciato con licenza  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\">Creative Commons Attribution 4.0 International License</a>.
\t</p>
\t<p>
\t<span class=\"tags\"><a href=\"";
        // line 30
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo ".json\">Esporta scheda JSON</a></span>
\t<!--<span class=\"tags\"><a href=\"#\">Esporta citazione Bib </a></span>-->
\t<span class=\"tags\"><a href=\"";
        // line 32
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
        echo "/polet500/schede/author:";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "author", array()), 0, array());
        echo "\">Vedi le altre schede dell'autore </a></span>
\t</p>
</div>
<br>
<div class=\"content-wrapper table-container\" style=\"max-width:920px; margin:0 auto\">
\t<div class=\"table-col\" style=\"text-align:center\" id=\"tagList\">
\t\t<div class=\"avatar-184\" style=\"background-image: url('";
        // line 38
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/tags.jpg'); \"></div>
    \t<h4>";
        // line 39
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Argomenti");
        echo "</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto;\">
    \t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 43
            echo "            <span class=\"tags\">
                <a href=\"";
            // line 44
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
            echo "/polet500/schede/tag";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["tag"];
            echo "\" class=\"p-category\">
               \t\t<span class=\"\">";
            // line 45
            echo $context["tag"];
            echo "</span>
                </a>
            </span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t</div>
\t</div>
\t<div class=\"table-col\" style=\"text-align:center\" id=\"charList\">
\t\t<div class=\"avatar-184\" style=\" background-image: url('";
        // line 52
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/char.jpg');\"></div>
    \t<h4>";
        // line 53
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Personaggi");
        echo "</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto; \">
    \t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "char", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["char"]) {
            // line 57
            echo "            <span class=\"tags\">
                <a href=\"";
            // line 58
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
            echo "/polet500/schede/char";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["char"];
            echo "\" class=\"p-category\">
               \t\t<span class=\"\">";
            // line 59
            echo $context["char"];
            echo "</span>
                </a>
            </span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['char'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t</div>
\t</div>
</div>
</div>
</div>
<br>
<div id=\"refList\">
    ";
        // line 70
        $this->loadTemplate("partials/bibliography_table.html.twig", null, 70)->display($context);
        // line 71
        echo "</div>
<br>

 

\t\t";
        // line 76
        $this->loadTemplate("blog_utils.html.twig", null, 76)->display($context);
        // line 77
        echo "\t\t";
        $this->loadTemplate("partials/navigation_secundary.html.twig", null, 77)->display($context);
        // line 78
        echo "

\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 78,  320 => 77,  318 => 76,  311 => 71,  309 => 70,  300 => 63,  290 => 59,  283 => 58,  280 => 57,  276 => 56,  270 => 53,  266 => 52,  261 => 49,  251 => 45,  244 => 44,  241 => 43,  237 => 42,  231 => 39,  227 => 38,  216 => 32,  211 => 30,  197 => 25,  190 => 20,  188 => 19,  183 => 16,  173 => 13,  166 => 12,  163 => 11,  159 => 10,  153 => 6,  151 => 5,  148 => 4,  145 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

\t<div class=\"blog-content-item content-wrapper content-focus\">
\t\t\t

\t\t\t\t<!--{% for tag in page.taxonomy.tag %}
            <span class=\"tags\">
                <a href=\"{{ new_base_url|rtrim('/') }}/char{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
                <span class=\"\">{{ tag }}</span>
                </a>
            </span>
            {% endfor %}-->


\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t</div>
<br>
<div class=\"content-wrapper content-focus\" style=\" font-family:'Quattrocento';\" id=\"credits\">
\t<p>
\tLa scheda <em>{{ page.header.title }}</em> è stata redatta da <em>{{ page.header.taxonomy.author }}</em> in data <em>{{ page.header.taxonomy.date }}</em> per il sito <em>{{ config.site.title }} </em>. <br>
\tPer citare la scheda si prega di indicare l'autore, la data ed il sito. <br>
\tDocumento rilasciato con licenza  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\">Creative Commons Attribution 4.0 International License</a>.
\t</p>
\t<p>
\t<span class=\"tags\"><a href=\"{{ page.url }}.json\">Esporta scheda JSON</a></span>
\t<!--<span class=\"tags\"><a href=\"#\">Esporta citazione Bib </a></span>-->
\t<span class=\"tags\"><a href=\"{{ site.url }}/polet500/schede/author:{{ page.taxonomy.author.0 }}\">Vedi le altre schede dell'autore </a></span>
\t</p>
</div>
<br>
<div class=\"content-wrapper table-container\" style=\"max-width:920px; margin:0 auto\">
\t<div class=\"table-col\" style=\"text-align:center\" id=\"tagList\">
\t\t<div class=\"avatar-184\" style=\"background-image: url('{{ base_url }}/assets/img/tags.jpg'); \"></div>
    \t<h4>{{ 'Argomenti'|t }}</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto;\">
    \t{% for tag in page.taxonomy.tag  %}
            <span class=\"tags\">
                <a href=\"{{ site.url }}/polet500/schede/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
               \t\t<span class=\"\">{{ tag }}</span>
                </a>
            </span>
        {% endfor %}
\t</div>
\t</div>
\t<div class=\"table-col\" style=\"text-align:center\" id=\"charList\">
\t\t<div class=\"avatar-184\" style=\" background-image: url('{{ base_url }}/assets/img/char.jpg');\"></div>
    \t<h4>{{ 'Personaggi'|t }}</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto; \">
    \t{% for char in page.taxonomy.char  %}
            <span class=\"tags\">
                <a href=\"{{ site.url }}/polet500/schede/char{{ config.system.param_sep }}{{ char }}\" class=\"p-category\">
               \t\t<span class=\"\">{{ char }}</span>
                </a>
            </span>
        {% endfor %}
\t</div>
\t</div>
</div>
</div>
</div>
<br>
<div id=\"refList\">
    {% include \"partials/bibliography_table.html.twig\" %}
</div>
<br>

 

\t\t{% include \"blog_utils.html.twig\" %}
\t\t{% include \"partials/navigation_secundary.html.twig\" %}


\t{% endblock %}

{% endembed %}
";
    }
}
