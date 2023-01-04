<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$id = $_REQUEST['sob_codigo'];

$sqlSobre = "select * from tb_sobre";
$sqlSobre = mysqli_query($con, $sqlSobre) or die("Erro na sqlSobre!");

$dadosSobre = mysqli_fetch_array($sqlSobre);

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

    <title>Sobre | Edição</title>

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

                    <h1 class="h3 mb-3"><strong>Sobre </strong>/ Edição</h1>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <form method="post" name="frm_sobre" id="frm_sobre" action="atualizar_sobreEN.php" enctype="multipart/form-data">
                                <input name="txt_codigo" type="hidden" id="txt_codigo" class="form-control" value="<?php echo $dadosSobre['sob_codigo']; ?>">
                                <!--<img class="card-img-top" src="<?php echo $dadosSobre['sob_foto']; ?>" alt="Sobre"> -->
                                <input name="txt_foto" id="txt_foto" type="hidden" class="form-control" value="<?php echo $dadosSobre['sob_foto']; ?>">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Foto</h5> </br>
                                            <input name="txt_arquivo" id="txt_arquivo" type="file" class="form-control">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Título</h5> </br>
                                            <input type="text" id="txt_titulo" value="<?php echo $dadosSobre['sob_tituloEN']; ?>" name="txt_titulo" class="form-control" placeholder="Digite uma frase de destaque">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Texto 1</h5> </br>
                                            <input type="text" id="txt_texto1" value="<?php echo $dadosSobre['sob_texto1EN']; ?>" name="txt_texto1" class="form-control" placeholder="Digite uma frase de destaque">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Texto 2</h5> </br>
                                            <input type="text" id="txt_texto2" value="<?php echo $dadosSobre['sob_texto2EN']; ?>" name="txt_texto2" class="form-control" placeholder="Digite uma frase de destaque">
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">
                                                <button name="btn_enviar" type="submit" onclick=" return validar_dados();" class="btn btn-success">Atualizar</button>
                                            </a>
                                            <a href="consulta_sobreEN.php" class="card-link">
                                                <button type="button" class="btn btn-primary">Cancelar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
            document.frm_sobre.txt_arquivo.focus()
        }

        function validar_dados() {
            if (document.frm_sobre.txt_arquivo.value == "") {
                alert("Você deve inserir uma Foto!");
                document.frm_sobre.txt_arquivo.focus();

                return false;
            }
            if (document.frm_sobre.txt_titulo.value == "") {
                alert("Você deve preencher o campo Título!");
                document.frm_sobre.txt_titulo.focus();

                return false;
            }
            if (document.frm_sobre.txt_texto1.value == "") {
                alert("Você deve preencher o campo Texto 1!");
                document.frm_sobre.txt_texto1.focus();

                return false;
            }
            if (document.frm_sobre.txt_texto2.value == "") {
                alert("Você deve preencher o campo Texto 2!");
                document.frm_sobre.txt_texto2.focus();

                return false;
            }


        }
    </script>




</body>

</html>