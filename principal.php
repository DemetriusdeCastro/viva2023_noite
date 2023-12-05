<?php

session_start();

$usuario = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<h1>Bem vindo, <?php echo $usuario; ?></h1>
		<a href="admin.php">Administrador</a> | 
		<a href="vendedor.php">Vendedor</a> | 
		<a href="usuario.php">Usuário</a><br><br>
		<a href="logout.php">Sair</a>
	</center>
</body>
</html>