<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cardFilm.css">
    <title>Liste Films</title>
</head>
<body>
    
        <div class="card">
            <div>
                <img src="<?php echo $data['affiche']; ?>">
            </div>
            <div>
                <h1><?php echo $data['nom']; ?></h1>
                <p>Année: <?php echo $data['annee']; ?></p>
                <p>Description: <?php echo $data['description']; ?></p>
                <p>Score: <?php echo $data['score']; ?></p>
                <p>Nombre de votants: <?php echo $data['nbVotants']; ?></p>
                <p>Nom des acteurs : <?php require'../controllers/nomActeurFilm.php'; ?></p>
                
            </div>
            
            
            <a href="film_unite_vote.php?id=<?php echo $id ?>">Voter</a>
        </div>
</body>
</html>
