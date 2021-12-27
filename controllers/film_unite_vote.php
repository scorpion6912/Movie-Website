<?php
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            include '../controllers/Film.php';
            include '../models/FilmRepository.php';
            include '../models/connectDB.php';
            $save = new FilmRepository(connectDB());
            $liste=$save->getFilmById($id);
            echo $liste;
        }
        

    ?>