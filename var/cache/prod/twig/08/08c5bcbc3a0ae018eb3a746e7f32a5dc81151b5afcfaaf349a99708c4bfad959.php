<?php

/* salas/nuevo.html.twig */
class __TwigTemplate_63d1d17729a526ed2789460d1ca079b9612ea1b76ea9f96eacedafe23be3012d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "salas/nuevo.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto | Paso 1";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
    <!-- select 2 -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
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
        .boton{
            height: 42px;
        }
/**********************Subir archivo*******************************************/
        .tArchivo{
            width: 100%;
            color: #000000;
            font-family: HelveticaCondensada, \"Helvetica LT Std\";
            font-size: 14px;
            z-index: 2;
        }
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputfile + label {
            font-size: 1.25em;
            font-weight: 700;
            color: white;
            background-color: black;
            display: inline-block;
        }

        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: red;
        }
        .inputfile + label {
            cursor: pointer; /* \"hand\" cursor */
        }
        .inputfile:focus + label {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
        }
        .inputfile + label * {
            pointer-events: none;
        }
        .alerta{
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            padding-bottom: 5px;
            text-align: justify;
            line-height: 30px;
            border-left: #337ab7;
            border-left-style: solid;
            border-left-width: 4px;
            background-color: #00B7EB;
            color: #ffffff;
            font-family: Helvetica, Open Sans;
        }
        .textoArchivos{
            color: #000000;
        }        
    </style>
";
    }

    // line 89
    public function block_contenido($context, array $blocks = array())
    {
        echo "  
    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulario"] ?? null), 'form_start');
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sx-12 col-sm-12 col-lg-12 col-xg-12\">
                <div class=\"errores\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formulario"] ?? null), 'errors');
        echo "</div>
            </div>
        </div>
        <div class=\"row mt5\">
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "nombre", array()), 'label', array("label" => "Nombre de la Sala/Local: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "nombre", array()), 'errors');
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "descripcion", array()), 'label', array("label" => "Descripción: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "descripcion", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mt5\">
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "telefono", array()), 'label', array("label" => "Teléfono: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "telefono", array()), 'errors');
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "aforo", array()), 'label', array("label" => "Aforo: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "aforo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "aforo", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mt5\">
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "medidasEscenario", array()), 'label', array("label" => "Medidas del escenario (m2): "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "medidasEscenario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "medidasEscenario", array()), 'errors');
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cacheMin", array()), 'label', array("label" => "Cache mínima: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cacheMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cacheMin", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mt5\">
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cacheMax", array()), 'label', array("label" => "Cache máxima: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cacheMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cacheMax", array()), 'errors');
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cif", array()), 'label', array("label" => "cif: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "cif", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mt5\">
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "mesApertura", array()), 'label', array("label" => "Mes de apertura: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "mesApertura", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "mesApertura", array()), 'errors');
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "anioApertura", array()), 'label', array("label" => "Año de apertura: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "anioApertura", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "anioApertura", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mt5\">
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "video", array()), 'label', array("label" => "Video: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "video", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "video", array()), 'errors');
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "iban", array()), 'label', array("label" => "iban: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "iban", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "iban", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mt5\">
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "contactoid", array()), 'label', array("label" => "Contacto: "));
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "contactoid", array()), 'widget', array("attr" => array("class" => "form-control js-example-basic-single")));
        echo "
                ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulario"] ?? null), "contactoid", array()), 'errors');
        echo "
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                
            </div>
        </div>
        <div class=\"row mt10\">
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\"></div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                <input type = \"reset\" value = \"Cancelar\" name = \"cancelar\" class=\"boton btn btn-default btn-block\"/>
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\">
                <input type = \"submit\" value = \"Aceptar\" name = \"aceptar\" class=\"boton btn btn-primary btn-block\"/>
            </div>
            <div class=\"col-sx-3 col-sm-3 col-lg-3 col-xg-3\"></div>
        </div>
    </div>
    ";
        // line 219
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulario"] ?? null), 'form_end');
        echo "
";
    }

    // line 221
    public function block_javascripts($context, array $blocks = array())
    {
        // line 222
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- select2 -->
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
    /***********************Select2********************************************/
        \$(document).ready(function() {
            \$('.js-example-basic-single-multiple').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });            
            \$('.js-example-basic-single').select2({
                placeholder: 'Seleccione una opccion',
                lenguage:\"es\"
            });
    /************************Calendario*****************************************/
            \$('.datepicker-me').datepicker({
                    format: \"mm/yyyy\",
                    todayBtn: true,
                    language: \"es\",
                });
        });//Fin de función ready
    </script>
";
    }

    public function getTemplateName()
    {
        return "salas/nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 227,  409 => 226,  404 => 224,  398 => 222,  395 => 221,  389 => 219,  366 => 199,  362 => 198,  356 => 195,  348 => 190,  344 => 189,  338 => 186,  332 => 183,  328 => 182,  322 => 179,  314 => 174,  310 => 173,  304 => 170,  298 => 167,  294 => 166,  288 => 163,  280 => 158,  276 => 157,  270 => 154,  264 => 151,  260 => 150,  254 => 147,  246 => 142,  242 => 141,  236 => 138,  230 => 135,  226 => 134,  220 => 131,  212 => 126,  208 => 125,  202 => 122,  196 => 119,  192 => 118,  186 => 115,  178 => 110,  174 => 109,  168 => 106,  162 => 103,  158 => 102,  152 => 99,  144 => 94,  137 => 90,  132 => 89,  46 => 7,  40 => 5,  37 => 4,  31 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/nuevo.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/nuevo.html.twig");
    }
}
