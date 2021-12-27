<?php

        if(isset($_FILES['affiche']) && isset($_POST['nom']) && isset($_POST['annee']) &&
            isset($_POST['description']) && isset($_POST['score']) && isset($_POST['nbVotants'])){

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

            $save = new FilmRepository(connectDB());
            $nom=$_POST['nom'];
            $annee=$_POST['annee'];
            $description=$_POST['description'];
            $score=$_POST['score'];
            $nbVotants=$_POST['nbVotants'];
            $film = new Film($name, $nom, $annee, $description, $score, $nbVotants);
            
            $result=$save->addFilm($film);
            echo '<meta http-equiv="Refresh" content="0;URL=filmView.php">';

        }
        
        if(isset($_GET['id'])){
            
            $id=$_GET['id'];
            $save = new FilmRepository(connectDB());
            $save->delete($id);
            echo '<meta http-equiv="Refresh" content="0;URL=filmView.php">';

        }
?>