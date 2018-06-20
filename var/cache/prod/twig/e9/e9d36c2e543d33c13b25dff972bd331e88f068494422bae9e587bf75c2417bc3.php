<?php

/* eventos/carusel.html.twig */
class __TwigTemplate_32f16a98eca445867585875867fefded090e18081d37f076610c2cf0058e0e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Eventos' => array($this, 'block_Eventos'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('Eventos', $context, $blocks);
    }

    public function block_Eventos($context, array $blocks = array())
    {
        // line 3
        echo "<!-- Carusel de eventos -->
    <div class=\"container mt40 mb40 pt20\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"heading mb30\">
                    <h4><span class=\"ion-plus mr15\"></span>Conciertos populares</h4>
                    <div class=\"owl-controls\">
                        <div id=\"customNav\" class=\"owl-nav\"></div>
                    </div>
                </div>
                <div id=\"owl-carousel-thumb\" class=\"owl-carousel carousel-home\">
                    <div class=\"thumbnail\"><!-- Item 1 -->
                        <div class=\"view image-hover-1 no-margin\">
                            <!-- Blog Thumb -->
                            <div class=\"product-container\">
                                <img class=\"img-responsive full-width\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" alt=\"...\">
                                <span class=\"badge home-badge\">
                                    <span class=\"label label-default\">24</span> entradas restantes
                                </span>
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                        <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                    </a>
                                    <a href=\"#\" class=\"info\">
                                        <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                    </a>
                                </div><!-- /image hover content -->
                            </div><!-- /mask-->
                        </div>
                        <div class=\"shop-product content-box-shadow\">
                            <a href=\"\"><h2>Concierto</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-5\">
                                    <span class=\"fecha-container\"><i class=\"fa fa-calendar\"></i> 12 Feb</span>
                                </div>
                                <div class=\"col-md-7\" style=\"text-align:left;\">
                                    <span class=\"label label-default shop-product-price\"> 179.99 €</span>
                                </div>
                            </div>
                            <div class=\"row mt10\">
                                <div class=\"col-md-12\">
                                    <a class=\"location-container pull-left\" href=\"#\"><i class=\"fa fa-map-marker\"></i>
                                        Barcelona
                                    </a>
                                </div>
                            </div>
                            <div class=\"counter\" data-date=\"2016-11-14 00:00:00\"></div>
                            <a href=\"\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                Comprar Entradas
                            </a>
                        </div>
                    </div><!-- Fin Item 1 -->
                    <div class=\"thumbnail\">
                        <div class=\"view image-hover-1 no-margin\">
                            <!-- Blog Thumb -->
                            <div class=\"product-container\">
                                <img class=\"img-responsive full-width\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" alt=\"...\">
                                <span class=\"badge home-badge\">
                                        <span class=\"label label-danger\">10</span> entradas restantes
                                </span>
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                        <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                    </a>
                                    <a href=\"#\" class=\"info\">
                                        <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                    </a>
                                </div><!-- /image hover content -->
                            </div><!-- /mask-->
                        </div>
                        <div class=\"shop-product content-box-shadow\">
                            <a href=\"#\"><h2>Viña del Mar</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-5\">
                                    <span class=\"fecha-container\">
                                        <i class=\"fa fa-calendar\"></i> 12 Feb
                                    </span>
                                </div>
                                <div class=\"col-md-7\" style=\"text-align:left;\">
                                    <span class=\"label label-default shop-product-price\"> 20.00 €</span>
                                </div>
                            </div>
                            <div class=\"row mt10\">
                                <div class=\"col-md-12\">
                                    <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                        Chile
                                    </span>
                                </div>
                            </div>
                            <div class=\"counter\" data-date=\"2016-11-14 00:00:00\"></div>
                            <a href=\"#\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                Comprar Entradas
                            </a>
                        </div>
                    </div>
                    <div class=\"thumbnail\">
                        <div class=\"view image-hover-1 no-margin\">
                            <!-- Blog Thumb -->
                            <div class=\"product-container\">
                                <img class=\"img-responsive full-width\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento6.png"), "html", null, true);
        echo "\" alt=\"...\">
                                <span class=\"badge home-badge\">
                                    <span class=\"label label-default\">70</span> entradas restantes
                                </span>
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                        <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                    </a>
                                    <a href=\"\" class=\"info\">
                                        <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                    </a>
                                </div><!-- /image hover content -->
                            </div><!-- /mask-->
                        </div>
                        <div class=\"shop-product content-box-shadow\">
                            <a href=\"#\"><h2>Winter Dress</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-5\">
                                    <span class=\"fecha-container\"><i class=\"fa fa-calendar\"></i> 14 Abr</span>
                                </div>
                                <div class=\"col-md-7\" style=\"text-align:left;\">
                                    <span class=\"label label-default shop-product-price\"> 17.99 €</span>
                                </div>
                            </div>
                            <div class=\"row mt10\">
                                <div class=\"col-md-12\">
                                    <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                        Palau Sant Jordi
                                    </span>
                                </div>
                            </div>
                            <div class=\"counter\" data-date=\"2016-11-14 00:00:00\"></div>
                            <a href=\"#\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                Comprar Entradas
                            </a>
                        </div>
                    </div>

                    <div class=\"thumbnail\">
                        <div class=\"view image-hover-1 no-margin\">
                            <!-- Blog Thumb -->
                            <div class=\"product-container\">
                                <img class=\"img-responsive full-width\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento7.png"), "html", null, true);
        echo "\" alt=\"...\">
                                <span class=\"badge home-badge\">
                                    <span class=\"label label-danger\">5</span> entradas restantes
                                </span>
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento7.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                        <div class=\"image-icon-holder\">
                                            <span class=\"ion-ios7-search image-icons\"></span>
                                        </div>
                                    </a>
                                    <a href=\"\" class=\"info\">
                                        <div class=\"image-icon-holder\">
                                            <span class=\"ion-link image-icons\"></span>
                                        </div>
                                    </a>
                                </div><!-- /image hover content -->
                            </div><!-- /mask-->
                        </div>
                        <div class=\"shop-product content-box-shadow\">
                            <a href=\"\"><h2>Men's Lumberjack</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-5\">
                                    <span class=\"fecha-container\"><i class=\"fa fa-calendar\"></i> 14 Abr</span>
                                </div>
                                <div class=\"col-md-7\" style=\"text-align:left;\">
                                    <span class=\"label label-default shop-product-price\"> 15.99 €</span>
                                </div>
                            </div>
                            <div class=\"row mt10\">
                                <div class=\"col-md-12\">
                                    <span class=\"location-container pull-left\">
                                        <i class=\"fa fa-map-marker\"></i>
                                        Palau Sant Jordi
                                    </span>
                                </div>
                            </div>
                            <div class=\"counter\" data-date=\"2016-11-14 00:00:00\"></div>
                            <a href=\"\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                Comprar Entradas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "eventos/carusel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 161,  199 => 153,  159 => 116,  148 => 108,  107 => 70,  96 => 62,  57 => 26,  46 => 18,  29 => 3,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/carusel.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/carusel.html.twig");
    }
}
