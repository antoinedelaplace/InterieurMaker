<?php

/* ImFrontBundle:Default:subscribe.html.twig */
class __TwigTemplate_ffdc5382026fc53667f62b3d50286d1ff016dbfbb5a6f4ffeee621721b52fc93 extends Twig_Template
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
        $__internal_2ebd5a32ceb67c743c55bc3eafd4239bf0aed0b9e3f5449c7a66d7b27f94e7f5 = $this->env->getExtension("native_profiler");
        $__internal_2ebd5a32ceb67c743c55bc3eafd4239bf0aed0b9e3f5449c7a66d7b27f94e7f5->enter($__internal_2ebd5a32ceb67c743c55bc3eafd4239bf0aed0b9e3f5449c7a66d7b27f94e7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImFrontBundle:Default:subscribe.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
<head>
    ";
        // line 4
        echo twig_include($this->env, $context, "ImFrontBundle:Default:head.html.twig");
        echo "
</head>
<body>
";
        // line 7
        echo twig_include($this->env, $context, "ImFrontBundle:Default:nav.html.twig");
        echo "
<br />
";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Default:Index"));
        echo "
";
        // line 10
        echo twig_include($this->env, $context, "ImFrontBundle:Default:footer.html.twig");
        echo "
</body>
</html>";
        
        $__internal_2ebd5a32ceb67c743c55bc3eafd4239bf0aed0b9e3f5449c7a66d7b27f94e7f5->leave($__internal_2ebd5a32ceb67c743c55bc3eafd4239bf0aed0b9e3f5449c7a66d7b27f94e7f5_prof);

    }

    public function getTemplateName()
    {
        return "ImFrontBundle:Default:subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="en">*/
/* <head>*/
/*     {{ include("ImFrontBundle:Default:head.html.twig") }}*/
/* </head>*/
/* <body>*/
/* {{ include("ImFrontBundle:Default:nav.html.twig") }}*/
/* <br />*/
/* {{ render(controller('UserBundle:Default:Index')) }}*/
/* {{ include("ImFrontBundle:Default:footer.html.twig") }}*/
/* </body>*/
/* </html>*/
