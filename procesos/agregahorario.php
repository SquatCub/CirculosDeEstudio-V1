<?php
  SESSION_START();
  include('../bd.php');
  $materia_id = $_POST["mat"];
  $tutor_id = $_POST["tut"];
  $aula_id = $_POST["aul"];
  $mon = $_POST["lunes"];
  $thu = $_POST["martes"];
  $wed = $_POST["miercoles"];
  $tue = $_POST["jueves"];
  $fri = $_POST["viernes"];
  $qry = 'INSERT INTO horario(id_materia, id_tutor, id_aula, lunes, martes, miercoles, jueves, viernes, id_periodo) VALUES("'.$materia_id.'","'.$tutor_id.'","'.$aula_id.'","'.$mon.'","'.$thu.'","'.$wed.'","'.$tue.'","'.$fri.'",'.$_SESSION['periodo'].')';
  echo($qry);
  $ax=array("lunes", "martes", "miercoles", "jueves", "viernes");
  $ax2=array($mon, $thu, $wed, $tue, $fri);
  $r=0;
  for ($i=0; $i < 5; $i++) {
      if($ax2[$i]!==""){
        $qry2='select count(*) as count from horario where id_aula = '.$aula_id.' and '.$ax[$i].' = "'.$ax2[$i].'" and id_periodo = '.$_SESSION['periodo'];
        $qry3='select count(*) as count from horario where id_tutor = '.$tutor_id.' and '.$ax[$i].' = "'.$ax2[$i].'" and id_periodo = '.$_SESSION['periodo'];
        $res = bd_consulta($qry2);
        $row = mysqli_fetch_assoc($res);
        $res = bd_consulta($qry3);
        $row5 = mysqli_fetch_assoc($res);
        if($row['count'] > 0 || $row5['count'] > 0){
          $r+=1;
        }
      }
  }
  echo $qry2;

if($r > 0){
  header('Location: ../perfil_admin.php?op=121');
}
else {
  $res = bd_consulta($qry);
  header('Location: ../perfil_admin.php?op=122');
}
?>
