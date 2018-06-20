<?php

/* administracion/administrar.html.twig */
class __TwigTemplate_4038bd584681d9d6b419fcb1a7472f1c7592a9a744ebdcfe7328fc7fb08e5f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "administracion/administrar.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'classBody' => array($this, 'block_classBody'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'Menu' => array($this, 'block_Menu'),
            'MenuVertical' => array($this, 'block_MenuVertical'),
            'encabezadoContenido' => array($this, 'block_encabezadoContenido'),
            'Contenido' => array($this, 'block_Contenido'),
            'Pie' => array($this, 'block_Pie'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto | Administrador";
    }

    // line 5
    public function block_classBody($context, array $blocks = array())
    {
        echo "hold-transition skin-blue sidebar-mini";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Fuentes -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Iconos -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Estilos del Tema -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
    page. However, you can choose any other skin. Make sure you
    apply the skin class to the body tag so the changes take effect.
    -->    
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/skin-blue.min.css"), "html", null, true);
        echo "\">
    <!-- Estilos para redactar correos -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/blue.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <!-- Estilos personalizados -->
<style>
    .logo{
        padding-top: 5px;
    }
</style>
";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"wrapper\">
        ";
        // line 41
        $this->displayBlock('Menu', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('MenuVertical', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('encabezadoContenido', $context, $blocks);
        // line 79
        echo "    ";
        $this->displayBlock('Pie', $context, $blocks);
        // line 82
        echo "    ";
        $this->displayBlock('Configuraciones', $context, $blocks);
        // line 85
        echo "<!-- Add the sidebar's background. This div must be placed immediately after 
the control sidebar -->
        <div class=\"control-sidebar-bg\"></div>
    </div><!-- ./wrapper -->
";
    }

    // line 41
    public function block_Menu($context, array $blocks = array())
    {
        // line 42
        echo "            ";
        $this->loadTemplate("administracion/encabezado.html.twig", "administracion/administrar.html.twig", 42)->display($context);
        // line 43
        echo "        ";
    }

    // line 44
    public function block_MenuVertical($context, array $blocks = array())
    {
        // line 45
        echo "            ";
        $this->loadTemplate("administracion/menuVertical.html.twig", "administracion/administrar.html.twig", 45)->display($context);
        // line 46
        echo "        ";
    }

    // line 47
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        // line 48
        echo "<!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
          <!-- Content Header (Page header) -->
          <section class=\"content-header\">
            <h1>Titulo<small>Descripci&oacute;n</small></h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
              <li class=\"active\">Aqu&iacute;</li>
            </ol>
          </section>
          ";
        // line 58
        $this->displayBlock('Contenido', $context, $blocks);
        // line 76
        echo "          <!-- /.content -->
        </div>  <!-- /.content-wrapper -->
        ";
    }

    // line 58
    public function block_Contenido($context, array $blocks = array())
    {
        echo "<!-- Contenido -->
                <section class=\"content\">
                    ";
        // line 60
        $this->loadTemplate("mensajes/widgets.html.twig", "administracion/administrar.html.twig", 60)->display($context);
        // line 61
        echo "                    <div class=\"row\"><!-- Main -->
                    <!-- Seccion izquierda -->
                        <section class=\"col-lg-7 connectedSortable ui-sortable\">
                        ";
        // line 64
        $this->loadTemplate("ventas/graficaVentas.html.twig", "administracion/administrar.html.twig", 64)->display($context);
        echo "    
                        ";
        // line 65
        $this->loadTemplate("mensajes/bandeja.html.twig", "administracion/administrar.html.twig", 65)->display($context);
        // line 66
        echo "                        ";
        $this->loadTemplate("administracion/listaTareas.html.twig", "administracion/administrar.html.twig", 66)->display($context);
        // line 67
        echo "                        ";
        $this->loadTemplate("correo/redactar.html.twig", "administracion/administrar.html.twig", 67)->display($context);
        // line 68
        echo "                        </section><!-- Fin Seccion izquierda -->
                    <!-- Seccion derecha -->
                        <section class=\"col-lg-5 connectedSortable ui-sortable\">
                            ";
        // line 71
        $this->loadTemplate("administracion/columnaDerecha.html.twig", "administracion/administrar.html.twig", 71)->display($context);
        echo " 
                        </section><!-- Fin Seccion derecha -->
                    </div><!-- Fin Main -->
                </section>
          ";
    }

    // line 79
    public function block_Pie($context, array $blocks = array())
    {
        echo "    
        ";
        // line 80
        $this->loadTemplate("administracion/pie.html.twig", "administracion/administrar.html.twig", 80)->display($context);
        // line 81
        echo "    ";
    }

    // line 82
    public function block_Configuraciones($context, array $blocks = array())
    {
        // line 83
        echo "        ";
        $this->loadTemplate("administracion/configuraciones.html.twig", "administracion/administrar.html.twig", 83)->display($context);
        // line 84
        echo "    ";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/administrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 116,  309 => 114,  304 => 112,  299 => 110,  294 => 108,  289 => 106,  283 => 103,  279 => 102,  274 => 100,  269 => 98,  263 => 95,  258 => 93,  255 => 92,  252 => 91,  248 => 84,  245 => 83,  242 => 82,  238 => 81,  236 => 80,  231 => 79,  222 => 71,  217 => 68,  214 => 67,  211 => 66,  209 => 65,  205 => 64,  200 => 61,  198 => 60,  192 => 58,  186 => 76,  184 => 58,  172 => 48,  169 => 47,  165 => 46,  162 => 45,  159 => 44,  155 => 43,  152 => 42,  149 => 41,  141 => 85,  138 => 82,  135 => 79,  132 => 47,  129 => 44,  127 => 41,  124 => 40,  121 => 39,  109 => 31,  104 => 29,  99 => 27,  94 => 25,  89 => 23,  84 => 21,  79 => 19,  71 => 14,  66 => 12,  61 => 10,  56 => 8,  53 => 7,  50 => 6,  44 => 5,  38 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/administrar.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/administracion/administrar.html.twig");
    }
}
