<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="/SITE_PROJCSS/owl.carousel.min.css">
    <link rel="stylesheet" href="/SITE_PROJCSS/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="/SITE_PROJCSS/style.css">
		<link rel="stylesheet" href="/SITE_PROJ/CSS/estiloNavbarIndex.css">
  </head>
  <body >
	<header class="site-navbar" role="banner">
		<div class="container">
		<div class="row align-items-center">
		<div class="col-11 col-xl-2">
		</div>
		<div class="col-12 col-md-10 d-none d-xl-block">
		<nav class="site-navigation position-relative text-right" role="navigation">
		<ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
		<li class="active"><a href="/SITE_PROJ/index.php"><span>Home</span></a></li>
			<li><a href="/SITE_PROJ/PHP/instituicoes.php"><span>Buscar Instituição</span></a></li>
        <?php
        if(isset($_SESSION['Username'])){
            echo'
			<li><a href="/SITE_PROJ/PHP/Form_CadastroInstituicao.php"><span>Sugerir Instituição</span></a></li>
			<li class="has-children">
			<a><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
			<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
		  </svg>'.$_SESSION['Username'].' </span></a>
			<ul class="dropdown arrow-top">
			  <li><a href="/SITE_PROJ/PHP/Form_editar.php">Editar Perfil</a></li>
			  <li><a href="/SITE_PROJ/PHP/sair.php">Sair</a></li>
			  </ul>
			  </li> ';
			  if($_SESSION['tipo']=='admin'){
				echo'
				<li><a href="/SITE_PROJ/PHP/admin.php"><span>Admin</span></a></li>';
			  }
        }else{
                echo'<li><a href="PHP/Form_Login.php"><span>Entrar</span></a></li>';
           
            }
        ?>

		<li><a href="#footer"><span>Contato</span></a></li>
		</ul>
		</nav>
		</div>
		<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
		</div>
		</div>
		</div>
		</header>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>