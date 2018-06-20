<?php

/* usuarios/entradas.html.twig */
class __TwigTemplate_d5e7b65f85703b0232d07bce19a5b1e53d50d2fef412190a960176d865fad22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/entradas.html.twig", 2);
        $this->blocks = array(
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'encabezadoContenido' => array($this, 'block_encabezadoContenido'),
            'contenidoDerecha' => array($this, 'block_contenidoDerecha'),
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "usuarios/sesion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
    <style>
        .panelEntradasTitulos{
            border:1px solid #e6e9ed;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }        
        .panelEntradas{
            border-bottom: 0px solid #e6e9ed;
        }
        .titulo2{
            margin-top: 10px;
            margin-bottom: 10px;
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
        .imagenUsuario3{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .textoEntradas{
            color: #000000;
            font-size: 16px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
        }
        .textoFecha{
            color: #000000;
            font-size: 14px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
        }
        .textoPendiente{
            margin-top: 60px;
            margin-bottom: 60px;
            color: #f50;
            font-size: 16px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
            vertical-align: middle;
        }
        .textoActivo{
            margin-top: 60px;
            margin-bottom: 60px;
            color: #00733e;
            font-size: 16px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
            vertical-align: middle;
        }
        .textoFinalizadas{
            margin-top: 60px;
            margin-bottom: 60px;
            color: #000000;
            font-size: 16px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
            vertical-align: middle;
        }
        .textoCancelada{
            margin-top: 60px;
            margin-bottom: 60px;
            color: red;
            font-size: 16px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
            vertical-align: middle;
        }
        .iconoEntradas{
            margin-top: 50px;
            font-size: 20px;
        }
        capaEntradas{
            background-color: #FFFFFF;
            border-bottom: 1px solid #000000;
        }
        .tituloAnteriores{
            margin-top: 10px;
            margin-bottom: 10px;
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
            border-bottom: 0px solid #e6e9ed;
        }
    </style>
";
    }

    // line 88
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
        <div class=\"row ml5\" id=\"buscador\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"row\"><!-- Titulo y buscador -->
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        <div class=\"tituloSesion\">Pr&oacute;ximos eventos</div>
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Buscador -->
                        <form action=\"#\" method=\"post\" role=\"form\">
                            <div class=\"input-group buscador\">
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-default boton\" type=\"submit\">
                                        <span class=\"glyphicon glyphicon-search\"></span>
                                    </button>
                                </div>                        
                                <input type=\"text\" id=\"buscador2\" name=\"buscador2\" class=\"form-control tBuscador\" placeholder=\"Buscar...\">
                            </div>
                        </form>
                    </div><!-- Fin del Buscador -->
                </div><!-- Fin de Titulo y buscador -->
            </div>
        </div>
    ";
    }

    // line 111
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 112
        echo "    <div class=\"row mt5 ml5 background-white panelEntradasTitulos\" id=\"titulos\"><!-- Fila 1-->
        <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8 titulo2\"><!-- Titulos 1 -->
            Compras
        </div><!-- Fin Titulos -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center titulo2\"><!-- Titulos 2 -->
            Entradas
        </div><!-- Fin Titulos -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center titulo2\"><!-- Titulos 3 -->
            Estados
        </div><!-- Fin Titulos -->
    </div><!-- Fin de fila 1 -->
    <div class=\"row mt5 ml5 background-white panelEntradas\" id=\"entradas1\"><!-- Fila 2-->
        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
        </div>
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"><!-- Descripción -->
            <div class=\"row\"><!-- Fila Nombre-->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                    Katy Perry en Madrid
                </div>
            </div><!-- Fin fila Nombre-->
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                    4 entradas 100 €
                </div>
            </div><!-- Fin fila entradas y precio -->
            <div class=\"row\"><!-- Fila Nombre sala -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                    <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                    Sala de conciertos
                </div>
            </div><!-- Fin fila Nombre sala -->
            <div class=\"row\"><!-- Fecha y hora -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                    5 de Mayo del 2018. 22:00h
                </div>
            </div><!-- Fin fila fecha -->
        </div><!-- Fin Descripción -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Icono -->
            <div class=\"iconoEntradas\">
                <a herf=\"\" class=\"\">
                    <span class=\"glyphicon glyphicon-file\"></span>
                </a>
            </div>
        </div><!-- Fin Icono -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Estado -->
            <p class=\"textoPendiente\">Pendiente</p>
        </div><!-- Fin Estado -->
    </div><!-- Fin de fila 2 -->
    <div class=\"row mt5 ml5 background-white panelEntradas\" id=\"entradas2\"><!-- Fila 3 -->
        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
            <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
        </div>
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"><!-- Descripción -->
            <div class=\"row\"><!-- Fila Nombre-->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                    Katy Perry en Madrid
                </div>
            </div><!-- Fin fila Nombre-->
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                    5 entradas 125 €
                </div>
            </div><!-- Fin fila entradas y precio -->
            <div class=\"row\"><!-- Fila Nombre sala -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                    <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                    Sala de conciertos
                </div>
            </div><!-- Fin fila Nombre sala -->
            <div class=\"row\"><!-- Fecha y hora -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                    5 de Mayo del 2018. 22:00h
                </div>
            </div><!-- Fin fila fecha -->
        </div><!-- Fin Descripción -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Icono -->
            <div class=\"iconoEntradas\">
                <a herf=\"\" class=\"\">
                    <span class=\"glyphicon glyphicon-file\"></span>
                </a>
            </div>
        </div><!-- Fin Icono -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Estado -->
            <p class=\"textoActivo\">Activo</p>
        </div><!-- Fin Estado -->
    </div><!-- Fin de fila 3 -->
    <div class=\"row mt5 ml5 background-white\" id=\"titulos\"><!-- Fila 4-->
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 tituloAnteriores\"><!-- Titulos 1 -->
            Compras Pasadas
        </div><!-- Fin Titulos -->
    </div><!-- Fin de fila 4 -->
    <div class=\"row mt5 ml5 background-white panelEntradas\" id=\"entradas3\"><!-- Fila 5 -->
        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
            <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
        </div>
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"><!-- Descripción -->
            <div class=\"row\"><!-- Fila Nombre-->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                    Katy Perry en Madrid
                </div>
            </div><!-- Fin fila Nombre-->
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                    6 entradas 150 €
                </div>
            </div><!-- Fin fila entradas y precio -->
            <div class=\"row\"><!-- Fila Nombre sala -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                    <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                    Sala de conciertos
                </div>
            </div><!-- Fin fila Nombre sala -->
            <div class=\"row\"><!-- Fecha y hora -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                    5 de Abril del 2018. 22:00h
                </div>
            </div><!-- Fin fila fecha -->
        </div><!-- Fin Descripción -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Icono -->
            <div class=\"iconoEntradas\">
                <a herf=\"\" class=\"\">
                    <span class=\"glyphicon glyphicon-file\"></span>
                </a>
            </div>
        </div><!-- Fin Icono -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Estado -->
            <p class=\"textoFinalizadas\">Finalizada</p>
        </div><!-- Fin Estado -->
    </div><!-- Fin de fila 5 -->
    <div class=\"row mt5 ml5 background-white panelEntradas\" id=\"entradas4\"><!-- Fila 6 -->
        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
            <img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
        </div>
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"><!-- Descripción -->
            <div class=\"row\"><!-- Fila Nombre-->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                    Katy Perry en Madrid
                </div>
            </div><!-- Fin fila Nombre-->
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                    2 entradas 50 €
                </div>
            </div><!-- Fin fila entradas y precio -->
            <div class=\"row\"><!-- Fila Nombre sala -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                    <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                    Sala de conciertos
                </div>
            </div><!-- Fin fila Nombre sala -->
            <div class=\"row\"><!-- Fecha y hora -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                    6 de Abril del 2018. 22:00h
                </div>
            </div><!-- Fin fila fecha -->
        </div><!-- Fin Descripción -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Icono -->
            <div class=\"iconoEntradas\">
                <a herf=\"\" class=\"\">
                    <span class=\"glyphicon glyphicon-file\"></span>
                </a>
            </div>
        </div><!-- Fin Icono -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Estado -->
            <p class=\"textoCancelada\">Cancelado</p>
        </div><!-- Fin Estado -->
    </div><!-- Fin de fila 6 -->
    <div class=\"row mt5 ml5 background-white panelEntradas\" id=\"entradas5\"><!-- Fila 7 -->
        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
            <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario3\">
        </div>
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"><!-- Descripción -->
            <div class=\"row\"><!-- Fila Nombre-->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoArtista\">
                    Katy Perry en Madrid
                </div>
            </div><!-- Fin fila Nombre-->
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEntradas\">
                    6 entradas 150 €
                </div>
            </div><!-- Fin fila entradas y precio -->
            <div class=\"row\"><!-- Fila Nombre sala -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                    <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                    Sala de conciertos
                </div>
            </div><!-- Fin fila Nombre sala -->
            <div class=\"row\"><!-- Fecha y hora -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoFecha\">
                    7 de Abril del 2018. 22:00h
                </div>
            </div><!-- Fin fila fecha -->
        </div><!-- Fin Descripción -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Icono -->
            <div class=\"iconoEntradas\">
                <a herf=\"\" class=\"\">
                    <span class=\"glyphicon glyphicon-file\"></span>
                </a>
            </div>
        </div><!-- Fin Icono -->
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center\"><!-- Estado -->
            <p class=\"textoFinalizadas\">Finalizada</p>
        </div><!-- Fin Estado -->
    </div><!-- Fin de fila 7 -->
";
    }

    // line 319
    public function block_customScripts($context, array $blocks = array())
    {
        // line 320
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
/******************Menu siempre visible***************************************/ 
        \$(document).scroll(function() {
            if(\$(document).scrollTop() > 30){
                document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar top-bar-fixed\");
                document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main affix\");
            }
            else{
                document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar\");
                document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main\");
            }
        });        
/**********************Menu****************************************************/
        \$(document).scroll(function() {
            if(screen.width<768){
                /*alert(\"resolución de telefono.\\nPantalla de: \"+screen.width + \" x \" + screen.height);*/
                document.getElementById(\"menuVertical\").setAttribute(\"style\", \"width: 100%;\");
            }
            else{
                var max = 0;
                ";
        // line 351
        if ((($context["cantResultados"] ?? null) >= 3)) {
            // line 352
            echo "                    max = 134*";
            echo twig_escape_filter($this->env, ($context["cantResultados"] ?? null), "html", null, true);
            echo ";
                ";
        } else {
            // line 354
            echo "                    max = 470;
                ";
        }
        // line 356
        echo "                if(\$(document).scrollTop() >= 30 && \$(document).scrollTop()<= max){
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
                }
                else{
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
                }
            }
        });
        document.getElementById(\"menu1\").setAttribute(\"class\",\"\");
        document.getElementById(\"menu2\").setAttribute(\"class\",\"menuActivo\");
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "usuarios/entradas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 356,  446 => 354,  440 => 352,  438 => 351,  414 => 330,  409 => 328,  405 => 327,  401 => 326,  397 => 325,  393 => 324,  389 => 323,  384 => 321,  381 => 320,  378 => 319,  337 => 282,  296 => 244,  255 => 206,  209 => 163,  168 => 125,  153 => 112,  150 => 111,  122 => 88,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/entradas.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/entradas.html.twig");
    }
}
