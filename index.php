<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gerador de Rifa</title>
	<!-- boostrap importation -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<!-- boostrap end -->

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- jQuery Mask Plugin -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>

<body>

	<header>
		<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark px-4 py-3">
			<a class="navbar-brand fw-bold text-info" href="#">GERADOR DE RIFAS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			</div>
			<form class="form-inline my-2 my-lg-0">
				<a id="btn-github" class="btn btn-outline-info my-2 my-sm-0" href='https://github.com/tcroglio' target="_blank">MEU GITHUB</a>
				<a id="btn-codigo" class="btn btn-info my-2 my-sm-0" href='https://github.com/tcroglio-class/php-rifa' target="_blank">ACESSE ESTE CÓDIGO</a>
			</form>
		</nav>
	</header>

	<section class="d-flex align-items-center justify-content-center py-5">
		<div class="mx-auto">
			<h2 class="mb-3 text-center text-info fw-bold">GERADOR DE RIFAS</h2>
			<div class="d-flex gap-2 align-items-center justify-content-center border border-dark bg-light rounded p-4">

				<form method="POST" action="rifa.php" enctype="multipart/form-data">

					<div class="form-group mb-3">
						<label for="nomeAcao">Nome da ação <span class="text-danger fw-bold"> * </span></label>
						<input type="text" required class="form-control" id="nomeAcao" name="nomeAcao" aria-describedby="premioHelp" placeholder='Ex: "Ação entre amigos..."'>
					</div>

					<div class="form-group mb-3">
						<label for="premio">Prêmio <span class="text-danger fw-bold"> * </span></label>
						<input type="text" required class="form-control" id="premio" name="premio" aria-describedby="premioHelp" placeholder="Digite o nome do prêmio">
					</div>

					<div class="form-group mb-3">
						<label for="dataSorteio">Data do Sorteio <span class="text-danger fw-bold"> * </span></label>
						<input type="date" required class="form-control" id="dataSorteio" name="dataSorteio">
					</div>

					<div class="form-group mb-3">
						<label for="valorNumero">Valor do número <span class="text-danger fw-bold"> * </span></label>
						<div class="input-group">
							<span class="input-group-text">R$</span>
							<input type="text" required class="form-control" id="valorNumero" name="valorNumero" placeholder="0,00">
						</div>
					</div>

					<div class="form-group mb-3">
						<label for="quantNumeros">Quantidade de números <span class="text-danger fw-bold"> * </span></label>
						<input type="text" required class="form-control" id="quantNumeros" name="quantNumeros" placeholder="Digite a quantidade de números">
					</div>

					<div class="mb-3">
						<label for="img_produto" class="form-label">Imagem do produto</label>
						<input type="file" class="form-control" id="img_produto" name="img_produto" accept="image/*" aria-describedby="inputGroupFileAddon01">
					</div>

					<span class="text-danger fw-bold"> Campos obrigatórios * </span>

					<div class="mt-3 text-center">
						<button type="submit" class="btn btn-primary mb-3">GERAR NÚMEROS!</button>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer class="bg-dark text-white py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5>Sobre</h5>
					<p>Este projeto foi desenvolvido por Tiago Roglio. O "Gerador de Rifa" foi criado utilizando PHP e visa facilitar a organização e sorteios de rifas online, com uma interface simples e prática para o usuário.</p>
				</div>
				<div class="col-md-4">
					<h5>Links Úteis</h5>
					<ul class="list-unstyled">
						<li><a href="https://github.com/tcroglio" class="text-info" target="_blank">Meu GitHub</a></li>
						<li><a href="https://github.com/tcroglio-class/php-rifa" class="text-info" target="_blank">GitHub do Projeto</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h5>Contato</h5>
					<p>Email: <a href="mailto:tiago.roglio2112@gmail.com" class="text-info">tiago.roglio2112@gmail.com</a></p>
				</div>
			</div>
		</div>
	</footer>

	<script>
		$(document).ready(function() {
			$('#valorNumero').mask('0.000,00', {
				reverse: true
			});

			$('#quantNumeros').mask('0000');

		});
	</script>

</body>

</html>