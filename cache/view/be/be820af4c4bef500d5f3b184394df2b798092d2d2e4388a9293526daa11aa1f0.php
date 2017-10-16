<?php

/* blog/inc/form.html.twig */
class __TwigTemplate_c832bc7f57ddfe501538ac2e09b720c77c71f1d0435f0102d260792ebd594fc6 extends Twig_Template
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
        echo "<form action=\"\" method=\"post\" class=\"text-center\">

    ";
        // line 4
        echo "    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blog"] ?? null), "getCsrfToken", array()), "html", null, true);
        echo "\" />

    ";
        // line 7
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "id", array())) {
            // line 8
            echo "        <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "id", array()), "html", null, true);
            echo "\" />
        ";
            // line 9
            $context["btnText"] = "Save my changes";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["btnText"] = "Publish";
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div class=\"container\">
        <div class=\"row control-group\">
            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                <label>Title</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Title\" name=\"title\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "title", array()), "html", null, true);
        echo "\" required data-validation-required-message=\"Please fill in with a valid title.\" maxlength=\"255\">
                <p class=\"help-block text-danger\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "title", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"row control-group\">
            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                <label>Lead-in</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Lead-in \" name=\"header\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "header", array()), "html", null, true);
        echo "\" data-validation-required-message=\"Please fill in with a valid lead-in.\" maxlength=\"255\">
                <p class=\"help-block text-danger\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "header", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"row control-group\">
            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                <label>Author</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Author\" name=\"author\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "author", array()), "username", array()), "html", null, true);
        echo "\" required data-validation-required-message=\"Please fill in with your name.\" maxlength=\"255\">
                <p class=\"help-block text-danger\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "author", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"row control-group\">
            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                <label>Content</label>
                <textarea rows=\"5\" class=\"form-control\" placeholder=\"Content\" name=\"content\" required data-validation-required-message=\"Please write your content.\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogpost"] ?? null), "content", array()), "html", null, true);
        echo "</textarea>
                <p class=\"help-block text-danger\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "content", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        <br>
        <div id=\"success\"></div>
        <div class=\"row\">
            <div class=\"form-group col-xs-12\">
                <button type=\"submit\" class=\"btn btn-default\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["btnText"] ?? null), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "blog/inc/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 47,  98 => 40,  94 => 39,  85 => 33,  81 => 32,  72 => 26,  68 => 25,  59 => 19,  55 => 18,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  37 => 9,  32 => 8,  29 => 7,  23 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/inc/form.html.twig", "/home/erwan/blog2.erwanguillou.com/view/blog/inc/form.html.twig");
    }
}
