<?php

/* partials/navigation_items.html.twig */
class __TwigTemplate_f4ea050efd3452d3b33738a5f23303d3af344e8eebff12aa8dd6e87812fb22d0 extends Twig_Template
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
        echo "
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 3
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 6
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 7
                echo "            <div class=\"table-col ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                ";
                // line 8
                if ((isset($context["label"]) ? $context["label"] : null)) {
                    echo "<span class=\"label\"></span>";
                }
                // line 9
                echo "                <a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 10
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    // line 11
                    echo "                        <span class=\"icon-bg\">
                            <i class=\"label-bg fa ";
                    // line 12
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>
                        </span>
                    ";
                }
                // line 15
                echo "                    <span class=\"mitem-legend\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</span>
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/navigation_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  63 => 15,  57 => 12,  54 => 11,  52 => 10,  47 => 9,  43 => 8,  38 => 7,  35 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <div class=\"table-col {{ current_page }}\">
                {% if label %}<span class=\"label\"></span>{% endif %}
                <a href=\"{{ page.url }}\">
                    {% if page.header.icon %}
                        <span class=\"icon-bg\">
                            <i class=\"label-bg fa {{ page.header.icon }}\"></i>
                        </span>
                    {% endif %}
                    <span class=\"mitem-legend\">{{ page.menu }}</span>
                </a>
            </div>
        {% endfor %}

    {% endif %}
";
    }
}
