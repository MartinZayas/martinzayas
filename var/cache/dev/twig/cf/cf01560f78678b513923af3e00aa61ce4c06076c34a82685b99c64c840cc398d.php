<?php

/* eventos/comenzarGira.html.twig */
class __TwigTemplate_175f91c37baaf3822124f5c9d61890c0b4c8cfd4a6bbf29391821f50e028e937 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eventos/comenzarGira.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eventos/comenzarGira.html.twig"));

        // line 2
        echo "<section class=\"background-main pt60 pb60 fill text-center\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/bg3.jpg"), "html", null, true);
        echo "');\">
    <div class=\"container\">
        <div class=\"row\">
            <h1 style=\"color: white\">C<span style=\"text-transform: lowercase;\">omienza a montar tu gira de conciertos</span></h1>
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" class=\"btn btn-rw btn-clear mt10\">
                Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
            </a>
        </div>
    </div><!-- /container -->
</section>
                ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "eventos/comenzarGira.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Plantilla para la seccion comenzar giras #}
<section class=\"background-main pt60 pb60 fill text-center\" style=\"background-image:url('{{asset('bundles/app/img/bg3.jpg')}}');\">
    <div class=\"container\">
        <div class=\"row\">
            <h1 style=\"color: white\">C<span style=\"text-transform: lowercase;\">omienza a montar tu gira de conciertos</span></h1>
            <a href=\"{{ path('agregarEvento') }}\" class=\"btn btn-rw btn-clear mt10\">
                Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
            </a>
        </div>
    </div><!-- /container -->
</section>
                ", "eventos/comenzarGira.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/eventos/comenzarGira.html.twig");
    }
}
