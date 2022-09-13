<?php

session_start();
require_once("../conexao/bancoSistema.php");

$nome = $_REQUEST['txt_nome'];
$senha   = $_REQUEST['txt_senha'];

$sql = "select  
			usu_login, 
			usu_senha 
		from tb_usuario 
		where usu_login = '$nome' 
		and usu_senha = '$senha'";
		
$sql = mysqli_query($conSistema, $sql) or die ("Erro na sql!") ;
echo $total = mysqli_num_rows($sql);

if ($total == 1) {
	$_SESSION["nome"] = $nome;
	$_SESSION["senha"] = $senha;
	header("location: static/home/home.php");
} else {
	header("location: static/acesso_negado.php");
}

?>





