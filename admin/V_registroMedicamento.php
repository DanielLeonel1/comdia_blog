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
      <b>Añadir un nuevo Medicamento</b>
    </div>


  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Principio Activo</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Principio Activo">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Tiempo</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tiempo">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Efectos Adversos</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Efectos Adversos">
      </div>
      
      <div class="form-group">
        <label for="formGroupExampleInput">Tipo de Diabetes</label>

        <select class="custom-select" id="inputGroupSelect01">
          <option selected>Tipo de Diabetes</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

      </div>
      
  </form>




  </div>


  </div>
  
</div>













<?php
require 'V_admin_pie.php'; 
?>