<?php

/* eventos/deInteresCarrusel.html.twig */
class __TwigTemplate_d3855bb6af36d70ef40003f2472e974c9b824da9f06fc80bf928340a1311ccc5 extends Twig_Template
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
        echo "<div class=\"row panelSombra mb40\" id=\"Interes\"><!-- Seccion de interes -->
    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white capaTitulo\"><!-- Titulo -->
        <h3 class=\"mt10\">
            <span class=\"glyphicon glyphicon-exclamation-sign\"></span>
            Tambien te puede interesar...
        </h3>
    </div>
    <div class=\"col-sm-1 col-md-1 col-lg-1 background-white\"><!-- Vacio -->
    </div>
    <div class=\"col-sm-10 col-md-10 col-lg-10 background-white\"><!-- Imágenes -->
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"row\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                      <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Sala11.png"), "html", null, true);
        echo "\" 
                       heitgh=\"400\" alt=\"Sala1\" class=\"img img-responsive\">
                    </div>
                    <div class=\"item\">
                      <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala2.png"), "html", null, true);
        echo "\"
                       heitgh=\"400\" alt=\"Sala2\" class=\"img img-responsive\">
                    </div>
                    <div class=\"item\">
                      <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" 
                        heitgh=\"400\" alt=\"Sala3\" class=\"img img-responsive\">
                    </div>
                </div>
                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Anterior</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Siguiente</span>
                </a>
            </div>
        </div>
    </div><!-- Fin Imágenes -->
    <div class=\"col-sm-1 col-md-1 col-lg-1 background-white\"><!-- Vacio -->
    </div>
</div><!-- Fin Seccion de interes -->
";
    }

    public function getTemplateName()
    {
        return "eventos/deInteresCarrusel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 29,  47 => 25,  40 => 21,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/deInteresCarrusel.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/deInteresCarrusel.html.twig");
    }
}
