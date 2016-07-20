<?php
	include 'conexao.php';
	$id = $_POST['id']; // POST = Recupera Dados do FORMULARIO / GET = Recupera Dados da barra de navegação (URL)
	$id_produto = $_POST['id_produto'];

	$sql = mysql_query("UPDATE pedido SET id_produto='$id_produto' WHERE id='$id'") or die(mysql_error());	

	echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
	echo "alert ('Pedido Alterado com Sucesso.')";
	echo "</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=crud_pedido.php'>";
?>