<?php
include('bd.php');

$qry2='SELECT * FROM periodo where id_periodo=(SELECT max(id_periodo) from periodo)';
$res=bd_consulta($qry2);
$row1 = mysqli_fetch_assoc($res);
$per = $row1['id_periodo'];

$query="SELECT materia.nombre AS materia,tutor.nombre AS tutor, tutor.aPaterno, aula.aula AS aula, lunes, martes, miercoles, jueves, viernes FROM horario INNER JOIN materia ON horario.id_materia = materia.id_materia INNER JOIN tutor ON horario.id_tutor = tutor.ncontrol INNER JOIN aula ON horario.id_aula = aula.id_aula where horario.id_periodo = ".$per;
$resul=bd_consulta($query);
?>

<section class="back_menu">
  <br>
  <h2>Periodo <?php echo $row1['periodo'] ?></h2>
  <table class="content-table">
    <thead>
      <tr class="table_head">
        <td>Materia</td>
        <td>Asesor</td>
        <td>Aula</td>
        <td>Lunes</td>
        <td>Martes</td>
        <td>Miercoles</td>
        <td>Jueves</td>
        <td>Viernes</td>
      </tr>
    </thead>

  <?php
    for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "<tr class='one'>
        <td> ".$row['materia']."</td>
        <td> ".$row['tutor'].' '.$row['aPaterno']."</td>
        <td> ".$row['aula']."</td>
        <td> ".$row['lunes']."</td>
        <td> ".$row['martes']."</td>
        <td> ".$row['miercoles']."</td>
        <td> ".$row['jueves']."</td>
        <td> ".$row['viernes']."</td>
      </tr>";
  }
  ?>
  </table>
</section>
