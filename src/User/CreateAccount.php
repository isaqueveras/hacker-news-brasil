<?php

// Iniciar a sessão
session_start();

// variaveis com os dados do formulario
// usando funções do php para eliminar invações no sistema
$name = htmlspecialchars(addslashes($_POST['name']));
$email = htmlspecialchars(addslashes($_POST['email']));
$password = htmlspecialchars(addslashes($_POST['password']));

$passwordHash = md5($password);

// Verificar se há dados nas variaveis
if (!empty($name) && !empty($email) && !empty($password)) {
	
	// incluir a conexão com o banco de dados
	include "../database/Connection.php";
	
	// Query para cadastrar o usuário no banco de dados
	$query = mysqli_query($conn, "INSERT INTO users (name, email, password, status, created_at) VALUES('$name','$email','$passwordHash',1, NOW())");

	// Retorna a resposta da Query
	if ($query) {
		$_SESSION['cor'] = "success";
    $_SESSION['msg'] = "Parabéns!! Seu cadastro foi feito com sucesso! Entre com suas credencias.";
		header('Location: ../../login.php');

	} else {
		$_SESSION['cor'] = "danger";
    $_SESSION['msg'] = "Que pena.. Houve algum erro com o seu cadastro. Tente novamente!";
		header('Location: ../../create-account.php');
	}

}
