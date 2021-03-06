<?php 

class Missao {
    private $conn;
    private $nomeTabela = "missao";

    public $idmissao;
    public $tituloMissao;
    public $missao;
    public $personagem;
    public $expressao;
    public $posicao;
    public $cenario;

    public function __construct($db) {
        $this->conn = $db;
    }
 

function create(){
    
    $sql = "INSERT INTO
                " . $this->nomeTabela . "
            SET
            tituloMissao=:tituloMissao, missao=:missao, personagem=:personagem, expressao=:expressao, posicao=:posicao, cenario=:cenario";
    
    $stmt = $this->conn->prepare($sql);

    
    $this->tituloMissao=htmlspecialchars(strip_tags($this->tituloMissao));
    $this->missao=htmlspecialchars(strip_tags($this->missao));
    $this->personagem=htmlspecialchars(strip_tags($this->personagem));
    $this->expressao=htmlspecialchars(strip_tags($this->expressao));
    $this->posicao=htmlspecialchars(strip_tags($this->posicao));
    $this->cenario=htmlspecialchars(strip_tags($this->cenario));
   

    $stmt->bindParam(":tituloMissao", $this->tituloMissao);
    $stmt->bindParam(":missao", $this->missao);
    $stmt->bindParam(":personagem", $this->personagem);
    $stmt->bindParam(":expressao", $this->expressao);
    $stmt->bindParam(":posicao", $this->posicao);
    $stmt->bindParam(":cenario", $this->cenario);

    
    if($stmt->execute()){
        return true;
    }

    return false;
}

function read(){
    $sql= "SELECT * from "  . $this->nomeTabela;

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    return $stmt;
}


function update(){
  
    if (isset($_REQUEST['idmissao']))
    
    $sql = "UPDATE " . $this->nomeTabela . "
    SET
        tituloMissao = '".$this->tituloMissao."',
        missao = '".$this->missao."',
        personagem = '".$this->personagem."',
        expressao = '".$this->expressao."',
        posicao = '".$this->posicao."',
        cenario = '".$this->cenario."'
               
    WHERE
        idmissao =". $_REQUEST['idmissao'];
 

    $stmt = $this->conn->prepare($sql);
  

    if($stmt->execute()){
        return true;
    }
  
    return false;
}

function delete(){
    
    $sql = "DELETE FROM " . $this->nomeTabela . " WHERE idmissao =".$this->idmissao;
  
    $stmt = $this->conn->prepare($sql);
  
    if($stmt->execute()){
        return true;
    }
  
    return false;
}

}
?>