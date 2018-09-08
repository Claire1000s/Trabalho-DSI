<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>Avaliação 1 - DS I: Page List</title>
		<link rel="stylesheet" type="text/css" href="css/stylePageList.css" />
	</head>

	<body>
		<h1>DADOS DO CLIENTE</h1>
		<br /><br />
			<form method="GET">
				<?php
					include('array.php');

					$id = $_GET['id'];
					$data_nascimento = date("d/m/Y", strtotime($data[$id]["data_nascimento"]));

					echo "<h2><strong>Cliente:</strong> " . $data[$id]["nome"] . " " . $data[$id]["sobrenome"] . "</h2><br />";
					echo "<p class='p1'>E-mail: </p><p class='p2'>" . $data[$id]["email"] . "</p>";
					echo "<p class='p1'>Telefone: </p><p class='p2'>" . $data[$id]["telefone"] . "</p>";
					echo "<p class='p1'>CPF: </p><p class='p2'>" . $data[$id]["cpf"] . "</p>";
					echo "<p class='p1'>Data de nascimento: </p><p class='p2'>" . $data_nascimento . "</p>";
					echo "<p class='p1'>Endereço: </p><p class='p2'>" . $data[$id]["endereco"] . "</p>";
					echo "<p class='p1'>Imagem: </p><p class='p1'><img src='" . $data[$id]["imagem"] . "' /></p><br /><br />";

					echo "<h3><a href='index.php' target='_blank'>Voltar para a listagem</a></h3>";
				?>
			</form>
		</table>
	</body>
</html>