<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbnome = "unificacao";

	//criar a conexão

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbnome);
	mysqli_set_charset($conn, "utf8");


?>