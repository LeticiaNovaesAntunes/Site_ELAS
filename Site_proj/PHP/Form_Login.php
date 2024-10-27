<?php
session_start();
 include_once('conexao.php');
 include_once('funcoes.php');
 include_once('cabecalho.php');
  
 $p = new Projeto();

 ?>
<!doctype html>
<html lang="pt-br">
<head>
<title>Conecte-se</title>
<meta charset="utf-8">

</head>
<header class="text-light">
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
<h3 class="mb-4 text-center">Conecte-se</h3>
<form action=" " class="signin-form" method="POST">
<?php
  if(isset($_SESSION['msg'])){
      echo($_SESSION['msg']);
      unset($_SESSION['msg']); 
  } ?>
<div class="form-group">
    <input type="email" id="email" class="form-control" placeholder="Email" name="email" required>
</div>
<div class="form-group">
<input id="password-field" type="password" class="form-control" placeholder="Senha" name="senha" required>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<button type="submit" class="form-control btn btn-primary submit px-3">Entrar</button>
</div>
</form>
<p class="w-100 text-center">&mdash; Ou faça o cadastro aqui &mdash;</p>
<div class="social d-flex text-center">
<a href="Form_Cadastro.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>Cadastre-se</a>
<a href="sair.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>Index</a>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.9eD6_Mep8S.js"></script><script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66d64ef99d6551ed","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>
<?php
  if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['email']) && !empty($_POST['email'])){
      
       $email = $_POST['email'];
       $senha = $_POST['senha'];  
      if($p->logar($email, $senha) == true){
      if(isset($_SESSION["Username"])){
        header("location: ../index.php");
      }
  }else{header("location: ../index.php");}

}
?>
</body>
</html>