<?php

/* ayuda/comoFuncionaArtista.html.twig */
class __TwigTemplate_9c9f7d1c6f57733df16e59047d59c7b2452d6b32607528ecc35815492324b5b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/inicio.html.twig", "ayuda/comoFuncionaArtista.html.twig", 2);
        $this->blocks = array(
            'generalContent' => array($this, 'block_generalContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_generalContent($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"carousel\"><!-- Begin Carousel -->
    <div id=\"carouselHome\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
        <!-- Begin Wrapper for slides -->
        <div class=\"carousel-inner\">
            <!-- Begin Item 2 -->
            <div class=\"item active\">
                <!-- Item BG -->
                <div class=\"fill\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg17.jpg"), "html", null, true);
        echo "');\" data-0=\"background-position:0px 0px;\" data-500=\"background-position:0px -250px;\">
                    <div class=\"container\">
                        <div class=\"row carousel-content center-vertically-right\">
                            <div class=\"fadeInUpBig-animated\" data-animation=\"fadeInUpBig\">
                                <div class=\"carousel-description col-sm-8 col-sm-offset-2 text-center\">
                                    <!-- Content -->
                                    <span class=\"fa fa-users fa-4x text-white mb20\" style=\"text-shadow: 0 0 15px #000, 0 0 5px #000\"></span>
                                    <h1 class=\"heavy text-white\"><span style=\"text-shadow: 0 0 15px #000, 0 0 5px #000\">Tu gira de conciertos en unos clics</span></h1>
                                    <span style=\"text-shadow: 0 0 15px #000, 0 0 5px #000\">Únete a nosotros y comienza a montar tus conciertos de forma fácil y sencilla entre los miles de locales y artistas. Cero riesgos, 100% seguro, inversión inicial cero.</span>
                                    <br>
                                    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adicionarEvento");
        echo "\" class=\"btn btn-rw btn-primary mt10\">
                                        Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /content container -->
                    </div><!-- /container -->
                </div><!-- /bg div -->
            </div><!-- /item -->
            <!-- End Item 2 -->
        </div><!-- /carousel inner -->
        <!-- End Wrapper for slides -->
    </div><!-- /carousel id div -->
</div><!-- /carousel div -->
<!-- End Carousel -->
<!-- Begin Content Section -->
<section class=\"background-white pt40 pb40\">
    <div class=\"container\">
        <div class=\"row\">
            <h2 class=\"text-center\">¿Cómo funciona?</h2>
            <hr style=\"width:400px\">
            <div>
                <div class=\"team-member-holder\">
                    <div class=\"col-sm-4 text-center\">
                        <span class=\"ion-compose bordered-icon-lg bordered-icon-color\"></span>
                        <h4 class=\"team-member-name-imgtop\">Crea tus conciertos</h4>
                        <div class=\"team-description\">
                            <p>Regístrate en nuestra web, actualiza tu perfil y comienza a proponer conciertos a salas y artistas, configurando cada detalle de tu evento y llegando a un mutuo acuerdo entre todos los participantes.</p>
                        </div>
                    </div><!-- /column -->
                </div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-4 text-center\">
                        <span class=\"ion-android-promotion bordered-icon-lg bordered-icon-color\"></span>
                        <h4 class=\"team-member-name-imgtop\">Vende tus entradas</h4>
                        <div class=\"team-description\">
                            <p>De forma segura y sin riegos, comienza a vender tus entradas. Tu defines el mínimo de entradas que necesitas vender para poder llevar a cabo el concierto, definiendo el porcentaje de ganancias para cada parte.</p>
                        </div>
                    </div><!-- /column -->
                </div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-4 text-center\">
                        <span class=\"ion-card bordered-icon-lg bordered-icon-color\"></span>
                        <h4 class=\"team-member-name-imgtop\">Cobra tus actuaciones</h4>
                        <div class=\"team-description\">
                            <p>Una vez finalizado el concierto y confirmado que todo ha ido a la perfección, cada parte recibirá el porcentaje acordado según las ventas emitidas, una forma segura de ganar con vuestras actuaciones.</p>
                        </div>
                    </div><!-- /column -->
                </div>
            </div>
        </div><!-- /row -->\t
    </div>
</section><!-- End Content Section -->\t
<!-- Begin Content Section -->
<section class=\"pt40 pb40\" style=\"background-color:#f1f1f1 !important\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"lead text-center flipInY-animated\"><b>¿Cómo funciona el proceso de venta de entradas?</b></p>
                <hr style=\"width:600px\">
            </div>\t\t\t
            <div class=\"col-sm-7 fadeInLeft-animated\">
                <h3 class=\"mb15\">Crea tus conciertos sin ningún riesgo</h3>
                <p class=\"text-justify\">Una vez creado el concierto en nuestra plataforma comenzará el plazo de compra de entradas para recaudar todo el dinero necesario. Este concierto durará activo mínimo el tiempo que tu asignes (5 días, 10 días...) y fijarás un número de entradas a vender como mínimo para poder realizar el concierto de forma favorable. </p>
                <p class=\"text-justify\">Es muy importante una buena difusión, por lo que COMPARTE tus conciertos por redes sociales para llegar a mucho más público y así conseguir tus metas.</p>
                <p class=\"text-justify\">Si consigues vender el mínimo de entradas que estableciste, el concierto quedará confirmado y se realizará con éxito, pudiendo continuar vendiendo entradas hasta llenar aforo. Por el contrario, si no consigues tus objetivos, el concierto quedará cancelado y no tendrás que preocuparte por nada más, simplemente en buscar nuevos locales para tus conciertos.</p>
                <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adicionarEvento");
        echo "\" class=\"btn btn-rw btn-primary mt10\">
                    Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                </a>
            </div><!-- /column -->
            <div class=\"col-sm-5 mt30-xs\">
                <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/showcase4.png"), "html", null, true);
        echo "\" class=\"img-responsive fadeInRight-animated\" alt=\"Showcase Image\">
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /section -->
<!-- End Content Section -->
<!-- Begin Content Section -->
<section class=\"background-white pt40 pb20\">
    <div class=\"container\">
        <div class=\"row\">
            <h2 class=\"text-center\">¿Por qué BuscoConcierto?</h2>\t
            <hr style=\"width:600px\">
            <div class=\"col-sm-12 fadeInLeft-animated\">
                <p class=\"text-justify\">BuscoConcierto.com es una iniciativa que nace entre músicos en busca de conciertos, a raíz de lo difícil que es poder moverse para conseguir ser escuchado. Ponemos a tu disposición, una herramienta con la que <b>conectamos artistas y locales de conciertos</b>, donde poder proponer tus conciertos y vender tus entradas sin ningún riesto y sin ninguna inversión. Una herramienta gratuita donde conseguirás una amplia agenda musical, autogestionando cada uno de tus evento.</p>
                <p class=\"text-justify\">Deja que tus fans financien el futuro concierto. Si no cumple los objetivos, tu decides si continuar adelante. Elige la sala donde actuar, propón tus condiciones, pon precio a tu entrada y comienza a vender. Si tienes una buena lista de seguidores en redes sociales, tienes el éxito asegurado! Además, podrás compartir escenario con otros artistas para conseguir tus objetivos y montar tu gira de conciertos.</p>
                <br/>
            </div>
            <div>
                <div class=\"team-member-holder\">
                    <div class=\"col-sm-4 text-center\">
                        <span class=\"ion-checkmark bordered-icon-lg bordered-icon-color\"></span>
                        <h4 class=\"team-member-name-imgtop\">Fácil</h4>
                        <div class=\"team-description\">
                            <p>Nunca fue tan fácil montar tu gira de conciertos 
                            desde una misma herramienta, facilitando la búsqueda
                            de artistas y salas, proponiendo tus condiciones en 
                            cada evento, precio, aforo, ganancias, etc... Publicar 
                            y gestionar tu evento es muy fácil con nuestra plataforma.</p>
                        </div>
                    </div><!-- /column -->
                </div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-4 text-center\">
                        <span class=\"ion-locked bordered-icon-lg bordered-icon-color\"></span>
                        <h4 class=\"team-member-name-imgtop\">Seguro</h4>
                        <div class=\"team-description\">
                            <p>Cierra tus conciertos con artistas y salas y vende 
                            tus entradas sin ningún riesgo. Cada evento ya confirmado, 
                            quedará bajo un acuerdo firmado por ambas partes, por 
                            lo que te aseguarás la actuación y las ganancias al 
                            finalizar el evento.</p>
                        </div>
                    </div><!-- /column -->
                </div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-4 text-center\">
                        <span class=\"ion-thumbsup bordered-icon-lg bordered-icon-color\"></span>
                        <h4 class=\"team-member-name-imgtop\">Rápido y eficaz</h4>
                        <div class=\"team-description\">
                            <p>En tan sólo unos minutos podrás registrarte y crear 
                            tus conciertos, enviando las primeras solicitudes a 
                            los locales que te interesen. Tan pronto comience el
                            proceso de venta de entradas, podrás compartir tus 
                            conciertos para llegar al máximo público posible.</p>
                        </div>
                    </div><!-- /column -->
                </div>
            </div>
        </div><!-- /row -->
    </div>
</section><!-- End Content Section -->
<section class=\"background-white pt40 pb40\"> <!-- Begin Content Section -->
    <div class=\"container\">
        <div class=\"row\">
            <h3 class=\"lead text-center\"><b>No pagues nada hasta vender tus entradas y realizar tus actuaciones</b></h3>
            <hr style=\"width:800px\">\t
            <!-- Content 1 -->
            <div class=\"col-sm-3 text-center\" data-sr=\"enter right\">
                <span class=\"ion-document-text bordered-icon-color bordered-icon-sm\"></span>
                <h4 class=\"mt15\">Acuerdo Legal</h4>
                <p class=\"p15xs\">Todos nuestros conciertos quedan bajo un acuerdo 
                legal entre todas las partes afectadas, indicando las características 
                y condiciones acordadas y los porcentajes de ganancias para cada parte. </p>
            </div>
            <!-- Content 2 -->
            <div class=\"col-sm-3 text-center mt20-xs\" data-sr=\"enter left\">
                <span class=\"ion-arrow-graph-down-right bordered-icon-color bordered-icon-sm\"></span>
                <h4 class=\"mt15\">Mínimas comisiones</h4>
                <p class=\"p15xs\">Cobramos una pequeña tarifa por entrada, sólo 
                ganamos si tu ganas, por lo que si no consigues los objetivos en 
                tu evento, este será cancelado y no se cobrará ninguna comisión.</p>
            </div>
            <!-- Content 3 -->
            <div class=\"col-sm-3 text-center mt20-xs\" data-sr=\"enter right\">
                <span class=\"ion-close-circled bordered-icon-color bordered-icon-sm\"></span>
                <h4 class=\"mt15\">Evento cancelado</h4>
                <p class=\"p15xs\">Si no consigues vender el mínimo de entradas 
                establecido, se realizará la devolución a los compradores, no 
                asumiendo ningún gasto por parte de los organizadores.</p>
            </div>
            <!-- Content 4 -->
            <div class=\"col-sm-3 text-center mt20-xs\" data-sr=\"enter left\">
                <span class=\"ion-calendar bordered-icon-color bordered-icon-sm\"></span>
                <h4 class=\"mt15\">¿Tu concierto es gratuito?</h4>
                <p class=\"p15xs\">Si tu concierto es gratuito, te ofrecemos nuestra 
                plataforma totalmente GRATIS para que puedas gestionarlo de forma 
                fácil y así ofrecer invitaciones a tus asistentes más cómodamente.</p>
            </div>
        </div>
    </div>
</section> <!-- End Content Section -->\t\t\t
<!-- Begin Content Section -->
<section class=\"background-main pt60 pb60 fill\" style=\"background-image:url('";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/bg1.jpg"), "html", null, true);
        echo "');\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4 fadeInLeft-animated\">
                <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/showcase4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Showcase Image\">
            </div>
            <div class=\"col-sm-8 text-white fadeInRight-animated mt30-xs\">
                <h3 class=\"text-white\">¿Buscas donde actuar? ¿Buscas artistas para tu local?</h3>
                <p class=\"text-justify\">Los locales y salas de conciertos tienen una nueva opción de autogestión, promocionando sus eventos próximos y buscando artistas para crear nuevos conciertos, minimizando riesgos y beneficiándose de servicios de marketing online.</p>
                <p class=\"text-justify\">Podrás así recibir propuestas de locales y artistas que se adapten a tus requisitos y aceptarlas o no, pudiendo ofrecer tus condiciones y así llenar una agenda de conciertos de forma exitosa.</p>
                <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adicionarEvento");
        echo "\" class=\"btn btn-rw btn-clear mt10\">
                    Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
                </a>
            </div>
        </div>
    </div><!-- /container -->
</section> <!-- End Content Section -->\t
<section class=\"background-white pt40 pb40\"> <!-- Begin Content Section -->
    <div class=\"container\">
        <div class=\"row\">
            <h2 class=\"text-center\">Nunca fue tan fácil. Ahorra tiempo.</h2>
            <p class=\"lead text-center\">Nunca antes ha sido tan fácil organizar tu gira de conciertos sin invertir nada.</p>
            <hr style=\"width:700px\">\t\t\t
            <div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-1\">
                        <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/reloj.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-3\">
                        <h4 class=\"team-member-name\">Publica tu concierto en unos minutos</h4>
                        <div class=\"team-description\">
                            <p>Configura quién actuará y dónde, cuanto quieres ganar y como se distribuyen las ganancias entre artistas y local, cuanto tiempo quedará activa la votación y compra de entradas, etc...</p>
                        </div>
                    </div><!-- /column -->
                </div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-1\">
                        <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/conf.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-3\">
                        <h4 class=\"team-member-name\">Personaliza la página de tu evento</h4>
                        <div class=\"team-description\">
                            <p>Añade imágenes sobre los artistas y el local en la cabecera de la página, una descripción, el cartel, promociones, tipos de entradas, etc...</p>
                        </div>
                    </div><!-- /column -->
                </div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-1\">
                        <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ticket.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-3\">
                        <h4 class=\"team-member-name\">Vende tus entradas online y en taquilla</h4>
                        <div class=\"team-description\">
                            <p>Tu defines el mínimo de entradas que necesitas vender, podrás imprimir y enviar invitaciones desde la plataforma y vender entradas directamente en taquilla.</p>
                        </div>
                    </div><!-- /column -->
                </div><!-- /team member holder -->\t\t\t\t
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-1 mt30-lg\">
                        <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/promo.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-3 mt20-lg\">
                        <h4 class=\"team-member-name\">Promociona tu evento</h4>
                        <div class=\"team-description\">
                            <p>Aprovéchate de nuestras herramientas para promocionar tus conciertos, compártelos y difúndelos por redes sociales, ofrece invitaciones, sorteos, etc...</p>
                        </div>
                    </div><!-- /column -->
                </div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-1 mt30-lg\">
                        <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/acceso.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-3 mt20-lg\">
                        <h4 class=\"team-member-name\">Gestiona el acceso el día del concierto</h4>
                        <div class=\"team-description\">
                            <p>Con nuestra app desde tu dispositivo móvil, podrás gestionar el acceso escaneando los códigos de cada entrada, podrás visualizar información global de asistentes...</p>
                        </div>
                    </div><!-- /column -->
                </div>
                <div class=\"team-member-holder mt30-xs\">
                    <div class=\"col-sm-1 mt30-lg\">
                        <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/tiemporeal.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-3 mt20-lg\">
                        <h4 class=\"team-member-name\">Registro en tiempo real de tu evento</h4>
                        <div class=\"team-description\">
                            <p>Recibe informes y analiza la venta de las entradas, número de asistentes... Sigue en tiempo real cada detalle.</p>
                        </div>
                    </div><!-- /column -->
                </div>
            </div>
        </div>
    </div><!-- /container -->
</section> <!-- End Content Section -->\t\t\t
<!-- Begin Content Section -->
<section class=\"background-main pt60 pb60 fill text-center\" style=\"background-image:url('";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/backgrounds/bg3.jpg"), "html", null, true);
        echo "');\">
    <div class=\"container\">
        <div class=\"row\">
            <h1 style=\"color: white\">C<span style=\"text-transform: lowercase;\">omienza a montar tu gira de conciertos</span></h1>
            <a href=\"";
        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adicionarEvento");
        echo "\" class=\"btn btn-rw btn-clear mt10\">
                Comenzar &nbsp;&nbsp;<span class=\"ion-ios7-arrow-right\"></span>
            </a>
        </div>
    </div><!-- /container -->
</section> <!-- End Content Section -->\t
<section id=\"contacto\" class=\"background-white pt40 pb40\"> <!-- Begin Contact -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"heading mb20\"><h4><span class=\"ion-android-mail mr15\"></span>¿Tienes alguna otra duda?</h4></div>
                <p class=\"mb20\"><b>Contacta con nosotros, te asesoraremos y solucionaremos tus dudas.</b></p>
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
</section><!-- /section --> <!-- End Contact -->
<section class=\"pt60 pb60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 mb20\">
                <div class=\"heading\"><h4>¿Cómo funciona otro perfil de usuario?</h4></div>
            </div>
        </div>\t\t
        <div class=\"col-sm-12 col-md-12 main\">
            <div class=\"row placeholders text-center\">
                <div class=\"col-xs-12 col-sm-4 placeholder\">
                    <a href=\"";
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFuncionaArtista");
        echo "\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["directorio_imagenes_public"] ?? null)), "html", null, true);
        echo "print3.jpg\" alt=\"Thumbnail\">
                    </a>
                    <h3 class=\"mt20\"><b>Local / Sala</b></h3>
                    <span>Crea tu agenda de conciertos de la forma más segura en tan sólo unos clics. Tu decides las condiciones para el concierto.</span>
                </div>
                <div class=\"col-xs-12 col-sm-4 placeholder\">
                    <a href=\"";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFuncionaArtista");
        echo "\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["directorio_imagenes_public"] ?? null)), "html", null, true);
        echo "print2.jpg\" alt=\"Thumbnail\">
                    </a>
                    <h3 class=\"mt20\"><b>Profesional</b></h3>
                    <span>Crea tu perfil de profesional, publica tus anuncios y ofrece tus servicios para conseguir ser contratado en futuros eventos.</span>
                </div>
                <div class=\"col-xs-12 col-sm-4 placeholder\">
                    <a href=\"";
        // line 348
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comoFuncionaArtista");
        echo "\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["directorio_imagenes_public"] ?? null)), "html", null, true);
        echo "print1.jpg\" alt=\"Thumbnail\">
                    </a>
                    <h3 class=\"mt20\"><b>Espectador</b></h3>
                    <span>¿Quieres escuchar lo último, asistir a los mejores conciertos y enterarte de las novedades de tus grupos preferidos?</span>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "ayuda/comoFuncionaArtista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 349,  434 => 348,  425 => 342,  421 => 341,  412 => 335,  408 => 334,  364 => 293,  357 => 289,  340 => 275,  326 => 264,  312 => 253,  298 => 242,  284 => 231,  270 => 220,  251 => 204,  242 => 198,  235 => 194,  130 => 92,  122 => 87,  53 => 21,  40 => 11,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ayuda/comoFuncionaArtista.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/ayuda/comoFuncionaArtista.html.twig");
    }
}
