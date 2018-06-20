<?php

/* salas/paso4v2.html.twig */
class __TwigTemplate_b59e341956f6b8645ac56dc4d9e474930c00d8dae1911e0bb37a04a58b3ecfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/paso4v2.html.twig", 2);
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

    // line 159
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 160
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "salas/paso4v2.html.twig", 160)->display(array_merge($context, array("bgImage" => (        // line 161
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png"), "subheaderTitle" => "Nueva Sala: Calendario")));
    }

    // line 165
    public function block_steps($context, array $blocks = array())
    {
        // line 166
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "salas/paso4v2.html.twig", 166)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 173
    public function block_customContent($context, array $blocks = array())
    {
        // line 174
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
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/calendario3.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Discograf&iacute;a\">
                                <strong>Calendario de Eventos</strong>
                            </div>
                            <div class=\"panel-body general-container background-light-grey\">
                                <div class=\"row mt20\">
                                    <div class=\"col-md-3\">
                                        <div class=\"box box-solid\">
                                            <div class=\"box-header with-border\">
                                                <h4 class=\"box-title\">Eventos Arrastrables</h4>
                                            </div>
                                            <div class=\"box-body\"><!-- the events -->
                                                <div id=\"external-events\">
                                                    <div class=\"external-event bg-green\">Refrigerio</div>
                                                    <div class=\"external-event bg-yellow\">Apertura</div>
                                                    <div class=\"external-event bg-aqua\">Barra libre</div>
                                                    <div class=\"external-event bg-light-blue\">Actividad</div>
                                                    <div class=\"external-event bg-red\">Cierre</div>
                                                    <div class=\"checkbox\">
                                                        <label for=\"drop-remove\">
                                                            <input type=\"checkbox\" id=\"drop-remove\">
                                                            eliminar después de caer
                                                        </label>
                                                    </div>
                                                </div>
                                          </div><!-- /.box-body -->
                                        </div><!-- /. box -->
                                        <div class=\"box box-solid\">
                                            <div class=\"box-header with-border\">
                                                <h3 class=\"box-title\">Crear Evento</h3>
                                            </div>
                                            <div class=\"box-body\">
                                                <div class=\"btn-group\" style=\"width: 100%; margin-bottom: 10px;\">
                                                <!--<button type=\"button\" id=\"color-chooser-btn\" class=\"btn btn-info btn-block dropdown-toggle\" data-toggle=\"dropdown\">Color <span class=\"caret\"></span></button>-->
                                                    <ul class=\"fc-color-picker\" id=\"color-chooser\">
                                                        <li><a class=\"text-aqua\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-light-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-teal\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-yellow\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-orange\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-green\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-lime\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-red\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-purple\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-fuchsia\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-muted\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                        <li><a class=\"text-navy\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class=\"input-group\">
                                                    <input id=\"new-event\" type=\"text\" class=\"form-control\" placeholder=\"Evento\">
                                                    <div class=\"input-group-btn\">
                                                      <button id=\"add-new-event\" type=\"button\" class=\"boton btn btn-primary btn-flat\">Agregar</button>
                                                    </div><!-- /btn-group -->
                                                </div> <!-- /input-group -->
                                            </div>
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class=\"col-md-9\">
                                        <div class=\"box box-primary\">
                                            <div class=\"box-body no-padding\">
                                                  <!-- THE CALENDAR -->
                                                <div id=\"calendar\"></div>
                                            </div> <!-- /.box-body -->
                                        </div> <!-- /. box -->
                                    </div><!-- /.col -->
                                </div><!-- Fin row -->
                                <div class=\"row\"><!-- Botones -->
                                    <div class=\"hidden-xs hidden-sm col-md-6 col-lg-6\"></div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-4 col-lg-4\">
                                    </div>
                                    <div class=\"col-sx-12 col-sm-12 col-md-2 col-lg-2\">
                                        <a href=\"";
        // line 299
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

    // line 314
    public function block_javascripts($context, array $blocks = array())
    {
        // line 315
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/fullcalendar_es.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
        
          /* initialize the external events
           -----------------------------------------------------------------*/
          function ini_events(ele) {
            ele.each(function () {

              // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
              // it doesn't need to have a start or end
              var eventObject = {
                title: \$.trim(\$(this).text()) // use the element's text as the event title
              };

              // store the Event Object in the DOM element so we can get to it later
              \$(this).data('eventObject', eventObject);

              // make the event draggable using jQuery UI
              \$(this).draggable({
                zIndex: 1070,
                revert: true, // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
              });

            });
          }

          ini_events(\$('#external-events div.external-event'));

          /* initialize the calendar
           -----------------------------------------------------------------*/
          //Date for the calendar events (dummy data)
          var date = new Date();
          var d = date.getDate(),
              m = date.getMonth(),
              y = date.getFullYear();
          \$('#calendar').fullCalendar({
            lang: 'es',
            header: {
              left: 'prev,next today',
              center: 'title',
              right: 'month,agendaWeek,agendaDay'
            },
            buttonText: {
              today: 'Hoy',
              month: 'Mes',
              week: 'Semana',
              day: 'Día'
            },
            //Random default events
            events: [
              {
                title: 'Todos los Eventos',
                start: new Date(y, m, 1),
                backgroundColor: \"#f56954\", //red
                borderColor: \"#f56954\" //red
              },
              {
                title: 'Evento 1',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2),
                backgroundColor: \"#f39c12\", //yellow
                borderColor: \"#f39c12\" //yellow
              },
              {
                title: 'Evento 2',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
                backgroundColor: \"#0073b7\", //Blue
                borderColor: \"#0073b7\" //Blue
              },
              {
                title: 'Evento 3',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                backgroundColor: \"#00c0ef\", //Info (aqua)
                borderColor: \"#00c0ef\" //Info (aqua)
              },
              {
                title: 'Recordatorio',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
                backgroundColor: \"#00a65a\", //Success (green)
                borderColor: \"#00a65a\" //Success (green)
              },
              {
                title: 'Evento 4',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/',
                backgroundColor: \"#3c8dbc\", //Primary (light-blue)
                borderColor: \"#3c8dbc\" //Primary (light-blue)
              }
            ],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped

              // retrieve the dropped element's stored Event Object
              var originalEventObject = \$(this).data('eventObject');

              // we need to copy it, so that multiple events don't have a reference to the same object
              var copiedEventObject = \$.extend({}, originalEventObject);

              // assign it the date that was reported
              copiedEventObject.start = date;
              copiedEventObject.allDay = allDay;
              copiedEventObject.backgroundColor = \$(this).css(\"background-color\");
              copiedEventObject.borderColor = \$(this).css(\"border-color\");

              // render the event on the calendar
              // the last `true` argument determines if the event \"sticks\" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
              \$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

              // is the \"remove after drop\" checkbox checked?
              if (\$('#drop-remove').is(':checked')) {
                // if so, remove the element from the \"Draggable Events\" list
                \$(this).remove();
              }

            }
          });

          /* ADDING EVENTS */
          var currColor = \"#3c8dbc\"; //Red by default
          //Color chooser button
          var colorChooser = \$(\"#color-chooser-btn\");
          \$(\"#color-chooser > li > a\").click(function (e) {
            e.preventDefault();
            //Save color
            currColor = \$(this).css(\"color\");
            //Add color effect to button
            \$('#add-new-event').css({\"background-color\": currColor, \"border-color\": currColor});
          });
          \$(\"#add-new-event\").click(function (e) {
            e.preventDefault();
            //Get value and make sure it is not null
            var val = \$(\"#new-event\").val();
            if (val.length == 0) {
              return;
            }

            //Create events
            var event = \$(\"<div />\");
            event.css({\"background-color\": currColor, \"border-color\": currColor, \"color\": \"#fff\"}).addClass(\"external-event\");
            event.html(val);
            \$('#external-events').prepend(event);

            //Add draggable funtionality
            ini_events(event);

            //Remove event from text input
            \$(\"#new-event\").val(\"\");
          });
        });
    /*************************** Tooltip ***************************************/
        \$(document).ready(function() {
            \$('[data-toggle=\"tooltip\"]').tooltip(); 
        });
</script>
";
    }

    public function getTemplateName()
    {
        return "salas/paso4v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 332,  435 => 331,  429 => 328,  424 => 326,  419 => 324,  412 => 320,  408 => 319,  403 => 317,  397 => 315,  394 => 314,  375 => 299,  299 => 226,  245 => 174,  242 => 173,  237 => 166,  234 => 165,  230 => 161,  228 => 160,  225 => 159,  80 => 18,  76 => 17,  71 => 15,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  48 => 7,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/paso4v2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/paso4v2.html.twig");
    }
}
