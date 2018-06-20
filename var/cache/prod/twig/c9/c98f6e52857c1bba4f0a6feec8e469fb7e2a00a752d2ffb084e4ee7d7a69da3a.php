<?php

/* default/iniciov1.html.twig */
class __TwigTemplate_cd1ac79f6f7c69d78929324d6d044fd87bf0c18b21b0c07b003aec35614dfaab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/iniciov1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'customStyles' => array($this, 'block_customStyles'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'subHeader' => array($this, 'block_subHeader'),
            'contenido' => array($this, 'block_contenido'),
            'Banner' => array($this, 'block_Banner'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Icheck -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/blue.css"), "html", null, true);
        echo "\">
    <!-- Royal Preloader CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/royal_preloader.css"), "html", null, true);
        echo "\">
    <!-- jQuery Files -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Royal Preloader -->
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/royal_preloader.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap select -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <!-- Stylesheets -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-social.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery.snippet.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/buttons.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/waitMe.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <!-- Icon Fonts -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <!-- Magnific Popup -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        // line 32
        $this->displayBlock('customStyles', $context, $blocks);
        // line 75
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 32
    public function block_customStyles($context, array $blocks = array())
    {
        // line 33
        echo "    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/layers.css"), "html", null, true);
        echo "\">
    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/navigation.css"), "html", null, true);
        echo "\">
    <!-- CountDown Styles -->
    <link href=\"";
        // line 39
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
            border:1px solid #D2D2D2;
            border-radius:50%;
            color:#00B7EB;
            background-color:transparent;
            padding-top:28px;
            height:90px;
            text-align:center;
            width:90px;
        }
    </style>
    ";
    }

    // line 80
    public function block_classBody($context, array $blocks = array())
    {
        echo "royal_preloader scrollreveal";
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        // line 82
        echo "    <div id=\"royal_preloader\"></div>
    <!-- Begin Boxed or Fullwidth Layout -->
    <div id=\"bg-boxed\">
        <div class=\"";
        // line 85
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
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 96
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
        // line 123
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
        // line 148
        $this->loadTemplate("registro/registro.html.twig", "default/iniciov1.html.twig", 148)->display($context);
        // line 149
        echo "                <!-- Begin Navigation -->
                ";
        // line 150
        $this->loadTemplate("default/menu.html.twig", "default/iniciov1.html.twig", 150)->display($context);
        // line 151
        echo "                ";
        $this->displayBlock('subHeader', $context, $blocks);
        // line 152
        echo "            </header>
    ";
        // line 153
        $this->displayBlock('contenido', $context, $blocks);
        // line 192
        echo "    ";
        $this->loadTemplate("default/pie.html.twig", "default/iniciov1.html.twig", 192)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
";
    }

    // line 85
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 151
    public function block_subHeader($context, array $blocks = array())
    {
    }

    // line 153
    public function block_contenido($context, array $blocks = array())
    {
        // line 154
        echo "    ";
        $this->displayBlock('Banner', $context, $blocks);
        // line 158
        echo "    ";
        $this->displayBlock('buscar', $context, $blocks);
        // line 161
        echo "    ";
        $this->displayBlock('comoFunciona', $context, $blocks);
        // line 164
        echo "    ";
        $this->displayBlock('conciertosPopulares', $context, $blocks);
        // line 167
        echo "    ";
        $this->displayBlock('comoFuncionaVentas', $context, $blocks);
        // line 169
        echo "    
    ";
        // line 170
        $this->displayBlock('porqueBC', $context, $blocks);
        // line 173
        echo "    ";
        $this->displayBlock('condiciones', $context, $blocks);
        // line 176
        echo "    ";
        $this->displayBlock('dondeActuar', $context, $blocks);
        // line 179
        echo "    ";
        $this->displayBlock('ahorra', $context, $blocks);
        // line 182
        echo "    ";
        $this->displayBlock('giras', $context, $blocks);
        // line 185
        echo "    ";
        $this->displayBlock('contacto', $context, $blocks);
        // line 188
        echo "    ";
        $this->displayBlock('comoFuncionUsuarios', $context, $blocks);
    }

    // line 154
    public function block_Banner($context, array $blocks = array())
    {
        // line 155
        echo "        ";
        $this->loadTemplate("banner/banner2.html.twig", "default/iniciov1.html.twig", 155)->display($context);
        // line 156
        echo "    <!-- End Slider Revolution -->
    ";
    }

    // line 158
    public function block_buscar($context, array $blocks = array())
    {
        // line 159
        echo "        ";
        $this->loadTemplate("busquedas/buscadorPrincipal.html.twig", "default/iniciov1.html.twig", 159)->display($context);
        // line 160
        echo "    ";
    }

    // line 161
    public function block_comoFunciona($context, array $blocks = array())
    {
        // line 162
        echo "        ";
        $this->loadTemplate("ayuda/comoFunciona.html.twig", "default/iniciov1.html.twig", 162)->display($context);
        // line 163
        echo "    ";
    }

    // line 164
    public function block_conciertosPopulares($context, array $blocks = array())
    {
        // line 165
        echo "        ";
        $this->loadTemplate("eventos/conciertosPopulares.html.twig", "default/iniciov1.html.twig", 165)->display($context);
        // line 166
        echo "    ";
    }

    // line 167
    public function block_comoFuncionaVentas($context, array $blocks = array())
    {
        echo "<!-- Seccion de cpmo funciona ventas -->
        ";
        // line 168
        $this->loadTemplate("ayuda/comoFuncionaVentas.html.twig", "default/iniciov1.html.twig", 168)->display($context);
        // line 169
        echo "    ";
    }

    // line 170
    public function block_porqueBC($context, array $blocks = array())
    {
        // line 171
        echo "        ";
        $this->loadTemplate("ayuda/porqueBC.html.twig", "default/iniciov1.html.twig", 171)->display($context);
        // line 172
        echo "    ";
    }

    // line 173
    public function block_condiciones($context, array $blocks = array())
    {
        // line 174
        echo "        ";
        $this->loadTemplate("ayuda/condiciones.html.twig", "default/iniciov1.html.twig", 174)->display($context);
        // line 175
        echo "    ";
    }

    // line 176
    public function block_dondeActuar($context, array $blocks = array())
    {
        // line 177
        echo "        ";
        $this->loadTemplate("ayuda/dondeActuar.html.twig", "default/iniciov1.html.twig", 177)->display($context);
        // line 178
        echo "    ";
    }

    // line 179
    public function block_ahorra($context, array $blocks = array())
    {
        echo " 
        ";
        // line 180
        $this->loadTemplate("ayuda/ahorra.html.twig", "default/iniciov1.html.twig", 180)->display($context);
        // line 181
        echo "    ";
    }

    // line 182
    public function block_giras($context, array $blocks = array())
    {
        // line 183
        echo "        ";
        $this->loadTemplate("eventos/comenzarGira.html.twig", "default/iniciov1.html.twig", 183)->display($context);
        // line 184
        echo "    ";
    }

    // line 185
    public function block_contacto($context, array $blocks = array())
    {
        // line 186
        echo "        ";
        $this->loadTemplate("ayuda/contacto.html.twig", "default/iniciov1.html.twig", 186)->display($context);
        // line 187
        echo "    ";
    }

    // line 188
    public function block_comoFuncionUsuarios($context, array $blocks = array())
    {
        // line 189
        echo "        ";
        $this->loadTemplate("ayuda/comoFuncionaUsuario.html.twig", "default/iniciov1.html.twig", 189)->display($context);
        // line 190
        echo "    ";
    }

    // line 198
    public function block_javascripts($context, array $blocks = array())
    {
        // line 199
        echo "    <!-- Icheck -->
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Javascript Files -->
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/messages_es.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap Select -->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Simple Ajax Uploader -->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/SimpleAjaxUploader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- On Scroll Animations - scrollReveal.js -->
    <script>
        \$(document).ready(function(){
            //iCheck for checkbox and radio inputs
            \$('input[type=\"checkbox\"].flat, input[type=\"radio\"].flat').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });
        });
        //Animación 
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
        // line 311
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default/iniciov1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 311,  579 => 220,  575 => 219,  570 => 217,  565 => 215,  561 => 214,  556 => 212,  552 => 211,  548 => 210,  544 => 209,  540 => 208,  536 => 207,  532 => 206,  528 => 205,  524 => 204,  520 => 203,  516 => 202,  511 => 200,  508 => 199,  505 => 198,  501 => 190,  498 => 189,  495 => 188,  491 => 187,  488 => 186,  485 => 185,  481 => 184,  478 => 183,  475 => 182,  471 => 181,  469 => 180,  464 => 179,  460 => 178,  457 => 177,  454 => 176,  450 => 175,  447 => 174,  444 => 173,  440 => 172,  437 => 171,  434 => 170,  430 => 169,  428 => 168,  423 => 167,  419 => 166,  416 => 165,  413 => 164,  409 => 163,  406 => 162,  403 => 161,  399 => 160,  396 => 159,  393 => 158,  388 => 156,  385 => 155,  382 => 154,  377 => 188,  374 => 185,  371 => 182,  368 => 179,  365 => 176,  362 => 173,  360 => 170,  357 => 169,  354 => 167,  351 => 164,  348 => 161,  345 => 158,  342 => 154,  339 => 153,  334 => 151,  328 => 85,  318 => 192,  316 => 153,  313 => 152,  310 => 151,  308 => 150,  305 => 149,  303 => 148,  275 => 123,  245 => 96,  241 => 95,  228 => 85,  223 => 82,  220 => 81,  214 => 80,  174 => 39,  169 => 37,  164 => 35,  160 => 34,  157 => 33,  154 => 32,  148 => 78,  144 => 77,  138 => 75,  136 => 32,  132 => 31,  127 => 29,  123 => 28,  119 => 27,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  85 => 17,  80 => 15,  75 => 13,  70 => 11,  65 => 9,  58 => 4,  55 => 3,  49 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/iniciov1.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/default/iniciov1.html.twig");
    }
}
