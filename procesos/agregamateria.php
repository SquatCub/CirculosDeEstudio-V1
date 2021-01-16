<?php
  SESSION_START();
  include('../bd.php');
  $materia = $_POST["materia"];
  $qry = 'INSERT INTO materia(nombre) VALUES("'.$materia.'")';

  //
  if($materia==""){
    header('Location: ../perfil_admin.php?op=113');
  }
  else{
    $res = bd_consulta($qry);
    header('Location: ../perfil_admin.php?op=1');
  }

?>
