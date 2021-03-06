<?php
header("Acess-Control-Allow-Origin: *");
header ("Content-Type: application/json; charset=UTF-8");

include_once '../config/dataBase.php';
include_once '../models/personagem.php';

$database = new Database();
$db = $database->getConnection();

$personagem = new Personagem($db);

$stmt = $personagem->read();
$numRows = $stmt->rowCount();

if($numRows>0){

    $personagem_arr=array();
    $personagem_arr["personagem"]=array();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        extract($row);

        $personagem_item=array(
            
            "idPersonagem" => $idPersonagem,
            "nome" => $nome,
            "expressaoId" => $expressaoId,
            "descricaoExpressao" => $descricaoExpressao,
            "imagem" => $imagem
        );

        array_push($personagem_arr["personagem"], $personagem_item);
    }

    http_response_code(200);
    echo json_encode($personagem_arr);
} else { 
    http_response_code(404);
    echo json_encode(
        array("message"=>"Personagem não encontrado.")
    );

}

?>