<?php
namespace AppBundle\Controller;
/*
 * Copyright (C) 2018 Ing. Ricardo Presilla
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Usuario;
use AppBundle\Form\Type\UsuarioType;
/**
 * Controlador para la seguridad y control de acceso al sistema.
 *
 * @author Ing. Ricardo Presilla
 * @version 1.0.
 */
class SeguridadController extends Controller{
    /**
     * Metodo para accesar a la administración del sitio web
     * 
     */
    public function loginAction(){
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        if ($error) {
            $this->addFlash('error', 'Error de login');
        }
        return $this->render('seguridad/login.html.twig', 
                array(  'last_username' => $lastUsername,
                        'error'=> $error,
        ));
    }
    /**
     * 
     */
    public function securityCheckAction(){
    }
    /**
     * 
     */
    public function logoutAction(){
        return $this->redirect('home');
    }

    /**
     * Muestra a todos los usuarios del sistema
     */
    public function listarAction()
    {
        $em=$this->getDoctrine()->getManager();
        $usuarios=$em->getRepository('AdminBundle:Usuario')->findAll();
        return $this->render('AdminBundle:Usuario:listar.html.twig',array(
            'usuarios'=>$usuarios
        ));
    }
    /**
     * Permite agregar usuarios al sistema
     */
    public function adicionarAction(Request $request){
        $usuario=new Usuario();
        $form=$this->createForm(new UsuarioType(), $usuario);

        if($request->getMethod()=='POST'){
            $form->handleRequest($request);

            if($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $usuario->setFechaRegistro(new \DateTime('today'));

                //encoding pass
                $encoder=$this->get('security.encoder_factory')
                    ->getEncoder($usuario);
                $usuario->setSalt(md5(time()));
                $passCodifier=$encoder->encodePassword(
                    $usuario->getPassword(),
                    $usuario->getSalt()
                );
                //setting password
                $usuario->setPassword($passCodifier);

                $usuario->setRol('ROLE_ADMIN');

                $estadoUsuario=$em->getRepository('AdminBundle:EstadoUsuario')->findOneBySlug('activo');

                $usuario->setEstadoUsuarioid($estadoUsuario);


                $em->persist($usuario);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info','Usuario adicionado satisfactoriamente');
                return $this->redirect($this->generateUrl('admin_usuario_listar'));
            }
        }

        return $this->render('AdminBundle:Usuario:adicionar.html.twig',array(
            'form'=>$form->createView()
        ));
    }
    /**
     */
    public function editarAction(Request $request, $idUsuario){
        $em=$this->getDoctrine()->getManager();
        if($idUsuario==null || $idUsuario==''){
            $this->get('session')->getFlashBag()->add('error','Debe especificar el id del usuario a modificar');
            return $this->redirect($this->generateUrl('admin_usuario_listar'));
        }
        $usuario=$em->getRepository('AdminBundle:Usuario')->find($idUsuario);
        if($usuario==null){
            $this->get('session')->getFlashBag()->add('error','El usuario especificado no existe');
            return $this->redirect($this->generateUrl('admin_usuario_listar'));
        }
        $form=$this->createForm(new UsuarioType(), $usuario);
        if($request->getMethod()=='POST'){
            $passOriginal=$usuario->getPassword();
            $rol=$usuario->getRol();
            $form->handleRequest($request);
            if($form->isValid()){
                if($usuario->getPassword()==null){
                    $usuario->setPassword($passOriginal);
                }
                else{//establecer la contrasena nueva
                    $encoder=$this->get('security.encoder_factory')->getEncoder($usuario);
                    $usuario->setSalt(md5(time()));
                    $passCodifier=$encoder->encodePassword(
                        $usuario->getPassword(),
                        $usuario->getSalt()
                    );
                    $usuario->setPassword($passCodifier);
                }
                $em->persist($usuario);
                $em->flush();
                if($request->get('editar_perfil') == '1'){

                    $this->get('session')->getFlashBag()->add('info','Su perfil ha sido actualizado con éxito');
                    return $this->redirect($this->generateUrl('admin_homepage'));
                }
                else{

                $this->get('session')->getFlashBag()->add('info','El usuario ha sido actualizado con éxito');
                    return $this->redirect($this->generateUrl('admin_usuario_listar'));
                }
            }
        }
        $editar_perfil = "";
        return $this->render('AdminBundle:Usuario:adicionar.html.twig',array(
            'accion' => 'editar',
            'idUsuario' => $idUsuario,
            'form' => $form->createView(),
            'editar_perfil' => $editar_perfil
        ));

    }
    /**
     */
    public function eliminarAction(Request $request){
        $em=$this->getDoctrine()->getManager();

        if($request->get('idObjs') == ""){
            return new Response(json_encode(array(
                false,
                "Debe seleccionar al menos un usuario para eliminar."
            )));
        }

        $objIds= explode(',', $request->get('idObjs'));

        foreach($objIds as $idObj){

            $obj=$em->getRepository('AdminBundle:Usuario')->find($idObj);
            if($obj!=null){
                $em->remove($obj);
            }
        }
        $em->flush();

        $msg = "El usuario seleccionado se ha eliminado satisfactoriamente.";
        if(count($objIds) > 1)
            $msg = "Los usuarios seleccionados se han eliminado satisfactoriamente.";

        return new Response(json_encode(array(
            true,
            $msg
        )));
    }
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function registroEspectadorAction(Request $request){
        return $this->render('espectadores/registro.html.twig', array( ));
    }
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function condicionesEspectadorAction(Request $request){
        return $this->render('espectadores/condiciones.html.twig', array( ));
    }
    /**
     * Muestra el inicio de sesion para el usuario registrado.
     */
    public function inicioSesionAction(Request $request, $login){
        $cantidad = 5;
        return $this->render('usuarios/sesion.html.twig', array(
            'cantResultados' => $cantidad,
            ));
    }
    /**
     * Muestra la seccion de administración de entradas en la sesion del usuario 
     * registrado.
     */
    public function sesionEntradasAction(Request $request, $login){
        $cantidad = 5;
        return $this->render('usuarios/entradas.html.twig', array(
            'cantResultados' => $cantidad,
            ));
    }
    /**
     * Muestra la seccion de administración de favoritos en la sesion del usuario 
     * registrado.
     */
    public function sesionFavoritosAction(Request $request, $login){
        $cantidad = 9/3;//Son 3 por fila
        $cantidad2 = 3/3;//Son 3 por fila
        return $this->render('usuarios/favoritos.html.twig', array( 
            'cantResultados' => $cantidad,
            'cantResultados2' => $cantidad2,
            ));
    }
    /**
     * Muestra la seccion de administración de favoritos en la sesion del usuario 
     * registrado.
     */
    public function sesionSeguidoresAction(Request $request, $login){
        $cantidad = 3/3;//Son 3 por fila
        return $this->render('usuarios/seguidores.html.twig', array( 
            'cantResultados' => $cantidad,
            ));
    }
    /**
     * Muestra la seccion de administración de eventos en la sesion del usuario 
     * registrado.
     */
    public function sesionEventosAction(Request $request, $login){
        $cantidad = 7;//Son 1 por fila
        return $this->render('usuarios/eventos.html.twig', array( 
            'cantResultados' => $cantidad,
            ));
    }
    /**
     * Muestra la seccion de administración de artistas en la sesion del usuario 
     * registrado.
     */
    public function sesionArtistasAction(Request $request, $login){
        $cantidad = 2;//Son 1 por fila
        return $this->render('usuarios/artistas.html.twig', array( 
            'cantResultados' => $cantidad,
            ));
    }
    /**
     * Muestra la seccion de administración de artistas en la sesion del usuario 
     * registrado.
     */
    public function sesionNotificacionesAction(Request $request, $login){
        $cantidad = 3;//Es 1 por fila
        return $this->render('usuarios/notificaciones.html.twig', array( 
            'cantResultados' => $cantidad,
            ));
    }
    /**
     * Muestra la seccion de administración de mensajes en la sesion del usuario 
     * registrado.
     */
    public function sesionMensajesAction(Request $request, $login){
        $cantidad = 4;//Son 1 por fila
        return $this->render('usuarios/mensajes.html.twig', array( 
            'cantResultados' => $cantidad,
            ));
    }
    /**
     * Muestra la seccion de administración de conversaciones en la sesion del
     * usuario registrado.
     */
    public function sesionConversacionesAction(Request $request, $id){
        return $this->render('usuarios/conversaciones.html.twig', array( ));
    }
    /**
     * Muestra la seccion de administración de conversaciones en la sesion del
     * usuario registrado.
     */
    public function sesionPrivacidadAction(Request $request, $login){
        return $this->render('usuarios/privacidad.html.twig', array( ));
    }
}
