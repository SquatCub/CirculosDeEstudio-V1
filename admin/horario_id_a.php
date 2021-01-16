<?php
  include('bd.php');
  $query = $_SESSION['query'];
  $resul=bd_consulta($query);
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
    var btnAsistencias = document.getElementById('vAsistencias');
    var registra_asistencia = document.getElementById('clock');
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
    btnAsistencias.href="procesos/get_asistencia_a.php?id="+alt;
    registra_asistencia.href="procesos/registra_asistencia_a.php?id="+alt;
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
