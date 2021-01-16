<?php
	SESSION_START();
	include('../bd.php');
	$id=$_GET['id'];
  echo($id);
	$query='DELETE FROM tutor
	WHERE ncontrol="'.$id.'"';
	$res = bd_consulta($query);
	if($res){
		header('Location: ../perfil_admin.php?op=7');
	}
	else{
		header('Location: ../perfil_admin.php?op=54');
	}
?>
