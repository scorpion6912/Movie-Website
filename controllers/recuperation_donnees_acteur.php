<?php
    require '../models/ActeurRepository.php';
    require '../models/connectDB.php';
    if (isset($_GET['id'])){
        $id=$_GET['id'];
        $save = new ActeurRepository(connectDB());
        $result=$save->get($id);

    }
    echo "<input type='hidden' name='id_form' value = '$id'>";
            


?>