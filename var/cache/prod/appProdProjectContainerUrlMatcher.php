<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        if (0 === strpos($pathinfo, '/ComoFunciona')) {
            // comoFunciona
            if ('/ComoFunciona' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::comoFuncionaAction',  '_route' => 'comoFunciona',);
            }

            // comoFuncionaArtista
            if ('/ComoFuncionaArtista' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::comoFuncionaArtistaAction',  '_route' => 'comoFuncionaArtista',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Eventos')) {
            // comprarEntradas
            if ('/Eventos/Comprar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::comprarEntradasAction',  '_route' => 'comprarEntradas',);
            }

            // agregarEvento
            if ('/Eventos/Agregar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EventoController::agregarAction',  '_route' => 'agregarEvento',);
            }

            // listarEventos
            if ('/Eventos' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EventoController::listadoAction',  '_route' => 'listarEventos',);
            }

            // detallesEvento
            if (0 === strpos($pathinfo, '/Eventos/Detalles') && preg_match('#^/Eventos/Detalles(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detallesEvento')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\EventoController::detallesAction',));
            }

            if (0 === strpos($pathinfo, '/Eventos/Paso')) {
                // paso1
                if ('/Eventos/Paso1' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EventoController::paso1Action',  '_route' => 'paso1',);
                }

                // paso2
                if ('/Eventos/Paso2' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EventoController::paso2Action',  '_route' => 'paso2',);
                }

                // paso3
                if ('/Eventos/Paso3' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EventoController::paso3Action',  '_route' => 'paso3',);
                }

                // paso4
                if ('/Eventos/Paso4' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EventoController::paso4Action',  '_route' => 'paso4',);
                }

                // paso5
                if ('/Eventos/Paso5' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EventoController::paso5Action',  '_route' => 'paso5',);
                }

            }

        }

        // condicionesEspectador
        if ('/Espectador/Condiciones' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::condicionesEspectadorAction',  '_route' => 'condicionesEspectador',);
        }

        if (0 === strpos($pathinfo, '/A')) {
            // ayuda
            if ('/Ayuda' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ayudaAction',  '_route' => 'ayuda',);
            }

            if (0 === strpos($pathinfo, '/Artistas')) {
                // listadoArtistas
                if ('/Artistas' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ArtistasController::listadoAction',  '_route' => 'listadoArtistas',);
                }

                // detallesArtistas
                if (0 === strpos($pathinfo, '/Artistas/Detalles') && preg_match('#^/Artistas/Detalles(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detallesArtistas')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\ArtistasController::detallesAction',));
                }

                // registroArtistas
                if ('/Artistas/nuevo' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ArtistasController::crearAction',  '_route' => 'registroArtistas',);
                }

                if (0 === strpos($pathinfo, '/Artistas/Paso')) {
                    // artistaPaso1
                    if ('/Artistas/Paso1' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ArtistasController::paso1Action',  '_route' => 'artistaPaso1',);
                    }

                    // artistaPaso2
                    if ('/Artistas/Paso2' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ArtistasController::paso2Action',  '_route' => 'artistaPaso2',);
                    }

                    // artistaPaso3
                    if ('/Artistas/Paso3' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ArtistasController::paso3Action',  '_route' => 'artistaPaso3',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/Admin')) {
                // administrar
                if ('/Admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AdministracionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'administrar',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_administrar;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'administrar'));
                    }

                    return $ret;
                }
                not_administrar:

                // listarUsuario
                if ('/Admin/listado' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::listarAction',  '_route' => 'listarUsuario',);
                }

                // agregarUsuario
                if ('/Admin/adicionar' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::adicionarAction',  '_route' => 'agregarUsuario',);
                }

                // editarUsuario
                if (0 === strpos($pathinfo, '/Admin/editar') && preg_match('#^/Admin/editar/(?P<idUsuario>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarUsuario')), array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::editarAction',));
                }

                // eliminarUsuario
                if ('/Admin/eliminar' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::eliminarAction',  '_route' => 'eliminarUsuario',);
                }

            }

        }

        // prueba
        if ('/P' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::pruebasAction',  '_route' => 'prueba',);
        }

        if (0 === strpos($pathinfo, '/Profesional')) {
            // condicionesProfesional
            if ('/Profesional/Condiciones' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfesionalController::condicionesProfesionalAction',  '_route' => 'condicionesProfesional',);
            }

            // crearCuentaProfesional
            if ('/Profesional' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfesionalController::crearCuentaAction',  '_route' => 'crearCuentaProfesional',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Salas')) {
            // listadoSalas
            if ('/Salas' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SalasController::indexAction',  '_route' => 'listadoSalas',);
            }

            // detallesSalas
            if (0 === strpos($pathinfo, '/Salas/Detalles') && preg_match('#^/Salas/Detalles(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detallesSalas')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\SalasController::detallesAction',));
            }

            if (0 === strpos($pathinfo, '/Salas/Paso')) {
                // salaPaso1
                if ('/Salas/Paso1' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalasController::paso1Action',  '_route' => 'salaPaso1',);
                }

                // salaPaso2
                if ('/Salas/Paso2' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalasController::paso2Action',  '_route' => 'salaPaso2',);
                }

                // salaPaso3
                if ('/Salas/Paso3' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalasController::paso3Action',  '_route' => 'salaPaso3',);
                }

                // salaPaso4
                if ('/Salas/Paso4' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalasController::paso4Action',  '_route' => 'salaPaso4',);
                }

            }

            // nuevaSala
            if ('/Salas/nueva' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SalasController::crearAction',  '_route' => 'nuevaSala',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::securityCheckAction',  '_route' => 'login_check',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::logoutAction',  '_route' => 'logout',);
        }

        if (0 === strpos($pathinfo, '/Re')) {
            // registroEspectador
            if ('/Registro/Espectador' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SeguridadController::registroEspectadorAction',  '_route' => 'registroEspectador',);
            }

            // registroProfesional
            if ('/Registro/Profesional' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfesionalController::registroProfesionalAction',  '_route' => 'registroProfesional',);
            }

            // buscar
            if ('/Resultados' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::resultadosAction',  '_route' => 'buscar',);
            }

        }

        // agregarImagen
        if ('/imagenes/adicionar' === $pathinfo) {
            return array (  '_controller' => 'AppBundle:Imagen:agregar',  '_route' => 'agregarImagen',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // inicioSesion
            if (preg_match('#^/usuario/(?P<login>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inicioSesion')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::inicioSesionAction',));
            }

            // usuariosEntradas
            if (preg_match('#^/usuario/(?P<login>[^/]++)/entradas$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariosEntradas')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionEntradasAction',));
            }

            // usuariosFavoritos
            if (preg_match('#^/usuario/(?P<login>[^/]++)/favoritos$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariosFavoritos')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionFavoritosAction',));
            }

            // usuariosSeguidores
            if (preg_match('#^/usuario/(?P<login>[^/]++)/seguidores$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariosSeguidores')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionSeguidoresAction',));
            }

            // usuariosEventos
            if (preg_match('#^/usuario/(?P<login>[^/]++)/eventos$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariosEventos')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionEventosAction',));
            }

            // usuariosArtistas
            if (preg_match('#^/usuario/(?P<login>[^/]++)/artistas$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariosArtistas')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionArtistasAction',));
            }

            // usuariosNotificaciones
            if (preg_match('#^/usuario/(?P<login>[^/]++)/noti$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariosNotificaciones')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionNotificacionesAction',));
            }

            // usuariosMensajes
            if (preg_match('#^/usuario/(?P<login>[^/]++)/mensajes$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariosMensajes')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionMensajesAction',));
            }

            // usuariosConversaciones
            if (preg_match('#^/usuario/(?P<login>[^/]++)/conversacion(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariosConversaciones')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionConversacionesAction',));
            }

            // usuarioPrivacidad
            if (preg_match('#^/usuario/(?P<login>[^/]++)/privacidad$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioPrivacidad')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\SeguridadController::sesionPrivacidadAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
