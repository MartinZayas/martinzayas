<?php

/* usuarios/modeloSeguidores.html.twig */
class __TwigTemplate_9ef438ad22db6711b07999f1bf8349d9fab131e7cf817f27daa03269a341db6f extends Twig_Template
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
        echo "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 1 -->
    <div class=\"view image-hover-1 no-margin\">
        <!-- Blog Thumb -->
        <div class=\"product-container\">
            <img class=\"img-responsive full-width\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista8.png"), "html", null, true);
        echo "\" alt=\"...\">
            <span class=\"badge home-badge\">
                <span class=\"label label-orange\">
                    Desde 315.99 €/und
                </span>
            </span>
        </div>
        <div class=\"mask\">
            <div class=\"image-hover-content\">
                <!-- Zoom + Blog Link -->
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista8.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                    <div class=\"image-icon-holder\">
                        <span class=\"ion-ios7-search image-icons\"></span>
                    </div>
                </a>
                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 8));
        echo "\" class=\"info\">
                    <div class=\"image-icon-holder\">
                        <span class=\"ion-link image-icons\"></span>
                    </div>
                </a>
            </div><!-- /image hover content -->
        </div><!-- /mask-->
    </div>
    <div class=\"titulo content-box-shadow2\">
        <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 8));
        echo "\">
            <h2>Despistados</h2>
        </a>
    </div>
    <div class=\"shop-product content-box-shadow\">                
        <div class=\"row mt10\">
            <div class=\"col-md-12\">
                <span class=\"location-container pull-left\">
                    <div class=\"textoDireccion\">
                        <span class=\"glyphicon glyphicon-map-marker icono\"></span> Manises, Valencia
                    </div>
                </span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                <p class=\"\">Información del artista, descripción....                                                
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"hidden-xs hidden-sm col-md-8 col-lg-8\"></div>
            <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                <p class=\"textoTipo\">Banda</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                    Proponer concierto
                </a>
            </div>
        </div>
        <div class=\"row\">
            <ul class=\"list-inline\" id=\"\">
                <li class=\"social\">
                    <a href=\"#\" class=\"\">
                        <span class=\"fa fa-thumbs-o-up\"></span>
                    </a>
                </li>
                <li class=\"social2\">
                    <a href=\"#\" class=\"compartir\">
                        <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                    </a>
                </li>
                <li class=\"social\">
                    <a href=\"#\" class=\"favorito\" id=\"favorito8\" onclick=\"cambiar(id);\">
                        <span class=\"fa fa-heart-o\"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- Fin Favorito 1 -->";
    }

    public function getTemplateName()
    {
        return "usuarios/modeloSeguidores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 58,  58 => 30,  46 => 21,  38 => 16,  25 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/modeloSeguidores.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/modeloSeguidores.html.twig");
    }
}
