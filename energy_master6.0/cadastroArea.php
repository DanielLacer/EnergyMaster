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

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/stylecadastro.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  
  <?php echo ThisMenu() ?>

  <div class="Form-Login">
    <h1>Cadastro</h1>
    <section class="cadas">
      <div class="bloco1">
        <form method="POST" action="php/cadastro.php">

              <label for="iCPF">CPF:</label>
              <input type="text" id="iCPF" name="nCPF" maxlength="11" autofocus placeholder="Digite seu cpf">


              <label for="iNome">Nome:</label>
              <input type="text" id="iNome" name="nNome" maxlength="255" placeholder="Digite seu nome">


              <label for="iEmail">E-mail:</label>
              <input type="email" id="iEmail" name="nEmail" maxlength="100" required placeholder="Digite um e-mail ">


              <label for="iSenha">Senha:</label>
              <input type="password" id="iSenha" name="nSenha" maxlength="32" placeholder="Digite uma senha">


              <label for="iTele">Telefone:</label>
              <input type="text" id="iTele" name="nTele" maxlength="14" placeholder="Digite seu telefone ">


              <label for="iCEP">CEP:</label>
              <input type="text" id="iCEP" name="nCEP" maxlength="8" placeholder="Digite seu cep">


              <label for="ilogra">Logradouro:</label>
              <input type="text" id="iLogra" name="nLogra" maxlength="130" placeholder="Logradouro">


              <label for="iNumber">Numero:</label>
              <input type="text" id="iNumber" name="nNumber" maxlength="11" placeholder="Numero da casa ">


              <label for="iComple">Complemento: </label>
              <input type="text" id="iComple" name="nComple" maxlength="255" placeholder="Complemento">


              <label for="iSta">Status:</label>
              <input type="text" id="iSta" name="nSta" maxlength="7" placeholder="Status">

                <label for="iUni">Unidade:</label>
                <select name="nUni" required>
                  <option value="">Selecione...</option>
                  <option value="1">Unidade Matriz</option>
                </select>

                <label for="iNome">Tipo:</label>
                <select name="nTipoUsuario" required>
                  <option value="">Selecione...</option>
                  <option value="1">Aluno</option>
                  <option value="2">Professor</option>
                  <option value="3">Recpcionista</option>
                  <option value="4">Gerente</option>
                </select>

                <div class="sen">
                  <input type="submit" value="Enviar" style="position: relative; outline:none; background: transparent; border-color: #f8bc1a; border-style: solid; border-width: 3px; border-radius: 0px; color: white;">
                </div>  

          </form>
      </div>
    </section>
  </div>

  <div align="center" style="padding-top:100px">
    <section class="mod">
      <form style="padding:20px;" method="POST" action="php/cadastroAgenda.php" >
                      
          <label for="iModalidade">Modalidade</label>
              <select name="nModalidade" required>
                  <option value="">Selecione sua modalidade...</option>
                  <option value="1">Zumba</option>
                  <option value="2">Jiu-Jitsu</option>
                  <option value="3">Crossfit</option>
                  <option value="4">Boxe</option>
                  <option value="5">Musculação</option>
                  <option value="6">Natação</option>
              </select>

                      <br>

                  <label for="iData">Escolha a data</label>
                  <input type="date" id="iData" name="nData">

                      <br>

                      <label for="iHorario">Horário da aula</label>
                      <select id="iHorario" name="nHorario"  required>
                          <option value="">Selecione o horário...</option>
                          <option value="aulaA">6:00 h as 6:45 h</option>
                          <option value="aulaB">7:00 h as 7:45 h</option>
                          <option value="aulaC">8:00 h as 8:45 h</option>
                          <option value="aulaD">9:00 h as 9:45 h</option>
                          <option value="aulaE">10:00 h as 10:45 h</option>
                          <option value="aulaF">11:00 h as 11:45 h</option>
                          <option value="aulaG">12:00 h as 12:45 h</option>
                          <option value="aulaH">13:00 h as 13:45 h</option>
                          <option value="aulaI">14:00 h as 14:45 h</option>
                          <option value="aulaJ">15:00 h as 15:45 h</option>
                          <option value="aulaK">16:00 h as 16:45 h</option>
                          <option value="aulaL">17:00 h as 17:45 h</option>
                          <option value="aulaM">18:00 h as 18:45 h</option>
                        <option value="aulaN">19:00 h as 19:45 h</option>
                      </select>

                      <br>

                    <label for="iProfessor">Professor(a)</label>
                    <select name="nProfessor" required>
                      <option value=''> Escolha o professor(a)... </option>
                      <?php 

                          include('php/conexao.php');
          
                          $sql = "SELECT * "
                          ." FROM usuario u "
                          ." INNER JOIN idtipousuario itu "
                          ." ON u.idtipousuario_id = itu.id "
                          ." where idtipousuario_id = '2' and status = 'ativo'; ";
          
                          $result = mysqli_query($conn,$sql);
                          
                          mysqli_close($conn);
                          while($infoResult = mysqli_fetch_array($result)){
                            $idProf = $infoResult['id_usuario'] ;
                            $nomeProf = $infoResult['nome'];
          
                            echo"<option value='$idProf'> $nomeProf </option>";

                          }
                       ?>
                    </select>

                      <br>

                  <label for="iQtAlunos">Informe a quantidade de alunos </label>
                  <input type="number" id="iQtAlunos" name="nQtAlunos" max="50" min="1">

                    <br>

                  <div class="sen">    
                    <input type="submit" value="Agendar" style="position: relative; outline:none; background: transparent; border-color: #f8bc1a; border-style: solid; border-width: 3px; border-radius: 0px; color: white;">
                  </div>

                  <br><br>

                  <?php

                    if(isset($_GET["Sucesso"])){
                      
                      echo "<div class='alert alert-success' role='alert'> Cadastro efetuado com sucesso !!! <a href='cadastroArea.php'> OK</a></div>";
                      
                      }else if(isset($_GET["Erro1"])){
                        
                        echo "<div class='alert alert-danger' role='alert'> Professor já cadastrado neste horário!!! <a href='cadastroArea.php'> OK</a></div>";
                        
                        }else if(isset($_GET["Erro2"])){
                          
                          echo "<div class='alert alert-danger' role='alert'> Cadastro já efetuado!!! <a href='cadastroArea.php'> OK</a></div>";
                        
                        }

                  ?>

      </form>
    </section>
  </div>


<!-- footer-->
  <br><br><br><br><br>  
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