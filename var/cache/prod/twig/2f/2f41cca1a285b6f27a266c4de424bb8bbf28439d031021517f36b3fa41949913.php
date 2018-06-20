<?php

/* registro/formatoRegistro.html.twig */
class __TwigTemplate_b8c661c125186826b5b7267f801038310f428795a938ebc4ced2ff2a61073d23 extends Twig_Template
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
        echo "<form role=\"form\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarUsuario");
        echo "\">
    <div class=\"row item-usuario-container\" style=\"text-align:center;\">
        <div class=\"col-md-3\">
            <a href=\"#\" id=\"artista-link\" class=\"thumbnail br-50\">
                <img class=\"img-circle img-responsive\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/illustration2.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail\">
            </a>
            <p class=\"item-usuario-selected\"><strong>Artista</strong></p>
        </div>
        <div class=\"col-md-3\">
            <a href=\"#\" id=\"local-link\" class=\"thumbnail br-50\">
                <img class=\"img-circle img-responsive\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/print2.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail\">
            </a>
            <p><strong>Local / sala de conciertos</strong></p>
        </div>
        <div class=\"col-md-3\">
            <a href=\"#\" id=\"profesional-link\" class=\"thumbnail br-50\">
                <img class=\"img-circle img-responsive\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/print3.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail\">
            </a>
            <p><strong>Profesional</strong></p>
        </div>
\t\t<div class=\"col-md-3\">
            <a href=\"#\" id=\"espectador-link\" class=\"thumbnail br-50\">
                <img class=\"img-circle img-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/print1.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail\">
            </a>
            <p><strong>Espectador</strong></p>
        </div>
    </div>
    <div class=\"row\" id=\"tipos-usuario-text-container\">
        <div class=\"col-md-12\">
            <div style=\"display:none;\" id=\"espectador-text-container\" class=\"description-container\">
                <p style='text-align: justify;'>
                    Sigue a tus grupos preferidos, a tus locales de música habituales, sé el primero en escuchar las últimas novedades que te presentan. Compra tus entradas de forma fácil y segura para asistir a los conciertos que proponen tus grupos y locales y consigue grandes descuentos y ventajas. Tu aportación será decisiva para realizar los conciertos. Si el concierto es cancelado y has obtenido previamente una entrada, no te preocupes, te abonaremos el importe en los siguientes días tras la cancelación.
                </p>
            </div>
            <div id=\"artista-text-container\" class=\"description-container\">
                <p style='text-align: justify;'>
                    Crea tu propia gira de conciertos en tan sólo unos clics. Propón conciertos a todos los locales en los que te interesa actuar, propón tus condiciones, invita a otros artistas, pon precio a tu entrada y comienza a vender. Difunde el evento, tus fans y los del local se encargarán de comprar las entradas para tu concierto. Si cumples con el mínimo de fans que asistirán al concierto, se llevará a cabo este y podrás seguir vendiendo entradas hasta completar aforo, si no, será cancelado el concierto sin haber invertido ni un euro.
                </p>
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"nombreArtista\" name=\"nombreArtista\" placeholder=\"Nombre artístico\">
                </div>
            </div>
            <div style=\"display:none;\" id=\"local-text-container\" class=\"description-container\">
                <p style='text-align: justify;'>
                    Crea tu agenda de conciertos para tu local con los mejores artistas y los estilos que mejor encajen contigo. Propón conciertos a los artistas que te interesen, acepta propuestas de artistas, llega a un acuerdo con ellos y comienza a vender vuestras entradas difundiendo por la red vuestro evento para asistir a ese concierto. Si cumple el mínimo de fans que asistirán al concierto, se llevará a cabo este, si no, será cancelado sin haber invertido ni un euro.
                </p>
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"nombreLocal\" name=\"nombreLocal\" placeholder=\"Nombre del local/sala\">
                </div>
            </div>
            <div style=\"display:none;\" id=\"profesional-text-container\" class=\"description-container\">
\t\t\t\t<p style='text-align: justify;'>
                   Crea tu perfil de profesional, publica tus anuncios y ofrece tus servicios para conseguir ser contratado en futuros eventos.
                </p>
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-addon\"><span class=\"ion-android-mail\" style=\"font-size:9px;\"></span></div>
            <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" placeholder=\"E-mail\">
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-addon\"><span class=\"ion-ios7-locked\"></span></div>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Contraseña\">
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-addon\"><span class=\"ion-ios7-locked\"></span></div>
            <input type=\"password\" class=\"form-control\" id=\"repeatPassword\" name=\"repeatPassword\" placeholder=\"Repetir contraseña\">
        </div>
    </div>
    <div class=\"heading\">
        <h5>Nombre de contacto</h5>
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" placeholder=\"Nombre\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\" placeholder=\"Apellidos\">
    </div>
    <div class=\"checkbox\">
        <label>
            <input id=\"terminos\" name=\"terminos\" type=\"checkbox\"> He leido y acepto los <a href=\"#\">Términos y Condiciones de Uso</a> y la <a href=\"#\">Política de Privacidad</a>
        </label>
    </div>
    <hr class=\"mt20 mb20\">
    <button type=\"submit\" class=\"btn btn-rw btn-primary\">Registrarme</button> &nbsp;&nbsp; <small>¿Ya eres miembro registrado? <a data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#login\" href=\"#\">Iniciar Sesión</a></small>
    <input type=\"hidden\" name=\"userType\" id=\"userType\" value=\"ROLE_CLIENT\">
</form><!-- /form -->
";
    }

    public function getTemplateName()
    {
        return "registro/formatoRegistro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  45 => 18,  36 => 12,  27 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registro/formatoRegistro.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/registro/formatoRegistro.html.twig");
    }
}
