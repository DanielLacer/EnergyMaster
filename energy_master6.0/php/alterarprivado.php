<?php

session_start();

    $empresa = $_POST['nEmid'];
    $idtipo = $_POST['nTipoid'];
    $plaid = $_POST['nPlaid'];
    $cpfV = $_SESSION['Vcpf'];
    $status = $_POST['nStatus'];

    include("conexao.php");

        $sql = "UPDATE usuario SET empresa_id = '".$empresa."', idtipousuario_id = '".$idtipo."', planos_id = '".$plaid."', status = '$status' WHERE cpf = '".$cpfV."';";

    $result = mysqli_query($conn,$sql);

    mysqli_close($conn);

    header("location: ../usuarioperfil.php");

?>