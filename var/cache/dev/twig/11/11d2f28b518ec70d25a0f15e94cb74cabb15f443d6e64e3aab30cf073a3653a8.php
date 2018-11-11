<?php

/* UserBundle:Default:modal-connexion.html.twig */
class __TwigTemplate_5937c818cbb03a3c4b2b0e8cf91cc5edc382f05a75b3d4538439665629abf24d extends Twig_Template
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
        $__internal_0a8f43d919910ce9b4696d8dee05dd334c8af1b2da0714702551dee12e6235cb = $this->env->getExtension("native_profiler");
        $__internal_0a8f43d919910ce9b4696d8dee05dd334c8af1b2da0714702551dee12e6235cb->enter($__internal_0a8f43d919910ce9b4696d8dee05dd334c8af1b2da0714702551dee12e6235cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:modal-connexion.html.twig"));

        // line 1
        echo "<div class=\"reveal back-lightgray\" id=\"ModalConnexion\" class=\"reveal-modal remove-whitespace\" data-reveal>
    <div class=\"row\">
        <div class=\"large-6 columns auth-plain\">
            <div class=\"signup-panel left-solid back-lightgray\">
                <h2 class=\"welcome\">Connexion</h2>
                <form name=\"connect\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" onsubmit='return checkCredentials(\"";
        echo $this->env->getExtension('routing')->getPath("check_credentials");
        echo "\")'>
                    <div class=\"row collapse\">
                        <div class=\"small-2  columns\">
                            <span class=\"prefix\"><i class=\"fi-torso-female\"></i></span>
                        </div>
                        <div class=\"small-10  columns\">
                            <input type=\"text\" id=\"username\" name=\"_username\" required placeholder=\"Email\">
                        </div>
                    </div>
                    <div class=\"row collapse\">
                        <div class=\"small-2 columns \">
                            <span class=\"prefix\"><i class=\"fi-lock\"></i></span>
                        </div>
                        <div class=\"small-10 columns \">
                            <input type=\"password\" id=\"password\" name=\"_password\" required placeholder=\"Mot de passe\">
                        </div>
                    </div>
                    <div data-abide-error id=\"div-alert\" class=\"alert callout\" style=\"display: none;\">
                        <p id=\"alert\"></p>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Default:getToken", array()));
        echo "\" />
                    <input class=\"button\" type=\"submit\">
                </form>
            </div>
        </div>
        <div class=\"large-6 columns auth-plain back-lightgray\">
            <div class=\"signup-panel newusers back-lightgray\">
                <h2 class=\"welcome\"> Pas encore inscrit ?</h2>
                <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("im_front_subscribe");
        echo "\" class=\"button \">S'inscrire</a></br>
            </div>
        </div>
    </div>
    <button class=\"close-button\" data-close aria-label=\"Close modal\" type=\"button\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>";
        
        $__internal_0a8f43d919910ce9b4696d8dee05dd334c8af1b2da0714702551dee12e6235cb->leave($__internal_0a8f43d919910ce9b4696d8dee05dd334c8af1b2da0714702551dee12e6235cb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:modal-connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 34,  54 => 26,  29 => 6,  22 => 1,);
    }
}
/* <div class="reveal back-lightgray" id="ModalConnexion" class="reveal-modal remove-whitespace" data-reveal>*/
/*     <div class="row">*/
/*         <div class="large-6 columns auth-plain">*/
/*             <div class="signup-panel left-solid back-lightgray">*/
/*                 <h2 class="welcome">Connexion</h2>*/
/*                 <form name="connect" action="{{ path('fos_user_security_check') }}" method="post" onsubmit='return checkCredentials("{{ path('check_credentials') }}")'>*/
/*                     <div class="row collapse">*/
/*                         <div class="small-2  columns">*/
/*                             <span class="prefix"><i class="fi-torso-female"></i></span>*/
/*                         </div>*/
/*                         <div class="small-10  columns">*/
/*                             <input type="text" id="username" name="_username" required placeholder="Email">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row collapse">*/
/*                         <div class="small-2 columns ">*/
/*                             <span class="prefix"><i class="fi-lock"></i></span>*/
/*                         </div>*/
/*                         <div class="small-10 columns ">*/
/*                             <input type="password" id="password" name="_password" required placeholder="Mot de passe">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div data-abide-error id="div-alert" class="alert callout" style="display: none;">*/
/*                         <p id="alert"></p>*/
/*                     </div>*/
/*                     <input type="hidden" name="_csrf_token" value="{{  render(controller('UserBundle:Default:getToken', {})) }}" />*/
/*                     <input class="button" type="submit">*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <div class="large-6 columns auth-plain back-lightgray">*/
/*             <div class="signup-panel newusers back-lightgray">*/
/*                 <h2 class="welcome"> Pas encore inscrit ?</h2>*/
/*                 <a href="{{ path('im_front_subscribe') }}" class="button ">S'inscrire</a></br>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <button class="close-button" data-close aria-label="Close modal" type="button">*/
/*         <span aria-hidden="true">&times;</span>*/
/*     </button>*/
/* </div>*/
