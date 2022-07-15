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
      <b>Añadir un nuevo Alimento</b>
    </div>


  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Nombre del Alimento</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Cantidad del Alimento</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cantidad Recomendada">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Energia</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Energia">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Carbohidratos</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Carbohidratos">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Proteinas</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Proteinas">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Lipidos</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Lipidos">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Fibra</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Fibra">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Colesterol</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Colesterol">
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
      <div class="form-group">
        <label for="formGroupExampleInput2">Imagen del Alimento</label>
        <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="file">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Tipo de Alimento</label>
        <select class="custom-select" id="inputGroupSelect01">
          <option selected>Tipo de Alimento</option>
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