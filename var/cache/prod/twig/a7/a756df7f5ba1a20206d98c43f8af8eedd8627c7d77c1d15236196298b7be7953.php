<?php

/* banner/banner2.html.twig */
class __TwigTemplate_db7d6e7ee985f4fee26020451295fb766feef8073ffce08426f946c3f21418d4 extends Twig_Template
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
        echo "<div class=\"carousel\">
    <div id=\"carouselHome\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
        <!-- Begin Wrapper for slides -->
        <div class=\"carousel-inner\">
            <!-- Begin Item 2 -->
            <div class=\"item active\">
                <!-- Item BG -->
                <div class=\"fill skrollable skrollable-between\" 
                    style=\"background-image: url(&quot;";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/banner/banner1.png"), "html", null, true);
        echo "&quot;); 
                    background-position: 0px 0px;\" 
                    data-0=\"background-position:0px 0px;\" data-500=\"background-position:0px -250px;\">
                    <div class=\"container\">
                        <div class=\"row carousel-content center-vertically-right\">
                            <div class=\"fadeInUpBig-animated\" data-animation=\"fadeInUpBig\">
                                <div class=\"carousel-description col-sm-8 col-sm-offset-2 text-center\">
                                    <!-- Content -->
                                    <span class=\"fa fa-users fa-4x text-white mb20\" style=\"text-shadow: 0 0 15px #000, 0 0 5px #000\"></span>
                                    <h1 class=\"heavy text-white\"><span style=\"text-shadow: 0 0 15px #000, 0 0 5px #000\">Tu gira de conciertos en unos clics</span></h1>
                                    <span style=\"text-shadow: 0 0 15px #000, 0 0 5px #000\">Únete a nosotros y comienza a montar tus conciertos de forma fácil y sencilla entre los miles de locales y artistas. Cero riesgos, 100% seguro, inversión inicial cero.</span>
                                    <br>
                                    <a href=\"/eventos/adicionar\" class=\"btn btn-rw btn-primary mt10\">
                                        Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /content container -->
                    </div><!-- /container -->
                </div><!-- /bg div -->
            </div><!-- /item -->
            <!-- End Item 2 -->
        </div><!-- /carousel inner -->
        <!-- End Wrapper for slides -->
    </div><!-- /carousel id div -->
</div>";
    }

    public function getTemplateName()
    {
        return "banner/banner2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "banner/banner2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/banner/banner2.html.twig");
    }
}
