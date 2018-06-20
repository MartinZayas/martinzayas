<?php

/* eventos/listado.html.twig */
class __TwigTemplate_1c70b1b7c117de1b1ffed4bcc0cb1ba998fffae801af043e477c87b3ca97eace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "eventos/listado.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'steps' => array($this, 'block_steps'),
            'contenido' => array($this, 'block_contenido'),
            'buscador' => array($this, 'block_buscador'),
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
        echo "Busco Concierto | Listado de Eventos ";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
    <!-- select 2 -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <style>
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
        .texto{
            margin-bottom: 5px;
        }
        .errores{
            visibility: hidden;
        }
        .overflow{
            overflow: hidden;
        }
        .border-diagonal {
            width: 240px;
            position: absolute;
            top: 18px;
            right: -80px;
            -moz-transform: rotate(40deg);
            background: deepskyblue;
            color: #fff;
            text-align: center;
            font-family: SansPro-BlackItalic, sans-serif;
            font-size: 14px;
            font-style: normal;
            text-transform: uppercase;
            padding: 10px;
           /* text-shadow: 1px 0px rgb(0, 215, 255), -1px 0px rgb(0, 215, 255),0px 1px rgb(0, 215, 255), 0px -1px rgb(0, 215, 255);*/
            box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
            border-radius: 20px;
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
        .sociales{
            width: auto;
            position: absolute;
            top: 100px;
            right: 0px;
            background-color: #ffffff; /*#B0BED9; Azul gris*/
            color: #ffffff;
        }
        .buscar{
            width: 80%;
        }
        
        h3>a{
            font-family: Beauty, sans-serif;
            font-weight: bold; 
        }
        .textoDireccion{
            font-family: Helvetica, HelveticaCondensada;
        }
        .textoExp{
            font-family: SansPro-Regular, SansPro-Bold, Helvetica, HelveticaCondensada;
        }
        .bordesResultados{
            border-radius: 0px;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .bordesBuscar{
            border-radius: 0px;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
    </style>
";
    }

    // line 132
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 133
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/listado.html.twig", 133)->display(array_merge($context, array("bgImage" => (        // line 134
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg2.jpg"), "subheaderTitle" => "Se encontraron 5 resultados")));
    }

    // line 138
    public function block_steps($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "eventos/listado.html.twig", 139)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 146
    public function block_contenido($context, array $blocks = array())
    {
        // line 147
        echo "    <div class=\"container\"><!-- Filtro Eventos -->
        ";
        // line 148
        $this->displayBlock('buscador', $context, $blocks);
        // line 402
        echo "    </div>
";
    }

    // line 148
    public function block_buscador($context, array $blocks = array())
    {
        // line 149
        echo "        <div class=\"row mt20 mb20\">
            <form name=\"formulario1\" id=\"formulario1\" method=\"post\">
            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4 pb20\">
                <h3>Filtrar por</h3>
                <div class=\"row mt30\">
                    <div id=\"filtrosContainer\" class=\"col-xs-12 background-white bg-shadow pt20 pb20 bordesBuscar\">
                        <div class=\"input-group\">
                            <input type=\"text\" id=\"filtroNombre\" name=\"filtroNombre\" 
                              class=\"form-control\" placeholder=\"Nombre del Evento\">
                            <div class=\"input-group-btn\">
                                <button type=\"button\" class=\"btn btn-default boton\" type=\"submit\">
                                    <span class=\"glyphicon glyphicon-search\"></span>
                                </button>
                            </div>
                        </div>
                        <label class=\"mt20\" for=\"filtroTipoArtista\">Tipo de Artista</label>
                        <select name=\"filtroSala[]\" id=\"filtroSala\" class=\"form-control js-example-basic-single\">
                            <option value=\"0\">Seleccione un Tipo de Sala</option>
                            <option value=\"1\">banda</option>
                            <option value=\"2\">solista</option>
                            <option value=\"3\">orquesta</option>
                            <option value=\"4\">tributo</option>
                        </select>
                        <label class=\"mt20\" for=\"filtroPais\">País</label>
                        <select name=\"filtroPais\" id=\"filtroPais\" 
                                class=\"form-control selectpicker\" style=\"display: none;\">
                            <option value=\"\">Seleccione un país</option>     
                            <option value=\"1\">EspaÃ±a</option>          
                        </select>
                        <label class=\"mt20\" for=\"filtroProvincia\">Provincia</label>
                        <select name=\"filtroProvincia\" id=\"filtroProvincia\" 
                            class=\"form-control selectpicker\" 
                            tabindex=\"-1\" title=\"Provincia\"
                            placeholder=\"Seleccione una provincia\">
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
                        <label class=\"mt20\" for=\"filtroCiudad\">Ciudad</label>
                        <select name=\"filtroCiudad\" id=\"filtroCiudad\" class=\"form-control selectpicker\" tabindex=\"-1\" title=\"Ciudad\">
                            <option value=\"\">Seleccione una ciudad</option>
                            <option value=\"Madrid\">Madrid</option>
                            <option value=\"Barcelona\">Barcelona</option>
                        </select>
                        <label class=\"mt20\" for=\"filtroEstilos\">Estilos</label>
                        <select name=\"filtroEstilos[]\" id=\"filtroEstilos\" multiple=\"multiple\" class=\"form-control selectMultiple\" tabindex=\"-1\">
                            <option value=\"1\">Rock</option>
                            <option value=\"2\">Jazz</option>
                            <option value=\"3\">Pop</option>
                            <option value=\"4\">Salsa</option>
                            <option value=\"5\">Rumba</option>
                            <option value=\"6\">Indie</option>
                            <option value=\"7\">Clasico</option>
                            <option value=\"8\">Cumbia</option>
                            <option value=\"9\">Punk</option>
                            <option value=\"10\">Rap</option>
                            <option value=\"11\">Tap</option>
                        </select>
                        <div class=\"blog-heading mt20\">
                            <h3>Precio</h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 desde\">0 €</div>
                            <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"></div>
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 hasta\">400 €</div>
                        </div>
                        <div class=\"slidecontainer\">
                            <input type=\"range\" min=\"1\" max=\"400\" value=\"50\" class=\"slider\" id=\"myRange\">                            
                        </div>
                        <!--Fin Rango de Precios -->
                        <input type=\"hidden\" value=\"1\" id=\"filtroQueInvocaHidden\">
                        <input type=\"hidden\" value=\"\" id=\"filtroOrderBy\" name=\"filtroOrderBy\">
                        <hr class=\"hr-solid\">
                        <button name=\"filter\" class=\"bg-shadow btn btn-custom-orange btn-lg\" style=\"width:100%;\">
                            <i class=\"fa fa-filter\"></i>
                            Aplicar Filtro
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\">
                <div class=\"row mb10\" style=\"margin-left:20px;\">
                    <div class=\"col-md-10\" style=\"padding-left:0;\">
                    </div>
                    <div class=\"col-md-2\" style=\"padding-left:0;padding-right:0;\">
                        <div class=\"dropdown mb15 pull-right\">
                            <button class=\"btn btn-rw btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\">
                                <i class=\"fa fa fa-sort\"></i>
                                Ordenar Por
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\" class=\"orderByItem\" data-type=\"alf\" id=\"liAlfabe\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> Alfabéticamente (A-Z)</a></li>
                                <li role=\"presentation\" id=\"liAlfabe\" class=\"orderByItem\" data-type=\"alfMax\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> Alfabéticamente (Z-A)</a></li>
                                <li role=\"presentation\" class=\"orderByItem\" data-type=\"minPrecio\" id=\"liMenorPrecio\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> Menor Precio </a></li>
                                <li role=\"presentation\" class=\"orderByItem\" data-type=\"maxPrecio\" id=\"liMayorPrecio\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> Mayor Precio </a></li>
                                <li role=\"presentation\" class=\"orderByItem\" data-type=\"minExperiencia\" id=\"liMenorExperiencia\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> Experiencia: Descendente </a></li>
                                <li role=\"presentation\" class=\"orderByItem\" data-type=\"maxExperiencia\" id=\"liMayorExperiencia\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> Experiencia: Ascendente</a></li>
                            </ul>
                        </div>
                    </div>
                </div>                        
            <div class=\"row mb40 list-item-row bg-shadow overflow bordesResultados\"><!-- Resultados -->
                <div class=\"col-md-12\"><!-- Resultados de la busqueda -->
                    <div class=\"row mb10\"><!-- Fila 1 -->
                        <div class=\"col-md-6\"><!-- Resulatado 1 -->
                            <div class=\"row\">                                
                                <div class=\"col-md-12 resultados\">
                                    <div class=\"capaPrecio\">
                                        <div class=\"\">desde</div>                                        
                                        <div class=\"precio2\"> 400,00 </div>
                                        <div class=\"unidad\">€/und</div>
                                    </div>
                                    <div class=\"imagenEventoIzq\">
                                        <a href=\"";
        // line 313
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 1));
        echo "\">
                                        <img class=\"img-responsive\" alt=\"Evento 1\"
                                         src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento1.png"), "html", null, true);
        echo "\" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 textoEvento\">
                                    Evento 1...
                                </div>
                            </div>
                        </div><!-- Fin Resulatado 1 -->
                        <div class=\"col-md-6\"><!-- Resulatado 2 -->
                            <div class=\"row\">                                
                                <div class=\"col-md-12 resultados\">
                                    <div class=\"capaPrecioDer\">
                                        <div class=\"\">desde</div>                                        
                                        <div class=\"precio2\"> 400,00 </div>
                                        <div class=\"unidad\">€/und</div>
                                    </div>
                                    <div class=\"imagenEventoDer\">
                                        <a href=\"";
        // line 335
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 2));
        echo "\">
                                        <img class=\"img-responsive\" alt=\"Evento 2\"
                                         src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 textoEvento\">
                                    Evento 2...
                                </div>
                            </div>
                        </div><!-- Fin Resulatado 2 -->
                    </div><!-- Fin Fila 1 -->
                    <div class=\"row mb10\"><!-- Fila 2 -->
                        <div class=\"col-md-6\"><!-- Resulatado 3 -->
                            <div class=\"row\">                                
                                <div class=\"col-md-12 resultados\">
                                    <div class=\"capaPrecio\">
                                        <div class=\"\">desde</div>                                        
                                        <div class=\"precio2\"> 380,00 </div>
                                        <div class=\"unidad\">€/und</div>
                                    </div>
                                    <div class=\"imagenEventoIzq\">
                                        <a href=\"";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 3));
        echo "\">
                                        <img class=\"img-responsive\" alt=\"Evento 3\"
                                         src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 textoEvento\">
                                    Evento 3...
                                </div>
                            </div>
                        </div><!-- Fin Resulatado 3 -->
                        <div class=\"col-md-6\"><!-- Resulatado 4 -->
                            <div class=\"row\">                                
                                <div class=\"col-md-12 resultados\">
                                    <div class=\"capaPrecioDer\">
                                        <div class=\"\">desde</div>                                        
                                        <div class=\"precio2\"> 350,00 </div>
                                        <div class=\"unidad\">€/und</div>
                                    </div>
                                    <div class=\"imagenEventoDer\">
                                        <a href=\"";
        // line 381
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 4));
        echo "\">
                                        <img class=\"img-responsive\" alt=\"Evento 4\"
                                         src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 textoEvento\">
                                    Evento 4...
                                </div>
                            </div>
                        </div><!-- Fin Resulatado 4 -->
                    </div><!-- Fin Fila 2 -->
                </div>
            </div>   
            <input type=\"hidden\" id=\"get-ciudades-route\" value=\"/obtener-ciudades\">
        </div>
            </form>
        </div><!--  Fin row  -->
        ";
    }

    // line 404
    public function block_javascripts($context, array $blocks = array())
    {
        // line 405
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
    /***********************Select2********************************************/
        \$(document).ready(function() {
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });            
            \$('.js-example-basic-single').select2();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "eventos/listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 407,  494 => 405,  491 => 404,  468 => 383,  463 => 381,  440 => 361,  435 => 359,  410 => 337,  405 => 335,  382 => 315,  377 => 313,  211 => 149,  208 => 148,  203 => 402,  201 => 148,  198 => 147,  195 => 146,  190 => 139,  187 => 138,  183 => 134,  181 => 133,  178 => 132,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/listado.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/listado.html.twig");
    }
}
