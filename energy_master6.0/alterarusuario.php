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
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  
  <?php echo ThisMenu() ?>

  <div class="Form-Login">
    <h1>Alterar</h1>

            <form method="POST" action="php/alterarconfirm.php?funcao=U">
                
                    <label for="iCPF">CPF</label>
                    <input type="text" id="iCPF" name="nCPF" value="<?php echo funcaoCPF($_GET['cpf']); ?>" maxlength="11" autofocus placeholder="Digite seu cpf">
        
               
                    <label for="iNome">Nome</label>
                    <input type="text" id="iNome" name="nNome" value="<?php echo funcaoNome($_GET['cpf']); ?>" maxlength="255" placeholder="Digite seu nome">
                
                
                    <label for="iEmail">Email</label>
                    <input type="email" id="iEmail" name="nEmail" value="<?php echo funcaoEmail($_GET['cpf']); ?>"  maxlength="100" required placeholder="Digite um email valido">
                
                
                    <label for="iSenha">Senha</label>
                    <input type="password" id="iSenha" name="nSenha" value="<?php echo funcaoSenha($_GET['cpf']); ?>" maxlength="32" placeholder="Digite uma senha">
            
                
                    <label for="iTele">Telefone</label>
                    <input type="text" id="iTele" name="nTele" value="<?php echo funcaoTele($_GET['cpf']); ?>" maxlength="14" placeholder="Digite seu numero de telefone" >
                
                
                    <label for="iCEP">CEP</label>
                    <input type="text" id="iCEP" name="nCEP" value="<?php echo funcaoCEP($_GET['cpf']); ?>" maxlength="8" placeholder="Digite seu cep">
                
                
                    <label for="ilogra">Logradouro</label>
                    <input type="text" id="iLogra" name="nLogra" value="<?php echo funcaoLogra($_GET['cpf']); ?>" maxlength="130" placeholder="Logradouro">
                
                
                    <label for="iNumber">Numero</label>
                    <input type="text" id="iNumber" name="nNumber" value="<?php echo funcaoNumero($_GET['cpf']); ?>" maxlength="11" placeholder="Digite seu numero da casa ou apartamento ">
                
    
                    <label for="iComple">Complemento</label>
                    <input type="text" id="iComple" name="nComple" value="<?php echo funcaoComple($_GET['cpf']); ?>" maxlength="255" placeholder="Complemento">

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