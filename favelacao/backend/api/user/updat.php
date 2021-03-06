<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/dataBase.php';
    include_once '../models/user.php';

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    $user->id = $_POST['id'];
    $user->nome = $_POST['nome'];
    $user->dataNascimento = $_POST['dataNascimento']; 
    $user->email = $_POST['email'];
    $user->telefone = $_POST['telefone'];
    $user->senha = md5($_POST['senha']);
    $user->confirmarSenha = md5($_POST['confirmarSenha']);    
    $user->categoriaSecreta = $_POST['categoriaSecreta'];    
    $user->respSecreta = $_POST['respSecreta'];    
    $user->apelido =  $_POST['apelido'];
    $user->imgAvatar =  $_POST['imgAvatar'];

    if($user->update()){


        $user->updateSaveMail(); ////AQUI EXECUTAMOS O MÉTODO RESPONSAVEL PELO UPDATE DA TABELA DO SAV
        $user->updateMedalMail(); ////AQUI EXECUTAMOS O MÉTODO RESPONSAVEL PELO UPDATE DA TABELA DAS MEDALHAS


        http_response_code(200);


        if (!isset($_SESSION)) session_start();

        $_SESSION['user'] = [
            'id' => $user->id,
            'nome' => $user->nome,
            'dataNascimento' => $user->dataNascimento,
            'email' => $user->email,
            'telefone' => $user->telefone,
            'senha' => $user->senha,
            'confirmarSenha' => $user->confirmarSenha,
            'categoriaSecreta' => $user->categoriaSecreta,
            'respSecreta' => $user->respSecreta,
            'apelido' => $user->apelido,
            'imgAvatar' => $user->imgAvatar,
        ];
            ////////AQUI ATRIBUIMOS OS DADOS DO UPDATE COM SAVE E MEDALHAS PARA A SESSÃO ATUAL
            $_SESSION['save']['idsavegame'] = $user->id;
            $_SESSION['save']['email'] = $user->email ;

            $_SESSION['medal']['idmedalhas'] = $user->id;
            $_SESSION['medal']['email'] = $user->email ;
 
        header("Location: ../../../frontend/pages/perfil.php"); 
        exit;
    }

    else{
        http_response_code(503);
        echo json_encode(array("message" => "Usuário ". $_POST['id']. " não encontrado."));
    }
?>