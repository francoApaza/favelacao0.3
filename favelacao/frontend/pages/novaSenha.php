<?php 
    if (!isset($_SESSION)) session_start();

    $_SESSION['user']=$_POST['email'];
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
        <link rel="stylesheet" href="../css/recuperaSenha.css">
        <link rel="sortcut icon" href="../img/logo_Megafone_Grande.png" type="image/x-icon" />
        
        <!-- head jose -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="/favelacao/frontend/pages/templates/menu/css/menu.css"/>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
        <title>Recuperar Senha</title>
  </head>

  <body>

  <header>    
    <?php
      include("./templates/menu/menu.php")
    ?>
  </header>


  <div class="corbug">

    <br><br><br><br><br>

  </div>  

<div class="form-signin">

  <h1 class="txtRecuperar"><img class="imgRecuperar" src="../img/iconeCadeado.png" alt="atendimento">Recupera a Senha</h1>

  <div class="card m-3 mt-6">
    <div class="card-body sombra">       
    <form action="../../backend/api/user/recupera.php" method="POST">
            <p class="respos">Digite a resposta da palavra secreta!</p>
            <!-- <p class="lembre">Lembre-se: Primeira letra maiúscula e o restante minúscula</p> -->

          <?php
              if (!isset($_SESSION)) session_start();
    
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
  </div>
</div>

<div class="corbug">
</div>  

<!-- Modal -->

<div class="modal fade" data-backdrop="static" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Recupera a Senha</h5>
          <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        
        <div class="modal-footer">
         
        </div>
      </div>
    </div>
  </div>
  <!-- Final modal  -->

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