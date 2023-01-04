<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$sqlHome = "select * from tb_home";
$sqlHome = mysqli_query($con, $sqlHome) or die("Erro na sqlHome!");

$sqlServicos = "select * 
				from tb_servicos s
				inner join tb_icone i 
				on (i.ico_codigo =  s.ico_codigo)";
$sqlServicos = mysqli_query($con, $sqlServicos) or die("Erro na sqlServicos!");

$sqlServicosGeral = "select * 
					from tb_servgeral";
$sqlServicosGeral = mysqli_query($con, $sqlServicosGeral) or die("Erro na sqlServicosGeral!");

$sqlTime = "select * from tb_time";
$sqlTime = mysqli_query($con, $sqlTime) or die("Erro na sqlTime!");

$sqlTimeGeral = "select * 
					from tb_timgeral";
$sqlTimeGeral = mysqli_query($con, $sqlTimeGeral) or die("Erro na sqlTimeGeral!");

$sqlGaleria = "select * from tb_galeria";
$sqlGaleria = mysqli_query($con, $sqlGaleria) or die("Erro na sqlGaleria!");

$sqlGaleriaGeral = "select * 
					from tb_galgeral";
$sqlGaleriaGeral = mysqli_query($con, $sqlGaleriaGeral) or die("Erro na sqlGaleriaGeral!");

$sqlContato = "select * from tb_contato";
$sqlContato = mysqli_query($con, $sqlContato) or die("Erro na sqlContato!");

$sqlCores = "select * from tb_cor
                   where cor_codigo = 1";
$sqlCores = mysqli_query($con, $sqlCores) or die("Erro na sqlCores!");

$sqlSobre = "select * from tb_sobre";
$sqlSobre = mysqli_query($con, $sqlSobre) or die("Erro na sqlSobre!");

?>

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
	<link href="../../../images/favicon.png" rel="icon">

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Cleusa & Elas | Inglês </title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php
		include('../menu.php');
		?>

		<div class="main">
			<?php
			include('../header.php');
			?>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<h1 class="h3 mb-3"><strong>Página Inicial</strong></h1>
						<?php while ($dadosHome = mysqli_fetch_array($sqlHome)) { ?>
							<div class="col-12 col-md-6">
								<div class="card">
									<img class="card-img-top" src="<?php echo $dadosHome['hom_foto']; ?>" alt="Unsplash">
									<div class="card-body">
										<h5 class="card-title mb-0">Frase</h5></br>
										<p class="card-text"><?php echo $dadosHome['hom_fraseEN']; ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row">
						<h1 class="h3 mb-3"><strong>Sobre</strong></h1>
						<?php while ($dadosSobre = mysqli_fetch_array($sqlSobre)) { ?>
							<div class="col-12 col-md-6">
								<div class="card">
									<img class="card-img-top" src="../sobre/<?php echo $dadosSobre['sob_foto']; ?>" alt="Unsplash">
									
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title mb-0">Título</h5></br>
										<p class="card-text"><?php echo $dadosSobre['sob_tituloEN']; ?></p>
									</div>
									<div class="card-body">
										<h5 class="card-title mb-0">Texto 1</h5></br>
										<p class="card-text"><?php echo $dadosSobre['sob_texto1EN']; ?></p>
									</div>
									<div class="card-body">
										<h5 class="card-title mb-0">Texto 2</h5></br>
										<p class="card-text"><?php echo $dadosSobre['sob_texto2EN']; ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row">
						<h1 class="h3 mb-3"><strong>Serviços</strong></h1>
						<div class="col-12 col-lg-12 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Título</th>
											<th class="d-none d-xl-table-cell">Descrição</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($dadosServicosGeral = mysqli_fetch_array($sqlServicosGeral)) { ?>
											<tr>
												<td><?php echo $dadosServicosGeral['serG_tituloEN']; ?></td>
												<td class="d-none d-xl-table-cell"><?php echo $dadosServicosGeral['serG_descricaoEN']; ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<?php while ($dadosServicos = mysqli_fetch_array($sqlServicos)) { ?>
							<div class="col-12 col-md-3">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title mb-0"><?php echo $dadosServicos['ser_tituloEN']; ?></h5></br>
										<img class="card-img-top" src="../icones/<?php echo $dadosServicos['ico_icone']; ?>" alt="Servico"></br></br>
										<p class="card-text"><?php echo $dadosServicos['ser_descricaoEN']; ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row">
						<h1 class="h3 mb-3"><strong>Time</strong></h1>
						<div class="col-12 col-lg-12 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Título</th>
											<th class="d-none d-xl-table-cell">Descrição</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($dadosTimeGeral = mysqli_fetch_array($sqlTimeGeral)) { ?>
											<tr>
												<td><?php echo $dadosTimeGeral['timG_tituloEN']; ?></td>
												<td class="d-none d-xl-table-cell"><?php echo $dadosTimeGeral['timG_descricaoEN']; ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<?php while ($dadosTime = mysqli_fetch_array($sqlTime)) { ?>
							<div class="col-12 col-md-3">
								<div class="card">
									<img class="card-img-top" src="../time/<?php echo $dadosTime['tim_foto']; ?>" alt="Unsplash">
									<div class="card-body">
										<h5 class="card-title mb-0"><?php echo $dadosTime['tim_nome']; ?></h5></br>
										<p class="card-text"><?php echo $dadosTime['tim_especialidadeEN']; ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row">
						<h1 class="h3 mb-3"><strong>Galeria</strong></h1>
						<div class="col-12 col-lg-12 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Título</th>
											<th class="d-none d-xl-table-cell">Descrição</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($dadosGaleriaGeral = mysqli_fetch_array($sqlGaleriaGeral)) { ?>
											<tr>
												<td><?php echo $dadosGaleriaGeral['galG_tituloEN']; ?></td>
												<td class="d-none d-xl-table-cell"><?php echo $dadosGaleriaGeral['galG_descricaoEN']; ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<?php while ($dadosGaleria = mysqli_fetch_array($sqlGaleria)) { ?>
							<div class="col-12 col-md-3">
								<div class="card">
									<img class="card-img-top" src="../galeria/<?php echo $dadosGaleria['gal_foto']; ?>" alt="Unsplash">
									<div class="card-body">
										<h5 class="card-title mb-0"><?php echo $dadosGaleria['gal_servicoEN']; ?></h5></br>
										<p class="card-text"><?php echo $dadosGaleria['gal_especificacaoEN']; ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row">
						<h1 class="h3 mb-3"><strong>Contato</strong></h1>
						<div class="col-12 col-lg-12 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Endereço</th>
											<th>Telefone</th>
											<th>Email</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($dadosContato = mysqli_fetch_array($sqlContato)) { ?>
											<tr>
												<td><?php echo substr($dadosContato['con_enderecoEN'], 0, 38); ?> (...)</td>
												<td><?php echo $dadosContato['con_telefone']; ?></td>
												<td><?php echo $dadosContato['con_email']; ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<h1 class="h3 mb-3"><strong>Cores</strong> </h1>
						<?php while ($dadosCores = mysqli_fetch_array($sqlCores)) { ?>
							<div class="col-12 col-md-4">
								<div class="card">
									<div class="card-body">
										<div style="width: 100%;">
											<img class="card-img-top" style="height: 200px; background-color: <?php echo $dadosCores['cor_principal']; ?>"></br></br>
										</div>
										<p class="card-text">Cor Principal: <?php echo $dadosCores['cor_principal']; ?></p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="card">
									<div class="card-body">
										<div style="width: 100%;">
											<img class="card-img-top" style="height: 200px; background-color: <?php echo $dadosCores['cor_titulos']; ?>"></br></br>
										</div>
										<p class="card-text">Cor Título: <?php echo $dadosCores['cor_titulos']; ?></p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="card">
									<div class="card-body">
										<div>
											<img class="card-img-top" style="height: 200px; background-color: <?php echo $dadosCores['cor_apoio']; ?>"></br></br>
										</div>
										<p class="card-text">Cor Apoio: <?php echo $dadosCores['cor_apoio']; ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</main>
			<?php
			include('../footer.php');
			?>

		</div>
	</div>

	<script src="../js/app.js"></script>




</body>

</html>