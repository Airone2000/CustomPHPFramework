<?php

/* blog/view.html.twig */
class __TwigTemplate_97eec31afa4d3f2629381cba6395c8d7bb20e5cba211313fa479b5c7709f2e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/base-layout.html.twig", "blog/view.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("inc/main-header.html.twig", "blog/view.html.twig", 5)->display(array_merge($context, array("title" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
($context["blogpost"] ?? null), "title", array()), "subtitle" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 7
($context["blogpost"] ?? null), "header", array()), "img" => "asset/img/core-head.png")));
        // line 10
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
    <div id=\"viewpost\" class=\"container\">
        <div class=\"row\">

            <blockquote class=\"text-center\"><small>Proudly written by ";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "author", array()), "username", array()) . " on ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "publishing_date", array()))), "html", null, true);
        echo "
                ";
        // line 19
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "editingDate", array())) {
            // line 20
            echo "                    | Lastly edited on ";
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "editingDate", array())) . " by ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "author", array()), "username", array())), "html", null, true);
            echo "
                ";
        }
        // line 22
        echo "            </small></blockquote>

            <p>
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
        echo "/blog/index#post-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "id", array()), "html", null, true);
        echo "\"><button class=\"btn btn-info\">Back</button></a>
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
        echo "/blog/edit?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "id", array()), "html", null, true);
        echo "\"><button class=\"btn btn-default\">Edit it </button></a>
            </p>

            <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "content", array()), "html", null, true);
        echo "</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "blog/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  76 => 26,  70 => 25,  65 => 22,  59 => 20,  57 => 19,  53 => 18,  47 => 14,  44 => 13,  39 => 10,  37 => 7,  36 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/view.html.twig", "/home/erwan/blog2.erwanguillou.com/view/blog/view.html.twig");
    }
}
