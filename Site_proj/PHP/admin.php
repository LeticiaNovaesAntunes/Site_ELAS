<?php
  include('Conexao.php');
  include_once('cabecalho.php');
  include_once('navbar2.php');
?>
<head>
  <link rel="stylesheet" href="../CSS/estilo_admin.css"> 
</head>
<body class="img">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card" style="background-color: #ffffff3a;">
        <div class="row no-gutters">
            <div class="card-body">
            <div class="brand-wrapper">
            <h1 style=" margin-left:27%; font-size: 30px;">Selecione uma das opções abaixo:</h1>
    <div class="btn btn-block login-btn mb-4"><a class="botao"  href="consultaUsuario.php">CONSULTAR USUÁRIOS</a></div>
    <div class="btn btn-block login-btn mb-4"><a class="botao" href="consultaPedidos.php">CONSULTAR PEDIDOS</a></div>
</div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
</body>   
