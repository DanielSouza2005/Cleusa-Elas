<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$id = $_REQUEST['gal_codigo'];

$sqlGaleria = "select * from tb_galeria where gal_codigo = '$id'";
$sqlGaleria = mysqli_query($con, $sqlGaleria) or die("Erro na sqlGaleria!");

$dadosGaleria = mysqli_fetch_array($sqlGaleria);

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

    <title>Galeria | Edição</title>

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

                    <h1 class="h3 mb-3"><strong>Galeria </strong>/ Edição</h1>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <form method="post" name="frm_galeria" id="frm_galeria" action="atualizar_galeria.php" enctype="multipart/form-data">
                                <input name="txt_codigo" type="hidden" id="txt_codigo" class="form-control" value="<?php echo $dadosGaleria['gal_codigo']; ?>">
                                <input name="txt_foto" id="txt_foto" type="hidden" class="form-control" value="<?php echo $dadosGaleria['gal_foto']; ?>">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Serviço</h5> </br>
                                            <input type="text" id="txt_servico" value="<?php echo $dadosGaleria['gal_servico']; ?>" name="txt_servico" class="form-control" placeholder="Digite o serviço">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Especificação</h5> </br>
                                            <input type="text" id="txt_especificacao" value="<?php echo $dadosGaleria['gal_especificacao']; ?>" name="txt_especificacao" class="form-control" placeholder="Digite a especialidade">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Foto</h5> </br>
                                            <input name="txt_arquivo" id="txt_arquivo" type="file" class="form-control">
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">
                                                <button name="btn_enviar" type="submit" onclick=" return validar_dados();" class="btn btn-success">Atualizar</button>
                                            </a>
                                            <a href="consulta_galeria.php" class="card-link">
                                                <button type="button" class="btn btn-primary">Cancelar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card-body" style="width: 98%;">
                                <div class="card">
                                    <img class="card-img-top"  src="<?php echo $dadosGaleria['gal_foto']; ?>" alt="<?php echo $dadosGaleria['gal_servico']; ?>">
                                </div>
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
            document.frm_galeria.txt_servico.focus()
        }

        function validar_dados() {
            if (document.frm_galeria.txt_servico.value == "") {
                alert("Você deve preencher o campo Serviço!");
                document.frm_galeria.txt_servico.focus();

                return false;
            }
            if (document.frm_galeria.txt_especificacao.value == "") {
                alert("Você deve preencher o campo Especificação!");
                document.frm_galeria.txt_especificacao.focus();

                return false;
            }
            if (document.frm_galeria.txt_arquivo.value == "") {
                alert("Você deve inserir uma Foto!");
                document.frm_galeria.txt_arquivo.focus();

                return false;
            }
            


        }
    </script>




</body>

</html>