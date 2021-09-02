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
  <link href="css/stylecontrol.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  
<?php echo ThisMenu() ?>

    <?php

    $idtipo = $_GET['tipo']; 

    include("php/conexao.php");

    if($idtipo == 4){
        $sql  = "SELECT * FROM usuario;";
    }else if($idtipo == 3){
        $sql  = "SELECT * FROM usuario WHERE idtipousuario_id <> 4 and status = 'ativo';";
    }

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    echo "<section class='tab'>";  
    echo "<table border='1' class='tablecontrol' >";
    echo "<tr>";
    echo "<th>CPF</th>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "<th>Telefone</th>";
    echo "<th>CEP</th>";
    echo "<th>Logradouro</th>";
    echo "<th>Numero</th>";
    echo "<th>Complemento</th>";
    echo "<th>empresaId</th>";
    echo "<th>idtipousuário</th>";
    echo "<th>planosId</th>";
    echo "<th>Remover</th>";
    echo "<th>Alterar</th>";
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
        echo "<td align='center'>".$coluna["telefone"]."</td>";
        echo "<td align='center'>".$coluna["cep"]."</td>";
        echo "<td align='center'>".$coluna["logradouro"]."</td>";
        echo "<td align='center'>".$coluna["numero"]."</td>";
        echo "<td align='center'>".$coluna["complemento"]."</td>";
        echo "<td align='center'>".$coluna["empresa_id"]."</td>";
        echo "<td align='center'>".$coluna["idtipousuario_id"]."</td>";
        echo "<td align='center'>".$coluna["planos_id"]."</td>";
        echo "<td><a href='php/remover-usuario.php?cpf=".$coluna["cpf"]."'>Remover</a></td>";
        echo "<td align='center'><a href='alterarprivado.php?cpf=".$coluna["cpf"]."'>Alterar</a></td>";
        echo "</tr>";

        }

    }

    echo "</table>";
    echo  "</section>";

    ?>

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