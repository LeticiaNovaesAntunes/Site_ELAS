<?php
  Class Projeto{

    //função para logar usuário
    public function logar($email,$senha){
      global $pdo;
 
      $sql = "SELECT * FROM tb_usuarios WHERE email= :email AND senha = :senha";
      $sql = $pdo->prepare($sql);
      $sql->bindValue(":email", $email);
      $sql->bindValue(":senha", md5($senha));
      $sql->execute();

     if($sql->rowCount() >0){
      $usuario = $sql->fetch();
      
      $_SESSION['Username'] = $usuario['Username'];
      $_SESSION['email'] = $usuario['email'];
      $_SESSION['senha'] = $usuario['senha']; 
      $_SESSION['tipo'] = $usuario['tipo'];
      
        return true;
     }else{
      return false;
    }
  }

  //função para casdastrar novo usuário
  public function cadastrar($username,$email,$senha){
    global $pdo;

    $sql = "INSERT INTO tb_usuarios (Username, email, senha) VALUES (:u, :e,:s)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":u", $username);
    $sql->bindValue(":e", $email);
    $sql->bindValue(":s", md5($senha));
    $sql->execute();

   if($sql->rowCount() >0){
      return true;
   }else{
    return false;
  }
}

public function solicitacoes($nome,$telefone,$email,$rua,$cidade,$bairro,$estado,$link,$tipo){
   global $pdo;

   $sql = "INSERT INTO tb_solicitacoes (Nome, Telefone, Email, Rua, Cidade, Bairro, Estado, link_site, Tipo) VALUES (:n, :t, :e,:r, :c, :b, :es, :l, :ti)";
   $sql = $pdo->prepare($sql);
   $sql->bindValue(":n", $nome);
   $sql->bindValue(":t", $telefone);
   $sql->bindValue(":e", $email);
   $sql->bindValue(":r", $rua);
   $sql->bindValue(":c", $cidade);
   $sql->bindValue(":b", $bairro);
   $sql->bindValue(":es", $estado);
   $sql->bindValue(":l", $link);
   $sql->bindValue(":ti", $tipo);
   $sql->execute();

  if($sql->rowCount() >0){
     return true;
  }else{
   return false;
 }
}

//função para alterar dados:
public function alterar($Vnome ,$nome, $Vemail, $email,  $senha){
  global $pdo;


    $sql = "UPDATE tb_usuarios SET Username = :n, Email = :e, Senha = :s  Where Username = :vn And email = :ve ";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":vn", $Vnome);
    $sql->bindValue(":n", $nome);
    $sql->bindValue(":ve", $Vemail);
    $sql->bindValue(":e", $email);
    $sql->bindValue(":s", md5($senha));
    $sql->execute();

      
   if($sql->rowCount() > 0){

       return true;
   }else{
       return false;
   }
}

public function ImprimeTableInstituicoes(){
  global $pdo;
  $sql = "SELECT * FROM `tb_instituicoes`";
  $sql = $pdo->prepare($sql);
  $sql->execute();
  
  
  for($i=0; $i<$return = $sql->fetch(); $i++){
  echo '     <tr class="alert" role="alert">
    <td>
        <label class="checkbox-wrap checkbox-primary">
              <input type="checkbox" checked>
              <span class="checkmark"></span>
            </label>
    </td>
  <td class="d-flex align-items-center">
  <div class="img" style="background-image: url(https://images.emojiterra.com/google/noto-emoji/unicode-13.1/share/1f3e2.jpg);"></div>
      <div class="pl-3 email">
          <span><a href="'.$return['link_site'].'">'.$return['Nome'].'</a></span>
          <span>'.$return['Email'].'</span>
      </div>
  </td>
  <td>
  <div class="pl-3 email">
          <span>'. $return['Cidade'].'</span>
          <span>'. $return['Estado'].'</span>
      </div> 
  </td>
  <td class="status"><span class="active">'. $return['Tipo'].'</span></td>
  <td>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true"><i class="fa fa-close"></i></span>
  </button>
  </td>
  </tr>   ';
  }
}
//função para gerar tabela:
public function buscarUsuario(){
  global $pdo;
   $vetor = array();
   $sql = $pdo->query("SELECT * FROM tb_usuarios");
   $vetor = $sql->FetchAll(PDO::FETCH_ASSOC);
   return $vetor;
 }

public function buscarPedidos(){
  global $pdo;
  
   $sql = $pdo->query("SELECT * FROM tb_solicitacoes");

   while($vetor = $sql->Fetch()){
     echo'
     <tr>
     <form action="adicionar.php" method="post">
     <td><input type="hidden" value="'.$vetor['Id_institucao'].'" name="id"><h3>'.$vetor['Id_institucao'].'</h3></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['Nome'].'" name="nome"></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['Telefone'].'" name="telefone"></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['Email'].'" name="email"></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['Rua'].'" name="rua"></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['Cidade'].'" name="cidade"></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['Bairro'].'" name="bairro"></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['Estado'].'" name="estado"></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['link_site'].'" name="link"></td>
     <td><input style=" background-color: transparent; border: none;" type="text" value="'.$vetor['Tipo'].'" name="tipo"></td>
     <td><input style=" border: none;" type="submit" class="buttons" value="Aceitar"></form><p>  </p><a class="buttons" href="excluirPedidos.php">Excluir</a><br></td></tr>';
   }
}

public function adicionar($nome,$telefone,$email,$rua,$cidade,$bairro,$estado,$link,$tipo){
  global $pdo;

  $sql = "INSERT INTO tb_instituicoes (Nome, Telefone, Email, Rua, Cidade, Bairro, Estado, link_site, Tipo) VALUES (:n, :t, :e,:r, :c, :b, :es, :l, :ti)";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":n", $nome);
  $sql->bindValue(":t", $telefone);
  $sql->bindValue(":e", $email);
  $sql->bindValue(":r", $rua);
  $sql->bindValue(":c", $cidade);
  $sql->bindValue(":b", $bairro);
  $sql->bindValue(":es", $estado);
  $sql->bindValue(":l", $link);
  $sql->bindValue(":ti", $tipo);
  $sql->execute();

 if($sql->rowCount() >0){
    return true;
 }else{
  return false;
}
}

 public function excluir($id){
  global $pdo;

  $sql = "DELETE FROM tb_usuarios WHERE ID = :id ";
  $sql = $pdo->prepare($sql);
  $sql->bindValue("id", $id);
  $sql->execute();

  if($sql->rowCount() > 0){
      
     return true;
    }else{
        return false;
    }
}

public function excluirPedidos($id){
  global $pdo;

  $sql = "DELETE FROM tb_solicitacoes WHERE Id_institucao = :id ";
  $sql = $pdo->prepare($sql);
  $sql->bindValue("id", $id);
  $sql->execute();

  if($sql->rowCount() > 0){
      
     return true;
 }else{
     return false;
 }
}
}






?>