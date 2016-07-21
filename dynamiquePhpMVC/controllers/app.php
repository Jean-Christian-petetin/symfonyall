<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../models/factory.php';
require '../entities/News.php';
require '../entities/User.php';

/*
* Requete http GET - Get view
 */
$valueFromUrl = filter_input(INPUT_GET, 'view');
/*
 * Requete http POST - POST news
 */
$newsTitle = filter_input(INPUT_POST, 'title');
$newsAuthor = filter_input(INPUT_POST, 'author');
$newsSujet = filter_input(INPUT_POST, 'sujet');
$newsDate = null;
/*
 * Requete http POST - POST contact
 */
$contactEmail = filter_input(INPUT_POST, 'email');
$contactSujet = filter_input(INPUT_POST, 'sujet');
$contactCorps = filter_input(INPUT_POST, 'corps');

/*
 * Demande de vue
 */
if(isset($valueFromUrl)){ // requetes get
    getView($valueFromUrl);
}else { // requete de type post ou sans type de requetes
    if(isset($newsTitle)&&isset($newsAuthor)&&isset($newsSujet)){
    $news = new News();
    $news->setAll($newsSujet,$newsAuthor,$newsTitle);
    insertNews($news);
    getView('news');
}  else if(isset($contactEmail)&&isset($contactSujet)&&isset($contactCorps)){
    confirmationContact($contactEmail, $contactSujet, $contactCorps);
    getView("default");
    //sinon
    }else{
    getView("default");
    }
}

/*
 * Ajout de news
 */
if(isset($newsTitle)&&isset($newsAuthor)&&isset($newsSujet)){
    $news = new News();
    $news->setAll($newsSujet,$newsAuthor,$newsTitle);
    insertNews($news);
    getView('news');
}

/*
 * formulaire de contact
 */
if(isset($contactEmail)&&isset($contactSujet)&&isset($contactCorps)){
    confirmationContact($contactEmail, $contactSujet, $contactCorps);
}

