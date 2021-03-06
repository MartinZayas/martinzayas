<?php

/* default/pie.html.twig */
class __TwigTemplate_e4c3735cb02d0a75a5c216b3fec33c5610e4bf127b0840eeb1f4863c989230a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!-- Begin Footer -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <!--=== Links ===-->
            <div class=\"col-sm-3 mg25-xs\">
                <div class=\"heading-footer\"><h4>Atención al cliente</h4></div>
                <ul class=\"list-arrow-color\">
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ayuda");
        echo "\">Centro de ayuda</a></li>
                    <li><a href=\"#\">Ayuda para el comprador</a></li>
                    <li><a href=\"#\">Ayuda para el organizador</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comprarEntradas");
        echo "\">¿Cómo comprar entradas?</a></li>  
                </ul>
            </div>
            <!--=== Links ===-->
            <div class=\"col-sm-3 mg25-xs\">
                <div class=\"heading-footer\"><h4>¿Artista, local o sala de conciertos?</h4></div>
                <ul class=\"list-arrow-color\">
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarEvento");
        echo "\">Crea un concierto</a></li>
                    <li><a href=\"#\">¿Cómo organizar conciertos?</a></li>
                    <li><a href=\"#\">¿Cómo vender entradas?</a></li>
                    <li><a href=\"#\">¿Cómo promocionar mi local?</a></li>
                    <li><a href=\"#\">Nuestros precios</a></li>
                </ul>
            </div>
            <!--=== Links ===-->
            <div class=\"col-sm-3 mg25-xs\">
                <div class=\"heading-footer\"><h4>¿Eres un profesional?</h4></div>
                <ul class=\"list-arrow-color\">
                    <li><a href=\"#\">Anúnciate</a></li>
                    <li><a href=\"#\">Nuestros precios</a></li>
                </ul>
            </div>
            <!--=== Social ===-->
            <div class=\"col-sm-3 mg25-xs\">
                <div class=\"heading-footer\"><h4>Síguenos</h4></div>
                <a class=\"btn btn-social-icon btn-facebook btn-lg\" href=\"https://www.facebook.com/buscoconcierto\" target=\"_blank\">
                    <i class=\"fa fa-facebook\"></i>
                </a>
                <a class=\"btn btn-social-icon btn-twitter btn-lg\" href=\"https://twitter.com/buscoconcierto\" target=\"_blank\">
                    <i class=\"fa fa-twitter\"></i>
                </a>
                <a class=\"btn btn-social-icon btn-instagram btn-lg\" href=\"https://www.instagram.com/buscoconcierto\" target=\"_blank\">
                    <i class=\"fa fa-instagram\"></i>
                </a>
                <a class=\"btn btn-social-icon btn-youtube btn-lg\" href=\"https://www.youtube.com/channel/UCWdDeSndehejP6_-EU_8NRg\" target=\"_blank\">
                    <i class=\"fa fa-youtube\"></i>
                </a>
                <br/><br/>
            <!--=== Links ===-->
            <div class=\"heading-footer\"><h4>Sobre nosotros</h4></div>
                <ul class=\"list-arrow-color\">
                <li><a href=\"#contacto\">Contacto</a></li>
                <li><a href=\"#\">Blog</a></li>
                </ul>\t\t
            </div>
        </div>
        <!-- Copyright -->
        <div class=\"row\">
            <hr>
            <div class=\"col-sm-6 col-xs-12\">
                <p class=\"copyright\">© buscoconcierto.com 2017. Todos los derechos reservados.</p>
            </div>
            <div class=\"col-sm-6 col-xs-12\" style=\"text-align:right;\">
                <p class=\"footer-inline-menu\"><a href=\"\">Condiciones legales</a> / <a href=\"#\">Política de privacidad</a> / <a href=\"#\">Política de Cookies</a></p>
            </div>
        </div><!-- /row -->
    </div>
</footer><!-- Scroll To Top -->
            ";
    }

    public function getTemplateName()
    {
        return "default/pie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  39 => 14,  33 => 11,  29 => 10,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/pie.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/default/pie.html.twig");
    }
}
