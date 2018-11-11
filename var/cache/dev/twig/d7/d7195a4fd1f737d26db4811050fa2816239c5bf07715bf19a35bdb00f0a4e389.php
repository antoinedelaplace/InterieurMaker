<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f64f2309e748bcb94f7ecce22758dad8a479f16c548bda9936c6c5f090044e3d extends Twig_Template
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
        $__internal_c4c96d1b72ecc4e422bd4607d0ddfcd30ef41f64d1d98636c58af9ffad0d0598 = $this->env->getExtension("native_profiler");
        $__internal_c4c96d1b72ecc4e422bd4607d0ddfcd30ef41f64d1d98636c58af9ffad0d0598->enter($__internal_c4c96d1b72ecc4e422bd4607d0ddfcd30ef41f64d1d98636c58af9ffad0d0598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c4c96d1b72ecc4e422bd4607d0ddfcd30ef41f64d1d98636c58af9ffad0d0598->leave($__internal_c4c96d1b72ecc4e422bd4607d0ddfcd30ef41f64d1d98636c58af9ffad0d0598_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
