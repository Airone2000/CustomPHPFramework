<?php

/* base-layout.html.twig */
class __TwigTemplate_ccd6edceec740e60d270d5f8c87443078e3d3bc736604206a977579100791c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>R1 - MG</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "asset/theme/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "asset/theme/css/clean-blog.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">

    <!-- custom Theme CSS -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "asset/css/custom-style.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "index.php/core/index\"><i class=\"fa fa-home\"></i> R<sup>1</sup>Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "index.php/blog/index\">Browse the Blog</a>
                </li>
                <li>
                    <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "index.php/core/index#contact\">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


";
        // line 67
        $this->displayBlock('header', $context, $blocks);
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
<!-- Footer -->
<footer>
    <div class=\"container-fluid\">
        <div class=\"row text-center\">
            <div class=\"col-xs-12 col-sm-4\">
                <h1>OC P5</h1>
                <p>This Website is a prototype realized on purpose.</p>
            </div>
            <div class=\"col-xs-12 col-sm-4\">
                <h1>Follow me</h1>
                <ul id=\"social\" class=\"list-inline text-center\">
                    <li>
                        <a href=\"https://twitter.com/maels1991\" target=\"_blank\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"https://www.facebook.com/Erwan29200\" target=\"_blank\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"https://github.com/Maels1991\" target=\"_blank\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"col-xs-12 col-sm-4\">
                <h1>Credits</h1>
                <p>This Website has been developed based on <a href=\"https://startbootstrap.com/template-overviews/clean-blog/\" target=\"_blank\" class=\"text-info\">Clean Blog</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "/asset/theme/vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "/asset/theme/vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "/asset/theme/js/jqBootstrapValidation.js\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "/asset/theme/js/contact_me.js\"></script>

<!-- Theme JavaScript -->
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, ($context["short_uri"] ?? null), "html", null, true);
        echo "/asset/theme/js/clean-blog.min.js\"></script>

</body>

</html>
";
    }

    // line 67
    public function block_header($context, array $blocks = array())
    {
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 68,  192 => 67,  182 => 126,  176 => 123,  172 => 122,  166 => 119,  160 => 116,  111 => 69,  109 => 68,  107 => 67,  94 => 57,  88 => 54,  78 => 47,  53 => 25,  41 => 16,  35 => 13,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base-layout.html.twig", "/home/erwan/blog2.erwanguillou.com/view/base-layout.html.twig");
    }
}
