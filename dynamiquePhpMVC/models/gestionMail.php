<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$from = 'contact@domaine.fr';

// Fonction appelées !!!!!!!
/*
 * Confirmation de reception suite à l'envoi du formulaire de contact
 */
function confirmationContact($email, $sujet, $corps){
    //envoie un mail a nous
    mail($from, $sujet, $corps, 'From: '.$email);
    //envoie un mail a celui qui nous en a envoye un
    $confirmation = 'Nous avons bien recu votre demande de contact';
    return mail($email, 'RE : '.$sujet, $confirmation, 'From: '.$from);
}
/*
 * email envoyé pour la gestion de compte utilisateur
 * recup mdp / confirmcréaCompte / confirmSupprCompte ...
 */
function confirmationCreationCompte(){
    
}
/*
 * parle d'elle même ;)
 */
function newsLetter(){
    
}