<?php
  SESSION_START();
  include('../bd.php');
  $id=$_GET['id'];
  $query='DELETE FROM asistencia
  WHERE id_asistencia='.$id;
  $res = bd_consulta($query);
  header('Location: ../perfil_admin.php?op=110');
?>
