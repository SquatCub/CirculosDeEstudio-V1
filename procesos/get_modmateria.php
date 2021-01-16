<?php
SESSION_START();
$id=$_GET['id'];
$_SESSION['query']="SELECT id_materia, nombre from materia where id_materia =".$id;
echo($_SESSION['query']);
header("Location: ../perfil_admin.php?op=101");
?>
