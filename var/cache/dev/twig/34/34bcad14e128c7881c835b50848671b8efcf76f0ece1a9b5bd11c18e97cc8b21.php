<?php

/* busquedas/buscadorPrincipal.html.twig */
class __TwigTemplate_fa2bb208f60460262da0eaf4b0579f12c2b67f8daea82272041192351f37d1da extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "busquedas/buscadorPrincipal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "busquedas/buscadorPrincipal.html.twig"));

        // line 2
        echo "<div class=\"pt40 pb40\" style=\"background-color:#5a5d61;\">
    <div class=\"container\">
        <div class=\"row\">
            <form role=\"form\" id=\"formularioBuscar\" action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" method=\"post\">
                <div class=\"col-sm-10 without-padding-right\">
                    <div class=\"form-group\">
                        <input type=\"text\" placeholder=\"Busca conciertos, artistas, locales de conciertos, profesionales... ¡todo lo que quieras!\" class=\"form-control big-search\">
                    </div>
                </div>
                <div class=\"col-sm-2 without-padding-left\">
                    <button type=\"submit\" style=\"width:100%;height:46px;\" 
                      class=\"btn btn-lg btn-custom-orange btn-edge dropdown-toggle\">
                        <i class=\"fa fa-search\"></i>
                        Buscar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "busquedas/buscadorPrincipal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Seccion de busqueda del home #}
<div class=\"pt40 pb40\" style=\"background-color:#5a5d61;\">
    <div class=\"container\">
        <div class=\"row\">
            <form role=\"form\" id=\"formularioBuscar\" action=\"{{ path('buscar') }}\" method=\"post\">
                <div class=\"col-sm-10 without-padding-right\">
                    <div class=\"form-group\">
                        <input type=\"text\" placeholder=\"Busca conciertos, artistas, locales de conciertos, profesionales... ¡todo lo que quieras!\" class=\"form-control big-search\">
                    </div>
                </div>
                <div class=\"col-sm-2 without-padding-left\">
                    <button type=\"submit\" style=\"width:100%;height:46px;\" 
                      class=\"btn btn-lg btn-custom-orange btn-edge dropdown-toggle\">
                        <i class=\"fa fa-search\"></i>
                        Buscar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>", "busquedas/buscadorPrincipal.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/busquedas/buscadorPrincipal.html.twig");
    }
}
