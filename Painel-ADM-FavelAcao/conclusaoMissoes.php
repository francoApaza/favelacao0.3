<?php

  include_once './backend/config/conexaobd.php';
  $sql2 = "SELECT * FROM medalhas"; 
  $result2 = mysqli_query($conn, $sql2);

  $totalMedalhas1=0;
  $totalMedalhas2=0;
  $totalMedalhas3=0;
  $totalMedalhas4=0;
  $totalMedalhas5=0;
  $totalMedalhas6=0;
  $totalMedalhas7=0;
  $totalMedalhas8=0;
  $totalMedalhas9=0;
  $totalMedalhas10=0;

  $contador=0;

  if ($result2->num_rows>0){
    while($row2= mysqli_fetch_assoc($result2)){
        if ($row2['medalha1']=='TRUE'){
          $totalMedalhas1+=1;
        }
        if ($row2['medalha2']=='TRUE'){
          $totalMedalhas2+=1;
        }
        if ($row2['medalha3']=='TRUE'){
          $totalMedalhas3+=1;
        }
        if ($row2['medalha4']=='TRUE'){
          $totalMedalhas4+=1;
        }
        if ($row2['medalha5']=='TRUE'){
          $totalMedalhas5+=1;
        }
        if ($row2['medalha6']=='TRUE'){
          $totalMedalhas6+=1;
        }
        if ($row2['medalha7']=='TRUE'){
          $totalMedalhas7+=1;
        }
        if ($row2['medalha8']=='TRUE'){
          $totalMedalhas8+=1;
        }
        if ($row2['medalha9']=='TRUE'){
          $totalMedalhas9+=1;
        }
        if ($row2['medalha10']=='TRUE'){
          $totalMedalhas10+=1;
        }
        $contador+=1;
    }
  }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <!-- <title>FavelAçao</title> -->
    <link rel="sortcut icon" href="./img/logo_Megafone_Grande.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
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
            <h1 class="h2">Conclusão de missões </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
          
          <div class="card border border-3">
            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
          </div> 
          <script>
            var ctx = document.getElementById("myChart").getContext("2d");
            var myChart= new Chart(ctx,{
                type:"bar",
                data:{
                    labels:['1º', '2º', '3º', '4º','5º', '6º', '7º', '8º', '9º', '10º'],
                    datasets:[{
                        label:'Missões',
                        
                        data:[<?php echo $totalMedalhas1?>, <?php echo $totalMedalhas2?>, <?php echo $totalMedalhas3 ?>, <?php echo $totalMedalhas4 ?>, <?php echo $totalMedalhas5 ?>, <?php echo $totalMedalhas6 ?>, <?php echo $totalMedalhas7 ?>, <?php echo $totalMedalhas8 ?>, <?php echo $totalMedalhas9 ?>, <?php echo $totalMedalhas10 ?>],
                        backgroundColor:[
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(66, 134, 244, 0.5)',
                        ]

                    }]
                },
                options:{
                    scales:{
                        yAxes:[{
                            ticks:{
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

          </script>

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