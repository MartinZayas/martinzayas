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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Estilo;
use AppBundle\Entity\Artista;
use AppBundle\Entity\Local;
use AppBundle\Entity\Evento;
use AppBundle\Entity\Entrada;
/**
 * Description of EventoController
 *
 * @author Ing. Ricardo Presilla
 * @version 1.0.
 */
class EventoController extends Controller{
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function agregarAction(Request $request){
        return $this->redirectToRoute('listarEventos');
    }
    /**
     * 
     * @param Request $request
     * @return type
     */     
    public function listadoAction(Request $request){
        return $this->render('eventos/listado2.html.twig', array());
    }
    /***/
    public function detallesAction(Request $request){
        return $this->render('eventos/detallesv2.html.twig', array());
    }
    /**
     * Pagina el paso 1 de proponer concierto.
     */
    public function paso1Action(Request $request){
        $estilos = new Estilo();
        $artistas = new Artista();
        $estilos =  $this->getDoctrine()->getRepository('AppBundle:Estilo')
                ->findAll();
        $artistas =  $this->getDoctrine()->getRepository('AppBundle:Artista')
                ->findAll();
        return $this->render('eventos/paso1v2.html.twig', array(
        ));
    }
    /**
     * Pagina el paso 2 de proponer concierto.
     */
    public function paso2Action(Request $request){
        $locales = new Local();
        return $this->render('eventos/paso2v2.html.twig', array(
            'locales' => $locales,
        ));
    }
    /**
     * Pagina el paso 3 de proponer concierto.
     */
    public function paso3Action(Request $request){
        $evento = new Evento();
        return $this->render('eventos/paso3.html.twig', array(
        ));
    }
    /**
     * Pagina el paso 4 de proponer concierto.
     */
    public function paso4Action(Request $request){
        $estilos = new Estilo();
        $artistas = new Artista();
        $locales = new Local();
        $evento = new Evento();
        $entradas = new Entrada();
        $formulario = $this->createFormBuilder($evento)
                ->add('nombre')
                ->add('minimoEntradas')
                ->add('fechaVotacion')
                ->add('diasVotacion')
                //->add('save', 'submit')
                ->getForm();
        $formulario->handleRequest($request); 
        if ($formulario->isSubmitted() && $formulario->isValid()) {
            $entidad = $this->getDoctrine()->getManager();
            $entidad->persist($evento);
            $entidad->flush(); 
            return $this->redirectToRoute('paso5');
        }
        return $this->render('eventos/paso4.html.twig', array(
            'formulario' => $formulario->createView(),
        ));
    }
    /**
     * Pagina el paso 5 de proponer concierto.
     */
    public function paso5Action(Request $request){
        $estilos = new Estilo();
        $artistas = new Artista();
        $locales = new Local();
        $evento = new Evento();
        $entradas = new Entrada();
        return $this->render('eventos/paso5.html.twig', array(
            'evento' => $evento,
            'artistas' => $artistas,
            'estilos' => $estilos,
        ));
    }
}
