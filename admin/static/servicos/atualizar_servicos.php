<?php

require_once("../../../conexao/bancoCleusa.php");

$id 	= $_REQUEST['txt_codigo'];

$titulo = $_REQUEST['txt_titulo'];
$descricao = $_REQUEST['txt_descricao'];
$icone = $_REQUEST['txt_icone'];

echo $icone;

$sql = "update tb_servicos set 
							ser_titulo = '$titulo', 
							ser_descricao = '$descricao',
                            ico_codigo = '$icone'
						where 
							ser_codigo = '$id'";

$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_servicos.php"); 

?>