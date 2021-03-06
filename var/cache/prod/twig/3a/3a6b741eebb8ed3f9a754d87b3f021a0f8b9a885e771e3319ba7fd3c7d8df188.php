<?php

/* administracion/encabezado.html.twig */
class __TwigTemplate_8df06d53b9462e7dda8826ff171be1190db9b365731a0f563e27d1ca323ac7f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Menu' => array($this, 'block_Menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('Menu', $context, $blocks);
    }

    public function block_Menu($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Main Header -->
    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"index.html\" class=\"logo\">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\">
              <b>B</b>C
          </span>
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\">
              <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo.png"), "html", null, true);
        echo "\" width=\"200\" height=\"50\" alt=\"logo\"/>
              <b>Admin</b>LTE</span>
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
        // line 41
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
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"Imagen de usuario\">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class=\"hidden-xs\">Alexander Pierce</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- The user image in the menu -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 132
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
";
    }

    public function getTemplateName()
    {
        return "administracion/encabezado.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 132,  156 => 125,  69 => 41,  38 => 13,  26 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/encabezado.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/administracion/encabezado.html.twig");
    }
}
