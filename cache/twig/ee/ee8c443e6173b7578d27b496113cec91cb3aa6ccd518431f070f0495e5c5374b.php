<?php

/* partials/navigation_secundary.html.twig */
class __TwigTemplate_e76777281a805a8de6bfd0076c4bec4ec435c2fc40f969ce0594416be3730e5b extends Twig_Template
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
        echo "    <a href=\"#scheda-nav\" id=\"nav-trigger-2\" class=\"toggle-nav callTo-secundary\">
        <span id=\"label-toggle--scheda-nav\">
            <i class=\"fa fa-plus\"></i><br>
            <small style=\"font-size:9px\">SCHEDA</small>
        </span>
    </a>
<header class=\"navigation-bar\" id=\"scheda-nav\">
<br>
<div class=\"content-wrapper text-serif\">
    <div class=\"table-container\">
        <div class=\"table-row-heading no-bg\">
            <div class=\"table-col\">
                <a href=\"#content\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-file-text-o\"></i></span>
                    <span class=\"mitem-legend\">Sinossi</span>
                </a>
            </div>
            <div class=\"table-col\">
                <a href=\"#charList\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-users\"></i></span>
                    <span class=\"mitem-legend\">Personaggi</span>
                </a>
            </div>
            <div class=\"table-col\">
                <a href=\"#tagList\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-tags\"></i></span>
                    <span class=\"mitem-legend\">Argomenti</span>
                </a>
            </div>
            <div class=\"table-col\">
                <a href=\"#refList\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-book\"></i></span>
                    <span class=\"mitem-legend\">Riferimenti</span>
                </a>
            </div>
            <div class=\"table-col\">
                <a href=\"#credits\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-quote-left\"></i></span>
                    <span class=\"mitem-legend\">Info</span>
                </a>
                </div>
            <div class=\"table-col\">
                <a href=\"#";
        // line 43
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()), "date", array());
        echo "-share\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-share-alt\"></i></span>
                    <span class=\"mitem-legend\">Share</span>
                </a>
            </div>
            <div class=\"table-col\"><a href=\"#nav-trigger-2\" id=\"label-toggle--scheda-nav\"><i class=\"label fa fa-close\"></i> Close</a></div>
            
        </div>
    </div>
</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation_secundary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 43,  19 => 1,);
    }

    public function getSource()
    {
        return "    <a href=\"#scheda-nav\" id=\"nav-trigger-2\" class=\"toggle-nav callTo-secundary\">
        <span id=\"label-toggle--scheda-nav\">
            <i class=\"fa fa-plus\"></i><br>
            <small style=\"font-size:9px\">SCHEDA</small>
        </span>
    </a>
<header class=\"navigation-bar\" id=\"scheda-nav\">
<br>
<div class=\"content-wrapper text-serif\">
    <div class=\"table-container\">
        <div class=\"table-row-heading no-bg\">
            <div class=\"table-col\">
                <a href=\"#content\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-file-text-o\"></i></span>
                    <span class=\"mitem-legend\">Sinossi</span>
                </a>
            </div>
            <div class=\"table-col\">
                <a href=\"#charList\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-users\"></i></span>
                    <span class=\"mitem-legend\">Personaggi</span>
                </a>
            </div>
            <div class=\"table-col\">
                <a href=\"#tagList\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-tags\"></i></span>
                    <span class=\"mitem-legend\">Argomenti</span>
                </a>
            </div>
            <div class=\"table-col\">
                <a href=\"#refList\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-book\"></i></span>
                    <span class=\"mitem-legend\">Riferimenti</span>
                </a>
            </div>
            <div class=\"table-col\">
                <a href=\"#credits\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-quote-left\"></i></span>
                    <span class=\"mitem-legend\">Info</span>
                </a>
                </div>
            <div class=\"table-col\">
                <a href=\"#{{ page.metadata.date }}-share\">
                    <span class=\"icon-bg\"><i class=\"label-bg fa fa-share-alt\"></i></span>
                    <span class=\"mitem-legend\">Share</span>
                </a>
            </div>
            <div class=\"table-col\"><a href=\"#nav-trigger-2\" id=\"label-toggle--scheda-nav\"><i class=\"label fa fa-close\"></i> Close</a></div>
            
        </div>
    </div>
</div>
</header>
";
    }
}
