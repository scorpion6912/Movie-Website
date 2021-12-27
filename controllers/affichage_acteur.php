<?php 
            require '../models/connectDB.php';
            require '../models/ActeurRepository.php';
            
            $save = new ActeurRepository(connectDB());
            $acteur=$save->getAllActeur();
            echo $acteur;
?>