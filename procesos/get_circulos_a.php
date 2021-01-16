<?php
  SESSION_START();
  $_SESSION['id']=$_GET['id'];
  $_SESSION['query']="SELECT id_horario, materia.nombre AS materia, tutor.nombre AS tutor, tutor.aPaterno, aula.aula AS aula, lunes, martes, miercoles, jueves, viernes FROM horario INNER JOIN materia ON horario.id_materia = materia.id_materia INNER JOIN tutor ON horario.id_tutor = tutor.ncontrol INNER JOIN aula ON horario.id_aula = aula.id_aula where horario.id_tutor =".$_SESSION['id'];
  echo($_SESSION['query']);

  header("Location: ../perfil_admin.php?op=111");
?>
