<?php

/* default/subheader.html.twig */
class __TwigTemplate_42cb09158f52c44240ebb9e781e9ebfa6bfec17aa405a00fb87baee97be5754b extends Twig_Template
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
        // line 1
        echo "<div class=\"header-parallax fill\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["bgImage"] ?? null)), "html", null, true);
        echo "'); background-color: #272727;\" data-top-bottom=\"background-position: 50% 0px;\" data-bottom-top=\"background-position: 50% -200px;\">
    <div class=\"container\">
        <div class=\"row\">
            <!--=== Page Title ===-->
            <div class=\"col-xs-12\" style=\"text-align:center;\">
                <h2 class=\"text-white\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["subheaderTitle"] ?? null), "html", null, true);
        echo "</h2>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /page header -->";
    }

    public function getTemplateName()
    {
        return "default/subheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/subheader.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/default/subheader.html.twig");
    }
}
