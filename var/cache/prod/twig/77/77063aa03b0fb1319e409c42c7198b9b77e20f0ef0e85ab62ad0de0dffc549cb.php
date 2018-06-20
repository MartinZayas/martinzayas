<?php

/* usuarios/menuUsuario.html.twig */
class __TwigTemplate_12b8f9ce25ef72faf84b7fbef8af3cb7604be267dc73a6cd576fd256db8e9c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"top-bar\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- ¿Como funciona? -->
            <div class=\"col-sm-4 col-md-4 col-lg-4\">
                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                    <li style=\"border-left:none;\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
                    <li style=\"border-left:none;\"><a href=\"#contacto\">Contacto</a></li>
                </ul>
            </div>
            <div class=\"col-sm-4 col-md-4 col-lg-4\">
                <form class=\"form-inline\" action=\"#\" method=\"post\" role=\"form\">
                    <div class=\"input-group\">
                        <div class=\"input-group-btn\">
                            <button type=\"submit\" class=\"btn btn-default\">
                                <span class=\"glyphicon glyphicon-search\"></span>
                            </button>
                        </div>                        
                        <input type=\"text\" id=\"buscador1\" name=\"buscador1\" class=\"tBuscador\" placeholder=\"Buscar...\">
                    </div>
                </form>
            </div>
            <!-- Social Buttons -->
            <div class=\"col-sm-4 col-md-4 col-lg-4\">
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">                    
                        <li class=\"dropdown notifications-menu\"><!-- Notifications Menu -->
                            <!-- Menu toggle button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell-o campana\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">Usted tiene 10 notificaciones</li>
                                <li> <!-- Inner Menu: contains the notifications -->
                                    <ul class=\"menu\">
                                        <li>  <!-- start notification -->
                                          <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 nuevos eventos se agregaron hoy
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
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" height=\"30px\" class=\"img-circle\" alt=\"Imagen de usuario\">
                              <!-- hidden-xs hides the username on small devices so only the image appears. -->
                              <span class=\"hidden-xs\">Alexander Pierce</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                              <!-- The user image in the menu -->
                                <li class=\"user-header\">
                                  <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"Imagen de usuario\">
                                    <p>Alexander Pierce - Web Developer
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
                                  <a href=\"#\" class=\"btn btn-primary btn-flat\">Perfil</a>
                                </div>
                                <div class=\"pull-right\">
                                  <a href=\"#\" class=\"btn btn-primary btn-flat\">Salir</a>
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
        </div><!--/row -->
    </div>
</div> <!-- End Top Bar -->
";
    }

    public function getTemplateName()
    {
        return "usuarios/menuUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 59,  74 => 52,  27 => 8,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/menuUsuario.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/menuUsuario.html.twig");
    }
}
