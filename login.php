 <?php

include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT login, senha, tipo, usuario.cpf, nome FROM login
			INNER JOIN usuario ON login.cpf = usuario.cpf
			WHERE login = '$login' AND senha = '$senha'";
$query = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($query);

if (isset($dados[0]) == $login && isset($dados[1]) == $senha) {
	session_start();
	$_SESSION['login'] = $dados[0];
	$_SESSION['nivel'] = $dados[2];
	$_SESSION['cpf'] = $dados[3];
	$_SESSION['nome'] = $dados[4];
	header('Location: principal.php');
} else {
	echo '<script>alert("Usuário ou senha incorretos");
			window.location="index.php";
			</script>';
}

?>