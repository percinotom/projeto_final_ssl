<?php
    require_once 'conexao.php';

    //instanciar a classe de conexao do banco de dados
    $conexao = new Conexao();
?>

<html>
    <head>
        <title>Teste</title>
    </head>
    <body>
        <?php
            echo "Teste de Conexao Mysql - Inicio!!<br><br>";
            
            echo $conexao -> testar_banco();

            echo "<br><br>Teste de Conexao Mysql - Fim!!!";
        ?>
    </body>
</html>