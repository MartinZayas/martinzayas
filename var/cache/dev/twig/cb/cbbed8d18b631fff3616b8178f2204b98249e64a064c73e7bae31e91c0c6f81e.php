<?php

/* mensajes/bandeja.html.twig */
class __TwigTemplate_9ea03197517802f73a87ecc1afc721ef33878b77705aadec13ce7630d3b03b61 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mensajes/bandeja.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mensajes/bandeja.html.twig"));

        // line 2
        echo "<!-- Chat box -->
<div class=\"box box-success\">
        <div class=\"box-header ui-sortable-handle\" style=\"cursor: move;\">
            <i class=\"fa fa-comments-o\"></i>
            <h3 class=\"box-title\">Chat</h3>
            <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                <div class=\"btn-group\" data-toggle=\"btn-toggle\">
                    <button type=\"button\" class=\"btn btn-default btn-sm active\">
                        <i class=\"fa fa-square text-green\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-default btn-sm\">
                        <i class=\"fa fa-square text-red\"></i>
                    </button>
                </div>
            </div>
        </div>
    <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; 
      width: auto; height: 250px;\">
        <div class=\"box-body chat\" id=\"chat-box\" 
            style=\"overflow: hidden; width: auto; height: 250px;\">
    <!-- chat item -->
            <div class=\"item\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user4-128x128.jpg"), "html", null, true);
        echo "\" alt=\"user image\" class=\"online\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\">
                            <i class=\"fa fa-clock-o\"></i> 2:15
                        </small>
                        Mike Doe
                    </a>
                I would like to meet you to discuss the latest news about
                the arrival of the new theme. They say it is going to be one the
                best themes on the market
                </p>
                <div class=\"attachment\">
                    <h4>Attachments:</h4>
                    <p class=\"filename\">
                    Theme-thumbnail-image.jpg
                    </p>
                    <div class=\"pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-sm btn-flat\">
                            Open
                        </button>
                    </div>
                </div><!-- /.attachment -->
            </div><!-- /.item -->
    <!-- chat item -->
            <div class=\"item\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"user image\" class=\"offline\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\">
                            <i class=\"fa fa-clock-o\"></i> 5:15
                        </small>
                        Alexander Pierce
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                </p>
            </div><!-- /.item -->
    <!-- chat item -->
            <div class=\"item\">
                <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" alt=\"user image\" class=\"offline\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\">
                            <i class=\"fa fa-clock-o\"></i> 5:30
                        </small>
                        Susan Doe
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                </p>
            </div> <!-- /.item -->
        </div>
        <div class=\"slimScrollBar\" style=\"background: rgb(0, 0, 0); width: 7px;
          position: absolute; top: 0px; opacity: 0.4; display: block; 
              border-radius: 7px; z-index: 99; right: 1px; height: 191.718px;\">
              
        </div>
        <div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; 
          position: absolute; top: 0px; display: none; border-radius: 7px; 
              background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;\">
              
        </div>
    </div><!-- /.chat -->
    <div class=\"box-footer\">
        <div class=\"input-group\">
            <input class=\"form-control\" placeholder=\"Escriba su mensaje...\">
            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-success\">
                    <i class=\"fa fa-plus\"></i>
                </button>
            </div>
        </div>
    </div>
</div><!-- /.box (chat box) -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mensajes/bandeja.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 65,  78 => 50,  49 => 24,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Bandeja de mensajes del chat #}
<!-- Chat box -->
<div class=\"box box-success\">
        <div class=\"box-header ui-sortable-handle\" style=\"cursor: move;\">
            <i class=\"fa fa-comments-o\"></i>
            <h3 class=\"box-title\">Chat</h3>
            <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                <div class=\"btn-group\" data-toggle=\"btn-toggle\">
                    <button type=\"button\" class=\"btn btn-default btn-sm active\">
                        <i class=\"fa fa-square text-green\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-default btn-sm\">
                        <i class=\"fa fa-square text-red\"></i>
                    </button>
                </div>
            </div>
        </div>
    <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; 
      width: auto; height: 250px;\">
        <div class=\"box-body chat\" id=\"chat-box\" 
            style=\"overflow: hidden; width: auto; height: 250px;\">
    <!-- chat item -->
            <div class=\"item\">
                <img src=\"{{ asset('bundles/app/img/user4-128x128.jpg') }}\" alt=\"user image\" class=\"online\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\">
                            <i class=\"fa fa-clock-o\"></i> 2:15
                        </small>
                        Mike Doe
                    </a>
                I would like to meet you to discuss the latest news about
                the arrival of the new theme. They say it is going to be one the
                best themes on the market
                </p>
                <div class=\"attachment\">
                    <h4>Attachments:</h4>
                    <p class=\"filename\">
                    Theme-thumbnail-image.jpg
                    </p>
                    <div class=\"pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-sm btn-flat\">
                            Open
                        </button>
                    </div>
                </div><!-- /.attachment -->
            </div><!-- /.item -->
    <!-- chat item -->
            <div class=\"item\">
                <img src=\"{{ asset('bundles/app/img/user3-128x128.jpg') }}\" alt=\"user image\" class=\"offline\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\">
                            <i class=\"fa fa-clock-o\"></i> 5:15
                        </small>
                        Alexander Pierce
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                </p>
            </div><!-- /.item -->
    <!-- chat item -->
            <div class=\"item\">
                <img src=\"{{ asset('bundles/app/img/user2-160x160.jpg') }}\" alt=\"user image\" class=\"offline\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\">
                            <i class=\"fa fa-clock-o\"></i> 5:30
                        </small>
                        Susan Doe
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                </p>
            </div> <!-- /.item -->
        </div>
        <div class=\"slimScrollBar\" style=\"background: rgb(0, 0, 0); width: 7px;
          position: absolute; top: 0px; opacity: 0.4; display: block; 
              border-radius: 7px; z-index: 99; right: 1px; height: 191.718px;\">
              
        </div>
        <div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; 
          position: absolute; top: 0px; display: none; border-radius: 7px; 
              background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;\">
              
        </div>
    </div><!-- /.chat -->
    <div class=\"box-footer\">
        <div class=\"input-group\">
            <input class=\"form-control\" placeholder=\"Escriba su mensaje...\">
            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-success\">
                    <i class=\"fa fa-plus\"></i>
                </button>
            </div>
        </div>
    </div>
</div><!-- /.box (chat box) -->", "mensajes/bandeja.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/mensajes/bandeja.html.twig");
    }
}
