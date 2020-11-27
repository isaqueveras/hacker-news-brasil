<?php
	// sessão iniciada
  session_start();
  
	$email = htmlspecialchars(addslashes($_POST['email']));
	$senha = htmlspecialchars(addslashes($_POST['password']));
  
  // senha criptografada
	$senhaHash = md5($senha);
  
  include "../database/Connection.php";

	$query = mysqli_query($conn, "SELECT id, name, email FROM users WHERE email='$email' AND password='$senhaHash' LIMIT 1");
	$user = mysqli_fetch_assoc($query);

	if (empty($user)){ // variável esteja vázia ou não encontrada
		//Mensagem de Erro
		$_SESSION['msg'] = "E-mail ou Senha Inválido"; 
		 
		//Manda o usuario para a página de login
		header("Location: ../../login.php");
	}else{
		// Novo modelo de definição de nomes
		$_SESSION['idAccount'] = $user['id'];
		$_SESSION['nameAccount'] = $user['name'];
		$_SESSION['emailAccount'] = $user['email'];

		// Manda o usuario para o dashboard
		header("Location: ../../dashboard.php");
	}
?>