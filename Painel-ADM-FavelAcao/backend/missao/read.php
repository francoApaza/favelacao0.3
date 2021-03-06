<?php
header("Acess-Control-Allow-Origin: *");
header ("Content-Type: application/json; charset=UTF-8");

include_once '../config/dataBase.php';
include_once '../models/missao.php';

$database = new Database();
$db = $database->getConnection();

$missao = new Missao($db);

$stmt = $missao->read();
$numRows = $stmt->rowCount();

if($numRows>0){

    $missao_arr=array();
    $missao=array();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        extract($row);
        
        $missao_item=array(
            "idmissao"=> $idmissao,
            "missao"=> $missao,
            "personagem"=> $personagem,
            "expressao"=> $expressao,
            "posicao"=> $posicao,
            "cenario"=> $cenario
        );

        array_push($missao_arr, $missao_item);
    }

    http_response_code(200);
    echo json_encode($missao_arr);
} else { 
    http_response_code(404);
    echo json_encode(
        array("message"=>"Missão não encontrada.")
    );

}

?>