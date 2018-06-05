<?php 

include "abrir_banco.php";

$email = $_REQUEST['email'];
$nome = $_REQUEST['nome'];
$endereco = $_REQUEST['end'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['comple'];
$telefone = $_REQUEST['tel'];
$celular = $_REQUEST['cel'];
$senha1 = $_REQUEST['senha1'];

$sql = "INSERT INTO cadastro 
(email, nome, endereco, numero, complemento, telefone, celular, senha) VALUES
('$email','$nome','$endereco','$numero','$complemento','$telefone','$celular','$senha1')";

$query = $mysqli->query($sql);

echo "<fieldset>";
echo "<center><img src='checked.jpg' width='20%'>";
echo "<br><br><br>";
echo "<font color='red'>";
echo "<h1> Inclusão realizada com sucesso<br>";
echo "<br><br>";
echo "<a href ='cadastro.php'>voltar</a></h1>";
echo "</font></center>";        
echo "</fieldset>";

 ?>