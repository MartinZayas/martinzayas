<?php

/* usuarios/favoritosModelo1.html.twig */
class __TwigTemplate_011505be4d0414c4f513060391a3a65b637ed158cd3b444100079f738ad7b2cd extends Twig_Template
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
        echo "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Favorito 1 -->
    <div class=\"panelFavoritos\">
        <div class=\"row\"><!-- Imagen -->
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Artista 1\" class=\"img img-responsive imagenFavoritos\">
            </div>
        </div><!-- Fin Imagen -->
        <div class=\"row\"><!-- Nombre Artista -->
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                Oreja de Van Gogh
            </div>
        </div><!-- Fin Nombre Artista -->
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                    Proponer concierto
                </a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <a href=\"#\" class=\"btn btn-danger botonFavorito\" id=\"favorito\" name=\"favorito1\">
                    <span class=\"glyphicon glyphicon-heart\"></span>
                    Favorito
                </a>
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <a href=\"#\" class=\"btn btn-default botonSiguiendo\" id=\"siguiendo\">
                    <span class=\"fa fa-thumbs-up\"></span><!-- dejar de seguir glyphicon glyphicon-thumbs-down-->
                    Siguiendo
                </a>    
            </div>
        </div>
    </div>            
</div><!-- Fin Favorito 1 -->";
    }

    public function getTemplateName()
    {
        return "usuarios/favoritosModelo1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  25 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/favoritosModelo1.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/favoritosModelo1.html.twig");
    }
}
