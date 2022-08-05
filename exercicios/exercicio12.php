<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercício 12</title>
</head>
<body id="inicio">
    <p>
    12 – Faça um algoritmo que receba a altura e sexo de uma 
    pessoa, calcule e exiba o seu peso ideal, utilizando as 
    seguintes formulas:
    a.	Homens = (72.7 * altura) – 58
    b.	Mulheres = (62.1 * altura) – 44.7
    </p>

    <form method="post">
        <p>Qual a sua altura?</p>
        <input type="text" id="1" name="altura">
        <p>Qual o seu sexo?</p>
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Peso ideal">
    </form>
    <br>
    <?php
    if (isset($_POST['altura'], $_POST['sexo'])){
        $altura = $_POST['altura'];
        $sexo = $_POST['sexo'];

        if (empty($altura and $sexo)) {
            echo "<p>Informe os campos!!!</p>";
        } else {
            if ($sexo == "Masculino") {
                $pesoIdeal = (72.7 * $altura) - 58;
                echo "<p>Seu peso ideal é: $pesoIdeal</p>";
            }elseif($sexo == "Feminino"){
                $pesoIdeal = (62.1 * $altura) - 44.7;
                echo "<p>Seu peso ideal é: $pesoIdeal</p>";
            }
        }
    }else{
        echo "<p>Informe os campos!!!</p>";
    }
    
    
    ?>
</body>
</html>