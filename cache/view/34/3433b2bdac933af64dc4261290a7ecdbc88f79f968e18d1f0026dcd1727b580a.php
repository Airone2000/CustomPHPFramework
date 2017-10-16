<?php

/* blog/add.html.twig */
class __TwigTemplate_3adc4b11aeb6c3d9f4f5c935fb4eb317d63e6086fa0ce803a3fed2ff2edc2eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/base-layout.html.twig", "blog/add.html.twig", 1);
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
        $this->loadTemplate("inc/main-header.html.twig", "blog/add.html.twig", 5)->display(array_merge($context, array("title" => "Blog", "subtitle" => "Let's give birth to a New BlogPost !", "img" => "asset/img/core-head.png")));
        // line 10
        echo "
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate("blog/inc/form.html.twig", "blog/add.html.twig", 16)->display(array_merge($context, array("blogpost" => ($context["blogpost"] ?? null), "errors" => ($context["errors"] ?? null))));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  48 => 16,  45 => 15,  42 => 14,  37 => 10,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/add.html.twig", "/home/erwan/blog2.erwanguillou.com/view/blog/add.html.twig");
    }
}
