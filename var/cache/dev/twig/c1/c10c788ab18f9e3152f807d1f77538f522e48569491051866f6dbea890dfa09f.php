<?php

/* administracion/listaTareas.html.twig */
class __TwigTemplate_b2151c325d5522753497fc1112d63b03a6377e611fc705b99c315540cac26095 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administracion/listaTareas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administracion/listaTareas.html.twig"));

        // line 2
        echo "<!-- TO DO List -->
    <div class=\"box box-primary\">
        <div class=\"box-header ui-sortable-handle\" style=\"cursor: move;\">
            <i class=\"ion ion-clipboard\"></i>
            <h3 class=\"box-title\">Lista de tareas</h3>
            <div class=\"box-tools pull-right\">
            <ul class=\"pagination pagination-sm inline\">
            <li><a href=\"#\">«</a></li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">»</a></li>
            </ul>
            </div>
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <ul class=\"todo-list ui-sortable\">
                <li><!-- drag handle -->
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <!-- checkbox -->
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <!-- todo text -->
                    <span class=\"text\">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class=\"label label-danger\">
                        <i class=\"fa fa-clock-o\"></i> 2 mins
                    </small>
                    <!-- General tools such as edit or delete-->
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Make the theme responsive</span>
                    <small class=\"label label-info\">
                        <i class=\"fa fa-clock-o\"></i> 4 hours
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-warning\">
                        <i class=\"fa fa-clock-o\"></i> 1 day
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-success\">
                        <i class=\"fa fa-clock-o\"></i> 3 days
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Check your messages and notifications</span>
                    <small class=\"label label-primary\">
                        <i class=\"fa fa-clock-o\"></i> 1 week
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-default\">
                        <i class=\"fa fa-clock-o\"></i> 1 month
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
            </ul>
        </div><!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
            <button type=\"button\" class=\"btn btn-default pull-right\">
                <i class=\"fa fa-plus\"></i> Add item
            </button>
        </div>
    </div><!-- /.box -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "administracion/listaTareas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<!-- TO DO List -->
    <div class=\"box box-primary\">
        <div class=\"box-header ui-sortable-handle\" style=\"cursor: move;\">
            <i class=\"ion ion-clipboard\"></i>
            <h3 class=\"box-title\">Lista de tareas</h3>
            <div class=\"box-tools pull-right\">
            <ul class=\"pagination pagination-sm inline\">
            <li><a href=\"#\">«</a></li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">»</a></li>
            </ul>
            </div>
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <ul class=\"todo-list ui-sortable\">
                <li><!-- drag handle -->
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <!-- checkbox -->
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <!-- todo text -->
                    <span class=\"text\">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class=\"label label-danger\">
                        <i class=\"fa fa-clock-o\"></i> 2 mins
                    </small>
                    <!-- General tools such as edit or delete-->
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Make the theme responsive</span>
                    <small class=\"label label-info\">
                        <i class=\"fa fa-clock-o\"></i> 4 hours
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-warning\">
                        <i class=\"fa fa-clock-o\"></i> 1 day
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-success\">
                        <i class=\"fa fa-clock-o\"></i> 3 days
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Check your messages and notifications</span>
                    <small class=\"label label-primary\">
                        <i class=\"fa fa-clock-o\"></i> 1 week
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
                    <span class=\"handle ui-sortable-handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-default\">
                        <i class=\"fa fa-clock-o\"></i> 1 month
                    </small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
            </ul>
        </div><!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
            <button type=\"button\" class=\"btn btn-default pull-right\">
                <i class=\"fa fa-plus\"></i> Add item
            </button>
        </div>
    </div><!-- /.box -->", "administracion/listaTareas.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/administracion/listaTareas.html.twig");
    }
}
