<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once '../config/dataBase.php';
include_once '../models/enredo.php';

$database = new Database();
$db = $database->getConnection();

$enredo = new Enredo($db);

$stmt = $enredo->read();
$numRows = $stmt->rowCount();

if($numRows>0){

    $enredo_arr=array();
    $enredo_arr=array();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        extract($row);

        $enredo_item=array(
            
            "idenredo"=> $idenredo,
            "frase"=>$frase,
            "personagem"=>$personagem,

        );

        array_push($enredo_arr, $enredo_item);
    }

    http_response_code(200);
    echo json_encode($enredo_arr);
} else { 
    http_response_code(404);
    echo json_encode(
        array("message"=>"Frase não encontrada.")
    );

}

?>