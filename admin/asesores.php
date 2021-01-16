<?php
  include('bd.php');
  $query="SELECT * FROM asesor";
  $resul=bd_consulta($query);
?>
<script>
var alt = "";
  function asesor(){
    document.getElementById('btn00').style.background='';
    document.getElementById('btn11').style.background='';
    document.getElementById('btn22').style.background='';
    document.getElementById('btn33').style.background='#1CD5AA';
    document.getElementById('btn44').style.background='';
    document.getElementById('btn55').style.background='';
    document.getElementById('btn88').style.background='';
  }
  function cAsesor(s, aux){
    var btnAsesor = document.getElementById('minAsesor');
    var modAsesor = document.getElementById('mod');
    var filas=document.getElementsByTagName('tr');
    <?php for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "if(aux==".$i."){
          document.getElementById('asesor".$i."').style.background='#1CD5AA';
          alt = s;
        }
        else{
          document.getElementById('asesor".$i."').style.background='';
        }";
    }
    ?>
    btnAsesor.href="procesos/elim_asesor.php?id="+alt;
    modAsesor.href="procesos/get_modasesor.php?id="+alt;
  }
</script>

<script>
  asesor();
</script>

<section class="back_menu">
  <br>
  <table class="content-table">
    <thead>
      <tr class="table_head">
        <td>Num. Control</td>
        <td>Nombre</td>
        <td>Ap. Paterno</td>
        <td>Ap. Materno</td>
        <td>Semestre</td>
        <td>Contraseña</td>
      </tr>
    </thead>

    <?php
      $resul=bd_consulta($query);
      for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
        $val="asesor".$i;
        echo "<tr id='".$val."' onclick=cAsesor('".$row['ncontrol']."'".","."'".$i."');>
          <td> ".$row['ncontrol']."</td>
          <td> ".$row['nombre']."</td>
          <td> ".$row['aPaterno']."</td>
          <td> ".$row['aMaterno']."</td>
          <td> ".$row['semestre']."</td>
          <td> ".$row['pass']."</td>
        </tr>";
    }
    ?>

    <form id="newAsesor" action="procesos/agregaasesor.php" method="post" enctype="multipart/form-data">
      <tr>
        <td> <input type="text" id="ncontrol" name="ncontrol" value="" placeholder='xxxxxxx' style="width:100px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="nombre" name="nombre" value="" placeholder='Ej. Luis' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="aParteno" name="aPaterno" value="" placeholder='Ap. Paterno' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="aMaterno" name="aMaterno" value="" placeholder='Ap. Materno(Opcional)' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="semestre" name="semestre" value="" placeholder='Ej. 7'> </td>
        <td> <input id="pass" name="pass" value="" placeholder='Ej. 123' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
      </tr>

      <a id="add" onclick="document.getElementById('newAsesor').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
    </form>

  </table>
</section>

<?php
  echo "<a class='minus' id='minAsesor' href=''><img src='img/minus.png' width='40px' border='0'/></a>
  <a class='mod' id='mod' href='#'><img src='img/modify.png' width='40px' border='0'/></a>";
?>
