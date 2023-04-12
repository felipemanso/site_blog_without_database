<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* error.html.twig */
class __TwigTemplate_7cf32ed9c3b5acbf04013996d54ac2d6e596167a09111d65b65e2146f79251bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        // line 4
        if ($this->getAttribute(($context["theme_config"] ?? null), "error_header_image", [])) {
            // line 5
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://img/" . $this->getAttribute(($context["theme_config"] ?? null), "error_header_image", [])))) . "')\"");
        } else {
            // line 7
            echo "    ";
            $context["style"] = "";
        }
        // line 9
        echo "
<header class=\"intro-header\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"page-heading\">
                    <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "ERROR"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </div>
</header>
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        // line 24
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  80 => 24,  77 => 23,  64 => 15,  56 => 10,  53 => 9,  49 => 7,  45 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block header %}
{% if theme_config.error_header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ url('theme://img/' ~ theme_config.error_header_image)  ~ '\\')\"' %}
{% else %}
    {% set style = '' %}
{% endif %}

<header class=\"intro-header\"{{ style }}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"page-heading\">
                    <h1>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h1>
                </div>
            </div>
        </div>
    </div>
</header>
{% endblock %}

{% block content %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center\">
            {{ page.content }}
        </div>
    </div>
</div>
{% endblock %}
", "error.html.twig", "/home/esporteslogin/public_html/blog.esportesparacondominio.com.br/user/themes/clean-blog/templates/error.html.twig");
    }
}
