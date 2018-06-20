<?php

/* eventos/paso2v2.html.twig */
class __TwigTemplate_6e9011944d121cf91e4d73e5251fdfd1473c2e9a996725574eea26c5a5d9a385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("eventos/paso1v2.html.twig", "eventos/paso2v2.html.twig", 2);
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
        return "eventos/paso1v2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto | Paso 2";
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
    <!-- Bootstrap Datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />
    <!-- bootstrap slider -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 14
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
        .textoPais{
            color: #000000;
            text-align: justify;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            font-weight: bold;
            font-style: normal; 
        }
        .textoProvincia{
            color: #000000;
            text-align: justify;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            font-weight: bold;
            font-style: normal; 
        }
        .textoCiudad{
            margin-top: 5px;
            color: #000000;
            text-align: justify;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            font-weight: bold;
            font-style: normal; 
        }
        .textoDireccion{
            margin-top: 5px;
            color: #000000;
            text-align: justify;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            font-weight: bold;
            font-style: normal; 
        }
        .tPais{
            width: 100px;
            height: 34px;
            border-color: #ffffff;
            border: 0px;
            border-style: none;
            display: block;
            color: #000000;
            text-align: justify;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            z-index: 1;
        }
    /****************** Filtros *******************************************/
        .tituloFiltro{
            border-bottom: 2px solid #00B7EB;
        }
        .etiqueta{
            margin-top: 10px;
        }
        /************* Margen de precios ***********************************/
        .desde{
            text-align: left;
            font-weight: bold;
        }
        .hasta{
            text-align: right;
            font-weight: bold;
        }
        .slidecontainer {
            margin-top: 15px;
            width: 100%;
        }
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 10px;
            border-radius: 5px;
            background: #205081; /* #d3d3d3; Gris */
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
/************************* Estilos ******************************************/
        .botonAgregar{
            padding-top: 10px;
            margin-top: 0px;
        }
        .iconoCerrar{
            color: #00B7EB;
            padding-left: 5px;
            padding-right: 5px;
        }
        .estilosAgregados{
            background-color: #f1f1f1;
        }
        .itemAgregado{
            margin-left: 5px; 
            margin-bottom: 5px;
            background-color: #ffffff;
        }
        </style>
        <link href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 189
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 190
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/paso2v2.html.twig", 190)->display(array_merge($context, array("bgImage" => (        // line 191
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg3.jpg"), "subheaderTitle" => "PROPONER CONCIERTO: Paso 2")));
    }

    // line 195
    public function block_steps($context, array $blocks = array())
    {
        // line 196
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "eventos/paso2v2.html.twig", 196)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 203
    public function block_customContent($context, array $blocks = array())
    {
        // line 204
        echo "    <div class=\"container\"><!-- Contenido -->
        <div class=\"row mt20 background-light-grey\">
            <div class=\"hidden-xs hidden-sm col-md-12 without-padding-right without-padding-left\">
                <ul class=\"steps nav nav-pills\">
                    <li role=\"presentation\" id=\"step-1\" class=\"\">
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
                    <li role=\"presentation\" id=\"step-2\" class=\"active\">
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
        </div>
        <div class=\"row\">
            <form id=\"filtroEventos\" name=\"filtroLocales\" action=\"#\" method=\"post\" role=\"form\" class=\"form-inline\">
                <!-- Filtros -->
                <div class=\"panel\">
                    <div class=\"panel-heading\">
                        <div class=\"heading\">
                            <div class=\"row\">
                                <div class=\"col-sx-11 col-sm-11 col-md-11 col-lg-11\">
                                    <h3 class=\"mt5 ml5\">
                                        Filtrar Locales por:
                                    </h3>
                                </div>
                                <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\">
                                    <a data-toggle=\"collapse\" href=\"#collapse1\" onclick=\"cambio();\">
                                        <span class=\"glyphicon glyphicon-chevron-up\" id=\"icono\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"collapse1\" class=\"panel-collapse collapse in\">
                        <div class=\"panel-body\">
                            <div class=\"row mb5\">
                                <div class=\"col-sx-6 col-sm-6 col-md-1 col-lg-1\"><!-- Nombre -->
                                    <label class=\"etiqueta\" for=\"nombre\">Nombre:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-3 col-lg-3\">
                                    <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del local &oacute; sala\">
                                </div><!-- Fin del nombre -->
                                <div class=\"col-sx-6 col-sm-6 col-md-1 col-lg-1\"><!-- País -->
                                    <label class=\"etiqueta\" for=\"pais\">Pa&iacute;s:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-3 col-lg-3\">
                                    <select name=\"pais[]\" id=\"pais\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                                        <option value=\"\"></option>     
                                        <option value=\"1\">España</option> 
                                        <option value=\"2\">M&eacute;xico</option>     
                                    </select>
                                </div><!-- Fin País -->
                                <div class=\"col-sx-6 col-sm-6 col-md-1 col-lg-1\"><!-- Provincia -->
                                    <label class=\"etiqueta\" for=\"ciudad\">Provincia:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-3 col-lg-3\">
                                    <select id=\"provincia\" name=\"provincia[]\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                                        <option value=\"\"></option>
                                        <option value=\"1\">Albacete</option>
                                        <option value=\"2\">Alicante</option>
                                    </select>
                                </div><!-- Fin Provincia -->                         
                            </div><!-- Fin fila 1 -->
                            <div class=\"row mb5\">                                
                                <div class=\"col-sx-6 col-sm-6 col-md-1 col-lg-1\"><!-- Ciudad -->
                                    <label class=\"etiqueta\" for=\"ciudad\">Ciudad:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-3 col-lg-3\">
                                    <select name=\"ciudad[]\" id=\"ciudad\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                                        <option value=\"\"></option>     
                                        <option value=\"Madrid\">Madrid</option>
                                        <option value=\"Barcelona\">Barcelona</option>
                                    </select>
                                </div><!-- Fin Ciudad -->
                                <div class=\"col-sx-6 col-sm-6 col-md-3 col-lg-2\"><!-- Estilos -->
                                    <label class=\"etiqueta\" for=\"estilos\">Estilo(s) Musical(es):</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-5 col-lg-6\">
                                    <select id=\"estilos\" class=\"form-control js-example-basic-single-multiple\" name=\"estilos[]\" multiple=\"multiple\">
                                        <option value=\"Cl&aacute;sica\">Cl&aacute;sica</option>
                                        <option value=\"Cumbia\">Cumbia</option>
                                        <option value=\"Dance\">Dance</option>
                                        <option value=\"G&oacute;spel\">G&oacute;spel</option>
                                        <option value=\"Indie\">Indie</option>
                                        <option value=\"Jazz\">Jazz</option>
                                        <option value=\"Pop\">Pop</option>
                                        <option value=\"Punk\">Punk</option>
                                        <option value=\"Rap\">Rap</option>
                                        <option value=\"Rock\">Rock</option>
                                        <option value=\"Rumba\">Rumba</option>
                                        <option value=\"Salsa\">Salsa</option>
                                        <option value=\"Tap\">Tap</option>
                                    </select>  
                                </div><!-- Fin Estilos -->
                            </div><!-- Fin fila 2 -->
                            <div class=\"row mb5\"><!-- Fila 3 -->
                                <div class=\"col-sx-6 col-sm-6 col-md-2 col-lg-2\">
                                    <label class=\"etiqueta\" for=\"fechaInicio\">Rango de Fechas:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-3 col-lg-3\">
                                    <input type=\"text\" name=\"daterange\" class=\"form-control\" value=\"01/01/2018 - 01/31/2018\" />
                                </div>  
                                <div class=\"col-sx-6 col-sm-6 col-md-2 col-lg-2\">
                                    <label class=\"etiqueta\" for=\"precio\">Rango de Precio:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-4 col-lg-4\">
                                    <div class=\"slidecontainer\">
                                        <input type=\"range\" min=\"1\" max=\"1000\" value=\"1\" class=\"slider\" id=\"myRange\">                            
                                    </div>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-5 col-lg-5\"></div>
                            </div><!-- Fin Fila 3-->
                            <div class=\"row mb10\"><!-- fila 4 -->
                                <div class=\"col-sx-6 col-sm-6 col-md-7 col-lg-7\"></div>
                                <div class=\"col-sx-6 col-sm-6 col-md-4 col-lg-4\">
                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 desde\">0 €</div>
                                    <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                    <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5 hasta\">1000 €</div>
                                </div>
                            </div><!-- Fin fila 4 -->
                            <div class=\"row mb5\"><!-- Fila 5 -->
                                <div class=\"hidden-xs hidden-sm col-md-4 col-lg-4\"></div>
                                <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                    <buttom type=\"reset\" name=\"cancelar\" class=\"btn btn-info btn-block\">Cancelar</buttom>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                    <buttom type=\"submit\" name=\"aceptar\" class=\"btn btn-primary btn-block\">Aplicar</buttom>
                                </div>
                                <div class=\"hidden-xs hidden-sm col-md-4 col-lg-4\"></div>
                            </div><!-- Fin fila 5 -->
                        </div><!-- Fin del panel body -->
                    </div>
                </div>
            </form><!-- Fin Filtros -->
        </div>
        <div id=\"step-1-container\" class=\"row background-white mb40 pt20 pb20\">
            <div class=\"col-sm-12\">
                <div class=\"panel no-margin panel-primary\">
                    <div class=\"panel-heading\">
                        <strong>Establece tu localizaci&oacute;n</strong>
                    </div>
                    <div class=\"panel-body general-container\">
                        <form action=\"#\" method=\"post\" id=\"formulario2\" role=\"form\">
                            <div class=\"row mb10\"><!-- Fila 1 -->
                                <div class=\"col-sm-6\"><!-- Locales -->
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div id=\"etiquetaLocal\" class=\"textoLocal\">Locales <span class=\"required\">*</span></div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <select id=\"local\" name=\"local[]\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\" required=\"required\">
                                                <option value=\"\"></option>
                                                ";
        // line 402
        if ((array_key_exists("locales", $context) &&  !(null === ($context["locales"] ?? null)))) {
            // line 403
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 404
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "nombre", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            echo "                                                ";
        }
        // line 407
        echo "                                            </select>
                                        </div>
                                    </div>
                                </div><!-- Fin Locales -->
                                <div class=\"col-sm-6\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div id=\"etiquetaLocal2\" class=\"textoLocal\">¿No encuentras tu sala o recinto? Añade una nueva: <span class=\"required\">*</span></div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-btn\">
                                                    <a href=\"";
        // line 421
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salaPaso1");
        echo "\" id=\"btnAdicionarLocal\" class=\"boton btn btn-success btn-block botonAgregar\">
                                                        <i class=\"fa fa-plus\"></i> 
                                                        Añadir Local/Sala
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Fin Fila 1 -->
                            <div class=\"row mb10\"><!-- Fila 1 -->
                                <div class=\"col-sm-6\"><!-- País -->
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div id=\"etiquetaPais\" class=\"textoPais\">Pa&iacute;s <span class=\"required\">*</span></div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">                                            
                                            <input type=\"text\" class=\"form-control\" id=\"pais2\" name=\"pais2\"  readonly=\"readonly\" required=\"required\">
                                        </div>
                                    </div>
                                </div><!-- Fin País -->
                                <div class=\"col-sm-6\"><!-- Provincia -->
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div id=\"etiquetaProvincia\" class=\"textoProvincia\">Provincia <span class=\"required\">*</span></div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">                                            
                                            <input type=\"text\" class=\"form-control\" id=\"provincia2\" name=\"provincia2\"  readonly=\"readonly\" required=\"required\">
                                        </div>
                                    </div>
                                </div><!-- Fin Provincia -->
                            </div><!-- Fin Fila 1 -->
                            <div class=\"row mb10\"><!-- Fila 2 -->
                                <div class=\"col-sm-6\"><!-- Ciudad -->
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div id=\"etiquetaCiudad\" class=\"textoCiudad\">Ciudad <span class=\"required\">*</span></div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">                                            
                                            <input type=\"text\" class=\"form-control\" id=\"ciudad2\" name=\"ciudad2\"  readonly=\"readonly\" required=\"required\">
                                        </div>
                                    </div>
                                </div><!-- Fin Ciudad -->
                                <div class=\"col-sm-6\"><!-- Direccion -->
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div id=\"etiquetaDireccion\" class=\"textoDireccion\">Direcci&oacute;n <span class=\"required\">*</span></div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">                                            
                                            <input type=\"text\" class=\"form-control\" id=\"direccion2\" name=\"direccion2\"  readonly=\"readonly\" required=\"required\">
                                        </div>
                                    </div>
                                </div><!-- Fin Direccion -->
                            </div><!-- Fin Fila 2 -->
                            <div class=\"row\"><!-- Botones -->
                                <div class=\"col-sx-4 col-sm-6 col-md-8 col-lg-8\"></div>
                                <div class=\"col-sx-4 col-sm-3 col-md-2 col-lg-2\">
                                    <a href=\"";
        // line 486
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\">
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                        Anterior
                                    </a>
                                </div>
                                <div class=\"col-sx-4 col-sm-3 col-md-2 col-lg-2\">
                                    <a href=\"";
        // line 492
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso3");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\">
                                        Siguiente
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </a>
                                </div>
                            </div><!-- Fin de Botones -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 505
    public function block_javascripts($context, array $blocks = array())
    {
        // line 506
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Include Date Range Picker -->
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\" />
    <!-- select2 -->
    <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function(){
/********Locales***************************************************************/
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });
            \$('.js-example-basic-single').select2();
        });
/************* Rango de Fechas ************************************************/
        \$('input[name=\"daterange\"]').daterangepicker({
            locale: {
                format: 'DD-MM-YYYY',
                separator: '-',
                applyLabel: 'Aplicar',
                cancelLabel: 'Cancelar',
                weekLabel: 'S',
                daysOfWeek: [
                    \"Do\",
                    \"Lu\",
                    \"Ma\",
                    \"Mi\",
                    \"Ju\",
                    \"Vi\",
                    \"Sa\"
                ],
                monthNames: [
                    \"Enero\",
                    \"Febrero\",
                    \"Marzo\",
                    \"Abril\",
                    \"Mayo\",
                    \"Junio\",
                    \"Julio\",
                    \"Agosto\",
                    \"Septiember\",
                    \"Octubre\",
                    \"Noviembre\",
                    \"Diciembre\"
                ],
            },
            startDate: '01-01-2018',
            endDate: '31-12-2018',
        });        
        \$('.datepicker-me').datepicker({
            format: \"dd/mm/yyyy\",
            todayBtn: true,
            language: \"es\",
        });         
/************************** Para mostrar u ocultar filtros*********************/        
        function cambio(){
            var clase= document.getElementById(\"icono\").getAttribute(\"class\");
            if(clase==\"glyphicon glyphicon-chevron-down\"){
                document.getElementById(\"icono\").setAttribute(\"class\",\"glyphicon glyphicon-chevron-up\");
            }
            else{
                document.getElementById(\"icono\").setAttribute(\"class\",\"glyphicon glyphicon-chevron-down\");
            }
        }        
    </script>
";
    }

    public function getTemplateName()
    {
        return "eventos/paso2v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 515,  624 => 514,  619 => 512,  609 => 506,  606 => 505,  589 => 492,  580 => 486,  512 => 421,  496 => 407,  493 => 406,  482 => 404,  477 => 403,  475 => 402,  275 => 204,  272 => 203,  267 => 196,  264 => 195,  260 => 191,  258 => 190,  255 => 189,  249 => 187,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  56 => 9,  51 => 7,  47 => 6,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/paso2v2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/paso2v2.html.twig");
    }
}
