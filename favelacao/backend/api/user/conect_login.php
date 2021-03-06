<?php
   // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();

    require_once('../config/dblogincad.php');

    $email=($_POST['email']);
	$senha=($_POST['senha']);

	
	if(($email!=="") && ((strlen($_POST['senha']))===8)){
         
        $sql = "SELECT * FROM usuarios WHERE email='$email'"; 
        $sql2 = "SELECT * FROM savegame WHERE email='$email'"; 
        $sql3 = "SELECT * FROM medalhas WHERE email='$email'";
        
        $result = mysqli_query($conn, $sql); 
        $result2 = mysqli_query($conn, $sql2); 
        $result3 = mysqli_query($conn, $sql3); 
        
        
        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($result2);
        $row3 = mysqli_fetch_assoc($result3);
        

        if($row && $row['senha']===md5($senha)){
      
            $_SESSION['user'] = [
                'id' => $row['id'],
                'nome' => $row['nome'],
                'dataNascimento' => $row['dataNascimento'],
                'email' => $row['email'],
                'telefone' => $row['telefone'],
                'senha' => $row['senha'],
                'confirmarSenha' => $row['confirmarSenha'],
                'categoriaSecreta' => $row['categoriaSecreta'],
                'respSecreta' => $row['respSecreta'],
                'apelido' => $row['apelido'],
                'imgAvatar' => $row['imgAvatar'],              
            ];

            $_SESSION['save'] = [
                'idsavegame' => $row2['idsavegame'],
                'email' => $row2['email'],
                'missao1' => $row2['missao1'],
                'missao2' => $row2['missao2'],
                'missao3' => $row2['missao3'],
                'missao4' => $row2['missao4'],
                'missao5' => $row2['missao5'],
                'missao6' => $row2['missao6'],
                'missao7' => $row2['missao7'],
                'missao8' => $row2['missao8'],
                'missao9' => $row2['missao9'],
                'missao10' => $row2['missao10']
            ];
            
            $_SESSION['medal'] = [
                'idmedalhas' => $row3['idmedalhas'],
                'email' => $row3['email'],
                'medalha1' => $row3['medalha1'],
                'medalha2' => $row3['medalha2'],
                'medalha3' => $row3['medalha3'],
                'medalha4' => $row3['medalha4'],
                'medalha5' => $row3['medalha5'],
                'medalha6' => $row3['medalha6'],
                'medalha7' => $row3['medalha7'],
                'medalha8' => $row3['medalha8'],
                'medalha9' => $row3['medalha9'],
                'medalha10' => $row3['medalha10']
            ];
            
            echo "<script>
                alert ('Login realizado com sucesso!')
                window.location.href='../../../frontend/'
            </script>";
        }
        else if($row && $row['senha']!==md5($senha)){
            echo "<script>
                alert ('Senha inválida!')
                window.location.href='../../../frontend/pages/login.php'
            </script>";
        }   
        else{
            echo "<script>
                    alert ('E-mail inválido!')
                    window.location.href='../../../frontend/pages/login.php'
                </script>";
        }  
    }
    else{
        echo "<script>
                alert ('E-mail inválido!')
                window.location.href='../../../frontend/pages/login.php'
            </script>";
    }
?>