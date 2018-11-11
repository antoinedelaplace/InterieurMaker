<?php

/* PlanningBundle:Reservation:reservation.html.twig */
class __TwigTemplate_c0c4f5859d0d3f97a7421a8e0001372afa373fa3b4899bf03c39479327bec1c8 extends Twig_Template
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
        $__internal_42050b65c405e8985ac2719f416e69166a2dfa397bb817b7c7e91fead7d6ca61 = $this->env->getExtension("native_profiler");
        $__internal_42050b65c405e8985ac2719f416e69166a2dfa397bb817b7c7e91fead7d6ca61->enter($__internal_42050b65c405e8985ac2719f416e69166a2dfa397bb817b7c7e91fead7d6ca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PlanningBundle:Reservation:reservation.html.twig"));

        // line 1
        echo "<h3 class=\"actual\">";
        echo twig_escape_filter($this->env, (isset($context["actualmonth"]) ? $context["actualmonth"] : $this->getContext($context, "actualmonth")), "html", null, true);
        echo "</h3>
<table>
    <thead>
    <tr>
        <th>
            ";
        // line 6
        if ((isset($context["isuser"]) ? $context["isuser"] : $this->getContext($context, "isuser"))) {
            // line 7
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("new_rdv");
            echo "\" class=\"button\">Nouveau RDV</a>
            ";
        }
        // line 9
        echo "        </th>
        ";
        // line 10
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
            // line 11
            echo "            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 12
                echo "                <th><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_date_planning", array("Date" => (isset($context["beforeDate"]) ? $context["beforeDate"] : $this->getContext($context, "beforeDate")))), "html", null, true);
                echo "\" class=\"button\"><span class=\"prefix\"><i class=\"fi-arrow-left\"></i></span></a>";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</th>
            ";
            } elseif ($this->getAttribute(            // line 13
$context["loop"], "last", array())) {
                // line 14
                echo "                <th>";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_date_planning", array("Date" => (isset($context["afterDate"]) ? $context["afterDate"] : $this->getContext($context, "afterDate")))), "html", null, true);
                echo "\" class=\"button\"><span class=\"prefix\"><i class=\"fi-arrow-right\"></i></span></a></th>
            ";
            } else {
                // line 16
                echo "                <th>";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</th>
            ";
            }
            // line 18
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
        // line 19
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["hours"] => $context["reservation"]) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["reservation"]);
            foreach ($context['_seq'] as $context["key"] => $context["day_reservation"]) {
                // line 24
                echo "            <tr>
                ";
                // line 25
                if (($context["key"] == 0)) {
                    // line 26
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, $context["hours"], "html", null, true);
                    echo "</td>
                ";
                } else {
                    // line 28
                    echo "                    <td></td>
                ";
                }
                // line 30
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["day_reservation"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date_reservation"]) {
                    // line 31
                    echo "                    ";
                    if ($this->getAttribute($context["date_reservation"], "heure", array(), "any", true, true)) {
                        // line 32
                        echo "                        <td class=\"meeting domain_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["date_reservation"], "idDomaine", array()), "html", null, true);
                        echo "\"><a onclick=\"get_technical_sheet('";
                        echo $this->env->getExtension('routing')->getPath("open_fiche_intervention");
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["date_reservation"], "id", array()), "html", null, true);
                        echo ", '";
                        echo $this->env->getExtension('routing')->getPath("im_webrtc");
                        echo "')\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["date_reservation"], "heure", array()), "html", null, true);
                        echo "</a></td>
                    ";
                    } else {
                        // line 34
                        echo "                        <td></td>
                    ";
                    }
                    // line 36
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date_reservation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['day_reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hours'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
</table>
<div class=\"reveal back-lightgray\" id=\"modal-fiche-intervention\" class=\"reveal-modal remove-whitespace\" data-reveal>
    <div class=\"row\">
        <div class=\"columns auth-plain\">
            <div class=\"signup-panel left-solid back-lightgray\">
                <h2 class=\"welcome\">Fiche d'intervention</h2>
                <div id=\"loader_modal\" style=\"display: none; text-align: center;\">
                    ";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7912cff_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7912cff_0") : $this->env->getExtension('asset')->getAssetUrl("images/7912cff_loader_1.gif");
            // line 49
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
        // line 51
        echo "                </div>
                <div class=\"row\">
                    <label>Type d'habitation
                        <select id=\"home_type\" disabled>
                            <option value=\"\"></option>
                            <option value=\"home\">Maison</option>
                            <option value=\"apartment\">Appartement</option>
                        </select>
                    </label>
                </div>
                <div class=\"row\">
                    <label>
                        Nature du problème
                        <textarea id=\"issue\" disabled rows=\"8\"></textarea>
                    </label>
                </div>
                <div class=\"row\" id=\"webrtc\">

                </div>
                <input type=\"hidden\" id=\"idFiche\" value=\"\" name=\"idFiche\" />
            </div>
        </div>
    </div>
    <button class=\"close-button\" data-close aria-label=\"Close modal\" type=\"button\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
";
        
        $__internal_42050b65c405e8985ac2719f416e69166a2dfa397bb817b7c7e91fead7d6ca61->leave($__internal_42050b65c405e8985ac2719f416e69166a2dfa397bb817b7c7e91fead7d6ca61_prof);

    }

    public function getTemplateName()
    {
        return "PlanningBundle:Reservation:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 51,  187 => 49,  183 => 48,  173 => 40,  167 => 39,  160 => 37,  154 => 36,  150 => 34,  136 => 32,  133 => 31,  128 => 30,  124 => 28,  118 => 26,  116 => 25,  113 => 24,  108 => 23,  104 => 22,  99 => 19,  85 => 18,  79 => 16,  71 => 14,  69 => 13,  62 => 12,  59 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  22 => 1,);
    }
}
/* <h3 class="actual">{{ actualmonth }}</h3>*/
/* <table>*/
/*     <thead>*/
/*     <tr>*/
/*         <th>*/
/*             {% if isuser %}*/
/*                 <a href="{{ path('new_rdv') }}" class="button">Nouveau RDV</a>*/
/*             {% endif %}*/
/*         </th>*/
/*         {% for day in days %}*/
/*             {% if loop.first %}*/
/*                 <th><a href="{{ path('change_date_planning', {'Date': beforeDate}) }}" class="button"><span class="prefix"><i class="fi-arrow-left"></i></span></a>{{ day }}</th>*/
/*             {% elseif loop.last %}*/
/*                 <th>{{ day }}<a href="{{ path('change_date_planning', {'Date': afterDate}) }}" class="button"><span class="prefix"><i class="fi-arrow-right"></i></span></a></th>*/
/*             {% else %}*/
/*                 <th>{{ day }}</th>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for hours, reservation in reservations %}*/
/*         {% for key, day_reservation in reservation  %}*/
/*             <tr>*/
/*                 {% if key == 0 %}*/
/*                     <td>{{ hours }}</td>*/
/*                 {% else  %}*/
/*                     <td></td>*/
/*                 {% endif %}*/
/*                 {% for date_reservation in day_reservation  %}*/
/*                     {% if date_reservation.heure is defined %}*/
/*                         <td class="meeting domain_{{ date_reservation.idDomaine }}"><a onclick="get_technical_sheet('{{ path('open_fiche_intervention') }}', {{ date_reservation.id }}, '{{ path('im_webrtc') }}')">{{ date_reservation.heure }}</a></td>*/
/*                     {% else %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </tr>*/
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
/*                 <div class="row">*/
/*                     <label>Type d'habitation*/
/*                         <select id="home_type" disabled>*/
/*                             <option value=""></option>*/
/*                             <option value="home">Maison</option>*/
/*                             <option value="apartment">Appartement</option>*/
/*                         </select>*/
/*                     </label>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <label>*/
/*                         Nature du problème*/
/*                         <textarea id="issue" disabled rows="8"></textarea>*/
/*                     </label>*/
/*                 </div>*/
/*                 <div class="row" id="webrtc">*/
/* */
/*                 </div>*/
/*                 <input type="hidden" id="idFiche" value="" name="idFiche" />*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <button class="close-button" data-close aria-label="Close modal" type="button">*/
/*         <span aria-hidden="true">&times;</span>*/
/*     </button>*/
/* </div>*/
/* */
