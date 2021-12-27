<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/page.css">
    <link rel="stylesheet" href="../assets/css/film_unite.css">
    <title>vote effectué</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <div  class="vote_eff">
        <h1>Votre vote à bien été pris en compte</h1>
    </div>

    <a href="../views/home.php">
        <div>
            <i class="far fa-hand-point-right fa-2x"></i>
            <p>Cliquez ici pour retourner à la liste des films</p> 
            <i class="far fa-hand-point-left fa-2x"></i>
        </div>
    </a>

    

    <?php
        include 'footer.php';
    ?>
    
</body>
</html>