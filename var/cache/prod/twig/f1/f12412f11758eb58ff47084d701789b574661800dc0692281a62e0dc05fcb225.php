<?php

/* usuarios/conversaciones.html.twig */
class __TwigTemplate_d26df97a1e7786a1cd2737eb1bdf154633b1f63938a6d333d1d572274fee797c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("usuarios/sesion.html.twig", "usuarios/conversaciones.html.twig", 2);
        $this->blocks = array(
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'columnaIzquierda' => array($this, 'block_columnaIzquierda'),
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
        .botonEnviar{
            height: 42px;
        }
    </style>
";
    }

    // line 31
    public function block_columnaIzquierda($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\"><!-- Columna izquierda -->
    <div class=\"row panelSombra mb40\"><!-- Menu vertical -->
        <div class=\"menuVertical\" id=\"menuVertical\">
            <ul class=\"sidebar-menu\">
                <li>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuariosMensajes", array("login" => "usuario1"));
        echo "\" class=\"\" id=\"menu6_2\">
                        <i class=\"fa fa-arrow-left\"></i>
                        <span>Regresar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div><!-- Fin Menu vertical -->
</div><!-- Fin Columna izquierda -->
";
    }

    // line 47
    public function block_encabezadoContenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"row ml5\" id=\"buscador\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\"><!-- Titulo y buscador -->
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <div class=\"tituloSesion\">Conversaciones</div>
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

    // line 70
    public function block_contenidoDerecha($context, array $blocks = array())
    {
        // line 71
        echo "    <div class=\"row mt5 ml5\" id=\"detalles\">
        <div class=\"box box-success\">
            <div class=\"box-header\">
                <i class=\"fa fa-comments-o\"></i>
                <h3 class=\"box-title\">Chat</h3>
                <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                    <div class=\"btn-group\" data-toggle=\"btn-toggle\">
                      <button type=\"button\" class=\"btn btn-default btn-sm active\">
                          <i class=\"fa fa-square text-green\"></i>
                      </button>
                      <button type=\"button\" class=\"btn btn-default btn-sm\">
                          <i class=\"fa fa-square text-red\"></i>
                      </button>
                    </div>
                </div>
            </div>
            <div class=\"box-body chat\" id=\"chat-box\">              
                <div class=\"item\"><!-- chat item -->
                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user4-128x128.jpg"), "html", null, true);
        echo "\" alt=\"Usuario\" class=\"online\">
                    <p class=\"message\">
                        <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 2:15</small>
                        Mike Doe
                        </a>
                        I would like to meet you to discuss the latest news about
                        the arrival of the new theme. They say it is going to be one the
                        best themes on the market
                    </p>
                </div><!-- /.item -->              
                <div class=\"item\"><!-- chat item -->
                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" alt=\"Usuario\" class=\"offline\">
                    <p class=\"message\">
                        <a href=\"#\" class=\"name\">
                            <small class=\"text-muted pull-right\">
                                <i class=\"fa fa-clock-o\"></i> 5:15
                            </small>
                            Alexander Pierce
                        </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                    </p>
                </div> <!-- /.item -->
                <div class=\"item\"><!-- chat item -->
                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"Usuario\" class=\"offline\">
                    <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\">
                            <i class=\"fa fa-clock-o\"></i> 5:30
                        </small>
                        Susan Doe
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                    </p>
                </div> <!-- /.item -->
            </div>
            <!-- /.chat -->
            <div class=\"box-footer\">
                <div class=\"input-group\">
                    <input class=\"form-control\" placeholder=\"Escriba su mensaje...\">
                    <div class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-success botonEnviar\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 143
    public function block_customScripts($context, array $blocks = array())
    {
        // line 144
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Para menus desplegables -->
    <script type=\"text/javascript\" src=\"";
        // line 154
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
/**********************Menu***************************************************/
        \$(document).scroll(function() {
            console.log(\$(document).scrollTop());
            var max = 0;
            ";
        // line 176
        echo "            if(\$(document).scrollTop() >= 100 && \$(document).scrollTop()<= 350){
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
        return "usuarios/conversaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 176,  241 => 154,  236 => 152,  232 => 151,  228 => 150,  224 => 149,  220 => 148,  216 => 147,  211 => 145,  208 => 144,  205 => 143,  173 => 115,  156 => 101,  141 => 89,  121 => 71,  118 => 70,  90 => 47,  76 => 37,  69 => 32,  66 => 31,  35 => 5,  32 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/conversaciones.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/conversaciones.html.twig");
    }
}
