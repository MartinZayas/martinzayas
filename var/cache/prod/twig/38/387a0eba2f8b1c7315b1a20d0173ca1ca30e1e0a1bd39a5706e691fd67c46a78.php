<?php

/* eventos/detallesv2.html.twig */
class __TwigTemplate_d2142b2caba00594626f31b0acc8db28e9c7e8c1156934926dca5c131cc63efb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "eventos/detallesv2.html.twig", 2);
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
        echo "Busco Concierto | Detalle de Eventos ";
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
        // line 623
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"main-css\">
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dark-blue.css"), "html", null, true);
        echo "\" title=\"dark-blue\">
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/width-full.css"), "html", null, true);
        echo "\" title=\"width-full\">
";
    }

    // line 28
    public function block_cssPersonalizados($context, array $blocks = array())
    {
        // line 29
        echo "    <!-- Revolution Slider CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/layers.css"), "html", null, true);
        echo "\">

    <!-- Revolution Slider Navigation CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/revolution/navigation.css"), "html", null, true);
        echo "\">

    <!-- CountDown Styles -->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/TimeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        .btn {
            border-radius:2px;
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
        .btn-custom-white{
            color: #FF8000;
            background-color: #F1F1F1;
            border-color: #D2D2D2;
            box-shadow: 2px 2px 11px rgba(0,0,0,.5);
        }
        .btn-custom-white:hover{
            color: #a7590b;
            background-color: #D2D2D2;
            border-color: #5F5F5F;\t
        }   
        .btn-youtube{
            color: #ffffff;
            background-color: red;
        }
        .boton{
            height: 42px;
        }
        texto3{
            color:#fff;
            font-family: HelveticaBlack, sans-serif;
            font-size: 20px;
            font-weight: bold;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .precio{
            text-align: center;
            font-family: Helvetica;
            font-size: 20px;
        } 
        .tituloPrecio{
            color: #5F5F5F;
            text-align: center;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica, SansPro-SemiBoldItalic, SansPro-BoldItalic;
            font-size: 20px;
            background-color: white;
        }
        .costo{
            text-align: right;
            font-family: SansPro-SemiBoldItalic, Helvetica, HelveticaBlack;
            font-size: 20px;
            background-color: white;
        }
        .moneda{
            text-align: left;
            font-family: Helvetica, HelveticaBlack;
            font-size: 20px;
            background-color: white;
        }
        .icono2{
            color: white;
        }
        .boton2{
            margin-top:10px; 
            height: 50px; 
            padding-top: 15px;
            font-size: 12px;
        }
        .textoDireccion{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .textoComo{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 16px;
            margin-bottom: 12px;
            text-align: center;
        }
        .textoTrans{
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 14px;
            font-style: italic;
            margin-bottom: 10px;
            text-align: center;
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
        .sombraMenu{
            margin-left: 0px;
            margin-right: 0px;
            background-color:#fff !important;
            box-shadow: 0px 5px 9px #888888;
        }
        .comprar{
            width: auto;
            min-width: 80px;
            margin-top: 8px;
            margin-left: 0px;
            margin-right: 5px;
            margin-bottom: 8px;
            padding-left: 0px;
            padding-right: 0px;                                
            padding-top: 6px !important;
            padding-bottom: 6px !important;
            font-family: Helvetica, Open Sans;
            text-align: center;
            font-size: 10px;
            border-radius:4px;
        }
        .comprar:hover{
            color: #ffffff;
            background-color: #dc7003;
            border-color: #dc7003;\t
        }
        .btn-lg-menu {
            padding: 5px 19px;
            font-size: 12px;
            border-radius:2px;
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
/************************  *********************************************/
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
        .textoEstilo{
            margin-top: 10px;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            font-style: normal;
        }
        .textoPromotor{
            color: #1e30ff;
            font-family:  Helvetica, sans-serif;
            font-weight: bold; 
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
        .textoCarrera{
            color: #ffffff;
            background-color:  #FF8000; 
            font-family: Helvetica, Open Sans;
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
        .fondoAzul2{
            margin-left: 0px;
            margin-right: 0px;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #ffffff;
            text-align: center;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            background-color: #0089db;
            border: 0px solid #000000;
            border-radius: 0px;
        }
        .botonSeguir{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .textoNombreEntrada{
            margin-top: 12px;
            color:#000000;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-size: 14px;
            font-style: normal;
            text-align: justify;
        }
/************************* Sociales *****************************************/ 
        .redesSociales{
            margin-top: 5px;
            align-content: center;
            padding-left: 60px;
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
        // line 310
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
        // line 320
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
        // line 330
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
        .favorito2{
            color: #616161;
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
        .compartir2{
            width: auto;
            min-width: 75px;
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
        .compartir3{
            color: #616161;
            font-size: 18px;
        }
        .favorito3{
            color: #616161;
            font-size: 18px;
        }
        .noFavorito3{
            color: #616161;
            font-size: 18px;
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
        .seguir2{
            width: auto;
            min-width: 75px;
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
/************************* Votos ********************************************/
        .logoCronometro{
            color: #8a6d3b;
            background-color: #fcf8e3;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-style: normal;
            font-size: 28px;
            text-align: justify;
        }
        .textoVotos{
            color: #8a6d3b;
            background-color: #fcf8e3;
            margin-top: 0px;
            margin-bottom: 0px;
            padding-top: 8px;
            padding-bottom: 8px;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-style: normal;
            font-size: 18px;
            text-align: justify;
        }
        .barraProgreso{
            width: 100%;
            height: 20px;
            margin-top: 20px;
            margin-bottom: 19px;
            padding-top: 0px;
            padding-bottom: 0px;
            font-family: HelveticaNarrow, HelveticaCondensada, Helvetica;
            font-style: normal;
            font-size: 18px;
            border-radius: 4px;
        }
/*****************************************************************************/
        .textoEstilo{
            margin-top: 0px;
            color: #000000;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            font-style: normal;
        }
        .textoFecha{
            
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
        .textoDescripcion{
            padding-right: 0px;
            color: #000000;
            font-family: Helvetica, Open Sans;
            text-align: justify;
        }
/************************ Artistas ******************************************/  
        .label-orange{
            background-color: #FF8000;
            color:#FFFFFF;
        }
        .icono{
            color: red;
        }
        .bordeResultado{
            border: 1px solid #272727;
        }
        .listaResultados{
            padding:10px;
            border: 1px solid #D2D2D2;
            margin-left: 5px;
            background-color: white;
        }
        .capaPrecio{
            position: absolute;
            top: 90px;
            width: 150px;
            height: 50px;
            padding-left: 5px;
            background-color: #FF8000;
            color: #ffffff;
            font-family: Helvetica, HelveticaCondensada;
            z-index: 3;
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px;
        }
        .capaPrecioDer{
            position: absolute;
            top: 90px;
            width: 150px;
            height: 50px;
            padding-left: 5px;
            margin-left: 5px;
            background-color: #FF8000;
            color: #ffffff;
            font-family: Helvetica, HelveticaCondensada;
            z-index: 3;
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px;
        }
        .precio2{
            width: 100%;
            padding-left: 10px;
            font-family: Helvetica;
            font-size: 20px;
            float: left;
        }
        .unidad{
            position: absolute;
            top: 20px;
            margin-top: 10px;
            padding-left: 5px;
            left: 80px;
            color: #ffffff;
            background-color: #FF8000;
            font-family: Helvetica, HelveticaCondensada;
            font-size: 12px;
            z-index: 4;
            float: right;
        }
        .imagenEventoIzq{    
            top: 0px;
            margin: 0px;
            padding-right: 5px;
            z-index: 2;
        }
        .imagenEventoCentro{
            top: 0px;
            margin: 0px;
            margin-left: 5px;
            margin-right: 5px;
            padding-left: 0px;
            padding-right: 0px;
            z-index: 2;
        }
        .imagenEventoDer{
            top: 0px;
            margin: 0px;
            padding-left: 5px;
            z-index: 2;
        }
        .textoNombre{
            color: #616161;
            text-align: justify;
            font-family: SansPro, sans-serif;
            font-size: 16px;
            font-style: normal;
        }
        .textoDireccion{
            color: #000000;
            text-align: justify;
            font-family: SansPro-BlackItalic, sans-serif;
            font-size: 14px;
            font-style: normal;
        }
        .textoTipo{
            color: #000000;
            text-align: center;
            font-family: SansPro-BlackItalic, sans-serif;
            font-size: 14px;
            font-style: normal;
        }        
</style>
";
    }

    // line 628
    public function block_classBody($context, array $blocks = array())
    {
    }

    // line 629
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <div id=\"bg-boxed\"><!-- Begin Boxed or Fullwidth Layout -->
        <div class=\"";
        // line 631
        $this->displayBlock('classBoxed', $context, $blocks);
        echo "\">
            <!-- Begin Header -->
            <header>
                ";
        // line 634
        $this->displayBlock('BarraSuperior', $context, $blocks);
        // line 710
        echo "                ";
        $this->loadTemplate("registro/registro.html.twig", "eventos/detallesv2.html.twig", 710)->display($context);
        // line 711
        echo "                <!-- Begin Navigation -->
                ";
        // line 712
        $this->loadTemplate("default/menu.html.twig", "eventos/detallesv2.html.twig", 712)->display($context);
        // line 713
        echo "                ";
        $this->displayBlock('subHeader', $context, $blocks);
    }

    // line 631
    public function block_classBoxed($context, array $blocks = array())
    {
        echo "boxed background-light-grey";
    }

    // line 634
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
        // line 641
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFunciona");
        echo "\">¿Cómo funciona?</a></li>
\t\t\t\t    <li style=\"border-left:none;\"><a href=\"";
        // line 642
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
                                        <a data-toggle=\"modal\" data-target=\"#profecionales\">&Aacute;rea Profecionales</a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            Regístrate<span class=\"caret\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
        // line 668
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroProfesional");
        echo "\">Soy Profesional</a></li>
                                            <li><a href=\"";
        // line 669
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
        // line 684
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

    // line 713
    public function block_subHeader($context, array $blocks = array())
    {
        // line 714
        echo "                ";
        $this->displayBlock('headerParallax', $context, $blocks);
        // line 780
        echo "                
            </header>
    ";
        // line 782
        $this->displayBlock('contenido', $context, $blocks);
        // line 1526
        echo "<!-- Fin Contenido -->
    ";
        // line 1527
        $this->loadTemplate("default/pie.html.twig", "eventos/detallesv2.html.twig", 1527)->display($context);
        echo "       
            <a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </div><!-- End Boxed or Fullwidth Layout -->
 ";
    }

    // line 714
    public function block_headerParallax($context, array $blocks = array())
    {
        // line 715
        echo "                    <div class=\"header-parallax fill\" 
                        style=\"background-image:url('";
        // line 716
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["directorio_imagenes_public"] ?? null) . "bg3.jpg")), "html", null, true);
        echo "'); 
                        background-color: #272727; opacity: 1;\" 
                        data-top-bottom=\"background-position: 50% 0px;\" 
                        data-bottom-top=\"background-position: 50% -200px;\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <!--=== Page Title ===-->
                                <div class=\"col-xs-12\" style=\"text-align:center;\">
                                    <h2 class=\"text-white\">
                                        Vetusta Morla + invitados Madrid
                                    </h2>
                                    <br>
                                    <h4>
                                        <span class=\"glyphicon glyphicon-map-marker icono2\"></span>
                                        Sala Caracol, Madrid ";
        // line 731
        echo "                                    </h4>
                                </div>
                            </div><!-- /row -->
                        </div><!-- /container -->
                    </div><!-- /page header -->
                    <div class=\"row background-white sombraMenu\" >
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white\" id=\"menu-detalles\"><!-- Menu -->
                            <div class=\"navbar-header\">
                                <!-- Mobile Navigation -->
                                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"glyphicon glyphicon-list\"></span>
                                </button>
                            </div><!-- /navbar header -->
                            <nav class=\"navbar-collapse collapse navHeaderCollapse\" role=\"navigation\">
                                <ul class=\"nav navbar-nav navbar-left background-white\">
                                    <li>
                                        <a href=\"#\" class=\" btn-custom-orange comprar\">
                                            Comprar Entradas
                                        </a>
                                    </li>
                                    <li class=\"tituloPrecio\">
                                        10 
                                        <span class=\"glyphicon glyphicon-euro\" style=\"margin-top:10px;\"></span>
                                    </li>
                                    <li class=\"menu\">
                                        <a href=\"#Informacion\">Informaci&oacute;n</a>
                                    </li>
                                    <li class=\"menu\">
                                        <a href=\"#Locacion\">Localizaci&oacute;n</a>
                                    </li>
                                    <li class=\"menu\">
                                        <a href=\"#Artistas\">Artistas</a>
                                    </li>
                                    <li class=\"menu\">
                                        <a href=\"#Entradas\">Entradas</a>
                                    </li>
                                    <li class=\"menu\">
                                        <a href=\"#Interes\">De inter&eacute;s</a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"btn btn-info compartir\" id=\"compartir\">
                                            <span class=\"fa fa-share-alt\"></span> Compartir<!--  fa-share -->
                                        </a> 
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- Fin Menu del perfil -->
                ";
    }

    // line 782
    public function block_contenido($context, array $blocks = array())
    {
        echo "<!-- Contenido -->
    <div class=\"container\"><!-- Perfil del Eventos -->
        <div class=\"row mt10 mb10\"><!-- Fila -->
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"row mb5\"><!-- Mensaje -->                    
                    <div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1 logoCronometro\">
                        <span class=\"glyphicon glyphicon-time\"></span>
                    </div>
                    <div class=\"col-xs-11 col-sm-11 col-md-11 col-lg-11 textoVotos\">                        
                        Quedan 11 horas para conseguir todos los votos necesarios
                    </div>
                </div>
                <div class=\"row mb5\"><!-- Cronómetro -->
                    <div class=\"col-sx-8 col-sm-8 col-md-9 col-lg-9 background-white\"><!-- barra de progreso -->
                        <div class=\"progress barraProgreso\">
                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                aria-valuenow=\"76\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                                style=\"width: 76%\">
                              76%
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sx-4 col-sm-4 col-md-3 col-lg-3 background-white\">
                        <div class=\"counter\" data-date=\"2018-06-24 00:00:00\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"Informacion\">
                <div class=\"row panelSombra mb40\"><!-- Informacion -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                        <h4>
                            <span class=\"glyphicon glyphicon-file\"></span>
                            Informaci&oacute;n del Evento
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\">
                        <div class=\"col-xs-6 col-sm-8 col-lg-8\"><!-- Columna de informacion -->
                            <div class=\"row\">
                                <div class=\"col-xs-3 col-sm-3 col-lg-3 textoFecha\">
                                    <span class=\"fa fa-calendar\"></span> 30 Abril 
                                </div>
                                <div class=\"col-xs-2 col-sm-2 col-lg-3\">
                                    <span class=\"fa fa-clock-o\"></span> 22:00 h";
        // line 825
        echo "                                </div>
                                <div class=\"col-xs-3 col-sm-3 col-lg-3\">
                                    <span class=\"fa fa-clock-o\"></span> Duraci&oacute;n: 90 min
                                </div>
                                <div class=\"col-xs-4 col-sm-4 col-lg-3\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-8 col-sm-8 col-lg-8\">
                                    <div class=\"row\"> 
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoEstilo\">
                                            <span class=\"glyphicon glyphicon-music\" style=\"margin-top:10px;\"></span> Estilo Musical: 
                                            <span class=\"textoEstilo2\">Rock, Pop, Dance, G&oacute;spel.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 col-sm-4 col-lg-4\">
                                    <a href=\"#\" class=\"btn btn-custom-orange btn-sm pull-right boton2\">
                                        Comprar Entradas
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <p class=\"mr5 textoDescripcion\">Lorem ipsum dolet semper quisquam. Lorem ipsum 
                                dolet semper quisquam. Lorem ipsum dolet semper 
                                quisquam. Lorem ipsum dolet semper quisquam.
                                Lorem ipsum dolet semper quisquam. Lorem ipsum 
                                dolet semper quisquam.                                    
                                </p>
                            </div>                            
                            <div class=\"row mt5 mb5\">
                                <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                    <a href=\"#\" class=\"btn btn-primary btn-block botonMas\">
                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                        Ver M&aacute;s
                                    </a>
                                </div>
                                <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 textoProximo\">Ver m&aacute;s artistas:
                                    <a href=\"\" class=\"btn btn-default textoPromotor\"> Promotor / Manager</a>
                                </div>
                            </div>
                        </div><!-- Fin información -->
                        <div class=\"col-xs-6 col-sm-4 col-lg-4\"><!-- Columna de fotos -->
                            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"row\">
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                                    </ol>
                                    <div class=\"carousel-inner\" role=\"listbox\">
                                        <div class=\"item active\">
                                          <img src=\"";
        // line 881
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Sala11.png"), "html", null, true);
        echo "\" 
                                           heitgh=\"400\" alt=\"Sala1\" class=\"img img-responsive\">
                                        </div>
                                        <div class=\"item\">
                                          <img src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala2.png"), "html", null, true);
        echo "\"
                                           heitgh=\"400\" alt=\"Sala2\" class=\"img img-responsive\">
                                        </div>
                                        <div class=\"item\">
                                          <img src=\"";
        // line 889
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala3.png"), "html", null, true);
        echo "\" 
                                            heitgh=\"400\" alt=\"Sala3\" class=\"img img-responsive\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Fin Carusel -->       
                    </div>
                </div><!-- Fin Informacion -->
                <div class=\"row panelSombra mb40\" id=\"Locacion\"><!-- Locacion -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                        <h4>
                            <span class=\"glyphicon glyphicon-map-marker icono\"></span>
                            Localizaci&oacute;n del Evento
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white\">
                        <div class=\"row\">
                            <div class=\"hidden-xs col-sm-8 col-md-8 col-lg-8\">                                  
    <!--***************************Google map ***********************************-->
                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17184.041582175236!2d-3.7115710696198034!3d40.4146527306085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x109f2a7e6cc425a3!2sTeatro+Espa%C3%B1ol!5e0!3m2!1ses!2sve!4v1521853725191\" 
                                    width=\"100%\" height=\"470\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\"><!-- Columna de fotos -->
                                <div class=\"thumbnail\"><!-- Item 1 -->
                                    <div class=\"view image-hover-1 no-margin\">
                                        <!-- Blog Thumb -->
                                        <div class=\"product-container\">
                                            <img class=\"img-responsive full-width\" src=\"";
        // line 917
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/sala2.png"), "html", null, true);
        echo "\" alt=\"...\">                             
                                        </div>
                                        <div class=\"mask\">
                                            <div class=\"image-hover-content\">
                                                <!-- Zoom + Blog Link -->
                                                <a href=\"";
        // line 922
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
                                    <div class=\"shop-product content-box-shadow\"><!-- Nombre de sala -->
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <h2 class=\"text-center\">Teatro Madrid</h2>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\"><!-- Seguir -->
                                                <a href=\"#\" class=\"btn btn-info seguir2\" id=\"seguir2\">
                                                    <span class=\"fa fa-thumbs-up\"></span> Seguir
                                                </a>
                                            </div>
                                            <div class=\"col-md-4\"><!-- Favorito -->
                                                <a href=\"#\" class=\"btn btn-info favorito\" id=\"favorito1\" onclick=\"cambiar(id);\">
                                                    <span class=\"fa fa-heart-o\"></span> Favorito
                                                </a>
                                            </div>
                                            <div class=\"col-md-4\"><!-- Compartir -->
                                                <a href=\"#\" class=\"btn btn-info compartir2\" id=\"compartir2\">
                                                    <span class=\"fa fa-share-alt\"></span> Compartir<!--  fa-share -->
                                                </a> 
                                            </div>
                                        </div>
                                        <div class=\"row mt5\">
                                            <div class=\"col-md-12 text-center\">
                                                ¿Com&oacute; llegar?
                                            </div>
                                        </div>
                                        <div class=\"row mt10\">
                                            <div class=\"col-md-12\">
                                                <span class=\"location-container pull-left\" href=\"#\">
                                                    <i class=\"fa fa-map-marker icono\"></i>
                                                    Calle Príncipe, 25, 28012 Madrid, España. 
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row mt5\">
                                            <div class=\"col-md-12\">
                                                Linea de bus 34, Embajadores metro 3.
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Item 1 -->
                            </div>
                        </div>
                    </div>
                </div><!-- Fin Localizacion -->
                <div class=\"row panelSombra mb40\" id=\"Artistas\"><!-- Artistas -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                        <h4>
                            <img src=\"";
        // line 981
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/clef.png"), "html", null, true);
        echo "\" class=\"\" alt=\"Conciertos\">
                            Artistas
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12\">
                        <div class=\"row\">
                            <div class=\"row mb10\"><!-- Fila 1 -->
                                <div class=\"col-md-3\"><!-- Resulatado 1 -->
                                    <div class=\"view image-hover-1 no-margin\">
                                        <!-- Blog Thumb -->
                                        <div class=\"product-container\">
                                            <img class=\"img-responsive full-width\" src=\"";
        // line 992
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            <span class=\"badge home-badge\">
                                                <span class=\"label label-orange\">
                                                    Desde 315,99 €/und
                                                </span>
                                            </span>
                                        </div>
                                        <div class=\"mask\">
                                            <div class=\"image-hover-content\">
                                                <!-- Zoom + Blog Link -->
                                                <a href=\"";
        // line 1002
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista1.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-ios7-search image-icons\"></span>
                                                    </div>
                                                </a>
                                                <a href=\"";
        // line 1007
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 2));
        echo "\" class=\"info\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-link image-icons\"></span>
                                                    </div>
                                                </a>
                                            </div><!-- /image hover content -->
                                        </div><!-- /mask-->
                                    </div>
                                    <div class=\"shop-product content-box-shadow\">
                                        <a href=\"";
        // line 1016
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 1));
        echo "\">
                                            <h2>Panorama Mar</h2>
                                        </a>
                                        <div class=\"row mt10\">
                                            <div class=\"col-md-12\">
                                                <span class=\"location-container pull-left\">
                                                    <div class=\"textoDireccion\">
                                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span> Manises, Valencia
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                                <p class=\"\">Información del artista, descripción....                                                
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\"></div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <p class=\"textoTipo\">Banda</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <a href=\"#\" class=\"btn btn-info seguir\">
                                                    <span class=\"fa fa-thumbs-up\"></span> Seguir
                                                </a>
                                            </div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"compartir3\">
                                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                                </a>
                                            </div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"favorito3\" id=\"favorito1\" onclick=\"cambiar(id);\">
                                                    <span class=\"fa fa-heart-o\"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Resulatado 1 -->
                                <div class=\"col-md-3\"><!-- Resulatado 2 -->
                                    <div class=\"view image-hover-1 no-margin\">
                                        <!-- Blog Thumb -->
                                        <div class=\"product-container\">
                                            <img class=\"img-responsive full-width\" src=\"";
        // line 1064
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista2.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            <span class=\"badge home-badge\">
                                                <span class=\"label label-orange\">
                                                    Desde 215,95 €/und
                                                </span>
                                            </span>
                                        </div>
                                        <div class=\"mask\">
                                            <div class=\"image-hover-content\">
                                                <!-- Zoom + Blog Link -->
                                                <a href=\"";
        // line 1074
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista2.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-ios7-search image-icons\"></span>
                                                    </div>
                                                </a>
                                                <a href=\"";
        // line 1079
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 2));
        echo "\" class=\"info\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-link image-icons\"></span>
                                                    </div>
                                                </a>
                                            </div><!-- /image hover content -->
                                        </div><!-- /mask-->
                                    </div>
                                    <div class=\"shop-product content-box-shadow\">
                                        <a href=\"";
        // line 1088
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 2));
        echo "\">
                                            <h2>Panorama Mar</h2>
                                        </a>
                                        <div class=\"row mt10\">
                                            <div class=\"col-md-12\">
                                                <span class=\"location-container pull-left\">
                                                    <div class=\"textoDireccion\">
                                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span> Manises, Valencia
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                                <p class=\"\">Información del artista, descripción....                                                
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\"></div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <p class=\"textoTipo\">Banda</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <a href=\"#\" class=\"btn btn-info seguir\">
                                                    <span class=\"fa fa-thumbs-up\"></span> Seguir
                                                </a>
                                            </div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"compartir3\">
                                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                                </a>
                                            </div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"favorito3\" id=\"favorito2\" onclick=\"cambiar(id);\">
                                                    <span class=\"fa fa-heart-o\"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Resulatado 2 -->
                                <div class=\"col-md-3\"><!-- Resulatado 3 -->
                                    <div class=\"view image-hover-1 no-margin\">
                                        <!-- Blog Thumb -->
                                        <div class=\"product-container\">
                                            <img class=\"img-responsive full-width\" src=\"";
        // line 1136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            <span class=\"badge home-badge\">
                                                <span class=\"label label-orange\">
                                                    Desde 376,00 €/und
                                                </span>
                                            </span>
                                        </div>
                                        <div class=\"mask\">
                                            <div class=\"image-hover-content\">
                                                <!-- Zoom + Blog Link -->
                                                <a href=\"";
        // line 1146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista3.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-ios7-search image-icons\"></span>
                                                    </div>
                                                </a>
                                                <a href=\"";
        // line 1151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 3));
        echo "\" class=\"info\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-link image-icons\"></span>
                                                    </div>
                                                </a>
                                            </div><!-- /image hover content -->
                                        </div><!-- /mask-->
                                    </div>
                                    <div class=\"shop-product content-box-shadow\">
                                        <a href=\"";
        // line 1160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 3));
        echo "\">
                                            <h2>Panorama Mar</h2>
                                        </a>
                                        <div class=\"row mt10\">
                                            <div class=\"col-md-12\">
                                                <span class=\"location-container pull-left\">
                                                    <div class=\"textoDireccion\">
                                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span> Manises, Valencia
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                                <p class=\"\">Información del artista, descripción....                                                
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\"></div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <p class=\"textoTipo\">Banda</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <a href=\"#\" class=\"btn btn-info seguir\">
                                                    <span class=\"fa fa-thumbs-up\"></span> Seguir
                                                </a>
                                            </div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"compartir3\">
                                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                                </a>
                                            </div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"favorito3\" id=\"favorito3\" onclick=\"cambiar(id);\">
                                                    <span class=\"fa fa-heart-o\"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Resulatado 3 -->
                                <div class=\"col-md-3\"><!-- Resulatado 4 -->
                                    <div class=\"view image-hover-1 no-margin\">
                                        <!-- Blog Thumb -->
                                        <div class=\"product-container\">
                                            <img class=\"img-responsive full-width\" src=\"";
        // line 1208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            <span class=\"badge home-badge\">
                                                <span class=\"label label-orange\">
                                                    Desde 276,00 €/und
                                                </span>
                                            </span>
                                        </div>
                                        <div class=\"mask\">
                                            <div class=\"image-hover-content\">
                                                <!-- Zoom + Blog Link -->
                                                <a href=\"";
        // line 1218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/artista4.png"), "html", null, true);
        echo "\" class=\"info image-zoom-link\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-ios7-search image-icons\"></span>
                                                    </div>
                                                </a>
                                                <a href=\"";
        // line 1223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 4));
        echo "\" class=\"info\">
                                                    <div class=\"image-icon-holder\">
                                                        <span class=\"ion-link image-icons\"></span>
                                                    </div>
                                                </a>
                                            </div><!-- /image hover content -->
                                        </div><!-- /mask-->
                                    </div>
                                    <div class=\"shop-product content-box-shadow\">
                                        <a href=\"";
        // line 1232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detallesArtistas", array("id" => 4));
        echo "\">
                                            <h2>Panorama Mar</h2>
                                        </a>
                                        <div class=\"row mt10\">
                                            <div class=\"col-md-12\">
                                                <span class=\"location-container pull-left\">
                                                    <div class=\"textoDireccion\">
                                                        <span class=\"glyphicon glyphicon-map-marker icono\"></span> Manises, Valencia
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-12 col-sm-12 col-md-12 col-lg-12\">
                                                <p class=\"\">Información del artista, descripción....                                                
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-8 col-sm-8 col-md-8 col-lg-8\"></div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <p class=\"textoTipo\">Banda</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\">
                                                <a href=\"#\" class=\"btn btn-info seguir\">
                                                    <span class=\"fa fa-thumbs-up\"></span> Seguir
                                                </a>
                                            </div>
                                            <div class=\"col-sx-4 col-sm-4 col-md-4 col-lg-4\"></div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"compartir3\">
                                                    <span class=\"fa fa-share-alt\"></span><!--  fa-share -->
                                                </a>
                                            </div>
                                            <div class=\"col-sx-2 col-sm-2 col-md-2 col-lg-2\">
                                                <a href=\"#\" class=\"favorito3\" id=\"favorito3\" onclick=\"cambiar(id);\">
                                                    <span class=\"fa fa-heart-o\"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Fin Resulatado 4 -->
                            </div><!-- Fin Fila 1 -->
                        </div>
                    </div>
                </div>  <!-- Fin Artistas -->
                <div class=\"row panelSombra\" id=\"Entradas\"><!-- Entradas -->
                    <div class=\"col-sm-12 col-md-12 col-lg-12 background-white heading2\">
                        <h4>
                            <span class=\"fa fa-ticket\" style=\"margin-top:10px;\"></span>
                            Entradas
                        </h4>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-lg-12 mt10 mb10 text-justify\">
                        <div class=\"row\">
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-7\"><!-- Titulos -->
                                <h4>Evento</h4>
                            </div>
                            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-1\"><!-- Titulos -->
                                <div class=\"text-center\"><h4>Precio</h4></div>
                            </div>
                            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- Titulos -->
                                <div class=\"text-center\"><h4>Cantidad</h4></div>
                            </div>
                            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- Titulos -->
                                <div class=\"text-center\"><h4>Total</h4></div>
                            </div>
                        </div>
                        <form action=\"#\" method=\"post\" id=\"formulario1\" name=\"formulario1\" >
                        <div class=\"row\"><!-- Entradas -->                            
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-7\"><!-- DESCRIPCION -->
                                <div class=\"textoNombreEntrada\">
                                    Vetusta Morla + Invitados en Madrid
                                </div>
                            </div>
                            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-1\"><!-- PRECIO -->
                                <div class=\"input-group\">
                                    <input type=\"number\" name=\"precio\" id=\"precio\" class=\"form-control\" value=\"10\" readonly=\"readonly\">
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                                <!--div id=\"costo\" class=\"costo\">10</div-->
                            </div>
                            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- CANTIDAD -->
                                <select required=\"required\" name=\"cantidad\" 
                                        id=\"cantidad\" onchange=\"CalcularPrecio();\"
                                        class=\"form-control js-source-states-2\">
                                    <option value=\"0\">0</option>
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"3\">3</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"6\">6</option>
                                    <option value=\"7\">7</option>
                                    <option value=\"8\">8</option>
                                    <option value=\"9\">9</option>
                                    <option value=\"10\">10</option>
                                </select>
                            </div>
                            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"><!-- TOTAL Y BOTON -->
                                <div class=\"row\">
                                    <div class=\"input-group\">
                                        <input type=\"number\" name=\"total\" id=\"total\" class=\"form-control\" value=\"0\" readonly=\"readonly\">
                                        <span class=\"input-group-addon\">€</span>
                                    </div>
                                    <!--div id=\"total\" class=\"precio\">00</div-->
                                </div>
                            </div>
                            </div>
                            <div class=\"row mt10\">
                                <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\"></div>
                                <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                    <a href=\"#\" class=\"btn btn-custom-orange btn-block\" 
                                       style=\"margin-top:0px;\">
                                        Comprar Entradas
                                    </a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- Fin Entradas -->                
            </div><!-- Fin row -->            
        </div><!-- Fin container -->
        <div class=\"container background-white\" id=\"Interes\"><!-- De interes -->                
            <div class=\"col-sm-12\">
                <div class=\"heading2 mt10 mb30\">
                    <h4 class=\"tituloInteres\">
                        <span class=\"ion-plus ml5 mr5\"></span>
                        Otros eventos que pueden interesarte
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
        // line 1374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento2.png"), "html", null, true);
        echo "\" alt=\"...\">                             
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 1379
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
        // line 1389
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
        // line 1411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento3.png"), "html", null, true);
        echo "\" alt=\"...\">
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 1416
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
        // line 1448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento4.png"), "html", null, true);
        echo "\" alt=\"...\">
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 1453
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
        // line 1485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/Evento1.png"), "html", null, true);
        echo "\" alt=\"...\">
                            </div>
                            <div class=\"mask\">
                                <div class=\"image-hover-content\">
                                    <!-- Zoom + Blog Link -->
                                    <a href=\"";
        // line 1490
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
        </div><!-- Fin De Interes -->
    ";
    }

    // line 1533
    public function block_javascripts($context, array $blocks = array())
    {
        // line 1534
        echo "    <!-- Javascript Files -->
    <script type=\"text/javascript\" src=\"";
        // line 1535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/scrollReveal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1539
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1541
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.snippet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1542
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/activate-snippet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1544
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1545
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/waitMe.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JQuery Validate -->
    <script src=\"";
        // line 1547
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Select -->
    <script type=\"text/javascript\" src=\"";
        // line 1549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Simple Ajax Uploader -->
    <script type=\"text/javascript\" src=\"";
        // line 1551
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
        // line 1832
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
        // line 1833
        echo "    <!-- CountDown JS -->
    <script type=\"text/javascript\" src=\"";
        // line 1834
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/TimeCircles.js"), "html", null, true);
        echo "\"></script>
    <!-- Slider Revolution JS -->
    <script type=\"text/javascript\" src=\"";
        // line 1836
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1837
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1838
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1839
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1840
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/revolution/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1841
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
        /***/
        function CalcularPrecio(){
            var costo = document.getElementById(\"precio\").value;
            var lista = document.getElementById(\"cantidad\"); 
            // Obtener el valor de la opción seleccionada
            var valorSeleccionado = lista.options[lista.selectedIndex].value;
            var total = costo*valorSeleccionado;
            document.getElementById(\"total\").value=total;
        }

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
                         \$('html,body').animate({scrollTop: targetOffset}, 1000);
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
            document.getElementById(identificador).setAttribute(\"class\",\"noFavorito3\");
            document.getElementById(identificador).innerHTML=\"<span class=\\\"fa fa-heart\\\"></span>\";
        }
        else{
            document.getElementById(identificador).setAttribute(\"class\",\"favorito3\");
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
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "eventos/detallesv2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2211 => 1841,  2207 => 1840,  2203 => 1839,  2199 => 1838,  2195 => 1837,  2191 => 1836,  2186 => 1834,  2183 => 1833,  2177 => 1832,  1893 => 1551,  1888 => 1549,  1883 => 1547,  1878 => 1545,  1874 => 1544,  1870 => 1543,  1866 => 1542,  1862 => 1541,  1858 => 1540,  1854 => 1539,  1850 => 1538,  1846 => 1537,  1842 => 1536,  1838 => 1535,  1835 => 1534,  1832 => 1533,  1791 => 1490,  1783 => 1485,  1748 => 1453,  1740 => 1448,  1705 => 1416,  1697 => 1411,  1672 => 1389,  1659 => 1379,  1651 => 1374,  1506 => 1232,  1494 => 1223,  1486 => 1218,  1473 => 1208,  1422 => 1160,  1410 => 1151,  1402 => 1146,  1389 => 1136,  1338 => 1088,  1326 => 1079,  1318 => 1074,  1305 => 1064,  1254 => 1016,  1242 => 1007,  1234 => 1002,  1221 => 992,  1207 => 981,  1145 => 922,  1137 => 917,  1106 => 889,  1099 => 885,  1092 => 881,  1034 => 825,  988 => 782,  935 => 731,  918 => 716,  915 => 715,  912 => 714,  903 => 1527,  900 => 1526,  898 => 782,  894 => 780,  891 => 714,  888 => 713,  858 => 684,  840 => 669,  836 => 668,  807 => 642,  803 => 641,  792 => 634,  786 => 631,  781 => 713,  779 => 712,  776 => 711,  773 => 710,  771 => 634,  765 => 631,  759 => 629,  754 => 628,  457 => 330,  444 => 320,  431 => 310,  155 => 37,  149 => 34,  143 => 31,  139 => 30,  136 => 29,  133 => 28,  127 => 626,  123 => 625,  117 => 623,  115 => 28,  111 => 27,  106 => 25,  102 => 24,  98 => 23,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  64 => 13,  59 => 11,  54 => 9,  48 => 5,  45 => 4,  39 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "eventos/detallesv2.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/eventos/detallesv2.html.twig");
    }
}
