<?php
  include('bd.php');
  $query="SELECT * FROM admin";
  $resul=bd_consulta($query);
?>
<script>
var alt = "";
  function periodo(){
    document.getElementById('btn00').style.background='';
    document.getElementById('btn11').style.background='';
    document.getElementById('btn22').style.background='';
    document.getElementById('btn33').style.background='';
    document.getElementById('btn44').style.background='';
    document.getElementById('btn55').style.background='';
    document.getElementById('btn66').style.background='#1CD5AA';
    document.getElementById('btn88').style.background='';
  }
  function cPeriodo(s, aux){
    var btnPeriodo = document.getElementById('minPeriodo');
    var modPeriodo = document.getElementById('mod');
    var filas=document.getElementsByTagName('tr');
    <?php for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "if(aux==".$i."){
          document.getElementById('periodo".$i."').style.background='#1CD5AA';
          alt = s;
        }
        else{
          document.getElementById('periodo".$i."').style.background='';
        }";
    }
    ?>
    btnPeriodo.href="procesos/elim_periodo.php?id="+alt;
    modAdmin.href="procesos/get_modadmin.php?id="+alt;
  }
</script>

<script>
  periodo();
</script>


<section class="back_menu">
  <br>
  <h3>Nuevo periodo</h3>
  <form id="newPeriodo" action="procesos/agrega_periodo.php" method="post" enctype="multipart/form-data">
    <input id="periodo" name="periodo" value="" placeholder='Ej. Enero-Junio 2019' style="width:180px; border-bottom:1px solid #FFF; border-radius:0; margin:0;">
    <br>
    <br>
      <a id="add" onclick="document.getElementById('newPeriodo').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
  </form>
  <?php
  $pry = 'SELECT * FROM periodo order by id_periodo desc;';
  $result=bd_consulta($pry);
   ?>

  <h3>Periodos existentes</h3>
  <form id="minPeriodo" action="procesos/elim_periodo.php" method="post" enctype="multipart/form-data">
  <select id="per" name="per" style="margin-bottom:15px;">
    <?php
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
<a id="min" onclick="document.getElementById('minPeriodo').submit();" class='minus'><img src='img/minus.png' width='40px' border='0'/></a>
</form><br>


</section>
<?php

?>
