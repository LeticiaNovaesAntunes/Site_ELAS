<?php
include_once('conexao.php');
include_once('funcoes.php');

$p = new Projeto();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Editar dados</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../CSS/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="/SITE_PROJ/CSS/estiloNavbarIndex.css">
</head>
<header class="site-navbar" role="banner">
<div class="container">
		<div class="row align-items-center">
		<div class="col-11 col-xl-2">
		</div>
		<div class="col-12 col-md-10 d-none d-xl-block">
		<nav class="site-navigation position-relative text-right" role="navigation">
		<ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
		<li class="active"><a href="../index.php"><span>Home</span></a></li>
			<li><a href="consultaPedidos.php"><span>Voltar</span></a></li>
</nav>
</div>
</div>
</div>
</header>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Excluir solicitação:</h2>
                    <form action=" " method="POST">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                             <label class="label">Código da solicitação</label>
							    <input class="input--style-4" type="number"  name="id" required>
                            </div>
                        </div>
                    </div>
                    <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Excluir</button>
                        </div>
                    </form>
                    <?php
  if(isset($_POST['id']) && !empty($_POST['id'])){
       $id = $_POST['id'];  

    if($p->excluirPedidos($id) == true){
        echo '<p style="color: green; text-align: center;"> Solicitação deletada!!</p>';

    }else{
        echo ' <div class="alert alert-danger" role="alert">
        Falha ao excluir solicitação !!</div>';
    }

}
?>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../JS/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->