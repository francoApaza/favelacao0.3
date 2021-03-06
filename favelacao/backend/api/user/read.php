<?php
header("Acess-Control-Allow-Origin: *");
header ("Content-Type: application/json; charset=UTF-8");

include_once '../config/dataBase.php';
include_once '../models/user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$stmt = $user->read();
$numRows = $stmt->rowCount();

if($numRows>0){

    $users_arr=array();
    $users_arr=array();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        extract($row);
        
        $user_item=array(
            "id"=> $id,
            "nome"=> $nome,
            "dataNascimento"=> $dataNascimento,
            "email"=> $email,
            "telefone"=> $telefone,
            "senha"=> $senha,
            "confirmarSenha"=> $confirmarSenha,
            "categoriaSecreta"=> $categoriaSecreta,
            "respSecreta"=> $respSecreta,
            "apelido"=> $apelido,
            "imgAvatar"=> $imgAvatar,
            "data"=>$data
        );

        array_push($users_arr, $user_item);
    }

    http_response_code(200);
    echo json_encode($users_arr);
} else { 
    http_response_code(404);
    echo json_encode(
        array("message"=>"Usuário não encontrado.")
    );

}

?>