<?php
  SESSION_START();
  include('../bd.php');
  $aula = $_POST["aula"];
  $qry = 'INSERT INTO aula(aula) VALUES("'.$aula.'")';


  if ($aula=="")
    header('Location: ../perfil_admin.php?op=114');
  else{
    $res = bd_consulta($qry);
    header('Location: ../perfil_admin.php?op=2');
  }

?>
