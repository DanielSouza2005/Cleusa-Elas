<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$id = $_REQUEST['tim_codigo'];

$sqlTime = "select * 
                from tb_timgeral   
                where timG_codigo = '$id'";

$sqlTime = mysqli_query($con, $sqlTime) or die("Erro na sqlTime!");

$dadosTime = mysqli_fetch_array($sqlTime);

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

    <title>Time | Edição</title>

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

                    <h1 class="h3 mb-3"><strong>Time </strong>/ Edição</h1>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <form method="post" name="frm_time" id="frm_time" action="atualizar_timeG.php" enctype="multipart/form-data">
                                <input name="txt_codigo" type="hidden" id="txt_codigo" class="form-control" value="<?php echo $dadosTime['timG_codigo']; ?>">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Título</h5> </br>
                                            <input type="text" id="txt_titulo" value="<?php echo $dadosTime['timG_titulo']; ?>" name="txt_titulo" class="form-control" placeholder="Digite um serviço">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Descrição</h5> </br>
                                            <input type="text" id="txt_descricao" value="<?php echo $dadosTime['timG_descricao']; ?>" name="txt_descricao" class="form-control" placeholder="Digite uma descrição">
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">
                                                <button name="btn_enviar" type="submit" onclick="return validar_dados();" class="btn btn-success">Atualizar</button>
                                            </a>
                                            <a href="consulta_time.php" class="card-link">
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
            document.frm_time.txt_titulo.focus()
        }

        function validar_dados() {
            if (document.frm_time.txt_titulo.value == "") {
                alert("Você deve preencher o campo Título!");
                document.frm_time.txt_titulo.focus();

                return false;
            }
            if (document.frm_time.txt_descricao.value == "") {
                alert("Você deve preencher o campo Descrição!");
                document.frm_time.txt_descricao.focus();

                return false;
            }
        }
    </script>




</body>

</html>