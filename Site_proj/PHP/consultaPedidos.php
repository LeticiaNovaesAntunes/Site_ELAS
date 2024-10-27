<?php
  include_once('conexao.php');
  include_once('funcoes.php');
  include_once('cabecalho.php');
  
  $p = new Projeto();
 ?>
 <head>
  <link rel="stylesheet" href="../CSS/estilo_admin.css"> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="/SITE_PROJ/CSS/estiloNavbarIndex.css">
</head>
<body class="img">
<header class="site-navbar" role="banner">
		<div class="container">
		<div class="row align-items-center">
		<div class="col-11 col-xl-2">
		</div>
		<div class="col-12 col-md-10 d-none d-xl-block">
		<nav class="site-navigation position-relative text-right" role="navigation">
		<ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
		<li class="active"><a href="../index.php"><span>Home</span></a></li>
			<li><a href="admin.php"><span>Voltar</span></a></li>
</nav>
</div>
</div>
</div>
    </header>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container" style="background-color: #ffffff3a; margin-top: 90px;">
      
<div class="table-responsive" >
      <table class="table table-hover">
            <thead><tr>
            <th scope="col">CÓDIGO</th><th scope="col">NOME</th>
            <th scope="col">TELEFONE</th><th scope="col">EMAIL</th>
            <th scope="col">RUA</th><th scope="col">CIDADE</th>
            <th scope="col">BAIRRO</th><th scope="col">ESTADO</th>
            <th scope="col">LINK</th><th scope="col">TIPO</th><th scope="col">AÇÃO</th>
            </tr></thead>
            <tbody>
        <?php
            $dados = $p->buscarpedidos();
           
                        
                    
        ?>
</table>
</div></div>