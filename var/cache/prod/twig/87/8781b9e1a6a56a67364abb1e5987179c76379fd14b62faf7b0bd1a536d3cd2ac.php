<?php

/* salas/paso2.html.twig */
class __TwigTemplate_420036875146ad19917035538b58fcdfc3899007284b222efd9b03444dc71dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/paso2.html.twig", 2);
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
        echo "Busco Concierto | Paso 2 del Nuevo Local";
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

    // line 132
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 133
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "salas/paso2.html.twig", 133)->display(array_merge($context, array("bgImage" => (        // line 134
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nueva Sala: Contacto")));
    }

    // line 138
    public function block_steps($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "salas/paso2.html.twig", 139)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 146
    public function block_customContent($context, array $blocks = array())
    {
        // line 147
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
                    <li class=\"divider-4-steps\">
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
                <div id=\"paso2\" class=\"tab-pane row fade in active\"><!-- Datos de Contacto -->
                    <div class=\"col-sm-12\"><!-- Paso 2 -->
                        <div class=\"panel no-margin panel-primary\">
                            <div class=\"panel-heading\">
                                <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/phone-book.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Contacto\">
                                <strong>Tus datos de contacto</strong>
                            </div>
                            <div class=\"panel-body general-container\">
                                <form action=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salaPaso3");
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
                                                <div class=\"col-sm-6\"><!-- Nombre -->
                                                    <label for=\"telefonoContacto\">Tel&eacute;fono: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <input type=\"tel\" id=\"telefonoContacto\" name=\"telefonoContacto\" required=\"required\" class=\"form-control\" placeholder=\"\">
                                                </div><!-- Fin nombre -->
                                                <div class=\"col-sm-6\"><!-- Nombre -->
                                                    <label for=\"telefonoContacto2\">Tel&eacute;fono Adicional: </label>
                                                    <input type=\"tel\" id=\"telefonoContacto2\" name=\"telefonoContacto2\" required=\"required\" class=\"form-control\" placeholder=\"\">
                                                </div>
                                            </div><!-- Fin Fila 1 -->
                                            <div class=\"row mb10\"><!-- Fila 2 -->
                                                <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\"><!-- Direccion -->
                                                    <label for=\"direccion\">Direcci&oacute;n: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <input type=\"text\" id=\"direccion\" name=\"direccion\" required=\"required\" class=\"form-control\" placeholder=\"Avenida / Calle, Edificio...\">
                                                </div><!-- Fin Direccion -->
                                            </div><!-- Fin Fila 2 -->
                                            <div class=\"row mb10\"><!-- Fila 3 -->
                                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- Código postal -->
                                                    <label for=\"codigoPostal\">C&oacute;digo Postal: <span class=\"required\" aria-required=\"true\">*</span></label>
                                                    <input type=\"number\" id=\"codigoPostal\" name=\"codigoPostal\" required=\"required\" class=\"form-control\" placeholder=\"0000\">
                                                </div>
                                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- País -->
                                                    <label class=\"etiqueta\" for=\"pais\">Pa&iacute;s: <span class=\"required\">*</span></label>
                                                    <select name=\"pais[]\" id=\"pais\" class=\"form-control js-example-basic-single\">
                                                        <option value=\"\"></option>     
                                                        <option value=\"1\">España</option> 
                                                        <option value=\"2\">M&eacute;xico</option>     
                                                    </select>
                                                </div><!-- Fin País -->
                                            </div><!-- Fin Fila 3 -->
                                            <div class=\"row mb10\">
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
                                            <div class=\"row mb10\">    
                                                <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                                    <label class=\"etiqueta\" for=\"comoLLegar\">C&oacute;mo llegar: <span class=\"required\">*</span></label>
                                                    <p class=\"help-block\">
                                                        Ofr&eacute;celes a tus visitantes indicaciones para llegar a tu local, como l&iacute;neas de buses, avenidas, etc.
                                                    </p>
                                                    <input type=\"text\" id=\"comoLLegar\" name=\"comoLLegar\" required=\"required\" class=\"form-control\" placeholder=\"Linea 34 del Bus...\">
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
                                    <div class=\"row\"><!-- Botones -->
                                        <div class=\"hidden-xs hidden-sm col-md-2 col-lg-2\"></div>
                                        <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                            <button type=\"reset\" class=\"btn btn-rw btn-primary tags btn-block\" id=\"Cancelar\" data-toggle=\"tooltip\" title=\"Borrar el formulario\">
                                                Cancelar
                                                <span class=\"glyphicon glyphicon-remove-circle\"></span>
                                            </button>
                                        </div>
                                        <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                                            <button type=\"button\" class=\"btn btn-custom-orange btn-block\" id=\"completarLuego\" data-toggle=\"tooltip\" title=\"Completar mis datos más tarde\">
                                                Completar mis datos mas tarde
                                                <span class=\"glyphicon glyphicon-save-file\"></span>
                                            </button>
                                        </div>
                                        <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                            <a href=\"";
        // line 354
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salaPaso1");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"anterior2\" data-toggle=\"tooltip\" title=\"Anterior - Datos Generales\">
                                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                                Anterior                                            
                                            </a>
                                        </div>
                                        <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                            <button type=\"submit\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"siguiente2\" data-toggle=\"tooltip\" title=\"Siguiente - Videos, Fotos y Eventos\">
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

    // line 375
    public function block_javascripts($context, array $blocks = array())
    {
        // line 376
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 381
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
        return "salas/paso2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 381,  460 => 380,  455 => 378,  449 => 376,  446 => 375,  421 => 354,  267 => 203,  260 => 199,  206 => 147,  203 => 146,  198 => 139,  195 => 138,  191 => 134,  189 => 133,  186 => 132,  61 => 11,  56 => 9,  52 => 8,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/paso2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/paso2.html.twig");
    }
}
