
<?php
  SESSION_START();
  include('../bd.php');
  $id=$_GET['id'];
  $qry = 'INSERT INTO asistencia(id_horario,dia,hora) VALUES('.$id.',CURRENT_DATE(),CURRENT_TIME())';

  $qry2 = "SELECT COUNT(dia) as count from asistencia where CURDATE() = dia and id_horario ='$id'";
  $res2 = bd_consulta($qry2);
  $row = mysqli_fetch_assoc($res2);
  if($row['count'] > 0){
    header('Location: ../perfil_admin.php?op=112');
  }
  else{
      $res = bd_consulta($qry);
      header('Location: ../perfil_admin.php?op=111');
  }
?>
