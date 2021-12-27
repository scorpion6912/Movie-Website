<?php

    if(isset($_POST['id_form']) && isset($_FILES['affiche']) && isset($_POST['nom']) && isset($_POST['annee']) && isset($_POST['description']) && isset($_POST['score']) && isset($_POST['nbVotants'])){
            
        $id=$_POST['id_form'];
        
        $tmpName = $_FILES['affiche']['tmp_name'];
        $name = $_FILES['affiche']['name'];
        $size = $_FILES['affiche']['size'];
        $error = $_FILES['affiche']['error'];
        $tabExtension = explode('.', $name);
        $extension = strtolower(end($tabExtension));
        $extensions = ['jpg', 'png', 'jpeg', 'gif'];
        $name =  '../assets/img/affiches/'.$name;
        if(in_array($extension, $extensions)) {
            move_uploaded_file($tmpName, $name);
        }

        $nom=$_POST['nom'];
        $annee=$_POST['annee'];
        $description=$_POST['description'];
        $score=$_POST['score'];
        $nbVotants=$_POST['nbVotants'];
        $save = new FilmRepository(connectDB());
        $film = new Film($affiche, $nom, $annee, $description, $score, $nbVotants);
        $save->updateFilm($film, $id);
        echo '<meta http-equiv="Refresh" content="0;URL=filmView.php">';
    
    }
?>