<?php

/* core/index.html.twig */
class __TwigTemplate_e674f2d5a26be2d8b957a4eca86cea78e96e4e09619779d1b3bd6682d58cafaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("core/base-layout.html.twig", "core/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "core/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"jumbotron text-center\">
            <h1>Want to download my CV ?</h1>
            <p>Please, feel free to do so.</p>
            <p><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["base_uri"] ?? null), "html", null, true);
        echo "/asset/pdf/cv.pdf\" download><button class=\"btn btn-danger\"><i class=\"fa fa-download\"></i> Download CV</button></a></p>
        </div>

        <form id=\"contact\" method=\"post\" class=\"text-center\">

            ";
        // line 13
        echo "            <input type=\"hidden\" name=\"csrf_token\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blog"] ?? null), "getCsrfToken", array()), "html", null, true);
        echo "\" />


            ";
        // line 16
        echo ($context["mailSent"] ?? null);
        echo "

            <br>
            <h1><i class=\"fa fa-envelope\"></i> Let's have a talk</h1>
            <p>Want to get in touch with me ? Please, fill out the form below. <br> I'm already writting back to you !</p>
            <input type=\"hidden\" name=\"action\" value=\"send_mail\" />

            <div class=\"container\">
                <div class=\"row control-group\">
                    <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                        <label>Name</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" required data-validation-required-message=\"Please enter your name.\">
                        <p class=\"help-block text-danger\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "errors", array()), "name", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row control-group\">
                    <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                        <label>Email Address</label>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" name=\"email\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" required data-validation-required-message=\"Please enter your email address.\">
                        <p class=\"help-block text-danger\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "errors", array()), "email", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row control-group\">
                    <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                        <label>Message</label>
                        <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" name=\"message\" required data-validation-required-message=\"Please enter a message.\">";
        // line 41
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</textarea>
                        <p class=\"help-block text-danger\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "errors", array()), "message", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <br>
                <div id=\"success\"></div>
                <div class=\"row\">
                    <div class=\"form-group col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-default\">Send</button>
                    </div>
                </div>
            </div>
        </form>
";
    }

    public function getTemplateName()
    {
        return "core/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  91 => 41,  82 => 35,  78 => 34,  69 => 28,  65 => 27,  51 => 16,  44 => 13,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/index.html.twig", "/home/erwan/blog2.erwanguillou.com/view/core/index.html.twig");
    }
}
