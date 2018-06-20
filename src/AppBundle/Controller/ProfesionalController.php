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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of Profesional
 *
 * @author Ing. Ricardo Presilla
 * @version 1.0.
 */
class ProfesionalController extends Controller{
    /**
     * Muestra el formulario de registro de Profesionales.
     * @param Request $request
     * @return type
     */
    public function registroProfesionalAction(Request $request){

        return $this->render('profesionales/registro.html.twig', array( ));
    }
    /**
     * Muestra las condiciones para el profesional.
     * @param Request $request
     * @return type
     */
    public function condicionesProfesionalAction(Request $request){
        return $this->render('profesionales/condiciones.html.twig', array( ));
    }
    /**
     * Crea en el sistema el registro del profesional.
     * @param Request $request
     * @return type
     */
    public function crearCuentaAction(Request $request){
        return $this->render('profesionales/confirmacion.html.twig', array(
        ));
    }
}
