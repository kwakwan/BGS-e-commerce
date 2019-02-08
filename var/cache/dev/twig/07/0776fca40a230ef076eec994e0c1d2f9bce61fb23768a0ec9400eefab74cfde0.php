<?php

/* /panier/showPanier.html.twig */
class __TwigTemplate_899c7e04e57368e3b6f3f71a7cc77e829edaece2e2809173c0a8d99f7b2d81b0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/panier/showPanier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/panier/showPanier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/panier/showPanier.html.twig"));

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
        // line 20
        if ((twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 20, $this->source); })())) == 0)) {
            // line 21
            echo "                <tr>
                    <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                </tr>
            ";
        }
        // line 25
        echo "            
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "            
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 28, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["prod"]) {
                // line 29
                echo "                <tr>
                    <form action=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifyPanier", ["size_panier" => $context["key"], "id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
                echo "\" method=\"get\">
                        <input type=\"hidden\" name=\"size_panier\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                        <td>
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_one", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
                echo "\">
                        ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", []), "html", null, true);
                echo "</td>
                        </a>
                        <td>
                            <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 39
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" 
                                        ";
                    // line 40
                    if (($context["i"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 40, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"), $context["key"], [], "array"))) {
                        echo " 
                                            selected=\"selected\" 
                                        ";
                    }
                    // line 42
                    echo ">
                                        ";
                    // line 43
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "
                                    </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                            </select>
                        </td>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", []), "html", null, true);
                echo " €</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "prix", []) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 50, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"), $context["key"], [], "array")), "html", null, true);
                echo " €</td>
                        <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", []), "size_delete" => $context["key"]]), "html", null, true);
                echo "\"><i class=\"fas fa-trash\"></i></a></td>
                    </form>
                </tr>
                ";
                // line 54
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 54, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["product"], "prix", []) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"), $context["key"], [], "array")));
                // line 55
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
    ";
        // line 59
        if ((twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 59, $this->source); })())) != 0)) {
            // line 60
            echo "        <dl class=\"dl-horizontal pull-right\">
            <dt>Total  :";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 61, $this->source); })()), "html", null, true);
            echo " €</dt>
        </dl>
        <div class=\"clearfix\"></div>
        </a>
      </p>
       ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->source); })()), "user", [])) {
                // line 67
                echo "        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_checkout");
                echo "\" class=\"btn btn-dark pull-right\">Valider mon panier</a>
        <a href=\"";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emptyPanier");
                echo "\" class=\"btn btn-danger pull-right\">Vider mon panier</a>
        ";
            } else {
                // line 70
                echo "        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" class=\"btn btn-dark pull-right\">Vous Identifier</a>
        <a href=\"";
                // line 71
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emptyPanier");
                echo "\" class=\"btn btn-danger pull-right\">Vider mon panier</a>
    ";
            }
            // line 73
            echo "    ";
        }
        // line 74
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
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
        return "/panier/showPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 77,  240 => 74,  237 => 73,  232 => 71,  227 => 70,  222 => 68,  217 => 67,  215 => 66,  207 => 61,  204 => 60,  202 => 59,  198 => 57,  192 => 56,  186 => 55,  184 => 54,  178 => 51,  174 => 50,  170 => 49,  166 => 48,  162 => 46,  153 => 43,  150 => 42,  144 => 40,  139 => 39,  135 => 38,  128 => 34,  124 => 33,  119 => 31,  115 => 30,  112 => 29,  108 => 28,  105 => 27,  101 => 26,  98 => 25,  92 => 21,  90 => 20,  75 => 7,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
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
            
                {% for key, prod in panier[product.id] %}
                <tr>
                    <form action=\"{{ path('modifyPanier', { 'size_panier' : key, 'id' : product.id }) }}\" method=\"get\">
                        <input type=\"hidden\" name=\"size_panier\" value=\"{{key}}\">
                        <td>
                        <a href=\"{{path('show_one', {'id': product.id }) }}\">
                        {{ product.name }}</td>
                        </a>
                        <td>
                            <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                {% for i in 0..10 %}
                                    <option value=\"{{ i }}\" 
                                        {% if i == panier[product.id][key] %} 
                                            selected=\"selected\" 
                                        {% endif %}>
                                        {{ i }}
                                    </option>
                                {% endfor %}
                            </select>
                        </td>
                        <td>{{ key | upper}}</td>
                        <td>{{ product.prix }} €</td>
                        <td>{{ product.prix * panier[product.id][key] }} €</td>
                        <td><a href=\"{{ path('supprimerPanier', { 'id' : product.id, 'size_delete' :key }) }}\"><i class=\"fas fa-trash\"></i></a></td>
                    </form>
                </tr>
                {% set total = total + (product.prix * panier[product.id][key] ) %}
                {% endfor %}
            {% endfor %}
        </tbody>
    </table>
    {% if products|length != 0 %}
        <dl class=\"dl-horizontal pull-right\">
            <dt>Total  :{{ total }} €</dt>
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
{% block footer %}{% endblock %}", "/panier/showPanier.html.twig", "/Users/paulgambier/Desktop/Rendu/codac_pff/app/templates/panier/showPanier.html.twig");
    }
}
