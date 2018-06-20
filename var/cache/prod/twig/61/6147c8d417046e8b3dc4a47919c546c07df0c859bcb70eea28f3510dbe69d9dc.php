<?php

/* ayuda/contacto.html.twig */
class __TwigTemplate_f6a43ae894b4a43b2b68de5f543c35892166a4622775148f8b857c9879cee7ea extends Twig_Template
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
        // line 2
        $this->displayBlock('contacto', $context, $blocks);
        // line 29
        echo "    ";
    }

    // line 2
    public function block_contacto($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "ayuda/contacto.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 29,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ayuda/contacto.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/ayuda/contacto.html.twig");
    }
}
