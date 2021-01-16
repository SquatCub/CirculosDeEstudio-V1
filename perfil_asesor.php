<?php
  include('cabecera.php');
  $title='Bienvenido ' .$_SESSION['nombre'].' '.$_SESSION['aPaterno'];
  include('titulo.php');
  include('menu_asesor.php');
  echo("<script>
    horario();
  </script>");
  switch($op){
    case 0: include('admin/horario_a1.php');
    break;
    case 10: include('admin/salir.php');
    break;
    case 1: include('admin/tutores_a1.php');
    break;
    case 100:include('admin/horario_id.php');
    break;
    case 101:include('admin/asistencias.php');
    break;
    case 110: echo('<script>alert("Ya se registro una asistencia hoy!")</script>');
    include('admin/horario_a1.php');
    break;
    case 111: echo('<script>alert("Asistencia registrada con exito!")</script>');
    include('admin/horario_a1.php');
    break;
  }
 ?>
