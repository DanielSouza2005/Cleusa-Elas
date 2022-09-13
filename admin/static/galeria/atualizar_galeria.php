<?php

require_once("../../../conexao/bancoCleusa.php");

$id     = $_REQUEST['txt_codigo'];

$servico = $_REQUEST['txt_servico'];
$especificacao = $_REQUEST['txt_especificacao'];
$arquivo = $_FILES['txt_arquivo']['name'];
$foto_antiga = $_REQUEST['txt_foto'];

if ($arquivo <> "") {

    // Lista de tipos de arquivos permitidos
    $tiposPermitidos = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');

    // Tamanho máximo (em bytes)
    $tamanhoPermitido = 1024 * 1000; // 500 Kb

    // O nome original do arquivo no computador do usuário
    $arqName = $_FILES['txt_arquivo']['name'];

    // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
    $arqType = $_FILES['txt_arquivo']['type'];

    // O tamanho, em bytes, do arquivo
    $arqSize = $_FILES['txt_arquivo']['size'];

    // O nome temporário do arquivo, como foi guardado no servidor
    $arqTemp = $_FILES['txt_arquivo']['tmp_name'];

    // O código de erro associado a este upload de arquivo
    $arqError = $_FILES['txt_arquivo']['error'];

    if ($arqError == 0) {
        // Verifica o tipo de arquivo enviado
        if (array_search($arqType, $tiposPermitidos) === false) {
            echo 'O tipo de arquivo enviado é inválido!';
            // Verifica o tamanho do arquivo enviado
        } else if ($arqSize > $tamanhoPermitido) {
            echo 'O tamanho do arquivo enviado é maior que o limite!';
            // Não houveram erros, move o arquivo
        } else {
            $pasta = 'fotos/';
            // Pega a extensão do arquivo enviado
            $extensao = strtolower(end(explode('.', $arqName)));
            // Define o novo nome do arquivo usando um UNIX TIMESTAMP
            $nome = time() . '.' . $extensao;

            $destino = $pasta . $nome;

            // Escapa os caracteres protegidos do MySQL (para o nome do usuário)
            //  $nomeMySQL = mysql_real_escape_string($_POST['txt_nome']);

            $upload = move_uploaded_file($arqTemp, $pasta . $nome);

            // Verifica se o arquivo foi movido com sucesso
            if ($upload == true) {
                // Cria uma query MySQL

                $sql = "update tb_galeria set 
							gal_servico = '$servico', 
							gal_especificacao = '$especificacao',
                            gal_foto = '$destino'
						where 
                            gal_codigo = '$id'";

                $query = mysqli_query($con, $sql) or die("Erro na sql!");

                if ($query == true) {
                    unlink($foto_antiga);
                    echo 'Foto inserida com sucesso!';
                    header("Location: consulta_galeria.php");
                }
            }
        }
    } else {
        echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
    }
} else {
            $sql = "update tb_galeria set 
                gal_servico = '$servico', 
                gal_especificacao = '$especificacao',
                gal_foto = '$destino'
            where 
                gal_codigo = '$id'";

            $query = mysqli_query($con, $sql) or die("Erro na sql!");

            if ($query == true) {
                unlink($foto_antiga);
                echo 'Foto inserida com sucesso!';
                header("Location: consulta_galeria.php");
            }
}
