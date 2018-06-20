<?php

/* ayuda/comoFuncionaVentas.html.twig */
class __TwigTemplate_dd3d42dae74dcff1bacb5d1152bddd64e59a4db7ce348a8f1963c97882fed9e1 extends Twig_Template
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
        echo "<section class=\"pt40 pb40\" style=\"background-color:#f1f1f1 !important\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"lead text-center flipInY-animated\"><b>¿Cómo funciona el proceso de venta de entradas?</b></p>
                <hr style=\"width:600px\">
            </div>
            <div class=\"col-sm-7 fadeInLeft-animated\">
                <h3 class=\"mb15\">Crea tus conciertos sin ningún riesgo</h3>
                <p class=\"text-justify\">Una vez creado el concierto en nuestra plataforma comenzará el plazo de compra de entradas para recaudar todo el dinero necesario. Este concierto durará activo mínimo el tiempo que tu asignes (5 días, 10 días...) y fijarás un número de entradas a vender como mínimo para poder realizar el concierto de forma favorable. </p>
                <p class=\"text-justify\">Es muy importante una buena difusión, por lo que COMPARTE tus conciertos por redes sociales para llegar a mucho más público y así conseguir tus metas.</p>
                <p class=\"text-justify\">Si consigues vender el mínimo de entradas que estableciste, el concierto quedará confirmado y se realizará con éxito, pudiendo continuar vendiendo entradas hasta llenar aforo. Por el contrario, si no consigues tus objetivos, el concierto quedará cancelado y no tendrás que preocuparte por nada más, simplemente en buscar nuevos locales para tus conciertos.</p>
                <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" class=\"btn btn-rw btn-primary mt10\">
                    Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                </a>
            </div><!-- /column -->
            <div class=\"col-sm-5 mt30-xs\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/showcase4.png"), "html", null, true);
        echo "\" class=\"img-responsive fadeInRight-animated\" alt=\"Showcase Image\">
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section>";
    }

    public function getTemplateName()
    {
        return "ayuda/comoFuncionaVentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 19,  33 => 14,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ayuda/comoFuncionaVentas.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/ayuda/comoFuncionaVentas.html.twig");
    }
}
