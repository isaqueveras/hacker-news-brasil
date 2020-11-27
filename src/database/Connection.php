<?php

/*
 * Configuração das Conexão 
 * do Banco de Dados no Servidor MySQL
*/

define("HOST","localhost");         // Host do servidor
define("USERNAME","root");          // Usuário do servidor
define("PASSWORD","");              // Senha do Servidor
define("DATABASE","hackernewsbr");  // Nome do Banco de Dados

//Criar a conexao com o banco de dados
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
