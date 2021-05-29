<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>listagem de nome</title>

<meta charset="utf-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/e50dbee61b.js" crossorigin="anonymous"></script></head>
<body>


<div class="container"  style="margin-top: 40px">
<h3>listar nomes</h3>
<br>




<table class="table">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">telefone</th>
      <th scope="col">cidade</th>
      <th scope="col">estado</th>
      <th scope="col">registro</th>
      <th scope="col">cliente</th>
      <th scope="col">fornecedor</th>
      <th scope="col">funcionário</th>
       <th scope="col">Ação</th>

    </tr>
 </thead>
 

    <?php
     
         include 'conexao.php';
         $sql="SELECT * FROM `curso`";
         $busca = mysqli_query($conexao,$sql);
         
         while ($array = mysql_fetch_array(busca)) {
           
                $cadastroID = $arry['cadastroID'];
                $nome = $arry['nome'];
                $telefone = $arry['telefone'];
                $cidade = $arry['cidade'];
                $estado = $arry['estado'];
                $registro = $arry['registro'];
                $cliente = $arry['cliente'];
                $fornecedor = $arry['fornecedor'];
                $funcionario = $arry['funcionario'];


?>                                                                                                                                             

   <tr>

      <td><?php echo $nome;?></td>

      <td><?php echo $telefone;?></td>

      <td><?php echo $cidade;?></td>

      <td><?php echo $estado;?></td>

      <td><?php echo $registro;?></td>

      <td><?php echo $cliente;?></td>

      <td><?php echo $fornecedor;?></td>

      <td><?php echo $funcionario;?></td>

      <td><<a class="btn btn-warning"  style="color: #fff"   href="editar_cadastro.php?id=<?php echo $cadastroID ?>"role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>


<a class="btn btn-danger"  style="color: #fff"   href="editar_cadastro.php?id=<?php echo $cadastroID ?>"role="button"><<i class="far fa-trash-alt"></i>&nbsp;Deletar</a>
    

    <?php } ?>


    </tr>


</table>
   






























</div>













<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>