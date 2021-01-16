<?php
include('bd.php');
$query="SELECT id_horario, materia.nombre AS materia, tutor.nombre AS tutor, tutor.aPaterno, aula.aula AS aula, lunes, martes, miercoles, jueves, viernes FROM horario INNER JOIN materia ON horario.id_materia = materia.id_materia INNER JOIN tutor ON horario.id_tutor = tutor.ncontrol INNER JOIN aula ON horario.id_aula = aula.id_aula where horario.id_periodo = ".$_SESSION['periodo']." order by id_horario";
$resul=bd_consulta($query);
$bb="";
?>

<script>
  var alt="";
  function horario(){
    document.getElementById('btn00').style.background='#1CD5AA';
    document.getElementById('btn44').style.background='';
    document.getElementById('btn99').style.background='';
  }
  function a(){
    alert(alt);
  }
  function cHorario(s, aux){
    var btn = document.getElementById('clock');
    var btnAsistencias = document.getElementById('vAsistencias');
    var filas=document.getElementsByTagName('tr');
    <?php
    for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "if(aux==".$i."){
          document.getElementById('horario".$i."').style.background='#1CD5AA';
          alt=s;
        }
        else{
          document.getElementById('horario".$i."').style.background='';
        }";
    }
    ?>
    btn.href="procesos/registra_asistencia.php?id="+alt;
    btnAsistencias.href="procesos/get_asistencias.php?id="+alt;
  }
  function addHorario(){
    var materia = document.getElementById('mat').value;
    console.log(materia);
  }

</script>

<script>
  horario();
</script>
<div class="back_menu">
  <br>
<section>
  <table class="content-table">
    <thead>
      <tr class="table_head">
        <td>Materia</td>
        <td>Tutor</td>
        <td>Aula</td>
        <td>Lunes</td>
        <td>Martes</td>
        <td>Miercoles</td>
        <td>Jueves</td>
        <td>Viernes</td>
      </tr>
    </thead>

  <?php
    $resul=bd_consulta($query);
    for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      $val="horario".$i;
      echo "<tr id='".$val."' onclick=cHorario('".$row['id_horario']."'".","."'".$i."');>
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
</div>



<?php
  echo "<a id='vAsistencias' href='' style='text-align:center;width:120px; height:40px;border-radius: 6px; text-decoration:none; color:#FFF;' class='minus'>Ver asistencias</a>
  <a class='clock' id='clock' href=''><img src='img/reloj.png' width='40px' border='0'/><p>Registrar Asistencia</p></a>";
?>
