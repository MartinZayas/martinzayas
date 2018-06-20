<?php

/* banner/banner.html.twig */
class __TwigTemplate_d92263614ca4a480e12bfa17699e25e8c70c98bc82cce27415c23852dfd686af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Banner' => array($this, 'block_Banner'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('Banner', $context, $blocks);
    }

    public function block_Banner($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Carousel ================================================== -->
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
      <!-- Indicators -->
      <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
            <img class=\"first-slide\" src= \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/banner/banner1.png"), "html", null, true);
        echo "\" alt= \"Banner1\" height=\"800\" /> 
          <div class=\"container\">
            <div class=\"carousel-caption\"
                 data-x=\"center\"
                 data-y=\"5\"
                 data-speed=\"600\"
                 data-start=\"500\"
                 data-end=\"11500\"
                 data-endspeed=\"600\"
                 data-transform_idle=\"o:1;\"
                 data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"
                 data-transform_out=\"y:50px;opacity:0;s:500;e:Power2.easeInOut;\"
                 style=\"padding: 0px 3px; 
                 visibility: visible; 
                 border-bottom:2px solid rgba(255, 255, 255, 0.24); 
                 color:#fff; 
                 font-family: 'Raleway' sans-serif; 
                 text-shadow: 0 0 15px #000, 0 0 5px #000\">
              <h1>¿Buscas dónde actuar? ¿Buscas artistas para tu local?.</h1>
              <p>Regístrate y comienza a montar tu gira de conciertos, ¡es GRATIS!<br>
                <a data-toggle=\"modal\" data-target=\"#register\" href=\"#\" class=\"btn btn-rw btn-clear mt10\">
                    REGÍSTRATE &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                </a>
              </p><br><br>
            </div>
          </div>
        </div>
        <div class=\"item\">
            <img class=\"second-slide\" src= \"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/banner/banner2.jpg"), "html", null, true);
        echo "\" alt= \"Banner2\" height=\"800\" /> 
          <div class=\"container\">
            <div class=\"carousel-caption\">
                <h1>Conectamos música,<span class=\"heavy\"> Únete a la Comunidad</span></h1>
                <p>Descubre nuevos <b>eventos</b> o crea el tuyo propio, contrata y se contratado, conoce nuevos <b>artistas<br/> y locales de conciertos</b>, vende y compra tus <b>entradas</b>.<br>
                    <a data-toggle=\"modal\" data-target=\"#register\" href=\"#\" class=\"btn btn-rw btn-clear mt10\">
                        REGÍSTRATE &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                    </a>
                </p><br>
            </div>
          </div>
        </div>
        <div class=\"item\">
            <img class=\"third-slide\" src= \"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/banner/banner3.jpg"), "html", null, true);
        echo "\" alt= \"Banner3\" height=\"800\" /> 
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Te ayudamos a hacer crecer tu carrera artística.</h1>
              <span class=\"fa fa-check\"></span>
              Monta tu <strong>gira de conciertos</strong> en unos clicks<br>
              <span class=\"fa fa-check\"></span>
              Promociona tus <strong>eventos</strong> y hazte oír<br>
              <span class=\"fa fa-check\"></span>
              Vende y cobra tus <strong>entradas</strong> de forma segura<br>
              <strong>
                <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"btn btn-rw btn-clear mt10\">
                    Saber más &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                </a>
              </strong><br><br><br>
            </div>
          </div>
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Anterior</span>
      </a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Siguiente</span>
      </a>
    </div> <!-- /.carousel -->
    <!-- End Slider Revolution -->
";
    }

    public function getTemplateName()
    {
        return "banner/banner.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 65,  85 => 54,  69 => 41,  38 => 13,  26 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "banner/banner.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/banner/banner.html.twig");
    }
}
