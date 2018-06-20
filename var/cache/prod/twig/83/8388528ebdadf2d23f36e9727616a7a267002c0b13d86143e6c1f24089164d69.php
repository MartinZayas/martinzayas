<?php

/* ayuda/condiciones.html.twig */
class __TwigTemplate_d605b23a328ce351d5decf997dc6ec653b91ec383349436fb1a14a9b2367ee7d extends Twig_Template
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
        echo "<section class=\"background-white pt40 pb40\">
    <div class=\"container\">
        <div class=\"row\">
            <h3 class=\"lead text-center\">
                <b>No pagues nada hasta vender tus entradas y realizar tus
                actuaciones</b>
            </h3>
            <hr style=\"width:800px\">
            <!-- Content 1 -->
            <div class=\"col-sm-3 text-center\" style=\"visibility: visible; \">
                <span class=\"ion-document-text bordered-icon-color bordered-icon-sm\"></span>
                <h4 class=\"mt15\">Acuerdo Legal</h4>
                <p class=\"p15xs\">Todos nuestros conciertos quedan bajo un acuerdo
                legal entre todas las partes afectadas, indicando las 
                características y condiciones acordadas y los porcentajes de 
                ganancias para cada parte. </p>
            </div>
            <!-- Content 2 -->
            <div class=\"col-sm-3 text-center mt20-xs\" style=\"visibility: visible; \">
                <span class=\"ion-arrow-graph-down-right bordered-icon-color bordered-icon-sm\"></span>
                <h4 class=\"mt15\">Mínimas comisiones</h4>
                <p class=\"p15xs\">Cobramos una pequeña tarifa por entrada, sólo 
                ganamos si tu ganas, por lo que si no consigues los objetivos en 
                tu evento, este será cancelado y no se cobrará ninguna comisión.</p>
            </div>
            <!-- Content 3 -->
            <div class=\"col-sm-3 text-center mt20-xs\" style=\"visibility: visible; \">
                <span class=\"ion-close-circled bordered-icon-color bordered-icon-sm\"></span>
                <h4 class=\"mt15\">Evento cancelado</h4>
                <p class=\"p15xs\">Si no consigues vender el mínimo de entradas 
                establecido, se realizará la devolución a los compradores, no 
                asumiendo ningún gasto por parte de los organizadores.</p>
            </div>
            <!-- Content 4 -->
            <div class=\"col-sm-3 text-center mt20-xs\" style=\"visibility: visible; \">
                <span class=\"ion-calendar bordered-icon-color bordered-icon-sm\"></span>
                <h4 class=\"mt15\">¿Tu concierto es gratuito?</h4>
                <p class=\"p15xs\">Si tu concierto es gratuito, te ofrecemos 
                nuestra plataforma totalmente GRATIS para que puedas gestionarlo 
                de forma fácil y así ofrecer invitaciones a tus asistentes más 
                cómodamente.</p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "ayuda/condiciones.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ayuda/condiciones.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/ayuda/condiciones.html.twig");
    }
}
