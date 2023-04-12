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

/* partials/footer.html.twig */
class __TwigTemplate_5682a61cb030e9fc978141618bb0048fecefddc6507a2f9df742734fcbcb088a extends \Twig\Template
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
        echo "<footer class=\"border-top\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                ";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_icons", [])) > 0)) {
            // line 6
            echo "                <ul class=\"list-inline text-center\">
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "social_icons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 8
                echo "                    <li class=\"list-inline-item\">
                        <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["icon"], "url", []), "html", null, true);
                echo "\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-stack-1x fa-inverse ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["icon"], "icon", []), "html", null, true);
                echo "\"></i>
                            </span>
                        </a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                </ul>
                ";
        }
        // line 19
        echo "                ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "copyright", [])) {
            // line 20
            echo "                <div class=\"small text-center text-muted fst-italic\">";
            echo $this->getAttribute(($context["theme_config"] ?? null), "copyright", []);
            echo "</div>
                ";
        }
        // line 22
        echo "            </div>
        </div>
    </div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  72 => 20,  69 => 19,  65 => 17,  54 => 12,  48 => 9,  45 => 8,  41 => 7,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"border-top\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                {% if theme_config.social_icons|length > 0 %}
                <ul class=\"list-inline text-center\">
                    {% for icon in theme_config.social_icons %}
                    <li class=\"list-inline-item\">
                        <a href=\"{{ icon.url }}\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-stack-1x fa-inverse {{ icon.icon }}\"></i>
                            </span>
                        </a>
                    </li>
                    {% endfor %}
                </ul>
                {% endif %}
                {% if theme_config.copyright %}
                <div class=\"small text-center text-muted fst-italic\">{{ theme_config.copyright|raw }}</div>
                {% endif %}
            </div>
        </div>
    </div>
</footer>

", "partials/footer.html.twig", "/home/esporteslogin/public_html/blog.esportesparacondominio.com.br/user/themes/clean-blog/templates/partials/footer.html.twig");
    }
}
