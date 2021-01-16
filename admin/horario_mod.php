<?php
  include('bd.php');
  $query = $_SESSION['query'];
  $res=bd_consulta($query);
  $aux=mysqli_fetch_assoc($res);
  $materia=$aux['materia'];
  $tutor=$aux['tutor'];
  $aula=$aux['aula'];
 ?>
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

    <form id="new" action="procesos/actualiza_horario.php" method="post" enctype="multipart/form-data">
      <tr>

        <td> <select id="mat" name="mat" onchange="addHorario();">

          <?php
            $query="SELECT * FROM materia";
            $resul=bd_consulta($query);
            for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
              if($row['id_materia']==$materia){
                echo "<option value='".$row['id_materia']."' selected>".$row['nombre']."</option>";
              }
              else{
                echo "<option value='".$row['id_materia']."'>".$row['nombre']."</option>";
              }
            }
          ?>

        </select> </td>


        <td> <select id="tut" name="tut">
          <?php
          $query="SELECT * FROM tutor";
          $resul=bd_consulta($query);
          for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
            if($row['ncontrol']==$tutor){
              echo "<option value='".$row['ncontrol']."' selected>".$row['nombre'].' '.$row['aPaterno']."</option>";
            }
            else{
              echo "<option value='".$row['ncontrol']."'>".$row['nombre'].' '.$row['aPaterno']."</option>";
            }
          }
          ?>

        </select> </td>


        <td> <select id="aul" name="aul">
          <?php
          $query="SELECT * FROM aula";
          $resul=bd_consulta($query);
          for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
            if($row['id_aula']==$aula){
              echo "<option value='".$row['id_aula']."' selected>".$row['aula']."</option>";
            }
            else{
              echo "<option value='".$row['id_aula']."'>".$row['aula']."</option>";
            }
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
                $ax = $i ."-".$end;
                if($ax==$aux['lunes']){
                  echo("<option value='".$ax."' selected>".$ax."</option>");
                }
                else{
                  echo("<option value='".$ax."'>".$ax."</option>");
                }
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
                $ax = $i ."-".$end;
                if($ax==$aux['martes']){
                  echo("<option value='".$ax."' selected>".$ax."</option>");
                }
                else{
                  echo("<option value='".$ax."'>".$ax."</option>");
                }
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
                $ax = $i ."-".$end;
                if($ax==$aux['miercoles']){
                  echo("<option value='".$ax."' selected>".$ax."</option>");
                }
                else{
                  echo("<option value='".$ax."'>".$ax."</option>");
                }
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
                $ax = $i ."-".$end;
                if($ax==$aux['jueves']){
                  echo("<option value='".$ax."' selected>".$ax."</option>");
                }
                else{
                  echo("<option value='".$ax."'>".$ax."</option>");
                }
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
                $ax = $i ."-".$end;
                if($ax==$aux['viernes']){
                  echo("<option value='".$ax."' selected>".$ax."</option>");
                }
                else{
                  echo("<option value='".$ax."'>".$ax."</option>");
                }
              }
            }
          ?>
        </select></td>


        <input  name="horario" value="<?php echo($aux['id_horario']);?>" style="display:none">
      </tr>


      <a id="add" onclick="document.getElementById('new').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
    </form>
    </table>
    </section>
    <?php echo "<a class='minus' id='exit' href='perfil_admin.php?op=0'><img src='img/minus.png' width='40px' border='0'/></a>";?>
</div>
