<?php
    include('array.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>Avaliação 1 - DS I: Index</title>
		<link rel="stylesheet" type="text/css" href="css/styleIndex.css" />
	</head>

	<body>
		<div class="principal">
			<div class="box">
				<h1>AVALIAÇÃO 1 - DS I</h1>
				<br /><br />
				<table border="1">
					<tr>
						<td><strong>ID</strong></td>
						<td><strong>NOME</strong></td>
						<td><strong>E-MAIL</strong></td>
						<td><strong>LINK</strong></td>
					</tr>
					<form method="GET">
						<?php
							foreach($data as $indice=>$valor)
							{
								echo "<tr>
										<td>" . $indice . "</td>
										<td>" . $data[$indice]["nome"] . " " . $data[$indice]["sobrenome"] . "</td>
										<td>" . $data[$indice]["email"] . "</td>
										<td><a href='pageList.php?id=" . $indice . "'>Ver tudo</a></td>
									</tr>";
							}
						?>
					</form>
				</table>
			</div>
		</div>
	</body>
</html>