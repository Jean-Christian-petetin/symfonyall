<nav>
    <ul class="flexbox">
    <?php
        /*
        chercher dans le dossier : template tous mes fichier php
        on va recuperer de maniere recursive les nom des fichier
        on va fabriquer les balise en affectant  pour chaque balise la valeur
        conrepondant au nom du fichier */
      /*  $sortie = '<li><a href="./index.php?page='.$nomdufichier'">'.$nomdufichier.'</a></li>';*/
        $viewDirectory = opendir('../view');
        if($viewDirectory){
          while(false !== ($file = readdir($viewDirectory))){
              
              $documentName = substr($file,0,strpos($file,'.php'));
              
              if (!empty($documentName)){
                  $exit = '<li><a href="./app.php?view='.$documentName.'">'.$documentName.'</a></li>';
                  echo $exit;
              }
          }

        }else{
          echo'erreur dans la pages';
        }
        closedir($viewDirectory);
        ?>
  </ul>
</nav>
