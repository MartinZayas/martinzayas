<?php

/* default/menu.html.twig */
class __TwigTemplate_bfe2020eef72fa928535714b40015519e151016fd593831a967076b3144c4979 extends Twig_Template
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
        echo "<div class=\"navbar-wrapper\">
    <div class=\"navbar navbar-main\" id=\"fixed-navbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 column-header\">
                    <div class=\"navbar-header\">
                        <!-- Brand -->
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"navbar-brand\">
                            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo.png"), "html", null, true);
        echo "\" class=\"raleway-logo\" alt=\"Busco Concierto\">
                        </a>
                        <!-- Mobile Navigation -->
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div><!-- /navbar header -->
                    <!-- Main Navigation - Explained in Documentation -->
                    <nav class=\"navbar-collapse collapse navHeaderCollapse\" role=\"navigation\" style=\"padding-right: 0px\">
                        <ul class=\"nav navbar-nav navbar-left\" style=\"margin-left:20px;\">
                            <li>
                                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarEventos");
        echo "\">Eventos</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listadoArtistas");
        echo "\">Artistas</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listadoSalas");
        echo "\">Salas</a>
                            </li>
                            <!--li>
                                <a href=\"#\">Profesionales</a>
                            </li-->
                            <li class=\"dropdown hidden-sm hidden-xs\">
                                <a href=\"#\" class=\"ml10 nav-circle-li dropdown-toggle dropdown-form-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-search\"></i>
                                </a>
                                <ul style=\"width:417px;\" class=\"fadeInRight-animated dropdown-menu dropdown-menu-user dropdown-menu-right\">
                                    <li id=\"dropdownForm\" class=\"buscador\"><!-- panel de buscar -->
                                        <div class=\"dropdown-form\">
                                            <form class=\"form-default form-inline p15\" action=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" id=\"formularioBuscadorMenu\" method=\"post\">
                                                <!--div class=\"form-group mb20\">
                                                    <label>¿Qué Buscas?</label><br>\t\t\t\t\t\t\t
                                                    <div class=\"radiobutton ml10 search-option\">
                                                        <label>
                                                            <input type=\"radio\">
                                                            Conciertos
                                                        </label>
                                                        </div>
                                                    <div class=\"radiobutton ml10 search-option\">
                                                        <label>
                                                            <input type=\"radio\">
                                                            Artistas
                                                        </label>
                                                    </div>
                                                    <div class=\"radiobutton ml10 search-option\">
                                                        <label>
                                                            <input type=\"radio\">
                                                            Salas
                                                        </label>
                                                    </div>
                                                    <div class=\"radiobutton ml10 search-option\">
                                                        <label>
                                                            <input type=\"radio\">
                                                            Profesionales
                                                        </label>
                                                    </div>
                                                </div-->
                                                <div class=\"input-group\">
                                                    <input style=\"width:300px;\" type=\"text\" class=\"form-control search-input\" placeholder=\"Búsqueda\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-rw btn-primary search-btn\" type=\"submit\">Buscar</button>
                                                    </span>
                                                </div>
                                            </form><!-- /searh form -->
                                        </div><!-- /dropdown form -->
                                    </li><!-- /dropdownForm list item -->
                                </ul> 
                            </li>
                        </ul>
                        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" 
                           class=\"btn btn-custom-orange btn-lg pull-right\" style=\"margin-top:7px;\">
                            Crear un concierto
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 82,  76 => 42,  61 => 30,  55 => 27,  49 => 24,  32 => 10,  28 => 9,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/menu.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/default/menu.html.twig");
    }
}
