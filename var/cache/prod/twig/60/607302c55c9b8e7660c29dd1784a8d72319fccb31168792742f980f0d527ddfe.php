<?php

/* colaboradores/aliados.html.twig */
class __TwigTemplate_3138bf8a4434eacc7716a2e75e93a52fe2654039369b70a8ccaab033e7e96730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Colaboradores' => array($this, 'block_Colaboradores'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('Colaboradores', $context, $blocks);
        // line 41
        echo "    ";
    }

    // line 2
    public function block_Colaboradores($context, array $blocks = array())
    {
        // line 3
        echo "<section id=\"colaboradores\" class=\"pt40 mb40\"><!-- Begin Recent Work + Clients -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"heading mb30\">
                    <h4><span class=\"ion-android-social-user mr15\"></span>Colaboradores</h4>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- Client 1 -->
            <div class=\"col-sm-2 col-xs-4 mb30-xs\" data-sr=\"enter left\" >
                <a href=\"#\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logos/boomerang.png"), "html", null, true);
        echo "\" class=\"img-responsive clients-img\" alt=\"Client 1\"></a>
            </div>
            <!-- Client 2 -->
            <div class=\"col-sm-2 col-xs-4 mb30-xs\" data-sr=\"enter left\">
                <a href=\"#\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logos/backlight.png"), "html", null, true);
        echo "\" class=\"img-responsive clients-img\" alt=\"Client 2\"></a>
            </div>
            <!-- Client 3 -->
            <div class=\"col-sm-2 col-xs-4 mb30-xs\" data-sr=\"enter left\">
                <a href=\"#\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logos/equi.png"), "html", null, true);
        echo "\" class=\"img-responsive clients-img\" alt=\"Client 3\"></a>
            </div>
            <!-- Client 4 -->
            <div class=\"col-sm-2 col-xs-4\" data-sr=\"enter left\">
                <a href=\"#\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logos/ome.png"), "html", null, true);
        echo "\" class=\"img-responsive clients-img\" alt=\"Client 4\"></a>
            </div>
            <!-- Client 5 -->
            <div class=\"col-sm-2 col-xs-4\" data-sr=\"enter left\">
                <a href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logos/euro.png"), "html", null, true);
        echo "\" class=\"img-responsive clients-img\" alt=\"Client 5\"></a>
            </div>
            <!-- Client 6 -->
            <div class=\"col-sm-2 col-xs-4\" data-sr=\"enter left\">
                <a href=\"#\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logos/micro.png"), "html", null, true);
        echo "\" class=\"img-responsive clients-img\" alt=\"Client 6\"></a>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- End Recent Work + Clients -->
";
    }

    public function getTemplateName()
    {
        return "colaboradores/aliados.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 35,  71 => 31,  64 => 27,  57 => 23,  50 => 19,  43 => 15,  29 => 3,  26 => 2,  22 => 41,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "colaboradores/aliados.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/colaboradores/aliados.html.twig");
    }
}
