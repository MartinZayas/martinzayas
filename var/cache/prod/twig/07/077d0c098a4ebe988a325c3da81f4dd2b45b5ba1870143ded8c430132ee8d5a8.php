<?php

/* usuarios/favoritos.html.twig */
class __TwigTemplate_47c4fe3cd1ddbeca89c1267e9849550fc2265774dfc5dc6c8ff6fa75015c5447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/favoritos.html.twig", 2);
        $this->blocks = array(
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'encabezadoContenido' => array($this, 'block_encabezadoContenido'),
            'contenidoDerecha' => array($this, 'block_contenidoDerecha'),
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "usuarios/sesion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
    <style>
        .panelFavoritos{
            margin-right: 0px;
            margin-bottom: 10px;
            padding-left: 2px;
            padding-right: 2px;
            background-color: #FFFFFF;
            border:1px solid #e6e9ed;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .panelFavoritos2{
            border-top: 1px solid #000000;
            border-bottom: 1px solid #000000;
            background-color: #FFFFFF;
        }
        .panelFavoritos3{
            margin-right: 0px;
            border:1px solid #000000;
            background-color: #FFFFFF;
        }
        .imagenFavoritos{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .textoArtista{
            text-align: center;
        }
        .botonFavorito{
            width: 100%;
            min-width: 85px;
            height: 42px;
            margin-top: 5px;
            margin-bottom: 5px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #dd4b39;
            background-image: url('";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Favorito.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
        }
        .botonNoFavorito{
            width: 100%;
            min-width: 85px;
            height: 42px;
            margin-top: 5px;
            margin-bottom: 5px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 10px;
            padding-bottom: 10px;
            background-image: url('";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Favorito2.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
        }
        .botonFavorito2{
            width: 100%;
            min-width: 108px;
            height: 42px;
            margin-top: 5px;
            margin-bottom: 5px;                               
            padding-top: 10px;
            padding-bottom: 10px;
            align-content: center;
            background-color: #dd4b39;
            background-image: url('";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/NoFavorito.png"), "html", null, true);
        echo "');                
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
        }
        .seguir{
            width: 100%;
            min-width: 85px;
            height: 42px;
            margin-top: 5px;
            margin-bottom: 5px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #00c0ef;
            background-image: url('";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Seguir.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
        }
        .noSeguir{
            width: 100%;
            min-width: 85px;
            height: 42px;
            margin-top: 5px;
            margin-bottom: 5px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #00c0ef;
            background-image: url('";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/NoSeguir.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
            background-size: 85px 42px;
        }
        .botonSiguiendo{
            width: 100%;
            min-width: 85px;
            height: 42px;
            margin-top: 5px;
            margin-bottom: 5px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 10px;
            padding-bottom: 10px;
            background-image: url('";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Siguiendo.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
        }
        .social{
            margin-left: 30px;
            margin-right: 30px;
        }
        .social2{
            margin-left: 6px;
            margin-right: 6px;
        }
        .social3{
            margin-left: 30px;
            margin-right: 29px;
        }
/***************************** CONTENEDORES ***********************************/
        .titulo{
            position:relative;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-right: 15px;
            display:block;
            text-align:center;
            overflow:hidden;
            height: 70px;
            max-height:70px;
            background-color: #FFFFFF;
            text-transform:none;
            text-align: justify;
            font-weight:400;
            margin-bottom:0px;
            color: #000000 !important;
            font-family: HelveticaNegrita, HelveticaCond, sans-serif;
            font-size: 20px;
        }
        .titulo a h2{
            text-transform:none;
            font-weight:400;
            color: #000000 !important;
            font-family: HelveticaNegrita, HelveticaCond, sans-serif;
            font-size: 20px;
        }
        .content-box-shadow2 {
            -webkit-box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            -moz-box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            padding:15px;
            background-color:#FAFAFA;
            border-left:1px solid #E6E6E6;
            border-right:1px solid #E6E6E6;
        }
    </style>
";
    }

    // line 179
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"row ml5\" id=\"buscador\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\"><!-- Titulo y buscador -->
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <div class=\"tituloSesion\">Favoritos</div>
                </div>
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Buscador -->
                    <form action=\"#\" method=\"post\" role=\"form\">
                        <div class=\"input-group buscador\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-default boton\" type=\"submit\">
                                    <span class=\"glyphicon glyphicon-search\"></span>
                                </button>
                            </div>                        
                            <input type=\"text\" id=\"buscador2\" name=\"buscador2\" class=\"form-control tBuscador\" placeholder=\"Buscar...\">
                        </div>
                    </form>
                </div><!-- Fin del Buscador -->
            </div><!-- Fin de Titulo y buscador -->
            <div class=\"row mt5\"><!-- Botones -->
                <ul class=\"nav nav-pills nav-pills-shop nav-justified\">
                    <li class=\"mr15\" id=\"opcion1\">
                        <a data-toggle=\"pill\" href=\"#salas\">
                            <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/stage.png"), "html", null, true);
        echo "\" class=\"\" alt=\"Salas\">
                            Salas
                        </a>
                    </li>
                    <li class=\"active mr15\" id=\"opcion2\">
                        <a data-toggle=\"pill\" href=\"#artistas\">
                            <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/theatre-masks.png"), "html", null, true);
        echo "\" class=\"\" alt=\"Actor\">
                            Artistas
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 218
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 219
        echo "<div class=\"tab-content tab-shop mt15 bg-shadow\">
    <div id=\"artistas\" class=\"tab-pane row fade in active\">
        <div class=\"row mb5\" id=\"favoritos1\"><!-- Fila 1-->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 1 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
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
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 1));
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
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 1));
        echo "\">
                        <h2>La Oreja de Van Gogh</h2>
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
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Proponer concierto
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <ul class=\"list-inline\" id=\"\">
                            <li class=\"social3\">
                                <a href=\"#\" class=\"\">
                                    <span class=\"fa fa-thumbs-up\"></span>
                                </a>
                            </li>
                            <li class=\"social2\">
                                <a href=\"#\" class=\"compartir\">
                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                </a>
                            </li>
                            <li class=\"social\">
                                <a href=\"#\" class=\"favorito\" id=\"favorito1\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Resulatado 1 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 2 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista2.png"), "html", null, true);
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
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista2.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 2));
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
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 2));
        echo "\">
                        <h2>Panorama Mar</h2>
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
        // line 360
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
                                <a href=\"#\" class=\"favorito\" id=\"favorito2\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart-o\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Favorito 2 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 3 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
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
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 405
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 3));
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
        // line 414
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 3));
        echo "\">
                        <h2>Banda Tributo Queen</h2>
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
        // line 442
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
                                <a href=\"#\" class=\"favorito\" id=\"favorito3\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Favorito 3 -->
        </div><!-- Fin de fila 1 de favoritos -->
        <div class=\"row mb5\" id=\"favoritos2\"><!-- Fila 2 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 4 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
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
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 489
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 4));
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
        // line 498
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 4));
        echo "\">
                        <h2>Katy Perry</h2>
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
        // line 527
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Proponer concierto
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <ul class=\"list-inline\" id=\"\">
                            <li class=\"social3\">
                                <a href=\"#\" class=\"\">
                                    <span class=\"fa fa-thumbs-up\"></span>
                                </a>
                            </li>
                            <li class=\"social2\">
                                <a href=\"#\" class=\"compartir\">
                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                </a>
                            </li>
                            <li class=\"social\">
                                <a href=\"#\" class=\"favorito\" id=\"favorito4\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Resulatado 1 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 5 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista5.png"), "html", null, true);
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
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista5.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 572
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 5));
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
        // line 581
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 5));
        echo "\">
                        <h2>Vetusta Morla</h2>
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
        // line 609
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
                                <a href=\"#\" class=\"favorito\" id=\"favorito5\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart-o\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Favorito 5 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 6 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista6.png"), "html", null, true);
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
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 654
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 6));
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
        // line 663
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 6));
        echo "\">
                        <h2>Lady Gaga</h2>
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
        // line 691
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
                                <a href=\"#\" class=\"favorito\" id=\"favorito6\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Favorito 6 -->
        </div><!-- Fin de fila 2 de favoritos -->
        <div class=\"row mb5\" id=\"favoritos3\"><!-- Fila 3 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 7 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista7.png"), "html", null, true);
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
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista7.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 738
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 7));
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
        // line 747
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 7));
        echo "\">
                        <h2>Vetusta Morla</h2>
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
        // line 775
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Proponer concierto
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <ul class=\"list-inline\" id=\"\">
                            <li class=\"social3\">
                                <a href=\"#\" class=\"\">
                                    <span class=\"fa fa-thumbs-up\"></span>
                                </a>
                            </li>
                            <li class=\"social2\">
                                <a href=\"#\" class=\"compartir\">
                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                </a>
                            </li>
                            <li class=\"social\">
                                <a href=\"#\" class=\"favorito\" id=\"favorito7\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Resulatado 7 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 8 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 805
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
        // line 815
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista8.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 820
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
        // line 829
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
        // line 857
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
            </div><!-- Fin Favorito 8 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 9 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista9.png"), "html", null, true);
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
        // line 897
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista9.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 902
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 9));
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
        // line 911
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 9));
        echo "\">
                        <h2>Vetusta Morla</h2>
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
        // line 939
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
                                <a href=\"#\" class=\"favorito\" id=\"favorito9\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Favorito 9 -->
        </div><!-- Fin de fila 3 de favoritos -->
    </div><!-- Fin Artistas FAvoritos -->
    <div id=\"salas\" class=\"tab-pane row fade\">
        <div class=\"row mb5\" id=\"favoritos1\"><!-- Fila 1-->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 1 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 973
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
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
        // line 983
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 988
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
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
        // line 997
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\">
                        <h2>Teatro Español</h2>
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
                            <span class=\"fa fa-users\"></span> Aforo: 3000 personas
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                            <span class=\"fa fa-music\"></span> Pop, Rock, Alternativo
                        </div>
                    </div>
                    <div class=\"row mt10 mb5\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <a href=\"";
        // line 1023
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Proponer concierto
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <ul class=\"list-inline\" id=\"\">
                            <li class=\"social3\">
                                <a href=\"#\" class=\"\">
                                    <span class=\"fa fa-thumbs-up\"></span>
                                </a>
                            </li>
                            <li class=\"social2\">
                                <a href=\"#\" class=\"compartir\">
                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                </a>
                            </li>
                            <li class=\"social\">
                                <a href=\"#\" class=\"favorito\" id=\"favorito1\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Resulatado 1 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 2 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 1053
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala4.png"), "html", null, true);
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
        // line 1063
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 1068
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 2));
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
        // line 1077
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 2));
        echo "\">
                        <h2>Panorama Mar</h2>
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
                            <span class=\"fa fa-users\"></span> Aforo: 3500 personas
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                            <span class=\"fa fa-music\"></span> Clasica, Orquesta
                        </div>
                    </div>
                    <div class=\"row mt10 mb5\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <a href=\"";
        // line 1103
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
                                <a href=\"#\" class=\"favorito\" id=\"favorito2\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart-o\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Favorito 2 -->
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 3 -->
                <div class=\"view image-hover-1 no-margin\">
                    <!-- Blog Thumb -->
                    <div class=\"product-container\">
                        <img class=\"img-responsive full-width\" src=\"";
        // line 1133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala6.png"), "html", null, true);
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
        // line 1143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                <div class=\"image-icon-holder\">
                                    <span class=\"ion-ios7-search image-icons\"></span>
                                </div>
                            </a>
                            <a href=\"";
        // line 1148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 3));
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
        // line 1157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 3));
        echo "\">
                        <h2>Sal&oacute;n De Jazz</h2>
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
                            <span class=\"fa fa-users\"></span> Aforo: 500 personas
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                            <span class=\"fa fa-music\"></span> Indie, Salsa, Jazz
                        </div>
                    </div>
                    <div class=\"row mt10 mb5\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <a href=\"";
        // line 1183
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
                                <a href=\"#\" class=\"favorito\" id=\"favorito3\" onclick=\"cambiar(id);\">
                                    <span class=\"fa fa-heart\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Fin Favorito 3 -->
        </div><!-- Fin de fila 1 de favoritos -->
    </div>
</div>
";
    }

    // line 1213
    public function block_customScripts($context, array $blocks = array())
    {
        // line 1214
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 1215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 1217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 1224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
/******************Menu siempre visible***************************************/ 
        \$(document).scroll(function() {
            if(\$(document).scrollTop() > 30){
                document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar top-bar-fixed\");
                document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main affix\");
            }
            else{
                document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar\");
                document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main\");
            }
        });          
/**********************Menu****************************************************/
        \$(document).scroll(function() {
            console.log(\$(document).scrollTop()); 
            var clase = document.getElementById(\"salas\").getAttribute(\"class\");
            var max = 0;
            if(screen.width<768){
                document.getElementById(\"menuVertical\").setAttribute(\"style\", \"width: 100%;\");
            }
            else{
                if(clase.indexOf(\"active\")>=0){
                    ";
        // line 1247
        if ((($context["cantResultados2"] ?? null) >= 3)) {
            // line 1248
            echo "                        max = 300*";
            echo twig_escape_filter($this->env, ($context["cantResultados2"] ?? null), "html", null, true);
            echo ";
                    ";
        } else {
            // line 1250
            echo "                        max = 260;
                    ";
        }
        // line 1252
        echo "                }
                else{
                    ";
        // line 1254
        if ((($context["cantResultados"] ?? null) >= 3)) {
            // line 1255
            echo "                        max = 398*";
            echo twig_escape_filter($this->env, ($context["cantResultados"] ?? null), "html", null, true);
            echo ";
                    ";
        } else {
            // line 1257
            echo "                        max = 260;
                    ";
        }
        // line 1259
        echo "                }
                if(\$(document).scrollTop() >= 100 && \$(document).scrollTop()<= max){
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
                }
                else{
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
                }
            }
        });
        document.getElementById(\"menu1\").setAttribute(\"class\",\"\");
        document.getElementById(\"menu3\").setAttribute(\"class\",\"menuActivo\");
/*********************Favoritos************************************************/
        /**Captura el id al pasar por encima del boton de favorito**/
        \$(document).on(\"mouseover\",'#favorito',function(){
            var clase = \$(this).attr(\"class\");
            var identificador = \$(this).attr(\"id\");//Obtiene el id actual
            var nombre =  \$(this).attr(\"name\"); //Obtiene el nombre
            var nombre2 = nombre.toString()+\"_2\";
            contenido=\"botonFavorito\";/*CSS a buscar*/
            if(clase.indexOf(contenido)>=0){ /* Es favorito*/
                \$(this).attr(\"class\",\"btn botonFavorito2\");/*Ya no me gusta*/
                \$(this).attr(\"href\",\"#ruta2\");/* Cambio de ruta */
            }
            else{/* No es favorito*/
                \$(this).attr(\"class\",\"btn botonFavorito\");
                \$(this).attr(\"href\",\"#ruta1\");
            }
        });
        /* El raton se retira del boton*/
        \$(document).on(\"mouseout\",'#favorito',function(){
            var clase = \$(this).attr(\"class\");
            var identificador = \$(this).attr(\"id\");
            var nombre =  \$(this).attr(\"name\");
            contenido=\"botonFavorito2\";
            if(clase.indexOf(contenido)>=0){ /* Es favorito*/
                \$(this).attr(\"class\",\"btn botonFavorito\");
            }
            else{/* No es favorito*/
                contenido=\"botonNoFavorito\";
                if(clase.indexOf(contenido)>=0){
                    \$(this).attr(\"class\",\"btn botonFavorito\");
                    \$(this).attr(\"href\",\"#ruta3\");
                }
                else{
                    \$(this).attr(\"class\",\"btn btn-default botonNoFavorito\");
                    \$(this).attr(\"href\",\"#ruta4\");
                }
            }
        });
        \$(document).on(\"mouseover\",'#siguiendo',function(){
            var clase = \$(this).attr(\"class\");
            var identificador = \$(this).attr(\"id\");
            var nombre =  \$(this).attr(\"name\");
            \$(this).attr(\"id\",\"noSeguir\");
            contenido=\"btn-default\";
            if(clase.indexOf(contenido)>=0){ 
                \$(this).attr(\"class\",\"btn btn-info noSeguir\");
            }
            else{
                \$(this).attr(\"class\",\"btn btn-default botonSiguiendo\");
            }
        });
        \$(document).on(\"mouseout\",'#noSeguir',function(){
            var clase = \$(this).attr(\"class\");
            var identificador = \$(this).attr(\"id\");
            var nombre =  \$(this).attr(\"name\");
            \$(this).attr(\"id\",\"siguiendo\");
            contenido=\"btn-info\";
            if(clase.indexOf(contenido)>=0){ 
                \$(this).attr(\"class\",\"btn btn-default botonSiguiendo\");
            }
            else{
                \$(this).attr(\"class\",\"btn btn-info seguir\");
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "usuarios/favoritos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1551 => 1259,  1547 => 1257,  1541 => 1255,  1539 => 1254,  1535 => 1252,  1531 => 1250,  1525 => 1248,  1523 => 1247,  1497 => 1224,  1492 => 1222,  1488 => 1221,  1484 => 1220,  1480 => 1219,  1476 => 1218,  1472 => 1217,  1467 => 1215,  1464 => 1214,  1461 => 1213,  1427 => 1183,  1398 => 1157,  1386 => 1148,  1378 => 1143,  1365 => 1133,  1332 => 1103,  1303 => 1077,  1291 => 1068,  1283 => 1063,  1270 => 1053,  1237 => 1023,  1208 => 997,  1196 => 988,  1188 => 983,  1175 => 973,  1138 => 939,  1107 => 911,  1095 => 902,  1087 => 897,  1074 => 887,  1041 => 857,  1010 => 829,  998 => 820,  990 => 815,  977 => 805,  944 => 775,  913 => 747,  901 => 738,  893 => 733,  880 => 723,  845 => 691,  814 => 663,  802 => 654,  794 => 649,  781 => 639,  748 => 609,  717 => 581,  705 => 572,  697 => 567,  684 => 557,  651 => 527,  619 => 498,  607 => 489,  599 => 484,  586 => 474,  551 => 442,  520 => 414,  508 => 405,  500 => 400,  487 => 390,  454 => 360,  423 => 332,  411 => 323,  403 => 318,  390 => 308,  357 => 278,  326 => 250,  314 => 241,  306 => 236,  293 => 226,  284 => 219,  281 => 218,  268 => 209,  259 => 203,  231 => 179,  171 => 123,  152 => 107,  133 => 91,  114 => 75,  96 => 60,  78 => 45,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/favoritos.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/favoritos.html.twig");
    }
}
