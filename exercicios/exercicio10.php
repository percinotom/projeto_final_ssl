<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 10</title>
</head>
<body id="inicio">
    <p>
    10 – Criar uma calculadora de 4 número, sendo a operação 
    escolhida pelo usuário (adição, subtração, multiplicação e 
    divisão).
    </p>

    <form method="post">
        <p>Informe um número:</p>
        <input type="number" id="1" name="num">
        <p>Informe um número:</p>
        <input type="number" id="2" name="num2">
        <p>Informe um número:</p>
        <input type="number" id="3" name="num3">
        <p>Informe um número:</p>
        <input type="number" id="4" name="num4">
        <br>
        <p>Operação:</p>
        <select name="operacao">
            <option value="Adicao">Adição</option>
            <option value="Subtracao">Subtração</option>
            <option value="Multiplicacao">Multiplicação</option>
            <option value="Divisao">Divisão</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <br>
    <?php
    if (isset($_POST['num'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['operacao'])) {
        $num = $_POST['num'];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $operacao = $_POST['operacao'];

        if (empty($num) or empty($num2) or empty($num3) or empty($num4) or empty($operacao)) {
            echo "<p>Informe os valores!!!</p>";
        } else {
            if($operacao == "Adicao"){
                $result = $num + $num2 + $num3 + $num4;
                echo "<p>Resultado: $result</p>";
            }elseif($operacao == "Subtracao"){
                $result = $num - $num2 - $num3 - $num4;
                echo "<p>Resultado: $result</p>";
            }elseif($operacao == "Multiplicacao"){
                $result = $num * $num2 * $num3 * $num4;
                echo "<>Resultado: $result</p>";
            }elseif($operacao == "Divisao"){
                $result = $num / $num2 / $num3 / $num4;
                echo "<p>Resultado: $result</p>";
            }else{
                echo "<p>Erro!</p>";
            }
        }
    }else {
        echo "<p>Informe os valores!!!</p>";
    }
    ?>
</body>
</html>