<?php

namespace viewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use viewBundle\Entity\Projet;
use viewBundle\Form\ProjetType;

/**
 * Description of AdminController
 *
 * @author jean-christian
 */
class AdminController extends Controller{
//    Ajout Admin Projet    

// Form maping (cette fonction permet de retouner un formulaire vide pour nos projets)
/**
 * @Route("/admin/projet/get", name="getProjet")
 * @Template("viewBundle:Default:admin.html.twig")
 */
    public function getProjet() {
        //on apelle le formulaire et on crée une nouvelles instance
        $f = $this->createForm(ProjetType::class, new Projet());
        //je ne sais pas
        return array("formAddProjet" => $f->createView());
    }

// Form persist (cette fonction s'execute quand on clique sur le boutton valider et (persist) envoi le formulaire remplis et l'enregistre en base de donées)
    /**
     * @Route("/admin/projet/add", name="valid")
     */
    public function addProjet(Request $request) {
        // on crée une nouvelle instance
        $addProjet = new Projet();
        //on crée un formulaire (une zone en memoire tampon est attribuer le temps d'envoyé tout en base de données)
        $f = $this->createForm(ProjetType::class, $addProjet);
        //on lie les champ de la vue et le formulaire
        $f->handleRequest($request);
        //on apalle l'entity manager
        $em = $this->getDoctrine()->getManager();
        //on enregistre en memoire le formulaire remplis
        $em->persist($addProjet);
        //on envoie tout sur la base de données
        $em->flush();

        //on redirige vers la page indiqué
        return $this->redirect($this->generateUrl('projets'));
    }
    
// Delete projet (cette function permet de supprimer le projet qui a l'id correspondant en base de données)
    /**
     * @Route("/admin/projet/supr/{id}", name="suprProjet")
     */
    public function deleteProjet($id) {
        //on recupere l'entity manager
        $em = $this->getDoctrine()->getEntityManager();
        //on recupere l'id du projet que l'on veut supprimer
        $getId = $em->find("viewBundle:Projet", $id);
        //on suprimme le projet
        $em->remove($getId);
        // on envoie les infos a la base de donées
        $em->flush();
        
        //on redirige vers la page indiqué
        return $this->redirect($this->generateUrl('projets'));
    }
    
    // Modif Projet
    /**
     * @Route("admin/projet/edit/{id}", name="editProjet")
     * @Template("viewBundle:Default:modif.html.twig")
     * 
     */
    public function editAnnonce($id,Projet $up){
        //on retourne un formulaire avec les valeurs existantes de l'instance avec l'id correspondant. 
        return array("formProjet" => $this->createForm(ProjetType::class, $up)->createView(),'id'=>$id);
    }
    
     
   /**
    * @Route("admin/projet/update/{id}",name="modif")
    */
   public function  uptdateProjet(Request $request , Projet $up){
       //On apelle l'entity manager de doctrine.
        $em = $this->getDoctrine()->getManager();
        
        //on crée un un formulaire que l'on lie avec l'instance que l'on est allé chercher.
        $f= $this->createForm(ProjetType::class,$up);
        //on lie les champs que l'on vient de modifier avec le formulaire.
        $f->handleRequest($request);
        
        //on effectuenune vérification (champs vide + autre verif).
        if($f->isValid())
        {
        
        //On réecrit en memoire les modif effectuer.    
        $em->merge($up);
        //On envoie tout en DB.
        $em->flush();
        }
        
        //On redirige vers la page adequate.
        return $this->redirectToRoute('projets');
   }
}

