<?php 
  
  session_start();
  
  include("php/funcoes.php");


?>

<!DOCTYPE html>
<html>

<head lang="pt-br">
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
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <?php echo ThisMenu() ?>  
  
  <?php  if($_SESSION['logado'] > 0){ ?>
    <div align="center">

      <BR>
      
        <h3>Adicionar Modalidade</h3>
      
      <BR>

      <form method="POST" action="php/cadastroModalidade.php">

          <label for="iModalidade">Modalidade</label>
          <select name="nModalidade" required>

            <option value="">Escolha uma modalidade...</option>
            <option value="1">Zumba</option>
            <option value="2">Jiu-Jitsu</option>
            <option value="3">Crossfit</option>
            <option value="4">Boxe</option>
            <option value="5">Musculação</option>
            <option value="6">Natação</option>

          </select>
          
          
          <input type="submit" value="cadastrar">

          <br><br>

          <?php

            if(isset($_GET["Sucesso"])){
              
              echo "<div class='alert alert-success' role='alert'> Cadastro efetuado com sucesso !!! <a href='modalidades.php'> OK</a></div>";
              
              }else if(isset($_GET["Erro1"])){
                
                echo "<div class='alert alert-danger' role='alert'> Cadastro já efetuado !!! <a href='modalidades.php'> OK</a></div>";
                
                }else if(isset($_GET["Erro2"])){
                  
                  echo "<div class='alert alert-danger' role='alert'> Limite de inscrições do seu plano atingida !!! <a href='modalidades.php'> OK</a></div>";
                
                }

          ?>

      </form>

    </div> 

  <?php } ?>              
  
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Nossas Modalidades
        </h2>
      </div>
      <div class="service_container">
        <div class="box">
          <img src="images/boxing.jpg" alt="">
          <h6 class="visible_heading">
            Boxe
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Boxe
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/Jiu.jpg" alt="">
          <h6 class="visible_heading">
            Jiu-Jitsu
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Jiu-Jitsu
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/na.jpg" alt="">
          <h6 class="visible_heading">
            Natação
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Natação
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/cro.jpg" alt="">
          <h6 class="visible_heading">
            Crossfit
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Crossfit
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/zum.jpg" alt="">
          <h6 class="visible_heading">
            Zumba
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Zumba
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/mus.jpg" alt="">
          <h6 class="visible_heading">
            Musculação
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Musculação
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

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