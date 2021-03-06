<?php 

class Personagem {
    private $conn;
    private $nomeTabela = "personagens";

    public $idpersonagem;
    public $nomepersonagem;
    public $idExpressao;
    public $descricaoExpressao;
    public $imagem;
  


    public function __construct($db) {
        $this->conn = $db;
    }

  
function read(){
  

    $sql =   "SELECT e.descricao descricaoExpressao, p.idPersonagem, p.nome, p.imagem, p.expressaoId
            FROM " . $this->nomeTabela . " p 
            LEFT JOIN
                expressao  e  ON p.expressaoId = e.idExpressao ORDER BY p.nome ASC";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute();
  
    return $stmt;
}



}

?>