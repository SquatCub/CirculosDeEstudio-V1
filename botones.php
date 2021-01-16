
 <div class="formulario" id="inicio" style="display:none">
   <section>
     <p></p>
   </section>
 </div>

 <div class="formulario" id="materias" style="display:none">
   <?php
   include('horario.php');
    ?>
 </div>

 <div class="formulario" id="admin" style="display:none">
   <form action="valida_admin.php" name="miformulario" id="miformulario" method="post" >
     <section>
       <input type="text" name="usuario" id="usuario" placeholder="Usuario" value="" required>
     </section>
     <section>
       <input type="password" name="pass" id="pass" placeholder="Contraseña" required>
     </section>
     <button type="submit" class="formButton" value="Acceder" autofocus name="button">Acceder</button>
   </form>
 </div>

 <div class="formulario" id="asesor" style="display:none">
  <form action="valida_asesor.php" name="miformulario" id="miformulario" method="post" >
     <section>
       <input type="text" name="usuario" id="usuario" placeholder="No. control">
     </section>
     <section>
       <input type="password" name="pass" id="pass" placeholder="Contraseña">
     </section>
    <button type="submit" class="formButton" value="Acceder" autofocus name="button">Acceder</button>
  </form>
 </div>
</div>
