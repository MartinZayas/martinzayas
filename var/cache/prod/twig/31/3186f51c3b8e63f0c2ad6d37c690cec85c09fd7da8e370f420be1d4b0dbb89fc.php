<?php

/* artistas/listado2.html.twig */
class __TwigTemplate_2c0915395a233d23cd372385d29bd51b5b469977dec35d3999fe643c3e523a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "artistas/listado2.html.twig", 2);
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
        echo "Busco Concierto | Listado de Artistas";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- Bootstrap Datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />
    <!-- bootstrap slider -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />
    <!-- select 2 -->
    <link href=\"";
        // line 12
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
        .precio{
            font-family: Helvetica;
            font-size: 20px;
        }
        .overflow{
            overflow: hidden;
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
        .listaResultados{
            padding:10px;
            border: 1px solid #D2D2D2;
            margin-left: 5px;
            background-color: white;
        }
    </style>
";
    }

    // line 101
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "artistas/listado2.html.twig", 102)->display(array_merge($context, array("bgImage" => (        // line 103
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg2.jpg"), "subheaderTitle" => "Se encontraron 4 resultados")));
    }

    // line 107
    public function block_steps($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "artistas/listado2.html.twig", 108)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 115
    public function block_contenido($context, array $blocks = array())
    {
        // line 116
        echo "    <div class=\"container\"><!-- Filtro Artistas -->
        ";
        // line 117
        $this->displayBlock('buscador', $context, $blocks);
        // line 381
        echo "    </div>
";
    }

    // line 117
    public function block_buscador($context, array $blocks = array())
    {
        // line 118
        echo "        <div class=\"row mt20 mb20\">
            <form name=\"formulario1\" id=\"formulario1\" method=\"post\">
            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3 pb20\">
                <h3>Filtrar por</h3>
                <div class=\"row mt30\">
                    <div id=\"filtrosContainer\" class=\"col-xs-12 background-white bg-shadow pt20 pb20 bordesBuscar\">
                        <div class=\"input-group\">
                            <input type=\"text\" id=\"filtroNombre\" name=\"filtroNombre\" 
                              class=\"form-control\" placeholder=\"Nombre Artista\">
                            <div class=\"input-group-btn\">
                                <button type=\"button\" class=\"btn btn-default boton\" type=\"submit\">
                                    <span class=\"glyphicon glyphicon-search\"></span>
                                </button>
                            </div>
                        </div>
                        <label class=\"mt20\" for=\"filtroTipoArtista\">Tipo de Artista</label>
                        <select name=\"filtroTipoArtista[]\" id=\"filtroTipoArtista\" class=\"form-control js-example-basic-single\">
                        <option value=\"\">Seleccione un Tipo de Artista</option>
                            <option value=\"1\">banda</option>
                            <option value=\"2\">solista</option>
                            <option value=\"3\">orquesta</option>
                            <option value=\"8\">tributo</option>
                        </select> 
                        <label class=\"mt20\" for=\"filtroPais\">País</label>
                        <select name=\"pais[]\" id=\"pais\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                            <option value=\"\"></option>     
                            <option value=\"1\">España</option> 
                            <option value=\"2\">M&eacute;xico</option>     
                        </select>
                        <label class=\"mt20\" for=\"filtroProvincia\">Provincia</label>
                        <select id=\"provincia\" name=\"provincia[]\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
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
                        <label class=\"mt20\" for=\"filtroCiudad\">Ciudad</label>
                        <select name=\"ciudad[]\" id=\"ciudad\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                            <option value=\"\"></option>
                            <option value=\"Madrid\">Madrid</option>
                            <option value=\"Barcelona\">Barcelona</option>
                        </select>
                        <label class=\"mt20\" for=\"filtroEstilos\">Estilos</label>
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
                        <label class=\"mt20\" for=\"filtroExperiencia\">Experiencia</label>
                        <select name=\"filtroExperiencia[]\" id=\"filtroExperiencia\" class=\"form-control js-example-basic-single\">
                            <option value=\"\">Seleccione Años Experiencia</option>
                            <option value=\"1\">Menos de 1 año</option>
                            <option value=\"2\">Entre 1 y 2 años </option>
                            <option value=\"3\">Entre 2 y 4 años</option>
                            <option value=\"4\">Entre 4 y 6 años</option>
                            <option value=\"5\">Entre 6 y 10 años</option>
                            <option value=\"6\">Más de 10 años</option>
                        </select>
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
            <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9\">
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
            <div class=\"row mb40 listaResultados bg-shadow overflow bordesResultados\"><!-- Resultados -->
                <div class=\"col-md-12\"><!-- Resultados de la busqueda -->
                    <div class=\"row mb10\"><!-- Fila 1 -->
                        <div class=\"col-md-6\"><!-- Resulatado 1 -->
                            <div class=\"row\">                                
                                <div class=\"col-md-12 resultados\">
                                    <div class=\"capaPrecio\">
                                        <div class=\"\">desde</div>                                        
                                        <div class=\"precio2\"> 300,00 </div>
                                        <div class=\"unidad\">€/und</div>
                                    </div>
                                    <div class=\"imagenEventoIzq\">
                                        <a href=\"";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 1));
        echo "\">
                                        <img class=\"img-responsive\" alt=\"Artista 1\"
                                         src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 textoEvento\">
                                    Artista 1...
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
        // line 314
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 2));
        echo "\">
                                        <img class=\"img-responsive\" alt=\"Artista 2\"
                                         src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista2.png"), "html", null, true);
        echo "\" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 textoEvento\">
                                    Artista 2...
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
                                        <div class=\"precio2\"> 376,00 </div>
                                        <div class=\"unidad\">€/und</div>
                                    </div>
                                    <div class=\"imagenEventoIzq\">
                                        <a href=\"";
        // line 338
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 3));
        echo "\">
                                        <img class=\"img-responsive\" alt=\"Artista 3\"
                                         src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
        echo "\" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 textoEvento\">
                                    Artista 3...
                                </div>
                            </div>
                        </div><!-- Fin Resulatado 3 -->
                        <div class=\"col-md-6\"><!-- Resulatado 4 -->
                            <div class=\"row\">                                
                                <div class=\"col-md-12 resultados\">
                                    <div class=\"capaPrecioDer\">
                                        <div class=\"\">desde</div>                                        
                                        <div class=\"precio2\"> 365,00 </div>
                                        <div class=\"unidad\">€/und</div>
                                    </div>
                                    <div class=\"imagenEventoDer\">
                                        <a href=\"";
        // line 360
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 4));
        echo "\">
                                        <img class=\"img-responsive\" alt=\"Artista 4\"
                                         src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 textoEvento\">
                                    Artista 4...
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

    // line 383
    public function block_javascripts($context, array $blocks = array())
    {
        // line 384
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- select2 -->
    <script src=\"";
        // line 387
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
        return "artistas/listado2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 387,  488 => 385,  483 => 384,  480 => 383,  457 => 362,  452 => 360,  429 => 340,  424 => 338,  399 => 316,  394 => 314,  371 => 294,  366 => 292,  190 => 118,  187 => 117,  182 => 381,  180 => 117,  177 => 116,  174 => 115,  169 => 108,  166 => 107,  162 => 103,  160 => 102,  157 => 101,  64 => 12,  59 => 10,  55 => 9,  51 => 8,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artistas/listado2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/artistas/listado2.html.twig");
    }
}
