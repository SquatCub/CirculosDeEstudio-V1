<?php
  SESSION_START();
  $id=$_GET['id'];
  $_SESSION['queryA']="SELECT id_asistencia, dia, hora FROM asistencia where id_horario=".$id;
  echo($_SESSION['queryA']);
  header("Location: ../perfil_admin.php?op=110");
?>
