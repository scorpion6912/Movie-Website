<?php 
            require '../models/connectDB.php';
            require '../models/CastingRepository.php';
            
            $save = new CastingRepository(connectDB());
            $casting=$save->getAllCasting();
            echo $casting;
?>