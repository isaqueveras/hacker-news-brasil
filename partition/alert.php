<?php
  if(isset($_SESSION['cor'])):
    $cor = $_SESSION['cor'];
    unset ($_SESSION['cor']);
  else:
    $cor = "danger";
  endif;
  
  if(isset($_SESSION['msg'])){ ?>
    <div class="alert alert-<?= $cor; ?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['msg']; ?>
      <span aria-hidden="true" data-dismiss="alert" aria-label="Close"><i class="far fa-times-circle"></i></span>
    </div>
    <?php unset ($_SESSION['msg']);
  } 
?>