<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 9</title>
</head>
<body id="inicio">
    <p>
    9 - Criar 2 vetores com 5 números inteiros cada. Gerar um 
    terceiro vetor, com a soma do 1 e segundo vetor.
    </p>
    <?php
        $vet1 = [2,6,8,52,66];
        $vet2 = [55,3,2,99,4];
        
        for($cont=0; $cont < 5; $cont++){
            $vet3[] = $vet1[$cont] + $vet2[$cont];
        }

        for($cont=0; $cont < 5; $cont++){
            echo "<p>$vet3[$cont]</p>";
        }
    ?>
</body>
</html>