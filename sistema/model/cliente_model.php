<?php
    include_once '../conexao/conexao.php';

    class Cliente{
        private $id;
        private $nome;
        private $email;
        private $telefone;
        private $cpf;

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getCPF(){
            return $this->cpf;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function setCPF($cpf){
            $this->cpf = $cpf;
        }

        public function read($filtro){
            $sql_code = "SELECT * 
                            FROM Cliente 
                            WHERE nome LIKE '%$filtro%'
                            ORDER BY nome";
            
            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }

        public function create(){
            $sql_code = "INSERT INTO Cliente (nome, email, telefone, cpf)
                            VALUES ('".self::getNome()."', '".self::getEmail()."', '".self::getTelefone()."', '".self::getCPF()."')";
            
            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }

        public function update(){
            $sql_code = "UPDATE Cliente SET
                nome = '" . self::getNome() . "',
                email = '" . self::getEmail() . "',
                telefone = '" . self::getTelefone() . "',
                cpf = '" . self::getCPF() . "'
                WHERE id = " . self::getId();

            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }

        public function delete(){
            $sql_code = "DELETE FROM Cliente
                            WHERE id = " . self::getId();

            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }


        public function listarCliente($id){
            try {
                $sql_code = "SELECT * 
                            FROM Cliente 
                            WHERE id = $id";

                $sql_query = Conexao::executar_sql($sql_code);
                $dados = $sql_query->fetch_assoc();
                self::setId($dados['id']);
                self::setNome($dados['nome']);
                self::setEmail($dados['email']);
                self::setTelefone($dados['telefone']);
                self::setCPF($dados['cpf']);

            }catch(Exception $e){
                echo "Ocorreu um erro ao localizar o cliente" . $e;
            }
        }
    }
?>