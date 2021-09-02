<?php
//funções que recebe os valores para serem cadastrados no banco 
$dataAGE = $_POST['nData'];
$QtAlunosAGE = $_POST['nQtAlunos'];
$ModalidadeAGE = $_POST['nModalidade'];
$HorarioAGE = $_POST['nHorario'];
$ProfessorAGE = $_POST['nProfessor'];
//funções de validação
$ValidaAgenda = Veri_Se_Existe_Cada($dataAGE, $ModalidadeAGE, $HorarioAGE);
$ValidaProf = Veri_Se_Existe_Prof($HorarioAGE, $dataAGE, $ProfessorAGE);

if($ValidaAgenda){  

    if($ValidaProf){

        include("conexao.php");

        $sql  = "INSERT INTO cadastrar_agenda (data, qnt_alunos_max, modalidades_id, horarios_de_aulas_id, professores_usuarios_id)" 
        ." VALUES ('$dataAGE' , "
        ." '$QtAlunosAGE' , "
        ." '$ModalidadeAGE' , "
        ." '$HorarioAGE' , "
        ." '$ProfessorAGE' );";

        $result = mysqli_query($conn,$sql);

        mysqli_close($conn);
    
        header("Location: ../cadastroArea.php?Sucesso=Sucesso");
        
    }else{
        
        header("Location: ../cadastroArea.php?Erro1=Erro");
        
    }

}else{

    
    header("Location: ../cadastroArea.php?Erro2=Erro");

}
    


//verifica se já existe um cadastro para a modalidade escolhida no dia e hora.
function Veri_Se_Existe_Cada($VerDara, $VerModal, $VerHora){

    include("conexao.php");

    $sql = "SELECT * FROM cadastrar_agenda WHERE data = '$VerDara' and horarios_de_aulas_id = '$VerHora' and modalidades_id = '$VerModal'; ";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    
        if (mysqli_num_rows($result) > 0) {
            $resValid = false;
        }else{
            $resValid = true;    
        }

    return $resValid;
}

//Verifica se o professor escolhido já foi cadastrado para aquele dia e hora.
function Veri_Se_Existe_Prof($VerHora, $VerDara, $VerProf){

    include("conexao.php");

    $sql = "SELECT * FROM cadastrar_agenda WHERE data = '$VerDara' and horarios_de_aulas_id = '$VerHora' and professores_usuarios_id = '$VerProf'; ";
    
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    
        if (mysqli_num_rows($result) > 0) {
            $resV_Prof = false;
        }else{
            $resV_Prof = true;    
        }

    return $resV_Prof;
}

?>

