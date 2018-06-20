<?php

/* salas/perfil4.html.twig */
class __TwigTemplate_74f426f7c85019f1c065c9e70ac1f5b82a61e8c72074270308a68c5883b18d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "salas/perfil4.html.twig", 2);
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
        // line 640
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 28
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 29
        echo "    <!-- Fuentes y estilos --
    <link rel=\"stylesheet\" href=\"";
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">
    <!-- CountDown Styles -->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/TimeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <style>
        .btn {
            border-radius:2px;
        }        
        .botonEvento {
            padding: 10px 19px;
            font-size: 14px;
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
/************************ Eventos *********************************************/
        @media (min-width: 320px) and (max-width: 639px) {
            .imageEvento{
                margin-top: 5px;
                margin-bottom: 5px;
                width: 50%;
                height: 160px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 55%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 15px;
                padding-bottom: 15px;
                background-color:  #FF8000; 
                width: 40%;
                height: 160px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
        }
        @media (min-width: 640px) {
            .imageEvento{
                margin-top: 5px;
                margin-bottom: 5px;
                width: 50%;
                height: 160px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 55%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 15px;
                padding-bottom: 15px;
                background-color:  #FF8000; 
                width: 40%;
                height: 160px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
        }
        @media (min-width: 768px) {
            .imageEvento{
                margin-top: 5px;
                margin-bottom: 5px;
                width: 50%;
                height: 160px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 55%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 15px;
                padding-bottom: 15px;
                background-color:  #FF8000; 
                width: 40%;
                height: 160px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
        }
        @media (min-width: 980px) {
            .imageEvento{
                margin-top: 5px;
                margin-bottom: 5px;
                width: 50%;
                height: 160px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 52%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 30px;
                padding-bottom: 30px;
                background-color:  #FF8000; 
                width: 40%;
                height: 160px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
        }
        @media (min-width: 1024px) {
            .imageEvento{
                margin-top: 5px;
                margin-bottom: 5px;
                width: 50%;
                height: 160px;
                border-radius: 4px;
                float: left;
            }
            .diaCalendario{
                position: absolute;
                top: 0px;
                left: 52%;
                margin-top: 5px;
                margin-bottom: 5px;
                padding-top: 30px;
                padding-bottom: 30px;
                background-color:  #FF8000; 
                width: 40%;
                height: 160px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
        }
        @media (min-width: 1200px){
            .imageEvento{
                margin-top: 5px;
                margin-bottom: 5px;
                width: 50%;
                height: 160px;
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
                height: 160px;                
                color: #ffffff;
                font-size: 16px;
                font-family: Helvetica, Open Sans; 
                font-weight: bold;
                text-align: center;
                border-radius: 4px;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
                float: left;
            }
        }
        .bordeEventos{
            padding-bottom: 2px;
            margin-bottom: 0px;
            border-bottom: 1px solid;
            border-bottom-color: #d3d3d3;
        }
        .dia{
            font-size: 30px;
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
        .textoTiempo{
            font-family: Helvetica, Open Sans; 
            font-size: 12px;
        }
        .entradasRestantes{
            padding-top: 12px;
            font-family: Helvetica, Open Sans; 
            font-size: 14px;
        }
        .tituloPrecio{
            margin-top: 10px;
            font-family: Helvetica, Open Sans;
            font-size: 18px;
            text-align: center;
        }
        .precio{
            margin-top: 0px;
            font-family: Helvetica, Open Sans;
            font-size: 28px;
            text-align: center;
        }
        .botonMas{
            color: #ffffff;
            font-family: HelveticaNarrow, Helvetica;
            font-style: normal;
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
        .descriptionTitulo{
            font-size: 25px;
            font-family: HelveticaNarrow, Helvetica, Arial, sans-serif;
            font-weight: bold; 
            text-align: justify;
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
        .estrellas{
            margin-top: 15px;
        }
        .seguidores{
            margin-top: 9px;
            font-family: Helvetica, Open Sans;
            font-size: 12px;
            font-style: italic;
            font-weight: bold;
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
        .image{
            margin-top: 5px;
            margin-bottom: 5px;
            height: 140px;
            border-radius: 4px;
        }
        .calendarioFlotante{
            position:fixed; 
            background-color: #dc7003;
        }
        .fixed {
            position: fixed;
            top: 10px;
            width: 370px;
            z-index: 100;
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
        .favorito{
            min-width: 80px;
            color: #FFFFFF;
            font-family: Helvetica, Open Sans;
            text-align: center;
            background-color: #5bc0de;
            margin-top: 10px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            font-size: 10px;
        }
        .noFavorito{
            min-width: 80px;
            color: #FFFFFF;
            font-family: Helvetica, Open Sans;
            text-align: center;
            background-color: #5bc0de;
            margin-top: 10px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            font-size: 10px;
        }
        .compartir{
            width: auto;
            min-width: 80px;
            margin-top: 10px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 6px;
            padding-bottom: 6px;
            font-family: Helvetica, Open Sans;
            text-align: center;
            font-size: 10px;
        }
        .seguir{
            width: auto;
            min-width: 80px;
            margin-top: 10px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 6px;
            padding-bottom: 6px;
            font-family: Helvetica, Open Sans;
            text-align: center;
            font-size: 10px;
        }
        .noSeguir{
            width: auto;
            min-width: 80px;
            margin-top: 10px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            padding-left: 8px;
            padding-right: 8px;                                
            padding-top: 5px;
            padding-bottom: 5px;
            font-size: 10px;
        }        
</style>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Open+Sans\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Days+One\" />
";
    }

    // line 645
    public function block_classBody($context, array $blocks = array())
    {
    }

    // line 646
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <div id=\"bg-boxed\"><!-- Begin Boxed or Fullwidth Layout -->
        <div class=\"";
        // line 648
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                ";
        // line 651
        $this->displayBlock('BarraSuperior', $context, $blocks);
        // line 727
        echo "                ";
        $this->loadTemplate("registro/registro.html.twig", "salas/perfil4.html.twig", 727)->display($context);
        // line 728
        echo "                <!-- Begin Navigation -->
                ";
        // line 730
        echo "<div class=\"navbar-wrapper\">
    <div class=\"navbar navbar-main\" id=\"\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 column-header\">
                    <div class=\"navbar-header\">
                        <!-- Brand -->
                        <a href=\"";
        // line 737
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"navbar-brand\">
                            <img src=\"";
        // line 738
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
        // line 752
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarEventos");
        echo "\">Eventos</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 755
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listadoArtistas");
        echo "\">Artistas</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 758
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
                                            <form class=\"form-default form-inline p15\">
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
        // line 780
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
        // line 790
        $this->displayBlock('subHeader', $context, $blocks);
    }

    // line 648
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 651
    public function block_BarraSuperior($context, array $blocks = array())
    {
        echo "<!-- Begin Top Bar -->
                <div class=\"top-bar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- ¿Como funciona? -->
                            <div class=\"col-sm-5 col-md-5 col-lg-5\">
                                <ul class=\"topbar-list list-inline\" style=\"border-right:none;\">
                                    <li style=\"border-left:none;\"><a href=\"";
        // line 658
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 659
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
        // line 685
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 686
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
        // line 701
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

    // line 790
    public function block_subHeader($context, array $blocks = array())
    {
        // line 791
        echo "                ";
        $this->displayBlock('headerParallax', $context, $blocks);
        // line 857
        echo "                
            </header>
    ";
        // line 859
        $this->displayBlock('contenido', $context, $blocks);
        // line 1427
        echo "<!-- Fin Contenido -->
    ";
        // line 1428
        $this->loadTemplate("default/pie.html.twig", "salas/perfil4.html.twig", 1428)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
 ";
    }

    // line 791
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 792
        echo "                <div class=\"header-parallax fill\" 
                     style=\"background-image:url('";
        // line 793
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
                <div class=\"row background-white sombraMenu\" ";
        // line 806
        echo ">
                    <div class=\"col-xs-7 col-sm-8 col-md-7 col-lg-6\"><!-- Menu -->
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
                                    <a href=\"#Eventos\">Eventos</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Descripcion\">Descripci&oacute;n</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Locacion\">Locaci&oacute;n</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Valoraciones\">Valoraciones</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Multimedia\">Multimedia</a>
                                </li>
                                <li class=\"menu\">
                                    <a href=\"#Interes\">De inter&eacute;s</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class=\"hidden-xs hidden-sm col-md-1 col-lg-1\">
                        <div class=\"seguidores\">3842 Seguidores</div>
                    </div>
                    <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-2\"><!-- Seguir -->
                        <a href=\"#\" class=\"btn btn-info seguir\" id=\"seguir\">
                            <span class=\"fa fa-thumbs-up\"></span> Seguir
                        </a>
                    </div>
                    <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-2\"><!-- Favorito -->
                        <a href=\"#\" class=\"btn btn-info favorito\" id=\"favorito\" onclick=\"cambiar(id);\">
                            <span class=\"fa fa-heart-o\"></span> Favorito
                        </a> 
                    </div>
                    <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\"><!-- Favorito -->
                        <a href=\"#\" class=\"btn btn-info compartir\" id=\"compartir\">
                            <span class=\"fa fa-share-alt\"></span> Compartir<!--  fa-share -->
                        </a> 
                    </div>
                </div>  <!-- Fin Menu del perfil -->
                ";
    }

    // line 859
    public function block_contenido($context, array $blocks = array())
    {
        echo "<!-- Contenido -->
        <div class=\"container\"><!-- Perfil de la sala -->
            <div class=\"row mt10 mb20\"><!-- Fila -->
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"row panelSombra mb20\" id=\"Eventos\"><!-- Seccion de eventos --> 
                        <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                            <h4>
                                <span class=\"fa fa-bullhorn\" style=\"margin-top:10px;\"></span>
                                Eventos
                            </h4>
                        </div>
                        <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\"><!-- Contenido de eventos -->
                            <!-- Evento 1 -->
                            ";
        // line 872
        $this->loadTemplate("salas/detalleEvento.html.twig", "salas/perfil4.html.twig", 872)->display(array_merge($context, array("foto" => (        // line 873
($context["directorio_imagenes_public"] ?? null) . "/sala1.png"))));
        // line 876
        echo "                            <!-- Fin Evento 1 -->
                            <!-- Evento 2 -->
                            ";
        // line 878
        $this->loadTemplate("salas/detalleEvento.html.twig", "salas/perfil4.html.twig", 878)->display(array_merge($context, array("foto" => (        // line 879
($context["directorio_imagenes_public"] ?? null) . "/sala2.png"))));
        // line 880
        echo "                            <!-- Fin Evento 2 -->
                            <!-- Evento 3 -->
                            ";
        // line 882
        $this->loadTemplate("salas/detalleEvento.html.twig", "salas/perfil4.html.twig", 882)->display(array_merge($context, array("foto" => (        // line 883
($context["directorio_imagenes_public"] ?? null) . "/sala3.png"))));
        echo "<!-- Fin Evento 3 -->
                            <div class=\"row mt5\">
                                <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"></div>
                                <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                                    <a href=\"#\" class=\"btn btn-primary btn-block botonMas\">
                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                        Ver M&aacute;s
                                    </a>
                                </div>
                                <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\"></div>
                            </div>
                        </div><!-- Fin Contenido de eventos -->
                    </div><!-- Fin Seccion de eventos -->
                    <div class=\"row mb20\"><!-- Informacion -->
                        <div class=\"col-xs-12 col-sm-7 pb20\"><!-- Videos -->
                            <div class=\"row panelSombra\" id=\"Video\">
                                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/K74FHYLvF0s?rel=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                            </div>
                            <div class=\"row panelSombra\" id=\"Descripcion\">
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                    <h4>
                                        <span class=\"glyphicon glyphicon-home\"></span>
                                        Descripci&oacute;n
                                    </h4>
                                </div>
                                <div class=\"col-sm-12 col-md-12 col-lg-12 mb10\">
                                    ";
        // line 909
        if ($this->getAttribute(($context["sala"] ?? null), "informacion", array(), "any", true, true)) {
            // line 910
            echo "                                        <p class=\"textoDescripcion\">
                                            ";
            // line 911
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sala"] ?? null), "informacion", array()), "html", null, true);
            echo "
                                        </p>
                                    ";
        } else {
            // line 914
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
        // line 923
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
        // line 1043
        if ($this->getAttribute(($context["sala"] ?? null), "datosTecnicos", array(), "any", true, true)) {
            // line 1044
            echo "                                    <p class=\"textoDatosTecnicos\">
                                        ";
            // line 1045
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sala"] ?? null), "datosTecnicos", array()), "html", null, true);
            echo "
                                    </p>   
                                    ";
        } else {
            // line 1048
            echo "                                    <div class=\"alerta\">
                                        <p>
                                        Este local no tiene disponible datos t&eacute;cnicos todav&iacute;a.
                                        </p>
                                    </div>
                                    ";
        }
        // line 1054
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
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </h4>
                                </div>
                                <div class=\"col-sm-12 col-md-12 col-lg-12 mb10 text-justify\">   
                                    <div class=\"row\"><!-- Valoración 1 -->
                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Imagen -->
                                            <img src=\"";
        // line 1102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img img-responsive\">
                                        </div>   <!-- Fin Imagen -->
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                            <div class=\"row\"><!-- Estrellas -->
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star-half-empty\"></i>
                                            </div>
                                            <div class=\"row\"><!-- Comentario -->
                                                <p class=\"textoValoracion\">
                                                Teatro, música y exposiciones en un 
                                                antiguo corral de comedias del s. XVI 
                                                decorado en tonos rojos y dorados.</p>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
                                        </div>
                                    </div>
                                    <div class=\"row\"><!-- Valoración 2 -->
                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Imagen -->
                                            <img src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img img-responsive\">
                                        </div>   <!-- Fin Imagen -->
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                            <div class=\"row\"><!-- Estrellas -->
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star-half-empty\"></i>
                                            </div>
                                            <div class=\"row\"><!-- Comentario -->
                                                <p class=\"textoValoracion\">
                                                Una gran programación, variada, fresca,
                                                y versátil.</p>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
                                        </div>
                                    </div>
                                    <div class=\"row\"><!-- Valoración 3 -->
                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Imagen -->
                                            <img src=\"";
        // line 1145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img img-responsive\">
                                        </div>   <!-- Fin Imagen -->
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                            <div class=\"row\"><!-- Estrellas -->
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star-half-empty\"></i>
                                                <i class=\"fa fa-star-o\"></i>
                                            </div>
                                            <div class=\"row\"><!-- Comentario -->
                                                <p class=\"textoValoracion\">
                                                Las entradas más baratas aunque 
                                                lejanas al escenario tienen buena visibilidad.</p>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
                                        </div>
                                    </div>
                                    <div class=\"row\"><!-- Valoración 4 -->
                                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"><!-- Imagen -->
                                            <img src=\"";
        // line 1166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/no_image.jpg"), "html", null, true);
        echo "\"  alt=\"Foto\" class=\"img img-responsive\">
                                        </div>   <!-- Fin Imagen -->
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><!-- Descripcion -->
                                            <div class=\"row\"><!-- Estrellas -->
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star-half-empty\"></i>
                                            </div>
                                            <div class=\"row\"><!-- Comentario -->
                                                <p class=\"textoValoracion\">
                                                El teatro es muy bonito y las butacas 
                                                aunque con espacio reducido son cómodas.</p>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1\">
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
                                </div>
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white\">
                                    <div class=\"row mb10\"><!-- Videos -->
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                            <div class=\"row\"><!-- Video#1 -->
                                                <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/sSX9YlNuUpc?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                            </div>
                                            <div class=\"row\"><!-- Video#2 -->
                                                <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/KOl8LjKLDLs?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                            </div>
                                            <div class=\"row\"><!-- Video#3 -->
                                                <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/WfPu9Jrcpuk?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                            </div>
                                            <div class=\"row\"><!-- Video#4 -->
                                                <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/g_s17HMFaug?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                            <div class=\"row\"><!-- Video#5 -->
                                                <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/w9IT7Hwh8Zo?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                            </div>
                                            <div class=\"row\"><!-- Video#6 -->
                                                <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/EccF9ISUgEQ?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                            </div>
                                            <div class=\"row\"><!-- Video#7 -->
                                                <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/6dVFy4d61gU?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                            </div>
                                            <div class=\"row\"><!-- Video#8 -->
                                                <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/sSX9YlNuUpc?rel=0&amp;controls=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                            </div>
                                        </div> 
                                    </div> <!-- Fin Videos -->
                                </div> 
                            </div> <!-- Fin Multimedia -->
                            <div class=\"row panelSombra\" id=\"Publicidad\"><!-- Banner publicitario -->
                                <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                                    <h4>Publicidad</h4>
                                </div>                                    
                                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                                    <div class=\"publicidad\">
                                        Espacio de Publicidad disponible
                                    </div>
                                </div>
                            </div><!-- Fin Banner publicitario -->
                        </div>
                        <div class=\"hidden-xs col-sm-5 pb20\"><!-- Columna derecha -->
                            <div class=\"\" id=\"calendarioFlotante\">                
                                <div class=\"row ml5 background-white\">
                                    <div class=\"col-md-2\"></div>
                                    <div class=\"col-md-8\">
                                        <a href=\"";
        // line 1243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paso1");
        echo "\" class=\"btn btn-custom-orange btn-block\">
                                            Proponer concierto
                                        </a> 
                                    </div>
                                    <div class=\"col-md-2\"></div>
                                </div>
                                <!-- Calendario -->
                                ";
        // line 1250
        $this->loadTemplate("calendario/calendario3.html.twig", "salas/perfil4.html.twig", 1250)->display($context);
        echo "  
                            </div>
                        </div><!-- Fin Columna derecha -->
                    </div><!-- Fin Información -->
                    <div class=\"row panelSombra mb20\" id=\"Presentaciones\"><!-- Seccion de interes -->
                        <div class=\"row\"><!-- Fila 1 -->
                            <div class=\"col-sm-12\">
                                <div class=\"heading2\">
                                    <h4 class=\"tituloInteres\">
                                        <span class=\"ion-plus ml5 mr5\"></span>
                                        Otros servicios que pueden ser de su inter&eacute;s
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
        // line 1271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" alt=\"...\">                             
                                            </div>
                                            <div class=\"mask\">
                                                <div class=\"image-hover-content\">
                                                    <!-- Zoom + Blog Link -->
                                                    <a href=\"";
        // line 1276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
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
        // line 1286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\"><h2>Concierto</h2></a>
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
        // line 1308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            </div>
                                            <div class=\"mask\">
                                                <div class=\"image-hover-content\">
                                                    <!-- Zoom + Blog Link -->
                                                    <a href=\"";
        // line 1313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
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
                                            <a href=\"#\"><h2>Viña del Mar</h2></a>
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
        // line 1345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            </div>
                                            <div class=\"mask\">
                                                <div class=\"image-hover-content\">
                                                    <!-- Zoom + Blog Link -->
                                                    <a href=\"";
        // line 1350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
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
                                            <a href=\"#\"><h2>Tomorroland</h2></a>
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
        // line 1382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento1.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            </div>
                                            <div class=\"mask\">
                                                <div class=\"image-hover-content\">
                                                    <!-- Zoom + Blog Link -->
                                                    <a href=\"";
        // line 1387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento1.png"), "html", null, true);
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
                                            <a href=\"\"><h2>Concierto</h2></a>
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
                    </div><!-- Fin Seccion de interes -->
                </div>
            </div><!-- Fin Fila -->
        </div><!-- Fin Perfil del Artista -->
    ";
    }

    // line 1434
    public function block_javascripts($context, array $blocks = array())
    {
        // line 1435
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 1436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 1448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Select -->
    <script type=\"text/javascript\" src=\"";
        // line 1450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Simple Ajax Uploader -->
    <script type=\"text/javascript\" src=\"";
        // line 1452
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
    </script>
    ";
        // line 1689
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
        // line 1690
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 1691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 1693
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1694
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1695
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1696
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1697
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <!-- -->
    <script src=\"";
        // line 1700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 1703
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 1705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1706
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 1708
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
            if(\$(document).scrollTop() >= 1000 && \$(document).scrollTop()<= 4650){
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
                         var targetOffset = \$target.offset().top;
                         \$('html,body').animate({scrollTop: targetOffset}, 1000);
                         return false;
                    }
                }
           });
        });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "salas/perfil4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2089 => 1708,  2084 => 1706,  2080 => 1705,  2075 => 1703,  2069 => 1700,  2064 => 1698,  2060 => 1697,  2056 => 1696,  2052 => 1695,  2048 => 1694,  2044 => 1693,  2039 => 1691,  2036 => 1690,  2030 => 1689,  1790 => 1452,  1785 => 1450,  1780 => 1448,  1775 => 1446,  1771 => 1445,  1767 => 1444,  1763 => 1443,  1759 => 1442,  1755 => 1441,  1751 => 1440,  1747 => 1439,  1743 => 1438,  1739 => 1437,  1735 => 1436,  1732 => 1435,  1729 => 1434,  1684 => 1387,  1676 => 1382,  1641 => 1350,  1633 => 1345,  1598 => 1313,  1590 => 1308,  1565 => 1286,  1552 => 1276,  1544 => 1271,  1520 => 1250,  1510 => 1243,  1430 => 1166,  1406 => 1145,  1382 => 1124,  1357 => 1102,  1307 => 1054,  1299 => 1048,  1293 => 1045,  1290 => 1044,  1288 => 1043,  1166 => 923,  1155 => 914,  1149 => 911,  1146 => 910,  1144 => 909,  1115 => 883,  1114 => 882,  1110 => 880,  1108 => 879,  1107 => 878,  1103 => 876,  1101 => 873,  1100 => 872,  1083 => 859,  1028 => 806,  1012 => 793,  1009 => 792,  1006 => 791,  997 => 1428,  994 => 1427,  992 => 859,  988 => 857,  985 => 791,  982 => 790,  952 => 701,  934 => 686,  930 => 685,  901 => 659,  897 => 658,  886 => 651,  880 => 648,  876 => 790,  863 => 780,  838 => 758,  832 => 755,  826 => 752,  809 => 738,  805 => 737,  796 => 730,  793 => 728,  790 => 727,  788 => 651,  782 => 648,  776 => 646,  771 => 645,  168 => 41,  163 => 39,  158 => 37,  153 => 35,  148 => 33,  144 => 32,  139 => 30,  136 => 29,  133 => 28,  127 => 643,  123 => 642,  117 => 640,  115 => 28,  111 => 27,  106 => 25,  102 => 24,  98 => 23,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  64 => 13,  59 => 11,  54 => 9,  48 => 5,  45 => 4,  39 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salas/perfil4.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/salas/perfil4.html.twig");
    }
}
