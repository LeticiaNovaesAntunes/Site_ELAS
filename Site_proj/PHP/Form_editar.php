<?php
include_once('conexao.php');
include_once('funcoes.php');
include_once('navbar2.php');
    
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
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Editar dados:</h2>
                    <form action=" " method="POST">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                             <label class="label">Nome antigo:</label>
                               
							    <input class="input--style-4" type="text"  name="VelhoUsername" value="<?=$_SESSION['Username']?>" readonly>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Novo Nome:</label>
                                
                                <input class="input--style-4" type="text"  name="username" required>
                            </div>
                        </div>
                    </div>
					<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email antigo:</label>
                                    <input class="input--style-4" type="email" name="VelhoEmail" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Novo Email:</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                                    <label class="label">Novo Senha:</label>
                                    <input class="input--style-4" type="password" name="senha" required>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Editar</button>
                        </div>
                    </form>
                  <?php
                  if(isset($_POST['VelhoUsername']) && !empty($_POST['VelhoUsername']) &&
                  isset($_POST['username']) && !empty($_POST['username']) && 
              isset($_POST['VelhoEmail']) && !empty($_POST['VelhoEmail']) && 
              isset($_POST['email']) && !empty($_POST['email']) && 
              isset($_POST['senha']) && !empty($_POST['senha'])){
                 
                  $p = new Projeto();
                  
                  $Vnome = $_POST['VelhoUsername'];
                  $nome = $_POST['username'];
                  $Vemail = $_POST['VelhoEmail'];
                  $email = $_POST['email'];
                  $senha = $_POST['senha'];

                  if($p->alterar($Vnome ,$nome, $Vemail, $email, $senha) == true){
                        
                   $_SESSION['Username'] = $nome;
                   $_SESSION['email'] = $email;
                    echo '<p style="color:green; text-align: center;"> Dados alterados com sucesso !!</p>';

                }else{
                    echo ' <div class="alert alert-danger" role="alert">
                    Falha ao alterar dados !!</div>';
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