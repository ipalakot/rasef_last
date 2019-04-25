<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueilAction(Request $request)
    {

        // Mise en place de la palceacceul
        return $this->render('@RasefGender/index.html.twig');
    }

    /**
     * @Route("/affichage", name="affichage")
     */
    public function affichalAction(Request $request)
    {

        // Mise en place de la palceacceul
        return $this->render('@RasefGender/affichage.html.twig');
    }


}
