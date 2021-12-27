<?php

    if(isset($_POST['nom'])  && isset($_POST['id_form']) && isset($_POST['prenom'])){
            
        $id=$_POST['id_form'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $save = new ActeurRepository(connectDB());
        $acteur = new Acteur($nom, $prenom);
        $save->updateActeur($acteur, $id);
        echo '<meta http-equiv="Refresh" content="0;URL=acteurView.php">';
    
    }
?>