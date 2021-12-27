<?php 
    foreach ($q2 -> fetchAll() as $data2){
        echo $data2['nom_act']." ".$data2['prenom_act'].", ";    
    }
?>