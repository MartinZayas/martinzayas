<?php

/* default/menu.html.twig */
class __TwigTemplate_698b3303401d12334cbec8c22b38d5d906be84a7c123b3868289f287244151b9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menu.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  125 => 82,  82 => 42,  67 => 30,  61 => 27,  55 => 24,  38 => 10,  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Plantilla del menu #}
<div class=\"navbar-wrapper\">
    <div class=\"navbar navbar-main\" id=\"fixed-navbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 column-header\">
                    <div class=\"navbar-header\">
                        <!-- Brand -->
                        <a href=\"{{ path('home') }}\" class=\"navbar-brand\">
                            <img src=\"{{ asset('bundles/app/img/logo.png') }}\" class=\"raleway-logo\" alt=\"Busco Concierto\">
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
                                <a href=\"{{ path('listarEventos') }}\">Eventos</a>
                            </li>
                            <li>
                                <a href=\"{{ path('listadoArtistas')}}\">Artistas</a>
                            </li>
                            <li>
                                <a href=\"{{ path('listadoSalas')}}\">Salas</a>
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
                                            <form class=\"form-default form-inline p15\" action=\"{{ path('buscar') }}\" id=\"formularioBuscadorMenu\" method=\"post\">
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
                        <a href=\"{{ path('paso1') }}\" 
                           class=\"btn btn-custom-orange btn-lg pull-right\" style=\"margin-top:7px;\">
                            Crear un concierto
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

", "default/menu.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/default/menu.html.twig");
    }
}
