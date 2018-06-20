<?php

/* default/message.html.twig */
class __TwigTemplate_8c40bc30f1ab55c32afff37460c8476fe953220c585129735b10a770da4f1389 extends Twig_Template
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
        echo "<div class=\"row mt20\">
    <div class=\"col-md-12 without-padding-right without-padding-left\">
        <div class=\"alert alert-";
        // line 3
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " alert-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-rw alert-dismissible\" role=\"alert\">
            ";
        // line 4
        if ((array_key_exists("noClose", $context) && ($context["noClose"] ?? null))) {
            // line 5
            echo "            ";
        } else {
            // line 6
            echo "                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
            ";
        }
        // line 8
        echo "            <b>";
        echo twig_escape_filter($this->env, ($context["message1"] ?? null), "html", null, true);
        echo ".</b> ";
        echo twig_escape_filter($this->env, ((array_key_exists("message2", $context)) ? (($context["message2"] ?? null)) : ("")), "html", null, true);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  34 => 6,  31 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/message.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/default/message.html.twig");
    }
}
