<?php

    $cpf = $_POST['nCPF'];
    //$cpf = mysql_real_escape_string($cpf);
    $nome = $_POST['nNome'];
    $email = $_POST['nEmail'];
    $senha = $_POST['nSenha'];
    $telefone = $_POST['nTele'];
    $cep = $_POST['nCEP'];
    $logradouro = $_POST['nLogra'];
    $number = $_POST['nNumber'];
    $complemento = $_POST['nComple'];
    $status = $_POST['nSta'];
    $unidade = $_POST['nUni'];
    $tipo = $_POST['nTipoUsuario'];

    include("conexao.php");
    include("valida.php");

    if(validaCPF($cpf) == false){
      header("location: ../cadastroArea.php");

    }elseif(validaTelefone($telefone) == false){
      header("location: ../cadastroArea.php");

    }elseif(validaNome($nome) == false){
      header("location: ../cadastroArea.php");

    }elseif(validaEmail($email) == false){
      header("location: ../cadastroArea.php");

    }
    

    $sql  = "INSERT INTO usuario (cpf, nome, email, senha, telefone, cep, logradouro, numero, complemento, status, empresa_id, idtipousuario_id, planos_id)" 
    ." VALUES ('$cpf' ,"
    ." '$nome' , "
    ." '$email' , "
    ." '$senha' , "
    ." '$telefone' , "
    ." '$cep' , "
    ." '$logradouro' , "
    ." '$number' , "
    ." '$complemento' , "
    ." '$status' , "
    ." '$unidade' , "
    ." '$tipo' , "
    ." '1' );";

    
    if (mysqli_query($conn, $sql)) {
        header("location: ../usuarioperfil.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

?>