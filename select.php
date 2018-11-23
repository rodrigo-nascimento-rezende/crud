<!DOCTYPE html>

<?php
include ("conexao.php");
$grupo = selectAllPessoa();
// var_dump($grupo);
?>


<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<h1>Agenda Pessoal</h1>
	<a href="inserir.php">Add Pessoa</a>
	<table border="1">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Nascimento</th>
				<th>Endereço</th>
				<th>Telefone</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
                <?php foreach ($grupo as $pessoa) { ?>
                    <tr>
				<td><?= $pessoa["nome"] ?></td>
				<td><?= formatoData($pessoa["nascimento"]) ?></td>
				<td><?= $pessoa["endereco"] ?></td>
				<td><?= $pessoa["telefone"] ?></td>
				<td>
					<form name="alterar" action="alterar.php" method="post">
						<input type="hidden" name="id" value=<?= $pessoa["id"] ?> /> <input
							type="submit" value="Editar" name="editar" />
					</form>
				</td>
				<td>
					<form name="excluir" action="conexao.php" method="post">
						<input type="hidden" name="id" value=<?= $pessoa["id"] ?> /> <input
							type="hidden" name="acao" value="excluir" /> <input type="submit"
							name="excluir" value="Excluir" />
					</form>
				</td>
			</tr>
                <?php } ?>
            </tbody>
	</table>
</body>
</html>