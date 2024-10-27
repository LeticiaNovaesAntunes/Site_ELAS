<?php
include_once('conexao.php');
include_once('funcoes.php');
    
$p = new Projeto();

if(isset($_POST['nome']) && !empty($_POST['nome']) && 
  isset($_POST['cidade']) && !empty($_POST['cidade']) && 
  isset($_POST['rua']) && !empty($_POST['rua']) && 
  isset($_POST['bairro']) && !empty($_POST['bairro']) && 
  isset($_POST['estado']) && !empty($_POST['estado']) && 
  isset($_POST['tipo']) && !empty($_POST['tipo']) && 
  isset($_POST['email']) && !empty($_POST['email']) && 
  isset($_POST['telefone']) && !empty($_POST['telefone']) && 
  isset($_POST['id']) && !empty($_POST['id']) && 
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
    $id = $_POST['id'];

    if($p->adicionar($nome,$telefone,$email,$rua,$cidade,$bairro,$estado,$link,$tipo) == true){        
       $sql = "DELETE FROM tb_solicitacoes WHERE Id_institucao = :id ";
       $sql = $pdo->prepare($sql);
       $sql->bindValue("id", $id);
       $sql->execute();

       header("Location: consultaPedidos.php");


    }else{
        echo ' <div class="alert alert-danger" role="alert"> Falha ao enviar solicitação !!</div>';
    }
 }

 ?>