<?php

/* salas/paso4.html.twig */
class __TwigTemplate_c680eb596b82b9a4a3e51b9f439be8890b0be5fd771237320ddef3834cf53a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/paso4.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'steps' => array($this, 'block_steps'),
            'customContent' => array($this, 'block_customContent'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Busco Concierto | Paso 4 del Nuevo Local";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
    <!-- Estilos del Tema -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins -->    
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/skin-blue.min.css"), "html", null, true);
        echo "\">
    <!-- bootstrap slider -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />
    <!-- select 2 -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- fullCalendar 2.2.5-->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/fullcalendar.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/fullcalendar.print.css"), "html", null, true);
        echo "\" media=\"print\">
    <!-- Monthly Calendar -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/monthly.css"), "html", null, true);
        echo "\" />
    <style>
        .btn {
            border-radius:2px;
        }        
        .btn-custom-orange{
            color: #ffffff;
            background-color: #FF8000;
            border-color: #FF8000;
        }
        .btn-custom-orange:hover{
            color: #ffffff;
            background-color: #dc7003;
            border-color: #dc7003;\t
        }
        .btn-youtube{
            color: #ffffff;
            background-color: red;
        }
        .bordered-icon-lg {
            border-radius:0;
            font-size:34px !important;
            border:1px solid #D2D2D2;
            border-radius:50%;
            color:#00B7EB;
            background-color:transparent;
            padding-top:28px;
            height:90px;
            text-align:center;
            width:90px;
        }
        .bordered-icon-lg-gris {
            border-radius:0;
            font-size:34px !important;
            border:1px solid #D2D2D2;
            border-radius:50%;
            color:#171919;
            background-color:transparent;
            padding-top:28px;
            height:90px;
            text-align:center;
            width:90px;
        }
        .bordered-icon-color-gris {
            background-color: #939797; /*GRIS *#00B7EB; AZUL*/
            color:#fff !important;
            border:1px solid transparent;
        }

        .bordered-icon-color-gris:hover,
        .bordered-icon-color-gris:focus {
            border:1px solid #D2D2D2;
            color: #171919; /*#00B7EB;*/
        }
        .siguiente{
            right: 5px;
        }
/**********************Social**************************************************/
        .btn-facebook, .btn-twitter, .btn-instagram{
            color: #ffffff;
            font-size: 12px !important;
        }
        .btn-youtube{
            color: #ffffff;
            font-size: 12px !important;
            background-color: red;
        }
        .btn-primary{
            background-color:#3c8dbc;
            border: 1px none !important;
            border-color: #3c8dbc !important;
        }
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary.hover{
            background-color:#367fa9
        }
/**********************Subir archivo*******************************************/
        .tArchivo{
            width: 100%;
            color: #000000;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            z-index: 2;
        }
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputfile + label {
            font-size: 1.25em;
            font-weight: 700;
            color: white;
            background-color: black;
            display: inline-block;
        }

        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: red;
        }
        .inputfile + label {
            cursor: pointer; /* \"hand\" cursor */
        }
        .inputfile:focus + label {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
        }
        .inputfile + label * {
            pointer-events: none;
        }
        .alerta{
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            padding-bottom: 5px;
            text-align: justify;
            line-height: 30px;
            border-left: #337ab7;
            border-left-style: solid;
            border-left-width: 4px;
            background-color: #00B7EB;
            color: #ffffff;
            font-family: Helvetica, Open Sans;
        }
        .textoArchivos{
            color: #000000;
        }
/**************************Divisores para 4 pasos******************************/
        ul.steps li.divider-4-steps{
            width: 9%;
        }
        ul.steps li.divider-4-steps hr{
            border-top: 2px solid #d2d2d2 !important;
        }        
    </style>
";
    }

    // line 161
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 162
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "salas/paso4.html.twig", 162)->display(array_merge($context, array("bgImage" => (        // line 163
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nueva Sala: Calendario")));
    }

    // line 167
    public function block_steps($context, array $blocks = array())
    {
        // line 168
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "salas/paso4.html.twig", 168)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 175
    public function block_customContent($context, array $blocks = array())
    {
        // line 176
        echo "    <div class=\"container\"><!-- Contenido -->
        <div class=\"row mt20 mb20 background-light-grey\">
            <div class=\"hidden-xs hidden-sm col-md-12 without-padding-right without-padding-left\">
                <ul class=\"steps nav nav-pills\">
                    <li role=\"presentation\" id=\"step-1\" class=\"\">
                        <a href=\"\">
                            1
                        </a>
                        <span>Datos generales</span>
                    </li>
                    <li class=\"divider-4-steps\">
                        <span>
                            <hr class=\"hr-solid\">
                        </span>
                    </li>
                    <li role=\"presentation\" id=\"step-2\" class=\"\">
                        <a href=\"\">
                            2
                        </a>
                        <span>Datos de contacto</span>
                    </li>
                    <li class=\"divider-4-steps\">
                        <span>
                            <hr class=\"hr-solid\">
                        </span>
                    </li>
                    <li role=\"presentation\" id=\"step-3\" class=\"\">
                        <a href=\"\">
                            3
                        </a>
                        <span>Videos, Fotos y Eventos</span>
                    </li>
                    <li class=\"divider-4-steps\">
                        <span>
                            <hr class=\"hr-solid\">
                        </span>
                    </li>
                    <li role=\"presentation\" id=\"step-3\" class=\"active\">
                        <a href=\"\">
                            4
                        </a>
                        <span>Calendario</span>
                    </li>
                </ul>
            </div><!-- Fin Pasos -->
        </div>
        <div class=\"row\">
            <div class=\"tab-content tab-shop mt0 mb20 bg-shadow background-white\">
                <div id=\"paso3\" class=\"tab-pane row fade in active\"><!-- Calendario -->
                    <div class=\"col-sm-12\"><!-- Paso 2 -->
                        <div class=\"panel no-margin panel-primary\">
                            <div class=\"panel-heading\">
                                <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/calendario3.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Discograf&iacute;a\">
                                <strong>Calendario de Eventos</strong>
                            </div>
                            <div class=\"panel-body general-container background-light-grey\">
                                <div class=\"row mt20\">
                                    <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\">
                                        <span class=\"help-block\">
                                            Planifica los dias y horarios de apertura de tu local. 
                                            <b>(Los d&iacute;as que no abres los puedes dejar en blanco)</b>
                                        </span>
                                        <!--=== Accordion ===-->
                                        <div class=\"panel-group\" id=\"accordion\">
                                            <!--=== LUNES ===-->
                                            <div class=\"panel panel-default\" id=\"planificacion-1-container\">
                                                <div class=\"panel-heading\">
                                                    <h4 class=\"panel-title\">
                                                        <a style=\"font-weight: bold;\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#planificacion-1\">
                                                            Lunes
                                                        </a>
                                                        <span style=\"margin-right: 20px;display:none;\" id=\"saved-message-1\" class=\"label label-success pull-right\">
                                                            <i class=\"fa fa-check-circle\"></i> Guardado
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div id=\"planificacion-1\" class=\"panel-collapse collapse in\">
                                                    <form role=\"form\" id=\"formSetEvent-1\" action=\"/calendar/setEvent\" method=\"post\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-4\">
                                                                    <div class=\"form-group form-inline\">
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input form=\"formSetEvent-1\" id=\"abiertos-1\" name=\"estado\" value=\"abierto\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"abierto\" data-day=\"1\" style=\"position: absolute; opacity: 1;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 1;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Abierto</b>
                                                                            </label>
                                                                        </div>
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input id=\"cerrados-1\" checked=\"\" name=\"estado\" value=\"cerrado\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"cerrado\" data-day=\"1\" style=\"position: absolute; opacity: 1;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 1;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Cerrado</b>
                                                                            </label>
                                                                        </div>
                                                                        <div id=\"estadoHorario-1-container\" class=\"checkbox mt20\" style=\"\">
                                                                            <label>
                                                                                <div class=\"icheckbox_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input type=\"checkbox\" checked=\"checked\" class=\"flat estadoHorario\" data-day=\"1\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Todo el día</b>
                                                                            </label>
                                                                            <a style=\"color:#9999A4;font-size:16px;\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Puedes establecer horarios de apertura desmarcando esta opción\">
                                                                                <i class=\"ion ion-help-circled\"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div style=\"\" id=\"precio-1-container\" class=\"form-group\">
                                                                        <label>Precio</label>
                                                                        <div class=\"input-group\">
                                                                            <div class=\"input-group-addon\">
                                                                                <span class=\"fa fa-eur\"></span>
                                                                            </div>
                                                                            <input name=\"precio\" class=\"form-control precioEvento\" data-item=\"1\" type=\"number\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style=\"\" class=\"col-md-4 col-md-offset-1\" id=\"horarios-1-container\">
                                                                    <h4>
                                                                        <i class=\"fa fa-clock-o\"></i> Horarios
                                                                    </h4>
                                                                    <table class=\"table table-hover\">
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                    <a href=\"#modalAddHorario-1\" data-toggle=\"modal\" class=\"btn btn-primary\">
                                                                        <i class=\"fa fa-plus-circle\"></i> Añadir horario
                                                                    </a>
                                                                </div>
                                                                <div class=\"col-md-3 pull-right\">
                                                                    <a data-day=\"1\" class=\"btn btn-success btn-save\">
                                                                        <i class=\"fa fa-save\"></i> Guardar cambios
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" name=\"dia\" value=\"1\">
                                                        <input type=\"hidden\" id=\"estado-1\">
                                                    </form>
                                                </div>
                                                <!-- HORARIO -->
                                                <div class=\"modal fade modal-horario\" id=\"modalAddHorario-1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-sm\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                                                <h4 class=\"modal-title\" id=\"loginLabel\">Añadir Horario</h4>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Desde</label>
                                                                            &nbsp;
                                                                            <select id=\"horaDesde-1\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minDesde-1\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Hasta</label>
                                                                            &nbsp;
                                                                            <select id=\"horaHasta-1\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minHasta-1\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <a class=\"btn btn-primary btnAddHorario\" data-item=\"1\">Aceptar</a>
                                                                <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancelar</button>
                                                            </div>
                                                        </div><!-- /modal content -->
                                                    </div><!-- /modal dialog -->
                                                </div><!-- /modal holder -->
                                            </div><!-- /panel -->
                                            <!-- Martes -->
                                            <div class=\"panel panel-default\" id=\"planificacion-2-container\">
                                                <div class=\"panel-heading\">
                                                    <h4 class=\"panel-title\">
                                                        <a style=\"font-weight: bold;\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#planificacion-2\">
                                                            Martes
                                                        </a>
                                                        <span style=\"margin-right: 20px;display:none;\" id=\"saved-message-2\" class=\"label label-success pull-right\">
                                                            <i class=\"fa fa-check-circle\"></i> Guardado
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div id=\"planificacion-2\" class=\"panel-collapse collapse \">
                                                    <form role=\"form\" id=\"formSetEvent-2\" action=\"/calendar/setEvent\" method=\"post\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-4\">
                                                                    <div class=\"form-group form-inline\">
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\"><input form=\"formSetEvent-2\" id=\"abiertos-2\" name=\"estado\" value=\"abierto\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"abierto\" data-day=\"2\" style=\"position: absolute; opacity: 0;\"><ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins></div>
                                                                                &nbsp;
                                                                                <b>Abierto</b>
                                                                            </label>
                                                                        </div>
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\"><input id=\"cerrados-2\" checked=\"\" name=\"estado\" value=\"cerrado\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"cerrado\" data-day=\"2\" style=\"position: absolute; opacity: 0;\"><ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins></div>
                                                                                &nbsp;
                                                                                <b>Cerrado</b>
                                                                            </label>
                                                                        </div>
                                                                        <div id=\"estadoHorario-2-container\" class=\"checkbox mt20\" style=\"display: none;\">
                                                                            <label>
                                                                                <div class=\"icheckbox_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\"><input type=\"checkbox\" checked=\"checked\" class=\"flat estadoHorario\" data-day=\"2\" style=\"position: absolute; opacity: 0;\"><ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins></div>
                                                                                &nbsp;
                                                                                <b>Todo el día</b>
                                                                            </label>
                                                                            <a style=\"color:#9999A4;font-size:16px;\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Puedes establecer horarios de apertura desmarcando esta opción\">
                                                                                <i class=\"ion ion-help-circled\"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div style=\"display: none;\" id=\"precio-2-container\" class=\"form-group\">
                                                                        <label>Precio</label>
                                                                        <div class=\"input-group\">
                                                                            <div class=\"input-group-addon\">
                                                                                <span class=\"fa fa-eur\"></span>
                                                                            </div>
                                                                            <input name=\"precio\" class=\"form-control precioEvento\" data-item=\"2\" type=\"number\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style=\"display: none;\" class=\"col-md-4 col-md-offset-1\" id=\"horarios-2-container\">
                                                                    <h4><i class=\"fa fa-clock-o\"></i> Horarios</h4>
                                                                    <table class=\"table table-hover\">
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                    <a href=\"#modalAddHorario-2\" data-toggle=\"modal\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Añadir horario</a>
                                                                </div>
                                                                <div class=\"col-md-3 pull-right\">
                                                                    <a data-day=\"2\" class=\"btn btn-success btn-save\">
                                                                        <i class=\"fa fa-save\"></i> Guardar cambios
                                                                    </a>
                                                                </div>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                                        </div>
                                                        <input type=\"hidden\" name=\"dia\" value=\"2\">
                                                        <input type=\"hidden\" id=\"estado-2\">
                                                    </form>
                                                </div>
                                                <!-- Horario -->
                                                <div class=\"modal fade modal-horario\" id=\"modalAddHorario-2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-sm\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                                                <h4 class=\"modal-title\" id=\"loginLabel\">Añadir Horario</h4>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Desde</label>
                                                                            &nbsp;
                                                                            <select id=\"horaDesde-2\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minDesde-2\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Hasta</label>
                                                                            &nbsp;
                                                                            <select id=\"horaHasta-2\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minHasta-2\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <a class=\"btn btn-primary btnAddHorario\" data-item=\"2\">Aceptar</a>
                                                                <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancelar</button>
                                                            </div>
                                                        </div><!-- /modal content -->
                                                    </div><!-- /modal dialog -->
                                                </div><!-- /modal holder -->
                                                <!-- End Register -->
                                            </div><!-- /panel -->
                                            <!-- Miercoles -->
                                            <div class=\"panel panel-default\" id=\"planificacion-3-container\">
                                                <div class=\"panel-heading\">
                                                    <h4 class=\"panel-title\">
                                                        <a style=\"font-weight: bold;\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#planificacion-3\">
                                                            Mi&eacute;rcoles
                                                        </a>
                                                        <span style=\"margin-right: 20px;display:none;\" id=\"saved-message-1\" class=\"label label-success pull-right\"><i class=\"fa fa-check-circle\"></i> Guardado</span>
                                                    </h4>
                                                </div>
                                                <div id=\"planificacion-3\" class=\"panel-collapse collapse\">
                                                    <form role=\"form\" id=\"formSetEvent-3\" action=\"/calendar/setEvent\" method=\"post\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-4\">
                                                                    <div class=\"form-group form-inline\">
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input form=\"formSetEvent-1\" id=\"abiertos-3\" name=\"estado\" value=\"abierto\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"abierto\" data-day=\"1\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Abierto</b>
                                                                            </label>
                                                                        </div>
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input id=\"cerrados-3\" checked=\"\" name=\"estado\" value=\"cerrado\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"cerrado\" data-day=\"1\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Cerrado</b>
                                                                            </label>
                                                                        </div>
                                                                        <div id=\"estadoHorario-3-container\" class=\"checkbox mt20\" style=\"display: none;\">
                                                                            <label>
                                                                                <div class=\"icheckbox_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input type=\"checkbox\" checked=\"checked\" class=\"flat estadoHorario\" data-day=\"3\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Todo el día</b>
                                                                            </label>
                                                                            <a style=\"color:#9999A4;font-size:16px;\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Puedes establecer horarios de apertura desmarcando esta opción\">
                                                                                <i class=\"ion ion-help-circled\"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div style=\"display: none;\" id=\"precio-3-container\" class=\"form-group\">
                                                                        <label>Precio</label>
                                                                        <div class=\"input-group\">
                                                                            <div class=\"input-group-addon\">
                                                                                <span class=\"fa fa-eur\"></span>
                                                                            </div>
                                                                            <input name=\"precio\" class=\"form-control precioEvento\" data-item=\"1\" type=\"number\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style=\"display: none;\" class=\"col-md-4 col-md-offset-1\" id=\"horarios-3-container\">
                                                                    <h4><i class=\"fa fa-clock-o\"></i> Horarios</h4>
                                                                    <table class=\"table table-hover\">
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                    <a href=\"#modalAddHorario-3\" data-toggle=\"modal\" class=\"btn btn-primary\">
                                                                        <i class=\"fa fa-plus-circle\"></i> Añadir horario
                                                                    </a>
                                                                </div>
                                                                <div class=\"col-md-3 pull-right\">
                                                                    <a data-day=\"1\" class=\"btn btn-success btn-save\">
                                                                        <i class=\"fa fa-save\"></i> Guardar cambios
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" name=\"dia\" value=\"3\">
                                                        <input type=\"hidden\" id=\"estado-3\">
                                                    </form>
                                                </div>
                                                <!-- HORARIO -->
                                                <div class=\"modal fade modal-horario\" id=\"modalAddHorario-3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-sm\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                    <span class=\"sr-only\">Cerrar</span>
                                                                </button>
                                                                <h4 class=\"modal-title\" id=\"loginLabel\">Añadir Horario</h4>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Desde</label>
                                                                            &nbsp;
                                                                            <select id=\"horaDesde-3\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minDesde-3\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Hasta</label>
                                                                            &nbsp;
                                                                            <select id=\"horaHasta-3\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minHasta-3\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <a class=\"btn btn-primary btnAddHorario\" data-item=\"1\">Aceptar</a>
                                                                <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancelar</button>
                                                            </div>
                                                        </div><!-- /modal content -->
                                                    </div><!-- /modal dialog -->
                                                </div><!-- /modal holder -->
                                            </div><!-- /panel -->
                                            <!-- Jueves -->
                                            <div class=\"panel panel-default\" id=\"planificacion-4-container\">
                                                <div class=\"panel-heading\">
                                                    <h4 class=\"panel-title\">
                                                        <a style=\"font-weight: bold;\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#planificacion-4\">
                                                            Jueves
                                                        </a>
                                                        <span style=\"margin-right: 20px;display:none;\" id=\"saved-message-4\" class=\"label label-success pull-right\">
                                                            <i class=\"fa fa-check-circle\"></i> Guardado
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div id=\"planificacion-4\" class=\"panel-collapse collapse\">
                                                    <form role=\"form\" id=\"formSetEvent-4\" action=\"/calendar/setEvent\" method=\"post\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-4\">
                                                                    <div class=\"form-group form-inline\">
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input form=\"formSetEvent-1\" id=\"abiertos-4\" name=\"estado\" value=\"abierto\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"abierto\" data-day=\"1\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Abierto</b>
                                                                            </label>
                                                                        </div>
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input id=\"cerrados-4\" checked=\"\" name=\"estado\" value=\"cerrado\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"cerrado\" data-day=\"1\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Cerrado</b>
                                                                            </label>
                                                                        </div>
                                                                        <div id=\"estadoHorario-1-container\" class=\"checkbox mt20\" style=\"display: none;\">
                                                                            <label>
                                                                                <div class=\"icheckbox_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\"><input type=\"checkbox\" checked=\"checked\" class=\"flat estadoHorario\" data-day=\"1\" style=\"position: absolute; opacity: 0;\"><ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins></div>
                                                                                &nbsp;
                                                                                <b>Todo el día</b>
                                                                            </label>
                                                                            <a style=\"color:#9999A4;font-size:16px;\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Puedes establecer horarios de apertura desmarcando esta opción\">
                                                                                <i class=\"ion ion-help-circled\"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div style=\"display: none;\" id=\"precio-4-container\" class=\"form-group\">
                                                                        <label>Precio</label>
                                                                        <div class=\"input-group\">
                                                                            <div class=\"input-group-addon\">
                                                                                <span class=\"fa fa-eur\"></span>
                                                                            </div>
                                                                            <input name=\"precio\" class=\"form-control precioEvento\" data-item=\"4\" type=\"number\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style=\"display: none;\" class=\"col-md-4 col-md-offset-1\" id=\"horarios-1-container\">
                                                                    <h4>
                                                                        <i class=\"fa fa-clock-o\"></i> Horarios
                                                                    </h4>
                                                                    <table class=\"table table-hover\">
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                    <a href=\"#modalAddHorario-4\" data-toggle=\"modal\" class=\"btn btn-primary\">
                                                                        <i class=\"fa fa-plus-circle\"></i> Añadir horario
                                                                    </a>
                                                                </div>
                                                                <div class=\"col-md-3 pull-right\">
                                                                    <a data-day=\"1\" class=\"btn btn-success btn-save\">
                                                                        <i class=\"fa fa-save\"></i> Guardar cambios
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" name=\"dia\" value=\"4\">
                                                        <input type=\"hidden\" id=\"estado-4\">
                                                    </form>
                                                </div>
                                                <!-- HORARIO -->
                                                <div class=\"modal fade modal-horario\" id=\"modalAddHorario-4\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-sm\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                    <span class=\"sr-only\">Cerrar</span>
                                                                </button>
                                                                <h4 class=\"modal-title\" id=\"loginLabel\">Añadir Horario</h4>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Desde</label>
                                                                            &nbsp;
                                                                            <select id=\"horaDesde-4\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minDesde-4\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Hasta</label>
                                                                            &nbsp;
                                                                            <select id=\"horaHasta-4\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minHasta-4\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <a class=\"btn btn-primary btnAddHorario\" data-item=\"1\">Aceptar</a>
                                                                <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancelar</button>
                                                            </div>
                                                        </div><!-- /modal content -->
                                                    </div><!-- /modal dialog -->
                                                </div><!-- /modal holder -->
                                            </div><!-- /panel -->
                                            <!-- Viernes -->
                                            <div class=\"panel panel-default\" id=\"planificacion-5-container\">
                                                <div class=\"panel-heading\">
                                                    <h4 class=\"panel-title\">
                                                        <a style=\"font-weight: bold;\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#planificacion-5\">
                                                            Viernes
                                                        </a>
                                                        <span style=\"margin-right: 20px;display:none;\" id=\"saved-message-1\" class=\"label label-success pull-right\">
                                                            <i class=\"fa fa-check-circle\"></i> Guardado
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div id=\"planificacion-5\" class=\"panel-collapse collapse\">
                                                    <form role=\"form\" id=\"formSetEvent-5\" action=\"/calendar/setEvent\" method=\"post\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-4\">
                                                                    <div class=\"form-group form-inline\">
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input form=\"formSetEvent-5\" id=\"abiertos-5\" name=\"estado\" value=\"abierto\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"abierto\" data-day=\"1\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Abierto</b>
                                                                            </label>
                                                                        </div>
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input id=\"cerrados-5\" checked=\"\" name=\"estado\" value=\"cerrado\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"cerrado\" data-day=\"5\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Cerrado</b>
                                                                            </label>
                                                                        </div>
                                                                        <div id=\"estadoHorario-5-container\" class=\"checkbox mt20\" style=\"display: none;\">
                                                                            <label>
                                                                                <div class=\"icheckbox_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input type=\"checkbox\" checked=\"checked\" class=\"flat estadoHorario\" data-day=\"1\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Todo el día</b>
                                                                            </label>
                                                                            <a style=\"color:#9999A4;font-size:16px;\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Puedes establecer horarios de apertura desmarcando esta opción\">
                                                                                <i class=\"ion ion-help-circled\"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div style=\"display: none;\" id=\"precio-5-container\" class=\"form-group\">
                                                                        <label>Precio</label>
                                                                        <div class=\"input-group\">
                                                                            <div class=\"input-group-addon\">
                                                                                <span class=\"fa fa-eur\"></span>
                                                                            </div>
                                                                            <input name=\"precio\" class=\"form-control precioEvento\" data-item=\"1\" type=\"number\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style=\"display: none;\" class=\"col-md-4 col-md-offset-1\" id=\"horarios-5-container\">
                                                                    <h4>
                                                                        <i class=\"fa fa-clock-o\"></i> Horarios
                                                                    </h4>
                                                                    <table class=\"table table-hover\">
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                    <a href=\"#modalAddHorario-5\" data-toggle=\"modal\" class=\"btn btn-primary\">
                                                                        <i class=\"fa fa-plus-circle\"></i> Añadir horario
                                                                    </a>
                                                                </div>
                                                                <div class=\"col-md-3 pull-right\">
                                                                    <a data-day=\"5\" class=\"btn btn-success btn-save\">
                                                                        <i class=\"fa fa-save\"></i> Guardar cambios
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" name=\"dia\" value=\"5\">
                                                        <input type=\"hidden\" id=\"estado-5\">
                                                    </form>
                                                </div>
                                                <!-- HORARIO -->
                                                <div class=\"modal fade modal-horario\" id=\"modalAddHorario-5\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-sm\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                                                <h4 class=\"modal-title\" id=\"loginLabel\">Añadir Horario</h4>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Desde</label>
                                                                            &nbsp;
                                                                            <select id=\"horaDesde-5\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minDesde-5\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Hasta</label>
                                                                            &nbsp;
                                                                            <select id=\"horaHasta-5\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minHasta-5\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <a class=\"btn btn-primary btnAddHorario\" data-item=\"5\">Aceptar</a>
                                                                <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancelar</button>
                                                            </div>
                                                        </div><!-- /modal content -->
                                                    </div><!-- /modal dialog -->
                                                </div><!-- /modal holder -->
                                            </div><!-- /panel -->
                                            <!-- Sabado -->
                                            <div class=\"panel panel-default\" id=\"planificacion-6-container\">
                                                <div class=\"panel-heading\">
                                                    <h4 class=\"panel-title\">
                                                        <a style=\"font-weight: bold;\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#planificacion-6\">
                                                            S&aacute;bado
                                                        </a>
                                                        <span style=\"margin-right: 20px;display:none;\" id=\"saved-message-6\" class=\"label label-success pull-right\">
                                                            <i class=\"fa fa-check-circle\"></i> Guardado
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div id=\"planificacion-6\" class=\"panel-collapse collapse\">
                                                    <form role=\"form\" id=\"formSetEvent-6\" action=\"/calendar/setEvent\" method=\"post\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-4\">
                                                                    <div class=\"form-group form-inline\">
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input form=\"formSetEvent-6\" id=\"abiertos-6\" name=\"estado\" value=\"abierto\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"abierto\" data-day=\"1\" style=\"position: absolute; opacity: 1;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 1;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Abierto</b>
                                                                            </label>
                                                                        </div>
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input id=\"cerrados-6\" checked=\"\" name=\"estado\" value=\"cerrado\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"cerrado\" data-day=\"1\" style=\"position: absolute; opacity: 1;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 1;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Cerrado</b>
                                                                            </label>
                                                                        </div>
                                                                        <div id=\"estadoHorario-6-container\" class=\"checkbox mt20\" style=\"\">
                                                                            <label>
                                                                                <div class=\"icheckbox_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input type=\"checkbox\" checked=\"checked\" class=\"flat estadoHorario\" data-day=\"6\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Todo el día</b>
                                                                            </label>
                                                                            <a style=\"color:#9999A4;font-size:16px;\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Puedes establecer horarios de apertura desmarcando esta opción\">
                                                                                <i class=\"ion ion-help-circled\"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div style=\"\" id=\"precio-1-container\" class=\"form-group\">
                                                                        <label>Precio</label>
                                                                        <div class=\"input-group\">
                                                                            <div class=\"input-group-addon\">
                                                                                <span class=\"fa fa-eur\"></span>
                                                                            </div>
                                                                            <input name=\"precio\" class=\"form-control precioEvento\" data-item=\"6\" type=\"number\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style=\"\" class=\"col-md-4 col-md-offset-1\" id=\"horarios-6-container\">
                                                                    <h4>
                                                                        <i class=\"fa fa-clock-o\"></i> Horarios
                                                                    </h4>
                                                                    <table class=\"table table-hover\">
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                    <a href=\"#modalAddHorario-6\" data-toggle=\"modal\" class=\"btn btn-primary\">
                                                                        <i class=\"fa fa-plus-circle\"></i> Añadir horario
                                                                    </a>
                                                                </div>
                                                                <div class=\"col-md-3 pull-right\">
                                                                    <a data-day=\"6\" class=\"btn btn-success btn-save\">
                                                                        <i class=\"fa fa-save\"></i> Guardar cambios
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" name=\"dia\" value=\"6\">
                                                        <input type=\"hidden\" id=\"estado-6\">
                                                    </form>
                                                </div>
                                                <!-- HORARIO -->
                                                <div class=\"modal fade modal-horario\" id=\"modalAddHorario-6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-sm\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                                                <h4 class=\"modal-title\" id=\"loginLabel\">Añadir Horario</h4>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Desde</label>
                                                                            &nbsp;
                                                                            <select id=\"horaDesde-6\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minDesde-6\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Hasta</label>
                                                                            &nbsp;
                                                                            <select id=\"horaHasta-6\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minHasta-6\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <a class=\"btn btn-primary btnAddHorario\" data-item=\"6\">Aceptar</a>
                                                                <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancelar</button>
                                                            </div>
                                                        </div><!-- /modal content -->
                                                    </div><!-- /modal dialog -->
                                                </div><!-- /modal holder -->
                                            </div><!-- /panel -->
                                            <!-- Domingo -->
                                            <div class=\"panel panel-default\" id=\"planificacion-7-container\">
                                                <div class=\"panel-heading\">
                                                    <h4 class=\"panel-title\">
                                                        <a style=\"font-weight: bold;\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#planificacion-7\">
                                                            Domingo
                                                        </a>
                                                        <span style=\"margin-right: 20px;display:none;\" id=\"saved-message-7\" class=\"label label-success pull-right\">
                                                            <i class=\"fa fa-check-circle\"></i> Guardado
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div id=\"planificacion-7\" class=\"panel-collapse collapse\">
                                                    <form role=\"form\" id=\"formSetEvent-7\" action=\"/calendar/setEvent\" method=\"post\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-4\">
                                                                    <div class=\"form-group form-inline\">
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input form=\"formSetEvent-7\" id=\"abiertos-7\" name=\"estado\" value=\"abierto\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"abierto\" data-day=\"1\" style=\"position: absolute; opacity: 1;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 1;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Abierto</b>
                                                                            </label>
                                                                        </div>
                                                                        <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                            <label>
                                                                                <div class=\"iradio_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input id=\"cerrados-7\" checked=\"\" name=\"estado\" value=\"cerrado\" type=\"radio\" class=\"flat estadoDias eventChanger\" data-type=\"cerrado\" data-day=\"1\" style=\"position: absolute; opacity: 1;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 1;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Cerrado</b>
                                                                            </label>
                                                                        </div>
                                                                        <div id=\"estadoHorario-7-container\" class=\"checkbox mt20\" style=\"\">
                                                                            <label>
                                                                                <div class=\"icheckbox_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                    <input type=\"checkbox\" checked=\"checked\" class=\"flat estadoHorario\" data-day=\"1\" style=\"position: absolute; opacity: 0;\">
                                                                                    <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                </div>
                                                                                &nbsp;
                                                                                <b>Todo el día</b>
                                                                            </label>
                                                                            <a style=\"color:#9999A4;font-size:16px;\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Puedes establecer horarios de apertura desmarcando esta opción\">
                                                                                <i class=\"ion ion-help-circled\"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div style=\"\" id=\"precio-7-container\" class=\"form-group\">
                                                                        <label>Precio</label>
                                                                        <div class=\"input-group\">
                                                                            <div class=\"input-group-addon\">
                                                                                <span class=\"fa fa-eur\"></span>
                                                                            </div>
                                                                            <input name=\"precio\" class=\"form-control precioEvento\" data-item=\"7\" type=\"number\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style=\"\" class=\"col-md-4 col-md-offset-1\" id=\"horarios-7-container\">
                                                                    <h4>
                                                                        <i class=\"fa fa-clock-o\"></i> Horarios
                                                                    </h4>
                                                                    <table class=\"table table-hover\">
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                    <a href=\"#modalAddHorario-1\" data-toggle=\"modal\" class=\"btn btn-primary\">
                                                                        <i class=\"fa fa-plus-circle\"></i> Añadir horario
                                                                    </a>
                                                                </div>
                                                                <div class=\"col-md-3 pull-right\">
                                                                    <a data-day=\"1\" class=\"btn btn-success btn-save\">
                                                                        <i class=\"fa fa-save\"></i> Guardar cambios
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" name=\"dia\" value=\"7\">
                                                        <input type=\"hidden\" id=\"estado-7\">
                                                    </form>
                                                </div>
                                                <!-- HORARIO -->
                                                <div class=\"modal fade modal-horario\" id=\"modalAddHorario-7\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-sm\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                                                    <span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                                                <h4 class=\"modal-title\" id=\"loginLabel\">Añadir Horario</h4>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Desde</label>
                                                                            &nbsp;
                                                                            <select id=\"horaDesde-7\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minDesde-7\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group form-inline\">
                                                                            <label style=\"width: 46px;\">Hasta</label>
                                                                            &nbsp;
                                                                            <select id=\"horaHasta-7\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Hr</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                            </select>
                                                                            <span><b>:</b></span>
                                                                            <select id=\"minHasta-7\" class=\"form-control selectpicker\" style=\"display: none;\">
                                                                                <option value=\"\">Min</option>
                                                                                <option value=\"00\">00</option>
                                                                                <option value=\"01\">01</option>
                                                                                <option value=\"02\">02</option>
                                                                                <option value=\"03\">03</option>
                                                                                <option value=\"04\">04</option>
                                                                                <option value=\"05\">05</option>
                                                                                <option value=\"06\">06</option>
                                                                                <option value=\"07\">07</option>
                                                                                <option value=\"08\">08</option>
                                                                                <option value=\"09\">09</option>
                                                                                <option value=\"10\">10</option>
                                                                                <option value=\"11\">11</option>
                                                                                <option value=\"12\">12</option>
                                                                                <option value=\"13\">13</option>
                                                                                <option value=\"14\">14</option>
                                                                                <option value=\"15\">15</option>
                                                                                <option value=\"16\">16</option>
                                                                                <option value=\"17\">17</option>
                                                                                <option value=\"18\">18</option>
                                                                                <option value=\"19\">19</option>
                                                                                <option value=\"20\">20</option>
                                                                                <option value=\"21\">21</option>
                                                                                <option value=\"22\">22</option>
                                                                                <option value=\"23\">23</option>
                                                                                <option value=\"24\">24</option>
                                                                                <option value=\"25\">25</option>
                                                                                <option value=\"26\">26</option>
                                                                                <option value=\"27\">27</option>
                                                                                <option value=\"28\">28</option>
                                                                                <option value=\"29\">29</option>
                                                                                <option value=\"30\">30</option>
                                                                                <option value=\"31\">31</option>
                                                                                <option value=\"32\">32</option>
                                                                                <option value=\"33\">33</option>
                                                                                <option value=\"34\">34</option>
                                                                                <option value=\"35\">35</option>
                                                                                <option value=\"36\">36</option>
                                                                                <option value=\"37\">37</option>
                                                                                <option value=\"38\">38</option>
                                                                                <option value=\"39\">39</option>
                                                                                <option value=\"40\">40</option>
                                                                                <option value=\"41\">41</option>
                                                                                <option value=\"42\">42</option>
                                                                                <option value=\"43\">43</option>
                                                                                <option value=\"44\">44</option>
                                                                                <option value=\"45\">45</option>
                                                                                <option value=\"46\">46</option>
                                                                                <option value=\"47\">47</option>
                                                                                <option value=\"48\">48</option>
                                                                                <option value=\"49\">49</option>
                                                                                <option value=\"50\">50</option>
                                                                                <option value=\"51\">51</option>
                                                                                <option value=\"52\">52</option>
                                                                                <option value=\"53\">53</option>
                                                                                <option value=\"54\">54</option>
                                                                                <option value=\"55\">55</option>
                                                                                <option value=\"56\">56</option>
                                                                                <option value=\"57\">57</option>
                                                                                <option value=\"58\">58</option>
                                                                                <option value=\"59\">59</option>
                                                                            </select>
                                                                            &nbsp;
                                                                            <span><b>hr</b></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <a class=\"btn btn-primary btnAddHorario\" data-item=\"7\">Aceptar</a>
                                                                <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancelar</button>
                                                            </div>
                                                        </div><!-- /modal content -->
                                                    </div><!-- /modal dialog -->
                                                </div><!-- /modal holder -->
                                            </div><!-- /panel -->
                                        </div><!-- Fin del acordion -->
                                    </div><!-- Fin columna izquierda -->
                                    <div class=\"col-md-4\"><!-- Calendario -->
                                        <div class=\"monthly\" id=\"mycalendar\"></div>
                                    </div><!-- Fin Calendario -->
                                </div><!-- Fin row -->
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                <b>Excepciones</b>
                                                <span style=\"margin-right: 20px; display: none;\" id=\"saved-message-excepciones\" class=\"label label-success pull-right\">
                                                    <i class=\"fa fa-check-circle\"></i> Guardado
                                                </span>
                                            </div>
                                            <div class=\"panel-body\">
                                                <form id=\"formAddExcepcion\" action=\"/calendar/setException\" method=\"post\" novalidate=\"novalidate\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-12\">
                                                            <p class=\"help-block\">
                                                                Añade tus días festivos del año y sus vísperas que tengas horarios
                                                                especiales y abras o cierres tu local. <b>Recuerda que puedes configurar
                                                                estas excepciones más adelante desde tu cuenta de usuario.</b>
                                                            </p>
                                                            <a href=\"#modalAddExcepcion\" data-toggle=\"modal\" class=\"btn btn-primary\">
                                                                <i class=\"fa fa-plus-circle\"></i> Añadir Excepción
                                                            </a>
                                                        </div>
                                                        <div id=\"excepcionesListContainer\" class=\"col-md-12 mt20\" style=\"display: none;\">
                                                            <table class=\"table table-hover\">
                                                                <thead>
                                                                <tr>
                                                                    <th>Fecha</th>
                                                                    <th>Abierto/Cerrado</th>
                                                                    <th>Horarios</th>
                                                                    <th>Precio</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                            <!-- Excepciones -->
                                                    <div class=\"modal fade modal-excepcion\" id=\"modalAddExcepcion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog modal-lg\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                                                        <span aria-hidden=\"true\">×</span>
                                                                        <span class=\"sr-only\">Cerrar</span>
                                                                    </button>
                                                                    <h4 class=\"modal-title\" id=\"loginLabel\">Añadir Excepción</h4>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"form-group form-inline\">
                                                                                <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                                    <label>
                                                                                        <div class=\"iradio_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                            <input name=\"estadoExcepcion2\" value=\"abierto\" type=\"radio\" class=\"flat estadoDiasExcepcion eventChanger\" style=\"position: absolute; opacity: 0;\">
                                                                                            <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                        </div>
                                                                                        &nbsp;
                                                                                        <b>Abierto</b>
                                                                                    </label>
                                                                                </div>
                                                                                <div class=\"checkbox\" style=\"margin-right: 10px;\">
                                                                                    <label>
                                                                                        <div class=\"iradio_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\">
                                                                                            <input checked=\"\" name=\"estadoExcepcion2\" value=\"cerrado\" type=\"radio\" class=\"flat estadoDiasExcepcion eventChanger\" style=\"position: absolute; opacity: 0;\">
                                                                                            <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins>
                                                                                        </div>
                                                                                        &nbsp;
                                                                                        <b>Cerrado</b>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label for=\"fechaExcepcion\">Fecha</label>
                                                                                <div class=\"input-group\">
                                                                                    <div class=\"input-group-addon\">
                                                                                        <span class=\"fa fa-calendar\"></span>
                                                                                    </div>
                                                                                    <input required=\"required\" name=\"fechaExcepcion\" id=\"fechaExcepcion\" class=\"form-control datepicker\" type=\"text\" aria-required=\"true\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label for=\"precioExcepcion\">Precio</label>
                                                                                <div class=\"input-group\">
                                                                                    <div class=\"input-group-addon\">
                                                                                        <span class=\"fa fa-eur\"></span>
                                                                                    </div>
                                                                                    <input min=\"1\" name=\"precioExcepcion\" id=\"precioExcepcion\" class=\"form-control\" type=\"number\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <div class=\"checkbox mt20\">
                                                                                    <label style=\"padding-left: 0;\">
                                                                                        <div class=\"icheckbox_flat-blue checked\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\"><input type=\"checkbox\" name=\"estadoHorarioExcepcion\" checked=\"checked\" class=\"flat estadoHorarioExcepcion\" style=\"position: absolute; opacity: 0;\"><ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;\"></ins></div>
                                                                                        &nbsp;
                                                                                        <b>Todo el día</b>
                                                                                    </label>
                                                                                    <a style=\"color:#9999A4;font-size:16px;\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Puedes establecer horarios de apertura o cierre desmarcando esta opción\">
                                                                                        <i class=\"ion ion-help-circled\"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"horarioContainer col-md-4\" id=\"horariosFormExcepcionContainer\" style=\"display: none;\">
                                                                            <h4><i class=\"fa fa-clock-o\"></i> Horarios</h4>
                                                                            <div class=\"form-group form-inline\">
                                                                                <label for=\"horaDesdeExcepcion\" style=\"width: 46px;\">Desde</label>
                                                                                &nbsp;
                                                                                <select id=\"horaDesdeExcepcion\" required=\"required\" class=\"horarioItem horaInicio form-control selectpicker\" aria-required=\"true\" style=\"display: none;\">
                                                                                    <option value=\"\">Hr</option>
                                                                                    <option value=\"00\">00</option>
                                                                                    <option value=\"01\">01</option>
                                                                                    <option value=\"02\">02</option>
                                                                                    <option value=\"03\">03</option>
                                                                                    <option value=\"04\">04</option>
                                                                                    <option value=\"05\">05</option>
                                                                                    <option value=\"06\">06</option>
                                                                                    <option value=\"07\">07</option>
                                                                                    <option value=\"08\">08</option>
                                                                                    <option value=\"09\">09</option>
                                                                                    <option value=\"10\">10</option>
                                                                                    <option value=\"11\">11</option>
                                                                                    <option value=\"12\">12</option>
                                                                                    <option value=\"13\">13</option>
                                                                                    <option value=\"14\">14</option>
                                                                                    <option value=\"15\">15</option>
                                                                                    <option value=\"16\">16</option>
                                                                                    <option value=\"17\">17</option>
                                                                                    <option value=\"18\">18</option>
                                                                                    <option value=\"19\">19</option>
                                                                                    <option value=\"20\">20</option>
                                                                                    <option value=\"21\">21</option>
                                                                                    <option value=\"22\">22</option>
                                                                                    <option value=\"23\">23</option>
                                                                                </select>
                                                                                <span><b>:</b></span>
                                                                                <select id=\"minDesdeExcepcion\" required=\"required\" class=\"horarioItem minutoInicio form-control selectpicker\" aria-required=\"true\" style=\"display: none;\">
                                                                                    <option value=\"\">Min</option>
                                                                                    <option value=\"00\">00</option>
                                                                                    <option value=\"01\">01</option>
                                                                                    <option value=\"02\">02</option>
                                                                                    <option value=\"03\">03</option>
                                                                                    <option value=\"04\">04</option>
                                                                                    <option value=\"05\">05</option>
                                                                                    <option value=\"06\">06</option>
                                                                                    <option value=\"07\">07</option>
                                                                                    <option value=\"08\">08</option>
                                                                                    <option value=\"09\">09</option>
                                                                                    <option value=\"10\">10</option>
                                                                                    <option value=\"11\">11</option>
                                                                                    <option value=\"12\">12</option>
                                                                                    <option value=\"13\">13</option>
                                                                                    <option value=\"14\">14</option>
                                                                                    <option value=\"15\">15</option>
                                                                                    <option value=\"16\">16</option>
                                                                                    <option value=\"17\">17</option>
                                                                                    <option value=\"18\">18</option>
                                                                                    <option value=\"19\">19</option>
                                                                                    <option value=\"20\">20</option>
                                                                                    <option value=\"21\">21</option>
                                                                                    <option value=\"22\">22</option>
                                                                                    <option value=\"23\">23</option>
                                                                                    <option value=\"24\">24</option>
                                                                                    <option value=\"25\">25</option>
                                                                                    <option value=\"26\">26</option>
                                                                                    <option value=\"27\">27</option>
                                                                                    <option value=\"28\">28</option>
                                                                                    <option value=\"29\">29</option>
                                                                                    <option value=\"30\">30</option>
                                                                                    <option value=\"31\">31</option>
                                                                                    <option value=\"32\">32</option>
                                                                                    <option value=\"33\">33</option>
                                                                                    <option value=\"34\">34</option>
                                                                                    <option value=\"35\">35</option>
                                                                                    <option value=\"36\">36</option>
                                                                                    <option value=\"37\">37</option>
                                                                                    <option value=\"38\">38</option>
                                                                                    <option value=\"39\">39</option>
                                                                                    <option value=\"40\">40</option>
                                                                                    <option value=\"41\">41</option>
                                                                                    <option value=\"42\">42</option>
                                                                                    <option value=\"43\">43</option>
                                                                                    <option value=\"44\">44</option>
                                                                                    <option value=\"45\">45</option>
                                                                                    <option value=\"46\">46</option>
                                                                                    <option value=\"47\">47</option>
                                                                                    <option value=\"48\">48</option>
                                                                                    <option value=\"49\">49</option>
                                                                                    <option value=\"50\">50</option>
                                                                                    <option value=\"51\">51</option>
                                                                                    <option value=\"52\">52</option>
                                                                                    <option value=\"53\">53</option>
                                                                                    <option value=\"54\">54</option>
                                                                                    <option value=\"55\">55</option>
                                                                                    <option value=\"56\">56</option>
                                                                                    <option value=\"57\">57</option>
                                                                                    <option value=\"58\">58</option>
                                                                                    <option value=\"59\">59</option>
                                                                                </select>                                                                                
                                                                                &nbsp;
                                                                                <span><b>hr</b></span>
                                                                            </div>
                                                                            <div class=\"form-group form-inline\">
                                                                                <label for=\"horaHastaExcepcion\" style=\"width: 46px;\">Hasta</label>
                                                                                &nbsp;
                                                                                <select id=\"horaHastaExcepcion\" required=\"required\" class=\"horarioItem horaFin form-control selectpicker\" aria-required=\"true\" style=\"display: none;\">
                                                                                    <option value=\"\">Hr</option>
                                                                                    <option value=\"00\">00</option>
                                                                                    <option value=\"01\">01</option>
                                                                                    <option value=\"02\">02</option>
                                                                                    <option value=\"03\">03</option>
                                                                                    <option value=\"04\">04</option>
                                                                                    <option value=\"05\">05</option>
                                                                                    <option value=\"06\">06</option>
                                                                                    <option value=\"07\">07</option>
                                                                                    <option value=\"08\">08</option>
                                                                                    <option value=\"09\">09</option>
                                                                                    <option value=\"10\">10</option>
                                                                                    <option value=\"11\">11</option>
                                                                                    <option value=\"12\">12</option>
                                                                                    <option value=\"13\">13</option>
                                                                                    <option value=\"14\">14</option>
                                                                                    <option value=\"15\">15</option>
                                                                                    <option value=\"16\">16</option>
                                                                                    <option value=\"17\">17</option>
                                                                                    <option value=\"18\">18</option>
                                                                                    <option value=\"19\">19</option>
                                                                                    <option value=\"20\">20</option>
                                                                                    <option value=\"21\">21</option>
                                                                                    <option value=\"22\">22</option>
                                                                                    <option value=\"23\">23</option>
                                                                                </select>
                                                                                <span><b>:</b></span>
                                                                                <select id=\"minHastaExcepcion\" required=\"required\" class=\"horarioItem minutoFin form-control selectpicker\" aria-required=\"true\" style=\"display: none;\">
                                                                                    <option value=\"\">Min</option>
                                                                                    <option value=\"00\">00</option>
                                                                                    <option value=\"01\">01</option>
                                                                                    <option value=\"02\">02</option>
                                                                                    <option value=\"03\">03</option>
                                                                                    <option value=\"04\">04</option>
                                                                                    <option value=\"05\">05</option>
                                                                                    <option value=\"06\">06</option>
                                                                                    <option value=\"07\">07</option>
                                                                                    <option value=\"08\">08</option>
                                                                                    <option value=\"09\">09</option>
                                                                                    <option value=\"10\">10</option>
                                                                                    <option value=\"11\">11</option>
                                                                                    <option value=\"12\">12</option>
                                                                                    <option value=\"13\">13</option>
                                                                                    <option value=\"14\">14</option>
                                                                                    <option value=\"15\">15</option>
                                                                                    <option value=\"16\">16</option>
                                                                                    <option value=\"17\">17</option>
                                                                                    <option value=\"18\">18</option>
                                                                                    <option value=\"19\">19</option>
                                                                                    <option value=\"20\">20</option>
                                                                                    <option value=\"21\">21</option>
                                                                                    <option value=\"22\">22</option>
                                                                                    <option value=\"23\">23</option>
                                                                                    <option value=\"24\">24</option>
                                                                                    <option value=\"25\">25</option>
                                                                                    <option value=\"26\">26</option>
                                                                                    <option value=\"27\">27</option>
                                                                                    <option value=\"28\">28</option>
                                                                                    <option value=\"29\">29</option>
                                                                                    <option value=\"30\">30</option>
                                                                                    <option value=\"31\">31</option>
                                                                                    <option value=\"32\">32</option>
                                                                                    <option value=\"33\">33</option>
                                                                                    <option value=\"34\">34</option>
                                                                                    <option value=\"35\">35</option>
                                                                                    <option value=\"36\">36</option>
                                                                                    <option value=\"37\">37</option>
                                                                                    <option value=\"38\">38</option>
                                                                                    <option value=\"39\">39</option>
                                                                                    <option value=\"40\">40</option>
                                                                                    <option value=\"41\">41</option>
                                                                                    <option value=\"42\">42</option>
                                                                                    <option value=\"43\">43</option>
                                                                                    <option value=\"44\">44</option>
                                                                                    <option value=\"45\">45</option>
                                                                                    <option value=\"46\">46</option>
                                                                                    <option value=\"47\">47</option>
                                                                                    <option value=\"48\">48</option>
                                                                                    <option value=\"49\">49</option>
                                                                                    <option value=\"50\">50</option>
                                                                                    <option value=\"51\">51</option>
                                                                                    <option value=\"52\">52</option>
                                                                                    <option value=\"53\">53</option>
                                                                                    <option value=\"54\">54</option>
                                                                                    <option value=\"55\">55</option>
                                                                                    <option value=\"56\">56</option>
                                                                                    <option value=\"57\">57</option>
                                                                                    <option value=\"58\">58</option>
                                                                                    <option value=\"59\">59</option>
                                                                                </select>                                                                                
                                                                                &nbsp;
                                                                                <span><b>hr</b></span>
                                                                            </div>
                                                                            <p class=\"help-block\" style=\"color:red;display: none;\">El sistema asume que la hora de cierre definida pertenece al dia siguiente</p>
                                                                            <div class=\"form-group\">
                                                                                <a class=\"btn btn-primary btnAdicionarHorarioExcepcion\">Añadir horario <i class=\"fa fa-angle-double-right\"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-4\" id=\"horariosExcepcion-container\" style=\"display: none;\">
                                                                            <div class=\"form-group\">
                                                                                <table class=\"table table-hover\">
                                                                                    <tbody>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <a class=\"btn btn-primary btnAddExcepcion\">Aceptar</a>
                                                                    <a class=\"btn btn-default btnCancelAddExcepcion\" data-dismiss=\"modal\">Cancelar</a>
                                                                </div>
                                                            </div><!-- /modal content -->
                                                        </div><!-- /modal dialog -->
                                                    </div><!-- /Excepciones -->
                                                    <input type=\"hidden\" name=\"estadoExcepcion\" id=\"estadoExcepcion\" value=\"cerrado\">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"hidden\" name=\"sessionId\" id=\"sessionId\" value=\"npeom4mef12mjnholundon16vh\">
                                <input type=\"hidden\" name=\"calendarSetEventRoute\" id=\"calendarSetEventRoute\" value=\"/calendar/setEvent\">
                                <input type=\"hidden\" name=\"urlJSonEvents\" id=\"urlJSonEvents\" value=\"/uploads/events/npeom4mef12mjnholundon16vh.json\">
                                <div class=\"row\"><!-- Botones -->
                                    <div class=\"hidden-xs hidden-sm col-md-6 col-lg-6\"></div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                        <a href=\"";
        // line 2698
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaSala");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"guardar\" data-toggle=\"tooltip\" title=\"Guardar\">
                                            Guardar
                                            <span class=\"glyphicon glyphicon-save\"></span>
                                        </a>
                                    </div>
                                </div><!-- Fin de Botones --> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- /.row -->
    </div>
";
    }

    // line 2713
    public function block_javascripts($context, array $blocks = array())
    {
        // line 2714
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 2716
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 2718
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2719
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 2723
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 2725
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/fastclick.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 2727
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- fullCalendar 2.2.5 --
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2731
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/fullcalendar_es.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> -->
    <!-- Calendario de trabajo -->
    <script src=\"";
        // line 2733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/calendarHandler.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2734
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/monthly.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--  -->
    <script src=\"";
        // line 2736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/customCodeRegistroLocal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/registroLocal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
/************************* Funcion Documento listo ****************************/
        \$(document).ready(function() {
/*************************** Tooltip ***************************************/            
            \$('[data-toggle=\"tooltip\"]').tooltip(); 
/*************iCheck for checkbox and radio inputs ****************************/ 
            \$('input[type=\"checkbox\"].flat, input[type=\"radio\"].flat').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });
            // Datepicker
            \$('#fechaExcepcion').datepicker({
                format: \"yyyy-mm-dd\",
                autoclose: true
            });
/* initialize the calendar ---------------------------------------------------*/
            var sessionId=\$('#sessionId').val();
            var urlJson=\$('#urlJSonEvents').val();
            cleanCalendar('#mycanlendar');
            initCalendar('#mycalendar',urlJson);  
/************* Action del boton submit **************************************/ 
            \$('.btn-submit-local').on('click',function(e){
                e.preventDefault();
                var step=\$(this).attr('data-step');
                var validator=null;
/*  No se envia ningun form, solo se envia la peticion directo al server para 
 *  terminar el registro de local y redireccionar */
                \$.ajax(\"/registro/local\",{
                    type:'post',
                    dataType:'json',
                    data:{
                        'step':4
                    }
                }).done(function(){
                    var nextStep=response[1];

                    if(nextStep==-1){
                        //TODO:fin del Wizard, redireccionar para el area de cliente
                        alert('Fin del Wizard, redireccionamos para el area de cliente, cuando este lista ;)');
                    }
                });
                //validaar primero el form
                if(validator!=null && validator.form()){
                    wait('.container');
                    var selector=\"#step-\"+step+\"-form\";
                    var \$form=\$(selector);
                    //limpiar todos los errores
                    \$('.form-error').remove();
                    //procesar el form
                    \$.ajax(\$form.attr('action'),{
                        dataType:\"json\",
                        type:\"post\",
                        data:\$form.serialize()
                    }).done(function(response){
                        if(!response[0]){
                            if(response[1]=='not_loguedin'){
                                window.location.replace(\$('#login_url').val());
                            }
                            //buscar los errores y posicionarlos en los campos correspondientes
                            var errores=response[1];
                            for(var i=0;i<=errores.length;i++){
                                var sel=\"#\"+errores[i]['id'];
                                var error='<span class=\"error\" style=\"color:red;font-weight: bold;\">'+errores[i]['error']+'</span>';
                                \$(sel).closest('form').find(\"label[for='\" + \$(sel).attr( \"id\" ) + \"']\").append(\$(error));
                            }
                        }
                        else{ //obtener el paso siguiente
                            var nextStep=response[1];
                            if(nextStep==-1){
                                //TODO:fin del Wizard, redireccionar para el area de cliente
                                alert('Fin del Wizard, redireccionamos para el area de cliente, cuando este lista ;)');
                            }
                            else{
                                var stepContainer=\"#step-\"+step+\"-container\";
                                \$(stepContainer).hide();
                                var stepContainer=\"#step-\"+nextStep+\"-container\";
                                \$(stepContainer).fadeIn();
                                //marcar el item de la lista de steps
                                updateItems(nextStep);
                                jQuery('html, body').animate({
                                    scrollTop: jQuery('div.container').offset().top - 50
                                }, 1500);
                            }
                        }
                    });
                    endWait('.container');
                }
            });
        });
</script>
";
    }

    public function getTemplateName()
    {
        return "salas/paso4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2859 => 2737,  2855 => 2736,  2850 => 2734,  2846 => 2733,  2841 => 2731,  2837 => 2730,  2831 => 2727,  2826 => 2725,  2821 => 2723,  2814 => 2719,  2810 => 2718,  2805 => 2716,  2799 => 2714,  2796 => 2713,  2777 => 2698,  304 => 228,  250 => 176,  247 => 175,  242 => 168,  239 => 167,  235 => 163,  233 => 162,  230 => 161,  85 => 20,  80 => 18,  76 => 17,  71 => 15,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/paso4.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/paso4.html.twig");
    }
}
