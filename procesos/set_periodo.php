<?php
  SESSION_START();
  include('../bd.php');
  $per = $_POST['per'];
  $_SESSION['periodo'] = $per;
  header('Location: ../perfil_admin.php?op=0');
?>
