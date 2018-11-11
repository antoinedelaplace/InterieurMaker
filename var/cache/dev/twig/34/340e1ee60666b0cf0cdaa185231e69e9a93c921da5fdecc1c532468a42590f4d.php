<?php

/* ImFrontBundle:Default:nav.html.twig */
class __TwigTemplate_8d7caf09533029ed507a34532d7f99d511fe8ba6a21436444a5975a2bff5c342 extends Twig_Template
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
        $__internal_6617065cf3c702a1801833ff61a8bd856c3fd11e83881d92b84c01b597f90008 = $this->env->getExtension("native_profiler");
        $__internal_6617065cf3c702a1801833ff61a8bd856c3fd11e83881d92b84c01b597f90008->enter($__internal_6617065cf3c702a1801833ff61a8bd856c3fd11e83881d92b84c01b597f90008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImFrontBundle:Default:nav.html.twig"));

        // line 1
        echo "<div class=\"top-bar \">
    <div class=\"top-bar-left\">
        <ul class=\"menu\">
            <li class=\"menu-text \"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("im_front_homepage");
        echo "\">Interieur Maker</a></li>
        </ul>
    </div>
    <div class=\"top-bar-right\">
        <ul class=\"menu\">
            ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "                <li class=\"menu-text\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("im_front_planning");
            echo "\">Planning</a></li>
                <li class=\"menu-text\"><a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("im_front_subscribe_agent");
            echo "\">Admin</a></li>
                <li class=\"menu-text\"><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("im_front_gestion_agent");
            echo "\">Agents</a></li>
                <li class=\"menu-text\"><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se deconnecter</a></li>
            ";
        }
        // line 15
        echo "        </ul>
    </div>
</div>";
        
        $__internal_6617065cf3c702a1801833ff61a8bd856c3fd11e83881d92b84c01b597f90008->leave($__internal_6617065cf3c702a1801833ff61a8bd856c3fd11e83881d92b84c01b597f90008_prof);

    }

    public function getTemplateName()
    {
        return "ImFrontBundle:Default:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  50 => 13,  46 => 12,  42 => 11,  37 => 10,  35 => 9,  27 => 4,  22 => 1,);
    }
}
/* <div class="top-bar ">*/
/*     <div class="top-bar-left">*/
/*         <ul class="menu">*/
/*             <li class="menu-text "><a href="{{ path('im_front_homepage') }}">Interieur Maker</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <div class="top-bar-right">*/
/*         <ul class="menu">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 <li class="menu-text"><a href="{{ path('im_front_planning') }}">Planning</a></li>*/
/*                 <li class="menu-text"><a href="{{ path('im_front_subscribe_agent') }}">Admin</a></li>*/
/*                 <li class="menu-text"><a href="{{ path('im_front_gestion_agent') }}">Agents</a></li>*/
/*                 <li class="menu-text"><a href="{{ path('fos_user_security_logout') }}">Se deconnecter</a></li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
