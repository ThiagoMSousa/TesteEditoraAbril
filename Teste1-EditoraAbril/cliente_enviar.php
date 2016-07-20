<?php
	echo "<meta charset='utf-8'>";
	//Conexão com o Banco de Dados
	include 'Conexao.php';

		$nome     = $_POST['nome'];
		$email    = $_POST['email'];
		$telefone = $_POST['telefone'];
	if ($nome && $email && $telefone) 
	{
		$sql_insert = mysql_query("INSERT INTO cliente(nome, email, telefone) VALUES('$nome','$email', '$telefone')")or die("Erro ao Cadastrar Cliente !!!");
		echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
		echo "alert ('Cliente Cadastrado com Sucesso !!!')";
		echo "</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=crud_cliente.php'>";
	}
	else
	{
		echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
		echo "alert ('Todos os campos devem ser preenchidos')";
		echo "</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=Cliente.php'>";
	}
?>

