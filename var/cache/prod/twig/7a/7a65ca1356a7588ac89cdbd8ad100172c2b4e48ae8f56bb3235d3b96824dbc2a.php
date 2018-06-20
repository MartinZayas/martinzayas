<?php

/* usuarios/mensajes.html.twig */
class __TwigTemplate_2beff7583a0fb9d9ead72ef33240be37296038bb3779a14c1022558f120d7a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/mensajes.html.twig", 2);
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
        .botonOpciones{
            width: 100%;
            height: 34px;
            padding-top: 5px;
            padding-bottom: 0px;
            padding-left: 0px;
            padding-right: 0px;
            margin-bottom: 5px;
            text-align: center;
            align-content: center;
            background-color: #FFFFFF;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .textoFecha{
            color: #000000;
            font-size: 14px;
            font-family: Helvetica, Arial, sans-serif, Open Sans;
        }
    </style>
";
    }

    // line 28
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"row ml5\" id=\"buscador\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\"><!-- Titulo y buscador -->
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <div class=\"tituloSesion\">Mensajes</div>
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

    // line 51
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 52
        echo "    <div class=\"row mt5 ml5\" id=\"mensajes\"><!-- Fila 1-->
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 panelAnuncio\"><!-- Mensaje 1 -->
            <div class=\"row\">
                <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario\">
                </div>
                <div class=\"col-xs-8 col-sm-9 col-md-9 col-lg-9\"><!-- Descripción -->
                    <div class=\"row mt20\">
                        <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10 textoArtista\">
                            Vetuzta Morla
                        </div>
                        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                            <div class=\"dropdown\">
                                <button class=\"btn btn-default dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-option-vertical\"></span>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                    <li role=\"presentation\">
                                      <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar conversaciones</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                            <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                            Sala Caracol, Madrid
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-7 col-sm-7 col-md-8 col-lg-8 textoFecha\">
                            5 de Mayo del 2018.
                        </div>
                        <div class=\"col-xs-5 col-sm-5 col-md-4 col-lg-4\">
                            <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosConversaciones", array("login" => "usuario1"), array("id" => 1));
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Ver mensajes
                            </a>
                        </div>
                    </div>
                </div><!-- Fin Descripción -->
            </div><!-- Fin row -->
        </div><!-- Fin Mensaje 1 -->
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 panelAnuncio\"><!-- Mensaje 2 -->
            <div class=\"row\">
                <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista2.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario\">
                </div>
                <div class=\"col-xs-8 col-sm-9 col-md-9 col-lg-9\"><!-- Descripción -->
                    <div class=\"row mt20\">
                        <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10 textoArtista\">
                            Lori Meyers + invitado
                        </div>
                        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                            <div class=\"dropdown\">
                                <button class=\"btn btn-default dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-option-vertical\"></span>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                    <li role=\"presentation\">
                                      <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar conversaciones</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                            <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                            Sala Caracol, Madrid
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-7 col-sm-7 col-md-8 col-lg-8 textoFecha\">
                            5 de Mayo del 2018.
                        </div>
                        <div class=\"col-xs-5 col-sm-5 col-md-4 col-lg-4\">
                            <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosConversaciones", array("login" => "usuario1"), array("id" => 1));
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Ver mensajes
                            </a>
                        </div>
                    </div>
                </div><!-- Fin Descripción -->
            </div><!-- Fin row -->
        </div><!-- Fin Mensaje 2 -->
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 panelAnuncio\"><!-- Mensaje 3 -->
            <div class=\"row\">
                <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                    <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario\">
                </div>
                <div class=\"col-xs-8 col-sm-9 col-md-9 col-lg-9\"><!-- Descripción -->
                    <div class=\"row mt20\">
                        <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10 textoArtista\">
                            Izal en concierto
                        </div>
                        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                            <div class=\"dropdown\">
                                <button class=\"btn btn-default dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-option-vertical\"></span>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                    <li role=\"presentation\">
                                      <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar conversaciones</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                            <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                            Sala Caracol, Madrid
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-7 col-sm-7 col-md-8 col-lg-8 textoFecha\">
                            5 de Mayo del 2018.
                        </div>
                        <div class=\"col-xs-5 col-sm-5 col-md-4 col-lg-4\">
                            <a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosConversaciones", array("login" => "usuario1"), array("id" => 1));
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Ver mensajes
                            </a>
                        </div>
                    </div>
                </div><!-- Fin Descripción -->
            </div><!-- Fin row -->
        </div><!-- Fin Mensaje 3 -->
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 panelAnuncio\"><!-- Mensaje 4 -->
            <div class=\"row\">
                <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                    <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img img-responsive imagenUsuario\">
                </div>
                <div class=\"col-xs-8 col-sm-9 col-md-9 col-lg-9\"><!-- Descripción -->
                    <div class=\"row mt20\">
                        <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10 textoArtista\">
                            Nada M&aacute;s presenta su nuevo disco en Logroño
                        </div>
                        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                            <div class=\"dropdown\">
                                <button class=\"btn btn-default dropdown-toggle botonOpciones\" type=\"button\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-option-vertical\"></span>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                    <li role=\"presentation\">
                                      <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Eliminar conversaciones</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoSala\">
                            <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                            Sala Caracol, Madrid
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-7 col-sm-7 col-md-8 col-lg-8 textoFecha\">
                            5 de Mayo del 2018.
                        </div>
                        <div class=\"col-xs-5 col-sm-5 col-md-4 col-lg-4\">
                            <a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosConversaciones", array("login" => "usuario1"), array("id" => 1));
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                Ver mensajes
                            </a>
                        </div>
                    </div>
                </div><!-- Fin Descripción -->
            </div><!-- Fin row -->
        </div><!-- Fin Mensaje 4 -->
    </div><!-- fin fila 1 -->
";
    }

    // line 223
    public function block_customScripts($context, array $blocks = array())
    {
        // line 224
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 234
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
            console.log(\$(document).scrollTop());
            var max = 0;
            ";
        // line 251
        if ((($context["cantResultados"] ?? null) >= 3)) {
            // line 252
            echo "                max = 150*";
            echo twig_escape_filter($this->env, ($context["cantResultados"] ?? null), "html", null, true);
            echo ";
            ";
        } else {
            // line 254
            echo "                max = 470;
            ";
        }
        // line 256
        echo "            if(\$(document).scrollTop() >= 100 && \$(document).scrollTop()<= max){
                document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
            }
            else{
                document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
            }
        });
        document.getElementById(\"menu1\").setAttribute(\"class\",\"\");
        document.getElementById(\"menu6\").setAttribute(\"class\",\"menuActivo\");
    </script>
";
    }

    public function getTemplateName()
    {
        return "usuarios/mensajes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 256,  355 => 254,  349 => 252,  347 => 251,  327 => 234,  322 => 232,  318 => 231,  314 => 230,  310 => 229,  306 => 228,  302 => 227,  297 => 225,  294 => 224,  291 => 223,  277 => 213,  243 => 182,  229 => 171,  195 => 140,  181 => 129,  147 => 98,  133 => 87,  99 => 56,  93 => 52,  90 => 51,  62 => 28,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/mensajes.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/mensajes.html.twig");
    }
}
