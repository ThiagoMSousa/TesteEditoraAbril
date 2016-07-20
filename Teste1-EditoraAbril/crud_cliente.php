<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>
	<title>CRUD Cliente</title>
	<style type="text/CSS">
		table{
			width: 800px;
			border: 1px solid #CCC;
			font-family: verdana;
			font-size: 12px;
			border-spacing: 0px;
			padding: 10px;
		}

		td{
			border-bottom: 1px solid #CCC;
		}

		.dados{
			width: 20px;
			font-size: 8px;
		}
	</style>
</head>

<link rel="stylesheet"  type="text/css" href="geral.css">

<body>
	<div id="menu">
		<div class="link"><a href="crud_cliente.php">Clientes</a></div>
		<div class="link"><a href="crud_produto.php">Produtos</a></div>
		<div class="link"><a href="crud_pedido.php">Pedidos</a></div>
	</div>
	
	<h1>CRUD DE CLIENTES </h1>

	<table>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th class="dados">Excluir</th>
			<th class="dados">Alterar</th>
		</tr>

		<?php
			include 'Conexao.php';
			$sql = mysql_query("SELECT * FROM Cliente");
			while ($usuario = mysql_fetch_object($sql)) 
			{
				echo "<tr>";
				echo "<td>".$usuario->id."</td>";
				echo "<td>".$usuario->nome."</td>";
				echo "<td>".$usuario->email."</td>";
				echo "<td>".$usuario->telefone."</td>";
				echo "<td><a href='cliente_excluir.php?id=$usuario->id'><img src='excluir.gif'></a></td>";
				echo "<td><a href='cliente_alterar_form.php?id=$usuario->id'><img src='alterar.gif'></a></td>";
				echo "</tr>";

			}
		?>
	</table>

	<form action="Cliente.php" method="post" name="cadastro" >
		<input type="submit" name="Cadastrar Cliente" value="Cadastrar Cliente" />
	</form>

</body>
</html>