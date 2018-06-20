<?php

/* salas/perfil3.html.twig */
class __TwigTemplate_d5128425b3f1f03c0be4b971f7adcaebb79d9742a17daf6951b7402d2c52a7f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/perfil3.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'steps' => array($this, 'block_steps'),
            'contenido' => array($this, 'block_contenido'),
            'customScripts' => array($this, 'block_customScripts'),
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
        echo "Busco Concierto | Perfil de Salas ";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
    <style>
        .btn {
            border-radius:2px;
        }        
        .botonEvento {
            padding: 10px 19px;
            font-size: 14px;
            border-radius:2px;
        }       
        .botonInteres {
            display:block!important;
            font-size: 12px;
            border-radius:2px;
            margin-left: 5px;
            margin-right: 5px;
            text-align: center;
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
        .boton{
            height: 42px;
        }
        .botonSeguir{
            margin-top: 10px;
        }
        .texto{
            margin-bottom: 5px;
        }
        .errores{
            visibility: hidden;
        }
        .overflow{
            overflow: hidden;
        }
        .desde{
            text-align: left;
            font-weight: bold;
        }
        .hasta{
            text-align: right;
            font-weight: bold;
        }
        .slidecontainer {
            width: 100%;
        }
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 10px;
            border-radius: 5px;
            background: #205081; 
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }
        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #000000; /* #4CAF50; Verde */
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #000000; /* #4CAF50; */
            cursor: pointer;
        }
        .sociales{
            width: auto;
            position: absolute;
            top: 100px;
            right: 0px;
            background-color: #ffffff; /*#B0BED9; Azul gris*/
            color: #ffffff;
        }      
        .descriptionTitulo{
            font-size: 25px;
            font-family: Beauty, sans-serif;
            font-weight: bold; 
            text-align: justify;
        }
        .description{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            text-align: justify;
        }
        .ciudad{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-style: oblique;
            text-align: justify;
        }
        .precio{
            margin-top: 10px;
            font-family: Helvetica, Open Sans;
            font-size: 28px;
            text-align: center;
        }
        .publicidad{
            margin-top: 100px;
            height: 390px;
        }        
        .aforo{
            margin-top: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 0px;
            padding-right: 0px;
            font-family: Helvetica, Open Sans;
            font-style: italic;
            text-align: center;
        }
        .estrellas{
            margin-top: 15px;
        }
        .seguidores{
            margin-top: 12px;
            font-family: Beuty, Helvetica, Open Sans;
            font-style: italic;
            font-weight: bold;
            text-align: center;
        }
        .compartir{
            margin-top: 20px;
            font-size: 32px;
        }
        .textoDescripcion{
            padding-left: 10px;
            padding-right: 10px;
            text-align: justify;
            border-left: #a7590b;
            border-left-style: solid;
            border-left-width: 4px;
            color: #ffffff;
            background-color:  #FF8000; 
            font-family: Helvetica, Open Sans;
        }
        .textoCaracteristicas{
            margin-left: 0px;
            margin-right: 0px;
            border-left: #a7590b;
            border-left-style: solid;
            border-left-width: 4px;
            color: #ffffff;
            background-color:  #FF8000; 
            font-family: Helvetica, Open Sans;
        }
        .textoValoracion{
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-right: 10px;
            text-align: justify;
            border-left: #a7590b;
            border-left-style: solid;
            border-left-width: 4px;
            color: #ffffff;
            background-color:  #FF8000; 
            font-family: Helvetica, Open Sans;
        }
        .textoDireccion{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .textoComo{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 16px;
            margin-bottom: 12px;
        }
        .textoTrans{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 16px;
            font-style: italic;
            margin-bottom: 10px;
        }
        .calendarioFlotante{
            position:fixed; 
            background-color: #dc7003;
        }
        .fixed {
            position: fixed;
            top: 70px;
            width: 370px;
            z-index: 100;
        }
        .affix {
            top: 0px;
            width: 100%;
            z-index: 9999 !important;
        }
        .favorito{
            margin-top: 10px;
            font-size: 20px;
        }
        .tituloInteres{
            color: #dc0010;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
        }
    </style>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Open+Sans\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Days+One\" />
";
    }

    // line 229
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 230
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "salas/perfil3.html.twig", 230)->display(array_merge($context, array("bgImage" => (        // line 231
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg2.jpg"), "subheaderTitle" => "Teatro Español")));
        // line 234
        echo "    <div class=\"row background-white sombraMenu\" data-spy=\"affix\" data-offset-top=\"269\">
        <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
            
        </div>
        <div class=\"col-xs-6 col-sm-7 col-md-7 col-lg-6\"><!-- Menu -->
            <div class=\"navbar-header\">
                <!-- Mobile Navigation -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"glyphicon glyphicon-list\"></span>
                </button>
            </div><!-- /navbar header -->
            <nav class=\"navbar-collapse collapse navHeaderCollapse\" role=\"navigation\" style=\"padding-right: 0px\">
                <ul class=\"nav navbar-nav navbar-left\">
                    <li class=\"menu\">
                        <a href=\"#Eventos\">Eventos</a>
                    </li>
                    <li class=\"menu\">
                        <a href=\"#Descripcion\">Informaci&oacute;n</a>
                    </li>
                    <li class=\"menu\">
                        <a href=\"#Locacion\">Locaci&oacute;n</a>
                    </li>
                    <li class=\"menu\">
                        <a href=\"#Valoraciones\">Valoraciones</a>
                    </li>
                    <li class=\"menu\">
                        <a href=\"#Multimedia\">Multimedia</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class=\"col-xs-3 col-sm-2 col-md-3 col-lg-3\">
            <div class=\"seguidores\">3842 Seguidores</div>
        </div>
        <div class=\"col-xs-2 col-sm-2 col-md-1 col-lg-2\"><!-- Favorito -->
            <div class=\"favorito\">
                <a href=\"#\">
                    <span class=\"fa fa-heart\"></span>
                </a>
            </div>
        </div>
    </div>
";
    }

    // line 278
    public function block_steps($context, array $blocks = array())
    {
        // line 279
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "salas/perfil3.html.twig", 279)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 286
    public function block_contenido($context, array $blocks = array())
    {
        // line 287
        echo "    <div class=\"container-fluid\"><!-- Contenedor -->
        <div class=\"row panelSombra mt40 mb40\" id=\"Eventos\"><!-- Seccion de eventos --> 
            <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                <h4 class=\"mt10\">
                    <span class=\"fa fa-bullhorn\" style=\"margin-top:10px;\"></span>
                    Eventos
                </h4>
            </div>
            <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\"><!-- Contenido de eventos -->
                <div class=\"row bordeEventos\"><!-- Evento 1 -->
                    <div class=\"col-xs-3 col-sm-2 col-md-3 col-lg-3\"><!-- Imagen -->
                        <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala1.png"), "html", null, true);
        echo "\" height=\"auto\"  alt=\"Foto\" class=\"img img-responsive image\">
                    </div><!-- Fin Imagen -->
                    <div class=\"hidden-xs col-sm-3 col-md-2 col-lg-2\"><!-- Dia -->
                        <div class=\"diaCalendario text-center\">
                            <div class=\"row\">ABR</div>
                            <div class=\"row dia\">19</div>
                            <div class=\"row\">2018</div>
                        </div>
                    </div>  <!-- Fin Dia -->
                    <div class=\"col-xs-7 col-sm-5 col-md-5 col-lg-5\"><!-- Descripcion -->
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
                    </div>   <!-- Fin de sección descripción -->
                    <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- Boton -->
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
                <div class=\"row bordeEventos\"><!-- Evento 2 -->
                    <div class=\"col-xs-3 col-sm-2 col-md-3 col-lg-3\"><!-- Imagen -->
                        <img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala1.png"), "html", null, true);
        echo "\" height=\"auto\"  alt=\"Foto\" class=\"img img-responsive image\">
                    </div><!-- Fin Imagen -->
                    <div class=\"hidden-xs col-sm-3 col-md-2 col-lg-2\"><!-- Dia -->
                        <div class=\"diaCalendario text-center\">
                            <div class=\"row\">ABR</div>
                            <div class=\"row dia\">20</div>
                            <div class=\"row\">2018</div>
                        </div>
                    </div>  <!-- Fin Dia -->
                    <div class=\"col-xs-7 col-sm-5 col-md-5 col-lg-5\"><!-- Descripcion -->
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
                    </div>   <!-- Fin de sección descripción -->
                    <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- Boton -->
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
                                <h2>40 €</h2>
                            </div>
                        </div>
                    </div> <!-- Fin boton -->
                </div><!-- Fin Evento 2 -->
                <div class=\"row bordeEventos\"><!-- Evento 3 -->
                    <div class=\"col-xs-3 col-sm-2 col-md-3 col-lg-3\"><!-- Imagen -->
                        <img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala1.png"), "html", null, true);
        echo "\" height=\"auto\"  alt=\"Foto\" class=\"img img-responsive image\">
                    </div><!-- Fin Imagen -->
                    <div class=\"hidden-xs col-sm-3 col-md-2 col-lg-2\"><!-- Dia -->
                        <div class=\"diaCalendario text-center\">
                            <div class=\"row\">ABR</div>
                            <div class=\"row dia\">21</div>
                            <div class=\"row\">2018</div>
                        </div>
                    </div>  <!-- Fin Dia -->
                    <div class=\"col-xs-7 col-sm-5 col-md-5 col-lg-5\"><!-- Descripcion -->
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
                    </div>   <!-- Fin de sección descripción -->
                    <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- Boton -->
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
                                <h2>45 €</h2>
                            </div>
                        </div>
                    </div> <!-- Fin boton -->
                </div><!-- Fin Evento 3 -->
                <div class=\"row mt5\">
                    <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"></div>
                    <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                        <a href=\"#\" class=\"btn btn-primary btn-block botonMas\">
                            <span class=\"glyphicon glyphicon-plus\"></span>
                            Ver M&aacute;s
                        </a>
                    </div>
                    <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"></div>
                </div>
            </div><!-- Fin Contenido de eventos -->
        </div><!-- Fin Seccion de eventos -->
        <div class=\"row mb40\"><!-- Informacion -->
            <div class=\"col-xs-12 col-sm-7 pb20\"><!-- Columna de Izquierda -->
                <div class=\"row panelSombra\" id=\"Video\">
                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/K74FHYLvF0s?rel=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                </div>
                <div class=\"row panelSombra\" id=\"Descripcion\">
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                        <h4 class=\"mt10\">
                            <span class=\"glyphicon glyphicon-align-justify\"></span>
                            Descripci&oacute;n
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10\">
                        <p class=\"textoDescripcion\">
                        Sala de Teatro Cuarta Pared. Sala de Teatro Cuarta Pared.
                        Sala de Teatro Cuarta Pared. Sala de Teatro Cuarta Pared.
                        Sala de Teatro Cuarta Pared. Sala de Teatro Cuarta Pared.
                        Sala de Teatro Cuarta Pared. Sala de Teatro Cuarta Pared.
                        Sala de Teatro Cuarta Pared. Sala de Teatro Cuarta Pared.
                        Sala de Teatro Cuarta Pared. Sala de Teatro Cuarta Pared.
                        Sala de Teatro Cuarta Pared. Sala de Teatro Cuarta Pared.
                        </p>
                    </div>
                </div>
                <div class=\"row panelSombra\" id=\"Datos\">
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                        <h4 class=\"mt10\">
                            <span class=\"glyphicon glyphicon-wrench\"></span>
                            Datos t&eacute;cnicos
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10\">
                        <p class=\"textoDescripcion\">
                        Contenido del panel.Contenido del panel.Contenido del panel.
                        Contenido del panel.Contenido del panel.Contenido del panel.
                        Contenido del panel.Contenido del panel.Contenido del panel.
                        Contenido del panel.Contenido del panel.Contenido del panel.
                        Contenido del panel.Contenido del panel.Contenido del panel.
                        Contenido del panel.Contenido del panel.Contenido del panel.
                        </p>
                    </div>
                </div>
                <div class=\"row panelSombra\" id=\"Caracteristicas\">
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                        <h4 class=\"mt10\">
                            <span class=\"glyphicon glyphicon-list-alt\"></span>
                            Caracter&iacute;sticas
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10\">
                        <div class=\"row textoCaracteristicas\">
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Paga cache
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Paga por taquilla
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Act&uacute;as gratis
                            </div>   
                        </div>
                        <!-- -->
                        <div class=\"row textoCaracteristicas\">
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Invita comida
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Invita bebida
                            </div>   
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Dispone de camerino
                            </div>   
                        </div>
                        <!-- -->
                        <div class=\"row textoCaracteristicas\">
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Cobra alquiler de sala
                            </div>   
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Solo permite formato ac&uacute;stico
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Ofrece alojamiento
                            </div>
                        </div>
                        <!-- -->
                        <div class=\"row textoCaracteristicas\">
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Ofrece t&eacute;cnico de sonido
                            </div>   
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Ofrece equipo de voces
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Ofrece microfon&iacute;a
                            </div>
                        </div>
                        <!-- -->
                        <div class=\"row textoCaracteristicas\">
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Ofrece ampli guitarra
                            </div>   
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Ofrece ampli bajo
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                Ofrece piano
                            </div>
                        </div>
                        <!-- -->
                        <div class=\"row textoCaracteristicas\">
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Ofrece bateria
                            </div>   
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Luces
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                                M&aacute;quina de humo
                            </div>
                        </div>
                        <!-- -->
                        <div class=\"row textoCaracteristicas\">
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Escenario interior
                            </div>   
                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                <span class=\"glyphicon glyphicon-ok\"></span>
                                Escenario al aire libre
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row panelSombra\" id=\"Locacion\">
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                        <h4 class=\"mt10\">
                            <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                            Estamos en 
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoDireccion\">
                                Calle Príncipe, 25, 28012 Madrid, España.
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"hidden-xs hidden-sm col-md-12 col-lg-12\">                                  
<!--***************************Google map ***********************************-->
                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17184.041582175236!2d-3.7115710696198034!3d40.4146527306085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x109f2a7e6cc425a3!2sTeatro+Espa%C3%B1ol!5e0!3m2!1ses!2sve!4v1521853725191\" 
                                    width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoComo\">
                                ¿Com&oacute; llegar?
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoTrans\">
                                Linea de bus 34, Embajadores metro 3.
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row panelSombra\" id=\"Valoraciones\"><!-- Valoraciones -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                        <h4 class=\"mt10\">
                            Valoraciones
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-half-empty\"></i>
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\">   
                        <div class=\"row\"><!-- Valoración 1 -->
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Imagen -->
                                <img src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img img-responsive\">
                            </div>   <!-- Fin Imagen -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                <div class=\"row\"><!-- Estrellas -->
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-half-empty\"></i>
                                </div>
                                <div class=\"row\"><!-- Comentario -->
                                    <p class=\"textoValoracion\">
                                    Teatro, música y exposiciones en un 
                                    antiguo corral de comedias del s. XVI 
                                    decorado en tonos rojos y dorados.</p>
                                </div>
                            </div>
                            <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
                            </div>
                        </div>
                        <div class=\"row\"><!-- Valoración 2 -->
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Imagen -->
                                <img src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img img-responsive\">
                            </div>   <!-- Fin Imagen -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                <div class=\"row\"><!-- Estrellas -->
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-half-empty\"></i>
                                </div>
                                <div class=\"row\"><!-- Comentario -->
                                    <p class=\"textoValoracion\">
                                    Una gran programación, variada, fresca,
                                    y versátil.</p>
                                </div>
                            </div>
                            <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
                            </div>
                        </div>
                        <div class=\"row\"><!-- Valoración 3 -->
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Imagen -->
                                <img src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img img-responsive\">
                            </div>   <!-- Fin Imagen -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                <div class=\"row\"><!-- Estrellas -->
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-half-empty\"></i>
                                    <i class=\"fa fa-star-o\"></i>
                                </div>
                                <div class=\"row\"><!-- Comentario -->
                                    <p class=\"textoValoracion\">
                                    Las entradas más baratas aunque 
                                    lejanas al escenario tienen buena visibilidad.</p>
                                </div>
                            </div>
                            <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
                            </div>
                        </div>
                        <div class=\"row\"><!-- Valoración 4 -->
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Imagen -->
                                <img src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img img-responsive\">
                            </div>   <!-- Fin Imagen -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                <div class=\"row\"><!-- Estrellas -->
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-half-empty\"></i>
                                </div>
                                <div class=\"row\"><!-- Comentario -->
                                    <p class=\"textoValoracion\">
                                    El teatro es muy bonito y las butacas 
                                    aunque con espacio reducido son cómodas.</p>
                                </div>
                            </div>
                            <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Valoraciones -->
                <div class=\"row panelSombra\" id=\"Multimedia\"> <!-- Multimedia -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                        <h4 class=\"\">
                            <span class=\"fa fa-play-circle\" style=\"margin-top:10px;\"></span>
                            Multimedia
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white\">
                        <div class=\"row mb10\"><!-- Videos -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"row\"><!-- Video#1 -->
                                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/sSX9YlNuUpc?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                </div>
                                <div class=\"row\"><!-- Video#2 -->
                                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/KOl8LjKLDLs?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                </div>
                                <div class=\"row\"><!-- Video#3 -->
                                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/WfPu9Jrcpuk?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                </div>
                                <div class=\"row\"><!-- Video#4 -->
                                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/g_s17HMFaug?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"row\"><!-- Video#5 -->
                                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/w9IT7Hwh8Zo?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                </div>
                                <div class=\"row\"><!-- Video#6 -->
                                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/EccF9ISUgEQ?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                </div>
                                <div class=\"row\"><!-- Video#7 -->
                                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/6dVFy4d61gU?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                </div>
                                <div class=\"row\"><!-- Video#8 -->
                                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/sSX9YlNuUpc?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                </div>
                            </div> 
                        </div> <!-- Fin Videos -->
                    </div> 
                </div> <!-- Fin Multimedia -->
                <div class=\"row panelSombra ml5\"><!-- Banner publicitario -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white\">
                        <div class=\"row text-center\"><!-- Banner -->
                            <h4 class=\"publicidad\">Espacio de Publicidad disponible</h4>
                        </div>
                    </div>
                </div><!-- Fin Banner publicitario -->
            </div>
            <div class=\"hidden-xs col-sm-5 pb20\"><!-- Columna derecha -->
                <div class=\"\" id=\"calendarioFlotante\">                
                    <div class=\"row ml5 background-white\">
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-8\">
                            <a href=\"";
        // line 785
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Proponer concierto
                            </a> 
                        </div>
                        <div class=\"col-md-2\"></div>
                    </div>
                    <!-- Calendario -->
                    ";
        // line 792
        $this->loadTemplate("calendario/calendario3.html.twig", "salas/perfil3.html.twig", 792)->display($context);
        echo "  
                </div>
            </div><!-- Fin Columna derecha -->
        </div><!-- Fin Información -->
        <!-- Seccion de interes -->
        ";
        // line 797
        $this->loadTemplate("eventos/deInteres2.html.twig", "salas/perfil3.html.twig", 797)->display($context);
        // line 798
        echo "        <!-- Fin Seccion de interes -->
    </div><!-- Fin Contenedor -->
";
    }

    // line 801
    public function block_customScripts($context, array $blocks = array())
    {
        // line 802
        echo "    ";
        $this->displayParentBlock("customScripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 809
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 811
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <script>
    /** Desplazamiento vertical **/
        \$(function (){
            \$('a[href*=#]').click(function() {
                if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') 
                    && location.hostname == this.hostname) {
                    var \$target = \$(this.hash);
                    \$target = \$target.length && \$target || \$('[name=' + this.hash.slice(1) +']');
                    if (\$target.length) {
                         var targetOffset = \$target.offset().top;
                         \$('html,body').animate({scrollTop: targetOffset}, 1000);
                         return false;
                    }
                }
           });
        });
/***************************************************************************/        
        \$(function (){
            /*El calendario*/
            \$(\"#calendar\").datepicker({
                language: \"es\",
            });
        });
        \$(document).scroll(function() {
            /*console.log(\"Valor de scroll: \"+\$(document).scrollTop());*/
            if(\$(document).scrollTop() >= 1000 && \$(document).scrollTop()<= 4150){
                document.getElementById(\"calendarioFlotante\").setAttribute(\"class\",\"fixed\");
            }
            else{
                document.getElementById(\"calendarioFlotante\").setAttribute(\"class\",\"\");
            }
        });
// image zoom
\$(document).ready(function() {
    \$('.image-zoom-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        fixedContentPos: false
    });
});

// gallery zoom
\$('.popup-gallery').each(function() {
     \$(this).magnificPopup({ 
        delegate: '.gallery-zoom',
        type:'image',
        gallery: {
            enabled: true
        }
    });
});

// video zoom
\$(document).ready(function() {
    \$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});

//responsive video
\$(document).ready(function() {
    \$(document.body).fitVids();
});

// scroll to top action
\$('.scroll-top').on('click', function(event) {
    event.preventDefault();
    \$('html, body').animate({
        scrollTop: 0
    }, 'slow');
});

// run mixitup portfolio
\$(function() {
    \$('#myPortfolio').mixitup({
        targetSelector: '.item',
        transitionSpeed: 600
    });
});

// pagination fix
\$(function() {
    \$(\".dropdown-menu > li > a.trigger\").on(\"click\", function(e) {
        var current = \$(this).next();
        current.toggle();
        e.stopPropagation();
    });
});

//side-navbar
jQuery(\"li.list-toggle\").bind(\"click\", function() {
    jQuery(this).toggleClass(\"active\");
});

//tooltips and popovers
\$(function() {
    \$(\"[data-toggle='tooltip']\").tooltip();
});
\$(function() {
    \$(\"[data-toggle='popover']\").popover();
});

//activate skrollr.js
skrollr.init({
    forceHeight: false,
    smoothScrolling: true,
    smoothScrollingDuration: 1500,
        mobileCheck: function() {
        //hack - forces mobile version to be off
        return false;
    }
});

//carousel subnav slider
\$(document).ready(function() {
    var clickEvent = false;
    \$('#carouselSubnav').on('click', '.nav a', function() {
        clickEvent = true;
        \$('#carouselSubnav .nav li').removeClass('active');
        \$(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if (!clickEvent) {
            var count = \$('#carouselSubnav .nav').children().length - 1;
            var current = \$('#carouselSubnav .nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if (count == id) {
                \$('#carouselSubnav .nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});

//owl carousel thumbnail caption slider
\$('#owl-carousel-product').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: true,
    navText: [\"<span><</span>\", \"<span>></span>\"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

//owl carousel thumbnail caption slider
\$('#owl-carousel-thumb').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    navContainer: '#customNav',
    navText: [\"<span><</span>\", \"<span>></span>\"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})

//carousel animation fix
function animateElement(obj, anim_) {
    obj.addClass(anim_ + ' animated').one(
        'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
            \$(this).removeClass();
        });
}
\$('#carouselHome, #carouselSubnav').on('slide.bs.carousel', function(e) {
    var current = \$('.item').eq(parseInt(\$(e.relatedTarget).index()));
    \$('[data-animation]').removeClass();
    \$('[data-animation]', current).each(function() {
        var \$this = \$(this);
        var anim_ = \$this.data('animation');
        animateElement(\$this, anim_);
    });
});

\$('.navbar li a').click(function() {
    \$('.navbar li a').removeClass('active');
    \$(this).addClass('active');
});

//progress bar
\$(document).ready(function(){
    var percent = 0, bar = \$('.transition-timer-carousel-progress-bar'), crsl = \$('#carouselHome');
    function progressBarCarousel() {
      bar.css({width:percent+'%'});
     percent = percent +0.5;
      if (percent>100) {
          percent=0;
          crsl.carousel('next');
      }      
    }
    crsl.carousel({
        interval: false,
        pause: true
    }).on('slide.bs.carousel', function () {percent=0;});var barInterval = setInterval(progressBarCarousel, 30);
    crsl.hover(
        function(){
            clearInterval(barInterval);
        },
        function(){
            barInterval = setInterval(progressBarCarousel, 30);
        })
});
       
    </script>
";
    }

    public function getTemplateName()
    {
        return "salas/perfil3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  911 => 811,  906 => 809,  902 => 808,  897 => 806,  891 => 803,  886 => 802,  883 => 801,  877 => 798,  875 => 797,  867 => 792,  857 => 785,  780 => 711,  756 => 690,  732 => 669,  707 => 647,  449 => 392,  399 => 345,  349 => 298,  336 => 287,  333 => 286,  328 => 279,  325 => 278,  278 => 234,  276 => 231,  274 => 230,  271 => 229,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/perfil3.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/perfil3.html.twig");
    }
}
