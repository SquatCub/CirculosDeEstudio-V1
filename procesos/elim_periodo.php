<?php
SESSION_START();
include('../bd.php');
$periodo = $_POST['per'];
$qry = 'DELETE FROM periodo WHERE id_periodo = '.$periodo;
$res = bd_consulta($qry);
if($res){ header('Location: ../perfil_admin.php?op=8'); } 
else{ header('Location: ../perfil_admin.php?op=125'); }?>
