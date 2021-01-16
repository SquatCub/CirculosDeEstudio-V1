<?php
  include('bd.php');
  $query = $_SESSION['query'];
  $res=bd_consulta($query);
  $aux=mysqli_fetch_assoc($res);
  $materia=$aux['nombre'];
 ?>
 <div class="back_menu">
   <br>
 <section>
    <table class="content-table">
      <thead>
        <tr class="table_head">
          <td>Materia</td>
        </tr>
      </thead>

    <form id="new" action="procesos/actualiza_materia.php" method="post" enctype="multipart/form-data">
      <tr>

        <td> <input id="materia" name="materia" value="<?php echo($aux['nombre']); ?>" placeholder="Materia" style="width:200px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"></td>     
        <input  name="id" value="<?php echo($aux['id_materia']);?>" style="display:none">
      </tr>

      <a id="add" onclick="document.getElementById('new').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
      </form>
    </table>
  </section>
  <?php echo "<a class='minus' id='exit' href='perfil_admin.php?op=1'><img src='img/minus.png' width='40px' border='0'/></a>";?>
</div>
