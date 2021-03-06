<?php
//  if (isset($_REQUEST['idmissao'])){

//     echo "<script>
//     alert('Deseja realmente deletar esta missão?'); 
//     </script>";
// }
// if (isset($_REQUEST['delete'])) {
//     echo "<script>
//     alert('Deseja realmente deletar esta missão?'); 
//     window.location.href='../../favelacao/frontend/login.php'
//     </script>";
// }

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/dataBase.php';
// include_once '../config/conexaobd.php';
include_once '../models/missao.php';

if (isset($_REQUEST['idmissao']))

// if (!isset($_SESSION)) session_start();

// $sql = "SELECT * FROM missao";
// $result = mysqli_query($conn, $sql); 
// $row = mysqli_fetch_assoc($result);

// $_SESSION['missao'] = [
//     'idmissao' => $row['idmissao'],
//     'tituloMissao' => $row['tituloMissao'],
//     'missao' => $row['missao'],
//     'personagem' => $row['personagem'],
//     'expressao' => $row['expressao'],
//     'posicao' => $row['posicao'],
//     'cenario' => $row['cenario'],             
// ];

$database = new Database();
$db = $database->getConnection();
  
$missao = new Missao($db);
  
$missao->idmissao =$_REQUEST['idmissao'];

  
if($missao->delete()){
  
    http_response_code(200);
    session_destroy();
    header("Location: ../../alterarmissao.php?delete=true"); 
    exit;
}
  
else{
  
    http_response_code(503);
  
    echo json_encode(array("message" => "Erro ao deletar missão."));
}
?>
