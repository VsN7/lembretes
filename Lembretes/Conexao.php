<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "gerenciadorLembretes";
	//Projeto de Vitor Santos do Nascimento
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>