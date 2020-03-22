<?php
    class conexao{
        private $host = "localhost";
        private $user = "root";
        private $senha = "";
        private $banco = "rodoviaria";
        private $conn;

        public function __construct(){
            return $this->conexao();
        }

        public function conexao(){
            $this->conn = mysqli_connect($this->host, $this->user, $this->senha, $this->banco)
            or die("erro ao conectar");
            return $this->conn;
        }

        public function executaQuery($sql){
            return $this->conn->query($sql);
        }
    }
    

?>