<?php

/* panier/showPanier.html.twig */
class __TwigTemplate_b7c9f8c790146258892b8be0029a204109e99defa53a3950942dc453696ec7cf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "panier/showPanier.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/showPanier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/showPanier.html.twig"));

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

        echo "Shopping Cart";
        
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
        $context["total"] = 0;
        // line 7
        echo "<div class=\"container\">

    <h2 style=\"padding-top: 40px\">Your Shopping Cart</h2>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Quantité</th>
                <th>Taille</th>
                <th>Prix unitaire</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 21, $this->source); })())) == 0)) {
            // line 22
            echo "                <tr>
                    <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                </tr>
            ";
        }
        // line 26
        echo "            
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "            <tr>
                <form action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
            echo "\" method=\"get\">
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", []), "html", null, true);
            echo "</td>
                    <td>
                        <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 34
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" 
                                    ";
                // line 35
                if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 35, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"))) {
                    echo " 
                                        selected=\"selected\" 
                                    ";
                }
                // line 37
                echo ">
                                    ";
                // line 38
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        </select>
                    </td>
                    <td>
                        <select name=\"size\" class=\"span1\" onChange=\"this.form.submit()\">
                            <option value=\"s\" 
                                ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 46, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array") == "s")) {
                echo " 
                                    selected=\"selected\" 
                                ";
            }
            // line 49
            echo "                            >S</option>
                            <option value=\"m\" 
                                ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 51, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array") == "m")) {
                echo " 
                                    selected=\"selected\" 
                                ";
            }
            // line 54
            echo "                            >M</option>
                            <option value=\"l\" 
                                ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 56, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array") == "l")) {
                echo " 
                                    selected=\"selected\" 
                                ";
            }
            // line 59
            echo "                            >L</option>

                            <option value=\"xl\" 
                                ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 62, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array") == "xl")) {
                echo " 
                                    selected=\"selected\" 
                                ";
            }
            // line 65
            echo "                            >XL</option>
                        </select>
                    </td>
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", []), "html", null, true);
            echo " €</td>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "prix", []) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 69, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array")), "html", null, true);
            echo " €</td>
                    <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i></a></td>
                </form>
            </tr>
            ";
            // line 73
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 73, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["product"], "prix", []) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 73, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array")));
            // line 74
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>
    </table>
    ";
        // line 77
        if ((twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 77, $this->source); })())) != 0)) {
            // line 78
            echo "        <dl class=\"dl-horizontal pull-right\">
            <dt>Total  : ";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 79, $this->source); })()), "html", null, true);
            echo " €</dt>
        </dl>
        <div class=\"clearfix\"></div>
        </a>
      </p>
      ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 84, $this->source); })()), "user", [])) {
                // line 85
                echo "        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_checkout");
                echo "\" class=\"btn btn-dark pull-right\">Valider mon panier</a>
        <a href=\"";
                // line 86
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emptyPanier");
                echo "\" class=\"btn btn-danger pull-right\">Vider mon panier</a>
        ";
            } else {
                // line 88
                echo "        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" class=\"btn btn-dark pull-right\">Vous Identifier</a>
        <a href=\"";
                // line 89
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emptyPanier");
                echo "\" class=\"btn btn-danger pull-right\">Vider mon panier</a>
    ";
            }
            // line 91
            echo "    ";
        }
        // line 92
        echo "</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/showPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 96,  259 => 92,  256 => 91,  251 => 89,  246 => 88,  241 => 86,  236 => 85,  234 => 84,  226 => 79,  223 => 78,  221 => 77,  217 => 75,  211 => 74,  209 => 73,  203 => 70,  199 => 69,  195 => 68,  190 => 65,  184 => 62,  179 => 59,  173 => 56,  169 => 54,  163 => 51,  159 => 49,  153 => 46,  146 => 41,  137 => 38,  134 => 37,  128 => 35,  123 => 34,  119 => 33,  113 => 30,  109 => 29,  106 => 28,  102 => 27,  99 => 26,  93 => 22,  91 => 21,  75 => 7,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Shopping Cart{% endblock %}

{% block body %}
{% set total = 0%}
<div class=\"container\">

    <h2 style=\"padding-top: 40px\">Your Shopping Cart</h2>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Quantité</th>
                <th>Taille</th>
                <th>Prix unitaire</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            {% if products|length == 0 %}
                <tr>
                    <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                </tr>
            {% endif %}
            
            {% for product in products %}
            <tr>
                <form action=\"{{ path('ajouterPanier', { 'id' : product.id }) }}\" method=\"get\">
                    <td>{{ product.name }}</td>
                    <td>
                        <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                            {% for i in 1..10 %}
                                <option value=\"{{ i }}\" 
                                    {% if i == panier[product.id] %} 
                                        selected=\"selected\" 
                                    {% endif %}>
                                    {{ i }}
                                </option>
                            {% endfor %}
                        </select>
                    </td>
                    <td>
                        <select name=\"size\" class=\"span1\" onChange=\"this.form.submit()\">
                            <option value=\"s\" 
                                {% if size[product.id] == \"s\"  %} 
                                    selected=\"selected\" 
                                {% endif %}
                            >S</option>
                            <option value=\"m\" 
                                {% if size[product.id] == \"m\"  %} 
                                    selected=\"selected\" 
                                {% endif %}
                            >M</option>
                            <option value=\"l\" 
                                {% if size[product.id] == \"l\" %} 
                                    selected=\"selected\" 
                                {% endif %}
                            >L</option>

                            <option value=\"xl\" 
                                {% if size[product.id] == \"xl\"  %} 
                                    selected=\"selected\" 
                                {% endif %}
                            >XL</option>
                        </select>
                    </td>
                    <td>{{ product.prix }} €</td>
                    <td>{{ product.prix * panier[product.id] }} €</td>
                    <td><a href=\"{{ path('supprimerPanier', { 'id' : product.id }) }}\"><i class=\"fas fa-trash\"></i></a></td>
                </form>
            </tr>
            {% set total = total + (product.prix * panier[product.id]) %}
            {% endfor %}
        </tbody>
    </table>
    {% if products|length != 0 %}
        <dl class=\"dl-horizontal pull-right\">
            <dt>Total  : {{ total }} €</dt>
        </dl>
        <div class=\"clearfix\"></div>
        </a>
      </p>
      {% if app.user %}
        <a href=\"{{ path('order_checkout')}}\" class=\"btn btn-dark pull-right\">Valider mon panier</a>
        <a href=\"{{ path('emptyPanier') }}\" class=\"btn btn-danger pull-right\">Vider mon panier</a>
        {% else %}
        <a href=\"{{ path('app_login')}}\" class=\"btn btn-dark pull-right\">Vous Identifier</a>
        <a href=\"{{ path('emptyPanier') }}\" class=\"btn btn-danger pull-right\">Vider mon panier</a>
    {% endif %}
    {% endif %}
</div>


{% endblock %}
{% block footer %}{% endblock %}", "panier/showPanier.html.twig", "/Users/paulgambier/Desktop/Rendu/codac_pff/app/templates/panier/showPanier.html.twig");
    }
}
