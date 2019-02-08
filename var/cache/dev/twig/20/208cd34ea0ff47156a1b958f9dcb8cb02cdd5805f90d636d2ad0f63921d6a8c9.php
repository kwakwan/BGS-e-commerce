<?php

/* panier/checkout.html.twig */
class __TwigTemplate_30e51ecc9de5fe36758e55f12bf5b2294f104704a8d19f2d6fc77898ddc1427e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "panier/checkout.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/checkout.html.twig"));

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

        echo "Hello PanierController!";
        
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
        echo "    ";
        $context["total"] = 0;
        // line 7
        echo "    <div class=\"container\">
         <div  class=\"nav-space-checkout\" style=\"padding-top: 40px\">
            <div class=\"container\">
                <div class=\"row\" style=\"margin-bottom:20px\">
                    <div>
                        <h1 class=\"checkout-header\" style=\"margin-bottom:35px\">Checkout</h1>
                    </div>
                    <div class=\"col-xs-12 col-sm-6\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <th class=\"col-xs-4 active\">Product</th>
                                <th class=\"col-xs-4 active\">Size</th>
                                <th class=\"col-xs-3 active text-center\">Quantité</th>
                                <th class=\"col-xs-3 active text-center\">Unit Price</th>
                                <th class=\"col-xs-3 active text-center\">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["prod"]) {
                // line 28
                echo "                                    <tr>
                                        <th class=\"col-xs-4 checkout-product-name\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", []), "html", null, true);
                echo "</th>
                                        <td class=\"col-xs-3\">";
                // line 30
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
                echo "</td>
                                        <td class=\"col-xs-3 active text-center\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"), $context["key"], [], "array"), "html", null, true);
                echo "</td>
                                        <td class=\"col-xs-3\">\$";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", []), "html", null, true);
                echo "</td>
                                        <td class=\"col-xs-3\">\$";
                // line 33
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "prix", []) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 33, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"), $context["key"], [], "array")), "html", null, true);
                echo "</td>
                                        ";
                // line 34
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 34, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["product"], "prix", []) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"), $context["key"], [], "array")));
                // line 35
                echo "                                    </tr> 
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                    
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class=\"col-xs-6 info\">Total</th>
                                <td></td>
                                <td class=\"col-xs-3 text-center\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "session", []), "get", [0 => "qte_items"], "method"), "html", null, true);
        echo "</td>
                                <td></td>
                                <td class=\"col-xs-3 info checkout-total\">\$";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</td>
                            </tr>
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"form-group\">
                <form action=\"\" id=\"centerForm\" method=\"POST\">
                    <script
                            src=\"https://checkout.stripe.com/checkout.js\" class=\"btn stripe-button\"
                            data-key=\"pk_test_HxZzNHy8LImKK9LDtgMDRBwd\"
                            data-amount=\"";
        // line 62
        echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 62, $this->source); })()) * 100), "html", null, true);
        echo "\"
                            data-name=\"Spunsky KILL\"
                            data-description=\"Widget\"
                            data-image=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"
                            data-zip-code=\"true\"
                            data-locale=\"auto\">
                    </script>
                </form>
            </div>
            ";
        // line 71
        if ((twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 71, $this->source); })())) != 0)) {
            // line 72
            echo "
            ";
        }
        // line 74
        echo "        </div>
        <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showPanier");
        echo "\" class=\"btn btn-dark btn-sm\" style=\"margin-left:49px\">Shopping Cart</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
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
        return "panier/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 78,  200 => 75,  197 => 74,  193 => 72,  191 => 71,  182 => 65,  176 => 62,  157 => 46,  152 => 44,  144 => 38,  138 => 37,  131 => 35,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  106 => 28,  101 => 27,  97 => 26,  76 => 7,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello PanierController!{% endblock %}

{% block body %}
    {% set total = 0%}
    <div class=\"container\">
         <div  class=\"nav-space-checkout\" style=\"padding-top: 40px\">
            <div class=\"container\">
                <div class=\"row\" style=\"margin-bottom:20px\">
                    <div>
                        <h1 class=\"checkout-header\" style=\"margin-bottom:35px\">Checkout</h1>
                    </div>
                    <div class=\"col-xs-12 col-sm-6\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <th class=\"col-xs-4 active\">Product</th>
                                <th class=\"col-xs-4 active\">Size</th>
                                <th class=\"col-xs-3 active text-center\">Quantité</th>
                                <th class=\"col-xs-3 active text-center\">Unit Price</th>
                                <th class=\"col-xs-3 active text-center\">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for product in products %}
                                {% for key, prod in panier[product.id] %}
                                    <tr>
                                        <th class=\"col-xs-4 checkout-product-name\">{{ product.name }}</th>
                                        <td class=\"col-xs-3\">{{ key | upper}}</td>
                                        <td class=\"col-xs-3 active text-center\">{{   panier[product.id][key] }}</td>
                                        <td class=\"col-xs-3\">\${{ product.prix }}</td>
                                        <td class=\"col-xs-3\">\${{ product.prix *  panier[product.id][key] }}</td>
                                        {% set total = total + (product.prix *  panier[product.id][key]) %}
                                    </tr> 
                                {% endfor %}
                            {% endfor %}
                                    
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class=\"col-xs-6 info\">Total</th>
                                <td></td>
                                <td class=\"col-xs-3 text-center\">{{ app.session.get('qte_items')  }}</td>
                                <td></td>
                                <td class=\"col-xs-3 info checkout-total\">\${{ total }}</td>
                            </tr>
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"form-group\">
                <form action=\"\" id=\"centerForm\" method=\"POST\">
                    <script
                            src=\"https://checkout.stripe.com/checkout.js\" class=\"btn stripe-button\"
                            data-key=\"pk_test_HxZzNHy8LImKK9LDtgMDRBwd\"
                            data-amount=\"{{ total * 100 }}\"
                            data-name=\"Spunsky KILL\"
                            data-description=\"Widget\"
                            data-image=\"{{ asset('images/logo.png') }}\"
                            data-zip-code=\"true\"
                            data-locale=\"auto\">
                    </script>
                </form>
            </div>
            {% if products|length != 0 %}

            {% endif %}
        </div>
        <a href=\"{{ path('showPanier')}}\" class=\"btn btn-dark btn-sm\" style=\"margin-left:49px\">Shopping Cart</a>
    </div>
{% endblock %}
{% block footer %}{% endblock %}", "panier/checkout.html.twig", "/Users/paulgambier/Desktop/Rendu/codac_pff/app/templates/panier/checkout.html.twig");
    }
}
