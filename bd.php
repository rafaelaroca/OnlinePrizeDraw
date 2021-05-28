<?php

require('senhas.php');

$con = mysqli_connect($db_host, $db_user, $db_pass) or trigger_error("Erro ao acessar o Banco de Dados: " . mysqli_error($con));

mysqli_select_db($con, $db_name) or trigger_error("Erro ao acessar o banco de dados: " . mysqli_error($con));

?>
