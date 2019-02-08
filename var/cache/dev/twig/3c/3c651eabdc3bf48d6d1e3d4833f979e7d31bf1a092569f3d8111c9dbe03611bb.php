<?php

/* home/ourStory.html.twig */
class __TwigTemplate_13d29c7ba62f52a5197b3c8faca2e4431c9689a5a92c6920700aa316423854bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/ourStory.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/ourStory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/ourStory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Our Story";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<img src=\"/img/our_story.png\" alt=\"\" class=\"img-fluid\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col\" style=\"margin-bottom:200px\">
        <p>BGS, c'est la rencontre de 3 jeunes développeurs web au sein d'une formation à la Coding Academy.
        <br>
            Cihan BOZHAN, Kwan GAMBIER  & Jonathan SUZZONI.
        <br><br>
            Alors que les lignes de code les éloignés de leur passion commune pour la mode, ils eurent comme brillante idée de
        </p>
        </div>
        <div class=\"col\">
        <p> créer leur propre marque de prêt-à-porter.
        <br>
            Ayant quartier libre pour leur projet de fin d'étude, ils prirent la décision de développer la Collection BGS pour une clientèle masculine.
        <br><br>
            Après avoir réalisé la conception de leur site de e-commerce, nécessaire à la vente internationale de leurs produits, chacun avait une mission :
        </p>
        </div>
        <div class=\"col\">
        <p>L'identité de nos trois gammes de produits(Blazer, Pants, Bag) fut designer par Kwan GAMBIER.
        <br>
            La fabrication de la Collection fut réalisé en Turquie grâce aux contacts de Cihan BOZHAN dans l'industrie du textile.
        <br>
            La distribution fut assuré par Jonathan SUZZONI pour ces relations dans le monde de la communication.
            <br>
            Grâce aux compétences toutes complémentaires de l'équipe, BGS est ainsi rapidement naît.
        </p>
        </div>    
  <div class=\"col\"></div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/ourStory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Our Story{% endblock %}

{% block body %}
<img src=\"/img/our_story.png\" alt=\"\" class=\"img-fluid\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col\" style=\"margin-bottom:200px\">
        <p>BGS, c'est la rencontre de 3 jeunes développeurs web au sein d'une formation à la Coding Academy.
        <br>
            Cihan BOZHAN, Kwan GAMBIER  & Jonathan SUZZONI.
        <br><br>
            Alors que les lignes de code les éloignés de leur passion commune pour la mode, ils eurent comme brillante idée de
        </p>
        </div>
        <div class=\"col\">
        <p> créer leur propre marque de prêt-à-porter.
        <br>
            Ayant quartier libre pour leur projet de fin d'étude, ils prirent la décision de développer la Collection BGS pour une clientèle masculine.
        <br><br>
            Après avoir réalisé la conception de leur site de e-commerce, nécessaire à la vente internationale de leurs produits, chacun avait une mission :
        </p>
        </div>
        <div class=\"col\">
        <p>L'identité de nos trois gammes de produits(Blazer, Pants, Bag) fut designer par Kwan GAMBIER.
        <br>
            La fabrication de la Collection fut réalisé en Turquie grâce aux contacts de Cihan BOZHAN dans l'industrie du textile.
        <br>
            La distribution fut assuré par Jonathan SUZZONI pour ces relations dans le monde de la communication.
            <br>
            Grâce aux compétences toutes complémentaires de l'équipe, BGS est ainsi rapidement naît.
        </p>
        </div>    
  <div class=\"col\"></div>
</div>
</div>

{% endblock %}
", "home/ourStory.html.twig", "/Users/paulgambier/Desktop/Rendu/codac_pff/app/templates/home/ourStory.html.twig");
    }
}
