<?php

/* usuarios/notificacionesModelo4.html.twig */
class __TwigTemplate_b27525d959dcc2ba0790cc2381a8594b944583de718de244de1e553e7cb0bc1f extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 panelAnuncio\"><!-- Anuncio 1 -->
    <div class=\"row\">
        <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista2.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-circle img-responsive imagenUsuario\">
        </div>
        <div class=\"col-xs-6 col-sm-7 col-md-7 col-lg-7\"><!-- Descripción -->
            <div class=\"row mt20\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoProximo\">
                    Proximo Concierto
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                    <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                    Sala Caracol
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                    IZAL + artista invitado
                </div>
            </div>
        </div><!-- Fin Descripción -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- Dia -->
            <div class=\"diaCalendario text-center\">
                <div class=\"row\">ABR</div>
                <div class=\"row dia\">19</div>
                <div class=\"row\">2018</div>
            </div>
        </div><!-- Fin Dia -->
    </div><!-- Fin row -->
    <div class=\"row\">
        <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"></div>
        <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1 textoDesde\">
            Desde                                 
        </div>
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 textoPrecio\">10 €</div>
    </div>
</div><!-- Fin Anuncio 1 -->
                    ";
    }

    public function getTemplateName()
    {
        return "usuarios/notificacionesModelo4.html.twig";
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
        return new Twig_Source("", "usuarios/notificacionesModelo4.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/notificacionesModelo4.html.twig");
    }
}
