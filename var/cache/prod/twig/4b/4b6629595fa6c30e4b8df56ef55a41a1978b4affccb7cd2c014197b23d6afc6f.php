<?php

/* artistas/paso1.html.twig */
class __TwigTemplate_2b87599c7e1f3c241bef662170bbfb4ed80f4f8351e261b11a433cca5743e729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "artistas/paso1.html.twig", 2);
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
        $this->loadTemplate("default/subheader.html.twig", "artistas/paso1.html.twig", 126)->display(array_merge($context, array("bgImage" => (        // line 127
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nuevo Artista: Datos Generales")));
    }

    // line 131
    public function block_steps($context, array $blocks = array())
    {
        // line 132
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "artistas/paso1.html.twig", 132)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 139
    public function block_customContent($context, array $blocks = array())
    {
        // line 140
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
                <div id=\"paso1\" class=\"tab-pane row fade in active\"><!-- Informacion general -->                    
                    <div class=\"col-sm-12\">
                        <div class=\"panel no-margin panel-primary\">
                            <div class=\"panel-heading\">
                                <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/info.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Conciertos\">
                                <strong>Datos generales</strong>
                            </div>
                            <div class=\"panel-body general-container\">
                                <form action=\"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("artistaPaso2");
        echo "\" method=\"post\" id=\"formularioArtista\" role=\"form\" enctype=\"multipart/form-data\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"nombre\">Nombre del Artista <span class=\"required\">*</span></label>
                                                    <input id=\"nombre\" name=\"nombre\" required=\"required\" class=\"form-control\" type=\"text\" placeholder=\"Nombre del Artista\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"tipo\">Tipo de Artista <span class=\"required\">*</span></label>
                                                    <select name=\"tipo[]\" id=\"tipo\" class=\"form-control js-example-basic-single\" required=\"required\">
                                                        <option value=\"\">Seleccione un Tipo de Artista</option>
                                                        <option value=\"1\">banda</option>
                                                        <option value=\"2\">solista</option>
                                                        <option value=\"3\">orquesta</option>
                                                        <option value=\"4\">tributo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"incioCarrera\">Inicio de Carrera <span class=\"required\">*</span></label>
                                                    <div class=\"input-group date datepicker-me\" data-provide=\"datepicker\">            
                                                        <div class=\"input-group-addon\">
                                                            <span class=\"glyphicon glyphicon-th\"></span>
                                                        </div>
                                                        <input type=\"text\" id=\"incioCarrera\" class=\"form-control datepicker-me\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
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
                                    <div class=\"col-sm-6\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"cacheMinima\">Cache M&iacute;nima <span class=\"required\">*</span></label>
                                                    <input type=\"number\" id=\"cacheMinima\" name=\"cacheMinima\" required=\"required\" class=\"form-control\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                            <label for=\"biografia\">Biografia <span class=\"required\" aria-required=\"true\">*</span></label>
                                            <textarea required=\"required\" name=\"biografia\" rows=\"10\" class=\"form-control\" placeholder=\"\" aria-required=\"true\"></textarea>
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
        // line 289
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

    // line 304
    public function block_javascripts($context, array $blocks = array())
    {
        // line 305
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 310
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
        return "artistas/paso1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 310,  387 => 309,  382 => 307,  376 => 305,  373 => 304,  355 => 289,  249 => 185,  242 => 181,  199 => 140,  196 => 139,  191 => 132,  188 => 131,  184 => 127,  182 => 126,  179 => 125,  61 => 11,  56 => 9,  52 => 8,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artistas/paso1.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/artistas/paso1.html.twig");
    }
}
