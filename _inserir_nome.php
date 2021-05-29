<?php  

include 'conexao.php';



$nome = $_POST['Nome'];
$telefone = $_POST['Telefone'];
$cidade = $_POST['Cidade'];
$estado = $_POST['Estado'];
$registro = $_POST['tipocadastro'];




 $sql	= "INSERT INTO cadastro ( nome, telefone, cidade, estado,tipocadastro) VALUES ('$nome', '$telefone', '$cidade', '$estado','$registro')";


$inserir = mysqli_query($conexao,$sql);

   $id_nome   





?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<div  class="container" style="width: 500px;margin-top: 20px">
     
     <center>
 <h4>cadastro efetuado com sucesso!</h4>
      </center>

             <div style="padding-top: 20px" >
  	  <center>
   
             <a href="index.php" role="button" class="btn btn btn-primary">Cadastrar Novo Ítem</a>
       </center>

</div>

</div>

















