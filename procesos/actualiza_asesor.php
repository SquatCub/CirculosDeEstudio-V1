<?php
  SESSION_START();
  include('../bd.php');
  $id = $_POST["id"];
  $ncontrol = $_POST["ncontrol"];
  $nombre = $_POST["nombre"];
  $aPaterno = $_POST["aPaterno"];
  $aMaterno = $_POST["aMaterno"];
  $semestre = $_POST["semestre"];
  $pass = $_POST["pass"];


  $query = 'UPDATE asesor SET ncontrol = "'.$ncontrol.'", nombre = "'.$nombre.'", aPaterno = "'.$aPaterno.'", aMaterno = "'.$aMaterno.'", semestre = "'.$semestre.'", pass = "'.$pass.'" WHERE ncontrol = '.$id.'';
  //echo($query);
  //$res = bd_consulta($query);
  if($ncontrol==0 || $nombre=="" || $aPaterno=="" || $ncontrol==0 || $semestre==0)
      header('Location: ../perfil_admin.php?op=55');
  /*if ($res)
      header('Location: ../perfil_admin.php?op=5');*/
      else{
        $res = bd_consulta($query);
        header('Location: ../perfil_admin.php?op=5');
      }
?>
