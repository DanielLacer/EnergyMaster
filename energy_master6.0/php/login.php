<?php

    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }

    $cpf = $_POST['nCPF'];
    $senha = $_POST['nSenha'];

    include("conexao.php");

    $sql  = "SELECT * FROM usuario WHERE senha= '$senha' AND cpf = '$cpf' and status = 'ativo';";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0){

        $arrayLogin = array();
        
        while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($arrayLogin,$linha);
        }
        
        foreach ($arrayLogin as $coluna) {

            $_SESSION["id_usuario"] = $coluna["id_usuario"];
            $_SESSION["idtipousuario_id"] = $coluna["idtipousuario_id"];
            $_SESSION['logado'] = 1;

            header("location: ../usuarioperfil.php");

        }
        
    }else{

        header("location: ../loginArea.php?Erro=erro");

    }

   
    
    

?>