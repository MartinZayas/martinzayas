<?php

/* ayuda/servicios.html.twig */
class __TwigTemplate_485c7bb85b4d9b3164fbaf4703505ebaf16b9ee2ab43aeac6aee23ec5c720cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'servicios' => array($this, 'block_servicios'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('servicios', $context, $blocks);
    }

    public function block_servicios($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"background-white pt40 pb40\"> <!-- Begin Team Section -->
    <div class=\"container\">
        <!-- Begin Team -->
        <div class=\"row\">
            <!-- Title -->
            <div class=\"col-sm-12\">
                <p class=\"lead text-center\">¿Qué otros Servicios Ofrecemos?<br></p>
                <hr style=\"width:200px\">
            </div>
        </div><!-- /row -->
        <div class=\"row\">
            <!-- Content 1 -->
            <div class=\"col-sm-4\" data-sr=\"enter left over 1s\">
                <h4><span class=\"ion-android-star bordered-icon-sm mr15\"></span> Promoción artística</h4>
                <p class=\"no-margin\">Tus lanzamientos de discos, videoclips, giras de conciertos, entrevistas...</p>
            </div>
            <!-- Content 2 -->
            <div class=\"col-sm-4 mt20-xs\" data-sr=\"enter top over 1s\">
                <h4><span class=\"ion-android-star bordered-icon-sm mr15\"></span> Management</h4>
                <p class=\"no-margin\">¿Necesitas un representante artístico? Nosotros te asesoramos</p>
            </div>
            <!-- Content 3 -->
            <div class=\"col-sm-4 mt20-xs\" data-sr=\"enter right over 1s\">
                <h4><span class=\"ion-android-star bordered-icon-sm mr15\"></span> Distribución Digital</h4>
                <p class=\"no-margin\">Distribuimos tu discografía por más de 50 plataformas digitales</p>
            </div>
        </div>
    </div><!-- /container -->
</div> <!-- End Team Section -->
";
    }

    public function getTemplateName()
    {
        return "ayuda/servicios.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ayuda/servicios.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/ayuda/servicios.html.twig");
    }
}
