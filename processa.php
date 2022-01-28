<?php
require_once("conexao.php");

if ($conn->connect_error){
    die("Problema com a Conexão: " . $conn->connect_error);
}

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);

function possui_campos_em_branco($nome,$idade,$sexo,$rua,$bairro,$numero){
    if(empty($nome)){
        return true;
    }
    if(empty($idade)){
        return true;
    }
    if(empty($sexo)){
        return true;
    }
    if(empty($rua)){
        return true;
    }
    if(empty($bairro)){
        return true;
    }
    if(empty($numero)){
        return true;
    }
    return false;
}

if(possui_campos_em_branco($nome,$idade,$sexo,$rua,$bairro, $numero)){
    echo "Preenchimento Obrigatório";
   }else{
      
    $conn = mysqli_connect ($servername, $username, $password, $dbname);
    
    $result_cadastro = "INSERT INTO cadastro (nome, idade, sexo, rua, bairro, numero, created) Value ('$nome', '$idade', '$sexo', '$rua', '$bairro', '$numero', NOW() )";
      
    if ($conn->query($result_cadastro) === true) {
        echo "Cadastro Realizado com Sucesso";
    }else {
        echo "Error: " . $result_cadastro . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
<br>
<br>
<a href="index1.php">Clique para Voltar</a>
<?php

 


