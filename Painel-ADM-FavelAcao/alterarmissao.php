<?php
  if (isset($_REQUEST['sucesso'])) {
    echo "<script>
    alert('Missão atualizada com sucesso!'); 
    </script>";
  }

  if (isset($_REQUEST['delete'])) {
    echo "<script>
    alert('Missão deleta!'); 
    </script>";
  }
// window.location.href='../../alterarmissao.php'
    if (!isset($_SESSION)) session_start();
  
    // if (!$_SESSION)
    //   echo "<script>
    //     alert('É necessário realizar Login'); 
    //     window.location.href='../../favelacao/frontend/login.php' 
    //     </script>";
?>

<!Doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="sortcut icon" href="./img/logo_Megafone_Grande.png" type="image/x-icon" />

    <title>Alterar Missão</title>

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
            <h1 class="h2 text-secondary"> Alterar Missão </h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr class="textoAlterar pt-3">
                  <th>Título da missão</th>
                  <th>Personagem</th>
                  <th>Atualizar</th>
                  <th>Deletar</th>
                </tr>
              </thead>
            
            <?php
              include_once './backend/config/conexaobd.php';
    
                // if (!isset($_SESSION)) session_start();
                
                $sql = "SELECT * FROM missao"; 
                $result = mysqli_query($conn, $sql);
                // $idmissoes=[];
                if ($result->num_rows>0){
                  while($row= mysqli_fetch_assoc($result)){
                    // $idmissoes[]=$row;
                    // json_encode($idmissoes);
                    
            ?>

              <tbody> 
                <tr class="textoAlterar pt-3">
                  <td class="textoAlterar pt-3"><?php echo $row['tituloMissao']?></td>
                  <td class="textoAlterar pt-3"><?php echo $row['personagem']?></td>
                  <td><a href="./atualizarMissao.php?idmissao= <?php echo $row['idmissao']?>" type="submit" class="btn neo-button"><i class=" fa fa-pencil"></i></a></td>
                  <td><a href="./validaDeletemissao.php?idmissaod=<?php echo $row['idmissao']?>" type="submit" class="btn neo-button"><i class=" fa fa-trash"></i></a></td>
                </tr>
              </tbody>

            <?php
            }} ?>
   
            </table>
          </div>

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