<?php

/* eventos/comenzarGira.html.twig */
class __TwigTemplate_ac931c615012b8bcdaee144f197e3015d3a5babfd769bfadaba99eff150d20b3 extends Twig_Template
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
        echo "<section class=\"background-main pt60 pb60 fill text-center\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/bg3.jpg"), "html", null, true);
        echo "');\">
    <div class=\"container\">
        <div class=\"row\">
            <h1 style=\"color: white\">C<span style=\"text-transform: lowercase;\">omienza a montar tu gira de conciertos</span></h1>
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" class=\"btn btn-rw btn-clear mt10\">
                Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
            </a>
        </div>
    </div><!-- /container -->
</section>
                ";
    }

    public function getTemplateName()
    {
        return "eventos/comenzarGira.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/comenzarGira.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/eventos/comenzarGira.html.twig");
    }
}
