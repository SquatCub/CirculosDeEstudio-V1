<?php
  SESSION_START();
  include('../bd.php');
  $ncontrol = $_POST['ncontrol'];
  $nombre = $_POST['nombre'];
  $aPaterno = $_POST['aPaterno'];
  $aMaterno = $_POST['aMaterno'];
  $semestre = $_POST['semestre'];
  $periodo = $_SESSION['periodo'];

  $qry = 'INSERT INTO tutor VALUES('.$ncontrol.',"'.$nombre.'","'.$aPaterno.'","'.$aMaterno.'",'.$semestre.', '.$periodo.')';
  $res = bd_consulta($qry);
  if ($res)
      header('Location: ../perfil_admin.php?op=7');
  else
      header('Location: ../perfil_admin.php?op=53');
?>
