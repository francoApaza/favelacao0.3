<!doctype html>
<html lang="pt-br">
  <head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/cadastroUsuario.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="sortcut icon" href="../img/logo_Megafone_Grande.png" type="image/x-icon" />

  <title>Cadastro</title>
  </head>

  <body>

      <header>    
        <?php
          include("./templates/menu/menu.php")
        ?>
      </header>


    <main>


    <div class="container-fluid text-center pb-2 titulo">
       <h1><img class="iconPerfil" src="../img/iconPerfil.png" alt="atendimento"> Faça seu cadastro </h1><br/>
    </div>
      
      
        <div class="card-body">
          <form action="../../backend/api/user/create.php" method="POST">
            
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" maxlength="25"  minlength="5"  class="form-control" pattern="^[^-\s][a-zA-ZÀ-ú ]*" placeholder="Digite seu nome" required/>
            
                <label>Data de nascimento:</label>
                <input type="date" name="dataNascimento" maxlength="10" pattern="dd-mm-yyyy" min="1900-01-01" max="2020-01-30" class="form-control"/> 
            
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" maxlength="50" placeholder="Digite seu e-mail"required/>
            
                <label>Telefone:</label>
                <input type="text" name="telefone" class="form-control" pattern="^\d{2}-\d{5}-\d{4}$" placeholder="xx-xxxxx-xxxx" required/>
                <!-- pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})"  -->
                <label>Senha:</label>
                <input type="password" name="senha" class="form-control" minlength="8" placeholder="Digite uma senha com 8 dígitos" required/>
            
                <label>Confirme:</label>
                <input type="password" name="confirmarSenha" class="form-control" placeholder="Confirme a senha" required/>
               
                <label>Escolha a categoria da palavra secreta:</label><br/>
                <select class="selecao mb-3" name="categoriaSecreta" id="categoriaSecreta" required>
                  <option value="Escolha uma opçao" selected>Escolha uma opção</option>
                  <option value="Desenho preferido">Desenho preferido</option>
                  <option value="Super herói preferido">Super herói preferido</option>
                  <option value="Nome do seu animal de estimação">Nome do seu animal de estimação </option>
                  <option value="Nome do seu melhor amigo">Nome do seu melhor amigo</option>
                </select><br/>
                
                <label>Resposta da palavra secreta:</label>
                <input type="text" name="respSecreta" id="respSecreta" class="form-control" pattern="^[^-\s][a-zA-ZÀ-ú ]*" required/>
                
                <label >Apelido:</label>
                <input type="text" name="apelido" id="apelido"  class="form-control" pattern="^[^-\s][a-zA-ZÀ-ú ]*" placeholder="Digite seu apelido" required/>
            
              <div class="container">
                <div class="row">

                <div class="col-sm">
                  <div class="personagem">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="imgAvatar" id="imgAvatar" value="perso1.png" required/>
                      <img  src="../img/perso1.png" alt="person1" class="">
                    </div>
                  </div>
                </div>

                <div class="col-sm">
                  <div class="personagem">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="imgAvatar" id="imgAvatar" value="perso2.png" required/>
                      <img  src="../img/perso2.png" alt="person1" class="">
                    </div>
                  </div>
                </div>

                <div class="col-sm">
                  <div class="personagem">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="imgAvatar" id="imgAvatar" value="perso3.png" required/>
                      <img  src="../img/perso3.png" alt="person1" class="">
                    </div>
                  </div>
                </div>

                </div> 
              </div>
                        
            <button name="btn_cadastra" type="submit" class="btn btn-block boton mt-3"> Cadastre-se</button>
                        
            <a class="acor" href="./login.php"> Já tem conta? </a><br>

          </form>
        </div>
        <div>

        </div>
      </main>

  <footer>
    <?php
      include("./templates/rodape/rodape.php")
    ?>
  </footer>

 
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
