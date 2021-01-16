<?php
  include('bd.php');
  $query="SELECT * FROM materia ORDER BY nombre";
  $resul=bd_consulta($query);
?>
<script>
  var alt="";
  function materia(){
    document.getElementById('btn00').style.background='';
    document.getElementById('btn11').style.background='#1CD5AA';
    document.getElementById('btn22').style.background='';
    document.getElementById('btn33').style.background='';
    document.getElementById('btn44').style.background='';
    document.getElementById('btn55').style.background='';
    document.getElementById('btn66').style.background='';
    document.getElementById('btn77').style.background='';
    document.getElementById('btn88').style.background='';
    document.getElementById('btn99').style.background='';
  }
  function cMateria(s, aux){
    var btnMat = document.getElementById('minMateria');
    var modMateria = document.getElementById('modMateria');
    var filas=document.getElementsByTagName('tr');
    <?php for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "if(aux==".$i."){
          document.getElementById('materia".$i."').style.background='#1CD5AA';
          alt=s;
        }
        else{
          document.getElementById('materia".$i."').style.background='';
        }";
    }
    ?>
    btnMat.href="procesos/elim_materia.php?id_materia="+alt;
    modMateria.href="procesos/get_modmateria.php?id="+alt;
  }
</script>

<script>
  materia();
</script>

<section class="back_menu">
  <br>
  <table class="content-table">
    <thead>
      <tr class="table_head">
        <td>Materia</td>
      </tr>
    </thead>

    <?php
    $resul=bd_consulta($query);
      for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
        $val="materia".$i;
        echo "<tr id='".$val."' onclick=cMateria('".$row['id_materia']."'".","."'".$i."');>
          <td> ".$row['nombre']."</td>
        </tr>";
    }
    ?>

    <form id="newMat" action="procesos/agregamateria.php" method="post" enctype="multipart/form-data">
      <tr>
        <td><input type="text" id="materia" name="materia" style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"></td>
      </tr>

      <a id="add" onclick="document.getElementById('newMat').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
    </form>



  </table>
</section>

<?php
  echo "<a class='minus' id='minMateria' href=''><img src='img/minus.png' width='40px' border='0'/></a>
  <a class='mod' id='modMateria' href='#'><img src='img/modify.png' width='40px' border='0'/></a>";
?>
