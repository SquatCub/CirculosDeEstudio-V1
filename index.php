  <?php
  $title = "Instituto Tecnologico de Morelia";
  include('cabecera.php');
  include('titulo.php');
  $mensaje_form="";

  include('menu.php');

  include('botones.php');
  echo "<script>
    mostrarInicio();
  </script>";
  if($op=="-1"){
      $mensaje_form="Usuario o contraseña incorrectos";

  }
   include('pie.php');
?>
