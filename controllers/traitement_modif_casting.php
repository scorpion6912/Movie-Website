<?php

    if(isset($_POST['id_film'])  && isset($_POST['id_form']) && isset($_POST['id_acteur'])){
            
        $id=$_POST['id_form'];
        $id_film=$_POST['id_film'];
        $id_acteur=$_POST['id_acteur'];
        $save = new CastingRepository(connectDB());
        $casting = new Casting($id_film, $id_acteur);
        $save->updateCasting($casting, $id);
        echo '<meta http-equiv="Refresh" content="0;URL=castingView.php">';
    
    }
?>