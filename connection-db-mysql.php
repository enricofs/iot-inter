<?php

$host = "localhost:3306";
$user = "root";
$pass = "";
$banco = "bd_inter";

$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());

mysqli_set_charset($conexao, "utf8");


?>