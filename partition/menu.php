<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="./index.php">Hacker News Br</a>
    
    <ul class="navbar-nav">
      <li class="nav-items">
        <a class="nav-link" href="./welcome.php">Bem vindo</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Novo</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Tópicos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./about.php">Sobre</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./create-account.php">Enviar</a>
      </li>
    </ul>

  <?php
    if (!empty($_SESSION['idAccount'])) { ?>
      <a href="./dashboard.php" class="button-primary"><i class="fa fa-user-alt"></i>&nbsp; Perfil</a>
    <?php } else { ?>
      <a href="./login.php" class="button-primary"><i class="fa fa-sign-in-alt"></i>&nbsp; Login</a>
    <?php }
  ?> 
  </div>
</nav>