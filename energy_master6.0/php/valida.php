<?php
function validaCPF($cpf) {
 
 // Extrai somente os números
 $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
  
 // Verifica se foi informado todos os digitos corretamente
 if (strlen($cpf) != 11) {
     return false;
 }

 // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
 if (preg_match('/(\d)\1{10}/', $cpf)) {
     return false;
 }

 // Faz o calculo para validar o CPF
 for ($t = 9; $t < 11; $t++) {
     for ($d = 0, $c = 0; $c < $t; $c++) {
         $d += $cpf[$c] * (($t + 1) - $c);
     }
     $d = ((10 * $d) % 11) % 10;
     if ($cpf[$c] != $d) {
         return false;
     }
 }
 return true;

}

 function validaTelefone($telefone){

    $telefone = "(82) 5555-5555";
    if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{4}-[0-9]{4}$^', $telefone)){
        echo "Telefone inváildo.";
    }
}

function validaNome($nome){

    if(strlen($nome)<=3){
        echo "Preencha o nome com no mínimo 7 caracteres.";
    }

}


function validaNumero($number){

    $idade = $_GET['number'];
    if(!is_numeric($number)){
        echo "Preencha este campo somente com números.";
    }else{
        echo "numero invalido";
    }
}

function validaEmail($email){

    $email = "teste@dominio.com.br";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "E-mail inválido.";    
    }
}

?>