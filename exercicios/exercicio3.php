<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercício 3</title>
</head>
<body id=inicio>
    <p>
    3 - Entrar com nome, sexo e idade de uma pessoa. Se a 
    pessoa for do sexo feminino e tiver menos que 25 anos, 
    imprimir nome e a mensagem: ACEITA. Caso contrário, 
    imprimir nome e a mensagem: NÃO ACEITA.
    </p>

    <form method="post">
        <p>Digite seu nome:</p>
        <input type="text" id="1" name="nome">
        <p>Digite seu sexo [M] - Masculino e [F] - Feminino:</p>
        <input type="text" id="2" name="sexo">
        <p>Digite sua idade:</p>
        <input type="number" id="3" name="idade">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <br>
    <?php
    if (isset($_POST['nome'], $_POST['sexo'], $_POST['idade'])){
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];
        if (empty($nome or $sexo or $idade)) {
            echo "<p>Informe os campos!!!</p>";
        } else {
            if ($sexo == "F" and $idade < 25) {
                echo "<p>$nome - ACEITA</p>";
            }else{
                echo "<p>$nome - NÃO ACEITA</p>";
            }
        }
    }
    
    
    ?>
</body>
</html>