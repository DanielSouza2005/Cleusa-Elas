<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$sqlTime = "select * from tb_time";
$sqlTime = mysqli_query($con, $sqlTime) or die("Erro na sqlTime!");

$sqlTimeGeral = "select * 
					from tb_timgeral";
$sqlTimeGeral = mysqli_query($con, $sqlTimeGeral) or die("Erro na sqlTimeGeral!");

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

    <title>Time | Visão Geral</title>

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
                    <h1 class="h3 mb-3"><strong>Time</strong> / Consulta</h1>
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
                                        <?php while ($dadosTimeGeral = mysqli_fetch_array($sqlTimeGeral)) { ?>
                                            <tr>
                                                <td><?php echo $dadosTimeGeral['timG_tituloEN']; ?></td>
                                                <td ><?php echo $dadosTimeGeral['timG_descricaoEN']; ?></td>
                                                <td >
                                                    <a style="padding-left: 35%;" href="form_atualizar_timeGEN.php?tim_codigo=<?php echo $dadosTimeGeral['timG_codigo']; ?>" class="card-link">
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
                        <h1 class="h3 mb-3"><strong>Profissionais</strong></h1>
                        <a href="form_time.php" class="card-link">
                            <span class="align-middle">Adicionar</span>
                            <i class="align-middle" data-feather="file-plus"></i>
                        </a> </br></br>

                        <?php while ($dadosTime = mysqli_fetch_array($sqlTime)) { ?>
                            <div class="col-12 col-md-3">
                                <div class="card">
                                    <img class="card-img-top" src="../time/<?php echo $dadosTime['tim_foto']; ?>" alt="Unsplash">
                                    <div class="card-body">
                                        <h5 class="card-title mb-0"><?php echo $dadosTime['tim_nome']; ?></h5></br>
                                        <p class="card-text"><?php echo $dadosTime['tim_especialidadeEN']; ?></p>
                                        <a href="form_atualizar_timeEN.php?tim_codigo=<?php echo $dadosTime['tim_codigo']; ?>" class="card-link">
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