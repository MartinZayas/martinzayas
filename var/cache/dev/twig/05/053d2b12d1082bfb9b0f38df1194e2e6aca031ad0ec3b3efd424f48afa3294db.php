<?php

/* calendario/calendario.html.twig */
class __TwigTemplate_bffa2c739de56d8fdbdaf449cb8603b9937a21128d95834d02a294f08ba7cf0b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendario/calendario.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendario/calendario.html.twig"));

        // line 2
        echo "<!-- Calendar -->
<div class=\"box box-solid bg-green-gradient\">
        <div class=\"box-header ui-sortable-handle\" style=\"cursor: move;\">
            <i class=\"fa fa-calendar\"></i>
            <h3 class=\"box-title\">Calendario</h3>
          <!-- tools box -->
        <div class=\"pull-right box-tools\">
            <!-- button with a dropdown -->
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-bars\"></i></button>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    <li><a href=\"#\">Agregar un evento</a></li>
                    <li><a href=\"#\">Limpiar eventos</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Ver el calendario</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i>
            </button>
        </div><!-- /. tools -->
    </div><!-- /.box-header -->
    <div class=\"box-body no-padding\">  <!--The calendar -->
        <div id=\"calendar\" style=\"width: 100%\">
            <div class=\"datepicker datepicker-inline\">
                <div class=\"datepicker-days\" style=\"display: block;\">
                    <table class=\"table table-condensed\">
                        <thead>
                            <tr>
                                <th class=\"prev\" style=\"visibility: visible;\">«</th>
                                <th colspan=\"5\" class=\"datepicker-switch\">Marzo 2018</th>
                                <th class=\"next\" style=\"visibility: visible;\">»</th>
                            </tr>
                            <tr>
                                <th class=\"dow\">Do</th><th class=\"dow\">Lu</th>
                                <th class=\"dow\">Ma</th><th class=\"dow\">Mi</th>
                                <th class=\"dow\">Ju</th><th class=\"dow\">Vi</th>
                                <th class=\"dow\">Sa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class=\"old day\">25</td>
                                <td class=\"old day\">26</td>
                                <td class=\"old day\">27</td>
                                <td class=\"old day\">28</td>
                                <td class=\"day\">1</td>
                                <td class=\"day\">2</td>
                                <td class=\"day\">3</td>
                            </tr>
                            <tr>
                                <td class=\"day\">4</td>
                                <td class=\"day\">5</td>
                                <td class=\"day\">6</td>
                                <td class=\"day\">7</td>
                                <td class=\"day\">8</td>
                                <td class=\"day\">9</td>
                                <td class=\"day\">10</td>
                            </tr>
                            <tr>
                                <td class=\"day\">11</td>
                                <td class=\"day\">12</td>
                                <td class=\"day\">13</td>
                                <td class=\"day\">14</td>
                                <td class=\"day\">15</td>
                                <td class=\"day\">16</td>
                                <td class=\"day\">17</td>
                            </tr>
                            <tr>
                                <td class=\"day\">18</td>
                                <td class=\"day\">19</td>
                                <td class=\"day\">20</td>
                                <td class=\"day\">21</td>
                                <td class=\"day\">22</td>
                                <td class=\"day\">23</td>
                                <td class=\"day\">24</td>
                            </tr>
                            <tr>
                                <td class=\"day\">25</td>
                                <td class=\"day\">26</td>
                                <td class=\"day\">27</td>
                                <td class=\"day\">28</td>
                                <td class=\"day\">29</td>
                                <td class=\"day\">30</td>
                                <td class=\"day\">31</td>
                            </tr>
                            <tr>
                                <td class=\"new day\">1</td>
                                <td class=\"new day\">2</td>
                                <td class=\"new day\">3</td>
                                <td class=\"new day\">4</td>
                                <td class=\"new day\">5</td>
                                <td class=\"new day\">6</td>
                                <td class=\"new day\">7</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan=\"7\" class=\"today\" style=\"display: none;\">Hoy</th>
                            </tr>
                            <tr>
                                <th colspan=\"7\" class=\"clear\" style=\"display: none;\">Limpiar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class=\"datepicker-months\" style=\"display: none;\">
                    <table class=\"table table-condensed\">
                        <thead>
                            <tr>
                                <th class=\"prev\" style=\"visibility: visible;\">«</th>
                                <th colspan=\"5\" class=\"datepicker-switch\">2018</th>
                                <th class=\"next\" style=\"visibility: visible;\">»</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan=\"7\">
                                    <span class=\"month\">Ene</span>
                                    <span class=\"month\">Feb</span>
                                    <span class=\"month\">Mar</span>
                                    <span class=\"month\">Abr</span>
                                    <span class=\"month\">May</span>
                                    <span class=\"month\">Jun</span>
                                    <span class=\"month\">Jul</span>
                                    <span class=\"month\">Ago</span>
                                    <span class=\"month\">Sep</span>
                                    <span class=\"month\">Oct</span>
                                    <span class=\"month\">Nov</span>
                                    <span class=\"month\">Dic</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan=\"7\" class=\"today\" style=\"display: none;\">Hoy</th>
                            </tr>
                            <tr>
                                <th colspan=\"7\" class=\"clear\" style=\"display: none;\">Limpiar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class=\"datepicker-years\" style=\"display: none;\">
                    <table class=\"table table-condensed\">
                        <thead>
                            <tr>
                                <th class=\"prev\" style=\"visibility: visible;\">«</th>
                                <th colspan=\"5\" class=\"datepicker-switch\">2010-2019</th>
                                <th class=\"next\" style=\"visibility: visible;\">»</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan=\"7\">
                                    <span class=\"year old\">2009</span>
                                    <span class=\"year\">2010</span>
                                    <span class=\"year\">2011</span>
                                    <span class=\"year\">2012</span>
                                    <span class=\"year\">2013</span>
                                    <span class=\"year\">2014</span>
                                    <span class=\"year\">2015</span>
                                    <span class=\"year\">2016</span>
                                    <span class=\"year\">2017</span>
                                    <span class=\"year\">2018</span>
                                    <span class=\"year\">2019</span>
                                    <span class=\"year new\">2020</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan=\"7\" class=\"today\" style=\"display: none;\">Hoy</th>
                            </tr>
                            <tr>
                                <th colspan=\"7\" class=\"clear\" style=\"display: none;\">Limpiar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
    <div class=\"box-footer text-black\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <!-- Progress bars -->
                <div class=\"clearfix\">
                    <span class=\"pull-left\">Tarea #1</span>
                    <small class=\"pull-right\">90%</small>
                </div>
                <div class=\"progress xs\">
                    <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                </div>
                <div class=\"clearfix\">
                    <span class=\"pull-left\">Tarea #2</span>
                    <small class=\"pull-right\">70%</small>
                </div>
                <div class=\"progress xs\">
                    <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                </div>
            </div>
            <!-- /.col -->
            <div class=\"col-sm-6\">
                <div class=\"clearfix\">
                    <span class=\"pull-left\">Tarea #3</span>
                    <small class=\"pull-right\">60%</small>
                </div>
                <div class=\"progress xs\">
                    <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                </div>
                <div class=\"clearfix\">
                    <span class=\"pull-left\">Tarea #4</span>
                    <small class=\"pull-right\">40%</small>
                </div>
                <div class=\"progress xs\">
                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                </div>
            </div>  <!-- /.col -->
        </div> <!-- /.row -->
    </div>
</div><!-- /.box -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "calendario/calendario.html.twig";
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
        return new Twig_Source("{# Plantilla para el calendario #}
<!-- Calendar -->
<div class=\"box box-solid bg-green-gradient\">
        <div class=\"box-header ui-sortable-handle\" style=\"cursor: move;\">
            <i class=\"fa fa-calendar\"></i>
            <h3 class=\"box-title\">Calendario</h3>
          <!-- tools box -->
        <div class=\"pull-right box-tools\">
            <!-- button with a dropdown -->
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-bars\"></i></button>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    <li><a href=\"#\">Agregar un evento</a></li>
                    <li><a href=\"#\">Limpiar eventos</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Ver el calendario</a></li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i>
            </button>
        </div><!-- /. tools -->
    </div><!-- /.box-header -->
    <div class=\"box-body no-padding\">  <!--The calendar -->
        <div id=\"calendar\" style=\"width: 100%\">
            <div class=\"datepicker datepicker-inline\">
                <div class=\"datepicker-days\" style=\"display: block;\">
                    <table class=\"table table-condensed\">
                        <thead>
                            <tr>
                                <th class=\"prev\" style=\"visibility: visible;\">«</th>
                                <th colspan=\"5\" class=\"datepicker-switch\">Marzo 2018</th>
                                <th class=\"next\" style=\"visibility: visible;\">»</th>
                            </tr>
                            <tr>
                                <th class=\"dow\">Do</th><th class=\"dow\">Lu</th>
                                <th class=\"dow\">Ma</th><th class=\"dow\">Mi</th>
                                <th class=\"dow\">Ju</th><th class=\"dow\">Vi</th>
                                <th class=\"dow\">Sa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class=\"old day\">25</td>
                                <td class=\"old day\">26</td>
                                <td class=\"old day\">27</td>
                                <td class=\"old day\">28</td>
                                <td class=\"day\">1</td>
                                <td class=\"day\">2</td>
                                <td class=\"day\">3</td>
                            </tr>
                            <tr>
                                <td class=\"day\">4</td>
                                <td class=\"day\">5</td>
                                <td class=\"day\">6</td>
                                <td class=\"day\">7</td>
                                <td class=\"day\">8</td>
                                <td class=\"day\">9</td>
                                <td class=\"day\">10</td>
                            </tr>
                            <tr>
                                <td class=\"day\">11</td>
                                <td class=\"day\">12</td>
                                <td class=\"day\">13</td>
                                <td class=\"day\">14</td>
                                <td class=\"day\">15</td>
                                <td class=\"day\">16</td>
                                <td class=\"day\">17</td>
                            </tr>
                            <tr>
                                <td class=\"day\">18</td>
                                <td class=\"day\">19</td>
                                <td class=\"day\">20</td>
                                <td class=\"day\">21</td>
                                <td class=\"day\">22</td>
                                <td class=\"day\">23</td>
                                <td class=\"day\">24</td>
                            </tr>
                            <tr>
                                <td class=\"day\">25</td>
                                <td class=\"day\">26</td>
                                <td class=\"day\">27</td>
                                <td class=\"day\">28</td>
                                <td class=\"day\">29</td>
                                <td class=\"day\">30</td>
                                <td class=\"day\">31</td>
                            </tr>
                            <tr>
                                <td class=\"new day\">1</td>
                                <td class=\"new day\">2</td>
                                <td class=\"new day\">3</td>
                                <td class=\"new day\">4</td>
                                <td class=\"new day\">5</td>
                                <td class=\"new day\">6</td>
                                <td class=\"new day\">7</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan=\"7\" class=\"today\" style=\"display: none;\">Hoy</th>
                            </tr>
                            <tr>
                                <th colspan=\"7\" class=\"clear\" style=\"display: none;\">Limpiar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class=\"datepicker-months\" style=\"display: none;\">
                    <table class=\"table table-condensed\">
                        <thead>
                            <tr>
                                <th class=\"prev\" style=\"visibility: visible;\">«</th>
                                <th colspan=\"5\" class=\"datepicker-switch\">2018</th>
                                <th class=\"next\" style=\"visibility: visible;\">»</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan=\"7\">
                                    <span class=\"month\">Ene</span>
                                    <span class=\"month\">Feb</span>
                                    <span class=\"month\">Mar</span>
                                    <span class=\"month\">Abr</span>
                                    <span class=\"month\">May</span>
                                    <span class=\"month\">Jun</span>
                                    <span class=\"month\">Jul</span>
                                    <span class=\"month\">Ago</span>
                                    <span class=\"month\">Sep</span>
                                    <span class=\"month\">Oct</span>
                                    <span class=\"month\">Nov</span>
                                    <span class=\"month\">Dic</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan=\"7\" class=\"today\" style=\"display: none;\">Hoy</th>
                            </tr>
                            <tr>
                                <th colspan=\"7\" class=\"clear\" style=\"display: none;\">Limpiar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class=\"datepicker-years\" style=\"display: none;\">
                    <table class=\"table table-condensed\">
                        <thead>
                            <tr>
                                <th class=\"prev\" style=\"visibility: visible;\">«</th>
                                <th colspan=\"5\" class=\"datepicker-switch\">2010-2019</th>
                                <th class=\"next\" style=\"visibility: visible;\">»</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan=\"7\">
                                    <span class=\"year old\">2009</span>
                                    <span class=\"year\">2010</span>
                                    <span class=\"year\">2011</span>
                                    <span class=\"year\">2012</span>
                                    <span class=\"year\">2013</span>
                                    <span class=\"year\">2014</span>
                                    <span class=\"year\">2015</span>
                                    <span class=\"year\">2016</span>
                                    <span class=\"year\">2017</span>
                                    <span class=\"year\">2018</span>
                                    <span class=\"year\">2019</span>
                                    <span class=\"year new\">2020</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan=\"7\" class=\"today\" style=\"display: none;\">Hoy</th>
                            </tr>
                            <tr>
                                <th colspan=\"7\" class=\"clear\" style=\"display: none;\">Limpiar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
    <div class=\"box-footer text-black\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <!-- Progress bars -->
                <div class=\"clearfix\">
                    <span class=\"pull-left\">Tarea #1</span>
                    <small class=\"pull-right\">90%</small>
                </div>
                <div class=\"progress xs\">
                    <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                </div>
                <div class=\"clearfix\">
                    <span class=\"pull-left\">Tarea #2</span>
                    <small class=\"pull-right\">70%</small>
                </div>
                <div class=\"progress xs\">
                    <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                </div>
            </div>
            <!-- /.col -->
            <div class=\"col-sm-6\">
                <div class=\"clearfix\">
                    <span class=\"pull-left\">Tarea #3</span>
                    <small class=\"pull-right\">60%</small>
                </div>
                <div class=\"progress xs\">
                    <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                </div>
                <div class=\"clearfix\">
                    <span class=\"pull-left\">Tarea #4</span>
                    <small class=\"pull-right\">40%</small>
                </div>
                <div class=\"progress xs\">
                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                </div>
            </div>  <!-- /.col -->
        </div> <!-- /.row -->
    </div>
</div><!-- /.box -->
", "calendario/calendario.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/calendario/calendario.html.twig");
    }
}
