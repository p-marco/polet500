<?php

/* sitemap.xml.twig */
class __TwigTemplate_762dda4586304a7302e491202fe9cfe2aa85f2925d0ff00d5b3f14e1628ba575 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<?xml-stylesheet type=\"text/xsl\" href=\"";
        // line 2
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array());
        echo "/user/plugins/sitemap/sitemap.xsl\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitemap"]) ? $context["sitemap"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "    <url>
        <loc>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "location", array()));
            echo "</loc>
        <lastmod>";
            // line 7
            echo $this->getAttribute($context["entry"], "lastmod", array());
            echo "</lastmod>
        ";
            // line 8
            if ($this->getAttribute($context["entry"], "changefreq", array())) {
                // line 9
                echo "        <changefreq>";
                echo $this->getAttribute($context["entry"], "changefreq", array());
                echo "</changefreq>
        ";
            }
            // line 11
            echo "        ";
            if ($this->getAttribute($context["entry"], "priority", array())) {
                // line 12
                echo "        <priority>";
                echo twig_number_format_filter($this->env, $this->getAttribute($context["entry"], "priority", array()), 1);
                echo "</priority>
        ";
            }
            // line 14
            echo "    </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</urlset>
";
    }

    public function getTemplateName()
    {
        return "sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  59 => 14,  53 => 12,  50 => 11,  44 => 9,  42 => 8,  38 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<?xml-stylesheet type=\"text/xsl\" href=\"{{ uri.rootUrl }}/user/plugins/sitemap/sitemap.xsl\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% for entry in sitemap %}
    <url>
        <loc>{{ entry.location|e }}</loc>
        <lastmod>{{ entry.lastmod }}</lastmod>
        {% if entry.changefreq %}
        <changefreq>{{ entry.changefreq }}</changefreq>
        {% endif %}
        {% if entry.priority %}
        <priority>{{ entry.priority|number_format(1) }}</priority>
        {% endif %}
    </url>
    {% endfor %}
</urlset>
";
    }
}
