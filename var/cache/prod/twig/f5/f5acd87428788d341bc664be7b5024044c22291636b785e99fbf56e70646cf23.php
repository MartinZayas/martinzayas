<?php

/* usuarios/artistas.html.twig */
class __TwigTemplate_034786567667fd71b21f2d82cf3ed715239c285b32f16e326ff23f15522037a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/artistas.html.twig", 2);
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
        .panelArtistas{
            margin-right: 0px;
            margin-bottom: 10px;
            padding-left: 2px;
            padding-right: 2px;
            border:1px solid #000000;
            background-color: #FFFFFF;
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
        .imagenArtistas{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .textoArtista{
            text-align: center;
        }
        .botonFavorito{
            width: 100%;
            margin-top: 5px;
            padding-left: 6px;
            padding-right: 6px;
            margin-bottom: 5px;
            text-align: center;
            align-content: center;
            height: 42px;
            padding-top: 10px;
            padding-bottom: 10px;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .botonFavorito2{
            display: none;
            width: 100%;
            height: 42px;
            margin-top: 5px;
            padding-top: 13px;
            padding-bottom: 10px;
            padding-left: 0px;
            padding-right: 0px;
            margin-bottom: 5px;
            text-align: center;
            font-size: 11px;
            align-content: center;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .botonOpciones{
            width: 100%;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 0px;
            padding-right: 0px;
            margin-bottom: 5px;
            text-align: center;
            align-content: center;
            background-color: #FFFFFF;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
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
        .estiloMusical{
            height: 50px;
            max-height: 50px;
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
    </style>
";
    }

    // line 130
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"row ml5\" id=\"buscador\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\"><!-- Titulo y buscador -->
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <div class=\"tituloSesion\">Mis Artistas</div>
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
        </div>
    </div>
";
    }

    // line 153
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 154
        echo "    <div class=\"row mt5 mb5\" id=\"favoritos1\"><!-- Fila 1-->
        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 1 -->
            <div class=\"view image-hover-1 no-margin\">
                <!-- Blog Thumb -->
                <div class=\"product-container\">
                    <img class=\"img-responsive full-width\" src=\"";
        // line 159
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
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"";
        // line 174
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
        // line 183
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
                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12 estiloMusical\">
                        <span class=\"fa fa-music\"></span> Pop rock, Power pop, Synth pop, Folk rock
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"hidden-xs hidden-sm col-md-8 col-lg-8\"></div>
                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                        <p class=\"textoTipo\">Banda</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
                        <a href=\"#\" class=\"btn btn-custom-orange btn-sm\" id=\"gestionarEvento\">
                            Gestionar Evento
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Submenu -->
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default btn-sm dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-option-vertical\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Editar</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Bloquear</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar</a>
                                </li>
                            </ul>
                        </div>
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
        // line 258
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
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista2.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"";
        // line 273
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
        // line 282
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
                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12 estiloMusical\">
                        <span class=\"fa fa-music\"></span> Pop
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"hidden-xs hidden-sm col-md-8 col-lg-8\"></div>
                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                        <p class=\"textoTipo\">Banda</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
                        <a href=\"#\" class=\"btn btn-custom-orange btn-sm\" id=\"gestionarEvento2\">
                            Gestionar Evento
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Submenu -->
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default btn-sm dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-option-vertical\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Editar</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Bloquear</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar</a>
                                </li>
                            </ul>
                        </div>
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
        // line 357
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
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"";
        // line 372
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
        // line 381
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
                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12 estiloMusical\">
                        <span class=\"fa fa-music\"></span> Rock
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"hidden-xs hidden-sm col-md-8 col-lg-8\"></div>
                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                        <p class=\"textoTipo\">Banda</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
                        <a href=\"#\" class=\"btn btn-custom-orange btn-sm\" id=\"gestionarEvento3\">
                            Gestionar Evento
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Submenu -->
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default btn-sm dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-option-vertical\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Editar</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Bloquear</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar</a>
                                </li>
                            </ul>
                        </div>
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
    </div><!-- Fin de fila 1 de Artistas -->
    <div class=\"row mb5\" id=\"favoritos2\"><!-- Fila 2 -->
        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 4 -->
            <div class=\"view image-hover-1 no-margin\">
                <!-- Blog Thumb -->
                <div class=\"product-container\">
                    <img class=\"img-responsive full-width\" src=\"";
        // line 458
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
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"";
        // line 473
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
        // line 482
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
                        <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12 estiloMusical\">
                            <span class=\"fa fa-music\"></span> Rock, Pop, Dance, G&oacute;spel
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"hidden-xs hidden-sm col-md-8 col-lg-8\"></div>
                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                        <p class=\"textoTipo\">Banda</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
                        <a href=\"#\" class=\"btn btn-custom-orange btn-sm\" id=\"gestionarEvento4\">
                            Gestionar Evento
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Submenu -->
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default btn-sm dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-option-vertical\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Editar</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Bloquear</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar</a>
                                </li>
                            </ul>
                        </div>
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
        </div><!-- Fin Resulatado 4 -->
        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 5 -->
            <div class=\"view image-hover-1 no-margin\">
                <!-- Blog Thumb -->
                <div class=\"product-container\">
                    <img class=\"img-responsive full-width\" src=\"";
        // line 559
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
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista5.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"";
        // line 574
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
        // line 583
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
                        <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12 estiloMusical\">
                            <span class=\"fa fa-music\"></span> Rock, Indie
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"hidden-xs hidden-sm col-md-8 col-lg-8\"></div>
                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                        <p class=\"textoTipo\">Banda</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
                        <a href=\"#\" class=\"btn btn-custom-orange btn-sm\" id=\"gestionarEvento5\">
                            Gestionar Evento
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Submenu -->
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default btn-sm dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-option-vertical\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Editar</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Bloquear</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar</a>
                                </li>
                            </ul>
                        </div>
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
        // line 660
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
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"";
        // line 675
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
        // line 684
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
                        <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12 estiloMusical\">
                            <span class=\"fa fa-music\"></span> Rock, Pop, Dance, Electr&oacute;nica
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"hidden-xs hidden-sm col-md-8 col-lg-8\"></div>
                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                        <p class=\"textoTipo\">Banda</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
                        <a href=\"#\" class=\"btn btn-custom-orange btn-sm\" id=\"gestionarEvento6\">
                            Gestionar Evento
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Submenu -->
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default btn-sm dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-option-vertical\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Editar</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Bloquear</a>
                                </li>
                                <li role=\"presentation\">
                                  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar</a>
                                </li>
                            </ul>
                        </div>
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
    </div><!-- Fin de fila 2 de Artistas -->
";
    }

    // line 759
    public function block_customScripts($context, array $blocks = array())
    {
        // line 760
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 766
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 770
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
            var max = 0;
            ";
        // line 787
        if ((($context["cantResultados"] ?? null) >= 2)) {
            // line 788
            echo "                max = 300*";
            echo twig_escape_filter($this->env, ($context["cantResultados"] ?? null), "html", null, true);
            echo ";
            ";
        } else {
            // line 790
            echo "                max = 320;
            ";
        }
        // line 792
        echo "            if(\$(document).scrollTop() >= 100 && \$(document).scrollTop()<= max){
                document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
            }
            else{
                document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
            }
        });
        document.getElementById(\"menu1\").setAttribute(\"class\",\"\");
        document.getElementById(\"menu7\").setAttribute(\"class\",\"menuActivo\");
    </script>
";
    }

    public function getTemplateName()
    {
        return "usuarios/artistas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 792,  939 => 790,  933 => 788,  931 => 787,  911 => 770,  906 => 768,  902 => 767,  898 => 766,  894 => 765,  890 => 764,  886 => 763,  881 => 761,  878 => 760,  875 => 759,  796 => 684,  784 => 675,  776 => 670,  763 => 660,  683 => 583,  671 => 574,  663 => 569,  650 => 559,  570 => 482,  558 => 473,  550 => 468,  537 => 458,  457 => 381,  445 => 372,  437 => 367,  424 => 357,  346 => 282,  334 => 273,  326 => 268,  313 => 258,  235 => 183,  223 => 174,  215 => 169,  202 => 159,  195 => 154,  192 => 153,  164 => 130,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/artistas.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/artistas.html.twig");
    }
}
