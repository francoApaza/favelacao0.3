<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.80.0">
    <title>FavelAçao</title>

    <link rel="sortcut icon" href="./img/logo_Megafone_Grande.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- icones boottrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- chart.js gráficos  -->
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
    
  <!--card usuários cadastrados  -->
  <?php
  
    include_once './backend/config/conexaobd.php';

    $sql = "SELECT * FROM usuarios"; 
    $result = mysqli_query($conn, $sql);
  
    $totalUsuarios=0;
    // $totalId=0;
    // $totalUsuariosDeletados=0;

    if ($result){
      while($row= mysqli_fetch_assoc($result)){
        $totalUsuarios+=1;
        // $ultimoId=$totalUsuarios;
        // if ($row['id']==$ultimoId){
        //   $totalId=$row['id']-1;
        // }else{
        //   $totalId=$row['id'];
        // };
      }
    }      
  ?>
  
<!-- card deletados -->
<?php

  $sql = "SELECT * FROM usuariosdeletados"; 
  $result = mysqli_query($conn, $sql);

  // $totalUsuarios=0;
  // $totalIddeletados=0;
  $totalUsuariosDeletados=0;

  if ($result){
    while($row= mysqli_fetch_assoc($result)){
      $totalUsuariosDeletados+=1;
      // $ultimoId=$totalUsuariosDeletados;
      // if ($row['id']==$ultimoId){
      //   $totalIddeletados=$row['id']-1;
      // }else{
      //   $totalIddeletados=$row['id'];
      // };
     
    }
  } 

?>

<!-- gráfico pizza -->

<?php
$url = "http://localhost/Painel-ADM-FavelAcao/backend/usuarios/read.php";
 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$idades = json_decode(curl_exec($ch));

$idade6=0;
$idade7=0;
$idade8=0;
$idade9=0;
$idadeOutros=0;
$faixa=0;

  foreach ( $idades as $e )

    switch ($e->faixas) {
      case 6:
          $idade6=$e->quantidadeIdade;
          break;
      case 7:
          $idade7=$e->quantidadeIdade;
          break;
      case 8:
          $idade8=$e->quantidadeIdade;
          break;
      case 9:
          $idade9=$e->quantidadeIdade;
          break;
      case 'Outros':
          $idadeOutros=$e->quantidadeIdade;
          break;
      default:
        
        echo "Nada encontrado";
        break;    
  
        
  }

?>  

<!--Gráfico barra -->
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

<!-- Cadastrados no mês -->

<?php
$nome = '';
$id = '';

//query to get data from the table--------------------
// $sql = "SELECT * from `usuarios` ";
$sql3 = "SELECT COUNT(data) AS id FROM usuarios WHERE data > DATE_SUB(CURDATE(),INTERVAL 1 MONTH) ";
$result3 = mysqli_query($conn, $sql3);

// loop though the returned data--------------------
while ($row = mysqli_fetch_array($result3)) {

  $id3 = $id . ''.$row['id'].',';

}

  $id3 = trim($id3, ",");

?>

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
              <h1 class="h2 text-secondary"> Painel Geral </h1>
          </div>

          <!-- Cards  de dados -->
          <div>
             <!-- Content Row -->
              <div class="row">

                <!-- Usuários Cadastrados-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2  bg-info bg-gradient">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <span>Usuários</span>
                                  
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                        Cadastrados</div>

                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $totalUsuarios?> </div>

                                </div>
                                <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Usuários cadastrados no mes -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2 bg-success bg-gradient">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <span>Usuários</span>
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                        cadastrados no (mês)</div>

                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $id3; ?></div>
                                </div>

                                <div class="col-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                                      <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                                      <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Usuários Deletados-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2  bg-danger bg-gradient">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <span class="corcardinfo">Usuários</span>
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                        Deletados</div>

                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalUsuariosDeletados ?></div>

                                </div>
                                <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
                                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                  <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              </div>            
          </div>
            

          <!-- Primeiro  Graficos!!! -->
          <div>

              <div class="row">

                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Idade das crianças cadastradas </h5>
                      <div class="card border border-1">
                        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
            
                
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Conclusão de missões por criança</h5>
                      <div class="card border border-1">
                        <canvas class="my-4 w-100" id="myIdade" width="900" height="380"></canvas>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
          <div>
          <!-- fim  -- -->

          <script>
            var ctx = document.getElementById("myChart").getContext("2d");
            var myPieChart= new Chart(ctx,{
                type:"pie",
                data:{
                    labels:['6', '7', '8', '9','Outros'],
                    datasets:[{
                        label:'Num dados',
                        data:[ <?php { echo "$idade6"; } ?>, <?php { echo "$idade7"; } ?>, <?php { echo "$idade8"; } ?>,<?php { echo "$idade9"; } ?>, <?php { echo "$idadeOutros"; } ?>],
                        backgroundColor:[
                            'rgb(66, 134, 244, 0.5)',
                            'rgb(74, 33, 72, 0.5)',
                            'rgb(48, 12, 211,  0.5)',
                            'rgb(329, 49, 50, 0.5)',
                            'rgb(29, 39, 50, 0.5)',
                            'rgb(49, 39, 2, 0.5)',

                        ]

                    }]
                },
                options:{
                    cutoutPercentage: 10,
                    // title: {
                    //   display: true,
                    //   text: "Grafico um",
                    //   fontSize: 55,
                    //   fontColor: "#453222"
                    // },
                    animation: {
                      animateScale: true
                    },
                    legend: {
                      position: 'bottom',
                      labels: {
                        boxWidth: 16,
                        fontSize: 12,
                      }
                    },
                    plugins: {
                      color: '#4ddd',
                      anchor:'end',
                      align: 'start',
                      offset: -10,
                    },
                }
            });

          </script>

         

         <!-- Segundo gráfico conclusão de missóes   -->
          <script>
            var ctx = document.getElementById("myIdade").getContext("2d");
            var myIdade= new Chart(ctx,{
                type:"bar",
                data:{
                    labels:['1°', '2°', '3°', '4°','5°', '6°', '7°', '8°', '9', '10°'],
                    datasets:[{
                        label:'Missão',
                        data:[<?php echo $totalMedalhas1?>, <?php echo $totalMedalhas2?>, <?php echo $totalMedalhas3 ?>, <?php echo $totalMedalhas4 ?>, <?php echo $totalMedalhas5 ?>, <?php echo $totalMedalhas6 ?>, <?php echo $totalMedalhas7 ?>, <?php echo $totalMedalhas8 ?>, <?php echo $totalMedalhas9 ?>, <?php echo $totalMedalhas10 ?>],
                        backgroundColor:[
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
                            'rgb(32, 108, 223,0.6)',
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
                    },
                    legend: {
                      position: 'bottom',
                    }
                }
            });

          </script>


          <div class="mt-3 text-secondary">   
            <h4><b>Comentarios:</b></h4>
            <hr>
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
                      <div class="card  border">
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