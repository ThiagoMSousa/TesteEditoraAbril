<?php
	include 'conexao.php';
	$id = $_POST['id']; // POST = Recupera Dados do FORMULARIO / GET = Recupera Dados da barra de navegação (URL)
	$nome      = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco     = $_POST['preco'];

	$sql = mysql_query("UPDATE produto SET nome='$nome', descricao='$descricao', preco='$preco' WHERE id='$id'") or die(mysql_error());	

	echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
	echo "alert ('Produto Alterado com Sucesso.')";
	echo "</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=crud_produto.php'>";
?>