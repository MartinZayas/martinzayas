<?php

/* administracion/configuraciones.html.twig */
class __TwigTemplate_1c925d8251c01c028fa285deb874b2ee90f0b6f1b67790eeaac1a1a07090457b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Configuraciones' => array($this, 'block_Configuraciones'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administracion/configuraciones.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administracion/configuraciones.html.twig"));

        // line 2
        $this->displayBlock('Configuraciones', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_Configuraciones($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Configuraciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Configuraciones"));

        // line 3
        echo "<!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
      <!-- Create the tabs -->
      <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
        <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
      </ul>
<!-- Panel desplegable para la administración de la cuenta -->
      <div class=\"tab-content\">
        <!-- Home tab content -->
        <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
          <h3 class=\"control-sidebar-heading\">Actividad Reciente</h3>
          <ul class=\"control-sidebar-menu\">
            <li>
              <a href=\"javascript::;\">
                <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                <div class=\"menu-info\">
                  <h4 class=\"control-sidebar-subheading\">Cumpleaños de Langdon's</h4>

                  <p>Ser&aacute; el 23 de April 24th</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->
          <h3 class=\"control-sidebar-heading\">Progreso de Tareas</h3>
          <ul class=\"control-sidebar-menu\">
            <li>
              <a href=\"javascript::;\">
                <h4 class=\"control-sidebar-subheading\">
                  Diseño de las plantillas en Symfony 3.4
                  <span class=\"label label-danger pull-right\">70%</span>
                </h4>

                <div class=\"progress progress-xxs\">
                  <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                </div>
              </a>
            </li>
          </ul><!-- /.control-sidebar-menu -->
        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Pestaña de Contenido</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
          <form method=\"post\">
              <h3 class=\"control-sidebar-heading\">Configuraci&oacute;n General</h3>

            <div class=\"form-group\">
              <label class=\"control-sidebar-subheading\">
                Reporte de uso del panel
                <input type=\"checkbox\" class=\"pull-right\" checked>
              </label>

              <p>
                  Alguna informaci&oacute;n acerca de las opciones de 
                  configuraci&oacute;n general.
              </p>
            </div>
            <!-- /.form-group -->
          </form>
        </div><!-- /.tab-pane -->
      </div>
    </aside><!-- /.control-sidebar -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "administracion/configuraciones.html.twig";
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
        return new Twig_Source("{# Plantilla para las configuraciones #}
{% block Configuraciones %}
<!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
      <!-- Create the tabs -->
      <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
        <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
      </ul>
<!-- Panel desplegable para la administración de la cuenta -->
      <div class=\"tab-content\">
        <!-- Home tab content -->
        <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
          <h3 class=\"control-sidebar-heading\">Actividad Reciente</h3>
          <ul class=\"control-sidebar-menu\">
            <li>
              <a href=\"javascript::;\">
                <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                <div class=\"menu-info\">
                  <h4 class=\"control-sidebar-subheading\">Cumpleaños de Langdon's</h4>

                  <p>Ser&aacute; el 23 de April 24th</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->
          <h3 class=\"control-sidebar-heading\">Progreso de Tareas</h3>
          <ul class=\"control-sidebar-menu\">
            <li>
              <a href=\"javascript::;\">
                <h4 class=\"control-sidebar-subheading\">
                  Diseño de las plantillas en Symfony 3.4
                  <span class=\"label label-danger pull-right\">70%</span>
                </h4>

                <div class=\"progress progress-xxs\">
                  <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                </div>
              </a>
            </li>
          </ul><!-- /.control-sidebar-menu -->
        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Pestaña de Contenido</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
          <form method=\"post\">
              <h3 class=\"control-sidebar-heading\">Configuraci&oacute;n General</h3>

            <div class=\"form-group\">
              <label class=\"control-sidebar-subheading\">
                Reporte de uso del panel
                <input type=\"checkbox\" class=\"pull-right\" checked>
              </label>

              <p>
                  Alguna informaci&oacute;n acerca de las opciones de 
                  configuraci&oacute;n general.
              </p>
            </div>
            <!-- /.form-group -->
          </form>
        </div><!-- /.tab-pane -->
      </div>
    </aside><!-- /.control-sidebar -->
{% endblock %}
", "administracion/configuraciones.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/administracion/configuraciones.html.twig");
    }
}
