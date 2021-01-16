<?php
SESSION_START();
$id=$_GET['id'];
$_SESSION['query']="SELECT id_horario, materia.id_materia AS materia, tutor.ncontrol AS tutor, aula.id_aula AS aula, lunes, martes, miercoles, jueves, viernes FROM horario INNER JOIN materia ON horario.id_materia = materia.id_materia INNER JOIN tutor ON horario.id_tutor = tutor.ncontrol INNER JOIN aula ON horario.id_aula = aula.id_aula where horario.id_horario =".$id;
echo($_SESSION['query']);
header("Location: ../perfil_admin.php?op=100");
?>
