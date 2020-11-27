<?php
  // iniciar sessão
  session_start();

  // Verifica se existe o id na sessão 
  if (empty($_SESSION['idAccount'])) {
    // Mensagem de erro
    $_SESSION['msg'] = "Você não tem autorização para acessar essa página!";
    // Redirecione o usuário para o login
    header("Location: ./login.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include "./partition/head.php"; ?>
  <title>Hacker News Br - Dashbaord</title>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
  <div class="wrapper-dashbaord">
    <div class="container">
      <h1 class="title mb-2">Seja bem <br> vindo, <?= $_SESSION['nameAccount']; ?>!</h1>
      
      <?php include "./partition/alert.php"; ?>

      <!-- Tela -->
      <div class="screen">
        <div class="card">
          <div class="card-header-screen">
            <h4 class="card-header"> <a href="./main.php"><i class="fa fa-stream text-muted"></i></a>&nbsp; Enviar Notícia</h4>
            <a href="./src/user/logout.php"><img src="./assets/images/btn-logout.svg" alt=""></a>
          </div>

          <div class="card-body">
            <form action="./src/link/createlink.php" method="POST">
              <div class="form-row">
                <div class="col-12 col-md-6 mt-2">
                  <label for="">Titulo da matéria</label> <br>
                  <input type="text" class="form-input" placeholder="Titulo da matéria" name="title" required>
                </div>

                <div class="col-12 col-md-6 mt-2">
                  <label for="">URL da matéria</label> <br>
                  <input type="text" class="form-input" placeholder="URL da matéria" name="url" required>
                </div>

                <!-- <div class="col-12 col-md-12 mt-3">
                  <label for="">Texto</label> <br>
                  <textarea name="" id="" rows="10" class="form-input" placeholder="Texto"></textarea>
                </div> -->
              
                <div class="col-12 col-md-3 mt-3">
                  <button type="submit" class="button-submit">Enviar</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>


    </div>
      
  </div>

</body>
</html>