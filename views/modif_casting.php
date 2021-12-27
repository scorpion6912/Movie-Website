<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/page.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
  <title>Modifier Casting</title>
</head>
<body>
  <?php
        include 'header.php';
  ?>
  <div id="update_page">
    <div class="formulaire">
    <h2>Modifier un Casting</h2>
    <form action="" method="POST">
      <?php
          require '../controllers/recuperation_donnees_casting.php';
          
      ?>
      <div>
        <label><b>Film</b></label><br>
        <input class="input" type="text" name="id_film"  placeholder="id_film" value= "<?php  echo $result->getIdFilm(); ?>" required>
      </div><br>
      <div>
        <label><b>Acteur</b></label><br>
        <input class="input" type="text" name="id_acteur"  placeholder="id_acteur" value= "<?php  echo $result->getIdActeur(); ?>" required>
      </div><br>
      <div id="button_div">
      <button class="button" type="submit" value="Modifier">Modifier</button>
    </div><br>
    </form>
    </div>
    </div>

    <?php
    require '../controllers/traitement_modif_casting.php';
    ?>
    <a href="castingView.php" id="back_home">
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