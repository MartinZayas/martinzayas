<?php

/* ayuda/dondeActuar.html.twig */
class __TwigTemplate_e1e0e764d93ed28d684272bf9c8e58ebd31056aabfb25e40beb38f7ade5a2a59 extends Twig_Template
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
        echo "<section class=\"background-main pt60 pb60 fill\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/bg1.jpg"), "html", null, true);
        echo "');\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4 fadeInLeft-animated\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/showcase4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Showcase Image\">
            </div>
            <div class=\"col-sm-8 text-white fadeInRight-animated mt30-xs\">
                <h3 class=\"text-white\">¿Buscas donde actuar? ¿Buscas artistas
                para tu local?</h3>
                <p class=\"text-justify\">Los locales y salas de conciertos tienen 
                una nueva opción de autogestión, promocionando sus eventos 
                próximos y buscando artistas para crear nuevos conciertos, 
                minimizando riesgos y beneficiándose de servicios de marketing 
                online.</p>
                <p class=\"text-justify\">Podrás así recibir propuestas de locales 
                y artistas que se adapten a tus requisitos y aceptarlas o no,
                pudiendo ofrecer tus condiciones y así llenar una agenda de 
                conciertos de forma exitosa.</p>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" class=\"btn btn-rw btn-clear mt10\">
                    Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                </a>
            </div>
        </div>
    </div><!-- /container -->
</section>";
    }

    public function getTemplateName()
    {
        return "ayuda/dondeActuar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 20,  27 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ayuda/dondeActuar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/ayuda/dondeActuar.html.twig");
    }
}
