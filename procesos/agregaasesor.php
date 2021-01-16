<?php
  SESSION_START();
  include('../bd.php');
  $ncontrol = $_POST['ncontrol'];
  $nombre = $_POST['nombre'];
  $aPaterno = $_POST['aPaterno'];
  $aMaterno = $_POST['aMaterno'];
  $semestre = $_POST['semestre'];
  $pass = $_POST['pass'];

  $qry = 'INSERT INTO asesor VALUES('.$ncontrol.',"'.$nombre.'","'.$aPaterno.'","'.$aMaterno.'",'.$semestre.',"'.$pass.'")';

  $res = bd_consulta($qry);
  if ($res)
      header('Location: ../perfil_admin.php?op=5');
  else
      header('Location: ../perfil_admin.php?op=50');
?>
