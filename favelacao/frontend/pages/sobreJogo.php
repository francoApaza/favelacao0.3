<?php
$url = "http://localhost/favelacao/backend/api/mural/read.php";
 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
$desenhos = json_decode(curl_exec($ch));


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="sortcut icon" href="../img/logo_Megafone_Grande.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/sobreJogo.css">

    
    <title>Sobre o Jogo</title>

  </head>


<body>
  <header>
    <?php 
      require "./templates/menu/menu.php";
    ?>
</header>
    <main>
  <div class="container">

      <h1 class="tituloSobre"><img class="iconPlay" src="../img/iconPlay.png" alt="">Sobre o Jogo</h1>
      <p class="textSobre">
          Os moradores de uma comunidade estão tendo um grande problema com lixo ao céu aberto. <br />
          Para solucionar esse problema Hélio e sua turma  decidem ajudar, porém sua turma é pequena, <br />
          então Hélio recruta mais crianças no FavelAção para combater esse mal.<br /> <br />
          Você é a próxima criança, topa fazer parte dessa aventura?
          
  </p>

  </div>

  <?php if (!isset($_SESSION)) session_start();
        if (!isset($_SESSION['user']['email'])){?>
         <div class="button">
         <a href="./login.php"><button class="buttonJogar">JOGAR</button></a>
         
  </div>
    
      <?php  }else{?>
        <div class="button">
  <a href=../jogo/selecionarMissao/selectMission.php><button class="buttonJogar">JOGAR</button></a>
  </div>
    <?php }?>

  <div class="missao">
    <h1>Mural das Missões <img class="iconPlay" src="../img/iconAction.png" alt=""></h1>

    <div class="container">
    <div class="row">

    <?php
   foreach($desenhos as $desenho) :
    ?> 


      <div class="col-sm-3">
        
      <div class="card">
        <img class="card-img-top" src="../img/mural/<?=$desenho->imagem ?>" alt="Desenho">
        <div class="card-body">
          <h5 class="card-title"><?=$desenho->nome ?></h5>
        </div>
      </div>
      </div>
      
      <?php
        endforeach;
  
    ?>

          </div>
        </div>
        </div>
      </div>
      </div>
    <div> 
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

