<?php

/* registro/registro.html.twig */
class __TwigTemplate_0fd83a8b93970899ab1e1a7b5a976bc7e2f2d2674cac711f50cdfa21eaed91c8 extends Twig_Template
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
        echo "<!-- Registro -->
<div class=\"modal fade\" id=\"register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-md\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"loginLabel\">Registro de Usuario</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 11
        $this->loadTemplate("registro/formatoRegistro.html.twig", "registro/registro.html.twig", 11)->display($context);
        // line 12
        echo "            </div>
        </div><!-- /modal content -->
    </div><!-- /modal dialog -->
</div><!-- /modal holder -->
<!-- End Registro -->";
    }

    public function getTemplateName()
    {
        return "registro/registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  30 => 11,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registro/registro.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/registro/registro.html.twig");
    }
}
