<?php

/* usuarios/sesion.html.twig */
class __TwigTemplate_8eb16f2ddefe9dea7d6ce499ec3fd3ad8e2703e5a6a7aa2348350e20a3beec73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/sesion.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'BarraSuperior' => array($this, 'block_BarraSuperior'),
            'contenido' => array($this, 'block_contenido'),
            'columnaIzquierda' => array($this, 'block_columnaIzquierda'),
            'columnaDerecha' => array($this, 'block_columnaDerecha'),
            'encabezadoContenido' => array($this, 'block_encabezadoContenido'),
            'contenidoDerecha' => array($this, 'block_contenidoDerecha'),
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
        echo "Busco Concierto | Sesi&oacute;n de usuario ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <!-- Royal Preloader CSS --
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/royal_preloader.css"), "html", null, true);
        echo "\">
    <!-- jQuery Files -->
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Royal Preloader Realiza la animación de cargado sin el no se muestran
    los caruseles de presentaciones -->
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/royal_preloader.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap select -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <!-- Stylesheets -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery.snippet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/waitMe/waitMe.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Icon Fonts -->
    <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <!-- Magnific Popup -->
    <link href='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/magnific-popup.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    ";
        // line 31
        $this->displayBlock('cssPersonalizados', $context, $blocks);
        // line 412
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
    <!-- AdminLTE Skins -->    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/skin-black.min.css"), "html", null, true);
        echo "\">
";
    }

    // line 31
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 32
        echo "    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/layers.css"), "html", null, true);
        echo "\">
    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">
    <!-- CountDown Styles -->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/TimeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
        .btn-facebook, .btn-twitter, .btn-instagram{
            color: #ffffff;
            font-size: 12px !important;
        }
        .btn-youtube{
            color: #ffffff;
            font-size: 12px !important;
            background-color: red;
        }
        .boton{
            height: 42px;
        }
        .precio{
            font-family: Helvetica;
            font-size: 20px;
        } 
        .heading2 h4{
            margin:0 0 -2px 0;
            padding-bottom:15px;
            display:inline-block;
        }
        .heading2 {
            display:block;
            margin:0 0 20px 0;
            border-bottom:1px solid #888888; 
            font-size:12px;
        }
        .icono{
            color: red;
        }
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
        .menu{
            background-color: #ffffff;
            color: #272727;
        }
        .menu:hover{
            background-color: #EBEBEB;
        }
        li.menu a{
            color: #272727;
        }
        .sombraMenu{
            margin-left: 0px;
            margin-right: 0px;
            background-color:#fff !important;
            box-shadow: 0px 5px 9px #888888;
        }
        .panelSombra {
            margin-bottom: 10px;
            background-color: #ffffff;
            border:1px solid #e6e9ed;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .capaTitulo{
            border-bottom: 1px solid;
            border-bottom-color: #888888;
        }
        .logoCompartir{
            margin-top: 9px;
            margin-bottom: 9px;
        }
        .compartir{
            font-size: 12px;
        }
        .textoEstilo{
            margin-top: 10px;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            font-style: normal;
        }
        .textoPromotor{
            color: #1e30ff;
            font-family: Helvetica, sans-serif;
            font-weight: bold; 
        }
        .textoDisco{
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-weight: bold;
        }
        .textoAnio{
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-weight: bold;
        }
        .textoDescripcion{
            color: #ffffff;
            background-color:  #FF8000; 
            font-family: Helvetica, Open Sans;
        }
        .textoCarrera{
            color: #ffffff;
            background-color:  #FF8000; 
            font-family: Helvetica, Open Sans;
        }
        .fondoNaranja{
            margin-right: 10px;
            padding-left: 10px;
            padding-right: 10px;
            text-align: justify;
            border-left: #a7590b;
            border-left-style: solid;
            border-left-width: 4px;
            color: #ffffff;
            background-color:  #FF8000;
        }
        .fixed {
            position: fixed;
            top: 101px;
            width: 100%;
            z-index: 100;
        }
        /********************* Menu como **************************************/
        .como{
            margin-top: 0px;
        }
        /********************* Menu buscador **********************************/
        .buscador{
            margin-top: 0px;
            margin-bottom: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
        }
        .buscador2{
            margin-top: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
        }
        .botonBuscar{
            padding-right: 5px;
            height: 20px;
            width: 30px;
            border-radius: 0;
            border: 1px solid #ccc;
            display: inline-block;
            color: #333;
            background-color: #fff;
        }
        .tBuscador{            
            border-radius: 0;
            border: 1px solid #ccc;
            height: 22px;
            display: inline-block;
            -webkit-box-shadow: inset 0 2px 1px rgba(0,0,0,.07);
            box-shadow: inset 0 2px 1px rgba(0,0,0,.07);
        }
        /********************* Menu de alertas ********************************/
        .label{
            position: absolute;
            top: 1px;
            left: 17px;
            height: 15px;
            font-size: 9px;
            z-index: 5;
        }
        .campana{
            padding-top: 10px;
            padding-bottom: 0px;
            font-size: 12px;
        }
        li.footer{
            margin-top: 0px;
            margin-bottom: 0px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #ffffff;
        }
        /********************** Anuncios **************************************/
        .tituloSesion{
            margin-top: 15px;
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
        /**Menu del login*******/
        .user-header{
            background-color:#222
        }
        li .user-header p {
            line-height: 30px !important; 
        }
        a.dropdown-toggle{
            padding-top: 2px !important;
            padding-bottom: 2px !important;
        }
        .user{
            height: 30px;
        }
        .user-menu{
            height: 30px;
        }
        /*************************** Usuarios *********************************/
        .imagenUsuario{
            width: 160px;
            height: 160px;
            align-content: center;
            margin-left: 10px;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        .imagenUsuario2{
            width: 120px;
            height: 120px;
            align-content: center;
            margin-left: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .diaCalendario{
            margin-top: 10px;
            margin-bottom: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color:  #FF8000; 
            height: 100px;
            width: 100%;
            color: #ffffff;
            font-size: 16px;
            font-family: Helvetica, Open Sans; 
            font-weight: bold;
            border-radius: 4px;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }
        .dia{
            font-size: 22px;
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
            font-style: normal;
        }
        .textoProximo{
            padding-left: 10px;
            padding-right: 10px;
            text-align: justify;
            color: #000000;
            font-size: 16px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
        }
        .textoSala{
            text-align: justify;
            color: #000000;
            font-size: 16px;
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
            font-style: normal;
        }
        .textoArtista{
            margin-top: 10px;
            text-align: justify;
            color: #000000;
            font-size: 18px;
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
            font-style: normal;
            font-weight: bold;
        }
        .textoDesde{
            margin-top: 3px;
            text-align: right;
            color: #000000;
            font-size: 14px;
            font-family: HelveticaNegrita, Helvetica, Arial, sans-serif; 
            font-style: normal;
        }
        .textoDesde2{
            position: absolute;
            top: 115px;
            right: 100px;
            width: 100px;
            margin-top: 3px;
            text-align: right;
            color: #000000;
            font-size: 14px;
            font-family: HelveticaNegrita, Helvetica, Arial, sans-serif; 
            font-style: normal;
            float: left;
        }
        .textoPrecio{
            text-align: justify;
            color: #000000;
            font-size: 18px;
            font-family: HelveticaNegrita, Helvetica, Arial, sans-serif; 
            font-style: normal;
            font-weight: 700;
            text-transform: uppercase;
        }
        .textoPrecio2{
            position: absolute;
            top: 115px;
            right: 50px;
            text-align: justify;
            color: #000000;
            font-size: 18px;
            font-family: HelveticaNegrita, Helvetica, Arial, sans-serif; 
            font-style: normal;
            font-weight: 700;
            text-transform: uppercase;
            float: right;
            padding-left: 5px;
        }
        .panelAnuncio {
            margin-bottom: 10px;
            background-color: #ffffff;
            border:1px solid #e6e9ed;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
    /******************************Menu Vertical*******************************/
        @media (min-width: 640px) {
            .menuVertical{
                width: 187.5px;
            }
        }
        @media (min-width: 768px) {
            .menuVertical{
                width: 187.5px;
            }
        }
        @media (min-width: 980px) {
            .menuVertical{
                width: 187.5px;
            }
        }
        @media (min-width: 1024px) {
            .menuVertical{
                width: 242.5px;
            }
        }
        @media (min-width: 1200px){
            .menuVertical{
                width: 291px;
            }
        }
        .menuVertical{
            margin-bottom: 0px;
            background-color: #ffffff;
            border:1px solid #e6e9ed;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .menuActivo{
            color: #ccc;
        }
        .menuConfiguracion:hover{
            background-color: #F1F1F1;
        }
</style>
";
    }

    // line 420
    public function block_classBody($context, array $blocks = array())
    {
    }

    // line 421
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <div id=\"bg-boxed\"><!-- Begin Boxed or Fullwidth Layout -->
        <div class=\"";
        // line 423
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                ";
        // line 426
        $this->displayBlock('BarraSuperior', $context, $blocks);
        // line 530
        echo "<!-- Fin Barra superior -->
                <!-- Begin Navigation -->
                ";
        // line 532
        $this->loadTemplate("usuarios/menu.html.twig", "usuarios/sesion.html.twig", 532)->display($context);
        echo "                
            </header>
    ";
        // line 534
        $this->displayBlock('contenido', $context, $blocks);
        // line 670
        echo "<!-- Fin Contenido -->
    ";
        // line 671
        $this->loadTemplate("usuarios/pie.html.twig", "usuarios/sesion.html.twig", 671)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
 ";
    }

    // line 423
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 426
    public function block_BarraSuperior($context, array $blocks = array())
    {
        echo "<!-- Begin Top Bar -->
                <div class=\"top-bar\" id=\"fixed-topBar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- ¿Como funciona? -->
                            <div class=\"col-sm-4 col-md-4 col-lg-4\">
                                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                    <li style=\"border-left:none;\">
                                        <a href=\"";
        // line 434
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\" class=\"como\">
                                            ¿Cómo funciona?
                                        </a>
                                    </li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"#contacto\">Contacto</a></li>
                                </ul>
                            </div>
                            <div class=\"col-sm-4 col-md-4 col-lg-4\">
                                <form class=\"form-inline\" action=\"#\" method=\"post\" role=\"form\">
                                    <div class=\"input-group buscador\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-default btn-xs\">
                                                <span class=\"glyphicon glyphicon-search\"></span>
                                            </button>
                                        </div>                        
                                        <input type=\"text\" id=\"buscador1\" name=\"buscador1\" class=\"tBuscador\" placeholder=\"Buscar...\">
                                    </div>
                                </form>
                            </div>
                            <!-- Sesion -->
                            <div class=\"col-sm-4 col-md-4 col-lg-4\">
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav navbar-right\">                    
                                        <li class=\"dropdown notifications-menu\"><!-- Notifications Menu -->
                                            <!-- Menu toggle button -->
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-bell-o campana\"></i>
                                                <span class=\"label label-warning\">10</span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                <li class=\"header\">Usted tiene 10 notificaciones</li>
                                                <li> <!-- Inner Menu: contains the notifications -->
                                                    <ul class=\"menu\">
                                                        <li>  <!-- start notification -->
                                                          <a href=\"#\">
                                                            <i class=\"fa fa-users text-aqua\"></i> 5 nuevos eventos se agregaron hoy
                                                          </a>
                                                        </li> <!-- end notification -->
                                                    </ul>
                                                </li>
                                                <li class=\"footer\"><a href=\"#\">Ver Todo</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown user user-menu\">
                                            <!-- Menu Toggle Button -->
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                              <!-- The user image in the navbar-->
                                              <img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" height=\"26px\" class=\"img-circle\" alt=\"Imagen de usuario\">
                                              <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                              <span class=\"hidden-xs\">Alexander Pierce</span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                              <!-- The user image in the menu -->
                                                <li class=\"user-header\">
                                                    <img src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"Imagen de usuario\">
                                                    <p>Alexander Pierce - Web Developer
                                                        <small>Miembro desde Nov. 2012</small>
                                                    </p>
                                                </li>
                                              <!-- Menu Footer-->
                                                <li class=\"user-footer\">
                                                    <div class=\"col-xs-4\"></div>
                                                    <div class=\"col-xs-4\">
                                                      <a href=\"#\" class=\"btn btn-primary btn-flat\">Salir</a>
                                                    </div>
                                                    <div class=\"col-xs-4\"></div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- Configuraciones -->
                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> 
                                                <i class=\"fa fa-gears\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                <li class=\"menuConfiguracion\">
                                                    <a href=\"#\" class=\"\">
                                                        Mis datos
                                                    </a>
                                                </li>
                                                <li class=\"menuConfiguracion\">
                                                    <a href=\"";
        // line 515
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuarioPrivacidad", array("login" => "usuario1"));
        echo "\" class=\"\">
                                                        Privacidad
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--/row -->
                    </div>
                </div> <!-- End Top Bar -->
                <!-- Login -->
                
                <!-- End Login -->
                ";
    }

    // line 534
    public function block_contenido($context, array $blocks = array())
    {
        echo "<!-- Contenido -->
        <div class=\"container\"><!-- Contenedor -->
        <div class=\"row mt20 mb20\"><!-- Fila -->
            ";
        // line 537
        $this->displayBlock('columnaIzquierda', $context, $blocks);
        // line 595
        echo "            ";
        $this->displayBlock('columnaDerecha', $context, $blocks);
        // line 668
        echo "        </div><!-- Fin Fila -->
    </div><!-- Fin Contenedor -->
    ";
    }

    // line 537
    public function block_columnaIzquierda($context, array $blocks = array())
    {
        // line 538
        echo "            <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\"><!-- Columna izquierda -->
                <div class=\"row panelSombra mb20\"><!-- Menu vertical -->
                    <div class=\"menuVertical\" id=\"menuVertical\">
                        <ul class=\"sidebar-menu\">
                            <li>
                                <a href=\"";
        // line 543
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicioSesion", array("login" => "usuario1"));
        echo "\" class=\"menuActivo\" id=\"menu1\">
                                    <i class=\"fa fa-home\"></i>
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 549
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosEntradas", array("login" => "usuario1"));
        echo "\" class=\"\" id=\"menu2\">
                                    <i class=\"fa fa-ticket\"></i>
                                    <span>Entradas</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 555
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosFavoritos", array("login" => "usuario1"));
        echo "\" class=\"\" id=\"menu3\">
                                    <i class=\"fa fa-heart\"></i>
                                    <span>Favoritos</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 561
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosSeguidores", array("login" => "usuario1"));
        echo "\" class=\"\" id=\"menu4\">
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    <span>Seguidores</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 567
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosEventos", array("login" => "usuario1"));
        echo "\" class=\"\" id=\"menu5\">
                                    <i class=\"fa fa-bullhorn\"></i>
                                    <span>Eventos</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 573
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosMensajes", array("login" => "usuario1"));
        echo "\" class=\"\" id=\"menu6\">
                                    <i class=\"glyphicon glyphicon-envelope\"></i>
                                    <span>Mensajes</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 579
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosArtistas", array("login" => "usuario1"));
        echo "\" class=\"\" id=\"menu7\">
                                    <i class=\"glyphicon glyphicon-music\"></i>
                                    <span>Artistas</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 585
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosNotificaciones", array("login" => "usuario1"));
        echo "\" class=\"\" id=\"menu8\">
                                    <i class=\"fa fa-bell\"></i>
                                    <span>Notificaciones</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Fin Menu vertical -->
            </div><!-- Fin Columna izquierda -->
            ";
    }

    // line 595
    public function block_columnaDerecha($context, array $blocks = array())
    {
        // line 596
        echo "            <div class=\"col-xs-12 col-sm-12 col-md-9 col-lg-9\"><!-- Columna derecha -->
                ";
        // line 597
        $this->displayBlock('encabezadoContenido', $context, $blocks);
        // line 620
        echo "                ";
        $this->displayBlock('contenidoDerecha', $context, $blocks);
        // line 666
        echo "            </div><!-- Fin Columna derecha -->
            ";
    }

    // line 597
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        // line 598
        echo "                <div class=\"row ml5\" id=\"buscador\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">  
                        <div class=\"row\"><!-- Titulo y buscador -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"tituloSesion\">Tabl&oacute;n de anuncios</div>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Buscador -->
                                <form action=\"#\" method=\"post\" role=\"form\">
                                    <div class=\"input-group buscador2\">
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-default boton\" type=\"submit\">
                                                <span class=\"glyphicon glyphicon-search\"></span>
                                            </button>
                                        </div>                        
                                        <input type=\"text\" id=\"buscador2\" name=\"buscador2\" class=\"form-control tBuscador\" placeholder=\"Buscar...\">
                                    </div>
                                </form>
                            </div><!-- Fin del Buscador -->
                        </div><!-- Fin de Titulo y buscador -->
                    </div>
                </div>
                ";
    }

    // line 620
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        echo " 
                <div class=\"row mt5 ml5\" id=\"anuncios\"><!-- Fila 1-->
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 panelAnuncio\"><!-- Anuncio 1 -->
                        <div class=\"row\">
                            <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                <img src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-circle img-responsive imagenUsuario\">
                            </div>
                            <div class=\"col-xs-6 col-sm-7 col-md-7 col-lg-7\"><!-- Descripción -->
                                <div class=\"row mt20\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoProximo\">
                                        Proximo Concierto
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                        Sala Caracol
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                                        IZAL + artista invitado
                                    </div>
                                </div>
                            </div><!-- Fin Descripción -->
                            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- Dia -->
                                <div class=\"diaCalendario text-center\">
                                    <div class=\"row\">ABR</div>
                                    <div class=\"row dia\">19</div>
                                    <div class=\"row\">2018</div>
                                </div>
                            </div><!-- Fin Dia -->
                        </div><!-- Fin row -->
                        <div class=\"row\">
                            <div class=\"textoDesde2\">
                                Desde                                  
                            </div>
                            <div class=\"textoPrecio2\">10 €</div>
                        </div>
                    </div><!-- Fin Anuncio 1 -->
                    ";
        // line 660
        $this->loadTemplate("usuarios/notificacionesModelo3.html.twig", "usuarios/sesion.html.twig", 660)->display($context);
        // line 661
        echo "                    ";
        $this->loadTemplate("usuarios/notificacionesModelo.html.twig", "usuarios/sesion.html.twig", 661)->display($context);
        // line 662
        echo "                    ";
        $this->loadTemplate("usuarios/notificacionesModelo3.html.twig", "usuarios/sesion.html.twig", 662)->display($context);
        // line 663
        echo "                    ";
        $this->loadTemplate("usuarios/notificacionesModelo.html.twig", "usuarios/sesion.html.twig", 663)->display($context);
        echo "                    
                </div><!-- Fin Fila 1-->
                ";
    }

    // line 676
    public function block_javascripts($context, array $blocks = array())
    {
        // line 677
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Select -->
    <script type=\"text/javascript\" src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Simple Ajax Uploader -->
    <script type=\"text/javascript\" src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/SimpleAjaxUploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- On Scroll Animations - scrollReveal.js -->
    <script>
        var config = {
            easing: 'hustle',
            mobile:  true,
            delay:  'onload'
        }
        window.sr = new scrollReveal( config );
/*   //scrollup section*/
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.scrollup').fadeIn();
            } else {
                jQuery('.scrollup').fadeOut();
            }
        });
/********/
        jQuery('.scrollup').click(function () {
            jQuery(\"html, body\").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
/***/
        function wait(container){
            \$(container).waitMe({
                effect: 'facebook',
                text: 'Por favor, espere...',
                bg: 'rgba(255,255,255,0.7)',
                color:'#000',
                sizeW:'',
                sizeH:'',
                source: 'img.svg',
                onClose: function() {}
            });
        }
        function endWait(container){
            \$(container).waitMe('hide');
        }
        

    </script>
    ";
        // line 738
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
        // line 739
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
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
/**********************Menu****************************************************/
        \$(document).scroll(function() {
            if(screen.width<768){
                /*alert(\"resolución de telefono.\\nPantalla de: \"+screen.width + \" x \" + screen.height);*/
                document.getElementById(\"menuVertical\").setAttribute(\"style\", \"width: 100%;\");
            }
            else{
                var max = 0;
                ";
        // line 770
        if ((($context["cantResultados"] ?? null) >= 3)) {
            // line 771
            echo "                    max = 134*";
            echo twig_escape_filter($this->env, ($context["cantResultados"] ?? null), "html", null, true);
            echo ";
                ";
        } else {
            // line 773
            echo "                    max = 470;
                ";
        }
        // line 775
        echo "                if(\$(document).scrollTop() >= 30 && \$(document).scrollTop()<= max){
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
                }
                else{
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
                }
            }
        });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "usuarios/sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1116 => 775,  1112 => 773,  1106 => 771,  1104 => 770,  1080 => 749,  1075 => 747,  1071 => 746,  1067 => 745,  1063 => 744,  1059 => 743,  1055 => 742,  1050 => 740,  1047 => 739,  1041 => 738,  995 => 695,  991 => 694,  986 => 692,  981 => 690,  976 => 688,  972 => 687,  968 => 686,  964 => 685,  960 => 684,  956 => 683,  952 => 682,  948 => 681,  944 => 680,  940 => 679,  936 => 678,  933 => 677,  930 => 676,  922 => 663,  919 => 662,  916 => 661,  914 => 660,  876 => 625,  867 => 620,  842 => 598,  839 => 597,  834 => 666,  831 => 620,  829 => 597,  826 => 596,  823 => 595,  809 => 585,  800 => 579,  791 => 573,  782 => 567,  773 => 561,  764 => 555,  755 => 549,  746 => 543,  739 => 538,  736 => 537,  730 => 668,  727 => 595,  725 => 537,  718 => 534,  698 => 515,  668 => 488,  658 => 481,  608 => 434,  596 => 426,  590 => 423,  581 => 671,  578 => 670,  576 => 534,  571 => 532,  567 => 530,  565 => 426,  559 => 423,  553 => 421,  548 => 420,  170 => 38,  165 => 36,  160 => 34,  156 => 33,  153 => 32,  150 => 31,  144 => 418,  140 => 417,  135 => 415,  131 => 414,  125 => 412,  123 => 31,  119 => 30,  114 => 28,  110 => 27,  106 => 26,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  72 => 16,  67 => 14,  61 => 11,  56 => 9,  50 => 5,  47 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/sesion.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/sesion.html.twig");
    }
}
