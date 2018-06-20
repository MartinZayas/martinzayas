<?php

/* default/inicio.html.twig */
class __TwigTemplate_a0833c5e6758030800832f4864330e2e405b1b02e3a80d1cb8317273b7aa33ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/inicio.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'subHeader' => array($this, 'block_subHeader'),
            'banner' => array($this, 'block_banner'),
            'buscar' => array($this, 'block_buscar'),
            'comoFunciona' => array($this, 'block_comoFunciona'),
            'conciertosPopulares' => array($this, 'block_conciertosPopulares'),
            'comoFuncionaVentas' => array($this, 'block_comoFuncionaVentas'),
            'porqueBC' => array($this, 'block_porqueBC'),
            'condiciones' => array($this, 'block_condiciones'),
            'dondeActuar' => array($this, 'block_dondeActuar'),
            'ahorra' => array($this, 'block_ahorra'),
            'giras' => array($this, 'block_giras'),
            'contacto' => array($this, 'block_contacto'),
            'comoFuncionUsuarios' => array($this, 'block_comoFuncionUsuarios'),
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
        echo "Busco Concierto";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <!-- Royal Preloader CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/royal_preloader.css"), "html", null, true);
        echo "\">
    <!-- jQuery Files -->
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap select -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <!-- Stylesheets -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery.snippet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/waitMe/waitMe.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Icon Fonts -->
    <link href='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <!-- Magnific Popup -->
    <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/magnific-popup.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    ";
        // line 29
        $this->displayBlock('cssPersonalizados', $context, $blocks);
        // line 84
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">


";
    }

    // line 29
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 30
        echo "    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/layers.css"), "html", null, true);
        echo "\">
    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">
    <!-- CountDown Styles -->
    <link href=\"";
        // line 36
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
        
        .btn-youtube{
            color: #ffffff;
            background-color: red;
        }
        .bordered-icon-lg {
            border-radius:0;
            font-size:34px !important;
            text-align:center;
            border:1px solid #D2D2D2;
            border-radius:50%;
            color:#00B7EB;
            background-color:transparent;
            padding-top:28px;
            height:90px;            
            width:90px;
        }
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
    </style>
    ";
    }

    // line 92
    public function block_classBody($context, array $blocks = array())
    {
    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        // line 95
        echo "    <!-- Begin Boxed or Fullwidth Layout -->
    <div id=\"bg-boxed\">
        <div class=\"";
        // line 97
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                <!-- Begin Top Bar -->
                <div class=\"top-bar\" id=\"fixed-topBar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- ¿Como funciona? -->
                            <div class=\"col-sm-5 col-md-5 col-lg-5\">
                                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                    <li style=\"border-left:none;\"><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 108
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
                                            ";
        // line 135
        echo "                                            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Profesional</a></li>
                                            <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroEspectador");
        echo "\">Espectador</a></li>
                                            ";
        // line 138
        echo "                                        </ul>
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
        // line 152
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
        // line 177
        $this->loadTemplate("registro/registro.html.twig", "default/inicio.html.twig", 177)->display($context);
        // line 178
        echo "                <!-- Begin Navigation -->
                ";
        // line 179
        $this->loadTemplate("default/menu.html.twig", "default/inicio.html.twig", 179)->display($context);
        // line 180
        echo "                ";
        $this->displayBlock('subHeader', $context, $blocks);
        // line 181
        echo "            </header>
    ";
        // line 182
        $this->displayBlock('banner', $context, $blocks);
        // line 438
        echo "    ";
        $this->displayBlock('buscar', $context, $blocks);
        // line 441
        echo "    ";
        $this->displayBlock('comoFunciona', $context, $blocks);
        // line 444
        echo "    ";
        $this->displayBlock('conciertosPopulares', $context, $blocks);
        // line 447
        echo "    ";
        $this->displayBlock('comoFuncionaVentas', $context, $blocks);
        // line 449
        echo "    
    ";
        // line 450
        $this->displayBlock('porqueBC', $context, $blocks);
        // line 453
        echo "    ";
        $this->displayBlock('condiciones', $context, $blocks);
        // line 456
        echo "    ";
        $this->displayBlock('dondeActuar', $context, $blocks);
        // line 459
        echo "    ";
        $this->displayBlock('ahorra', $context, $blocks);
        // line 462
        echo "    ";
        $this->displayBlock('giras', $context, $blocks);
        // line 465
        echo "    ";
        $this->displayBlock('contacto', $context, $blocks);
        // line 468
        echo "    ";
        $this->displayBlock('comoFuncionUsuarios', $context, $blocks);
        // line 471
        echo "    ";
        $this->loadTemplate("default/pie.html.twig", "default/inicio.html.twig", 471)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
";
    }

    // line 97
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 180
    public function block_subHeader($context, array $blocks = array())
    {
    }

    // line 182
    public function block_banner($context, array $blocks = array())
    {
        // line 183
        echo "    <!-- Start Slider Revolution -->
    <div class=\"rev_slider_wrapper\">
        <div class=\"rev_slider\" data-version=\"5.0\" id=\"slider1\">
            <ul><!-- Slide 1 -->
                <li data-delay=\"11300\"
                    data-description=\"Raleway Bootstrap Template\"
                    data-easein=\"default\"
                    data-easeout=\"default\"
                    data-masterspeed=\"default\"
                    data-param1=\"test\"
                    data-rotate=\"0\"
                    data-slotamount=\"default\"
                    data-title=\"Raleway Intro\"
                    data-thumb=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/banner1.png"), "html", null, true);
        echo "\"
                    data-transition=\"slideremoveup\">
                    <!-- MAIN IMAGE -->
                    <img alt=\"\"
                         data-bgfit=\"cover\"
                         data-bgposition=\"center center\"
                         data-bgrepeat=\"no-repeat\"
                         data-no-retina=\"\"
                         height=\"800\"
                         src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/banner1.png"), "html", null, true);
        echo "\"
                         style=\"background-color:#000;\"
                         width=\"1732\">\t\t\t\t\t\t\t
                    <div class=\"tp-caption\"
                         data-x=\"center\"
                         data-y=\"165\"
                         data-speed=\"600\"
                         data-start=\"500\"
                         data-end=\"11500\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"
                         data-transform_out=\"y:50px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"padding: 0px 3px; font-size: 46px; visibility: visible; border-bottom:2px solid rgba(255, 255, 255, 0.24); color:#fff; font-family: 'Raleway' sans-serif; text-shadow: 0 0 15px #000, 0 0 5px #000\">
                        ¿Buscas dónde actuar? ¿Buscas artistas para tu local?
                    </div>

                    <div class=\"tp-caption\"
                         data-x=\"center\"
                         data-y=\"255\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11500\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"y:150px;opacity:0;s:700;e:Power3.easeOut;\"
                         data-transform_out=\"y:150px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"padding: 0px 3px; font-size: 24px; visibility: visible; color:white; font-family: 'Open Sans' sans-serif; text-align:center; text-shadow: 0 0 15px #000, 0 0 5px #000\">
\t\t\t\t\t\t<p>Regístrate y comienza a montar tu gira de conciertos, ¡es GRATIS!<br>
\t\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#register\" href=\"#\" class=\"btn btn-rw btn-clear mt10\">
\t\t\t\t\t\t\tREGÍSTRATE &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t</p>
                    </div>
                </li>\t\t\t\t
\t<!-- Slide 2 -->
                <li data-delay=\"11300\"
                    data-description=\"Raleway Bootstrap Template\"
                    data-easein=\"default\"
                    data-easeout=\"default\"
                    data-masterspeed=\"default\"
                    data-param1=\"test\"
                    data-rotate=\"0\"
                    data-slotamount=\"default\"
                    data-title=\"Raleway Intro\"
                    data-thumb=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/banner3.jpg"), "html", null, true);
        echo "\"
                    data-transition=\"slideremoveup\">
                    <!-- MAIN IMAGE -->
                    <img alt=\"\"
                         data-bgfit=\"cover\"
                         data-bgposition=\"center center\"
                         data-bgrepeat=\"no-repeat\"
                         data-no-retina=\"\"
                         height=\"800\"
                         src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/banner3.jpg"), "html", null, true);
        echo "\"
                         style=\"background-color:#000;\"
                         width=\"1732\">
                    <div class=\"tp-caption\"
                         data-x=\"center\"
                         data-y=\"145\"
                         data-speed=\"600\"
                         data-start=\"500\"
                         data-end=\"11500\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"
                         data-transform_out=\"y:50px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"padding: 0px 3px; font-size: 46px; visibility: visible; border-bottom:2px solid rgba(255, 255, 255, 0.24); color:#fff; font-family: 'Raleway' sans-serif; text-shadow: 0 0 15px #000, 0 0 5px #000\">
                        Conectamos música,<span class=\"heavy\"> Únete a la Comunidad</span>
                    </div>
                    <div class=\"tp-caption\"
                         data-x=\"center\"
                         data-y=\"235\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11500\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"y:150px;opacity:0;s:700;e:Power3.easeOut;\"
                         data-transform_out=\"y:150px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"padding: 0px 3px; font-size: 24px; visibility: visible; color:#e0e0e0; font-family: 'Open Sans' sans-serif; text-align:center; text-shadow: 0 0 15px #000, 0 0 5px #000\">
\t\t\t\t\t\t<p>Descubre nuevos <b>eventos</b> o crea el tuyo propio, contrata y se contratado, conoce nuevos <b>artistas<br/> y locales de conciertos</b>, vende y compra tus <b>entradas</b>.<br>
\t\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#register\" href=\"#\" class=\"btn btn-rw btn-clear mt10\">
\t\t\t\t\t\t\tREGÍSTRATE &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t</p>
                    </div>
                </li>
                <!-- Slide 3 -->
                <li data-delay=\"10700\"
                    data-description=\"Some Description\"
                    data-easein=\"default\"
                    data-easeout=\"default\"
                    data-masterspeed=\"default\"
                    data-param1=\"test\"
                    data-rotate=\"0\"
                    data-slotamount=\"default\"
                    data-thumb=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/banner2.jpg"), "html", null, true);
        echo "\"
                    data-title=\"Features\"
                    data-transition=\"slideremoveleft\">
                    <!-- MAIN IMAGE -->
                    <img alt=\"\"
                         data-bgfit=\"cover\"
                         data-bgposition=\"center center\"
                         data-bgrepeat=\"no-repeat\"
                         data-no-retina=\"\"
                         height=\"800\"
                         src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/banner2.jpg"), "html", null, true);
        echo "\"
                         style=\"background-color:#000;\"
                         width=\"1732\">
                    <div class=\"tp-caption\"
                         data-x=\"center\"
                         data-y=\"95\"
                         data-speed=\"600\"
                         data-start=\"500\"
                         data-end=\"11000\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"y:10px;opacity:0;s:700;e:Power3.easeOut;\"
                         data-transform_out=\"y:10px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"color:#fff;font-size:35px;font-family:'Raleway' sans-serif;font-weight:200;border:2px solid #fff;padding:0 17px; text-shadow: 0 0 15px #000, 0 0 5px #000\">
                        Te ayudamos a hacer crecer tu carrera artística
                    </div>
                    <div class=\"tp-caption background-mainsub\"
                         data-x=\"330\"
                         data-y=\"185\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11000\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"x:100px;opacity:0;s:1200;e:Power3.easeOut;\"
                         data-transform_out=\"y:100px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"color:#fff;font-size:27px;font-family:'FontAwesome' sans-serif;line-height:50px;text-align:center;padding-left:12px;padding-right:12px;border-radius:50%\">
                        <span class=\"fa fa-check\"></span>
                    </div>
                    <div class=\"tp-caption\"
                         data-x=\"400\"
                         data-y=\"190\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11000\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"x:130px;opacity:0;s:1200;e:Power3.easeOut;\"
                         data-transform_out=\"y:130px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"color:#fff;font-size:24px;font-family:'Open Sans' sans-serif;font-weight:300; text-shadow: 0 0 15px #000, 0 0 5px #000\">
                        Monta tu <strong>gira de conciertos</strong> en unos clics
                    </div>

                    <div class=\"tp-caption background-mainsub\"
                         data-x=\"330\"
                         data-y=\"241\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11000\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"x:160px;opacity:0;s:1200;e:Power3.easeOut;\"
                         data-transform_out=\"y:160px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"color:#fff;font-size:27px;font-family:'FontAwesome' sans-serif;line-height:50px;text-align:center;padding-left:12px;padding-right:12px;border-radius:50%\">

                        <span class=\"fa fa-check\"></span>

                    </div>

                    <div class=\"tp-caption\"
                         data-x=\"400\"
                         data-y=\"246\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11000\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"x:190px;opacity:0;s:1200;e:Power3.easeOut;\"
                         data-transform_out=\"y:190px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"color:#fff;font-size:24px;font-family:'Open Sans' sans-serif;font-weight:300; text-shadow: 0 0 15px #000, 0 0 5px #000\">
\t\t\t\t\t\tPromociona tus <strong>eventos</strong> y hazte oír
                    </div>

                    <div class=\"tp-caption background-mainsub\"
                         data-x=\"330\"
                         data-y=\"300\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11000\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"x:220px;opacity:0;s:1200;e:Power3.easeOut;\"
                         data-transform_out=\"y:220px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"color:#fff;font-size:27px;font-family:'FontAwesome' sans-serif;line-height:50px;text-align:center;padding-left:12px;padding-right:12px;border-radius:50%\">

                        <span class=\"fa fa-check\"></span>

                    </div>

                    <div class=\"tp-caption\"
                         data-x=\"400\"
                         data-y=\"305\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11000\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"x:260px;opacity:0;s:1200;e:Power3.easeOut;\"
                         data-transform_out=\"y:260px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"color:#fff;font-size:24px;font-family:'Open Sans' sans-serif;font-weight:300; text-shadow: 0 0 15px #000, 0 0 5px #000\">
\t\t\t\t\t\tVende y cobra tus <strong>entradas</strong> de forma segura
                    </div>

                    <div class=\"tp-caption\"
                         data-x=\"center\"
                         data-y=\"350\"
                         data-speed=\"600\"
                         data-start=\"600\"
                         data-end=\"11000\"
                         data-endspeed=\"600\"
                         data-transform_idle=\"o:1;\"
                         data-transform_in=\"y:70px;opacity:0;s:1000;e:Power3.easeOut;\"
                         data-transform_out=\"y:70px;opacity:0;s:500;e:Power2.easeInOut;\"
                         style=\"color:#fff;font-size:17px;font-family:'Open Sans' sans-serif;font-weight:300; text-shadow: 0 0 15px #000, 0 0 5px #000\">
                        <strong>
                            <a href=\"";
        // line 427
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\" class=\"btn btn-rw btn-clear mt10\">
                                    Saber más &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                            </a>
                        </strong>
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- /rev slider -->
    <!-- End Slider Revolution -->
  ";
    }

    // line 438
    public function block_buscar($context, array $blocks = array())
    {
        // line 439
        echo "        ";
        $this->loadTemplate("busquedas/buscadorPrincipal.html.twig", "default/inicio.html.twig", 439)->display($context);
        // line 440
        echo "    ";
    }

    // line 441
    public function block_comoFunciona($context, array $blocks = array())
    {
        // line 442
        echo "        ";
        $this->loadTemplate("ayuda/comoFunciona.html.twig", "default/inicio.html.twig", 442)->display($context);
        // line 443
        echo "    ";
    }

    // line 444
    public function block_conciertosPopulares($context, array $blocks = array())
    {
        // line 445
        echo "        ";
        $this->loadTemplate("eventos/conciertosPopulares.html.twig", "default/inicio.html.twig", 445)->display($context);
        // line 446
        echo "    ";
    }

    // line 447
    public function block_comoFuncionaVentas($context, array $blocks = array())
    {
        echo "<!-- Seccion de cpmo funciona ventas -->
        ";
        // line 448
        $this->loadTemplate("ayuda/comoFuncionaVentas.html.twig", "default/inicio.html.twig", 448)->display($context);
        // line 449
        echo "    ";
    }

    // line 450
    public function block_porqueBC($context, array $blocks = array())
    {
        // line 451
        echo "        ";
        $this->loadTemplate("ayuda/porqueBC.html.twig", "default/inicio.html.twig", 451)->display($context);
        // line 452
        echo "    ";
    }

    // line 453
    public function block_condiciones($context, array $blocks = array())
    {
        // line 454
        echo "        ";
        $this->loadTemplate("ayuda/condiciones.html.twig", "default/inicio.html.twig", 454)->display($context);
        // line 455
        echo "    ";
    }

    // line 456
    public function block_dondeActuar($context, array $blocks = array())
    {
        // line 457
        echo "        ";
        $this->loadTemplate("ayuda/dondeActuar.html.twig", "default/inicio.html.twig", 457)->display($context);
        // line 458
        echo "    ";
    }

    // line 459
    public function block_ahorra($context, array $blocks = array())
    {
        echo " 
        ";
        // line 460
        $this->loadTemplate("ayuda/ahorra.html.twig", "default/inicio.html.twig", 460)->display($context);
        // line 461
        echo "    ";
    }

    // line 462
    public function block_giras($context, array $blocks = array())
    {
        // line 463
        echo "        ";
        $this->loadTemplate("eventos/comenzarGira.html.twig", "default/inicio.html.twig", 463)->display($context);
        // line 464
        echo "    ";
    }

    // line 465
    public function block_contacto($context, array $blocks = array())
    {
        // line 466
        echo "        ";
        $this->loadTemplate("ayuda/contacto.html.twig", "default/inicio.html.twig", 466)->display($context);
        // line 467
        echo "    ";
    }

    // line 468
    public function block_comoFuncionUsuarios($context, array $blocks = array())
    {
        // line 469
        echo "        ";
        $this->loadTemplate("ayuda/comoFuncionaUsuario.html.twig", "default/inicio.html.twig", 469)->display($context);
        // line 470
        echo "    ";
    }

    // line 477
    public function block_javascripts($context, array $blocks = array())
    {
        // line 478
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/messages_es.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Select -->
    <script type=\"text/javascript\" src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Simple Ajax Uploader -->
    <script type=\"text/javascript\" src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/SimpleAjaxUploader.min.js"), "html", null, true);
        echo "\"></script>

    <!-- script type=\"text/javascript\" src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script -->

    <!-- On Scroll Animations - scrollReveal.js -->
    <script>
        var config = {
            easing: 'hustle',
            mobile:  true,
            delay:  'onload'
        }
        window.sr = new scrollReveal( config );

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


        \$(document).ready(function(){
            \$('.selectpicker').selectpicker();

            //tipos de usuario

            \$('#espectador-link').on('click',function(e){
                e.preventDefault();
                \$('#tipos-usuario-text-container div.description-container').hide();
                \$('.item-usuario-container p').removeClass('item-usuario-selected');
                \$('#espectador-text-container').fadeIn();
                \$(this).siblings('p').addClass('item-usuario-selected');

                \$('#userType').val('ROLE_CLIENT');
            });

            \$('#artista-link').on('click',function(e){
                e.preventDefault();
                \$('#tipos-usuario-text-container div.description-container').hide();
                \$('.item-usuario-container p').removeClass('item-usuario-selected');
                \$('#artista-text-container').fadeIn();
                \$(this).siblings('p').addClass('item-usuario-selected');

                \$('#userType').val('ROLE_ARTIST');
            });

            \$('#local-link').on('click',function(e){
                e.preventDefault();
                \$('#tipos-usuario-text-container div.description-container').hide();
                \$('.item-usuario-container p').removeClass('item-usuario-selected');
                \$('#local-text-container').fadeIn();
                \$(this).siblings('p').addClass('item-usuario-selected');

                \$('#userType').val('ROLE_LOCAL');
            });

            \$('#profesional-link').on('click',function(e){
                e.preventDefault();
                \$('#tipos-usuario-text-container div.description-container').hide();
                \$('.item-usuario-container p').removeClass('item-usuario-selected');
                \$('#profesional-text-container').fadeIn();
                \$(this).siblings('p').addClass('item-usuario-selected');

                \$('#userType').val('ROLE_PROFESSIONAL');
            });
        });

    </script>

    ";
        // line 592
        $this->displayBlock('customScripts', $context, $blocks);
        // line 702
        echo "
";
    }

    // line 592
    public function block_customScripts($context, array $blocks = array())
    {
        // line 593
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>

    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

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

        jQuery(\"#slider1\").revolution({
            sliderType:\"standard\",
            startDelay:2500,
            spinner:\"spinner2\",
            sliderLayout:\"auto\",
            viewPort:{
                enable:false,
                outof:'wait',
                visible_area:'100%'
            }
            ,
            delay:9000,
            navigation: {
                keyboardNavigation:\"off\",
                keyboard_direction: \"horizontal\",
                mouseScrollNavigation:\"off\",
                onHoverStop:\"off\",
                arrows: {
                    style:\"erinyen\",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class=\"tp-title-wrap\">  \t<div class=\"tp-arr-imgholder\"></div>    <div class=\"tp-arr-img-over\"></div>\t<span class=\"tp-arr-titleholder\"></span> </div>',
                    left: {
                        h_align:\"left\",
                        v_align:\"center\",
                        h_offset:30,
                        v_offset:0
                    },
                    right: {
                        h_align:\"right\",
                        v_align:\"center\",
                        h_offset:30,
                        v_offset:0
                    }
                }
                ,
                touch:{
                    touchenabled:\"on\",
                    swipe_treshold : 75,
                    swipe_min_touches : 1,
                    drag_block_vertical:false,
                    swipe_direction:\"horizontal\"
                }
                ,
                bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:\"hermes\",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:\"horizontal\",
                    h_align:\"center\",
                    v_align:\"bottom\",
                    h_offset:0,
                    v_offset:30,
                    space:5
                }
            },
            gridwidth:1240,
            gridheight:497
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
        return "default/inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  999 => 603,  995 => 602,  991 => 601,  987 => 600,  982 => 598,  978 => 597,  972 => 594,  969 => 593,  966 => 592,  961 => 702,  959 => 592,  862 => 498,  857 => 496,  852 => 494,  847 => 492,  843 => 491,  838 => 489,  834 => 488,  830 => 487,  826 => 486,  822 => 485,  818 => 484,  814 => 483,  810 => 482,  806 => 481,  802 => 480,  798 => 479,  795 => 478,  792 => 477,  788 => 470,  785 => 469,  782 => 468,  778 => 467,  775 => 466,  772 => 465,  768 => 464,  765 => 463,  762 => 462,  758 => 461,  756 => 460,  751 => 459,  747 => 458,  744 => 457,  741 => 456,  737 => 455,  734 => 454,  731 => 453,  727 => 452,  724 => 451,  721 => 450,  717 => 449,  715 => 448,  710 => 447,  706 => 446,  703 => 445,  700 => 444,  696 => 443,  693 => 442,  690 => 441,  686 => 440,  683 => 439,  680 => 438,  665 => 427,  547 => 312,  534 => 302,  488 => 259,  476 => 250,  428 => 205,  416 => 196,  401 => 183,  398 => 182,  393 => 180,  387 => 97,  377 => 471,  374 => 468,  371 => 465,  368 => 462,  365 => 459,  362 => 456,  359 => 453,  357 => 450,  354 => 449,  351 => 447,  348 => 444,  345 => 441,  342 => 438,  340 => 182,  337 => 181,  334 => 180,  332 => 179,  329 => 178,  327 => 177,  299 => 152,  283 => 138,  279 => 136,  274 => 135,  245 => 108,  241 => 107,  228 => 97,  224 => 95,  221 => 94,  216 => 92,  164 => 36,  159 => 34,  154 => 32,  150 => 31,  147 => 30,  144 => 29,  136 => 87,  132 => 86,  126 => 84,  124 => 29,  120 => 28,  115 => 26,  111 => 25,  107 => 24,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  73 => 14,  68 => 12,  63 => 10,  57 => 6,  54 => 5,  48 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/inicio.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/default/inicio.html.twig");
    }
}
