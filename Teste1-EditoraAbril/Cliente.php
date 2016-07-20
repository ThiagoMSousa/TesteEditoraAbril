<!DOCTYPE html>
<html lang="pt-br"
<head>
	<meta charset="utf-8">
	<title>Cadastro de Cliente</title>
</head>
<body>
<h1>Cadastro de Cliente</h1>	

<form action="cliente_enviar.php" method="post" name="cadastro" >
	<fieldset>
		<legend>Dados Pessoais</legend>
		Nome:<br />
		<input type="text" name="nome" /><br /> <br />
		Email:<br />
		<input type="email" name="email" /><br /> <br />
		Telefone:<br />
		<input type="text" name="telefone" /><br /> <br />
		<input type="submit" name="cadastrar" value="Cadastrar" />
	</fieldset>
</form>
</body>
</html>
