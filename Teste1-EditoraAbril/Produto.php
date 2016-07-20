<!DOCTYPE html>
<html lang="pt-br"
<head>
	<meta charset="utf-8">
	<title>Cadastro de Produto</title>
</head>
<body>
<h1>Cadastro de Produto</h1>	

<form action="produto_enviar.php" method="post" name="cadastro" >
	<fieldset>
		<legend>Dados do Produto</legend>
		Nome:<br />
		<input type="text" name="nome" /><br /> <br />
		Descrição:<br />
		<input type="text" name="descricao" /><br /> <br />
		Preço:<br />
		<input type="text" name="preco" /><br /> <br />
		<input type="submit" name="cadastrar" value="Cadastrar Produto" />
	</fieldset>
</form>
</body>
</html>
