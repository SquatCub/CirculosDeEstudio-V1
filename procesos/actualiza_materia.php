<?php
  SESSION_START();
  include('../bd.php');
  $id = $_POST["id"];
  $materia = $_POST["materia"];

  $query = 'UPDATE materia SET nombre = "'.$materia.'" WHERE id_materia = '.$id;

  if($materia==""){
    header('Location: ../perfil_admin.php?op=113');

  }
  else{
    $res = bd_consulta($query);
    header('Location: ../perfil_admin.php?op=1');
  }

?>
