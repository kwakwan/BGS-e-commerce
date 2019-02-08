<?php

/* base.html.twig */
class __TwigTemplate_7b1cbfe8d51204b1bdb61d43d65264fdc83d0c9df81cedb63c28f6d9e7608b65 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
    ";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        // line 96
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "</div>
";
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 117
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src=";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/js/animate.js"), "html", null, true);
        echo "></script>

    <script type=\"text/javascript\"> 
    \$(document).ready(function()
        {
            if(\$('.produit').mouseenter())
            {
                \$(this).removeClass(\"bounceInRight\");
                \$(this).addClass(\"zoomIn\");
            };
        });
    </script>


    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/lux/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\">
       <link rel=\"stylesheet\" href=\"/css/style.css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_navbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 16
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand animated\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" style=\"font-size:52px; padding-left:30px\">B G S</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
    <ul class=\"navbar-nav mx-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link animated fadeIn \" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">SHOP</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link animated fadeIn \" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ourStory");
        echo "\">OUR STORY</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link animated fadeIn\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link animated fadeIn\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
    <span style=\"font-size:25px\">
    <ul class=\"navbar-nav mx-auto\">
    <div>
    <li class=\"nav-item\">
        </form>
    </li>
    </div>
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->source); })()), "user", [])) {
            // line 46
            echo "    <div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"padding-left:28px; padding-right:28px; margin-right:20px\">
    My account !
  </button>
  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
    <a class=\"dropdown-item\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">Profile</a>
    ";
            // line 52
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 53
                echo "    <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo "\">Admin User</a>
    <div class=\"dropdown-divider\"></div>
    <a class=\"dropdown-item\" href=\"";
                // line 55
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
                echo "\">Admin Product</a>
    <a class=\"dropdown-item\" href=\"";
                // line 56
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_new");
                echo "\">Add New Products</a>
    ";
            }
            // line 58
            echo "    <div class=\"dropdown-divider\"></div>
      <a class=\"dropdown-item\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
      ";
            // line 61
            echo "  </div>
</div>
    ";
        } else {
            // line 64
            echo "    <li class=\"nav-item\">
    <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
    <i class=\"fas fa-user-circle\"></i>
    </a>
    </li>
    ";
        }
        // line 70
        echo "    <li class=\"nav-item\">
    <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showPanier");
        echo "\">
    <i class=\"fas fa-cart-arrow-down\">
     ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "qte_items"], "method", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 73, $this->source); })()), "session", []), "get", [0 => "qte_items"], "method") > 0))) {
            // line 74
            echo "      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->source); })()), "session", []), "get", [0 => "qte_items"], "method"), "html", null, true);
            echo "
    ";
        }
        // line 76
        echo "    </i>
    </a>
    </li>
    </ul>
    </span>
    </form>
  </div>
</nav>
<div class=\"container\">

";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 86, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 87
            echo "  <div class=\"container\">
    <div class=\"alert alert-";
            // line 88
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
      ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 90
                echo "          <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 99
        echo "<footer class=\"footer\">
<div class=\"jumbotron bg-light border-bottom-0 border-left-0 border-right-0\" style=\"text-align:center; padding-top:40px; padding-bottom:40px; margin-bottom:0px\">
  <h5 class=\"display-5\">Don't forget to say hello !</h5>
  <span style=\"font-size:30px\">
  <a href=\"https://www.facebook.com/pages/creation/?ref_type=sitefooter\">
  <i class=\"fab fa-facebook-f\" style=\"padding-right:25px\"></i>
  </a>
  <a href=\"https://twitter.com/?lang=fr\">
  <i class=\"fab fa-twitter\" style=\"padding-right:20px\"></i>
  </a>
  <a href=\"https://www.instagram.com/?hl=en\">
  <i class=\"fab fa-instagram\"></i>
  </a>

  </span>
</div>
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 117,  343 => 99,  334 => 98,  317 => 96,  301 => 92,  292 => 90,  288 => 89,  284 => 88,  281 => 87,  277 => 86,  265 => 76,  259 => 74,  257 => 73,  252 => 71,  249 => 70,  241 => 65,  238 => 64,  233 => 61,  229 => 59,  226 => 58,  221 => 56,  217 => 55,  211 => 53,  209 => 52,  205 => 51,  198 => 46,  196 => 45,  182 => 34,  176 => 31,  170 => 28,  164 => 25,  153 => 17,  150 => 16,  141 => 15,  127 => 8,  118 => 7,  100 => 5,  73 => 124,  65 => 118,  62 => 117,  60 => 98,  57 => 97,  54 => 96,  52 => 15,  48 => 13,  46 => 7,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/lux/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\">
       <link rel=\"stylesheet\" href=\"/css/style.css\">
        {% endblock %}
    </head>
    <body>
    {% block navbar %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand animated\" href=\"{{ path('home') }}\" style=\"font-size:52px; padding-left:30px\">B G S</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
    <ul class=\"navbar-nav mx-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link animated fadeIn \" href=\"{{ path('shop') }}\">SHOP</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link animated fadeIn \" href=\"{{ path('ourStory') }}\">OUR STORY</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link animated fadeIn\" href=\"{{ path('about') }}\">About</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link animated fadeIn\" href=\"{{ path('contact') }}\">Contact</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
    <span style=\"font-size:25px\">
    <ul class=\"navbar-nav mx-auto\">
    <div>
    <li class=\"nav-item\">
        </form>
    </li>
    </div>
    {% if app.user %}
    <div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"padding-left:28px; padding-right:28px; margin-right:20px\">
    My account !
  </button>
  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
    <a class=\"dropdown-item\" href=\"{{ path('profile') }}\">Profile</a>
    {% if is_granted('ROLE_ADMIN') %}
    <a class=\"dropdown-item\" href=\"{{ path('user_index') }}\">Admin User</a>
    <div class=\"dropdown-divider\"></div>
    <a class=\"dropdown-item\" href=\"{{ path('product_index') }}\">Admin Product</a>
    <a class=\"dropdown-item\" href=\"{{ path('product_new') }}\">Add New Products</a>
    {% endif %}
    <div class=\"dropdown-divider\"></div>
      <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a>
      {# <a class=\"dropdown-item\" href=\"{{ path('user_unsubscribe') }}\">Unsubscribe</a> #}
  </div>
</div>
    {% else %}
    <li class=\"nav-item\">
    <a href=\"{{ path('app_login') }}\">
    <i class=\"fas fa-user-circle\"></i>
    </a>
    </li>
    {% endif %}
    <li class=\"nav-item\">
    <a href=\"{{ path('showPanier') }}\">
    <i class=\"fas fa-cart-arrow-down\">
     {% if app.session.get('qte_items') is defined and app.session.get('qte_items')  > 0  %}
      {{ app.session.get('qte_items')}}
    {% endif %}
    </i>
    </a>
    </li>
    </ul>
    </span>
    </form>
  </div>
</nav>
<div class=\"container\">

{% for label, messages in app.flashes %}
  <div class=\"container\">
    <div class=\"alert alert-{{ label }}\">
      {% for message in messages %}
          <p>{{ message }}</p>
      {% endfor %}
    </div>
  </div>
{% endfor %}
{% endblock %}
        {% block body %}{% endblock %}
</div>
{% block footer %}
<footer class=\"footer\">
<div class=\"jumbotron bg-light border-bottom-0 border-left-0 border-right-0\" style=\"text-align:center; padding-top:40px; padding-bottom:40px; margin-bottom:0px\">
  <h5 class=\"display-5\">Don't forget to say hello !</h5>
  <span style=\"font-size:30px\">
  <a href=\"https://www.facebook.com/pages/creation/?ref_type=sitefooter\">
  <i class=\"fab fa-facebook-f\" style=\"padding-right:25px\"></i>
  </a>
  <a href=\"https://twitter.com/?lang=fr\">
  <i class=\"fab fa-twitter\" style=\"padding-right:20px\"></i>
  </a>
  <a href=\"https://www.instagram.com/?hl=en\">
  <i class=\"fab fa-instagram\"></i>
  </a>

  </span>
</div>
</footer>
{% endblock %}
        {% block javascripts %}{% endblock %}
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src={{ asset(\"public/js/animate.js\") }}></script>

    <script type=\"text/javascript\"> 
    \$(document).ready(function()
        {
            if(\$('.produit').mouseenter())
            {
                \$(this).removeClass(\"bounceInRight\");
                \$(this).addClass(\"zoomIn\");
            };
        });
    </script>


    </body>
</html>
", "base.html.twig", "/Users/paulgambier/Desktop/Rendu/codac_pff/app/templates/base.html.twig");
    }
}
