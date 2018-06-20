<?php

/* base.html.twig */
class __TwigTemplate_1b04c3fadbaa86bf953659627930dc592848913b342e65824e61bc317d186386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"";
        // line 19
        $this->displayBlock('classBody', $context, $blocks);
        echo "\">
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </body>    
</html>
";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Busco Concierto";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Fuentes -->
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Iconos -->
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Royal Preloader CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/royal_preloader.css"), "html", null, true);
        echo "\">
    ";
        // line 15
        $this->displayBlock('cssPersonalizados', $context, $blocks);
        // line 16
        echo "        ";
    }

    // line 15
    public function block_cssPersonalizados($context, array $blocks = array())
    {
    }

    // line 19
    public function block_classBody($context, array $blocks = array())
    {
        echo " ";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "    <!-- Javascript Files -->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  118 => 26,  115 => 25,  112 => 24,  108 => 21,  105 => 20,  99 => 19,  94 => 15,  90 => 16,  88 => 15,  84 => 14,  79 => 12,  74 => 10,  69 => 8,  66 => 7,  63 => 6,  57 => 5,  53 => 24,  49 => 22,  47 => 20,  43 => 19,  37 => 17,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/base.html.twig");
    }
}
