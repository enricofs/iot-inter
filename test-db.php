<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="refresh" content="10;url=teste_conexao_bd_mysql.php">

	<title>Teste de conexão com BD MySql</title>

	<link rel="shortcut icon" href="./assets/imgs/favicon.ico" type="image/x-icon">

	<!-- Importação do BootStrap - CSS e JavaScript -->
  <link href="../css_js/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <script src="../css_js/bootstrap-4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<header class="alert alert-success" role="alert">
<nav>
	<a href="../index.php" class="btn btn-outline-dark"><b>Voltar</b></a>
	<a href="test-db.php" class="btn btn-outline-success">
	<b>Atualizar</b></a>
</nav>

	<h1 align="center">Teste de conexão com BD MySql</h1>
</header>

<div class="alert alert-dark" style="text-align: center;">

<?php

include('connection-db-mysql.php');


// Teste de conexão com o servidor -----------------------------------------

if($conexao = mysqli_connect($local_server, $user, $password))
{
 echo  "<h3 align=center class='btn btn-success'>Servidor conectado com sucesso</h3><p>";
}
else
{
	echo "<h3 align=center>Erro: Servidor não está conectado</h3>";
	echo "<h4 align=center>Verifique os seguintes itens: Xampp, local do servidor, porta do servidor, usuário, senha</h4>";
}


// Teste de conexão com o banco de dados -----------------------------------------

if($conexao = mysqli_connect($local_server, $user, $password, $db_search))
{
 echo  "<h3 align=center class='btn btn-success'>Banco de dados conectado com sucesso</h3><p>";
}

else
{
	echo "<h3 align=center>Erro: Banco de dados não está conectado</h3>";
	echo "<h4 align=center>Verifique se o BD foi criado e depois o nome do BD no servidor e usuário do BD e senha do BD</h4>";
}

?>

</div>


</body>
</html>