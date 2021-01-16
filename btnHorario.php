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
</select><br>
</section>
<?php
  echo "<a class='minus' id='minPeriodo' href=''><img src='img/minus.png' width='40px' border='0'/></a>
  <a class='mod' id='mod' href='#'><img src='img/modify.png' width='40px' border='0'/></a>";
?>
