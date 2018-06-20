<?php

/* default/barraSuperior.html.twig */
class __TwigTemplate_72e16e686ecadeb59799cb6cfe18e17179a14955edf9a51c94da19fd2e93ab19 extends Twig_Template
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
        // line 3
        echo "<div class=\"top-bar\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- ¿Como funciona? -->
            <div class=\"col-sm-5 col-md-5 col-lg-5\">
                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                    <li style=\"border-left:none;\"><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
                    <li style=\"border-left:none;\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comprarEntradas");
        echo "\">¿Cómo comprar entradas?</a></li>
                    <li style=\"border-left:none;\"><a href=\"#contacto\">Contacto</a></li>
                </ul>
            </div>
            <!-- Social Buttons -->
            <div class=\"col-sm-7 col-md-7 col-lg-7 text-right\">
                <ul class=\"topbar-list list-inline\">
                    <li>
                        <a class=\"btn btn-social-icon btn-rw btn-primary btn-xs\" href=\"https://twitter.com/buscoconcierto\" target=\"_blank\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                        <a class=\"btn btn-social-icon btn-rw btn-primary btn-xs\" href=\"https://www.instagram.com/buscoconcierto\" target=\"_blank\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                        <a class=\"btn btn-social-icon btn-rw btn-primary btn-xs\" href=\"https://www.facebook.com/buscoconcierto\" target=\"_blank\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" data-target=\"#profecionales\">&Aacute;rea Profecionales</a>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            Regístrate<span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroEspectador");
        echo "\">Soy Espectador</a></li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" data-target=\"#login\">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div><!--/row -->
    </div>
</div> <!-- End Top Bar -->
<!-- Login -->
<div class=\"modal fade\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <form action=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\" role=\"form\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"loginLabel\">Iniciar Sesión</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    <input type=\"email\" name=\"_username\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Introduce tu email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Contraseña</label>
                    <input type=\"password\" name=\"_password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Introduce tu contraseña\">
                </div>
                <small><a href=\"#\">¿Olvidaste tu contraseña?</a></small>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" name=\"_login\" class=\"btn btn-rw btn-primary\" style=\"float:left\">Entrar</button>
                &nbsp;<small>¿No tienes una cuenta? <a data-toggle=\"modal\" data-target=\"#register\" href=\"#\">Regístrate</a></small><!--data-dismiss=\"modal\"-->
            </div>
            </form><!-- /form -->
        </div><!-- /modal content -->
    </div><!-- /modal dialog -->
</div><!-- /modal holder -->
<!-- End Login -->
";
    }

    public function getTemplateName()
    {
        return "default/barraSuperior.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 52,  64 => 37,  60 => 36,  31 => 10,  27 => 9,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/barraSuperior.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/default/barraSuperior.html.twig");
    }
}
