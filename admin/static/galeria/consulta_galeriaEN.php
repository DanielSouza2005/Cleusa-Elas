<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$sqlGaleria = "select * from tb_galeria";
$sqlGaleria = mysqli_query($con, $sqlGaleria) or die("Erro na sqlGaleria!");

$sqlGaleriaGeral = "select * 
					from tb_galgeral";
$sqlGaleriaGeral = mysqli_query($con, $sqlGaleriaGeral) or die("Erro na sqlGaleriaGeral!");

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
    <link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Galeria | Visão Geral</title>

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

                    <h1 class="h3 mb-3"><strong>Galeria</strong> / Consulta</h1>

                    <div class="row">
                    <div class="col-12 col-lg-12 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Título</th>
											<th >Descrição</th>
                                            <th ></th>
										</tr>
									</thead>
									<tbody>
										<?php while ($dadosGaleriaGeral = mysqli_fetch_array($sqlGaleriaGeral)) { ?>
											<tr>
												<td><?php echo $dadosGaleriaGeral['galG_tituloEN']; ?></td>
												<td ><?php echo $dadosGaleriaGeral['galG_descricaoEN']; ?></td>
                                                <td >
                                                    <a style="padding-left: 50%;" href="form_atualizar_galeriaGEN.php?gal_codigo=<?php echo $dadosGaleriaGeral['galG_codigo']; ?>" class="card-link">
                                                        <span class="align-middle">Editar</span>
                                                        <i class="align-middle" data-feather="edit"></i>
                                                    </a>
                                                </td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
                        <?php while ($dadosGaleria = mysqli_fetch_array($sqlGaleria)) { ?>
                            <div class="col-12 col-md-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $dadosGaleria['gal_foto']; ?>" alt="Unsplash">
                                    <div class="card-body">
                                        <h5 class="card-title mb-0"><?php echo $dadosGaleria['gal_servicoEN']; ?></h5></br>
                                        <p class="card-text"><?php echo $dadosGaleria['gal_especificacaoEN']; ?></p>
                                        <a href="form_atualizar_galeriaEN.php?gal_codigo=<?php echo $dadosGaleria['gal_codigo']; ?>" class="card-link">
                                            <span class="align-middle">Editar</span>
                                            <i class="align-middle" data-feather="edit"></i>
                                        </a>
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