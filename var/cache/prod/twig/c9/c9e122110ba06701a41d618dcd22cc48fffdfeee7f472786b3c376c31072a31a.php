<?php

/* usuarios/menuVertical.html.twig */
class __TwigTemplate_0b2fc8550edad0e606a9ec966421d73e8359db2585c6b3d37990fbe1d8311d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'MenuVertical' => array($this, 'block_MenuVertical'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('MenuVertical', $context, $blocks);
    }

    public function block_MenuVertical($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel (optional) -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"Imagen de usuario\">
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- Para el buscardor (Optional) -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Buscar...\">
                  <span class=\"input-group-btn\">
                    <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.Para el buscardor -->
          <!-- Menu vertical -->
          <ul class=\"sidebar-menu\">
            <li class=\"active\">
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-ticket\"></i>
                    <span>Entradas</span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-heart\"></i>
                    <span>Favoritos</span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-bullhorn\"></i>
                    <span>Eventos</span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-link\"></i>
                    <span>Artistas</span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-bell\"></i>
                    <span>Notificaciones</span>
                </a>
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
    <!-- /.sidebar -->
    </aside> 
";
    }

    public function getTemplateName()
    {
        return "usuarios/menuVertical.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  26 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuarios/menuVertical.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/usuarios/menuVertical.html.twig");
    }
}
