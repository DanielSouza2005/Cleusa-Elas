<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="../../images/favicon.png" rel="icon">

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Cleusa & Elas | Painel Administrativo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<style type="text/css">
	body {
		background-image: url(img/photos/login.jpg);
		width: 100%;
		height: auto;
		background-position: center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100%;
	}

	@media only screen and (max-width: 1200px) {
		body {
			background-image: url(img/photos/login2.jpg);
			height: 100vh;
			background-size: 100%;
		}

	}

	@media only screen and (max-width: 900px) {
		body {
			background-image: url(img/photos/login3.jpg);
			height: 100vh;
			background-size: 100%;
		}

	}
</style>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card">
							<div class="card-body">
								<div class="text-center mt-4">
									<h1 class="h2" style="font-size:34px;">Cleusa & Elas</h1>
								</div>
								<div class="m-sm-4">
									<a style="display:flex; justify-content:center;">
										<p class="lead" style="color: #636363;">Entre com seus dados para continuar
									</a>
									</a>
									<form method="post" action="../validacao.php">
										<div class="mb-3">
											<label class="form-label">Nome</label>
											<input class="form-control form-control-lg" type="text" name="txt_nome" placeholder="Digite o seu nome" />
										</div>
										<div class="mb-3">
											<label class="form-label">Senha</label>
											<input class="form-control form-control-lg" type="password" name="txt_senha" placeholder="Digite a sua senha" />
											<small>
												<a href="#">Esqueceu a senha?</a>
											</small>
										</div>
										<div class="text-center mt-3">
											<!--<a href="index.html" class="btn btn-lg btn-primary">Entrar</a>-->
											<button type="submit" class="btn btn-lg btn-primary">Entrar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>