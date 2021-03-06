<?php 
  if (!isset($_SESSION)) session_start();

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>FavelAçao</title> 
    
    <link rel="sortcut icon" href="./img/logo_Megafone_Grande.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--Icones  Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Link de chart.js para obter gráficos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .corcardcomentario{
        background-color: 	#8ECAE6;
      }


      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="./dashboard.css" rel="stylesheet">
  </head>

  <body>
    <!-- Header   -->
    <?php
      include("./menus/menuHorizontal.html")
    ?>
    
    <div class="container-fluid">
      <div class="row">

        <!-- Nav vertical esquerdo -->
        <?php
            include("./menus/menuVertical.html")
        ?>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Comentários:</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                </div>
            </div>
            
              <!-- cards dos comentários  -->
            <div class="container">  
              <div class="row">

                <?php
                  include_once './backend/config/conexaobd.php';
        
                    // if (!isset($_SESSION)) session_start();
                    
                    $sql = "SELECT * FROM contato"; 
                    $result = mysqli_query($conn, $sql);
                    // $idmissoes=[];
                    if ($result->num_rows>0){
                      while($row= mysqli_fetch_assoc($result)){
                        // $idmissoes[]=$row;
                        // json_encode($idmissoes);
                ?>

                    <div class="col-sm-5 m-2">
                      <div class="card border">
                        <div class="card-header corcardcomentario">
                        <h5 class="card-title">Autor: <?php  echo $row['nome'] ?> </h5>
                        </div>
                        <div class="card-body">
                          <h6>Comentário:</h6>
                          <blockquote class="blockquote mb-0">
                           
                            <p><?php  echo $row['mensagem'] ?></p>
                            <footer class="blockquote-footer">Registrado em: <cite title="Source Title"><?php  echo $row['data'] ?></cite></footer>
                          </blockquote>
                        </div>
                      </div>
                    </div>

                <?php }}  ?>

            

              </div>
            </div>
              <!-- fim de cards de comentários -->
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