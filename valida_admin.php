<?php
	include('bd.php');
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];
	$query="SELECT *
			FROM admin
			WHERE usuario='".$usuario."' AND pass='".$pass."'";
	$result=bd_consulta($query);
	$qry2='SELECT * FROM periodo where id_periodo=(SELECT max(id_periodo) from periodo)';
	$res=bd_consulta($qry2);
	$row1 = mysqli_fetch_assoc($res);
	if( $row = mysqli_fetch_assoc($result)){
		SESSION_START();
		$_SESSION['userOK']=true;
		$_SESSION['nombre']=$row['nombre'];
		$_SESSION['paterno']=$row['paterno'];
		$_SESSION['periodo']=$row1['id_periodo'];
		header('Location: perfil_admin.php');
	}
	else{
		header('Location: index.php?op=-1');
	}
?>
