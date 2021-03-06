<?php 
    if (!isset($_SESSION)) session_start();

    $_SESSION['user']=$_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="../../backend/api/user/recupera.php" method="POST">
            <p class="respos">Digite a resposta da palavra secreta!</p>
            <!-- <p class="lembre">Lembre-se: Primeira letra maiúscula e o restante minúscula</p> -->

          <?php
              $email=$_SESSION['user'];
              include_once '../../backend/api/config/dblogincad.php';
              // if($_POST['email']!=""){
                $sql = "SELECT * FROM usuarios WHERE email='$email'"; 
                $result = mysqli_query($conn, $sql);

                if ($result){
                  while($row= mysqli_fetch_assoc($result)){?>

                  <label>Dica: <?php echo $row['categoriaSecreta'] ?> </label>
              <?php }}?>
            
      
            <input type="text" name="respSecreta" class="form-control" id="" placeholder="Digite sua Dica" required/>

            <label >Nova Senha:</label>
            <input type="password" name="senha" class="form-control" id="senha" minlength="8" placeholder="Digita a Nova Senha" required/>
            <label >Confirmar Senha:</label>
            <input type="password" name="confirmarSenha" class="form-control" id="confirmarSenha" minlength="8" placeholder="Confime a sua Nova Senha" required/>
           <!-- <button class="btn btn-success">Enviar</button> -->
            <button type="submit" class="btn btn-block boton">Enviar</button>
            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
          </form>
        </div>
</body>
</html>