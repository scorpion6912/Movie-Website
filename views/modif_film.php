<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/page.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
  <title>Modifier Film</title>
</head>
<body>
  <?php
        include 'header.php';
  ?>
  <div id="update_page">

    <div class="formulaire">
    <h2>Modifier un Film</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <?php
          require '../controllers/recuperation_donnees_film.php';
          
      ?>
      <div>
        <label><b>Affiche</b></label><br>
        <input class="input" type="file" name="affiche"  placeholder="affiche" value= "<?php  echo $result->getAffiche(); ?>" required>
      </div><br>
      <div>
        <label><b>Nom</b></label><br>
        <input class="input" type="text" name="nom"  placeholder="nom" value= "<?php  echo $result->getNom(); ?>" required>
      </div><br>
      <div>
        <label><b>Année</b></label><br>
        <input class="input" type="text" name="annee"  placeholder="annee" value= "<?php  echo $result->getAnnee(); ?>" required>
      </div><br>
      <div>
        <label><b>Description</b></label><br>
        <input class="input" type="text" name="description"  placeholder="description" value= "<?php  echo $result->getDescription(); ?>" required>
      </div><br>
      <div>
        <label><b>Score</b></label><br>
        <input class="input" type="text" name="score"  placeholder="score" value= "<?php  echo $result->getScore(); ?>" required>
      </div><br>
      <div>
        <label><b>Nombre de Votants</b></label><br>
        <input class="input" type="text" name="nbVotants"  placeholder="Nombre Votants" value= "<?php  echo $result->getNbVotants(); ?>" required>
      </div><br>
      <div id="button_div">
      <button class="button" type="submit" value="Modifier">Modifier</button>
    </div><br>
    </form>
    </div>
    </div>

    <?php
    require '../controllers/traitement_modif_film.php';
    ?>

  <a href="filmView.php" id="back_home">
            <div>
                <i class="far fa-hand-point-right fa-2x"></i>
                <p>Annuler</p> 
                <i class="far fa-hand-point-left fa-2x"></i>
            </div>
  </a>

  <?php
          include 'footer.php';
  ?>
</body>
</html>