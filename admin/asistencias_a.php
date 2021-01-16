<?php
  include('bd.php');
  $query = $_SESSION['queryA'];
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
    var btn = document.getElementById('minAs');
    var filas=document.getElementsByTagName('tr');
    <?php
    for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "if(aux==".$i."){
          document.getElementById('asistencia".$i."').style.background='#1CD5AA';
          alt=s;
        }
        else{
          document.getElementById('asistencia".$i."').style.background='';
        }";
    }
    ?>
    btn.href="procesos/elim_asistencia_a.php?id="+alt;
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
  <h3>Asistencias</h3>
  <?php
    $resul=bd_consulta($query);
    $aux=0;
    for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      $val="asistencia".$i;
      $aux=$i;
  }
  echo("<h2 style='color:#FFF;'>Total de asistencias: ".$aux."</h2>");
  ?>
  <table class="content-table">
    <thead>
      <tr class="table_head">
        <td>Fecha</td>
        <td>Hora registrada</td>
      </tr>
    </thead>

  <?php
    $resul=bd_consulta($query);
    for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      $val="asistencia".$i;
      echo "<tr id='".$val."' onclick=cHorario(".$row['id_asistencia'].","."'".$i."');>
        <td> ".$row['dia']."</td>
        <td> ".$row['hora']."</td>
      </tr>";
  }
  ?>
  </table>
</section>
</div>



<?php
  echo "<a class='minA' id='minAs' href=''><img src='img/minus.png' width='40px' border='0'/><p>Eliminar asistencia</p></a>
  ";
?>
