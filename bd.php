<?php
function bd_consulta($query)
{
	$hostname="localhost";
	$user="root";
	$password="LabSeg_server1$@";
	$bd="circulos2";
	$connection = mysqli_connect($hostname , $user , $password);

	if (!$connection->set_charset("utf8")) {
		 printf("Error cargando el conjunto de caracteres utf8: %s\n",
			$mysqli->error);
		 exit();
	}
	if($connection == false)
		echo 'Ha habido un error <br>'.mysqli_connect_error();

	mysqli_select_db ($connection, $bd);
	$result = mysqli_query($connection, $query);
	mysqli_close($connection);
	return $result;
}
?>
