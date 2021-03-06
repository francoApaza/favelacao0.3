<?php
   // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();

    require_once('../config/dblogincad.php');

    $email=$_SESSION['user'];
	$respSecreta=($_POST['respSecreta']);
	$senha=md5($_POST['senha']);
	$confirmarSenha=md5($_POST['confirmarSenha']);
	
    $sql = "SELECT * FROM usuarios WHERE email='$email'"; 
    $result = mysqli_query($conn, $sql);

    if ($result){
        while($row= mysqli_fetch_assoc($result)){

            if(($respSecreta==$row['respSecreta']) && (strlen($_POST['senha']))===8){
            
                $sql2 = "UPDATE `favelacao`.`usuarios` SET `senha` = '$senha', `confirmarSenha` = '$confirmarSenha' WHERE (`email` = '$email')";
                $result2 = mysqli_query($conn, $sql2); 
            
                if($result2 && $senha==$confirmarSenha){
                    echo "<script>
                        alert ('Senha atualizada com sucesso!')
                        window.location.href='../../../frontend/'
                    </script>";
                }else{
                    echo "<script>
                        alert ('A senha e a confirmação de senha devem ser iguais!')
                        window.location.href='../../../frontend/'
                    </script>";
                }
            }else if (($respSecreta!==$row['respSecreta']) ){
                echo "<script>
                alert ('Senha não atualizada! A resposta secreta não corresponde!')
                window.location.href='../../../frontend/pages/login.php'
            </script>";
            }else{
                echo "<script>
                alert ('Senha não atualizada! A senha deve conter 8 dígitos!')
                window.location.href='../../../frontend/pages/login.php'
            </script>";
            }
        }
    }
    else{
        echo "<script>
                alert ('Senha não atualizada!')
                window.location.href='../../../frontend/pages/login.php'
            </script>";
    }
?>