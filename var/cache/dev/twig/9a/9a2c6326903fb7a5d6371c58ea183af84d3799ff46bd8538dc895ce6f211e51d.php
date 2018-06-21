<?php

/* profesionales/registro.html.twig */
class __TwigTemplate_573fea6334274b42471f89b0a7f68b0c4cb073abcd12be39bb654518ab18a495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "profesionales/registro.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesionales/registro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesionales/registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Busco Concierto";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_cssPersonalizados($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cssPersonalizados"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cssPersonalizados"));

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
        .categoria{
            background-color: #FFFFFF;
        }
        .categoria:hover{
            background-color: #00B7EB;
            border-color: #00B7EB;
        }
    </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "    <!-- Begin Boxed or Fullwidth Layout -->
    <div id=\"bg-boxed\">
        <div class=\"";
        // line 90
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
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 101
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
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 128
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
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crearCuentaProfesional");
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
        // line 168
        $this->loadTemplate("registro/registro.html.twig", "profesionales/registro.html.twig", 168)->display($context);
        // line 169
        echo "                <!-- Begin Navigation -->
                ";
        // line 170
        $this->loadTemplate("default/menu.html.twig", "profesionales/registro.html.twig", 170)->display($context);
        // line 171
        echo "                ";
        $this->displayBlock('subHeader', $context, $blocks);
        // line 172
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
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control tInput\" id=\"telefono\"
                                        placeholder=\"Teléfono\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <p>SERVICIOS</p>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <p>Elige tu categoria:</p>
                            </div>
                        </div>
                        <div class=\"row\">  <!-- Categorias -->
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <a href=\"#\" class=\"\">
                                    <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/placeholder.png"), "html", null, true);
        echo "\" class=\"categoria\" alt=\"Cáterin/Catering\">
                                </a>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <a href=\"#\" class=\"\">
                                    <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/music-player.png"), "html", null, true);
        echo "\" class=\"categoria\" alt=\"Cáterin/Catering\">
                                </a>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <a href=\"#\" class=\"\">
                                    <!--span class=\"fa fa-utensils\"></span-->
                                    <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/cutlery.png"), "html", null, true);
        echo "\" class=\"categoria\" alt=\"Cáterin/Catering\">
                                </a>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <a href=\"#\" class=\"\">
                                    <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/theatre-masks.png"), "html", null, true);
        echo "\" class=\"categoria\" alt=\"Actor\">
                                </a>
                            </div>
                        </div><!-- Fin Categorias -->
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> Acepto los 
                                        <a href=\"";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("condicionesProfesional");
        echo "\" class=\"condiciones\" required>t&eacute;rminos y condiciones</a>.
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
        // line 290
        $this->loadTemplate("default/pie.html.twig", "profesionales/registro.html.twig", 290)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_classBoxed($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBoxed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBoxed"));

        echo "boxed background-light-grey";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_subHeader($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subHeader"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 295
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 296
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profesionales/registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 301,  527 => 300,  523 => 299,  519 => 298,  515 => 297,  512 => 296,  503 => 295,  486 => 171,  468 => 90,  453 => 290,  422 => 262,  410 => 253,  402 => 248,  393 => 242,  385 => 237,  318 => 172,  315 => 171,  313 => 170,  310 => 169,  308 => 168,  280 => 143,  262 => 128,  258 => 127,  229 => 101,  225 => 100,  212 => 90,  208 => 88,  199 => 87,  121 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  82 => 10,  78 => 9,  73 => 6,  64 => 5,  46 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Registro de profesionales #}
{% extends 'base.html.twig' %}

{% block title %}Busco Concierto{% endblock %}
{% block stylesheets %}
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/bootstrap-social.css') }}\" rel=\"stylesheet\">
    <!-- Icon Fonts -->
    <link href='{{ asset('bundles/app/css/ionicons.min.css') }}' rel='stylesheet' type='text/css'>
    <link href=\"{{ asset('bundles/app/css/ionicons1_4.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href='{{ asset('bundles/app/css/font-awesome.css') }}' rel='stylesheet' type='text/css'>
    <link href=\"{{ asset('bundles/app/css/style.css') }}\" rel=\"stylesheet\" title=\"main-css\">
    {% block cssPersonalizados %}
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
        .categoria{
            background-color: #FFFFFF;
        }
        .categoria:hover{
            background-color: #00B7EB;
            border-color: #00B7EB;
        }
    </style>
    {% endblock %}
{% endblock %}
{% block body %}
    <!-- Begin Boxed or Fullwidth Layout -->
    <div id=\"bg-boxed\">
        <div class=\"{% block classBoxed %}boxed background-light-grey{% endblock %}\">
            <!-- Begin Header -->
            <header>
                <!-- Begin Top Bar -->
                <div class=\"top-bar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- ¿Como funciona? -->
                            <div class=\"col-sm-5 col-md-5 col-lg-5\">
                                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                    <li style=\"border-left:none;\"><a href=\"{{ path('comoFunciona') }}\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"{{ path('comprarEntradas') }}\">¿Cómo comprar entradas?</a></li>
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
                                            <li><a href=\"{{ path('registroProfesional') }}\">Soy Profesional</a></li>
                                            <li><a href=\"{{ path('registroEspectador') }}\">Soy Espectador</a></li>
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
                            <form action=\"{{ path('crearCuentaProfesional') }}\" method=\"post\" role=\"form\">
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
                {% include 'registro/registro.html.twig' %}
                <!-- Begin Navigation -->
                {% include 'default/menu.html.twig' %}
                {% block subHeader %}{% endblock %}
            </header>
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
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control tInput\" id=\"telefono\"
                                        placeholder=\"Teléfono\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <p>SERVICIOS</p>
                            </div>
                        </div>
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <p>Elige tu categoria:</p>
                            </div>
                        </div>
                        <div class=\"row\">  <!-- Categorias -->
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <a href=\"#\" class=\"\">
                                    <img src=\"{{ asset('bundles/app/img/placeholder.png') }}\" class=\"categoria\" alt=\"Cáterin/Catering\">
                                </a>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <a href=\"#\" class=\"\">
                                    <img src=\"{{ asset('bundles/app/img/music-player.png') }}\" class=\"categoria\" alt=\"Cáterin/Catering\">
                                </a>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <a href=\"#\" class=\"\">
                                    <!--span class=\"fa fa-utensils\"></span-->
                                    <img src=\"{{ asset('bundles/app/img/cutlery.png') }}\" class=\"categoria\" alt=\"Cáterin/Catering\">
                                </a>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <a href=\"#\" class=\"\">
                                    <img src=\"{{ asset('bundles/app/img/theatre-masks.png') }}\" class=\"categoria\" alt=\"Actor\">
                                </a>
                            </div>
                        </div><!-- Fin Categorias -->
                        <div class=\"row\">  
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> Acepto los 
                                        <a href=\"{{ path('condicionesProfesional') }}\" class=\"condiciones\" required>t&eacute;rminos y condiciones</a>.
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
            {% include 'default/pie.html.twig' %}       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
{% endblock %}
{% block javascripts %}
    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/jQuery-2.1.4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/scrollReveal.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/bootstrap-select.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/skrollr.min.js') }}\"></script>
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
{% endblock %}", "profesionales/registro.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/profesionales/registro.html.twig");
    }
}
