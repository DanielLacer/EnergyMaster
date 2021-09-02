<?php
    session_start();

    include("php/funcoes.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Energym</title>

    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
      
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
      rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />
    <link href="css/styleperfil.css" rel="stylesheet" />

    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">
  <?php echo ThisMenu(); ?> 
  
	<?php
      
      $id = $_SESSION["id_usuario"];
      
    ?>		
  
    <section>

      <img src="<?php  echo "./imagem_perfil/"."$id.png"?>" style="border-radius: 50%; position: relative; left: 300px; top: 50px;" width="100" height="100">
      
      <form name="enviarImagem" action="enviar.php" method="POST" enctype="multipart/form-data">
          <input type="file" id="iFoto" name="img" accept="image/*" style='position: relative; outline:none; top: 100px; background:#3c0e78; border-color: #3c0e78; border-style: solid; border-width: 3px; color: white; right: -160px;'>
          <input type="submit" value="Confirmar Foto" name="enviar" style='position: relative; outline:none; top: 100px; background: #f8bc1a; border-color: #f8bc1a; border-style: solid; border-width: 5px; font-weight: bolder;color: #3c0e78; right: -180px;'>
      </form>
    </section> 

  <?php

    $id = $_SESSION["id_usuario"];

    include("php/conexao.php");

    $sql  = "SELECT cpf, nome, email, senha, telefone, cep, logradouro, numero, complemento, idtipousuario_id FROM usuario WHERE id_usuario=".$id.";";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);


    echo "<section class='usa'>";
    echo "<table border='1' style='position: relative; top: 100px; right: -120px;' >";
    echo "<tr>";
    echo "<th>CPF</th>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "<th>Senha</th>";
    echo "<th>Telefone</th>";
    echo "<th>CEP</th>";
    echo "<th>Logradouro</th>";
    echo "<th>Numero</th>";
    echo "<th>Complemento</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    if (mysqli_num_rows($result) > 0) {

        $arrayLogin = array();
        
        while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($arrayLogin,$linha);
        }
        
        foreach ($arrayLogin as $coluna) {

          echo "<tr>";
          echo "<td align='center'>".$coluna["cpf"]."</td>";
          echo "<td align='center'>".$coluna["nome"]."</td>";
          echo "<td align='center'>".$coluna["email"]."</td>";
          echo "<td align='center'>".$coluna["senha"]."</td>";
          echo "<td align='center'>".$coluna["telefone"]."</td>";
          echo "<td align='center'>".$coluna["cep"]."</td>";
          echo "<td align='center'>".$coluna["logradouro"]."</td>";
          echo "<td align='center'>".$coluna["numero"]."</td>";
          echo "<td align='center'>".$coluna["complemento"]."</td>";
          echo "<td align='center'><a href='alterarusuario.php?cpf=".$coluna["cpf"]."'>Alterar</a></td>";
          echo "</tr>";

          $idtipo = $coluna["idtipousuario_id"];

        }

    }

    echo "</table>";
    echo "</section>";

      if($_SESSION["idtipousuario_id"] > 2){
        echo "'<a href='controlusuario.php?tipo=".$idtipo."' style='font-size:20px;' ><button type='submit' style='position: relative; outline:none; background: transparent; border-color: #f8bc1a; border-style: solid; border-width: 3px; top: -200px; color: white; right: -450px;'>Usuarios ativos</button></a>";
      }
      if($_SESSION["idtipousuario_id"] > 2){
        echo "'<a href='ControleDeInativos.php?tipo=".$idtipo."' style='font-size:20px;' ><button type='submit' style='position: relative; outline:none; background: transparent; border-color: #f8bc1a; border-style: solid; border-width: 3px; top: -200px; color: white; right: -500px;'>Usuários Inativos</button></a>";
      }

        echo "'<a href='php/logoff.php' style='font-size:20px;' ><button type='submit' style='position: relative; outline:none; background: transparent; border-color: #f8bc1a; border-style: solid; border-width: 3px; top: -200px; color: white; right: -550px;'>Logoff</button></a>";

  ?>
    <div align="center">
      <section class="conf">
        <form style="padding:20px;" method="POST" action="php/AlunoAgenda.php">
        <br><br>
              <label for="iModalidade" style="color: purple;" >Modalidade</label>
              <select name="nModalidade_Alu" id="iModalidade" required>
                <option value=''> Escolha a modalidade... </option>
                <?php
                  include('php/conexao.php');
                  $usuId = $_SESSION["id_usuario"];

                  $sql = "SELECT * "
                  ." FROM modalidades n "
                  ." INNER JOIN usuario_tem_modalidade utm " 
                  ." ON n.id = utm.modalidades_id "
                  ." WHERE usuario_id = $usuId";

                  $result = mysqli_query($conn,$sql);
                  
                  mysqli_close($conn);
                  while($infoResult = mysqli_fetch_array($result)){
                    $id = $infoResult['id'] ;
                    $nomeMOda = $infoResult['nome'];

                    echo"<option value='$id'> $nomeMOda </option>";
                  }
                      
                    
                ?>
              </select>

              <label for="iData" style="color: #3c0e78;">Escolha a data</label>
              <input type="date" id="iData" name="nData_Alu">

              <label for="iHorario" style="color: #3c0e78;" >Horário da aula</label>
              <select id="iHorario" name="nHorario_Alu"  required>
              <?php
                  include('php/conexao.php');

                  $sql = "SELECT DISTINCT horarios, codigo FROM cadastrar_agenda ca inner join horarios_de_aulas hda on hda.codigo = ca.horarios_de_aulas_id ";

                  $result = mysqli_query($conn,$sql);
                  
                  mysqli_close($conn);
                  while($infoResult = mysqli_fetch_array($result)){
                    $idAula = $infoResult['codigo'] ;
                    $HoraAula = $infoResult['horarios'];

                    echo"<option value='$idAula'> $HoraAula </option>";
                  }
                      
                ?>
              </select>
              <br><br>
              
              <input type="submit" value="Agendar" style="position: relative; outline:none; background: #3c0e78; border-color: #3c0e78; border-style: solid; border-width: 3px; border-radius: 0px; color: white;">

              <?php

                  if(isset($_GET["Sucesso"])){

                    echo "<div class='alert alert-success' role='alert'> Aula agendada com sucesso!!! <a href='usuarioperfil.php'> OK</a></div>";
                  
                  }else if(isset($_GET["Erro1"])){
                    
                      echo "<div class='alert alert-danger' role='alert'> Limite de cadastro para essa aula atingido!!! <a href='usuarioperfil.php'> OK</a></div>";
                    
                    }else if(isset($_GET["Erro2"])){
                    
                        echo "<div class='alert alert-danger' role='alert'> Não existe aula agendada para essa modalidade!!! <a href='usuarioperfil.php'> OK</a></div>";
                    
                      }else if(isset($_GET["Erro3"])){
                        
                          echo "<div class='alert alert-danger' role='alert'> Cadastro já efetuado neste horario!!! <a href='usuarioperfil.php'> OK</a></div>";
                        
                        }else if(isset($_GET["Erro4"])){
                          
                            echo "<div class='alert alert-danger' role='alert'> Usuário já cadastrado neste horario!!! <a href='usuarioperfil.php'> OK</a></div>";
                          
                          }else if(isset($_GET["Erro5"])){
                            
                              echo "<div class='alert alert-danger' role='alert'> Cadastro já efetuado anteriormente!!! <a href='usuarioperfil.php'> OK</a></div>";
                            
                            }
              ?>
        </form> 
      </section>
    </div>

    

    <?php

        $id = $_SESSION["id_usuario"];

        include("php/conexao.php");
          
        if($_SESSION["idtipousuario_id"] == 2 || $_SESSION["idtipousuario_id"] == 3 || $_SESSION["idtipousuario_id"] == 4) {
          $sql = "SELECT usu.idtipousuario_id, moda.nome, agen.data, hor.horarios FROM agendamento_aula agen INNER JOIN modalidades moda ON moda.id = agen.modalidade INNER JOIN horarios_de_aulas hor ON hor.codigo = agen.horarios_de_aula_id INNER JOIN usuario usu ON agen.aluno_usuarios_id = usu.id_usuario;";
        }else{
          $sql = "SELECT usu.idtipousuario_id, moda.nome, agen.data, hor.horarios FROM agendamento_aula agen INNER JOIN modalidades moda ON moda.id = agen.modalidade INNER JOIN horarios_de_aulas hor ON hor.codigo = agen.horarios_de_aula_id INNER JOIN usuario usu ON agen.aluno_usuarios_id = usu.id_usuario WHERE aluno_usuarios_id=".$id." AND idtipousuario_id=1;";
        }
            
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if(mysqli_num_rows($result) > 0){ 

          echo "<h1>Seus agendamentos</h1>";
          echo "<section class='tab'>";
          echo "<table border='1' style='position: relative; top: -220px;  margin: 0px auto;'>";
          echo "<tr>";
          echo "<th>Modalidade</th>";
          echo "<th>Data</th>";
          echo "<th>Horarios das Aulas</th>";
          echo "</tr>";

          $arrayLogin = array();
              
          while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              array_push($arrayLogin,$linha);
          }
              
          foreach ($arrayLogin as $coluna) {

            echo "<tr>";
            echo "<td align='center'>".$coluna["nome"]."</td>";
            echo "<td align='center'>".$coluna["data"]."</td>";
            echo "<td align='center'>".$coluna["horarios"]."</td>";
            echo "</tr>";

            $idtipo = $coluna["idtipousuario_id"];
                
          }

          echo "</table>";
          echo "</section>";

        }else{

            echo "<h1>Você não possui agendamentos</h1>";
        }
    ?>

  <!-- footer-->
    <?php echo ThisFooter()?>
  <!-- footer -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>


  