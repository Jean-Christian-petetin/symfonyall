<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author jean-christian
 */
class User {
    //put your code here
    private $ID;
    
    private $email;
    private $motDePasse;
    private $pseudo;
    
    public function __construct() {
        
    }

    
    public function getID() {
        return $this->ID;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMotDePasse() {
        return $this->motDePasse;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    

}
