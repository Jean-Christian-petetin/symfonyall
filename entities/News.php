<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author Formateur BeWeb
 */
class News {
    //put your code here
    private $ID;
    
    private $date;
    private $sujet;
    private $auteur; //utilisateur
    private $titre;
    
    public function __construct(){
        
    }

    public function setAll($sujet, $auteur, $titre) {
        $this->sujet = $sujet;
        $this->auteur = $auteur;
        $this->titre = $titre;
    }

    
    public function getID() {
        return $this->ID;
    }

    public function getDate() {
        return $this->date;
    }

    public function getSujet() {
        return $this->sujet;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setDate($date) {
        
        $this->date = $date;
    }

    public function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    public function setAuteur(Utilisateur $auteur) {
        $this->auteur = $auteur;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getTitreAuteur(){
        return $this->getTitre()+$this->getAuteur();
    }

}
