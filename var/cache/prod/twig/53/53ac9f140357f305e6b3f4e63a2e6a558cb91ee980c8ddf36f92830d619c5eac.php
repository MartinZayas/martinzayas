<?php

/* usuarios/inicio.html.twig */
class __TwigTemplate_78d6927e4199631dc4c73193019249c0f7c98484a14b1ac62af21ad5c70dd5a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/inicio.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'classBody' => array($this, 'block_classBody'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'Menu' => array($this, 'block_Menu'),
            'subHeader' => array($this, 'block_subHeader'),
            'contenido' => array($this, 'block_contenido'),
            'encabezadoContenido' => array($this, 'block_encabezadoContenido'),
            'Configuraciones' => array($this, 'block_Configuraciones'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto | Administrador";
    }

    // line 7
    public function block_classBody($context, array $blocks = array())
    {
        echo "hold-transition skin-black sidebar-mini";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap select -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap social -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-social.css"), "html", null, true);
        echo "\">
    <!-- Iconos -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\">
    <!-- Fuentes -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "\">
    <!-- Estilos del Tema -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins -->    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/skin-black.min.css"), "html", null, true);
        echo "\">
    <!-- Estilos para redactar correos -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/blue.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <!-- Estilos -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\"> 
    <!-- Estilos personalizados -->
<style>
    .logo{
        padding-top: 5px;
    }
    .tituloSesion{
        margin-top: 17px;
        color: #000000;
        font-family: HelveticaNarrow, Helvetica, sans-serif;
        font-size: 16px;
        font-weight: bold;
    }
    .buscador{
        margin-top: 10px;
    }
    .tBuscador{
        height: 42px;
    }
    .capaTitulo{
        border-bottom: 1px solid;
        border-bottom-color: #888888;
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
    .diaCalendario{
        margin-top: 9px;
        padding-top: 11px;
        padding-bottom: 11px;
        background-color:  #FF8000; 
        height: 100%;
        width: 100%;
        color: #ffffff;
        font-size: 16px;
        font-family: Helvetica, Open Sans; 
        font-weight: bold;
        border-radius: 4px;
        box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
    }
    .dia{
        font-size: 40px;
        font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
        font-style: normal;
    }
    .descriptionTitulo{
        font-size: 18px;
        font-family: HelveticaNarrow, Helvetica, Arial, sans-serif;
        text-align: justify;
    }
    .description{
        font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
        text-align: justify;
    }
    .ciudad{
        font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
        font-style: oblique;
        text-align: justify;
    }
    .nombreArtista{
        font-size: 18px;
        font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
        font-weight: bold; 
        text-align: justify;
    }
    .textoComo{
        margin-top: 0px;
        padding-top: 15px;
    }
    .fixed {
        position: fixed;
        top: 60px;
        width: 100%;
        z-index: 100;
    }
</style>
";
    }

    // line 146
    public function block_body($context, array $blocks = array())
    {
        // line 147
        echo "    <div class=\"";
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\"> 
        ";
        // line 148
        $this->displayBlock('Menu', $context, $blocks);
        // line 202
        echo "        ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 268
        echo "%}<!-- Fin Contenido -->
    ";
        // line 269
        $this->loadTemplate("default/pie.html.twig", "usuarios/inicio.html.twig", 269)->display($context);
        // line 270
        echo "    ";
        $this->displayBlock('Configuraciones', $context, $blocks);
        // line 273
        echo "<!-- Add the sidebar's background. This div must be placed immediately after 
the control sidebar -->
        <div class=\"control-sidebar-bg\"></div>
    </div><!-- ./wrapper -->
";
    }

    // line 147
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 148
    public function block_Menu($context, array $blocks = array())
    {
        // line 149
        echo "        <header><!-- Header -->
            <div class=\"top-bar\"><!-- Top Bar -->
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- ¿Como funciona? -->
                        <div class=\"col-sm-5 col-md-5 col-lg-5\">
                            <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                <li style=\"border-left:none;\"><a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
                                <li style=\"border-left:none;\"><a href=\"";
        // line 157
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
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                        <li><a href=\"";
        // line 184
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
            <!-- Configuracion -->
            <!-- Fin configuraciones -->
            <!-- Begin Navigation -->
            ";
        // line 198
        $this->loadTemplate("default/menu.html.twig", "usuarios/inicio.html.twig", 198)->display($context);
        // line 199
        echo "            ";
        $this->displayBlock('subHeader', $context, $blocks);
        // line 200
        echo "        </header><!-- Fin Header-->
        ";
    }

    // line 199
    public function block_subHeader($context, array $blocks = array())
    {
    }

    // line 202
    public function block_contenido($context, array $blocks = array())
    {
        echo "<!-- Contenido -->
        <div class=\"container\"><!-- Perfil del Artista -->
            <div class=\"row mt40 mb40\"><!-- Fila -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 206
        $this->displayBlock('encabezadoContenido', $context, $blocks);
        // line 227
        echo "                <div class=\"row mt10 mb40\"><!-- Fila -->
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <div class=\"row panelSombra mb40\" id=\"Eventos\"><!-- Seccion de eventos --> 
                            <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\"><!-- Contenido de eventos -->
                                <div class=\"row bordeEventos\"><!-- Evento 1 -->
                                    <div class=\"col-xs-3 col-sm-2 col-md-3 col-lg-3\"><!-- Imagen -->
                                        <img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala1.png"), "html", null, true);
        echo "\" height=\"auto\"  alt=\"Foto\" class=\"img img-responsive image\">
                                    </div><!-- Fin Imagen -->
                                    <div class=\"col-xs-6 col-sm-7 col-md-7 col-lg-7\"><!-- Descripcion -->
                                        <div class=\"row\">
                                            <div class=\"col-xs-12 col-sm-12 col-lg-12 descriptionTitulo\">
                                                Vetusta Morla Sala Caracol
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12 col-sm-12 col-lg-12 ciudad\">
                                                Calle, Ciudad, Pa&iacute;s
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12 col-sm-12 col-lg-12 nombreArtista\">
                                                IZAL + artista invitado
                                            </div>
                                        </div>
                                    </div>   <!-- Fin de sección descripción -->
                                    <div class=\"col-xs-3 col-sm-2 col-md-2 col-lg-2\"><!-- Dia -->
                                        <div class=\"diaCalendario text-center\">
                                            <div class=\"row\">ABR</div>
                                            <div class=\"row dia\">19</div>
                                            <div class=\"row\">2018</div>
                                        </div>
                                    </div>  <!-- Fin Dia -->
                                </div><!-- Fin Evento 1 -->
                            </div><!-- Fin Contenido de eventos -->
                        </div><!-- Fin Seccion de eventos -->
                    </div><!-- Fin columna de anuncios -->
                </div><!-- Fin fila anuncios -->
                </div><!-- Fin columna completa-->
            </div><!-- Fin fila -->
        </div><!-- Fin container -->
    </div><!-- Fin boxed -->
    ";
    }

    // line 206
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo "  
                    <div class=\"row\"><!-- Titulo y buscador -->
                        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\">
                            <div class=\"tituloSesion\">Tabl&oacute;n de anuncios</div>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Buscador -->
                            <form action=\"#\" method=\"post\" role=\"form\">
                                <div class=\"input-group buscador\">
                                    <div class=\"input-group-btn\">
                                        <button class=\"btn btn-default boton\" type=\"submit\">
                                            <span class=\"glyphicon glyphicon-search\"></span>
                                        </button>
                                    </div>                        
                                    <input type=\"text\" id=\"buscador2\" name=\"buscador2\" class=\"form-control tBuscador\" placeholder=\"Buscar...\">
                                </div>
                            </form>
                        </div><!-- Fin del Buscador -->
                        <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\"><!-- Vacio -->
                        </div>
                    </div><!-- Fin de Titulo y buscador -->
                ";
    }

    // line 270
    public function block_Configuraciones($context, array $blocks = array())
    {
        // line 271
        echo "        ";
        $this->loadTemplate("administracion/configuraciones.html.twig", "usuarios/inicio.html.twig", 271)->display($context);
        // line 272
        echo "    ";
    }

    // line 279
    public function block_javascripts($context, array $blocks = array())
    {
        // line 280
        echo "    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "usuarios/inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 304,  505 => 302,  500 => 300,  495 => 298,  490 => 296,  485 => 294,  479 => 291,  475 => 290,  470 => 288,  465 => 286,  459 => 283,  454 => 281,  451 => 280,  448 => 279,  444 => 272,  441 => 271,  438 => 270,  412 => 206,  372 => 233,  364 => 227,  362 => 206,  354 => 202,  349 => 199,  344 => 200,  341 => 199,  339 => 198,  322 => 184,  318 => 183,  289 => 157,  285 => 156,  276 => 149,  273 => 148,  267 => 147,  259 => 273,  256 => 270,  254 => 269,  251 => 268,  248 => 202,  246 => 148,  241 => 147,  238 => 146,  125 => 37,  120 => 35,  115 => 33,  110 => 31,  105 => 29,  100 => 27,  95 => 25,  90 => 23,  85 => 21,  80 => 19,  75 => 17,  71 => 16,  66 => 14,  61 => 12,  56 => 10,  53 => 9,  50 => 8,  44 => 7,  38 => 5,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/inicio.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/inicio.html.twig");
    }
}
