<?php

/* salas/paso1v2.html.twig */
class __TwigTemplate_e4f2d67b03bbc35351c1c39bc385ecc8eeb8c30ce5725067fac781c63f71af51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/paso1v2.html.twig", 2);
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
        echo "Busco Concierto | Paso 1 del Nuevo Local";
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
/*******************************************************************************/
        .heading2 h4{
            margin-top: 10px;
            margin-left: 10px;
            margin-bottom: -2px;
            margin-right: 0px;
            padding-bottom:15px;
            display:inline-block;
            border-bottom:2px solid #00B7EB;
        }
        .heading2 {
            display:block;
            margin:0 0 20px 0;
            border-bottom:1px dotted #d2d2d2; 
            font-size:12px;
        }
/**************************Divisores para 4 pasos******************************/
        ul.steps li.divider-4-steps{
            width: 9%;
        }
        ul.steps li.divider-4-steps hr{
            border-top: 2px solid #d2d2d2 !important;
        }
    </style>
";
    }

    // line 148
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 149
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "salas/paso1v2.html.twig", 149)->display(array_merge($context, array("bgImage" => (        // line 150
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nueva Sala: Datos generales")));
    }

    // line 154
    public function block_steps($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "salas/paso1v2.html.twig", 155)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 162
    public function block_customContent($context, array $blocks = array())
    {
        // line 163
        echo "    <div class=\"container\"><!-- Contenido -->
        <div class=\"row mt20 mb20 background-light-grey\">
            <div class=\"hidden-xs hidden-sm col-md-12 without-padding-right without-padding-left\">
                <ul class=\"steps nav nav-pills\">
                    <li role=\"presentation\" id=\"step-1\" class=\"active\">
                        <a href=\"\">
                            1
                        </a>
                        <span>Datos generales</span>
                    </li>
                    <li class=\"divider-4-steps\">
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
                    <li class=\"divider-4-steps\">
                        <span>
                            <hr class=\"hr-solid\">
                        </span>
                    </li>
                    <li role=\"presentation\" id=\"step-3\" class=\"\">
                        <a href=\"\">
                            3
                        </a>
                        <span>Videos, Fotos y Eventos</span>
                    </li>
                    <li class=\"divider-4-steps\">
                        <span>
                            <hr class=\"hr-solid\">
                        </span>
                    </li>
                    <li role=\"presentation\" id=\"step-3\" class=\"\">
                        <a href=\"\">
                            4
                        </a>
                        <span>Calendario</span>
                    </li>
                </ul>
            </div><!-- Fin Pasos -->
        </div>
        <div class=\"row\">
            <div class=\"tab-content tab-shop mt0 mb20 bg-shadow background-white\">                
                <div id=\"paso1\" class=\"tab-pane row fade in active\"><!-- Informacion general -->                    
                    <div class=\"col-sm-12\">
                        <div class=\"panel no-margin panel-primary\">
                            <div class=\"panel-heading\">
                                <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/info.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Conciertos\">
                                <strong>Datos generales</strong>
                            </div>
                            <div class=\"panel-body general-container\">
                                <form action=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salaPaso2");
        echo "\" method=\"post\" id=\"formularioSala\" role=\"form\" enctype=\"multipart/form-data\">
                                <div class=\"row\">
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"nombre\">Nombre de la Sala/Local <span class=\"required\">*</span></label>
                                                    <input id=\"nombre\" name=\"nombre\" required=\"required\" class=\"form-control\" type=\"text\" placeholder=\"Nombre del Artista\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- País -->
                                        <label class=\"etiqueta\" for=\"pais\">Pa&iacute;s: <span class=\"required\">*</span></label>
                                        <select name=\"pais[]\" id=\"pais\" class=\"form-control js-example-basic-single\">
                                            <option value=\"\"></option>     
                                            <option value=\"1\">España</option> 
                                            <option value=\"2\">M&eacute;xico</option>     
                                        </select>
                                    </div><!-- Fin País -->
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- Provincia -->
                                        <label class=\"etiqueta\" for=\"ciudad\">Provincia: <span class=\"required\">*</span></label>
                                        <select id=\"provincia\" name=\"provincia[]\" class=\"form-control js-example-basic-single\">
                                            <option value=\"\"></option>
                                            <option value=\"1\">Albacete</option>
                                            <option value=\"2\">Alicante</option>
                                        </select>
                                    </div><!-- Fin Provincia -->
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- Ciudad -->
                                        <label class=\"etiqueta\" for=\"ciudad\">Ciudad: <span class=\"required\">*</span></label>
                                        <select name=\"ciudad[]\" id=\"ciudad\" class=\"form-control js-example-basic-single\">
                                            <option value=\"\"></option>     
                                            <option value=\"Madrid\">Madrid</option>
                                            <option value=\"Barcelona\">Barcelona</option>
                                        </select>
                                    </div><!-- Fin Ciudad -->
                                </div>
                                <div class=\"row\">    
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <label class=\"etiqueta\" for=\"comoLLegar\">C&oacute;mo llegar: <span class=\"required\">*</span></label>
                                        <input type=\"text\" id=\"comoLLegar\" name=\"comoLLegar\" required=\"required\" class=\"form-control\" placeholder=\"Linea 34 del Bus...\">
                                    </div>
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"tipo\">Tipo de sala <span class=\"required\">*</span></label>
                                            <select name=\"tipo[]\" id=\"tipo\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\" required=\"required\">
                                                <option value=\"\"></option>
                                                <option value=\"1\">Banda</option>
                                                <option value=\"2\">Teatro</option>
                                                <option value=\"3\">Orquesta</option>
                                                <option value=\"4\">Al aire libre</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"fechaApertura\">Fecha de Apertura <span class=\"required\">*</span></label>
                                                    <div class=\"input-group date datepicker-me\" data-provide=\"datepicker\">            
                                                        <div class=\"input-group-addon\">
                                                            <span class=\"glyphicon glyphicon-th\"></span>
                                                        </div>
                                                        <input type=\"text\" id=\"fechaApertura\" class=\"form-control datepicker-me\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"estilos\">Estilo(s) Musical(es) <span class=\"required\">*</span></label>
                                                    <select id=\"estilos\" class=\"form-control js-example-basic-single-multiple\" name=\"estilos[]\" multiple=\"multiple\" required=\"required\">
                                                        <option value=\"\"><option>
                                                        <option value=\"Cl&aacute;sica\">Cl&aacute;sica</option>
                                                        <option value=\"Cumbia\">Cumbia</option>
                                                        <option value=\"Indie\">Indie</option>
                                                        <option value=\"Jazz\">Jazz</option>
                                                        <option value=\"Pop\">Pop</option>
                                                        <option value=\"Punk\">Punk</option>
                                                        <option value=\"Rap\">Rap</option>
                                                        <option value=\"Rumba\">Rumba</option>
                                                        <option value=\"Rock\">Rock</option>
                                                        <option value=\"Salsa\">Salsa</option>
                                                        <option value=\"Tap\">Tap</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"cacheMinima\">Cache M&iacute;nima <span class=\"required\">*</span></label>
                                                    <input type=\"number\" id=\"cacheMinima\" name=\"cacheMinima\" required=\"required\" class=\"form-control\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"cacheMinima\">Cache M&aacute;xima <span class=\"required\">*</span></label>
                                                    <input type=\"number\" id=\"cacheMaxima\" name=\"cacheMaxima\" required=\"required\" class=\"form-control\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class=\"form-group\">
                                            <label for=\"descripcion\">Descripci&oacute;n <span class=\"required\" aria-required=\"true\">*</span></label>
                                            <textarea required=\"required\" name=\"descripcion\" rows=\"10\" class=\"form-control\" placeholder=\"\" aria-required=\"true\"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"ancho\">Ancho del escenario (m)<span class=\"required\">*</span></label>
                                                    <input type=\"number\" id=\"ancho\" name=\"ancho\" required=\"required\" class=\"form-control\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"largo\">Largo del escenario (m)<span class=\"required\">*</span></label>
                                                    <input type=\"number\" id=\"largo\" name=\"largo\" required=\"required\" class=\"form-control\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"datosTecnicos\">Otros Datos T&eacute;cnicos <span class=\"required\">*</span></label>
                                                    <textarea id=\"datosTecnicos\" name=\"datosTecnicos\" required=\"required\" class=\"form-control\"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                        <h4>
                                            <span class=\"glyphicon glyphicon-list-alt\"></span>
                                            Caracter&iacute;sticas
                                        </h4>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-md-12 col-lg-12 mb10\">
                                        <div class=\"row textoCaracteristicas\">
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"pagaCache\" name=\"pagaCache\" class=\"\" >
                                                Paga cache
                                            </div>
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"pagoTaquilla\" name=\"pagoTaquilla\" class=\"\" >
                                                Paga por taquilla
                                            </div>
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"gratis\" name=\"gratis\" class=\"\" >
                                                Act&uacute;as gratis
                                            </div>   
                                        </div>
                                        <!-- -->
                                        <div class=\"row\">
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"invitaComida\" name=\"invitaComida\" class=\"\" >
                                                Invita comida
                                            </div>
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"invitaBebida\" name=\"invitaBebida\" class=\"\" >
                                                Invita bebida
                                            </div>   
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"camerino\" name=\"camerino\" class=\"\" >
                                                Dispone de camerino
                                            </div>   
                                        </div>
                                        <!-- -->
                                        <div class=\"row textoCaracteristicas\">
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"alquilerSala\" name=\"alquilerSala\" class=\"\" >
                                                Cobra alquiler de sala
                                            </div>   
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"soloAcustico\" name=\"soloAcustico\" class=\"\" >
                                                Solo permite formato ac&uacute;stico
                                            </div>
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"alojamiento\" name=\"alojamiento\" class=\"\" >
                                                Ofrece alojamiento
                                            </div>
                                        </div>
                                        <!-- -->
                                        <div class=\"row textoCaracteristicas\">
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"tecnicoSonido\" name=\"tecnicoSonido\" class=\"\" >
                                                Ofrece t&eacute;cnico de sonido
                                            </div>   
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"equipoVoces\" name=\"equipoVoces\" class=\"\" >
                                                Ofrece equipo de voces
                                            </div>
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"microfonia\" name=\"microfonia\" class=\"\" >
                                                Ofrece microfon&iacute;a
                                            </div>
                                        </div>
                                        <!-- -->
                                        <div class=\"row textoCaracteristicas\">
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"amplificadorGuitarra\" name=\"amplificadorGuitarra\" class=\"\" >
                                                Ofrece ampli guitarra
                                            </div>   
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"amplificadorBajo\" name=\"amplificadorBajo\" class=\"\" >
                                                Ofrece ampli bajo
                                            </div>
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"piano\" name=\"piano\" class=\"\" >
                                                Ofrece piano
                                            </div>
                                        </div>
                                        <!-- -->
                                        <div class=\"row textoCaracteristicas\">
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"bateria\" name=\"bateria\" class=\"\" >
                                                Ofrece bateria
                                            </div>   
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"luces\" name=\"luces\" class=\"\" >
                                                Luces
                                            </div>
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"maquinaHumo\" name=\"maquinaHumo\" class=\"\" >
                                                M&aacute;quina de humo
                                            </div>
                                        </div>
                                        <!-- -->
                                        <div class=\"row textoCaracteristicas\">
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"escenarioInterior\" name=\"escenarioInterior\" class=\"\" >
                                                Escenario interior
                                            </div>   
                                            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                                <input type=\"checkbox\" id=\"escenarioAlAireLibre\" name=\"escenarioAlAireLibre\" class=\"\" >
                                                Escenario al aire libre
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\"><!-- Botones -->
                                    <div class=\"hidden-xs hidden-sm col-md-4 col-lg-4\"></div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                        <button type=\"reset\" class=\"btn btn-rw btn-primary tags btn-block\">
                                            Cancelar
                                            <span class=\"glyphicon glyphicon-remove-circle\"></span>
                                        </button>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                                        <button type=\"button\" class=\"btn btn-custom-orange btn-block\">
                                            Completar mis datos m&aacute;s tarde
                                            <span class=\"glyphicon glyphicon-save-file\"></span>
                                        </button>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">";
        // line 505
        echo "                                        <button type=\"submit\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"siguiente1\" data-toggle=\"tooltip\" title=\"Siguiente - Datos de Contacto\">
                                            Siguiente
                                            <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                        </button>
                                    </div>
                                </div><!-- Fin de Botones --> 
                                </form>
                            </div>
                        </div>
                    </div><!-- Fin de fila 1 -->                    
                </div><!-- Fin de datos generales -->
            </div>
        </div>
    </div>
";
    }

    // line 520
    public function block_javascripts($context, array $blocks = array())
    {
        // line 521
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
    /***********************Select2********************************************/
        \$(document).ready(function() {
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });            
            \$('.js-example-basic-single').select2({
                placeholder: 'Seleccione una opccion',
                allowClear: true,
                lenguage:\"es\"
            });
    /************************Calendario*****************************************/
            \$('.datepicker-me').datepicker({
                    format: \"mm/yyyy\",
                    todayBtn: true,
                    language: \"es\",
                });
    /*************************** Tooltip ***************************************/
            \$('[data-toggle=\"tooltip\"]').tooltip();             
        });//Fin de función ready
    </script>
";
    }

    public function getTemplateName()
    {
        return "salas/paso1v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 526,  603 => 525,  598 => 523,  592 => 521,  589 => 520,  571 => 505,  283 => 219,  276 => 215,  222 => 163,  219 => 162,  214 => 155,  211 => 154,  207 => 150,  205 => 149,  202 => 148,  61 => 11,  56 => 9,  52 => 8,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/paso1v2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/paso1v2.html.twig");
    }
}
