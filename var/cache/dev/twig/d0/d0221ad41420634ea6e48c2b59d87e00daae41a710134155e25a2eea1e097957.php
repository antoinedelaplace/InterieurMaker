<?php

/* ImFrontBundle:Default:home.html.twig */
class __TwigTemplate_a75507db8e3ed25ae998b76a7b959ebdfa01f7cacaf1085b1d5a906cfbadbdaa extends Twig_Template
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
        $__internal_fad4268a73352eea59d36dbf4f0fd3c824e585da3bd8c547e28031114ff62506 = $this->env->getExtension("native_profiler");
        $__internal_fad4268a73352eea59d36dbf4f0fd3c824e585da3bd8c547e28031114ff62506->enter($__internal_fad4268a73352eea59d36dbf4f0fd3c824e585da3bd8c547e28031114ff62506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImFrontBundle:Default:home.html.twig"));

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

<div class=\"top-bar \">
    <div class=\"top-bar-left\">
        <ul class=\"menu\">
            <li class=\"menu-text \"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("im_front_homepage");
        echo "\">Interieur Maker</a></li>
        </ul>
    </div>
    <div class=\"top-bar-right\">
        <ul class=\"menu\">
          ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "            <li class=\"menu-text\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("im_front_planning");
            echo "\">Planning</a></li>
            <li class=\"menu-text\"><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("im_front_subscribe_agent");
            echo "\">Admin</a></li>
            <li class=\"menu-text\"><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("im_front_gestion_agent");
            echo "\">Agents</a></li>
            <li class=\"menu-text\"><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se deconnecter</a></li>
          ";
        } else {
            // line 22
            echo "            <li class=\"menu-text\"><a data-open=\"ModalConnexion\">Se connecter</a></li>
          ";
        }
        // line 24
        echo "        </ul>
    </div>
</div>

<!-- Start Modal -->
";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Default:Connexion"));
        echo "
<!-- End Modal -->

<!-- Start Header -->
<div id=\"first-text\" class=\"callout large back-gray\">
  <div class=\"row column text-center\">
    <h1>Un problème avec vos travaux ?</h1>
    <p class=\"lead\">Rejoignez le réseau de professionnels des travaux à votre disposition !</p>
    ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "      <a href=\"";
            echo $this->env->getExtension('routing')->getPath("im_front_subscribe");
            echo "\" class=\"button large\">S'inscrire</a>
    ";
        }
        // line 41
        echo "  </div>
</div>
<!-- End Header -->

<!-- Start Job -->
<div class=\"row\">
  <div class=\"medium-6 columns medium-push-6\">
    ";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dfecf34_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dfecf34_0") : $this->env->getExtension('asset')->getAssetUrl("images/dfecf34_painting_1.jpg");
            // line 49
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "dfecf34"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dfecf34") : $this->env->getExtension('asset')->getAssetUrl("images/dfecf34.jpg");
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 51
        echo "  </div>
  <div class=\"medium-6 columns medium-pull-6\">
    <h2>Peinture</h2>
    <p></p>
  </div>
</div>

<hr>

<div class=\"row\">
  <div class=\"medium-6 columns medium-push-6\">
    <h2>Plomberie</h2>
    <p></p>
  </div>
  <div class=\"medium-6 columns medium-pull-6\">
    ";
        // line 66
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "164b187_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_164b187_0") : $this->env->getExtension('asset')->getAssetUrl("images/164b187_plumbing_1.jpg");
            // line 67
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "164b187"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_164b187") : $this->env->getExtension('asset')->getAssetUrl("images/164b187.jpg");
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 69
        echo "  </div>
</div>

<hr>

<div class=\"row\">
  <div class=\"medium-6 columns medium-push-6\">
    ";
        // line 76
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f1063b2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f1063b2_0") : $this->env->getExtension('asset')->getAssetUrl("images/f1063b2_electricty_1.jpg");
            // line 77
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "f1063b2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f1063b2") : $this->env->getExtension('asset')->getAssetUrl("images/f1063b2.jpg");
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 79
        echo "  </div>
  <div class=\"medium-6 columns medium-pull-6\">
    <h2>Electricité</h2>
    <p></p>
  </div>
</div>

<hr>

<div class=\"row\">
  <div class=\"medium-6 columns medium-push-6\">
    <h2>Architecture d'intérieur</h2>
    <p></p>
  </div>
  <div class=\"medium-6 columns medium-pull-6\">
    ";
        // line 94
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5ae090a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5ae090a_0") : $this->env->getExtension('asset')->getAssetUrl("images/5ae090a_interior_1.jpg");
            // line 95
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "5ae090a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5ae090a") : $this->env->getExtension('asset')->getAssetUrl("images/5ae090a.jpg");
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 97
        echo "  </div>
</div>

<hr>

<div class=\"row\">
  <div class=\"medium-6 columns medium-push-6\">
    ";
        // line 104
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "efb1d12_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_efb1d12_0") : $this->env->getExtension('asset')->getAssetUrl("images/efb1d12_wall_1.jpg");
            // line 105
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "efb1d12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_efb1d12") : $this->env->getExtension('asset')->getAssetUrl("images/efb1d12.jpg");
            echo "    <img class=\"thumbnail\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 107
        echo "  </div>
  <div class=\"medium-6 columns medium-pull-6\">
    <h2>Maçonnerie</h2>
    <p></p>
  </div>
</div>
<!-- End Job -->
";
        // line 114
        echo twig_include($this->env, $context, "ImFrontBundle:Default:footer.html.twig");
        echo "
</body>
</html>


";
        
        $__internal_fad4268a73352eea59d36dbf4f0fd3c824e585da3bd8c547e28031114ff62506->leave($__internal_fad4268a73352eea59d36dbf4f0fd3c824e585da3bd8c547e28031114ff62506_prof);

    }

    public function getTemplateName()
    {
        return "ImFrontBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 114,  249 => 107,  235 => 105,  231 => 104,  222 => 97,  208 => 95,  204 => 94,  187 => 79,  173 => 77,  169 => 76,  160 => 69,  146 => 67,  142 => 66,  125 => 51,  111 => 49,  107 => 48,  98 => 41,  92 => 39,  89 => 38,  87 => 37,  76 => 29,  69 => 24,  65 => 22,  60 => 20,  56 => 19,  52 => 18,  47 => 17,  45 => 16,  37 => 11,  27 => 4,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="en">*/
/* <head>*/
/*     {{ include("ImFrontBundle:Default:head.html.twig") }}*/
/* </head>*/
/* <body>*/
/* */
/* <div class="top-bar ">*/
/*     <div class="top-bar-left">*/
/*         <ul class="menu">*/
/*             <li class="menu-text "><a href="{{ path('im_front_homepage') }}">Interieur Maker</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <div class="top-bar-right">*/
/*         <ul class="menu">*/
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             <li class="menu-text"><a href="{{ path('im_front_planning') }}">Planning</a></li>*/
/*             <li class="menu-text"><a href="{{ path('im_front_subscribe_agent') }}">Admin</a></li>*/
/*             <li class="menu-text"><a href="{{ path('im_front_gestion_agent') }}">Agents</a></li>*/
/*             <li class="menu-text"><a href="{{ path('fos_user_security_logout') }}">Se deconnecter</a></li>*/
/*           {% else  %}*/
/*             <li class="menu-text"><a data-open="ModalConnexion">Se connecter</a></li>*/
/*           {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Start Modal -->*/
/* {{ render(controller('UserBundle:Default:Connexion')) }}*/
/* <!-- End Modal -->*/
/* */
/* <!-- Start Header -->*/
/* <div id="first-text" class="callout large back-gray">*/
/*   <div class="row column text-center">*/
/*     <h1>Un problème avec vos travaux ?</h1>*/
/*     <p class="lead">Rejoignez le réseau de professionnels des travaux à votre disposition !</p>*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*     {% else  %}*/
/*       <a href="{{ path('im_front_subscribe') }}" class="button large">S'inscrire</a>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* <!-- End Header -->*/
/* */
/* <!-- Start Job -->*/
/* <div class="row">*/
/*   <div class="medium-6 columns medium-push-6">*/
/*     {% image '@ImFrontBundle/Resources/public/img/painting.jpg' %}*/
/*     <img class="thumbnail" src="{{ asset_url }}" />*/
/*     {% endimage %}*/
/*   </div>*/
/*   <div class="medium-6 columns medium-pull-6">*/
/*     <h2>Peinture</h2>*/
/*     <p></p>*/
/*   </div>*/
/* </div>*/
/* */
/* <hr>*/
/* */
/* <div class="row">*/
/*   <div class="medium-6 columns medium-push-6">*/
/*     <h2>Plomberie</h2>*/
/*     <p></p>*/
/*   </div>*/
/*   <div class="medium-6 columns medium-pull-6">*/
/*     {% image '@ImFrontBundle/Resources/public/img/plumbing.jpg' %}*/
/*     <img class="thumbnail" src="{{ asset_url }}" />*/
/*     {% endimage %}*/
/*   </div>*/
/* </div>*/
/* */
/* <hr>*/
/* */
/* <div class="row">*/
/*   <div class="medium-6 columns medium-push-6">*/
/*     {% image '@ImFrontBundle/Resources/public/img/electricty.jpg' %}*/
/*     <img class="thumbnail" src="{{ asset_url }}" />*/
/*     {% endimage %}*/
/*   </div>*/
/*   <div class="medium-6 columns medium-pull-6">*/
/*     <h2>Electricité</h2>*/
/*     <p></p>*/
/*   </div>*/
/* </div>*/
/* */
/* <hr>*/
/* */
/* <div class="row">*/
/*   <div class="medium-6 columns medium-push-6">*/
/*     <h2>Architecture d'intérieur</h2>*/
/*     <p></p>*/
/*   </div>*/
/*   <div class="medium-6 columns medium-pull-6">*/
/*     {% image '@ImFrontBundle/Resources/public/img/interior.jpg' %}*/
/*     <img class="thumbnail" src="{{ asset_url }}" />*/
/*     {% endimage %}*/
/*   </div>*/
/* </div>*/
/* */
/* <hr>*/
/* */
/* <div class="row">*/
/*   <div class="medium-6 columns medium-push-6">*/
/*     {% image '@ImFrontBundle/Resources/public/img/wall.jpg' %}*/
/*     <img class="thumbnail" src="{{ asset_url }}" />*/
/*     {% endimage %}*/
/*   </div>*/
/*   <div class="medium-6 columns medium-pull-6">*/
/*     <h2>Maçonnerie</h2>*/
/*     <p></p>*/
/*   </div>*/
/* </div>*/
/* <!-- End Job -->*/
/* {{ include("ImFrontBundle:Default:footer.html.twig") }}*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
