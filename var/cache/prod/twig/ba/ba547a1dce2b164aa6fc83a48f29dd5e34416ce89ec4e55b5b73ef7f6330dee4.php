<?php

/* usuarios/seguidores.html.twig */
class __TwigTemplate_e84b6b638f241bf528010b941593d37c1aabbdc131ff51c7d055a238cb14703f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/seguidores.html.twig", 2);
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
        .panelArtistas{
            margin-right: 0px;
            margin-bottom: 10px;
            padding-left: 2px;
            padding-right: 2px;
            border:1px solid #000000;
            background-color: #FFFFFF;
        }
        .imagenSeguidor{
            width: calc(100% - 20px);
            align-content: center;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .textoSeguidor{
            text-align: center;
            margin-top: 5px;
            margin-bottom: 5px;
            color: #000000;
            font-size: 18px;
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
            font-style: normal;
            font-weight: bold;
        }
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
        .botonBloquear{
            width: 100%;
            margin-top: 5px;
            padding-left: 6px;
            padding-right: 6px;
            margin-bottom: 5px;
            text-align: center;
            align-content: center;
            height: 42px;
            padding-top: 10px;
            padding-bottom: 10px;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .botonEliminar{
            width: 100%;
            margin-top: 5px;
            padding-left: 6px;
            padding-right: 6px;
            margin-bottom: 5px;
            text-align: center;
            align-content: center;
            height: 42px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #FFFFFF;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
/*****************************************************************************/        
        .social{
            margin-left: 30px;
            margin-right: 30px;
        }
        .social2{
            margin-left: 60px;
            margin-right: 20px;
        }
        .social3{
            margin-left: 20px;
            margin-right: 60px;
        }
        .titulo{
            position:relative;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-right: 15px;
            display:block;
            text-align:center !important;
            overflow:hidden;
            height: 50px;
            max-height:70px;
            background-color: #FFFFFF;
            text-transform:none;
            text-align: justify;
            font-weight:400;
            margin-bottom:0px;
            color: #000000 !important;
            font-family: HelveticaNegrita, HelveticaCond, sans-serif;
            font-size: 20px;
        }
        .titulo a h2{
            text-transform:none;
            font-weight:400;
            color: #000000 !important;
            font-family: HelveticaNegrita, HelveticaCond, sans-serif;
            font-size: 20px;
        }
        .content-box-shadow2 {
            -webkit-box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            -moz-box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            box-shadow:1px 1px 1px 0px rgba(0,0,0,0.02);
            padding:15px;
            background-color:#FAFAFA;
            border-left:1px solid #E6E6E6;
            border-right:1px solid #E6E6E6;
        }
    </style>
";
    }

    // line 127
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"row ml5\" id=\"buscador\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\"><!-- Titulo y buscador -->
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <div class=\"tituloSesion\">Mis Seguidores <span class=\"badge badge-primary\">3</span></div>
                </div>
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Buscador -->
                    <!--form action=\"#\" method=\"post\" role=\"form\">
                        <div class=\"input-group buscador\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-default boton\" type=\"submit\">
                                    <span class=\"glyphicon glyphicon-search\"></span>
                                </button>
                            </div>                        
                            <input type=\"text\" id=\"buscador2\" name=\"buscador2\" class=\"form-control tBuscador\" placeholder=\"Buscar...\">
                        </div>
                    </form-->
                </div><!-- Fin del Buscador -->
            </div><!-- Fin de Titulo y buscador -->
        </div>
    </div>
";
    }

    // line 150
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 151
        echo "    <div class=\"row mt5 ml5\"><!-- Fila 1-->
        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 1 -->
            <div class=\"view image-hover-1 no-margin\">
                <!-- Blog Thumb -->
                <div class=\"product-container\">
                    <img class=\"img-responsive full-width\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                </div>
                <div class=\"mask\">
                    <div class=\"image-hover-content\">
                        <!-- Zoom + Blog Link -->
                        <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user1-128x128.jpg"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"#\" class=\"info\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-link image-icons\"></span>
                            </div>
                        </a>
                    </div><!-- /image hover content -->
                </div><!-- /mask-->
            </div>
            <div class=\"titulo content-box-shadow2\">
                <a href=\"#\">
                    <h2>Usuario 1</h2>
                </a>  
            </div>
            <div class=\"shop-product content-box-shadow\">
                <div class=\"row\">
                    <ul class=\"list-inline\" id=\"\">
                        <li class=\"social2\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" title=\"Bloquear seguidor\">
                                <span class=\"glyphicon glyphicon-ban-circle\"></span>
                            </a>
                        </li>
                        <li class=\"social3\">
                            <a href=\"#\" class=\"compartir\">
                                <span class=\"glyphicon glyphicon-remove\" data-toggle=\"tooltip\" title=\"Borrar de la lista de seguidores\"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 2 -->
            <div class=\"view image-hover-1 no-margin\">
                <!-- Blog Thumb -->
                <div class=\"product-container\">
                    <img class=\"img-responsive full-width\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user6-128x128.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                </div>
                <div class=\"mask\">
                    <div class=\"image-hover-content\">
                        <!-- Zoom + Blog Link -->
                        <a href=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user6-128x128.jpg"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"#\" class=\"info\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-link image-icons\"></span>
                            </div>
                        </a>
                    </div><!-- /image hover content -->
                </div><!-- /mask-->
            </div>
            <div class=\"titulo content-box-shadow2\">
                <a href=\"#\">
                    <h2>Usuario 2</h2>
                </a>  
            </div>
            <div class=\"shop-product content-box-shadow\">
                <div class=\"row\">
                    <ul class=\"list-inline\" id=\"\">
                        <li class=\"social2\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" title=\"Bloquear seguidor\">
                                <span class=\"glyphicon glyphicon-ban-circle\"></span>
                            </a>
                        </li>
                        <li class=\"social3\">
                            <a href=\"#\" class=\"compartir\">
                                <span class=\"glyphicon glyphicon-remove\" data-toggle=\"tooltip\" title=\"Borrar de la lista de seguidores\"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Resulatado 3 -->
            <div class=\"view image-hover-1 no-margin\">
                <!-- Blog Thumb -->
                <div class=\"product-container\">
                    <img class=\"img-responsive full-width\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user5-128x128.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                </div>
                <div class=\"mask\">
                    <div class=\"image-hover-content\">
                        <!-- Zoom + Blog Link -->
                        <a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user5-128x128.jpg"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-ios7-search image-icons\"></span>
                            </div>
                        </a>
                        <a href=\"#\" class=\"info\">
                            <div class=\"image-icon-holder\">
                                <span class=\"ion-link image-icons\"></span>
                            </div>
                        </a>
                    </div><!-- /image hover content -->
                </div><!-- /mask-->
            </div>
            <div class=\"titulo content-box-shadow2\">
                <a href=\"#\">
                    <h2>Usuario 2</h2>
                </a>  
            </div>
            <div class=\"shop-product content-box-shadow\">
                <div class=\"row\">
                    <ul class=\"list-inline\" id=\"\">
                        <li class=\"social2\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" title=\"Bloquear seguidor\">
                                <span class=\"glyphicon glyphicon-ban-circle\"></span>
                            </a>
                        </li>
                        <li class=\"social3\">
                            <a href=\"#\" class=\"compartir\">
                                <span class=\"glyphicon glyphicon-remove\" data-toggle=\"tooltip\" title=\"Borrar de la lista de seguidores\"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Fin de fila 1 de seguidores -->
";
    }

    // line 286
    public function block_customScripts($context, array $blocks = array())
    {
        // line 287
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
/**********************Menu****************************************************/
        \$(document).scroll(function() {
            var max = 0;
            ";
        // line 302
        if ((($context["cantResultados"] ?? null) >= 2)) {
            // line 303
            echo "                max = 189*";
            echo twig_escape_filter($this->env, ($context["cantResultados"] ?? null), "html", null, true);
            echo ";
            ";
        } else {
            // line 305
            echo "                max = 120;
            ";
        }
        // line 307
        echo "            if(\$(document).scrollTop() >= 100 && \$(document).scrollTop()<= max){
                document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical fixed\");
            }
            else{
                document.getElementById(\"menuVertical\").setAttribute(\"class\",\"menuVertical\");
            }
        });
        \$(document).ready(function() {
            document.getElementById(\"menu1\").setAttribute(\"class\",\"\");
            document.getElementById(\"menu4\").setAttribute(\"class\",\"menuActivo\");
/*************************** Tooltip ***************************************/
            \$('[data-toggle=\"tooltip\"]').tooltip();
        });//Fin de función ready
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
    </script>
";
    }

    public function getTemplateName()
    {
        return "usuarios/seguidores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 307,  400 => 305,  394 => 303,  392 => 302,  384 => 297,  379 => 295,  375 => 294,  371 => 293,  367 => 292,  363 => 291,  359 => 290,  354 => 288,  351 => 287,  348 => 286,  307 => 249,  299 => 244,  257 => 205,  249 => 200,  207 => 161,  199 => 156,  192 => 151,  189 => 150,  161 => 127,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/seguidores.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/seguidores.html.twig");
    }
}
