<?php
  SESSION_START();
  include('../bd.php');
  $periodo = $_POST['periodo'];
  $qry = 'INSERT INTO periodo(periodo) VALUES("'.$periodo.'")';

  if ($periodo=="")
    header('Location: ../perfil_admin.php?op=8');
  else{
    $res = bd_consulta($qry);
    header('Location: ../perfil_admin.php?op=8');
  }
?>
