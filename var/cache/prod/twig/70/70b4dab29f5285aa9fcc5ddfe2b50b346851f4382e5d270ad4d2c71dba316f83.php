<?php

/* banner/banner3.html.twig */
class __TwigTemplate_a5f54889f3a9f9233b3f23d047b551050c69ed9edf62a9f6e9ffe9b4dde3eb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'carrusel' => array($this, 'block_carrusel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('carrusel', $context, $blocks);
        // line 67
        echo "    ";
    }

    // line 2
    public function block_carrusel($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"quote-carousel\"> <!-- Begin Quote Carousel -->
    <div id=\"quoteCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#quoteCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#quoteCarousel\" data-slide-to=\"1\"></li>
        </ol>
        <!-- Begin Wrapper for slides -->
        <div class=\"carousel-inner fill\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg2.jpg"), "html", null, true);
        echo "'); background-color: #272727;\" data-top=\"background-position: 50% 0px;\" data-bottom=\"background-position: 20% -200px;\">
            <!-- Begin Item 1 -->
            <div class=\"item active\"> <!-- Item BG -->
                <div>
                    <div class=\"container\">
                        <div class=\"container quote-carousel-content center-vertically-right\">
                            <!-- Quote -->
                            <div class=\"col-sm-3 carousel-description text-right\">
                                <h4 class=\"heavy text-white no-margin ceo-name\">Johnathan Adams</h4>
                                <p class=\"company-name\">CEO of V Studios</p>
                            </div>
                            <div class=\"col-sm-1 carousel-description\">
                                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ceo.png"), "html", null, true);
        echo "\" class=\"img-responsive quote-img\" alt=\"CEO\">
                            </div>
                            <div class=\"col-sm-7 carousel-description text-left\">
                                You can design the most wonderful place in the world. But it takes people to make the dream a reality. The <span class=\"logo-general\">.creativ</span> team are these people.
                            </div>
                        </div><!-- /content container -->
                    </div><!-- /container -->
                </div><!-- /bg div -->
            </div><!-- /item -->
            <!-- End Item 1 -->
            <!-- Begin Item 2 -->
            <div class=\"item\"> <!-- Item BG -->
                <div>
                    <div class=\"container\">
                        <div class=\"container quote-carousel-content center-vertically-right\">
                            <!-- Quote -->
                            <div class=\"col-sm-1 carousel-description text-right\"></div>
                            <div class=\"col-sm-7 carousel-description text-right\">
                                You can design the most wonderful place in the world. But it takes people to make the dream a reality. The <span class=\"logo-general\">.creativ</span> team are these people.
                            </div>
                            <div class=\"col-sm-1 carousel-description\">
                                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ceo.png"), "html", null, true);
        echo "\" class=\"img-responsive quote-img\" alt=\"CEO\">
                            </div>
                            <div class=\"col-sm-2 carousel-description text-left\">
                                <h4 class=\"heavy text-white no-margin ceo-name\">Adams sdf</h4>
                                <p class=\"company-name\">CEOsdfdsf udios</p>
                            </div>                                                             
                        </div><!-- /content container -->
                    </div><!-- /container -->
                </div><!-- /bg div -->
            </div><!-- /item -->
            <!-- End Item 2 -->
        </div><!-- /carousel inner -->
        <!-- End Wrapper for slides -->
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#quoteCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"ion-ios7-arrow-left carousel-arrow-left\" aria-hidden=\"true\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#quoteCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"ion-ios7-arrow-right carousel-arrow-right\" aria-hidden=\"true\"></span>
        </a>
    </div><!-- /carousel -->
</div>   <!-- End Quote Carousel -->
";
    }

    public function getTemplateName()
    {
        return "banner/banner3.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 44,  54 => 23,  39 => 11,  29 => 3,  26 => 2,  22 => 67,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "banner/banner3.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/banner/banner3.html.twig");
    }
}
