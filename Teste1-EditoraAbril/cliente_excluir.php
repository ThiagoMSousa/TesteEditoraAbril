<?php
	include 'conexao.php';

	$id = $_GET['id'];  // GET = Ta pegando o "ID" da barra de site do navegador (url)

	$excluir = mysql_query("DELETE FROM Cliente WHERE id='$id'")or die(mysql_error());
	echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
	echo "alert ('Cadastro excluido com sucesso.')";
	echo "</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=crud_cliente.php'>";
?>