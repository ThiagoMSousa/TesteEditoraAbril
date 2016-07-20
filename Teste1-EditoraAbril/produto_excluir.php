<?php
	include 'conexao.php';

	$id = $_GET['id'];  // GET = Ta pegando o "ID" da barra de site do navegador (url)

	$excluir = mysql_query("DELETE FROM Produto WHERE id='$id'")or die(mysql_error());
	echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
	echo "alert ('Produto Excluido com Sucesso.')";
	echo "</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=crud_produto.php'>";
?>