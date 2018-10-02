<?php

/* @Football\Default\listPlayers.html.twig */
class __TwigTemplate_4fd9efcc8b6575172f496e2719e6246aa97ec93526a30e16e68df2e442d70cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Football\\Default\\listPlayers.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Football\\Default\\listPlayers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Football\\Default\\listPlayers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-sm-5 col-xs-5\">
\t\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_teams_by_league", array("league" => ($context["league"] ?? $this->getContext($context, "league")))), "html", null, true);
        echo "\" class=\"back\"><i class=\"fa fa-angle-left\"></i>Back</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"offset-md-3 offset-sm-2 offset-xs-2 col-md-7 col-sm-5 col-xs-5\">
\t\t\t\t\t<h3>";
        // line 10
        echo twig_escape_filter($this->env, ($context["team"] ?? $this->getContext($context, "team")), "html", null, true);
        echo "</h3>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo " \t<div class=\"container\">
\t\t<div class=\"row\"> 
\t\t    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? $this->getContext($context, "players")));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 20
            echo "\t\t    \t<div class=\"col-lg-4 col-md-6 col-xs-6\">
\t\t    \t\t<div class=\"player\">
\t\t    \t\t\t<div class=\"player-img\">
\t\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "strThumb", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "strPlayer", array()), "html", null, true);
            echo "\" class=\"img-fluid img-thumbnail\" height=\"100\" width=\"100\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"player-info\">
\t\t\t\t\t\t\t<h3 class=\"player-name\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "strPlayer", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t<h6 class=\"text-secondary\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "strPosition", array()), "html", null, true);
            echo "</h6>  
\t\t\t\t\t\t\t<h6 class=\"text-secondary\">Birthdate : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "dateBorn", array()), "html", null, true);
            echo "</h6>  
\t\t\t\t\t\t\t<h6 class=\"text-secondary\">Price : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "strSigning", array()), "html", null, true);
            echo "</h6>  
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t    \t</div>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Football\\Default\\listPlayers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  98 => 23,  93 => 20,  89 => 19,  85 => 17,  76 => 16,  61 => 10,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-sm-5 col-xs-5\">
\t\t\t\t\t<a href=\"{{ path('search_teams_by_league', {'league':league}) }}\" class=\"back\"><i class=\"fa fa-angle-left\"></i>Back</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"offset-md-3 offset-sm-2 offset-xs-2 col-md-7 col-sm-5 col-xs-5\">
\t\t\t\t\t<h3>{{team}}</h3>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
{% endblock %}\t

{% block body %}
 \t<div class=\"container\">
\t\t<div class=\"row\"> 
\t\t    {% for player in players %}
\t\t    \t<div class=\"col-lg-4 col-md-6 col-xs-6\">
\t\t    \t\t<div class=\"player\">
\t\t    \t\t\t<div class=\"player-img\">
\t\t\t\t\t\t\t<img src=\"{{ player.strThumb}}\" alt=\"{{player.strPlayer}}\" class=\"img-fluid img-thumbnail\" height=\"100\" width=\"100\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"player-info\">
\t\t\t\t\t\t\t<h3 class=\"player-name\">{{player.strPlayer}}</h3>
\t\t\t\t\t\t\t<h6 class=\"text-secondary\">{{player.strPosition}}</h6>  
\t\t\t\t\t\t\t<h6 class=\"text-secondary\">Birthdate : {{player.dateBorn}}</h6>  
\t\t\t\t\t\t\t<h6 class=\"text-secondary\">Price : {{player.strSigning}}</h6>  
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t    \t</div>
\t\t    {% endfor %}
\t\t</div>
\t</div>
{% endblock %}", "@Football\\Default\\listPlayers.html.twig", "/var/www/html/paris_sportifs/src/FootballBundle/Resources/views/Default/listPlayers.html.twig");
    }
}
