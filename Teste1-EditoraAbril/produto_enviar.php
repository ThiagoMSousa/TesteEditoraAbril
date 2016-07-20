<?php
	echo "<meta charset='utf-8'>";
	//Conexão com o Banco de Dados
	include 'Conexao.php';

		$nome      = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$preco     = $_POST['preco'];
	if ($nome && $descricao && $preco) 
	{
		$sql_insert = mysql_query("INSERT INTO produto(nome, descricao, preco) VALUES('$nome','$descricao', '$preco')")or die("Erro ao Cadastrar Produto !!!");
		echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
		echo "alert ('Produto Cadastrado com Sucesso !!!')";
		echo "</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=crud_produto.php'>";
	}
	else
	{
		echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
		echo "alert ('Todos os campos devem ser preenchidos')";
		echo "</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=Produto.php'>";
	}
?>

