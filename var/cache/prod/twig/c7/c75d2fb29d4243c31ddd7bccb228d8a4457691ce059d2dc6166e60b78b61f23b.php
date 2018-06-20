<?php

/* artistas/paso2.html.twig */
class __TwigTemplate_5f4ab047416c855e98254cba6a3b45a122b917e358b8bf3510e8a063561d7abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "artistas/paso2.html.twig", 2);
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
    </style>
";
    }

    // line 125
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "artistas/paso2.html.twig", 126)->display(array_merge($context, array("bgImage" => (        // line 127
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nuevo Artista: Datos de contacto")));
    }

    // line 131
    public function block_steps($context, array $blocks = array())
    {
        // line 132
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "artistas/paso2.html.twig", 132)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 139
    public function block_customContent($context, array $blocks = array())
    {
        // line 140
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
                    <li role=\"presentation\" id=\"step-2\" class=\"active\">
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
                    <li role=\"presentation\" id=\"step-3\" class=\"\">
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
                <div id=\"paso2\" class=\"tab-pane row fade in active\"><!-- Datos de Contacto -->
                    <div class=\"col-sm-12\"><!-- Paso 2 -->
                        <div class=\"panel no-margin panel-primary\">
                            <div class=\"panel-heading\">
                                <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/phone-book.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Contacto\">
                                <strong>Tus datos de contacto</strong>
                            </div>
                            <div class=\"panel-body general-container\">
                                <form action=\"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("artistaPaso3");
        echo "\" method=\"post\" id=\"formularioContacto\" role=\"form\">
                                    <ul class=\"nav nav-tabs nav-justified\">
                                        <li class=\"active\">
                                            <a data-toggle=\"pill\" href=\"#Datos\">
                                                <span class=\"fa fa-phone\"></span> Datos de contacto
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle=\"pill\" href=\"#Redes\">
                                                <span class=\"fa fa-share-alt\"></span> Redes sociales
                                            </a>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content\">
                                        <div id=\"Datos\" class=\"tab-pane fade in active\">
                                            <div class=\"row mb10\"><!-- Fila 1 -->
                                                <div class=\"col-sm-6\"><!-- Telefono -->
                                                    <label for=\"telefonoContacto\">Tel&eacute;fono: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <input type=\"tel\" id=\"telefonoContacto\" name=\"telefonoContacto\" required=\"required\" class=\"form-control\" placeholder=\"0000000\">
                                                </div><!-- Fin Telefono -->
                                                <div class=\"col-sm-6\">
                                                    <label for=\"telefonoContacto2\">Tel&eacute;fono adicional: </label>
                                                    <input type=\"tel\" id=\"telefonoContacto2\" name=\"telefonoContacto2\" class=\"form-control\" placeholder=\"0000000\">
                                                </div>
                                            </div><!-- Fin Fila 1 -->
                                            <div class=\"row mb10\"><!-- Fila 2 -->
                                                <div class=\"col-sm-12\"><!-- Direccion -->
                                                    <label for=\"direccion\">Direcci&oacute;n: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <input type=\"text\" id=\"direccion\" name=\"direccion\" required=\"required\" class=\"form-control\" placeholder=\"\">
                                                </div><!-- Fin Direccion -->
                                            </div><!-- Fin Fila 2 -->
                                            <div class=\"row mb10\"><!-- Fila 3 -->
                                                <div class=\"col-sm-6\"><!-- Codigo postal -->
                                                    <label for=\"codigoPostal\">C&oacute;digo Postal: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <input type=\"text\" id=\"codigoPostal\" name=\"codigoPostal\" required=\"required\" class=\"form-control\" placeholder=\"\">
                                                </div>
                                                <div class=\"col-sm-6\"><!-- Pais -->
                                                    <label for=\"pais\">Pa&iacute;s: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <select name=\"pais[]\" id=\"pais\" class=\"form-control js-example-basic-single-multiple\" required=\"required\">
                                                        <option value=\"\"></option>     
                                                        <option value=\"1\">España</option> 
                                                        <option value=\"2\">M&eacute;xico</option>     
                                                    </select>
                                                </div>
                                            </div><!-- Fin Fila 3 -->
                                            <div class=\"row mb10\">
                                                <div class=\"col-sm-6 col-md-6 col-lg-6\">
                                                    <label class=\"\" for=\"provincia\">Provincia: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <select id=\"provincia\" name=\"provincia[]\" class=\"form-control js-example-basic-single-multiple\" required=\"required\">
                                                        <option value=\"\"></option>
                                                        <option value=\"\">Seleccione una provincia</option>
                                                        <option value=\"1\">Ãlava</option>          
                                                        <option value=\"2\">Albacete</option>
                                                        <option value=\"3\">Alicante</option>
                                                        <option value=\"4\">AlmerÃ­a</option>
                                                        <option value=\"5\">Ãvila</option>
                                                        <option value=\"6\">Badajoz</option>
                                                        <option value=\"7\">Illes Balears</option>
                                                        <option value=\"8\">Barcelona</option>
                                                        <option value=\"9\">Burgos</option>
                                                        <option value=\"10\">CÃ¡ceres</option>
                                                        <option value=\"11\">CÃ¡diz</option>
                                                        <option value=\"12\">CastellÃ³n</option>
                                                        <option value=\"13\">Ciudad Real</option>
                                                        <option value=\"14\">CÃ³rdoba</option>
                                                        <option value=\"15\">A CoruÃ±a</option>
                                                        <option value=\"16\">Cuenca</option>
                                                        <option value=\"17\">Girona</option>
                                                        <option value=\"18\">Granada</option>
                                                        <option value=\"19\">Guadalajara</option>
                                                        <option value=\"20\">GuipÃºzcoa</option>
                                                        <option value=\"21\">Huelva</option>
                                                        <option value=\"22\">Huesca</option>
                                                        <option value=\"23\">JaÃ©n</option>
                                                        <option value=\"24\">LeÃ³n</option>
                                                        <option value=\"25\">Lleida</option>
                                                        <option value=\"26\">La Rioja</option>
                                                        <option value=\"27\">Lugo</option>
                                                        <option value=\"28\">Madrid</option>
                                                        <option value=\"29\">MÃ¡laga</option>
                                                        <option value=\"30\">Murcia</option>
                                                        <option value=\"31\">Navarra</option>
                                                        <option value=\"32\">Ourense</option>
                                                        <option value=\"33\">Asturias</option>
                                                        <option value=\"34\">Palencia</option>
                                                        <option value=\"35\">Las Palmas</option>
                                                        <option value=\"36\">Pontevedra</option>
                                                        <option value=\"37\">Salamanca</option>
                                                        <option value=\"38\">Santa Cruz de Tenerife</option>
                                                        <option value=\"39\">Cantabria</option>
                                                        <option value=\"40\">Segovia</option>
                                                        <option value=\"41\">Sevilla</option>
                                                        <option value=\"42\">Soria</option>
                                                        <option value=\"43\">Tarragona</option>
                                                        <option value=\"44\">Teruel</option>
                                                        <option value=\"45\">Toledo</option>
                                                        <option value=\"46\">Valencia</option>
                                                        <option value=\"47\">Valladolid</option>
                                                        <option value=\"48\">Vizcaya</option>
                                                        <option value=\"49\">Zamora</option>
                                                        <option value=\"50\">Zaragoza</option>           
                                                        <option value=\"51\">Ceuta</option>          
                                                        <option value=\"52\">Melilla</option>            
                                                    </select>
                                                </div>
                                                <div class=\" col-sm-6 col-md-6 col-lg-6\">
                                                    <label class=\"\" for=\"ciudad\">Ciudad: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <select name=\"ciudad[]\" id=\"ciudad\" class=\"form-control js-example-basic-single-multiple\" required=\"required\">
                                                        <option value=\"\"></option>
                                                        <option value=\"Madrid\">Madrid</option>
                                                        <option value=\"Barcelona\">Barcelona</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id=\"Redes\" class=\"tab-pane fade\">
                                            <div class=\"row mb10\">
                                                <div class=\" col-sm-6 col-md-6 col-lg-6\">
                                                    <label class=\"\" for=\"facebook\">Facebook</label>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">
                                                            <span class=\"fa fa-facebook\"></span>
                                                        </span>
                                                        <input type=\"text\" name=\"facebook\" id=\"facebook\" class=\"form-control\">
                                                    </div>
                                                </div>
                                                <div class=\" col-sm-6 col-md-6 col-lg-6\">
                                                    <label class=\"\" for=\"twitter\">Twitter</label>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">
                                                            <span class=\"fa fa-twitter\"></span>
                                                        </span>
                                                        <input type=\"text\" name=\"twitter\" id=\"twitter\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb10\">
                                                <div class=\" col-sm-6 col-md-6 col-lg-6\">
                                                    <label class=\"\" for=\"instagram\">Instagram</label>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">
                                                            <span class=\"fa fa-instagram\"></span>
                                                        </span>
                                                        <input type=\"text\" name=\"instagram\" id=\"instagram\" class=\"form-control\">
                                                    </div>
                                                </div>
                                                <div class=\" col-sm-6 col-md-6 col-lg-6\">
                                                    <label class=\"\" for=\"linkeIn\">Linked-in</label>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">
                                                            <span class=\"fa fa-linkedin\"></span>
                                                        </span>
                                                        <input type=\"text\" name=\"linkeIn\" id=\"linkeIn\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb10\">
                                                <div class=\" col-sm-6 col-md-6 col-lg-6\">
                                                    <label class=\"\" for=\"google\">Google+</label>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">
                                                            <span class=\"fa fa-google-plus\"></span>
                                                        </span>
                                                        <input type=\"text\" name=\"google\" id=\"google\" class=\"form-control\">
                                                    </div>
                                                </div>
                                                <div class=\" col-sm-6 col-md-6 col-lg-6\">
                                                    <label class=\"\" for=\"youtube\">Youtube</label>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">
                                                            <span class=\"fa fa-youtube\"></span>
                                                        </span>
                                                        <input type=\"text\" name=\"youtube\" id=\"youtube\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                <div class=\"row mt10\"><!-- Botones -->
                                    <div class=\"hidden-xs hidden-sm col-md-2 col-lg-2\"></div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                        <button type=\"reset\" class=\"btn btn-rw btn-primary tags btn-block\" id=\"\" data-toggle=\"tooltip\" title=\"Borrar el formulario\">
                                            Cancelar
                                            <span class=\"glyphicon glyphicon-remove-circle\"></span>
                                        </button>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                                        <button type=\"button\" class=\"btn btn-custom-orange btn-block\" id=\"\" data-toggle=\"tooltip\" title=\"Completar mis datos más tarde\">
                                            Completar mis datos m&aacute;s tarde
                                            <span class=\"glyphicon glyphicon-save-file\"></span>
                                        </button>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                        <a href=\"";
        // line 378
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("artistaPaso1");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"anterior2\" data-toggle=\"tooltip\" title=\"Anterior - Datos Generales\">
                                            <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                            Anterior                                            
                                        </a>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                        <button type=\"submit\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"siguiente2\" data-toggle=\"tooltip\" title=\"Siguiente - Videos, Fotos y Discografía\">
                                            Siguiente
                                            <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                        </button>
                                    </div>
                                </div><!-- Fin de Botones --> 
                                </form>
                            </div><!-- Fin panel -->
                        </div>
                    </div>
                </div><!-- Fin de Datos de Contacto -->
            </div>
        </div>
    </div>
";
    }

    // line 399
    public function block_javascripts($context, array $blocks = array())
    {
        // line 400
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
    /***********************Select2********************************************/
        \$(document).ready(function() {
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });            
            \$('.js-example-basic-single').select2();
    /*************************** Tooltip ***************************************/
            \$('[data-toggle=\"tooltip\"]').tooltip(); 
        });//Fin de función ready
    </script>
";
    }

    public function getTemplateName()
    {
        return "artistas/paso2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 405,  484 => 404,  479 => 402,  473 => 400,  470 => 399,  445 => 378,  249 => 185,  242 => 181,  199 => 140,  196 => 139,  191 => 132,  188 => 131,  184 => 127,  182 => 126,  179 => 125,  61 => 11,  56 => 9,  52 => 8,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artistas/paso2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/artistas/paso2.html.twig");
    }
}
