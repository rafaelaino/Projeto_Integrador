<?php 

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'cadastro';

//Conexão BD
$mysqli = new mysqli
	($servidor, $usuario, $senha, $banco);

if (mysqli_connect_erro())
		trigger_error(mysqli_connect_erro());

 ?>