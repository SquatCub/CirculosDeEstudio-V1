<?php
SESSION_START();
$id=$_GET['id'];
$_SESSION['query']='SELECT id_horario, materia.nombre AS materia, tutor.nombre AS tutor, tutor.aPaterno, aula.aula AS aula, lunes, martes, miercoles, jueves, viernes FROM horario INNER JOIN materia ON horario.id_materia = materia.id_materia INNER JOIN tutor ON horario.id_tutor = tutor.ncontrol INNER JOIN aula ON horario.id_aula = aula.id_aula where horario.id_tutor ='.$id.' and horario.id_periodo ='.$_SESSION['periodo'];
echo($_SESSION['query']);

header("Location: ../perfil_asesor.php?op=100");
?>
