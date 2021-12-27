<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/page.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Casting</title>
</head>
<body>

<?php
        include 'header.php';
?>

    <h2>Casting</h2>
    <div id="update_page">

    <table id="tab_admin">
    <thead>
        <tr>
            <th colspan="1">Id</th>
            <th colspan="1">Film</th>
            <th colspan="1">Acteur</th>
            <th colspan="1">Supprimer</th>
            <th colspan="1">Modifier</th>
        </tr>

        <?php 
            require '../controllers/affichage_casting.php';
        ?> 

    </thead>
	</table>

    </br>
    </br>

    <div class="formulaire">
      <h2>Ajouter un Casting</h2>
          <form action="" method="GET">
            <div>
              <label><b>Film</b></label><br>
              <input class="input" type="text" name="id_film"  placeholder="id_film" required>
            </div><br>
            <div>
            <label><b>Acteur</b></label><br>
              <input class="input" type="text" name="id_acteur"  placeholder="id_acteur" required>
            </div><br>
            <div id="button_div">
            <button class="button" type="submit" value="Ajouter">Ajouter</button>
          </div><br>
          </form>
    </div>
    </div>
    

    <a href="home.php" id="back_home">
          <div>
              <i class="far fa-hand-point-right fa-2x"></i>
              <p>Retourner à l'accueil</p> 
              <i class="far fa-hand-point-left fa-2x"></i>
          </div>
    </a>

<?php
        require '../controllers/ajout_suppression_casting.php';
?>

<?php
        include 'footer.php';
?>

</body>
</html>