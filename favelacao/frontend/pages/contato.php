<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="sortcut icon" href="../img/logo_Megafone_Grande.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/contato.css">
    
    <title>Página de Contato</title>
  </head>


  <body>

    <?php 
      require "./templates/menu/menu.php";
    ?>

      <div class="titulo">
       <h1><img class="imgContato" src="../img/imgContato.png" alt="atendimento">Contato</h1>
      </div>
       <main>
  <div class="corbug">
 
  </div>
  
  <div class="card-body w-75 h-25" id="telalogin">
   
       

        <form action="../../backend/api/contato/creat.php" name="" id="idformContato" method="post"  class="needs-validation" >
        
          <div class="form-group col-sm">
                <label >Nome*</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome" maxlength="25"  minlength="3"  class="form-control"
                
                pattern="^[^-\s][a-zA-ZÀ-ú ]*" required>
                <label >E-mail*</label>
                <input type="email" name="email" class="form-control" id="nome" placeholder="Digite seu e-mail"maxlength="50"  required>
              
                <label>Assunto*</label>
                <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Digite o assunto" required>
                <label for="mensagem">Mensagem*</label>
                <textarea name="mensagem" class="form-control" rows="4" id="mensagem" required></textarea>
                <button type="submit" class="btn btn-block boton">Enviar</button>

              </div>
          

        </form> 
   </div>      

    <div class="corbug">
      <br><br><br><br><br><br><br>
    </div>
  </main>
  
  <footer>
    <?php 
      require "./templates/rodape/rodape.php";
      ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>

</html>