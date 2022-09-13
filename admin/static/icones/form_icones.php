<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

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

    <title>Ícones | Inclusão</title>

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

                    <h1 class="h3 mb-3"><strong>Ícones</strong> / Inclusão</h1>

                    <div class="row">

                        <div class="col-12 col-md-6">
                            <form method="post" name="frm_icone" id="frm_icone" action="cadastrar_icones.php" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Descrição</h5> </br>
                                                <input type="text" id="txt_descricao" name="txt_descricao" class="form-control" placeholder="Digite uma descrição">
                                            </div>
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Ícone</h5> </br>
                                                <input name="txt_arquivo" id="txt_arquivo" type="file" class="form-control">
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="card-link">
                                                    <button name="btn_enviar" type="submit" onclick=" return validar_dados();" class="btn btn-success">Cadastrar</button>
                                                </a>
                                                <a href="consulta_icones.php" class="card-link">
                                                    <button type="button" class="btn btn-primary">Cancelar</button>
                                                </a>
                                            </div>
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

    function foco() {
      document.frm_icone.txt_descricao.focus()
    }

    function validar_dados() {
      if(document.frm_icone.txt_descricao.value=="") {
            alert ("Você deve preencher o campo Descrição!");
        document.frm_icone.txt_descricao.focus();

            return false;
      } 
      if(document.frm_icone.txt_arquivo.value=="") {
            alert ("Você deve inserir uma Foto!");
        document.frm_icone.txt_arquivo.focus();

            return false;
      }
    }
    </script>


</body>

</html>