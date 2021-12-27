<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/page.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Films</title>
</head>
<body>

<?php
        include 'header.php';
?>


    <h2>Films</h2>
    <div id="update_page">

    <table id="tab_admin">
    <thead>
        <tr>
            <th colspan="1">Id</th>
            <th colspan="1">Affiche</th>
            <th colspan="1">Nom</th>
            <th colspan="1">Année</th>
            <th colspan="1">Description</th>
            <th colspan="1">Score</th>
            <th colspan="1">Nombre de votants</th>
            <th colspan="1">Supprimer</th>
            <th colspan="1">Modifier</th>
        </tr>

        <?php 
            require '../controllers/affichage_film.php';
        ?> 

    </thead>
	</table>

    </br>
    </br>

    <div class="formulaire">
        <h2>Ajouter un Film</h2>
          <form action="" method="POST" enctype="multipart/form-data">
            <div>
              <label><b>Affiche</b></label><br>
              <input class="input" type="file" name="affiche"  placeholder="affiche" required>
            </div><br>
            <div>
            <label><b>Nom</b></label><br>
              <input class="input" type="text" name="nom"  placeholder="nom" required>
            </div><br>
            <div>
            <label><b>Année</b></label><br>
              <input class="input" type="text" name="annee"  placeholder="annee" required>
            </div><br>
            <div>
            <label><b>Description</b></label><br>
              <input class="input" type="text" name="description"  placeholder="description" required>
            </div><br>
            <div>
            <label><b>Score</b></label><br>
              <input class="input" type="text" name="score"  placeholder="score" required>
            </div><br>
            <div>
            <label><b>Nombre de votants</b></label><br>
              <input class="input" type="text" name="nbVotants"  placeholder="nombre de votants" required>
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
        require '../controllers/ajout_suppression_film.php';
?>

<?php
        include 'footer.php';
?>

</body>
</html>