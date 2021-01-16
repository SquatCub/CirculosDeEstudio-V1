<?php
include('bd.php');
$query="SELECT id_horario, materia.nombre AS materia, tutor.nombre AS tutor, tutor.aPaterno, aula.aula AS aula, lunes, martes, miercoles, jueves, viernes FROM horario INNER JOIN materia ON horario.id_materia = materia.id_materia INNER JOIN tutor ON horario.id_tutor = tutor.ncontrol INNER JOIN aula ON horario.id_aula = aula.id_aula where horario.id_periodo =".$_SESSION['periodo']." order by id_horario";
$resul=bd_consulta($query);
$bb="";
?>





<script>
  var alt="";
  function horario(){
    document.getElementById('btn00').style.background='#1CD5AA';
    document.getElementById('btn11').style.background='';
    document.getElementById('btn22').style.background='';
    document.getElementById('btn33').style.background='';
    document.getElementById('btn44').style.background='';
    document.getElementById('btn55').style.background='';
    document.getElementById('btn66').style.background='';
    document.getElementById('btn77').style.background='';
    document.getElementById('btn88').style.background='';
    document.getElementById('btn99').style.background='';
  }
  function a(){
    alert(alt);
  }
  function cHorario(s, aux){
    var btn = document.getElementById('min');
    var mod = document.getElementById('mod');
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
    btn.href="procesos/elim_horario.php?id="+alt;
    mod.href="procesos/get_modcirculos.php?id="+alt;
    btnAsistencias.href="procesos/get_asistencia_a.php?id="+alt;
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
<section>

  <br>
  <h3 style="margin-bottom:2px;">Periodo</h3>
  <form action="procesos/set_periodo.php" name="miformulario" id="miformulario" method="post" >
  <select id="per" name="per" style="margin-bottom:15px;">
    <?php
    $pry = 'SELECT * FROM periodo order by id_periodo desc;';
    $result=bd_consulta($pry);
    for($i=1;$row=mysqli_fetch_assoc($result);$i++){
        if($row['id_periodo']==$_SESSION['periodo']){
          echo "<option value='".$row['id_periodo']."' selected>".$row['periodo']."</option>";
        }
        else{
          echo "<option value='".$row['id_periodo']."'>".$row['periodo']."</option>";
        }
    }


  ?>
  </select>
  <button type="submit" class="formButton" value="Acceder" autofocus name="button">Ir</button>
  </form>

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
  <h3>Crea un circulo</h3>
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


  <form id="new" action="procesos/agregahorario.php" method="post" enctype="multipart/form-data">
    <tr>
      <td> <select id="mat" name="mat" onchange="addHorario();">

        <?php
          $query="SELECT * FROM materia";
          $resul=bd_consulta($query);
          $resul=bd_consulta($query);
          for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
              echo "<option value='".$row['id_materia']."'>".$row['nombre']."</option>";
          }
        ?>

      </select> </td>
      <td> <select id="tut" name="tut">

        <?php
        $query="SELECT * FROM tutor";
        $resul=bd_consulta($query);
        for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
            echo "<option value='".$row['ncontrol']."'>".$row['nombre']." ".$row[aPaterno]."</option>";
        }
        ?>

      </select> </td>
      <td> <select id="aul" name="aul">

        <?php
        $query="SELECT * FROM aula";
        $resul=bd_consulta($query);
        for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
            echo "<option value='".$row['id_aula']."'>".$row['aula']."</option>";
        }
        ?>

      </select> </td>
      <td><select id="lunes" name="lunes">
        <?php
          for($i=6; $i<21; $i++){
            $end=$i+1;
            if($end==7){
              echo("<option value=''>Sin hora</option>");
            }
            else{

              $aux = $i ."-".$end;
              echo("<option value='".$aux."'>".$aux."</option>");
            }
          }
        ?>
      </select></td>
      <td><select id="martes" name="martes">
        <?php
          for($i=6; $i<21; $i++){
            $end=$i+1;
            if($end==7){
              echo("<option value=''>Sin hora</option>");
            }
            else{

              $aux = $i ."-".$end;
              echo("<option value='".$aux."'>".$aux."</option>");
            }
          }
        ?>
      </select></td>
      <td><select id="miercoles" name="miercoles">
        <?php
          for($i=6; $i<21; $i++){
            $end=$i+1;
            if($end==7){
              echo("<option value=''>Sin hora</option>");
            }
            else{

              $aux = $i ."-".$end;
              echo("<option value='".$aux."'>".$aux."</option>");
            }
          }
        ?>
      </select></td>
      <td><select id="jueves" name="jueves">
        <?php
          for($i=6; $i<21; $i++){
            $end=$i+1;
            if($end==7){
              echo("<option value=''>Sin hora</option>");
            }
            else{

              $aux = $i ."-".$end;
              echo("<option value='".$aux."'>".$aux."</option>");
            }
          }
        ?>
      </select></td>
      <td><select id="viernes" name="viernes">
        <?php
          for($i=6; $i<21; $i++){
            $end=$i+1;
            if($end==7){
              echo("<option value=''>Sin hora</option>");
            }
            else{

              $aux = $i ."-".$end;
              echo("<option value='".$aux."'>".$aux."</option>");
            }
          }
        ?>
      </select></td>
      <!--<td> <input id="viernes" name="viernes" value="" placeholder='00-00'> </td>-->
    </tr>

    <a id="add" onclick="document.getElementById('new').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
  </form>


  </table>
</section>
</div>



<?php
  echo "<a id='vAsistencias' href='' style='text-align:center;width:120px; height:40px;border-radius: 6px; text-decoration:none; color:#FFF;' class='minusa'>Ver asistencias</a>
  <a class='minus' id='min' href=''><img src='img/minus.png' width='40px' border='0'/></a>
  <a class='mod' id='mod' href='#'><img src='img/modify.png' width='40px' border='0'/></a>";
?>
