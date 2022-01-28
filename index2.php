<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/main2.css">
     <title>CRUD - Cadastro de Casos Positivos Covid-19</title>
</head>
<body>
<div class="content">

    <div class="cadastro">

        <h1>Cadastrar Casos</h1>
        
        <a href="index1.php">Principal</a> <br><br>
        <form action="processa.php" method="POST">  
            
        <label for="">Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
        
        <label for="">Idade: </label>
        <input type="text" name="idade" placeholder="Digite a Idade"><br><br>
        
        <label for="">Sexo: </label>
        <input type="text" name="sexo" placeholder="Digite o Sexo"><br><br>
        
        <label for="">Rua: </label>
        <input type="text" name="rua" placeholder="Digite o nome da rua"><br><br>
        
        <label for="">Bairro: </label>
        <input type="text" name="bairro" placeholder="Digite o nome do Bairro"><br><br>
        
        <label for="">Número: </label>
        <input type="text" name="numero" placeholder="Digite o número"><br><br>
        
        <input classs="botao" type="submit" value="Cadastrar">
        
        </form>
    </div>

</div>
   
</body>
</html>
