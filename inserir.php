
<meta charset="utf-8">

<form name="dadosPessoa" action="conexao.php" method="post">
	<table border="1">
		<thead>
			<tr>
				<td>Nome:</td>
				<th><input type="text" name="nome" value="" /></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nascimento:</td>
				<td><input type="date" name="nascimento" value="" /></td>
			</tr>
			<tr>
				<td>Endereco:</td>
				<td><input type="text" name="endereco" value="" /></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="telefone" value="" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="acao" value="Inserir" /> <input
					type="submit" name="acao" value="Cancelar" /></td>

			</tr>
		</tbody>
	</table>

</form>