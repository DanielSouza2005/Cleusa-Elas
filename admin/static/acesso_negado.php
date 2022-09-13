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
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Cleusa & Elas | Acesso Negado</title>

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
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100" style="width: 40%;">
					<div class="d-table-cell align-middle">
						<div class="card">
							<div class="card-body">
								<div class="m-sm-6">
									<div class="text-center mt-4">
										<h1 class="h1">Cleusa & Elas</h1>
									</div>
									<!--<div class="text-center">
										<img src="img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div> -->
									<form method="post" action="login.php">
										<div class="text-center mt-3">
											<p style="font-size: 16px;">Nome ou senha inválidos!</p>
											<!--<a href="index.html" class="btn btn-lg btn-primary">Entrar</a>-->
											<button type="submit" class="btn btn-lg btn-primary">Voltar</button>
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