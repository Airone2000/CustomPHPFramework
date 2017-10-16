<?php

/* inc/page-top.html.twig */
class __TwigTemplate_74f718cdf109a122131203d297d6ebd89447c279d45763f57fcf86e6ab95c9f7 extends Twig_Template
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
        echo "<header class=\"intro-header\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, ((($context["base_uri"] ?? null) . "/") . ($context["img"] ?? null)), "html", null, true);
        echo "')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
                    <hr class=\"small\">
                    <span class=\"subheading\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "inc/page-top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  28 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "inc/page-top.html.twig", "/Users/Erwan/Documents/Mamp_www/blog/view/inc/page-top.html.twig");
    }
}
