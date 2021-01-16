<?php
  include('bd.php');
  $query="SELECT * FROM aula ORDER BY aula";
  $resul=bd_consulta($query);
?>
<script>
var alt = "";
  function aula(){
    document.getElementById('btn00').style.background='';
    document.getElementById('btn11').style.background='';
    document.getElementById('btn22').style.background='#1CD5AA';
    document.getElementById('btn33').style.background='';
    document.getElementById('btn44').style.background='';
    document.getElementById('btn55').style.background='';
    document.getElementById('btn66').style.background='';
    document.getElementById('btn77').style.background='';
    document.getElementById('btn88').style.background='';
    document.getElementById('btn99').style.background='';
  }
  function cAula(s, aux){
    var btnAula = document.getElementById('minAula');
    var modAula = document.getElementById('modAula');
    var filas=document.getElementsByTagName('tr');
    <?php for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
      echo "if(aux==".$i."){
          document.getElementById('aula".$i."').style.background='#1CD5AA';
          alt = s;
        }
        else{
          document.getElementById('aula".$i."').style.background='';
        }";
    }
    ?>
    btnAula.href="procesos/elim_aula.php?id_aula="+alt;
    modAula.href="procesos/get_modaula.php?id="+alt;
  }
</script>

<script>
  aula();
</script>

<section class="back_menu">
  <br>
  <table class="content-table">
    <thead>
      <tr class="table_head">
        <td>Aula</td>
      </tr>
    </thead>

    <?php
      $resul=bd_consulta($query);
      for($i=1;$row=mysqli_fetch_assoc($resul);$i++){
        $val="aula".$i;
        echo "<tr id='".$val."' onclick=cAula('".$row['id_aula']."'".","."'".$i."');>
        <td> ".$row['aula']."</td>
        </tr>";
    }
    ?>

    <form id="newAula" action="procesos/agregaaula.php" method="post" enctype="multipart/form-data">
      <tr>

        <td><input type="text" id="aula" name="aula" style="width:150px; border-bottom:1px solid #FFF; border-radius:0; margin:0;"></td>
      </tr>

      <a id="add" onclick="document.getElementById('newAula').submit();" class='plus'><img src='img/plus.png' width='50px' border='0'/></a>
    </form>
  </table>
</section>

<?php
  echo "<a class='minus' id='minAula' href=''><img src='img/minus.png' width='40px' border='0'/></a>
  <a class='mod' id='modAula' href='#'><img src='img/modify.png' width='40px' border='0'/></a>";
?>
