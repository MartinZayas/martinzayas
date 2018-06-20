<?php

/* usuarios/eventos.html.twig */
class __TwigTemplate_e29f4492ee92a76b86cb8d2064440781dae06de6daefb17192d10c069751819f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/eventos.html.twig", 2);
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
/***************************** Menu *******************************************/        
        .menuEvento1{
            background-color: #ffffff;
            color: #272727;
        }
        .menuEvento1:hover{
            background-color: #EBEBEB;
        }
        li.menuEvento1 a{
            color: #272727;
        }
        .menuEventoContraido{
            color: #272727;
        }
        .navbar-toggle, secundario {
            color: #272727 !important;
        }
        @media (min-width: 640px){
            .flotante{
                position: fixed;
                top: 90px;
                right: 114px;
                width: 735px;
                z-index: 100;
                background-color: #FFFFFF;
            }
        }
        @media (min-width: 768px){
            .flotante{
                position: fixed;
                top: 90px;
                right: 83px;
                width: 542.5px;
                z-index: 100;
                background-color: #FFFFFF;
            }
        }
        @media (min-width: 980px) {
            .flotante{
                position: fixed;
                top: 90px;
                right: 16px;
                width: 707px;
                z-index: 100;
                background-color: #FFFFFF;
            }
        }
        @media (min-width: 1024px) {
            .flotante{
                position: fixed;
                top: 90px;
                right: 19px;
                width: 708px;
                z-index: 100;
                background-color: #ffffff;
            }
        }
        @media (min-width: 1200px) {
            .flotante{
                position: fixed;
                top: 90px;
                right: 137px;
                width: 857px;
                z-index: 100;
                background-color: #ffffff;
            }
        }
        @media (min-width: 2500px) {
            .flotante{
                position: fixed;
                top: 90px;
                right: 700px;
                width: 857px;
                z-index: 100;
                background-color: #ffffff;
            }
        }
/*****************************************************************************/        
        .encabezadoEvento{
            border-bottom: 1px solid #000000 !important;
        }
        .contenidoEvento{
            border-top: 1px solid #000000;
            border-bottom: 1px solid #000000;
        }
        .tituloSolicitudes{
            padding-left: 10px;
            color: #000000;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica, Arial;
            font-size: 20px;
            font-style: normal;
            font-weight: bold;
        }
        .panelEvento{
            border-top: 1px solid #000000;
        }
        .estadoEvento{
            text-align: right;
            margin-right: 20px;
            padding-right: 5px;
            padding-left: 5px;
            color: #f50;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica, Arial;
            font-size: 14px;
            font-style: normal;
            font-weight: bold;
        }
        .estadoAprobado{
            text-align: right;
            margin-right: 20px;
            padding-right: 5px;
            padding-left: 5px;
            color: #008d4c;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica, Arial;
            font-size: 14px;
            font-style: normal;
            font-weight: bold;
        }
        .estadoFinalizado{
            text-align: right;
            margin-right: 20px;
            padding-right: 5px;
            padding-left: 5px;
            color: #000000;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica, Arial;
            font-size: 14px;
            font-style: normal;
            font-weight: bold;
        }
        .textoEntradas{
            color: #000000;
            font-size: 16px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
        }
        .textoFecha{
            color: #000000;
            font-size: 14px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
        }
        .textoDestacar{
            color: red;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica, Arial;
            font-size: 14px;
            font-style: normal;
        }
/**********************Botones*************************************************/
        @media (min-width: 640px) {
            .botonEstadisticas{
                position: relative;
                left: 0px;
            }
            .botonDetalles{
                position: relative;
                left: 0px;
            }
        }
        @media (min-width: 768px) {
            .botonEstadisticas{
                position: relative;
                left: 0px;
            }
            .botonDetalles{
                position: relative;
                left: 0px;
            }
        }
        @media (min-width: 980px) {
            .botonEstadisticas{
                position: absolute;
                left: -80px;
            }
            .botonDetalles{
                position: absolute;
                left: -30px;
            }
        }
        @media (min-width: 1024px) {
            .botonEstadisticas{
                position: absolute;
                left: -80px;
            }
            .botonDetalles{
                position: absolute;
                left: -30px;
            }
        }
        @media (min-width: 1200px){
            .botonEstadisticas{
                position: absolute;
                left: -80px;
            }
            .botonDetalles{
                position: absolute;
                left: -30px;
            }
        }
    </style>
";
    }

    // line 205
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"row ml5\" id=\"buscador\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\"><!-- Titulo y buscador -->
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <div class=\"tituloSesion\">Eventos</div>
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

    // line 228
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 229
        echo "    <div class=\"row mt5 ml5 background-white panelEntradasTitulos\" id=\"titulos\"><!-- Fila 1-->
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 sombraMenu\"><!-- Menu -->
            <div class=\"navbar-header\"><!-- Mobile Navigation -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
                    <span class=\"sr-only\">Eventos</span>
                    <span class=\"glyphicon glyphicon-list\"></span>
                </button>
            </div><!-- /navbar header -->
            <nav class=\"navbar-collapse collapse navHeaderCollapse\" role=\"navigation\" style=\"padding-right: 0px\" id=\"menuEventos\">
                <ul class=\"nav navbar-nav navbar-center\">
                    <li class=\"menuEvento1\">
                        <a href=\"#Solicitudes\">Solicitudes</a>
                    </li>
                    <li class=\"menuEvento1\">
                        <a href=\"#Tramite\">En Tr&aacute;mite</a>
                    </li>
                    <li class=\"menuEvento1\">
                        <a href=\"#Aprobados\">Aprobados</a>
                    </li>
                    <li class=\"menuEvento1\">
                        <a href=\"#Confirmados\">Confirmados</a>
                    </li>
                    <li class=\"menuEvento1\">
                        <a href=\"#Finalizados\">Finalizados</a>
                    </li>
                </ul>
            </nav>       
        </div><!-- Fin Menu -->
    </div><!-- Fin de fila 1 -->
    <div class=\"row mt5 ml5\" id=\"Solicitudes\"><!-- Fila 2-->
        <ul class=\"list-group background-white\">
            <li class=\"list-group-item encabezadoEvento\">
                <div class=\"tituloSolicitudes\">
                    Solicitudes
                </div>
            </li>
            <li class=\"list-group-item\">
                <div class=\"row\">
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                        <img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
                    </div>
                    <div class=\"col-xs-5 col-sm-5 col-md-6 col-lg-6\">
                        <div class=\"row\"><!-- Fila Nombre-->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                                Katy Perry en Madrid
                            </div>
                        </div><!-- Fin fila Nombre-->
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                                M&iacute;nimo 1000 entradas a 100 €
                            </div>
                        </div><!-- Fin fila entradas y precio -->
                        <div class=\"row\"><!-- Fila Nombre sala -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                                <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                Sala de conciertos
                            </div>
                        </div><!-- Fin fila Nombre sala -->
                        <div class=\"row\"><!-- Fecha y hora -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                                5 de Mayo del 2018. 22:00h
                            </div>
                        </div><!-- Fin fila fecha -->
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
                        <div class=\"row\"><!-- Estado -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <p class=\"estadoEvento\">Pendiente</p>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Vacio -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <br>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Boton -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <a href=\"#\" 
                                    class=\"btn btn-custom-orange \" style=\"margin-top:7px;\">
                                     Revisar propuesta
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class=\"list-group-item\">
                <div class=\"row\">
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                        <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
                    </div>
                    <div class=\"col-xs-5 col-sm-5 col-md-6 col-lg-6\">
                        <div class=\"row\"><!-- Fila Nombre-->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                                Katy Perry en Madrid
                            </div>
                        </div><!-- Fin fila Nombre-->
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                                M&iacute;nimo 1000 entradas a 100 €
                            </div>
                        </div><!-- Fin fila entradas y precio -->
                        <div class=\"row\"><!-- Fila Nombre sala -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                                <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                Sala de conciertos
                            </div>
                        </div><!-- Fin fila Nombre sala -->
                        <div class=\"row\"><!-- Fecha y hora -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                                7 de Mayo del 2018. 22:00h
                            </div>
                        </div><!-- Fin fila fecha -->
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
                        <div class=\"row\"><!-- Estado -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <p class=\"estadoEvento\">Pendiente</p>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Vacio -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <br>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Boton -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <a href=\"#\" 
                                    class=\"btn btn-custom-orange \" style=\"margin-top:7px;\">
                                     Revisar propuesta
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"row mt5 ml5\" id=\"Tramite\"><!-- Fila 3-->
        <ul class=\"list-group background-white\">
            <li class=\"list-group-item encabezadoEvento\">
                <div class=\"tituloSolicitudes\">
                    En Tr&aacute;mite
                </div>
            </li>
            <li class=\"list-group-item\">
                <div class=\"row\">
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                        <img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
                    </div>
                    <div class=\"col-xs-5 col-sm-5 col-md-6 col-lg-6\">
                        <div class=\"row\"><!-- Fila Nombre-->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                                Katy Perry en Madrid
                            </div>
                        </div><!-- Fin fila Nombre-->
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                                M&iacute;nimo 1000 entradas a 100 €
                            </div>
                        </div><!-- Fin fila entradas y precio -->
                        <div class=\"row\"><!-- Fila Nombre sala -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                                <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                Sala de conciertos
                            </div>
                        </div><!-- Fin fila Nombre sala -->
                        <div class=\"row\"><!-- Fecha y hora -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                                5 de Mayo del 2018. 22:00h
                            </div>
                        </div><!-- Fin fila fecha -->
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
                        <div class=\"row\"><!-- Estado -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <p class=\"estadoEvento\">En tr&aacute;mite</p>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Vacio -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <br>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Boton -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <a href=\"#\" 
                                    class=\"btn btn-info\" style=\"margin-top:7px;\">
                                    Ver detalles
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>                
    <div class=\"row mt5 ml5\" id=\"Aprobados\"><!-- Fila 4 -->
        <ul class=\"list-group background-white\">
            <li class=\"list-group-item encabezadoEvento\">
                <div class=\"tituloSolicitudes\">
                    Aprobados
                </div>
            </li>
            <li class=\"list-group-item\">
                <div class=\"row\">
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                        <img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
                    </div>
                    <div class=\"col-xs-5 col-sm-5 col-md-6 col-lg-6\">
                        <div class=\"row\"><!-- Fila Nombre-->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                                Katy Perry en Madrid
                            </div>
                        </div><!-- Fin fila Nombre-->
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                                M&iacute;nimo 1000 entradas a 100 €
                            </div>
                        </div><!-- Fin fila entradas y precio -->
                        <div class=\"row\"><!-- Fila Nombre sala -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                                <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                Sala de conciertos
                            </div>
                        </div><!-- Fin fila Nombre sala -->
                        <div class=\"row\"><!-- Fecha y hora -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                                12 de Mayo del 2018. 22:00h
                            </div>
                        </div><!-- Fin fila fecha -->
                        <div class=\"row\"><!-- Destacar -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoDestacar\">
                                <span class=\"glyphicon glyphicon-star-empty\"></span>
                                Destacar Evento
                            </div>
                        </div><!-- Fin Destacar -->
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
                        <div class=\"row\"><!-- Estado -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <p class=\"estadoAprobado\">Aprobados</p>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Vacio -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <br>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Boton -->
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <a href=\"#\" 
                                    class=\"btn btn-custom-orange botonEstadisticas\" style=\"margin-top:7px;\">
                                    Estadisticas ventas
                                 </a>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <a href=\"#\" 
                                    class=\"btn btn-success botonDetalles\" style=\"margin-top:7px;\">
                                    Ver detalles
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div> 
    <div class=\"row mt5 ml5\" id=\"Confirmados\"><!-- Fila 5 -->
        <ul class=\"list-group background-white\">
            <li class=\"list-group-item encabezadoEvento\">
                <div class=\"tituloSolicitudes\">
                    Confirmados
                </div>
            </li>
            <li class=\"list-group-item\">
                <div class=\"row\">
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                        <img src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
                    </div>
                    <div class=\"col-xs-5 col-sm-5 col-md-6 col-lg-6\">
                        <div class=\"row\"><!-- Fila Nombre-->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                                Katy Perry en Madrid
                            </div>
                        </div><!-- Fin fila Nombre-->
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                                M&iacute;nimo 1000 entradas a 100 €
                            </div>
                        </div><!-- Fin fila entradas y precio -->
                        <div class=\"row\"><!-- Fila Nombre sala -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                                <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                Sala de conciertos
                            </div>
                        </div><!-- Fin fila Nombre sala -->
                        <div class=\"row\"><!-- Fecha y hora -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                                14 de Mayo del 2018. 22:00h
                            </div>
                        </div><!-- Fin fila fecha -->
                        <div class=\"row\"><!-- Destacar -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoDestacar\">
                                <span class=\"glyphicon glyphicon-star-empty\"></span>
                                Destacar Evento
                            </div>
                        </div><!-- Fin Destacar -->
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
                        <div class=\"row\"><!-- Estado -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <p class=\"estadoAprobado\">Confirmados</p>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Vacio -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <br>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Boton -->
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <a href=\"#\" 
                                    class=\"btn btn-custom-orange botonEstadisticas\" style=\"margin-top:7px;\">
                                    Estadisticas ventas
                                 </a>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <a href=\"#\" 
                                    class=\"btn btn-success botonDetalles\" style=\"margin-top:7px;\">
                                    Ver detalles
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class=\"list-group-item\">
                <div class=\"row\">
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                        <img src=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
                    </div>
                    <div class=\"col-xs-5 col-sm-5 col-md-6 col-lg-6\">
                        <div class=\"row\"><!-- Fila Nombre-->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                                Katy Perry en Madrid
                            </div>
                        </div><!-- Fin fila Nombre-->
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                                M&iacute;nimo 1000 entradas a 100 €
                            </div>
                        </div><!-- Fin fila entradas y precio -->
                        <div class=\"row\"><!-- Fila Nombre sala -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                                <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                Sala de conciertos
                            </div>
                        </div><!-- Fin fila Nombre sala -->
                        <div class=\"row\"><!-- Fecha y hora -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                                15 de Mayo del 2018. 22:00h
                            </div>
                        </div><!-- Fin fila fecha -->
                        <div class=\"row\"><!-- Destacar -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoDestacar\">
                                <span class=\"glyphicon glyphicon-star-empty\"></span>
                                Destacar Evento
                            </div>
                        </div><!-- Fin Destacar -->
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
                        <div class=\"row\"><!-- Estado -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <p class=\"estadoAprobado\">Confirmados</p>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Vacio -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <br>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Boton -->
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <a href=\"#\" 
                                    class=\"btn btn-custom-orange botonEstadisticas\" style=\"margin-top:7px;\">
                                    Estadisticas ventas
                                 </a>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <a href=\"#\" 
                                    class=\"btn btn-success botonDetalles\" style=\"margin-top:7px;\">
                                    Ver detalles
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>     
    <div class=\"row mt5 ml5\" id=\"Finalizados\"><!-- Fila 6 -->
        <ul class=\"list-group background-white\">
            <li class=\"list-group-item encabezadoEvento\">
                <div class=\"tituloSolicitudes\">
                    Finalizados
                </div>
            </li>
            <li class=\"list-group-item\">
                <div class=\"row\">
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                        <img src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
                    </div>
                    <div class=\"col-xs-5 col-sm-5 col-md-6 col-lg-6\">
                        <div class=\"row\"><!-- Fila Nombre-->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                                Katy Perry en Madrid
                            </div>
                        </div><!-- Fin fila Nombre-->
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                                2 entradas 200 €
                            </div>
                        </div><!-- Fin fila entradas y precio -->
                        <div class=\"row\"><!-- Fila Nombre sala -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                                <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                Sala de conciertos
                            </div>
                        </div><!-- Fin fila Nombre sala -->
                        <div class=\"row\"><!-- Fecha y hora -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                                14 de Mayo del 2018. 22:00h
                            </div>
                        </div><!-- Fin fila fecha -->
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
                        <div class=\"row\"><!-- Estado -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <p class=\"estadoFinalizado\">Finalizado</p>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Vacio -->
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <br>
                            </div>
                        </div>
                        <div class=\"row\"><!-- Boton -->
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <a href=\"#\" 
                                    class=\"btn btn-custom-orange botonEstadisticas\" style=\"margin-top:7px;\">
                                    Estadisticas ventas
                                 </a>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <a href=\"#\" 
                                    class=\"btn btn-success botonDetalles\" style=\"margin-top:7px;\">
                                    Ver detalles
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>        
";
    }

    // line 696
    public function block_customScripts($context, array $blocks = array())
    {
        // line 697
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
/******************Menu siempre visible***************************************/ 
        \$(document).scroll(function() {
            console.log(\$(document).scrollTop());
            if(\$(document).scrollTop() > 30){
                document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar top-bar-fixed\");
                document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main affix\");
                document.getElementById(\"menuEventos\").setAttribute(\"class\",\"navbar-collapse collapse navHeaderCollapse flotante\");
            }
            else{
                document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar\");
                document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main\");
                document.getElementById(\"menuEventos\").setAttribute(\"class\",\"navbar-collapse collapse navHeaderCollapse\");
            }
        });         
/**********************Menu****************************************************/
        \$(document).scroll(function() {
            console.log(\$(document).scrollTop());
            var max = 0;
            if(screen.width<768){
                document.getElementById(\"menuVertical\").setAttribute(\"style\", \"width: 100%;\");
            }
            else{
                document.getElementById(\"menuVertical\").removeAttribute(\"style\");
                ";
        // line 732
        if ((($context["cantResultados"] ?? null) >= 3)) {
            // line 733
            echo "                    max = 178*";
            echo twig_escape_filter($this->env, ($context["cantResultados"] ?? null), "html", null, true);
            echo ";
                ";
        } else {
            // line 735
            echo "                    max = 120;
                ";
        }
        // line 737
        echo "                if(\$(document).scrollTop() >= 100 && \$(document).scrollTop()<= max){
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
                }
                else{
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
                }
            }
        });
        document.getElementById(\"menu1\").setAttribute(\"class\",\"\");
        document.getElementById(\"menu5\").setAttribute(\"class\",\"menuActivo\");
    /** Desplazamiento vertical **/
        \$(function (){
            \$('a[href*=#]').click(function() {
                if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') 
                    && location.hostname == this.hostname) {
                    var \$target = \$(this.hash);
                    \$target = \$target.length && \$target || \$('[name=' + this.hash.slice(1) +']');
                    if (\$target.length) {
                         var targetOffset = \$target.offset().top;
                         \$('html,body').animate({scrollTop: targetOffset}, 1500);
                         return false;
                    }
                }
           });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "usuarios/eventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  837 => 737,  833 => 735,  827 => 733,  825 => 732,  797 => 707,  792 => 705,  788 => 704,  784 => 703,  780 => 702,  776 => 701,  772 => 700,  767 => 698,  764 => 697,  761 => 696,  701 => 640,  627 => 569,  562 => 507,  488 => 436,  426 => 377,  364 => 318,  311 => 268,  270 => 229,  267 => 228,  239 => 205,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/eventos.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/eventos.html.twig");
    }
}
