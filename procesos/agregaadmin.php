<?php
  SESSION_START();
  include('../bd.php');
  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];
  $paterno = $_POST['paterno'];
  $materno= $_POST['materno'];
  $pass = $_POST['pass'];

  $qry = 'INSERT INTO admin VALUES("'.$usuario.'","'.$nombre.'","'.$paterno.'","'.$materno.'","'.$pass.'")';
  $res = bd_consulta($qry);
  if ($res)
      header('Location: ../perfil_admin.php?op=9');
  else
      header('Location: ../perfil_admin.php?op=50');
?>
