<?php
header("Acess-Control-Allow-Origin: *");
header ("Content-Type: application/json; charset=UTF-8");

include_once '../config/dataBase.php';
include_once '../models/mural.php';

$database = new Database();
$db = $database->getConnection();

$mural = new Mural($db);

$stmt = $mural->read();
$numRows = $stmt->rowCount();

if($numRows>0){

    $mural_arr=array();
    $mural_arr=array();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        extract($row);
        
        $mural_item=array(
            "idmural"=> $idmural,
            "nome"=> $nome,
            "imagem"=> $imagem
        );

        array_push($mural_arr, $mural_item);
    }

    http_response_code(200);
    echo json_encode($mural_arr);
} else { 
    http_response_code(404);
    echo json_encode(
        array("message"=>"Imagem não pode ser encontrada.")
    );

}

?>