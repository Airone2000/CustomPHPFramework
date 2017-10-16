<?php

/* core/base-layout.html.twig */
class __TwigTemplate_50f5715cff8a0a244b4397c508be685dc3448f08abe7f497d1c4a8217eda24cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-layout.html.twig", "core/base-layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-layout.html.twig";
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
        $this->loadTemplate("inc/main-header.html.twig", "core/base-layout.html.twig", 5)->display(array_merge($context, array("title" => "Welcome !", "subtitle" => "My Name's Erwan GUILLOU and you're on my Blog", "img" => "asset/img/core-head.png")));
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/base-layout.html.twig", "/home/erwan/blog2.erwanguillou.com/view/core/base-layout.html.twig");
    }
}
