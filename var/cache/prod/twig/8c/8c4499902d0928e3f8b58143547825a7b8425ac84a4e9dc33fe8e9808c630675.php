<?php

/* salas/paso1.html.twig */
class __TwigTemplate_3f1aa4bead7548340b385abbe105df315bceb2dbc672397186b104d907f09c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/paso1.html.twig", 2);
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
        $this->loadTemplate("default/subheader.html.twig", "salas/paso1.html.twig", 149)->display(array_merge($context, array("bgImage" => (        // line 150
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nueva Sala: Datos generales")));
    }

    // line 154
    public function block_steps($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "salas/paso1.html.twig", 155)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
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
                                                    <label for=\"aforo\">Aforo <span class=\"required\">*</span></label>
                                                    <input id=\"aforo\" name=\"aforo\" required=\"required\" class=\"form-control\" type=\"number\" placeholder=\"0\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"form-group custom-date form-inline\">
                                            <label for=\"annoApertura\">Fecha de apertura <span class=\"required\" aria-required=\"true\">*</span></label><br>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"fa fa-calendar\"></i>
                                                </div>
                                                <select required=\"required\" style=\"width: 49%; display: none;\" name=\"mesApertura\" id=\"mesApertura\" class=\"form-control selectpicker\" aria-required=\"true\">
                                                    <option value=\"\">Mes</option>
                                                    <option value=\"1\">Enero</option>
                                                    <option value=\"2\">Febrero</option>
                                                    <option value=\"3\">Marzo</option>
                                                    <option value=\"4\">Abril</option>
                                                    <option value=\"5\">Mayo</option>
                                                    <option value=\"6\">Junio</option>
                                                    <option value=\"7\">Julio</option>
                                                    <option value=\"8\">Agosto</option>
                                                    <option value=\"9\">Septiembre</option>
                                                    <option value=\"10\">Octubre</option>
                                                    <option value=\"11\">Noviembre</option>
                                                    <option value=\"12\">Diciembre</option>
                                                </select>
                                            </div>
                                            <select required=\"required\" style=\"width: 49%; display: none;\" name=\"annoApertura\" id=\"annoApertura\" class=\"form-control year selectpicker\" aria-required=\"true\">
                                                <option value=\"\">Año</option>
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
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"area\">&Aacute;rea del escenario (m2)<span class=\"required\">*</span></label>
                                                    <input type=\"number\" id=\"area\" name=\"area\" required=\"required\" class=\"form-control\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"estilos[]\">Estilo(s) Musical(es) <span class=\"required\">*</span></label>
                                                    <select id=\"estilos[]\" name=\"estilos[]\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\" required=\"required\">
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
                                                    <label for=\"idCaracteristicas[]\">
                                                        Caracter&iacute;sticas <span class=\"required\">*</span>
                                                    </label>
                                                    <select required=\"required\" name=\"idCaracteristicas[]\" id=\"idCaracteristicas\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                                                        <option value=\"\"></option>
                                                        <option value=\"1\">Act&uacute;as gratis</option>
                                                        <option value=\"2\">Aire Acondicionado</option>
                                                        <option value=\"3\">Alojamiento</option>
                                                        <option value=\"4\">Area de Fumadores</option>
                                                        <option value=\"5\">Audio Envolvente</option>
                                                        <option value=\"6\">Bar</option>
                                                        <option value=\"7\">Barra Luminica</option>
                                                        <option value=\"8\">Camerino Interno</option>
                                                        <option value=\"9\">Cobra alquiler de sala</option>
                                                        <option value=\"10\">Cortina de Humo</option>
                                                        <option value=\"11\">Escenario al aire libre</option> 
                                                        <option value=\"12\">Escenario de Balcon</option>
                                                        <option value=\"13\">Escenario interior</option>
                                                        <option value=\"14\">Invita comida</option>
                                                        <option value=\"15\">Invita bebida</option>
                                                        <option value=\"16\">M&aacute;quina de humo</option>                                            
                                                        <option value=\"17\">Ofrece t&eacute;cnico de sonido</option>
                                                        <option value=\"18\">Ofrece equipo de voces</option>
                                                        <option value=\"19\">Ofrece microfon&iacute;a</option>
                                                        <option value=\"20\">Ofrece ampli guitarra</option>
                                                        <option value=\"21\">Ofrece ampli bajo</option>
                                                        <option value=\"22\">Ofrece piano</option>
                                                        <option value=\"23\">Ofrece bateria</option>
                                                        <option value=\"24\">Paga cache</option>
                                                        <option value=\"25\">Paga por taquilla</option>
                                                        <option value=\"26\">Pantalla</option> 
                                                        <option value=\"27\">Palco Precidencial</option>  
                                                        <option value=\"28\">Restaurante</option>
                                                        <option value=\"29\">Sistema de Alarma</option>
                                                        <option value=\"30\">Sistema de luces</option>
                                                        <option value=\"31\">Sistema contra incendios</option>
                                                        <option value=\"32\">Solo permite formato ac&uacute;stico</option>                                            
                                                        <option value=\"33\">Wi-Fi</option>
                                                    </select>
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
                                <div class=\"row\"><!-- Botones -->
                                    <div class=\"hidden-xs hidden-sm col-md-4 col-lg-4\"></div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                        <button type=\"reset\" class=\"btn btn-rw btn-primary tags btn-block\" id=\"Cancelar\" data-toggle=\"tooltip\" title=\"Borrar el formulario\">
                                            Cancelar
                                            <span class=\"glyphicon glyphicon-remove-circle\"></span>
                                        </button>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                                        <button type=\"button\" class=\"btn btn-custom-orange btn-block\" id=\"completarLuego\" data-toggle=\"tooltip\" title=\"Completar mis datos más tarde\">
                                            Completar mis datos m&aacute;s tarde
                                            <span class=\"glyphicon glyphicon-save-file\"></span>
                                        </button>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">";
        // line 478
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

    // line 493
    public function block_javascripts($context, array $blocks = array())
    {
        // line 494
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 499
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
    /************************Calendario*****************************************
            \$('.datepicker-me').datepicker({
                    format: \"mm/yyyy\",
                    todayBtn: true,
                    language: \"es\",
            });*/
            \$('#fechaApertura').datepicker({
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
        return "salas/paso1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 499,  576 => 498,  571 => 496,  565 => 494,  562 => 493,  544 => 478,  283 => 219,  276 => 215,  222 => 163,  219 => 162,  214 => 155,  211 => 154,  207 => 150,  205 => 149,  202 => 148,  61 => 11,  56 => 9,  52 => 8,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/paso1.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/paso1.html.twig");
    }
}
