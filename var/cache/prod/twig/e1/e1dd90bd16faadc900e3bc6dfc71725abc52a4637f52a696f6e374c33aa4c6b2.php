<?php

/* eventos/paso5.html.twig */
class __TwigTemplate_b87ba28ad184a911388799970d372b5411dd44efb29e6b5f23b9319290a66647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("eventos/paso1.html.twig", "eventos/paso5.html.twig", 2);
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
        echo "Busco Concierto | Paso 5";
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
        ul.steps li{
            text-align: center;
            margin-right: 5px;
            width: 80px !important;
        }
        ul.steps li.divider{
            width: 2%;
        }
        ul.steps li.divider-1-steps{
            width: 60px !important;
        }
        ul.steps li.divider-1-steps hr{
            border-top: 2px solid #d2d2d2 !important;
        }
    </style>
";
    }

    // line 25
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/paso5.html.twig", 26)->display(array_merge($context, array("bgImage" => (        // line 27
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg3.jpg"), "subheaderTitle" => "PROPONER CONCIERTO: Paso 5")));
    }

    // line 31
    public function block_steps($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "eventos/paso5.html.twig", 32)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 39
    public function block_customContent($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"container\"><!-- Contenido -->
        <div class=\"row mt20 mb20\"><!-- Fila -->
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
                    <li role=\"presentation\" id=\"step-3\" class=\"\">
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
                    <li role=\"presentation\" id=\"step-5\" class=\"active first\">
                        <a href=\"\">
                            5
                        </a>
                        <span>Resumen</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <ul class=\"nav nav-pills nav-pills-shop nav-justified\">
                    <li class=\"active\">
                        <a data-toggle=\"pill\" href=\"#paso1\">
                            <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/info.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Conciertos\">
                            Informaci&oacute;n general
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"pill\" href=\"#paso2\">
                            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/stage.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Donde\">
                            ¿D&oacute;nde?
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"pill\" href=\"#paso3\">
                            <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/calendario2.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Cuando\">
                            ¿Cu&aacute;ndo?
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"pill\" href=\"#paso4\">
                            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/billete.png"), "html", null, true);
        echo "\" witdh=\"32px\" height=\"32px\" class=\"\" alt=\"Entradas\">
                            Entradas
                        </a>
                    </li>
                </ul><!-- Fin tabs -->
                <div class=\"tab-content tab-shop bg-shadow background-white\">
                    <div id=\"paso1\" class=\"tab-pane row fade in active\"><!-- Informacion general -->
                        <div class=\"col-sm-12\">
                            ";
        // line 128
        if ((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null)))) {
            // line 129
            echo "                            <div class=\"panel no-margin panel-primary\">
                                <div class=\"panel-heading\">
                                    <strong>Informaci&oacute;n General</strong>
                                </div>
                                <div class=\"panel-body general-container\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                    ";
            // line 138
            if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) &&  !(null === $this->getAttribute(($context["evento"] ?? null), "nombre", array())))) {
                // line 139
                echo "                                                    <div class=\"form-group\">
                                                        <label for=\"nombreEvento\">Nombre del Evento <span class=\"required\">*</span></label>
                                                        <input id=\"nombreEvento\" name=\"nombreEvento\" required=\"required\" class=\"form-control\" type=\"text\" value=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "nombre", array()), "html", null, true);
                echo "\" readonly=\"readonly\">
                                                    </div>
                                                    ";
            } else {
                // line 144
                echo "                                                        <div class=\"form-group has-error\">
                                                            <label for=\"nombreEvento\">Nombre del Evento <span class=\"required\">*</span></label>
                                                            <input id=\"nombreEvento\" name=\"nombreEvento\" required=\"required\" class=\"form-control\" type=\"text\" value=\"Debe indicar un nombre\" readonly=\"readonly\">
                                                        </div>
                                                    ";
            }
            // line 149
            echo "                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                ";
            // line 152
            if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) &&  !(null === $this->getAttribute(($context["evento"] ?? null), "estilos", array())))) {
                // line 153
                echo "                                                <div class=\"form-group\">
                                                    <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                        <label for=\"estilos\">Estilo(s) Musical(es) <span class=\"required\">*</span></label>
                                                    </div>
                                                    <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                        <input id=\"estilos\" name=\"estilos\" required=\"required\" class=\"form-control\" type=\"text\" value=\"";
                // line 158
                echo "\" readonly=\"readonly\">
                                                    </div>
                                                </div>
                                                ";
            } else {
                // line 162
                echo "                                                    <div class=\"form-group has-error\">
                                                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                            <label for=\"estilos\">Estilo(s) Musical(es) <span class=\"required\">*</span></label>
                                                        </div>
                                                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                            <input id=\"estilos\" name=\"estilos\" required=\"required\" class=\"form-control\" type=\"text\" value=\"Debe Seleccionar al menos 1 estilo\" readonly=\"readonly\">
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 171
            echo "                                            </div>
                                            <!-- Fin Estilos agregados -->
                                            ";
            // line 173
            if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) &&  !(null === $this->getAttribute(($context["evento"] ?? null), "descripcion", array())))) {
                // line 174
                echo "                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                        <label for=\"descripcionEvento\">Descripci&oacute;n <span class=\"required\">*</span></label>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                        <textarea rows=\"6\" cols=\"50\" id=\"descripcionEvento\" name=\"descripcionEvento\" required=\"required\" class=\"form-control\" readonly=\"readonly\">
                                                            ";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "descripcion", array()), "html", null, true);
                echo "
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
            } else {
                // line 189
                echo "                                            <div class=\"form-group has-warning\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                        <label for=\"descripcionEvento\">Descripci&oacute;n <span class=\"required\">*</span></label>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                                        <textarea rows=\"6\" cols=\"50\" id=\"descripcionEvento\" name=\"descripcionEvento\" required=\"required\" class=\"form-control text-justify\" readonly=\"readonly\">No ha indicado una descripci&oacute;n.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
            }
            // line 202
            echo "                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"panel panel-default\" id=\"artistasContainer\"><!-- Formulario del artista -->
                                                <div class=\"panel-heading\">Artistas <span class=\"required\">*</span></div>
                                                <div class=\"panel-body\">
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
            // line 217
            if ((array_key_exists("artistas", $context) &&  !(null === ($context["artistas"] ?? null)))) {
                // line 218
                echo "                                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["artistas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["artista"]) {
                    // line 219
                    echo "                                                                            <tr>
                                                                                <td>";
                    // line 220
                    echo twig_escape_filter($this->env, $this->getAttribute($context["artista"], "nombre", array()), "html", null, true);
                    echo "</td>
                                                                            </tr>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artista'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "                                                                        ";
            } else {
                // line 224
                echo "                                                                            <tr class=\"no-artist\">
                                                                                <td>No has seleccionado ningun artista</td>
                                                                            </tr>
                                                                        ";
            }
            // line 228
            echo "
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Fin de row 1 -->                                   
                                    <div class=\"row\"><!-- row 2 -->
                                        <div class=\"col-sm-12\">
                                            <div class=\"panel panel-default\" id=\"fotos\">
                                                <div class=\"panel-heading\">
                                                    <h3>
                                                        <span class=\"fa fa-history\"></span>
                                                        Imagen de portada
                                                    </h3>
                                                </div>
                                                <div class=\"panel-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-12\">
                                                        <p class=\"\">Sube una foto de portada para 
                                                        mostrar en el encabezado de la 
                                                        p&aacute;gina de tu evento.</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-12\">
                                                            <button type=\"button\" class=\"btn btn-primary\">
                                                                <span class=\"fa fa-plus\"></span>
                                                                Añadir Imagen de portada
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Fin de row 2 --> 
                                    <div class=\"row\"><!-- row 3 -->
                                        <div class=\"col-sm-12\">
                                            <div class=\"panel panel-default\" id=\"fotos\">
                                                <div class=\"panel-heading\">
                                                    <h3>
                                                        <span class=\"fa fa-dropbox\"></span>
                                                        Galer&iacute;a de Im&aacute;genes
                                                    </h3>
                                                </div>
                                                <div class=\"panel-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-12\">
                                                        <p class=\"\">Sube fotos sobre tu evento para que 
                                                        los visitantes vean de que se trata. 
                                                        Tambi&eacute;n debes seleccionar una foto como
                                                        perfil, que identifique a tu evento, 
                                                        normalmente el poster del evento.</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-12\">
                                                            <button type=\"button\" class=\"btn btn-primary\">
                                                                <span class=\"fa fa-plus\"></span>Añadir Imagen
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Fin de row 3 --> 
                                </div>
                            </div>
                            ";
        }
        // line 300
        echo "                        </div>
                    </div><!-- Fin Informacion general -->
                    <div id=\"paso2\" class=\"tab-pane row fade\">
                        <div class=\"col-sm-12\"><!-- Paso 2 -->
                            <div class=\"panel no-margin panel-primary\">
                                <div class=\"panel-heading\">
                                    <strong>Tu locaci&oacute;n</strong>
                                </div>
                                <div class=\"panel-body general-container\">                                    
                                    <div class=\"row mb10\"><!-- Fila 1 -->
                                        <div class=\"col-sm-12\"><!-- Locales -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                    <div id=\"etiquetaLocal\" class=\"textoLocal\">Local <span class=\"required\">*</span></div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                    ";
        // line 318
        if ((array_key_exists("local", $context) &&  !(null === ($context["local"] ?? null)))) {
            // line 319
            echo "                                                    <input id=\"local\" name=\"local\" class=\"form-control\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "nombre", array()), "html", null, true);
            echo "\">
                                                    ";
        } else {
            // line 321
            echo "                                                        <div class=\"form-group has-error\">
                                                            <input id=\"local\" name=\"local\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"Aun no indicas un local\">
                                                        </div>
                                                    ";
        }
        // line 325
        echo "                                                </div>
                                            </div>
                                        </div><!-- Fin Locales -->
                                    </div><!-- Fin Fila 1 -->
                                    <div class=\"row mb10\"><!-- Fila 1 -->
                                        <div class=\"col-sm-6\"><!-- País -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                    <div id=\"etiquetaPais\" class=\"textoPais\">Pa&iacute;s <span class=\"required\">*</span></div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">   
                                                    ";
        // line 338
        if ((array_key_exists("pais", $context) &&  !(null === ($context["pais"] ?? null)))) {
            // line 339
            echo "                                                    <input type=\"text\" class=\"form-control\" id=\"pais\" name=\"pais\"  readonly=\"readonly\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pais"] ?? null), "nombre", array()), "html", null, true);
            echo "\">
                                                    ";
        } else {
            // line 341
            echo "                                                        <div class=\"form-group has-error\">
                                                            <input id=\"pais\" name=\"pais\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                        </div>
                                                    ";
        }
        // line 345
        echo "                                                </div>
                                            </div>
                                        </div><!-- Fin País -->
                                        <div class=\"col-sm-6\"><!-- Provincia -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                    <div id=\"etiquetaProvincia\" class=\"textoProvincia\">Provincia <span class=\"required\">*</span></div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">    
                                                    ";
        // line 356
        if ((array_key_exists("provincia", $context) &&  !(null === ($context["provincia"] ?? null)))) {
            // line 357
            echo "                                                    <input type=\"text\" class=\"form-control\" id=\"provincia\" name=\"provincia\"  readonly=\"readonly\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["provincia"] ?? null), "nombre", array()), "html", null, true);
            echo "\">
                                                    ";
        } else {
            // line 359
            echo "                                                        <div class=\"form-group has-error\">
                                                            <input id=\"provincia\" name=\"provincia\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                        </div>
                                                    ";
        }
        // line 363
        echo "                                                </div>
                                            </div>
                                        </div><!-- Fin Provincia -->
                                    </div><!-- Fin Fila 1 -->
                                    <div class=\"row mb10\"><!-- Fila 2 -->
                                        <div class=\"col-sm-6\"><!-- Ciudad -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                    <div id=\"etiquetaCiudad\" class=\"textoCiudad\">Ciudad <span class=\"required\">*</span></div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                                                    ";
        // line 376
        if ((array_key_exists("ciudad", $context) &&  !(null === ($context["ciudad"] ?? null)))) {
            // line 377
            echo "                                                    <input type=\"text\" class=\"form-control\" id=\"ciudad\" name=\"ciudad\"  readonly=\"readonly\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ciudad"] ?? null), "nombre", array()), "html", null, true);
            echo "\">
                                                    ";
        } else {
            // line 379
            echo "                                                        <div class=\"form-group has-error\">
                                                            <input id=\"ciudad\" name=\"ciudad\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                        </div>
                                                    ";
        }
        // line 383
        echo "                                                </div>
                                            </div>
                                        </div><!-- Fin Ciudad -->
                                        <div class=\"col-sm-6\"><!-- Direccion -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                    <div id=\"etiquetaDireccion\" class=\"textoDireccion\">Direcci&oacute;n <span class=\"required\">*</span></div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">     
                                                    ";
        // line 394
        if ((array_key_exists("local", $context) &&  !(null === ($context["local"] ?? null)))) {
            // line 395
            echo "                                                    <input type=\"text\" class=\"form-control\" id=\"direccion\" name=\"direccion\"  readonly=\"readonly\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "direccion", array()), "html", null, true);
            echo "\">
                                                    ";
        } else {
            // line 397
            echo "                                                        <div class=\"form-group has-error\">
                                                            <input id=\"direccion\" name=\"direccion\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                        </div>
                                                    ";
        }
        // line 401
        echo "                                                </div>
                                            </div>
                                        </div><!-- Fin Direccion -->
                                    </div><!-- Fin Fila 2 -->                                
                                </div>
                            </div>
                        </div><!-- Fin paso 2 -->
                    </div><!-- Fin tab 2 -->
                    <div id=\"paso3\" class=\"tab-pane row fade\"><!-- Tab 3 -->
                        <div class=\"col-sm-12\"><!-- Paso 3 -->
                            <div class=\"panel no-margin panel-primary\">
                                <div class=\"panel-heading\">
                                    <strong>Establece horario de tu evento</strong>
                                </div>
                                <div class=\"panel-body general-container\">                                    
                                    <div class=\"row\"><!-- -->
                                        <div class=\"col-sm-6\"><!-- Fecha -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                    <div id=\"fecha\" class=\"textoFecha\">Fecha <span class=\"required\">*</span></div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                    ";
        // line 425
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) &&  !twig_test_empty($this->getAttribute(($context["evento"] ?? null), "fecha", array())))) {
            // line 426
            echo "                                                    <input type=\"text\" class=\"form-control\" required=\"required\" id=\"fecha\" name=\"fecha\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "fecha", array()), "html", null, true);
            echo "\">
                                                    ";
        } else {
            // line 428
            echo "                                                        <div class=\"form-group has-error\">
                                                            <input id=\"fecha\" name=\"fecha\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"Aun no selecciona una fecha\">
                                                        </div>
                                                    ";
        }
        // line 432
        echo "                                                </div>
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
                                                        <div class=\"col-sm-2 col-md-2 col-lg-2\">Desde</div>
                                                        <div class=\"col-sm-6 col-md-6 col-lg-6\">
                                                            ";
        // line 445
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) &&  !twig_test_empty($this->getAttribute(($context["evento"] ?? null), "horaInicio", array())))) {
            // line 446
            echo "                                                            <input type=\"text\" class=\"form-control\" id=\"horaInicio\" name=\"horaInicio\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "horaInicio", array()));
            echo "\">
                                                            ";
        } else {
            // line 448
            echo "                                                                <div class=\"form-group has-error\">
                                                                    <input id=\"horaInicio\" name=\"horaInicio\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"Indique una Hora\">
                                                                </div>
                                                            ";
        }
        // line 452
        echo "                                                        </div>
                                                        <div class=\"col-sm-2 col-md-2 col-lg-2\">Horas</div>
                                                        <div class=\"col-sm-2 col-md-2 col-lg-2\"></div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-2 col-md-2 col-lg-2\">Hasta</div>
                                                        <div class=\"col-sm-6 col-md-6 col-lg-6\">
                                                            ";
        // line 459
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) &&  !twig_test_empty($this->getAttribute(($context["evento"] ?? null), "horaFin", array())))) {
            // line 460
            echo "                                                            <input type=\"text\" class=\"form-control\" id=\"horaFin\" name=\"horaFin\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "horaFin", array()));
            echo "\">
                                                            ";
        } else {
            // line 462
            echo "                                                                <div class=\"form-group has-error\">
                                                                    <input id=\"horaFin\" name=\"horaFin\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"Indique una Hora\">
                                                                </div>
                                                            ";
        }
        // line 466
        echo "                                                        </div>
                                                        <div class=\"col-sm-2 col-md-2 col-lg-2\">Horas</div>
                                                        <div class=\"col-sm-2 col-md-2 col-lg-2\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Fin Horario -->
                                    </div><!-- Fin Row 1 -->                                       
                                </div>
                            </div>
                        </div><!-- Fin paso 3 -->
                    </div><!-- Fin tab 3 -->
                    <div id=\"paso4\" class=\"tab-pane row fade\"><!-- Tab 4 -->
                        <div class=\"col-sm-12\">
                            <div class=\"panel no-margin panel-primary\">
                                <div class=\"panel-heading\">
                                    <strong>Precio de cada entrada y cantidad de entradas ha vender</strong>
                                </div>
                                <div class=\"panel-body general-container\">                                    
                                    <div class=\"row\"><!-- Row 1 -->
                                        <div class=\"col-xs-12 col-sm-12 col-lg-12\">
                                            <div class=\"panel panel-default\"><!-- Panel -->
                                                <div class=\"panel-heading\">
                                                    <strong>Cantidad de entradas a vender</strong>
                                                </div>
                                                <div class=\"panel-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                                            <label class=\"control-label\" for=\"minimo\">M&iacute;nimo</label>
                                                            <span class=\"required\">*</span>
                                                            <span class=\"glyphicon glyphicon-question-sign\"></span>
                                                        </div>
                                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                                            <label class=\"control-label\" for=\"maximo\">M&aacute;ximo</label>
                                                            <span class=\"required\">*</span>
                                                        </div>
                                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                                            <label class=\"control-label\" for=\"dias\">D&iacute;as en votaci&oacute;n</label>
                                                            <span class=\"required\">*</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                                            ";
        // line 509
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && ($this->getAttribute(($context["evento"] ?? null), "minimoEntradas", array()) > 0))) {
            // line 510
            echo "                                                            <input type=\"number\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "minimoEntradas", array()), "html", null, true);
            echo "\" id=\"minimo\" name=\"minimo\" class=\"form-control\" readonly=\"readonly\" required=\"required\">
                                                            ";
        } else {
            // line 512
            echo "                                                                <div class=\"form-group has-error\">
                                                                    <input id=\"minimo\" name=\"minimo\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"0\">
                                                                </div>
                                                            ";
        }
        // line 516
        echo "                                                        </div>
                                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                                            ";
        // line 518
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && ($this->getAttribute(($context["evento"] ?? null), "maxEntradas", array()) > 0))) {
            // line 519
            echo "                                                            <input type=\"number\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "maxEntradas", array()), "html", null, true);
            echo "\" id=\"maximo\" name=\"maximo\" class=\"form-control\" readonly=\"readonly\" required=\"required\">
                                                            ";
        } else {
            // line 521
            echo "                                                                <div class=\"form-group has-error\">
                                                                    <input id=\"maximo\" name=\"maximo\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"0\">
                                                                </div>
                                                            ";
        }
        // line 525
        echo "                                                        </div>
                                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                                            ";
        // line 527
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && ($this->getAttribute(($context["evento"] ?? null), "diasVotacion", array()) >= 0))) {
            // line 528
            echo "                                                            <input type=\"tetx\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "diasVotacion", array()));
            echo "\" id=\"dias\" name=\"dias\" class=\"form-control\" readonly=\"readonly\" required=\"required\">
                                                            ";
        } else {
            // line 530
            echo "                                                                <div class=\"form-group has-error\">
                                                                    <input type=\"tetx\" id=\"dias\" name=\"dias\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"0\">
                                                                </div>
                                                            ";
        }
        // line 534
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <br>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-12 col-md-12 col-lg-12\">
                                                            <div class=\"panel panel-default\">
                                                                <div class=\"panel-heading\">
                                                                    <strong>Configuraci&oacute;n de precios</strong>
                                                                    <span class=\"required\">*</span>
                                                                </div>
                                                                <div class=\"panel-body\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-xs-6 col-sm-6 col-md-2 col-lg-2\">   
                                                                            ";
        // line 549
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && $this->getAttribute(($context["evento"] ?? null), "gratuito", array()))) {
            echo " 
                                                                            <input type=\"radio\" name=\"tipo\" id=\"tipo1\" class=\"\" value=\"";
            // line 550
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "gratuito", array()), "html", null, true);
            echo "\" required=\"required\" checked>
                                                                            <label class=\"control-label\" for=\"tipo1\">De pago</label>
                                                                            ";
        } else {
            // line 553
            echo "                                                                                <input type=\"radio\" name=\"tipo\" id=\"tipo1\" class=\"\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "gratuito", array()), "html", null, true);
            echo "\" required=\"required\">
                                                                                <label class=\"control-label\" for=\"tipo1\">De pago</label>
                                                                            ";
        }
        // line 556
        echo "                                                                        </div>
                                                                        <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                                                                            ";
        // line 558
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) &&  !$this->getAttribute(($context["evento"] ?? null), "gratuito", array()))) {
            echo " 
                                                                            <input type=\"radio\" name=\"tipo\" id=\"tipo2\" class=\"\" value=\"";
            // line 559
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "gratuito", array()), "html", null, true);
            echo "\" required=\"required\" checked>
                                                                            <label class=\"control-label\" for=\"tipo2\">Gratuita (Invitaci&oacute;n)</label>
                                                                            ";
        } else {
            // line 562
            echo "                                                                                <input type=\"radio\" name=\"tipo\" id=\"tipo2\" class=\"\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "gratuito", array()), "html", null, true);
            echo "\" required=\"required\">
                                                                                <label class=\"control-label\" for=\"tipo2\">Gratuita (Invitaci&oacute;n)</label>
                                                                            ";
        }
        // line 565
        echo "                                                                        </div>
                                                                        <div class=\"col-md-7 col-lg-7\"></div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-5\">
                                                                                    <label class=\"control-label\" for=\"precioNeto\">Precio Neto</label>                                                                    
                                                                                </div>
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-2 col-lg-2\">

                                                                                </div>
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-5\">
                                                                                    <label class=\"control-label\" for=\"gastos\">Gastos de gesti&oacute;n</label>                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row\">
                                                                                <div class=\"col-xs-10 col-sm-10 col-md-5 col-lg-5\">  
                                                                                    ";
        // line 583
        if (((array_key_exists("entrada", $context) &&  !(null === ($context["entrada"] ?? null))) && ($this->getAttribute(($context["entrada"] ?? null), "precioNeto", array()) > 0))) {
            echo " 
                                                                                    <div class=\"input-group\">
                                                                                        <input type=\"number\" name=\"precioNeto\" id=\"precioNeto\" class=\"form-control\" value=\"";
            // line 585
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entrada"] ?? null), "precioNeto", array()), "html", null, true);
            echo "\" readonly=\"readonly\" required=\"required\">
                                                                                        <span class=\"input-group-addon\">€</span>
                                                                                    </div>
                                                                                    ";
        } else {
            // line 589
            echo "                                                                                        <div class=\"input-group has-error\">
                                                                                            <input id=\"precioNeto\" name=\"precioNeto\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                                                            <span class=\"input-group-addon\">€</span>
                                                                                        </div>
                                                                                    ";
        }
        // line 593
        echo "      
                                                                                </div>
                                                                                <div class=\"col-xs-2 col-sm-2\">
                                                                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                                                                </div>
                                                                                <div class=\"col-xs-10 col-sm-10 col-md-5 col-lg-5\">
                                                                                    ";
        // line 599
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && ($this->getAttribute(($context["evento"] ?? null), "comision", array()) > 0))) {
            echo " 
                                                                                    <div class=\"input-group\">
                                                                                      <input type=\"number\" name=\"gastos\" id=\"gastos\" class=\"form-control\" value=\"";
            // line 601
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "comision", array()), "html", null, true);
            echo "\" readonly=\"readonly\" required=\"required\">
                                                                                      <span class=\"input-group-addon\">€</span>
                                                                                    </div>  
                                                                                    ";
        } else {
            // line 605
            echo "                                                                                        <div class=\"input-group has-error\">
                                                                                            <input id=\"gastos\" name=\"gastos\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                                                            <span class=\"input-group-addon\">€</span>
                                                                                        </div>
                                                                                    ";
        }
        // line 610
        echo "                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row\">
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                                                    <label class=\"control-label\" for=\"precio\">Precio Final</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row\">
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                                                    ";
        // line 619
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && ($this->getAttribute(($context["evento"] ?? null), "precioEntrada", array()) > 0))) {
            echo " 
                                                                                    <div class=\"input-group\">
                                                                                      <input type=\"number\" name=\"precio\" id=\"precio\" class=\"form-control\" value=\"";
            // line 621
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "precioEntrada", array()), "html", null, true);
            echo "\"  readonly=\"readonly\">
                                                                                      <span class=\"input-group-addon\">€</span>
                                                                                    </div> 
                                                                                    ";
        } else {
            // line 625
            echo "                                                                                        <div class=\"input-group has-error\">
                                                                                            <input id=\"precio\" name=\"precio\" class=\"form-control\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                                                            <span class=\"input-group-addon\">€</span>
                                                                                        </div>
                                                                                    ";
        }
        // line 630
        echo "                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row\">
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                                                    <br>
                                                                                    <h4>Consumisi&oacute;n m&iacute;nima</h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row\">
                                                                                <div class=\"col-xs-6 col-sm-6 col-md-2 col-lg-2\">    
                                                                                    ";
        // line 640
        if (((array_key_exists("entrada", $context) &&  !(null === ($context["entrada"] ?? null))) && $this->getAttribute(($context["entrada"] ?? null), "consumoMinimo", array()))) {
            echo " 
                                                                                    <input type=\"radio\" name=\"consumoMin\" id=\"consumoMin1\" class=\"\" value=\"Si\" required=\"required\" checked>
                                                                                    <label class=\"control-label\" for=\"consumoMin1\">Si</label> 
                                                                                    ";
        } else {
            // line 644
            echo "                                                                                        <input type=\"radio\" name=\"consumoMin\" id=\"consumoMin1\" class=\"\" value=\"Si\" required=\"required\">
                                                                                        <label class=\"control-label\" for=\"consumoMin1\">Si</label> 
                                                                                    ";
        }
        // line 647
        echo "                                                                                </div>
                                                                                <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                                                                                    ";
        // line 649
        if (((array_key_exists("entrada", $context) &&  !(null === ($context["entrada"] ?? null))) &&  !$this->getAttribute(($context["entrada"] ?? null), "consumoMinimo", array()))) {
            echo " 
                                                                                    <input type=\"radio\" name=\"consumoMin\" id=\"consumoMin2\" class=\"\" value=\"No\" required=\"required\" checked>
                                                                                    <label class=\"control-label\" for=\"consumoMin2\">No</label>
                                                                                    ";
        } else {
            // line 653
            echo "                                                                                        <input type=\"radio\" name=\"consumoMin\" id=\"consumoMin2\" class=\"\" value=\"No\" required=\"required\" checked>
                                                                                        <label class=\"control-label\" for=\"consumoMin2\">No</label>
                                                                                    ";
        }
        // line 656
        echo "                                                                                </div>
                                                                                <div class=\"col-md-7 col-lg-7\"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                                                            <div class=\"panel panel-default\"><!-- Panel de porcentajes-->
                                                                                <div class=\"panel-heading\">
                                                                                    <strong>Porcentajes a cobrar</strong>
                                                                                    <span class=\"required\">*</span>
                                                                                </div>
                                                                                <div class=\"panel-body\">
                                                                                    <div class=\"row background-custom-grey\">
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4 pt10\"><!-- Titulos -->
                                                                                            <strong>Local</strong>
                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                            <label class=\"control-label\" for=\"porcentajeLocal\">Porcentaje a cobrar</label>
                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                            <label class=\"control-label\" for=\"totalLocal\">Total</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row mt10\">
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\"><!-- Nombre de sala -->
                                                                                            Sala Caracol 1
                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                            ";
        // line 683
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && ($this->getAttribute(($context["evento"] ?? null), "porcientoLocal", array()) > 0))) {
            // line 684
            echo "                                                                                            <div class=\"input-group\">
                                                                                              <input type=\"text\" class=\"form-control\" name=\"porcentajeLocal\" id=\"porcentajeLocal\" readonly=\"readonly\" required=\"required\" value=\"";
            // line 685
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evento"] ?? null), "porcientoLocal", array()));
            echo "\">
                                                                                              <span class=\"input-group-addon\">%</span>
                                                                                            </div>
                                                                                            ";
        } else {
            // line 689
            echo "                                                                                                <div class=\"input-group has-error\">
                                                                                                    <input type=\"text\" class=\"form-control\" name=\"porcentajeLocal\" id=\"porcentajeLocal\" readonly=\"readonly\" required=\"required\" value=\"0\">
                                                                                                    <span class=\"input-group-addon\">%</span>
                                                                                                </div>
                                                                                            ";
        }
        // line 694
        echo "                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                            ";
        // line 696
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && ($this->getAttribute(($context["evento"] ?? null), "totalLocal", array()) > 0))) {
            // line 697
            echo "                                                                                            <div class=\"input-group\">
                                                                                              <input type=\"text\" class=\"form-control\" name=\"totalLocal\" id=\"totalLocal\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                                                              <span class=\"input-group-addon\">€</span>
                                                                                            </div>
                                                                                            ";
        } else {
            // line 702
            echo "                                                                                                <div class=\"input-group has-error\">
                                                                                                    <input type=\"text\" class=\"form-control\" name=\"totalLocal\" id=\"totalLocal\" readonly=\"readonly\" required=\"required\" value=\"0\">
                                                                                              <span class=\"input-group-addon\">€</span>
                                                                                                </div>
                                                                                            ";
        }
        // line 707
        echo "                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row background-custom-grey mt10\">
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4 pt10\"><!-- Titulos -->
                                                                                            <strong>Artista</strong>
                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                            <label class=\"control-label\" for=\"porcentajeArtista\">Porcentaje a cobrar</label>
                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                            <label class=\"control-label\" for=\"totalArtista\">Total</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row mt10\">
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\"><!-- Nombre de artista -->
                                                                                            Nada m&aacute;s
                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                            ";
        // line 725
        if (((array_key_exists("artistaEvento", $context) &&  !(null === ($context["artistaEvento"] ?? null))) && ($this->getAttribute(($context["artistaEvento"] ?? null), "porciento", array()) > 0))) {
            // line 726
            echo "                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"text\" class=\"form-control\" name=\"porcentajeArtista\" id=\"porcentajeArtista\" readonly=\"readonly\" required=\"required\" value=\"";
            // line 727
            echo twig_escape_filter($this->env, $this->getAttribute(($context["artistaEvento"] ?? null), "porciento", array()), "html", null, true);
            echo "\">
                                                                                                <span class=\"input-group-addon\">%</span>
                                                                                            </div>
                                                                                            ";
        } else {
            // line 731
            echo "                                                                                                <div class=\"input-group has-error\">
                                                                                                    <input type=\"text\" class=\"form-control\" name=\"porcentajeArtista\" id=\"porcentajeArtista\" readonly=\"readonly\" required=\"required\" value=\"0\">
                                                                                                    <span class=\"input-group-addon\">%</span>
                                                                                                </div>
                                                                                            ";
        }
        // line 736
        echo "                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                            ";
        // line 738
        if (((array_key_exists("artistaEvento", $context) &&  !(null === ($context["artistaEvento"] ?? null))) && ($this->getAttribute(($context["artistaEvento"] ?? null), "total", array()) > 0))) {
            // line 739
            echo "                                                                                            <div class=\"input-group\">
                                                                                              <input type=\"text\" class=\"form-control\" name=\"totalArtista\" id=\"totalArtista\" readonly=\"readonly\" required=\"required\" value=\"";
            // line 740
            echo twig_escape_filter($this->env, $this->getAttribute(($context["artistaEvento"] ?? null), "total", array()), "html", null, true);
            echo "\">
                                                                                              <span class=\"input-group-addon\">€</span>
                                                                                            </div>
                                                                                            ";
        } else {
            // line 744
            echo "                                                                                                <div class=\"input-group has-error\">
                                                                                                  <input type=\"text\" class=\"form-control\" name=\"totalArtista\" id=\"totalArtista\" readonly=\"readonly\" required=\"required\" value=\"0\">
                                                                                                  <span class=\"input-group-addon\">€</span>
                                                                                                </div>
                                                                                            ";
        }
        // line 749
        echo "                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row\"><!-- Barra -->
                                                                                        <hr class=\"hr-solid\">
                                                                                    </div>
                                                                                    <div class=\"row\"><!-- Totales -->
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                                                                            <label class=\"control-label\" for=\"totalGeneral\">Total</label>
                                                                                        </div>
                                                                                        <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                                                                            ";
        // line 759
        if (((array_key_exists("evento", $context) &&  !(null === ($context["evento"] ?? null))) && ($this->getAttribute(($context["evento"] ?? null), "total", array()) > 0))) {
            // line 760
            echo "                                                                                            <div class=\"input-group\">
                                                                                                <input type=\"number\" class=\"form-control\" name=\"totalGeneral\" id=\"totalGeneral\" readonly=\"readonly\" required=\"required\" value=\"\">
                                                                                                <span class=\"input-group-addon\">€</span>
                                                                                            </div>
                                                                                            ";
        } else {
            // line 765
            echo "                                                                                            <div class=\"input-group has-error\">
                                                                                                <input type=\"number\" class=\"form-control\" name=\"totalGeneral\" id=\"totalGeneral\" readonly=\"readonly\" required=\"required\" value=\"0\">
                                                                                                <span class=\"input-group-addon\">€</span>
                                                                                            </div>
                                                                                            ";
        }
        // line 770
        echo "                                                                                        </div>
                                                                                    </div><!-- Fin Total -->
                                                                                </div>
                                                                            </div><!-- Fin de Panel de porcentajes-->    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Fin Panel -->
                                        </div><!-- Fin columna -->
                                    </div><!-- Fin Row 1 -->                                    
                                </div>                                                                                       
                            </div>
                        </div>
                    </div><!-- Fin Tab 4 -->
                </div><!-- Fin del tab -->
                <div class=\"row mt10 mb10\"><!-- Botones -->
                    <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\"></div>
                    <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                        <a href=\"";
        // line 792
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso4");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"anterior4\" data-toggle=\"tooltip\" title=\"Anterior - Entradas\">
                            Anterior
                            <span class=\"glyphicon glyphicon-chevron-left\"></span>
                        </a>
                    </div>
                    <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                        <button type=\"button\" class=\"btn btn-rw btn-primary tags btn-block\" id=\"guardar\" data-toggle=\"tooltip\" title=\"Guardar\">
                            Guardar Todo
                            <span class=\"glyphicon glyphicon-save\"></span>
                        </button>
                    </div>
                    <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\"></div>
                </div><!--Guardar--> 
            </div>
        </div><!-- Fin Fila -->
        
    </div>
";
    }

    // line 810
    public function block_javascripts($context, array $blocks = array())
    {
        // line 811
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function() {
/*************************** Tooltip ***************************************/            
            \$('[data-toggle=\"tooltip\"]').tooltip(); 
        });//Fin de función ready
    </script>
";
    }

    public function getTemplateName()
    {
        return "eventos/paso5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1149 => 811,  1146 => 810,  1124 => 792,  1100 => 770,  1093 => 765,  1086 => 760,  1084 => 759,  1072 => 749,  1065 => 744,  1058 => 740,  1055 => 739,  1053 => 738,  1049 => 736,  1042 => 731,  1035 => 727,  1032 => 726,  1030 => 725,  1010 => 707,  1003 => 702,  996 => 697,  994 => 696,  990 => 694,  983 => 689,  976 => 685,  973 => 684,  971 => 683,  942 => 656,  937 => 653,  930 => 649,  926 => 647,  921 => 644,  914 => 640,  902 => 630,  895 => 625,  888 => 621,  883 => 619,  872 => 610,  865 => 605,  858 => 601,  853 => 599,  845 => 593,  838 => 589,  831 => 585,  826 => 583,  806 => 565,  799 => 562,  793 => 559,  789 => 558,  785 => 556,  778 => 553,  772 => 550,  768 => 549,  751 => 534,  745 => 530,  739 => 528,  737 => 527,  733 => 525,  727 => 521,  721 => 519,  719 => 518,  715 => 516,  709 => 512,  703 => 510,  701 => 509,  656 => 466,  650 => 462,  644 => 460,  642 => 459,  633 => 452,  627 => 448,  621 => 446,  619 => 445,  604 => 432,  598 => 428,  592 => 426,  590 => 425,  564 => 401,  558 => 397,  552 => 395,  550 => 394,  537 => 383,  531 => 379,  525 => 377,  523 => 376,  508 => 363,  502 => 359,  496 => 357,  494 => 356,  481 => 345,  475 => 341,  469 => 339,  467 => 338,  452 => 325,  446 => 321,  440 => 319,  438 => 318,  418 => 300,  344 => 228,  338 => 224,  335 => 223,  326 => 220,  323 => 219,  318 => 218,  316 => 217,  299 => 202,  284 => 189,  275 => 183,  264 => 174,  262 => 173,  258 => 171,  247 => 162,  241 => 158,  234 => 153,  232 => 152,  227 => 149,  220 => 144,  214 => 141,  210 => 139,  208 => 138,  197 => 129,  195 => 128,  184 => 120,  175 => 114,  166 => 108,  157 => 102,  93 => 40,  90 => 39,  85 => 32,  82 => 31,  78 => 27,  76 => 26,  73 => 25,  51 => 7,  47 => 6,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/paso5.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/paso5.html.twig");
    }
}
