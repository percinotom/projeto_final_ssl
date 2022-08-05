<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 5</title>
</head>
<body id=inicio>
    <p>
    5 - Ler um número inteiro entre 1 e 12 e escrever o mês 
    correspondente. Caso o número seja fora desse intervalo, 
    informar que não existe mês com este número.
    </p>

    <form method="post">
        <p>Digite um número entre 1 e 12:</p>
        <input type="number" id="1" name="vlr1">
        <br>
        <br>
        <input type="submit" value="Calcular mês">
    </form>
    <br>
    <?php
    if (isset($_POST['vlr1'])) {
        $num = $_POST['vlr1'];

        if (empty($num)) {
            echo "<p>Informe os valores!!!</p>";
        }else {
            switch($num){
                case 1:
                    echo "<p>Janeiro</p>";
                    break;
                case 2:
                    echo "<p>Fevereiro</p>";
                    break;
                case 3:
                    echo "<p>Março</p>";
                    break;
                case 4:
                    echo "<p>Abril</p>";
                    break;
                case 5:
                    echo "<p>Maio</p>";
                    break;
                case 6:
                    echo "<p>Junho</p>";
                    break;
                case 7:
                    echo "<p>Julho</p>";
                    break;
                case 8:
                    echo "<p>Agosto</p>";
                    break;
                case 9:
                    echo "<p>Setembro</p>";
                    break;
                case 10:
                    echo "<p>Outubro</p>";
                    break;
                case 11:
                    echo "<p>Novembro</p>";
                    break;
                case 12:
                    echo "<p>Dezembro</p>";
                    break;
                default:
                    echo "<p>Não existe mês com esse número</p>";
                    break;
            }
        }
    }else {
        echo "<p>Informe os valores!!!</p>";
    }
    ?>
</body>
</html>