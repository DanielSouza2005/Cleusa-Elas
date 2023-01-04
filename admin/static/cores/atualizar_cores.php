<?php

require_once("../../../conexao/bancoCleusa.php");

$id 	= $_REQUEST['txt_codigo'];

$primaria = $_REQUEST['txt_primaria'];
$titulo = $_REQUEST['txt_titulo'];
$apoio = $_REQUEST['txt_apoio'];

$sql = "update tb_cor set 
			cor_principal = '$primaria', 
			cor_titulos = '$titulo',
			cor_apoio = '$apoio'
		where 
			cor_codigo = '$id'";

$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_cores.php"); 

?>