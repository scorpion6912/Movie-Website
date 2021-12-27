<?php 
            require '../models/connectDB.php';
            require '../models/FilmRepository.php';
            
            $save = new FilmRepository(connectDB());
            $films=$save->getAllFilm();
            echo $films;
?>