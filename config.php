<?php

//URL onde o sistema esta instalado
global $URL;
$URL = "https://yoursite.org.br/sorteio";

require('senhas.php');

global $con;
$con = mysqli_connect($db_host, $db_user, $db_pass) or trigger_error("Erro ao acessar o Banco de Dados: " . mysqli_error($con));

mysqli_select_db($con, $db_name) or trigger_error("Erro ao acessar o banco de dados: " . mysqli_error($con));

