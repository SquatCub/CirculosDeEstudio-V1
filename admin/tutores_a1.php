<?php
  include('bd.php');
  $query="SELECT * FROM tutor where id_periodo = " .$_SESSION['periodo'];
  $resul=bd_consulta($query);
?>
<script>
var alt = "";
  function tutor(){
    document.getElementById('btn00').style.background='';
    document.getElementById('btn44').style.background='#1CD5AA';
    document.getElementById('btn55').style.background='';
  }
  function cTutor(s, aux){
    var btnCirculos = document.getElementById('vCirculos');
    var filas=document.getElementsByTagName('tr');
    <?php for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      $_SESSION['d'] = $i;
      echo "if(aux==".$i."){
          document.getElementById('tutor".$i."').style.background='#1CD5AA';
          alt = s;
        }
        else{
          document.getElementById('tutor".$i."').style.background='';
        }";
    }
    ?>
    btnCirculos.href="procesos/get_circulos.php?id="+alt;
  }
</script>

<script>
  tutor();
</script>

<section class="back_menu">
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
  </table>
</section>

<?php
  echo "<a id='vCirculos' href='' style='text-align:center;width:120px; height:40px;border-radius: 6px; text-decoration:none; color:#FFF;' class='mod'>Ver circulos</a>";
?>
