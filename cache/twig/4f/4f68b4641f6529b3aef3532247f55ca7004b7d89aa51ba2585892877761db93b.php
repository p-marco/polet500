<?php

/* feed.atom.twig */
class __TwigTemplate_297e1a07e609a0bbc3596a1e09ea75dbc3c0167688db8dd5ccda5a83966d01f4 extends Twig_Template
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
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</title>
    <link href=\"";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo ".";
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "extension", array(), "method");
        echo "\" rel=\"self\" />
    <subtitle>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "description", array());
        echo "</subtitle>
    <updated>";
        // line 7
        echo twig_date_format_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["collection"]) ? $context["collection"] : null)), "date", array()), "Y-m-d\\TH:i:sP");
        echo "</updated>
    <author>
        <name>";
        // line 9
        echo (($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array(), "any", false, true), "name", array()), "Grav User")) : ("Grav User"));
        echo "</name>
    </author>
    <id>";
        // line 11
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array(0 => true), "method");
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(), "method");
        echo "</id>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "    ";
            $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", array()), "images", array()));
            // line 14
            echo "    <entry>
        <title>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
            echo "</title>
        <id>";
            // line 16
            echo $this->getAttribute($context["item"], "url", array(0 => true), "method");
            echo "</id>
        <updated>";
            // line 17
            echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y-m-d\\TH:i:sP");
            echo "</updated>
        <published>";
            // line 18
            echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y-m-d\\TH:i:sP");
            echo "</published>
        <link href=\"";
            // line 19
            echo $this->getAttribute($context["item"], "url", array(0 => true), "method");
            echo "\"/>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 21
                echo "        <category term=\"";
                echo twig_lower_filter($this->env, $context["tag"]);
                echo "\" label=\"";
                echo twig_capitalize_string_filter($this->env, $context["tag"]);
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        <content type=\"html\">
            <![CDATA[
            ";
            // line 25
            if ((isset($context["banner"]) ? $context["banner"] : null)) {
                // line 26
                echo "            ";
                echo $this->getAttribute($this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "cropZoom", array(0 => 600, 1 => 400), "method"), "html", array());
                echo "
            ";
            }
            // line 28
            echo "            ";
            echo \Grav\Common\Utils::truncateHTML($this->getAttribute($context["item"], "summary", array()), $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "length", array()));
            echo "
            ]]>
        </content>
    </entry>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</feed>
";
    }

    public function getTemplateName()
    {
        return "feed.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  111 => 28,  105 => 26,  103 => 25,  99 => 23,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  61 => 14,  58 => 13,  54 => 12,  49 => 11,  44 => 9,  39 => 7,  35 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set collection = collection|default(page.collection) %}
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>{{ page.title }}</title>
    <link href=\"{{ page.url(true) }}.{{ uri.extension() }}\" rel=\"self\" />
    <subtitle>{{ collection.params.description }}</subtitle>
    <updated>{{ collection|first.date|date(\"Y-m-d\\\\TH:i:sP\") }}</updated>
    <author>
        <name>{{ site.author.name|default(\"Grav User\") }}</name>
    </author>
    <id>{{ uri.rootUrl(true) }}{{ uri.route() }}</id>
    {% for item in collection %}
    {% set banner = item.media.images|first %}
    <entry>
        <title>{{ item.title|e }}</title>
        <id>{{ item.url(true) }}</id>
        <updated>{{ item.date|date(\"Y-m-d\\\\TH:i:sP\") }}</updated>
        <published>{{ item.date|date(\"Y-m-d\\\\TH:i:sP\") }}</published>
        <link href=\"{{ item.url(true) }}\"/>
        {% for tag in item.taxonomy.tag %}
        <category term=\"{{ tag|lower }}\" label=\"{{ tag|capitalize }}\" />
        {% endfor %}
        <content type=\"html\">
            <![CDATA[
            {% if banner %}
            {{ banner.cropZoom(600,400).html }}
            {% endif %}
            {{ item.summary|truncate_html(collection.params.length) }}
            ]]>
        </content>
    </entry>
    {% endfor %}
</feed>
";
    }
}
