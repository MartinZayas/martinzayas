<?php

/* mensajes/widgets.html.twig */
class __TwigTemplate_e27fe08aa8bfc37bba87c527491fe7ae40ff519c8056c1adf9bcdec9ed88dd82 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mensajes/widgets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mensajes/widgets.html.twig"));

        // line 2
        $this->displayBlock('widgets', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_widgets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widgets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widgets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mensajes/widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Plantillas para las cajas (widgets) #}
{% block widgets %}
<section class=\"content\">
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
{% endblock %}", "mensajes/widgets.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/mensajes/widgets.html.twig");
    }
}
