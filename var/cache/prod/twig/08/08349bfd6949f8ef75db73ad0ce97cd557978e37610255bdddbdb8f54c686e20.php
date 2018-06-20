<?php

/* administracion/menuVertical.html.twig */
class __TwigTemplate_76c61962293cc1af31a96950031be6cf08311a82837e0630f7110835b67dd607 extends Twig_Template
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
            <li class=\"header\">TITULO</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Link</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>OTRO Link</span></a></li>
            <li class=\"treeview\">
              <a href=\"#\"><i class=\"fa fa-link\"></i> <span>MULTI NIVEL</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\">Link in level 2</a></li>
                <li><a href=\"#\">Link in level 2</a></li>
              </ul>
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
        return "administracion/menuVertical.html.twig";
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
        return new Twig_Source("", "administracion/menuVertical.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/agenciaeventos/app/Resources/views/administracion/menuVertical.html.twig");
    }
}
