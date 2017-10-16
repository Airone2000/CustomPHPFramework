<?php

/* blog/index.html.twig */
class __TwigTemplate_c999bb3b1c2772dd38e9c4c9b455727717827e346e408982d114782e7c583bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/base-layout.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">

                <p class=\"text-right\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
        echo "/blog/add\"><button class=\"btn btn-danger\"><i class=\"fa fa-plus\"></i> Add new BlogPost</button></a>
                </p>

                <hr>

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogposts"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["blogpost"]) {
            // line 16
            echo "
                    <div id=\"post-";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["blogpost"], "id", array()), "html", null, true);
            echo "\" class=\"post-preview\">
                        <a href=\"#\">
                            <h2 class=\"post-title\">
                                ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["blogpost"], "title", array()), "html", null, true);
            echo "
                            </h2>

                            ";
            // line 23
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["blogpost"], "header", array()))) {
                // line 24
                echo "                                <h3 class=\"post-subtitle\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["blogpost"], "header", array()), "html", null, true);
                echo "</h3>
                            ";
            }
            // line 26
            echo "                        </a>
                        <p class=\"post-meta\">Posted by ";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["blogpost"], "author", array()), "username", array()) . " on ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["blogpost"], "publishingDate", array()))), "html", null, true);
            echo "</p>
                        <p>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
            echo "/blog/edit?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["blogpost"], "id", array()), "html", null, true);
            echo "\"><button class=\"btn btn-default\">Edit it <i class=\"fa fa-pencil\"></i></button></a>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
            echo "/blog/view?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["blogpost"], "id", array()), "html", null, true);
            echo "\"><button class=\"btn btn-info\">Read it !</button></a>
                        </p>
                    </div>

                    ";
            // line 34
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                // line 35
                echo "                        <hr>
                    ";
            }
            // line 37
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogpost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  116 => 37,  112 => 35,  110 => 34,  101 => 30,  95 => 29,  90 => 27,  87 => 26,  81 => 24,  79 => 23,  73 => 20,  67 => 17,  64 => 16,  47 => 15,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/index.html.twig", "/home/erwan/blog2.erwanguillou.com/view/blog/index.html.twig");
    }
}
