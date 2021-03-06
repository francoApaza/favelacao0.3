<?php
header("Acess-Control-Allow-Origin: *");
header ("Content-Type: application/json; charset=UTF-8");

include_once '../config/dataBase.php';
include_once '../models/usuario.php';


$database = new Database();
$db = $database->getConnection();

$usuario = new usuario($db);

$stmt = $usuario->read();
$numRows = $stmt->rowCount();

if($numRows>0){

    $usuario_arr=array();
    $usuario=array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $usuario_item=array(
            "faixas"=>$faixas,
            "quantidadeIdade"=>$quantidadeIdade


        );

        array_push($usuario_arr, $usuario_item);
    }

    http_response_code(200);
    echo json_encode($usuario_arr);
} else { 
    http_response_code(404);
    echo json_encode(
        array("message"=>"Usuarios não encontrada.")
    );

}





?>