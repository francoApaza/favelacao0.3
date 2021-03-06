<?php
    require_once('../config/conexaobd.php');


    if(isset($_POST['tituloMissao']) ){ 

        $tituloMissao =$_POST['tituloMissao'];
        $missao =$_POST['missao']; 
        $personagem =$_POST['personagem'];
        $expressao =$_POST['expressao'];
        $posicao =$_POST['posicao'];
        if ($_POST['outrocenario']!==""){
            $cenario =$_POST['outrocenario'];
        }else{
            $cenario= $_POST['cenario']; 
        }
        
        $sql = "insert into missao (tituloMissao, missao, personagem, expressao, posicao, cenario) values ('$tituloMissao', '$missao', '$personagem', '$expressao', '$posicao', '$cenario')"; 
        $result = mysqli_query($conn, $sql); 

       
        if($result){ 
            echo "<script>
                alert ('Missão cadastrada com sucesso!')
                window.location.href='../../alterarmissao.php'
            </script>";
        }
        
        else{ 
            echo "<script>
                alert ('Missão não cadastrada!')
                window.location.href=''
            </script>";
        } 
    } 
    
    else{
        echo "<script>
            alert ('Missão não cadastrada!')
            window.location.href=''
        </script>";
    
    } 
    
?>  
