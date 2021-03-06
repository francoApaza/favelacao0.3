<?php
header("Acess-Control-Allow-Origin: *");
header ("Content-Type: application/json; charset=UTF-8");

include_once '../config/dataBase.php';
include_once '../models/expressao.php';

$database = new Database();
$db = $database->getConnection();

$expressao = new Expressao($db);

$stmt = $expressao->read();
$numRows = $stmt->rowCount();

if($numRows>0){

    $expressao_arr=array();
    $expressao_arr["expressao"]=array();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        extract($row);

        $expressao_item=array(
            
            "idExpressao"=> $idExpressao,
            "descricao"=>$descricao,
        );

        array_push($expressao_arr["expressao"], $expressao_item);
    }

    http_response_code(200);
    echo json_encode($expressao_arr);
} else { 
    http_response_code(404);
    echo json_encode(
        array("message"=>"Expressão não encontrada.")
    );

}

?>