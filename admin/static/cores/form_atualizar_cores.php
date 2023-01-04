<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$id = $_REQUEST['cor_codigo'];

$sqlCores = "select *
             from tb_cor 
             where cor_codigo = '$id' ";

$sqlCores = mysqli_query($con, $sqlCores) or die("Erro na sqlCores!");

$sqlCores2 = "select * from tb_cor";
$sqlCores2 = mysqli_query($con, $sqlCores2) or die("Erro na sqlCores2!");

$sqlCores3 = "select * from tb_cor";
$sqlCores3 = mysqli_query($con, $sqlCores3) or die("Erro na sqlCores3!");

$dadosCores3 = mysqli_fetch_array($sqlCores3);

$sqlCoresSelect = "select * 
                   from tb_coraux";
$sqlCoresSelect = mysqli_query($con, $sqlCoresSelect) or die("Erro na sqlCoresSelect!");

$sqlCoresSelect2 = "select *
                   from tb_coraux";
$sqlCoresSelect2 = mysqli_query($con, $sqlCoresSelect2) or die("Erro na sqlCoresSelect2!");

$sqlCoresSelect3 = "select *
                   from tb_coraux";
$sqlCoresSelect3 = mysqli_query($con, $sqlCoresSelect3) or die("Erro na sqlCoresSelect3!");

$sqlCoresLegenda = "select *
                   from tb_coraux";
$sqlCoresLegenda = mysqli_query($con, $sqlCoresLegenda) or die("Erro na sqlCoresLegenda!");

function validacao1($dadosCoresSelect, $dadosCores3)
{
    if ($dadosCoresSelect['cor_principal'] == $dadosCores3['cor_principal']) {
        echo "selected";
    } 
}

function validacao2($dadosCoresSelect, $dadosCores3)
{
    if ($dadosCoresSelect['cor_titulos'] == $dadosCores3['cor_principal']) {
        echo "selected";
    } 
}

function validacao3($dadosCoresSelect, $dadosCores3)
{
    if ($dadosCoresSelect['cor_apoio'] == $dadosCores3['cor_principal']) {
        echo "selected";
    }
}

function validacao4($dadosCoresSelect2, $dadosCores3)
{
    if ($dadosCoresSelect2['cor_principal'] == $dadosCores3['cor_titulos']) {
        echo "selected";
    } 
}

function validacao5($dadosCoresSelect2, $dadosCores3)
{
    if ($dadosCoresSelect2['cor_titulos'] == $dadosCores3['cor_titulos']) {
        echo "selected";
    }
}

function validacao6($dadosCoresSelect2, $dadosCores3)
{
    if ($dadosCoresSelect2['cor_apoio'] == $dadosCores3['cor_titulos']) {
        echo "selected";
    }
}

function validacao7($dadosCoresSelect3, $dadosCores3)
{
    if ($dadosCoresSelect3['cor_principal'] == $dadosCores3['cor_apoio']) {
        echo "selected";
    } 
}

function validacao8($dadosCoresSelect3, $dadosCores3)
{
    if ($dadosCoresSelect3['cor_titulos'] == $dadosCores3['cor_apoio']) {
        echo "selected";
    }
}

function validacao9($dadosCoresSelect3, $dadosCores3)
{
    if ($dadosCoresSelect3['cor_apoio'] == $dadosCores3['cor_apoio']) {
        echo "selected";
    }
}

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

    <title>Cores | Edição</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body onload="foco();">
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

                    <h1 class="h3 mb-3"><strong>Cores </strong>/ Edição</h1>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <form method="post" name="frm_cores" id="frm_cores" action="atualizar_cores.php" enctype="multipart/form-data">
                                <?php while ($dadosCores = mysqli_fetch_array($sqlCores)) { ?>
                                    <input name="txt_codigo" type="hidden" id="txt_codigo" class="form-control" value="<?php echo $dadosCores['cor_codigo']; ?>">
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0"></h5> Cor Principal </br></br>
                                                <select class="form-select mb-3" name="txt_primaria" id="txt_primaria">
                                                    <?php while ($dadosCoresSelect = mysqli_fetch_array($sqlCoresSelect)) { ?>

                                                        <option value="#F8A1E0" <?php validacao1($dadosCoresSelect, $dadosCores3); ?>> #F8A1E0 </option>
                                                        <option value="#B30009" <?php validacao2($dadosCoresSelect, $dadosCores3); ?>> #B30009 </option>
                                                        <option value="#7E0009" <?php validacao3($dadosCoresSelect, $dadosCores3); ?>> #7E0009</option>
                                                    <?php } ?>
                                                </select>
                                                <h5 class="card-title mb-0"></h5> Cor Títulos </br></br>
                                                <select class="form-select mb-3" name="txt_titulo" id="txt_titulo">
                                                    <?php while ($dadosCoresSelect2 = mysqli_fetch_array($sqlCoresSelect2)) { ?>
                                                        <option value="#F8A1E0" <?php validacao4($dadosCoresSelect2, $dadosCores3); ?>> #F8A1E0 </option>
                                                        <option value="#B30009" <?php validacao5($dadosCoresSelect2, $dadosCores3); ?>> #B30009 </option>
                                                        <option value="#7E0009" <?php validacao6($dadosCoresSelect2, $dadosCores3); ?>> #7E0009 </option>
                                                    <?php } ?>
                                                </select>
                                                <h5 class="card-title mb-0"></h5> Cor Apoio </br></br>
                                                <select class="form-select mb-3" name="txt_apoio" id="txt_apoio">
                                                    <?php while ($dadosCoresSelect3 = mysqli_fetch_array($sqlCoresSelect3)) { ?>
                                                        <option value="#F8A1E0" <?php validacao7($dadosCoresSelect3, $dadosCores3); ?>> #F8A1E0 </option>
                                                        <option value="#B30009" <?php validacao8($dadosCoresSelect3, $dadosCores3); ?>> #B30009 </option>
                                                        <option value="#7E0009" <?php validacao9($dadosCoresSelect3, $dadosCores3); ?>> #7E0009 </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="card-link">
                                                    <button name="btn_enviar" type="submit" onclick=" return validar_dados();" class="btn btn-success">Atualizar</button>
                                                </a>
                                                <a href="consulta_cores.php" class="card-link">
                                                    <button type="button" class="btn btn-primary">Cancelar</button>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                            </form>
                        </div>
                        <?php while ($dadosCoresLegenda = mysqli_fetch_array($sqlCoresLegenda)) { ?>
                            <div class="col-12 col-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="width: 100%;">
                                            <img class="card-img-top" style="height: 100px; background-color: <?php echo $dadosCoresLegenda['cor_principal']; ?>"></br></br>
                                        </div>
                                        <!--<h1 class="h5 mb-3"></h1>-->
                                        <p class="card-text"><?php echo $dadosCoresLegenda['cor_principal']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="width: 100%;">
                                            <img class="card-img-top" style="height: 100px; background-color: <?php echo $dadosCoresLegenda['cor_titulos']; ?>"></br></br>
                                        </div>
                                         <!--<h1 class="h5 mb-3"></h1>-->
                                        <p class="card-text"><?php echo $dadosCoresLegenda['cor_titulos']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="width: 100%;">
                                            <img class="card-img-top" style="height: 100px; background-color: <?php echo $dadosCoresLegenda['cor_apoio']; ?>"></br></br>
                                        </div>
                                         <!--<h1 class="h5 mb-3"></h1>-->
                                        <p class="card-text"><?php echo $dadosCoresLegenda['cor_apoio']; ?></p>
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
    <script language="JavaScript">
        function mascara(t, mask) {

            var i = t.value.length;
            var saida = mask.substring(1, 0);
            var texto = mask.substring(i)

            if (texto.substring(0, 1) != saida) {
                t.value += texto.substring(0, 1);
            }

        }

        function foco() {
            document.frm_cores.txt_primaria.focus()
        }

        function validar_dados() {
            if (document.frm_cores.txt_primaria.value == "") {
                alert("Você deve preencher o campo Cor Principal!");
                document.frm_cores.txt_primaria.focus();

                return false;
            }

            if (document.frm_cores.txt_titulo.value == "") {
                alert("Você deve preencher o campo Cor Títulos!");
                document.frm_cores.txt_titulo.focus();

                return false;
            }

            if (document.frm_cores.txt_apoio.value == "") {
                alert("Você deve preencher o campo Cor Apoio!");
                document.frm_cores.txt_apoio.focus();

                return false;
            }

        }
    </script>




</body>

</html>