
<?php
include 'conexao.php';
$pessoa = selectIdPessoa($_POST["id"]);
// var_dump($pessoa);
?>

<form name="dadosPessoa" action="conexao.php" method="post">
	<table border="1">
		<thead>
			<tr>
				<td>Nome:</td>
				<th><input type="text" name="nome" value="<?= $pessoa["nome"] ?>"
					size="30" /></th>
			</tr>
		</thead>
		<tbody>

			<td>Nascimento:</td>
			<td><input type="date" name="nascimento"
				value="<?= $pessoa["nascimento"] ?>" /></td>

			<tr>
				<td>Endereco:</td>
				<td><input type="text" name="endereco"
					value="<?= $pessoa["endereco"] ?>" size="30" /></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="telefone"
					value="<?= $pessoa["telefone"] ?>" size="15" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?= $pessoa["id"] ?>" /> <input
					type="submit" name="acao" value="Alterar" /> <input type="submit"
					name="acao" value="Cancelar" /></td>
			</tr>
		</tbody>
	</table>

</form>