<?php
  SESSION_START();
  $id=$_GET['id'];
  $_SESSION['query']="SELECT * from asesor where ncontrol =".$id;
  echo($_SESSION['query']);
  header("Location: ../perfil_admin.php?op=103");
?>
