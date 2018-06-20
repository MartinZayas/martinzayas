<?php

/* salas/listado2.html.twig */
class __TwigTemplate_f6fa825fa831cf95587f98d1bbd30b3e472668dfa28089ac9a792be54222091e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/listado2.html.twig", 2);
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
        echo "Busco Concierto | Listado de Salas";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- bootstrap slider -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />
    <!-- select 2 -->
    <link href=\"";
        // line 10
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
        .boton{
            height: 42px;
        }
        .precio{
            font-family: Helvetica;
            font-size: 20px;
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
            width: 220px;
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
        .boton-buscar{
            position: absolute;
            left: 76%;
            width: 20%;
            height: 42px;
        }
        h3>a{
            font-family: Beauty, sans-serif;
            font-weight: bold; 
        }
        .textoDireccion{
            font-family: Helvetica, HelveticaCondensada;
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

    // line 151
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 152
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "salas/listado2.html.twig", 152)->display(array_merge($context, array("bgImage" => (        // line 153
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg2.jpg"), "subheaderTitle" => "Se encontraron 2 resultados")));
    }

    // line 157
    public function block_steps($context, array $blocks = array())
    {
        // line 158
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "salas/listado2.html.twig", 158)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 165
    public function block_customContent($context, array $blocks = array())
    {
        // line 166
        echo "    <div class=\"container\"><!-- Filtro Salas -->
        <div class=\"row mt20 mb20\">
            <form name=\"formulario1\" id=\"formulario1\" method=\"post\">
                <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4 pb20\"><!-- Columna de los filtros -->
                    <h3>Filtrar por</h3>
                    <div class=\"row mt30\">
                        <div id=\"filtrosContainer\" class=\"col-xs-12 background-white pt20 pb20 bordesBuscar\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Buscar Sala\">
                                <div class=\"input-group-btn\">
                                  <button class=\"btn btn-default boton\" type=\"submit\">
                                    <i class=\"glyphicon glyphicon-search\"></i>
                                  </button>
                                </div>
                            </div>
                            <label class=\"mt20\" for=\"filtroSala\">Tipo de Sala</label>
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
                            <div class=\"select2-container form-control selectMultiple\" 
                                 id=\"s2id_filtroProvincia\">
                                <a href=\"javascript:void(0)\" class=\"select2-choice\" tabindex=\"-1\">   
                                  <span class=\"select2-chosen\" id=\"select2-chosen-1\">Seleccione una provincia</span>
                                  <abbr class=\"select2-search-choice-close\"></abbr>   
                                  <span class=\"select2-arrow\" role=\"presentation\">
                                      <b role=\"presentation\"></b>
                                  </span>
                                </a>
                                <label for=\"s2id_autogen1\" class=\"select2-offscreen\">Provincia</label>
                                <input class=\"select2-focusser select2-offscreen\" 
                                   type=\"text\" aria-haspopup=\"true\" role=\"button\" 
                                   aria-labelledby=\"select2-chosen-1\" id=\"s2id_autogen1\">
                                <div class=\"select2-drop select2-display-none select2-with-searchbox\"> 
                                    <div class=\"select2-search\">  
                                        <label for=\"s2id_autogen1_search\" class=\"select2-offscreen\">
                                            Provincia
                                        </label>       
                                        <input type=\"text\" autocomplete=\"off\" 
                                            autocorrect=\"off\" autocapitalize=\"off\" 
                                            spellcheck=\"false\" class=\"select2-input\" 
                                            role=\"combobox\" aria-expanded=\"true\" 
                                            aria-autocomplete=\"list\" 
                                            aria-owns=\"select2-results-1\" 
                                            id=\"s2id_autogen1_search\" placeholder=\"\">   
                                    </div>   
                                    <ul class=\"select2-results\" role=\"listbox\" id=\"select2-results-1\">   
                                    </ul>
                                </div>
                            </div>
                            <select name=\"filtroProvincia\" id=\"filtroProvincia\" 
                            class=\"form-control selectMultiple\" 
                            tabindex=\"-1\" title=\"Provincia\" style=\"display: none;\"
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
                            <div class=\"select2-container form-control selectMultiple\" 
                                id=\"s2id_filtroCiudad\">
                                <a href=\"javascript:void(0)\" class=\"select2-choice\" tabindex=\"-1\">   
                                    <span class=\"select2-chosen\" id=\"select2-chosen-2\">
                                        Seleccione una ciudad
                                    </span><abbr class=\"select2-search-choice-close\"></abbr>
                                    <span class=\"select2-arrow\" role=\"presentation\"><b role=\"presentation\"></b>
                                    </span>
                                </a>
                                <label for=\"s2id_autogen2\" class=\"select2-offscreen\">Ciudad</label>
                                <input class=\"select2-focusser select2-offscreen\" 
                                  type=\"text\" aria-haspopup=\"true\" role=\"button\" 
                                  aria-labelledby=\"select2-chosen-2\" id=\"s2id_autogen2\">
                                <div class=\"select2-drop select2-display-none select2-with-searchbox\">   
                                    <div class=\"select2-search\">       
                                        <label for=\"s2id_autogen2_search\" class=\"select2-offscreen\">
                                            Ciudad
                                        </label>       
                                        <input type=\"text\" autocomplete=\"off\" 
                                         autocorrect=\"off\" autocapitalize=\"off\" 
                                         spellcheck=\"false\" class=\"select2-input\"
                                         role=\"combobox\" aria-expanded=\"true\" 
                                         aria-autocomplete=\"list\" 
                                         aria-owns=\"select2-results-2\" 
                                         id=\"s2id_autogen2_search\" placeholder=\"\">   
                                    </div>   
                                    <ul class=\"select2-results\" role=\"listbox\" 
                                          id=\"select2-results-2\">   
                                    </ul>
                                </div>
                            </div>
                            <select name=\"filtroCiudad\" id=\"filtroCiudad\" class=\"form-control selectMultiple\" tabindex=\"-1\" title=\"Ciudad\" style=\"display: none;\">
                                <option value=\"\">Seleccione una ciudad</option>
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
                                <input type=\"range\" min=\"1\" max=\"1000\" value=\"50\" class=\"slider\" id=\"myRange\">                            
                            </div>
                            <input type=\"hidden\" value=\"1\" id=\"filtroQueInvocaHidden\">
                            <input type=\"hidden\" value=\"\" id=\"filtroOrderBy\" name=\"filtroOrderBy\">
                            <hr class=\"hr-solid\">
                            <button name=\"filter\" class=\"bg-shadow btn btn-custom-orange btn-lg\" style=\"width:100%;\">
                                <i class=\"fa fa-filter\"></i>
                                Aplicar Filtro
                            </button>
                        </div><!-- Fin fondo blanco -->
                    </div>
                </div><!-- Fin Columna de los filtros -->
                <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\"><!-- Ordenar por -->
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
                    </div><!-- Fin Ordenar por -->
                    <div class=\"row mb40 listaResultados overflow bordesResultados\"><!-- Resultado 1 -->
                        <div class=\"col-md-12\"> <!-- Item 1 -->
                            <div class=\"border-diagonal\">Teatro</div>
                            <div class=\"sociales\"><!-- Redes Sociales -->
                                <a class=\"btn btn-social-icon btn-facebook btn-xs\" href=\"https://www.facebook.com/buscoconcierto\" target=\"_blank\">
                                    <i class=\"fa fa-facebook\"></i>
                                </a>
                                <a class=\"btn btn-social-icon btn-instagram btn-xs\" href=\"https://www.instagram.com/buscoconcierto\" target=\"_blank\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                                <a class=\"btn btn-social-icon btn-twitter btn-xs\" href=\"https://twitter.com/buscoconcierto\" target=\"_blank\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                                <a class=\"btn btn-social-icon btn-youtube btn-xs\" href=\"https://youtu.be/D9W4DLjmoOM\" target=\"_blank\">
                                    <i class=\"fa fa-youtube-play\"></i>
                                </a>
                            </div><!-- Fin redes sociales -->
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <img class=\"img-responsive mb10\" height=\"140px\"
                                      src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\" 
                                      alt=\"Foto\">
                                </div>
                                <div class=\"col-md-8\">
                                    <h3><a href=\"#\">Teatro Español</a></h3>
                                    <hr align=\"left\" class=\"mt15 mb10\" style=\"width:50px;\">
                                    <ul class=\"posted-info\" style=\"width:100%;margin-left:-40px;list-style:none;\">
                                        <li class=\"textoDireccion\">Cortes, Madrid, España</li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-12\">
                                    <hr style=\"margin-top:0;margin-bottom:10px;\" class=\"hr-solid\">
                                    <p class=\"mb10\">
                                        <a href=\"#\" class=\"btn btn-rw btn-primary tags btn-sm\">Rock</a>
                                        <a href=\"#\" class=\"btn btn-rw btn-primary tags btn-sm\">Indie</a>
                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <hr style=\"margin-top:0;margin-bottom:10px;\" class=\"hr-solid\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <a href=\"";
        // line 406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i> Ver detalles</a>                                
                                        </div>
                                        <div class=\"col-md-6\">
                                            <h2 style=\"text-transform: none !important;text-align: right;\">
                                                <span style=\"font-weight: 100\">Desde</span> 400 € </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Fin Item 1 -->
                    </div><!-- Fin del Resultado 1 -->
                    <div class=\"row mb40 list-item-row overflow bordesResultados\"><!-- Resultado 2 -->
                        <div class=\"col-md-12\"> <!-- Item 2 -->
                            <div class=\"border-diagonal\">Auditorio</div>
                            <div class=\"sociales\"><!-- Redes Sociales -->
                                <a class=\"btn btn-social-icon btn-facebook btn-xs\" href=\"https://www.facebook.com/buscoconcierto\" target=\"_blank\">
                                    <i class=\"fa fa-facebook\"></i>
                                </a>
                                <a class=\"btn btn-social-icon btn-instagram btn-xs\" href=\"https://www.instagram.com/buscoconcierto\" target=\"_blank\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                                <a class=\"btn btn-social-icon btn-twitter btn-xs\" href=\"https://twitter.com/buscoconcierto\" target=\"_blank\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                                <a class=\"btn btn-social-icon btn-youtube btn-xs\" href=\"https://youtu.be/D9W4DLjmoOM\" target=\"_blank\">
                                    <i class=\"fa fa-youtube-play\"></i>
                                </a>
                            </div><!-- Fin redes sociales -->
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <img class=\"img-responsive mb10\" src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\">
                                </div>
                                <div class=\"col-md-8\">
                                    <h3><a href=\"#\">Nombre Sala</a></h3>
                                    <hr align=\"left\" class=\"mt15 mb10\" style=\"width:50px;\">
                                    <ul class=\"posted-info\" style=\"width:100%;margin-left:-40px;list-style:none;\">
                                        <li class=\"textoDireccion\">Rojales, Alicante</li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-12\">
                                    <hr style=\"margin-top:0;margin-bottom:10px;\" class=\"hr-solid\">
                                    <p class=\"mb10\">
                                        <a href=\"#\" class=\"btn btn-rw btn-primary tags btn-sm\">Rock</a>
                                        <a href=\"#\" class=\"btn btn-rw btn-primary tags btn-sm\">Indie</a>
                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <hr style=\"margin-top:0;margin-bottom:10px;\" class=\"hr-solid\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <a href=\"";
        // line 460
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i> Ver detalles</a>                                
                                        </div>
                                        <div class=\"col-md-6\">
                                            <h2 style=\"text-transform: none !important;text-align: right;\">
                                                <span style=\"font-weight: 100\">Desde</span> 400 € </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Fin Item 2 -->
                    </div><!-- Fin Resultado 2 -->
                </div>
            </form>
        </div>
    </div><!-- Fin filtro de salas -->
";
    }

    // line 477
    public function block_javascripts($context, array $blocks = array())
    {
        // line 478
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        var slider = document.getElementById(\"myRange\");
        //var output = document.getElementById(\"demo\");
        //output.innerHTML = slider.value;
        //Obtiene el valor del cache    
        slider.oninput = function() {
          //output.innerHTML = this.value;
        }
        /*Para el menu principal*/
        \$('#fixed-navbar').affix({
            offset: {
                top: \$('.top-bar').height()
            }   
        });
    </script>
    <!-- select2 -->
    <script src=\"";
        // line 496
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
        return "salas/listado2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 496,  557 => 479,  552 => 478,  549 => 477,  528 => 460,  502 => 437,  468 => 406,  441 => 382,  223 => 166,  220 => 165,  215 => 158,  212 => 157,  208 => 153,  206 => 152,  203 => 151,  58 => 10,  53 => 8,  49 => 7,  45 => 6,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/listado2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/listado2.html.twig");
    }
}
