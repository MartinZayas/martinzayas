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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Artista;
/**
 * Description of ArtistasController
 *
 * @author Ing. Ricardo Presilla
 */
class ArtistasController extends Controller{
    /**
     * Pagina del listado de artistas.
     */
    public function listadoAction(Request $request){
        return $this->render('artistas/listado.html.twig', array(
        ));
    }
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function detallesAction(Request $request, $id){
        return $this->render('artistas/perfil.html.twig', array( 
            'id' =>$id,
        ));
    }
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function crearAction(Request $request){
        return $this->render('artistas/listado.html.twig', array(
        ));
    }
    /**
     * Pagina el paso 1 de crear artista.
     */
    public function paso1Action(Request $request){
        return $this->render('artistas/paso1.html.twig', array(
        ));
    }
    /**
     * Pagina el paso 2 de crear artista.
     */
    public function paso2Action(Request $request){
        return $this->render('artistas/paso2.html.twig', array(
        ));
    }
    /**
     * Pagina el paso 3 de crear artista.
     */
    public function paso3Action(Request $request){
        return $this->render('artistas/paso3.html.twig', array(
        ));
    }
}
