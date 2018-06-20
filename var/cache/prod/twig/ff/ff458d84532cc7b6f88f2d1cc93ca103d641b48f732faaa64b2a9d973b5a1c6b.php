<?php

/* usuarios/notificacionesModelo2.html.twig */
class __TwigTemplate_d101eae756f0e6ebf8fb343996d09964347823b1eb01494e5e5b6cec07500238 extends Twig_Template
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
        echo "<!-- Modelo 2 -->
<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 panelAnuncio\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-circle img-responsive imagenUsuario2\">
            </div>
            <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"><!-- Descripción -->
                <div class=\"row\">
                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\">
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
                    </div>
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\"><!-- dia -->
                        <div class=\"diaCalendario text-center\">
                            <div class=\"row\">ABR</div>
                            <div class=\"row dia\">19</div>
                            <div class=\"row\">2018</div>
                        </div>
                    </div><!-- Fin Dia -->
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-6 col-md-8 col-lg-8\"></div>
                    <div class=\"col-xs-3 col-sm-3 col-md-2 col-lg-2 textoDesde\">
                        Desde                                 
                    </div>
                    <div class=\"col-xs-3 col-sm-3 col-md-2 col-lg-2 textoPrecio\">10 €</div>
                </div>
            </div><!-- Fin Descripción -->
        </div><!-- Fin row -->
    </div>
</div>
<!-- Fin de modelo 2 -->";
    }

    public function getTemplateName()
    {
        return "usuarios/notificacionesModelo2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/notificacionesModelo2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/notificacionesModelo2.html.twig");
    }
}
