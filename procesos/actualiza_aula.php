<?php
  SESSION_START();
  include('../bd.php');
  $id = $_POST["id"];
  $aula = $_POST["aula"];

  $query = 'UPDATE aula SET aula = "'.$aula.'" WHERE id_aula = '.$id;


  if ($aula==""){
    header('Location: ../perfil_admin.php?op=114');
  }
  else{
    $res = bd_consulta($query);
    header('Location: ../perfil_admin.php?op=2');
  }
?>
