<?php 

class User {
    private $conn;
    private $nomeTabela = "usuarios";

    public $id;
    public $nome;
    public $dataNascimento;
    public $email;
    public $telefone;
    public $senha;
    public $confirmarSenha;
    public $categoriaSecreta;
    public $respSecreta;
    public $apelido;
    public $imgAvatar;
    public $data;



    public function __construct($db) {
        $this->conn = $db;
    }
 

function create(){
    
    $sql = "INSERT INTO
                " . $this->nomeTabela . "
            SET
                nome=:nome, dataNascimento=:dataNascimento, email=:email, telefone=:telefone, senha=:senha, confirmarSenha=:confirmarSenha, categoriaSecreta=:categoriaSecreta, respSecreta=:respSecreta, apelido=:apelido, imgAvatar=:imgAvatar";
    
    $stmt = $this->conn->prepare($sql);

    
    $this->nome=htmlspecialchars(strip_tags($this->nome));
    $this->dataNascimento=htmlspecialchars(strip_tags($this->dataNascimento));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->telefone=htmlspecialchars(strip_tags($this->telefone));
    $this->senha=htmlspecialchars(strip_tags($this->senha));
    $this->confirmarSenha=htmlspecialchars(strip_tags($this->confirmarSenha));
    $this->categoriaSecreta=htmlspecialchars(strip_tags($this->categoriaSecreta));
    $this->respSecreta=htmlspecialchars(strip_tags($this->respSecreta));
    $this->apelido=htmlspecialchars(strip_tags($this->apelido));
    $this->imgAvatar=htmlspecialchars(strip_tags($this->imgAvatar));


    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":dataNascimento", $this->dataNascimento);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":telefone", $this->telefone);
    $stmt->bindParam(":senha", $this->senha);
    $stmt->bindParam(":confirmarSenha", $this->confirmarSenha);
    $stmt->bindParam(":categoriaSecreta", $this->categoriaSecreta);
    $stmt->bindParam(":respSecreta", $this->respSecreta);
    $stmt->bindParam(":apelido", $this->apelido);
    $stmt->bindParam(":imgAvatar", $this->imgAvatar);

    
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
  
    $sql = "UPDATE " . $this->nomeTabela . "
    SET
        nome = '".$this->nome."',
        dataNascimento = '".$this->dataNascimento."',
        email = '".$this->email."',
        telefone = '".$this->telefone."',
        senha = '".$this->senha."',
        confirmarSenha = '".$this->confirmarSenha."',
        categoriaSecreta = '".$this->categoriaSecreta."',
        respSecreta = '".$this->respSecreta."',
        apelido = '".$this->apelido."',
        imgAvatar = '".$this->imgAvatar."'
               
    WHERE
        id = ".$this->id;
 

    $stmt = $this->conn->prepare($sql);
  

    if($stmt->execute()){
        return true;
    }
  
    return false;
}

function delete(){

    $sql = "INSERT INTO usuariosdeletados (id, nome, dataNascimento, email, senha, telefone, confirmarSenha, categoriaSecreta,
    respSecreta, apelido, imgAvatar, data ) SELECT id, nome, dataNascimento, email, senha, telefone, confirmarSenha, categoriaSecreta,
    respSecreta, apelido, imgAvatar, data FROM usuarios WHERE (id = ".$this->id.") GROUP BY id;
    
    delete from usuarios where id = ".$this->id."; ";
    
  
    $stmt = $this->conn->prepare($sql);
  
    if($stmt->execute()){
        return true;
    }
  
    return false;
}

// function delete(){
    
//     $sql = "DELETE FROM " . $this->nomeTabela . " WHERE id =".$this->id;
  
//     $stmt = $this->conn->prepare($sql);
  
//     if($stmt->execute()){
//         return true;
//     }
  
//     return false;
// }



function updateSaveMail(){
  
    $sql = "UPDATE `favelacao`.`savegame` SET `email` = '".$this->email."' WHERE `idsavegame` = ".$this->id;
        

    $stmt = $this->conn->prepare($sql);
  

    if($stmt->execute()){
        return true;
    }
  
    return false;
}

function deleteSaveMail(){
    
    $sql = "DELETE FROM `favelacao`.`savegame` WHERE `idsavegame` =".$this->id;

    $stmt = $this->conn->prepare($sql);
  
    if($stmt->execute()){
        return true;
    }
  
    return false;
}

function updateMedalMail(){
  
    $sql = "UPDATE `favelacao`.`medalhas` SET `email` = '".$this->email."' WHERE `idmedalhas` = ".$this->id;
        

    $stmt = $this->conn->prepare($sql);
  

    if($stmt->execute()){
        return true;
    }
  
    return false;
}

function deleteMedalMail(){
    
    $sql = "DELETE FROM `favelacao`.`medalhas` WHERE `idmedalhas` =".$this->id;

    $stmt = $this->conn->prepare($sql);
  
    if($stmt->execute()){
        return true;
    }
  
    return false;
}

}
?>