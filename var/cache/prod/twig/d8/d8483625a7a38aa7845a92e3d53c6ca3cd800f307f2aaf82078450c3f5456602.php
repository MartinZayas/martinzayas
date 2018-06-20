<?php

/* seguridad/registrarse.html.twig */
class __TwigTemplate_ea90bc6d794d4fad4841a87b57356c69ec4ddb52aaf4d04c41b03f4bd93674a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "seguridad/registrarse.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Busca Conciertos";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <body class=\"hold-transition register-page\">
<div class=\"register-box\">
  <div class=\"register-logo\">
    <a href=\"../../index2.html\">
        <img src=\"img/logo.png\" width=\"200\" height=\"50\" alt=\"logo\"/>
    </a>
  </div>

  <div class=\"register-box-body\">
    <p class=\"login-box-msg\">Registrar un nuevo miembro</p>
    <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Full name\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Retype password\">
        <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\"> I agree to the <a href=\"#\">Terminos</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Registar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class=\"social-auth-links text-center\">
      <p>- O -</p>
        <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\">
           <i class=\"fa fa-facebook\"></i> Ingresar usando Facebook</a>
        <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\">
            <i class=\"fa fa-google-plus\"></i> Ingresar usando Google+</a>
    </div>
    <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"text-center\">Estoy registrado</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "</body>
";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/app/js/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
      \$(function () {
        \$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
";
    }

    // line 76
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
<style>
</style>
";
    }

    public function getTemplateName()
    {
        return "seguridad/registrarse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 78,  139 => 77,  136 => 76,  121 => 62,  117 => 61,  112 => 60,  109 => 59,  104 => 73,  102 => 59,  94 => 54,  52 => 15,  40 => 5,  37 => 4,  31 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "seguridad/registrarse.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/seguridad/registrarse.html.twig");
    }
}
