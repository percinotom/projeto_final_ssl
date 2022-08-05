<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercício 2</title>
</head>
<body id=inicio>
    <p>
    2 - Entrar com um número e informar se ele é divisível 
    por 10, por 5, por 2 ou se não é divisível por nenhum 
    destes.
    </p>

    <form method="post">
        <p>Digite um valor:</p>
        <input type="number" id="1" name="vlr1">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <br>
    <?php
    if (isset($_POST['vlr1'])){
        $n1 = $_POST['vlr1'];
        if (empty($n1)) {
            echo "<p>Informe o valor!!!</p>";
        } else {
            if ($n1 % 10 == 0) {
                echo "<p>Divisível por 10</p>";
            }else{
                echo "<p>$n1 não é divisível por 10</p>";
            }
            
            if($n1 % 5 == 0){
                echo "<p>Divisível por 5</p>";
            }else{
                echo "<p>$n1 não é divisível por 5</p>";
            }
            
            if($n1 % 2 == 0){
                echo "<p>Divisível por 2</p>";
            }else{
                echo "<p>$n1 não é divisível por 2</p>";
            }
        }
    }
    
    
    ?>
</body>
</html>