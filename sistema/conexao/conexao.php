<?php
    require_once 'config.php';

    class Conexao
    {
        private static $instance;
        private static $msg;

        //metodo para executar instrucoes sql
        public static function executar_sql($sql_code){
            try{
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                if($mysqli->connect_errno){
                    echo "Falha na conexãocom banco de dados!";
                }else{
                    $sql_query = $mysqli->query($sql_code);
                }
                return $sql_query;
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        //metodo para testar a conexao com o banco de dados
        public static function testar_banco()
        {   
            $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if (mysqli_connect_errno())
            {
                $msg = "Falha de conexao com o banco de dados: " . mysqli_connect_errno();
            }
            else
            {
                $msg = "Conexao com o banco de dados realizada com sucesso!";
            }

            return $msg;
        }
    }

?>