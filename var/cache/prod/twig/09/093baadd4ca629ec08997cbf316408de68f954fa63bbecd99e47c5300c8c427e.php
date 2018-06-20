<?php

/* usuarios/notificaciones.html.twig */
class __TwigTemplate_914fa1135b061b5cf60a22680ad3141f0164a73032ac045d050286a32860dee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/notificaciones.html.twig", 2);
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
        .panelNotificacion{
            border: 1px solid #000000 !important;
        }
        .tituloNotificacion{
            margin-top: 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
        .texto{
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
        .etiqueta{
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 14px;
            padding-top: 10px;
        }
        .panelBotones{
            border: 0px solid #000000 !important;
            background-color: #F1F1F1;
        }
    </style>
";
    }

    // line 37
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"row ml5\" id=\"buscador\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\"><!-- Titulo y buscador -->
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <div class=\"tituloSesion\">Notificaciones</div>
                </div>
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Vacio -->
                    
                </div><!-- Fin del vacio -->
            </div><!-- Fin de Titulo y buscador -->
        </div>
    </div>
";
    }

    // line 51
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 52
        echo "    <div class=\"row mt5 ml5\" id=\"notificaciones\"><!-- Fila 1-->
        <form action=\"#\" method=\"post\" name=\"formularioNotificaciones\">
            <div class=\"panel panelNotificacion\" id=\"notificacionesWeb\">
                <div class=\"panel-header\">
                    <div class=\"tituloNotificacion\">
                        Notificaciones Web
                    </div>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades1\" id=\"novedades1\" value=\"1\">
                                <label for=\"novedades1\" class=\"etiqueta\">Quiero recibir novedades y nuevos eventos destacados semanalmente.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades2\" id=\"novedades2\" value=\"2\">
                                <label for=\"novedades2\" class=\"etiqueta\">Quiero recibir aviso de nuevos seguidores.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades3\" id=\"novedades3\" value=\"3\">
                                <label for=\"novedades3\" class=\"etiqueta\">Quiero recibir aviso de nuevas propuestas de conciertos.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades4\" id=\"novedades4\" value=\"4\">
                                <label for=\"novedades4\" class=\"etiqueta\">Quiero recibir aviso de nuevos mensajes privados sobre mis conciertos.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades5\" id=\"novedades5\" value=\"5\">
                                <label for=\"novedades5\" class=\"etiqueta\">Quiero recibir aviso de cambios de estado y cancelaciones sobre mis eventos.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades6\" id=\"novedades6\" value=\"6\">
                                <label for=\"novedades6\" class=\"etiqueta\">Quiero recibir aviso de confirmaciones de pago.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"panel panelNotificacion\" id=\"notificacionesEmail\">
                <div class=\"panel-header\">
                    <div class=\"tituloNotificacion\">
                        Notificaciones Email
                    </div>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades7\" id=\"novedades7\" value=\"7\">
                                <label for=\"novedades7\" class=\"etiqueta\">Recibe semanalmente pr&oacute;ximos conciertos.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\"></div>
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\">
                                <label for=\"novedades8\" class=\"etiqueta\">Radio</label>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <select name=\"novedades8\" class=\"form-control\">
                                    <option value=\"Todo\">Todo</option>
                                    <option value=\"Pais\">De mi Pa&iacute;s</option>
                                    <option value=\"Provincia\">De mi Provincia</option>
                                </select>
                            </div>
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\"></div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <label for=\"novedades9\" class=\"etiqueta\">Estilos preferidos</label>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3\">
                                <!--input type=\"text\" class=\"form-control\" name=\"novedades9\" id=\"novedades9\" value=\"\" placeholder=\"Estilo?\"-->
                                <select class=\"form-control\" name=\"novedades9\" id=\"novedades9\" size=\"2\" multiple>
                                    <option value=\"Cl&aacute;sica\">Cl&aacute;sica</option>
                                    <option value=\"Indie\">Indie</option>
                                    <option value=\"Jazz\">Jazz</option>
                                    <option value=\"Pop\">Pop</option>
                                    <option value=\"Rock\">Rock</option>
                                    <option value=\"Salsa\">Salsa</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades10\" id=\"novedades10\" value=\"10\">
                                <label for=\"novedades10\" class=\"etiqueta\">Recibe novedades de mis artistas y salas favoritas (nuevos conciertos...).</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades11\" id=\"novedades11\" value=\"11\">
                                <label for=\"novedades11\" class=\"etiqueta\">Recibe nuevas propuestas de conciertos.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades12\" id=\"novedades12\" value=\"12\">
                                <label for=\"novedades12\" class=\"etiqueta\">Recibe nuevos mensajes privados sobre mis eventos.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades13\" id=\"novedades13\" value=\"13\">
                                <label for=\"novedades13\" class=\"etiqueta\">Recibe novedades de mis artistas y salas favoritas.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades14\" id=\"novedades14\" value=\"14\">
                                <label for=\"novedades14\" class=\"etiqueta\">Recibe confirmaciones de pago de conciertos ya realizados.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"texto\">
                                    Estate informado de todo:
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades15\" id=\"novedades15\" value=\"15\">
                                <label for=\"novedades15\" class=\"etiqueta\">Recibe novedades de Buscoconcierto.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <input type=\"checkbox\" name=\"novedades16\" id=\"novedades16\" value=\"16\">
                                <label for=\"novedades16\" class=\"etiqueta\">Recibe el newsletter mensual de Buscoconcierto.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"texto\">
                                    Recordatorios y sugerencias:
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\">
                                <input type=\"checkbox\" name=\"novedades17\" id=\"novedades17\" value=\"17\">
                            </div>
                            <div class=\"col-sx-11 col-sm-11 col-md-11 col-lg-11\">
                                <label for=\"novedades17\" class=\"etiqueta\">
                                Recibe recordatorios, consejos &uacute;tiles para 
                                mejorar tu busqueda de conciertos y otros mensajes
                                relacionados con tu actvidad en Buscoconcierto.</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"texto\">
                                    Promociones:
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\">
                                <input type=\"checkbox\" name=\"novedades18\" id=\"novedades18\" value=\"18\">
                            </div>
                            <div class=\"col-sx-11 col-sm-11 col-md-11 col-lg-11\">
                                <label for=\"novedades18\" class=\"etiqueta\">
                                Recibe cupones, promociones, encuestas, novedades 
                                de conciertos e ideas inspiradoras de Buscoconcierto
                                y sus socios.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Guardar -->
            <div class=\"panel panelBotones\" id=\"guardar\">
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                <a herf=\"#\" class=\"btn btn-custom-orange btn-block\">
                                    Guardar Cambios
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div><!-- Fin Fila 1-->
";
    }

    // line 248
    public function block_customScripts($context, array $blocks = array())
    {
        // line 249
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 259
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
            if(screen.width<768){
                document.getElementById(\"menuVertical\").setAttribute(\"style\", \"width: 100%;\");
            }
            else{
                if(\$(document).scrollTop() >= 100 && \$(document).scrollTop()<= 840){
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
                }
                else{
                    document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
                }
            }
        });
        document.getElementById(\"menu1\").setAttribute(\"class\",\"\");
        document.getElementById(\"menu8\").setAttribute(\"class\",\"menuActivo\");
    </script>
";
    }

    public function getTemplateName()
    {
        return "usuarios/notificaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 259,  323 => 257,  319 => 256,  315 => 255,  311 => 254,  307 => 253,  303 => 252,  298 => 250,  295 => 249,  292 => 248,  93 => 52,  90 => 51,  71 => 37,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/notificaciones.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/notificaciones.html.twig");
    }
}
