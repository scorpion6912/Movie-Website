<?php
    require '../controllers/session.php';
    
    if(isAdmin()){
        require 'admin_page.php';
    }
    else{
        require 'user_page.php';
    }
?>