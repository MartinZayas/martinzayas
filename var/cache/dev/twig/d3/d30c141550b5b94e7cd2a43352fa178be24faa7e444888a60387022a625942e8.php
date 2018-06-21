<?php

/* default/subheader.html.twig */
class __TwigTemplate_6b9dd6d5383a3cb81a9c7a3a1acfb496970208278a69060385f2be5665af9dca extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/subheader.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/subheader.html.twig"));

        // line 1
        echo "<div class=\"header-parallax fill\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["bgImage"]) ? $context["bgImage"] : $this->getContext($context, "bgImage"))), "html", null, true);
        echo "'); background-color: #272727;\" data-top-bottom=\"background-position: 50% 0px;\" data-bottom-top=\"background-position: 50% -200px;\">
    <div class=\"container\">
        <div class=\"row\">
            <!--=== Page Title ===-->
            <div class=\"col-xs-12\" style=\"text-align:center;\">
                <h2 class=\"text-white\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["subheaderTitle"]) ? $context["subheaderTitle"] : $this->getContext($context, "subheaderTitle")), "html", null, true);
        echo "</h2>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /page header -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  34 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header-parallax fill\" style=\"background-image:url('{{ asset(bgImage) }}'); background-color: #272727;\" data-top-bottom=\"background-position: 50% 0px;\" data-bottom-top=\"background-position: 50% -200px;\">
    <div class=\"container\">
        <div class=\"row\">
            <!--=== Page Title ===-->
            <div class=\"col-xs-12\" style=\"text-align:center;\">
                <h2 class=\"text-white\">{{ subheaderTitle }}</h2>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /page header -->", "default/subheader.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/default/subheader.html.twig");
    }
}
