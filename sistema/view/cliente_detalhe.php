<?php
    include_once '../model/cliente_model.php';
    $cliente = new Cliente();

    if(isset($_GET['id']) and ($_GET['acao'] == "editar" or $_GET['acao'] == "excluir")){
        $id = $_GET['id'];
        $cliente->listarCliente($id);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
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
    <title>Detalhes</title>
</head>
<body>
    <nav>
        <label class="logo">Marcos Percinoto</label>
        <ul>
            <li><a href="../view/cliente.php">Voltar</a></li>
        </ul>
    </nav>
    <hr>
    <h2 class="titulo"><?php echo ucwords($_GET['acao']);?> Cliente</h2>
    <div class="container">
        <form id="cadastro" name="cadastro" method="post" action="../control/cliente_control.php?acao=<?php echo $_GET['acao'];?>" onsubmit="" class="row g-3">
            <div class="col-md-12">
                <label class="form-label">Id</label>
                <input name="id" type="text" readonly class="form-control" value="<?= $cliente->getId(); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nome</label>
                <input name="nome" type="text" class="nome form-control" placeholder="Digite seu nome" value="<?= $cliente->getNome(); ?>">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="email form-label">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Digite seu e-mail" value="<?= $cliente->getEmail(); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Telefone</label>
                <input name="telefone" type="text" class="telefone form-control" onkeypress="$(this).mask('(00) 00000-0000')" placeholder="(00) 00000-0000" value="<?= $cliente->getTelefone(); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">CPF</label>
                <input name="cpf" type="text" class="cpf form-control" onkeypress="$(this).mask('000.000.000-00')" placeholder="000.000.000-00" value="<?= $cliente->getCPF(); ?>">
            </div>

            <?php
                if($_GET['acao'] == "excluir"){
                    $modal = "modal";
                    $modal2 = "#myModal";
                    $tipo = "button";
                    $cor_btn = "btn-danger";
                }else{
                    $tipo="submit";
                    $cor_btn = "btn-primary";
                }

            ?>

            <div class="col-12">
                <input class="btn <?=$cor_btn?> botao" name="cadastrar" type="<?=$tipo?>" id="cadastrar" data-toggle="<?=$modal?>" data-target="<?=$modal2?>" value="<?= ucwords($_GET['acao']); ?>" />
            </div>

            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="text-align: left;" id="myModalLabel">Excluir cliente</h4>
                </div>
                <div class="modal-body">
                    Você deseja realmente excluir o cliente?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <input class="btn btn-danger botao" name="excluir" type="submit" id="excluir" value="Excluir" />
                </div>
                </div>
            </div>
            </div>
        </form>
    </div>
    <!-- JavaScript (Opcional) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../mascara_validacao/jQuery-Mask/dist/jquery.mask.min.js"></script>
    <script src="../mascara_validacao/jquery.validate.js"></script>
    <script src="../mascara_validacao/additional-methods.js"></script>
    <script src="../mascara_validacao/localization/messages_pt_BR.js"></script>
    <script>
        $(document).ready(function(){
            if(<?= $_GET['acao'] == "cadastrar" or $_GET['acao'] == "editar"?>){
                $('#cadastro').validate({
                    rules:{
                        nome:{
                            required: true
                        },
                        email:{
                            required: true,
                            email: true,
                            minlength: 10,
                            maxlength: 50
                        },
                        telefone:{
                            required: true,
                            minlength: 14
                        },
                        cpf:{
                            required: true,
                            cpfBR: true
                        }
                    }
                })
            }
        })
    </script>
</body>
</html>