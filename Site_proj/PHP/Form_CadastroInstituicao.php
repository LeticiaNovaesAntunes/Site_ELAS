<?php
include_once("navbar2.php");
include_once("Conexao.php");
include_once("Funcoes.php");


$p = new Projeto();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Cadastro Instituição</title>

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
                    <h2 class="title">Sugerir Instituição</h2>
                    <form action=" " method="POST">
					<div class="input-group">
                            <label class="label">Nome da Instituição</label>
                            <div class="rs-select2 js-select-simple select--no-search">
							<input class="input--style-4" type="text" name="nome">
                        </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Cidade</label>
                                    <input class="input--style-4" type="text" name="cidade">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tipo</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Pública
                                            <input type="radio" checked="checked"  value="Pública" name="tipo">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Particular
                                            <input type="radio" name="tipo" value="Particular">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Rua</label>
                                    <input class="input--style-4" type="text" name="rua">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Bairro</label>
                                    <input class="input--style-4" type="text" name="bairro">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Estado</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="estado">
                                    <option>Acre (AC)</option>
                                    <option>Alagoas (AL)</option>
                                    <option>Amapá (AP)</option>
                                    <option>Amazonas (AM)</option>
                                    <option>Bahia (BA)</option>
                                    <option>Ceará (CE)</option>
                                    <option>Distrito Federal (DF)</option>
                                    <option>Espírito Santo (ES)</option>
                                    <option>Goiás (GO)</option>
                                    <option>Maranhão (MA)</option>
                                    <option>Mato Grosso (MT)</option>
                                    <option>Mato Grosso do Sul (MS)</option>
                                    <option>Minas Gerais (MG)</option>
                                    <option>Pará (PA)</option>
								    <option>Paraíba (PB)</option>
                                    <option>Paraná (PR)</option>
                                    <option>Pernambuco (PE)</option>
                                    <option>Piauí (PI)</option>
                                    <option>Rio de Janeiro (RJ)</option>
                                    <option>Rio Grande do Norte (RN)</option>
                                    <option>Rio Grande do Sul (RS)</option>
                                    <option>Rondônia (RO)</option>
                                    <option>Roraima (RR)</option>
                                    <option>Santa Catarina (SC)</option>
                                    <option>São Paulo (SP)</option>
                                    <option>Sergipe (SE)</option>
                                    <option>Tocantins (TO)</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Telefone</label>
                                    <input class="input--style-4" type="text" name="telefone">
                                </div>
                            </div>
                        </div>
						<div class="input-group">
                            <label class="label">Link Site</label>
                            <div class="rs-select2 js-select-simple select--no-search">
							<input class="input--style-4" type="text" name="link">
                        </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">SUGERIR</button>
                        </div>
                    </form>
                    <?php
  if(isset($_POST['nome']) && !empty($_POST['nome']) && 
  isset($_POST['cidade']) && !empty($_POST['cidade']) && 
  isset($_POST['rua']) && !empty($_POST['rua']) && 
  isset($_POST['bairro']) && !empty($_POST['bairro']) && 
  isset($_POST['estado']) && !empty($_POST['estado']) && 
  isset($_POST['tipo']) && !empty($_POST['tipo']) && 
  isset($_POST['email']) && !empty($_POST['email']) && 
  isset($_POST['telefone']) && !empty($_POST['telefone']) && 
  isset($_POST['link']) && !empty($_POST['link'])){
      
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $link = $_POST['link'];
    $tipo = $_POST['tipo'];

    if($p->solicitacoes($nome,$telefone,$email,$rua,$cidade,$bairro,$estado,$link,$tipo) == true){
        echo '<p style="color:green; text-align: center;"> Solicitação realizada com sucesso !!</p>';

    }else{
        echo ' <div class="alert alert-danger" role="alert"> Falha ao enviar solicitação !!</div>';
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
<?php
//include_once("footer.php");
?>
</html>
<!-- end document-->