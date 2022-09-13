<?php

//$con = mysqli_connect("sql204.epizy.com", "epiz_31966799", "aEtd4GxGPHG", "epiz_31966799_tcc");

$con = mysqli_connect("localhost", "root", "", "db_cleusa");


if (mysqli_connect_errno()) {

    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_errno();

} else {

    mysqli_select_db($con, "db_cleusa");

}

?>