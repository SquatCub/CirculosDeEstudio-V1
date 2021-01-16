<?php
  include('bd.php');
  $query = $_SESSION['query'];
  $res=bd_consulta($query);
  $aux=mysqli_fetch_assoc($res);
 ?>

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
       </tr>
     </thead>

     <form id="newTutor" action="procesos/actualiza_tutor.php" method="post" enctype="multipart/form-data">
       <tr>
         <td> <input type="text" id="ncontrol" name="ncontrol" value="<?php echo $aux['ncontrol']; ?>" placeholder='xxxxxxx' style="width:100px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
         <td> <input id="nombre" name="nombre" value="<?php echo $aux['nombre']; ?>" placeholder='Ej. Luis' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
         <td> <input id="aParteno" name="aPaterno" value="<?php echo $aux['aPaterno']; ?>" placeholder='Ap. Paterno' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
         <td> <input id="aMaterno" name="aMaterno" value="<?php echo $aux['aMaterno']; ?>" placeholder='Ap. Materno(Opcional)' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
         <td> <input id="semestre" name="semestre" value="<?php echo $aux['semestre']; ?>" placeholder='Ej. 7'> </td>
         <input  id="id" name="id" value="<?php echo($aux['ncontrol']);?>" style="display:none">
       </tr>

       <a id="add" onclick="document.getElementById('newTutor').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
     </form>

   </table>
   <?php echo "<a class='minus' id='exit' href='perfil_admin.php?op=7'><img src='img/minus.png' width='40px' border='0'/></a>";?>
 </section>
