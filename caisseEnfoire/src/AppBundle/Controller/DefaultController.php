<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class DefaultController extends Controller
{
    /**
     * @Route("/log", name="homepage")
     * @Template("::default/index.html.twig")
     */
    public function indexAction()
    {
        return null;
    }
    
    /**
     * @Route("/compte/consulter", name="consult")
     * @Template("::default/consulter.html.twig")
     */
    public function consulterAction()
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository("AppBundle:Compte")->findAll();
        return array('client'=>$client);
    }
    
    /**
     * @Route("/compte/retirer", name="retirer")
     * @Template("::default/retirer.html.twig")
     */
    public function retirerAction()
    {
        return null;
    }
    /**
     * @Route("/compte/ajout", name="ajout")
     * @Template("::default/ajouter.html.twig")
     */
    public function ajouterAction()
    {
        return null;
    }
    /**
     * @Route("/login", name="checkDeBanque")
     */
    public function checkDeBanque()
    {
        throw new Exception('Ta rien a foutre ici');
    }
    /**
     * @Route("/logout", name="logOut")
     */
    public function logout()
    {
        throw new Exception('Ta rien a foutre ici');
    }
    
    
}
