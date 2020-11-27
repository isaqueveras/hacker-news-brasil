<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include "./partition/head.php"; ?>
  <title>Hacker News Br - Criar conta</title>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
  <div class="wrapper-login">
    <div class="container">
      <h1 class="title mb-4">Criar conta</h1>

      <!-- alert -->
      <?php include "./partition/alert.php"; ?>

      <form action="src/user/createaccount.php" method="POST">
        <div class="form-row">
          <div class="col-12 col-md-12">
            <label for="">Primeiro Nome</label> <br>
            <input type="text" class="form-input" placeholder="Primeiro Nome" name="name" required>
          </div>

          <div class="col-12 col-md-12 mt-3">
            <label for="">E-mail</label> <br>
            <input type="email" class="form-input" placeholder="E-mail" name="email" required>
          </div>

          <div class="col-12 col-md-12 mt-3">
            <label for="">Senha</label> <br>
            <input type="password" class="form-input" placeholder="Senha" name="password" required>
          </div>
        
          <div class="col-12 col-md-12 mt-3">
            <button type="submit" class="button-submit">Criar conta</button> 
            <span class="helps">Já tem uma conta? &nbsp;<a href="./login.php">Entre aqui</a></span>
          </div>

        </div>
      </form>

    </div>
  </div>

</body>
</html>