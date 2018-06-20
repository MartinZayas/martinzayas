<?php

/* default/perfilv1.html.twig */
class __TwigTemplate_be9008f7b94b7375ba868555e39d9866ae4d26627a87c4ad40be19cc935a2112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/perfilv1.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'subHeader' => array($this, 'block_subHeader'),
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
        echo "Busco Concierto | Artistas ";
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
    <!-- Royal Preloader -->
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/royal_preloader.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap select -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <!-- Stylesheets -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery.snippet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/waitMe/waitMe.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Icon Fonts -->
    <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <!-- Magnific Popup -->
    <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/magnific-popup.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    ";
        // line 30
        $this->displayBlock('cssPersonalizados', $context, $blocks);
        // line 68
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 30
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 31
        echo "    <!-- Fuentes y estilos -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/estilos.css"), "html", null, true);
        echo "\"> 
    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/layers.css"), "html", null, true);
        echo "\">

    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">

    <!-- CountDown Styles -->
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/TimeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
    </style>
";
    }

    // line 73
    public function block_classBody($context, array $blocks = array())
    {
        echo "royal_preloader scrollreveal";
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo "    <div id=\"royal_preloader\"></div>
    <!-- Begin Boxed or Fullwidth Layout -->
    <div id=\"bg-boxed\">
        <div class=\"";
        // line 78
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                <!-- Begin Top Bar -->
                <div class=\"top-bar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- ¿Como funciona? -->
                            <div class=\"col-sm-7 col-md-7 col-lg-7\">
                                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                    <li style=\"border-left:none;\"><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comprarEntradas");
        echo "\">¿Cómo comprar entradas?</a></li>
                                    <li style=\"border-left:none;\"><a href=\"#contacto\">Contacto</a></li>
                                </ul>
                            </div>
                            <!-- Social Buttons -->
                            <div class=\"col-sm-5 col-md-5 col-lg-5 text-right\">
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
                                    </li><li><a data-toggle=\"modal\" data-target=\"#login\">Iniciar Sesión</a></li><li><a data-toggle=\"modal\" data-target=\"#register\">Regístrate</a></li>
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
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
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
                                <button type=\"button\" name=\"_login\" class=\"btn btn-rw btn-primary\" style=\"float:left\">Entrar</button>
\t\t\t\t&nbsp;<small>¿No tienes una cuenta? <a data-toggle=\"modal\" data-target=\"#register\" href=\"#\">Regístrate</a></small><!--data-dismiss=\"modal\"-->
                            </div>
                            </form><!-- /form -->
                        </div><!-- /modal content -->
                    </div><!-- /modal dialog -->
                </div><!-- /modal holder -->
                <!-- End Login -->
                ";
        // line 141
        $this->loadTemplate("registro/registro.html.twig", "default/perfilv1.html.twig", 141)->display($context);
        // line 142
        echo "                <!-- Begin Navigation -->
                ";
        // line 143
        $this->loadTemplate("default/menu.html.twig", "default/perfilv1.html.twig", 143)->display($context);
        // line 144
        echo "                ";
        $this->displayBlock('subHeader', $context, $blocks);
    }

    // line 78
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 144
    public function block_subHeader($context, array $blocks = array())
    {
        // line 145
        echo "                ";
        $this->displayBlock('headerParallax', $context, $blocks);
        // line 183
        echo "                
            </header>
    ";
        // line 185
        $this->displayBlock('contenido', $context, $blocks);
        // line 479
        echo "<!-- Fin Contenido -->
    ";
        // line 480
        $this->loadTemplate("default/pie.html.twig", "default/perfilv1.html.twig", 480)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
 ";
    }

    // line 145
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 146
        echo "                    ";
        $this->loadTemplate("default/subheader.html.twig", "default/perfilv1.html.twig", 146)->display(array_merge($context, array("bgImage" => (        // line 147
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg4.png"), "subheaderTitle" => "Katy Perry")));
        // line 150
        echo "                <div class=\"row background-white sombraMenu\"><!-- Menu del perfil -->
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Menu -->
                        <div class=\"navbar-header\"> <!-- Mobile Navigation -->
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"glyphicon glyphicon-list\"></span>
                            </button>
                        </div><!-- /navbar header -->
                        <nav class=\"navbar-collapse collapse navHeaderCollapse\" role=\"navigation\">
                            <ul class=\"nav navbar-nav navbar-left\">
                                <li class=\"menu\">
                                    <a href=\"#Biografia\">Biograf&iacute;a</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Videos\">Videos</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Presentaciones\">Presentaciones</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Discos\">Discograf&iacute;a</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                        <a href=\"#\" class=\"compartir\">
                            <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/social.png"), "html", null, true);
        echo "\" alt=\"Compartir\" class=\"img img-responsive logoCompartir\">
                        </a>
                    </div>
                </div><!-- Fin Menu del perfil -->
                ";
    }

    // line 185
    public function block_contenido($context, array $blocks = array())
    {
        echo "<!-- Contenido -->
        <div class=\"container\"><!-- Perfil del Artista -->
        <div class=\"row mt40 mb40\"><!-- Fila -->
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"row panelSombra mb40\" id=\"Biografia\"><!-- Biografia -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                        <h4 class=\"mt10\">
                            <span class=\"glyphicon glyphicon-file\"></span>
                            Biograf&iacute;a
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\">
                        <div class=\"col-xs-6 col-sm-8 col-lg-8\"><!-- Columna de informacion -->
                            <div class=\"row\">
                                <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-2\">
                                    <span class=\"glyphicon glyphicon-music\" style=\"margin-top:10px;\"></span>Estilo Musical
                                </div>
                                <div class=\"col-xs-8 col-sm-9 col-md-9 col-lg-10 textoEstilo\">
                                    Rock, Pop, Dance, G&oacute;spel.
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-lg-12\">
                                    Años de carrera art&iacute;stica: 6
                                </div>
                            </div>
                            <div class=\"row\">
                                <p class=\"mr5\">Katheryn Elizabeth Hudson, más conocida
                                por su nombre artístico Katy Perry, es una cantante 
                                y compositora estadounidense, que saltó a la fama 
                                en 2008 con «I Kissed a Girl» y «Hot n Cold» de 
                                su segundo álbum One of the Boys. Naci&oacute;
                                el 25 de octubre de 1984, en Santa Bárbara, 
                                California, Estados Unidos.
                                </p>
                            </div>
                            <div class=\"row\">
                                Ver pr&oacute;ximos conciertos:<span class=\"textoPromotor\"> Promotor</span>
                            </div>
                        </div><!-- Fin información -->
                        <div class=\"col-xs-6 col-sm-4 col-lg-4\"><!-- Columna de fotos -->
                            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"row\">
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                                    </ol>
                                    <div class=\"carousel-inner\" role=\"listbox\">
                                        <div class=\"item active\">
                                          <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/KP1.png"), "html", null, true);
        echo "\" 
                                           heitgh=\"400\" alt=\"Sala1\" class=\"img img-responsive\">
                                        </div>
                                        <div class=\"item\">
                                          <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/KP2.png"), "html", null, true);
        echo "\"
                                           heitgh=\"400\" alt=\"Sala2\" class=\"img img-responsive\">
                                        </div>
                                        <div class=\"item\">
                                          <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/KP3.png"), "html", null, true);
        echo "\" 
                                            heitgh=\"400\" alt=\"Sala3\" class=\"img img-responsive\">
                                        </div>
                                    </div>
                                    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                        <span class=\"sr-only\">Anterior</span>
                                    </a>
                                    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                        <span class=\"sr-only\">Siguiente</span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- Fin Carusel -->       
                    </div>
                </div><!-- Fin Biografia -->
                <div class=\"row panelSombra mb40\" id=\"Videos\"><!-- Videos -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\">
                        <h4 class=\"mt10\">
                            <span class=\"glyphicon glyphicon-facetime-video\"></span>
                            Videos ";
        // line 265
        echo "                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10\">
                        <div class=\"col-sm-4 col-md-4 col-lg-4\">
                            <iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/0KSOMA3QBU0?rel=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-sm-4 col-md-4 col-lg-4\">
                            <iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/XjwZAa2EjKA\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-sm-4 col-md-4 col-lg-4\">
                            <iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/-1cyCmUdDNQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div><!-- Fin Videos -->
                <div class=\"row panelSombra mb40\" id=\"Presentaciones\"><!-- Presentaciones -->
                    <div class=\"row\"><!-- Fila 1 -->
                       <div class=\"col-sm-12\">
                           <div class=\"heading mb30\">
                               <h4><span class=\"glyphicon glyphicon-globe\"></span>Conciertos populares</h4>
                               <div class=\"owl-controls\">
                                   <div id=\"customNav\" class=\"owl-nav\"></div>
                               </div>
                           </div>
                           <div id=\"owl-carousel-thumb\" class=\"owl-carousel carousel-home\">
                               <div class=\"thumbnail\"><!-- Item 1 -->
                                   <div class=\"view image-hover-1 no-margin\">
                                       <!-- Blog Thumb -->
                                       <div class=\"product-container\">
                                           <img class=\"img-responsive full-width\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" alt=\"...\">
                                           <span class=\"badge home-badge\">
                                               <span class=\"label label-default\">24</span> entradas restantes
                                           </span>
                                       </div>
                                       <div class=\"mask\">
                                           <div class=\"image-hover-content\">
                                               <!-- Zoom + Blog Link -->
                                               <a href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                   <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                               </a>
                                               <a href=\"#\" class=\"info\">
                                                   <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                               </a>
                                           </div><!-- /image hover content -->
                                       </div><!-- /mask-->
                                   </div>
                                   <div class=\"shop-product content-box-shadow\">
                                       <a href=\"\"><h2>Concierto</h2></a>
                                       <div class=\"row\">
                                           <div class=\"col-md-5\">
                                               <span class=\"fecha-container\"><i class=\"fa fa-calendar\"></i> 12 Feb</span>
                                           </div>
                                           <div class=\"col-md-7\" style=\"text-align:left;\">
                                               <span class=\"label label-default shop-product-price\"> 179.99 €</span>
                                           </div>
                                       </div>
                                       <div class=\"row mt10\">
                                           <div class=\"col-md-12\">
                                               <a class=\"location-container pull-left\" href=\"#\"><i class=\"fa fa-map-marker\"></i>
                                                   Barcelona
                                               </a>
                                           </div>
                                       </div>
                                       <div class=\"counter\" data-date=\"2016-11-14 00:00:00\"></div>
                                       <a href=\"\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                           Comprar Entradas
                                       </a>
                                   </div>
                               </div><!-- Fin Item 1 -->
                               <div class=\"thumbnail\">
                                   <div class=\"view image-hover-1 no-margin\">
                                       <!-- Blog Thumb -->
                                       <div class=\"product-container\">
                                           <img class=\"img-responsive full-width\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" alt=\"...\">
                                           <span class=\"badge home-badge\">
                                                   <span class=\"label label-danger\">10</span> entradas restantes
                                           </span>
                                       </div>
                                       <div class=\"mask\">
                                           <div class=\"image-hover-content\">
                                               <!-- Zoom + Blog Link -->
                                               <a href=\"";
        // line 345
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
                                   <div class=\"shop-product content-box-shadow\">
                                       <a href=\"#\"><h2>Viña del Mar</h2></a>
                                       <div class=\"row\">
                                           <div class=\"col-md-5\">
                                               <span class=\"fecha-container\">
                                                   <i class=\"fa fa-calendar\"></i> 12 Feb
                                               </span>
                                           </div>
                                           <div class=\"col-md-7\" style=\"text-align:left;\">
                                               <span class=\"label label-default shop-product-price\"> 20.00 €</span>
                                           </div>
                                       </div>
                                       <div class=\"row mt10\">
                                           <div class=\"col-md-12\">
                                               <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                                   Chile
                                               </span>
                                           </div>
                                       </div>
                                       <div class=\"counter\" data-date=\"2016-11-14 00:00:00\"></div>
                                       <a href=\"#\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                           Comprar Entradas
                                       </a>
                                   </div>
                               </div>
                               <div class=\"thumbnail\">
                                   <div class=\"view image-hover-1 no-margin\">
                                       <!-- Blog Thumb -->
                                       <div class=\"product-container\">
                                           <img class=\"img-responsive full-width\" src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento6.png"), "html", null, true);
        echo "\" alt=\"...\">
                                           <span class=\"badge home-badge\">
                                               <span class=\"label label-default\">70</span> entradas restantes
                                           </span>
                                       </div>
                                       <div class=\"mask\">
                                           <div class=\"image-hover-content\">
                                               <!-- Zoom + Blog Link -->
                                               <a href=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                   <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                               </a>
                                               <a href=\"\" class=\"info\">
                                                   <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                               </a>
                                           </div><!-- /image hover content -->
                                       </div><!-- /mask-->
                                   </div>
                                   <div class=\"shop-product content-box-shadow\">
                                       <a href=\"#\"><h2>Winter Dress</h2></a>
                                       <div class=\"row\">
                                           <div class=\"col-md-5\">
                                               <span class=\"fecha-container\"><i class=\"fa fa-calendar\"></i> 14 Abr</span>
                                           </div>
                                           <div class=\"col-md-7\" style=\"text-align:left;\">
                                               <span class=\"label label-default shop-product-price\"> 17.99 €</span>
                                           </div>
                                       </div>
                                       <div class=\"row mt10\">
                                           <div class=\"col-md-12\">
                                               <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                                   Palau Sant Jordi
                                               </span>
                                           </div>
                                       </div>
                                       <div class=\"counter\" data-date=\"2016-11-14 00:00:00\"></div>
                                       <a href=\"#\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                           Comprar Entradas
                                       </a>
                                   </div>
                               </div>
                               <div class=\"thumbnail\">
                                   <div class=\"view image-hover-1 no-margin\">
                                       <!-- Blog Thumb -->
                                       <div class=\"product-container\">
                                           <img class=\"img-responsive full-width\" src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento7.png"), "html", null, true);
        echo "\" alt=\"...\">
                                           <span class=\"badge home-badge\">
                                               <span class=\"label label-danger\">5</span> entradas restantes
                                           </span>
                                       </div>
                                       <div class=\"mask\">
                                           <div class=\"image-hover-content\">
                                               <!-- Zoom + Blog Link -->
                                               <a href=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento7.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                   <div class=\"image-icon-holder\">
                                                       <span class=\"ion-ios7-search image-icons\"></span>
                                                   </div>
                                               </a>
                                               <a href=\"\" class=\"info\">
                                                   <div class=\"image-icon-holder\">
                                                       <span class=\"ion-link image-icons\"></span>
                                                   </div>
                                               </a>
                                           </div><!-- /image hover content -->
                                       </div><!-- /mask-->
                                   </div>
                                   <div class=\"shop-product content-box-shadow\">
                                       <a href=\"\"><h2>Men's Lumberjack</h2></a>
                                       <div class=\"row\">
                                           <div class=\"col-md-5\">
                                               <span class=\"fecha-container\"><i class=\"fa fa-calendar\"></i> 14 Abr</span>
                                           </div>
                                           <div class=\"col-md-7\" style=\"text-align:left;\">
                                               <span class=\"label label-default shop-product-price\"> 15.99 €</span>
                                           </div>
                                       </div>
                                       <div class=\"row mt10\">
                                           <div class=\"col-md-12\">
                                               <span class=\"location-container pull-left\">
                                                   <i class=\"fa fa-map-marker\"></i>
                                                   Palau Sant Jordi
                                               </span>
                                           </div>
                                       </div>
                                       <div class=\"counter\" data-date=\"2016-11-14 00:00:00\"></div>
                                       <a href=\"\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                           Comprar Entradas
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div><!-- Fin row -->    
                </div><!-- Fin Presentaciones -->
            </div>
        </div><!-- Fin Fila -->
    </div><!-- Fin Perfil del Artista -->
    ";
    }

    // line 486
    public function block_javascripts($context, array $blocks = array())
    {
        // line 487
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\"></script>

    <!-- JQuery Validate -->

    <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 504
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/messages_es.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Select -->

    <script type=\"text/javascript\" src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Simple Ajax Uploader -->

    <script type=\"text/javascript\" src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/SimpleAjaxUploader.min.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\" src=\"";
        // line 515
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
        // line 608
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
        // line 609
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 617
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
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "default/perfilv1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  915 => 617,  911 => 616,  907 => 615,  903 => 614,  899 => 613,  895 => 612,  890 => 610,  887 => 609,  881 => 608,  785 => 515,  779 => 512,  772 => 508,  764 => 504,  760 => 502,  753 => 498,  749 => 497,  745 => 496,  741 => 495,  737 => 494,  733 => 493,  729 => 492,  725 => 491,  721 => 490,  717 => 489,  713 => 488,  710 => 487,  707 => 486,  658 => 435,  647 => 427,  608 => 391,  597 => 383,  556 => 345,  545 => 337,  506 => 301,  495 => 293,  465 => 265,  441 => 243,  434 => 239,  427 => 235,  373 => 185,  364 => 179,  333 => 150,  331 => 147,  329 => 146,  326 => 145,  317 => 480,  314 => 479,  312 => 185,  308 => 183,  305 => 145,  302 => 144,  296 => 78,  291 => 144,  289 => 143,  286 => 142,  284 => 141,  256 => 116,  226 => 89,  222 => 88,  209 => 78,  204 => 75,  201 => 74,  195 => 73,  164 => 41,  158 => 38,  152 => 35,  148 => 34,  143 => 32,  140 => 31,  137 => 30,  131 => 71,  127 => 70,  121 => 68,  119 => 30,  115 => 29,  110 => 27,  106 => 26,  102 => 25,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  68 => 15,  63 => 13,  58 => 11,  53 => 9,  47 => 5,  44 => 4,  38 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/perfilv1.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/default/perfilv1.html.twig");
    }
}
