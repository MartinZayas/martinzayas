<?php

/* eventos/listado2.html.twig */
class __TwigTemplate_c28a91e54b3aefb8f0087de0d805e59aa7388923d69abf9821bb705ac302763a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "eventos/listado2.html.twig", 2);
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
        echo "Busco Concierto | Listado de Eventos ";
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
        // line 290
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 28
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 29
        echo "    <!-- Bootstrap Datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />
    <!-- bootstrap slider -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />   
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/layers.css"), "html", null, true);
        echo "\">
    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">
    <!-- CountDown Styles -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/TimeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
        .botonResultado{
            color: #FFF;
            border: 0px solid #00B7EB;
            background-color: #00B7EB;
        }
        .fondo1{
            border: 1px;
            border-style: solid;
            border-color: #d1d1d1;
            background-color: #4c4c4c;
        }
        .fondo2{
            color: #ffffff;
            font-family: HelveticaNegrita, HelveticaCond, sans-serif;
            font-size: 16px;
            background-color: #d1d1d1;
            background-image: url('";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg7.png"), "html", null, true);
        echo "');
        }
        .fondo3{
            position: absolute;
            top: 50%;
            display: block;
            height: auto;
            width: 197px;
            background-color: #d1d1d1;
            opacity: 0.7;
            z-index: 10;
        }
        
        /****************** Filtros *******************************************/
        .tituloFiltro{
            border-bottom: 2px solid #00B7EB;
        }
        .etiqueta{
            margin-top: 10px;
        }
        .textoFiltro{
            color: #616161;
            font-family: HelveticaCond, sans-serif;
            font-size: 14px;
            font-weight: 600;
        }
        .panel-heading{
            padding-bottom: 0px !important;
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
/************************Resultados*******************************************/ 
        .titulo{
            position:relative;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-right: 15px;
            display:block;
            text-align:center;
            overflow:hidden;
            max-height:70px;
            background-color: #FFFFFF;
            text-transform:none;
            text-align: left;
            font-weight:400;
            margin-bottom:0px;
            color: #000000 !important;
            font-family: HelveticaNegrita, HelveticaCond, sans-serif;
            font-size: 20px;
        }
        .titulo a h2{
            text-transform:none;
            font-weight:400;
            color: #000000 !important;
            font-family: HelveticaNegrita, HelveticaCond, sans-serif;
            font-size: 20px;
        }
        .mes{
            position: relative;
            width: 50px;
            height: 20px;
            background-color: #777;
            color: #FFFFFF;
            text-align: center;
            font-weight: bold;
        }
        .fecha{
            margin-top: 0px;
            width: 50px;
            color: #4c4c4c;
            font-size: 18px;
            background-color: #FFFFFF;
            text-align: center;
            box-shadow: 0px 1px 5px rgba(0,0,0,0.5);
            -webkit-box-shadow: 0px 1px 5px rgba(0,0,0,0.5);
        }
        .precio{
            height: 22px;
        }
        .shop-product h2 {
            max-height: 50px;
            font-size:20px;
            text-transform:none;
            font-weight:400;
            margin-bottom:8px;
            color: #000000 !important;
            font-family: HelveticaNegrita, HelveticaCond, sans-serif;
            font-size: 20px;
        }
        .textoResultado{
            position: absolute;
            top: 50%;
            display: block;
            height: auto;
            z-index: 12;
            font-family: HelveticaCond, sans-serif;
            font-size: 12px;
            background-image: url('";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg8.png"), "html", null, true);
        echo "');
        }
        .imagenResultado{
            position:relative;
        }
        .textoDireccion{
            font-size: 16px;
            height: 90px;
        }
        span.location-container {
            font-size: 16px !important;
        }
        .textoDireccion2{
            height: 57px;
        }
        .content-box-shadow2 {
            -webkit-box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            -moz-box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            padding:15px;
            background-color:#FAFAFA;
            border-left:1px solid #E6E6E6;
            border-right:1px solid #E6E6E6;
        }
        .content-box-shadow3 {
            -webkit-box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            -moz-box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            padding:15px;
            background-color:#FAFAFA;
            border-left:1px solid #E6E6E6;
            border-right:1px solid #E6E6E6;
            border-bottom:1px solid #E6E6E6;
        }
        .tNombre{
            width: 100%;
        }
/************************* Estilos ******************************************/
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
        .itemAgregado{
            margin-left: 5px; 
            margin-bottom: 5px;
            background-color: #ffffff;
        }
    </style>
";
    }

    // line 295
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <div id=\"bg-boxed\"><!-- Begin Boxed or Fullwidth Layout -->
        <div class=\"";
        // line 297
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                ";
        // line 300
        $this->displayBlock('BarraSuperior', $context, $blocks);
        // line 376
        echo "                ";
        $this->loadTemplate("registro/registro.html.twig", "eventos/listado2.html.twig", 376)->display($context);
        // line 377
        echo "                <!-- Begin Navigation -->
                ";
        // line 378
        $this->loadTemplate("default/menu.html.twig", "eventos/listado2.html.twig", 378)->display($context);
        // line 379
        echo "        ";
        $this->displayBlock('headerParallax', $context, $blocks);
        // line 385
        echo "        </header>
";
        // line 386
        $this->displayBlock('contenido', $context, $blocks);
        // line 718
        echo "        ";
        $this->loadTemplate("default/pie.html.twig", "eventos/listado2.html.twig", 718)->display($context);
        echo "       
        <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
    </div>
</div>
";
    }

    // line 297
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 300
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
        // line 307
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 308
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
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 335
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
        // line 350
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

    // line 379
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 380
        echo "            ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/listado2.html.twig", 380)->display(array_merge($context, array("bgImage" => (        // line 381
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg2.jpg"), "subheaderTitle" => "Se encontraron 3 resultados")));
        // line 384
        echo "        ";
    }

    // line 386
    public function block_contenido($context, array $blocks = array())
    {
        // line 387
        echo "    <div class=\"container\"><!-- Contenedor -->
        <div class=\"row mt20 mb20\">            
            <div class=\"col-sm-12\"><!-- Resultados -->
                <ul class=\"nav nav-pills nav-pills-shop nav-justified\">
                    <li class=\"active mr15\">
                        <a data-toggle=\"pill\" href=\"#menu1\">
                            <img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/microphone.png"), "html", null, true);
        echo "\" class=\"\" alt=\"Conciertos\">
                            Eventos encontrados <span class=\"label label-default\">3</span>
                        </a>
                    </li>
                </ul>
                <div class=\"tab-content tab-shop mt15 bg-shadow\"><!-- Contenedor del tab -->
                    <div id=\"menu1\" class=\"tab-pane row fade in active\">
                        <div class=\"col-lg-4 col-md-4 col-sm-6 mb30\">
                            <div class=\"view image-hover-1 no-margin\">
                                <!-- Blog Thumb -->
                                <div class=\"product-container\">
                                    <img class=\"img-responsive full-width\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento1.png"), "html", null, true);
        echo "\" alt=\"...\">
                                    <!-- <span class=\"badge\">90 entradas restantes</span> -->
                                    <span class=\"badge home-badge\">
                                        <span class=\"label label-default\">90</span>
                                        Entradas restantes
                                    </span>
                                </div>
                                <div class=\"mask\">
                                    <div class=\"image-hover-content\">
                                        <!-- Zoom + Blog Link -->
                                        <a href=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento1.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                            <div class=\"image-icon-holder\">
                                                <span class=\"ion-ios7-search image-icons\"></span>
                                            </div>
                                        </a>
                                        <a href=\"";
        // line 419
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 1));
        echo "\" class=\"info\">
                                            <div class=\"image-icon-holder\">
                                                <span class=\"ion-link image-icons\"></span>
                                            </div>
                                        </a>
                                    </div><!-- /image hover content -->
                                </div><!-- /mask-->
                            </div>
                            <div class=\"titulo content-box-shadow2\">
                                <a href=\"";
        // line 428
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 1));
        echo "\">
                                    <h2>Man&aacute; en Vigo | Vigo en Fiestas 2018</h2>
                                </a>
                            </div>
                            <div class=\"shop-product content-box-shadow3\">                                
                                <div class=\"row\">
                                    <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"mes\">Jul.</div>    
                                        <div class=\"fecha\">23</div>
                                    </div>
                                    <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                        <div class=\"\"></div>
                                        <div class=\"textoDireccion\">
                                            <span class=\"location-container pull-left\">
                                                <i class=\"fa fa-map-marker\"></i>
                                                Auditorio de Castrelos, Vigo
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"counter\" data-date=\"2018-07-23 00:00:00\"></div>
                                <a href=\"\" style=\"width:100%;\" class=\"btn btn-bordered btn-custom-orange btn-lg\">
                                    Comprar Entradas
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-6 mb30\">
                            <div class=\"view image-hover-1 no-margin\">
                                <!-- Blog Thumb -->
                                <div class=\"product-container\">
                                    <img class=\"img-responsive full-width\" src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" alt=\"...\">
                                    <span class=\"badge home-badge\">
                                        <span class=\"label label-default\">10</span>
                                        Entradas restantes
                                    </span>
                                </div>
                                <div class=\"mask\">
                                    <div class=\"image-hover-content\">
                                        <!-- Zoom + Blog Link -->
                                        <a href=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                            <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                        </a>
                                        <a href=\"";
        // line 470
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 2));
        echo "\" class=\"info\">
                                            <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                        </a>
                                    </div><!-- /image hover content -->
                                </div><!-- /mask-->
                            </div>
                            <div class=\"titulo content-box-shadow2\">
                                <a href=\"";
        // line 477
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 2));
        echo "\">
                                    <h2>Man&aacute; en el Festival Starlite Marbella 2018</h2>
                                </a>
                            </div>               
                            <div class=\"shop-product content-box-shadow3\">                                
                                <div class=\"row\">
                                    <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"mes\">Jul.</div>    
                                        <div class=\"fecha\">25</div>
                                    </div>
                                    <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                        <div class=\"\">
                                            <span class=\"fa fa-money\"></span> desde <strong>99,94 €</strong>
                                        </div>
                                        <div class=\"textoDireccion2\">
                                            <span class=\"location-container pull-left\">
                                                <i class=\"fa fa-map-marker\"></i>
                                                Starlite - La Cantera de Marbella
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mt10\">
                                    <div class=\"col-md-12\">
                                        
                                    </div>
                                </div>
                                <div class=\"counter\" data-date=\"2018-07-25 00:00:00\"></div>
                                <a href=\"#\" style=\"width:100%;\" class=\"btn btn-bordered btn-custom-orange btn-lg\">
                                    Comprar Entradas
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-6 mb30\">
                            <div class=\"view image-hover-1 no-margin\">
                                <!-- Blog Thumb -->
                                <div class=\"product-container\">
                                    <img class=\"img-responsive full-width\" src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" alt=\"...\">
                                    <span class=\"badge home-badge\">
                                        <span class=\"label label-default\">40</span>
                                        Entradas restantes
                                    </span>
                                </div>
                                <div class=\"mask\">
                                    <div class=\"image-hover-content\">
                                        <!-- Zoom + Blog Link -->
                                        <a href=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                            <div class=\"image-icon-holder\">
                                                <span class=\"ion-ios7-search image-icons\"></span>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"info\">
                                            <div class=\"image-icon-holder\">
                                                <span class=\"ion-link image-icons\"></span>
                                            </div>
                                        </a>
                                    </div><!-- /image hover content -->
                                </div><!-- /mask-->
                            </div>
                            <div class=\"titulo content-box-shadow2\">
                                <a href=\"";
        // line 537
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 3));
        echo "\">
                                    <h2>+dMan&aacute; Tributo a Man&aacute; en la Sala DOKA(Donostia)</h2>
                                </a>
                            </div>
                            <div class=\"shop-product content-box-shadow3\">
                                <div class=\"row\">
                                    <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"mes\">May.</div>    
                                        <div class=\"fecha\">18</div>
                                    </div>
                                    <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                        <div class=\"\">
                                            <span class=\"fa fa-money\"></span> desde <strong>15,00 €</strong>
                                        </div>
                                        <div class=\"textoDireccion2\">
                                            <span class=\"location-container pull-left\">
                                                <i class=\"fa fa-map-marker\"></i>
                                                Sala Doka, Donostia-San Sebasti&aacute;n
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mt10\">
                                    <div class=\"col-md-12\">
                                        
                                    </div>
                                </div>
                                <div class=\"counter\" data-date=\"2018-05-18 00:00:00\"></div>
                                <a href=\"#\" style=\"width:100%;\" class=\"btn btn-bordered btn-custom-orange btn-lg\">
                                    Comprar Entradas
                                </a>
                            </div>
                        </div>
                    </div>                
                </div><!-- Fin del contenedor tab -->
            </div><!-- Fin columna col-sm-12 -->
            </div>
        <div class=\"row mt10\">
            <form id=\"filtroEventos\" name=\"filtroEventos\" action=\"#\" method=\"post\" role=\"form\" class=\"form-inline\">
                <!-- Filtros -->
                <div class=\"panel\">
                    <div class=\"panel-heading\">
                        <div class=\"heading\">
                            <div class=\"row\">
                                <div class=\"col-sx-11 col-sm-11 col-md-11 col-lg-11\">
                                    <h3 class=\"mt5 ml5\">
                                        Filtrar Eventos por:
                                    </h3>
                                </div>
                                <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\">
                                    <a data-toggle=\"collapse\" href=\"#collapse1\" onclick=\"cambio();\">
                                        <span class=\"glyphicon glyphicon-chevron-down\" id=\"icono\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"collapse1\" class=\"panel-collapse collapse\">
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- Nombre -->
                                    <label class=\"\" for=\"nombre\">Nombre:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- País -->
                                    <label class=\"\" for=\"pais\">Pa&iacute;s:</label>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <input type=\"text\" class=\"form-control tNombre\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del evento\">
                                </div><!-- Fin del nombre -->                                
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <select name=\"pais[]\" id=\"pais\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                                        <option value=\"\"></option>     
                                        <option value=\"1\">España</option> 
                                        <option value=\"2\">M&eacute;xico</option>     
                                    </select>
                                </div><!-- Fin País -->
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- Provincia -->
                                    <label class=\"etiqueta\" for=\"ciudad\">Provincia:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- Ciudad -->
                                    <label class=\"etiqueta\" for=\"ciudad\">Ciudad:</label>
                                </div>                                                       
                            </div><!-- Fin fila 1 -->
                            <div class=\"row\">                                
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <select id=\"provincia\" name=\"provincia[]\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                                        <option value=\"\"></option>
                                        <option value=\"1\">Albacete</option>
                                        <option value=\"2\">Alicante</option>
                                    </select>
                                </div><!-- Fin Provincia -->  
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <select name=\"ciudad[]\" id=\"ciudad\" class=\"form-control js-example-basic-single-multiple\" multiple=\"multiple\">
                                        <option value=\"\"></option>     
                                        <option value=\"Madrid\">Madrid</option>
                                        <option value=\"Barcelona\">Barcelona</option>
                                    </select>
                                </div><!-- Fin Ciudad -->
                            </div>
                            <div class=\"row\"> 
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\"><!-- Estilos -->
                                    <label class=\"etiqueta\" for=\"estilos\">Estilo(s) Musical(es):</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-2 col-lg-2\">
                                    <label class=\"etiqueta\" for=\"fechaInicio\">Rango de Fechas:</label>
                                </div>
                            </div>
                            <div class=\"row\"> 
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
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
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <input type=\"text\" name=\"daterange\" class=\"form-control\" value=\"01/01/2018 - 01/31/2018\" />
                                </div>  
                            </div><!-- Fin fila 2 -->
                            <div class=\"row\"><!-- Fila 3 -->
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <label class=\"etiqueta\" for=\"precio\">Rango de Precio:</label>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-3 col-lg-3\">
                                    <div class=\"etiqueta textoFiltro\">¿No encuentras un evento?</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <div class=\"slidecontainer\">
                                        <input type=\"range\" min=\"1\" max=\"1000\" value=\"1\" class=\"slider\" id=\"myRange\">                            
                                    </div>
                                </div>
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <a href=\"";
        // line 685
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" name=\"buscar2\" class=\"btn btn-success btn-block\">Busca tu sala o artista preferido</a>
                                </div>
                            </div><!-- Fin Fila 3-->
                            <div class=\"row\"><!-- fila 4 -->
                                <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 desde\">0 €</div>
                                    <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                    <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5 hasta\">1000 €</div>
                                </div>
                            </div><!-- Fin fila 4 -->
                            <div class=\"row mb10\"><!-- fila 5 -->
                                
                                
                                <div class=\"col-sx-6 col-sm-6 col-md-4 col-lg-4\">
                                </div>
                            </div><!-- Fin fila 5 -->
                            <div class=\"row mb5\"><!-- Fila 6 -->
                                <div class=\"hidden-xs hidden-sm col-md-4 col-lg-4\"></div>
                                <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                    <buttom type=\"reset\" name=\"cancelar\" class=\"btn btn-info btn-block\">Cancelar</buttom>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                    <buttom type=\"submit\" name=\"aceptar\" class=\"btn btn-primary btn-block\">Aplicar</buttom>
                                </div>
                                <div class=\"hidden-xs hidden-sm col-md-4 col-lg-4\"></div>
                            </div><!-- Fin fila 6 -->
                        </div><!-- Fin del panel body -->
                    </div>
                </div>
            </form><!-- Fin Filtros -->
        </div><!-- Fin fila -->
    </div><!-- Fin Contenedor -->
";
    }

    // line 723
    public function block_javascripts($context, array $blocks = array())
    {
        // line 724
        echo "    <!-- Icheck -->
    <script src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Javascript Files -->
    <script src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script-->
    <script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap Select -->
    <script src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Main --
    <script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script-->
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Include Date Range Picker -->
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\" />
    <!-- select2 -->
    <script src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        /**Para el contador */
        jQuery(document).ready(function(){
            // CountDown initialization
            \$(\".counter\").TimeCircles({
                circle_bg_color: \"#B8B0AF\",
                time: {
                    Days: { color: \"#FF8000\" },
                    Hours: { color: \"#FF8000\" },
                    Minutes: { color: \"#FF8000\" },
                    Seconds: { color: \"#FF8000\" }
                },
                bg_width: 0.5,
                fg_width: 0.05
            });
        });
/**************************************************************************/
        // image zoom
\$(document).ready(function() {
    \$('.image-zoom-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        fixedContentPos: false
    });
});

// gallery zoom
\$('.popup-gallery').each(function() {
     \$(this).magnificPopup({ 
        delegate: '.gallery-zoom',
        type:'image',
        gallery: {
            enabled: true
        }
    });
});

// video zoom
\$(document).ready(function() {
    \$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});

//responsive video
\$(document).ready(function() {
    \$(document.body).fitVids();
});

// scroll to top action
\$('.scroll-top').on('click', function(event) {
    event.preventDefault();
    \$('html, body').animate({
        scrollTop: 0
    }, 'slow');
});

// run mixitup portfolio
\$(function() {
    \$('#myPortfolio').mixitup({
        targetSelector: '.item',
        transitionSpeed: 600
    });
});

// pagination fix
\$(function() {
    \$(\".dropdown-menu > li > a.trigger\").on(\"click\", function(e) {
        var current = \$(this).next();
        current.toggle();
        e.stopPropagation();
    });
});

//side-navbar
jQuery(\"li.list-toggle\").bind(\"click\", function() {
    jQuery(this).toggleClass(\"active\");
});

//tooltips and popovers
\$(function() {
    \$(\"[data-toggle='tooltip']\").tooltip();
});
\$(function() {
    \$(\"[data-toggle='popover']\").popover();
});

//activate skrollr.js
skrollr.init({
    forceHeight: false,
    smoothScrolling: true,
    smoothScrollingDuration: 1500,
        mobileCheck: function() {
        //hack - forces mobile version to be off
        return false;
    }
});

//carousel subnav slider
\$(document).ready(function() {
    var clickEvent = false;
    \$('#carouselSubnav').on('click', '.nav a', function() {
        clickEvent = true;
        \$('#carouselSubnav .nav li').removeClass('active');
        \$(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if (!clickEvent) {
            var count = \$('#carouselSubnav .nav').children().length - 1;
            var current = \$('#carouselSubnav .nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if (count == id) {
                \$('#carouselSubnav .nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});

//owl carousel thumbnail caption slider
\$('#owl-carousel-product').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: true,
    navText: [\"<span><</span>\", \"<span>></span>\"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

//owl carousel thumbnail caption slider
\$('#owl-carousel-thumb').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    navContainer: '#customNav',
    navText: [\"<span><</span>\", \"<span>></span>\"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})

//carousel animation fix
function animateElement(obj, anim_) {
    obj.addClass(anim_ + ' animated').one(
        'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
            \$(this).removeClass();
        });
}
\$('#carouselHome, #carouselSubnav').on('slide.bs.carousel', function(e) {
    var current = \$('.item').eq(parseInt(\$(e.relatedTarget).index()));
    \$('[data-animation]').removeClass();
    \$('[data-animation]', current).each(function() {
        var \$this = \$(this);
        var anim_ = \$this.data('animation');
        animateElement(\$this, anim_);
    });
});

\$('.navbar li a').click(function() {
    \$('.navbar li a').removeClass('active');
    \$(this).addClass('active');
});

//progress bar
\$(document).ready(function(){
    var percent = 0, bar = \$('.transition-timer-carousel-progress-bar'), crsl = \$('#carouselHome');
    function progressBarCarousel() {
      bar.css({width:percent+'%'});
     percent = percent +0.5;
      if (percent>100) {
          percent=0;
          crsl.carousel('next');
      }      
    }
    crsl.carousel({
        interval: false,
        pause: true
    }).on('slide.bs.carousel', function () {percent=0;});var barInterval = setInterval(progressBarCarousel, 30);
    crsl.hover(
        function(){
            clearInterval(barInterval);
        },
        function(){
            barInterval = setInterval(progressBarCarousel, 30);
        })
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
/************************* Fechas *********************************************/        
        \$('.datepicker-me').datepicker({
            format: \"dd/mm/yyyy\",
            todayBtn: true,
            language: \"es\",
        });
/************************* Estilos ********************************************/
        /**
         * Funcion que añade un <li> dentro del <ul>
         */
        function agregar(){
            var nuevoLi=document.getElementById(\"estilos\").value;
            if(nuevoLi.length>0){
                if(encontrarItem(nuevoLi)){
                    var li=document.createElement('li');
                    li.id=nuevoLi;
                    li.setAttribute(\"class\",\"list-group-item itemAgregado\");
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
        \$(document).ready(function(){
/********Estilos musicales****************************************************/
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });
            \$('.js-example-basic-single').select2();
        });
/******************* scrollup section ****************************************/
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
    </script>
";
    }

    public function getTemplateName()
    {
        return "eventos/listado2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1092 => 765,  1083 => 759,  1079 => 758,  1074 => 756,  1070 => 755,  1066 => 754,  1062 => 753,  1058 => 752,  1054 => 751,  1050 => 750,  1046 => 749,  1042 => 748,  1038 => 747,  1034 => 746,  1029 => 744,  1024 => 742,  1019 => 740,  1014 => 738,  1009 => 736,  1005 => 735,  1001 => 734,  997 => 733,  993 => 732,  989 => 731,  985 => 730,  981 => 729,  977 => 728,  973 => 727,  968 => 725,  965 => 724,  962 => 723,  925 => 685,  774 => 537,  757 => 523,  745 => 514,  705 => 477,  695 => 470,  689 => 467,  677 => 458,  644 => 428,  632 => 419,  624 => 414,  611 => 404,  597 => 393,  589 => 387,  586 => 386,  582 => 384,  580 => 381,  578 => 380,  575 => 379,  545 => 350,  527 => 335,  523 => 334,  494 => 308,  490 => 307,  479 => 300,  473 => 297,  463 => 718,  461 => 386,  458 => 385,  455 => 379,  453 => 378,  450 => 377,  447 => 376,  445 => 300,  439 => 297,  433 => 295,  373 => 234,  231 => 95,  178 => 45,  173 => 43,  168 => 41,  164 => 40,  159 => 38,  154 => 36,  149 => 34,  145 => 33,  141 => 32,  136 => 30,  133 => 29,  130 => 28,  124 => 293,  120 => 292,  114 => 290,  112 => 28,  108 => 27,  103 => 25,  99 => 24,  95 => 23,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  61 => 13,  56 => 11,  51 => 9,  45 => 5,  42 => 4,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/listado2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/listado2.html.twig");
    }
}
