<?php

/* seguridad/sesion.html.twig */
class __TwigTemplate_11c4ebe97e650d3e250673d16d19e7977aaea5b6b7a178edbfc5d886f707b4ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "seguridad/sesion.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "Busca Conciertos";
    }

    // line 4
    public function block_classBody($context, array $blocks = array())
    {
        echo "hold-transition skin-blue sidebar-mini";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "        <div class=\"wrapper\">
            <!-- Main Header -->
            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("home");
        echo "\" class=\"logo\">
                  <!-- <span class=\"logo-mini\"><b>BC</b></span> -->
                    <span class=\"logo-mini\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo.png"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" alt=\"logo\" class=\"img-responsive\"/>
                    </span>
                  <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\">
                      <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo.png"), "html", null, true);
        echo "\" width=\"200\" height=\"50\" alt=\"logo\"/>
                      ";
        // line 19
        echo "                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                  <!-- Sidebar toggle button-->
                  <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                  </a>
                  <!-- Navbar Right Menu -->
                  <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                      <!-- Messages: style can be found in dropdown.less-->
                      <li class=\"dropdown messages-menu\">
                        <!-- Menu toggle button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                          <i class=\"fa fa-envelope-o\"></i>
                          <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                          <li class=\"header\">Usted tiene 4 mensajes</li>
                          <li>
                            <!-- inner menu: contains the messages -->
                            <ul class=\"menu\">
                              <li><!-- start message -->
                                <a href=\"#\">
                                  <div class=\"pull-left\">
                                    <!-- Imagen de usuario -->
                                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"Imagen de usuario\">
                                  </div>
                                  <!-- Message title and timestamp -->
                                  <h4>
                                    Soporte de Equipo
                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                  </h4>
                                  <!-- The message -->
                                  <p>Why not buy a new awesome theme?</p>
                                </a>
                              </li>
                              <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                          </li>
                          <li class=\"footer\"><a href=\"#\">Ver Todos los Mensajes</a></li>
                        </ul>
                      </li>
                      <!-- /.messages-menu -->

                      <!-- Notifications Menu -->
                      <li class=\"dropdown notifications-menu\">
                        <!-- Menu toggle button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                          <i class=\"fa fa-bell-o\"></i>
                          <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                          <li class=\"header\">Usted tiene 10 notificaciones</li>
                          <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class=\"menu\">
                              <li><!-- start notification -->
                                <a href=\"#\">
                                  <i class=\"fa fa-users text-aqua\"></i> 5 nuevos miembros se unieron hoy
                                </a>
                              </li>
                              <!-- end notification -->
                            </ul>
                          </li>
                          <li class=\"footer\"><a href=\"#\">Ver Todo</a></li>
                        </ul>
                      </li>
                      <!-- Tasks Menu -->
                      <li class=\"dropdown tasks-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                          <i class=\"fa fa-flag-o\"></i>
                          <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                          <li class=\"header\">Usted tiene 9 tareas</li>
                          <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class=\"menu\">
                              <li><!-- Task item -->
                                <a href=\"#\">
                                  <!-- Task title and progress text -->
                                  <h3>
                                    Diseño de algunos botones
                                    <small class=\"pull-right\">20%</small>
                                  </h3>
                                  <!-- The progress bar -->
                                  <div class=\"progress xs\">
                                    <!-- Change the css width attribute to simulate progress -->
                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                      <span class=\"sr-only\">20% Completado</span>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- end task item -->
                            </ul>
                          </li>
                          <li class=\"footer\">
                            <a href=\"#\">Ver Todas las Tareas</a>
                          </li>
                        </ul>
                      </li>
                      <!-- User Account Menu -->
                      <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                          <!-- The user image in the navbar-->
                          <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"Imagen de usuario\">
                          <!-- hidden-xs hides the username on small devices so only the image appears. -->
                          <span class=\"hidden-xs\">Alexander Pierce</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                          <!-- The user image in the menu -->
                          <li class=\"user-header\">
                            <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"Imagen de usuario\">

                            <p>
                              Alexander Pierce - Web Developer
                              <small>Miembro desde Nov. 2012</small>
                            </p>
                          </li>
                          <!-- Menu Body -->
                          <li class=\"user-body\">
                            <div class=\"row\">
                              <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Seguidores</a>
                              </div>
                              <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Ventas</a>
                              </div>
                              <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Amigos</a>
                              </div>
                            </div>
                            <!-- /.row -->
                          </li>
                          <!-- Menu Footer-->
                          <li class=\"user-footer\">
                            <div class=\"pull-left\">
                              <a href=\"#\" class=\"btn btn-default btn-flat\">Perfil</a>
                            </div>
                            <div class=\"pull-right\">
                              <a href=\"#\" class=\"btn btn-default btn-flat\">Salir</a>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <!-- Control Sidebar Toggle Button -->
                      <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                      </li>
                    </ul>
                  </div>
                </nav><!-- End nav -->
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
            <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                  <!-- Sidebar user panel (optional) -->
                  <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                      <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"Imagen de usuario\">
                    </div>
                    <div class=\"pull-left info\">
                      <p>Alexander Pierce</p>
                      <!-- Status -->
                      <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                    </div>
                  </div>
                  <!-- Para el buscardor (Optional) -->
                  <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Buscar...\">
                          <span class=\"input-group-btn\">
                            <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                            </button>
                          </span>
                    </div>
                  </form>
                  <!-- /.Para el buscardor -->
                  <!-- Menu vertical -->
                  <ul class=\"sidebar-menu\">
                    <li class=\"header\">TITULO</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Link</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>OTRO Link</span></a></li>
                    <li class=\"treeview\">
                      <a href=\"#\"><i class=\"fa fa-link\"></i> <span>MULTI NIVEL</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                      <ul class=\"treeview-menu\">
                        <li><a href=\"#\">Link in level 2</a></li>
                        <li><a href=\"#\">Link in level 2</a></li>
                      </ul>
                    </li>
                  </ul>
                  <!-- /.sidebar-menu -->
                </section>
            <!-- /.sidebar -->
            </aside>       
<!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
              <!-- Content Header (Page header) -->
              <section class=\"content-header\">
                <h1>
                    Contenido de la p&aacute;gina...............................
                    <small>Descripci&oacute;n</small>
                </h1>
                <ol class=\"breadcrumb\">
                  <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
                  <li class=\"active\">Aqu&iacute;</li>
                </ol>
              </section>
              ";
        // line 235
        $this->displayBlock('contenido', $context, $blocks);
        // line 242
        echo "            </div>  <!-- /.content-wrapper -->
<!-- Main Footer -->
            <footer class=\"main-footer\">
              <!-- To the right -->
              <div class=\"pull-right hidden-xs\">
                  <strong>Version</strong> 1.0
              </div>
              <!-- Default to the left -->
              <strong>Copyright &copy; 2018 <a href=\"#\">buscoconcierto.com</a>.</strong> All rights reserved.
            </footer>
<!-- Control Sidebar -->
            <aside class=\"control-sidebar control-sidebar-dark\">
              <!-- Create the tabs -->
              <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
                <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
                <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
              </ul>
<!-- Panel desplegable para la administración de la cuenta -->
              <div class=\"tab-content\">
                <!-- Home tab content -->
                <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
                  <h3 class=\"control-sidebar-heading\">Actividad Reciente</h3>
                  <ul class=\"control-sidebar-menu\">
                    <li>
                      <a href=\"javascript::;\">
                        <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                        <div class=\"menu-info\">
                          <h4 class=\"control-sidebar-subheading\">Cumpleaños de Langdon's</h4>

                          <p>Ser&aacute; el 23 de April 24th</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <!-- /.control-sidebar-menu -->
                  <h3 class=\"control-sidebar-heading\">Progreso de Tareas</h3>
                  <ul class=\"control-sidebar-menu\">
                    <li>
                      <a href=\"javascript::;\">
                        <h4 class=\"control-sidebar-subheading\">
                          Diseño de las plantillas en Symfony 3.4
                          <span class=\"label label-danger pull-right\">70%</span>
                        </h4>

                        <div class=\"progress progress-xxs\">
                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                        </div>
                      </a>
                    </li>
                  </ul><!-- /.control-sidebar-menu -->
                </div><!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Pestaña de Contenido</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                  <form method=\"post\">
                      <h3 class=\"control-sidebar-heading\">Configuraci&oacute;n General</h3>

                    <div class=\"form-group\">
                      <label class=\"control-sidebar-subheading\">
                        Reporte de uso del panel
                        <input type=\"checkbox\" class=\"pull-right\" checked>
                      </label>

                      <p>
                          Alguna informaci&oacute;n acerca de las opciones de 
                          configuraci&oacute;n general.
                      </p>
                    </div>
                    <!-- /.form-group -->
                  </form>
                </div><!-- /.tab-pane -->
              </div>
            </aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed immediately after 
the control sidebar -->
            <div class=\"control-sidebar-bg\"></div>
        </div><!-- ./wrapper -->
";
    }

    // line 235
    public function block_contenido($context, array $blocks = array())
    {
        // line 236
        echo "              <!-- Contenido -->
              <section class=\"content\">
                <!-- Información aquí -->
              </section>
              <!-- /.content -->
              ";
    }

    // line 324
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 325
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundle/app/css/skin-blue.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundle/app/css/AdminLTE.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<style>
</style>
";
    }

    // line 332
    public function block_javascripts($context, array $blocks = array())
    {
        // line 333
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "seguridad/sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 333,  419 => 332,  411 => 327,  407 => 326,  402 => 325,  399 => 324,  390 => 236,  387 => 235,  303 => 242,  301 => 235,  248 => 185,  197 => 137,  187 => 130,  100 => 46,  71 => 19,  67 => 17,  60 => 13,  54 => 10,  48 => 6,  45 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "seguridad/sesion.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/seguridad/sesion.html.twig");
    }
}
