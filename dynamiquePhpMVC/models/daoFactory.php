<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function initDB(){
	$ADRESSE_DB = "localhost";
	$NOM_DB = "excercice";
	$USER = "root";
	$PASS = "";
	return new PDO('mysql:host='.$ADRESSE_DB.';dbname='.$NOM_DB.'', $USER, $PASS);
}

/*
 * Retourne une liste de news.
 */

function getNews(){
    return initDB()->query('SELECT * from News');
}

function insertNews(News $news){
  $database = initDB();
  $database->beginTransaction();
  //$addNews = $database->prepare("INSERT INTO News (date,titre,sujet,auteur) VALUES (:date,:titre,:sujet,:auteur)");
  $addNews = $database->prepare("INSERT INTO News (date,titre,sujet,auteur) VALUES (?,?,?,?)");
  $news->setDate(getTime());
  $addNews->bindValue(1, $news->getDate());
  $addNews->bindValue(2, $news->getTitre());
  $addNews->bindValue(3, $news->getAuteur());
  $addNews->bindValue(4, $news->getSujet());
  $addNews->execute();
  $database->commit();
}

/*
 * Retourne la date actuelle (timestamp) format yyyy-mm-dd
 * n'a rien a faire dans la partie acces en base de donnée,
 * preferable de le mettre dans un module de gestion du temps.
 */
function getTime(){
    return date('Y-m-d');
}