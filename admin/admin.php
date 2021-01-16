<?php
  include('bd.php');
  $query="SELECT * FROM admin";
  $resul=bd_consulta($query);
?>
<script>
var alt = "";
  function admin(){
    document.getElementById('btn00').style.background='';
    document.getElementById('btn11').style.background='';
    document.getElementById('btn22').style.background='';
    document.getElementById('btn33').style.background='';
    document.getElementById('btn44').style.background='';
    document.getElementById('btn55').style.background='';
    document.getElementById('btn88').style.background='#1CD5AA';
  }
  function cAdmin(s, aux){
    var btnAdmin = document.getElementById('minAdmin');
    var modAdmin = document.getElementById('mod');
    var filas=document.getElementsByTagName('tr');
    <?php for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "if(aux==".$i."){
          document.getElementById('admin".$i."').style.background='#1CD5AA';
          alt = s;
        }
        else{
          document.getElementById('admin".$i."').style.background='';
        }";
    }
    ?>
    btnAdmin.href="procesos/elim_admin.php?id="+alt;
    modAdmin.href="procesos/get_modadmin.php?id="+alt;
  }
</script>

<script>
  admin();
</script>

<section class="back_menu">
  <br>
  <table class="content-table">
    <thead>
      <tr class="table_head">
        <td>Usuario</td>
        <td>Nombre</td>
        <td>Ap. Paterno</td>
        <td>Ap. Materno</td>
        <td>Contraseña</td>
      </tr>
    </thead>

    <?php
      $resul=bd_consulta($query);
      for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
        $val="admin".$i;
        echo "<tr id='".$val."' onclick=cAdmin('".$row['usuario']."'".","."'".$i."');>
          <td> ".$row['usuario']."</td>
          <td> ".$row['nombre']."</td>
          <td> ".$row['paterno']."</td>
          <td> ".$row['materno']."</td>
          <td> ".$row['pass']."</td>
        </tr>";
    }
    ?>

    <form id="newAdmin" action="procesos/agregaadmin.php" method="post" enctype="multipart/form-data">
      <tr>
        <td> <input type="text" id="usuario" name="usuario" value="" placeholder='xxxxxxx' style="width:100px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="nombre" name="nombre" value="" placeholder='Ej. Luis' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="aParteno" name="paterno" value="" placeholder='Ap. Paterno' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="aMaterno" name="materno" value="" placeholder='Ap. Materno(Opcional)' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
        <td> <input id="pass" name="pass" value="" placeholder='Ej. 123' style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"> </td>
      </tr>

      <a id="add" onclick="document.getElementById('newAdmin').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
    </form>

  </table>

  <hr>
</section>




<?php
  echo "<a class='minus' id='minAdmin' href=''><img src='img/minus.png' width='40px' border='0'/></a>
  <a class='mod' id='mod' href='#'><img src='img/modify.png' width='40px' border='0'/></a>";
?>
