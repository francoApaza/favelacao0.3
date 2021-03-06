<?php 

class Mural {
    private $conn;
    private $nomeTabela = "mural";

    public $idmural;
    public $nome;
    public $imagem;
    
   
    public function __construct($db) {
        $this->conn = $db;
    }
 

function creat(){
    
     $sql = "INSERT INTO `favelacao`.`mural` (`nome`, `imagem`) VALUES ( '".$this->nome."' , '".$this->imagem."' )";
    
    $stmt = $this->conn->prepare($sql);
    
        
    $this->nome=htmlspecialchars(strip_tags($this->nome));
    $this->imagem=htmlspecialchars(strip_tags($this->imagem));
       
    
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":imagem", $this->imagem);
    
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


// function update(){
  
//     $sql = "UPDATE " . $this->nomeTabela . "
//     SET
//         nome = '".$this->nome."',
//         dataNascimento = '".$this->dataNascimento."',
//         email = '".$this->email."',
//         apelido = '".$this->apelido."',
//         imgAvatar = '".$this->imgAvatar."'
               
//     WHERE
//         id = ".$this->id;
 

//     $stmt = $this->conn->prepare($sql);
  

//     if($stmt->execute()){
//         return true;
//     }
  
//     return false;
// }

// function delete(){
    
//     $sql = "DELETE FROM " . $this->nomeTabela . " WHERE id =".$this->id;
  
//     $stmt = $this->conn->prepare($sql);
  
//     if($stmt->execute()){
//         return true;
//     }
  
//     return false;
// }

}
?>