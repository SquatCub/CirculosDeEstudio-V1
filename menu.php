 <section class="min">
     <p>Bienvenido a la pagina sobre los circulos de estudio, selecciona la opcion que desees.</p>
     <br>
 </section>

 <nav class="menu">
   <a id="btn1" href="index.php">Inicio</a>
   <a id="btn2" href="javascript:mostrarMaterias();">Materias</a>
   <a id="btn3" href="javascript:mostrarAsesor();">Asesor</a>
   <a id="btn4" href="javascript:mostrarAdmin();">Administrador</a>
 </nav>

<script>
  function mostrarInicio(){
    document.getElementById('btn1').style.background='#1CD5AA';
    document.getElementById('btn2').style.background='';
    document.getElementById('btn3').style.background='';
    document.getElementById('btn4').style.background='';
    document.getElementById('inicio').style.display='block';
    document.getElementById('materias').style.display='none';
    document.getElementById('admin').style.display='none';
    document.getElementById('asesor').style.display='none';
  }

  function mostrarMaterias(){
    document.getElementById('btn1').style.background='';
    document.getElementById('btn2').style.background='#1CD5AA';
    document.getElementById('btn3').style.background='';
    document.getElementById('btn4').style.background='';
    document.getElementById('inicio').style.display='none';
    document.getElementById('materias').style.display='block';
    document.getElementById('admin').style.display='none';
    document.getElementById('asesor').style.display='none';
  }

  function mostrarAsesor(){
    document.getElementById('btn1').style.background='';
    document.getElementById('btn2').style.background='';
    document.getElementById('btn3').style.background='#1CD5AA';
    document.getElementById('btn4').style.background='';
    document.getElementById('inicio').style.display='none';
    document.getElementById('materias').style.display='none';
    document.getElementById('admin').style.display='none';
    document.getElementById('asesor').style.display='block';
  }

  function mostrarAdmin(){
    document.getElementById('btn1').style.background='';
    document.getElementById('btn2').style.background='';
    document.getElementById('btn3').style.background='';
    document.getElementById('btn4').style.background='#1CD5AA';
    document.getElementById('inicio').style.display='none';
    document.getElementById('materias').style.display='none';
    document.getElementById('admin').style.display='block';
    document.getElementById('asesor').style.display='none';
}
</script>
