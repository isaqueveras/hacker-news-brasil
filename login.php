<?php 
  // Iniciar sessão
  session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include "./partition/head.php"; ?>
  <title>Hacker News Br - Login</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <?php
    // limpar todas as sessões do usuário
    unset($_SESSION['idAccount'],$_SESSION['nameAccount'],$_SESSION['emailAccount']);
  ?>
    
  <div class="wrapper-login">
    <div class="container">
      <h1 class="title mb-4">Login</h1>

      <!-- alert -->
      <?php include "./partition/alert.php"; ?>

      <form action="src/user/ValidateLogin.php" method="POST">
        <div class="form-row">
          <div class="col-12 col-md-12">
            <label for="">E-mail</label> <br>
            <input type="text" class="form-input" placeholder="E-mail" required name="email">
          </div>

          <div class="col-12 col-md-12 mt-3">
            <label for="">Senha</label> <br>
            <input type="password" class="form-input" placeholder="Senha" required name="password">
          </div>
        
          <div class="col-12 col-md-12 mt-3">
            <button type="submit" class="button-submit">Entrar</button> 
            <span class="helps">Ainda não tem uma conta? &nbsp;<a href="./create-account.php">Crie aqui</a></span>
          </div>

        </div>
      </form>

    </div>
  </div>

</body>
</html>