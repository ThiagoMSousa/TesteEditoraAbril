<?php
	echo "<meta charset='utf-8'>";
	//Conexão com o Banco de Dados
	include 'Conexao.php';

		$id_produto = $_POST['id_produto'];
		$id_cliente = $_POST['id_cliente'];
	if ($id_produto && $id_cliente) 
	{
		$sql_insert = mysql_query("INSERT INTO pedido(id_produto, id_cliente) VALUES('$id_produto','$id_cliente')")or die("Erro ao Cadastrar Pedido !!!");
		echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
		echo "alert ('Pedido Cadastrado com Sucesso !!!')";
		echo "</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=crud_pedido.php'>";
	}
	else
	{
		echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
		echo "alert ('Todos os campos devem ser preenchidos')";
		echo "</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=Pedido.php'>";
	}
?>

