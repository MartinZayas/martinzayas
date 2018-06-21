<?php

/* ayuda/contacto.html.twig */
class __TwigTemplate_3ce73532202340d5edafbab7a462128f720ad074eeebbd805778b8ca2067137f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contacto' => array($this, 'block_contacto'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ayuda/contacto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ayuda/contacto.html.twig"));

        // line 2
        $this->displayBlock('contacto', $context, $blocks);
        // line 29
        echo "    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_contacto($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contacto"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contacto"));

        // line 3
        echo "    <section id=\"contacto\" class=\"background-white pt40 pb40\"> <!-- Begin Contact -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading mb20\"><h4><span class=\"ion-android-mail mr15\"></span>¿Tienes algo que contarnos?</h4></div>
                    <p class=\"mb20\"><b>Te escuchamos</b></p>
                    <form role=\"form\">
                        <div class=\"form-group\">
                            <input type=\"text\" placeholder=\"Nombre\" class=\"form-control\" id=\"InputName\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" placeholder=\"Email\" class=\"form-control\" id=\"InputEmail1\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" placeholder=\"Asunto\" class=\"form-control\" id=\"InputAsunto\">
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" placeholder=\"Mensaje\" id=\"InputMessage\" rows=\"7\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-rw btn-primary\">Enviar</button>
                    </form>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- End Contact -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ayuda/contacto.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  38 => 2,  28 => 29,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# plantilla de contacto #}
{% block contacto %}
    <section id=\"contacto\" class=\"background-white pt40 pb40\"> <!-- Begin Contact -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading mb20\"><h4><span class=\"ion-android-mail mr15\"></span>¿Tienes algo que contarnos?</h4></div>
                    <p class=\"mb20\"><b>Te escuchamos</b></p>
                    <form role=\"form\">
                        <div class=\"form-group\">
                            <input type=\"text\" placeholder=\"Nombre\" class=\"form-control\" id=\"InputName\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" placeholder=\"Email\" class=\"form-control\" id=\"InputEmail1\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" placeholder=\"Asunto\" class=\"form-control\" id=\"InputAsunto\">
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" placeholder=\"Mensaje\" id=\"InputMessage\" rows=\"7\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-rw btn-primary\">Enviar</button>
                    </form>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- End Contact -->
{% endblock %}
    ", "ayuda/contacto.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/ayuda/contacto.html.twig");
    }
}
