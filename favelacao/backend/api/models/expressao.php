<?php 

class Expressao {
    private $conn;
    private $nomeTabela = "expressao";

    public $idExpressao;
    public $descricao;


    public function __construct($db) {
        $this->conn = $db;
    }

   
function read(){
    $sql= "SELECT * from "  . $this->nomeTabela;

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    return $stmt;
}

function readOne(){
  
    $sql = "SELECT * FROM " . $this->nomeTabela . " WHERE idExpressao = ? LIMIT 0,1";
  
    $stmt = $this->conn->prepare( $sql );
  
    $stmt->bindParam(1, $this->idexpressao);
  
    $stmt->execute();
  

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
    $this->idexpressao = $row['idExpressao'];
    $this->descricao = $row['descricao'];
  
}

}

?>