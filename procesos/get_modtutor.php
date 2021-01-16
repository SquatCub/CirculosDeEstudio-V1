<?php
  SESSION_START();
  $id=$_GET['id'];
  $per=$_SESSION['periodo'];
  $_SESSION['query']="SELECT * from tutor where ncontrol =".$id." and id_periodo = ".$per ;
  echo($_SESSION['query']);
  header("Location: ../perfil_admin.php?op=104");
?>
