<?php
  SESSION_START();
  include('../bd.php');
  $id = $_POST["id"];
  $usuario = $_POST["usuario"];
  $nombre = $_POST["nombre"];
  $paterno = $_POST["paterno"];
  $materno = $_POST["materno"];
  $pass = $_POST["pass"];


  $query = 'UPDATE admin SET usuario = "'.$usuario.'", nombre = "'.$nombre.'", paterno = "'.$paterno.'", materno = "'.$materno.'", pass = "'.$pass.'" WHERE usuario = '.$id.'';
  //echo($query);
  //$res = bd_consulta($query);
  if($usuario==0 || $nombre=="" || $paterno=="" || $pass=="")
      echo "chet";
  /*if ($res)
      header('Location: ../perfil_admin.php?op=5');*/
      else{
        $res = bd_consulta($query);
        header('Location: ../perfil_admin.php?op=9');
      }
?>
