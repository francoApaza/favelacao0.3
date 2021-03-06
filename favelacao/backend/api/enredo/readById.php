<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
include_once '../config/dataBase.php';
include_once '../models/enredo.php';
  
$database = new Database();
$db = $database->getConnection();
  
$enredo = new Enredo($db);
  
$enredo->idenredo = isset($_GET['idenredo']) ? $_GET['idenredo'] : die();
  
$enredo->readOne();
  
if($enredo->frase!=null){

    $enredo_arr = array(
        "idenredo" =>  $enredo->idenredo,
        "frase" => $enredo->frase,
  
    );
  
    http_response_code(200);
  
    echo json_encode($enredo_arr);
}
  
else{

    http_response_code(404);
  
    echo json_encode(array("message" => "Frase não encontrada."));
}
?>