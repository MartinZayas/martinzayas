<?php

/* salas/perfil.html.twig */
class __TwigTemplate_730727699f818463f37a24a04bee799acce1ecd7bff722a6d84330e38089e555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "salas/perfil.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cssPersonalizados' => array($this, 'block_cssPersonalizados'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'classBoxed' => array($this, 'block_classBoxed'),
            'BarraSuperior' => array($this, 'block_BarraSuperior'),
            'subHeader' => array($this, 'block_subHeader'),
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
        echo "Busco Concierto | Perfil de Salas ";
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
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery.snippet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/waitMe/waitMe.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Icon Fonts -->
    <link href='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ionicons1_4.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <!-- Magnific Popup -->
    <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/magnific-popup.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    ";
        // line 27
        $this->displayBlock('cssPersonalizados', $context, $blocks);
        // line 924
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 926
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 27
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 28
        echo "    <!-- Fuentes y estilos --
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/estilos.css"), "html", null, true);
        echo "\"--> 
    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/layers.css"), "html", null, true);
        echo "\">
    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">
    <!-- CountDown Styles -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/TimeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <style>
        .btn {
            border-radius:2px;
        }     
        .botonInteres {
            display:block!important;
            font-size: 12px;
            border-radius:2px;
            margin-left: 5px;
            margin-right: 5px;
            text-align: center;
        }
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
        .botonSeguir{
            margin-top: 10px;
        }
        .texto{
            margin-bottom: 5px;
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
        .menuDetalles{
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
        .sombraMenu{
            margin-left: 0px;
            margin-right: 0px;
            background-color:#fff !important;
            box-shadow: 0px 5px 9px #888888;
        }
        .subMenu{
            background-color: #ffffff;
            color: #272727;
            font-family: Helvetica, Open Sans;
            font-size: 12px;
            font-style: italic;
            text-align: justify;
        }
        .subMenu:hover{
            background-color: #EBEBEB;
        }
        li.subMenu a{
            color: #272727;
        }
        subMenuItem{
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
        .proponerConcierto{
            margin-top: 8px;
            margin-left: 5px;
            padding-top: 6px !important;
            padding-bottom: 6px !important;
            font-family: Helvetica, Open Sans;
            text-align: center;
            font-size: 10px;
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
        .seguidores{
            margin-top: 15px;
            margin-left: 0px;
            font-family: Helvetica, Open Sans;
            font-size: 12px;
            font-style: italic;
            font-weight: bold;
            text-align: center;
        }
/***************************Valoraciones***************************************/ 
        .imagenValoracion{
            width: 110px;
            height: 110px;
        }
        .estrellas{
            margin-top: 15px;
        }
/******************************************************************************/
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
        .circulo{
            padding-left: 8px;
            padding-right: 8px;
            border: 1px solid #00B7EB;
            border-radius: 50%;            
            -webkit-border-radius: 50px 50px 50px 50px;
            border-radius: 50px 50px 50px 50px;
            -webkit-box-shadow: 1px 1px 1px 1px rgba(0,0,f1,f1);
            box-shadow: 1px 1px 1px 1px rgba(0,0,f1,f1);
        }
        .fondoAzul{
            margin-left: 5px;
            margin-right: 5px;
            color: #ffffff;
            text-align: center;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            background-color: #0089db;
            border: 0px solid #000000;
            border-radius: 4px;
        }
        .imagenDescripcion{
            float: left;
            margin-right: 5px;
        }
/************************ Eventos *********************************************
        @media (min-width: 320px) and (max-width: 639px) {
            .imageEvento{
                margin-top: 5px;
                margin-bottom: 5px;
                width: 55%;
                height: 80px;
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
                margin-top: 5px;
                margin-bottom: 5px;
                width: 55%;
                height: 90px;
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
                margin-top: 5px;
                margin-bottom: 5px;
                width: 55%;
                height: 90px;
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
                margin-top: 5px;
                margin-bottom: 5px;
                width: 55%;
                height: 90px;
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
                margin-top: 10px;
                margin-bottom: 10px;
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
                margin-top: 10px;
                margin-bottom: 10px;
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
            margin-top: 10px;
            margin-bottom: 10px;
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
/************************* Discografía ****************************************/        
        .textoAlbum{
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-left: #a7590b; /* #EBEBEB;*/
            border-left-style: solid;
            border-left-width: 4px;
            color: #ffffff;
            background-color:  #FF8000; 
            font-family: Helvetica, Open Sans; 
        }
        .textoBiografia{
            padding-left: 20px;
            padding-top: 21px;
            padding-bottom: 21px;
            border-left: #a7590b;
            border-left-style: solid;
            border-left-width: 4px;
            color: #ffffff;
            background-color:  #FF8000; 
            font-family: Helvetica, Open Sans; 
        }
        .textoEstilo{
            margin-top: 10px;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            font-style: normal;
        }
        .textoDisco{
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-weight: bold;
        }
        .textoAnio{
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-weight: bold;
        }
        .sociales{
            width: auto;
            position: absolute;
            top: 100px;
            right: 0px;
            background-color: #ffffff; /*#B0BED9; Azul gris*/
            color: #ffffff;
        }             
        .description{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            text-align: justify;
        }
        .ciudad{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-style: oblique;
            text-align: justify;
        }        
        .publicidad{
            margin-top: 0px;
            padding-top: 100px;
            height: 390px;
        }        
        .aforo{
            margin-top: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 0px;
            padding-right: 0px;
            font-family: Helvetica, Open Sans;
            font-style: italic;
            text-align: center;
        }                
        .textoDescripcion{
            padding-left: 10px;
            padding-right: 10px;
            text-align: justify;
            font-family: Helvetica, Open Sans;
        }
        .textoCarrera{
            font-family: Helvetica, Open Sans;
        }
        .textoCaracteristicas{
            margin-left: 0px;
            margin-right: 0px;
            font-family: Helvetica, Open Sans;
        }
        .textoValoracion{
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-right: 10px;
            font-family: Helvetica, Open Sans;
        }
        .textoDireccion{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .textoComo{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 16px;
            margin-bottom: 12px;
        }
        .textoTrans{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 16px;
            font-style: italic;
            margin-bottom: 10px;
        }
        
/**************************** Calendario *************************************/        
        .calendarioFlotante{
            position:fixed; 
            background-color: #dc7003;
        }
        .tituloCalendario{
            padding-top: 5px;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 14px;
            font-style: normal;
            font-weight: bold;
            text-align: center;
        }
        @media (min-width: 320px){
            .fixed {
                position: fixed;
                top: 146px;
                padding-left: 0px;
                width: 292.5px;
                z-index: 100;
            }
        }   
        @media (min-width: 425px){
            .fixed {
                position: fixed;
                top: 146px;
                padding-left: 0px;
                width: 292.5px;
                z-index: 100;
            }
        }
        @media (min-width: 768px){
            .fixed {
                position: fixed;
                top: 146px;
                padding-left: 0px;
                width: 312.5px;
                z-index: 100;
            }
        }
        @media (min-width: 1024px){
            .fixed {
                position: fixed;
                top: 146px;
                padding-left: 0px;
                width: 374px;
                z-index: 100;
            }
        }
        @media (min-width: 1440px){
            .fixed {
                position: fixed;
                top: 146px;
                padding-left: 0px;
                width: 457.5px;
                z-index: 100;
            }
        }
        .affix {
            top: 0px;
            width: 100%;
            z-index: 9999 !important;
        }
        .tituloInteres{
            color: #dc0010;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
        }
        .alerta{
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            padding-bottom: 5px;
            text-align: justify;
            line-height: 30px;
            border-left: #337ab7;
            border-left-style: solid;
            border-left-width: 4px;
            background-color: #00B7EB;
            color: #ffffff;
            font-family: Helvetica, Open Sans;
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
/************************* Sociales *****************************************/ 
        .redesSociales{
            align-content: center;
            padding-left: 55px;
        }
        .btn-spotify{
            color: #ffffff;
            background-color: greenyellow;
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
            margin-left: 5px;
            margin-right: 0px;
            margin-bottom: 8px;
            padding-top: 6px !important;
            padding-bottom: 6px !important;
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
        .noSeguir{
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
            font-size: 10px;
        }
        
</style>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Open+Sans\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Days+One\" />
";
    }

    // line 929
    public function block_classBody($context, array $blocks = array())
    {
    }

    // line 930
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <div id=\"bg-boxed\"><!-- Begin Boxed or Fullwidth Layout -->
        <div class=\"";
        // line 932
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                ";
        // line 935
        $this->displayBlock('BarraSuperior', $context, $blocks);
        // line 1011
        echo "                ";
        $this->loadTemplate("registro/registro.html.twig", "salas/perfil.html.twig", 1011)->display($context);
        // line 1012
        echo "                <!-- Begin Navigation -->
                ";
        // line 1014
        echo "<div class=\"navbar-wrapper\">
    <div class=\"navbar navbar-main\" id=\"fixed-navbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 column-header\">
                    <div class=\"navbar-header\">
                        <!-- Brand -->
                        <a href=\"";
        // line 1021
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"navbar-brand\">
                            <img src=\"";
        // line 1022
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo.png"), "html", null, true);
        echo "\" class=\"raleway-logo\" alt=\"Busco Concierto\">
                        </a>
                        <!-- Mobile Navigation -->
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div><!-- /navbar header -->
                    <!-- Main Navigation - Explained in Documentation -->
                    <nav class=\"navbar-collapse collapse navHeaderCollapse\" role=\"navigation\" style=\"padding-right: 0px\">
                        <ul class=\"nav navbar-nav navbar-left\" style=\"margin-left:20px;\">
                            <li>
                                <a href=\"";
        // line 1036
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarEventos");
        echo "\">Eventos</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 1039
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listadoArtistas");
        echo "\">Artistas</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 1042
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listadoSalas");
        echo "\">Salas</a>
                            </li>
                            <li class=\"dropdown hidden-sm hidden-xs\">
                                <a href=\"#\" class=\"ml10 nav-circle-li dropdown-toggle dropdown-form-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-search\"></i>
                                </a>
                                <ul style=\"width:417px;\" class=\"fadeInRight-animated dropdown-menu dropdown-menu-user dropdown-menu-right\">
                                    <li id=\"dropdownForm\" class=\"buscador\"><!-- panel de buscar -->
                                        <div class=\"dropdown-form\">
                                            <form class=\"form-default form-inline p15\" action=\"";
        // line 1051
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" id=\"formularioBuscadorMenu\" method=\"post\">
                                                <div class=\"input-group\">
                                                    <input style=\"width:300px;\" type=\"text\" class=\"form-control search-input\" placeholder=\"Búsqueda\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-rw btn-primary search-btn\" type=\"button\">Buscar</button>
                                                    </span>
                                                </div>
                                            </form><!-- /searh form -->
                                        </div><!-- /dropdown form -->
                                    </li><!-- /dropdownForm list item -->
                                </ul> 
                            </li>
                        </ul>
                        <a href=\"";
        // line 1064
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" 
                           class=\"btn btn-custom-orange btn-lg pull-right\" style=\"margin-top:7px;\">
                            Crear un concierto
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
                ";
        // line 1074
        $this->displayBlock('subHeader', $context, $blocks);
    }

    // line 932
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 935
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
        // line 942
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 943
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
                                        <a data-toggle=\"modal\" data-target=\"#profesionales\">&Aacute;rea Profesionales</a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            Regístrate<span class=\"caret\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
        // line 969
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 970
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
        // line 985
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

    // line 1074
    public function block_subHeader($context, array $blocks = array())
    {
        // line 1075
        echo "                ";
        $this->displayBlock('headerParallax', $context, $blocks);
        // line 1162
        echo "                
            </header>
    ";
        // line 1164
        $this->displayBlock('contenido', $context, $blocks);
        // line 1902
        echo "<!-- Fin Contenido -->
    ";
        // line 1903
        $this->loadTemplate("default/pie.html.twig", "salas/perfil.html.twig", 1903)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
 ";
    }

    // line 1075
    public function block_headerParallax($context, array $blocks = array())
    {
        echo " 
                <div class=\"header-parallax fill\" 
                     style=\"background-image:url('";
        // line 1077
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["directorio_imagenes_public"] ?? null) . "backgrounds/bg9.png")), "html", null, true);
        echo "'); 
                     background-color: #272727; padding: 140px 0 140px 0;\" 
                     data-top-bottom=\"background-position: 50% 0px;\" 
                     data-bottom-top=\"background-position: 50% -200px;\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!--=== Page Title ===-->
                            <div class=\"col-xs-12\" style=\"text-align:center;\">
                                <h2 class=\"text-white\">Teatro Español</h2>
                            </div>
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div><!-- /page header --> 
                <div class=\"row background-white sombraMenu\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"menu-detalles\"><!-- Menu -->
                        <div class=\"navbar-header\">
                            <!-- Mobile Navigation -->
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"glyphicon glyphicon-list\"></span>
                            </button>
                        </div><!-- /navbar header -->
                        <nav class=\"navbar-collapse collapse navHeaderCollapse\" role=\"navigation\" style=\"padding-right: 0px\">
                            <ul class=\"nav navbar-nav navbar-left\">
                                <li class=\"menu\">
                                    <a href=\"#Eventos\" class=\"menuDetalles\">Eventos</a>
                                </li>
                                <li class=\"menu dropdown\" id=\"menuDetalles\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        Detalles<span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li class=\"subMenu\" id=\"subItem1\">
                                            <a href=\"#Video\" class=\"subMenuItem\">Video</a>
                                        </li>
                                        <li class=\"subMenu\" id=\"subItem2\">
                                            <a href=\"#Descripcion\" class=\"subMenuItem\">Descripci&oacute;n</a>
                                        </li>
                                        <li class=\"subMenu\" id=\"subItem3\">
                                            <a href=\"#Caracteristicas\" class=\"subMenuItem\">Caracter&iacute;sticas</a>
                                        </li>
                                        <li class=\"subMenu\" id=\"subItem4\">
                                            <a href=\"#Datos\" class=\"subMenuItem\">Datos T&eacute;nicos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Locacion\" class=\"menuDetalles\">Localizaci&oacute;n</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Valoraciones\" class=\"menuDetalles\">Valoraciones</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Multimedia\" class=\"menuDetalles\">Multimedia</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Interes\" class=\"menuDetalles\">De inter&eacute;s</a>
                                </li>
                                <li>
                                    <div class=\"seguidores\">3842 Seguidores</div>
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
        // line 1154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block proponerConcierto\">
                                        Proponer concierto
                                    </a> 
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>  <!-- Fin Menu del perfil -->
                ";
    }

    // line 1164
    public function block_contenido($context, array $blocks = array())
    {
        echo "<!-- Contenido -->
        <div class=\"container\"><!-- Perfil de la sala -->
            <div class=\"row mt10\"><!-- Fila -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">                    
                    <div class=\"row\"><!-- Informacion -->
                        <div class=\"col-xs-12 col-sm-12 col-md-7\">
                            <div class=\"row panelSombra mb20\" id=\"Eventos\"><!-- Seccion de eventos --> 
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
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
        // line 1181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img-responsive imageEvento\">
                                        </div>  <!-- Fin Dia -->
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-lg-12 descriptionTitulo\">
                                                    Vetusta Morla Sala Caracol
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
                                                    <span class=\"fa fa-calendar\"></span> 28 Mayo 2018.
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
                                                        <div class=\"counter\" data-date=\"2018-05-28 19:00:00\"></div>
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
        // line 1245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img-responsive imageEvento\">
                                        </div>  <!-- Fin Dia -->
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-lg-12 descriptionTitulo\">
                                                    Vetusta Morla Sala Caracol
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
                                                    <span class=\"fa fa-calendar\"></span> 30 Junio 2018.
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
                                                        <div class=\"counter\" data-date=\"2018-06-30 19:00:00\"></div>
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
                                                    351 €
                                                </div>
                                            </div>
                                        </div> <!-- Fin boton -->
                                    </div><!-- Fin Evento 2 -->
                                    <!-- Evento 3 -->
                                    <div class=\"row bordeEventos\">
                                        <div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\"><!-- Imagen -->
                                            <img src=\"";
        // line 1306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" alt=\"Foto\" class=\"img-responsive imageEvento\">
                                        </div>  <!-- Fin Dia -->
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-lg-12 descriptionTitulo\">
                                                    Vetusta Morla Sala Caracol
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
                                                    <span class=\"fa fa-calendar\"></span> 24 Mayo 2018.
                                                </div>
                                                <div class=\"col-xs-6 col-sm-6 col-lg-6\">
                                                    <span class=\"fa fa-clock-o\"></span> 19:00
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-lg-12\">
                                                    <span class=\"glyphicon glyphicon-tags\"></span> Entradas disponibles: 
                                                    <span class=\"badge badge-info\">10</span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-sm-12 col-lg-12 textoTiempo\">
                                                    Faltan:
                                                    <div class=\"reloj2\">
                                                        <div class=\"counter\" data-date=\"2018-05-24 19:00:00\"></div>
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
                            <div class=\"row panelSombra\" id=\"Video\"><!-- Videos -->
                                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/K74FHYLvF0s?rel=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                            </div>
                            <div class=\"row panelSombra\" id=\"Descripcion\">
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                    <h4>
                                        <img src=\"";
        // line 1382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/casa.png"), "html", null, true);
        echo "\" width=\"22px\" height=\"22px\"  alt=\"Casa\" class=\"img-responsive imagenDescripcion\">
                                        Descripci&oacute;n
                                    </h4>
                                </div>
                                <div class=\"col-sm-12 col-md-12 col-lg-12 mb10\">
                                    ";
        // line 1387
        if ($this->getAttribute(($context["sala"] ?? null), "informacion", array(), "any", true, true)) {
            // line 1388
            echo "                                        <p class=\"textoDescripcion\">
                                            ";
            // line 1389
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sala"] ?? null), "informacion", array()), "html", null, true);
            echo "
                                        </p>
                                    ";
        } else {
            // line 1392
            echo "                                    <p class=\"alerta\">
                                    Aun no haz ingresado la descripci&oacute;n de la sala, es
                                    importante que tu p&uacute;blico conozca de 
                                    que vas t&uacute;. Por lo que una breve descripci&oacute;n
                                    aqu&iacute; vendr&iacute;a bien. Puedes añadir
                                    una descripci&oacute;n haciendo clic en el bot&oacute;n
                                    Editar Sala que aparece arriba.
                                    </p>
                                    ";
        }
        // line 1401
        echo "                                </div>
                            </div>                            
                            <div class=\"row panelSombra\" id=\"Caracteristicas\"><!-- Caracteristicas -->
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                    <h4>
                                        <span class=\"glyphicon glyphicon-list-alt\"></span>
                                        Caracter&iacute;sticas
                                    </h4>
                                </div>
                                <div class=\"col-sm-12 col-md-12 col-lg-12 mb10\">
                                    <div class=\"row textoCaracteristicas\">
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Paga cache
                                        </div>
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Paga por taquilla
                                        </div>
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Act&uacute;as gratis
                                        </div>   
                                    </div>
                                    <!-- -->
                                    <div class=\"row textoCaracteristicas\">
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Invita comida
                                        </div>
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Invita bebida
                                        </div>   
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Dispone de camerino
                                        </div>   
                                    </div>
                                    <!-- -->
                                    <div class=\"row textoCaracteristicas\">
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Cobra alquiler de sala
                                        </div>   
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Solo permite formato ac&uacute;stico
                                        </div>
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Ofrece alojamiento
                                        </div>
                                    </div>
                                    <!-- -->
                                    <div class=\"row textoCaracteristicas\">
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Ofrece t&eacute;cnico de sonido
                                        </div>   
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Ofrece equipo de voces
                                        </div>
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Ofrece microfon&iacute;a
                                        </div>
                                    </div>
                                    <!-- -->
                                    <div class=\"row textoCaracteristicas\">
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Ofrece ampli guitarra
                                        </div>   
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Ofrece ampli bajo
                                        </div>
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Ofrece piano
                                        </div>
                                    </div>
                                    <!-- -->
                                    <div class=\"row textoCaracteristicas\">
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Ofrece bateria
                                        </div>   
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Luces
                                        </div>
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            M&aacute;quina de humo
                                        </div>
                                    </div>
                                    <!-- -->
                                    <div class=\"row textoCaracteristicas\">
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Escenario interior
                                        </div>   
                                        <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                            Escenario al aire libre
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Fin Caracteristicas -->
                            <div class=\"row panelSombra\" id=\"Datos\"><!-- Datos técincos -->
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                    <h4>
                                        <span class=\"glyphicon glyphicon-wrench\"></span>
                                        Datos t&eacute;cnicos
                                    </h4>
                                </div>
                                <div class=\"col-sm-12 col-md-12 col-lg-12 mb10\">
                                    ";
        // line 1521
        if ($this->getAttribute(($context["sala"] ?? null), "datosTecnicos", array(), "any", true, true)) {
            // line 1522
            echo "                                    <p class=\"textoDatosTecnicos\">
                                        ";
            // line 1523
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sala"] ?? null), "datosTecnicos", array()), "html", null, true);
            echo "
                                    </p>   
                                    ";
        } else {
            // line 1526
            echo "                                    <div class=\"alerta\">
                                        <p>
                                        Este local no tiene disponible datos t&eacute;cnicos todav&iacute;a.
                                        </p>
                                    </div>
                                    ";
        }
        // line 1532
        echo "                                </div>
                            </div><!-- Fin Datos técincos -->
                            <div class=\"row panelSombra\" id=\"Locacion\">
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                    <h4>
                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                                        Estamos en 
                                    </h4>
                                </div>
                                <div class=\"col-sm-12 col-md-12 col-lg-12 mb10 text-justify\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoDireccion\">
                                            Calle Príncipe, 25, 28012 Madrid, España.
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"hidden-xs hidden-sm col-md-12 col-lg-12\">                                  
            <!--***************************Google map ***********************************-->
                                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17184.041582175236!2d-3.7115710696198034!3d40.4146527306085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x109f2a7e6cc425a3!2sTeatro+Espa%C3%B1ol!5e0!3m2!1ses!2sve!4v1521853725191\" 
                                                width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoComo\">
                                            ¿Com&oacute; llegar?
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoTrans\">
                                            Linea de bus 34, Embajadores metro 3.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row panelSombra\" id=\"Valoraciones\"><!-- Valoraciones -->
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                    <h4>
                                        Valoraciones
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                    </h4>
                                </div>
                                <div class=\"col-sm-12 col-md-12 col-lg-12 mb10 text-justify\">   
                                    <div class=\"row\"><!-- Valoración 1 -->
                                        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\"><!-- Imagen -->
                                            <img src=\"";
        // line 1580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img-responsive imagenValoracion\">
                                        </div>   <!-- Fin Imagen -->
                                        <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"><!-- Descripcion -->
                                            <div class=\"row\"><!-- Estrellas -->
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div class=\"row\"><!-- Comentario -->
                                                <p class=\"textoValoracion\">
                                                Teatro, música y exposiciones en un 
                                                antiguo corral de comedias del s. XVI 
                                                decorado en tonos rojos y dorados.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\"><!-- Valoración 2 -->
                                        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\"><!-- Imagen -->
                                            <img src=\"";
        // line 1600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img-responsive imagenValoracion\">
                                        </div>   <!-- Fin Imagen -->
                                        <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"><!-- Descripcion -->
                                            <div class=\"row\"><!-- Estrellas -->
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div class=\"row\"><!-- Comentario -->
                                                <p class=\"textoValoracion\">
                                                Una gran programación, variada, fresca,
                                                y versátil.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Fin Valoraciones -->
                            <div class=\"row panelSombra\" id=\"Multimedia\"> <!-- Multimedia -->
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                    <h4>
                                        <span class=\"fa fa-play-circle\" style=\"margin-top:10px;\"></span>
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
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/sSX9YlNuUpc?rel=0&amp;controls=0\"></a>
                                        </div>
                                        <div class=\"item-video\" data-merge=\"2\">
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/w9IT7Hwh8Zo?rel=0&amp;controls=0\"></a>
                                        </div>
                                        <div class=\"item-video\" data-merge=\"3\"> 
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/KOl8LjKLDLs?rel=0&amp;controls=0\"></a>
                                        </div>
                                        <div class=\"item-video\" data-merge=\"4\">
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/EccF9ISUgEQ?rel=0&amp;controls=0\"></a>
                                        </div>
                                        <div class=\"item-video\" data-merge=\"5\"> 
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/WfPu9Jrcpuk?rel=0&amp;controls=0\"></a>
                                        </div>
                                        <div class=\"item-video\" data-merge=\"6\">
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/6dVFy4d61gU?rel=0&amp;controls=0\"></a>
                                        </div>
                                        <div class=\"item-video\" data-merge=\"7\"> 
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/g_s17HMFaug?rel=0&amp;controls=0\"></a>
                                        </div>
                                        <div class=\"item-video\" data-merge=\"8\">
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/sSX9YlNuUpc?rel=0&amp;controls=0\"></a>
                                        </div>
                                    </div><!-- Fin Carusel -->
                                </div><!-- Fin Videos --> 
                            </div> <!-- Fin Multimedia -->
                        </div>
                        <div class=\"hidden-xs hidden-sm col-md-5 pb20\"><!-- Columna derecha -->
                            <div class=\"\" id=\"calendarioFlotante\">                
                                <!--div class=\"row ml5 background-white\">
                                    <div class=\"col-md-2\"></div>
                                    <div class=\"col-md-8\">
                                        <a href=\"";
        // line 1673
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                            Proponer concierto
                                        </a> 
                                    </div>
                                    <div class=\"col-md-2\"></div>
                                </div-->
                                <!-- Calendario -->
                                <div class=\"row ml5 background-white\"><!-- Redes Sociales -->
                                    <div class=\"col-md-12\">
                                        <div class=\"tituloCalendario\">
                                        Calendario de disponibilidad
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row background-white ml5 pb10\">
                                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white\">  
                                        <div id=\"calendar\" style=\"width: 100%\"></div>
                                    </div>
                                </div>
                                <div class=\"row ml5 background-white\"><!-- Redes Sociales -->
                                    <div class=\"col-md-12\">
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
                            </div>
                        </div><!-- Fin Columna derecha -->
                    </div><!-- Fin Información -->
                </div>
            </div><!-- Fin Fila -->
        </div><!-- Fin Perfil -->
        <div class=\"container background-white\" id=\"Interes\"><!-- De interes -->
            <div class=\"col-sm-12\">
                <div class=\"heading2\">
                    <h4 class=\"tituloInteres\">
                        <span class=\"ion-plus ml5 mr5\"></span>
                        Otras salas que pueden ser de su inter&eacute;s
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
        // line 1750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala2.png"), "html", null, true);
        echo "\" alt=\"...\">                             
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 1755
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala2.png"), "html", null, true);
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
                            <a href=\"";
        // line 1765
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\"><h2>Sala 2</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                     <span class=\"fecha-container\">
                                         <i class=\"fa fa-calendar\"></i> 
                                         12 Feb 2018
                                     </span>
                                </div>
                            </div>
                            <div class=\"row mt10\">
                                <div class=\"col-md-12\">
                                    <span class=\"location-container pull-left\" href=\"#\"><i class=\"fa fa-map-marker\"></i>
                                        Barcelona
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
        // line 1787
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" alt=\"...\">
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 1792
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
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
                            <a href=\"#\"><h2>Sala 3</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <span class=\"fecha-container\">
                                        <i class=\"fa fa-calendar\"></i>
                                        20 Feb 2018
                                    </span>
                                </div>
                            </div>
                            <div class=\"row mt10\">
                                <div class=\"col-md-12\">
                                    <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                        Chile
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
        // line 1824
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala4.png"), "html", null, true);
        echo "\" alt=\"...\">
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 1829
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                        <div class=\"image-icon-holder\"><span class=\"ion-ios7-search image-icons\"></span></div>
                                    </a>
                                    <a href=\"\" class=\"info\">
                                        <div class=\"image-icon-holder\"><span class=\"ion-link image-icons\"></span></div>
                                    </a>
                                </div><!-- /image hover content -->
                            </div><!-- /mask-->
                        </div>
                        <div class=\"shop-product content-box-shadow\">
                            <a href=\"#\"><h2>Sala 4</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <span class=\"fecha-container\">
                                        <i class=\"fa fa-calendar\"></i>
                                        14 Abr 2018
                                    </span>
                                </div>
                            </div>
                            <div class=\"row mt10\">
                                <div class=\"col-md-12\">
                                    <span class=\"location-container pull-left\"><i class=\"fa fa-map-marker\"></i>
                                        Alemania
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
        // line 1861
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala5.png"), "html", null, true);
        echo "\" alt=\"...\">
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 1866
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala5.png"), "html", null, true);
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
                            <a href=\"\"><h2>Teatro</h2></a>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                     <span class=\"fecha-container\">
                                        <i class=\"fa fa-calendar\"></i>
                                        24 Abr 2018
                                     </span>
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
        </div><!-- Fin row -->    
    ";
    }

    // line 1909
    public function block_javascripts($context, array $blocks = array())
    {
        // line 1910
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 1911
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1912
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1913
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1914
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1915
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1916
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1917
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1918
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1919
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1920
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1921
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 1923
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Select -->
    <script type=\"text/javascript\" src=\"";
        // line 1925
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Simple Ajax Uploader -->
    <script type=\"text/javascript\" src=\"";
        // line 1927
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
\$('#fixed-navbar').affix({
    offset: {
        top: \$('.top-bar').height()
    }   
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
    </script>
    ";
        // line 2169
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
        // line 2170
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 2171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 2173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 2178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- -->
    <script src=\"";
        // line 2180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 2183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 2185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 2188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
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
/********************************Calendario***********************************/        
        \$(function (){
            /*El calendario*/
            \$(\"#calendar\").datepicker({
                language: \"es\",
            });
        });
        \$(document).scroll(function() {
            //console.log(\$(document).scrollTop());
            if(\$(document).scrollTop() >= 550 && \$(document).scrollTop()<= 3025){
                document.getElementById(\"calendarioFlotante\").setAttribute(\"class\",\"fixed\");
            }
            else{
                document.getElementById(\"calendarioFlotante\").setAttribute(\"class\",\"\");
            }
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
                         \$('html,body').animate({scrollTop: targetOffset}, 3000);
                         return false;
                    }
                }
           });
        });
/******************Menu siempre visible***************************************/ 
    \$(document).scroll(function() {
        if(\$(document).scrollTop() > 30){
            document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar top-bar-fixed\");
            document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main affix\");
            if(\$(document).scrollTop() > 300){
                document.getElementById(\"menu-detalles\").setAttribute(\"class\",\"col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white menuDetallesFixed\");
            }
            else{
                document.getElementById(\"menu-detalles\").setAttribute(\"class\",\"col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white\");
            }
        }
        else{
            document.getElementById(\"fixed-topBar\").setAttribute(\"class\",\"top-bar\");
            document.getElementById(\"fixed-navbar\").setAttribute(\"class\",\"navbar navbar-main\");
            document.getElementById(\"menu-detalles\").setAttribute(\"class\",\"col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white\");
        }
    });   
/********************************* SubMenu ************************************/
    \$(\".subMenuItem\").click(function() {        
        document.getElementById(\"menuDetalles\").setAttribute(\"class\",\"menu dropdown\");
    });
/************************** Carrusel multimedia *******************************/
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
                        items: 2,
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
        return "salas/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2566 => 2188,  2561 => 2186,  2557 => 2185,  2552 => 2183,  2546 => 2180,  2541 => 2178,  2537 => 2177,  2533 => 2176,  2529 => 2175,  2525 => 2174,  2521 => 2173,  2516 => 2171,  2513 => 2170,  2507 => 2169,  2262 => 1927,  2257 => 1925,  2252 => 1923,  2247 => 1921,  2243 => 1920,  2239 => 1919,  2235 => 1918,  2231 => 1917,  2227 => 1916,  2223 => 1915,  2219 => 1914,  2215 => 1913,  2211 => 1912,  2207 => 1911,  2204 => 1910,  2201 => 1909,  2160 => 1866,  2152 => 1861,  2117 => 1829,  2109 => 1824,  2074 => 1792,  2066 => 1787,  2041 => 1765,  2028 => 1755,  2020 => 1750,  1940 => 1673,  1864 => 1600,  1841 => 1580,  1791 => 1532,  1783 => 1526,  1777 => 1523,  1774 => 1522,  1772 => 1521,  1650 => 1401,  1639 => 1392,  1633 => 1389,  1630 => 1388,  1628 => 1387,  1620 => 1382,  1541 => 1306,  1477 => 1245,  1410 => 1181,  1389 => 1164,  1376 => 1154,  1296 => 1077,  1290 => 1075,  1281 => 1903,  1278 => 1902,  1276 => 1164,  1272 => 1162,  1269 => 1075,  1266 => 1074,  1236 => 985,  1218 => 970,  1214 => 969,  1185 => 943,  1181 => 942,  1170 => 935,  1164 => 932,  1160 => 1074,  1147 => 1064,  1131 => 1051,  1119 => 1042,  1113 => 1039,  1107 => 1036,  1090 => 1022,  1086 => 1021,  1077 => 1014,  1074 => 1012,  1071 => 1011,  1069 => 935,  1063 => 932,  1057 => 930,  1052 => 929,  164 => 40,  159 => 38,  154 => 36,  149 => 34,  144 => 32,  140 => 31,  135 => 29,  132 => 28,  129 => 27,  123 => 927,  119 => 926,  113 => 924,  111 => 27,  107 => 26,  102 => 24,  98 => 23,  94 => 22,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  64 => 13,  59 => 11,  54 => 9,  48 => 5,  45 => 4,  39 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/perfil.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/perfil.html.twig");
    }
}
