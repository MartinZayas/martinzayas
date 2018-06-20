<?php

/* salas/listado.html.twig */
class __TwigTemplate_3e181a45b20fe682b46bf374658bc575b837e80844664c8bf8850e5474b3da05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "salas/listado.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'BarraSuperior' => array($this, 'block_BarraSuperior'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <!-- Royal Preloader CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/royal_preloader.css"), "html", null, true);
        echo "\">
    <!-- jQuery Files -->
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap select -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <!-- Stylesheets -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery.snippet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/waitMe/waitMe.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Icon Fonts -->
    <link href='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <!-- Magnific Popup -->
    <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/magnific-popup.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
";
        // line 28
        $this->displayBlock('cssPersonalizados', $context, $blocks);
        // line 226
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 28
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 29
        echo "    <!-- bootstrap slider -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />
    <!-- select 2 -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <style>
/************************ Menu ************************************************/
        .top-bar-fixed{
            position: fixed !important;
            width: 100%;
            top: 0px;
            z-index: 100;
        }
        .affix {
            position: fixed !important;
            top: 31px !important;
            width: 100%;
            z-index: 100 !important;
        }
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
/************************ Resultados ******************************************/        
        .listaResultados{
            padding:10px;
            border: 1px solid #D2D2D2;
            margin-left: 5px;
            background-color: white;
        }
        .textoNombre{
            color: #616161;
            text-align: justify;
            font-family: SansPro, sans-serif;
            font-size: 16px;
            font-style: normal;
        }
        .textoDireccion{
            color: #000000;
            text-align: justify;
            font-family: SansPro-BlackItalic, sans-serif;
            font-size: 14px;
            font-style: normal;
        }
        .textoTipo{
            color: #000000;
            text-align: center;
            font-family: SansPro-BlackItalic, sans-serif;
            font-size: 14px;
            font-style: normal;
        }
        .favorito{
            color: #616161;
        }
        .noFavorito{
            color: #616161;
        }
        .compartir{
            color: #616161;
        }
        .label-orange{
            background-color: #FF8000;
            color:#FFFFFF;
        }
        .icono{
            color: red;
        }
    </style>
";
    }

    // line 231
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <div id=\"bg-boxed\"><!-- Begin Boxed or Fullwidth Layout -->
        <div class=\"";
        // line 233
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                ";
        // line 236
        $this->displayBlock('BarraSuperior', $context, $blocks);
        // line 312
        echo "                ";
        $this->loadTemplate("registro/registro.html.twig", "salas/listado.html.twig", 312)->display($context);
        // line 313
        echo "                <!-- Begin Navigation -->
                ";
        // line 314
        $this->loadTemplate("default/menu.html.twig", "salas/listado.html.twig", 314)->display($context);
        // line 315
        echo "        ";
        $this->displayBlock('headerParallax', $context, $blocks);
        // line 321
        echo "        </header>
";
        // line 322
        $this->displayBlock('contenido', $context, $blocks);
        // line 685
        echo "    ";
        $this->loadTemplate("default/pie.html.twig", "salas/listado.html.twig", 685)->display($context);
        echo "       
        <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
    </div>
";
    }

    // line 233
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 236
    public function block_BarraSuperior($context, array $blocks = array())
    {
        echo "<!-- Begin Top Bar -->
                <div class=\"top-bar\" id=\"fixed-topBar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- ¿Como funciona? -->
                            <div class=\"col-sm-5 col-md-5 col-lg-5\">
                                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                    <li style=\"border-left:none;\"><a href=\"";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comprarEntradas");
        echo "\">¿Cómo comprar entradas?</a></li>
                                    <li style=\"border-left:none;\"><a href=\"#contacto\">Contacto</a></li>
                                </ul>
                            </div>
                            <!-- Social Buttons -->
                            <div class=\"col-sm-7 col-md-7 col-lg-7 text-right\">
                                <ul class=\"topbar-list list-inline\">
                                    <li>
                                        <a class=\"btn btn-social-icon btn-rw btn-primary btn-xs\" href=\"https://twitter.com/buscoconcierto\" target=\"_blank\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </a>
                                        <a class=\"btn btn-social-icon btn-rw btn-primary btn-xs\" href=\"https://www.instagram.com/buscoconcierto\" target=\"_blank\">
                                            <i class=\"fa fa-instagram\"></i>
                                        </a>
                                        <a class=\"btn btn-social-icon btn-rw btn-primary btn-xs\" href=\"https://www.facebook.com/buscoconcierto\" target=\"_blank\">
                                            <i class=\"fa fa-facebook\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle=\"modal\" data-target=\"#profecionales\">&Aacute;rea Profesionales</a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            Regístrate<span class=\"caret\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroEspectador");
        echo "\">Soy Espectador</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a data-toggle=\"modal\" data-target=\"#login\">Iniciar Sesión</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--/row -->
                    </div>
                </div> <!-- End Top Bar -->
                <!-- Login -->
                <div class=\"modal fade\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\">
                        <div class=\"modal-content\">
                            <form action=\"";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicioSesion", array("login" => "usuario1"));
        echo "\" method=\"post\" role=\"form\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
                                <h4 class=\"modal-title\" id=\"loginLabel\">Iniciar Sesión</h4>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"form-group\">
                                    <label for=\"exampleInputEmail1\">Email</label>
                                    <input type=\"email\" name=\"_username\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Introduce tu email\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputPassword1\">Contraseña</label>
                                    <input type=\"password\" name=\"_password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Introduce tu contraseña\">
                                </div>
\t\t\t\t<small><a href=\"#\">¿Olvidaste tu contraseña?</a></small>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"submit\" name=\"_login\" class=\"btn btn-rw btn-primary\" style=\"float:left\">Entrar</button>
\t\t\t\t&nbsp;<small>¿No tienes una cuenta? <a data-toggle=\"modal\" data-target=\"#register\" href=\"#\">Regístrate</a></small><!--data-dismiss=\"modal\"-->
                            </div>
                            </form><!-- /form -->
                        </div><!-- /modal content -->
                    </div><!-- /modal dialog -->
                </div><!-- /modal holder -->
                <!-- End Login -->
                ";
    }

    // line 315
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 316
        echo "            ";
        $this->loadTemplate("default/subheader.html.twig", "salas/listado.html.twig", 316)->display(array_merge($context, array("bgImage" => (        // line 317
(isset($context["directorio_imagenes_public"]) ? $context["directorio_imagenes_public"] : null) . "backgrounds/bg10.jpg"), "subheaderTitle" => "Se encontraron 3 resultados")));
        // line 320
        echo "        ";
    }

    // line 322
    public function block_contenido($context, array $blocks = array())
    {
        // line 323
        echo "    <div class=\"container\"><!-- Contenedor -->
        <div class=\"row mt20 mb20\">
            <form name=\"formulario1\" id=\"formulario1\" method=\"post\">
                <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3 pb20\"><!-- Columna de los filtros -->
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
                            <label class=\"mt20\" for=\"filtroTipoArtista\">Tipo de Sala</label>
                            <select name=\"filtroSala[]\" id=\"filtroSala\" class=\"form-control js-example-basic-single\">
                                <option value=\"0\">Seleccione un Tipo de Sala</option>
                                <option value=\"1\">banda</option>
                                <option value=\"2\">solista</option>
                                <option value=\"3\">orquesta</option>
                                <option value=\"4\">tributo</option>
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
                <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9\"><!-- Resultados -->
                    <div class=\"row mb10 ml20\"><!-- Ordenar por -->
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
                    <div class=\"row mb40 listaResultados overflow bordesResultados\"><!-- Resultados -->
                        <div class=\"col-md-12\"> <!-- Resultados de busqueda -->
                            <div class=\"row mb10\"><!-- Fila 1 -->
                                <div class=\"col-md-4\"><!-- Resulatado 1 -->
                                    <div class=\"view image-hover-1 no-margin\">
                                        <!-- Blog Thumb -->
                                        <div class=\"product-container\">
                                            <img class=\"img-responsive full-width\" src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala5.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            <span class=\"badge home-badge\">
                                                <span class=\"label label-orange\">
                                                    Desde 310 €/und
                                                </span>
                                            </span>
                                        </div>
                                        <div class=\"mask\">
                                            <div class=\"image-hover-content\">
                                                <!-- Zoom + Blog Link -->
                                                <a href=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala5.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-ios7-search image-icons\"></span>
                                                    </div>
                                                </a>
                                                <a href=\"";
        // line 480
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\" class=\"info\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-link image-icons\"></span>
                                                    </div>
                                                </a>
                                            </div><!-- /image hover content -->
                                        </div><!-- /mask-->
                                    </div>
                                    <div class=\"shop-product content-box-shadow\">
                                        <a href=\"";
        // line 489
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\">
                                            <h2>Panorama Mar</h2>
                                        </a>
                                        <div class=\"row mt10\">
                                            <div class=\"col-md-12\">
                                                <span class=\"location-container pull-left\">
                                                    <div class=\"textoDireccion\">
                                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span> Manises, Valencia
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                                <p class=\"\">Información de la sala, descripción....                                                
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\"></div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <p class=\"textoTipo\">Banda</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <a href=\"#\" class=\"btn btn-info seguir\">
                                                    <span class=\"fa fa-thumbs-up\"></span> Seguir
                                                </a>
                                            </div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"compartir\">
                                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                                </a>
                                            </div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"favorito\" id=\"favorito1\" onclick=\"cambiar(id);\">
                                                    <span class=\"fa fa-heart-o\"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Resulatado 1 -->
                                <div class=\"col-md-4\"><!-- Resulatado 2 -->
                                    <div class=\"view image-hover-1 no-margin\">
                                        <!-- Blog Thumb -->
                                        <div class=\"product-container\">
                                            <img class=\"img-responsive full-width\" src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala6.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            <span class=\"badge home-badge\">
                                                <span class=\"label label-orange\">
                                                    Desde 400 €/und
                                                </span>
                                            </span>
                                        </div>
                                        <div class=\"mask\">
                                            <div class=\"image-hover-content\">
                                                <!-- Zoom + Blog Link -->
                                                <a href=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-ios7-search image-icons\"></span>
                                                    </div>
                                                </a>
                                                <a href=\"";
        // line 552
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\" class=\"info\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-link image-icons\"></span>
                                                    </div>
                                                </a>
                                            </div><!-- /image hover content -->
                                        </div><!-- /mask-->
                                    </div>
                                    <div class=\"shop-product content-box-shadow\">
                                        <a href=\"";
        // line 561
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\">
                                            <h2>Panorama Mar</h2>
                                        </a>
                                        <div class=\"row mt10\">
                                            <div class=\"col-md-12\">
                                                <span class=\"location-container pull-left\">
                                                    <div class=\"textoDireccion\">
                                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span> Almorad&iacute;, Alicante
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                                <p class=\"\">Información de la sala, descripción....                                                
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\"></div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <p class=\"textoTipo\">Banda</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <a href=\"#\" class=\"btn btn-info seguir\">
                                                    <span class=\"fa fa-thumbs-up\"></span> Seguir
                                                </a>
                                            </div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"compartir\">
                                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                                </a>
                                            </div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"favorito\" id=\"favorito2\" onclick=\"cambiar(id);\">
                                                    <span class=\"fa fa-heart-o\"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Resulatado 2 -->
                                <div class=\"col-md-4\"><!-- Resulatado 3 -->
                                    <div class=\"view image-hover-1 no-margin\">
                                        <!-- Blog Thumb -->
                                        <div class=\"product-container\">
                                            <img class=\"img-responsive full-width\" src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            <span class=\"badge home-badge\">
                                                <span class=\"label label-orange\">
                                                    Desde 300 €/und
                                                </span>
                                            </span>
                                        </div>
                                        <div class=\"mask\">
                                            <div class=\"image-hover-content\">
                                                <!-- Zoom + Blog Link -->
                                                <a href=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-ios7-search image-icons\"></span>
                                                    </div>
                                                </a>
                                                <a href=\"";
        // line 624
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 3));
        echo "\" class=\"info\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-link image-icons\"></span>
                                                    </div>
                                                </a>
                                            </div><!-- /image hover content -->
                                        </div><!-- /mask-->
                                    </div>
                                    <div class=\"shop-product content-box-shadow\">
                                        <a href=\"";
        // line 633
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 3));
        echo "\">
                                            <h2>Panorama Mar</h2>
                                        </a>
                                        <div class=\"row mt10\">
                                            <div class=\"col-md-12\">
                                                <span class=\"location-container pull-left\">
                                                    <div class=\"textoDireccion\">
                                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span> Almorad&iacute;, Alicante
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                                <p class=\"\">Información de la sala, descripción....                                                
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\"></div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <p class=\"textoTipo\">Banda</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <a href=\"#\" class=\"btn btn-info seguir\">
                                                    <span class=\"fa fa-thumbs-up\"></span> Seguir
                                                </a>
                                            </div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"compartir\">
                                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                                </a>
                                            </div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"favorito\" id=\"favorito3\" onclick=\"cambiar(id);\">
                                                    <span class=\"fa fa-heart-o\"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div><!-- Fin Resulatado 3 -->
                            </div><!-- Fin Fila 1 -->                          
                        </div><!-- Fin resultados de busqueda -->
                    </div>
                </div>
            </form><!-- Fin Formulario -->
        </div>
    </div><!-- Fin -->
";
    }

    // line 689
    public function block_javascripts($context, array $blocks = array())
    {
        // line 690
        echo "    <!-- Icheck -->
    <script src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Javascript Files -->
    <script src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--script src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script-->
    <script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--script src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap Select -->
    <script src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <script src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        var slider = document.getElementById(\"myRange\");
        //var output = document.getElementById(\"demo\");
        //output.innerHTML = slider.value;
        //Obtiene el valor del cache    
        slider.oninput = function() {
          //output.innerHTML = this.value;
        };
    </script>
    <!-- select2 -->
    <script src=\"";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        // line 722
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
        // line 723
        echo "        <script>
            //scrollup section
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.scrollup').fadeIn();
            } else {
                jQuery('.scrollup').fadeOut();
            }
        });

        jQuery('.scrollup').click(function () {
            jQuery(\"html, body\").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
/******************Menu siempre visible***************************************/ 
        \$(document).scroll(function() {
            if(\$(document).scrollTop() > 30){
                document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar top-bar-fixed\");
                document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main affix\");
            }
            else{
                document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar\");
                document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main\");
            }
        }); 
    /***********************Select2********************************************/
        \$(document).ready(function() {
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });            
            \$('.js-example-basic-single').select2();
        });
    /***
     * Para el boton de favorito.
     * @param {type} identificador
     * @returns {undefined}
     */
    function cambiar(identificador){
        console.log(identificador);
        var clase = document.getElementById(identificador).getAttribute(\"class\");
        contenido=\"favorito\";
        if(clase.indexOf(contenido)>=0){ 
            document.getElementById(identificador).setAttribute(\"class\",\"noFavorito\");
            document.getElementById(identificador).innerHTML=\"<span class=\\\"fa fa-heart\\\"></span>\";
        }
        else{
            document.getElementById(identificador).setAttribute(\"class\",\"favorito\");
            document.getElementById(identificador).innerHTML=\"<span class=\\\"fa fa-heart-o\\\"></span>\";
        }
    }
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "salas/listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  996 => 723,  990 => 722,  986 => 721,  972 => 710,  968 => 709,  963 => 707,  958 => 705,  953 => 703,  949 => 702,  945 => 701,  941 => 700,  937 => 699,  933 => 698,  929 => 697,  925 => 696,  921 => 695,  917 => 694,  913 => 693,  908 => 691,  905 => 690,  902 => 689,  846 => 633,  834 => 624,  826 => 619,  813 => 609,  762 => 561,  750 => 552,  742 => 547,  729 => 537,  678 => 489,  666 => 480,  658 => 475,  645 => 465,  501 => 323,  498 => 322,  494 => 320,  492 => 317,  490 => 316,  487 => 315,  457 => 286,  439 => 271,  435 => 270,  406 => 244,  402 => 243,  391 => 236,  385 => 233,  376 => 685,  374 => 322,  371 => 321,  368 => 315,  366 => 314,  363 => 313,  360 => 312,  358 => 236,  352 => 233,  346 => 231,  150 => 34,  145 => 32,  141 => 31,  137 => 30,  134 => 29,  131 => 28,  125 => 229,  121 => 228,  115 => 226,  113 => 28,  109 => 27,  104 => 25,  100 => 24,  96 => 23,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  62 => 13,  57 => 11,  52 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/listado.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/salas/listado.html.twig");
    }
}
