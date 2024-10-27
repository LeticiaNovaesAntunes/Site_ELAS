<?php
  include_once('conexao.php');
  include_once('funcoes.php');
  include_once('cabecalho.php');
  
  $p = new Projeto();
 ?>
<!doctype html>
<html lang="pt-BR">
<head>
<title>Cadastre-se</title>
</head>
<header class="text-light">
<?php
if (isset($_SESSION['email'])){
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg><h6 class="w-100 text-left">'.$_SESSION['Username'].'!! </h6>';
        $_SESSION['alerta'] = '';
    }
    else{
        echo '';

    } ?>
    </header>
<body class="img js-fullheight">
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<h3 class="mb-4 text-center">Cadastre-se</h3>
<form action=" " class="signin-form" method="POST" target="mensagem">
<div class="form-group">
<?php
    if(isset($_SESSION['alerta'])){
        echo($_SESSION['alerta']);
        unset($_SESSION['alerta']); 
    } ?>
<input type="text" class="form-control" placeholder="Nome do Usuário" name="username" required>
</div>
<div class="form-group">
    <input type="email" id="email" class="form-control" placeholder="Email" name="email" required>
</div>
<div class="form-group">
<input id="password-field" type="password" class="form-control" placeholder="Senha" name="senha" required>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<button type="submit" class="form-control btn btn-primary submit px-3">CADASTRAR</button>
</div>
</form>
<p class="w-100 text-center">&mdash; Ou faça login aqui &mdash;</p>
<?php
  if(isset($_POST['username']) && !empty($_POST['username']) && 
  isset($_POST['email']) && !empty($_POST['email']) && 
  isset($_POST['senha']) && !empty($_POST['senha'])){
      
       $username = $_POST['username'];
       $email = $_POST['email'];
       $senha = $_POST['senha'];  

    if($p->cadastrar($username,$email,$senha) == true){
        echo '<p style="color:#000; text-align: center;"> Usuário Cadastrado com sucesso !!</p>';

    }else{
        echo ' <div class="alert alert-danger" role="alert">
        Falha ao cadastrar usuário !!</div>';
    }

}
?>
<div class="social d-flex text-center">
<a href="Form_Login.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>Conecte-se</a>
<a href="../index.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>Index</a>
</div>
</div><br>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.9eD6_Mep8S.js"></script><script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66d64ef99d6551ed","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>


</div>
</div>
</div>
</section>
</body>
</html>