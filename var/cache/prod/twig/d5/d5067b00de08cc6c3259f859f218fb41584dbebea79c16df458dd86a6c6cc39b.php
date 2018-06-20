<?php

/* ayuda/comoFunciona2.html.twig */
class __TwigTemplate_20994a9dfc3740f5ae57a12efdd2bf492cbae5d0a093c8e319fc1ebe24a31c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "ayuda/comoFunciona2.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'steps' => array($this, 'block_steps'),
            'customContent' => array($this, 'block_customContent'),
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
        echo "Busco Concierto | Como Funciona";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    <style>
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
        .btn-facebook, .btn-twitter, .btn-instagram{
            color: #ffffff;
        }
        .btn-youtube{
            color: #ffffff;
            background-color: red;
        }
        .boton{
            height: 42px;
        }
        a{
            text-decoration: none;
        }
    </style>
";
    }

    // line 41
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 42
        echo "    <div class=\"background-main pt60 pb60 fill text-center\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/bg3.jpg"), "html", null, true);
        echo "'); background-color: #272727;\" data-top-bottom=\"background-position: 50% 0px;\" data-bottom-top=\"background-position: 50% -200px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\" style=\"text-align:center;\">
                <h1 style=\"color: white\">¿QU&Eacute; PERF&Iacute;L DE USUARIO ERES?</h1>
                <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\" class=\"btn btn-rw btn-clear mt10\">
                    Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                </a>                
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /page header -->
";
    }

    // line 55
    public function block_steps($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "ayuda/comoFunciona2.html.twig", 56)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 63
    public function block_customContent($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $this->loadTemplate("ayuda/comoFuncionaUsuario.html.twig", "ayuda/comoFunciona2.html.twig", 64)->display($context);
    }

    public function getTemplateName()
    {
        return "ayuda/comoFunciona2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 64,  106 => 63,  101 => 56,  98 => 55,  86 => 47,  77 => 42,  74 => 41,  41 => 5,  38 => 4,  32 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ayuda/comoFunciona2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/ayuda/comoFunciona2.html.twig");
    }
}
