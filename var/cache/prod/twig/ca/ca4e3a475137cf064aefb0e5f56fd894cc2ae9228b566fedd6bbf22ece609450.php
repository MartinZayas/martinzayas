<?php

/* usuarios/encabezado2.html.twig */
class __TwigTemplate_533497f0da2764afa4ea21010eb36fef682df575dc6aa83894a4d1f41a3c371a extends Twig_Template
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
        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">            
            <div class=\"col-sm-5 col-md-5 col-lg-5\"><!-- Como funciona y contacto -->
                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                    <li style=\"border-left:none;\">
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\" class=\"textoComo\">
                            ¿Cómo funciona?
                        </a>
                    </li>
                    <li style=\"border-left:none;\">
                        <a href=\"#contacto\">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div><!-- Fin Como funciona y contacto -->
            <div class=\"col-sm-7 col-md-7 col-lg-7\"><!-- Navbar Right Menu -->
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">                    
                        <li class=\"dropdown notifications-menu\"><!-- Notifications Menu -->
                            <!-- Menu toggle button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell-o\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">Usted tiene 10 notificaciones</li>
                                <li> <!-- Inner Menu: contains the notifications -->
                                    <ul class=\"menu\">
                                        <li>  <!-- start notification -->
                                          <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 nuevos miembros se unieron hoy
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"Imagen de usuario\">
                              <!-- hidden-xs hides the username on small devices so only the image appears. -->
                              <span class=\"hidden-xs\">Alexander Pierce</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                              <!-- The user image in the menu -->
                              <li class=\"user-header\">
                                <img src=\"";
        // line 55
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
            </div>
        </nav><!-- End nav -->
    </header>
";
    }

    public function getTemplateName()
    {
        return "usuarios/encabezado2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 55,  76 => 48,  35 => 10,  26 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/encabezado2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/encabezado2.html.twig");
    }
}
