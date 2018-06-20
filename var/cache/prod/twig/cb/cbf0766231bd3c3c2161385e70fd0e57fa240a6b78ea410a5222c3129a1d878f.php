<?php

/* artistas/presentaciones3.html.twig */
class __TwigTemplate_161487de6dfa147eadb54323ea6c7fd80254ceb91f8f795abf1b796529fae452 extends Twig_Template
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
        echo "<div class=\"container\">\t\t
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"heading mt10 mb30\">
                <h4><span class=\"ion-android-image mr15\"></span>Presentaciones</h4>
                <div class=\"owl-controls\">
                    <div id=\"customNav\" class=\"owl-nav\">
                        <div class=\"owl-prev\" style=\"\"><span>&lt;</span>
                        </div>
                        <div class=\"owl-next\" style=\"\"><span>&gt;</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"owl-carousel-thumb\" class=\"owl-carousel carousel-home\">
                <div class=\"thumbnail\">
                    <div class=\"view image-hover-1 no-margin\">
                        <div class=\"product-container\">
                            <img class=\"img-responsive full-width\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/public/img/shop/product2.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                            <a href=\"#\"><h4 class=\"text-white\">M&eacute;xico</h4>
                            </a>
                        </div>
                        <div class=\"mask\"><!-- Mask -->
                            <div class=\"image-hover-content\">
                                <!-- Zoom + Blog Link -->
                                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/public/img/shop/product2.jpg"), "html", null, true);
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
                    <div class=\"shop-product content-box-shadow\"><!-- Pie del recuadro -->
                        
                    </div><!-- Fin Pie del recuadro -->
                </div><!-- Fin Item 1 -->
                
            </div>
        </div>
    </div>
</div><!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "artistas/presentaciones3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 27,  39 => 20,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artistas/presentaciones3.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/artistas/presentaciones3.html.twig");
    }
}
