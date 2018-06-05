<?php 

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'clientes';

//Conexão BD
$mysqli = new mysqli
	($servidor, $usuario, $senha, $banco);

if (mysqli_connect_error())
		trigger_error(mysqli_connect_error());

 ?>