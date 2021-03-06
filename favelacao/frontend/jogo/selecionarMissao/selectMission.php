
<!DOCTYPE html>
<html lang="pt-br">

  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./selectMission.css">
    <link rel="sortcut icon" href="../missoes/img/outros/logo_Megafone_Grande.png" type="image/x-icon" />
    <script src="selectMission.js"></script>
    <title>Suas Missões</title>
  </head>
  <body >
  <?php 
      require "../../../templates/menu/menu.php";
    ?>
  <div class="corbug">

    <br><br><br><br><br>

  </div>  
    <div class="container-fluid text-center pb-2">
    <!-- <h1><img class="iconPerfil" src="../img/iconPerfil.png" alt="atendimento"> Suas missões </h1><br/> -->
       <h1 class="titulo">Suas missões </h1>
    </div>


<div class="form-signin">  
  <div class="card m-3 mt-6">
    <div class="card-body sombra">
      <!-- <h5 class="card-title text-align-center h3">Suas Missões</h5> -->
      <div class="card-text">

      <?php if (!isset($_SESSION)) session_start();?>

      <?php $titulo = ["0", "Primeiro titulo", "segundo", "agora o terceiro", "4", "5", "6", "7", "8", "9", "10"]  ?>


  <?php for($i = 1; $i <= 10 ; $i++){ ?> 

    <?php if ($_SESSION['save']['missao'. $i] == "TRUE" ){?>

            <div class="card-text ">
              <button class="botLink btn"  >
                <a class="linkMissao" href= "../missoes/missao<?=$i?>/index.html"><?=$titulo[$i];?> </a>
              </button>
            </div>         				
    
		<?php  }

    else{ ?>

            <div class="card-text">
              <button class="bot btn" ><p>Missão Bloqueada!!</p></button>
            </div>
						
			<?php }?>
      <?php
  }; ?>
           
    </div>
  </div>
</div>

<div class="corbug">

<br><br><br><br>

</div>  

</div>

<footer>
         
  <?php
      include("../../../templates/rodape/rodape.php")
  ?>
</footer>

  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>
