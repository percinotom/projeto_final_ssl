<?php
    include_once '../model/cliente_model.php';
    $cliente = new Cliente();

    if(isset($_GET['acao'])){
        $acao = $_GET['acao'];
    }
    else{
        $acao = "";
    }

    if($acao == "cadastrar"){
        $cliente->setNome($_POST['nome']);
        $cliente->setEmail($_POST['email']);
        $cliente->setTelefone($_POST['telefone']);
        $cliente->setCPF($_POST['cpf']);
        $cliente->create();
    }else{
        if($acao == "editar"){
            $cliente->setId($_POST['id']);
            $cliente->setNome($_POST['nome']);
            $cliente->setEmail($_POST['email']);
            $cliente->setTelefone($_POST['telefone']);
            $cliente->setCPF($_POST['cpf']);
            $cliente->update();
        }else{
            if($acao == "excluir"){
                $cliente->setId($_POST['id']);
                $cliente->delete();
            }else{
    
            }
        }
    }

    header("Location: ../view/cliente.php");
?>