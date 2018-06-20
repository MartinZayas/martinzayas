<?php

/* usuarios/login-registro.html.twig */
class __TwigTemplate_4335cecc6b2c4602650f3fd99bba8acae1ecf42438d4b67ccaf69807eb67b3bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/formatoBase.html.twig", "usuarios/login-registro.html.twig", 1);
        $this->blocks = array(
            'generalContent' => array($this, 'block_generalContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/formatoBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_generalContent($context, array $blocks = array())
    {
        echo " 
<div class=\"container\">
\t<div class=\"bg-shadow mt40 mb40 background-white pt20 pb20\" style=\"display: table\">
\t\t<!-- Begin Login -->
\t\t<div class=\"col-sm-6\">
\t\t\t<div class=\"panel no-margin panel-default\">
\t\t\t\t<div class=\"panel-heading\">Entra a tu cuenta</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form role=\"form\" action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("public_login_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><span class=\"ion-android-mail\" style=\"font-size:9px;\"></span></div>
\t\t\t\t\t\t\t\t<input name=\"_username\" class=\"form-control\" type=\"email\" placeholder=\"E-mail\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><span class=\"ion-ios7-locked\"></span></div>
\t\t\t\t\t\t\t\t<input name=\"_password\" type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Contraseña\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr class=\"mb20 mt15\">
\t\t\t\t\t\t<button type=\"submit\" name=\"_login\" class=\"btn btn-rw btn-primary\">Enviar</button> &nbsp;&nbsp;&nbsp;<small><a href=\"#\">¿Olvidaste tu contraseña?</a></small>
\t\t\t\t\t</form><!-- /form -->
\t\t\t\t</div><!-- /panel body -->
\t\t\t</div><!-- /panel -->
\t\t</div>

\t\t<!-- Begin Register -->
\t\t<div class=\"col-sm-6 mt30-xs\">
\t\t\t<div class=\"panel no-margin panel-default\">
\t\t\t\t<div class=\"panel-heading\">¿No tienes cuenta? Créate una gratis</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 53
        $this->loadTemplate("PublicBundle:Templates:registro.html.twig", "usuarios/login-registro.html.twig", 53)->display($context);
        // line 54
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "usuarios/login-registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 54,  68 => 53,  40 => 28,  28 => 20,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/login-registro.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/login-registro.html.twig");
    }
}
