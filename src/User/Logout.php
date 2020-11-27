<?php

// Inicia a sessão
session_start();

//Remova todas as informações contidas nas variáveis globais
unset(
    $_SESSION['idAccount'], 
    $_SESSION['nameAccount'], 
    $_SESSION['emailAccount']
);

// Mensagem de Sucesso de saida
$_SESSION['cor'] = "success";
$_SESSION['msg'] = "Deslogado com sucesso!";

//Redireciona o usuário para a página de login
header("Location: ../../login.php");
