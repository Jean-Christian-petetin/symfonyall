<?php

namespace viewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewController extends Controller
{
    /**
     * @Route("/", name="accueil")
     * @Template("viewBundle:Default:index.html.twig")
     */
    public function getIndex()
    {
        return null;
    }
    
    /**
     * @Route("/projets", name="projets")
     * @Template("viewBundle:Default:projets.html.twig")
     */
    public function getProjets()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $projets = $em->getRepository("viewBundle:Projet")->findAll();
        return array("varProjets" => $projets);
//        return $this->render('projets.html.twig', array("varProjet" => $projet));
    }

}
