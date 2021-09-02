<?php

    if(!isset($_SESSION)){
        session_start();
    }
    
    $_SESSION['logado'] = 0;

    header("location: ../loginArea.php");

   
?>