<?php
SESSION_START();
$id=$_GET['id'];
$_SESSION['query']="SELECT id_aula, aula from aula where id_aula =".$id;
echo($_SESSION['query']);
header("Location: ../perfil_admin.php?op=102");
?>
