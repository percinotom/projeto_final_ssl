<?php
    include_once __DIR__ . '/../model/cliente_model.php';
    $cliente = new Cliente();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../view/cliente.css">
        <title>Cadastro de Cliente</title>
    </head>
    
    <body>
        <nav>
            <label class="logo">Marcos Percinoto</label>
            <ul>
                <li><a href="../../index.html">Voltar</a></li>
            </ul>
        </nav>
        
        <div class="container">
            <div>
                <form id="cadastro" name="cadastro" method="post" action="../view/cliente_detalhe.php?acao=cadastrar">
                    <input class="btn btn-primary" name="cadastrar" type="submit" id="cadastrar" value="Novo" />
                </form>
            </div>
            <hr>
            <div class="pesquisa">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" name="busca" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
            <hr>
            <h2 class="titulo">Listagem de Cliente</h2>

            <div style="overflow-x: auto;">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Ações</th>
                    </thead>
                    
                    <?php
                        //conexao com o objeto cliente para realizar a leitura dos dados
                        if(isset($_GET['busca'])){
                            $filtro = $_GET['busca'];
                        }else{
                            $filtro = "";
                        }

                        $sql_query = $cliente->read($filtro);
                        if($sql_query->num_rows == 0){
                            
                        var_dump($sql_query->fetch_assoc());

                    ?>

                    <tr>
                        <td colspan="3">Nenhum resultado encontrado...</td>
                    </tr>
                    
                    <?php
                    }
                    else{
                        while($dados = $sql_query->fetch_assoc()){

                        

                    
                    ?>

                    <tr>
                        <td scope="col"><?php echo $dados['id']; ?></td>
                        <td scope="col"><?php echo $dados['nome']; ?></td>
                        <td scope="col"><?php echo $dados['email']; ?></td>
                        <td scope="col"><?php echo $dados['telefone']; ?></td>
                        <td scope="col"><?php echo $dados['cpf']; ?></td>
                        <td scope="col">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a class="btn btn-warning" href="../view/cliente_detalhe.php?acao=editar&&id=<?php echo $dados['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="../view/cliente_detalhe.php?acao=excluir&&id=<?php echo $dados['id']; ?>">Excluir</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>

        <!-- JavaScript (Opcional) -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>