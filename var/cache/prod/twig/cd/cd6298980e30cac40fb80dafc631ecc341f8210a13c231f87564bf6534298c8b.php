<?php

/* eventos/paso1v2.html.twig */
class __TwigTemplate_5c9765da64aa2103ad21ed46a8a5d0cac93922e9c807c1df9202efbc4bbfb1ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "eventos/paso1v2.html.twig", 2);
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
        echo "Busco Concierto | Paso 1";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
    <link href=\"";
        // line 8
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
        .circulo{
            display:inline-block;
            font-family:HelveticaNarrow, Helvetica, Arial;
            speak:none;
            font-style:normal;
            font-weight:normal;
            font-variant:normal;
            text-transform:none;
            text-rendering:auto;
            line-height:1;
            -webkit-font-smoothing:antialiased;
            -moz-osx-font-smoothing:grayscale
        }
        .tituloInfo{
            color: #00B7EB;
        }
        .siguiente{
            right: 5px;
        }
        .botonAgregar{
            margin-top: 10px;
        }
        .iconoCerrar{
            color: #00B7EB;
            padding-left: 5px;
            padding-right: 5px;
        }
        .estilosAgregados{
            background-color: #f1f1f1;
        }
        </style>
        <link href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 95
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/paso1v2.html.twig", 96)->display(array_merge($context, array("bgImage" => (        // line 97
(isset($context["directorio_imagenes_public"]) ? $context["directorio_imagenes_public"] : null) . "backgrounds/bg3.jpg"), "subheaderTitle" => "PROPONER CONCIERTO: Paso 1")));
    }

    // line 101
    public function block_steps($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "eventos/paso1v2.html.twig", 102)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 109
    public function block_customContent($context, array $blocks = array())
    {
        // line 110
        echo "    <div class=\"container\"><!-- Contenido -->
        <div class=\"row background-light-grey\"><br></div>
        <div class=\"hidden-xs hidden-sm col-md-12 without-padding-right without-padding-left\">
            <ul class=\"steps nav nav-pills\">
                <li role=\"presentation\" id=\"step-1\" class=\"active\">
                    <a href=\"\">
                        1
                    </a>
                    <span>Informaci&oacute;n general</span>
                </li>
                <li class=\"divider\">
                    <span>
                        <hr class=\"hr-solid\">
                    </span>
                </li>
                <li role=\"presentation\" id=\"step-2\" class=\"\">
                    <a href=\"\">
                        2
                    </a>
                    <span>¿D&oacute;nde?</span>
                </li>
                <li class=\"divider\">
                    <span>
                        <hr class=\"hr-solid\">
                    </span>
                </li>
                <li role=\"presentation\" id=\"step-3\" class=\"\">
                    <a href=\"\">
                        3
                    </a>
                    <span>¿Cu&aacute;ndo?</span>
                </li>
                <li class=\"divider\">
                    <span>
                        <hr class=\"hr-solid\">
                    </span>
                </li>
                <li role=\"presentation\" id=\"step-4\" class=\"\">
                    <a href=\"\">
                        4
                    </a>
                    <span>Entradas</span>
                </li>
                <li class=\"divider\">
                    <span>
                        <hr class=\"hr-solid\">
                    </span>
                </li>
                <li role=\"presentation\" id=\"step-5\" class=\"\">
                    <a href=\"\">
                        5
                    </a>
                    <span>Resumen</span>
                </li>
            </ul>
        </div><!-- Fin Pasos -->
        <div id=\"step-1-container\" class=\"row bg-shadow mt40 mb40 pt20 pb20\">
            <div class=\"col-sm-12\">
                <div class=\"panel no-margin panel-primary\">
                    <div class=\"panel-heading\">
                        <strong>Informaci&oacute;n General</strong>
                    </div>
                    <div class=\"panel-body general-container\">
                        <form action=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso2");
        echo "\" method=\"post\" id=\"formulario1\" role=\"form\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                            <div class=\"form-group\">
                                                <label for=\"nombreEvento\">Nombre del Evento <span class=\"required\">*</span></label>
                                                <input id=\"nombreEvento\" name=\"nombreEvento\" required=\"required\" class=\"form-control\" type=\"text\" placeholder=\"Nombre del evento\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <label for=\"estilos\">Estilo(s) Musical(es) <span class=\"required\">*</span></label>
                                            </div>
                                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
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
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <label for=\"descripcionEvento\">Descripci&oacute;n <span class=\"required\">*</span></label>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                <textarea rows=\"6\" cols=\"50\" id=\"descripcionEvento\"
                                                  name=\"descripcionEvento\" required=\"required\" 
                                                  class=\"form-control\" placeholder=\"Describe un poco tu evento\">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"panel panel-default\" id=\"artistasContainer\"><!-- Formulario del artista -->
                                        <div class=\"panel-heading\">Artistas <span class=\"required\">*</span></div>
                                        <div class=\"panel-body\">
                                            ";
        // line 227
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ARTIST")) {
            // line 228
            echo "                                                <p class=\"help-block\">
                                                    Si vas a compartir escenario con otros artistas, adiciónalos aqui, si no, omite este paso.
                                                </p>
                                            ";
        }
        // line 232
        echo "                                            <div class=\"form-group\">
                                                <label for=\"artistas\">Selecciona el o los artistas</label>
                                                <select id=\"artistas\" class=\"form-control js-example-basic-single-multiple\" name=\"artistas[]\" multiple=\"multiple\" ";
        // line 234
        echo ">
                                                    <option value=\"\"></option>
                                                    ";
        // line 236
        if ((array_key_exists("artistas", $context) &&  !(null === (isset($context["artistas"]) ? $context["artistas"] : null)))) {
            // line 237
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["artistas"]) ? $context["artistas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["artista"]) {
                // line 238
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artista"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artista"], "nombre", array()), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artista'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "                                                    ";
        }
        // line 241
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group\">
                                                <label>O Añádelo tu mismo</label>
                                                <div class=\"input-group\">
                                                    <input id=\"nombre-artista\" type=\"text\" placeholder=\"Escribe el nombre del artista\" class=\"form-control\">
                                                    <span class=\"input-group-btn\">
                                                        <button id=\"btnAdicionarArtista\" style=\"height: 42px;\" class=\"btn btn-success\">
                                                            <i class=\"fa fa-paper-plane\"></i> 
                                                            Enviar Invitaci&oacute;n
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class=\"row mt20\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"table-responsive no-margin\">
                                                        <table id=\"artistas-seleccionados\" class=\"table\">
                                                            <thead>
                                                            <tr>
                                                                <th colspan=\"2\">Artistas seleccionados</th>
                                                            </tr>
                                                            </thead><!-- /table header -->
                                                            <tbody>
                                                                ";
        // line 265
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ARTIST")) {
            // line 266
            echo "                                                                    <tr>
                                                                        <td>Tú (";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "artista", array()), "nombre", array()), "html", null, true);
            echo ")</td>
                                                                    </tr>
                                                                ";
        } else {
            // line 270
            echo "                                                                    <tr class=\"no-artist\">
                                                                        <td>No has seleccionado ningun artista</td>
                                                                    </tr>
                                                                ";
        }
        // line 274
        echo "
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Fin de row 1 -->                                   
                            <div class=\"row\"><!-- row 2 -->
                                <div class=\"col-sm-12\">
                                    <div class=\"panel panel-default\" id=\"fotos\">
                                        <div class=\"panel-heading\">
                                            <h3>
                                                <span class=\"fa fa-history\"></span>
                                                Imagen de portada
                                            </h3>
                                        </div>
                                        <div class=\"panel-body\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-12\">
                                                <p class=\"\">Sube una foto de portada para 
                                                mostrar en el encabezado de la 
                                                p&aacute;gina de tu evento.</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    <button type=\"button\" class=\"btn btn-primary\">
                                                        <span class=\"fa fa-plus\"></span>
                                                        Añadir Imagen de portada
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Fin de row 2 --> 
                            <div class=\"row\"><!-- row 3 -->
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
                                                <div class=\"col-sm-12\" id=\"archivosCargados\">
                                                <p class=\"\">Sube fotos sobre tu evento para que 
                                                los visitantes vean de que se trata. 
                                                Tambi&eacute;n debes seleccionar una foto como
                                                perfil, que identifique a tu evento, 
                                                normalmente el poster del evento.</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    <button type=\"button\" class=\"btn btn-primary\">
                                                        <span class=\"fa fa-plus\"></span>Añadir Imagen
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Fin de row 3 --> 
                            <div class=\"row\"><!-- Botones -->
                                <div class=\"col-sx-8 col-sm-9 col-md-10 col-lg-10\"></div>
                                <div class=\"col-sx-4 col-sm-3 col-md-2 col-lg-2\">
                                    <button type=\"submit\" class=\"btn btn-rw btn-primary tags btn-block siguiente\">
                                        Siguiente
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </button>
                                </div>
                            </div><!-- Fin de Botones --> 
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Formulario -->
    </div>
";
    }

    // line 359
    public function block_javascripts($context, array $blocks = array())
    {
        // line 360
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Simple Ajax Uploader -->
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/SimpleAjaxUploader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        /**
         * Funcion que añade un <li> dentro del <ul>
         */
        function agregar(){
            var nuevoLi=document.getElementById(\"estilos\").value;
            if(nuevoLi.length>0){
                if(encontrarItem(nuevoLi)){
                    var li=document.createElement('li');
                    li.id=nuevoLi;
                    li.setAttribute(\"class\",\"list-group-item\");
                    li.setAttribute(\"style\",\"margin-left: 5px; background-color: #ffffff;\")
                    li.innerHTML=nuevoLi+\"<span class=\\\"glyphicon glyphicon-remove iconoCerrar\\\" onclick='eliminar(this)'></span>\";
                    document.getElementById(\"listaDesordenada\").appendChild(li);
                }
            }
            return false;
        }
 
        /**
         * Funcion que busca si existe ya el <li> dentrol del <ul>
         * Devuelve true si no existe.
         */
        function encontrarItem(contenido){
            var el = document.getElementById(\"listaDesordenada\").getElementsByTagName(\"li\");
            for (var i=0; i<el.length; i++){
                var texto=el[i].innerHTML;
                if(texto.indexOf(contenido)>=0){ 
                    return false;
                }
            }
            return true;
        }
 
        /**
         * Funcion para eliminar los elementos
         * Tiene que recibir el elemento pulsado
         */
        function eliminar(elemento){
            var id=elemento.parentNode.getAttribute(\"id\");
            node=document.getElementById(id);
            node.parentNode.removeChild(node);
        }
    </script>
    <script>
        \$(document).ready(function(){
/********Estilos musicales****************************************************/
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });
            //Accion del boton Atras
            \$('.btn-back-artista').on('click',function(e){
                e.preventDefault();

                wait('.container');

                var step=\$(this).attr('data-step');

                //ocultar la region actual

                if(step>1){
                    var regionActual=\"#step-\"+step+\"-container\";

                    \$(regionActual).hide();

                    var newStep=step-1;

                    var regionAnterior=\"#step-\"+newStep+\"-container\";

                    \$(regionAnterior).fadeIn();

                    //actualizar los items del listado de steps

                    updateItems(newStep);
                }

                endWait('.container');
            });


            //Action del boton submit de los forms
            \$('.btn-submit-artista').on('click',function(e){
                e.preventDefault();
                var step=\$(this).attr('data-step');
                var validator=null;
                if(step==1){
                    validator=validator1;
                }
                else if(step==2){
                    validator=validator2;
                }
                else if(step==3){
                    validator=validator3;
                }
                //validaar primero el form
                if(validator.form()){
                    wait('.container');
                    var selector=\"#step-\"+step+\"-form\";
                    var \$form=\$(selector);
                    //limpiar todos los errores
                    \$('.form-error').remove();
                    //procesar el form
                    \$.ajax(\$form.attr('action'),{
                        dataType:\"json\",
                        type:\"post\",
                        data:\$form.serialize()
                    }).done(function(response){
                        if(!response[0]){
                            //buscar los errores y posicionarlos en los campos correspondientes
                            var errores=response[1];

                            for(var i=0;i<=errores.length;i++){
                                var sel=\"#\"+errores[i]['id'];

                                var error='<span class=\"error\" style=\"color:red;font-weight: bold;\">'+errores[i]['error']+'</span>';

                                \$(sel).closest('form').find(\"label[for='\" + \$(sel).attr( \"id\" ) + \"']\").append(\$(error));
                            }

                        }
                        else{
                            //obtener el paso siguiente

                            var nextStep=response[1];

                            if(nextStep==-1){
                                //TODO:fin del Wizard, redireccionar para el area de cliente

                                alert('Fin del Wizard, redireccionamos para el area de cliente, cuando este lista ;)');
                            }
                            else{
                                var stepContainer=\"#step-\"+step+\"-container\";

                                \$(stepContainer).hide();

                                var stepContainer=\"#step-\"+nextStep+\"-container\";

                                \$(stepContainer).fadeIn();

                                //marcar el item de la lista de steps
                                updateItems(nextStep);

                                jQuery('html, body').animate({
                                    scrollTop: jQuery('div.container').offset().top - 50
                                }, 1500);
                            }
                        }
                    });

                    endWait('.container');
                }
            });
        });

        function updateItems(nextStep){
            \$('ul.steps > li').each(function(){
                \$(this).removeClass('active');

            });

            var selectorStep=\"ul.steps > li#step-\"+nextStep;

            \$(selectorStep).addClass('active');
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "eventos/paso1v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 363,  467 => 361,  462 => 360,  459 => 359,  371 => 274,  365 => 270,  359 => 267,  356 => 266,  354 => 265,  328 => 241,  325 => 240,  314 => 238,  309 => 237,  307 => 236,  303 => 234,  299 => 232,  293 => 228,  291 => 227,  234 => 173,  169 => 110,  166 => 109,  161 => 102,  158 => 101,  154 => 97,  152 => 96,  149 => 95,  143 => 93,  55 => 8,  51 => 7,  47 => 6,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/paso1v2.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/eventos/paso1v2.html.twig");
    }
}
