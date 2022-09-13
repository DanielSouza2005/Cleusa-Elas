<?PHP
require_once("../../../conexao/bancoCleusa.php");

$id 	= $_REQUEST['txt_codigo'];
$endereco = $_REQUEST['txt_endereco'];
$telefone = $_REQUEST['txt_telefone'];
$email = $_REQUEST['txt_email'];

$sql = "update tb_contato set 
            con_enderecoEN = \"$endereco\", 
            con_telefone = '$telefone',
            con_email = '$email'
        where 
            con_codigo = '$id'";

$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_contatoEN.php"); 


?>
