<?php

/* eventos/conciertos.html.twig */
class __TwigTemplate_34c3f47805da2d18336dee32d257450c58787e51b3e5e6edee73eed79023fe25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'conciertos' => array($this, 'block_conciertos'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('conciertos', $context, $blocks);
    }

    public function block_conciertos($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container mt40 mb40 pt20\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"heading mb30\">
                    <h4><span class=\"ion-plus mr15\"></span>Conciertos populares</h4>
                    <div class=\"owl-controls\">
                        <div id=\"customNav\" class=\"owl-nav\"></div>
                    </div>
                </div>
                <div id=\"owl-carousel-thumb\" class=\"owl-carousel carousel-home\">
                    <div class=\"thumbnail\">
                        <div class=\"view image-hover-1 no-margin\"> <!-- Blog Thumb -->
                            <div class=\"product-container\">
                                <img class=\"img-responsive full-width\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tienda/product2.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                <span class=\"badge home-badge\">
                                    <span class=\"label label-default\">24</span> entradas restantes
                                </span>
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tienda/product2.jpg"), "html", null, true);
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
                        <div class=\"shop-product content-box-shadow\">
                            <a href=\"\"><h2>Summer Sundress</h2></a>
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
                                        Palau Sant Jordi
                                    </a>
                                    <!-- <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                        Palau Sant Jordi
                                    </span>\t -->
                                </div>
                            </div>
                            <div class=\"counter\" data-date=\"2016-11-14 00:00:00\">
                                <div class=\"time_circles\">
                                    <canvas width=\"181\" height=\"45\"></canvas>
                                    <div class=\"textDiv_Days\" style=\"top: 16px; left: 0px; width: 45.25px;\">
                                        <h4 style=\"font-size: 3px;\">Days</h4><span style=\"font-size: 13px;\">491</span></div><div class=\"textDiv_Hours\" style=\"top: 16px; left: 45px; width: 45.25px;\"><h4 style=\"font-size: 3px;\">Hours</h4><span style=\"font-size: 13px;\">11</span></div><div class=\"textDiv_Minutes\" style=\"top: 16px; left: 91px; width: 45.25px;\"><h4 style=\"font-size: 3px;\">Minutes</h4><span style=\"font-size: 13px;\">13</span></div><div class=\"textDiv_Seconds\" style=\"top: 16px; left: 136px; width: 45.25px;\"><h4 style=\"font-size: 3px;\">Seconds</h4><span style=\"font-size: 13px;\">11</span></div></div>
                            </div>
                            <a href=\"\" class=\"btn btn-bordered btn-custom-orange btn-lg\" style=\"width:100%;\">
                                Comprar Entradas
                            </a>
                        </div>
                    </div>
                    <div class=\"thumbnail\">
                        <div class=\"view image-hover-1 no-margin\"> <!-- Blog Thumb -->
                            <div class=\"product-container\">
                                <img class=\"img-responsive full-width\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tienda/product3.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                <span class=\"badge home-badge\">
                                    <span class=\"label label-danger\">10</span> entradas restantes
                                </span>
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\"> <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tienda/product3.jpg"), "html", null, true);
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
                            <a href=\"#\"><h2>Men's Blazer</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-5\">
                                    <span class=\"fecha-container\"><i class=\"fa fa-calendar\"></i> 12 Feb</span>
                                </div>
                                <div class=\"col-md-7\" style=\"text-align:left;\">
                                    <span class=\"label label-default shop-product-price\"> 20.00 €</span>
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
                        <div class=\"view image-hover-1 no-margin\"> <!-- Blog Thumb -->
                            <div class=\"product-container\">
                                <img class=\"img-responsive full-width\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tienda/product6.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                <span class=\"badge home-badge\">
                                    <span class=\"label label-default\">70</span> entradas restantes
                                </span>
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tienda/product6.jpg"), "html", null, true);
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
                        <div class=\"view image-hover-1 no-margin\"> <!-- Blog Thumb -->
                            <div class=\"product-container\">
                                <img class=\"img-responsive full-width\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tienda/product7.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                <span class=\"badge home-badge\">
                                    <span class=\"label label-danger\">5</span> entradas restantes
                                </span>
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\"><!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tienda/product7.jpg"), "html", null, true);
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
                                    <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
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
        return "eventos/conciertos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 163,  199 => 156,  161 => 121,  150 => 113,  112 => 78,  102 => 71,  52 => 24,  41 => 16,  26 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/conciertos.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/conciertos.html.twig");
    }
}
