<?php
  include('bd.php');
  $query="SELECT * FROM tutor where id_periodo = " .$_SESSION['periodo'];
  $resul=bd_consulta($query);
?>




<script>
var alt = "";
  function tutor(){
    document.getElementById('btn00').style.background='';
    document.getElementById('btn11').style.background='';
    document.getElementById('btn22').style.background='';
    document.getElementById('btn33').style.background='';
    document.getElementById('btn44').style.background='#1CD5AA';
    document.getElementById('btn55').style.background='';
  }
  function cTutor(s, aux){
    var btnTutor = document.getElementById('minTutor');
    var modTutor = document.getElementById('mod');
    var btnCirculos = document.getElementById('vCirculos');
    var filas=document.getElementsByTagName('tr');
    <?php for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "if(aux==".$i."){
          document.getElementById('tutor".$i."').style.background='#1CD5AA';
          alt = s;
        }
        else{
          document.getElementById('tutor".$i."').style.background='';
        }";
    }
    ?>
    btnTutor.href="procesos/elim_tutor.php?id="+alt;
    modTutor.href="procesos/get_modtutor.php?id="+alt;
    btnCirculos.href="procesos/get_circulos_a.php?id="+alt;
  }
</script>

<script>
  tutor();
</script>

<section class="back_menu">
  <br>
  <h3 style="margin-bottom:2px;">Periodo</h3>
  <form action="procesos/set_periodot.php" name="miformulario" id="miformulario" method="post" >
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
        <td>Num. Control</td>
        <td>Nombre</td>
        <td>Ap. Paterno</td>
        <td>Ap. Materno</td>
        <td>Semestre</td>
      </tr>
    </thead>

    <?php
      $resul=bd_consulta($query);
      for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
        $val="tutor".$i;
        echo "<tr id='".$val."' onclick=cTutor('".$row['ncontrol']."'".","."'".$i."');>
          <td> ".$row['ncontrol']."</td>
          <td> ".$row['nombre']."</td>
          <td> ".$row['aPaterno']."</td>
          <td> ".$row['aMaterno']."</td>
          <td> ".$row['semestre']."</td>
        </tr>";
    }
    ?>

    <form id="newTutor" action="procesos/agregatutor.php" method="post" enctype="multipart/form-data">
      <tr>
        <td> <input type="text" id="ncontrol" name="ncontrol" value="" placeholder='xxxxxxx' style="width:100px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="nombre" name="nombre" value="" placeholder='Ej. Luis' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="aParteno" name="aPaterno" value="" placeholder='Ap. Paterno' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="aMaterno" name="aMaterno" value="" placeholder='Ap. Materno(Opcional)' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="semestre" name="semestre" value="" placeholder='Ej. 7'> </td>
      </tr>

      <a id="add" onclick="document.getElementById('newTutor').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
    </form>

  </table>
</section>

<?php
  echo "<a id='vCirculos' href='' style='text-align:center;width:120px; height:40px;border-radius: 6px; text-decoration:none; color:#FFF;' class='minusa'>Ver circulos</a>";
  echo "<a class='minus' id='minTutor' href=''><img src='img/minus.png' width='40px' border='0'/></a>
  <a class='mod' id='mod' href='#'><img src='img/modify.png' width='40px' border='0'/></a>";
?>
