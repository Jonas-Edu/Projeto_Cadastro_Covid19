<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Positivos</title>
    <style>
      body{
        font-family: Arial, helvetica, sans-serif;
        background-color:#ebebeb;
        text-align: center;
      }

    </style>
</head>
<body>

<h2>Total de Casos Positivos por Bairro</h2>

<?php

require_once("conexao.php");

$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
     die("Problema com a Conexão: " . $conn->connect_error);
    }
    
        $sql = "SELECT bairro, COUNT(*) from cadastro group by bairro";
    
         $result = mysqli_query($conn, $sql);
   
         print("<br>=================<br>");

            while($row = mysqli_fetch_array($result)) {
             echo $row ["bairro"].' '.$row["COUNT(*)"]. '<br/>';
}
$conn->close();
?>
<br>
<br>
<a href="index1.php">Principal</a> ========== <a href="index2.php">Cadastrar Caso</a>
</body>
</html>