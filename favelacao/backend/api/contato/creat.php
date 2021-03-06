<?php
    require_once('../config/dblogincad.php');


    if(isset($_POST['nome']) ){ 

        $nome =$_POST['nome'];
        $email =$_POST['email']; 
        $assunto =$_POST['assunto'];
        $mensagem =$_POST['mensagem'];
                
        
        $sql = "insert into contato (nome, email, assunto, mensagem) values ('$nome', '$email', '$assunto', '$mensagem')"; 
        $result = mysqli_query($conn, $sql); 
        if($result){ 
            echo "<script>
                alert ('Mensagem enviada com sucesso! Agradecemos!')
                window.location.href='../../../frontend/pages/contato.php'
            </script>";
        }
        
        else{ 
            echo "<script>
                alert ('Não foi possível enviar sua mensagem!')
                window.location.href=''
            </script>";
        } 
        
    } 
    
    else{
        echo "<script>
            window.location.href='../../../frontend/pages/contato.php'
        </script>";
    
    } 
    
?>  













