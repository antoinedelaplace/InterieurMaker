<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2c2663c207a376a0d0cc671f5d5921bfaefb5d490b02c741a1cb4ccea9afb200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acd73ed9b4f393afa9cca6b55a431d20c9afb645df7dba7fd30f6a9c9698084b = $this->env->getExtension("native_profiler");
        $__internal_acd73ed9b4f393afa9cca6b55a431d20c9afb645df7dba7fd30f6a9c9698084b->enter($__internal_acd73ed9b4f393afa9cca6b55a431d20c9afb645df7dba7fd30f6a9c9698084b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acd73ed9b4f393afa9cca6b55a431d20c9afb645df7dba7fd30f6a9c9698084b->leave($__internal_acd73ed9b4f393afa9cca6b55a431d20c9afb645df7dba7fd30f6a9c9698084b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1090fe7750135aaec945d892df873a461ac53741e18c47d5088e4e9e8432af18 = $this->env->getExtension("native_profiler");
        $__internal_1090fe7750135aaec945d892df873a461ac53741e18c47d5088e4e9e8432af18->enter($__internal_1090fe7750135aaec945d892df873a461ac53741e18c47d5088e4e9e8432af18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1090fe7750135aaec945d892df873a461ac53741e18c47d5088e4e9e8432af18->leave($__internal_1090fe7750135aaec945d892df873a461ac53741e18c47d5088e4e9e8432af18_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ad942ee5017c39ac0ccb658482895289396167f8cd2fb1bb31d4fdc7c7bc7a8 = $this->env->getExtension("native_profiler");
        $__internal_9ad942ee5017c39ac0ccb658482895289396167f8cd2fb1bb31d4fdc7c7bc7a8->enter($__internal_9ad942ee5017c39ac0ccb658482895289396167f8cd2fb1bb31d4fdc7c7bc7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ad942ee5017c39ac0ccb658482895289396167f8cd2fb1bb31d4fdc7c7bc7a8->leave($__internal_9ad942ee5017c39ac0ccb658482895289396167f8cd2fb1bb31d4fdc7c7bc7a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b8a3863de8f28e692ca56e5e27f67a63ad35d128346d5941192f0e8b410de24 = $this->env->getExtension("native_profiler");
        $__internal_7b8a3863de8f28e692ca56e5e27f67a63ad35d128346d5941192f0e8b410de24->enter($__internal_7b8a3863de8f28e692ca56e5e27f67a63ad35d128346d5941192f0e8b410de24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7b8a3863de8f28e692ca56e5e27f67a63ad35d128346d5941192f0e8b410de24->leave($__internal_7b8a3863de8f28e692ca56e5e27f67a63ad35d128346d5941192f0e8b410de24_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
