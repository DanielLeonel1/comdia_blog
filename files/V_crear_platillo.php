<?php 

require 'admin/config.php';
require 'functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

date_default_timezone_set('America/Mexico_City');
$fechaActual = date('Y-m-d H:i');

require 'V_header.php';


if (!$_SESSION) {
   echo '
    <script>
        alert("INICIA SESSION ANTES");
        window.location = "error.php";
    </script>
    ';
    die();
}

?>
<form method="POST" action="">
<div class="container col-md-10" style="padding-bottom: 0px">
  <div class="card text-center">
    <div class="card-header" style="font-size: 30px; background-color: #ff7800; color: white;">
    CREAR PLATILLO
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="col">
                <label>Tipo de platillo</label>
                <div class="input-group justify-content-md-center">
                    <select class="form-control" name="tipo_platillo" id="tipo">
                        <option value="Desayuno">Desayuno</option>
                        <option value="Comida">Comida</option>
                        <option value="Cena">Cena</option>
                    </select>
                </div>
            </div>
            
            <div class="col">
            <label>Fecha y hora de consumo</label>
                <div class="input-group justify-content-md-center">
                    <input type="datetime" class="form-control" name="fecha_hora_platillo" id="fechahora" value="<?=$fechaActual; ?>">
                </div>
            </div>
        </div>
        <br>
        <div>
        <button type="submit" name="registrar" id="registrar" class="btn btn-primary col-10">Crear</button>
        </div> 

    </div>

  </div>
</div>
</form>

<?php  require 'V_footer.php'; ?>

<?php  require 'V_pie.php';  ?>