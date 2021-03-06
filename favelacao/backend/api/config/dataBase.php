<?php

class Database {
    private $host = "localhost";
    private $dbName = "favelacao";
    private $userName = "root";
    private $password = "";
    public $conn;

    public function getConnection(){

        $this ->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->userName, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erro de conexão com Banco de Dados: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>