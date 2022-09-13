<?php

require_once("../../../conexao/bancoCleusa.php");

$id 	= $_REQUEST['txt_codigo'];

$titulo = $_REQUEST['txt_titulo'];
$descricao = $_REQUEST['txt_descricao'];

$sql = "update tb_galgeral set 
            galG_tituloEN = '$titulo', 
            galG_descricaoEN = '$descricao'
        where 
            galG_codigo = '$id'";

$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_galeriaEN.php"); 

?>