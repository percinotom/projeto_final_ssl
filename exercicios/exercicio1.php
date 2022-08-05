<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 1</title>
</head>
<body id="inicio">
    <p>
        1 - Construir um algoritmo que leia 2 números e efetue 
        a adição. Caso o valor somado seja maior que 20, este 
        deverá ser apresentando somando-se a ele mais 8; caso 
        o valor somado seja menor ou igual a 20, este deverá 
        ser apresentado subtraindo-se 5.
    </p>

    <form method="post">
        <p>Digite o valor 1:</p>
        <input type="number" id="1" name="vlr1">
        <p>Digite o valor 2:</p>
        <input type="number" id="2" name="vlr2">
        <br>
        <br>
        <input class="botao" type="submit" value="Calcular">
    </form>
    <br>
    <?php
    if (isset($_POST['vlr1'], $_POST['vlr2'])) {
        $n1 = $_POST['vlr1'];
        $n2 = $_POST['vlr2'];

        if (empty($n1) or empty($n2)) {
            echo "<p>Informe os dois valores!!!</p>";
        } else {
            $soma = $n1 + $n1;
            if($soma > 20){
                $soma += 8;
                echo "<p>Função Somar dos valores: $soma</p>";
            }else{
                $soma -= 5;
                echo "<p>Função Somar dos valores: $soma</p>";
            }
            
        }
    } else {
        echo "<p>Informe os dois valores!!!</p>";
    }
    ?>
</body>
</html>