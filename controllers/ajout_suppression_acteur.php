<?php
        
        if(isset($_GET['nom']) && isset($_GET['prenom'])){
            
            $save = new ActeurRepository(connectDB());
            $nom=$_GET['nom'];
            $prenom=$_GET['prenom'];
            $acteur = new Acteur($nom, $prenom);
            
            $result=$save->addActeur($acteur);
            echo '<meta http-equiv="Refresh" content="0;URL=acteurView.php">';

        }
        
        if(isset($_GET['id'])){
            
            $id=$_GET['id'];
            $save = new ActeurRepository(connectDB());
            $save->delete($id);
            echo '<meta http-equiv="Refresh" content="0;URL=acteurView.php">';

        }
?>