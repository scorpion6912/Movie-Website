<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/page.css">
    <title>User</title>
</head>
<body>

    <h2>Films:</h2>
    
    <div class="containerCard">
    <?php
        require '../controllers/liste_film.php';
    ?>
    </div>
</body>
</html>