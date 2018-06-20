<?php

/* calendario/calendario2.html.twig */
class __TwigTemplate_16c227ed476bd5f1eaa3417ab0d087045fe3578472aa4fbe7ae02fd791fd5125 extends Twig_Template
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
        echo "<!-- Calendar -->
<div class=\"row panelSombra background-white ml5 mb10 pb10\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white\">  <!--The calendar -->
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
</div><!-- /.box -->
";
    }

    public function getTemplateName()
    {
        return "calendario/calendario2.html.twig";
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
        return new Twig_Source("", "calendario/calendario2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/calendario/calendario2.html.twig");
    }
}
