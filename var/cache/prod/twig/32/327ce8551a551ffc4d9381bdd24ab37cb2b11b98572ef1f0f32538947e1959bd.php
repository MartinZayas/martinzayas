<?php

/* eventos/comprarEntradas.html.twig */
class __TwigTemplate_74881c7c4c3564e5c359efbdfd2df5b97829871aed224044967456b377dd7ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "eventos/comprarEntradas.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'steps' => array($this, 'block_steps'),
            'customContent' => array($this, 'block_customContent'),
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
        echo "Busco Concierto | Comprar Entradas";
    }

    // line 4
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("cssPersonalizados", $context, $blocks);
        echo "
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
    </style>
";
    }

    // line 29
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->loadTemplate("default/breadcrumbs.html.twig", "eventos/comprarEntradas.html.twig", 30)->display(array_merge($context, array("items" => array(0 => array("raiz" => false, "title" => "Entradas", "href" => "#"), 1 => array("raiz" => true, "title" => "Comprar")))));
    }

    // line 35
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->loadTemplate("default/subheader.html.twig", "eventos/comprarEntradas.html.twig", 36)->display(array_merge($context, array("bgImage" => (        // line 37
(isset($context["directorio_imagenes_public"]) ? $context["directorio_imagenes_public"] : null) . "backgrounds/bg3.jpg"), "subheaderTitle" => "Comprar Entradas")));
    }

    // line 41
    public function block_steps($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->loadTemplate("default/steps.html.twig", "eventos/comprarEntradas.html.twig", 42)->display(array_merge($context, array("titles" => array(0 => "Información General", 1 => "¿Dónde?", 2 => "¿Cuándo?", 3 => "Entradas"))));
    }

    // line 49
    public function block_customContent($context, array $blocks = array())
    {
        // line 50
        echo "    En construcción
        ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "eventos/comprarEntradas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 57,  108 => 56,  105 => 55,  100 => 50,  97 => 49,  92 => 42,  89 => 41,  85 => 37,  83 => 36,  80 => 35,  75 => 30,  72 => 29,  43 => 5,  40 => 4,  34 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/comprarEntradas.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/eventos/comprarEntradas.html.twig");
    }
}
