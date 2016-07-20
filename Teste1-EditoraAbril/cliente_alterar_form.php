
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
<title>Alterar Cliente</title>
</head>
<body>
<h1>Alterar Cliente</h1>

<form action="cliente_alterar.php" method="post" name="cadastro" >
<fieldset>
<legend> Dados pessoais</legend>

<?php
include 'conexao.php';
$id = $_GET['id']; 
$sql= mysql_query("SELECT * FROM cliente WHERE id='$id'");
$usuario = mysql_fetch_object($sql)

?>

<input type="hidden" name="id" value="<?php echo $usuario->id ?>" />
Nome:<br />
<input type="text" name="nome" value="<?php echo $usuario->nome ?>" /><br /><br />
Email:<br />
<input type="text" name="email" value="<?php echo $usuario->email ?>" /><br /><br />
Telefone:<br />
<input type="text" name="telefone" value="<?php echo $usuario->telefone ?>" /><br /><br />
<input type="submit" name="Alterar" value="Alterar" />
</fieldset>
</form>
</body>
</html>