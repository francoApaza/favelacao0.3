<?php
  
  if (!isset($_SESSION)) session_start();

  
  if (isset($_REQUEST['delete'])) {
    echo "<script>
      alert('Dados deletados com sucesso'); 
      </script>";
  }

  if (isset($_REQUEST['encerrar'])) {
    echo "<script>
      alert('Sessão encerrada!'); 
      </script>";
  }
  
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <!-- Meta tags Obrigatórias -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="sortcut icon" href="../img/logo_Megafone_Grande.png" type="image/x-icon" />

    <title>Login</title>
  </head>

    


  <body>
      <header>  
         <!--menu-->
        <?php
          include("./templates/menu/menu.php")
        ?>

      </header>

  <div class="corbug">

    <br><br><br><br><br>

  </div>  


<div class="form-signin">  
  <div class="card m-3 mt-6">
    <div class="card-body sombra">
            <img class="card-img-top logimg" src="../img/logo_favelacao.png" alt="Imagem de capa do card">
      <form action="../../backend/api/user/conect_login.php" name="#" method="post"  class="needs-validation">
            
    
              <label>Login</label>
              <input type="email" name="email" class="form-control" id="" maxlength="50" placeholder="Seu email" required/>
            
              <label>Senha</label>
              <input type="password" name="senha" minlength="8" class="form-control" id="" placeholder="Insira sua senha" required/>
            
              <button type="submit" class="btn btn-block boton">Entrar</button>
        
    
            <a class="aLogin" href="./cadastro.php"> Ainda não tem conta? </a> <br>
            <a class="aLogin" href="./recuperaSenha.php"> Esqueceu a senha? </a> <br>
            <a class="aLogin" href="<?php $_SERVER['SERVER_NAME'] ?>/Painel-ADM-FavelAcao/index.php"> Acessar como administrador </a>

      </form>   
    </div>
  </div>
</div>

<div class="corbug">

<br><br><br><br>

</div>  



<footer>
         
  <?php
      include("./templates/rodape/rodape.php")
  ?>
</footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>