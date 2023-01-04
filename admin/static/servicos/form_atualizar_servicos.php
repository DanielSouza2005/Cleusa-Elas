<?php

require_once("../../../conexao/bancoCleusa.php");
require_once("../../seguranca.php");

$id = $_REQUEST['ser_codigo'];

$sqlServicos = "select * 
                from tb_servicos s
                inner join tb_icone i 
                on (i.ico_codigo =  s.ico_codigo)
                where s.ser_codigo = '$id'";
$sqlServicos = mysqli_query($con, $sqlServicos) or die("Erro na sqlServicos!");

$dadosServicos = mysqli_fetch_array($sqlServicos);

$sqlIcone = "select * 
             from tb_icone
             order by ico_descricao";

$sqlIcone = mysqli_query($con, $sqlIcone) or die("Erro na sqlIcone!");

$sqlIcone2 = "select * 
             from tb_icone
             order by ico_descricao";

$sqlIcone2 = mysqli_query($con, $sqlIcone2) or die("Erro na sqlIcone2!");

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

    <title>Serviços | Edição</title>

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

                    <h1 class="h3 mb-3"><strong>Serviços </strong>/ Edição</h1>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <form method="post" name="frm_servicos" id="frm_servicos" action="atualizar_servicos.php" enctype="multipart/form-data">
                                <input name="txt_codigo" type="hidden" id="txt_codigo" class="form-control" value="<?php echo $dadosServicos['ser_codigo']; ?>">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Título</h5> </br>
                                            <input type="text" id="txt_titulo" value="<?php echo $dadosServicos['ser_titulo']; ?>" name="txt_titulo" class="form-control" placeholder="Digite um serviço">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Descrição</h5> </br>
                                            <input type="text" id="txt_descricao" value="<?php echo $dadosServicos['ser_descricao']; ?>" name="txt_descricao" class="form-control" placeholder="Digite uma descrição">
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Ícone</h5> </br>
                                            <select class="form-select mb-3" name="txt_icone" id="txt_icone">
                                                <?php while ($dadosIcone = mysqli_fetch_array($sqlIcone)) { ?>
                                                    <option value="<?php echo $dadosIcone['ico_codigo']; ?>"  <?php if($dadosIcone['ico_codigo'] == $dadosServicos['ico_codigo']) {echo "selected";}?>><?php echo $dadosIcone['ico_descricao']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">
                                                <button name="btn_enviar" type="submit" onclick=" return validar_dados();" class="btn btn-success">Atualizar</button>
                                            </a>
                                            <a href="consulta_servicos.php" class="card-link">
                                                <button type="button" class="btn btn-primary">Cancelar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <?php while ($dadosIcone2 = mysqli_fetch_array($sqlIcone2)) { ?>
                                <div class="col-12 col-md-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="hidden" value="<?php echo $dadosIcone2['ico_codigo']; ?>"></input>
                                            <h5 class="card-title mb-0"><?php echo $dadosIcone2['ico_descricao']; ?></h5></br>
                                            <img class="card-img-top" src="../icones/<?php echo $dadosIcone2['ico_icone']; ?>" alt="Icone"></br></br>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
            document.frm_servicos.txt_titulo.focus()
        }

        function validar_dados() {
            if (document.frm_servicos.txt_titulo.value == "") {
                alert("Você deve preencher o campo Título!");
                document.frm_servicos.txt_titulo.focus();

                return false;
            }
            if (document.frm_servicos.txt_descricao.value == "") {
                alert("Você deve preencher o campo Descrição!");
                document.frm_servicos.txt_descricao.focus();

                return false;
            }
            if (document.frm_servicos.txt_icone.value == " ") {
                alert("Você deve preencher o campo ícone!");
                document.frm_servicos.txt_icone.focus();

                return false;
            }


        }
    </script>




</body>

</html>