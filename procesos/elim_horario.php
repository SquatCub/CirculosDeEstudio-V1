<?php
	SESSION_START();
	include('../bd.php');
	$id=$_GET['id'];
	$query='DELETE FROM asistencia
	WHERE id_horario="'.$id.'"';
	bd_consulta($query);
	$query='DELETE FROM horario
	WHERE id_horario="'.$id.'"';
	bd_consulta($query);
	header('Location: ../perfil_admin.php?op=0');
?>
