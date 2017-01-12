<?php

/* feed.rss.twig */
class __TwigTemplate_1b0f27a68e3b032ab3f42c910279b232bb3e6f841924a42d398abaaf7cf466e7 extends Twig_Template
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
        $context["collection"] = ((array_key_exists("collection", $context)) ? (_twig_default_filter((isset($context["collection"]) ? $context["collection"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array())));
        // line 2
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"2.0\">
    <channel>
        <title>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</title>
        <link>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo ".";
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "extension", array(), "method");
        echo "</link>
        <description>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "description", array());
        echo "</description>
        <language>";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "lang", array());
        echo "</language>
        <atom:link href=\"";
        // line 9
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "url", array(0 => true), "method");
        echo ".";
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "extension", array());
        echo "\" rel=\"self\" type=\"application/rss+xml\"/>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "        ";
            $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", array()), "images", array()));
            // line 12
            echo "        <item>
            <title>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
            echo "</title>
            <link>";
            // line 14
            echo $this->getAttribute($context["item"], "url", array(0 => true), "method");
            echo "</link>
            <description>
                <![CDATA[
                ";
            // line 17
            if ((isset($context["banner"]) ? $context["banner"] : null)) {
                // line 18
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->absoluteUrlFilter($this->getAttribute($this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "cropZoom", array(0 => 600, 1 => 400), "method"), "html", array()));
                echo "
                ";
            }
            // line 20
            echo "                ";
            echo \Grav\Common\Utils::truncateHTML($this->getAttribute($context["item"], "summary", array()), $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "length", array()));
            echo "
                ]]>
            </description>
            <category>";
            // line 23
            echo twig_join_filter($this->getAttribute($this->getAttribute($context["item"], "taxonomy", array()), "tag", array()), ",");
            echo "</category>
            <guid>";
            // line 24
            echo $this->getAttribute($context["item"], "url", array(0 => true), "method");
            echo "</guid>
            <pubDate>";
            // line 25
            echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "D, d M Y H:i:s O");
            echo "</pubDate>
        </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "feed.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  93 => 25,  89 => 24,  85 => 23,  78 => 20,  72 => 18,  70 => 17,  64 => 14,  60 => 13,  57 => 12,  54 => 11,  50 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set collection = collection|default(page.collection) %}
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"2.0\">
    <channel>
        <title>{{ page.title }}</title>
        <link>{{ page.url(true) }}.{{ uri.extension() }}</link>
        <description>{{ collection.params.description }}</description>
        <language>{{ collection.params.lang }}</language>
        <atom:link href=\"{{ uri.url(true) }}.{{  uri.extension }}\" rel=\"self\" type=\"application/rss+xml\"/>
        {% for item in collection %}
        {% set banner = item.media.images|first %}
        <item>
            <title>{{ item.title|e }}</title>
            <link>{{ item.url(true) }}</link>
            <description>
                <![CDATA[
                {% if banner %}
                {{ banner.cropZoom(600,400).html|absolute_url }}
                {% endif %}
                {{ item.summary|truncate_html(collection.params.length) }}
                ]]>
            </description>
            <category>{{ item.taxonomy.tag|join(',') }}</category>
            <guid>{{ item.url(true) }}</guid>
            <pubDate>{{ item.date|date('D, d M Y H:i:s O') }}</pubDate>
        </item>
        {% endfor %}
    </channel>
</rss>
";
    }
}
