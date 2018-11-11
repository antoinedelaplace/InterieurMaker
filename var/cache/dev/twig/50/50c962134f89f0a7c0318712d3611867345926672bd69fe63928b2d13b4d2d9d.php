<?php

/* PlanningBundle:Reservation:new_reservation.html.twig */
class __TwigTemplate_9cf2f3d4d848be9cb17a94665175bc0bace0cf3f7a300e57ff34e7bcdf57353d extends Twig_Template
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
        $__internal_0c45f7754df4d188bc5050a4c049ced8fc2c045ef3dbd463e979fa8c794d0f25 = $this->env->getExtension("native_profiler");
        $__internal_0c45f7754df4d188bc5050a4c049ced8fc2c045ef3dbd463e979fa8c794d0f25->enter($__internal_0c45f7754df4d188bc5050a4c049ced8fc2c045ef3dbd463e979fa8c794d0f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PlanningBundle:Reservation:new_reservation.html.twig"));

        // line 1
        echo "<ul class=\"tabs\" data-tabs id=\"job-tabs\">
    <li class=\"tabs-title\"><a href=\"#\" id=\"peinture\" onclick='open_table(this, \"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("get_reservations");
        echo "\", \"";
        echo $this->env->getExtension('routing')->getPath("save_reservation");
        echo "\");'>Peinture</a></li>
    <li class=\"tabs-title\"><a href=\"#\" id=\"electricite\" onclick='open_table(this, \"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("get_reservations");
        echo "\", \"";
        echo $this->env->getExtension('routing')->getPath("save_reservation");
        echo "\");'>Electricité</a></li>
    <li class=\"tabs-title\"><a href=\"#\" id=\"plomberie\" onclick='open_table(this, \"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("get_reservations");
        echo "\", \"";
        echo $this->env->getExtension('routing')->getPath("save_reservation");
        echo "\");'>Plomberie</a></li>
    <li class=\"tabs-title\"><a href=\"#\" id=\"maconnerie\" onclick='open_table(this, \"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("get_reservations");
        echo "\", \"";
        echo $this->env->getExtension('routing')->getPath("save_reservation");
        echo "\");'>Maconnerie</a></li>
    <li class=\"tabs-title\"><a href=\"#\" id=\"architecture\" onclick='open_table(this, \"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("get_reservations");
        echo "\", \"";
        echo $this->env->getExtension('routing')->getPath("save_reservation");
        echo "\");'>Architecture Intérieure</a></li>
</ul>
<div id=\"loader\" style=\"display: none; text-align: center;\">
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7912cff_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7912cff_0") : $this->env->getExtension('asset')->getAssetUrl("images/7912cff_loader_1.gif");
            // line 10
            echo "        <img alt=\"loading\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "7912cff"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7912cff") : $this->env->getExtension('asset')->getAssetUrl("images/7912cff.gif");
            echo "        <img alt=\"loading\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "</div>
<input type=\"hidden\" id=\"selected_job\" />
<table id=\"planning-table\">
    <h3 id=\"actual-month\" class=\"actual\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["actualmonth"]) ? $context["actualmonth"] : $this->getContext($context, "actualmonth")), "html", null, true);
        echo "</h3>
    <thead>
    <tr>
        <th>
        </th>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["days"]) ? $context["days"] : $this->getContext($context, "days")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 21
            echo "            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 22
                echo "            <th><a onclick='change_date_reservations(\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_date_reservations", array("Date" => (isset($context["beforeDate"]) ? $context["beforeDate"] : $this->getContext($context, "beforeDate")))), "html", null, true);
                echo "\");' class=\"button\"><span class=\"prefix\"><i class=\"fi-arrow-left\"></i></span></a><span>";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</span></th>
            ";
            } elseif ($this->getAttribute(            // line 23
$context["loop"], "last", array())) {
                // line 24
                echo "                <th><span>";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</span><a onclick='change_date_reservations(\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_date_reservations", array("Date" => (isset($context["afterDate"]) ? $context["afterDate"] : $this->getContext($context, "afterDate")))), "html", null, true);
                echo "\");' class=\"button\"><span class=\"prefix\"><i class=\"fi-arrow-right\"></i></span></a></th>
            ";
            } else {
                // line 26
                echo "                <th>";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</th>
            ";
            }
            // line 28
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["hours"] => $context["reservation"]) {
            // line 33
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["reservation"]);
            foreach ($context['_seq'] as $context["key"] => $context["day_reservation"]) {
                // line 34
                echo "        <tr>
            ";
                // line 35
                if (($context["key"] == 0)) {
                    // line 36
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $context["hours"], "html", null, true);
                    echo "</td>
            ";
                } else {
                    // line 38
                    echo "                <td></td>
            ";
                }
                // line 40
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["day_reservation"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date_reservation"]) {
                    // line 41
                    echo "                <td></td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date_reservation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['day_reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hours'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>
</table>
<div class=\"reveal back-lightgray\" id=\"modal-fiche-intervention\" class=\"reveal-modal remove-whitespace\" data-reveal>
    <div class=\"row\">
        <div class=\"columns auth-plain\">
            <div class=\"signup-panel left-solid back-lightgray\">
                <h2 class=\"welcome\">Fiche d'intervention</h2>
                <div id=\"loader_modal\" style=\"display: none; text-align: center;\">
                    ";
        // line 54
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7912cff_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7912cff_0") : $this->env->getExtension('asset')->getAssetUrl("images/7912cff_loader_1.gif");
            // line 55
            echo "                    <img alt=\"loading\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
                    ";
        } else {
            // asset "7912cff"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7912cff") : $this->env->getExtension('asset')->getAssetUrl("images/7912cff.gif");
            echo "                    <img alt=\"loading\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
                    ";
        }
        unset($context["asset_url"]);
        // line 57
        echo "                </div>
                <form name=\"connect\" action=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("save_fiche_intervention");
        echo "\" method=\"post\">
                    <div class=\"row\">
                        <label>Type d'habitation
                            <select id=\"home_type\" name=\"home_type\" required >
                                <option value=\"\"></option>
                                <option value=\"home\">Maison</option>
                                <option value=\"apartment\">Appartement</option>
                            </select>
                        </label>
                    </div>
                    <div class=\"row\">
                        <label>
                            Quelle est la nature de votre problème ?
                            <textarea id=\"issue\" name=\"issue\" required placeholder=\"Exemple : Fuite d'eau\" rows=\"8\"></textarea>
                        </label>
                    </div>
                    <input type=\"hidden\" id=\"idFiche\" value=\"\" name=\"idFiche\" />
                    <input class=\"button\" type=\"submit\" value=\"Créer\">
                </form>
            </div>
        </div>
    </div>
    <button class=\"close-button\" data-close aria-label=\"Close modal\" type=\"button\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
";
        // line 84
        if ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) {
            // line 85
            echo "<script>
    document.onreadystatechange = function () {
        if (document.readyState == \"complete\") {
            open_table(\"";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "html", null, true);
            echo "\", \"";
            echo $this->env->getExtension('routing')->getPath("get_reservations");
            echo "\", \"";
            echo $this->env->getExtension('routing')->getPath("save_reservation");
            echo "\");
        }
    }
</script>
";
        }
        
        $__internal_0c45f7754df4d188bc5050a4c049ced8fc2c045ef3dbd463e979fa8c794d0f25->leave($__internal_0c45f7754df4d188bc5050a4c049ced8fc2c045ef3dbd463e979fa8c794d0f25_prof);

    }

    public function getTemplateName()
    {
        return "PlanningBundle:Reservation:new_reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 88,  261 => 85,  259 => 84,  230 => 58,  227 => 57,  213 => 55,  209 => 54,  199 => 46,  193 => 45,  186 => 43,  179 => 41,  174 => 40,  170 => 38,  164 => 36,  162 => 35,  159 => 34,  154 => 33,  150 => 32,  145 => 29,  131 => 28,  125 => 26,  117 => 24,  115 => 23,  108 => 22,  105 => 21,  88 => 20,  80 => 15,  75 => 12,  61 => 10,  57 => 9,  49 => 6,  43 => 5,  37 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="tabs" data-tabs id="job-tabs">*/
/*     <li class="tabs-title"><a href="#" id="peinture" onclick='open_table(this, "{{ path('get_reservations') }}", "{{ path('save_reservation') }}");'>Peinture</a></li>*/
/*     <li class="tabs-title"><a href="#" id="electricite" onclick='open_table(this, "{{ path('get_reservations') }}", "{{ path('save_reservation') }}");'>Electricité</a></li>*/
/*     <li class="tabs-title"><a href="#" id="plomberie" onclick='open_table(this, "{{ path('get_reservations') }}", "{{ path('save_reservation') }}");'>Plomberie</a></li>*/
/*     <li class="tabs-title"><a href="#" id="maconnerie" onclick='open_table(this, "{{ path('get_reservations') }}", "{{ path('save_reservation') }}");'>Maconnerie</a></li>*/
/*     <li class="tabs-title"><a href="#" id="architecture" onclick='open_table(this, "{{ path('get_reservations') }}", "{{ path('save_reservation') }}");'>Architecture Intérieure</a></li>*/
/* </ul>*/
/* <div id="loader" style="display: none; text-align: center;">*/
/*     {% image '@PlanningBundle/Resources/public/img/loader.gif' %}*/
/*         <img alt="loading" src="{{ asset_url }}" />*/
/*     {% endimage %}*/
/* </div>*/
/* <input type="hidden" id="selected_job" />*/
/* <table id="planning-table">*/
/*     <h3 id="actual-month" class="actual">{{ actualmonth }}</h3>*/
/*     <thead>*/
/*     <tr>*/
/*         <th>*/
/*         </th>*/
/*         {% for day in days %}*/
/*             {% if loop.first %}*/
/*             <th><a onclick='change_date_reservations("{{ path('change_date_reservations', {'Date': beforeDate} )}}");' class="button"><span class="prefix"><i class="fi-arrow-left"></i></span></a><span>{{ day }}</span></th>*/
/*             {% elseif loop.last %}*/
/*                 <th><span>{{ day }}</span><a onclick='change_date_reservations("{{ path('change_date_reservations', {'Date': afterDate})}}");' class="button"><span class="prefix"><i class="fi-arrow-right"></i></span></a></th>*/
/*             {% else %}*/
/*                 <th>{{ day }}</th>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for hours, reservation in reservations %}*/
/*         {% for key, day_reservation in reservation  %}*/
/*         <tr>*/
/*             {% if key == 0 %}*/
/*                 <td>{{ hours }}</td>*/
/*             {% else  %}*/
/*                 <td></td>*/
/*             {% endif %}*/
/*             {% for date_reservation in day_reservation  %}*/
/*                 <td></td>*/
/*             {% endfor %}*/
/*         </tr>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* <div class="reveal back-lightgray" id="modal-fiche-intervention" class="reveal-modal remove-whitespace" data-reveal>*/
/*     <div class="row">*/
/*         <div class="columns auth-plain">*/
/*             <div class="signup-panel left-solid back-lightgray">*/
/*                 <h2 class="welcome">Fiche d'intervention</h2>*/
/*                 <div id="loader_modal" style="display: none; text-align: center;">*/
/*                     {% image '@PlanningBundle/Resources/public/img/loader.gif' %}*/
/*                     <img alt="loading" src="{{ asset_url }}" />*/
/*                     {% endimage %}*/
/*                 </div>*/
/*                 <form name="connect" action="{{ path('save_fiche_intervention') }}" method="post">*/
/*                     <div class="row">*/
/*                         <label>Type d'habitation*/
/*                             <select id="home_type" name="home_type" required >*/
/*                                 <option value=""></option>*/
/*                                 <option value="home">Maison</option>*/
/*                                 <option value="apartment">Appartement</option>*/
/*                             </select>*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <label>*/
/*                             Quelle est la nature de votre problème ?*/
/*                             <textarea id="issue" name="issue" required placeholder="Exemple : Fuite d'eau" rows="8"></textarea>*/
/*                         </label>*/
/*                     </div>*/
/*                     <input type="hidden" id="idFiche" value="" name="idFiche" />*/
/*                     <input class="button" type="submit" value="Créer">*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <button class="close-button" data-close aria-label="Close modal" type="button">*/
/*         <span aria-hidden="true">&times;</span>*/
/*     </button>*/
/* </div>*/
/* {% if domain %}*/
/* <script>*/
/*     document.onreadystatechange = function () {*/
/*         if (document.readyState == "complete") {*/
/*             open_table("{{ domain }}", "{{ path('get_reservations') }}", "{{ path('save_reservation') }}");*/
/*         }*/
/*     }*/
/* </script>*/
/* {% endif %}*/
/* */
