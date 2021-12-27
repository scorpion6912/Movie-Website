<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="survey2">
    <h1> Création de compte</h1>
    <form method="GET" action="../controllers/register.php">
        <p>
            <label>Pseudo :</label><input type="text" name="pseudo" />
            <br>
            <label>Email :</label><input type="email" name="login" />
            <br>
            <label>Mot de passe :</label><input type="password" name="pwd" />
            <br>
            <p> Qui etes vous? </p>
            <div class="radio_choice">
                <div>
                    <input type="radio" id="user" name="rank" value="1"checked>
                    <label for="user">User</label>
                </div>

                <div>
                    <input type="radio" id="admin" name="rank" value="2">
                    <label for="admin">Admin</label>
                </div>
            </div>
            <br>
            <div class="button_container">
                <button type="submit" value="OK" >M'inscrire</button>
            </div>
        </p>
    </form>
    <a href="../index.php">Me connecter</a>
</div>
</body>
</html>