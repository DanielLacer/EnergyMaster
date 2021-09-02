<?php
    session_start();

    include("funcoes.php");
?>

<?php
//funções que recebe os valores para serem cadastrados no banco 
$id_Alu = $_SESSION["id_usuario"];
$Modalidade_Alu = $_POST['nModalidade_Alu'];
$Data_Alu = $_POST['nData_Alu'];
$Horario_Alu = $_POST['nHorario_Alu'];
$EncontraID = SelectID($Modalidade_Alu, $Data_Alu, $Horario_Alu,);
//funções de validação
$ValAgeAlu = ValAgeAlu($Modalidade_Alu, $Data_Alu, $Horario_Alu, $id_Alu);
$ValSeTCPA = ValSeTCPA($Data_Alu, $Horario_Alu, $id_Alu);
$ValHoraAlu = ValHoraAlu($Data_Alu, $Horario_Alu, $id_Alu, $Modalidade_Alu);
$ValQtAlu = ValQtAlu($Modalidade_Alu, $Data_Alu, $Horario_Alu);
$ValQtAul = ValQtAul($Modalidade_Alu, $Data_Alu, $Horario_Alu);


include("conexao.php");

    if($ValAgeAlu){

        if($ValSeTCPA){

            if($ValHoraAlu){

                if($EncontraID != 1){

                    if($ValQtAlu > $ValQtAul){

                        $sql  = "INSERT INTO agendamento_aula (modalidade, data, aluno_usuarios_id, horarios_de_aula_id, veri_cadastrar_agenda)" 
                        ." VALUES ('$Modalidade_Alu' , "
                        ." '$Data_Alu' , "
                        ." '$id_Alu' , "
                        ." '$Horario_Alu' , "
                        ." '$EncontraID' );";

                        // var_dump($sql);
                        // die;

                        $result = mysqli_query($conn,$sql);

                        mysqli_close($conn);

                        header("Location: ../usuarioperfil.php?Sucesso=Sucesso");

                    }else{

                        header("Location: ../usuarioperfil.php?Erro1=Erro");

                    } 

                }else{

                    header("Location: ../usuarioperfil.php?Erro2=Erro");
                    
                }

            }else{

                
                header("Location: ../usuarioperfil.php?Erro3=Erro");

            }

        }else{

            header("Location: ../usuarioperfil.php?Erro4=Erro");

        }

    }else{

        header("Location: ../usuarioperfil.php?Erro5=Erro");

    }

        
    
        // Função para buscar o código da aula cadastrada.
        function SelectID ($modali, $data, $Hora){
                
            include("conexao.php");

            $sql = "SELECT id FROM cadastrar_agenda WHERE modalidades_id = '$modali' and data = '$data' and horarios_de_aulas_id = '$Hora'; ";

        
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if (mysqli_num_rows($result) > 0) {
                    
                $array = array();
                
                while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    array_push($array,$linha);
                }
                
                foreach ($array as $coluna) {            
                    //***Verificar os dados da consulta SQL
                    $TemCodigo = $coluna["id"];
                }        
            
                return $TemCodigo;
            }else{
                $TemCodigo = 1;
                return $TemCodigo ;
            
            }
        }


        // função verifi se tem cadastro
        function ValAgeAlu($VerMoAlu, $VerDat, $VerHora, $VerId){

            include("conexao.php");
        
            $sql = "SELECT * FROM agendamento_aula WHERE modalidade = '$VerMoAlu' and  data = '$VerDat' and horarios_de_aula_id = '$VerHora' and aluno_usuarios_id = $VerId; ";
        
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            // var_dump($sql);
            // die();
            
                if (mysqli_num_rows($result) > 0) {
                    $RValAgeAlu = false;
                }else{
                    $RValAgeAlu = true;    
                }
        
            return $RValAgeAlu;
        }


       
        //Função verifica se o aluno já está cadastrado para alguma aula naquele horário
        function ValSeTCPA($VerDat, $VerHora, $VerId){

            include("conexao.php");
        
            $sql = "SELECT * FROM agendamento_aula WHERE  data = '$VerDat' and horarios_de_aula_id = '$VerHora' and aluno_usuarios_id = $VerId; ";
        
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            
            
                if (mysqli_num_rows($result) > 0) {
                    $RSeExistCadAlu = false;
                }else{
                    $RSeExistCadAlu = true;    
                }

                // var_dump($sql);
                // die();

            return $RSeExistCadAlu;


        }

         // função verifica se usuario já tem cadastro na data, horário e modalidade
        function ValHoraAlu($VerDat, $VerHora, $VerId,$modal){

            include("conexao.php");
        
            $sql = "SELECT * FROM agendamento_aula WHERE data = '$VerDat' and horarios_de_aula_id = '$VerHora' and aluno_usuarios_id = $VerId and modalidade = $modal; ";
        
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            // var_dump($sql);
            // die();
            
                if (mysqli_num_rows($result) > 0) {
                    $RValHoraAlu = false;
                }else{
                    $RValHoraAlu = true;    
                }
        
            return $RValHoraAlu;
        }

        //Função para validar se existe vaga para agendar aula
        function ValQtAlu($modali, $data, $Hora){
                
            include("conexao.php");

            $sql = "SELECT count(id) FROM agendamento_aula WHERE modalidade = '$modali' and horarios_de_aula_id = '$Hora' and data = '$data'; ";

           
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            while($cont = mysqli_fetch_array($result)) {
                $RValQtAlu = $cont['count(id)'];
            }
            

            // var_dump($RValQtAlu);
            // die();
            

            return $RValQtAlu;

           

        }

        //Função para buscar quantidade de alunos disponível para aula escolhida
        function ValQtAul($modali, $data, $Hora){
                
            include("conexao.php");

            $sql = "SELECT ca.qnt_alunos_max "
            ." FROM cadastrar_agenda ca "
            ." inner join agendamento_aula aa "
            ." on ca.id = aa.veri_cadastrar_agenda "
            ." where modalidade = '$modali' and aa.data = '$data' and horarios_de_aula_id = '$Hora'; ";

            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            while($cont = mysqli_fetch_array($result)) {
                $RValQtAul = $cont['qnt_alunos_max'];
                return $RValQtAul;

                // var_dump($RValQtAul);
                // die();
            }
          
           
                  
        }

?>