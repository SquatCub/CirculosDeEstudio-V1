<?php
	SESSION_START();
	if(!isset($_SESSION['userOK']))
		$_SESSION['userOK']=false;
	if(!isset($_GET['op'])){
		$op=-10;
		$mensaje_form="";
	}
	else
		$op=$_GET['op'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Circulos de estudio</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- <script src="script.js"></script> -->

  </head>
