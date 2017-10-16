<?php

/* blog/edit.html.twig */
class __TwigTemplate_08fc3fd333bb0ed61ac0684e69b8fd2dfda81698952c52d9eb0bd6447c4f786d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/base-layout.html.twig", "blog/edit.html.twig", 1);
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
        $this->loadTemplate("inc/main-header.html.twig", "blog/edit.html.twig", 5)->display(array_merge($context, array("title" => "Blog", "subtitle" => "BlogPost Edition", "img" => "asset/img/core-head.png")));
        // line 10
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        $this->loadTemplate("blog/inc/form.html.twig", "blog/edit.html.twig", 15)->display(array_merge($context, array("blogpost" => ($context["blogpost"] ?? null), "errors" => ($context["errors"] ?? null))));
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  48 => 15,  45 => 14,  42 => 13,  37 => 10,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/edit.html.twig", "/home/erwan/blog2.erwanguillou.com/view/blog/edit.html.twig");
    }
}
