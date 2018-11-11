<?php

/* ImFrontBundle:Default:reservation.html.twig */
class __TwigTemplate_226891742cae5856d75dc09f041b4100d0ae48b2f40f43a6921f44ebe625fcbb extends Twig_Template
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
        $__internal_2016caa9f961d69b215051fb863576500a9e65baf065ea1abc8d5df7c98bbeb5 = $this->env->getExtension("native_profiler");
        $__internal_2016caa9f961d69b215051fb863576500a9e65baf065ea1abc8d5df7c98bbeb5->enter($__internal_2016caa9f961d69b215051fb863576500a9e65baf065ea1abc8d5df7c98bbeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImFrontBundle:Default:reservation.html.twig"));

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
";
        // line 8
        if (array_key_exists("new_rdv", $context)) {
            // line 9
            echo "    ";
            if (array_key_exists("Date", $context)) {
                // line 10
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PlanningBundle:Reservation:newReservation", array("Date" => (isset($context["Date"]) ? $context["Date"] : $this->getContext($context, "Date")), "domain" => (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")))));
                echo "
    ";
            } else {
                // line 12
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PlanningBundle:Reservation:newReservation", array("Date" => "", "domain" => "")));
                echo "
    ";
            }
        } elseif (        // line 14
array_key_exists("Date", $context)) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PlanningBundle:Reservation:openPlanning", array("Date" => (isset($context["Date"]) ? $context["Date"] : $this->getContext($context, "Date")))));
            echo "
";
        } else {
            // line 17
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PlanningBundle:Reservation:openPlanning", array("Date" => "")));
            echo "
";
        }
        // line 19
        echo twig_include($this->env, $context, "ImFrontBundle:Default:footer.html.twig");
        echo "
</body>
</html>
";
        
        $__internal_2016caa9f961d69b215051fb863576500a9e65baf065ea1abc8d5df7c98bbeb5->leave($__internal_2016caa9f961d69b215051fb863576500a9e65baf065ea1abc8d5df7c98bbeb5_prof);

    }

    public function getTemplateName()
    {
        return "ImFrontBundle:Default:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  62 => 17,  56 => 15,  54 => 14,  48 => 12,  42 => 10,  39 => 9,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="en">*/
/* <head>*/
/*     {{ include("ImFrontBundle:Default:head.html.twig") }}*/
/* </head>*/
/* <body>*/
/* {{ include("ImFrontBundle:Default:nav.html.twig") }}*/
/* {% if new_rdv is defined %}*/
/*     {% if Date is defined %}*/
/*         {{ render(controller('PlanningBundle:Reservation:newReservation', {'Date': Date, 'domain' : domain})) }}*/
/*     {% else %}*/
/*         {{ render(controller('PlanningBundle:Reservation:newReservation', {'Date': '', 'domain' : ''})) }}*/
/*     {% endif %}*/
/* {% elseif Date is defined %}*/
/*     {{ render(controller('PlanningBundle:Reservation:openPlanning', {'Date': Date })) }}*/
/* {% else %}*/
/*     {{ render(controller('PlanningBundle:Reservation:openPlanning', {'Date': ''})) }}*/
/* {% endif %}*/
/* {{ include("ImFrontBundle:Default:footer.html.twig") }}*/
/* </body>*/
/* </html>*/
/* */
