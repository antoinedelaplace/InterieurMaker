<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a344b4cacc10a9c0668ce90ecd3e84dcc718736e4d2cd6c22d120b2cdc2f625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db2aea0633b1c172b3ea6c4771930c2736f94407eb4a04a43e830acd5ba4913a = $this->env->getExtension("native_profiler");
        $__internal_db2aea0633b1c172b3ea6c4771930c2736f94407eb4a04a43e830acd5ba4913a->enter($__internal_db2aea0633b1c172b3ea6c4771930c2736f94407eb4a04a43e830acd5ba4913a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2aea0633b1c172b3ea6c4771930c2736f94407eb4a04a43e830acd5ba4913a->leave($__internal_db2aea0633b1c172b3ea6c4771930c2736f94407eb4a04a43e830acd5ba4913a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_424a5907e86bf937a9784775860988a637dc7cdd51d979aef6048d598f53823a = $this->env->getExtension("native_profiler");
        $__internal_424a5907e86bf937a9784775860988a637dc7cdd51d979aef6048d598f53823a->enter($__internal_424a5907e86bf937a9784775860988a637dc7cdd51d979aef6048d598f53823a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_424a5907e86bf937a9784775860988a637dc7cdd51d979aef6048d598f53823a->leave($__internal_424a5907e86bf937a9784775860988a637dc7cdd51d979aef6048d598f53823a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54cb7d4659d3309e8b78726c9538419c124980ff4958d414e0cb4ba286332020 = $this->env->getExtension("native_profiler");
        $__internal_54cb7d4659d3309e8b78726c9538419c124980ff4958d414e0cb4ba286332020->enter($__internal_54cb7d4659d3309e8b78726c9538419c124980ff4958d414e0cb4ba286332020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_54cb7d4659d3309e8b78726c9538419c124980ff4958d414e0cb4ba286332020->leave($__internal_54cb7d4659d3309e8b78726c9538419c124980ff4958d414e0cb4ba286332020_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2d6d9589e5bb16714a78b46601e63088a303542f0cad7b9d50872db5e378b83 = $this->env->getExtension("native_profiler");
        $__internal_b2d6d9589e5bb16714a78b46601e63088a303542f0cad7b9d50872db5e378b83->enter($__internal_b2d6d9589e5bb16714a78b46601e63088a303542f0cad7b9d50872db5e378b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b2d6d9589e5bb16714a78b46601e63088a303542f0cad7b9d50872db5e378b83->leave($__internal_b2d6d9589e5bb16714a78b46601e63088a303542f0cad7b9d50872db5e378b83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
