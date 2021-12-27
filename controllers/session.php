<?php
session_start();
require '../models/connectDB.php';
require '../models/UserRepository.php';

function isAdmin(){
    $u = new UserRepository(connectDB());
    if ($u->getUser($_SESSION['user'])->getRank() == 2)
        return true;
    else
        return false;
}
?>