<?php

/* @Football\Default\listTeams.html.twig */
class __TwigTemplate_73fa08920df070d07eefcf088b5acfc34bc2d5b0cff2667179197a690a470175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Football\\Default\\listTeams.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Football\\Default\\listTeams.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Football\\Default\\listTeams.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "\t<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_teams_by_league");
        echo "\" method=\"POST\">
\t\t<div class=\"container seach-by-league\">
\t\t\t<div class=\"row\">
\t\t        <div class=\"col-md-12\">
\t                <div class=\"input-group stylish-input-group\">
\t                    <span class=\"input-group-addon\">
\t                        <button type=\"submit\">
\t                            <span class=\"fa fa-search search_icon\"></span>
\t                        </button>  
\t                    </span>
\t                    <input type=\"text\" name=\"league-name\" class=\"form-control\"  placeholder=\"Search by league\" value=\"";
        // line 13
        if ((isset($context["league"]) || array_key_exists("league", $context))) {
            echo twig_escape_filter($this->env, ($context["league"] ?? $this->getContext($context, "league")), "html", null, true);
        }
        echo "\" >
\t                </div>
\t\t        </div>
\t\t\t</div>
\t\t</div>
\t </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo " \t<div class=\"container teams-container\" style=\"margin-top: 15px;\">
\t\t<div class=\"row\"> 
\t\t    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? $this->getContext($context, "teams")));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 25
            echo "\t\t    \t<div class=\"col-lg-3 col-md-4 col-xs-6 teams\">
\t\t    \t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_players_by_team", array("team" => $this->getAttribute($context["team"], "strTeam", array()), "league" => ($context["league"] ?? $this->getContext($context, "league")))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "strTeamBadge", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "strTeam", array()), "html", null, true);
            echo "\" class=\"img-fluid img-thumbnail\" />
\t\t\t\t\t</a>\t
\t\t    \t</div>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Football\\Default\\listTeams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  107 => 27,  103 => 26,  100 => 25,  96 => 24,  92 => 22,  83 => 21,  64 => 13,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block header %}
\t<form action=\"{{ path('search_teams_by_league') }}\" method=\"POST\">
\t\t<div class=\"container seach-by-league\">
\t\t\t<div class=\"row\">
\t\t        <div class=\"col-md-12\">
\t                <div class=\"input-group stylish-input-group\">
\t                    <span class=\"input-group-addon\">
\t                        <button type=\"submit\">
\t                            <span class=\"fa fa-search search_icon\"></span>
\t                        </button>  
\t                    </span>
\t                    <input type=\"text\" name=\"league-name\" class=\"form-control\"  placeholder=\"Search by league\" value=\"{% if league is defined %}{{league}}{% endif %}\" >
\t                </div>
\t\t        </div>
\t\t\t</div>
\t\t</div>
\t </form>
{% endblock %}\t

{% block body %}
 \t<div class=\"container teams-container\" style=\"margin-top: 15px;\">
\t\t<div class=\"row\"> 
\t\t    {% for team in teams %}
\t\t    \t<div class=\"col-lg-3 col-md-4 col-xs-6 teams\">
\t\t    \t\t<a href=\"{{ path('list_players_by_team', {'team': team.strTeam,'league':league}) }}\">
\t\t\t\t\t\t<img src=\"{{ team.strTeamBadge}}\" alt=\"{{team.strTeam}}\" class=\"img-fluid img-thumbnail\" />
\t\t\t\t\t</a>\t
\t\t    \t</div>
\t\t    {% endfor %}
\t\t</div>
\t</div>
{% endblock %}", "@Football\\Default\\listTeams.html.twig", "/var/www/html/paris_sportifs/src/FootballBundle/Resources/views/Default/listTeams.html.twig");
    }
}
