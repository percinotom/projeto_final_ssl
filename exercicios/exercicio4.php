<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 4</title>
</head>
<body id="inicio">
    <p>
    4 - Entrar com 3 números e imprimi-los em ordem decrescente
    </p>

    <form method="post">
        <p>Digite o valor 1:</p>
        <input type="number" id="1" name="vlr1">
        <p>Digite o valor 2:</p>
        <input type="number" id="2" name="vlr2">
        <p>Digite o valor 3:</p>
        <input type="number" id="3" name="vlr3">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <br>
    <?php
    if (isset($_POST['vlr1'], $_POST['vlr2'], $_POST['vlr3'])) {
        $num = [$_POST['vlr1'], $_POST['vlr2'], $_POST['vlr3']];

        if (empty($num[0]) and empty($num[1]) and empty($num[2])) {
            echo "<p>Informe os valores!!!</p>";
        } else {
            rsort($num);
            echo "<p>$num[0]  -  $num[1]  -  $num[2]</p>";
        }
    }else {
        echo "<p>Informe os valores!!!</p>";
    }
    ?>
</body>
</html>