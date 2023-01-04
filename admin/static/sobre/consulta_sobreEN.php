<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

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

    <title>Sobre | Visão Geral</title>

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

                    <h1 class="h3 mb-3"><strong>Sobre</strong> / Consulta</h1>
                    <?php while ($dadosSobre = mysqli_fetch_array($sqlSobre)) { ?>
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <input type="hidden" value="<?php echo $dadosSobre['sob_codigo']; ?>"></input>
                                        <img class="card-img-top" src="<?php echo $dadosSobre['sob_foto']; ?>" alt="Home">
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
                                            <a href="form_atualizar_sobreEN.php?sob_codigo=<?php echo $dadosSobre['sob_codigo']; ?>" class="card-link">
                                                <span class="align-middle">Editar</span>
                                                <i class="align-middle" data-feather="edit"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>
                    <?php } ?>
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