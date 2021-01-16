<?php
	SESSION_START();
	include('../bd.php');
	$id=$_GET['id'];
  echo($id);
	$query='DELETE FROM admin
	WHERE usuario="'.$id.'"';
	bd_consulta($query);
	header('Location: ../perfil_admin.php?op=9');
?>
