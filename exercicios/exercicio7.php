<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 7</title>
</head>
<body id="inicio">
    <p>
    7 - Entrar com o número de vezes que se deseja imprimir a 
    palavra SOL e imprimir.
    </p>

    <form method="post">
        <p>Digite a quantidade de vezes que você quer imprimir a palavra:</p>
        <input type="number" id="1" name="vlr1">
        <br>
        <br>
        <input type="submit" value="Imprimir">
    </form>
    <br>
    <?php
    if (isset($_POST['vlr1'])) {
        $qtd = $_POST['vlr1'];

        if (empty($qtd)) {
            echo "<p>Informe os valores!!!</p>";
        }else {
            for($cont=0; $cont < $qtd; $cont++){
                echo "<p>SOL <br></p>";
            }
        }
    }else {
        echo "<p>Informe os valores!!!</p>";
    }
    ?>
</body>
</html>