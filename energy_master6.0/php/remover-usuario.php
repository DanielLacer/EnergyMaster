<?php

    session_start();

    $delete = $_GET['cpf']; 

    include("conexao.php");
   
    $sql  = "UPDATE usuario SET status = 'inativo' WHERE cpf = '$delete' ;";


    // var_dump($sql);
    // die();

    mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location: ../usuarioperfil.php");

?>