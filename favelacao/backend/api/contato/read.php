<?php
header("Acess-Control-Allow-Origin: *");
header ("Content-Type: application/json; charset=UTF-8");

include_once '../config/dataBase.php';
include_once '../models/contato.php';

$database = new Database();
$db = $database->getConnection();

$contato = new Contato($db);

$stmt = $contato->read();
$numRows = $stmt->rowCount();

if($numRows>0){

    $contato_arr=array();
    $contato_arr=array();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        extract($row);
        
        $contato_item=array(
            "idcontato"=> $idcontato,
            "nome"=> $nome,
            "email"=> $email,
            "assunto"=> $assunto,
            "mensagem"=> $mensagem
        );

        array_push($contato_arr, $contato_item);
    }

    http_response_code(200);
    echo json_encode($contato_arr);
    
} else { 
    http_response_code(404);
    echo json_encode(
        array("message"=>"Mensagem não pode ser encontrada.")
    );

}

?>