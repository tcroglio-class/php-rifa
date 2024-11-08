<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- boostrap importation -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<!-- boostrap end -->
</head>

<body>

	<?php

	$isset = isset($_POST['nomeAcao']) && isset($_POST['premio'], $_POST['dataSorteio'], $_POST['valorNumero'], $_POST['quantNumeros']);
	$notempty = !empty($_POST['nomeAcao']) && !empty($_POST['premio']) &&  !empty($_POST['dataSorteio']) && !empty($_POST['valorNumero']) && !empty($_POST['quantNumeros']);


	if ($isset && $notempty) {

		$temImagem = false;
		$nomeAcao = $_POST['nomeAcao'];
		$premio = $_POST['premio'];
		$dataSorteio = $_POST['dataSorteio'];
		$dataSorteio = date('d/m/Y', strtotime($dataSorteio));
		$valorNumero = $_POST['valorNumero'];
		$quantNumeros = $_POST['quantNumeros'];
		$extensao_img = $_FILES['img_produto']['type'];
		if (preg_match('/image/', $extensao_img)) {
			$img_produto = $_FILES['img_produto']['name'];
			move_uploaded_file($_FILES['img_produto']['tmp_name'], $img_produto);
			$temImagem = true;
		}

		$numero = 1;
		for ($i = 0; $i < $quantNumeros; $i++) {
			$numeroFormatado = str_pad($numero, 4, '0', STR_PAD_LEFT);

	?>

			<div class="m-4">
				<div class="row border border-dark bg-light rounded p-3">
					<div class="col-3" style="border-right: 2px dotted black;">
						<p class="fw-bold"><?= "Nº " . $numeroFormatado ?></p>
						<div class="form-group">
							<label for="premio">Nome:</label>
							<input type="text" required class="form-control" id="premio" name="premio" aria-describedby="premioHelp">
						</div>
						<div class="form-group">
							<label for="premio">Endereço:</label>
							<input type="text" required class="form-control" id="premio" name="premio" aria-describedby="premioHelp">
						</div>
						<div class="form-group">
							<label for="premio">Contato:</label>
							<input type="text" required class="form-control" id="premio" name="premio" aria-describedby="premioHelp">
						</div>
					</div>

					<div class="col-7">
						<div class="d-flex justify-content-between align-items-center">
							<p class="p-2 fw-bold"><?= "Nº " . $numeroFormatado ?></p>
							<h3 class="p-2 mx-auto fw-bold"><?= $nomeAcao ?></h3>
						</div>
						<hr>
						<?php
						if ($temImagem) {
							echo "
									<div class='d-flex justify-content-between'>
										<div>
											<p><span class='fw-bold'>Prêmio: </span> $premio </p>
											<p><span class='fw-bold'>Valor: </span> $valorNumero</p>
											<p><span class='fw-bold'>Data do Sorteio: </span> $dataSorteio </p>
										</div>
										<div>
											<p class='fw-bold'>Imagem:</p>
											<img src='$img_produto' height='90px;' width='90px;'>
										</div>
									</div>
								 ";
						} else {

							echo "
								<p><span class='fw-bold'>Prêmio: </span> $premio </p>
								<p><span class='fw-bold'>Valor: </span> $valorNumero</p>
								<p> <span class='fw-bold'>Data do Sorteio: </span> $dataSorteio </p>
							 ";
						}

						?>

					</div>

				</div>
			</div>

	<?php
			$numero++;
		}
	} else {
		header('Location: ./');
	}

	?>


	<script>
		window.onload = () => {
			window.print();
		}
	</script>
</body>

</html>