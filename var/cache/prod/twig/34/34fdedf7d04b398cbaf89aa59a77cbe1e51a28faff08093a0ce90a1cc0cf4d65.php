<?php

/* eventos/paso3.html.twig */
class __TwigTemplate_d3e158f8e7f3c0f82f51c95d3c69bd42561b2326e98df1f7c9ef956d5d4443ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("eventos/paso1.html.twig", "eventos/paso3.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'customStyles' => array($this, 'block_customStyles'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'steps' => array($this, 'block_steps'),
            'customContent' => array($this, 'block_customContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eventos/paso1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto | Paso 3";
    }

    // line 4
    public function block_customStyles($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("customStyles", $context, $blocks);
        echo "
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
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
        /**Para crear el calendario emergente**/
        /**Para el boton del calendario*/
        .boton{
            float: left;
            background: #D2D2D2;
        }
        .boton-gris{
            color: #939797;
        }
        .botonFecha{
            margin-left: 10px;
            display: block;
            background: url('";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/calendario.png"), "html", null, true);
        echo "');
            border: 0;
            cursor: pointer;
            height: 29px;
            width: 29px;
            margin:8px 0 0 0;
            border-radius: 2px;
        }
        /**Para el calendario*/
        .calendario{
            margin:10px 0 30px 0; 
            border:solid 1px #00B7EB; 
            width:205px; 
            height:230px;
            background-color: #FDFDFD;
            display: none; 
            position: absolute;
            left: 30px;
            top: 0px;
            z-index: 2;
        }
        .textoFecha{
            color: #000000;
            text-align: justify;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            font-weight: bold;
            font-style: normal; 
        }
        .tFecha{
            width: 100px;
            height: 34px;
            border-color: #ffffff;
            border: 0px;
            border-style: none;
            display: block;
            color: #000000;
            text-align: justify;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            z-index: 1;
        }
        .tFechaEvento{
            border-color: #D2D2D2;
            border: 1px;
            border-style: solid;
            display: block;
            z-index: 2;
        }
        </style>
        <link href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 128
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/paso3.html.twig", 129)->display(array_merge($context, array("bgImage" => (        // line 130
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg3.jpg"), "subheaderTitle" => "PROPONER CONCIERTO: Paso 3")));
    }

    // line 134
    public function block_steps($context, array $blocks = array())
    {
        // line 135
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "eventos/paso3.html.twig", 135)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 142
    public function block_customContent($context, array $blocks = array())
    {
        // line 143
        echo "    <div class=\"container\"><!-- Contenido -->
        <div class=\"row background-light-grey\"><br></div>
        <div class=\"hidden-xs hidden-sm col-md-12 without-padding-right without-padding-left\">
            <ul class=\"steps nav nav-pills\">
                <li role=\"presentation\" id=\"step-1\" class=\"\">
                    <a href=\"\">
                        1
                    </a>
                    <span>Informaci&oacute;n general</span>
                </li>
                <li class=\"divider\">
                    <span>
                        <hr class=\"hr-solid\">
                    </span>
                </li>
                <li role=\"presentation\" id=\"step-2\" class=\"\">
                    <a href=\"\">
                        2
                    </a>
                    <span>¿D&oacute;nde?</span>
                </li>
                <li class=\"divider\">
                    <span>
                        <hr class=\"hr-solid\">
                    </span>
                </li>
                <li role=\"presentation\" id=\"step-3\" class=\"active\">
                    <a href=\"\">
                        3
                    </a>
                    <span>¿Cu&aacute;ndo?</span>
                </li>
                <li class=\"divider\">
                    <span>
                        <hr class=\"hr-solid\">
                    </span>
                </li>
                <li role=\"presentation\" id=\"step-4\" class=\"\">
                    <a href=\"\">
                        4
                    </a>
                    <span>Entradas</span>
                </li>
                <li class=\"divider\">
                    <span>
                        <hr class=\"hr-solid\">
                    </span>
                </li>
                <li role=\"presentation\" id=\"step-5\" class=\"\">
                    <a href=\"\">
                        5
                    </a>
                    <span>Resumen</span>
                </li>
            </ul>
        </div><!-- Fin Pasos -->
        <div id=\"step-1-container\" class=\"row bg-shadow mt40 mb40 pt20 pb20\">
            <div class=\"col-sm-12\">
                <div class=\"panel no-margin panel-primary\">
                    <div class=\"panel-heading\">
                        <strong>Establece horario de tu evento</strong>
                    </div>
                    <div class=\"panel-body general-container\">
                        <form action=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso4");
        echo "\" method=\"post\" id=\"formulario2\" role=\"form\">
                            <div class=\"row\"><!-- -->
                                <div class=\"col-sm-6\"><!-- Fecha -->
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div id=\"fecha\" class=\"textoFecha\">Fecha <span class=\"required\">*</span></div>
                                            <p>Solo aparecen disponibles los d&iacute;as que abre el local.</p>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                            <div class=\"input-group date datepicker-me\" data-provide=\"datepicker\">            
                                                <div class=\"input-group-addon\">
                                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                                </div>
                                                <input type=\"text\" class=\"form-control datepicker-me\" required=\"required\">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Fecha -->
                                <div class=\"col-sm-6\"><!-- Horario -->
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <strong>Horario</strong>
                                            <span class=\"required\">*</span>
                                        </div>
                                        <div class=\"panel-body\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-2 col-md-2\">Desde</div>
                                                <div class=\"col-sm-3 col-md-3 col-lg-3\">
                                                    <select id=\"horaDesde\" class=\"form-control js-example-basic-single\" name=\"horaDesde[]\" required=\"required\">
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
                                                </div>
                                                <div class=\"col-sm-2 col-md-1\">:</div>
                                                <div class=\"col-sm-3 col-md-3 col-lg-3\">
                                                    <select id=\"minutosDesde\" class=\"form-control js-example-basic-single\" name=\"horaDesde[]\" required=\"required\">
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
                                                </div>
                                                <div class=\"col-sm-2 col-md-1\">Horas</div>
                                                <div class=\"col-sm-2 col-md-1\"></div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-sm-2 col-md-2\">Hasta</div>
                                                <div class=\"col-sm-3 col-md-3 col-lg-3\">
                                                    <select id=\"horaHasta\" class=\"form-control js-example-basic-single\" name=\"horaHasta[]\" required=\"required\">
                                                        <option value=\"0\">00</option>
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
                                                </div>
                                                <div class=\"col-sm-2 col-md-1\">:</div>
                                                <div class=\"col-sm-3 col-md-3 col-lg-3\"><!-- <input type=\"number\" name=\"min\" min=\"0\" max=\"59\"> -->
                                                    <select id=\"minutosHasta\" class=\"form-control js-example-basic-single\" name=\"minutosHasta[]\" required=\"required\">
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
                                                </div>
                                                <div class=\"col-sm-2 col-md-1\">Horas</div>
                                                <div class=\"col-sm-2 col-md-1\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Horario -->
                            </div><!-- Fin Row 1 -->
                            <div class=\"row\"><!-- Botones -->
                                <div class=\"col-sx-4 col-sm-6 col-md-8 col-lg-8\"></div>
                                <div class=\"col-sx-4 col-sm-3 col-md-2 col-lg-2\">
                                    <a href=\"";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso2");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"anterior2\" data-toggle=\"tooltip\" title=\"Anterior - Local\">
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                        Anterior
                                    </a>
                                </div>
                                <div class=\"col-sx-4 col-sm-3 col-md-2 col-lg-2\">
                                    <button type=\"submit\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"siguiente3\" data-toggle=\"tooltip\" title=\"Siguiente - Entradas\">
                                        Siguiente
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </button>
                                </div>
                            </div><!-- Fin de Botones -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 455
    public function block_javascripts($context, array $blocks = array())
    {
        // line 456
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- datepicker -->
    <script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$('.datepicker-me').datepicker({
            format: \"dd/mm/yyyy\",
            todayBtn: true,
            language: \"es\",
        });
        \$(document).ready(function() {
            \$('.js-example-basic-single').select2({
                lenguage:\"es\"
            });
/*************************** Tooltip ***************************************/
            \$('[data-toggle=\"tooltip\"]').tooltip();             
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "eventos/paso3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 459,  532 => 458,  526 => 456,  523 => 455,  500 => 436,  267 => 206,  202 => 143,  199 => 142,  194 => 135,  191 => 134,  187 => 130,  185 => 129,  182 => 128,  176 => 126,  123 => 76,  51 => 7,  47 => 6,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/paso3.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/paso3.html.twig");
    }
}
