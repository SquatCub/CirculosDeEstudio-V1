<?php
  SESSION_START();
  include('../bd.php');
  $id = $_POST["id"];
  $ncontrol = $_POST["ncontrol"];
  $nombre = $_POST["nombre"];
  $aPaterno = $_POST["aPaterno"];
  $aMaterno = $_POST["aMaterno"];
  $semestre = $_POST["semestre"];
  $per = $_SESSION['periodo'];

  $query = 'UPDATE tutor SET ncontrol = "'.$ncontrol.'", nombre = "'.$nombre.'", aPaterno = "'.$aPaterno.'", aMaterno = "'.$aMaterno.'", semestre = "'.$semestre.'"  WHERE ncontrol = '.$id.' and id_periodo = '.$per;
  //echo($query);
  //$res = bd_consulta($query);
  if($ncontrol==0 || $nombre=="" || $aPaterno=="" || $ncontrol==0 || $semestre==0)
      header('Location: ../perfil_admin.php?op=56');
  /*if ($res)
      header('Location: ../perfil_admin.php?op=5');*/
      else{
        $res = bd_consulta($query);
        header('Location: ../perfil_admin.php?op=7');
      }
?>
