<!Doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">

    <link rel="sortcut icon" href="./img/logo_Megafone_Grande.png" type="image/x-icon" />
          
    <title>Adicionar Missão</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- icones boottrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- chart.js gráficos  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


    <!-- Custom styles for this template -->
    <link href="./dashboard.css" rel="stylesheet">
  </head>
  <body>
              <!-- Header   -->
    <?php
      include("./menus/menuHorizontal.html")
    ?>
    
    <div class="container">
      <div class="row">
          <!-- Nav vertical esquerdo -->
        <?php
            include("./menus/menuVertical.html")
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <h1 class="h2 text-secondary"> Adicionar Missão </h1>

          </div>

          <form action="../../Painel-ADM-FavelAcao/backend/missao/create.php?idmissao" method="POST">
            <div class="card-group">
              <div class="card">
                <div class="card-body">
                <label>Título da missão: </label>
                  <input type="text" name="tituloMissao" id="tituloMissao" class="mt-3 form-control" maxlength="25"  minlength="3"  class="form-control" pattern="^[^-\s][a-zA-ZÀ-ú ]*" placeholder="Digite um título" required/>

                  <label class="mt-3" >Missão: </label>
                  <textarea type="text" name="missao" class="mt-3 form-control" required> </textarea>
                </div>
              </div>



              <div class="card">
                <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                 <label class="selecaolabel">Personagem: </label>
                  <select class="selecao mb-3" name="personagem" id="personagem">
                    <option value="Hélio" selected>Escolha uma opção</option>
                    <option value="Hélio">Hélio</option>
                    <option value="Babi">Babi</option>
                    <option value="João">João</option>
                    <!-- <option value="Rato">Rato</option> -->
                  </select>
                </div>
                  <!-- <div class="container"> -->
                    <div class="row">

                      <div class="col-sm p-1">
                        <div class="personagens">
                          <img class="imagemperson" src="./img/character/helioSaudacao.png" alt="personagem1">
                          <label  class="nomes">Hélio</label>
                        </div>
                      </div>

                      <div class="col-sm p-1">
                        <div class="personagens">
                          <img class="imagemperson" src="./img/character/babiFeliz.png" alt="personagem2">
                          <label class="nomes">Babi</label>
                        </div>
                      </div>

                      <div class="col-sm p-1">
                        <div class="personagem">
                          <img class="imagemperson" src="./img/character/joaoSaudacao.png" alt="personagem3">
                          <label class="nomes ">João</label>
                        </div>
                      </div>

                      
                     
                    </div> 
                  <!-- </div> -->

                </div>
                
              </div>


              <div class="card">
                <div class="card-body">
                  <div class="row-2 expressoes d-grid gap-2 d-md-flex justify-content-md-end">
                    <label class="selecaolabel">Expressão: </label>
                    <select class="selecao" name="expressao" id="expressao">
                      <option value="Feliz" selected>Escolha uma opção</option>
                      <option value="Feliz">Feliz</option>
                      <option value="Triste">Triste</option>
                    </select>
                  </div>
                  <div class="row-2 margem d-grid gap-2 d-md-flex justify-content-md-end">
                    <label class="selecaolabel">Posição: </label>
                    <select class="selecao" name="posicao" id="posicao">
                      <option value="Braço para cima" selected>Escolha uma opção</option>
                      <option value="Braço para cima">Braço para cima</option>
                      <option value="Braço para baixo">Braço para baixo</option>
                    </select>
                </div>
              </div>
                
              </div>
            </div>

            <div class="container card-body cenarios">

            <label class="mt-2">Cenário: </label>
                  <div class="row">

                    <div class="col-sm ">
                      <div class="cenarios">
                        <input class="btnradio1" type="radio" name="cenario" id="cenario" value="cenario1.jpg"  checked />
                        <a href="./img/background/bg1.jpg"> <img class="imagembg" src="./img/background/bg1.jpg" alt="backg1"></a>
                      </div>
                    </div>

                    <div class="col-sm">
                      <div class="cenarios">
                        <input class="btnradio1" type="radio" name="cenario" id="cenario" value="cenario2.jpg" />
                        <a href="./img/background/bg2.jpg"> <img  class="imagembg" src="./img/background/bg2.jpg" alt="backg2"></a>
                      </div>
                    </div>

                    <div class="col-sm">
                      <div class="cenarios">
                        <input class="btnradio1" type="radio" name="cenario" id="cenario" value="cenario3.jpg" />
                        <a href="./img/background/bg3.jpg"> <img  class="imagembg" src="./img/background/bg3.jpg" alt="backg3"></a>
                      </div>
                    </div>

                    <div class="col-sm">
                      <div class="cenarios">
                        <input class="btnradio1"  type="radio" name="cenario" id="cenario" value="cenario4.jpg" />
                        <a href="./img/background/bg4.jpg"> <img  class="imagembg" src="./img/background/bg4.jpg" alt="backg4"></a>
                      </div>
                    </div>
                      
                  <div> 
                    <div class="col-sm">
                      <div class="cenarios">
                        <label>Outro: </label>
                        <div class="input-group mb-3">
                          <input type="file" name="outrocenario" class="btnarquivo form-control">
                          <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
                        </div>
                        <!-- <input class="btnarquivo" type="file" name="cenario" class="form-control" /> -->
                      </div>
                    </div>
                  </div>
                    <div class="btnsalvar d-grid gap-2 d-md-flex justify-content-md-end">
                      <button name="btnsalvaMissao" type="submit" class="btn bg-success mb-3"> Salvar </button>
                    </div>
                </div>
              </div>
            </div>
          </form>
      
        </main>
      </div>
    </div>

  
    <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
  </body>
</html>