<?php
    

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/dataBase.php';
    include_once '../models/missao.php';

    $database = new Database();
    $db = $database->getConnection();

    $missao = new Missao($db);

    $missao->idmissao = $_POST['idmissao'];
    $missao->tituloMissao = $_POST['tituloMissao'];
    $missao->missao = $_POST['missao'];
    $missao->personagem = $_POST['personagem']; 
    $missao->expressao = $_POST['expressao'];
    $missao->posicao = $_POST['posicao'];
    if ($_POST['outrocenario']!==""){
        $missao->posicao = $_POST['outrocenario']; 
    }else{
        $missao->posicao = $_POST['cenario']; 
    }
    

    if($missao->update()){

        http_response_code(200);

        if (!isset($_SESSION)) session_start();
        
        $_SESSION['missao'] = [
            'idmissao' => $missao->idmissao,
            'tituloMissao' => $missao->tituloMissao,
            'missao' => $missao->missao,
            'personagem' => $missao->personagem,
            'expressao' => $missao->expressao,
            'posicao' => $missao->posicao,
            'cenario' => $missao->cenario,
        ];
    
        
        header("Location: ../../alterarmissao.php?sucesso=true"); 
        exit;
    }

    else{
        http_response_code(503);
        echo json_encode(array("message" => "Missão ". $_POST['idmissao']. " não encontrada."));
    }
?>