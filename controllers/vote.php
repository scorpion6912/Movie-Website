<?php

    require '../models/connectDB.php';

    if(isset($_GET['id2'])){
        include '../controllers/Film.php';
        include '../models/FilmRepository.php';
        $id = $_GET['id2'];
        $score = $_GET['score'];
        $save = new FilmRepository(connectDB());
        $save->Voter($score, $id);
    }
    
?>