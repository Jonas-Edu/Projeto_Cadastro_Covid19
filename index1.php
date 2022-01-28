<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/main.css">
    <title>Sistema de Cadastro de Casos Positivos de Covid-19</title>
</head>
<body>
    
<div class="apresenta_caso">

    <h1>Cadastro de Casos Positivos</h1>
    
    <p>Sistema desenvolvido para cadastrar todos os casos de positivos de covid-19 de acordo com o endereço do paciente</p>
    
    <a href="index2.php">Cadastrar Caso</a>       ===================    <a href="dados_bairro.php">Dados por Bairro</a>
    
</div>
    <?php

    require_once("conexao.php");

    $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
         die("Problema com a Conexão: " . $conn->connect_error);
        }

        $sql = "SELECT nome, idade, sexo, rua, bairro, numero FROM cadastro";
        

        $result = $conn->query($sql);

        print("<br>=================");
        if ($result->num_rows > 0) {
         print("<br>");   
           while($row = $result->fetch_assoc()) {
            $nome = $row["nome"]."<br>";
            $idade = $row["idade"]."<br>";
            $sexo = $row["sexo"]."<br>";
            $rua = $row["rua"]."<br>";
            $bairro =$row["bairro"]."<br>";
            $numero = $row["numero"]."<br>";

            print("<br>");       
            print "Nome : " . ($nome);
            print "Idade : ". ($idade);
            print "Sexo : " . ($sexo);
            print "Rua : " . ($rua);
            print "Bairro : " . ($bairro);
            print "Número : " . ($numero);
            print("=================");
        } 
    } else {
        echo "<br>" . "Sem Cadastro";
        }
        $conn->close();
        ?>
        </body>
    </html>