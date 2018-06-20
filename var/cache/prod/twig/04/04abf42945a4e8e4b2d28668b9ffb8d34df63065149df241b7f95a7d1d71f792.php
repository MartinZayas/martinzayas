<?php

/* usuarios/entradasModelo1.html.twig */
class __TwigTemplate_d20f690dd6f01374a3861297e7f866ab95225f1b69bfffb740d37158ab86bbef extends Twig_Template
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
        echo "<div class=\"row mt5 ml5 background-white panelEntradas\" id=\"entradas1\"><!-- Fila 2-->
    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
    </div>
    <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"><!-- Descripción -->
        <div class=\"row\"><!-- Fila Nombre-->
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                Katy Perry en Madrid
            </div>
        </div><!-- Fin fila Nombre-->
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                4 entradas 100 €
            </div>
        </div><!-- Fin fila entradas y precio -->
        <div class=\"row\"><!-- Fila Nombre sala -->
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                Sala de conciertos
            </div>
        </div><!-- Fin fila Nombre sala -->
        <div class=\"row\"><!-- Fecha y hora -->
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                5 de Mayo del 2018. 22:00h
            </div>
        </div><!-- Fin fila fecha -->
    </div><!-- Fin Descripción -->
    <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Icono -->
        <div class=\"iconoEntradas\">
            <a herf=\"\" class=\"\">
                <span class=\"glyphicon glyphicon-file\"></span>
            </a>
        </div>
    </div><!-- Fin Icono -->
    <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Estado -->
        <p class=\"textoPendiente\">Pendiente</p>
    </div><!-- Fin Estado -->
</div><!-- Fin de fila 2 -->
";
    }

    public function getTemplateName()
    {
        return "usuarios/entradasModelo1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/entradasModelo1.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/entradasModelo1.html.twig");
    }
}
