<?php
	include 'conexao.php';

	$id_produto = $_GET['id_produto'];  // GET = Ta pegando o "ID" da barra de site do navegador (url)
	$id_cliente = $_GET['id_cliente'];

	$excluir = mysql_query("DELETE FROM Pedido WHERE id_produto='$id_produto' AND id_cliente='$id_cliente'")or die(mysql_error());
	echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
	echo "alert ('Pedido excluido com sucesso.')";
	echo "</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=crud_pedido.php'>";
?>