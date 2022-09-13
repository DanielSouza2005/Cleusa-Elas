<?php

require_once('../conexao/bancoSistema.php');

$cliente = $_REQUEST['txt_nome'];
$telefone = $_REQUEST['txt_telefone'];
$tipo_servico = $_REQUEST['txt_tiposervico'];
$descricao = $_REQUEST['txt_descricao'];
$data = $_REQUEST['txt_data'];
$horario = $_REQUEST['txt_horario'];

$horarioCompleto = $data . ' ' . $horario;

$sql = "insert into tb_cliente (cli_nome, cli_celular) 
        values ('$cliente', '$telefone')";

mysqli_query($con, $sql) or die("Erro na sql!");

$sql2 = "Select MAX(cli_codigo) AS cli_codigo FROM tb_cliente";

$resultado = mysqli_query($con, $sql2) or die("Erro na sql2!");

while ($dadosCliente = mysqli_fetch_array($resultado)) {
    $clienteSelecionado = $dadosCliente['cli_codigo'];
}

$sql3 = "insert into tb_agendamento (cli_codigo, tps_codigo, age_especificacao, age_preco,
            age_data, sta_codigo, tpg_codigo) 
        values ('$clienteSelecionado', '$tipo_servico', '$descricao', '0', '$horarioCompleto', 
            '4', '6')";

mysqli_query($con, $sql3) or die("Erro na sql3!");

header("Location: ../index.php#booking");


