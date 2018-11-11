<?php

/* UserBundle:Default:subscribe.html.twig */
class __TwigTemplate_40f934286378e1dbf21d241d7a1d169e864139ce6a855089a1f01f36bdd874bf extends Twig_Template
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
        $__internal_6f235fa8d7672559867aa22ed58c77be43fa898efd51e128e07820c2862bb448 = $this->env->getExtension("native_profiler");
        $__internal_6f235fa8d7672559867aa22ed58c77be43fa898efd51e128e07820c2862bb448->enter($__internal_6f235fa8d7672559867aa22ed58c77be43fa898efd51e128e07820c2862bb448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:subscribe.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("save_subscribe");
        echo "\">
    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <h2>Compte</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <label>Email
                <input type=\"email\" name=\"email\" placeholder=\"nom@exemple.com\">
            </label>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <label>Mot de Passe
                <input type=\"password\" name=\"password\" placeholder=\"Au moins 5 caractères\">
            </label>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <h2>Informations personnelles</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <label for=\"lastname\">Nom*</label>
                <input id=\"lastname\" name=\"prenom\" type=\"text\" style=\"width: 49%;display: inline-block;\" placeholder=\"Prénom\">
                <input name=\"nom\" type=\"text\" style=\"width: 49%;display: inline-block;\" placeholder=\"Nom\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <label>Date de Naissance*
                <input type=\"text\" name=\"dateDeNaissance\" placeholder=\"JJ/MM/AAAA\">
            </label>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <h2>Coordonnées</h2>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <label>Téléphone
                <input type=\"text\" name=\"phone\" placeholder=\"Fixe ou Mobile\">
            </label>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <label>Adresse*
                <input type=\"text\" name=\"adresse\" placeholder=\"Adresse principale\">
            </label>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"medium-4 medium-centered columns\">
            <label for=\"zipCode\">Ville*</label>
            <input id=\"zipCode\" name=\"zipCode\" type=\"text\" style=\"width: 49%;display: inline-block;\" placeholder=\"Code postal\">
            <input name=\"ville\" type=\"text\" style=\"width: 49%;display: inline-block;\" placeholder=\"Ville\">
        </div>
    </div>
    <br />
    <div class=\"row\">
        <div class=\"medium-4 columns\">
            <div class=\"profile-card\">
                <div class=\"profile-info\">
                    <h2 class=\"subheader\">Mensuel</h2>
                    <p>Abonnement mensuel </p>
                    <p><button type=\"submit\" class=\"button\">S'abonner</button></p>
                </div>
            </div>
        </div>
        <div class=\"medium-4 columns\">
            <div class=\"profile-card\">
                <div class=\"profile-info\">
                    <h2 class=\"subheader\">Trimestriel</h2>
                    <p>Abonnement Trimestriel </p>
                    <p><button type=\"submit\" class=\"button\">S'abonner</button></p>
                </div>
            </div>
        </div>
        <div class=\"medium-4 columns\">
            <div class=\"profile-card\">
                <div class=\"profile-info\">
                    <h2 class=\"subheader\">Annuel</h2>
                    <p>Abonnement Annuel </p>
                    <p><button type=\"submit\" class=\"button\">S'abonner</button></p>
                </div>
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_6f235fa8d7672559867aa22ed58c77be43fa898efd51e128e07820c2862bb448->leave($__internal_6f235fa8d7672559867aa22ed58c77be43fa898efd51e128e07820c2862bb448_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <form method="post" action="{{ path('save_subscribe') }}">*/
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <h2>Compte</h2>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <label>Email*/
/*                 <input type="email" name="email" placeholder="nom@exemple.com">*/
/*             </label>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <label>Mot de Passe*/
/*                 <input type="password" name="password" placeholder="Au moins 5 caractères">*/
/*             </label>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <h2>Informations personnelles</h2>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <label for="lastname">Nom*</label>*/
/*                 <input id="lastname" name="prenom" type="text" style="width: 49%;display: inline-block;" placeholder="Prénom">*/
/*                 <input name="nom" type="text" style="width: 49%;display: inline-block;" placeholder="Nom">*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <label>Date de Naissance**/
/*                 <input type="text" name="dateDeNaissance" placeholder="JJ/MM/AAAA">*/
/*             </label>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <h2>Coordonnées</h2>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <label>Téléphone*/
/*                 <input type="text" name="phone" placeholder="Fixe ou Mobile">*/
/*             </label>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <label>Adresse**/
/*                 <input type="text" name="adresse" placeholder="Adresse principale">*/
/*             </label>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="medium-4 medium-centered columns">*/
/*             <label for="zipCode">Ville*</label>*/
/*             <input id="zipCode" name="zipCode" type="text" style="width: 49%;display: inline-block;" placeholder="Code postal">*/
/*             <input name="ville" type="text" style="width: 49%;display: inline-block;" placeholder="Ville">*/
/*         </div>*/
/*     </div>*/
/*     <br />*/
/*     <div class="row">*/
/*         <div class="medium-4 columns">*/
/*             <div class="profile-card">*/
/*                 <div class="profile-info">*/
/*                     <h2 class="subheader">Mensuel</h2>*/
/*                     <p>Abonnement mensuel </p>*/
/*                     <p><button type="submit" class="button">S'abonner</button></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="medium-4 columns">*/
/*             <div class="profile-card">*/
/*                 <div class="profile-info">*/
/*                     <h2 class="subheader">Trimestriel</h2>*/
/*                     <p>Abonnement Trimestriel </p>*/
/*                     <p><button type="submit" class="button">S'abonner</button></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="medium-4 columns">*/
/*             <div class="profile-card">*/
/*                 <div class="profile-info">*/
/*                     <h2 class="subheader">Annuel</h2>*/
/*                     <p>Abonnement Annuel </p>*/
/*                     <p><button type="submit" class="button">S'abonner</button></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* */
