<?php

/* ayuda/comoFuncionaUsuario.html.twig */
class __TwigTemplate_d8f1f22842dcb2ce9fe26037a75959057e9dff5b36e7fdc97a6d07b89e849404 extends Twig_Template
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
        echo "<section class=\"pt60 pb60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 mb20\">
                <div class=\"heading\"><h4>¿Cómo funciona otro perfil de usuario?</h4></div>
            </div>
        </div>
        <div class=\"col-sm-12 col-md-12 main\">
            <div class=\"row placeholders text-center\">
                <div class=\"col-xs-12 col-sm-4 placeholder\">
                    <a href=\"/artista-como-funciona\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/print3.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail\">
                    </a>
                    <h3 class=\"mt20\"><b>Local / Sala</b></h3>
                    <span>Crea tu agenda de conciertos de la forma más segura en tan sólo unos clics. Tu decides las condiciones para el concierto.</span>
                </div>
                <div class=\"col-xs-12 col-sm-4 placeholder\">
                    <a href=\"/artista-como-funciona\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/print2.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail\">
                    </a>
                    <h3 class=\"mt20\"><b>Profesional</b></h3>
                    <span>Crea tu perfil de profesional, publica tus anuncios y ofrece tus servicios para conseguir ser contratado en futuros eventos.</span>
                </div>
                <div class=\"col-xs-12 col-sm-4 placeholder\">
                    <a href=\"/artista-como-funciona\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/print1.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail\">
                    </a>
                    <h3 class=\"mt20\"><b>Espectador</b></h3>
                    <span>¿Quieres escuchar lo último, asistir a los mejores conciertos y enterarte de las novedades de tus grupos preferidos?</span>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "ayuda/comoFuncionaUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 27,  42 => 20,  32 => 13,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ayuda/comoFuncionaUsuario.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/ayuda/comoFuncionaUsuario.html.twig");
    }
}
