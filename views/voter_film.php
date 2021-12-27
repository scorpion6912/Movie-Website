<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container_film_unite">
        <div>
            <img src="<?php echo $data['affiche']; ?>" style="height: 20em;">
            <div class="description_film">
                <h1><?php echo $data['nom']; ?></h1>
                <p>Année: <?php echo $data['annee']; ?></p>
                <p>Description: <?php echo $data['description']; ?></p>
                <p>Score: <?php echo $data['score']; ?></p>
                <p>Nombre de votants: <?php echo $data['nbVotants']; ?></p>
                <p>Nom des acteurs : <?php require'../controllers/nomActeurFilm.php'; ?></p>
            </div>
        </div>

        <?php 
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            }
        ?>

        <form class="voter" method="GET" action="../controllers/vote.php" ;
            <p>
                <div class="vote">
                    <input value="<?php echo $id ?>" type=hidden name="id2"></input>
                    <label>Vote : </label> <input type="number" name="score" />
                    <p>/10</p>
                </div>
                <button type="submit" value="OK" >Voter</button>
                <br>
            </p>
        </form>
    </div>
    
    <a href="home.php">
        <div>
            <i class="far fa-hand-point-right fa-2x"></i>
            <p>Retourner à la liste des films</p> 
            <i class="far fa-hand-point-left fa-2x"></i>
        </div>
    </a>

    

</body>
</html>