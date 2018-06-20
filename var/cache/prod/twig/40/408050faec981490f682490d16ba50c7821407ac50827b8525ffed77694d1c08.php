<?php

/* salas/detalleEvento.html.twig */
class __TwigTemplate_0eb2ec0bdb6eae3b3c14ee9a271fc67e60444b5e4fa8ec3cb9f0c51297549943 extends Twig_Template
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
        // line 1
        echo "<div class=\"row bordeEventos\"><!-- Evento 1 -->
    <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\"><!-- Imagen -->
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["foto"] ?? null)), "html", null, true);
        echo "\" height=\"auto\"  alt=\"Foto\" class=\"img-responsive imageEvento\">
        <div class=\"diaCalendario\">
            <div class=\"mes\">ABR</div>
            <div class=\"dia\">19</div>
            <div class=\"anio\">2018</div>
        </div>
    </div>  <!-- Fin Dia -->
    <div class=\"col-xs-8 col-sm-8 col-md-6 col-lg-6\"><!-- Descripcion -->
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-lg-12 descriptionTitulo\">
                Vetusta Morla Sala Caracol
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-lg-12 ciudad\">
                Calle, Ciudad, Pa&iacute;s
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-lg-12\">
                <a href=\"#\" class=\"btn btn-rw btn-primary tags btn-sm\">Rock</a>
                <a href=\"#\" class=\"btn btn-rw btn-primary tags btn-sm\">Indie</a>
                <a href=\"#\" class=\"btn btn-rw btn-primary tags btn-sm\">Metal</a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                Tiempo restante para el evento:
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-6\">
                <div class=\"counter\" data-date=\"2018-05-01 00:00:00\"></div>
            </div>
            <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-6\">
                <div class=\"entradasRestantes\">
                    <span class=\"badge home-badge\">90</span>
                    Entradas restantes
                </div>
            </div>
        </div>
    </div>   <!-- Fin de sección descripción -->
    <div class=\"col-xs-4 col-sm-4 col-md-2 col-lg-2\"><!-- Boton -->
        <div class=\"row\">
            <a href=\"#\" 
               class=\"btn-custom-orange botonEvento pull-left\" style=\"margin-top:20px;\">
                Comprar Entradas
            </a>
        </div>
        <div class=\"row\">
            <div class=\"tituloPrecio\">
                Precio
            </div>
            <div class=\"precio\">
                <h2>10 €</h2>
            </div>
        </div>
    </div> <!-- Fin boton -->
</div><!-- Fin Evento 1 -->
";
    }

    public function getTemplateName()
    {
        return "salas/detalleEvento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/detalleEvento.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/detalleEvento.html.twig");
    }
}
