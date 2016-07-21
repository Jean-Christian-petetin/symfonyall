<?php
  include '../view/template/entete.php';
  include'../view/template/header.php';
  include'../view/template/nav.php';
  /*
   * Insertion du code d'affichage des news.
   */
  foreach(getNews() as $row) {
		//pour chaque ligne on recupere les valeurs et on les affiche sur la sortie standard :
    echo "<h3>".$row["titre"]." - ".$row["date"]."</h3>";
    echo "<b3>".$row["sujet"]."</b3>";
    echo "<p>".$row["auteur"]."</p>";
  }
  getNews();
  include'../view/template/footer.php';