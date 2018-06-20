<?php

/* busquedas/buscadorPrincipal.html.twig */
class __TwigTemplate_acd474058e924e0b7c06f920e18df3e5f575afc1975fbbcae5b692fc0165823d extends Twig_Template
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
        return array (  24 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "busquedas/buscadorPrincipal.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/busquedas/buscadorPrincipal.html.twig");
    }
}
