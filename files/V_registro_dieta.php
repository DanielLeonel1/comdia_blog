<?php 

require 'admin/config.php';
require 'functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

require 'V_header.php';

$usu_id_diabetes = $_SESSION['usu_id_diabetes'];


//print_r($_SESSION);

//////////////VERDURA/////////////////
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 8 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$verdura = $sentencia->fetchAll(PDO::FETCH_OBJ);


//////////////LEGUIMINOSAS/////////////////
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 7 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$leguminosas = $sentencia->fetchAll(PDO::FETCH_OBJ);


//////////////LECHE//////////////////
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 6 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$leche = $sentencia->fetchAll(PDO::FETCH_OBJ);


//////////////GRASAS SIN PROTEINA//////////////////
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 5 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$grasas_sin = $sentencia->fetchAll(PDO::FETCH_OBJ);


//////////////GRASAS CON PROTEINA//////////////////
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 4 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$grasas_con = $sentencia->fetchAll(PDO::FETCH_OBJ);


//////////////FRUTAS//////////////////
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 3 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$frutas = $sentencia->fetchAll(PDO::FETCH_OBJ);


//////////////CEREALES//////////////////
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 2 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$cereales = $sentencia->fetchAll(PDO::FETCH_OBJ);


//////////////CEREALES//////////////////
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 1 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$origen_animal = $sentencia->fetchAll(PDO::FETCH_OBJ);



?>

<div class="container col-md-6">

  <div class="card">

    <div class="card-header" style="font-size: 20px; font-family:Calibri; text-align:center; background-color:#d4feff">
    REGISTRA TU DESAYUNO
    </div>

    <div class="card-body">
      <form method="POST" action="php/dieta.php">

        <div class="form-group row">
          <label for="#" class="col-sm-4 col-form-label" style="font-family:Arial; font-size:18px;">Verduras</label>
          <div class="col-sm-8">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="verdura" id="verdura">
              <?php

              foreach ($verdura as $dato) {
              ?>
              <option value= "<?=$dato->id_alimentos;?>"><?=$dato->alim_nombre;?></td>         

              <?php
                }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="#" class="col-sm-4 col-form-label" style="font-family:Arial; font-size:18px;">Leguminosas</label>
          <div class="col-sm-8">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="leguminosas" id="leguminosas">
              <?php

              foreach ($leguminosas as $dato) {
              ?>
              <option value= "<?=$dato->id_alimentos;?>"><?=$dato->alim_nombre;?></td>         

              <?php
                }
              ?>
            </select>
          </div>
        </div>



        <div class="form-group row">
          <label for="#" class="col-sm-4 col-form-label" style="font-family:Arial; font-size:18px;">Leche</label>
          <div class="col-sm-8">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="leche" id="leche">

              <?php

              foreach ($leche as $dato) {
              ?>
              <option value= "<?=$dato->id_alimentos;?>"><?=$dato->alim_nombre;?></td>         

              <?php
                }
              ?>
            </select>
          </div>
        </div>


        <div class="form-group row">
          <label for="#" class="col-sm-4 col-form-label" style="font-family:Arial; font-size:18px;">Grasas sin Proteina</label>
          <div class="col-sm-8">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="grasas_sin" id="grasas_sin">
              <?php

              foreach ($grasas_sin as $dato) {
              ?>
              <option value= "<?=$dato->id_alimentos;?>"><?=$dato->alim_nombre;?></td>         

              <?php
                }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="#" class="col-sm-4 col-form-label" style="font-family:Arial; font-size:18px;">Grasas con Proteina</label>
          <div class="col-sm-8">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="grasas_con" id="grasas_con">
              <?php

              foreach ($grasas_con as $dato) {
              ?>
              <option value= "<?=$dato->id_alimentos;?>"><?=$dato->alim_nombre;?></td>         

              <?php
                }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="#" class="col-sm-4 col-form-label" style="font-family:Arial; font-size:18px;">Frutas</label>
          <div class="col-sm-8">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="frutas" id="frutas">
              <?php

              foreach ($frutas as $dato) {
              ?>
              <option value= "<?=$dato->id_alimentos;?>"><?=$dato->alim_nombre;?></td>         

              <?php
                }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="#" class="col-sm-4 col-form-label" style="font-family:Arial; font-size:18px;">Cereales</label>
          <div class="col-sm-8">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="cereales" id="cereales">
              <?php

              foreach ($cereales as $dato) {
              ?>
              <option value= "<?=$dato->id_alimentos;?>"><?=$dato->alim_nombre;?></td>         

              <?php
                }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="#" class="col-sm-4 col-form-label" style="font-family:Arial; font-size:18px;">Carnes</label>
          <div class="col-sm-8">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="origen_animal" id="origen_animal">
              <?php

              foreach ($origen_animal as $dato) {
              ?>
              <option value= "<?=$dato->id_alimentos;?>"><?=$dato->alim_nombre;?></td>         

              <?php
                }
              ?>
            </select>
          </div>
        </div>

        <button type="input" class="btn btn-primary col-sm-4">Registrar Dieta</button>

      </form>
    </div>



    <div class="card-footer" style="font-size: 15px; font-family:Calibri; text-align:center; background-color:#d4feff">
    ComDia
  </div>
  </div>
</div>





<?php  require 'V_footer.php'; ?>

<?php  require 'V_pie.php';  ?>