<?php

/* profesionales/confirmacion.html.twig */
class __TwigTemplate_ac16e732b2c31281454aa7be2a6294bd1de9da2f976a08630b3bc4ac9f7b3976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "profesionales/confirmacion.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'customContent' => array($this, 'block_customContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/formatoBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto | Listado de Salas";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    <style></style>
";
    }

    // line 7
    public function block_customContent($context, array $blocks = array())
    {
        // line 8
        echo "Enviado (En construcción)
";
    }

    public function getTemplateName()
    {
        return "profesionales/confirmacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  44 => 7,  39 => 5,  36 => 4,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profesionales/confirmacion.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/profesionales/confirmacion.html.twig");
    }
}
