<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 11</title>
</head>
<body id="inicio">
    <p>
    11 – Cria uma funcionalidade onde seja possível o usuário 
    calcular a média de 4 avaliações. Exibir no final se o mesmo 
    foi ou não aprovado em uma disciplina, considerando os 
    critérios de avaliação da faculdade.
    </p>

    <form method="post">
        <p>Informe a nota 1:</p>
        <input type="number" id="1" name="nota1">
        <p>Informe a nota 2:</p>
        <input type="number" id="2" name="nota2">
        <p>Informe a nota 3:</p>
        <input type="number" id="3" name="nota3">
        <p>Informe a nota 4:</p>
        <input type="number" id="4" name="nota4">
        <br>
        <br>
        <input type="submit" value="Aprovação">
    </form>
    <br>
    <?php
    if (isset($_POST['nota1'], $_POST['nota2'], $_POST['nota3'], $_POST["nota4"])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];

        if (empty($nota1) or empty($nota2) or empty($nota3) or empty($nota4)) {
            echo "<p>Informe os valores!!!</p>";
        } else {
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            if($media >= 7 and $media <= 10){
                echo "<p>Aprovado - Média: $media</p>";
            }elseif($media < 7 and $media >=5){
                echo "<p>Exame - Média: $media</p>";
            }elseif($media < 5 and $media >= 0){
                echo "<p>Reprovado - Média: $media</p>";
            }else{
                echo "<p>Erro! A média final deve ser de 0 a 10.</p>";
            }
        }
    }else {
        echo "<p>Informe os valores!!!</p>";
    }
    ?>
</body>
</html>