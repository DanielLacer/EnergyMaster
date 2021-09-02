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
  <link href="css/stylelogin.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  
<?php echo ThisMenu() ?>

    <div class="Login">
    <h1>Login</h1>
      <section class="log">
            <form method="POST" action="php/login.php" action="usuarioperfil.php">

                <label for="iCPF">CPF</label>
                <input type="text" id="iCPF" name="nCPF" maxlength="11" autofocus placeholder="Digite seu cpf">
            
                <label for="iSenha">Senha</label>
                <input type="password" id="iSenha" name="nSenha" maxlength="32" placeholder="Digite uma senha">

                <div class="env">
                <input type="submit" value="Entrar" style="position: relative; outline:none; background: transparent; border-color: #f8bc1a; border-style: solid; border-width: 3px; border-radius: 0px; color: white;">
                </div>

                <?php
                
                if(isset($_GET["Erro"])){
                  
                    echo"<div class='alert alert-danger' role='alert'> Cpf ou Senha invalida <a href='loginArea.php'> Tentar novamente </a></div>";
                
                }

                ?>

            </form>
      </section>
    </div>

  <!-- footer-->
  <br><br>
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