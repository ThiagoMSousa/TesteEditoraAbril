<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>
	<title>CRUD PEDIDOS</title>
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
	
	<h1>CRUD DE PEDIDOS </h1>

	<table>
		<tr>
			<th>Produto</th>
			<th>Cliente</th>
			<th class="dados">Excluir</th>
			<th class="dados">Alterar</th>
		</tr>

		<?php
			include 'Conexao.php';
			$sql = mysql_query("SELECT * FROM pedido");
			while ($usuario = mysql_fetch_object($sql)) 
			{
				echo "<tr>";
				echo "<td>".$usuario->id_produto."</td>";
				echo "<td>".$usuario->id_cliente."</td>";
				echo "<td><a href='pedido_excluir.php?id_produto=$usuario->id_produto, id_cliente=$usuario->id_cliente'><img src='excluir.gif'></a></td>";
				echo "<td><a href='pedido_alterar_form.php?id_produto=$usuario->id_produto, id_cliente=$usuario->id_cliente'><img src='alterar.gif'></a></td>";
				echo "</tr>";

			}
		?>
	</table>

	<form action="Pedido.php" method="post" name="cadastro" >
		<input type="submit" name="Cadastrar Pedido" value="Cadastrar Pedido" />
	</form>

</body>
</html>