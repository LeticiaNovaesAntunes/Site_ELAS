<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="/SITE_PROJ/CSS/estiloNavbarIndex.css">
    <link rel="stylesheet" href="/SITE_PROJ/CSS/estilo_tabelas.css">
</head>
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
			  <li><a href="/SITE_PROJ/PHP/sair.php">Sair</a></li>
			  </ul>
			  </li> ';
			  if($_SESSION['tipo']=='admin'){
				echo'
				<li><a href="admin.php"><span>Admin</span></a></li>';
			  }
        }else{
                echo'<li><a href="Form_Login.php"><span>Entrar</span></a></li>';
           
            }
        ?>

		<li><a href="/SITE_PROJ/index.php#footer"><span>Contato</span></a></li>
		</ul>
		</div>
		<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: fixed; top: 78px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
    <div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0">
                <form id="search-form" action="busca.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control" name="filtrar">
                                        <option value="Nome">Nome da Instituição</option>
                                        <option value="Cidade">Cidade</option>
                                        <option value="Estado">Estado</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                    <input type="text" placeholder="Search..." class="form-control" id="pesquisa" name="pesquisa">
                                </div>
                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                    <button type="submit" class="btn btn-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </nav>
        </header>
        </div>
    </div>
</div>
</div>
		</div>
		</div>
		</header>
        <body>
        <div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl" style="position: absolute; top: 200px;">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Nome da Instituição</th>
						      <th>Localização</th>
						      <th>Tipo</th>
						      <th>&nbsp;</th>
						    </tr>

<!-- partial -->
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>



</body>
</html>