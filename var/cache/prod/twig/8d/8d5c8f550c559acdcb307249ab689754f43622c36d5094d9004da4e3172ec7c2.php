<?php

/* artistas/paso3.html.twig */
class __TwigTemplate_ab5352c1bb727cf735e8f24f3e3f86a1680f9100c48e0d8b3a496aeab2794b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "artistas/paso3.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'steps' => array($this, 'block_steps'),
            'customContent' => array($this, 'block_customContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/formatoBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto | Nuevo Artista";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
    <!-- bootstrap slider -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />
    <!-- select 2 -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <style>
        .btn {
            border-radius:2px;
        }        
        .btn-custom-orange{
            color: #ffffff;
            background-color: #FF8000;
            border-color: #FF8000;
        }
        .btn-custom-orange:hover{
            color: #ffffff;
            background-color: #dc7003;
            border-color: #dc7003;\t
        }
        .btn-youtube{
            color: #ffffff;
            background-color: red;
        }
        .bordered-icon-lg {
            border-radius:0;
            font-size:34px !important;
            border:1px solid #D2D2D2;
            border-radius:50%;
            color:#00B7EB;
            background-color:transparent;
            padding-top:28px;
            height:90px;
            text-align:center;
            width:90px;
        }
        .bordered-icon-lg-gris {
            border-radius:0;
            font-size:34px !important;
            border:1px solid #D2D2D2;
            border-radius:50%;
            color:#171919;
            background-color:transparent;
            padding-top:28px;
            height:90px;
            text-align:center;
            width:90px;
        }
        .bordered-icon-color-gris {
            background-color: #939797; /*GRIS *#00B7EB; AZUL*/
            color:#fff !important;
            border:1px solid transparent;
        }

        .bordered-icon-color-gris:hover,
        .bordered-icon-color-gris:focus {
            border:1px solid #D2D2D2;
            color: #171919; /*#00B7EB;*/
        }
        .siguiente{
            right: 5px;
        }
/**********************Subir archivo*******************************************/
        .tArchivo{
            width: 100%;
            color: #000000;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            z-index: 2;
        }
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputfile + label {
            font-size: 1.25em;
            font-weight: 700;
            color: white;
            background-color: black;
            display: inline-block;
        }

        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: red;
        }
        .inputfile + label {
            cursor: pointer; /* \"hand\" cursor */
        }
        .inputfile:focus + label {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
        }
        .inputfile + label * {
            pointer-events: none;
        }
        .alerta{
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            padding-bottom: 5px;
            text-align: justify;
            line-height: 30px;
            border-left: #337ab7;
            border-left-style: solid;
            border-left-width: 4px;
            background-color: #00B7EB;
            color: #ffffff;
            font-family: Helvetica, Open Sans;
        }
        .textoArchivos{
            color: #000000;
        }
/********************************** Videos ************************************/        
        .bordered-icon-gris {
            background-color:#272727;
            color:#fff !important;
            border:1px solid transparent;
        }
        .bordered-icon-gris:hover, .bordered-icon-gris:focus {
            border:1px solid #D2D2D2;
            color:#00B7EB;
        }
    </style>
";
    }

    // line 135
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "artistas/paso3.html.twig", 136)->display(array_merge($context, array("bgImage" => (        // line 137
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nuevo Artista: Videos, Fotos y Discografía")));
    }

    // line 141
    public function block_steps($context, array $blocks = array())
    {
        // line 142
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "artistas/paso3.html.twig", 142)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 149
    public function block_customContent($context, array $blocks = array())
    {
        // line 150
        echo "    <div class=\"container\"><!-- Contenido -->
        <div class=\"row mt20 mb20 background-light-grey\">
            <div class=\"hidden-xs hidden-sm col-md-12 without-padding-right without-padding-left\">
                <ul class=\"steps nav nav-pills\">
                    <li role=\"presentation\" id=\"step-1\" class=\"\">
                        <a href=\"\">
                            1
                        </a>
                        <span>Datos generales</span>
                    </li>
                    <li class=\"divider-3-steps\">
                        <span>
                            <hr class=\"hr-solid\">
                        </span>
                    </li>
                    <li role=\"presentation\" id=\"step-2\" class=\"\">
                        <a href=\"\">
                            2
                        </a>
                        <span>Datos de contacto</span>
                    </li>
                    <li class=\"divider-3-steps\">
                        <span>
                            <hr class=\"hr-solid\">
                        </span>
                    </li>
                    <li role=\"presentation\" id=\"step-3\" class=\"active\">
                        <a href=\"\">
                            3
                        </a>
                        <span>Videos, Fotos, Discograf&iacute;a</span>
                    </li>
                </ul>
            </div><!-- Fin Pasos -->
        </div>
        <div class=\"row\">
            <div class=\"tab-content tab-shop mt0 mb20 bg-shadow background-white\">
                <div id=\"paso3\" class=\"tab-pane row fade in active\"><!-- Video, Fotos y discografía -->
                    <div class=\"col-sm-12\"><!-- Paso 2 -->
                        <div class=\"panel no-margin panel-primary\">
                            <div class=\"panel-heading\">
                                <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/disco-compacto.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Discograf&iacute;a\">
                                <strong>Tus videos, fotos y discograf&iacute;a</strong>
                            </div>
                            <div class=\"panel-body general-container\">
                                <form action=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroArtistas");
        echo "\" method=\"post\" id=\"formularioMultimedia\" role=\"form\">
                                    <ul class=\"nav nav-tabs nav-justified\">
                                        <li class=\"active\">
                                            <a data-toggle=\"pill\" href=\"#Fotos\">
                                                <span class=\"fa fa-image\"></span> Fotos
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle=\"pill\" href=\"#Videos\">
                                                <span class=\"fa fa-video-camera\"></span> Videos
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle=\"pill\" href=\"#Discografia\">
                                                <span class=\"fa fa-music\"></span> Discografia
                                            </a>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content\">
                                        <div id=\"Fotos\" class=\"tab-pane fade in active\">
                                            <div class=\"row mb10\"><!-- Fila 1 -->
                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                    <div class=\"panel panel-default\" id=\"fotos\">
                                                        <div class=\"panel-heading\">
                                                            <h3>
                                                                <span class=\"fa fa-image\"></span>
                                                                Foto de Portada
                                                            </h3>
                                                        </div>
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                                <p class=\"alerta\" id=\"archivosCargados\">
                                                                Sube una imagen de gran tamaño para mostrar un encabezado en tu perfil o 
                                                                selecciona una de las que te proponemos.</p>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                                    <div id=\"imgPortadaContainer\"></div>
                                                                    <a id=\"btnShowModalUploadPortada\" href=\"#modalAddImagenPortada\" data-toggle=\"modal\" class=\"btn btn-primary mt20\">
                                                                        <i class=\"fa fa-edit\"></i> Selecciona una imagen de portada
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Fin Fila 1 -->
                                            <div class=\"row mb10\"><!-- Fila 2 -->
                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                    <div class=\"panel panel-default\" id=\"fotos\">
                                                        <div class=\"panel-heading\">
                                                            <h3>
                                                                <span class=\"fa fa-dropbox\"></span>
                                                                Otras Fotos
                                                            </h3>
                                                        </div>
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                                    <p id=\"msgBoxPortada\" style=\"color: red;\"></p>
                                                                    <p>
                                                                        Sube fotos sobre tu evento para que los visitantes vean de que se trata. 
                                                                        Tambi&eacute;n debes seleccionar una como foto de perfil, 
                                                                        que identifique a tu evento, normalmente el poster del evento.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <ul id=\"fotos-container\" class=\"col-sm-12 text-center no-margin list-unstyled\">

                                                                </ul>
                                                            </div>
                                                            <div class=\"row mt20\">
                                                                <div class=\"col-md-12\">
                                                                    <div id=\"progressOuter2\" class=\"progress progress-striped active\" style=\"display:none;\">
                                                                        <div id=\"progressBar2\" class=\"progress-bar progress-bar-primary\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\">
                                                                        </div>
                                                                    </div>
                                                                    <a id=\"uploadBtnFotos\" href=\"#\" class=\"btn btn-primary\">
                                                                        <i class=\"fa fa-plus\"></i> Añadir imagen 
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Fin Fila 2 -->
                                        </div>
                                        <div id=\"Videos\" class=\"tab-pane fade\">
                                            <div class=\"row mb10\"><!-- Fila 1 -->
                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                    <div class=\"panel panel-default\" id=\"videos\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                                    Puedes seleccionar tus videos de Youtube o Vimeo para que todos lo vean.
                                                                </div>
                                                            </div>
                                                            <div class=\"row mt10\" id=\"contenedorVideos\">
                                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                                    <div class=\"form-group\">
                                                                        <div class=\"input-group\">
                                                                            <div class=\"input-group-addon\">
                                                                                <span class=\"button-wrap\">
                                                                                    <button type=\"button\" class=\"button button-circle btnFavorito\" data-toggle=\"tooltip\" title=\"Marca este video como Destacado para que aparezca al inicio de tu perfil\">
                                                                                        <i class=\"fa fa-star\"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                            <input name=\"urlVideo[]\" placeholder=\"Copia la URL de tu video de Youtube o Vimeo\" class=\"form-control urlVideo\" type=\"text\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <a id=\"btnAddVideo\" class=\"btn btn-primary\">
                                                                    <i class=\"fa fa-plus\"></i> Añadir otro video
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Fin Fila 1 -->
                                        </div><!-- Fin Videos -->
                                        <div id=\"Discografia\" class=\"tab-pane fade\">
                                            <div class=\"row mb10\"><!-- Fila 1 -->
                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                    <span class=\"help-block\">Aqu&iacute; puedes añadir tu discograf&iacute;a completa y los enlaces de compra de cada &aacute;lbum 
                                                        <strong>(Puedes saltar este paso y hacerlo m&aacute;s tarde desde tu &Aacute;rea de Cliente).</strong>
                                                    </span>
                                                    <div class=\"panel panel-default\" id=\"albums\">
                                                        <div class=\"panel-heading\">&Aacute;lbums</div>
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12 col-md-12 col-lg-12\" id=\"albumsContainer\">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-md-12\">
                                                                    <a class=\"btn btn-primary\" href=\"#modalAddAlbum\" data-toggle=\"modal\">
                                                                        <i class=\"fa fa-plus-circle\"></i> Añadir &aacute;lbum
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <span class=\"help-block\">También puedes añadir canciones de muestra para que los espectadores las escuchen. <strong>(Puedes saltar este paso y hacerlo mas tarde desde tu Area de Cliente)</strong></span>
                                                    <div class=\"panel panel-default\">
                                                        <div class=\"panel-heading\">Canciones de muestra</div>
                                                        <div class=\"panel-body\">
                                                            <span class=\"help-block\">Selecciona uno de los métodos disponibles para mostrar tu música</span>
                                                            <ul class=\"nav nav-tabs nav-justified mt15\" role=\"tablist\">
                                                                <li class=\"active\"><a href=\"#spotify\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-spotify\"></span>  Spotify</a></li>
                                                                <li><a href=\"#soundcloud\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-soundcloud\"></span>  Soundcloud</a></li>
                                                                <li ><a href=\"#deezer\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-deezer\"></span>  Deezer</a></li>
                                                                <li ><a href=\"#custom\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-upload\"></span>  Subir desde ordenador</a></li>
                                                            </ul>
                                                            <div class=\"tab-content tab-default mb15\">
                                                                <div class=\"tab-pane in active\" id=\"spotify\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12\">
                                                                            <div class=\"form-group\">
                                                                                                                                                    <textarea rows=\"6\" name=\"spotify\" data-type=\"spotify\" class=\"form-control music-profile\" placeholder=\"Código para incrustar el reproductor de música\"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"tab-pane\" id=\"soundcloud\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12\">
                                                                            <div class=\"form-group\">
                                                                                <textarea rows=\"6\" name=\"soundcloud\" data-type=\"soundcloud\" class=\"form-control music-profile\" placeholder=\"Código para incrustar el reproductor de música\"></textarea>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"tab-pane\" id=\"deezer\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12\">
                                                                            <div class=\"form-group\">
                                                                                <textarea rows=\"6\" name=\"deezer\" data-type=\"deezer\" class=\"form-control music-profile\" placeholder=\"Código para incrustar el reproductor de música\"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"tab-pane\" id=\"custom\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12\">
                                                                            <div class=\"form-group\">
                                                                                <input type=\"hidden\" id=\"indexMusic\" value=\"1\">
                                                                                <label>O puedes subir tus propias canciones (Máximo 4)</label><br/>
                                                                                <p id=\"msgBoxMusic\" style=\"color: red;\"></p>
                                                                                <ul id=\"musicContainer\">

                                                                                </ul>
                                                                                <div id=\"progressOuterMusic\" class=\"progress progress-striped active\" style=\"display:none;\">
                                                                                    <div id=\"progressBarMusic\" class=\"progress-bar progress-bar-primary\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\">
                                                                                    </div>
                                                                                </div>
                                                                                <a id=\"uploadMusic\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> <span>Seleccionar canción</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                      
                                    <div class=\"row mt10\"><!-- Botones -->
                                        <div class=\"hidden-xs hidden-sm col-md-4 col-lg-4\"></div>
                                        <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                                            <button type=\"button\" class=\"btn btn-custom-orange btn-block\" id=\"\" data-toggle=\"tooltip\" title=\"Completar mis datos más tarde\">
                                                Completar mis datos mas tarde
                                                <span class=\"glyphicon glyphicon-save-file\"></span>
                                            </button>
                                        </div>
                                        <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                            <a href=\"";
        // line 423
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("artistaPaso2");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"siguiente2\" data-toggle=\"tooltip\" title=\"Anterior - Datos de Contacto\">
                                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                                Anterior                                            
                                            </a>
                                        </div>
                                        <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                            <button type=\"submit\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"guardar\" data-toggle=\"tooltip\" title=\"Guardar\">
                                                <span class=\"glyphicon glyphicon-ok-sign\"></span>
                                                Terminar
                                            </button>
                                        </div>
                                    </div><!-- Fin de Botones --> 
                                    <!-- Varios -->
                                    <input type=\"hidden\" name=\"img-upload-path\" id=\"img-upload-path\" value=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/adicionar/"), "html", null, true);
        echo "\"> ";
        // line 437
        echo "                                    <input type=\"hidden\" name=\"img-route\" id=\"img-route\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/temp/"), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"indice-video\" id=\"indice-video\" value=\"1\">
                                    <input type=\"hidden\" name=\"local-img-route\" id=\"local-img-route\" value=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/"), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"img-album-upload-path\" id=\"img-album-upload-path\" value=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/albums/subir-imagen/"), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"img-album-route\" id=\"img-album-route\" value=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/albums/"), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"directorioImagenesPublic\" id=\"directorioImagenesPublic\" value=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/"), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"music-upload-path\" id=\"music-upload-path\" value=\"/artista/upload-musica\">
                                    <input type=\"hidden\" name=\"delete-music-path\" id=\"delete-music-path\" value=\"/artista/delete-musica\">
                                    <input type=\"hidden\" name=\"videoDestacado\" id=\"videoDestacado\">
                                </form><!-- Fin formularioMultimedia-->
                                <!-- Modal de la imagen  -->
                                <div class=\"modal fade\" id=\"modalAddImagenPortada\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-lg\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                                    <span aria-hidden=\"true\">×</span>
                                                    <span class=\"sr-only\">Cerrar</span>
                                                </button>
                                                <h4 class=\"modal-title\" id=\"loginLabel\">Selecciona tu foto de portada</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12\" style=\"text-align: center\">
                                                        <h3>Sube tu foto de portada</h3>
                                                        <p><b>(Tamaño mínimo recomendado de 2000 X 400 px)</b></p>
                                                        <p id=\"msgBoxPortada\" style=\"color: red;\"></p>
                                                        <div id=\"progressOuterPortada\" class=\"progress progress-striped active\" style=\"display:none;\">
                                                            <div id=\"progressBarPortada\" class=\"progress-bar progress-bar-primary\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\">
                                                            </div>
                                                        </div>
                                                        <a id=\"uploadBtnPortada\" class=\"btn btn-lg btn-primary\" href=\"#\">
                                                            <i class=\"fa fa-upload\"></i> Subir Foto
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class=\"row\" style=\"margin-top:30px;\">
                                                    <div class=\"col-xs-12\" style=\"text-align: center;\">
                                                        <h3>¿No tienes una foto de alta resolución? Selecciona una de las nuestras</h3>
                                                        <div class=\"heading\"></div>
                                                    </div>
                                                    <div class=\"col-md-6 col-xs-12\">
                                                        <a class=\"imagenPortada\" data-img=\"bg2.jpg\" href=\"#\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg2.jpg"), "html", null, true);
        echo "\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6 col-xs-12\">
                                                        <a class=\"imagenPortada\" data-img=\"bg3.jpg\" href=\"#\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg3.jpg"), "html", null, true);
        echo "\">
                                                        </a>
                                                    </div>
                                                    <div style=\"margin-top: 30px;\" class=\"col-md-6 col-xs-12\">
                                                        <a class=\"imagenPortada\" data-img=\"bg4.png\" href=\"#\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg4.png"), "html", null, true);
        echo "\">
                                                        </a>
                                                    </div>
                                                    <div style=\"margin-top: 30px;\" class=\"col-md-6 col-xs-12\">
                                                        <a class=\"imagenPortada\" data-img=\"bg6.png\" href=\"#\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg6.png"), "html", null, true);
        echo "\">
                                                        </a>
                                                    </div>
                                                    <div style=\"margin-top: 30px;\" class=\"col-md-6 col-xs-12\">
                                                        <a class=\"imagenPortada\" data-img=\"bg11.png\" href=\"#\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg11.png"), "html", null, true);
        echo "\">
                                                        </a>
                                                    </div>
                                                    <div style=\"margin-top: 30px;\" class=\"col-md-6 col-xs-12\">
                                                        <a class=\"imagenPortada\" data-img=\"bg13.png\" href=\"#\">
                                                            <img class=\"img-responsive\" src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg13.png"), "html", null, true);
        echo "\">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <a class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</a>
                                            </div>
                                        </div><!-- /modal content -->
                                    </div><!-- /modal dialog -->
                                </div><!-- /modal holder -->
                                <!-- Modal del album -->
                                <div class=\"modal fade\" id=\"modalAddAlbum\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-lg\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                                    <span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                                <h4 class=\"modal-title\" id=\"loginLabel\">Añadir nuevo álbum</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form role=\"form\" id=\"formAddAlbum\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4\" style=\"text-align: center;\">
                                                        <img id=\"imgAlbumContainer\" class=\"img-responsive\" src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\">
                                                        <p id=\"msgBoxAlbum\" style=\"color: red;\"></p>
                                                        <a id=\"uploadAlbumImg\" class=\"mt10 btn btn-primary\"><i class=\"fa fa-upload\"></i> Subir imagen del álbum</a>
                                                        <div id=\"progressOuterAlbum\" class=\"progress progress-striped active\" style=\"display:none;\">
                                                            <div id=\"progressBarAlbum\" class=\"progress-bar progress-bar-primary\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\">
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" name=\"imgAlbum\" id=\"imgAlbum\">
                                                    </div>
                                                    <div class=\"col-md-8\">
                                                        <div class=\"form-group\">
                                                            <label for=\"tituloAlbum\">Titulo del album <span class=\"required\">*</span></label>
                                                            <input required=\"required\" class=\"form-control\" type=\"text\" name=\"tituloAlbum\" id=\"tituloAlbum\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label for=\"autorAlbum\">Autor <span class=\"required\">*</span></label>
                                                            <input disabled type=\"text\" name=\"autorAlbum\" id=\"autorAlbum\" value=\"\" class=\"form-control\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Año <span class=\"required\">*</span></label>
                                                            <div class=\"input-group\">
                                                                <div  class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
                                                                <select required=\"required\" name=\"fechaAlbum\" id=\"fechaAlbum\" class=\"form-control js-example-basic-single\">
                                                                    <option value=\"\">Seleccionar año</option>
                                                                    <option value=\"2018\">2018</option>
                                                                    <option value=\"2017\">2017</option>
                                                                    <option value=\"2016\">2016</option>
                                                                    <option value=\"2015\">2015</option>
                                                                    <option value=\"2014\">2014</option>
                                                                    <option value=\"2013\">2013</option>
                                                                    <option value=\"2012\">2012</option>
                                                                    <option value=\"2011\">2011</option>
                                                                    <option value=\"2010\">2010</option>
                                                                    <option value=\"2009\">2009</option>
                                                                    <option value=\"2008\">2008</option>
                                                                    <option value=\"2007\">2007</option>
                                                                    <option value=\"2006\">2006</option>
                                                                    <option value=\"2005\">2005</option>
                                                                    <option value=\"2004\">2004</option>
                                                                    <option value=\"2003\">2003</option>
                                                                    <option value=\"2002\">2002</option>
                                                                    <option value=\"2001\">2001</option>
                                                                    <option value=\"2000\">2000</option>
                                                                    <option value=\"1999\">1999</option>
                                                                    <option value=\"1998\">1998</option>
                                                                    <option value=\"1997\">1997</option>
                                                                    <option value=\"1996\">1996</option>
                                                                    <option value=\"1995\">1995</option>
                                                                    <option value=\"1994\">1994</option>
                                                                    <option value=\"1993\">1993</option>
                                                                    <option value=\"1992\">1992</option>
                                                                    <option value=\"1991\">1991</option>
                                                                    <option value=\"1990\">1990</option>
                                                                    <option value=\"1989\">1989</option>
                                                                    <option value=\"1988\">1988</option>
                                                                    <option value=\"1987\">1987</option>
                                                                    <option value=\"1986\">1986</option>
                                                                    <option value=\"1985\">1985</option>
                                                                    <option value=\"1984\">1984</option>
                                                                    <option value=\"1983\">1983</option>
                                                                    <option value=\"1982\">1982</option>
                                                                    <option value=\"1981\">1981</option>
                                                                    <option value=\"1980\">1980</option>
                                                                    <option value=\"1979\">1979</option>
                                                                    <option value=\"1978\">1978</option>
                                                                    <option value=\"1977\">1977</option>
                                                                    <option value=\"1976\">1976</option>
                                                                    <option value=\"1975\">1975</option>
                                                                    <option value=\"1974\">1974</option>
                                                                    <option value=\"1973\">1973</option>
                                                                    <option value=\"1972\">1972</option>
                                                                    <option value=\"1971\">1971</option>
                                                                    <option value=\"1970\">1970</option>
                                                                    <option value=\"1969\">1969</option>
                                                                    <option value=\"1968\">1968</option>
                                                                    <option value=\"1967\">1967</option>
                                                                    <option value=\"1966\">1966</option>
                                                                    <option value=\"1965\">1965</option>
                                                                    <option value=\"1964\">1964</option>
                                                                    <option value=\"1963\">1963</option>
                                                                    <option value=\"1962\">1962</option>
                                                                    <option value=\"1961\">1961</option>
                                                                    <option value=\"1960\">1960</option>
                                                                    <option value=\"1959\">1959</option>
                                                                    <option value=\"1958\">1958</option>
                                                                    <option value=\"1957\">1957</option>
                                                                    <option value=\"1956\">1956</option>
                                                                    <option value=\"1955\">1955</option>
                                                                    <option value=\"1954\">1954</option>
                                                                    <option value=\"1953\">1953</option>
                                                                    <option value=\"1952\">1952</option>
                                                                    <option value=\"1951\">1951</option>
                                                                    <option value=\"1950\">1950</option>
                                                                    <option value=\"1949\">1949</option>
                                                                    <option value=\"1948\">1948</option>
                                                                    <option value=\"1947\">1947</option>
                                                                    <option value=\"1946\">1946</option>
                                                                    <option value=\"1945\">1945</option>
                                                                    <option value=\"1944\">1944</option>
                                                                    <option value=\"1943\">1943</option>
                                                                    <option value=\"1942\">1942</option>
                                                                    <option value=\"1941\">1941</option>
                                                                    <option value=\"1940\">1940</option>
                                                                    <option value=\"1939\">1939</option>
                                                                    <option value=\"1938\">1938</option>
                                                                    <option value=\"1937\">1937</option>
                                                                    <option value=\"1936\">1936</option>
                                                                    <option value=\"1935\">1935</option>
                                                                    <option value=\"1934\">1934</option>
                                                                    <option value=\"1933\">1933</option>
                                                                    <option value=\"1932\">1932</option>
                                                                    <option value=\"1931\">1931</option>
                                                                    <option value=\"1930\">1930</option>
                                                                    <option value=\"1929\">1929</option>
                                                                    <option value=\"1928\">1928</option>
                                                                    <option value=\"1927\">1927</option>
                                                                    <option value=\"1926\">1926</option>
                                                                    <option value=\"1925\">1925</option>
                                                                    <option value=\"1924\">1924</option>
                                                                    <option value=\"1923\">1923</option>
                                                                    <option value=\"1922\">1922</option>
                                                                    <option value=\"1921\">1921</option>
                                                                    <option value=\"1920\">1920</option>
                                                                    <option value=\"1919\">1919</option>
                                                                    <option value=\"1918\">1918</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label for=\"idEstilosAlbum\">Estilo(s) Musical(es) <span class=\"required\">*</span></label>
                                                            <select required=\"required\" name=\"idEstilosAlbum[]\" id=\"idEstilosAlbum\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                                                                <option value=\"1\">Rock</option>
                                                                <option value=\"2\">Jazz</option>
                                                                <option value=\"3\">Pop</option>
                                                                <option value=\"4\">Salsa</option>
                                                                <option value=\"5\">Rumba</option>
                                                                <option value=\"6\">Indie</option>
                                                                <option value=\"7\">Clasico</option>
                                                                <option value=\"8\">Cumbia</option>
                                                                <option value=\"9\">Punk</option>
                                                                <option value=\"10\">Rap</option>
                                                                <option value=\"11\">Tap</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <div class=\"panel panel-default\" id=\"enlacesContainer\">
                                                            <div class=\"panel-heading\"><i class=\"fa fa-cart-arrow-down\"></i> Enlaces de venta</div>
                                                            <div class=\"panel-body\">
                                                                <input type=\"hidden\" id=\"indexEnlaceVenta\" value=\"1\">
                                                                <span class=\"help-block\">Añade los enlaces de las tiendas online donde comercialices tu album</span>
                                                                <div class=\"form-group\" id=\"enlaceVenta-1\">
                                                                    <div class=\"input-group\">
                                                                        <div class=\"input-group-addon\"><i class=\"fa fa-check-circle\"></i></div>
                                                                        <input class=\"form-control\" type=\"text\" name=\"nombresVenta[]\" placeholder=\"Nombre del sitio web\">
                                                                    </div>
                                                                    <div class=\"input-group mt10\">
                                                                        <div class=\"input-group-addon\"><i class=\"fa fa-globe\"></i></div>
                                                                        <input class=\"form-control\" type=\"text\" name=\"enlacesVenta[]\" placeholder=\"URL del sitio web\">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <a id=\"btnAddEnlace\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Añadir otro enlace</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"panel panel-default\" id=\"temasContainer\">
                                                            <div class=\"panel-heading\"><i class=\"fa fa-music\"></i> Canciones del álbum</div>
                                                            <div class=\"panel-body\">
                                                                <input type=\"hidden\" id=\"index-titulo-cancion\" value=\"1\">
                                                                <span class=\"help-block\">Puedes añadir los títulos de los temas del album</span>
                                                                <div class=\"form-group form-inline\">
                                                                    <input style=\"width:88%;\" type=\"text\" class=\"form-control\" name=\"tituloCancion\" id=\"tituloCancion\">
                                                                    <a style=\"padding-top:10px;height:42px;\" id=\"addTituloCancion\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></a>
                                                                </div>
                                                                <table id=\"titulosContainer\" class=\"table table-hover\">
                                                                    <tbody></tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <a id=\"btnSubmitAlbum\" class=\"btn btn-rw btn-primary\">Aceptar 
                                                    <img id=\"submitLoading\" style=\"display: none;\" class=\"img-responsive\" src=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/spinner.gif"), "html", null, true);
        echo "\"></a>
                                                <a class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</a>
                                            </div>
                                        </div><!-- /modal content -->
                                    </div><!-- /modal dialog -->
                                </div><!-- /modal holder -->
                                <!-- Modal Notificaciones -->
                                <div class=\"modal fade\" id=\"modalNotificacion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-md\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                                    <span aria-hidden=\"true\">×</span>
                                                    <span class=\"sr-only\">Cerrar</span>
                                                </button>
                                                <h4 class=\"modal-title\" id=\"titleLabel\"></h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12\">
                                                        <p id=\"messageBody\"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <a class=\"btn btn-primary\" data-dismiss=\"modal\" >Aceptar</a>
                                            </div>
                                        </div><!-- /modal content -->
                                    </div><!-- /modal dialog -->
                                </div><!-- /modal holder -->
                            </div><!-- Fin Panel Body -->
                        </div><!-- Fin Panel -->
                    </div><!-- Fin Paso 3 -->
                </div><!-- Fin Video, Fotos y discografía -->
            </div>
        </div>
    </div>
";
    }

    // line 757
    public function block_javascripts($context, array $blocks = array())
    {
        // line 758
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Efectos del registro --
    <script src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/customCodeRegistroArtista.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script-->
    <!-- Subir un archivo -->
    <script src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/SimpleAjaxUploader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/uploadMediasArtista.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
    /***********************Select2********************************************/
        \$(document).ready(function() {
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });            
            \$('.js-example-basic-single').select2();
    /************************Calendario*****************************************/
            \$('.datepicker-me').datepicker({
                    format: \"mm/yyyy\",
                    todayBtn: true,
                    language: \"es\",
                });
    /*************************Fotos********************************************/
            \$( '#file' ).each( function(){
\t\tvar \$input\t = \$( this ),
\t\t\t\$label\t = \$input.next( 'label' ),
\t\t\tlabelVal = \$label.html();
                        
\t\t\$input.on( 'change', function( e ){
\t\t\tvar fileName = '';
\t\t\tif( this.files && this.files.length > 1 )
\t\t\t\tfileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
\t\t\telse if( e.target.value )
\t\t\t\tfileName = e.target.value.split( '\\\\' ).pop();
                        var actual = document.getElementById(\"archivosCargados\").innerHTML;
\t\t\tif( fileName!= null ){
                            if(vacio(\"Sube fotos sobre tu evento\")){
                                document.getElementById(\"archivosCargados\").innerHTML=fileName;
                            }
                            else{
                                var actual = document.getElementById(\"archivosCargados\").innerHTML;
                                var resultado = actual.concat(\"; \"+fileName);
                                document.getElementById(\"archivosCargados\").innerHTML=resultado;
                            }
                        }
\t\t\telse{
                            if(vacio(\"Sube fotos sobre tu evento\")){
                                document.getElementById(\"archivosCargados\").innerHTML=fileName;
                            }
                            else{
                                var actual = document.getElementById(\"archivosCargados\").innerHTML;
                                var resultado = actual.concat(\"; \"+fileName);
                                document.getElementById(\"archivosCargados\").innerHTML=resultado;
                            }
                        }
                        document.getElementById(\"archivosCargados\").setAttribute(\"class\",\"textoArchivos\");
\t\t});
\t\t// Firefox bug fix
\t\t\$input
\t\t.on( 'focus', function(){ \$input.addClass( 'has-focus' ); })
\t\t.on( 'blur', function(){ \$input.removeClass( 'has-focus' ); });
            });//Fin Fotos
/****************************** Videos *****************************************/
            \$( '#file2' ).each( function(){
\t\tvar \$input\t = \$( this ),
\t\t\t\$label\t = \$input.next( 'label' ),
\t\t\tlabelVal = \$label.html();
                        
\t\t\$input.on( 'change', function( e ){
\t\t\tvar fileName = '';
\t\t\tif( this.files && this.files.length > 1 )
\t\t\t\tfileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
\t\t\telse if( e.target.value )
\t\t\t\tfileName = e.target.value.split( '\\\\' ).pop();
                        var actual = document.getElementById(\"videosCargados\").innerHTML;
\t\t\tif( fileName!= null ){
                            if(vacioVideos(\"Sube videos sobre tus eventos\")){
                                document.getElementById(\"videosCargados\").innerHTML=fileName;
                            }
                            else{
                                var actual = document.getElementById(\"videosCargados\").innerHTML;
                                var resultado = actual.concat(\"; \"+fileName);
                                document.getElementById(\"videosCargados\").innerHTML=resultado;
                            }
                        }
\t\t\telse{
                            if(vacioVideos(\"Sube videos sobre tus eventos\")){
                                document.getElementById(\"videosCargados\").innerHTML=fileName;
                            }
                            else{
                                var actual = document.getElementById(\"videosCargados\").innerHTML;
                                var resultado = actual.concat(\"; \"+fileName);
                                document.getElementById(\"videosCargados\").innerHTML=resultado;
                            }
                        }
                        document.getElementById(\"videosCargados\").setAttribute(\"class\",\"textoArchivos\");
\t\t});
\t\t// Firefox bug fix
\t\t\$input
\t\t.on( 'focus', function(){ \$input.addClass( 'has-focus' ); })
\t\t.on( 'blur', function(){ \$input.removeClass( 'has-focus' ); });
            });//Fin Videos
   /*************************** Tooltip ***************************************/
            \$('[data-toggle=\"tooltip\"]').tooltip(); 
        });//Fin de función ready
        /**
         * Funcion que determina si es el primer archivo cargado
         * Devuelve true si no hay archivos cargados, sino regresa false.
         */
        function vacio(contenido){
            var actual = document.getElementById(\"archivosCargados\").innerHTML;
            if(actual.indexOf(contenido)>=0){ 
                return true;
            }
            return false;
        }  
        /**
         * Funcion que determina si es el primer archivo cargado
         * Devuelve true si no hay archivos cargados, sino regresa false.
         */
        function vacioVideos(contenido){
            var actual = document.getElementById(\"videosCargados\").innerHTML;
            if(actual.indexOf(contenido)>=0){ 
                return true;
            }
            return false;
        }  
        /**
         * Limpiar el formulario.
         * */
        function Limpiar(){
            document.getElementById(\"videosCargados\").setAttribute(\"class\",\"alerta\");
            document.getElementById(\"videosCargados\").innerHTML= \"Sube videos sobre tus eventos para que tus admiradores sepan de que vas.\";
            document.getElementById(\"archivosCargados\").setAttribute(\"class\",\"alerta\");
            document.getElementById(\"archivosCargados\").innerHTML=\"Sube fotos sobre tu evento para que los visitantes vean de que se trata. Tambi&eacute;n debes seleccionar una foto como perfil, que identifique a tu evento, normalmente el poster del evento.\";
        }
/*******************************************************************************/
    \$(document).ready(function(){
    \$('#btnAddVideo').on('click',function(e){
        e.preventDefault();
        var indice=\$('#indice-video').val();
        var itemVideo='<div class=\"col-md-12\">';
        itemVideo+='<div class=\"form-group\"><div class=\"input-group\"><div class=\"input-group-addon\"><span class=\"button-wrap\"><button type=\"button\" class=\"button button-circle btnFavorito\" data-toggle=\"tooltip\" title=\"Marca este video como Destacado para que aparezca al inicio de tu perfil\"><i class=\"fa fa-star\"></i></button></span></div>';
        itemVideo+='<input name=\"urlVideo[]\" placeholder=\"Copia la URL de tu video de Youtube o Vimeo\" class=\"form-control urlVideo\" type=\"text\"></div></div>';
        itemVideo+='</div>';

        indice++;

        \$('#indice-video').val(indice);

        \$('#contenedorVideos').append(\$(itemVideo));

        \$(this).addClass('disabled');

    });

    //submit del adicionar Album

    \$('#btnSubmitAlbum').on('click',function(e){
        e.preventDefault();

        //Validar el form
        if(validatorAlbum.form()){
            \$(this).text(\"Adicionando album...\");

            \$('#submitLoading').show();

            var \$form=\$('#formAddAlbum');

            \$.ajax(\$form.attr('action'),{
                type:'post',
                dataType:'json',
                data:\$form.serialize()
            }).done(function(response){

                \$(this).html(\"Aceptar\");

                \$('#submitLoading').hide();

                if(response[0]){
                    //generar html

                    var album=response['album'];

                    var itemAlbum='<div class=\"row mb40 list-item-local-row\"><div class=\"col-md-12\"><div class=\"row\">';
                    if(album['imagen']!=null && album['imagen']!=\"\"){
                        var onerror=\"this.src='\"+\$('#directorioImagenesPublic').val()+\"no_image.jpg'\";
                        itemAlbum+='<div class=\"col-md-4\"><img onerror=\"'+onerror+'\" class=\"img-responsive\" src=\"'+\$('#img-album-route').val()+album['imagen']+'\"  /></div>';
                    }
                    else{
                        itemAlbum+='<div class=\"col-md-4\"><img class=\"img-responsive\" src=\"'+\$('#directorioImagenesPublic').val()+'no_image.jpg\"  /></div>';
                    }
                    itemAlbum+='<div class=\"col-md-4\"><h3><a href=\"#\">'+album['titulo']+'</a></h3><hr align=\"left\" class=\"mt15 mb10\" style=\"width:50px;\">';
                    itemAlbum+='<ul style=\"list-style: none;margin-left: -40px;\" class=\"posted-info\"><li><i style=\"margin-bottom: 10px;\" class=\"fa fa-user\"></i> '+album['autor']+'</li><li><i class=\"fa fa-calendar\"></i> '+album['anno']+'</li></ul>';
                    itemAlbum+='<p class=\"mb30\">';
                    for(var i=0;i<=album['estilos'].length;i++){
                        itemAlbum+='<a href=\"#\" class=\"btn btn-rw btn-primary tags btn-sm\">'+album['estilos'][i]+'</a>';
                    }
                    itemAlbum+='</p>';

                    if(album['enlaces']!=null && album['enlaces'].length>0){
                        itemAlbum+='<h4 class=\"mt20\">Enlaces de venta</h4><ul>';

                        for(var i=0;i<album['enlaces'].length;i++){
                            itemAlbum+='<li><i class=\"fa fa-globe\"></i> <a href=\"'+album['enlaces'][i]['url']+'\">'+album['enlaces'][i]['nombre']+'</a></li>';
                        }

                        itemAlbum+='</u>';
                    }


                    itemAlbum+='</div>';

                    itemAlbum+='<div class=\"col-md-4\">';

                    if(album['canciones']!=null && album['canciones'].length>0){
                        itemAlbum+='<h3><i class=\"fa fa-music\"></i> Canciones ('+album['canciones'].length+')</h3>';
                        itemAlbum+='<table class=\"table table-hover\"><tbody>';

                        for(var i=0;i<album['canciones'].length;i++){
                            var index=i+1;
                            itemAlbum+='<tr><td>'+index+'.</td><td>'+album['canciones'][i]+'</td></tr>';
                        }

                        itemAlbum+='</tbody></table>';
                    }

                    itemAlbum+='<div class=\"row mt40\"><div class=\"col-md-12\" style=\"text-align:right;\"><a href=\"#\" class=\"btn btn-primary\"><i class=\"fa fa-edit\"></i> Editar álbum</a>&nbsp;&nbsp;<a href=\"#\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar álbum</a></div></div>';

                    itemAlbum+='</div>';

                    itemAlbum+='</div></div></div>';

                    \$('#modalAddAlbum').modal('hide');

                    resetFormAddAlbum();

                    \$('#albumsContainer').append(\$(itemAlbum)).fadeIn();

                }
                else if(!response[0]){
                    var errores=response[1];

                    for(var i=0;i<=errores.length;i++){
                        var selector='#'+errores[i]['id'];

                        var error='<p style=\"color:red;font-weight: bold;\">'+errores[i]['error']+'</p>';

                        if(\$(selector).parent().hasClass('input-group')){
                            \$(selector).parent().parent().append(\$(error));
                        }
                        else{
                            \$(selector).parent().append(\$(error));
                        }

                    }

                }
                else{
                    alert(response[1]);
                }
            });
        }

    });

    //Action del boton de Adicionar enlace de venta

    \$('#btnAddEnlace').on('click', function (e) {
        e.preventDefault();

        var index=\$('#indexEnlaceVenta').val();
        index++;

        var itemFormGroup='<div class=\"form-group\" id=\"enlaceVenta-'+index+'\">';
        itemFormGroup+='<div class=\"input-group\"><div class=\"input-group-addon\"><i class=\"fa fa-check-circle\"></i></div><input class=\"form-control\" type=\"text\" name=\"nombresVenta[]\" placeholder=\"Nombre del sitio web\"></div>';
        itemFormGroup+='<div class=\"input-group mt10\"><div class=\"input-group-addon\"><i class=\"fa fa-globe\"></i></div><input class=\"form-control\" type=\"text\" name=\"enlacesVenta[]\" placeholder=\"URL del sitio web\"></div>';
        itemFormGroup+='</div>';

        \$('#enlacesContainer .panel-body').append(\$(itemFormGroup));

        \$('#indexEnlaceVenta').val(index);

    });

    //Action del boton de adicionar titulo de cancion

    \$('#addTituloCancion').on('click',function(e){
        e.preventDefault();

        var titulo=\$('#tituloCancion').val();

        var index=\$('#index-titulo-cancion').val();

        var tr='<tr><td>'+index+'.'+'</td><td>'+titulo+'</td></tr>';
        tr+='<input type=\"hidden\" name=\"titulosCanciones[]\" value=\"'+titulo+'\">';

        \$('#titulosContainer tbody').append(\$(tr));

        index++;

        \$('#index-titulo-cancion').val(index);

        \$('#tituloCancion').val(\"\");
    });

    //eventos del apartado de enlaces de canciones de muestra

    \$('.music-profile').on('keyup',function(){
        var type=\$(this).attr('data-type');

        \$('.music-profile').each(function(){
            if(\$(this).attr('data-type')!=type){
                \$(this).val(\"\");
            }
        });

        \$('ul#musicContainer').empty();
    });

    //btn eliminar cancion

    \$('#musicContainer').on('click','.delete-music',function(e){
        e.preventDefault();

        var nombre=\$(this).attr('data-name');
        var index=\$(this).attr('data-index');

        \$.ajax(\$('#delete-music-path'),{
            type:'post',
            dataType:'json',
            data:{
                nombre:nombre
            }
        }).done(function(response){
            \$('#musicContainer li').each(function(){
                if(\$(this).attr('data-index')==index){
                    \$(this).fadeOut();
                    \$(this).remove();
                }
                else if(\$(this).attr('data-index')>index){
                    var aux=\$(this).attr('data-index');

                    aux--;

                    \$(this).attr('data-index',aux);
                    \$(this).children('a').attr('data-index',aux);

                }

            });

            //eliminar el input con el nombre de la cancion

            \$('.itemMusicName').each(function(){
                if(\$(this).attr('data-index')==index){
                    \$(this).remove();
                }
                else if(\$(this).attr('data-index')>index){
                    var aux=\$(this).attr('data-index');

                    aux--;

                    \$(this).attr('data-index',aux);
                }
            });

            var totalIndex=\$('#indexMusic');

            if(totalIndex>1){
                totalIndex--;
                \$('#indexMusic').val(totalIndex);
            }

            //update the index in the list of items

            \$('#musicContainer .itemNumber').text(function(index){
                var newIndex=index+1;
                return newIndex;

            });
        });
    });


    //handler para obtener las ciudades de la provincia seleccionada

    \$('#provincia').on('change',function(){
        var idProvincia=\$(this).val();

        wait('#step-2-form');

        \$.ajax(\$('#get-ciudades-route').val(),{
            'type':'post',
            'dataType':'json',
            'data':{
                'idProvincia':idProvincia
            }
        }).done(function (response) {
            if(!response[0]){
                alert(response[1]);
            }
            else{

                \$('#ciudad').empty();

                \$('#ciudad').append(\$('<option value=\"\">Seleccione una provincia para ver sus ciudades</option>'));

                var ciudades=response[1];

                for(var i=0;i<ciudades.length;i++){
                    var item='<option value=\"'+ciudades[i][0]+'\">'+ciudades[i][1]+'</option>';

                    \$('#ciudad').append(\$(item));
                }

                \$('.selectpicker').selectpicker('refresh');
            }
            endWait('#step-2-form');
        });
    });

    // Handler para el boton de marcar video destacadoo

    \$('#contenedorVideos').on('click','.btnFavorito',function(){
        //desmarcar todos los botones
        \$('.btnFavorito').each(function(){
            if(\$(this).hasClass('button-raised')){
                \$(this).removeClass('button-raised');
            }

            if(\$(this).hasClass('button-primary')){
                \$(this).removeClass('button-primary');
            }
        });


        //obtener url

        var urlVideo= \$(this).parent().parent().siblings('.urlVideo').val();

        if(urlVideo!=\"\"){
            \$('#videoDestacado').val(urlVideo);
        }

        \$(this).addClass('button-raised button-primary');
    });

    //Handler para la imagen de portada

    \$('.imagenPortada').on('click',function(e){
        e.preventDefault();
        var img=\$(this).attr('data-img');
            \$('#imgPortadaContainer').empty();
            var ruta=\"bundles/app/img/backgrounds/bg1.jpg\"; 
            var newImg='<img class=\"img-responsive\" src=\"'+\$('#local-img-route').val()+img+'\">';
            var input='<input type=\"hidden\" name=\"imgPortada\" id=\"imgPortada\" value=\"'+img+'\"><input type=\"hidden\" name=\"isLocal\" id=\"isLocal\" value=\"1\">';
            \$('#imgPortadaContainer').append(newImg);
            \$('#imgPortadaContainer').append(input);
            \$('#btnShowModalUploadPortada').empty();
            \$('#btnShowModalUploadPortada').append('Cambiar imagen');
        \$('#modalAddImagenPortada').modal('hide');
    });

});

function resetFormAddAlbum(){
    \$('#formAddAlbum .form-control').each(function(){
        if(\$(this).attr('id')!='autorAlbum'){
            \$(this).val(\"\");
        }
    });
    \$('#formAddAlbum #titulosContainer tbody').empty();
    var noImage=\$('#directorioImagenesPublic').val()+'no_image.jpg';
    \$('#formAddAlbum #imgAlbumContainer').attr('src',noImage);
    \$('#index-titulo-cancion').val(1);
    \$('#fechaAlbum').select2();
    \$('#idEstilosAlbum').select2();
}
    </script>
";
    }

    public function getTemplateName()
    {
        return "artistas/paso3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  902 => 768,  898 => 767,  893 => 765,  888 => 763,  884 => 762,  879 => 760,  873 => 758,  870 => 757,  828 => 719,  635 => 529,  608 => 505,  600 => 500,  592 => 495,  584 => 490,  576 => 485,  568 => 480,  527 => 442,  523 => 441,  519 => 440,  515 => 439,  509 => 437,  506 => 436,  490 => 423,  259 => 195,  252 => 191,  209 => 150,  206 => 149,  201 => 142,  198 => 141,  194 => 137,  192 => 136,  189 => 135,  61 => 11,  56 => 9,  52 => 8,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artistas/paso3.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/artistas/paso3.html.twig");
    }
}
