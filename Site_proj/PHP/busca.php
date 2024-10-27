
<?php
  include_once("Conexao.php");
  include_once("Form_Pesquisar.php");
  $filtrar = $_POST['filtrar'];
  $pesquisa = $_POST['pesquisa'];

  global $pdo;

if($filtrar == 'Estado'){
   $query = $pdo->prepare("SELECT * FROM `tb_instituicoes` as tb WHERE Estado LIKE '%$pesquisa%'");
   $query->execute();
}
if($filtrar == 'Nome'){
    $query =  $pdo->prepare("SELECT * FROM `tb_instituicoes` as tb WHERE Nome LIKE '%$pesquisa%'");
    $query->execute();
}
if($filtrar == 'Cidade'){
    $query =  $pdo->prepare("SELECT * FROM `tb_instituicoes` as tb WHERE Cidade LIKE '$pesquisa%'");
    $query->execute();
}

for($i=0; $i<$return = $query->fetch(); $i++){
    echo '     <tr class="alert" role="alert">
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

?>
</body>