<?php
	SESSION_START();
	include('../bd.php');
	$id=$_GET['id_materia'];
	$query='DELETE FROM materia
	WHERE id_materia="'.$id.'"';
	$res = bd_consulta($query);
	if ($res)
      header('Location: ../perfil_admin.php?op=1');
  else
      header('Location: ../perfil_admin.php?op=52');

?>
