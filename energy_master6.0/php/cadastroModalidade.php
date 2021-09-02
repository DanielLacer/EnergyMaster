<?php
    session_start();

    
    $Modalidade = $_POST['nModalidade'];
    $Usuario = $_SESSION["id_usuario"];
    $ValidaQt_Per_Usu = Veri_Se_Permite($Usuario);
    $ValidaQtPermitida = Veri_Qt_Perm($Usuario);
    $Valida_Campo_TP = Valida_Cadastro($Modalidade, $Usuario);

    if($ValidaQt_Per_Usu < $ValidaQtPermitida){
        
        if($Valida_Campo_TP){
            include("conexao.php");

            $sql  = "INSERT INTO usuario_tem_modalidade (usuario_id, modalidades_id)" 
            ." VALUES ('$Usuario' , "
            ." '$Modalidade' );";


            $result = mysqli_query($conn,$sql);

            mysqli_close($conn);

            header("location: ../modalidades.php?Sucesso=Sucesso");

        }else{
            header("Location: ../modalidades.php?Erro1=Erro");
        }
    }else{

        header("Location: ../modalidades.php?Erro2=Erro");
    }
    



    // função para verificar se o usuario já atingiu o limite.
    function Veri_Se_Permite($VerUsu){
        include("conexao.php");

        $sql = "SELECT count(usuario_id) "
        ." FROM usuario_tem_modalidade "
        ." WHERE usuario_id = '$VerUsu';";

        $result = mysqli_query($conn,$sql);

        mysqli_close($conn);
        
        while($Veri_Exist = mysqli_fetch_array($result)){
            $VRP = $Veri_Exist['count(usuario_id)'];
        }
      
        // var_dump($VRP);
        // die();
        return $VRP;
    }

    // Função para verificar o limite do plano do Usuário.
    function Veri_Qt_Perm($VerUsu){
        
        include("conexao.php");

        $sql = "SELECT pl.quantidade_mod "
        ." FROM planos pl "
        ." INNER JOIN usuario us "
        ." ON us.planos_id = pl.id WHERE id_usuario = '$VerUsu'";

        $result = mysqli_query($conn,$sql);

        mysqli_close($conn);
        
        while($Veri_QT = mysqli_fetch_array($result)){
            $VQT = $Veri_QT['quantidade_mod'];
            return $VQT;
        }
      
        // var_dump($VRP);
        // die();
        


    }


    function Valida_Cadastro($Val_Moda, $Val_Usu){

        include("conexao.php");

        $sql = "SELECT * FROM usuario_tem_modalidade WHERE usuario_id = '$Val_Usu' and modalidades_id = '$Val_Moda'; ";

        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        
            if (mysqli_num_rows($result) > 0) {
                $Val_Cada = false;
            }else{
                $Val_Cada = true;    
            }

        return $Val_Cada;

    }
    ?>
