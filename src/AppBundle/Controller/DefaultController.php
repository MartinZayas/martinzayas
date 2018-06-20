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

class DefaultController extends Controller{
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function indexAction(Request $request){
        return $this->render('default/inicio.html.twig', array( ));
    }
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function comoFuncionaAction(Request $request){
        return $this->render('ayuda/comoFunciona2.html.twig', array( ));
    }
    /**
     */
    public function comoFuncionaArtistaAction(Request $request)
    {
        return $this->render('ayuda/comoFuncionaArtista.html.twig', array( ));
    }
    /**
     * Comprar las entradas a los eventos
     * 
     * @param Request $request
     * @return type
     */
    public function comprarEntradasAction(Request $request){
        return $this->render('eventos/comprarEntradas.html.twig', array( ));
    }
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function ayudaAction(Request $request){
        return $this->render('ayuda/ayuda.html.twig', array( ));
    }
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function resultadosAction(Request $request){
        return $this->render('busquedas/encontrado.html.twig', array( ));
    }

    public function pruebasAction(Request $request){
        return $this->render('salas/paso1v2.html.twig', array( ));
    }
}
