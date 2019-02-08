<?php

/* security/login.html.twig */
class __TwigTemplate_e83b3eadae2b136ec0e87384d2bacea133f5fe757c7321eac37472fcc66b6f4e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        echo "Log in!";
        
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
        echo " <div class=\"row justify-content-center\" style=\"padding-top: 40px\">
    <div class=\"col-4\" style=\"padding-right:40px\">
<form method=\"post\">
    ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "    <div class=\"text-center\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Please Login</h1>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail\">Email address</label>
      <input type=\"email\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" class=\"form-control\" id=\"inputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" required autofocus>
      <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
    </div>
    <div class=\"form-group\">
      <label for=\"inputPassword\">Password</label>
      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\" required>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    </div>
    <div class=\"text-center\">
    <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
    <br>
 <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    </div>
</form>
    </div>
    <div class=\"col-4\" style=\"padding-left:40px\">
    <div class=\"text-center\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Register</h1>
    <br>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
    <button type=\"button\" class=\"btn btn-primary btn-block\">Create my account !</button>
    </a>
    </div>
    </div>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  101 => 23,  92 => 17,  85 => 12,  79 => 10,  77 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
 <div class=\"row justify-content-center\" style=\"padding-top: 40px\">
    <div class=\"col-4\" style=\"padding-right:40px\">
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"text-center\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Please Login</h1>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail\">Email address</label>
      <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" class=\"form-control\" id=\"inputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" required autofocus>
      <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
    </div>
    <div class=\"form-group\">
      <label for=\"inputPassword\">Password</label>
      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\" required>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
    </div>
    <div class=\"text-center\">
    <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
    <br>
 <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    </div>
</form>
    </div>
    <div class=\"col-4\" style=\"padding-left:40px\">
    <div class=\"text-center\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Register</h1>
    <br>
    <a href=\"{{ path('app_register') }}\">
    <button type=\"button\" class=\"btn btn-primary btn-block\">Create my account !</button>
    </a>
    </div>
    </div>

</div>


{% endblock %}
", "security/login.html.twig", "/Users/paulgambier/Desktop/Rendu/codac_pff/app/templates/security/login.html.twig");
    }
}
