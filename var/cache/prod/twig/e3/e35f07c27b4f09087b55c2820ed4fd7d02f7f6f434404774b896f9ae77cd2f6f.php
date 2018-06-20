<?php

/* usuarios/privacidad.html.twig */
class __TwigTemplate_27cc53f1188edb1fb2201f46b72b7537ed25aab0cf8d7f9da62884716600cc71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/privacidad.html.twig", 2);
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
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 12px;
            padding-top: 10px;
        }
        .etiqueta2{
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 12px;
            padding-top: 10px;
        }
        .etiqueta3{
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-size: 11px;
            padding-top: 10px;
        }
        .panelBotones{
            border: 0px solid #000000 !important;
            background-color: #F1F1F1;
        }
    </style>
";
    }

    // line 66
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"row ml5\" id=\"buscador\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\"><!-- Titulo y buscador -->
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <div class=\"tituloSesion\">Configuraci&oacute;n de privacidad</div>
                </div>
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Vacio -->
                    
                </div><!-- Fin del vacio -->
            </div><!-- Fin de Titulo y buscador -->
        </div>
    </div>
";
    }

    // line 80
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 81
        echo "    <div class=\"row mt5 ml5\" id=\"notificaciones\"><!-- Fila 1-->
        <form action=\"#\" method=\"post\" name=\"formularioNotificaciones\">
            <div class=\"panel panelNotificacion\" id=\"notificacionesWeb\">
                <div class=\"panel-header\">
                    <div class=\"tituloNotificacion\">
                        Visivilidad
                    </div>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <div class=\"row\"><!-- Fila 1 -->
                            <div class=\"col-sx-3 col-sm-3 col-md-3 col-lg-3 etiqueta2\">
                                Perfil de usuario:
                            </div>
                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                <input type=\"radio\" name=\"configuracion1\" id=\"configuracion1\" value=\"1\">
                                <label for=\"configuracion1\" class=\"etiqueta\">P&uacute;blico</label>
                            </div>
                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                <input type=\"radio\" name=\"configuracion1\" id=\"configuracion1\" value=\"2\">
                                <label for=\"configuracion1\" class=\"etiqueta\">Privado</label>
                            </div>
                            <div class=\"col-sx-5 col-sm-5 col-md-5 col-lg-5\">
                                <input type=\"radio\" name=\"configuracion1\" id=\"configuracion1\" value=\"3\">
                                <label for=\"configuracion1\" class=\"etiqueta\">S&oacute;lo pueden verlo usuarios a los que sigo</label>
                            </div>
                        </div><!-- Fin Fila 1 -->
                        <div class=\"row\">
                            <div class=\"col-sx-5 col-sm-5 col-md-5 col-lg-5 etiqueta2\">
                                Aparecer en resultados de busquedas de la web:
                            </div>
                            <div class=\"col-sx-1 col-sm-1 col-md-1 col-lg-1\">
                                <input type=\"radio\" name=\"configuracion2\" id=\"configuracion2\" value=\"1\">
                                <label for=\"configuracion2\" class=\"etiqueta\">Si</label>
                            </div>
                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                <input type=\"radio\" name=\"configuracion2\" id=\"configuracion2\" value=\"2\">
                                <label for=\"configuracion2\" class=\"etiqueta\">No</label>
                            </div>
                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                <input type=\"radio\" name=\"configuracion2\" id=\"configuracion2\" value=\"3\">
                                <label for=\"configuracion2\" class=\"etiqueta\">S&oacute;lo usuarios a los que sigo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Solicitudes y notificaciones -->
            <div class=\"panel panelNotificacion\" id=\"notificacionesWeb\">
                <div class=\"panel-header\">
                    <div class=\"tituloNotificacion\">
                        Solicitudes y notificaciones
                    </div>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <div class=\"row\"><!-- Fila 1 -->
                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4 etiqueta2\">
                                Nuevas propuestas de conciertos:
                            </div>
                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                <input type=\"radio\" name=\"configuracion3\" id=\"configuracion3\" value=\"1\">
                                <label for=\"configuracion3\" class=\"etiqueta3\">Cualquiera</label>
                            </div>
                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                <input type=\"radio\" name=\"configuracion3\" id=\"configuracion3\" value=\"2\">
                                <label for=\"configuracion3\" class=\"etiqueta3\">S&oacute;lo artistas</label>
                            </div>
                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                <input type=\"radio\" name=\"configuracion1\" id=\"configuracion1\" value=\"3\">
                                <label for=\"configuracion1\" class=\"etiqueta3\">S&oacute;lo salas</label>
                            </div>
                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                <input type=\"radio\" name=\"configuracion1\" id=\"configuracion1\" value=\"3\">
                                <label for=\"configuracion1\" class=\"etiqueta3\">S&oacute;lo promotores</label>
                            </div>
                        </div><!-- Fin Fila 1 -->
                        <div class=\"row\"><!-- Fila 2 -->
                            <div class=\"col-sx-5 col-sm-5 col-md-4 col-lg-4 etiqueta2\">
                                L&iacute;mite de propuestas diarias:
                            </div>
                            <div class=\"col-sx-4 col-sm-4 col-md-3 col-lg-3\">
                                <select id=\"limite\" class=\"form-control\" name=\"limite\" aria-invalid=\"false\">
                                    <option value=\"0\">Ilimitado</option>
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"3\">3</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"6\">6</option>
                                    <option value=\"7\">7</option>
                                    <option value=\"8\">8</option>
                                    <option value=\"9\">9</option>
                                    <option value=\"10\">10</option>
                                </select>
                            </div>
                            <div class=\"col-sx-3 col-sm-3 col-md-5 col-lg-5\">
                            </div>
                        </div><!-- Fin Fila 2 -->
                    </div>
                </div>
            </div>
            <!-- Fin Solicitudes y notificaciones -->
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
    </div>
";
    }

    // line 201
    public function block_customScripts($context, array $blocks = array())
    {
        // line 202
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 212
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
            if(\$(document).scrollTop() >= 100 && \$(document).scrollTop()<= 160){
                document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
            }
            else{
                document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
            }
        });        
        document.getElementById(\"menu1\").setAttribute(\"class\",\"\");
    </script>
";
    }

    public function getTemplateName()
    {
        return "usuarios/privacidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 212,  260 => 210,  256 => 209,  252 => 208,  248 => 207,  244 => 206,  240 => 205,  235 => 203,  232 => 202,  229 => 201,  106 => 81,  103 => 80,  84 => 66,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/privacidad.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/privacidad.html.twig");
    }
}
