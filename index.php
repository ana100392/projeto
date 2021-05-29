

<?php 
  include ("conexao.php");
 ?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8">
    <title>formulário de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   

    <style type="text/css">
           
           #tamanhoContainer{
          width: 500px;
           }

           #botao{
           
           background-color: #73d450; /*aqui a cor de fundo - #FF1168- Ana Caroline Sardinha Tavares  */
           color: #ffffff;    /* aqui cor da letra   email: ana.carolina100392@gmail.ccom   */
           font-weight: bold;

           }

 </style>



</head>


<body>
      

    <div  class="container"  id="tamanhoContainer"   style="margin-top:40px ">
    
          <h4> &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp Minha Agenda De Registros</h4>


    <form  action="_inserir_nome.php"  method="post" style="margin-top: 20px">
            <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="Nome" placeholder="Digite Seu Nome" required>

            </div>
      
            <div class="form-group">
            <label>Telefone</label>
            <input type="text" class="form-control"  name="Telefone"  placeholder="Insira o Número de Telefone" required>

            </div>



           <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control"  name="Cidade" placeholder="Digite Sua Cidade" required>

            </div>

  <div class="form-group">
      <label>Estado</label>
      <select class="form-control" name="Estado">
        <option>Seleção</option>
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

       <br>
       <p>Tipo de cadastro:</p>

    
         <div class="custom-control custom-checkbox">
             <input type="radio" class="custom-control-input" name="tipocadastro" id="customCheck1"
              value="Cliente">
             <label class="custom-control-label" for="customCheck1">Cliente</label>
</div>


        <div class="custom-control custom-checkbox">
             <input type="radio" class="custom-control-input"  name="tipocadastro" id="customCheck2"
             value="Fornecedor">
             <label class="custom-control-label" for="customCheck1">Fornecedor</label>
</div>


       <div class="custom-control custom-checkbox">
            <input type="radio" class="custom-control-input" name="tipocadastro"  id="customCheck3"
            value="Funcionário">
            <label class="custom-control-label" for="customCheck1">Funcionário</label>


  </div> 
  <div style="text-align: right;">
  <button type="submit"  id="botao" class="btn  btn-sm">Cadastrar</button>
</div>
</form>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>












































