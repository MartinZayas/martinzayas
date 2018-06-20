<?php

namespace AdministracionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller{
    /**
     * Pagina de administración del sitio
     * 
     * @param Request $request
     * @return type
     */
    public function indexAction(Request $request){
        return $this->render('administracion/administrar.html.twig', array( ));
    }
}
