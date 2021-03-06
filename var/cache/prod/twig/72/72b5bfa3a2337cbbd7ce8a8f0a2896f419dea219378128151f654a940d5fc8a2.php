<?php

/* artistas/perfil.html.twig */
class __TwigTemplate_5ef3b96fcf91eb1182ec95cfb62aeedb88c079676be118afa4d3ff8aa4907d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "artistas/perfil.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'BarraSuperior' => array($this, 'block_BarraSuperior'),
            'headerParallax' => array($this, 'block_headerParallax'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
            'customScripts' => array($this, 'block_customScripts'),
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
        echo "Busco Concierto | Perfil de Artistas ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <!-- Royal Preloader CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/royal_preloader.css"), "html", null, true);
        echo "\">
    <!-- jQuery Files -->
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap select -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <!-- Stylesheets -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery.snippet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/waitMe/waitMe.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Icon Fonts -->
    <link href='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <!-- Magnific Popup -->
    <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/magnific-popup.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    ";
        // line 28
        $this->displayBlock('cssPersonalizados', $context, $blocks);
        // line 801
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 804
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 28
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 29
        echo "    <!-- Fuentes y estilos -->
    <!--link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/estilos.css"), "html", null, true);
        echo "\"--> 
    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/layers.css"), "html", null, true);
        echo "\">

    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">

    <!-- CountDown Styles -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/TimeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        .btn-custom-orange{
            color: #ffffff;
            background-color: #FF8000;
            border-color: #FF8000;
        }

        .btn-custom-orange:hover{
            color: #ffffff;
            background-color: #dc7003;
            border-color: #dc7003;\t
        }
        
        .btn-youtube{
            color: #ffffff;
            background-color: red;
        }
        .boton{
            height: 42px;
        }
        .precio{
            font-family: Helvetica;
            font-size: 20px;
        } 
        .heading2 h4{
            margin:0 0 -2px 0;
            padding-bottom:15px;
            display:inline-block;
        }
        .heading2 {
            display:block;
            margin:0 0 20px 0;
            border-bottom:1px solid #888888; 
            font-size:12px;
        }
        .icono{
            color: red;
        }
/**************************** Menu ********************************************/        
        .menu{
            background-color: #ffffff;
            color: #272727;
            font-family: Helvetica, Open Sans;
            font-size: 12px;
            font-style: italic;
            text-align: center;
        }
        .menu:hover{
            background-color: #EBEBEB;
        }
        li.menu a{
            color: #272727;
        }
        .sombraMenu{
            margin-left: 0px;
            margin-right: 0px;
            background-color:#fff !important;
            box-shadow: 0px 5px 9px #888888;
        }
        .proponerConcierto{
            margin-top: 8px;
            margin-left: 5px;
            padding-top: 6px !important;
            padding-bottom: 6px !important;
        }
        .top-bar-fixed{
            position: fixed !important;
            width: 100%;
            top: 0px;
            z-index: 100;
        }
        .affix {
            position: fixed !important;
            top: 31px !important;
            width: 100%;
            z-index: 100 !important;
        } 
        .menuDetallesFixed{
            position: fixed !important;
            top: 91px !important;
            width: 100%;
            z-index: 100 !important;
        }
/************************ Eventos *********************************************/
        .ciudad{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-style: oblique;
            text-align: justify;
        }
/*        @media (min-width: 320px) and (max-width: 639px) {
            .imageEvento{
                margin-top: 20px;
                margin-bottom: 20px;
                width: 100%;
                height: 140px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 57%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 15px;
                padding-bottom: 15px;
                background-color:  #FF8000; 
                width: 35%;
                height: 90px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
            .reloj{
                right: 20px;
            }
        }
        @media (min-width: 640px) {
            .imageEvento{
                margin-top: 20px;
                margin-bottom: 20px;
                width: 100%;
                height: 140px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 57%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 5px;
                padding-bottom: 5px;
                background-color:  #FF8000; 
                width: 35%;
                height: 90px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
            .reloj{
                right: 20px;
            }
        }
        @media (min-width: 768px) {
            .imageEvento{
                margin-top: 20px;
                margin-bottom: 20px;
                width: 100%;
                height: 140px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 57%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 5px;
                padding-bottom: 5px;
                background-color:  #FF8000; 
                width: 35%;
                height: 90px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
            .dia{
                font-size: 20px;
                font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
                font-style: normal;
            }
            .mes{
                margin-top: 0px;
                margin-bottom: 0px;
                color: #ffffff;
                font-size: 12px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
            }
            .anio{
                margin-top: 0px;
                margin-bottom: 0px;
                color: #ffffff;
                font-size: 12px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
            }
            .reloj{
                right: 20px;
            }
        }
        @media (min-width: 980px) {
            .imageEvento{
                margin-top: 20px;
                margin-bottom: 20px;
                width: 100%;
                height: 140px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 57%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 8px;
                padding-bottom: 8px;
                background-color:  #FF8000; 
                width: 35%;
                height: 90px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
            .dia{
                font-size: 20px;
                font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
                font-style: normal;
            }
            .mes{
                margin-top: 0px;
                margin-bottom: 0px;
                color: #ffffff;
                font-size: 12px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
            }
            .anio{
                margin-top: 0px;
                margin-bottom: 0px;
                color: #ffffff;
                font-size: 12px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
            }
            .reloj{
                right: 30px;
            }
        }
        @media (min-width: 1024px) {
            .imageEvento{
                margin-top: 20px;
                margin-bottom: 20px;
                width: 100%;
                height: 140px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 57%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 0px;
                padding-bottom: 0px;
                background-color:  #FF8000; 
                width: 35%;
                height: 90px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
            .dia{
                font-size: 28px;
                font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
                font-style: normal;
            }
            .mes{
                margin-top: 0px;
                margin-bottom: 0px;
                color: #ffffff;
                font-size: 14px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
            }
            .anio{
                margin-top: 0px;
                margin-bottom: 0px;
                color: #ffffff;
                font-size: 14px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
            }
            .reloj{
                right: 0px;
            }
        }
        @media (min-width: 1200px){
            .imageEvento{
                margin-top: 20px;
                margin-bottom: 20px;
                width: 100%;
                height: 140px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 55%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 30px;
                padding-bottom: 30px;
                background-color:  #FF8000; 
                width: 40%;
                height: 80px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
            .dia{
                font-size: 28px;
                font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
                font-style: normal;
            }
            .mes{
                margin-top: 0px;
                margin-bottom: 0px;
                color: #ffffff;
                font-size: 14px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
            }
            .anio{
                margin-top: 0px;
                margin-bottom: 0px;
                color: #ffffff;
                font-size: 14px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
            }
            .reloj{
                right: 0px;
            }
        }*/
        .imageEvento{
            margin-top: 20px;
            margin-bottom: 20px;
            width: 100%;
            height: 140px;
            border-radius: 4px;
            float: left;
        }
        .reloj2{
            float:right;
            width: 200px;
            height: 60px;
            z-index: 50;
        }
        .bordeEventos{
            padding-bottom: 2px;
            margin-bottom: 0px;
            border-bottom: 1px solid;
            border-bottom-color: #d3d3d3;
        }
        .descriptionTitulo{
            font-size: 18px;
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif;
            font-weight: bold; 
            text-align: justify;
        }
        .botonEvento {
            width: 100%;
            margin-top: 5px;
            margin-right: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
            font-style: normal;
            font-size: 10px;
            text-align: center;
            border-radius:2px;
        }
        .textoTiempo{
            padding-top: 15px;
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
            font-style: normal;
            font-size: 12px;
        }
        .textoEntradas{
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif; 
            font-style: normal;
            font-size: 12px;
        }
        .entradasRestantes{
            padding-top: 12px;
            font-family: Helvetica, Open Sans; 
            font-size: 14px;
        }
        .badge-info {
          display: inline-block;
          min-width: 10px;
          padding: 3px 7px;
          font-size: 14px;
          font-weight: bold;
          line-height: 1;
          color: #fff;
          text-align: center;
          white-space: nowrap;
          vertical-align: middle;
          background-color: #00B7EB;
          border-radius: 10px;
        }
        .badge-verde {
          display: inline-block;
          min-width: 10px;
          padding: 3px 7px;
          font-size: 14px;
          font-weight: bold;
          line-height: 1;
          color: #fff;
          text-align: center;
          white-space: nowrap;
          vertical-align: middle;
          background-color: #00e765;
          border-radius: 10px;
        }
        .tituloPrecio{
            margin-top: 10px;
            font-family: Helvetica, Open Sans;
            font-size: 16px;
            text-align: center;
        }
        .precio{
            margin-top: 0px;
            color: #5F5F5F;
            font-family: Helvetica, Open Sans;
            font-style: normal;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }
        .botonMas{
            color: #ffffff;
            font-family: HelveticaNarrow, Helvetica;
            font-size: 12px;
            font-style: normal;
        }
/****************************** Biografia *************************************/        
        .panelSombra {
            margin-bottom: 10px;
            background-color: #ffffff;
            border:1px solid #e6e9ed;
            -webkit-box-shadow: 2px 2px 11px rgba(0,0,0,.1);
            box-shadow: 2px 2px 11px rgba(0,0,0,.1);
        }
        .capaTitulo{
            border-bottom: 1px solid;
            border-bottom-color: #888888;
        }
        .logoCompartir{
            margin-top: 9px;
            margin-bottom: 9px;
        }
        .textoTipoArtista{
           margin-top: 5px;
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-size: 14px;
            font-style: normal; 
        }
        .textoTipoArtista2{
           margin-top: 5px;
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            font-style: normal; 
        }
        .textoEstilo{
            margin-top: 0px;
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-size: 14px;
            font-style: normal;
        }
        .textoEstilo2{
            margin-top: 5px;
            color: #272727;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            font-style: italic;
        }
        .textoProximo{
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-size: 14px;
            font-style: normal;
        }
        .textoPromotor{
            color: #1e30ff;
            font-family: Helvetica, sans-serif;
            font-weight: bold; 
        }
        .textoDisco{
            color: #000000;
            font-family: HelveticaNarrow, Helvetica, sans-serif;
            font-weight: bold;
        }
        .textoAnio{
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-weight: bold;
        }
        .textoDescripcion{
            padding-right: 0px;
            color: #000000;
            font-family: Helvetica, Open Sans;
            text-align: justify;
        }
        .textoCarrera{ 
            margin-top: 5px;
            color: #000000;
            font-family: Helvetica, Open Sans;
        }
        .textoCache{
            margin-top: 5px;
            color: #000000;
            font-family: Helvetica, Open Sans;
        }
        .textoLocacion{
            margin-top: 5px;
            color: #000000;
            font-family: Helvetica, Open Sans;
        }
        .heading2 h4{
            margin-top: 10px;
            margin-left: 10px;
            margin-bottom: -2px;
            margin-right: 0px;
            padding-bottom:15px;
            display:inline-block;
            border-bottom:2px solid #00B7EB;
        }
        .heading2 {
            display:block;
            margin:0 0 20px 0;
            border-bottom:1px dotted #d2d2d2; 
            font-size:12px;
        }
        .fondoNaranja{
            margin-right: 10px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 0px;
            padding-bottom: 0px;
            color: #FFFFFF;
            font-family: Helvetica, Open Sans;
            text-align: justify;
            background-color: #FF8000;
            border-left: 4px solid #dc7003;
        }
/************************* Multimedia *****************************************/
        .imagenMultimedia{
            height: 300px;
        }
        .controlPrevio{
            color: #868686;
            font-size: 24px;
            padding:3px 9px;
            margin-right:2px;
            display:inline-block;
            cursor:pointer;
            -webkit-border-radius:1px;
            -moz-border-radius:1px;
            border-radius:1px;
            position:relative;
        }
        .controlProximo{
            color: #868686;
            font-size: 24px;
            padding:3px 9px;
            margin-right:2px;
            display:inline-block;
            cursor:pointer;
            -webkit-border-radius:1px;
            -moz-border-radius:1px;
            border-radius:1px;
            position:relative;
        }
/************************* Sociales *****************************************/ 
        .redesSociales{
            margin-top: 5px;
            align-content: center;
            padding-left: 5px;
        }
        .redesSocialesDiscos{
            margin-top: 5px;
            align-content: center;
            padding-left: 80px;
            padding-right: 80px;
        }
        .btn-spotify{
            color: #ffffff;
            background-color: greenyellow;
        }
        .btn-amazon{
            width: 32px;
            height: 32px;
            color: #ffffff;
            background-color: #FFFFFF;
            background-image: url('";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/amazon-logo.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
        }
        .btn-itunes{
            width: 28px;
            height: 28px;
            color: #ffffff;
            background-color: #FFFFFF;
            background-image: url('";
        // line 689
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/itunes.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
        }
        .btn-apple{
            width: 28px;
            height: 28px;
            color: #ffffff;
            background-color: #FFFFFF;
            background-image: url('";
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/apple2.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: center;
        }
        .favorito{
            min-width: 80px;
            color: #FFFFFF;
            font-family: Helvetica, Open Sans;
            text-align: center;
            background-color: #5bc0de;
            margin-top: 8px;
            margin-left: 5px;
            margin-right: 0px;
            margin-bottom: 8px;
            padding-top: 6px !important;
            padding-bottom: 6px !important;
            font-size: 10px;
        }
        .noFavorito{
            min-width: 80px;
            color: #FFFFFF;
            font-family: Helvetica, Open Sans;
            text-align: center;
            background-color: #5bc0de;
            margin-top: 8px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 8px;
            font-size: 10px;
        }
        .compartir{
            width: auto;
            min-width: 80px;
            margin-top: 8px;
            margin-left: 5px;
            margin-right: 0px;
            margin-bottom: 8px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 6px !important;
            padding-bottom: 6px !important;
            font-family: Helvetica, Open Sans;
            text-align: center;
            font-size: 10px;
        }
        .seguir{
            width: auto;
            min-width: 80px;
            margin-top: 8px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 8px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 6px !important;
            padding-bottom: 6px !important;
            font-family: Helvetica, Open Sans;
            text-align: center;
            font-size: 10px;
        }
        .noSeguir{
            width: auto;
            min-width: 80px;
            margin-top: 8px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 8px;
            padding-left: 8px;
            padding-right: 8px;                                
            padding-top: 6px !important;
            padding-bottom: 6px !important;
            font-size: 10px;
        }      
/************************** interes *******************************************/
        .tituloInteres{
            color: #dc0010;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
        }
/************************** Discografia **************************************/ 
        .imagenDisco{
            background-color: #00B7EB;
            opacity: 1;
        }
        .imagenDisco:hover{
            background-color: #00B7EB;
            opacity: 0.5;
        }
        .textoCanciones{
            color: #000000;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 14px;
            text-align: justify;
        }
        .listaCanciones{
            color: #000000;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 12px;
            text-align: justify;
        }
</style>
    ";
    }

    // line 807
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <div id=\"bg-boxed\"><!-- Begin Boxed or Fullwidth Layout -->
        <div class=\"";
        // line 809
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                ";
        // line 812
        $this->displayBlock('BarraSuperior', $context, $blocks);
        // line 888
        echo "                ";
        $this->loadTemplate("registro/registro.html.twig", "artistas/perfil.html.twig", 888)->display($context);
        // line 889
        echo "                <!-- Begin Navigation -->
                ";
        // line 890
        $this->loadTemplate("default/menu.html.twig", "artistas/perfil.html.twig", 890)->display($context);
        // line 891
        echo "                ";
        $this->displayBlock('headerParallax', $context, $blocks);
        // line 955
        echo "                
            </header>
    ";
        // line 957
        $this->displayBlock('contenido', $context, $blocks);
        // line 2216
        echo "    ";
        $this->loadTemplate("default/pie.html.twig", "artistas/perfil.html.twig", 2216)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- Fin body -->
 ";
    }

    // line 809
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 812
    public function block_BarraSuperior($context, array $blocks = array())
    {
        echo "<!-- Begin Top Bar -->
                <div class=\"top-bar\" id=\"fixed-topBar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- ¿Como funciona? -->
                            <div class=\"col-sm-5 col-md-5 col-lg-5\">
                                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                    <li style=\"border-left:none;\"><a href=\"";
        // line 819
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 820
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
                                        <a data-toggle=\"modal\" data-target=\"#profecionales\">&Aacute;rea Profesionales</a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            Regístrate<span class=\"caret\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
        // line 846
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 847
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
        // line 862
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicioSesion", array("login" => "usuario1"));
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
\t\t\t\t<small><a href=\"#\">¿Olvidaste tu contraseña?</a></small>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"submit\" name=\"_login\" class=\"btn btn-rw btn-primary\" style=\"float:left\">Entrar</button>
\t\t\t\t&nbsp;<small>¿No tienes una cuenta? <a data-toggle=\"modal\" data-target=\"#register\" href=\"#\">Regístrate</a></small><!--data-dismiss=\"modal\"-->
                            </div>
                            </form><!-- /form -->
                        </div><!-- /modal content -->
                    </div><!-- /modal dialog -->
                </div><!-- /modal holder -->
                <!-- End Login -->
                ";
    }

    // line 891
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 892
        echo "                <div class=\"header-parallax fill\" 
                    style=\"background-image:url('";
        // line 893
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png")), "html", null, true);
        echo "'); 
                    background-color: #272727; padding: 140px 0 140px 0;\" 
                    data-top-bottom=\"background-position: 50% 0px;\" 
                    data-bottom-top=\"background-position: 50% -200px;\">
                   <div class=\"container\">
                       <div class=\"row\">
                           <!--=== Page Title ===-->
                           <div class=\"col-xs-12\" style=\"text-align:center;\">
                               <h2 class=\"text-white\">Katy Perry</h2>
                           </div>
                       </div><!-- /row -->
                   </div><!-- /container -->
               </div><!-- /page header --> 
                <div class=\"row background-white sombraMenu\"><!-- Menu del perfil -->
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white\" id=\"menu-detalles\"><!-- Menu -->
                        <div class=\"navbar-header\"> <!-- Mobile Navigation -->
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"glyphicon glyphicon-list\"></span>
                            </button>
                        </div><!-- /navbar header -->
                        <nav class=\"navbar-collapse collapse navHeaderCollapse\" role=\"navigation\">
                            <ul class=\"nav navbar-nav navbar-left\">
                                <li class=\"menu\">
                                    <a href=\"#Presentaciones\">Presentaciones</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Biografia\">Biograf&iacute;a</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Multimedia\">Multimedia</a>
                                </li>                                
                                <li class=\"menu\">
                                    <a href=\"#Discos\">Discograf&iacute;a</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Interes\">De inter&eacute;s</a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"btn btn-info seguir\" id=\"seguir\">
                                        <span class=\"fa fa-thumbs-up\"></span> Seguir
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"btn btn-info favorito\" id=\"favorito\" onclick=\"cambiar(id);\">
                                        <span class=\"fa fa-heart-o\"></span> Favorito
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"btn btn-info compartir\" id=\"compartir\">
                                        <span class=\"fa fa-share-alt\"></span> Compartir<!--  fa-share -->
                                    </a> 
                                </li>
                                <li>
                                    <a href=\"";
        // line 947
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block proponerConcierto\">
                                        Proponer concierto
                                    </a> 
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div><!-- Fin Menu del perfil -->
                ";
    }

    // line 957
    public function block_contenido($context, array $blocks = array())
    {
        // line 958
        echo "        <!-- Contenido -->
        <div class=\"container\"><!-- Perfil del Artista -->
        <div class=\"row mt10 mb10\"><!-- Fila -->
            <div class=\"col-xs-12 col-sm-12 col-md-8 col-lg-8\"><!-- Columna izquierda -->
                <div class=\"row panelSombra\"><!-- Seccion de eventos --> 
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\" id=\"Presentaciones\">
                        <h4>
                            <span class=\"fa fa-bullhorn\" style=\"margin-top:10px;\"></span>
                            Eventos
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\"><!-- Contenido de eventos -->
                        <!-- Evento 1 -->
                        <div class=\"row bordeEventos\">
                            <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\"><!-- Imagen -->
                                <img src=\"";
        // line 973
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img-responsive imageEvento\">
                            </div>  <!-- Fin Dia -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 descriptionTitulo\">
                                        Katy Perry
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 ciudad\">
                                        Palau Sant Jordi
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 ciudad\">
                                        <i class=\"fa fa-map-marker icono\"></i> Barcelona, España
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-lg-6\">
                                        <span class=\"fa fa-calendar\"></span> 30 Mayo 2018.
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-lg-6\">
                                        <span class=\"fa fa-clock-o\"></span> 19:00
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12\">
                                        <span class=\"glyphicon glyphicon-tags\"></span> Entradas disponibles: 
                                        <span class=\"badge badge-info\">90</span>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 textoTiempo\">
                                        Faltan:
                                        <div class=\"reloj2\">
                                            <div class=\"counter\" data-date=\"2018-06-28 19:00:00\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>   <!-- Fin de sección descripción -->
                            <div class=\"col-xs-2 col-sm-2 col-md-3 col-lg-3\"><!-- Boton -->
                                <div class=\"row\">
                                    <a href=\"#\" 
                                       class=\"btn-custom-orange botonEvento pull-left\">
                                        Comprar Entradas
                                    </a>
                                </div>
                                <div class=\"row\">
                                    <div class=\"tituloPrecio\">
                                        Precio
                                    </div>
                                    <div class=\"precio\">
                                        350 €
                                    </div>
                                </div>
                                <div class=\"row\">
                                    
                                </div>
                            </div> <!-- Fin boton -->
                        </div><!-- Fin Evento 1 -->
                        <!-- Evento 2 -->
                        <div class=\"row bordeEventos\">
                            <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\"><!-- Imagen -->
                                <img src=\"";
        // line 1037
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img-responsive imageEvento\">
                            </div>  <!-- Fin Dia -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 descriptionTitulo\">
                                        Katy Perry
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 ciudad\">
                                        Hallenstadion
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 ciudad\">
                                        <i class=\"fa fa-map-marker icono\"></i> Zürich, Suiza
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-lg-6\">
                                        <span class=\"fa fa-calendar\"></span> 01 Junio 2018.
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-lg-6\">
                                        <span class=\"fa fa-clock-o\"></span> 19:30
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12\">
                                        <span class=\"glyphicon glyphicon-tags\"></span> Entradas disponibles: 
                                        <span class=\"badge badge-info\">200</span>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 textoTiempo\">
                                        Faltan:
                                        <div class=\"reloj2\">
                                            <div class=\"counter\" data-date=\"2018-06-01 19:30:00\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Fin de sección descripción -->
                            <div class=\"col-xs-2 col-sm-2 col-md-3 col-lg-3\"><!-- Boton -->
                                <div class=\"row\">
                                    <a href=\"#\" 
                                       class=\"btn-custom-orange botonEvento pull-left\">
                                        Comprar Entradas
                                    </a>
                                </div>
                                <div class=\"row\">
                                    <div class=\"tituloPrecio\">
                                        Precio
                                    </div>
                                    <div class=\"precio\">
                                        351 €
                                    </div>
                                </div>
                            </div> <!-- Fin boton -->
                        </div><!-- Fin Evento 2 -->
                        <!-- Evento 3 -->
                        <div class=\"row bordeEventos\">
                            <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\"><!-- Imagen -->
                                <img src=\"";
        // line 1098
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img-responsive imageEvento\">
                            </div>  <!-- Fin Dia -->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 descriptionTitulo\">
                                        Katy Perry
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 ciudad\">
                                        AccorsHotels Arena
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 ciudad\">
                                        <i class=\"fa fa-map-marker icono\"></i> Par&iacute;s, Francia
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-lg-6\">
                                        <span class=\"fa fa-calendar\"></span> 30 Mayo 2018.
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-lg-6\">
                                        <span class=\"fa fa-clock-o\"></span> 20:00
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12\">
                                        <span class=\"glyphicon glyphicon-tags\"></span> Entradas disponibles: 
                                        <span class=\"badge badge-info\">15</span>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-lg-12 textoTiempo\">
                                        Faltan:
                                        <div class=\"reloj2\">
                                            <div class=\"counter\" data-date=\"2018-05-30 20:00:00\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Fin de sección descripción -->
                            <div class=\"col-xs-2 col-sm-2 col-md-3 col-lg-3\"><!-- Boton -->
                                <div class=\"row\">
                                    <a href=\"#\" 
                                       class=\"btn-custom-orange botonEvento pull-left\">
                                        Comprar Entradas
                                    </a>
                                </div>
                                <div class=\"row\">
                                    <div class=\"tituloPrecio\">
                                        Precio
                                    </div>
                                    <div class=\"precio\">
                                        415 €
                                    </div>
                                </div>
                            </div> <!-- Fin boton -->
                        </div><!-- Fin Evento 3 -->
                        <div class=\"row mt5\">
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                <a href=\"#\" class=\"btn btn-primary btn-block botonMas\">
                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                    Ver M&aacute;s
                                </a>
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>
                        </div>
                    </div><!-- Fin Contenido de eventos -->
                </div><!-- Fin Seccion de eventos -->
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\"><!-- Columna derecha -->
                <div class=\"row panelSombra mb10 ml5\" id=\"Informacion\"><!-- Información -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                        <h4>
                            <span class=\"fa fa-history\"></span>
                            Informaci&oacute;n
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\">                        
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoTipoArtista\">
                                <span class=\"glyphicon glyphicon-headphones\"></span> Tipo de artista: 
                                <span class=\"textoTipoArtista2\">Cantante</span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEstilo\">
                                <span class=\"glyphicon glyphicon-music\" style=\"margin-top:10px;\"></span> Estilo Musical: 
                                <span class=\"textoEstilo2\">Rock, Pop, Dance, G&oacute;spel.</span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoCarrera\">
                            Años de carrera art&iacute;stica: 6
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoCache\">
                                Cache del artista <b>desde 350€</b>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoLocacion\">
                                <i class=\"fa fa-map-marker icono\"></i> California, Estados Unidos.
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <ul class=\"list-inline redesSociales\" id=\"redesSociales\">
                                    <li>
                                        <a href=\"#\" class=\"btn btn-social-icon btn-facebook btn-sm\">
                                            <span class=\"fa fa-facebook\"></span>
                                        </a> 
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"btn btn-social-icon btn-twitter btn-sm\">
                                            <span class=\"fa fa-twitter\"></span>
                                        </a> 
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"btn btn-social-icon btn-instagram btn-sm\">
                                            <span class=\"fa fa-instagram\"></span>
                                        </a> 
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"btn btn-social-icon btn-youtube btn-sm\">
                                            <span class=\"fa fa-youtube\"></span>
                                        </a> 
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"btn btn-social-icon btn-spotify btn-sm\">
                                            <span class=\"fa fa-spotify\"></span>
                                        </a> 
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"btn btn-social-icon btn-danger btn-sm\">
                                            <span class=\"fa fa-google-plus\"></span>
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoProximo\">Ver m&aacute;s artistas:
                                <a href=\"\" class=\"btn btn-default textoPromotor\"> Promotor / Manager</a>
                            </div>
                        </div>
                    </div><!-- Fin información -->   
                </div><!-- Fin row -->                
            </div>
        </div><!-- Fin Fila -->
        <div class=\"row panelSombra mb10\" id=\"Biografia\"><!-- Biografia -->
            <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                <h4>
                    <span class=\"fa fa-history\"></span>
                    Biograf&iacute;a
                </h4>
            </div>
            <div class=\"col-sm-8 col-md-8 col-lg-8\">
                <div class=\"row\"><!-- Columna de informacion -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 textoDescripcion\">
                        Katheryn Elizabeth Hudson, más conocida
                        por su nombre artístico Katy Perry, es una cantante 
                        y compositora estadounidense, que saltó a la fama 
                        en 2008 con «I Kissed a Girl» y «Hot n Cold» de 
                        su segundo álbum One of the Boys. Naci&oacute;
                        el 25 de octubre de 1984, en Santa Bárbara, 
                        California, Estados Unidos.
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-4 col-lg-4\"></div>
                    <div class=\"col-sm-4 col-md-4 col-lg-4\">
                        <a href=\"\" class=\"btn btn-info btn-block\">
                            <span class=\"glyphicon glyphicon-plus\"></span> Mostrar m&aacute;s</a>
                    </div>
                    <div class=\"col-sm-4 col-md-4 col-lg-4\"></div>
                </div>
            </div><!-- Fin información -->
            <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                <!-- Lista de reproducción -->
                <iframe src=\"https://open.spotify.com/embed/artist/6VmVli4XwdLi1ERXBPAuCC\"
                width=\"100%\" height=\"380\" frameborder=\"0\" allowtransparency=\"true\"
                allow=\"encrypted-media\"></iframe>
                <!-- Fin Lista de reproducción -->
            </div> 
    </div><!-- Fin Biografia -->        
        <div class=\"row panelSombra mb10\" id=\"Multimedia\"><!-- Multimedia -->
            <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                <h4>
                    <span class=\"glyphicon glyphicon-facetime-video\"></span>
                    Multimedia 
                </h4>
                <!-- controles -->
                <div class=\"owl-controls\">
                    <div id=\"controlesFV\" class=\"owl-nav\">
                        <div class=\"controlPrevio\">
                            <span>&lt;</span>
                        </div>
                        <div class=\"controlProximo\">
                            <span>&gt;</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10\">
                <!-- Fotos y videos -->
                <div class=\"owl-carousel owl-theme\" id=\"carruselFV\">
                    <div class=\"item-video\" data-merge=\"1\"> 
                        <a class=\"owl-video\" href=\"https://www.youtube.com/embed/0KSOMA3QBU0?rel=0\"></a>
                    </div>
                    <div class=\"item\" data-merge=\"2\">
                      <img src=\"";
        // line 1311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/KP1.png"), "html", null, true);
        echo "\" alt=\"Artista\" class=\"img-responsive imagenMultimedia\">
                    </div>
                    <div class=\"item-video\" data-merge=\"3\"> 
                        <a class=\"owl-video\" href=\"https://www.youtube.com/embed/XjwZAa2EjKA\"></a>
                    </div>
                    <div class=\"item\" data-merge=\"4\">
                      <img src=\"";
        // line 1317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/KP6.png"), "html", null, true);
        echo "\" alt=\"Artista\" class=\"img-responsive imagenMultimedia\">
                    </div>
                    <div class=\"item-video\" data-merge=\"5\"> 
                        <a class=\"owl-video\" href=\"https://www.youtube.com/embed/-1cyCmUdDNQ\"></a>
                    </div>
                    <div class=\"item\" data-merge=\"6\">
                      <img src=\"";
        // line 1323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/KP.png"), "html", null, true);
        echo "\" alt=\"Artista\" class=\"img-responsive imagenMultimedia\">
                    </div>
                    <div class=\"item-video\" data-merge=\"7\"> 
                        <a class=\"owl-video\" href=\"https://www.youtube.com/embed/-1cyCmUdDNQ\"></a>
                    </div>
                </div><!-- Fin Carusel -->
            </div>
        </div><!-- Fin Videos -->        
        <div class=\"row panelSombra mb10\" id=\"Discos\"><!-- Discografía -->
            <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                <h4>
                    <span class=\"glyphicon glyphicon-cd\"></span>
                    Discograf&iacute;a
                </h4>
            </div>
            <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10\">
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\"><!-- Disco 1 -->
                    <div class=\"row\">
                        <a data-toggle=\"modal\" data-target=\"#modalDisco1\" class=\"\" id=\"disco1\">
                            <img src=\"";
        // line 1342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Disco1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive imagenDisco\" alt=\"Disco\">
                        </a>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center textoDisco\">
                            Witness
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center textoAnio\">
                            2018
                        </div>
                    </div>
                </div><!-- Fin Disco 1 -->
                <!-- Default Modal -->
                <div class=\"modal fade\" id=\"modalDisco1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                <h4 class=\"modal-title\" id=\"defaultModalLabel\">Witness</h4>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <img src=\"";
        // line 1367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Disco1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Disco\">
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class='textoCanciones'>Listado de canciones</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <table class=\"table table-striped\">
                                            <tr>
                                                <th>N°</th>
                                                <th>Titulo</th>
                                                <th>Escritor(es)</th>
                                                <th class=\"text-center\">Duraci&oacute;n (min)</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Witness</td>  
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">4:10</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Hey Hey Hey</td>  
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">3:35</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Roulette</td>   
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">3:18</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Swish Swish</td>
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Déjà Vu</td>  
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">3:18</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Power</td> 
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">3:46</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Mind Maze</td>
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">4:08</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Miss You More</td>  
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">3:54</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Chained to the Rhythm</td>
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Tsunami</td> 
                                                <td>Escritor 1</td>
                                                <td class=\"text-center\">3:23</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class='textoCanciones'>Enlaces de Compras:</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <ul class=\"list-inline redesSocialesDiscos\" id=\"redesSocialesDisco\">
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-facebook btn-sm\">
                                                    <span class=\"fa fa-facebook\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-twitter btn-sm\">
                                                    <span class=\"fa fa-twitter\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-instagram btn-sm\">
                                                    <span class=\"fa fa-instagram\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-youtube btn-sm\">
                                                    <span class=\"fa fa-youtube\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-spotify btn-sm\">
                                                    <span class=\"fa fa-spotify\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-danger btn-sm\">
                                                    <span class=\"fa fa-google-plus\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-linkedin btn-sm\">
                                                    <span class=\"fa fa-linkedin\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-amazon btn-sm\">
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-itunes btn-sm\">
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-rw btn-default\" data-dismiss=\"modal\">Cerrar</button>
                            </div>
                        </div><!-- /modal content -->
                    </div><!-- /modal dialog -->
                </div><!-- /modal holder -->
                <!-- End Default Modal -->
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\"><!-- Disco 2 -->
                    <div class=\"row\">
                        <a data-toggle=\"modal\" data-target=\"#modalDisco2\" class=\"\" id=\"disco2\">
                            <img src=\"";
        // line 1512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Disco2.png"), "html", null, true);
        echo "\" class=\"img-responsive imagenDisco\" alt=\"Disco\">
                        </a>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center textoDisco\">
                            PRIMS (acoustic sessions)
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center textoAnio\">
                            2014
                        </div>
                    </div>
                </div><!-- Fin Disco 2 -->
                <!-- Default Modal -->
                <div class=\"modal fade\" id=\"modalDisco2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                <h4 class=\"modal-title\" id=\"defaultModalLabel\">PRIMS (acoustic sessions)</h4>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <img src=\"";
        // line 1537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Disco2.png"), "html", null, true);
        echo "\" width='100%' class=\"img-responsive\" alt=\"Disco\">
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class='textoCanciones'>Listado de canciones</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <table class=\"table table-striped\">
                                            <tr>
                                                <th>N°</th>
                                                <th>Titulo</th>
                                                <th>Escritor(es)</th>
                                                <th class=\"text-center\">Duraci&oacute;n (min)</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Pista 1</td>
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:10</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pista 2</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">3:35</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pista 3</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">3:18</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Pista 4</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Pista 5</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Pista 6</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Pista 7</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Pista 8</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Pista 9</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Pista 10</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class='textoCanciones'>Enlaces de Compras:</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <ul class=\"list-inline redesSocialesDiscos\" id=\"redesSocialesDisco\">
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-facebook btn-sm\">
                                                    <span class=\"fa fa-facebook\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-twitter btn-sm\">
                                                    <span class=\"fa fa-twitter\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-instagram btn-sm\">
                                                    <span class=\"fa fa-instagram\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-youtube btn-sm\">
                                                    <span class=\"fa fa-youtube\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-spotify btn-sm\">
                                                    <span class=\"fa fa-spotify\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-danger btn-sm\">
                                                    <span class=\"fa fa-google-plus\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-linkedin btn-sm\">
                                                    <span class=\"fa fa-linkedin\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-amazon btn-sm\">
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-itunes btn-sm\">
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-rw btn-default\" data-dismiss=\"modal\">Cerrar</button>
                            </div>
                        </div><!-- /modal content -->
                    </div><!-- /modal dialog -->
                </div><!-- /modal holder -->
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\"><!-- Disco 3 -->
                    <div class=\"row\">
                        <a data-toggle=\"modal\" data-target=\"#modalDisco3\" class=\"\" id=\"disco3\">
                            <img src=\"";
        // line 1681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Disco3.png"), "html", null, true);
        echo "\" class=\"img-responsive imagenDisco\" alt=\"Disco\">
                        </a>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center textoDisco\">
                            PRIMS
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center textoAnio\">
                            2013
                        </div>
                    </div>
                </div><!-- Fin disco 3 -->
                <!-- Default Modal -->
                <div class=\"modal fade\" id=\"modalDisco3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                <h4 class=\"modal-title\" id=\"defaultModalLabel\">PRIMS</h4>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <img src=\"";
        // line 1706
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Disco3.png"), "html", null, true);
        echo "\" width='100%' class=\"img-responsive\" alt=\"Disco\">
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class='textoCanciones'>Listado de canciones</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <table class=\"table table-striped\">
                                            <tr>
                                                <th>N°</th>
                                                <th>Titulo</th>
                                                <th>Escritor(es)</th>
                                                <th class=\"text-center\">Duraci&oacute;n (min)</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Pista 1</td>
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:10</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pista 2</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">3:35</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pista 3</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">3:18</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Pista 4</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Pista 5</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Pista 6</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Pista 7</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Pista 8</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Pista 9</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Pista 10</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class='textoCanciones'>Enlaces de Compras:</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <ul class=\"list-inline redesSocialesDiscos\" id=\"redesSocialesDisco\">
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-facebook btn-sm\">
                                                    <span class=\"fa fa-facebook\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-twitter btn-sm\">
                                                    <span class=\"fa fa-twitter\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-instagram btn-sm\">
                                                    <span class=\"fa fa-instagram\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-youtube btn-sm\">
                                                    <span class=\"fa fa-youtube\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-spotify btn-sm\">
                                                    <span class=\"fa fa-spotify\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-danger btn-sm\">
                                                    <span class=\"fa fa-google-plus\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-linkedin btn-sm\">
                                                    <span class=\"fa fa-linkedin\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-amazon btn-sm\">
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-itunes btn-sm\">
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-rw btn-default\" data-dismiss=\"modal\">Cerrar</button>
                            </div>
                        </div><!-- /modal content -->
                    </div><!-- /modal dialog -->
                </div><!-- /modal holder -->
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\"><!-- Disco 4 -->
                    <div class=\"row\">
                        <a data-toggle=\"modal\" data-target=\"#modalDisco4\" class=\"\" id=\"disco4\">
                            <img src=\"";
        // line 1850
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Disco4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive  imagenDisco\" alt=\"Disco\">
                        </a>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center textoDisco\">
                            Teenage Dream: The Complete Confection
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center textoAnio\">
                            2012
                        </div>
                    </div>
                </div><!-- Fin disco 4 -->
                <!-- Default Modal -->
                <div class=\"modal fade\" id=\"modalDisco4\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Cerrar</span></button>
                                <h4 class=\"modal-title\" id=\"defaultModalLabel\">Teenage Dream: The Complete Confection</h4>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <img src=\"";
        // line 1875
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Disco4.jpg"), "html", null, true);
        echo "\" width='100%' class=\"img-responsive\" alt=\"Disco\">
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class='textoCanciones'>Listado de canciones</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <table class=\"table table-striped\">
                                            <tr>
                                                <th>N°</th>
                                                <th>Titulo</th>
                                                <th>Escritor(es)</th>
                                                <th class=\"text-center\">Duraci&oacute;n (min)</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Pista 1</td>
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:10</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pista 2</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">3:35</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pista 3</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">3:18</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Pista 4</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Pista 5</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Pista 6</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Pista 7</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Pista 8</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Pista 9</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Pista 10</td>                                                
                                                <td>Escritor 1</td>                                                 
                                                <td class=\"text-center\">4:02</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <div class='textoCanciones'>Enlaces de Compras:</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                        <ul class=\"list-inline redesSocialesDiscos\" id=\"redesSocialesDisco\">
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-facebook btn-sm\">
                                                    <span class=\"fa fa-facebook\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-twitter btn-sm\">
                                                    <span class=\"fa fa-twitter\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-instagram btn-sm\">
                                                    <span class=\"fa fa-instagram\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-youtube btn-sm\">
                                                    <span class=\"fa fa-youtube\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-spotify btn-sm\">
                                                    <span class=\"fa fa-spotify\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-danger btn-sm\">
                                                    <span class=\"fa fa-google-plus\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-linkedin btn-sm\">
                                                    <span class=\"fa fa-linkedin\"></span>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-amazon btn-sm\">
                                                </a> 
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"btn btn-social-icon btn-itunes btn-sm\">
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-rw btn-default\" data-dismiss=\"modal\">Cerrar</button>
                            </div>
                        </div><!-- /modal content -->
                    </div><!-- /modal dialog -->
                </div><!-- /modal holder -->
            </div>
        </div><!-- Fin discografía -->        
    </div><!-- Fin Perfil del Artista -->
    <div class=\"container background-white\" id=\"Interes\">
        <div class=\"col-sm-12\">
            <div class=\"heading2\">
                <h4 class=\"tituloInteres\">
                    <span class=\"ion-plus ml5 mr5\"></span>
                    Otros artistas que pueden interesarte
                </h4>
                <div class=\"owl-controls\">
                    <div id=\"customNav\" class=\"owl-nav\"></div>
                </div>
            </div>
            <div id=\"owl-carousel-thumb\" class=\"owl-carousel carousel-home\">
                <div class=\"thumbnail\"><!-- Item 1 -->
                    <div class=\"view image-hover-1 no-margin\">
                        <!-- Blog Thumb -->
                        <div class=\"product-container\">
                            <img class=\"img-responsive full-width\" src=\"";
        // line 2035
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"...\">
                        </div>
                        <div class=\"mask\">
                            <div class=\"image-hover-content\">
                                <!-- Zoom + Blog Link -->
                                <a href=\"";
        // line 2040
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                    <div class=\"image-icon-holder\">
                                        <span class=\"ion-ios7-search image-icons\"></span>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"info\">
                                    <div class=\"image-icon-holder\">
                                        <span class=\"ion-link image-icons\"></span>
                                    </div>
                                </a>
                            </div><!-- /image hover content -->
                        </div><!-- /mask-->
                    </div>
                    <div class=\"shop-product content-box-shadow\">
                        <a href=\"\"><h2>Artista 1</h2></a>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <span class=\"fecha-container\">
                                    <i class=\"fa fa-calendar\"></i> 12 Feb 2018
                                </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 mt5\" style=\"text-align:justify;\">
                                Cache<span class=\"label label-default shop-product-price\"> 179.99 €</span>
                            </div>
                        </div>
                        <div class=\"row mt10\">
                            <div class=\"col-md-12\">
                                <span class=\"location-container pull-left\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    Palau Sant Jordi
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- Fin Item 1 -->
                <div class=\"thumbnail\">
                    <div class=\"view image-hover-1 no-margin\">
                        <!-- Blog Thumb -->
                        <div class=\"product-container\">
                            <img class=\"img-responsive full-width\" src=\"";
        // line 2081
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
        echo "\" alt=\"...\">
                        </div>
                        <div class=\"mask\">
                            <div class=\"image-hover-content\">
                                <!-- Zoom + Blog Link -->
                                <a href=\"";
        // line 2086
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                    <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                </a>
                                <a href=\"#\" class=\"info\">
                                    <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                </a>
                            </div><!-- /image hover content -->
                        </div><!-- /mask-->
                    </div>
                    <div class=\"shop-product content-box-shadow\">
                        <a href=\"#\"><h2>Artista 3</h2></a>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <span class=\"fecha-container\">
                                    <i class=\"fa fa-calendar\"></i> 12 May 2018
                                </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 mt5\" style=\"text-align:justify;\">
                                Cache<span class=\"label label-default shop-product-price\"> 20.00 €</span>
                            </div>
                        </div>
                        <div class=\"row mt10\">
                            <div class=\"col-md-12\">
                                <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                    Palau Sant Jordi
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"thumbnail\">
                    <div class=\"view image-hover-1 no-margin\">
                        <!-- Blog Thumb -->
                        <div class=\"product-container\">
                            <img class=\"img-responsive full-width\" src=\"";
        // line 2122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista5.png"), "html", null, true);
        echo "\" alt=\"...\">
                        </div>
                        <div class=\"mask\">
                            <div class=\"image-hover-content\">
                                <!-- Zoom + Blog Link -->
                                <a href=\"";
        // line 2127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista5.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                    <div class=\"image-icon-holder\">
                                        <span class=\"ion-ios7-search image-icons\"></span>
                                    </div>
                                </a>
                                <a href=\"\" class=\"info\">
                                    <div class=\"image-icon-holder\">
                                        <span class=\"ion-link image-icons\"></span>
                                    </div>
                                </a>
                            </div><!-- /image hover content -->
                        </div><!-- /mask-->
                    </div>
                    <div class=\"shop-product content-box-shadow\">
                        <a href=\"#\"><h2>Vetusta Morla</h2></a>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <span class=\"fecha-container\">
                                    <i class=\"fa fa-calendar\"></i> 15 May 2018
                                </span>
                            </div>
                        </div>
                        <div class=\"row mt5\">
                            <div class=\"col-md-12\" style=\"text-align:justify;\">
                                Cache<span class=\"label label-default shop-product-price\"> 17.99 €</span>
                            </div>
                        </div>
                        <div class=\"row mt10\">
                            <div class=\"col-md-12\">
                                <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                    Palau Sant Jordi
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"thumbnail\">
                    <div class=\"view image-hover-1 no-margin\">
                        <!-- Blog Thumb -->
                        <div class=\"product-container\">
                            <img class=\"img-responsive full-width\" src=\"";
        // line 2167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista6.png"), "html", null, true);
        echo "\" alt=\"...\">
                        </div>
                        <div class=\"mask\">
                            <div class=\"image-hover-content\">
                                <!-- Zoom + Blog Link -->
                                <a href=\"";
        // line 2172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista6.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                    <div class=\"image-icon-holder\">
                                        <span class=\"ion-ios7-search image-icons\"></span>
                                    </div>
                                </a>
                                <a href=\"\" class=\"info\">
                                    <div class=\"image-icon-holder\">
                                        <span class=\"ion-link image-icons\"></span>
                                    </div>
                                </a>
                            </div><!-- /image hover content -->
                        </div><!-- /mask-->
                    </div>
                    <div class=\"shop-product content-box-shadow\">
                        <a href=\"\">
                            <h2>Lady Gaga</h2>
                        </a>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <span class=\"fecha-container\">
                                    <i class=\"fa fa-calendar\"></i> 12 May 2018
                                </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 mt5\" style=\"text-align:justify;\">
                                Cache<span class=\"label label-default shop-product-price\"> 159.90 €</span>
                            </div>
                        </div>
                        <div class=\"row mt10\">
                            <div class=\"col-md-12\">
                                <span class=\"location-container pull-left\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    Palau Sant Jordi
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Contenido -->
    ";
    }

    // line 2222
    public function block_javascripts($context, array $blocks = array())
    {
        // line 2223
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 2224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 2236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Select -->
    <script type=\"text/javascript\" src=\"";
        // line 2238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Simple Ajax Uploader -->
    <script type=\"text/javascript\" src=\"";
        // line 2240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/SimpleAjaxUploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        // image zoom
\$(document).ready(function() {
    \$('.image-zoom-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        fixedContentPos: false
    });
});

// gallery zoom
\$('.popup-gallery').each(function() {
     \$(this).magnificPopup({ 
        delegate: '.gallery-zoom',
        type:'image',
        gallery: {
            enabled: true
        }
    });
});

// video zoom
\$(document).ready(function() {
    \$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});

//responsive video
\$(document).ready(function() {
    \$(document.body).fitVids();
});

// scroll to top action
\$('.scroll-top').on('click', function(event) {
    event.preventDefault();
    \$('html, body').animate({
        scrollTop: 0
    }, 'slow');
});

// run mixitup portfolio
\$(function() {
    \$('#myPortfolio').mixitup({
        targetSelector: '.item',
        transitionSpeed: 600
    });
});

// pagination fix
\$(function() {
    \$(\".dropdown-menu > li > a.trigger\").on(\"click\", function(e) {
        var current = \$(this).next();
        current.toggle();
        e.stopPropagation();
    });
});

//side-navbar
jQuery(\"li.list-toggle\").bind(\"click\", function() {
    jQuery(this).toggleClass(\"active\");
});

//tooltips and popovers
\$(function() {
    \$(\"[data-toggle='tooltip']\").tooltip();
});
\$(function() {
    \$(\"[data-toggle='popover']\").popover();
});

//activate skrollr.js
skrollr.init({
    forceHeight: false,
    smoothScrolling: true,
    smoothScrollingDuration: 1500,
        mobileCheck: function() {
        //hack - forces mobile version to be off
        return false;
    }
});

//carousel subnav slider
\$(document).ready(function() {
    var clickEvent = false;
    \$('#carouselSubnav').on('click', '.nav a', function() {
        clickEvent = true;
        \$('#carouselSubnav .nav li').removeClass('active');
        \$(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if (!clickEvent) {
            var count = \$('#carouselSubnav .nav').children().length - 1;
            var current = \$('#carouselSubnav .nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if (count == id) {
                \$('#carouselSubnav .nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});

//owl carousel thumbnail caption slider
\$('#owl-carousel-product').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: true,
    navText: [\"<span><</span>\", \"<span>></span>\"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

//owl carousel thumbnail caption slider
\$('#owl-carousel-thumb').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    navContainer: '#customNav',
    navText: [\"<span><</span>\", \"<span>></span>\"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})

//carousel animation fix
function animateElement(obj, anim_) {
    obj.addClass(anim_ + ' animated').one(
        'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
            \$(this).removeClass();
        });
}
\$('#carouselHome, #carouselSubnav').on('slide.bs.carousel', function(e) {
    var current = \$('.item').eq(parseInt(\$(e.relatedTarget).index()));
    \$('[data-animation]').removeClass();
    \$('[data-animation]', current).each(function() {
        var \$this = \$(this);
        var anim_ = \$this.data('animation');
        animateElement(\$this, anim_);
    });
});

\$('.navbar li a').click(function() {
    \$('.navbar li a').removeClass('active');
    \$(this).addClass('active');
});

//progress bar
\$(document).ready(function(){
    var percent = 0, bar = \$('.transition-timer-carousel-progress-bar'), crsl = \$('#carouselHome');
    function progressBarCarousel() {
      bar.css({width:percent+'%'});
     percent = percent +0.5;
      if (percent>100) {
          percent=0;
          crsl.carousel('next');
      }      
    }
    crsl.carousel({
        interval: false,
        pause: true
    }).on('slide.bs.carousel', function () {percent=0;});var barInterval = setInterval(progressBarCarousel, 30);
    crsl.hover(
        function(){
            clearInterval(barInterval);
        },
        function(){
            barInterval = setInterval(progressBarCarousel, 30);
        })
});
    </script>
    <!-- On Scroll Animations - scrollReveal.js -->
    <script>
        var config = {
            easing: 'hustle',
            mobile:  true,
            delay:  'onload'
        }
        window.sr = new scrollReveal( config );
/*   //scrollup section*/
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.scrollup').fadeIn();
            } else {
                jQuery('.scrollup').fadeOut();
            }
        });
/********/
        jQuery('.scrollup').click(function () {
            jQuery(\"html, body\").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
/***/
        function wait(container){
            \$(container).waitMe({
                effect: 'facebook',
                text: 'Por favor, espere...',
                bg: 'rgba(255,255,255,0.7)',
                color:'#000',
                sizeW:'',
                sizeH:'',
                source: 'img.svg',
                onClose: function() {}
            });
        }
        function endWait(container){
            \$(container).waitMe('hide');
        }
        \$(document).ready(function(){
            \$('.selectpicker').selectpicker();
            //tipos de usuario
            \$('#espectador-link').on('click',function(e){
                e.preventDefault();
                \$('#tipos-usuario-text-container div.description-container').hide();
                \$('.item-usuario-container p').removeClass('item-usuario-selected');
                \$('#espectador-text-container').fadeIn();
                \$(this).siblings('p').addClass('item-usuario-selected');

                \$('#userType').val('ROLE_CLIENT');
            });

            \$('#artista-link').on('click',function(e){
                e.preventDefault();
                \$('#tipos-usuario-text-container div.description-container').hide();
                \$('.item-usuario-container p').removeClass('item-usuario-selected');
                \$('#artista-text-container').fadeIn();
                \$(this).siblings('p').addClass('item-usuario-selected');

                \$('#userType').val('ROLE_ARTIST');
            });

            \$('#local-link').on('click',function(e){
                e.preventDefault();
                \$('#tipos-usuario-text-container div.description-container').hide();
                \$('.item-usuario-container p').removeClass('item-usuario-selected');
                \$('#local-text-container').fadeIn();
                \$(this).siblings('p').addClass('item-usuario-selected');

                \$('#userType').val('ROLE_LOCAL');
            });

            \$('#profesional-link').on('click',function(e){
                e.preventDefault();
                \$('#tipos-usuario-text-container div.description-container').hide();
                \$('.item-usuario-container p').removeClass('item-usuario-selected');
                \$('#profesional-text-container').fadeIn();
                \$(this).siblings('p').addClass('item-usuario-selected');

                \$('#userType').val('ROLE_PROFESSIONAL');
            });
        });

    </script>
    ";
        // line 2521
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
        // line 2522
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 2523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 2525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(){
            // CountDown initialization
            \$(\".counter\").TimeCircles({
                circle_bg_color: \"#B8B0AF\",
                time: {
                    Days: { color: \"#FF8000\" },
                    Hours: { color: \"#FF8000\" },
                    Minutes: { color: \"#FF8000\" },
                    Seconds: { color: \"#FF8000\" }
                },
                bg_width: 0.5,
                fg_width: 0.05
            });
        });

        jQuery(\"#slider1\").revolution({
            sliderType:\"standard\",
            startDelay:2500,
            spinner:\"spinner2\",
            sliderLayout:\"auto\",
            viewPort:{
                enable:false,
                outof:'wait',
                visible_area:'100%'
            }
            ,
            delay:9000,
            navigation: {
                keyboardNavigation:\"off\",
                keyboard_direction: \"horizontal\",
                mouseScrollNavigation:\"off\",
                onHoverStop:\"off\",
                arrows: {
                    style:\"erinyen\",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class=\"tp-title-wrap\">  \t<div class=\"tp-arr-imgholder\"></div>    <div class=\"tp-arr-img-over\"></div>\t<span class=\"tp-arr-titleholder\"></span> </div>',
                    left: {
                        h_align:\"left\",
                        v_align:\"center\",
                        h_offset:30,
                        v_offset:0
                    },
                    right: {
                        h_align:\"right\",
                        v_align:\"center\",
                        h_offset:30,
                        v_offset:0
                    }
                }
                ,
                touch:{
                    touchenabled:\"on\",
                    swipe_treshold : 75,
                    swipe_min_touches : 1,
                    drag_block_vertical:false,
                    swipe_direction:\"horizontal\"
                }
                ,
                bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:\"hermes\",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:\"horizontal\",
                    h_align:\"center\",
                    v_align:\"bottom\",
                    h_offset:0,
                    v_offset:30,
                    space:5
                }
            },
            gridwidth:1240,
            gridheight:497
        });
    /** Desplazamiento vertical **/
        \$(function (){
            \$('a[href*=#]').click(function() {
                if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') 
                    && location.hostname == this.hostname) {
                    var \$target = \$(this.hash);
                    \$target = \$target.length && \$target || \$('[name=' + this.hash.slice(1) +']');
                    if (\$target.length) {
                         var targetOffset = \$target.offset().top - 141;
                         console.log(\"targetOffset: \"+targetOffset);
                         \$('html,body').animate({scrollTop: targetOffset}, 1500);
                         return false;
                    }
                }
           });
        });
    /***
     * Para el boton de favorito.
     * @param {type} identificador
     * @returns {undefined}
     */
    function cambiar(identificador){
        console.log(identificador);
        var clase = document.getElementById(identificador).getAttribute(\"class\");
        contenido=\"favorito\";
        if(clase.indexOf(contenido)>=0){ 
            document.getElementById(identificador).setAttribute(\"class\",\"noFavorito\");
            document.getElementById(identificador).innerHTML=\"<span class=\\\"fa fa-heart\\\"></span>\";
        }
        else{
            document.getElementById(identificador).setAttribute(\"class\",\"favorito\");
            document.getElementById(identificador).innerHTML=\"<span class=\\\"fa fa-heart-o\\\"></span>\";
        }
    }
/******************Menu siempre visible***************************************/ 
    \$(document).scroll(function() {
        if(\$(document).scrollTop() > 30){
            document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar top-bar-fixed\");
            document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main affix\");
            if(\$(document).scrollTop() > 180){
                document.getElementById(\"menu-detalles\").setAttribute(\"class\",\"col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white menuDetallesFixed\");
            }
        }
        else{
            document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar\");
            document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main\");
            document.getElementById(\"menu-detalles\").setAttribute(\"class\",\"col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white\");
        }
    });        
/**************************** Carrusel multimedia *******************************/
        \$(document).ready(function(){
            var owl = \$(\"#carruselFV\");
            \$(\"#carruselFV\").owlCarousel({
                items:1,
                merge:true,
                loop:true,
                margin:10,
                video:true,
                videoWidth: true, 
                videoHeight: 300, 
                lazyLoad:true,
                center:true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    480 : {
                        items: 3,
                        nav: false,
                    },
                    768 : {
                        items:4,
                        nav:false,
                    },
                    1440: {
                        items:5,
                        nav:false,
                    }
                },
                autoplay: true,
                autoplayHoverPause: true,
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY>0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
            \$('.controlPrevio').click(function() {
                owl.trigger('prev.owl.carousel');
            });
            \$('.controlProximo').click(function() {
                owl.trigger('next.owl.carousel');
            });
        });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "artistas/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2861 => 2530,  2857 => 2529,  2853 => 2528,  2849 => 2527,  2845 => 2526,  2841 => 2525,  2836 => 2523,  2833 => 2522,  2827 => 2521,  2543 => 2240,  2538 => 2238,  2533 => 2236,  2528 => 2234,  2524 => 2233,  2520 => 2232,  2516 => 2231,  2512 => 2230,  2508 => 2229,  2504 => 2228,  2500 => 2227,  2496 => 2226,  2492 => 2225,  2488 => 2224,  2485 => 2223,  2482 => 2222,  2434 => 2172,  2426 => 2167,  2383 => 2127,  2375 => 2122,  2336 => 2086,  2328 => 2081,  2284 => 2040,  2276 => 2035,  2113 => 1875,  2085 => 1850,  1938 => 1706,  1910 => 1681,  1763 => 1537,  1735 => 1512,  1587 => 1367,  1559 => 1342,  1537 => 1323,  1528 => 1317,  1519 => 1311,  1303 => 1098,  1239 => 1037,  1172 => 973,  1155 => 958,  1152 => 957,  1139 => 947,  1082 => 893,  1079 => 892,  1076 => 891,  1046 => 862,  1028 => 847,  1024 => 846,  995 => 820,  991 => 819,  980 => 812,  974 => 809,  964 => 2216,  962 => 957,  958 => 955,  955 => 891,  953 => 890,  950 => 889,  947 => 888,  945 => 812,  939 => 809,  933 => 807,  827 => 699,  814 => 689,  801 => 679,  158 => 39,  152 => 36,  146 => 33,  142 => 32,  137 => 30,  134 => 29,  131 => 28,  125 => 804,  121 => 803,  115 => 801,  113 => 28,  109 => 27,  104 => 25,  100 => 24,  96 => 23,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  62 => 13,  57 => 11,  52 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artistas/perfil.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/artistas/perfil.html.twig");
    }
}
