<?php

/* calendario/calendario3.html.twig */
class __TwigTemplate_3388f29246a786e05398f2d2d1b5b83f69f6d1d6947686a668bb83c9e73d6da7 extends Twig_Template
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
        echo "<div class=\"row panelSombra background-white ml5 mb10 pb10\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white\">  <!--The calendar -->
        <div id=\"calendar\" style=\"width: 100%\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "calendario/calendario3.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "calendario/calendario3.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/calendario/calendario3.html.twig");
    }
}
