<?php

// Iniciar a sessão
session_start();

// variaveis com os dados do formulario
// usando funções do php para eliminar invações no sistema
$id_link = htmlspecialchars(addslashes($_POST['link']));
$id_user = $_SESSION['idAccount'];

if (empty($id_user)) {
  $_SESSION['cor'] = "primary";
  $_SESSION['msg'] = "Cadastre-se ou entre com a sua conta para poder dá um ponto no link :)";
  header("Location: ../../main.php");
}

// Verificar se há dados nas variaveis
if (!empty($id_user) && !empty($id_link)) {
	// incluir a conexão com o banco de dados
	include "../database/Connection.php";
  
	// Query para cadastrar o usuário no banco de dados
	$query = mysqli_query($conn, "INSERT INTO points (id_user, id_link, created_at) VALUES('$id_user','$id_link',NOW())");

  $_SESSION['cor'] = "success";
  $_SESSION['msg'] = "Obg pele seu ponto no link";
	header('Location: ../../main.php');

} else {
	header('Location: ../../index.php');
}
