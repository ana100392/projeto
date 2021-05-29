<?php

$servname ="localhost"; // padrao serve local.
$username ="root"; // padrão root.
$passoword = "";  //senha de conexão do banco de dados.
$database = "ana"; // alterar conforme o nome do seu banco de dados.
// create connection



// A FUNÇÃO MYSQL CONNECT FOI DESATIVADA // USA MYSQLI ACRESCENTA O i

	// TEM QUE ESTAR NA ORDEM: SERVIDOR-USUARIO-SENHA-BANCO

		//1-(NOME DO SERVIDOR- OK)	$servename ="localhost"; 
		//2-(NOME DO USUARIO)		VF  $username = "root"; 
		//3-(NOME DO SENHA DO BD)   VF  $password =" "; // padrão root.
		//4-(NOME DO BANCO)			VF	$database = "ana";

$conexao = mysqli_connect($servname,$username,$passoword,$database);
	//Forçar o banco a gravar o nome com acento por exemplo: Goiânia e ultilizar UTF-8
	
	mysqli_set_charset ($conexao, "utf8");	

//Testando conexao

	/*if(!$conexao){
	  die("Falha na conexao: " . mysqli_connect_error());
		}else{
		  echo "<center>conexao ok </center>";
	}*/
?>
	
