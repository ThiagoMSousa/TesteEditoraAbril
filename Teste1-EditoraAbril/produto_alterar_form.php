<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
<title>Alterar Produto</title>
</head>
<body>
<h1>Alterar Produto</h1>

<form action="produto_alterar.php" method="post" name="cadastro" >
<fieldset>
<legend> Dados pessoais</legend>

<?php
include 'conexao.php';
$id = $_GET['id']; 
$sql= mysql_query("SELECT * FROM produto WHERE id='$id'");
$usuario = mysql_fetch_object($sql)

?>

<input type="hidden" name="id" value="<?php echo $usuario->id ?>" />
Nome:<br />
<input type="text" name="nome" value="<?php echo $usuario->nome ?>" /><br /><br />
Descrição:<br />
<input type="text" name="descricao" value="<?php echo $usuario->descricao ?>" /><br /><br />
Preço:<br />
<input type="text" name="preco" value="<?php echo $usuario->preco ?>" /><br /><br />
<input type="submit" name="Alterar" value="Alterar" />
</fieldset>
</form>
</body>
</html>