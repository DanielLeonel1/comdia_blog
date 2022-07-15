<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

?>

<div class="container col-md-7" style="margin-top: 20px; margin-bottom: 30px;">
  <div class="card" >

    <div class="card-header" style="background-color: #ff6c00; color: white; font-size: 20px; text-align: center;">
      <b>Añadir un nuevo Ejercicio</b>
    </div>


  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Nombre del Ejercicio</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre del Ejercicio">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Ritmo</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ritmo">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Repeticiones</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Repeticiones">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Musculo a Trabajar</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Musculo a Trabajar">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Imagen</label>
        <input type="file" class="form-control" id="formGroupExampleInput" placeholder="Imagen">
      </div>
      
      
      
  </form>




  </div>


  </div>
  
</div>













<?php
require 'V_admin_pie.php'; 
?>