<?php
	$conexao = @mysql_connect("localhost", "root", "1234") or die("Erro na Conexão");
	
	$db = @mysql_select_db("dbControleEstoque", $conexao) or die("Erro no Banco de Dados");
?>