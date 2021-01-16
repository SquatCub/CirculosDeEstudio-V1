<?php
  SESSION_START();
  include('../bd.php');
  $id = $_POST["id"];
  $aula = $_POST["aula"];

  $query = 'UPDATE aula SET aula = "'.$aula.'" WHERE id_aula = '.$id;
  echo($query);
  $res = bd_consulta($query);
  if ($res)
      header('Location: ../perfil_admin.php?op=2');
  else
      echo($id." ".$aula);
?>
