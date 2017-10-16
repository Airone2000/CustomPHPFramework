<?php

/* blog/base-layout.html.twig */
class __TwigTemplate_1ade9c8a75d5c7480ac5b90e4c4130dbedce7c6ddb532bbbb5e6babac8e1d19e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-layout.html.twig", "blog/base-layout.html.twig", 1);
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
        $this->loadTemplate("inc/main-header.html.twig", "blog/base-layout.html.twig", 5)->display(array_merge($context, array("title" => "Blog", "subtitle" => "Feel free to scroll as down as possible to unveil what I'm interested in.", "img" => "asset/img/core-head.png")));
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/base-layout.html.twig";
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
        return new Twig_Source("", "blog/base-layout.html.twig", "/home/erwan/blog2.erwanguillou.com/view/blog/base-layout.html.twig");
    }
}
