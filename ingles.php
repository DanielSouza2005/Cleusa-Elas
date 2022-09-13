<?php

require_once('conexao/bancoSistema.php');
require_once('conexao/bancoCleusa.php');

$sqlTipoServicos = "select * from tb_tiposervico";
$sqlTipoServicos = mysqli_query($conSistema, $sqlTipoServicos) or die("Erro na sqlTipoServicos!");

$sqlHorario = "select * from tb_horario";
$sqlHorario = mysqli_query($conSistema, $sqlHorario) or die("Erro na sqlHorario!");

$sqlHome = "select * from tb_home";
$sqlHome = mysqli_query($con, $sqlHome) or die("Erro na sqlHome!");

$dadosHome = mysqli_fetch_array($sqlHome);

$sqlServicos = "select * from tb_servicos s
				inner join tb_icone i on (s.ico_codigo = i.ico_codigo)";
$sqlServicos = mysqli_query($con, $sqlServicos) or die("Erro na sqlServicos!");

$sqlServicosGeral = "select * 
					from tb_servgeral";
$sqlServicosGeral = mysqli_query($con, $sqlServicosGeral) or die("Erro na sqlServicosGeral!");

$dadosServicosGeral = mysqli_fetch_array($sqlServicosGeral);

$sqlTime = "select * from tb_time";
$sqlTime = mysqli_query($con, $sqlTime) or die("Erro na sqlTime!");

$sqlTimeGeral = "select * 
					from tb_timgeral";
$sqlTimeGeral = mysqli_query($con, $sqlTimeGeral) or die("Erro na sqlTimeGeral!");

$dadosTimeGeral = mysqli_fetch_array($sqlTimeGeral);

$sqlGaleria = "select * from tb_galeria";
$sqlGaleria = mysqli_query($con, $sqlGaleria) or die("Erro na sqlGaleria!");

$sqlGaleriaGeral = "select * 
					from tb_galgeral";
$sqlGaleriaGeral = mysqli_query($con, $sqlGaleriaGeral) or die("Erro na sqlGaleriaGeral!");

$dadosGaleriaGeral = mysqli_fetch_array($sqlGaleriaGeral);

$sqlContato = "select * from tb_contato";
$sqlContato = mysqli_query($con, $sqlContato) or die("Erro na sqlContato!");

$dadosContato = mysqli_fetch_array($sqlContato);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cleusa & Elas: Cabelo e Estética</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="canonical" href="https://demo-basic.adminkit.io/icons-feather.html" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<style type="text/css">
	.ftco-navbar-light.scrolled.awake .menu-link {
		padding-top: 2%;
	}

	.menu-link {
		padding-top: 4%;
	}

	.ftco-navbar-light.scrolled.awake .menu-acesso {
		padding-top: 0.5% !important;
	}

	.menu-acesso {
		padding-left: 0px !important;
		padding-top: 2.5% !important;
		padding-bottom: 0px !important;
	}
</style>

<body onload="carregaDiaAtual();">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Cleusa & Elas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse menu" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="#home" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
					<li class="nav-item"><a href="#gallery" class="nav-link">Galery</a></li>
					<li class="nav-item"><a href="#booking" class="nav-link">Scheduling</a></li>
					&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
					<a href="index.php" class="menu-link">
						<img class="botao-ingles" src="images/BR.png">
					</a>
					&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
					<a class="navbar-brand menu-acesso" href="admin/static/login.php">
						<i class="align-middle" data-feather="log-in"></i>
					</a>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="hero-wrap js-fullheight" id="home" style="background-image: url(admin/static/home/<?php echo $dadosHome['hom_foto']; ?>);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
				<div class="col-lg-12 ftco-animate d-flex align-items-center">
					<div class="text text-center">
						<span class="subheading"><?php echo $dadosHome['hom_fraseEN']; ?></span>
						<h1 class="mb-4">Cleusa & Elas</h1>
						<p><a href="#booking" class="btn btn-primary btn-outline-primary px-4 py-2">Schedule now</a></p>
					</div>
				</div>
			</div>
		</div>
		</div>


		<section class="services-section ftco-section" id="services">
			<div class="container">
				<div class="row justify-content-center pb-3">
					<div class="col-md-10 heading-section text-center ftco-animate">

						<h2 class="mb-4"><?php echo $dadosServicosGeral['serG_tituloEN']; ?></h2>
						<p><?php echo $dadosServicosGeral['serG_descricaoEN']; ?></p>
					</div>
				</div>
				<div class="row no-gutters d-flex">
					<?php while ($dadosServicos = mysqli_fetch_array($sqlServicos)) { ?>
						<div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services d-block text-center">
								<div class="icon">
									<img class="card-img-top" style=" width: 90px;" src="<?php echo "admin/static/icones/" . $dadosServicos['ico_icone']; ?>" alt="Icone">
								</div> </br>
								<div class="media-body">
									<h3 class="heading mb-3"><?php echo $dadosServicos['ser_tituloEN']; ?> </h3>
									<p><?php echo $dadosServicos['ser_descricaoEN']; ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-team" id="team">
			<div class="container-fluid px-md-5">
				<div class="row justify-content-center pb-3">
					<div class="col-md-10 heading-section text-center ftco-animate">
						<h2 class="mb-4"><?php echo $dadosTimeGeral['timG_tituloEN']; ?> </h2>
						<p><?php echo $dadosTimeGeral['timG_descricaoEN']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ftco-animate">
						<div class="carousel-team owl-carousel">
							<?php while ($dadosTime = mysqli_fetch_array($sqlTime)) { ?>
								<div class="item">
									<a href="#" class="team text-center">
										<div class="img" style="background-image: url(admin/static/time/<?php echo $dadosTime['tim_foto']; ?>);"></div>
										<h2><?php echo $dadosTime['tim_nome']; ?> </h2>
										<span class="position"><?php echo $dadosTime['tim_especialidadeEN']; ?></span>
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="gallery">
			<div class="container">
				<div class="row no-gutters justify-content-center mb-5 pb-2">
					<div class="col-md-6 text-center heading-section ftco-animate">

						<h2 class="mb-4"><?php echo $dadosGaleriaGeral['galG_tituloEN']; ?> </h2>
						<p><?php echo $dadosGaleriaGeral['galG_descricaoEN']; ?></p>
					</div>
				</div>
			</div>
			<div class="container-fluid p-0">
				<div class="row no-gutters">
					<?php while ($dadosGaleria = mysqli_fetch_array($sqlGaleria)) { ?>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="project">
								<img src="admin/static/galeria/<?php echo $dadosGaleria['gal_foto']; ?>" class="img-fluid" alt="<?php echo $dadosGaleria['gal_servicoEN']; ?>">
								<div class="text">
									<span><?php echo $dadosGaleria['gal_servicoEN']; ?></span>
									<h3><a href="project.html"><?php echo $dadosGaleria['gal_especificacaoEN']; ?></a></h3>
								</div>
								<a href="admin/static/galeria/<?php echo $dadosGaleria['gal_foto']; ?>" class="icon image-popup d-flex justify-content-center align-items-center">
									<span class="icon-expand"></span>
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

			<section class="ftco-section ftco-booking bg-light" id="booking">
				<div class="container ftco-relative">
					<div class="row justify-content-center pb-3">
						<div class="col-md-10 heading-section text-center ftco-animate">

							<h2 class="mb-4">Schedule Now</h2>
							<p>Schedule online the beauty services closest to you!
							</p>
						</div>
					</div>
					<h3 class="vr">TELEFONE:(19) 3455-3155</h3>
					<div class="row justify-content-center">
						<div class="col-md-10 ftco-animate">
							<form action="agendamento/cadastro_agendamento.php" name="frm_agendamento" id="frm_agendamento" class="appointment-form">
								<div class="row">
									<div class="col-sm-6">
										<label>Full Name</label>
										<div class="form-group">
											<input type="text" class="form-control" id="txt_nome" name="txt_nome" placeholder="Enter your Name">
										</div>
									</div>
									<div class="col-sm-6">
										<label>Phone Number</label>
										<div class="form-group">
											<input type="text" class="form-control" id="txt_telefone" maxlength="15" name="txt_telefone" placeholder="Enter your Phone Number" data-inputmask='"mask": "(99) 99999-9999"' data-mask>
										</div>
									</div>

									<div class="col-sm-6">
										<label>Service</label>
										<div class="form-group">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="txt_tiposervico" id="txt_tiposervico" class="form-control">
													<option value=" ">Select the Service Type...</option>
													<?php while ($dadosTipoServicos = mysqli_fetch_array($sqlTipoServicos)) { ?>

														<option value="<?php echo $dadosTipoServicos['tps_codigo']; ?>"> <?php echo $dadosTipoServicos['tps_descricao']; ?> </option>

													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<label>Especificação</label>
										<div class="form-group">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="txt_descricao" id="txt_descricao" class="form-control">
													<option value=" ">Select a Specification...</option>
													<option value="Corte">Corte</option>
													<option value="Escovas">Escovas</option>
													<option value="Hidratacao">Hidratação</option>
													<option value="Coloracao">Coloração </option>
													<option value="Cauterizacao">Cauterização </option>
													<option value="Selagem e Luzes">Selagem e Luzes </option>
													<option value="Estetica">Estética</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<label>Date</label>
										<div class="form-group">
											<input type="date" name="txt_data" id="txt_data" class="form-control" placeholder="Data">
										</div>
									</div>
									<div class="col-sm-6">
										<label>Time</label>
										<div class="form-group">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="txt_horario" id="txt_horario" class="form-control">
													<option value="0">Select the Time...</option>
													<?php while ($dadosHorario = mysqli_fetch_array($sqlHorario)) { ?>

														<option value="<?php echo substr($dadosHorario['hor_horario'], 0, -9); ?>"> <?php echo substr($dadosHorario['hor_horario'], 0, -9); ?> </option>

													<?php } ?>
												</select>
											</div>
										</div>
									</div>



								</div>
								<div class="form-group">
									<input type="submit" value="Agende Agora!" class="btn btn-primary" onclick="return validar_dados();">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<footer class="ftco-footer ftco-section">
				<div class="container">
					<div class="row mb-5">
						<div class="col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2 logo">Cleusa & Elas </h2>
								<p>OUR GOAL IS TO MAKE YOU FEEL CONFIDENT!</br>
									Follow us on our social networks.</p>
								<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Have any questions?</h2>
								<div class="block-23 mb-3">
									<ul>
										<li><span class="icon icon-map-marker"></span><span class="text"><?php echo $dadosContato['con_enderecoEN'] ?></span>
										</li>
										<li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $dadosContato['con_telefone'] ?></span></a></li>
										<li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $dadosContato['con_email'] ?></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">

							<p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>
					</div>
				</div>
			</footer>

			<!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
					<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
					<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
				</svg></div>


			<script src="js/jquery.min.js"></script>
			<script src="js/jquery-migrate-3.0.1.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.easing.1.3.js"></script>
			<script src="js/jquery.waypoints.min.js"></script>
			<script src="js/jquery.stellar.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/aos.js"></script>
			<script src="js/jquery.animateNumber.min.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
			<script src="js/jquery.timepicker.min.js"></script>
			<script src="js/scrollax.min.js"></script>
			<script src="js/main.js"></script>
			<script src="js/jquery.bootstrap-duallistbox.min.js"></script>
			<script src="js/moment.min.js"></script>
			<script src="js/jquery.inputmask.min.js"></script>
			<script src="js/app.js"></script>

			<script>
				$(function() {
					//Datemask dd/mm/yyyy
					$('#datemask').inputmask('dd/mm/yyyy', {
						'placeholder': 'dd/mm/yyyy'
					})
					//Datemask2 mm/dd/yyyy
					$('#datemask2').inputmask('mm/dd/yyyy', {
						'placeholder': 'mm/dd/yyyy'
					})
					//Money Euro
					$('[data-mask]').inputmask()

					//Bootstrap Duallistbox
					$('.duallistbox').bootstrapDualListbox()

					$("input[data-bootstrap-switch]").each(function() {
						$(this).bootstrapSwitch('state', $(this).prop('checked'));
					})

				})
			</script>
			<script>
				function carregaDiaAtual() {
					var Hoje = new Date(Date());
					var dia = Hoje.getDate().toString().padStart(2, '0');
					var mes = (Hoje.getMonth() + 1).toString().padStart(2, '0'); //+1 pois no getMonth Janeiro começa com zero.
					var ano = Hoje.getFullYear();
					Hoje = ano + "-" + mes + "-" + dia;
					document.frm_agendamento.txt_data.value = Hoje;
				}

				function validar_dados() {
					if (document.frm_agendamento.txt_nome.value == "") {
						alert("Você deve preencher o campo Nome!");
						document.frm_agendamento.txt_nome.focus();

						return false;
					}
					if (document.frm_agendamento.txt_telefone.value == "") {
						alert("Você deve preencher o campo Celular!");
						document.frm_agendamento.txt_telefone.focus();

						return false;
					}
					var celular = document.getElementById('txt_telefone').value;
					if (celular.length < 14) {
						alert("Você deve preencher o campo Celular por inteiro!");
						document.frm_agendamento.txt_telefone.focus();

						return false;
					}
					if (document.frm_agendamento.txt_tiposervico.value == " ") {
						alert("Você deve preencher o campo Tipo de Serviço!");
						document.frm_agendamento.txt_tiposervico.focus();

						return false;
					}
					if (document.frm_agendamento.txt_descricao.value == " ") {
						alert("Você deve preencher o campo Especificação!");
						document.frm_agendamento.txt_descricao.focus();

						return false;
					}

					if (document.frm_agendamento.txt_data.value == "") {
						alert("Você deve preencher o campo Data!");
						document.frm_agendamento.txt_data.focus();

						return false;
					}


					if (document.frm_agendamento.txt_horario.value === "0") {

						alert("Você deve preencher o campo Horário!");
						document.frm_agendamento.txt_horario.focus();

						return false;
					}

					var data = document.getElementById('txt_data').value;
					var horario = document.getElementById('txt_horario').value;
					var dataDigitada = new Date(data + ' ' + horario);
					var dataAtual = new Date();

					if (new Date(dataDigitada).getDay() === 0) {

						alert("O agendamento deve ser marcado em um dia útil!");
						document.frm_agendamento.txt_data.focus();

						return false;
					}

					if (new Date(dataDigitada).getTime() < new Date(dataAtual).getTime()) {

						alert("O dia deve ser maior ou igual ao dia atual!");
						document.frm_agendamento.txt_data.focus();

						return false;
					}
				}
			</script>

</body>

</html>