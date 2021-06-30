<?php
	$servidor = $_ENV["SERVER"];
	$usuario = $_ENV["USER"];
	$senha = $_ENV["PASSWORD"];
	$dbname = $_ENV["DBNAME"];
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>