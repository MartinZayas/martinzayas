<?php

/* salas/paso3v2.html.twig */
class __TwigTemplate_8afc1772dcf9d23d5982605d1df9b8ea047d9005d335a8813c54aaeb720be4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/paso3v2.html.twig", 2);
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
        echo "Busco Concierto | Paso 3 del Nuevo Local";
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
        $this->loadTemplate("default/subheader.html.twig", "salas/paso3v2.html.twig", 133)->display(array_merge($context, array("bgImage" => (        // line 134
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nueva Sala: Videos, Fotos y Eventos")));
    }

    // line 138
    public function block_steps($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "salas/paso3v2.html.twig", 139)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
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
                    <li role=\"presentation\" id=\"step-3\" class=\"active\">
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
                <div id=\"paso3\" class=\"tab-pane row fade in active\"><!-- Video, Fotos y discografía -->
                    <div class=\"col-sm-12\"><!-- Paso 2 -->
                        <div class=\"panel no-margin panel-primary\">
                            <div class=\"panel-heading\">
                                <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/youtube.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Discograf&iacute;a\">
                                <strong>Tus Videos, Fotos y Eventos</strong>
                            </div>
                            <div class=\"panel-body general-container\">
                                <form action=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaSala");
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
                                    </ul>
                                    <div class=\"tab-content\">
                                        <div id=\"Fotos\" class=\"tab-pane fade in active\">
                                            <div class=\"row mb10\"><!-- Fila 1 -->
                                                <div class=\"col-sm-12\">
                                                    <div class=\"panel panel-default\" id=\"fotos\">
                                                        <div class=\"panel-heading\">
                                                            <h3>
                                                                <span class=\"fa fa-dropbox\"></span>
                                                                Galer&iacute;a de Im&aacute;genes
                                                            </h3>
                                                        </div>
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12\">
                                                                <p class=\"alerta\" id=\"archivosCargados\">Sube fotos sobre tu evento para que 
                                                                los visitantes vean de que se trata. 
                                                                Tambi&eacute;n debes seleccionar una foto como
                                                                perfil, que identifique a tu evento, 
                                                                normalmente el poster del evento.</p>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12\">
                                                                    <label for=\"file\" class=\"btn btn-primary\">
                                                                        <span class=\"glyphicon glyphicon-picture\"></span>
                                                                        <strong>Seleccione un archivo</strong>
                                                                    </label>
                                                                    <input type=\"file\" name=\"file[]\" id=\"file\" class=\"inputfile\" data-multiple-caption=\"{count} files selected\" multiple />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Fin Fila 1 -->
                                            <div class=\"row mb10\"><!-- Fila 2 -->
                                                <div class=\"col-sm-12\">
                                                    <div class=\"panel panel-default\" id=\"fotos\">
                                                        <div class=\"panel-heading\">
                                                            <h3>
                                                                <span class=\"fa fa-dropbox\"></span>
                                                                Galer&iacute;a de Videos
                                                            </h3>
                                                        </div>
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12\">
                                                                    <p class=\"alerta\" id=\"videosCargados\">
                                                                    Sube videos sobre tus eventos para que tus admiradores sepan de que vas.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-sm-12\">
                                                                    <label for=\"file2\" class=\"btn btn-primary\">
                                                                        <span class=\"glyphicon glyphicon-facetime-video\"></span>
                                                                        <strong>Seleccione un archivo</strong>
                                                                    </label>
                                                                    <input type=\"file\" name=\"file2[]\" id=\"file2\" class=\"inputfile\" data-multiple-caption=\"{count} files selected\" multiple />
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
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salaPaso2");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"anterior3\" data-toggle=\"tooltip\" title=\"Anterior - Datos de contacto\">
                                            <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                            Anterior                                            
                                        </a>
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                        <button type=\"submit\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"siguiente3\" data-toggle=\"tooltip\" title=\"Resumen\">
                                            Siguiente
                                            <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                        </button>
                                    </div>
                                </div><!-- Fin de Botones --> 
                                </form><!-- Fin formularioMultimedia-->
                            </div><!-- Fin Panel Body -->
                        </div><!-- Fin Panel -->
                    </div><!-- Fin Paso 3 -->
                </div><!-- Fin Video, Fotos y discografía -->
            </div>
        </div>
    </div>
";
    }

    // line 355
    public function block_javascripts($context, array $blocks = array())
    {
        // line 356
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 361
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
    /************************Calendario*****************************************/
            \$('.datepicker-me').datepicker({
                    format: \"dd/mm/yyyy\",
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
    </script>
";
    }

    public function getTemplateName()
    {
        return "salas/paso3v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 361,  440 => 360,  435 => 358,  429 => 356,  426 => 355,  401 => 334,  267 => 203,  260 => 199,  206 => 147,  203 => 146,  198 => 139,  195 => 138,  191 => 134,  189 => 133,  186 => 132,  61 => 11,  56 => 9,  52 => 8,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/paso3v2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/paso3v2.html.twig");
    }
}
