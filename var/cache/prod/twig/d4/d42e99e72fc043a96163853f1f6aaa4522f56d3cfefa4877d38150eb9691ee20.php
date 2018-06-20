<?php

/* eventos/paso4.html.twig */
class __TwigTemplate_5c87dd9938bee9d9d497149fa1405b66f324168019bac1bbdbfe5d5f1a1ef8ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("eventos/paso1.html.twig", "eventos/paso4.html.twig", 2);
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
        echo "Busco Concierto | Paso 4";
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
        .botonRadio {
            margin: 4px 0 0;
            margin-top: 1px\\9;
            line-height: normal;
            background-color: #00B7EB;
        }
        .input-group-append{
            padding-right:0;
            padding-left:0;
        }
        .input-group-text{
            padding-right:0;
            padding-left:0;
        }
        </style>
";
    }

    // line 25
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/paso4.html.twig", 26)->display(array_merge($context, array("bgImage" => (        // line 27
($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg3.jpg"), "subheaderTitle" => "PROPONER CONCIERTO: Paso 4")));
    }

    // line 31
    public function block_steps($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "eventos/paso4.html.twig", 32)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 39
    public function block_customContent($context, array $blocks = array())
    {
        // line 40
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
                <li role=\"presentation\" id=\"step-4\" class=\"active\">
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
                        <strong>Establecer precio de cada entrada y cantidad de entradas ha vender</strong>
                    </div>
                    <div class=\"panel-body general-container\">
                        <form action=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso5");
        echo "\" method=\"post\" id=\"formulario2\" role=\"form\" class=\"form-horizontal\">
                            <div class=\"row\"><!-- Row 1 -->
                                <div class=\"col-xs-12 col-sm-12 col-lg-12\"><!-- Panel -->
                                    <div class=\"panel panel-default\">
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
                                                    <input type=\"number\" value=\"0\" placeholder=\"0\" id=\"minimo\" name=\"minimo\" class=\"form-control\">
                                                </div>
                                                <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                                    <input type=\"number\" value=\"0\" placeholder=\"0\" id=\"maximo\" name=\"maximo\" class=\"form-control\">
                                                </div>
                                                <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                                    <input type=\"number\" value=\"0\" placeholder=\"0\" id=\"dias\" name=\"dias\" class=\"form-control\">
                                                </div>
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
                                                                    <input type=\"radio\" name=\"tipo\" id=\"tipo1\" class=\"\" value=\"DePago\" required=\"required\">
                                                                    <label class=\"control-label\" for=\"tipo1\">De pago</label>                                                                    
                                                                </div>
                                                                <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                                                                    <input type=\"radio\" name=\"tipo\" id=\"tipo2\" class=\"\" value=\"Gratuita\" required=\"required\">
                                                                    <label class=\"control-label\" for=\"tipo2\">Gratuita (Invitaci&oacute;n)</label>
                                                                </div>
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
                                                                            <div class=\"input-group\">
                                                                              <input type=\"number\" name=\"precioNeto\" id=\"precioNeto\" class=\"form-control\" value=\"0\">
                                                                              <span class=\"input-group-addon\">€</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-xs-2 col-sm-2\">
                                                                            <span class=\"glyphicon glyphicon-plus\"></span>
                                                                        </div>
                                                                        <div class=\"col-xs-10 col-sm-10 col-md-5 col-lg-5\">
                                                                            <div class=\"input-group\">
                                                                              <input type=\"number\" name=\"gastos\" id=\"gastos\" class=\"form-control\" value=\"0\" disabled>
                                                                              <span class=\"input-group-addon\">€</span>
                                                                            </div>                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                                            <label class=\"control-label\" for=\"precio\">Precio Final</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                                            <div class=\"input-group\">
                                                                              <input type=\"number\" name=\"precio\" id=\"precio\" class=\"form-control\" value=\"0\"  readonly=\"readonly\">
                                                                              <span class=\"input-group-addon\">€</span>
                                                                            </div>                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                                                            <br>
                                                                            <h4>Consumisi&oacute;n m&iacute;nima</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-xs-6 col-sm-6 col-md-2 col-lg-2\">                                                                    
                                                                            <input type=\"radio\" name=\"consumoMin\" id=\"consumoMin1\" class=\"\" value=\"Si\" required=\"required\">
                                                                            <label class=\"control-label\" for=\"consumoMin1\">Si</label>                                                                    
                                                                        </div>
                                                                        <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                                                                            <input type=\"radio\" name=\"consumoMin\" id=\"consumoMin2\" class=\"\" value=\"No\" required=\"required\">
                                                                            <label class=\"control-label\" for=\"consumoMin2\">No</label>
                                                                        </div>
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
                                                                                    <div class=\"input-group\">
                                                                                      <input type=\"text\" class=\"form-control\" name=\"porcentajeLocal\" id=\"porcentajeLocal\">
                                                                                      <span class=\"input-group-addon\">%</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                    <div class=\"input-group\">
                                                                                      <input type=\"text\" class=\"form-control\" name=\"totalLocal\" id=\"totalLocal\">
                                                                                      <span class=\"input-group-addon\">€</span>
                                                                                    </div>
                                                                                </div>
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
                                                                                    <div class=\"input-group\">
                                                                                      <input type=\"text\" class=\"form-control\" name=\"porcentajeArtista\" id=\"porcentajeArtista\">
                                                                                      <span class=\"input-group-addon\">%</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
                                                                                    <div class=\"input-group\">
                                                                                      <input type=\"text\" class=\"form-control\" name=\"totalArtista\" id=\"totalArtista\">
                                                                                      <span class=\"input-group-addon\">€</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row\"><!-- Barra -->
                                                                                <hr class=\"hr-solid\">
                                                                            </div>
                                                                            <div class=\"row\"><!-- Totales -->
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                                                                    <label class=\"control-label\" for=\"totalGeneral\">Total</label>
                                                                                </div>
                                                                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                                                                    <div class=\"input-group\">
                                                                                      <input type=\"number\" class=\"form-control\" name=\"totalGeneral\" id=\"totalGeneral\" readonly=\"readonly\">
                                                                                      <span class=\"input-group-addon\">€</span>
                                                                                    </div>
                                                                                </div>
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
                                    </div>
                                </div><!-- Fin Panel -->
                            </div><!-- Fin Row 1 -->
                            <div class=\"row\"><!-- Botones -->
                                <div class=\"col-sx-4 col-sm-6 col-md-8 col-lg-8\"></div>
                                <div class=\"col-sx-4 col-sm-3 col-md-2 col-lg-2\">
                                    <a href=\"";
        // line 312
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso3");
        echo "\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"anterior3\" data-toggle=\"tooltip\" title=\"Anterior - Fecha y hora\">
                                        Anterior
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                    </a>
                                </div>
                                <div class=\"col-sx-4 col-sm-3 col-md-2 col-lg-2\">
                                    <button type=\"submit\" class=\"btn btn-rw btn-primary tags btn-block siguiente\" id=\"siguiente4\" data-toggle=\"tooltip\" title=\"Siguiente - Resumen\">
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

    // line 331
    public function block_javascripts($context, array $blocks = array())
    {
        // line 332
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
        return "eventos/paso4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 332,  393 => 331,  370 => 312,  158 => 103,  93 => 40,  90 => 39,  85 => 32,  82 => 31,  78 => 27,  76 => 26,  73 => 25,  51 => 7,  47 => 6,  42 => 5,  39 => 4,  33 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/paso4.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/paso4.html.twig");
    }
}
