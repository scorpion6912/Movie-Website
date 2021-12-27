<?php
        include '../controllers/Film.php';
        include '../models/FilmRepository.php';
        $save = new FilmRepository(connectDB());
        $liste=$save->getAllList();
        echo $liste;
?>