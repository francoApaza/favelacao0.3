

<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/templates/menu/css/menu.css"/>



	<nav class="navbar fixed-top navbar-expand-lg navbar-fixed-top hover">
		<div class="container">
			<a class="navbar-brand" href="../">
				<img src="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/templates/menu/img/logo_favelacao.png" class="logo" alt="FavelAção">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links-menu"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="material-icons">menu</i>
			</button>

			<div id="links-menu" class="collapse navbar-collapse hover">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/index.php">Início</a>
					</li>

					<?php if (!isset($_SESSION)) session_start();
        				if (!isset($_SESSION['user']['email'])){?>
         					<li class="nav-item">
						<a class="nav-link" href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/login.php">Login</a>
					</li>
    
					<?php  }else{?>
						<li class="nav-item">
										<a class="nav-link" href="#"></a>
									</li>
					<?php }?>

					<li class="nav-item">
						<a class="nav-link" href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/quemSomos.php">Quem somos</a> 
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/contato.php">Contato</a> 
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/sobreJogo.php">Sobre o jogo</a> 
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/ajuda.php">Ajuda</a> 
					</li>
					
					<?php if (!isset($_SESSION)) session_start();
        				if (!isset($_SESSION['user']['email'])){?>
         						<li class="nav-item">
						<a class="nav-link" href="#"></a>
					</li>
    
					<?php  }else{?>
						<li class="nav-item">
						<a class="nav-link" href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/perfil.php">Perfil</a>
					</li>
					<?php }?>
					<?php if (!isset($_SESSION)) session_start();
        				if (!isset($_SESSION['user']['email'])){?>
         						<li class="nav-item">
						<a class="nav-link" href="#"></a>
					</li>
    
					<?php  }else{?>
						<li class="nav-item">
						<a class="nav-link"  href="<?php $_SERVER['SERVER_NAME'] ?>/favelacao/frontend/pages/validacoes/validaLogin.html" >Sair</a>
					</li>
					<?php }?>






							
					<?php if (!isset($_SESSION)) session_start();
        				if (!isset($_SESSION['user']['email'])){?>
         				<li class="nav-item">
					
					</li>
    
					<?php  }else{?>
						<li class="nav-item">
					<img src="../img/<?php echo $_SESSION['user']['imgAvatar'];?>" alt="Avatar" width="50px" class="rounded-circle imgMenu">
					</li>
					<?php }?>





				

				
				</ul>
			</div>
		</div>
	</nav>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

