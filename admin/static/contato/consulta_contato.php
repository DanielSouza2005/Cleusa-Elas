<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$sqlContato = "select * from tb_contato";
$sqlContato = mysqli_query($con, $sqlContato) or die("Erro na sqlContato!");

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

    <title>Contato | Visão Geral</title>

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
                        <h1 class="h3 mb-3"><strong>Contato</strong> / Consulta</h1>
                        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                            <div class="card flex-fill">
                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>Endereço</th>
                                            <th>Telefone</th>
                                            <th>Email</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($dadosContato = mysqli_fetch_array($sqlContato)) { ?>
                                            <tr>
                                                <td><?php echo substr($dadosContato['con_endereco'], 0, 45); ?> (...)</td>
                                                <td><?php echo $dadosContato['con_telefone']; ?></td>
                                                <td><?php echo $dadosContato['con_email']; ?></td>
                                                <td style="padding-left: 2%;">
                                                    <a href="form_atualizar_contato.php?con_codigo=<?php echo $dadosContato['con_codigo']; ?>" class="card-link">
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