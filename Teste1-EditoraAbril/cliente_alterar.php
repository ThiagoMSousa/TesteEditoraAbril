<?php
	include 'conexao.php';
	$id = $_POST['id']; // POST = Recupera Dados do FORMULARIO / GET = Recupera Dados da barra de navegação (URL)
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];

	$sql = mysql_query("UPDATE cliente SET nome='$nome', email='$email', telefone='$telefone' WHERE id='$id'") or die(mysql_error());	

	echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
	echo "alert ('Cliente Alterado com Sucesso.')";
	echo "</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=crud_cliente.php'>";
?>