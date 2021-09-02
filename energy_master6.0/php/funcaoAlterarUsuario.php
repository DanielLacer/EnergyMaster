<?php


//Função para buscar o CPF do usuário
function funcaoCPF($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT cpf FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["cpf"];
        }        
    } 

    return $resp;
}

//Função para buscar o Nome do usuário
function funcaoNome($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT nome FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["nome"];
        }        
    } 

    return $resp;
}

//Função para buscar o Email do usuário
function funcaoEmail($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT email FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["email"];
        }        
    } 

    return $resp;
}

//Função para buscar a Senha do usuário
function funcaoSenha($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT senha FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["senha"];
        }        
    } 

    return $resp;
}

//Função para buscar o Telefone do usuário
function funcaoTele($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT telefone FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["telefone"];
        }        
    } 

    return $resp;
}

//Função para buscar o CEP do usuário
function funcaoCEP($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT cep FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["cep"];
        }        
    } 

    return $resp;
}

//Função para buscar o Logradouro do usuário
function funcaoLogra($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT logradouro FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["logradouro"];
        }        
    } 

    return $resp;
}

//Função para buscar o Numero do usuário
function funcaoNumero($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT numero FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["numero"];
        }        
    } 

    return $resp;
}

//Função para buscar o complemento do usuário
function funcaoComple($cpf){

    $resp = "";

    include("conexao.php");
    $sql = "SELECT complemento FROM usuario WHERE cpf = '$cpf';";      
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
            $resp = $coluna["complemento"];
        }        
    } 

    return $resp;
}






















?>