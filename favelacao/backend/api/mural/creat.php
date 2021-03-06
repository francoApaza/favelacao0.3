<?php

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
include_once '../config/dataBase.php';
include_once '../models/mural.php';
  
$database = new Database();
$db = $database->getConnection();
  
$mural = new Mural($db);
  

$data = json_decode(file_get_contents("php://input"));

if(isset($_FILES['arquivo'])){
    //Aqui pego os 4 ultimos digitos e mando pra lowercase
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    //Aqui crio um novo titulo único e adiciono a extensao formatada
    $novo_nome = md5(time()) . $extensao;
    //Aqui seleciono para onde quero mudar a foto
    $diretorio = "../../../frontend/img/mural/";
    //Aqui mudo o titulo do arquivo e seleciono para onde mover ele, a partir da pasta que o php armazena
    //por default
    move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);


    session_start();

    $mural->nome = $_SESSION['user']['nome'];
    $mural->imagem = $novo_nome;

    $mural->creat();


};
?>

<html>
<?php echo $mural->imagem;
echo $mural->nome;  ?>

<?php echo "<script>
                alert ('Imagem Salva!')
                window.location.href='../../../frontend/jogo/selectMission.php'
            </script>";?>

</html>


