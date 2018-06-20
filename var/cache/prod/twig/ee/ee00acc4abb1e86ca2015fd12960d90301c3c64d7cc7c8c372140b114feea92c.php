<?php

/* administracion/contenido.html.twig */
class __TwigTemplate_695351a27c4e34f71bde7d9eb339c03668acd3a54900cbd230d74ab999727f00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Contenido' => array($this, 'block_Contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('Contenido', $context, $blocks);
    }

    public function block_Contenido($context, array $blocks = array())
    {
        // line 3
        echo "<!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
      <!-- Content Header (Page header) -->
      <section class=\"content-header\">
        <h1>
            Contenido de la p&aacute;gina...............................
            <small>Descripci&oacute;n</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
          <li class=\"active\">Aqu&iacute;</li>
        </ol>
      </section>
      <!-- Contenido -->
      <section class=\"content\">
        <!-- Información aquí -->
      </section>
      <!-- /.content -->
    </div>  <!-- /.content-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "administracion/contenido.html.twig";
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
        return new Twig_Source("", "administracion/contenido.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/administracion/contenido.html.twig");
    }
}
