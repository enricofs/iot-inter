<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inter</title>

	<link rel="shortcut icon" href="./assets/imgs/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<?php

include("connection-db-mysql.php");

// Recebendo dados digitados da página cadastro_aluno.php (Via POST)
$name_typed = $_POST['txt_name'];
$email_typed = $_POST['txt_email'];
$comments_typed = $_POST['txt_comments'];




// 
//Script em SQL para gravar na tabela do banco de dados MySql ou MariaDB

$script_sql = "insert into tb_feedback(nome_feedback, email_feedback, comentario_feedback)
values 
('$name_typed', '$email_typed', '$comments_typed' );";

//
//Comando sql para executar a gravação na tabela do banco de dados MySql ou MariaDB

if(mysqli_query($conexao, $script_sql))
{
  echo"<body class='alert alert-success'><h1>Envio do formulário realizado com sucesso...</h1>";

  echo"<meta http-equiv='refresh' content='2;url=form-feedback.php'> ";
}
else
{
		echo"<body class='alert alert-danger'><h1></h1>";

		echo"<h1 align='center'>Falha no envio do formulário</h1><hr><p>";
      	
      	echo "<b>Descrição do erro:</b> Houve um erro na gravação de dados na tabela.";

        echo "<h2><a href='form-feedback.php'>Voltar</a></h2>";
}


?>
</body>
</html>