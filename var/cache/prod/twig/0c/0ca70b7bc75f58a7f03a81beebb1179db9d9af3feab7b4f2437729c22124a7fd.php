<?php

/* administracion/pie.html.twig */
class __TwigTemplate_b304882baff31653e0b72ee2966c077d425a1c99586b65695beb7246a14d14e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Pie' => array($this, 'block_Pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('Pie', $context, $blocks);
    }

    public function block_Pie($context, array $blocks = array())
    {
        echo "    
<!-- Main Footer -->
    <footer class=\"main-footer\">
      <!-- To the right -->
      <div class=\"pull-right hidden-xs\">
          <strong>Version</strong> 1.0
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2018 <a href=\"#\">BUSCOCONCIERTO.com</a>.</strong> All rights reserved.
    </footer>
";
    }

    public function getTemplateName()
    {
        return "administracion/pie.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/pie.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/administracion/pie.html.twig");
    }
}
