<?php

/* usuarios/menu.html.twig */
class __TwigTemplate_b403154967ba9b953fe3d77ab89f8fbe7a9aaec56bcf11660de7be5d2ce6298f extends Twig_Template
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
                        </ul>
                        <a href=\"";
        // line 33
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
        return "usuarios/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 33,  61 => 30,  55 => 27,  49 => 24,  32 => 10,  28 => 9,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/menu.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/menu.html.twig");
    }
}
