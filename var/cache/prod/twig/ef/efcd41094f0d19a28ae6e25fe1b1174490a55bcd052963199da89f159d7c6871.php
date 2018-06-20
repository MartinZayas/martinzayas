<?php

/* mensajes/widgets.html.twig */
class __TwigTemplate_0eabc5f2720ae8b12e36b0db81ae47c12340d274b71f4d469472b79fa966e209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widgets' => array($this, 'block_widgets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('widgets', $context, $blocks);
    }

    public function block_widgets($context, array $blocks = array())
    {
        // line 3
        echo "<section class=\"content\">
<!-- Small boxes (Stat box) -->
    <div class=\"row\">
        <div class=\"col-lg-3 col-xs-6\">
          <!-- small box -->
            <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                    <h3>150</h3>
                    <p>Nuevas Ordenes</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-bag\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div><!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\"><!-- small box -->
            <div class=\"small-box bg-green\">
                <div class=\"inner\">
                    <h3>53<sup style=\"font-size: 20px\">%</sup></h3>
                    <p>Ventas</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-stats-bars\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">M&aacute;s informaci&oacute;n <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div><!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\"><!-- small box -->
            <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                    <h3>44</h3>
                    <p>Usuarios Registrados</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">M&aacute;s informaci&oacute;n <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div><!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\"><!-- small box -->
            <div class=\"small-box bg-red\">
              <div class=\"inner\">
                <h3>65</h3>
                <p>Visitas</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"#\" class=\"small-box-footer\">M&aacute;s informaci&oacute;n <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div><!-- ./col -->
    </div> <!-- /.row -->
</section>
";
    }

    public function getTemplateName()
    {
        return "mensajes/widgets.html.twig";
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
        return new Twig_Source("", "mensajes/widgets.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/mensajes/widgets.html.twig");
    }
}
