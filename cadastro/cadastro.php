<?php

include("cadastro/conexao2.php");

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql="INSERT INTO cadastro(nome,sobrenome,email,senha) 
VALUES('$nome','$sobrenome','$email','$senha')";

if(mysqli_query($conexao,$sql)){
	
	echo " Usuario cadastrado com sucesso";
	
}

else {
	
	echo "Erro".mysqli_connect_error($conexao);
	
	}
	
	mysqli_close($conexao);
?>