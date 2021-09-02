<?php


//Função para buscar o CPF do usuário
function funcaoEmid($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT empresa_id FROM usuario WHERE cpf = '$cpf';";      
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    //Validar se tem retorno do BD
    if (mysqli_num_rows($result) > 0) {
                
        $array = array();
        
        while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($array,$linha);
        }
        
        foreach ($array as $coluna) {            
            //***Verificar os dados da consulta SQL
            $resp = $coluna["empresa_id"];
        }        
    } 

    return $resp;

}

//Função para buscar o CPF do usuário
function funcaoTipoid($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT idtipousuario_id FROM usuario WHERE cpf = '$cpf';";      
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    //Validar se tem retorno do BD
    if (mysqli_num_rows($result) > 0) {
                
        $array = array();
        
        while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($array,$linha);
        }
        
        foreach ($array as $coluna) {            
            //***Verificar os dados da consulta SQL
            $resp = $coluna["idtipousuario_id"];
        }        
    } 

    return $resp;

}

//Função para buscar o CPF do usuário
function funcaoPlaid($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT planos_id FROM usuario WHERE cpf = '$cpf';";      
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    //Validar se tem retorno do BD
    if (mysqli_num_rows($result) > 0) {
                
        $array = array();
        
        while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($array,$linha);
        }
        
        foreach ($array as $coluna) {            
            //***Verificar os dados da consulta SQL
            $resp = $coluna["planos_id"];
        }        
    } 

    return $resp;

}


function funcaoStatus($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT status FROM usuario WHERE cpf = '$cpf';";      
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    //Validar se tem retorno do BD
    if (mysqli_num_rows($result) > 0) {
                
        $array = array();
        
        while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($array,$linha);
        }
        
        foreach ($array as $coluna) {            
            //***Verificar os dados da consulta SQL
            $resp = $coluna["status"];
        }        
    } 

    return $resp;

}


















?>