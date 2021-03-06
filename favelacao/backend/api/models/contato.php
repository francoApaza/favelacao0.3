<?php 

class Contato {
    private $conn;
    private $nomeTabela = "contato";

    public $idcontato;
    public $nome;
    public $email;
    public $assunto;
    public $mensagem;
   
    public function __construct($db) {
        $this->conn = $db;
    }
 

function creat(){
    
    $sql = "INSERT INTO
                " . $this->nomeTabela . "
            SET
                nome=:nome, email=:email, assunto=:assunto, mensagem=:mensagem";
    
    $stmt = $this->conn->prepare($sql);
    
    $this->nome=htmlspecialchars(strip_tags($this->nome));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->assunto=htmlspecialchars(strip_tags($this->assunto));
    $this->mensagem=htmlspecialchars(strip_tags($this->mensagem));
   

    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":assunto", $this->assunto);
    $stmt->bindParam(":mensagem", $this->mensagem);


    
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