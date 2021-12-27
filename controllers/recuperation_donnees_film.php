<?php
    require '../models/FilmRepository.php';
    require '../models/connectDB.php';
    if (isset($_GET['id'])){
        $id=$_GET['id'];
        $save = new FilmRepository(connectDB());
        $result=$save->get($id);

    }
    echo "<input type='hidden' name='id_form' value = '$id'>";


?>