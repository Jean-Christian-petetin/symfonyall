<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  include '../view/template/entete.php';
  include'../view/template/header.php';
  include'../view/template/nav.php';
?>
  <form  method="post" action="./app.php">
      <input type="text" name="title" placeholder="titre"><br>
   <input type="text" name="author" placeholder="auteur"><br>
   <textarea type="" name="sujet" placeholder="sujet" maxlength="512"></textarea><br>
   <input type="submit" value="validez">
 </form>
<?php
  /*
   * Insertion du code d'affichage de de l'ajout de news.
   */
  include'../view/template/footer.php';
  