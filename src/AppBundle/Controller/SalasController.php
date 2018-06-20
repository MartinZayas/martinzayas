<?php

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

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Local;
/**
 * Description of SalasController
 *
 * @author Ing. Ricardo Presilla.
 * @version 1.0.
 */
class SalasController extends Controller{
    /**
     * Pagina del listado de salas
     */
    public function indexAction(Request $request){
        return $this->render('salas/listado.html.twig', array( ));
    }
    /**
     * Página de detalles de una sala
     */
    public function detallesAction(Request $request, $id=1){
        return $this->render('salas/perfil.html.twig', array( ));
    }
    /**
     * Crea el formulario de agregar datos del local.
     * @param Request $request
     * @return type
     */
    public function crearAction(Request $request){
//        $nuevo = new Local();
//        $formulario = $this->createFormBuilder($nuevo)
//                ->add('nombre')
//                ->add('descripcion')
//                ->add('telefono')
//                ->add('aforo')
//                ->add('medidasEscenario')
//                ->add('cacheMin')
//                ->add('cacheMax')
//                ->add('cif')
//                ->add('anioApertura')
//                ->add('mesApertura')
//                ->add('video')
//                ->add('iban')
//                ->add('contactoid')
////                ->add('datosTecnicos')
//                ->getForm();
//        $formulario->handleRequest($request); 
//        if ($formulario->isSubmitted() && $formulario->isValid()) {
//            $nuevo = $formulario->getData();
//            $entidad = $this->getDoctrine()->getManager();
//            $entidad->persist($nuevo);
//            $entidad->flush(); 
//            return $this->redirectToRoute('listadoSalas');
//        }
//        else{
//            return $this->render('salas/nuevo.html.twig', array(
//                'formulario' => $formulario->createView(),
//            ));
//        }
        return $this->redirectToRoute('listadoSalas');
    }
    /**
     * Paso 1 para agregar una sala ó local.
     * @param Request $request
     * @return type
     */
    public function paso1Action(Request $request){
        return $this->render('salas/paso1.html.twig', array(
            ));
    }
    /**
     * Paso 2 para agregar una sala ó local.
     * @param Request $request
     * @return type
     */
    public function paso2Action(Request $request){
        return $this->render('salas/paso2.html.twig', array(
            ));
    }
    /**
     * Paso 3 para agregar una sala ó local.
     * @param Request $request
     * @return type
     */
    public function paso3Action(Request $request){
        return $this->render('salas/paso3.html.twig', array(
            ));
    }
    /**
     * Paso 4 para agregar una sala ó local.
     * @param Request $request
     * @return type
     */
    public function paso4Action(Request $request){
        return $this->render('salas/paso4.html.twig', array(
            ));
    }
}
