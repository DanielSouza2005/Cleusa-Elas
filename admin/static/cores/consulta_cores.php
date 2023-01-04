<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$sqlCores = "select * from tb_cor
                   where cor_codigo = 1";
$sqlCores = mysqli_query($con, $sqlCores) or die("Erro na sqlCores!");

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

    <title>Cores | Visão Geral</title>

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
                        <h1 class="h3 mb-3"><strong>Cores</strong> / Consulta</h1>
                        <?php while ($dadosCores = mysqli_fetch_array($sqlCores)) { ?>
                            <div class="col-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="width: 100%;">
                                            <img class="card-img-top" style="height: 200px; background-color: <?php echo $dadosCores['cor_principal']; ?>"></br></br>
                                        </div>
                                        <p class="card-text">Cor Principal: <?php echo $dadosCores['cor_principal']; ?></p>
                                        <a href="form_atualizar_cores.php?cor_codigo=<?php echo $dadosCores['cor_codigo']; ?>" class="card-link">
                                            <span class="align-middle">Editar</span>
                                            <i class="align-middle" data-feather="edit"></i>
                                        </a>
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
                                        <a href="form_atualizar_cores.php?cor_codigo=<?php echo $dadosCores['cor_codigo']; ?>" class="card-link">
                                            <span class="align-middle">Editar</span>
                                            <i class="align-middle" data-feather="edit"></i>
                                        </a>
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
                                        <a href="form_atualizar_cores.php?cor_codigo=<?php echo $dadosCores['cor_codigo']; ?>" class="card-link">
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