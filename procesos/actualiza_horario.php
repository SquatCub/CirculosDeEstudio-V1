<?php
  SESSION_START();
  include('../bd.php');
  $hor = $_POST["horario"];
  $materia_id = $_POST["mat"];
  $tutor_id = $_POST["tut"];
  $aula_id = $_POST["aul"];
  $mon = $_POST["lunes"];
  $thu = $_POST["martes"];
  $wed = $_POST["miercoles"];
  $tue = $_POST["jueves"];
  $fri = $_POST["viernes"];

	$qry = 'select * from horario where id_horario = '.$hor;
	$res=bd_consulta($qry);
	$ac=mysqli_fetch_assoc($res);
        $query='UPDATE horario set lunes = "", martes="", miercoles="",jueves="",viernes=""
        WHERE id_horario="'.$hor.'"';
        bd_consulta($query);
  


  $query = 'UPDATE horario SET id_materia = '.$materia_id.', id_tutor = '.$tutor_id.', id_aula = '.$aula_id.', lunes = "'.$mon.'", martes = "'.$thu.'", miercoles = "'.$wed.'", jueves = "'.$tue.'", viernes = "'.$fri.'" WHERE id_horario = '.$hor.'';
  $ax=array("lunes", "martes", "miercoles", "jueves", "viernes");
  $ax2=array($mon, $thu, $wed, $tue, $fri);
  $r=0;
  for ($i=0; $i < 5; $i++) {
      if($ax2[$i]!==""){
        $qry2='select count(*) as count from horario where id_aula = '.$aula_id.' and '.$ax[$i].' = "'.$ax2[$i].'"';
        $res = bd_consulta($qry2);
        $row = mysqli_fetch_assoc($res);
        if($row['count'] > 0){
          $r+=1;
        }
      }
  }
  if($r > 0){
	$query='UPDATE horario set lunes = "'.$ac['lunes'].'", martes="'.$ac['martes'].'", miercoles="'.$ac['miercoles'].'",jueves="'.$ac['jueves'].'",viernes="'.$ac['viernes'].'"
        WHERE id_horario="'.$hor.'"';
        bd_consulta($query);

  header('Location: ../perfil_admin.php?op=121');
  }
  else {
  $res = bd_consulta($query);
  header('Location: ../perfil_admin.php?op=123');
  }

?>
