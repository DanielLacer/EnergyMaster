<?php

session_start();

    $cpf = $_POST['nCPF'];
    $nome = $_POST['nNome'];
    $email = $_POST['nEmail'];
    $senha = $_POST['nSenha'];
    $telefone = $_POST['nTele'];
    $cep = $_POST['nCEP'];
    $logradouro = $_POST['nLogra'];
    $number = $_POST['nNumber'];
    $complemento = $_POST['nComple'];
    $empresa = $_POST['nEmid'];
    $idtipou = $_POST['nTipoid'];
    $plaid = $_POST['nPlaid'];
    $funcao = $_GET['funcao'];
    $cpfV = $_SESSION['Vcpf'];

    include("conexao.php");

    if($funcao == 'U'){
        $sql = "UPDATE usuario SET cpf = '".$cpf."', nome = '".$nome."', email = '".$email."', senha = '".$senha."',  telefone = '".$telefone."',  cep = '".$cep."',  logradouro = '".$logradouro."', numero = '".$number."', complemento = '".$complemento."' WHERE cpf= '".$cpf."';";
    }
    
    $result = mysqli_query($conn,$sql);

    mysqli_close($conn);

    header("location: ../usuarioperfil.php");

?>