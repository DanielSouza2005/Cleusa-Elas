<?php



//$con = mysqli_connect("dumont", "200036", "200036", "db_tcc");

//$con = mysqli_connect("sql310.epizy.com", "epiz_32429868", "GOvc7tQyaFQK", "epiz_32429868_sistema_tcc");

$conSistema = mysqli_connect("localhost", "root", "", "db_tcc");


if (mysqli_connect_errno()) {

    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_errno();

} else {

    mysqli_select_db($conSistema, "db_tcc");

}

?>