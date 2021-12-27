<?php
function connectDB() {
    $host = '';
    $user = '';
    $db = '';
    $pwd = ''; // here you must place the connect information of your DB
    try {
        $bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user,$pwd);
        return $bdd;
    }catch (Exception $e) {
        exit('Erreur : '.$e->getMessage());
    }
} //connect function

?>