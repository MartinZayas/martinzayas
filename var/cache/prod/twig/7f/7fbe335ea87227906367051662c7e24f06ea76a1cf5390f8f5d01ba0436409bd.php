<?php

/* espectadores/registro.html.twig */
class __TwigTemplate_1474ba3f1a6f904bce75312eca3221a1e5f61a355110db8323193fdc6656fd41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "espectadores/registro.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'subHeader' => array($this, 'block_subHeader'),
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

    // line 4
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
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Icon Fonts -->
    <link href='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    ";
        // line 16
        $this->displayBlock('cssPersonalizados', $context, $blocks);
    }

    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 17
        echo "    <style>
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
        .condiciones{
            color: red;
        }
        .tInput{
            font-weight: bold;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid #000000;
            -webkit-box-shadow: inset 0 0px 1px rgba(0, 0, 0, .075);
                    box-shadow: inset 0 0px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                 -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }
        .botonCrear{
            width: 100%;
            /*color: #ffffff;
            background-color: red;*/
            font-family: Helvetica, Arial;
            border-radius: 4px;
        }
        .botonCrear2{
            width: 100%;
            font-family: Helvetica, Arial;
            border-radius: 4px;
        }
    </style>
    ";
    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        // line 81
        echo "    <div id=\"royal_preloader\"></div>
    <!-- Begin Boxed or Fullwidth Layout -->
    <div id=\"bg-boxed\">
        <div class=\"";
        // line 84
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                <!-- Begin Top Bar -->
                <div class=\"top-bar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- ¿Como funciona? -->
                            <div class=\"col-sm-5 col-md-5 col-lg-5\">
                                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                    <li style=\"border-left:none;\"><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 95
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
                                        <a data-toggle=\"modal\" data-target=\"#profecionales\">&Aacute;rea Profecionales</a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            Regístrate<span class=\"caret\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 122
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
        // line 137
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
        // line 162
        $this->loadTemplate("registro/registro.html.twig", "espectadores/registro.html.twig", 162)->display($context);
        // line 163
        echo "                <!-- Begin Navigation -->
                ";
        // line 164
        $this->loadTemplate("default/menu.html.twig", "espectadores/registro.html.twig", 164)->display($context);
        // line 165
        echo "                ";
        $this->displayBlock('subHeader', $context, $blocks);
        // line 166
        echo "            </header>
        <div class=\"container\" id=\"plantilla\">
            <div class=\"row mt20 mb20\">
                <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
                <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4 background-white\">
                    <form id=\"formulario1\" name=\"formulario1\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control tInput\" id=\"nombre\"
                                        placeholder=\"Nombre\" required>
                                </div>
                            </div>
                            <div class=\"col-sx-6 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control tInput\" id=\"apellido\"
                                        placeholder=\"Apellido\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control tInput\" id=\"email2\"
                                        placeholder=\"Email\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control tInput\" id=\"clave\"
                                        placeholder=\"Contraseña\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control tInput\" id=\"clave2\"
                                        placeholder=\"Repetir Contraseña\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> Acepto los 
                                        <a href=\"";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("condicionesEspectador");
        echo "\" class=\"condiciones\" required>t&eacute;rminos y condiciones</a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> Acepto recibir notificaciones y alertas.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt10 mb10\">  
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\"></div>
                            <div class=\"col-sx-10 col-sm-10 col-md-10 col-lg-10\">
                                <button type=\"submit\" class=\"btn btn-danger btn-block\">
                                    Crear cuenta
                                </button>
                            </div>
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\"></div>
                        </div>
                        <div class=\"row mb10\">  
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\"></div>
                            <div class=\"col-sx-10 col-sm-10 col-md-10 col-lg-10\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                    Crear cuenta con facebook
                                </button>
                            </div>
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\"></div>
                        </div>
                    </form>
                </div>
                <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
            </div>
        </div>
            ";
        // line 252
        $this->loadTemplate("default/pie.html.twig", "espectadores/registro.html.twig", 252)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
";
    }

    // line 84
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 165
    public function block_subHeader($context, array $blocks = array())
    {
    }

    // line 257
    public function block_javascripts($context, array $blocks = array())
    {
        // line 258
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
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
    </script>
";
    }

    public function getTemplateName()
    {
        return "espectadores/registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 262,  383 => 261,  379 => 260,  375 => 259,  372 => 258,  369 => 257,  364 => 165,  358 => 84,  349 => 252,  309 => 215,  258 => 166,  255 => 165,  253 => 164,  250 => 163,  248 => 162,  220 => 137,  202 => 122,  198 => 121,  169 => 95,  165 => 94,  152 => 84,  147 => 81,  144 => 80,  79 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  52 => 10,  48 => 9,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "espectadores/registro.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/espectadores/registro.html.twig");
    }
}
