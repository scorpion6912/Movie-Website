<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="survey">
    <h1> Connexion </h1>
    <form method="GET" action="controllers/login.php">
        <p>
            <label>Login :  </label> <input type="text" name="login" />
            <br>
            <label>Mot de Passe : </label> <input type="password" name="pwd" />
            <br>
            <div class="button_container">
                <button type="submit" value="OK" >Me connecter</button>
            </div>
        </p>
    </form>
    <a href="views/registerView.php"> M'inscrire</a>
</div>
</body>
</html>