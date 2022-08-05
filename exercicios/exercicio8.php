<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 8</title>
</head>
<body id="inicio">
    <p>
    8 - Armazenar 15 números inteiros em um vetor e imprimir uma 
    mensagem contendo o número e uma das mensagens: par ou 
    ímpar.
    </p>
    <?php
        $num = [2,6,8,52,66,55,3,2,99,4,5,12,7,75,83];
        
        for($cont=0; $cont < 15; $cont++){
            if($num[$cont] % 2 == 0){
                echo "<p>Par <br></p>";
            }else{
                echo "<p>Impar <br></p>";
            }
        }
    ?>
</body>
</html>