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

/* partials/header.html.twig */
class __TwigTemplate_6abc85de50ca31049b8dcf045475ca09bdca77527e385b7d3747deec9ca4990d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", [])) {
            // line 2
            echo "  ";
            $context["image_url"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), [], "array"), "cache", []), "url", [], "method");
            // line 3
            echo " ";
        } elseif ($this->getAttribute(($context["theme_config"] ?? null), "default_header_image", [])) {
            // line 4
            echo "   ";
            $context["image_url"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://img/" . $this->getAttribute(($context["theme_config"] ?? null), "default_header_image", [])));
            // line 5
            echo " ";
        } else {
            // line 6
            echo "     ";
            $context["image_url"] = "";
            // line 7
            echo " ";
        }
        // line 8
        echo "

<header class=\"masthead\" style=\"background-image: url('";
        // line 10
        echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
        echo "');\">
    <div class=\"container position-relative px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <div class=\"site-heading\">
                    <h1>PlayHouse</h1>
                    <span class=\"subheading\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subheading", []), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  55 => 10,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" {% if page.header.header_image %}
  {% set image_url = page.media.images[page.header.header_image].cache.url() %}
 {% elseif theme_config.default_header_image %}
   {% set image_url = url('theme://img/' ~ theme_config.default_header_image) %}
 {% else %}
     {% set image_url = '' %}
 {% endif %}


<header class=\"masthead\" style=\"background-image: url('{{ image_url }}');\">
    <div class=\"container position-relative px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <div class=\"site-heading\">
                    <h1>PlayHouse</h1>
                    <span class=\"subheading\">{{ page.header.subheading }}</span>
                </div>
            </div>
        </div>
    </div>
</header>", "partials/header.html.twig", "/home/esporteslogin/public_html/blog.esportesparacondominio.com.br/user/themes/clean-blog/templates/partials/header.html.twig");
    }
}
