<?php
        
        if(isset($_GET['id_film']) && isset($_GET['id_acteur'])){
            
            $save = new CastingRepository(connectDB());
            $id_film=$_GET['id_film'];
            $id_acteur=$_GET['id_acteur'];
            $casting = new Casting($id_film, $id_acteur);
            
            $result=$save->addCasting($casting);
            echo '<meta http-equiv="Refresh" content="0;URL=castingView.php">';

        }
        
        if(isset($_GET['id'])){
            
            $id=$_GET['id'];
            $save = new CastingRepository(connectDB());
            $save->delete($id);
            echo '<meta http-equiv="Refresh" content="0;URL=castingView.php">';

        }
?>