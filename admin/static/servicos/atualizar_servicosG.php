<?php

require_once("../../../conexao/bancoCleusa.php");

$id 	= $_REQUEST['txt_codigo'];

$titulo = $_REQUEST['txt_titulo'];
$descricao = $_REQUEST['txt_descricao'];

$sql = "update tb_servgeral set 
							serG_titulo = '$titulo', 
							serG_descricao = '$descricao'
						where 
							serG_codigo = '$id'";

$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_servicos.php"); 

?>