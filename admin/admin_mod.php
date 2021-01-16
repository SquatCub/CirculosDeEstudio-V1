<?php
  include('bd.php');
  $query = $_SESSION['query'];
  $res=bd_consulta($query);
  $aux=mysqli_fetch_assoc($res);
 ?>
 <div class="back_menu">
   <br>
  <section class="back_menu">
    <br>
    <table class="content-table">
      <thead>
        <tr class="table_head">
          <td>Usuario</td>
          <td>Nombre</td>
          <td>Ap. Paterno</td>
          <td>Ap. Materno</td>
          <td>Semestre</td>
          <td>Contraseña</td>
        </tr>
      </thead>

      <form id="newAdmin" action="procesos/actualiza_admin.php" method="post" enctype="multipart/form-data">
        <tr>
          <td> <input type="text" id="usuario" name="usuario" value="<?php echo $aux['usuario']; ?>" placeholder='xxxxxxx' style="width:100px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
          <td> <input id="nombre" name="nombre" value="<?php echo $aux['nombre']; ?>" placeholder='Ej. Luis' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
          <td> <input id="paterno" name="paterno" value="<?php echo $aux['paterno']; ?>" placeholder='Ap. Paterno' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
          <td> <input id="materno" name="materno" value="<?php echo $aux['materno']; ?>" placeholder='Ap. Materno(Opcional)' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
          <td> <input id="pass" name="pass" value="<?php echo $aux['pass']; ?>" placeholder='Ej. 123' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
          <input  id="id" name="id" value="<?php echo($aux['usuario']);?>" style="display:none">
        </tr>


        <a id="add" onclick="document.getElementById('newAdmin').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
      </form>

    </table>
  </section>
  <?php echo "<a class='minus' id='exit' href='perfil_admin.php?op=9'><img src='img/minus.png' width='40px' border='0'/></a>";?>
</div>
