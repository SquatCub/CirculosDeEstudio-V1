function mostrarInicio(){
  document.getElementById('btn1').style.background='#1CD5AA';
  document.getElementById('btn2').style.background='';
  document.getElementById('btn3').style.background='';
  document.getElementById('btn4').style.background='';
  document.getElementById('inicio').style.display='block';
  document.getElementById('materias').style.display='none';
  document.getElementById('admin').style.display='none';
  document.getElementById('tutor').style.display='none';
}

function mostrarMaterias(){
  document.getElementById('btn1').style.background='';
  document.getElementById('btn2').style.background='#1CD5AA';
  document.getElementById('btn3').style.background='';
  document.getElementById('btn4').style.background='';
  document.getElementById('inicio').style.display='none';
  document.getElementById('materias').style.display='block';
  document.getElementById('admin').style.display='none';
  document.getElementById('tutor').style.display='none';
}

function mostrarTutor(){
  document.getElementById('btn1').style.background='';
  document.getElementById('btn2').style.background='';
  document.getElementById('btn3').style.background='#1CD5AA';
  document.getElementById('btn4').style.background='';
  document.getElementById('inicio').style.display='none';
  document.getElementById('materias').style.display='none';
  document.getElementById('admin').style.display='none';
  document.getElementById('tutor').style.display='block';
}

function mostrarAdmin(){
  document.getElementById('btn1').style.background='';
  document.getElementById('btn2').style.background='';
  document.getElementById('btn3').style.background='';
  document.getElementById('btn4').style.background='#1CD5AA';
  document.getElementById('inicio').style.display='none';
  document.getElementById('materias').style.display='none';
  document.getElementById('admin').style.display='block';
  document.getElementById('tutor').style.display='none';
}
