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

/* partials/head.html.twig */
class __TwigTemplate_9116e72e1a471aa32ea3d9817dfd421f160aef887fb12412f2dfdfd427dd2855 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 6
            echo "    ";
            if (($this->getAttribute($context["meta"], "name", []) != "generator")) {
                // line 7
                echo "    <meta ";
                if ($this->getAttribute($context["meta"], "name", [])) {
                    echo "name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "name", []), "html", null, true);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                    echo "http-equiv=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "http_equiv", []), "html", null, true);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "charset", [])) {
                    echo "charset=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "charset", []), "html", null, true);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "property", [])) {
                    echo "property=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "property", []), "html", null, true);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "content", [])) {
                    echo "content=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "content", []), "html", null, true);
                    echo "\" ";
                }
                echo "/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute(($context["theme_config"] ?? null), "favicon", []) != "")) {
            // line 12
            echo "<link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://img/" . $this->getAttribute(($context["theme_config"] ?? null), "favicon", [])), true), "html", null, true);
            echo "\" />
";
        }
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 16
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
";
        }
        // line 18
        echo "
<title>";
        // line 19
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        }
        echo "</title>

";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
";
        // line 34
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
        // line 37
        if (($context["base_url"] ?? null)) {
            // line 38
            echo "    ";
            $context["site_url"] = twig_replace_filter(($context["base_url_absolute"] ?? null), [($context["base_url"] ?? null) => ""]);
        } else {
            // line 40
            echo "    ";
            $context["site_url"] = ($context["base_url_absolute"] ?? null);
        }
        // line 42
        echo "
";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", [])) {
            // line 44
            echo "    ";
            $context["og_image"] = (($context["site_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), [], "array"), "cache", []), "url", [], "method"));
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 45
($context["page"] ?? null), "media", []), "images", [])) > 0)) {
            // line 46
            echo "    ";
            $context["og_image"] = (($context["site_url"] ?? null) . $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cache", []), "url", [], "method"));
        } else {
            // line 48
            echo "    ";
            $context["og_image"] = "";
        }
        // line 50
        echo "
<meta property=\"og:url\" content=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
        echo "\" />
<meta property=\"og:title\" content=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html_attr");
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "metadata", []), "description", []), "html_attr");
        echo "\" />
";
        // line 54
        if ( !twig_test_empty(($context["og_image"] ?? null))) {
            // line 55
            echo "<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, ($context["og_image"] ?? null), "html", null, true);
            echo "\" />
";
        }
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"], "method");
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"], "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/styles.css"], "method");
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://use.fontawesome.com/releases/v6.1.0/js/all.js"], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", 1 => ["group" => "bottom"]], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/scripts.js", 1 => ["group" => "bottom"]], "method");
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 30,  205 => 29,  202 => 28,  199 => 27,  194 => 24,  191 => 23,  188 => 22,  185 => 21,  177 => 55,  175 => 54,  171 => 53,  167 => 52,  163 => 51,  160 => 50,  156 => 48,  152 => 46,  150 => 45,  147 => 44,  145 => 43,  142 => 42,  138 => 40,  134 => 38,  132 => 37,  127 => 34,  123 => 33,  120 => 32,  118 => 27,  115 => 26,  113 => 21,  104 => 19,  101 => 18,  95 => 16,  93 => 15,  90 => 14,  84 => 12,  82 => 11,  79 => 10,  45 => 7,  42 => 6,  38 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

{% for meta in page.metadata %}
    {% if meta.name != 'generator' %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endif %}
{% endfor %}

{% if theme_config.favicon != '' %}
<link rel=\"icon\" href=\"{{ url('theme://img/' ~ theme_config.favicon, true) }}\" />
{% endif %}

{% if header.robots %}
<meta name=\"robots\" content=\"{{ header.robots }}\">
{% endif %}

<title>{% if header.title %}{{ header.title }}{% else %}{{ site.title }}{% endif %}</title>

{% block stylesheets %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') %}
    {% do assets.addCss('theme://css/styles.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('https://use.fontawesome.com/releases/v6.1.0/js/all.js') %}
    {% do assets.addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/scripts.js', {group:'bottom'}) %}
{% endblock %}

{{ assets.css()|raw }}
{{ assets.js()|raw }}

{# Site URL is not correct if Grav is in subfolder #}
{% if base_url %}
    {% set site_url = base_url_absolute|replace({(base_url): ''}) %}
{% else %}
    {% set site_url = base_url_absolute %}
{% endif %}

{% if page.header.header_image %}
    {% set og_image = site_url ~  page.media.images[page.header.header_image].cache.url() %}
{% elseif page.media.images|length > 0 %}
    {% set og_image = site_url ~  page.media.images|first.cache.url() %}
{% else %}
    {% set og_image = '' %}
{% endif %}

<meta property=\"og:url\" content=\"{{ page.url(true) }}\" />
<meta property=\"og:title\" content=\"{{ page.title|e('html_attr') }}\" />
<meta property=\"og:description\" content=\"{{ page.header.metadata.description|e('html_attr') }}\" />
{% if og_image is not empty %}
<meta property=\"og:image\" content=\"{{ og_image }}\" />
{% endif %}
", "partials/head.html.twig", "/home/esporteslogin/public_html/blog.esportesparacondominio.com.br/user/themes/clean-blog/templates/partials/head.html.twig");
    }
}
