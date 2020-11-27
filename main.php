<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include "./partition/head.php"; ?>
  <title>Hacker News Br - Lista de Noticias</title>
</head>
<body>
  <?php include "./partition/menu.php"; ?>
  <?php include "./partition/list.php"; ?>
  <?php include "./partition/footer.php"; ?>
  <script src="./assets/js/listlinksmain.js"></script>
  <!-- <script src="./assets/js/addpoint.js"></script>   -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript" language="javascript">
    function changesIcon(icon, id) {
      document.getElementById('btnIcon'+`${id}`).src = icon;
    }
  </script>

</body>
</html>