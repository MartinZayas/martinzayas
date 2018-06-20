<?php

/* eventos/nuevo.html.twig */
class __TwigTemplate_b0089ce50dc1234c01a892c11abf607df7c431f44c26841ffb0b54003ed03da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "eventos/nuevo.html.twig", 2);
        $this->blocks = array(
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'steps' => array($this, 'block_steps'),
            'customContent' => array($this, 'block_customContent'),
            'customScripts' => array($this, 'block_customScripts'),
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

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- Bootstrap Datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />

    <!-- bootstrap slider -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-3.5.2/select2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2-bootstrap.css"), "html", null, true);
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
    </style>
";
    }

    // line 37
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->loadTemplate("default/breadcrumbs.html.twig", "eventos/nuevo.html.twig", 38)->display(array_merge($context, array("items" => array(0 => array("raiz" => false, "title" => "Crear Concierto", "href" => "#"), 1 => array("raiz" => true, "title" => "Datos del Concierto")))));
    }

    // line 44
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/nuevo.html.twig", 45)->display(array_merge($context, array("bgImage" => (        // line 46
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg3.jpg"), "subheaderTitle" => "Crear Concierto")));
    }

    // line 51
    public function block_steps($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "eventos/nuevo.html.twig", 52)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 60
    public function block_customContent($context, array $blocks = array())
    {
        // line 61
        echo "    <div id=\"step-1-container\" class=\"row bg-shadow mt40 mb40 background-white pt20 pb20\">
        <div class=\"col-sm-12\">
            <div class=\"panel no-margin panel-primary\">
                <div class=\"panel-heading\">Información General</div>
                <div class=\"panel-body general-container\">
                    <form action=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" method=\"post\" id=\"step-1-form\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                            <label for=\"nombreEvento\">Nombre del Evento <span class=\"required\">*</span></label>
                                        </div>
                                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                            <input id=\"nombreEvento\" name=\"nombreEvento\" required=\"required\" class=\"form-control\" type=\"text\" placeholder=\"Nombre del evento\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                            <label for=\"estilo\">Estilo(s) Musical(es) <span class=\"required\">*</span></label>
                                        </div>
                                        <div class=\"col-sm-8 col-md-8 col-lg-8\">
                                            <select id=\"estilos\" class=\"form-control\" name=\"estilos\" aria-invalid=\"false\" placeholder=\"Seleccione un item\">
                                                <option value=\"Cl&aacute;sica\">Cl&aacute;sica</option>
                                                <option value=\"Indie\">Indie</option>
                                                <option value=\"Jazz\">Jazz</option>
                                                <option value=\"Pop\">Pop</option>
                                                <option value=\"Rock\">Rock</option>
                                                <option value=\"Salsa\">Salsa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4 col-md-4 col-lg-4\">
                                        <a href=\"#\" class=\"\" id=\"agregar\" onclick=\"agregar();\">
                                            <span title=\"Añadir\" class=\"glyphicon glyphicon-ok botonAgregar\"></span>Añadir
                                        </a>
                                    </div>
                                </div>
                                <!-- Estilos agregados -->
                                <div class=\"row mt10\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class=\"well well-sm estilosAgregados\">
                                            <ul class=\"list-group list-inline\" id=\"listaDesordenada\">

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin Estilos agregados -->
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\" id=\"artistasContainer\">
                                    <div class=\"panel-heading\">Artistas <span class=\"required\">*</span></div>
                                    <div class=\"panel-body\">
                                        ";
        // line 117
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ARTIST")) {
            // line 118
            echo "                                            <p class=\"help-block\">
                                                Si vas a compartir escenario con otros artistas, adiciónalos aqui, si no, omite este paso.
                                            </p>
                                        ";
        }
        // line 122
        echo "                                        <div class=\"form-group\">
                                            <label for=\"artistas\">Selecciona el o los artistas</label>
                                            <select id=\"artistas\" class=\"js-source-states-2 form-control\">
                                                <option value=\"\"></option>
                                                ";
        // line 126
        if ((array_key_exists("artistas", $context) &&  !(null === ($context["artistas"] ?? null)))) {
            // line 127
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["artistas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["artista"]) {
                // line 128
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artista"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artista"], "nombre", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artista'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                                                ";
        }
        // line 131
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>O Añádelo tu mismo</label>
                                            <div class=\"input-group\">
                                                <input id=\"nombre-artista\" type=\"text\" placeholder=\"Escribe el nombre del artista\" class=\"form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button id=\"btnAdicionarArtista\" style=\"height: 42px;\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Añadir</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row mt20\">
                                            <div class=\"col-md-12\">
                                                <div class=\"table-responsive no-margin\">
                                                    <table id=\"artistas-seleccionados\" class=\"table\">
                                                        <thead>
                                                        <tr>
                                                            <th colspan=\"2\">Artistas seleccionados</th>
                                                        </tr>
                                                        </thead><!-- /table header -->
                                                        <tbody>
                                                            ";
        // line 152
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ARTIST")) {
            // line 153
            echo "                                                                <tr>
                                                                    <td>Tú (";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "artista", array()), "nombre", array()), "html", null, true);
            echo ")</td>
                                                                </tr>
                                                            ";
        } else {
            // line 157
            echo "                                                                <tr class=\"no-artist\">
                                                                    <td>No has seleccionado ningun artista</td>
                                                                </tr>
                                                            ";
        }
        // line 161
        echo "
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">Imágenes</div>
                                    <div class=\"panel-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <p id=\"msgBoxFotos\" style=\"color: red;\"></p>
                                                <p>
                                                    Puedes subir otras fotos para que se vean en los detalles del concierto.
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <ul id=\"fotos-container\" class=\"col-sm-12 text-center no-margin list-unstyled\">

                                            </ul>
                                        </div>
                                        <div class=\"row mt20\">
                                            <div class=\"col-md-12\">
                                                <div id=\"progressOuter2\" class=\"progress progress-striped active\" style=\"display:none;\">
                                                    <div id=\"progressBar2\" class=\"progress-bar progress-bar-primary\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\">
                                                    </div>
                                                </div>
                                                <a id=\"uploadBtnFotos\" href=\"#\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> Añadir imagen </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"step\" value=\"1\">
                        <input type=\"hidden\" name=\"idEvento\" class=\"idEvent\">
                        <input type=\"hidden\" name=\"img-upload-path\" id=\"img-upload-path\" value=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarImagen");
        echo "\">
                        <input type=\"hidden\" name=\"img-route\" id=\"img-route\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["uploads_images_temp"] ?? null)), "html", null, true);
        echo "\">
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12 text-right mt10\">
            <a href=\"#\" data-step=\"1\" data-toggle=\"tooltip\" title=\"Siguiente - ¿Dónde?\" class=\"btn btn-rw btn-primary btn-lg btn-submit-evento\">Siguiente <i class=\"ion-ios7-arrow-right\"></i></a>
        </div>
    </div>
    <div id=\"step-2-container\" class=\"row\" style=\"display: none;\">
        <div class=\"col-sm-12\">
            <div class=\"row bg-shadow mt40 mb40 background-white pt20 pb20\">
                <div class=\"col-sm-12\" id=\"filtroLocalContainer\">
                    <div class=\"panel no-margin panel-primary\">
                        <div class=\"panel-heading\">Filtrar por</div>
                        <div class=\"panel-body\">
                            <form id=\"formFiltroLocal\" role=\"form\" action=\"";
        // line 221
        echo "\" method=\"post\">
                                <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Nombre</label>
                                            <input name=\"filtroNombre\" class=\"form-control\" type=\"text\" placeholder=\"Nombre del Local\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"filtroProvincia\">Provincia</label>
                                            <select id=\"filtroProvincia\" name=\"filtroProvincia\" class=\"form-control js-source-states-2\" multiple=\"multiple\">
                                                <option value=\"Rock\">Rock</option>
                                                <option value=\"Pop\">Pop</option>
                                                <option value=\"Jazz\">Jazz</option>
                                                <option value=\"Bachata\">Bachata</option>
                                                <option value=\"Clasic\">Clasic</option>
                                                <option>A Coruna</option>
                                                <option>Albacete</option>
                                                <option>Alicante</option>
                                                <option>Almería</option>
                                                <option>Asturias</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label for=\"filtroCiudad\">Ciudad</label>
                                            <select id=\"filtroCiudad\" name=\"filtroProvincia\" class=\"form-control js-source-states-2\" multiple=\"multiple\">
                                                <option value=\"Rock\">Rock</option>
                                                <option value=\"Pop\">Pop</option>
                                                <option value=\"Jazz\">Jazz</option>
                                                <option value=\"Bachata\">Bachata</option>
                                                <option value=\"Clasic\">Clasic</option>
                                                <option>A Coruna</option>
                                                <option>Albacete</option>
                                                <option>Alicante</option>
                                                <option>Almería</option>
                                                <option>Asturias</option>
                                            </select>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Disponibilidad</label>
                                            <div class=\"input-daterange input-group\" id=\"datepicker\">
                                                <input type=\"text\" placeholder=\"Fecha Inicio\" style=\"border-radius:0;\" class=\"input-sm form-control\" name=\"filtroFechaInicio\" />
                                                <span class=\"input-group-addon\">hasta</span>
                                                <input type=\"text\" placeholder=\"Fecha Fin\" class=\"input-sm form-control\" style=\"border-radius:0;\" name=\"filtroFechaFin\" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label for=\"filtroAforo\">Aforo</label><br/>
                                            <span style=\"margin-bottom:20px;\" id=\"aforoInicio\"><strong>0</strong></span>
                                            <span style=\"margin-bottom:20px;\" id=\"aforoFinal\" class=\"pull-right\"><strong>500</strong></span>
                                            <input name=\"filtroAforo\" id=\"filtroAforo\" type=\"text\" value=\"Aforo\" class=\"slider form-control\" data-slider-min=\"0\" data-slider-max=\"500\" data-slider-step=\"5\" data-slider-value=\"[0,500]\" data-slider-orientation=\"horizontal\" data-slider-selection=\"before\" data-slider-tooltip=\"hide\" data-slider-id=\"blue\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 text-right mt10\">
                    <a id=\"btnFiltroLocal\" href=\"#\" class=\"btn btn-rw btn-primary btn-lg\">Filtrar </a>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading\">
                        <h4>
                            <span class=\"ion-navicon-round mr15\"></span>
                            Locales Disponibles
                        </h4>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-12\" id=\"localesResultContainer\">
                    <!-- Comienza el listado de locales -->
                    ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 303
            echo "                        <div class=\"row mb40 list-item-local-row bg-shadow\">
                            <div class=\"col-md-12\">
                                <div class=\"row\">
                                    ";
            // line 306
            if ((array_key_exists("local", $context) &&  !(null === $context["local"]))) {
                // line 307
                echo "                                    <div class=\"col-md-4\">
                                        ";
                // line 308
                if (($this->getAttribute($context["local"], "getImagenDestacada", array()) != null)) {
                    // line 309
                    echo "                                            <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["uploads_images"] ?? null)), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "getImagenDestacada", array()), "url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "getImagenDestacada", array()), "alt", array()), "html", null, true);
                    echo "\" />
                                        ";
                } else {
                    // line 311
                    echo "                                            <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["directorio_imagenes_public"] ?? null)), "html", null, true);
                    echo "no_image.jpg\" alt=\"Sin imagen\" />
                                        ";
                }
                // line 313
                echo "                                    </div>
                                    <div class=\"col-md-4\">
                                        <h3><a href=\"#\">Local";
                // line 315
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "nombre", array()), "html", null, true);
                echo "</a></h3>
                                        <hr align=\"left\" class=\"mt15 mb10\" style=\"width:50px;\">
                                        <ul class=\"posted-info\">
                                            <li><i class=\"fa fa-group\"></i> Aforo: ";
                // line 318
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "aforo", array()), "html", null, true);
                echo " personas</li>
                                            <li><i class=\"fa fa-map-marker\"></i> ";
                // line 319
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["local"], "usuarioid", array()), "direccionid", array()), "direccion", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["local"], "usuarioid", array()), "direccionid", array()), "ciudad", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["local"], "usuarioid", array()), "direccionid", array()), "provincia", array()), "html", null, true);
                echo "</li>
                                            <li><i class=\"ion-map\"></i> Medidas Escenario: ";
                // line 320
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "medidasEscenario", array()), "html", null, true);
                echo " mts cuadrados</li>
                                        </ul>
                                    </div>
                                    <div class=\"col-md-4\" style=\"text-align:center;\">
                                        <h2 style=\"text-transform:lowercase;margin-top:20px;\">15€ / hora</h2>
                                        <a href=\"#\" data-id=\"";
                // line 325
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "\" data-step=\"2\" class=\"btn btn-custom-orange btn-lg btn-submit-evento\">Seleccionar local</a>
                                    </div>
                                    ";
            }
            // line 328
            echo "                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 332
            echo "                        ";
            $this->loadTemplate("default/message.html.twig", "eventos/nuevo.html.twig", 332)->display(array_merge($context, array("type" => "info", "message1" => "No existen locales disponibles por el momento", "noClose" => true)));
            // line 333
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "                </div>
            </div>
        </div>
        <form action=\"";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" method=\"post\" id=\"step-2-form\" role=\"form\">
            <input type=\"hidden\" name=\"step\" value=\"2\">
            <input type=\"hidden\" name=\"idEvento\" class=\"idEvent\">
            <input type=\"hidden\" id=\"img-route-public\" value=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["uploads_images"] ?? null)), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"idLocal\" name=\"idLocal\">
        </form>
    </div>

    <div id=\"step-3-container\" class=\"row bg-shadow mt40 mb40 background-white pt20 pb20\" style=\"display: none;\">
        <div class=\"col-sm-12\">
            <div class=\"panel no-margin panel-primary\">
                <div class=\"panel-heading\">Establece el horario de tu evento</div>
                <div class=\"panel-body general-container\">
                    <form action=\"";
        // line 350
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" method=\"post\" id=\"step-3-form\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    <label for=\"fechaInicio\">Fecha <span class=\"required\">*</span></label>
                                    <p class=\"help-block\">Solo aparecerán disponibles los dias que abre el local seleccionado</p>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
                                        <input required=\"required\" id=\"fechaInicio\" name=\"fechaInicio\" class=\"form-control\" type=\"text\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-5 form-inline\">
                                <div class=\"panel panel-default\" id=\"horarioContainer\">
                                    <div class=\"panel-heading\">Horario <span class=\"required\">*</span></div>
                                    <div class=\"panel-body\">
                                        <div class=\"row hora-container first\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"horaInicioEvento\">Desde</label>
                                                </div>
                                                <div class=\"form-group\">
                                                    <select required=\"required\" id=\"horaInicioEvento\" name=\"horaInicioEvento\" class=\"form-control selectpicker\">
                                                        <option value=\"\">Hr</option>
                                                        ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 375
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, ((($context["i"] < 10)) ? (("0" . $context["i"])) : ($context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($context["i"] < 10)) ? (("0" . $context["i"])) : ($context["i"])), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"minutoInicioEvento\">:</label>
                                                </div>
                                                <div class=\"form-group\">
                                                    <select required=\"required\" id=\"minutoInicioEvento\" name=\"minutoInicioEvento\" class=\"form-control selectpicker\">
                                                        <option value=\"\">Min</option>
                                                        ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 386
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, ((($context["i"] < 10)) ? (("0" . $context["i"])) : ($context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($context["i"] < 10)) ? (("0" . $context["i"])) : ($context["i"])), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label>horas</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row hora-container\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\" style=\"margin-right: 27px;\">
                                                    <label for=\"horaFinEvento\">Hasta</label>
                                                </div>
                                                <div class=\"form-group\">
                                                    <select required=\"required\" id=\"horaFinEvento\" name=\"horaFinEvento\" class=\"form-control selectpicker\">
                                                        <option value=\"\">Hr</option>
                                                        ";
        // line 403
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 404
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, ((($context["i"] < 10)) ? (("0" . $context["i"])) : ($context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($context["i"] < 10)) ? (("0" . $context["i"])) : ($context["i"])), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"minutoFinEvento\">:</label>
                                                </div>
                                                <div class=\"form-group\">
                                                    <select required=\"required\" id=\"minutoFinEvento\" name=\"minutoFinEvento\" class=\"form-control selectpicker\">
                                                        ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 414
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, ((($context["i"] < 10)) ? (("0" . $context["i"])) : ($context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($context["i"] < 10)) ? (("0" . $context["i"])) : ($context["i"])), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label>horas</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"step\" value=\"3\">
                        <input type=\"hidden\" name=\"idEvento\" class=\"idEvent\">
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12 text-right mt10\">
            <a href=\"#\" data-step=\"3\" data-toggle=\"tooltip\" title=\"Anterior - ¿Dónde?\" class=\"btn btn-rw btn-primary btn-lg btn-back-evento\"><i class=\"ion-ios7-arrow-left\"></i> Anterior</a>
            &nbsp;
            <a href=\"#\" data-step=\"3\" data-toggle=\"tooltip\" title=\"Siguiente - Precios\" class=\"btn btn-rw btn-primary btn-lg btn-submit-evento\">Siguiente <i class=\"ion-ios7-arrow-right\"></i></a>
        </div>
    </div>

    <div id=\"step-4-container\" class=\"row bg-shadow mt40 mb40 background-white pt20 pb20\" style=\"display: none;\">
        <div class=\"col-sm-12\">
            <div class=\"panel no-margin panel-primary\">
                <div class=\"panel-heading\">Establece el precio de cada entrada y la cantidad de entradas a vender</div>
                <div class=\"panel-body general-container\">
                    <form action=\"";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" method=\"post\" id=\"step-4-form\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">Cantidad de entradas a vender</div>
                                    <div class=\"panel-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group\">
                                                    <label for=\"minimoEntradas\">Mínimo <span class=\"required\">*</span>
                                                        <i class=\"fa fa-question-circle\" data-toggle=\"tooltip\" title=\"Cantidad mínima a vender para celebrar el evento\"></i>
                                                    </label>
                                                    <input id=\"minimoEntradas\" name=\"minimoEntradas\" required=\"required\" type=\"number\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group\">
                                                    <label for=\"maximoEntradas\">Máximo <span class=\"required\">*</span></label>
                                                    <input id=\"maximoEntradas\" name=\"maximoEntradas\" required=\"required\" type=\"number\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group\">
                                                    <label for=\"diasVotacion\">Dias en votación <span class=\"required\">*</span></label>
                                                    <select required=\"required\" id=\"diasVotacion\" name=\"diasVotacion\" class=\"form-control selectpicker\">
                                                        <option value=\"\"></option>
                                                        ";
        // line 471
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 472
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "                                                        <option value=\"15\">15</option>
                                                        <option value=\"20\">20</option>
                                                        <option value=\"25\">25</option>
                                                        <option value=\"30\">30</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <div class=\"panel panel-default\">
                                                    <div class=\"panel-heading\">Configuración de precios</div>
                                                    <div class=\"panel-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-12 form-inline\">
                                                                <div class=\"radio\" style=\"margin-right:20px;\">
                                                                    <label>
                                                                        <input class=\"flat\" type=\"radio\" name=\"tipo\" id=\"venta\" checked >
                                                                        De pago
                                                                    </label>
                                                                </div>
                                                                <div class=\"radio\">
                                                                    <label>
                                                                        <input class=\"flat\" type=\"radio\" name=\"tipo\" id=\"gratuita\" >
                                                                        Gratuita (Invitación)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                <div class=\"row mt30\">
                                                                    <div class=\"col-md-5\">
                                                                        <div class=\"form-group\">
                                                                            <label>Precio neto</label>
                                                                            <div class=\"input-group\">
                                                                                <input type=\"number\" class=\"form-control\">
                                                                                <span class=\"input-group-addon\"><i class=\"fa fa-euro\"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-2 container-item-sign\">
                                                                        <span class=\"fa fa-plus\"></span>
                                                                    </div>
                                                                    <div class=\"col-md-5\">
                                                                        <div class=\"form-group\">
                                                                            <label>Gastos de gestión</label>
                                                                            <div class=\"input-group\">
                                                                                <input type=\"text\" readonly class=\"form-control\">
                                                                                <span class=\"input-group-addon\"><i class=\"fa fa-euro\"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"form-group\">
                                                                            <label>Precio Final</label><br/>
                                                                            <input style=\"font-size:26px;\" type=\"text\" value=\"50.00 €\" readonly class=\"form-control\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                <div class=\"row mt20\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"panel panel-default\">
                                                                            <div class=\"panel-heading\">Porcentajes a cobrar</div>
                                                                            <div class=\"panel-body\">
                                                                                <table id=\"porcientoLocalContainer\" class=\"table table-hover\">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th>Local</th>
                                                                                        <th>Porcentaje a cobrar</th>
                                                                                        <th style=\"width:42%;\">Total</th>
                                                                                    </tr>
                                                                                    </thead><!-- /table header -->
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>La Piragua</td>
                                                                                        <td style=\"width:30%;\">
                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"number\" class=\"form-control\">
                                                                                                <span class=\"input-group-addon\">%</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"text\" disabled class=\"form-control\">
                                                                                                <span class=\"input-group-addon\"><i class=\"fa fa-euro\"></i></span>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody><!-- /table body -->
                                                                                </table>
                                                                                <table class=\"table table-hover\" id=\"porcientoArtistasContainer\">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th>Artista</th>
                                                                                        <th>Porcentaje a cobrar</th>
                                                                                        <th>Total</th>
                                                                                    </tr>
                                                                                    </thead><!-- /table header -->
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>Mauricio Hernandez</td>
                                                                                        <td style=\"width:30%;\">
                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"number\" class=\"form-control\">
                                                                                                <span class=\"input-group-addon\">%</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"text\" disabled class=\"form-control\">
                                                                                                <span class=\"input-group-addon\"><i class=\"fa fa-euro\"></i></span>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Michel Perez</td>
                                                                                        <td>
                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"number\" class=\"form-control\">
                                                                                                <span class=\"input-group-addon\">%</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"text\" disabled class=\"form-control\">
                                                                                                <span class=\"input-group-addon\"><i class=\"fa fa-euro\"></i></span>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Talia Hernandez</td>
                                                                                        <td>
                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"number\" class=\"form-control\">
                                                                                                <span class=\"input-group-addon\">%</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"text\" disabled class=\"form-control\">
                                                                                                <span class=\"input-group-addon\"><i class=\"fa fa-euro\"></i></span>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <b>Total</b>
                                                                                        </td>
                                                                                        <td colspan=\"2\" align=\"right\">
                                                                                            <b>7.00€</b>
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody><!-- /table body -->
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"step\" value=\"4\">
                        <input type=\"hidden\" name=\"idEvento\" class=\"idEvent\">
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12 text-right mt10\">
            <a href=\"#\" data-step=\"4\" data-toggle=\"tooltip\" title=\"Anterior - ¿Cuándo?\" class=\"btn btn-rw btn-primary btn-lg btn-back-evento\"><i class=\"ion-ios7-arrow-left\"></i> Anterior</a>
            &nbsp;
            <a href=\"#\" data-step=\"4\" data-toggle=\"tooltip\" title=\"Terminar\" class=\"btn btn-rw btn-primary btn-lg btn-submit-evento\"><i class=\"fa fa-check-circle\"></i> Terminar y crear evento</a>
        </div>
    </div>
";
    }

    // line 663
    public function block_customScripts($context, array $blocks = array())
    {
        // line 664
        echo "    <!-- Bootstrap Datepicker -->
    <script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap slider -->
    <script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Select2 -->

    <script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/uploadMediasEvento.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/agregarEvento.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/customCodeEvento.js"), "html", null, true);
        echo "\"></script>



    <script>
        \$(document).ready(function(){
            /* BOOTSTRAP SLIDER */
            \$('.slider').slider();
            //update cache values
            \$('#filtroAforo').on('slide',function(e){
                //separar los valores
                var values=e.value.toString();
                values= values.split(',');
                \$('#aforoInicio').text(values[0]);
                \$('#aforoFinal').text(values[1]);
            });
/*************************************************************/
            \$('#datepicker').datepicker({
                format: \"yyyy-mm-dd\",
                autoclose: true
            });
//            \$('#fechaInicio').datepicker({
//                format: \"yyyy-mm-dd\",
//                autoclose: true
//            });
            \$('.selectpicker').selectpicker();
            //Accion del boton Atras
            \$('.btn-back-evento').on('click',function(e){
                e.preventDefault();
                wait('.container');
                var step=\$(this).attr('data-step');
                //ocultar la region actual
                if(step>1){
                    var regionActual=\"#step-\"+step+\"-container\";
                    \$(regionActual).hide();
                    var newStep=step-1;
                    var regionAnterior=\"#step-\"+newStep+\"-container\";
                    \$(regionAnterior).fadeIn();
                    //actualizar los items del listado de steps
                    updateItems(newStep);
                }
                endWait('.container');
            });
            //Action del boton submit de los forms
            \$('.btn-submit-evento').on('click',function(e){
                e.preventDefault();
                var step=\$(this).attr('data-step');
                var validator=null;
                var noValidate=false;
                if(step==1){
                    validator=validator1;
                }
                else if(step==2){
                    noValidate=true;
                    //asignar id de local
                    \$('#idLocal').val(\$(this).attr('data-id'));
                }
                else if(step==3){
                    validator=validator3;
                }
                //validaar primero el form
                if(noValidate || validator.form()){
                    var container=\"#step-\"+step+\"-container .general-container\";
                    wait(container);
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
                            //buscar los errores y posicionarlos en los campos correspondientes
                            var errores=response[1];

                            for(var i=0;i<=errores.length;i++){
                                var sel=\"#\"+errores[i]['id'];

                                var error='<span class=\"error\" style=\"color:red;font-weight: bold;\">'+errores[i]['error']+'</span>';

                                if(errores[i]['type']!=null && errores[i]['type']=='panel'){
                                    sel+=\" .panel-heading\";
                                    \$(sel).append(error);
                                }else{
                                    \$(sel).closest('form').find(\"label[for='\" + \$(sel).attr( \"id\" ) + \"']\").append(\$(error));
                                }

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
                                if(nextStep==2){
                                    //asignar el id del evento
                                    \$('.idEvent').each(function(){
                                        \$(this).val(response[2]);
                                    });
                                }
                                if(nextStep==3){
                                //inicializar calendario
                                    var diasDisabled='';
                                    var fechasDisabled='';
                                    if(response[3]['dias']!=null){
                                        diasDisabled=response[3]['dias'];
                                    }
                                    if(response[3]['fechas']!=null){
                                        fechasDisabled=response[3]['fechas'];
                                    }
                                    \$('#fechaInicio').datepicker({
                                        format: \"yyyy-mm-dd\",
                                        autoclose: true,
                                        daysOfWeekDisabled: diasDisabled,
                                        datesDisabled: fechasDisabled
                                    });
                                }
                                if(nextStep==4){
                                    //Rellenar el form con los datos
                                    var data=response[3];
                                    \$('#maximoEntradas').val(data['sala']['aforo']);
                                    \$('#maximoEntradas').attr('max',data['sala']['aforo']);
                                    var tr='<tr><td>'+data['sala']['nombre']+'</td><td style=\"width:30%;\">';
                                    tr+='<div class=\"input-group\"><input class=\"form-control\" type=\"number\" id=\"porcientoLocal\" name=\"porcientoLocal\">';
                                    tr+='<span class=\"input-group-addon\">%</span></div></td>';
                                    tr+='<td><div class=\"input-group\"><input class=\"form-control\" id=\"totalLocal\" name=\"totalLocal\"><span class=\"input-group-addon\"></span><i class=\"fa fa-euro\"></i></div></td></tr>';
                                    \$('#porcientoLocalContainer tbody').append(\$(tr));
                                    for(var i=0;i<=data['artistas'].length;i++){
                                    }
                                    \$('#porcientoArtistasContainer tbody').append();
                                }
                                //marcar el item de la lista de steps
                                updateItems(nextStep);
                                jQuery('html, body').animate({
                                    scrollTop: jQuery('div.container').offset().top - 50
                                }, 1500);
                            }
                        }
                    });
                    endWait(container);
                }
            });
        });

        function updateItems(nextStep){
            \$('ul.steps > li').each(function(){
                \$(this).removeClass('active');

            });

            var selectorStep=\"ul.steps > li#step-\"+nextStep;

            \$(selectorStep).addClass('active');
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "eventos/nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  950 => 678,  945 => 676,  940 => 674,  935 => 672,  928 => 668,  922 => 665,  919 => 664,  916 => 663,  725 => 474,  714 => 472,  710 => 471,  681 => 445,  650 => 416,  639 => 414,  635 => 413,  626 => 406,  615 => 404,  611 => 403,  594 => 388,  583 => 386,  579 => 385,  569 => 377,  558 => 375,  554 => 374,  527 => 350,  514 => 340,  508 => 337,  503 => 334,  497 => 333,  494 => 332,  478 => 328,  472 => 325,  464 => 320,  456 => 319,  452 => 318,  446 => 315,  442 => 313,  436 => 311,  427 => 309,  425 => 308,  422 => 307,  420 => 306,  415 => 303,  397 => 302,  314 => 221,  295 => 205,  291 => 204,  246 => 161,  240 => 157,  234 => 154,  231 => 153,  229 => 152,  206 => 131,  203 => 130,  192 => 128,  187 => 127,  185 => 126,  179 => 122,  173 => 118,  171 => 117,  117 => 66,  110 => 61,  107 => 60,  102 => 52,  99 => 51,  95 => 46,  93 => 45,  90 => 44,  85 => 38,  82 => 37,  54 => 12,  50 => 11,  45 => 9,  39 => 6,  36 => 5,  33 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/nuevo.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/nuevo.html.twig");
    }
}
