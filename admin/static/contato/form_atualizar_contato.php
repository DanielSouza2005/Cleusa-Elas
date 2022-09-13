<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$id = $_REQUEST['con_codigo'];

$sqlContato = "select * from tb_contato where con_codigo = '$id'";
$sqlContato = mysqli_query($con, $sqlContato) or die("Erro na sqlContato!");

$dadosContato = mysqli_fetch_array($sqlContato);

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

    <title>Contato | Edição</title>

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

                    <h1 class="h3 mb-3"><strong>Contato </strong>/ Edição</h1>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <form method="post" name="frm_contato" id="frm_contato" action="atualizar_contato.php" enctype="multipart/form-data">
                                <input name="txt_codigo" type="hidden" id="txt_codigo" class="form-control" value="<?php echo $dadosContato['con_codigo']; ?>">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Endereço</h5> </br>
                                            <input type="text" id="txt_endereco" value="<?php echo $dadosContato['con_endereco']; ?>" name="txt_endereco" class="form-control" placeholder="Digite o endereço">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Telefone</h5> </br>
                                            <input type="text" id="txt_telefone" value="<?php echo $dadosContato['con_telefone']; ?>" name="txt_telefone" class="form-control" placeholder="Digite o telefone">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Email</h5> </br>
                                            <input type="text" id="txt_email" value="<?php echo $dadosContato['con_email']; ?>" name="txt_email" class="form-control" placeholder="Digite o email">
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">
                                                <button name="btn_enviar" type="submit" onclick=" return validar_dados();" class="btn btn-success">Atualizar</button>
                                            </a>
                                            <a href="consulta_contato.php" class="card-link">
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
            document.frm_contato.txt_endereco.focus()
        }

        function validar_dados() {
            if (document.frm_contato.txt_endereco.value == "") {
                alert("Você deve preencher o campo Endereço!");
                document.frm_contato.txt_endereco.focus();

                return false;
            }
            if (document.frm_contato.txt_telefone.value == "") {
                alert("Você deve preencher o campo Telefone!");
                document.frm_contato.txt_telefone.focus();

                return false;
            }

            if (document.frm_contato.txt_email.value == "") {
                alert("Você deve preencher o campo Email!");
                document.frm_contato.txt_email.focus();

                return false;
            }


        }
    </script>




</body>

</html>