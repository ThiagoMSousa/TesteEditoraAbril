<!DOCTYPE html>
<html lang="pt-br"
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pedido</title>
</head>
<body>
<h1>Cadastro de Pedido</h1>	

<form action="pedido_enviar.php" method="post" name="cadastro" >
	<fieldset>
		<legend>Dados do Pedido</legend>
		Produto:<br />
		<p>
			<select name="produto" id="produto" required>
				<option value="">Selecione um Produto</option>
				<?php
					include 'Conexao.php';
					//$sql = mysql_query("SELECT * FROM cliente");
					$sql = mysql_query("SELECT id_produto FROM pedido");
				?>

				<?php
					while ($usuario = mysql_fetch_array($sql)) 
					{
						?>
							<option value="<?php echo $usuario['id_produto'] ?></option>
						<?php 
					} 
				?>					

			</select>			
		</p>

		Cliente:<br />
		<p>
			<select name="cliente" id="cliente" required>
				<option value="">Selecione um Cliente</option>
				<?php
					include 'Conexao.php';
					//$sql = mysql_query("SELECT * FROM cliente");
					$sql = mysql_query("SELECT id_cliente FROM pedido");
				?>

				<?php
					while ($usuario = mysql_fetch_array($sql)) 
					{
						?>
							<option value="<?php echo $usuario['id_cliente'] ?></option>
						<?php 
					} 
				?>					

			</select>			
		</p>
		<input type="submit" name="cadastrar" value="Cadastrar Pedido" />
	</fieldset>
</form>

</body>
</html>
