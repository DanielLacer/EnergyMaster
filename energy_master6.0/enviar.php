<?php
    session_start();

    include("php/funcoes.php");
?>

<?php

//var_dump($_FILES["img"]);
$name = $_FILES["img"]["name"];
$temp = $_FILES["img"]["tmp_name"];

//var_dump($name);
//var_dump($temp);
//die();
include('php/conexao.php');

$id = $_SESSION["id_usuario"];

$sql = "UPDATE usuario SET nome_imagem = '$id.png' WHERE id_usuario = '$id';";

$result = mysqli_query($conn,$sql);
mysqli_close($conn);

move_uploaded_file($temp, "./imagem_perfil/".$id.'.png');

header("Location:usuarioperfil.php");

?>