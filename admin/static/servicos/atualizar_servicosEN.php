<?php

require_once("../../../conexao/bancoCleusa.php");

$id 	= $_REQUEST['txt_codigo'];

$titulo = $_REQUEST['txt_titulo'];
$descricao = $_REQUEST['txt_descricao'];
$icone = $_REQUEST['txt_icone'];

$sql = "update tb_servicos set 
            ser_tituloEN = '$titulo', 
            ser_descricaoEN = '$descricao',
            ico_codigo = '$icone'
        where 
            ser_codigo = '$id'";

$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_servicosEN.php"); 

?>