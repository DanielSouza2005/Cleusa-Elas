<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$sqlIcones = "select * from tb_icone
              order by ico_descricao";
$sqlIcones = mysqli_query($con, $sqlIcones) or die("Erro na sqlIcones!");

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

    <title>Ícones | Visão Geral</title>

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

                    <h1 class="h3 mb-3"><strong>Ícones</strong> / Consulta</h1>
                    <a href="form_icones.php" class="card-link">
                        <span class="align-middle">Adicionar</span>
                        <i class="align-middle" data-feather="file-plus"></i>
                    </a> </br></br>

                    <div class="row">
                        <?php while ($dadosIcones = mysqli_fetch_array($sqlIcones)) { ?>
                            <div class="col-12 col-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="hidden" value="<?php echo $dadosIcones['ico_codigo']; ?>"></input>
                                        <h5 class="card-title mb-0"><?php echo $dadosIcones['ico_descricao']; ?></h5></br>
                                        <img class="card-img-top" src="<?php echo $dadosIcones['ico_icone']; ?>" alt="Icone"></br></br>
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

    <script type="text/javascript">
        function excluir_registro() {
            if (!confirm('Deseja realmente excluir este registro?')) {
                if (window.event)
                    window.event.returnValue = false;
                else
                    e.preventDefault();
            }
        }
    </script>


</body>

</html>