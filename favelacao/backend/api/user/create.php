<?php
    require_once('../config/dblogincad.php');


    if(isset($_POST['nome']) ){ 

        $nome =$_POST['nome'];
        $dataNascimento =$_POST['dataNascimento']; 
        $email =$_POST['email'];
        $telefone =$_POST['telefone'];
        $senha =md5($_POST['senha']);
        $confirmarSenha =md5($_POST['confirmarSenha']);
        $categoriaSecreta =$_POST['categoriaSecreta'];
        $respSecreta =$_POST['respSecreta'];
        $apelido =$_POST['apelido'];
        $imgAvatar =$_POST['imgAvatar'];

        
        $sqlverificar = "SELECT email from usuarios WHERE email='$email'"; 
        $results = mysqli_query($conn, $sqlverificar); 

        if (mysqli_num_rows($results)>=1){
            if (($_POST['senha'])!==($_POST['confirmarSenha'])){
                echo "<script>
                    alert ('Email já cadastrado e a senha e a confirmação devem ser iguais!')
                    window.location.href='../../../frontend/pages/cadastro.php'
                </script>";
            }else{
                echo "<script>
                alert ('Email já cadastrado!')
                window.location.href=''
            </script>";
            }
        }
        
        else if (($_POST['senha'])!==($_POST['confirmarSenha'])){
            echo "<script>
                alert ('A senha e a confirmação devem ser iguais!')
                window.location.href='../../../frontend/pages/cadastro.php'
            </script>";
        } 
        else{ 
            $sql = "INSERT INTO usuarios (nome, dataNascimento, email, telefone, senha, confirmarSenha, categoriaSecreta, respSecreta, apelido, imgAvatar) VALUES ('$nome', '$dataNascimento', '$email', '$telefone', '$senha', '$confirmarSenha', '$categoriaSecreta', '$respSecreta', '$apelido', '$imgAvatar' )"; 
            
            $sql2 = "INSERT INTO `favelacao`.`savegame` (`email`, `missao1`, `missao2`, `missao3`, `missao4`, `missao5`, `missao6`, `missao7`, `missao8`, `missao9`, `missao10`) VALUES ('$email', 'TRUE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE')";

            $sql3 = "INSERT INTO `favelacao`.`medalhas` (`email`, `medalha1`, `medalha2`, `medalha3`, `medalha4`, `medalha5`, `medalha6`, `medalha7`, `medalha8`, `medalha9`, `medalha10`) VALUES ('$email', 'TRUE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE')";
            
            $result = mysqli_query($conn, $sql); 
            
            if($result && mysqli_num_rows($results)==0){ 
                echo "<script>
                    alert ('Dados inseridos com sucesso!')
                    window.location.href='../../../frontend/pages/login.php'
                </script>";
            }
            
            else{ 
                echo "<script>
                    alert ('Dados não inseridos!')
                    window.location.href=''
                </script>";
            } 

            /////CRIA O SAVE DO JOGADOR
            $result2 = mysqli_query($conn, $sql2); 
            /////CRIA O REGISTRO DE MEDALHAS DO JOGADOR
            $result3 = mysqli_query($conn, $sql3); 
        } 
        
    } 
    
    else{
        echo "<script>
            window.location.href='../../../frontend/pages/cadastro.php'
        </script>";
    
    } 
    
?>  
