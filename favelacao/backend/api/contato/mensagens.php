<?php
   // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();

    require_once('../config/dblogincad.php');

    // $nome=($_POST['nome']);
    // $email=($_POST['email']);
	// $assunto=($_POST['assunto']);
	// $mensagem=($_POST['mensagem']);

	
    $sql = "SELECT * FROM contato"; 
    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_assoc($result);

    if($row){
    
        $_SESSION['user'] = [
            'idcontato' => $row['idcontato'],
            'nome' => $row['nome'],
            'assunto' => $row['assunto'],
            'mensagem' => $row['mensagem'],
        ];
        
        echo "<script>
            alert ('mesa!')
            window.location.href='../../Painel-ADM-FavelAcao/index.php'
        </script>";
    }
    
    else{
        echo "<script>
                alert ('mensagem')
                window.location.href='../../Painel-ADM-FavelAcao/'
            </script>";
    }  
    
?>