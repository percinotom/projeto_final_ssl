<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exc.css">
    <title>Exercicio 6</title>
</head>
<body id="inicio">
    <p>
    6 - A biblioteca de uma universidade deseja fazer um 
    algoritmo que leia o nome do livro que será emprestado, 
    o tipo de usuário (professor ou aluno) e possa imprimir 
    um recibo do empréstimo. Considerar que o professor tem 
    10 dias para devolver o livro o aluno somente 3 dias.
    </p>

    <form method="post">
        <p>Digite o nome do livro:</p>
        <input type="text" id="1" name="livro">
        <br>
        <p>Qual o seu tipo de usuário?</p>
        <select name="tipoUser">
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Emprestimo">
    </form>
    <br>
    <?php
    if (isset($_POST['livro'], $_POST['tipoUser'])) {
        $livro = $_POST['livro'];
        $tipoUser = $_POST['tipoUser'];

        if (empty($livro) or empty($tipoUser)) {
            echo "<p>Informe os valores!!!</p>";
        } else {
            if($tipoUser == "Professor"){
                echo "<p>Olá professor, você pegou o livro $livro e tem 10 dias para devolver</p>";
            }elseif($tipoUser == "Aluno"){
                echo "<p>Olá aluno, você pegou o livro $livro e tem 3 dias para devolver</p>";
            }
        }
    }else {
        echo "<p>Informe os valores!!!</p>";
    }
    ?>
</body>
</html>