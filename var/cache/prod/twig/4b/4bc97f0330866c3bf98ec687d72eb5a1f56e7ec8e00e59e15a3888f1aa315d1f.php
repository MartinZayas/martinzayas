<?php

/* busquedas/encontrado.html.twig */
class __TwigTemplate_183cb5b2328edfba987bbc84e9c8b26a530be3f75d7e2c2301be56c7b24d4aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "busquedas/encontrado.html.twig", 2);
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
        echo "Busco Concierto | Resultados";
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
        // line 225
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 28
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 29
        echo "    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/layers.css"), "html", null, true);
        echo "\">
    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">
    <!-- CountDown Styles -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/TimeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap Datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />
    <!-- bootstrap slider -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />
    
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
        // line 92
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
        .tituloResultado{
            color: #ffffff;
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
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg8.png"), "html", null, true);
        echo "');
        }
        .imagenResultado{
            position:relative;
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
        // line 189
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
    </style>
";
    }

    // line 230
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <div id=\"bg-boxed\"><!-- Begin Boxed or Fullwidth Layout -->
        <div class=\"";
        // line 232
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                ";
        // line 235
        $this->displayBlock('BarraSuperior', $context, $blocks);
        // line 311
        echo "                ";
        $this->loadTemplate("registro/registro.html.twig", "busquedas/encontrado.html.twig", 311)->display($context);
        // line 312
        echo "                <!-- Begin Navigation -->
                ";
        // line 313
        $this->loadTemplate("default/menu.html.twig", "busquedas/encontrado.html.twig", 313)->display($context);
        // line 314
        echo "        ";
        $this->displayBlock('headerParallax', $context, $blocks);
        // line 320
        echo "        </header>
";
        // line 321
        $this->displayBlock('contenido', $context, $blocks);
        // line 1250
        echo "    ";
        $this->loadTemplate("default/pie.html.twig", "busquedas/encontrado.html.twig", 1250)->display($context);
        echo "       
        <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
    </div>
</div>
";
    }

    // line 232
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 235
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
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 243
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
        // line 269
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 270
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
        // line 285
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

    // line 314
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 315
        echo "            ";
        $this->loadTemplate("default/subheader.html.twig", "busquedas/encontrado.html.twig", 315)->display(array_merge($context, array("bgImage" => (        // line 316
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg2.jpg"), "subheaderTitle" => "Se encontraron 3 resultados")));
        // line 319
        echo "        ";
    }

    // line 321
    public function block_contenido($context, array $blocks = array())
    {
        // line 322
        echo "    <div class=\"container\"><!-- Contenedor -->
        <div class=\"row mt20 mb20\">
            <div class=\"col-sm-12\">
                <ul class=\"nav nav-pills nav-pills-shop nav-justified\">
                    <li class=\"active mr15\" id=\"opcion1\">
                        <a data-toggle=\"pill\" href=\"#home\">
                            <img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/microphone.png"), "html", null, true);
        echo "\" class=\"\" alt=\"Conciertos\">
                            Conciertos <span class=\"label label-default\">3</span>
                        </a>
                    </li>
                    <li class=\"mr15\" id=\"opcion2\">
                        <a data-toggle=\"pill\" href=\"#menu1\">
                            <img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/theatre-masks.png"), "html", null, true);
        echo "\" class=\"\" alt=\"Actor\">
                            Artistas <span class=\"label label-default\">3</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"pill\" href=\"#menu2\">
                            <img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/stage.png"), "html", null, true);
        echo "\" class=\"\" alt=\"Salas\">
                            Salas <span class=\"label label-default\">4</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"pill\" href=\"#menu3\">
                            <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/grid-world.png"), "html", null, true);
        echo "\" class=\"\" alt=\"Páginas\">
                            P&aacute;ginas <span class=\"label label-default\">4</span>
                        </a>
                    </li>
                </ul>           
                <div class=\"tab-content tab-shop mt15 bg-shadow\">
                    <div id=\"home\" class=\"tab-pane row fade in active\">
                        <div class=\"row\">
                            <form role=\"form\" id=\"formularioBuscar\" action=\"";
        // line 354
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" method=\"post\">
                                <div class=\"col-sx-12 col-sm-12 col-md-6 col-lg-7\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" placeholder=\"Busca conciertos, artistas, locales de conciertos, profesionales... ¡todo lo que quieras!\" class=\"form-control big-search\">
                                    </div>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                    <button type=\"submit\" style=\"width:100%;height:46px;\" 
                                      class=\"btn btn-lg btn-custom-orange btn-block\">
                                        <i class=\"fa fa-search\"></i>
                                        Buscar
                                    </button>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-3\">
                                    <a href=\"";
        // line 368
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarEventos");
        echo "\" style=\"width:100%;height:46px;\" 
                                      class=\"btn btn-lg btn-custom-orange btn-block\">
                                        <i class=\"fa fa-search\"></i>
                                        Busqueda Avanzada
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-4 col-sm-6 mb30\">
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 381
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
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento1.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\">
                                                    <span class=\"ion-ios7-search image-icons\"></span>
                                                </div>
                                            </a>
                                            <a href=\"";
        // line 396
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
        // line 405
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
        // line 435
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
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"";
        // line 447
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 2));
        echo "\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"";
        // line 454
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
        // line 491
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
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\">
                                                    <span class=\"ion-ios7-search image-icons\"></span>
                                                </div>
                                            </a>
                                            <a href=\"";
        // line 505
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesEvento", array("id" => 3));
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
        // line 514
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
                        <div class=\"row\"></div>
                    </div>
                    <div id=\"menu1\" class=\"tab-pane row fade\">
                        <div class=\"row\">
                            <form role=\"form\" id=\"formularioBuscar2\" action=\"";
        // line 552
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" method=\"post\">
                                <div class=\"col-sx-12 col-sm-12 col-md-6 col-lg-7\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" placeholder=\"Busca conciertos, artistas, locales de conciertos, profesionales... ¡todo lo que quieras!\" class=\"form-control big-search\">
                                    </div>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                    <button type=\"submit\" style=\"width:100%;height:46px;\" 
                                      class=\"btn btn-lg btn-custom-orange btn-block\">
                                        <i class=\"fa fa-search\"></i>
                                        Buscar
                                    </button>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-3\">
                                    <a href=\"";
        // line 566
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listadoArtistas");
        echo "\" style=\"width:100%;height:46px;\" 
                                      class=\"btn btn-lg btn-custom-orange btn-block\">
                                        <i class=\"fa fa-search\"></i>
                                        Busqueda Avanzada
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6 mb30\">
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">90</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"";
        // line 591
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 1));
        echo "\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"";
        // line 598
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 1));
        echo "\">
                                        <h2>Katy Perry</h2>
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
                                                <span class=\"fa fa-money\"></span> desde <strong>421,99 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Teatro, Madrid
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
                            </div><!-- Fin Resultado 1 -->
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 2 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista5.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">15</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista5.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"";
        // line 647
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 5));
        echo "\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"";
        // line 654
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 5));
        echo "\">
                                        <h2>Vetusta Morla</h2>
                                    </a>
                                </div>
                                <div class=\"shop-product content-box-shadow3\">
                                    <div class=\"row\">
                                        <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                            <div class=\"mes\">May.</div>    
                                            <div class=\"fecha\">20</div>
                                        </div>
                                        <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                            <div class=\"\">
                                                <span class=\"fa fa-money\"></span> desde <strong>150 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Teatro, Madrid
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mt10\">
                                        <div class=\"col-md-12\">

                                        </div>
                                    </div>
                                    <div class=\"counter\" data-date=\"2018-05-20 00:00:00\"></div>";
        // line 682
        echo "                                    <a href=\"#\" style=\"width:100%;\" class=\"btn btn-bordered btn-custom-orange btn-lg\">
                                        Comprar Entradas
                                    </a>
                                </div>
                            </div><!-- Fin Resultado 2 -->
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 1 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista6.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">140</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"";
        // line 703
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 1));
        echo "\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"";
        // line 710
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 1));
        echo "\">
                                        <h2>Lady Gaga</h2>
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
                                                <span class=\"fa fa-money\"></span> desde <strong>354,00 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Estadio, Barcelona
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
                            </div><!-- Fin Resultado 3 -->
                        </div>
                        <div class=\"row\"></div>
                    </div>
                    <div id=\"menu2\" class=\"tab-pane row fade\"><!-- Salas -->
                        <div class=\"row\">
                            <form role=\"form\" id=\"formularioBuscar3\" action=\"";
        // line 748
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" method=\"post\">
                                <div class=\"col-sx-12 col-sm-12 col-md-6 col-lg-7\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" placeholder=\"Busca conciertos, artistas, locales de conciertos, profesionales... ¡todo lo que quieras!\" class=\"form-control big-search\">
                                    </div>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                    <button type=\"submit\" style=\"width:100%;height:46px;\" 
                                      class=\"btn btn-lg btn-custom-orange btn-block\">
                                        <i class=\"fa fa-search\"></i>
                                        Buscar
                                    </button>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-3\">
                                    <a href=\"";
        // line 762
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listadoSalas");
        echo "\" style=\"width:100%;height:46px;\" 
                                      class=\"btn btn-lg btn-custom-orange btn-block\">
                                        <i class=\"fa fa-search\"></i>
                                        Busqueda Avanzada
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 1 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">90</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"";
        // line 787
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"";
        // line 794
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 1));
        echo "\">
                                        <h2>TEATRO ESPAÑOL</h2>
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
                                                <span class=\"fa fa-money\"></span> desde <strong>350,00 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Teatro, Madrid
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
                            </div><!-- Fin Resultado 1 -->
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 2 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 831
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala2.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">90</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 840
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala2.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"";
        // line 843
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 2));
        echo "\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"";
        // line 850
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 2));
        echo "\">
                                        <h2>TEATRO BARCELONA</h2>
                                    </a>
                                </div>
                                <div class=\"shop-product content-box-shadow3\">
                                    <div class=\"row\">
                                        <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                            <div class=\"mes\">May.</div>    
                                            <div class=\"fecha\">19</div>
                                        </div>
                                        <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                            <div class=\"\">
                                                <span class=\"fa fa-money\"></span> desde <strong>350,00 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Teatro, Barcelona
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
                            </div><!-- Fin Resultado 2 -->
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 3 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">23</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"";
        // line 899
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 3));
        echo "\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"";
        // line 906
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 3));
        echo "\">
                                        <h2>TEATRO BARCELONA</h2>
                                    </a>
                                </div>
                                <div class=\"shop-product content-box-shadow3\">
                                    <div class=\"row\">
                                        <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                            <div class=\"mes\">May.</div>    
                                            <div class=\"fecha\">19</div>
                                        </div>
                                        <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                            <div class=\"\">
                                                <span class=\"fa fa-money\"></span> desde <strong>350,00 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Teatro, Barcelona
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
                            </div><!-- Fin Resultado 3 -->
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 2 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala6.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">5</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 954
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"";
        // line 957
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 7));
        echo "\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"";
        // line 964
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesSalas", array("id" => 7));
        echo "\">
                                        <h2>Panorama, Mar</h2>
                                    </a>
                                </div>
                                <div class=\"shop-product content-box-shadow3\">
                                    <div class=\"row\">
                                        <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                            <div class=\"mes\">May.</div>    
                                            <div class=\"fecha\">19</div>
                                        </div>
                                        <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                            <div class=\"\">
                                                <span class=\"fa fa-money\"></span> desde <strong>50,00 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Barcelona
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
                            </div><!-- Fin Resultado 4 -->
                        </div>
                    </div>
                    <div id=\"menu3\" class=\"tab-pane row fade\"><!-- Páginas -->
                        <div class=\"row\">
                            <form role=\"form\" id=\"formularioBuscar4\" action=\"";
        // line 1001
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" method=\"post\">
                                <div class=\"col-sx-12 col-sm-12 col-md-10 col-lg-10\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" placeholder=\"Busca conciertos, artistas, locales de conciertos, profesionales... ¡todo lo que quieras!\" class=\"form-control big-search\">
                                    </div>
                                </div>
                                <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                    <button type=\"submit\" style=\"width:100%;height:46px;\" 
                                      class=\"btn btn-lg btn-custom-orange btn-block\">
                                        <i class=\"fa fa-search\"></i>
                                        Buscar
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 1 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 1021
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">90</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 1030
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"#\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"#\">
                                        <h2>Web Tomorrowland</h2>
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
                                                
                                            </div>
                                            <div class=\"textoDireccion\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Madrid
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
                            </div><!-- Fin Resultado 1 -->
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 2 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">90</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 1086
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"#\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"#\">
                                        <h2>Web Teatro Barcelona</h2>
                                    </a>
                                </div>
                                <div class=\"shop-product content-box-shadow3\">
                                    <div class=\"row\">
                                        <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                            <div class=\"mes\">May.</div>    
                                            <div class=\"fecha\">19</div>
                                        </div>
                                        <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                            <div class=\"\">
                                                
                                            </div>
                                            <div class=\"textoDireccion\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Teatro, Barcelona
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
                            </div><!-- Fin Resultado 2 -->
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 3 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 1133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">23</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 1142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"#\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"#\">
                                        <h2>Web Vigo en Fiestas</h2>
                                    </a>
                                </div>
                                <div class=\"shop-product content-box-shadow3\">
                                    <div class=\"row\">
                                        <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                            <div class=\"mes\">Jul.</div>    
                                            <div class=\"fecha\">23</div>
                                        </div>
                                        <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                            <div class=\"\">
                                                <span class=\"fa fa-money\"></span> desde <strong>350,00 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Auditorio de Castrelos, Vigo
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
                            </div><!-- Fin Resultado 3 -->
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6 mb30\"><!-- Resultado 1 -->
                                <div class=\"view image-hover-1 no-margin\">
                                    <!-- Blog Thumb -->
                                    <div class=\"product-container\">
                                        <img class=\"img-responsive full-width\" src=\"";
        // line 1191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                        <span class=\"badge home-badge\">
                                            <span class=\"label label-default\">23</span>
                                            Entradas restantes
                                        </span>
                                    </div>
                                    <div class=\"mask\">
                                        <div class=\"image-hover-content\">
                                            <!-- Zoom + Blog Link -->
                                            <a href=\"";
        // line 1200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                            </a>
                                            <a href=\"#\" class=\"info\">
                                                <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                            </a>
                                        </div><!-- /image hover content -->
                                    </div><!-- /mask-->
                                </div>
                                <div class=\"titulo content-box-shadow2\">
                                    <a href=\"#\">
                                        <h2>Web Vigo en Fiestas</h2>
                                    </a>
                                </div>
                                <div class=\"shop-product content-box-shadow3\">
                                    <div class=\"row\">
                                        <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                            <div class=\"mes\">Jul.</div>    
                                            <div class=\"fecha\">21</div>
                                        </div>
                                        <div class=\"col-sx-9 col-sm-9 col-md-9 col-lg-9 text-left\">
                                            <div class=\"\">
                                                <span class=\"fa fa-money\"></span> desde <strong>350,00 €</strong>
                                            </div>
                                            <div class=\"textoDireccion2\">
                                                <span class=\"location-container pull-left\">
                                                    <i class=\"fa fa-map-marker\"></i>
                                                    Auditorio de Castrelos, Vigo
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
                            </div><!-- Fin Resultado 1 -->
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
    </div><!-- Fin Contenedor -->
";
    }

    // line 1255
    public function block_javascripts($context, array $blocks = array())
    {
        // line 1256
        echo "    <!-- Icheck -->
    <script src=\"";
        // line 1257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Javascript Files -->
    <script src=\"";
        // line 1259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Main --
    <script type=\"text/javascript\" src=\"";
        // line 1269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script-->
    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 1271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 1273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <script>
/************************** Para el contador **********************************/
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
        \$('#opcion2').on('click', function(){
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
        return "busquedas/encontrado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1728 => 1283,  1724 => 1282,  1720 => 1281,  1716 => 1280,  1712 => 1279,  1708 => 1278,  1704 => 1277,  1700 => 1276,  1696 => 1275,  1692 => 1274,  1688 => 1273,  1683 => 1271,  1678 => 1269,  1673 => 1267,  1669 => 1266,  1665 => 1265,  1661 => 1264,  1657 => 1263,  1653 => 1262,  1649 => 1261,  1645 => 1260,  1641 => 1259,  1636 => 1257,  1633 => 1256,  1630 => 1255,  1576 => 1200,  1564 => 1191,  1512 => 1142,  1500 => 1133,  1450 => 1086,  1438 => 1077,  1388 => 1030,  1376 => 1021,  1353 => 1001,  1313 => 964,  1303 => 957,  1297 => 954,  1285 => 945,  1243 => 906,  1233 => 899,  1227 => 896,  1215 => 887,  1175 => 850,  1165 => 843,  1159 => 840,  1147 => 831,  1107 => 794,  1097 => 787,  1091 => 784,  1079 => 775,  1063 => 762,  1046 => 748,  1005 => 710,  995 => 703,  989 => 700,  977 => 691,  966 => 682,  936 => 654,  926 => 647,  920 => 644,  908 => 635,  868 => 598,  858 => 591,  852 => 588,  840 => 579,  824 => 566,  807 => 552,  766 => 514,  754 => 505,  746 => 500,  734 => 491,  694 => 454,  684 => 447,  678 => 444,  666 => 435,  633 => 405,  621 => 396,  613 => 391,  600 => 381,  584 => 368,  567 => 354,  556 => 346,  547 => 340,  538 => 334,  529 => 328,  521 => 322,  518 => 321,  514 => 319,  512 => 316,  510 => 315,  507 => 314,  477 => 285,  459 => 270,  455 => 269,  426 => 243,  422 => 242,  411 => 235,  405 => 232,  395 => 1250,  393 => 321,  390 => 320,  387 => 314,  385 => 313,  382 => 312,  379 => 311,  377 => 235,  371 => 232,  365 => 230,  325 => 189,  250 => 117,  222 => 92,  168 => 41,  164 => 40,  160 => 39,  155 => 37,  150 => 35,  145 => 33,  140 => 31,  136 => 30,  133 => 29,  130 => 28,  124 => 228,  120 => 227,  114 => 225,  112 => 28,  108 => 27,  103 => 25,  99 => 24,  95 => 23,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  61 => 13,  56 => 11,  51 => 9,  45 => 5,  42 => 4,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "busquedas/encontrado.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/busquedas/encontrado.html.twig");
    }
}
