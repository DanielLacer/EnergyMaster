<?php 
  
  session_start();
  
  include("php/funcoes.php");

  $_SESSION['Vcpf'] = funcaoCPF($_GET['cpf']);

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
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  
  <?php echo ThisMenu() ?>

  <div class="Form-Login">
    <h1>Alterar Informações Privados</h1>

            <form method="POST" action="php/alterarprivado.php">
                
                    <label for="iEmid">empresa_id</label>
                    <input type="text" id="iEmid" name="nEmid" value="<?php echo funcaoEmid($_GET['cpf']); ?>" maxlength="1" minlength="1" placeholder="Digite seu cpf">
        
               
                    <label for="iTipoid">idtipousuario_id</label>
                    <input type="text" id="iTipoid" name="nTipoid" value="<?php echo funcaoTipoid($_GET['cpf']); ?>" maxlength="1" minlength="1" placeholder="Digite seu nome">
                
                
                    <label for="iPlaid">planos_id</label>
                    <input type="text" id="iPlaid" name="nPlaid" value="<?php echo funcaoPlaid($_GET['cpf']); ?>"  maxlength="1" placeholder="Digite um email valido"> 
                    
                    <label for="iStatus">status</label>
                    <input type="text" id="iStatus" name="nStatus" value="<?php echo funcaoStatus($_GET['cpf']); ?>"  maxlength="7" placeholder="Digite um email valido">

                    <button type="submit">Alterar</button>

            </form>

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