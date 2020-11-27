<?php

// Iniciar a sessão
session_start();

// variaveis com os dados do formulario
// usando funções do php para eliminar invações no sistema
$title = htmlspecialchars(addslashes($_POST['title']));
$url = htmlspecialchars(addslashes($_POST['url']));
$id_user = $_SESSION['idAccount'];

// Verificar se há dados nas variaveis
if (!empty($title) && !empty($url)) {
	// incluir a conexão com o banco de dados
	include "../database/Connection.php";
  
  // Time para fazer isso => (há 2 min)
  $time = time();

	// Query para cadastrar o usuário no banco de dados
	$query = mysqli_query($conn, "INSERT INTO links (id_user, title, url, status, time, created_at) VALUES('$id_user','$title','$url',1, '$time' ,NOW())");

	// Retorna a resposta da Query
	if ($query) {
		$_SESSION['cor'] = "success";
    $_SESSION['msg'] = "Parabéns!! Seu cadastro foi feito com sucesso!";
		header('Location: ../../dashboard.php');

	} else {
		$_SESSION['cor'] = "danger";
    $_SESSION['msg'] = "Que pena.. Houve algum erro com o seu cadastro. Tente novamente!";
		header('Location: ../../dashboard.php');
	}

} else {
	$_SESSION['cor'] = "danger";
	$_SESSION['msg'] = "Preenche os dados do formulário para enviar!";
	header('Location: ../../dashboard.php');
}
