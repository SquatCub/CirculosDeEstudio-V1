<?php
	SESSION_START();
	include('../bd.php');
	$id=$_GET['id_aula'];
	$query='DELETE FROM aula
	WHERE id_aula="'.$id.'"';
	$res = bd_consulta($query);
	if ($res)
      header('Location: ../perfil_admin.php?op=2');
  else
      header('Location: ../perfil_admin.php?op=51');

?>
