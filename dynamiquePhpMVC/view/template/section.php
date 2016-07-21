<section>
  <?php
  /*On inclu le fichier php conrepondant a la valeur passé dans l'URL*/
  if(isset($_GET['pages'])){
    /*include'./template/pages/'.$_GET['pages'].'php';*/
    if($_GET['pages'] == 'home'){
      include './template/pages/home.php';
    }else if($_GET['pages'] == 'news'){
      include './template/pages/news.php';
    }else  if($_GET['pages'] == 'about'){
      include './template/pages/about.php';
    }else  if($_GET['pages'] == 'contact'){
      include './template/pages/contact.php';
    }
  }else{
    include'./template/pages/home.php';
  }
  ?>
</section>
